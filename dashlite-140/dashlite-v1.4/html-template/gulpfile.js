const { src, dest, parallel , series , watch } = require('gulp');
// Gulp Sass
const sass = require('gulp-sass');
const fileinclude = require('gulp-file-include');
const sourcemaps = require('gulp-sourcemaps');
sass.compiler = require('node-sass');

function html(cb) {
  src('src/html/**')
  .pipe(dest('dist/html'));

  cb();
}

function scss(cb) {
  src(['src/scss/*.scss'])
  // .pipe(sourcemaps.init())
  .pipe(sass().on('error', sass.logError))
  // .pipe(sourcemaps.write('./'))
  .pipe(dest('dist/assets/css'));

  src(['src/scss/skins/*.scss'])
  // .pipe(sourcemaps.init())
  .pipe(sass().on('error', sass.logError))
  // .pipe(sourcemaps.write('./'))
  .pipe(dest('dist/assets/css/skins'));

  cb();
}

function js_scripts(cb) {
  src(['src/js/*.js','!src/js/bundle.js'])
  .pipe(dest('dist/assets/js'));

  src(['src/js/charts/*.js'])
  .pipe(dest('dist/assets/js/charts'));

  src(['src/js/apps/*.js'])
  .pipe(dest('dist/assets/js/apps'));

  cb();
}

function js_bundle(cb) {
  src('src/js/bundle.js')
  .pipe(fileinclude({
    prefix: '@@',
    basepath: '@file',
    context: { build: 'dist' }
  }))
  .pipe(dest('dist/assets/js'));

  src('src/js/libs/*.js')
  .pipe(fileinclude({
    prefix: '@@',
    basepath: '@file',
    context: { build: 'dist' }
  }))
  .pipe(dest('dist/assets/js/libs'));

  cb();
}

function assets(cb){
  src(['src/images/**'])
  .pipe(dest('dist/images'));

  src(['src/assets/**', '!src/assets/js/**', '!src/assets/css/**'])
  .pipe(dest('dist/assets'));

  cb();
}

exports.build = series(html,scss,js_scripts,js_bundle,assets);

exports.develop = function() {
    watch(['src/scss/*.scss','src/scss/**'], scss)
    watch(['src/html/*.html','src/html/**/*.html'], html)
    watch(['src/images/**', 'src/assets/**'], assets)
    watch(['src/js/*.js','src/js/charts/*.js', 'src/js/apps/*.js', '!src/js/bundle.js'], js_scripts)
    watch(['src/js/libs/*.js','src/js/bundle.js'], js_bundle)
};