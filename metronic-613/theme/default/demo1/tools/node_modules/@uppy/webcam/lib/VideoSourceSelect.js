var _require = require('preact'),
    h = _require.h;

module.exports = function (_ref) {
  var currentDeviceId = _ref.currentDeviceId,
      videoSources = _ref.videoSources,
      onChangeVideoSource = _ref.onChangeVideoSource;
  return h("div", {
    className: "uppy-Webcam-videoSource"
  }, h("select", {
    className: "uppy-u-reset uppy-Webcam-videoSource-select",
    onchange: function onchange(event) {
      onChangeVideoSource(event.target.value);
    }
  }, videoSources.map(function (videoSource) {
    return h("option", {
      key: videoSource.deviceId,
      value: videoSource.deviceId,
      selected: videoSource.deviceId === currentDeviceId
    }, videoSource.label);
  })));
};