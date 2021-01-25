<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $cb->get_css('js/plugins/sweetalert2/sweetalert2.min.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>

<!-- Page loader (functionality is initialized in Template._uiHandlePageLoader()) -->
<!-- If #page-loader markup and also the "show" class is added, the loading screen will be enabled and auto hide once the page loads -->
<!-- Default background color is the primary color but you can use a bg-* class for a custom bg color -->
<div id="page-loader"></div>

<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <!-- Loading -->
    <h2 class="content-heading">Loading</h2>

    <!-- Header Loader -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Header Loader</h3>
        </div>
        <div class="block-content">
            <p>You can use the layout API to start the header loader and stop it on demand. It is better to be used when the header is also set to fixed, so it is always visible. You can start or stop the header loader with JavaScript at any time by using <code>Codebase.layout('header_loader_on')</code> or <code>Codebase.layout('header_loader_off')</code> respectively.</p>
            <div class="text-center">
                <button type="button" class="btn btn-alt-success push" data-toggle="layout" data-action="header_loader_on">Start Header Loader</button>
                <button type="button" class="btn btn-alt-danger push" data-toggle="layout" data-action="header_loader_off">Stop Header Loader</button>
            </div>
        </div>
    </div>
    <!-- END Header Loader -->

    <!-- Page Loader (functionality is initialized Template._uiHandlePageLoader()) -->
    <!-- Header Loader HTML markup can be found in the header (#page-header) -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Page Loader</h3>
        </div>
        <div class="block-content">
            <p>You can add the following markup after the body tag and the loading screen will be enabled and auto hide once the page loads (you can add a <code>.bg-*</code> class for a custom background color):</p>
            <p>
                <code>&lt;div id=&QUOT;page-loader&QUOT; class=&QUOT;show&QUOT;&gt;&lt;/div&gt;</code>
            </p>
            <p>You can also show or hide the loading screen at any time by using <code>Codebase.loader('show')</code> or <code>Codebase.loader('hide')</code> respectively. If you like to add a custom background color, you can dynamically add a <code>.bg-*</code> class to your page loader, for example <code>Codebase.loader('show', 'bg-gd-leaf')</code></p>
            <p class="my-30 text-center">
                <button type="button" class="btn btn-alt-primary" onclick="Codebase.loader('show', 'bg-primary');setTimeout(function(){Codebase.loader('hide');},3000);">Preview Page Loader</button>
            </p>
            <div class="row items-push-3x">
                <div class="col-6 col-md-3">
                    <a class="item item-circle bg-gd-dusk mx-auto" href="javascript:void(0)" onclick="Codebase.loader('show', 'bg-gd-dusk');setTimeout(function(){Codebase.loader('hide');},3000);"></a>
                </div>
                <div class="col-6 col-md-3">
                    <a class="item item-circle bg-gd-cherry mx-auto" href="javascript:void(0)" onclick="Codebase.loader('show', 'bg-gd-cherry');setTimeout(function(){Codebase.loader('hide');},3000);"></a>
                </div>
                <div class="col-6 col-md-3">
                    <a class="item item-circle bg-gd-aqua mx-auto" href="javascript:void(0)" onclick="Codebase.loader('show', 'bg-gd-aqua');setTimeout(function(){Codebase.loader('hide');},3000);"></a>
                </div>
                <div class="col-6 col-md-3">
                    <a class="item item-circle bg-gd-emerald mx-auto" href="javascript:void(0)" onclick="Codebase.loader('show', 'bg-gd-emerald');setTimeout(function(){Codebase.loader('hide');},3000);"></a>
                </div>
                <div class="col-6 col-md-3">
                    <a class="item item-circle bg-gd-sea mx-auto" href="javascript:void(0)" onclick="Codebase.loader('show', 'bg-gd-sea');setTimeout(function(){Codebase.loader('hide');},3000);"></a>
                </div>
                <div class="col-6 col-md-3">
                    <a class="item item-circle bg-gd-leaf mx-auto" href="javascript:void(0)" onclick="Codebase.loader('show', 'bg-gd-leaf');setTimeout(function(){Codebase.loader('hide');},3000);"></a>
                </div>
                <div class="col-6 col-md-3">
                    <a class="item item-circle bg-gd-lake mx-auto" href="javascript:void(0)" onclick="Codebase.loader('show', 'bg-gd-lake');setTimeout(function(){Codebase.loader('hide');},3000);"></a>
                </div>
                <div class="col-6 col-md-3">
                    <a class="item item-circle bg-gd-sun mx-auto" href="javascript:void(0)" onclick="Codebase.loader('show', 'bg-gd-sun');setTimeout(function(){Codebase.loader('hide');},3000);"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- END Page Loader -->

    <!-- Loading Icons -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Loading Icons</h3>
        </div>
        <div class="block-content">
            <p class="mb-50">You can create a loading indicator by adding the class <code>fa-spin</code> to any Font Awesome icon. Combining it with size classes and colors, you can get a lot of variations.</p>
            <div class="row items-push-3x text-center">
                <div class="col-6 col-md-3">
                    <i class="fa fa-4x fa-sun-o fa-spin text-warning"></i>
                </div>
                <div class="col-6 col-md-3">
                    <i class="fa fa-3x fa-sun-o fa-spin"></i>
                </div>
                <div class="col-6 col-md-3">
                    <i class="fa fa-2x fa-sun-o fa-spin"></i>
                </div>
                <div class="col-6 col-md-3">
                    <i class="fa fa-sun-o fa-spin"></i>
                </div>
            </div>
            <div class="row items-push-3x text-center">
                <div class="col-6 col-md-3">
                    <i class="fa fa-4x fa-cog fa-spin text-success"></i>
                </div>
                <div class="col-6 col-md-3">
                    <i class="fa fa-3x fa-cog fa-spin"></i>
                </div>
                <div class="col-6 col-md-3">
                    <i class="fa fa-2x fa-cog fa-spin"></i>
                </div>
                <div class="col-6 col-md-3">
                    <i class="fa fa-cog fa-spin"></i>
                </div>
            </div>
            <div class="row items-push-3x text-center">
                <div class="col-6 col-md-3">
                    <i class="fa fa-4x fa-asterisk fa-spin text-info"></i>
                </div>
                <div class="col-6 col-md-3">
                    <i class="fa fa-3x fa-asterisk fa-spin"></i>
                </div>
                <div class="col-6 col-md-3">
                    <i class="fa fa-2x fa-asterisk fa-spin"></i>
                </div>
                <div class="col-6 col-md-3">
                    <i class="fa fa-asterisk fa-spin"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- END Loading Icons -->

    <!-- Progress -->
    <!-- Randomize Values Buttons functionality is initialized with .js-bar-randomize class in js/pages/be_ui_activity.min.js which was auto compiled from _es6/pages/be_ui_activity.js -->
    <div class="row">
        <div class="col-xl-6">
            <!-- Progress Normal -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">
                        Progress <small>Normal</small>
                    </h3>
                    <div class="block-options">
                        <button type="button" class="js-bar-randomize btn-block-option" data-toggle="tooltip" title="Randomize">
                            <i class="fa fa-random"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <div class="progress push">
                        <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                            <span class="progress-bar-label">30%</span>
                        </div>
                    </div>
                    <div class="progress push">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                            <span class="progress-bar-label">50%</span>
                        </div>
                    </div>
                    <div class="progress push">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                            <span class="progress-bar-label">70%</span>
                        </div>
                    </div>
                    <div class="progress push">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                            <span class="progress-bar-label">90%</span>
                        </div>
                    </div>
                    <div class="progress push">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            <span class="progress-bar-label">100%</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Progress Normal -->
        </div>
        <div class="col-xl-6">
            <!-- Progress Striped -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">
                        Progress <small>Striped</small>
                    </h3>
                    <div class="block-options">
                        <button type="button" class="js-bar-randomize btn-block-option" data-toggle="tooltip" title="Randomize">
                            <i class="fa fa-random"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <div class="progress push">
                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                            <span class="progress-bar-label">30%</span>
                        </div>
                    </div>
                    <div class="progress push">
                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                            <span class="progress-bar-label">50%</span>
                        </div>
                    </div>
                    <div class="progress push">
                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                            <span class="progress-bar-label">70%</span>
                        </div>
                    </div>
                    <div class="progress push">
                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                            <span class="progress-bar-label">90%</span>
                        </div>
                    </div>
                    <div class="progress push">
                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            <span class="progress-bar-label">100%</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Progress Striped -->
        </div>
        <div class="col-xl-6">
            <!-- Progress Animated -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">
                        Progress <small>Animated</small>
                    </h3>
                    <div class="block-options">
                        <button type="button" class="js-bar-randomize btn-block-option" data-toggle="tooltip" title="Randomize">
                            <i class="fa fa-random"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <div class="progress push">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                            <span class="progress-bar-label">30%</span>
                        </div>
                    </div>
                    <div class="progress push">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                            <span class="progress-bar-label">50%</span>
                        </div>
                    </div>
                    <div class="progress push">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                            <span class="progress-bar-label">70%</span>
                        </div>
                    </div>
                    <div class="progress push">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                            <span class="progress-bar-label">90%</span>
                        </div>
                    </div>
                    <div class="progress push">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            <span class="progress-bar-label">100%</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Progress Animated -->
        </div>
        <div class="col-xl-6">
            <!-- Progress Mini -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">
                        Progress <small>Mini</small>
                    </h3>
                    <div class="block-options">
                        <button type="button" class="js-bar-randomize btn-block-option" data-toggle="tooltip" title="Randomize">
                            <i class="fa fa-random"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <div class="progress push" style="height: 8px;">
                        <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress push" style="height: 8px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress push" style="height: 8px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress push" style="height: 8px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress push" style="height: 8px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress push" style="height: 8px;">
                        <div class="progress-bar bg-flat" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress push" style="height: 8px;">
                        <div class="progress-bar bg-pulse" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <!-- END Progress Mini -->
        </div>
    </div>
    <!-- END Progress -->

    <!-- Bootstrap Spinners -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">
                Bootstrap Spinners
            </h3>
        </div>
        <div class="block-content">
            <p class="text-muted">
                Since Bootstrap 4.2, you can also use the following custom CSS based spinner elements.
            </p>
            <div class="row items-push">
                <div class="col-md-6">
                    <div class="spinner-border spinner-border-sm text-primary" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-border spinner-border-sm text-secondary" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-border spinner-border-sm text-success" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-border spinner-border-sm text-danger" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-border spinner-border-sm text-warning" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-border spinner-border-sm text-info" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-border spinner-border-sm text-light" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-border spinner-border-sm text-dark" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="spinner-grow spinner-grow-sm text-primary" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-grow spinner-grow-sm text-secondary" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-grow spinner-grow-sm text-success" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-grow spinner-grow-sm text-danger" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-grow spinner-grow-sm text-warning" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-grow spinner-grow-sm text-info" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-grow spinner-grow-sm text-light" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-grow spinner-grow-sm text-dark" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="spinner-border text-primary" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-border text-secondary" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-border text-success" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-border text-danger" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-border text-warning" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-border text-info" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-border text-light" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-border text-dark" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="spinner-grow text-primary" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-grow text-secondary" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-grow text-success" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-grow text-danger" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-grow text-warning" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-grow text-info" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-grow text-light" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-grow text-dark" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Bootstrap Spinners -->
    <!-- END Loading -->

    <!-- Alerts -->
    <h2 class="content-heading">Alerts</h2>
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Variations</h3>
        </div>
        <div class="block-content">
            <div class="row">
                <div class="col-md-6">
                    <!-- Primary Alert -->
                    <div class="alert alert-primary alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h3 class="alert-heading font-size-h4 font-w400">Primary</h3>
                        <p class="mb-0">This is a primary message with a <a class="alert-link" href="javascript:void(0)">link</a>!</p>
                    </div>
                    <!-- END Primary Alert -->
                </div>
                <div class="col-md-6">
                    <!-- Secondary Alert -->
                    <div class="alert alert-secondary alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h3 class="alert-heading font-size-h4 font-w400">Secondary</h3>
                        <p class="mb-0">This is a secondary message with a <a class="alert-link" href="javascript:void(0)">link</a>!</p>
                    </div>
                    <!-- END Secondary Alert -->
                </div>
                <div class="col-md-6">
                    <!-- Success Alert -->
                    <div class="alert alert-success alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h3 class="alert-heading font-size-h4 font-w400">Success</h3>
                        <p class="mb-0">This is a successful message with a <a class="alert-link" href="javascript:void(0)">link</a>!</p>
                    </div>
                    <!-- END Success Alert -->
                </div>
                <div class="col-md-6">
                    <!-- Info Alert -->
                    <div class="alert alert-info alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h3 class="alert-heading font-size-h4 font-w400">Information</h3>
                        <p class="mb-0">This is an informational message with a <a class="alert-link" href="javascript:void(0)">link</a>!</p>
                    </div>
                    <!-- END Info Alert -->
                </div>
                <div class="col-md-6">
                    <!-- Warning Alert -->
                    <div class="alert alert-warning alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h3 class="alert-heading font-size-h4 font-w400">Warning</h3>
                        <p class="mb-0">This is a warning message with a <a class="alert-link" href="javascript:void(0)">link</a>!</p>
                    </div>
                    <!-- END Warning Alert -->
                </div>
                <div class="col-md-6">
                    <!-- Danger Alert -->
                    <div class="alert alert-danger alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h3 class="alert-heading font-size-h4 font-w400">Error</h3>
                        <p class="mb-0">This is an error message with a <a class="alert-link" href="javascript:void(0)">link</a>!</p>
                    </div>
                    <!-- END Danger Alert -->
                </div>
            </div>
        </div>
    </div>
    <!-- END Alerts -->

    <!-- Notifications -->
    <h2 class="content-heading">Notifications</h2>

    <!-- Bootstrap Toasts -->
    <div style="position: fixed; top: 3rem; right: 3rem; z-index: 9999999;">
        <!-- Toast Example 1 -->
        <div id="toast-example-1" class="toast fade hide" data-delay="4000" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <i class="si si-bubble text-primary mr-2"></i>
                <strong class="mr-auto">Title</strong>
                <small class="text-muted">just now</small>
                <button type="button" class="ml-2 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                This is a nice notification based on Bootstrap implementation.
            </div>
        </div>
        <!-- END Toast Example 1 -->

        <!-- Toast Example 2 -->
        <div id="toast-example-2" class="toast fade hide" data-delay="4000" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <i class="si si-wrench text-danger mr-2"></i>
                <strong class="mr-auto">System</strong>
                <small class="text-muted">just now</small>
                <button type="button" class="ml-2 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                You can alert the user with a system message!
            </div>
        </div>
        <!-- END Toast Example 2 -->
    </div>
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Bootstrap Toasts</h3>
        </div>
        <div class="block-content">
            <div class="row">
                <div class="col-md-6">
                    <button type="button" class="btn btn-alt-secondary push" onclick="jQuery('#toast-example-1').toast('show');">
                        <i class="fa fa-bell mr-1"></i> Launch Toast 1
                    </button>
                    <p class="font-w600 mb-0">
                        You can also trigger it with JS:
                    </p>
                    <p>
                        <code>jQuery('#toast-example-1').toast('show');</code>
                    </p>
                </div>
                <div class="col-md-6">
                    <button type="button" class="btn btn-alt-secondary push" onclick="jQuery('#toast-example-2').toast('show');">
                        <i class="fa fa-bell mr-1"></i> Launch Toast 2
                    </button>
                    <p class="font-w600 mb-0">
                        You can also trigger it with JS:
                    </p>
                    <p>
                        <code>jQuery('#toast-example-2').toast('show');</code>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- END Bootstrap Toasts -->

    <!-- SweetAlert2 functionality is initialized in js/pages/be_ui_activity.min.js which was auto compiled from _es6/pages/be_ui_activity.js -->
    <!-- For more info and examples you can check out https://github.com/limonte/sweetalert2 -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">SweetAlert2</h3>
        </div>
        <div class="block-content">
            <div class="row items-push">
                <div class="col-md-3">
                    <button type="button" class="js-swal-success btn btn-alt-secondary">
                        <i class="fa fa-check text-success mr-5"></i> Success
                    </button>
                </div>
                <div class="col-md-3">
                    <button type="button" class="js-swal-info btn btn-alt-secondary">
                        <i class="fa fa-info text-info mr-5"></i> Info
                    </button>
                </div>
                <div class="col-md-3">
                    <button type="button" class="js-swal-warning btn btn-alt-secondary">
                        <i class="fa fa-warning text-warning mr-5"></i> Warning
                    </button>
                </div>
                <div class="col-md-3">
                    <button type="button" class="js-swal-error btn btn-alt-secondary">
                        <i class="fa fa-times text-danger mr-5"></i> Error
                    </button>
                </div>
                <div class="col-md-3">
                    <button type="button" class="js-swal-alert btn btn-alt-secondary">Simple</button>
                </div>
                <div class="col-md-3">
                    <button type="button" class="js-swal-question btn btn-alt-secondary">
                        <i class="fa fa-question mr-5"></i> Question
                    </button>
                </div>
                <div class="col-md-3">
                    <button type="button" class="js-swal-confirm btn btn-alt-secondary">
                        <i class="fa fa-check"></i> Confirm
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- END SweetAlert2 -->

    <!-- Bootstrap Notify (.js-notify class is initialized in Helpers.notify()) -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Bootstrap Notify</h3>
        </div>
        <div class="block-content">
            <div class="row items-push push">
                <div class="col-md-6 col-xl-4">
                    <h4>Top Right</h4>
                    <button type="button" class="js-notify btn btn-sm btn-alt-info" data-type="info" data-icon="fa fa-info-circle" data-message="Congrats! You've reached level 12!">Info</button>
                    <button type="button" class="js-notify btn btn-sm btn-alt-success" data-type="success" data-icon="fa fa-check" data-message="App was updated successfully to 1.2 version">Success</button>
                    <button type="button" class="js-notify btn btn-sm btn-alt-warning" data-type="warning" data-icon="fa fa-warning" data-message="Please make a backup before updating!">Warning</button>
                    <button type="button" class="js-notify btn btn-sm btn-alt-danger" data-type="danger" data-icon="fa fa-times" data-message="Update failed! :-(">Error</button>
                </div>
                <div class="col-md-6 col-xl-4">
                    <h4>Top Left</h4>
                    <button type="button" class="js-notify btn btn-sm btn-alt-info" data-type="info" data-align="left" data-icon="fa fa-info-circle" data-message="Congrats! You've reached level 12!">Info</button>
                    <button type="button" class="js-notify btn btn-sm btn-alt-success" data-type="success" data-align="left" data-icon="fa fa-check" data-message="App was updated successfully to 1.2 version">Success</button>
                    <button type="button" class="js-notify btn btn-sm btn-alt-warning" data-type="warning" data-align="left" data-icon="fa fa-warning" data-message="Please make a backup before updating!">Warning</button>
                    <button type="button" class="js-notify btn btn-sm btn-alt-danger" data-type="danger" data-align="left" data-icon="fa fa-times" data-message="Update failed! :-(">Error</button>
                </div>
                <div class="col-md-6 col-xl-4">
                    <h4>Top Center</h4>
                    <button type="button" class="js-notify btn btn-sm btn-alt-info" data-type="info" data-align="center" data-icon="fa fa-info-circle" data-message="Congrats! You've reached level 12!">Info</button>
                    <button type="button" class="js-notify btn btn-sm btn-alt-success" data-type="success" data-align="center" data-icon="fa fa-check" data-message="App was updated successfully to 1.2 version">Success</button>
                    <button type="button" class="js-notify btn btn-sm btn-alt-warning" data-type="warning" data-align="center" data-icon="fa fa-warning" data-message="Please make a backup before updating!">Warning</button>
                    <button type="button" class="js-notify btn btn-sm btn-alt-danger" data-type="danger" data-align="center" data-icon="fa fa-times" data-message="Update failed! :-(">Error</button>
                </div>
                <div class="col-md-6 col-xl-4">
                    <h4>Bottom Right</h4>
                    <button type="button" class="js-notify btn btn-sm btn-alt-info" data-type="info" data-from="bottom" data-icon="fa fa-info-circle" data-message="Congrats! You've reached level 12!">Info</button>
                    <button type="button" class="js-notify btn btn-sm btn-alt-success" data-type="success" data-from="bottom" data-icon="fa fa-check" data-message="App was updated successfully to 1.2 version">Success</button>
                    <button type="button" class="js-notify btn btn-sm btn-alt-warning" data-type="warning" data-from="bottom" data-icon="fa fa-warning" data-message="Please make a backup before updating!">Warning</button>
                    <button type="button" class="js-notify btn btn-sm btn-alt-danger" data-type="danger" data-from="bottom" data-icon="fa fa-times" data-message="Update failed! :-(">Error</button>
                </div>
                <div class="col-md-6 col-xl-4">
                    <h4>Bottom Left</h4>
                    <button type="button" class="js-notify btn btn-sm btn-alt-info" data-type="info" data-from="bottom" data-align="left" data-icon="fa fa-info-circle" data-message="Congrats! You've reached level 12!">Info</button>
                    <button type="button" class="js-notify btn btn-sm btn-alt-success" data-type="success" data-from="bottom" data-align="left" data-icon="fa fa-check" data-message="App was updated successfully to 1.2 version">Success</button>
                    <button type="button" class="js-notify btn btn-sm btn-alt-warning" data-type="warning" data-from="bottom" data-align="left" data-icon="fa fa-warning" data-message="Please make a backup before updating!">Warning</button>
                    <button type="button" class="js-notify btn btn-sm btn-alt-danger" data-type="danger" data-from="bottom" data-align="left" data-icon="fa fa-times" data-message="Update failed! :-(">Error</button>
                </div>
                <div class="col-md-6 col-xl-4">
                    <h4>Bottom Center</h4>
                    <button type="button" class="js-notify btn btn-sm btn-alt-info" data-type="info" data-from="bottom" data-align="center" data-icon="fa fa-info-circle" data-message="Congrats! You've reached level 12!">Info</button>
                    <button type="button" class="js-notify btn btn-sm btn-alt-success" data-type="success" data-from="bottom" data-align="center" data-icon="fa fa-check" data-message="App was updated successfully to 1.2 version">Success</button>
                    <button type="button" class="js-notify btn btn-sm btn-alt-warning" data-type="warning" data-from="bottom" data-align="center" data-icon="fa fa-warning" data-message="Please make a backup before updating!">Warning</button>
                    <button type="button" class="js-notify btn btn-sm btn-alt-danger" data-type="danger" data-from="bottom" data-align="center" data-icon="fa fa-times" data-message="Update failed! :-(">Error</button>
                </div>
            </div>
            <h4>You can also trigger a notification with JS:</h4>
            <pre class="p-4 bg-light">Codebase.helpers('notify', {
    align: 'right',             // 'right', 'left', 'center'
    from: 'top',                // 'top', 'bottom'
    type: 'info',               // 'info', 'success', 'warning', 'danger'
    icon: 'fa fa-info mr-5',    // Icon class
    message: 'Your message!'
});</pre>
        </div>
    </div>
    <!-- END Bootstrap Notify -->
    <!-- END Notifications -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/bootstrap-notify/bootstrap-notify.min.js'); ?>
<?php $cb->get_js('js/plugins/es6-promise/es6-promise.auto.min.js'); ?>
<?php $cb->get_js('js/plugins/sweetalert2/sweetalert2.min.js'); ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/be_ui_activity.min.js'); ?>

<!-- Page JS Helpers (BS Notify Plugin) -->
<script>jQuery(function(){ Codebase.helpers('notify'); });</script>

<?php require 'inc/_global/views/footer_end.php'; ?>
