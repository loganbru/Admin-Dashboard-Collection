<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/dashboards/classic/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <div class="row">
        <!-- Row #1 -->
        <div class="col-md-6 col-xl-3">
            <a class="block block-bordered block-rounded block-link-shadow text-left" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="float-right mt-10">
                        <i class="si si-bag fa-3x text-elegance-lighter"></i>
                    </div>
                    <div class="font-size-h3 font-w600">34</div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">Sales</div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-bordered block-rounded block-link-shadow text-left" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="float-right mt-10">
                        <i class="si si-wallet fa-3x text-flat-lighter"></i>
                    </div>
                    <div class="font-size-h3 font-w600">$780</div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">Earnings</div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-bordered block-rounded block-link-shadow text-left" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="float-right mt-10">
                        <i class="si si-globe fa-3x text-earth-lighter"></i>
                    </div>
                    <div class="font-size-h3 font-w600">65</div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">Online</div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-bordered block-rounded block-link-shadow text-left" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="float-right mt-10">
                        <i class="si si-briefcase fa-3x text-pulse-lighter"></i>
                    </div>
                    <div class="font-size-h3 font-w600">7</div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">Projects</div>
                </div>
            </a>
        </div>
        <!-- END Row #1 -->
    </div>
    <div class="row">
        <!-- Row #2 -->
        <div class="col-md-6">
            <div class="block block-bordered block-rounded">
                <div class="block-header block-header-default border-b">
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
                <div class="block-content bg-body">
                    <div class="row gutters-tiny items-push text-center">
                        <div class="col-6 col-sm-3">
                            <div class="font-w600 text-success">
                                <i class="fa fa-caret-up"></i> +16%
                            </div>
                            <div class="font-size-h4 font-w600">720</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">This Month</div>
                        </div>
                        <div class="col-6 col-sm-3">
                            <div class="font-w600 text-danger">
                                <i class="fa fa-caret-down"></i> -3%
                            </div>
                            <div class="font-size-h4 font-w600">160</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">This Week</div>
                        </div>
                        <div class="col-6 col-sm-3">
                            <div class="font-w600 text-success">
                                <i class="fa fa-caret-up"></i> +9%
                            </div>
                            <div class="font-size-h4 font-w600">24.3</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Average</div>
                        </div>
                        <div class="col-6 col-sm-3">
                            <div class="font-w600 text-danger">
                                <i class="fa fa-caret-down"></i> -6%
                            </div>
                            <div class="font-size-h4 font-w600">96.2</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">This Year</div>
                        </div>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <!-- Lines Chart Container functionality is initialized in js/pages/db_classic.min.js which was auto compiled from _es6/pages/db_classic.js -->
                    <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                    <canvas class="js-chartjs-classic-lines"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="block block-bordered block-rounded">
                <div class="block-header block-header-default border-b">
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
                <div class="block-content bg-body">
                    <div class="row items-push text-center">
                        <div class="col-6 col-sm-3">
                            <div class="font-w600 text-success">
                                <i class="fa fa-caret-up"></i> +4%
                            </div>
                            <div class="font-size-h4 font-w600">$ 6,540</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">This Month</div>
                        </div>
                        <div class="col-6 col-sm-3">
                            <div class="font-w600 text-danger">
                                <i class="fa fa-caret-down"></i> -7%
                            </div>
                            <div class="font-size-h4 font-w600">$ 1,525</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">This Week</div>
                        </div>
                        <div class="col-6 col-sm-3">
                            <div class="font-w600 text-success">
                                <i class="fa fa-caret-up"></i> +35%
                            </div>
                            <div class="font-size-h4 font-w600">$ 9,352</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Balance</div>
                        </div>
                        <div class="col-6 col-sm-3">
                            <div class="font-w600 text-success">
                                <i class="fa fa-caret-up"></i> +28%
                            </div>
                            <div class="font-size-h4 font-w600">$ 19k</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">This Year</div>
                        </div>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <!-- Lines Chart Container functionality is initialized in js/pages/db_classic.min.js which was auto compiled from _es6/pages/db_classic.js -->
                    <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                    <canvas class="js-chartjs-classic-lines2"></canvas>
                </div>
            </div>
        </div>
        <!-- END Row #2 -->
    </div>
    <div class="row">
        <!-- Row #3 -->
        <div class="col-md-4">
            <div class="block block-bordered block-rounded">
                <div class="block-content block-content-full">
                    <div class="py-20 text-center">
                        <div class="mb-20">
                            <i class="si si-earphones fa-3x text-success"></i>
                        </div>
                        <div class="font-size-h4 font-w600">4.8k Songs</div>
                        <div class="text-muted">Your library is growing!</div>
                        <div class="pt-20">
                            <a class="btn btn-rounded btn-alt-success" href="javascript:void(0)">
                                <i class="fa fa-shopping-bag mr-5"></i> Get more
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="block block-bordered block-rounded">
                <div class="block-content block-content-full">
                    <div class="py-20 text-center">
                        <div class="mb-20">
                            <i class="si si-diamond fa-3x text-warning"></i>
                        </div>
                        <div class="font-size-h4 font-w600">7580 Points</div>
                        <div class="text-muted">Nice, you are doing great!</div>
                        <div class="pt-20">
                            <a class="btn btn-rounded btn-alt-warning" href="javascript:void(0)">
                                <i class="fa fa-check mr-5"></i> Redeem them now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="block block-bordered block-rounded">
                <div class="block-content block-content-full">
                    <div class="py-20 text-center">
                        <div class="mb-20">
                            <i class="si si-grid fa-3x text-info"></i>
                        </div>
                        <div class="font-size-h4 font-w600">2 Grid Servers</div>
                        <div class="text-muted">Currently active.</div>
                        <div class="pt-20">
                            <a class="btn btn-rounded btn-alt-info" href="javascript:void(0)">
                                <i class="fa fa-plus mr-5"></i> Add More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Row #3 -->
    </div>
    <div class="row">
        <!-- Row #4 -->
        <div class="col-md-6">
            <a class="block block-bordered block-rounded" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <i class="si si-game-controller fa-2x text-body-bg-dark"></i>
                    <div class="row pt-10 pb-30 text-center">
                        <div class="col-6 border-r">
                            <div class="font-size-h3 font-w600">190</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Games</div>
                        </div>
                        <div class="col-6">
                            <div class="font-size-h3 font-w600">870</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Subscriptions</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6">
            <a class="block block-bordered block-rounded" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="text-right">
                        <i class="si si-wallet fa-2x text-body-bg-dark"></i>
                    </div>
                    <div class="row pt-10 pb-30 text-center">
                        <div class="col-6 border-r">
                            <div class="font-size-h3 font-w600">$840</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Today</div>
                        </div>
                        <div class="col-6">
                            <div class="font-size-h3 font-w600">$4,490</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Last Week</div>
                        </div>
                    </div>
                </div>
            </a>
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
<?php $cb->get_js('js/pages/db_classic.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>