"use strict";

const gulp = require("gulp"),
    newer = require("gulp-newer"),
    imagemin = require("gulp-imagemin"),
    sass = require("gulp-sass"),
    sourcemaps = require("gulp-sourcemaps"),
    autoprefixer = require("gulp-autoprefixer"),
    cleanCSS = require('gulp-clean-css'),
    rename = require("gulp-rename"),
    concat = require("gulp-concat"),
    uglify = require("gulp-uglify"),
    gutil = require("gulp-util"),
    lodash = require("lodash"),
    gulpSequence = require("gulp-sequence"),
    browsersync = require("browser-sync"),
    fileinclude = require('gulp-file-include');

const folder = {
    src: "src/", // source files
    dist: "dist/" // build files
};

/*
Copy assets/vendors from their node_module package to scss & js folder
Read More: https://florian.ec/articles/frontend-dependencies-npm/
*/

gulp.task("copy-assets", function () {
    var assets = {
        js: [
            "./node_modules/jquery/dist/jquery.js",
            "./node_modules/bootstrap/dist/js/bootstrap.bundle.js",
            "./node_modules/moment/moment.js",
            "./node_modules/metismenu/dist/metisMenu.js",
            "./node_modules/jquery-slimscroll/jquery.slimscroll.js",
            "./node_modules/daterangepicker/daterangepicker.js",
            "./node_modules/select2/dist/js/select2.min.js",
            "./node_modules/jquery-mask-plugin/dist/jquery.mask.min.js",
            "./node_modules/jquery-nice-select/js/jquery.nice-select.min.js"
        ],
        scss: [
            "./node_modules/metismenu/dist/metisMenu.css",
            "./node_modules/daterangepicker/daterangepicker.css",
            "./node_modules/select2/dist/css/select2.min.css",
            "./node_modules/jquery-nice-select/css/nice-select.css"
        ],
    };

    var third_party_assets = {
        js: [
            "./node_modules/chart.js/dist/Chart.bundle.js",
            "./node_modules/datatables.net/js/jquery.dataTables.js",
            "./node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js",
            "./node_modules/datatables.net-responsive/js/dataTables.responsive.min.js",
            "./node_modules/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js",
            "./node_modules/datatables.net-buttons/js/dataTables.buttons.min.js",
            "./node_modules/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js",
            "./node_modules/datatables.net-buttons/js/buttons.html5.min.js",
            "./node_modules/datatables.net-buttons/js/buttons.flash.min.js",
            "./node_modules/datatables.net-buttons/js/buttons.print.min.js",
            "./node_modules/datatables.net-keytable/js/dataTables.keyTable.min.js",
            "./node_modules/datatables.net-select/js/dataTables.select.min.js",
            "./node_modules/jquery-ui/jquery-ui.min.js",
            "./node_modules/fullcalendar/dist/fullcalendar.min.js",
            "./node_modules/gmaps/gmaps.min.js",
            "./node_modules/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js",
            "./node_modules/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js",
            "./node_modules/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js",
            "./node_modules/admin-resources/jquery.vectormap/maps/jquery-jvectormap-au-mill-en.js",
            "./node_modules/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-il-chicago-mill-en.js",
            "./node_modules/admin-resources/jquery.vectormap/maps/jquery-jvectormap-in-mill-en.js",
            "./node_modules/ion-rangeslider/js/ion.rangeSlider.min.js",
            "./node_modules/toastr/build/toastr.min.js",
            "./node_modules/sweetalert2/dist/sweetalert2.min.js",
            "./node_modules/mohithg-switchery/dist/switchery.min.js",
            "./node_modules/bootstrap-maxlength/bootstrap-maxlength.min.js",
            "./node_modules/jquery-sparkline/jquery.sparkline.min.js",
            "./node_modules/jquery-knob/dist/jquery.knob.min.js"
        ],
        css: [
            "./node_modules/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css",
            "./node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css",
            "./node_modules/datatables.net-responsive-bs4/css/responsive.bootstrap4.css",
            "./node_modules/datatables.net-buttons-bs4/css/buttons.bootstrap4.css",
            "./node_modules/datatables.net-select-bs4/css/select.bootstrap4.css",
            "./node_modules/fullcalendar/dist/fullcalendar.min.css",
            "./node_modules/@mdi/font/css/materialdesignicons.min.css",
            "./node_modules/ion-rangeslider/css/ion.rangeSlider.css",
            "./node_modules/ion-rangeslider/css/ion.rangeSlider.skinModern.css",
            "./node_modules/toastr/build/toastr.min.css",
            "./node_modules/sweetalert2/dist/sweetalert2.min.css",
            "./node_modules/mohithg-switchery/dist/switchery.min.css"
        ],
        font: [
            "./node_modules/@mdi/font/css/materialdesignicons.min.css"
        ]
    };

    //copying third party assets
    lodash(third_party_assets).forEach(function (assets, type) {
        if (type == "css") {
            gulp.src(assets).pipe(gulp.dest(folder.src + "css/vendor"));
            gulp.src(assets).pipe(gulp.dest(folder.dist + "css/vendor"));
        } else if (type == "css") {
            gulp.src(assets).pipe(gulp.dest(folder.src + "css/vendor"));
            gulp.src(assets).pipe(gulp.dest(folder.dist + "css/vendor"));
        }
        else {
            gulp.src(assets).pipe(gulp.dest(folder.src + "js/vendor"));
            gulp.src(assets).pipe(gulp.dest(folder.dist + "js/vendor"));
        }
    });

    //copying required assets
    lodash(assets).forEach(function (assets, type) {
        if (type == "scss") {
            gulp
                .src(assets)
                .pipe(
                    rename({
                        // rename aaa.css to _aaa.scss
                        prefix: "_",
                        extname: ".scss"
                    })
                )
                .pipe(gulp.dest(folder.src + "scss/vendor"));
        } else {
            gulp.src(assets).pipe(gulp.dest(folder.src + "js/vendor"));
        }
    });
});

// image processing
gulp.task("imageMin", function () {
    var out = folder.dist + "assets/images";
    return gulp
        .src(folder.src + "assets/images/**/*")
        .pipe(newer(out))
        .pipe(imagemin())
        .pipe(gulp.dest(out));
});

// copy fonts
// copy fonts from src folder to dist folder
gulp.task("fonts", function () {
    var out = folder.dist + "assets/fonts/";

    return gulp.src([folder.src + "assets/fonts/**/*"]).pipe(gulp.dest(out));
});

// copy html
// copy html files from src folder to dist folder, also copy favicons
gulp.task("html", function () {
    var out = folder.dist;

    return gulp
        .src([
            folder.src + "html/*.html",
            folder.src + "html/*.ico", // favicons
            folder.src + "html/*.png"
        ])
        .pipe(fileinclude({
            prefix: '@@',
            basepath: '@file',
            indent: true
        }))
        .pipe(gulp.dest(out));
});

// compile & minify sass
gulp.task("css", function () {
    gulp
        .src([folder.src + "/scss/bootstrap.scss"])
        .pipe(sourcemaps.init())
        .pipe(sass()) // scss to css
        .pipe(
            autoprefixer({
                browsers: ["last 2 versions"]
            })
        )
        .pipe(cleanCSS())
        .pipe(
            rename({
                // rename app.css to bootstrap.min.css
                suffix: ".min"
            })
        )
        .pipe(sourcemaps.write("./")) // source maps for bootstrap.min.css
        .pipe(gulp.dest(folder.dist + "css/"));
    gulp
        .src([folder.src + "/scss/icons.scss"])
        .pipe(sourcemaps.init())
        .pipe(sass()) // scss to css
        .pipe(
            autoprefixer({
                browsers: ["last 2 versions"]
            })
        )
        .pipe(cleanCSS())
        .pipe(
            rename({
                // rename app.css to icons.min.css
                suffix: ".min"
            })
        )
        .pipe(sourcemaps.write("./")) // source maps for icons.min.css
        .pipe(gulp.dest(folder.dist + "css/"));

    return gulp
        .src([folder.src + "/scss/app.scss"])
        .pipe(sourcemaps.init())
        .pipe(sass()) // scss to css
        .pipe(
            autoprefixer({
                browsers: ["last 2 versions"]
            })
        )
        .pipe(gulp.dest(folder.dist + "css/"))
        .pipe(cleanCSS())
        .pipe(
            rename({
                // rename app.css to app.min.css
                suffix: ".min"
            })
        )
        .pipe(sourcemaps.write("./")) // source maps for app.min.css
        .pipe(gulp.dest(folder.dist + "css/"));
});

// js
gulp.task("javascript", function () {
    var out = folder.dist + "js/";

    //copying demo pages related assets
    var app_pages_assets = {
        js: [
            folder.src + "js/pages/dashboard.init.js",
            folder.src + "js/pages/calendar.init.js",
            folder.src + "js/pages/chartjs.init.js",
            folder.src + "js/pages/datatables.init.js",
            folder.src + "js/pages/form-advanced.init.js",
            folder.src + "js/pages/maps.init.js",
            folder.src + "js/pages/range-sliders.init.js",
            folder.src + "js/pages/toastr.init.js",
            folder.src + "js/pages/sweet-alerts.init.js",
            folder.src + "js/pages/sparkline.init.js"
        ]
    };

    lodash(app_pages_assets).forEach(function (assets, type) {
        gulp.src(assets)
        .pipe(uglify())
        .on("error", function (err) {
            gutil.log(gutil.colors.red("[Error]"), err.toString());
        })
        .pipe(gulp.dest(out + "pages"));
    });

    // It's important to keep files at this order
    // so that `app.min.js` can be executed properly
    gulp
        .src([
            folder.src + "js/vendor/jquery.js",
            folder.src + "js/vendor/bootstrap.bundle.js",
            folder.src + "js/vendor/moment.js",
            folder.src + "js/vendor/jquery.slimscroll.js",
            folder.src + "js/vendor/daterangepicker.js",
            folder.src + "js/vendor/metisMenu.js",
            folder.src + "js/vendor/select2.min.js",
            folder.src + "js/vendor/jquery.mask.min.js",
            folder.src + "js/vendor/jquery.nice-select.min.js",
        ])
        .pipe(sourcemaps.init())
        .pipe(concat("vendor.js"))
        .pipe(gulp.dest(out))
        .pipe(
            rename({
                // rename app.js to app.min.js
                suffix: ".min"
            })
        )
        .pipe(uglify())
        .on("error", function (err) {
            gutil.log(gutil.colors.red("[Error]"), err.toString());
        })
        .pipe(sourcemaps.write("./"))
        .pipe(gulp.dest(out));

    return gulp
        .src([
            folder.src + "js/app.js"
        ])
        .pipe(sourcemaps.init())
        .pipe(concat("app.js"))
        .pipe(gulp.dest(out))
        .pipe(
            rename({
                // rename app.js to app.min.js
                suffix: ".min"
            })
        )
        .pipe(uglify())
        .on("error", function (err) {
            gutil.log(gutil.colors.red("[Error]"), err.toString());
        })
        .pipe(sourcemaps.write("./"))
        .pipe(gulp.dest(out));
});

// live browser loading
gulp.task("browserSync", function () {
    browsersync.init({
        server: {
            baseDir: folder.dist
        }
    });
});

// watch all changes
gulp.task("watch", function () {
    gulp.watch(folder.src + "html/**", ["html", browsersync.reload]);
    gulp.watch(folder.src + "assets/images/**/*", [
        "imageMin",
        browsersync.reload
    ]);
    gulp.watch(folder.src + "assets/fonts/**/*", ["fonts", browsersync.reload]);
    gulp.watch(folder.src + "scss/**/*", ["css", browsersync.reload]);
    gulp.watch(folder.src + "js/**/*", ["javascript", browsersync.reload]);
});

// default task
gulp.task(
    "default",
    gulpSequence(
        "copy-assets",
        "html",
        "imageMin",
        "fonts",
        "css",
        "javascript",
        "browserSync",
        "watch"
    )
);

// build
gulp.task(
    "build",
    gulpSequence("copy-assets", "html", "imageMin", "fonts", "css", "javascript")
);

// doc
gulp.task("docs", function () {
    browsersync.init({
        server: {
            baseDir: "docs"
        }
    });
});
