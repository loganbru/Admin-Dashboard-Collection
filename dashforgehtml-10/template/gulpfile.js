
'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var cleanCSS = require('gulp-clean-css');
var rename = require('gulp-rename');
var browserSync = require('browser-sync').create();
var npmDist = require('gulp-npm-dist');

gulp.task('sass-css', function(){
  return gulp.src('scss/dashforge.scss')
    .pipe(sass())
    .pipe(gulp.dest('assets/css'))
    .pipe(browserSync.reload({
      stream: true
    }))
});

gulp.task('minify-css', function(){
  return gulp.src('scss/dashforge.scss')
    .pipe(sass({outputStyle: 'compressed'}))
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('assets/css'))
    .pipe(browserSync.reload({
      stream: true
    }))
});

// styles for pages
gulp.task('sass-pages', function(){
  return gulp.src('scss/pages/*.scss')
    .pipe(sass())
    .pipe(rename({prefix: 'dashforge.'}))
    .pipe(gulp.dest('assets/css'))
    .pipe(browserSync.reload({
      stream: true
    }))
});

// styles for skins
gulp.task('sass-skins', function(){
  return gulp.src('scss/skins/*.scss')
    .pipe(sass())
    .pipe(rename({prefix: 'skin.'}))
    .pipe(gulp.dest('assets/css'))
    .pipe(browserSync.reload({
      stream: true
    }))
});

gulp.task('browserSync', function() {
  browserSync.init({
    server: true
  })
});

gulp.task('serve', ['browserSync'], function() {
  gulp.watch([
    'scss/bootstrap/*.scss',
    'scss/dashforge/*.scss',
    'scss/fonts/*.scss',
    'scss/lib/*.scss',
    'scss/panels/*.scss',
    'scss/util/*.scss',
    'scss/_mixins.scss',
    'scss/dashforge.scss'
  ],['sass-css']);

  gulp.watch('scss/pages/*.scss', ['sass-pages']);
  gulp.watch('scss/skins/*.scss', ['sass-skins']);

  gulp.watch([
    'scss/_variables.scss',
    'scss/bootstrap/_variables.scss'
  ],['sass-css', 'sass-pages']);

  gulp.watch('index.html', browserSync.reload);
  gulp.watch('template/**/*.html', browserSync.reload);
  gulp.watch('components/**/*.html', browserSync.reload);
  gulp.watch('collections/**/*.html', browserSync.reload);
  gulp.watch('assets/js/*.js', browserSync.reload);
})

// Copy dependencies to lib/
gulp.task('npm-lib', function() {
  gulp.src(npmDist(), {base:'./node_modules/'})
    .pipe(rename(function(path) {
      path.dirname = path.dirname.replace(/\/dist/, '').replace(/\\dist/, '');
    }))
    .pipe(gulp.dest('lib'));
});
