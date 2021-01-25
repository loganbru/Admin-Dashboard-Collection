/*
    Altair Admin
    Automated tasks ( http://gulpjs.com/ )

    1. minify/concatenate js files
    2. less to css
    3. minify json
    4. browser sync http://www.browsersync.io/docs/
    5. process all js
    6. process all less
    7. default task
    8. build release folder

*/

var gulp = require('gulp'),
    plugins = require("gulp-load-plugins")({
        pattern: ['gulp-*', 'gulp.*', '*'],
        replaceString: /\bgulp[\-.]/
    });

// browser sync
var reload = plugins.browserSync.reload;

// get altair version
var pjson = require('./package.json');
var version = pjson.version;

// 1. -------------------- MINIFY/CONCATENATE JS FILES --------------------

// commmon
gulp.task('common_js', function () {
    return gulp.src([
            "bower_components/jquery/dist/jquery.js",
            "bower_components/modernizr/modernizr.js",
            // retina images
            "bower_components/dense/src/dense.js",
            // fastclick (touch devices)
            "bower_components/fastclick/lib/fastclick.js",
            // custom scrollbar
            "bower_components/jquery.scrollbar/jquery.scrollbar.js",
            // create easing functions from cubic-bezier co-ordinates
            "bower_components/jquery-bez/jquery.bez.min.js",
            // Get the actual width/height of invisible DOM elements with jQuery
            "bower_components/jquery.actual/jquery.actual.js",
            // waypoints
            "bower_components/waypoints/lib/jquery.waypoints.js",
            // velocityjs (animation)
            "bower_components/velocity/velocity.js",
            "bower_components/velocity/velocity.ui.js",
            // advanced cross-browser ellipsis
            "bower_components/jQuery.dotdotdot/src/js/jquery.dotdotdot.js",
            // iCheck
            "bower_components/jquery-icheck/icheck.js",
            // selectize
            "bower_components/selectize/dist/js/standalone/selectize.js",
            // switchery
            "bower_components/switchery/dist/switchery.js",
            // prism syntax highlighter
            "bower_components/prism/prism.js",
            "bower_components/prism/components/prism-php.js",
            "bower_components/prism/plugins/line-numbers/prism-line-numbers.js",
            // textarea-autosize
            "bower_components/autosize/dist/autosize.js"
        ])
        .pipe(plugins.concat('common.js'))
        .pipe(gulp.dest('assets/js/'))
        .pipe(plugins.uglify({
            mangle: true
        }))
        .pipe(plugins.rename('common.min.js'))
        .pipe(plugins.size({
            showFiles: true
        }))
        .pipe(gulp.dest('assets/js/'));
});

// cutom uikit
gulp.task('uikit_js', function () {
    return gulp.src([
            // uikit core
            "bower_components/uikit/js/uikit.js",
            // uikit components
            "bower_components/uikit/js/components/accordion.js",
            "bower_components/uikit/js/components/autocomplete.js",
            "assets/js/custom/uikit_datepicker.js",
            "bower_components/uikit/js/components/form-password.js",
            "bower_components/uikit/js/components/form-select.js",
            "bower_components/uikit/js/components/grid.js",
            "bower_components/uikit/js/components/nestable.js",
            "bower_components/uikit/js/components/notify.js",
            "bower_components/uikit/js/components/sortable.js",
            "assets/js/custom/uikit_sticky.js",
            "bower_components/uikit/js/components/tooltip.js",
            "bower_components/uikit/js/components/timepicker.js",
            "bower_components/uikit/js/components/upload.js"
        ])
        .pipe(plugins.concat('uikit_custom.js'))
        .pipe(gulp.dest('assets/js/'))
        .pipe(plugins.uglify({
            mangle: true
        }))
        .pipe(plugins.rename('uikit_custom.min.js'))
        .pipe(plugins.size({
            showFiles: true
        }))
        .pipe(gulp.dest('assets/js/'));
});

// uikit htmleditor
gulp.task('uikit_htmleditor_js', function () {
    return gulp.src([
            // htmleditor
            "bower_components/codemirror/lib/codemirror.js",
            "bower_components/codemirror/mode/markdown/markdown.js",
            "bower_components/codemirror/addon/mode/overlay.js",
            "bower_components/codemirror/mode/javascript/javascript.js",
            "bower_components/codemirror/mode/php/php.js",
            "bower_components/codemirror/mode/gfm/gfm.js",
            "bower_components/marked/lib/marked.js",
            "bower_components/uikit/js/components/htmleditor.js"
        ])
        .pipe(plugins.concat('uikit_htmleditor_custom.js'))
        .pipe(gulp.dest('assets/js/'))
        .pipe(plugins.uglify({
            mangle: true
        }).on('error', function(e) {
            console.log('\x07',e.message); return this.end();
        }))
        .pipe(plugins.rename('uikit_htmleditor_custom.min.js'))
        .pipe(plugins.size({
            showFiles: true
        }))
        .pipe(gulp.dest('assets/js/'));
});

// custom kendoui
gulp.task('kendoui_js', function () {
    // js
    return  gulp.src([
            "bower_components/kendo-ui-core/src/js/kendo.core.js",
            "bower_components/kendo-ui-core/src/js/kendo.color.js",
            "bower_components/kendo-ui-core/src/js/kendo.data.js",
            "bower_components/kendo-ui-core/src/js/kendo.calendar.js",
            "bower_components/kendo-ui-core/src/js/kendo.popup.js",
            "bower_components/kendo-ui-core/src/js/kendo.datepicker.js",
            "bower_components/kendo-ui-core/src/js/kendo.timepicker.js",
            "bower_components/kendo-ui-core/src/js/kendo.datetimepicker.js",
            "bower_components/kendo-ui-core/src/js/kendo.list.js",
            "bower_components/kendo-ui-core/src/js/kendo.fx.js",
            "bower_components/kendo-ui-core/src/js/kendo.userevents.js",
            "bower_components/kendo-ui-core/src/js/kendo.menu.js",
            "bower_components/kendo-ui-core/src/js/kendo.draganddrop.js",
            "bower_components/kendo-ui-core/src/js/kendo.slider.js",
            "bower_components/kendo-ui-core/src/js/kendo.mobile.scroller.js",
            "bower_components/kendo-ui-core/src/js/kendo.autocomplete.js",
            "bower_components/kendo-ui-core/src/js/kendo.combobox.js",
            "bower_components/kendo-ui-core/src/js/kendo.dropdownlist.js",
            "bower_components/kendo-ui-core/src/js/kendo.colorpicker.js",
            "bower_components/kendo-ui-core/src/js/kendo.combobox.js",
            "bower_components/kendo-ui-core/src/js/kendo.maskedtextbox.js",
            "bower_components/kendo-ui-core/src/js/kendo.multiselect.js",
            "bower_components/kendo-ui-core/src/js/kendo.numerictextbox.js",
            "bower_components/kendo-ui-core/src/js/kendo.toolbar.js",
            "bower_components/kendo-ui-core/src/js/kendo.panelbar.js",
            "bower_components/kendo-ui-core/src/js/kendo.window.js"
        ])
        .pipe(plugins.concat('kendoui.custom.js'))
        .pipe(gulp.dest('assets/js/'))
        .pipe(plugins.uglify({
            mangle: true
        }))
        .pipe(plugins.rename('kendoui.custom.min.js'))
        .pipe(plugins.size({
            showFiles: true
        }))
        .pipe(gulp.dest('assets/js/'));

});

// common/page specific functions
gulp.task('page_specific_js', function () {
    return gulp.src([
        'assets/js/altair_admin_common.js',
        'assets/js/pages/*.js',
        'assets/js/custom/*.js',
        '!assets/js/**/*.min.js'
    ])
        .pipe(plugins.uglify({
            mangle: true
        }))
        .pipe(plugins.rename({
            extname: ".min.js"
        }))
        .pipe(gulp.dest(function(file) {
            return file.base;
        }));
});

// 2. -------------------- LESS TO CSS --------------------

// main styles
gulp.task('less_main', function() {
    return gulp.src('assets/less/main.less')
        .pipe(plugins.plumber())
        .pipe(plugins.less())
        .pipe(plugins.autoprefixer({
            browsers: ['> 5%','last 2 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('assets/css'))
        .pipe(plugins.minifyCss({
            keepSpecialComments: 0,
            advanced: false
        }))
        .pipe(plugins.rename('main.min.css'))
        .pipe(gulp.dest('assets/css'))
        .pipe(reload({stream: true}));
});

// error page
gulp.task('less_error_page', function() {
    return gulp.src('assets/less/pages/error_page.less')
        .pipe(plugins.plumber())
        .pipe(plugins.less())
        .pipe(plugins.autoprefixer({
            browsers: ['> 5%','last 2 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('assets/css'))
        .pipe(plugins.minifyCss({
            keepSpecialComments: 0,
            advanced: false
        }))
        .pipe(plugins.rename('error_page.min.css'))
        .pipe(gulp.dest('assets/css'))
        .pipe(reload({stream: true}));
});

// login page
gulp.task('less_login_page', function() {
    return gulp.src('assets/less/pages/login_page.less')
        .pipe(plugins.plumber())
        .pipe(plugins.less())
        .pipe(plugins.autoprefixer({
            browsers: ['> 5%','last 2 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('assets/css'))
        .pipe(plugins.minifyCss({
            keepSpecialComments: 0,
            advanced: false
        }))
        .pipe(plugins.rename('login_page.min.css'))
        .pipe(gulp.dest('assets/css'))
        .pipe(reload({stream: true}));
});

// 3. -------------------- MINIFY JSON --------------------

gulp.task('json_minify', function() {
    return gulp.src([
            'data/*.json',
            '!data/*.min.json'
        ])
        .pipe(plugins.plumber())
        .pipe(plugins.jsonminify())
        .pipe(plugins.rename({
            extname: ".min.json"
        }))
        .pipe(gulp.dest('data'));
});

// 4. -------------------- BROWSER SYNC http://www.browsersync.io/docs/ --------------------

gulp.task('browser-sync', ['default'], function() {
    plugins.browserSync({
        // host path (http://www.browsersync.io/docs/options/#option-proxy)
        proxy: "localhost/altair/"
    });
    gulp.watch('assets/less/**/*.less',['less_main']);
    gulp.watch('assets/less/pages/error_page.less',['less_error_page']);
    gulp.watch('assets/less/pages/login_page.less',['less_login_page']);
    gulp.watch([
        '*.php',
        '*.html',
        'php/**/*.php',
        'assets/js/**/*.js',
        '!assets/js/**/*.min.js'
    ]).on('change', reload);
});

// 5. -------------------- PROCESS ALL JS --------------------

gulp.task('all_js', ['common_js','uikit_js','uikit_htmleditor_js','kendoui_js','page_specific_js']);

// 6. -------------------- PROCESS ALL LESS ------------------

gulp.task('all_less', ['less_main','less_error_page','less_login_page']);


// 7. -------------------- DEFAULT TASK ----------------------

gulp.task('default', ['all_less', 'all_js', 'json_minify']);


// 8. -------------------- RELEASE --------------------------

var release_dir = '../../_release/'+version+'/';
var release_dist_dir = release_dir + '/admin/dist/';

// clean release folder
gulp.task('release_clean', function() {
    return plugins.del.sync(
        [release_dir+'**/*'],
        { force: true },
        function (err, paths) {}
    );
});

// copy files from /src
gulp.task('release_dist_copy',function() {
    // copy favicon
    var root_files = gulp.src(['favicon.ico'])
        .pipe(gulp.dest(release_dist_dir));

    // copy bower_components
    var bower_files = gulp.src([
        'bower_components/**',
        '!bower_components/{autosize,autosize/**}',
        '!bower_components/{dense,dense/**}',
        '!bower_components/{fastclick,fastclick/**}',
        '!bower_components/{jquery,jquery/**}',
        '!bower_components/{jquery.actual,jquery.actual/**}',
        '!bower_components/{jquery.dotdotdot,jquery.dotdotdot/**}',
        '!bower_components/{jquery.scrollbar,jquery.scrollbar/**}',
        '!bower_components/{jquery-bez,jquery-bez/**}',
        '!bower_components/{jquery-icheck,jquery-icheck/**}',
        '!bower_components/{kendo-ui-core,kendo-ui-core/**}',
        '!bower_components/{marked,marked/**}',
        '!bower_components/{modernizr,modernizr/**}',
        '!bower_components/{prism,prism/**}',
        '!bower_components/{selectize,selectize/**}',
        '!bower_components/{switchery,switchery/**}',
        '!bower_components/{velocity,velocity/**}',
        '!bower_components/{waypoints,waypoints/**}'
    ])
        .pipe(gulp.dest(release_dist_dir+'bower_components/'));

    // copy kendo-ui styles/images
    var bower_kendoui_css = gulp.src([
        'bower_components/kendo-ui-core/styles/kendo.common-material.min.css',
        'bower_components/kendo-ui-core/styles/kendo.material.min.css'
    ])
        .pipe(gulp.dest(release_dist_dir+'bower_components/kendo-ui-core/styles/'));

    var bower_kendoui_img = gulp.src([
        'bower_components/kendo-ui-core/styles/material/**'
    ])
        .pipe(gulp.dest(release_dist_dir+'bower_components/kendo-ui-core/styles/material/'));


    // copy css
    var css_files = gulp.src(['assets/css/*.min.css'])
        .pipe(gulp.dest(release_dist_dir+'assets/css/'));

    // copy icons
    var icons_files = gulp.src(['assets/icons/**'])
        .pipe(gulp.dest(release_dist_dir+'assets/icons/'));

    // copy images
    var img_files = gulp.src(['assets/img/**'])
        .pipe(gulp.dest(release_dist_dir+'assets/img/'));

    // copy js scripts
    var js_files = gulp.src(['assets/js/**/*.min.js'])
        .pipe(gulp.dest(release_dist_dir+'assets/js/'));

    // copy data
    var json_files = gulp.src(['data/**/*.min.json','data/**/*.php'])
         .pipe(gulp.dest(release_dist_dir+'data/'));

    return plugins.mergeStream(root_files,bower_files,bower_kendoui_css,bower_kendoui_img,css_files,icons_files,img_files,js_files,json_files);

});

// generate demo site
gulp.task('release_demo_copy',function() {
    return gulp.src(release_dist_dir+'/**')
        .pipe(gulp.dest(release_dir+'_demo_site/'));
});

// generate all pages from php to html (/dist)
gulp.task('release_dist_generate_pages', function(){
    var os  = require('os-utils');
    var browser = os.platform() === 'linux' ? 'google-chrome' : (
        os.platform() === 'darwin' ? 'google chrome' : (
            os.platform() === 'win32' ? 'chrome' : 'firefox'));
    return gulp.src('./helpers/generate_pages/index.php')
        .pipe(
            plugins.open('', {
                url: 'http://127.0.0.1/altair/helpers/generate_pages/',
                app: browser
            })
        );
});

// copy documentation
gulp.task('release_doc_copy', function() {
    var release_doc = gulp.src([
            '../../documentation/**/*',
            '!../../documentation/node_modules/',
            '!../../documentation/node_modules/**',
            '!../../documentation/bower_components/**',
            '!../../documentation/package.json',
            '!../../documentation/bower.json',
            '!../../documentation/gulpfile.js'
        ])
        .pipe(gulp.dest(release_dir+'documentation/'));

    var release_doc_uikit = gulp.src('../../documentation/bower_components/uikit/**')
        .pipe(gulp.dest(release_dir+'documentation/bower_components/uikit/'));

    return plugins.mergeStream(release_doc,release_doc_uikit);
});

// copy admin /src
gulp.task('release_src_copy', function() {
    // admin /src
    gulp.src([
        '../src/**',
        '!../src/bower_components/',
        '!../src/bower_components/**',
        '!../src/node_modules/',
        '!../src/node_modules/**'
    ],{ dot: true })
        .pipe(gulp.dest(release_dir+'admin/src/'));
});

// copy admin /src
gulp.task('release_cleanup', function() {
    // remove redundant plugins/files from /dist
    return plugins.del(
        [
            release_dist_dir+'bower.json',
            release_dir+'_demo_site/bower.json'
        ],
        { force: true },
        function (err, paths) {}
    );
});

// replace images (distribution)
gulp.task('release_replace_images', function() {
    return gulp.src('../../__release_images/**')
        .pipe(gulp.dest(release_dist_dir+'assets/img/'));
});

gulp.task('release',function(callback){
    plugins.runSequence(
        ['default','release_clean'],
        'release_dist_copy',
        'release_demo_copy',
        ['release_dist_generate_pages','release_doc_copy','release_src_copy'],
        'release_replace_images',
        'release_cleanup',
        callback
    );
});
