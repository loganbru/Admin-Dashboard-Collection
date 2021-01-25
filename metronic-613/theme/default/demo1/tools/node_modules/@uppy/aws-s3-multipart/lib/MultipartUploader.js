function _extends() { _extends = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; }; return _extends.apply(this, arguments); }

var _require = require('@uppy/utils/lib/AbortController'),
    AbortController = _require.AbortController,
    createAbortError = _require.createAbortError;

var delay = require('@uppy/utils/lib/delay');

var MB = 1024 * 1024;
var defaultOptions = {
  limit: 1,
  retryDelays: [0, 1000, 3000, 5000],
  getChunkSize: function getChunkSize(file) {
    return Math.ceil(file.size / 10000);
  },
  onStart: function onStart() {},
  onProgress: function onProgress() {},
  onPartComplete: function onPartComplete() {},
  onSuccess: function onSuccess() {},
  onError: function onError(err) {
    throw err;
  }
};

function ensureInt(value) {
  if (typeof value === 'string') {
    return parseInt(value, 10);
  }

  if (typeof value === 'number') {
    return value;
  }

  throw new TypeError('Expected a number');
}

var MultipartUploader = /*#__PURE__*/function () {
  function MultipartUploader(file, options) {
    this.options = _extends({}, defaultOptions, options); // Use default `getChunkSize` if it was null or something

    if (!this.options.getChunkSize) {
      this.options.getChunkSize = defaultOptions.getChunkSize;
    }

    this.file = file;
    this.abortController = new AbortController();
    this.key = this.options.key || null;
    this.uploadId = this.options.uploadId || null;
    this.parts = []; // Do `this.createdPromise.then(OP)` to execute an operation `OP` _only_ if the
    // upload was created already. That also ensures that the sequencing is right
    // (so the `OP` definitely happens if the upload is created).
    //
    // This mostly exists to make `_abortUpload` work well: only sending the abort request if
    // the upload was already created, and if the createMultipartUpload request is still in flight,
    // aborting it immediately after it finishes.

    this.createdPromise = Promise.reject(); // eslint-disable-line prefer-promise-reject-errors

    this.isPaused = false;
    this.partsInProgress = 0;
    this.chunks = null;
    this.chunkState = null;

    this._initChunks();

    this.createdPromise.catch(function () {}); // silence uncaught rejection warning
  }
  /**
   * Was this upload aborted?
   *
   * If yes, we may need to throw an AbortError.
   *
   * @returns {boolean}
   */


  var _proto = MultipartUploader.prototype;

  _proto._aborted = function _aborted() {
    return this.abortController.signal.aborted;
  };

  _proto._initChunks = function _initChunks() {
    var chunks = [];
    var desiredChunkSize = this.options.getChunkSize(this.file); // at least 5MB per request, at most 10k requests

    var minChunkSize = Math.max(5 * MB, Math.ceil(this.file.size / 10000));
    var chunkSize = Math.max(desiredChunkSize, minChunkSize); // Upload zero-sized files in one zero-sized chunk

    if (this.file.size === 0) {
      chunks.push(this.file);
    } else {
      for (var i = 0; i < this.file.size; i += chunkSize) {
        var end = Math.min(this.file.size, i + chunkSize);
        chunks.push(this.file.slice(i, end));
      }
    }

    this.chunks = chunks;
    this.chunkState = chunks.map(function () {
      return {
        uploaded: 0,
        busy: false,
        done: false
      };
    });
  };

  _proto._createUpload = function _createUpload() {
    var _this = this;

    this.createdPromise = Promise.resolve().then(function () {
      return _this.options.createMultipartUpload();
    });
    return this.createdPromise.then(function (result) {
      if (_this._aborted()) throw createAbortError();
      var valid = typeof result === 'object' && result && typeof result.uploadId === 'string' && typeof result.key === 'string';

      if (!valid) {
        throw new TypeError('AwsS3/Multipart: Got incorrect result from `createMultipartUpload()`, expected an object `{ uploadId, key }`.');
      }

      _this.key = result.key;
      _this.uploadId = result.uploadId;

      _this.options.onStart(result);

      _this._uploadParts();
    }).catch(function (err) {
      _this._onError(err);
    });
  };

  _proto._resumeUpload = function _resumeUpload() {
    var _this2 = this;

    return Promise.resolve().then(function () {
      return _this2.options.listParts({
        uploadId: _this2.uploadId,
        key: _this2.key
      });
    }).then(function (parts) {
      if (_this2._aborted()) throw createAbortError();
      parts.forEach(function (part) {
        var i = part.PartNumber - 1;
        _this2.chunkState[i] = {
          uploaded: ensureInt(part.Size),
          etag: part.ETag,
          done: true
        }; // Only add if we did not yet know about this part.

        if (!_this2.parts.some(function (p) {
          return p.PartNumber === part.PartNumber;
        })) {
          _this2.parts.push({
            PartNumber: part.PartNumber,
            ETag: part.ETag
          });
        }
      });

      _this2._uploadParts();
    }).catch(function (err) {
      _this2._onError(err);
    });
  };

  _proto._uploadParts = function _uploadParts() {
    var _this3 = this;

    if (this.isPaused) return;
    var need = this.options.limit - this.partsInProgress;
    if (need === 0) return; // All parts are uploaded.

    if (this.chunkState.every(function (state) {
      return state.done;
    })) {
      this._completeUpload();

      return;
    }

    var candidates = [];

    for (var i = 0; i < this.chunkState.length; i++) {
      var state = this.chunkState[i];
      if (state.done || state.busy) continue;
      candidates.push(i);

      if (candidates.length >= need) {
        break;
      }
    }

    candidates.forEach(function (index) {
      _this3._uploadPartRetryable(index).then(function () {
        // Continue uploading parts
        _this3._uploadParts();
      }, function (err) {
        _this3._onError(err);
      });
    });
  };

  _proto._retryable = function _retryable(_ref) {
    var _this4 = this;

    var before = _ref.before,
        attempt = _ref.attempt,
        after = _ref.after;
    var retryDelays = this.options.retryDelays;
    var signal = this.abortController.signal;
    if (before) before();

    function shouldRetry(err) {
      if (err.source && typeof err.source.status === 'number') {
        var status = err.source.status; // 0 probably indicates network failure

        return status === 0 || status === 409 || status === 423 || status >= 500 && status < 600;
      }

      return false;
    }

    var doAttempt = function doAttempt(retryAttempt) {
      return attempt().catch(function (err) {
        if (_this4._aborted()) throw createAbortError();

        if (shouldRetry(err) && retryAttempt < retryDelays.length) {
          return delay(retryDelays[retryAttempt], {
            signal: signal
          }).then(function () {
            return doAttempt(retryAttempt + 1);
          });
        } else {
          throw err;
        }
      });
    };

    return doAttempt(0).then(function (result) {
      if (after) after();
      return result;
    }, function (err) {
      if (after) after();
      throw err;
    });
  };

  _proto._uploadPartRetryable = function _uploadPartRetryable(index) {
    var _this5 = this;

    return this._retryable({
      before: function before() {
        _this5.partsInProgress += 1;
      },
      attempt: function attempt() {
        return _this5._uploadPart(index);
      },
      after: function after() {
        _this5.partsInProgress -= 1;
      }
    });
  };

  _proto._uploadPart = function _uploadPart(index) {
    var _this6 = this;

    var body = this.chunks[index];
    this.chunkState[index].busy = true;
    return Promise.resolve().then(function () {
      return _this6.options.prepareUploadPart({
        key: _this6.key,
        uploadId: _this6.uploadId,
        body: body,
        number: index + 1
      });
    }).then(function (result) {
      var valid = typeof result === 'object' && result && typeof result.url === 'string';

      if (!valid) {
        throw new TypeError('AwsS3/Multipart: Got incorrect result from `prepareUploadPart()`, expected an object `{ url }`.');
      }

      return result;
    }).then(function (_ref2) {
      var url = _ref2.url,
          headers = _ref2.headers;

      if (_this6._aborted()) {
        _this6.chunkState[index].busy = false;
        throw createAbortError();
      }

      return _this6._uploadPartBytes(index, url, headers);
    });
  };

  _proto._onPartProgress = function _onPartProgress(index, sent, total) {
    this.chunkState[index].uploaded = ensureInt(sent);
    var totalUploaded = this.chunkState.reduce(function (n, c) {
      return n + c.uploaded;
    }, 0);
    this.options.onProgress(totalUploaded, this.file.size);
  };

  _proto._onPartComplete = function _onPartComplete(index, etag) {
    this.chunkState[index].etag = etag;
    this.chunkState[index].done = true;
    var part = {
      PartNumber: index + 1,
      ETag: etag
    };
    this.parts.push(part);
    this.options.onPartComplete(part);
  };

  _proto._uploadPartBytes = function _uploadPartBytes(index, url, headers) {
    var _this7 = this;

    var body = this.chunks[index];
    var signal = this.abortController.signal;
    var defer;
    var promise = new Promise(function (resolve, reject) {
      defer = {
        resolve: resolve,
        reject: reject
      };
    });
    var xhr = new XMLHttpRequest();
    xhr.open('PUT', url, true);

    if (headers) {
      Object.keys(headers).map(function (key) {
        xhr.setRequestHeader(key, headers[key]);
      });
    }

    xhr.responseType = 'text';

    function cleanup() {
      signal.removeEventListener('abort', onabort);
    }

    function onabort() {
      xhr.abort();
    }

    signal.addEventListener('abort', onabort);
    xhr.upload.addEventListener('progress', function (ev) {
      if (!ev.lengthComputable) return;

      _this7._onPartProgress(index, ev.loaded, ev.total);
    });
    xhr.addEventListener('abort', function (ev) {
      cleanup();
      _this7.chunkState[index].busy = false;
      defer.reject(createAbortError());
    });
    xhr.addEventListener('load', function (ev) {
      cleanup();
      _this7.chunkState[index].busy = false;

      if (ev.target.status < 200 || ev.target.status >= 300) {
        var error = new Error('Non 2xx');
        error.source = ev.target;
        defer.reject(error);
        return;
      }

      _this7._onPartProgress(index, body.size, body.size); // NOTE This must be allowed by CORS.


      var etag = ev.target.getResponseHeader('ETag');

      if (etag === null) {
        defer.reject(new Error('AwsS3/Multipart: Could not read the ETag header. This likely means CORS is not configured correctly on the S3 Bucket. Seee https://uppy.io/docs/aws-s3-multipart#S3-Bucket-Configuration for instructions.'));
        return;
      }

      _this7._onPartComplete(index, etag);

      defer.resolve();
    });
    xhr.addEventListener('error', function (ev) {
      cleanup();
      _this7.chunkState[index].busy = false;
      var error = new Error('Unknown error');
      error.source = ev.target;
      defer.reject(error);
    });
    xhr.send(body);
    return promise;
  };

  _proto._completeUpload = function _completeUpload() {
    var _this8 = this;

    // Parts may not have completed uploading in sorted order, if limit > 1.
    this.parts.sort(function (a, b) {
      return a.PartNumber - b.PartNumber;
    });
    return Promise.resolve().then(function () {
      return _this8.options.completeMultipartUpload({
        key: _this8.key,
        uploadId: _this8.uploadId,
        parts: _this8.parts
      });
    }).then(function (result) {
      _this8.options.onSuccess(result);
    }, function (err) {
      _this8._onError(err);
    });
  };

  _proto._abortUpload = function _abortUpload() {
    var _this9 = this;

    this.abortController.abort();
    this.createdPromise.then(function () {
      _this9.options.abortMultipartUpload({
        key: _this9.key,
        uploadId: _this9.uploadId
      });
    }, function () {// if the creation failed we do not need to abort
    });
  };

  _proto._onError = function _onError(err) {
    if (err && err.name === 'AbortError') {
      return;
    }

    this.options.onError(err);
  };

  _proto.start = function start() {
    this.isPaused = false;

    if (this.uploadId) {
      this._resumeUpload();
    } else {
      this._createUpload();
    }
  };

  _proto.pause = function pause() {
    this.abortController.abort(); // Swap it out for a new controller, because this instance may be resumed later.

    this.abortController = new AbortController();
    this.isPaused = true;
  };

  _proto.abort = function abort(opts) {
    if (opts === void 0) {
      opts = {};
    }

    var really = opts.really || false;
    if (!really) return this.pause();

    this._abortUpload();
  };

  return MultipartUploader;
}();

module.exports = MultipartUploader;