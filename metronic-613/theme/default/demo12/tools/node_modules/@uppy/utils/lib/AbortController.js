/**
 * Little AbortController proxy module so we can swap out the implementation easily later.
 */
var _require = require('abortcontroller-polyfill/dist/abortcontroller'),
    AbortController = _require.AbortController,
    AbortSignal = _require.AbortSignal;

function createAbortError(message) {
  if (message === void 0) {
    message = 'Aborted';
  }

  try {
    return new DOMException(message, 'AbortError');
  } catch (_unused) {
    // For Internet Explorer
    var error = new Error(message);
    error.name = 'AbortError';
    return error;
  }
}

exports.AbortController = AbortController;
exports.AbortSignal = AbortSignal;
exports.createAbortError = createAbortError;