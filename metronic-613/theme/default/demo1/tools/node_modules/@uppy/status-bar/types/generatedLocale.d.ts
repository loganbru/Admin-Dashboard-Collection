import Uppy = require('@uppy/core')

type StatusBarLocale = Uppy.Locale<
  | 'uploading'
  | 'upload'
  | 'complete'
  | 'uploadFailed'
  | 'paused'
  | 'retry'
  | 'retryUpload'
  | 'cancel'
  | 'pause'
  | 'resume'
  | 'done'
  | 'filesUploadedOfTotal'
  | 'dataUploadedOfTotal'
  | 'xTimeLeft'
  | 'uploadXFiles'
  | 'uploadXNewFiles'
  | 'xMoreFilesAdded'
>

export = StatusBarLocale
