<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Codebase - Page specific configuration
$cb->l_m_content        = 'narrow';
$cb->l_header_fixed     = true;
$cb->l_header_style     = '';
$cb->l_sidebar_inverse  = true;
?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <div class="row gutters-tiny invisible" data-toggle="appear">
        <!-- Row #1 -->
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block text-center" href="javascript:void(0)">
                <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-dusk">
                    <div class="ribbon-box">750</div>
                    <p class="mt-5">
                        <i class="si si-book-open fa-3x text-white-op"></i>
                    </p>
                    <p class="font-w600 text-white">Articles</p>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block text-center" href="javascript:void(0)">
                <div class="block-content bg-gd-primary">
                    <p class="mt-5">
                        <i class="si si-plus fa-3x text-white-op"></i>
                    </p>
                    <p class="font-w600 text-white">New Article</p>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block text-center" href="be_pages_forum_categories.php">
                <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-sea">
                    <div class="ribbon-box">16</div>
                    <p class="mt-5">
                        <i class="si si-bubbles fa-3x text-white-op"></i>
                    </p>
                    <p class="font-w600 text-white">Comments</p>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block text-center" href="be_pages_generic_search.php">
                <div class="block-content bg-gd-lake">
                    <p class="mt-5">
                        <i class="si si-magnifier fa-3x text-white-op"></i>
                    </p>
                    <p class="font-w600 text-white">Search</p>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block text-center" href="be_comp_charts.php">
                <div class="block-content bg-gd-emerald">
                    <p class="mt-5">
                        <i class="si si-bar-chart fa-3x text-white-op"></i>
                    </p>
                    <p class="font-w600 text-white">Statistics</p>
                </div>
            </a>
        </div>
        <div class="col-6 col-md-4 col-xl-2">
            <a class="block text-center" href="javascript:void(0)">
                <div class="block-content bg-gd-corporate">
                    <p class="mt-5">
                        <i class="si si-settings fa-3x text-white-op"></i>
                    </p>
                    <p class="font-w600 text-white">Settings</p>
                </div>
            </a>
        </div>
        <!-- END Row #1 -->
    </div>
    <div class="row row-deck gutters-tiny invisible" data-toggle="appear">
        <!-- Row #2 -->
        <div class="col-xl-4">
            <a class="block block-transparent bg-image d-flex align-items-stretch" href="javascript:void(0)" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo24@2x.jpg');">
                <div class="block-content block-sticky-options pt-100 bg-black-op">
                    <div class="block-options block-options-left text-white">
                        <div class="block-options-item">
                            <i class="si si-book-open text-white-op"></i>
                        </div>
                    </div>
                    <div class="block-options text-white">
                        <div class="block-options-item">
                            <i class="si si-bubbles"></i> 15
                        </div>
                        <div class="block-options-item">
                            <i class="si si-eye"></i> 3800
                        </div>
                    </div>
                    <h2 class="h3 font-w700 text-white mb-5">Travel the world</h2>
                    <h3 class="h5 text-white-op">Explore and achieve great things</h3>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-xl-4">
            <a class="block block-transparent bg-image d-flex align-items-stretch" href="javascript:void(0)" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo32@2x.jpg');">
                <div class="block-content block-sticky-options pt-100 bg-primary-dark-op">
                    <div class="block-options block-options-left text-white">
                        <div class="block-options-item">
                            <i class="si si-book-open text-white-op"></i>
                        </div>
                    </div>
                    <div class="block-options text-white">
                        <div class="block-options-item">
                            <i class="si si-bubbles"></i> 4
                        </div>
                        <div class="block-options-item">
                            <i class="si si-eye"></i> 1680
                        </div>
                    </div>
                    <h2 class="h3 font-w700 text-white mb-5">Inspiring Solutions</h2>
                    <h3 class="h5 text-white-op">10 things you should do today</h3>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-xl-4">
            <a class="block block-transparent bg-image d-flex align-items-stretch" href="javascript:void(0)" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo10@2x.jpg');">
                <div class="block-content block-sticky-options pt-100 bg-primary-op">
                    <div class="block-options block-options-left text-white">
                        <div class="block-options-item">
                            <i class="si si-book-open text-white-op"></i>
                        </div>
                    </div>
                    <div class="block-options text-white">
                        <div class="block-options-item">
                            <i class="si si-bubbles"></i> 16
                        </div>
                        <div class="block-options-item">
                            <i class="si si-eye"></i> 4450
                        </div>
                    </div>
                    <h2 class="h3 font-w700 text-white mb-5">Alternative Road</h2>
                    <h3 class="h5 text-white-op">Don't let anything disorient you</h3>
                </div>
            </a>
        </div>
        <!-- END Row #2 -->
    </div>
    <div class="row gutters-tiny invisible" data-toggle="appear">
        <!-- Row #3 -->
        <div class="col-xl-8 d-flex align-items-stretch">
            <div class="block block-themed block-mode-loading-inverse block-transparent bg-image w-100" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo34@2x.jpg');">
                <div class="block-header bg-black-op">
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
                <div class="block-content bg-black-op">
                    <div class="pull-r-l">
                        <!-- Lines Chart Container functionality is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _es6/pages/be_pages_dashboard.js -->
                        <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                        <canvas class="js-chartjs-dashboard-lines"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 d-flex align-items-stretch">
            <div class="block block-transparent bg-primary-dark d-flex align-items-center w-100">
                <div class="block-content block-content-full">
                    <div class="py-15 px-20 clearfix border-black-op-b">
                        <div class="float-right mt-15 d-none d-sm-block">
                            <i class="si si-book-open fa-2x text-success"></i>
                        </div>
                        <div class="font-size-h3 font-w600 text-success" data-toggle="countTo" data-speed="1000" data-to="750">0</div>
                        <div class="font-size-sm font-w600 text-uppercase text-success-light">Articles</div>
                    </div>
                    <div class="py-15 px-20 clearfix border-black-op-b">
                        <div class="float-right mt-15 d-none d-sm-block">
                            <i class="si si-wallet fa-2x text-danger"></i>
                        </div>
                        <div class="font-size-h3 font-w600 text-danger">$<span data-toggle="countTo" data-speed="1000" data-to="980">0</span></div>
                        <div class="font-size-sm font-w600 text-uppercase text-danger-light">Earnings</div>
                    </div>
                    <div class="py-15 px-20 clearfix border-black-op-b">
                        <div class="float-right mt-15 d-none d-sm-block">
                            <i class="si si-envelope-open fa-2x text-warning"></i>
                        </div>
                        <div class="font-size-h3 font-w600 text-warning" data-toggle="countTo" data-speed="1000" data-to="38">0</div>
                        <div class="font-size-sm font-w600 text-uppercase text-warning-light">Messages</div>
                    </div>
                    <div class="py-15 px-20 clearfix border-black-op-b">
                        <div class="float-right mt-15 d-none d-sm-block">
                            <i class="si si-users fa-2x text-info"></i>
                        </div>
                        <div class="font-size-h3 font-w600 text-info" data-toggle="countTo" data-speed="1000" data-to="260">0</div>
                        <div class="font-size-sm font-w600 text-uppercase text-info-light">Online</div>
                    </div>
                    <div class="py-15 px-20 clearfix">
                        <div class="float-right mt-15 d-none d-sm-block">
                            <i class="si si-drop fa-2x text-elegance"></i>
                        </div>
                        <div class="font-size-h3 font-w600 text-elegance" data-toggle="countTo" data-speed="1000" data-to="59">0</div>
                        <div class="font-size-sm font-w600 text-uppercase text-elegance-light">Themes</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Row #3 -->
    </div>
    <div class="row gutters-tiny invisible" data-toggle="appear">
        <!-- Row #4 -->
        <div class="col-md-4">
            <div class="block block-transparent bg-primary">
                <div class="block-content block-content-full">
                    <div class="py-20 text-center">
                        <div class="mb-20">
                            <i class="fa fa-envelope-open fa-4x text-primary-light"></i>
                        </div>
                        <div class="font-size-h4 font-w600 text-white">19.5k Subscribers</div>
                        <div class="text-white-op">Your main list is growing!</div>
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
            <div class="block block-transparent bg-info">
                <div class="block-content block-content-full">
                    <div class="py-20 text-center">
                        <div class="mb-20">
                            <i class="fa fa-twitter fa-4x text-info-light"></i>
                        </div>
                        <div class="font-size-h4 font-w600 text-white">+98 followers</div>
                        <div class="text-white-op">You are doing great!</div>
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
            <div class="block block-transparent bg-success">
                <div class="block-content block-content-full">
                    <div class="py-20 text-center">
                        <div class="mb-20">
                            <i class="fa fa-check fa-4x text-success-light"></i>
                        </div>
                        <div class="font-size-h4 font-w600 text-white">Personal Plan</div>
                        <div class=" text-white-op">This is your current active plan</div>
                        <div class="pt-20">
                            <a class="btn btn-rounded btn-alt-success" href="javascript:void(0)">
                                <i class="fa fa-arrow-up mr-5"></i> Upgrade to VIP
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Row #4 -->
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/chartjs/Chart.bundle.min.js'); ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/be_pages_dashboard.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>