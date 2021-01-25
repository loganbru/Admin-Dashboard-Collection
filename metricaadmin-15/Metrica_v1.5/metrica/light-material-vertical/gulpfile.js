var gulp = require("gulp"),
    sass = require("gulp-sass"),
    postcss = require("gulp-postcss"),
    autoprefixer = require("autoprefixer"),
    cssnano = require("cssnano"),
    sourcemaps = require("gulp-sourcemaps");


function style() {
    return (
        gulp
            .src("assets/scss/*.scss")
            .pipe(sourcemaps.init())
            .pipe(sass())
            .on("error", sass.logError)
            .pipe(postcss([autoprefixer(), cssnano()]))
            .pipe(sourcemaps.write())
            .pipe(gulp.dest("assets/css/"))
    );
}

function watch() {
    gulp.watch('assets/scss/*.scss', style)
}

exports.watch = watch
exports.default = style;