function _extends() { _extends = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; }; return _extends.apply(this, arguments); }

var cuid = require('cuid');

var _require = require('@uppy/companion-client'),
    Provider = _require.Provider,
    RequestClient = _require.RequestClient,
    Socket = _require.Socket;

var emitSocketProgress = require('@uppy/utils/lib/emitSocketProgress');

var getSocketHost = require('@uppy/utils/lib/getSocketHost');

var EventTracker = require('@uppy/utils/lib/EventTracker');

var ProgressTimeout = require('@uppy/utils/lib/ProgressTimeout');

var NetworkError = require('@uppy/utils/lib/NetworkError');

var isNetworkError = require('@uppy/utils/lib/isNetworkError'); // See XHRUpload


function buildResponseError(xhr, error) {
  // No error message
  if (!error) error = new Error('Upload error'); // Got an error message string

  if (typeof error === 'string') error = new Error(error); // Got something else

  if (!(error instanceof Error)) {
    error = _extends(new Error('Upload error'), {
      data: error
    });
  }

  if (isNetworkError(xhr)) {
    error = new NetworkError(error, xhr);
    return error;
  }

  error.request = xhr;
  return error;
} // See XHRUpload


function setTypeInBlob(file) {
  var dataWithUpdatedType = file.data.slice(0, file.data.size, file.meta.type);
  return dataWithUpdatedType;
}

module.exports = /*#__PURE__*/function () {
  function MiniXHRUpload(uppy, opts) {
    this.uppy = uppy;
    this.opts = _extends({
      validateStatus: function validateStatus(status, responseText, response) {
        return status >= 200 && status < 300;
      }
    }, opts);
    this.requests = opts.__queue;
    this.uploaderEvents = Object.create(null);
    this.i18n = opts.i18n;
  }

  var _proto = MiniXHRUpload.prototype;

  _proto._getOptions = function _getOptions(file) {
    var uppy = this.uppy;
    var overrides = uppy.getState().xhrUpload;

    var opts = _extends({}, this.opts, overrides || {}, file.xhrUpload || {}, {
      headers: {}
    });

    _extends(opts.headers, this.opts.headers);

    if (overrides) {
      _extends(opts.headers, overrides.headers);
    }

    if (file.xhrUpload) {
      _extends(opts.headers, file.xhrUpload.headers);
    }

    return opts;
  };

  _proto.uploadFile = function uploadFile(id, current, total) {
    var file = this.uppy.getFile(id);

    if (file.error) {
      throw new Error(file.error);
    } else if (file.isRemote) {
      return this._uploadRemoteFile(file, current, total);
    }

    return this._uploadLocalFile(file, current, total);
  };

  _proto._addMetadata = function _addMetadata(formData, meta, opts) {
    var metaFields = Array.isArray(opts.metaFields) ? opts.metaFields // Send along all fields by default.
    : Object.keys(meta);
    metaFields.forEach(function (item) {
      formData.append(item, meta[item]);
    });
  };

  _proto._createFormDataUpload = function _createFormDataUpload(file, opts) {
    var formPost = new FormData();

    this._addMetadata(formPost, file.meta, opts);

    var dataWithUpdatedType = setTypeInBlob(file);

    if (file.name) {
      formPost.append(opts.fieldName, dataWithUpdatedType, file.meta.name);
    } else {
      formPost.append(opts.fieldName, dataWithUpdatedType);
    }

    return formPost;
  };

  _proto._createBareUpload = function _createBareUpload(file, opts) {
    return file.data;
  };

  _proto._onFileRemoved = function _onFileRemoved(fileID, cb) {
    this.uploaderEvents[fileID].on('file-removed', function (file) {
      if (fileID === file.id) cb(file.id);
    });
  };

  _proto._onRetry = function _onRetry(fileID, cb) {
    this.uploaderEvents[fileID].on('upload-retry', function (targetFileID) {
      if (fileID === targetFileID) {
        cb();
      }
    });
  };

  _proto._onRetryAll = function _onRetryAll(fileID, cb) {
    var _this = this;

    this.uploaderEvents[fileID].on('retry-all', function (filesToRetry) {
      if (!_this.uppy.getFile(fileID)) return;
      cb();
    });
  };

  _proto._onCancelAll = function _onCancelAll(fileID, cb) {
    var _this2 = this;

    this.uploaderEvents[fileID].on('cancel-all', function () {
      if (!_this2.uppy.getFile(fileID)) return;
      cb();
    });
  };

  _proto._uploadLocalFile = function _uploadLocalFile(file, current, total) {
    var _this3 = this;

    var opts = this._getOptions(file);

    this.uppy.log("uploading " + current + " of " + total);
    return new Promise(function (resolve, reject) {
      // This is done in index.js in the S3 plugin.
      // this.uppy.emit('upload-started', file)
      var data = opts.formData ? _this3._createFormDataUpload(file, opts) : _this3._createBareUpload(file, opts);
      var xhr = new XMLHttpRequest();
      _this3.uploaderEvents[file.id] = new EventTracker(_this3.uppy);
      var timer = new ProgressTimeout(opts.timeout, function () {
        xhr.abort();
        queuedRequest.done();
        var error = new Error(_this3.i18n('timedOut', {
          seconds: Math.ceil(opts.timeout / 1000)
        }));

        _this3.uppy.emit('upload-error', file, error);

        reject(error);
      });
      var id = cuid();
      xhr.upload.addEventListener('loadstart', function (ev) {
        _this3.uppy.log("[AwsS3/XHRUpload] " + id + " started");
      });
      xhr.upload.addEventListener('progress', function (ev) {
        _this3.uppy.log("[AwsS3/XHRUpload] " + id + " progress: " + ev.loaded + " / " + ev.total); // Begin checking for timeouts when progress starts, instead of loading,
        // to avoid timing out requests on browser concurrency queue


        timer.progress();

        if (ev.lengthComputable) {
          _this3.uppy.emit('upload-progress', file, {
            uploader: _this3,
            bytesUploaded: ev.loaded,
            bytesTotal: ev.total
          });
        }
      });
      xhr.addEventListener('load', function (ev) {
        _this3.uppy.log("[AwsS3/XHRUpload] " + id + " finished");

        timer.done();
        queuedRequest.done();

        if (_this3.uploaderEvents[file.id]) {
          _this3.uploaderEvents[file.id].remove();

          _this3.uploaderEvents[file.id] = null;
        }

        if (opts.validateStatus(ev.target.status, xhr.responseText, xhr)) {
          var body = opts.getResponseData(xhr.responseText, xhr);
          var uploadURL = body[opts.responseUrlFieldName];
          var uploadResp = {
            status: ev.target.status,
            body: body,
            uploadURL: uploadURL
          };

          _this3.uppy.emit('upload-success', file, uploadResp);

          if (uploadURL) {
            _this3.uppy.log("Download " + file.name + " from " + uploadURL);
          }

          return resolve(file);
        } else {
          var _body = opts.getResponseData(xhr.responseText, xhr);

          var error = buildResponseError(xhr, opts.getResponseError(xhr.responseText, xhr));
          var response = {
            status: ev.target.status,
            body: _body
          };

          _this3.uppy.emit('upload-error', file, error, response);

          return reject(error);
        }
      });
      xhr.addEventListener('error', function (ev) {
        _this3.uppy.log("[AwsS3/XHRUpload] " + id + " errored");

        timer.done();
        queuedRequest.done();

        if (_this3.uploaderEvents[file.id]) {
          _this3.uploaderEvents[file.id].remove();

          _this3.uploaderEvents[file.id] = null;
        }

        var error = buildResponseError(xhr, opts.getResponseError(xhr.responseText, xhr));

        _this3.uppy.emit('upload-error', file, error);

        return reject(error);
      });
      xhr.open(opts.method.toUpperCase(), opts.endpoint, true); // IE10 does not allow setting `withCredentials` and `responseType`
      // before `open()` is called.

      xhr.withCredentials = opts.withCredentials;

      if (opts.responseType !== '') {
        xhr.responseType = opts.responseType;
      }

      Object.keys(opts.headers).forEach(function (header) {
        xhr.setRequestHeader(header, opts.headers[header]);
      });

      var queuedRequest = _this3.requests.run(function () {
        xhr.send(data);
        return function () {
          timer.done();
          xhr.abort();
        };
      }, {
        priority: 1
      });

      _this3._onFileRemoved(file.id, function () {
        queuedRequest.abort();
        reject(new Error('File removed'));
      });

      _this3._onCancelAll(file.id, function () {
        queuedRequest.abort();
        reject(new Error('Upload cancelled'));
      });
    });
  };

  _proto._uploadRemoteFile = function _uploadRemoteFile(file, current, total) {
    var _this4 = this;

    var opts = this._getOptions(file);

    return new Promise(function (resolve, reject) {
      // This is done in index.js in the S3 plugin.
      // this.uppy.emit('upload-started', file)
      var fields = {};
      var metaFields = Array.isArray(opts.metaFields) ? opts.metaFields // Send along all fields by default.
      : Object.keys(file.meta);
      metaFields.forEach(function (name) {
        fields[name] = file.meta[name];
      });
      var Client = file.remote.providerOptions.provider ? Provider : RequestClient;
      var client = new Client(_this4.uppy, file.remote.providerOptions);
      client.post(file.remote.url, _extends({}, file.remote.body, {
        endpoint: opts.endpoint,
        size: file.data.size,
        fieldname: opts.fieldName,
        metadata: fields,
        httpMethod: opts.method,
        useFormData: opts.formData,
        headers: opts.headers
      })).then(function (res) {
        var token = res.token;
        var host = getSocketHost(file.remote.companionUrl);
        var socket = new Socket({
          target: host + "/api/" + token,
          autoOpen: false
        });
        _this4.uploaderEvents[file.id] = new EventTracker(_this4.uppy);

        _this4._onFileRemoved(file.id, function () {
          socket.send('pause', {});
          queuedRequest.abort();
          resolve("upload " + file.id + " was removed");
        });

        _this4._onCancelAll(file.id, function () {
          socket.send('pause', {});
          queuedRequest.abort();
          resolve("upload " + file.id + " was canceled");
        });

        _this4._onRetry(file.id, function () {
          socket.send('pause', {});
          socket.send('resume', {});
        });

        _this4._onRetryAll(file.id, function () {
          socket.send('pause', {});
          socket.send('resume', {});
        });

        socket.on('progress', function (progressData) {
          return emitSocketProgress(_this4, progressData, file);
        });
        socket.on('success', function (data) {
          var body = opts.getResponseData(data.response.responseText, data.response);
          var uploadURL = body[opts.responseUrlFieldName];
          var uploadResp = {
            status: data.response.status,
            body: body,
            uploadURL: uploadURL
          };

          _this4.uppy.emit('upload-success', file, uploadResp);

          queuedRequest.done();

          if (_this4.uploaderEvents[file.id]) {
            _this4.uploaderEvents[file.id].remove();

            _this4.uploaderEvents[file.id] = null;
          }

          return resolve();
        });
        socket.on('error', function (errData) {
          var resp = errData.response;
          var error = resp ? opts.getResponseError(resp.responseText, resp) : _extends(new Error(errData.error.message), {
            cause: errData.error
          });

          _this4.uppy.emit('upload-error', file, error);

          queuedRequest.done();

          if (_this4.uploaderEvents[file.id]) {
            _this4.uploaderEvents[file.id].remove();

            _this4.uploaderEvents[file.id] = null;
          }

          reject(error);
        });

        var queuedRequest = _this4.requests.run(function () {
          socket.open();

          if (file.isPaused) {
            socket.send('pause', {});
          }

          return function () {
            return socket.close();
          };
        });
      }).catch(function (err) {
        _this4.uppy.emit('upload-error', file, err);

        reject(err);
      });
    });
  };

  return MiniXHRUpload;
}();