function _extends() { _extends = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; }; return _extends.apply(this, arguments); }

var getFileNameAndExtension = require('@uppy/utils/lib/getFileNameAndExtension');

module.exports = function remoteFileObjToLocal(file) {
  return _extends({}, file, {
    type: file.mimeType,
    extension: file.name ? getFileNameAndExtension(file.name).extension : null
  });
};