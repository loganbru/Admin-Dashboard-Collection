<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/dashboards/minimal/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Header -->
<div class="bg-white">
    <div class="content content-full">
        <div class="pt-50 pb-30 text-center">
            <h1 class="font-w300 mb-10">Dashboard</h1>
            <h2 class="h4 text-muted font-w300 mb-0">Welcome <strong>Admin</strong>, everything looks good.</h2>
        </div>
    </div>
</div>
<!-- END Header -->

<!-- Page Content -->
<div class="content">
    <!-- Mini Stats -->
    <div class="row">
        <div class="col-6 col-xl-3">
            <a class="block block-rounded" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="py-20 text-center">
                        <div class="font-size-h2 font-w700 mb-0 text-primary-dark">869</div>
                        <div class="font-size-sm font-w600 text-primary-light">Sales</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-xl-3">
            <a class="block block-rounded" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="py-20 text-center">
                        <div class="font-size-h2 font-w700 mb-0 text-primary-dark">$1,360</div>
                        <div class="font-size-sm font-w600 text-primary-light">Earnings</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-xl-3">
            <a class="block block-rounded" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="py-20 text-center">
                        <div class="font-size-h2 font-w700 mb-0 text-primary-dark">$15,500</div>
                        <div class="font-size-sm font-w600 text-primary-light">Total</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-xl-3">
            <a class="block block-rounded" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="py-20 text-center">
                        <div class="font-size-h2 font-w700 mb-0 text-primary-dark">$19,600</div>
                        <div class="font-size-sm font-w600 text-primary-light">Estimated</div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!-- END Mini Stats -->

    <!-- Charts -->
    <div class="row">
        <div class="col-md-6">
            <div class="block block-rounded">
                <div class="block-header">
                    <h3 class="block-title font-w600">Sales</h3>
                </div>
                <div class="block-content">
                    <div class="pull-all">
                        <!-- Lines Chart Container functionality is initialized in js/pages/db_minimal.min.js which was auto compiled from _es6/pages/db_minimal.js -->
                        <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                        <canvas class="js-chartjs-minimal-lines"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="block block-rounded">
                <div class="block-header">
                    <h3 class="block-title font-w600">Earnings</h3>
                </div>
                <div class="block-content">
                    <div class="pull-all">
                        <!-- Lines Chart Container functionality is initialized in js/pages/db_minimal.min.js which was auto compiled from _es6/pages/db_minimal.js -->
                        <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                        <canvas class="js-chartjs-minimal-lines2"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Charts -->

    <!-- Progress -->
    <div class="row">
        <div class="col-md-4">
            <div class="block">
                <div class="block-content block-content-full">
                    <div class="py-20 text-center">
                        <div class="mb-20">
                            <i class="fa fa-coffee fa-3x"></i>
                        </div>
                        <div class="font-size-h4 font-w600">Pro Plan</div>
                        <div class="text-muted">Active plan.</div>
                        <div class="pt-20">
                            <a class="btn btn-rounded btn-alt-primary" href="javascript:void(0)">
                                <i class="fa fa-arrow-up mr-5"></i> Upgrade to VIP
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
                            <i class="fa fa-twitter fa-3x"></i>
                        </div>
                        <div class="font-size-h4 font-w600">+107 followers</div>
                        <div class="text-muted">Awesome!</div>
                        <div class="pt-20">
                            <a class="btn btn-rounded btn-alt-primary" href="javascript:void(0)">
                                <i class="fa fa-link mr-5"></i> Check them out
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
                            <i class="fa fa-envelope-open fa-3x"></i>
                        </div>
                        <div class="font-size-h4 font-w600">10,000 Subscribers</div>
                        <div class="text-muted">Keep it up!</div>
                        <div class="pt-20">
                            <a class="btn btn-rounded btn-alt-primary" href="javascript:void(0)">
                                <i class="fa fa-cog mr-5"></i> Manage list
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Progress -->

    <!-- More Data -->
    <div class="row">
        <div class="col-md-6">
            <a class="block block-rounded" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <i class="si si-graph fa-2x text-body-bg-dark"></i>
                    <div class="row pt-10 pb-30 text-center">
                        <div class="col-6 border-r">
                            <div class="font-size-h3 font-w600">5</div>
                            <div class="font-w600 text-primary-light">Plans</div>
                        </div>
                        <div class="col-6">
                            <div class="font-size-h3 font-w600">17,890</div>
                            <div class="font-w600 text-primary-light">Subscriptions</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6">
            <a class="block block-rounded" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="text-right">
                        <i class="si si-wallet fa-2x text-body-bg-dark"></i>
                    </div>
                    <div class="row pt-10 pb-30 text-center font-w600">
                        <div class="col-6 border-r">
                            <div class="font-size-h3">$1,360</div>
                            <div class="font-size-sm text-primary-light">Today</div>
                        </div>
                        <div class="col-6">
                            <div class="font-size-h3">$5,680</div>
                            <div class="font-size-sm text-primary-light">Last Week</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!-- END More Data -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/chartjs/Chart.bundle.min.js'); ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/db_minimal.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>