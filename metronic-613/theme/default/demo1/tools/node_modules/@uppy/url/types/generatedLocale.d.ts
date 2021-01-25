import Uppy = require('@uppy/core')

type UrlLocale = Uppy.Locale<
  | 'import'
  | 'enterUrlToImport'
  | 'failedToFetch'
  | 'enterCorrectUrl'
>

export = UrlLocale
