var clean = require("gulp-clean")

module.exports = (gulp, callback) => {
  const cleanCssTask = function() {
    return gulp
      .src(config.destination.css, {
        read: false,
        allowEmpty: true
      })
      .pipe(clean())
  }

  const cleanCssRtlTask = function() {
    return gulp
      .src(config.destination.css_rtl, {
        read: false,
        allowEmpty: true
      })
      .pipe(clean())
  }

  const CleanDocumentationTask = function() {
    return gulp
      .src(
        config.html + "/" + myTextDirection + "/" + myLayoutName + "/*.html",
        {
          read: false,
          allowEmpty: true
        }
      )
      .pipe(clean())
  }

  const cleanHtmlTask = function() {
    return gulp
      .src(
        config.html + "/" + myTextDirection + "/" + myLayoutName + "/**/*.html",
        {
          read: false,
          allowEmpty: true
        }
      )
      .pipe(clean())
  }

  const cleanJsTask = function() {
    return gulp
      .src(config.destination.js, {
        read: false,
        allowEmpty: true
      })
      .pipe(clean())
  }

  const cleanSkHtmlTask = function() {
    return gulp
      .src(
        config.starter_kit +
          "/" +
          myTextDirection +
          "/" +
          myLayoutName +
          "/**/*.html",
        {
          read: false,
          allowEmpty: true
        }
      )
      .pipe(clean())
  }

  // ---------------------------------------------------------------------------
  // Exports

  return {
    css: cleanCssTask,
    css_rtl: cleanCssRtlTask,
    documentation: CleanDocumentationTask,
    html: cleanHtmlTask,
    js: cleanJsTask,
    sk_html: cleanSkHtmlTask
  }
}
