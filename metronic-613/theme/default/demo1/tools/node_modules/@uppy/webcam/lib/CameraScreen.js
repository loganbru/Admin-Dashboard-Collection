function _inheritsLoose(subClass, superClass) { subClass.prototype = Object.create(superClass.prototype); subClass.prototype.constructor = subClass; subClass.__proto__ = superClass; }

var _require = require('preact'),
    h = _require.h,
    Component = _require.Component;

var SnapshotButton = require('./SnapshotButton');

var RecordButton = require('./RecordButton');

var RecordingLength = require('./RecordingLength');

var VideoSourceSelect = require('./VideoSourceSelect');

function isModeAvailable(modes, mode) {
  return modes.indexOf(mode) !== -1;
}

var CameraScreen = /*#__PURE__*/function (_Component) {
  _inheritsLoose(CameraScreen, _Component);

  function CameraScreen() {
    return _Component.apply(this, arguments) || this;
  }

  var _proto = CameraScreen.prototype;

  _proto.componentDidMount = function componentDidMount() {
    this.props.onFocus();
  };

  _proto.componentWillUnmount = function componentWillUnmount() {
    this.props.onStop();
  };

  _proto.render = function render() {
    var shouldShowRecordButton = this.props.supportsRecording && (isModeAvailable(this.props.modes, 'video-only') || isModeAvailable(this.props.modes, 'audio-only') || isModeAvailable(this.props.modes, 'video-audio'));
    var shouldShowSnapshotButton = isModeAvailable(this.props.modes, 'picture');
    var shouldShowRecordingLength = this.props.supportsRecording && this.props.showRecordingLength;
    var shouldShowVideoSourceDropdown = this.props.showVideoSourceDropdown && this.props.videoSources && this.props.videoSources.length > 1;
    return h("div", {
      class: "uppy uppy-Webcam-container"
    }, h("div", {
      class: "uppy-Webcam-videoContainer"
    }, h("video", {
      class: "uppy-Webcam-video  " + (this.props.mirror ? 'uppy-Webcam-video--mirrored' : ''),
      autoplay: true,
      muted: true,
      playsinline: true,
      srcObject: this.props.src || ''
    })), h("div", {
      class: "uppy-Webcam-footer"
    }, h("div", {
      class: "uppy-Webcam-videoSourceContainer"
    }, shouldShowVideoSourceDropdown ? VideoSourceSelect(this.props) : null), h("div", {
      class: "uppy-Webcam-buttonContainer"
    }, shouldShowSnapshotButton ? SnapshotButton(this.props) : null, ' ', shouldShowRecordButton ? RecordButton(this.props) : null), h("div", {
      class: "uppy-Webcam-recordingLength"
    }, shouldShowRecordingLength ? RecordingLength(this.props) : null)));
  };

  return CameraScreen;
}(Component);

module.exports = CameraScreen;