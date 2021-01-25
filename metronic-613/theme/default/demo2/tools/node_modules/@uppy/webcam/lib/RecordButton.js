var _require = require('preact'),
    h = _require.h;

module.exports = function RecordButton(_ref) {
  var recording = _ref.recording,
      onStartRecording = _ref.onStartRecording,
      onStopRecording = _ref.onStopRecording,
      i18n = _ref.i18n;

  if (recording) {
    return h("button", {
      class: "uppy-u-reset uppy-c-btn uppy-Webcam-button uppy-Webcam-button--video",
      type: "button",
      title: i18n('stopRecording'),
      "aria-label": i18n('stopRecording'),
      onclick: onStopRecording,
      "data-uppy-super-focusable": true
    }, h("svg", {
      "aria-hidden": "true",
      focusable: "false",
      class: "uppy-c-icon",
      width: "100",
      height: "100",
      viewBox: "0 0 100 100"
    }, h("rect", {
      x: "15",
      y: "15",
      width: "70",
      height: "70"
    })));
  }

  return h("button", {
    class: "uppy-u-reset uppy-c-btn uppy-Webcam-button uppy-Webcam-button--video",
    type: "button",
    title: i18n('startRecording'),
    "aria-label": i18n('startRecording'),
    onclick: onStartRecording,
    "data-uppy-super-focusable": true
  }, h("svg", {
    "aria-hidden": "true",
    focusable: "false",
    class: "uppy-c-icon",
    width: "100",
    height: "100",
    viewBox: "0 0 100 100"
  }, h("circle", {
    cx: "50",
    cy: "50",
    r: "40"
  })));
};