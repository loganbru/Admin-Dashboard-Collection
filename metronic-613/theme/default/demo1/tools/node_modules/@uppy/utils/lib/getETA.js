var getSpeed = require('./getSpeed');

var getBytesRemaining = require('./getBytesRemaining');

module.exports = function getETA(fileProgress) {
  if (!fileProgress.bytesUploaded) return 0;
  var uploadSpeed = getSpeed(fileProgress);
  var bytesRemaining = getBytesRemaining(fileProgress);
  var secondsRemaining = Math.round(bytesRemaining / uploadSpeed * 10) / 10;
  return secondsRemaining;
};