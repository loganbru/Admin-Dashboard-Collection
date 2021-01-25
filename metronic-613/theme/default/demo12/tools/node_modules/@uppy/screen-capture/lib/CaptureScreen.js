function _extends() { _extends = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; }; return _extends.apply(this, arguments); }

function _inheritsLoose(subClass, superClass) { subClass.prototype = Object.create(superClass.prototype); subClass.prototype.constructor = subClass; subClass.__proto__ = superClass; }

var _require = require('preact'),
    h = _require.h,
    Component = _require.Component;

var RecordButton = require('./RecordButton');

var SubmitButton = require('./SubmitButton');

var StopWatch = require('./StopWatch');

var StreamStatus = require('./StreamStatus');

var RecorderScreen = /*#__PURE__*/function (_Component) {
  _inheritsLoose(RecorderScreen, _Component);

  function RecorderScreen() {
    return _Component.apply(this, arguments) || this;
  }

  var _proto = RecorderScreen.prototype;

  _proto.componentWillUnmount = function componentWillUnmount() {
    this.props.onStop();
  };

  _proto.render = function render() {
    var _this = this;

    var _this$props = this.props,
        recording = _this$props.recording,
        videoStream = _this$props.stream,
        recordedVideo = _this$props.recordedVideo;
    var videoProps = {
      playsinline: true
    }; // show stream

    if (recording || !recordedVideo && !recording) {
      videoProps.muted = true;
      videoProps.autoplay = true;
      videoProps.srcObject = videoStream;
    } // show preview


    if (recordedVideo && !recording) {
      videoProps.muted = false;
      videoProps.controls = true;
      videoProps.src = recordedVideo; // reset srcObject in dom. If not resetted, stream sticks in element

      if (this.videoElement) {
        this.videoElement.srcObject = undefined;
      }
    }

    return h("div", {
      class: "uppy uppy-ScreenCapture-container"
    }, h("div", {
      class: "uppy-ScreenCapture-videoContainer"
    }, h(StreamStatus, this.props), h("video", _extends({
      ref: function ref(videoElement) {
        return _this.videoElement = videoElement;
      },
      class: "uppy-ScreenCapture-video"
    }, videoProps)), h(StopWatch, this.props)), h("div", {
      class: "uppy-ScreenCapture-buttonContainer"
    }, h(RecordButton, this.props), h(SubmitButton, this.props)));
  };

  return RecorderScreen;
}(Component);

module.exports = RecorderScreen;