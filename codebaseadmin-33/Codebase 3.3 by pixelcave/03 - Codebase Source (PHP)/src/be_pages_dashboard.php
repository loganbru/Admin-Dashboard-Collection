<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $cb->get_css('js/plugins/slick/slick.css'); ?>
<?php $cb->get_css('js/plugins/slick/slick-theme.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <div class="row invisible" data-toggle="appear">
        <!-- Row #1 -->
        <div class="col-6 col-xl-3">
            <a class="block block-link-shadow text-right" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="float-left mt-10 d-none d-sm-block">
                        <i class="si si-bag fa-3x text-body-bg-dark"></i>
                    </div>
                    <div class="font-size-h3 font-w600" data-toggle="countTo" data-speed="1000" data-to="1500">0</div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">Sales</div>
                </div>
            </a>
        </div>
        <div class="col-6 col-xl-3">
            <a class="block block-link-shadow text-right" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="float-left mt-10 d-none d-sm-block">
                        <i class="si si-wallet fa-3x text-body-bg-dark"></i>
                    </div>
                    <div class="font-size-h3 font-w600">$<span data-toggle="countTo" data-speed="1000" data-to="780">0</span></div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">Earnings</div>
                </div>
            </a>
        </div>
        <div class="col-6 col-xl-3">
            <a class="block block-link-shadow text-right" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="float-left mt-10 d-none d-sm-block">
                        <i class="si si-envelope-open fa-3x text-body-bg-dark"></i>
                    </div>
                    <div class="font-size-h3 font-w600" data-toggle="countTo" data-speed="1000" data-to="15">0</div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">Messages</div>
                </div>
            </a>
        </div>
        <div class="col-6 col-xl-3">
            <a class="block block-link-shadow text-right" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="float-left mt-10 d-none d-sm-block">
                        <i class="si si-users fa-3x text-body-bg-dark"></i>
                    </div>
                    <div class="font-size-h3 font-w600" data-toggle="countTo" data-speed="1000" data-to="4252">0</div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">Online</div>
                </div>
            </a>
        </div>
        <!-- END Row #1 -->
    </div>
    <div class="row invisible" data-toggle="appear">
        <!-- Row #2 -->
        <div class="col-md-6">
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">
                        Sales <small>This week</small>
                    </h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option">
                            <i class="si si-wrench"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <div class="pull-all">
                        <!-- Lines Chart Container functionality is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _es6/pages/be_pages_dashboard.js -->
                        <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                        <canvas class="js-chartjs-dashboard-lines"></canvas>
                    </div>
                </div>
                <div class="block-content">
                    <div class="row items-push">
                        <div class="col-6 col-sm-4 text-center text-sm-left">
                            <div class="font-size-sm font-w600 text-uppercase text-muted">This Month</div>
                            <div class="font-size-h4 font-w600">720</div>
                            <div class="font-w600 text-success">
                                <i class="fa fa-caret-up"></i> +16%
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 text-center text-sm-left">
                            <div class="font-size-sm font-w600 text-uppercase text-muted">This Week</div>
                            <div class="font-size-h4 font-w600">160</div>
                            <div class="font-w600 text-danger">
                                <i class="fa fa-caret-down"></i> -3%
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 text-center text-sm-left">
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Average</div>
                            <div class="font-size-h4 font-w600">24.3</div>
                            <div class="font-w600 text-success">
                                <i class="fa fa-caret-up"></i> +9%
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">
                        Earnings <small>This week</small>
                    </h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option">
                            <i class="si si-wrench"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <div class="pull-all">
                        <!-- Lines Chart Container functionality is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _es6/pages/be_pages_dashboard.js -->
                        <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                        <canvas class="js-chartjs-dashboard-lines2"></canvas>
                    </div>
                </div>
                <div class="block-content bg-white">
                    <div class="row items-push">
                        <div class="col-6 col-sm-4 text-center text-sm-left">
                            <div class="font-size-sm font-w600 text-uppercase text-muted">This Month</div>
                            <div class="font-size-h4 font-w600">$ 6,540</div>
                            <div class="font-w600 text-success">
                                <i class="fa fa-caret-up"></i> +4%
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 text-center text-sm-left">
                            <div class="font-size-sm font-w600 text-uppercase text-muted">This Week</div>
                            <div class="font-size-h4 font-w600">$ 1,525</div>
                            <div class="font-w600 text-danger">
                                <i class="fa fa-caret-down"></i> -7%
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 text-center text-sm-left">
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Balance</div>
                            <div class="font-size-h4 font-w600">$ 9,352</div>
                            <div class="font-w600 text-success">
                                <i class="fa fa-caret-up"></i> +35%
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Row #2 -->
    </div>
    <div class="row invisible" data-toggle="appear">
        <!-- Row #3 -->
        <div class="col-md-4">
            <div class="block">
                <div class="block-content block-content-full">
                    <div class="py-20 text-center">
                        <div class="mb-20">
                            <i class="fa fa-envelope-open fa-4x text-primary"></i>
                        </div>
                        <div class="font-size-h4 font-w600">9.25k Subscribers</div>
                        <div class="text-muted">Your main list is growing!</div>
                        <div class="pt-20">
                            <a class="btn btn-rounded btn-alt-primary" href="javascript:void(0)">
                                <i class="fa fa-cog mr-5"></i> Manage list
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="block">
                <div class="block-content block-content-full">
                    <div class="py-20 text-center">
                        <div class="mb-20">
                            <i class="fa fa-twitter fa-4x text-info"></i>
                        </div>
                        <div class="font-size-h4 font-w600">+36 followers</div>
                        <div class="text-muted">You are doing great!</div>
                        <div class="pt-20">
                            <a class="btn btn-rounded btn-alt-info" href="javascript:void(0)">
                                <i class="fa fa-users mr-5"></i> Check them out
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="block">
                <div class="block-content block-content-full">
                    <div class="py-20 text-center">
                        <div class="mb-20">
                            <i class="fa fa-check fa-4x text-success"></i>
                        </div>
                        <div class="font-size-h4 font-w600">Business Plan</div>
                        <div class="text-muted">This is your current active plan</div>
                        <div class="pt-20">
                            <a class="btn btn-rounded btn-alt-success" href="javascript:void(0)">
                                <i class="fa fa-arrow-up mr-5"></i> Upgrade to VIP
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Row #3 -->
    </div>
    <div class="row invisible" data-toggle="appear">
        <!-- Row #4 -->
        <div class="col-md-6">
            <a class="block block-link-shadow overflow-hidden" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <i class="si si-briefcase fa-2x text-body-bg-dark"></i>
                    <div class="row py-20">
                        <div class="col-6 text-right border-r">
                            <div class="invisible" data-toggle="appear" data-class="animated fadeInLeft">
                                <div class="font-size-h3 font-w600">16</div>
                                <div class="font-size-sm font-w600 text-uppercase text-muted">Projects</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="invisible" data-toggle="appear" data-class="animated fadeInRight">
                                <div class="font-size-h3 font-w600">2</div>
                                <div class="font-size-sm font-w600 text-uppercase text-muted">Active</div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6">
            <a class="block block-link-shadow overflow-hidden" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="text-right">
                        <i class="si si-users fa-2x text-body-bg-dark"></i>
                    </div>
                    <div class="row py-20">
                        <div class="col-6 text-right border-r">
                            <div class="invisible" data-toggle="appear" data-class="animated fadeInLeft">
                                <div class="font-size-h3 font-w600 text-info">63250</div>
                                <div class="font-size-sm font-w600 text-uppercase text-muted">Accounts</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="invisible" data-toggle="appear" data-class="animated fadeInRight">
                                <div class="font-size-h3 font-w600 text-success">97%</div>
                                <div class="font-size-sm font-w600 text-uppercase text-muted">Active</div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <!-- END Row #4 -->
    </div>
    <div class="row invisible" data-toggle="appear">
        <!-- Row #5 -->
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block block-link-shadow text-center" href="be_pages_generic_inbox.php">
                <div class="block-content ribbon ribbon-bookmark ribbon-success ribbon-left">
                    <div class="ribbon-box">15</div>
                    <p class="mt-5">
                        <i class="si si-envelope-letter fa-3x"></i>
                    </p>
                    <p class="font-w600">Inbox</p>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block block-link-shadow text-center" href="be_pages_generic_profile.php">
                <div class="block-content">
                    <p class="mt-5">
                        <i class="si si-user fa-3x"></i>
                    </p>
                    <p class="font-w600">Profile</p>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block block-link-shadow text-center" href="be_pages_forum_categories.php">
                <div class="block-content ribbon ribbon-bookmark ribbon-primary ribbon-left">
                    <div class="ribbon-box">3</div>
                    <p class="mt-5">
                        <i class="si si-bubbles fa-3x"></i>
                    </p>
                    <p class="font-w600">Forum</p>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block block-link-shadow text-center" href="be_pages_generic_search.php">
                <div class="block-content">
                    <p class="mt-5">
                        <i class="si si-magnifier fa-3x"></i>
                    </p>
                    <p class="font-w600">Search</p>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block block-link-shadow text-center" href="be_comp_charts.php">
                <div class="block-content">
                    <p class="mt-5">
                        <i class="si si-bar-chart fa-3x"></i>
                    </p>
                    <p class="font-w600">Live Stats</p>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content">
                    <p class="mt-5">
                        <i class="si si-settings fa-3x"></i>
                    </p>
                    <p class="font-w600">Settings</p>
                </div>
            </a>
        </div>
        <!-- END Row #5 -->
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>

<!-- Onboarding Modal functionality is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _es6/pages/be_pages_dashboard.js -->
<div class="modal fade" id="modal-onboarding" tabindex="-1" role="dialog" aria-labelledby="modal-onboarding" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-popout" role="document">
        <div class="modal-content rounded">
            <div class="block block-rounded block-transparent mb-0 bg-pattern" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/various/bg-pattern-inverse.png');">
                <div class="block-header justify-content-end">
                    <div class="block-options">
                        <a class="font-w600 text-danger" href="#" data-dismiss="modal" aria-label="Close">
                            Skip Intro
                        </a>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <div class="js-slider slick-dotted-inner" data-dots="true" data-arrows="false" data-infinite="false">
                        <div class="pb-50">
                            <div class="row justify-content-center text-center">
                                <div class="col-md-10 col-lg-8">
                                    <i class="si si-fire fa-4x text-primary"></i>
                                    <h3 class="font-size-h2 font-w300 mt-20">Welcome to Codebase!</h3>
                                    <p class="text-muted">
                                        This is a modal you can show to your users when they first sign in to their dashboard. It is a great place to welcome and introduce them to your application and its functionality.
                                    </p>
                                    <button type="button" class="btn btn-sm btn-hero btn-noborder btn-primary mb-10 mx-5" onclick="jQuery('.js-slider').slick('slickGoTo', 1);">
                                        Key features <i class="fa fa-arrow-right ml-5"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="slick-slide pb-50">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-8">
                                    <h3 class="font-size-h2 font-w300 mb-5">Backup</h3>
                                    <p class="text-muted">
                                        Backups are taken with every new change to ensure complete piece of mind. They are kept safe for immediate restores.
                                    </p>
                                    <h3 class="font-size-h2 font-w300 mb-5">Invoices</h3>
                                    <p class="text-muted">
                                        They are sent automatically to your clients with the completion of every project, so you don't have to worry about getting paid.
                                    </p>
                                    <div class="text-center">
                                        <button type="button" class="btn btn-sm btn-hero btn-noborder btn-primary mb-10 mx-5" onclick="jQuery('.js-slider').slick('slickGoTo', 2);">
                                            Complete Profile <i class="fa fa-arrow-right ml-5"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slick-slide pb-50">
                            <div class="row justify-content-center text-center">
                                <div class="col-md-10 col-lg-8">
                                    <i class="si si-note fa-4x text-primary"></i>
                                    <h3 class="font-size-h2 font-w300 mt-20">Finally, let us know your name</h3>
                                    <form class="push">
                                        <input type="text" class="form-control form-control-lg py-20 border-2x" id="onboard-first-name" name="onboard-first-name" placeholder="Enter your first name..">
                                    </form>
                                    <button type="button" class="btn btn-sm btn-hero btn-noborder btn-success mb-10 mx-5" data-dismiss="modal" aria-label="Close">
                                        Get Started <i class="fa fa-check ml-5"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Onboarding Modal -->

<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/chartjs/Chart.bundle.min.js'); ?>
<?php $cb->get_js('js/plugins/slick/slick.min.js'); ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/be_pages_dashboard.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>
