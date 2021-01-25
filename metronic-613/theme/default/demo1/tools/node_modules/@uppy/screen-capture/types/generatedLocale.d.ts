import Uppy = require('@uppy/core')

type ScreenCaptureLocale = Uppy.Locale<
  | 'startCapturing'
  | 'stopCapturing'
  | 'submitRecordedFile'
  | 'streamActive'
  | 'streamPassive'
  | 'micDisabled'
  | 'recording'
>

export = ScreenCaptureLocale
