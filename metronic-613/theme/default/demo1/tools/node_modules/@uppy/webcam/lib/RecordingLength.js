var _require = require('preact'),
    h = _require.h;

var formatSeconds = require('./formatSeconds');

module.exports = function RecordingLength(_ref) {
  var recordingLengthSeconds = _ref.recordingLengthSeconds,
      i18n = _ref.i18n;
  var formattedRecordingLengthSeconds = formatSeconds(recordingLengthSeconds);
  return h("span", {
    "aria-label": i18n('recordingLength', {
      recording_length: formattedRecordingLengthSeconds
    })
  }, formattedRecordingLengthSeconds);
};