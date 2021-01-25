/* ------------------------------------------------------------------------------
 *
 *  # Gulp file
 *
 *  Basic Gulp tasks for Limitless template
 *
 * ---------------------------------------------------------------------------- */


// Include gulp
var gulp = require('gulp'); 


// Include our plugins
var jshint = require('gulp-jshint');
var less = require('gulp-less');
var minifyCss = require('gulp-clean-css');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');


// Lint task
gulp.task('lint', function() {
    return gulp
        .src('assets/js/app.js')
        .pipe(jshint())
        .pipe(jshint.reporter('default'));
});


// Compile less files of a full version
gulp.task('less_full', function() {
    return gulp
        .src('assets/less/_main_full/*.less')
        .pipe(less())
        .pipe(gulp.dest('assets/css'))
        .pipe(minifyCss({
            keepSpecialComments: 0
        }))
        .pipe(rename({
            suffix: ".min"
        }))
        .pipe(gulp.dest('assets/css'));
});


// Compile less files of starter kit
gulp.task('less_seed', function() {
    return gulp
        .src('assets/less/_main_seed/*.less')
        .pipe(less())
        .pipe(gulp.dest('../seed/assets/css'))
        .pipe(minifyCss({
            keepSpecialComments: 0
        }))
        .pipe(rename({
            suffix: ".min"
        }))
        .pipe(gulp.dest('../seed/assets/css'));
});


// Watch task
gulp.task('watch', function() {
    gulp.watch('assets/less/**/*.less', ['less_full', 'less_seed']);
});


// Default task
gulp.task('default', [
    'lint',
    'less_full',
    'less_seed',
    'watch'
]);


// Compile LESS files only task
gulp.task('compile', [
    'less_full',
    'less_seed'
]);
