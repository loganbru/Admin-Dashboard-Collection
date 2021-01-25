import Uppy = require('@uppy/core')

type TransloaditLocale = Uppy.Locale<
  | 'creatingAssembly'
  | 'creatingAssemblyFailed'
  | 'encoding'
>

export = TransloaditLocale
