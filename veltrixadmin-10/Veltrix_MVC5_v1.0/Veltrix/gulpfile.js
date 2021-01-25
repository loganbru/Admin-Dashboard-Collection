/// <binding ProjectOpened='default' />
const del = require('del');
const gulp = require('gulp');
const npmdist = require('gulp-npm-dist');
const rename = require('gulp-rename');
const sass = require('gulp-sass');
const autoprefixer = require("gulp-autoprefixer");
const sourcemaps = require("gulp-sourcemaps");
const cleanCSS = require('gulp-clean-css');

// here pass your project directory name, i.e. if your project root folder name is "src" then set "src" in the below RootDirectory variable. 
var RootDirectory = "Veltrix";

const paths = {
    base: {
        base: {
            dir: './'
        },
        node: {
            dir: './node_modules'
        }
    },
    src: {
        base: {
            dir: './' + RootDirectory + '',
            files: './' + RootDirectory + '/**/*'
        },
        libs: {
            dir: './' + RootDirectory + '/assets/libs'
        },
        css: {
            dir: './' + RootDirectory + '/assets/css',
            files: './' + RootDirectory + '/assets/css/**/*'
        },
        scss: {
            dir: './' + RootDirectory + '/assets/scss',
            files: './' + RootDirectory + '/assets/scss/**/*',
            main: './' + RootDirectory + '/assets/scss/*.scss'
        }
    }
};

gulp.task('watch', function () {
    gulp.watch(paths.src.scss.files, gulp.series('scss'));
});


gulp.task('scss', function () {
    return gulp
        .src(paths.src.scss.main)
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(
            autoprefixer()
        )
        .pipe(gulp.dest(paths.src.css.dir))
        .pipe(cleanCSS())
        .pipe(
            rename({
                // rename app.css to icons.min.css
                suffix: ".min"
            })
        )
        .pipe(sourcemaps.write("./")) // source maps for icons.min.css
        .pipe(gulp.dest(paths.src.css.dir));
});

gulp.task('copy:libs', function () {
    return gulp
        .src(npmdist(), { base: paths.base.node.dir })
        .pipe(rename(function (path) {
            path.dirname = path.dirname.replace(/\/dist/, '').replace(/\\dist/, '');
        }))
        .pipe(gulp.dest(paths.src.libs.dir));
});

gulp.task('clean:' + RootDirectory + '', function (callback) {
    del.sync(paths.src.libs.dir);
    callback();
});

gulp.task('build', gulp.series(gulp.parallel('clean:' + RootDirectory + '', 'copy:libs'), 'scss'));
gulp.task('default', gulp.series(gulp.parallel('clean:' + RootDirectory + '', 'copy:libs', 'scss'), gulp.parallel('watch')));
