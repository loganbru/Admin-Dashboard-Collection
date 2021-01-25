<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/dashboards/corporate/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Header -->
<div class="bg-primary-dark">
    <div class="content content-top">
        <div class="row push">
            <div class="col-md py-10 d-md-flex align-items-md-center text-center">
                <h1 class="text-white mb-0">
                    <span class="font-w300">Dashboard</span>
                    <span class="font-w400 font-size-lg text-white-op d-none d-md-inline-block">Welcome Admin</span>
                </h1>
            </div>
            <div class="col-md py-10 d-md-flex align-items-md-center justify-content-md-end text-center">
                <button type="button" class="btn btn-alt-primary">
                    <i class="fa fa-user-plus mr-5"></i> New Account
                </button>
            </div>
        </div>
    </div>
</div>
<!-- END Header -->

<!-- Page Content -->
<div class="bg-white">
    <!-- Breadcrumb -->
    <div class="content">
        <nav class="breadcrumb mb-0">
            <a class="breadcrumb-item" href="javascript:void(0)">Home</a>
            <span class="breadcrumb-item active">Dashboard</span>
        </nav>
    </div>
    <!-- END Breadcrumb -->

    <!-- Content -->
    <div class="content">
        <!-- Icon Navigation -->
        <div class="row gutters-tiny push">
            <div class="col-6 col-md-4 col-xl-2">
                <a class="block block-rounded block-bordered block-link-shadow text-center" href="javascript:void(0)">
                    <div class="block-content">
                        <p class="mt-5">
                            <i class="si si-home fa-3x text-muted"></i>
                        </p>
                        <p class="font-w600">Home</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-xl-2">
                <a class="block block-rounded block-bordered block-link-shadow ribbon ribbon-primary text-center" href="javascript:void(0)">
                    <div class="ribbon-box">5</div>
                    <div class="block-content">
                        <p class="mt-5">
                            <i class="si si-envelope fa-3x text-muted"></i>
                        </p>
                        <p class="font-w600">Inbox</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-xl-2">
                <a class="block block-rounded block-bordered block-link-shadow text-center" href="javascript:void(0)">
                    <div class="block-content">
                        <p class="mt-5">
                            <i class="si si-bag fa-3x text-muted"></i>
                        </p>
                        <p class="font-w600">Cart</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-xl-2">
                <a class="block block-rounded block-bordered block-link-shadow text-center" href="javascript:void(0)">
                    <div class="block-content">
                        <p class="mt-5">
                            <i class="si si-bar-chart fa-3x text-muted"></i>
                        </p>
                        <p class="font-w600">Statistics</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-xl-2">
                <a class="block block-rounded block-bordered block-link-shadow ribbon ribbon-primary text-center" href="javascript:void(0)">
                    <div class="ribbon-box">3</div>
                    <div class="block-content">
                        <p class="mt-5">
                            <i class="si si-cloud-download fa-3x text-muted"></i>
                        </p>
                        <p class="font-w600">Downloads</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-xl-2">
                <a class="block block-rounded block-bordered block-link-shadow text-center" href="javascript:void(0)">
                    <div class="block-content">
                        <p class="mt-5">
                            <i class="si si-docs fa-3x text-muted"></i>
                        </p>
                        <p class="font-w600">Documents</p>
                    </div>
                </a>
            </div>
        </div>
        <!-- END Icon Navigation -->

        <!-- Mini Stats -->
        <div class="row">
            <div class="col-md-6 col-xl-3">
                <a class="block block-rounded block-bordered" href="javascript:void(0)">
                    <div class="block-content p-5">
                        <div class="py-30 text-center bg-body-light rounded">
                            <div class="font-size-h2 font-w700 mb-0 text-muted">78</div>
                            <div class="font-size-sm font-w600 text-uppercase">Sales</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3">
                <a class="block block-rounded block-bordered" href="javascript:void(0)">
                    <div class="block-content p-5">
                        <div class="py-30 text-center bg-body-light rounded">
                            <div class="font-size-h2 font-w700 mb-0 text-muted">$880</div>
                            <div class="font-size-sm font-w600 text-uppercase">Earnings</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3">
                <a class="block block-rounded block-bordered" href="javascript:void(0)">
                    <div class="block-content p-5">
                        <div class="py-30 text-center bg-body-light rounded">
                            <div class="font-size-h2 font-w700 mb-0 text-muted">$4,500</div>
                            <div class="font-size-sm font-w600 text-uppercase">Total</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3">
                <a class="block block-rounded block-bordered" href="javascript:void(0)">
                    <div class="block-content p-5">
                        <div class="py-30 text-center bg-body-light rounded">
                            <div class="font-size-h2 font-w700 mb-0 text-muted">$19,700</div>
                            <div class="font-size-sm font-w600 text-uppercase">Estimated</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- END Mini Stats -->

        <!-- Charts -->
        <div class="row">
            <div class="col-md-6">
                <div class="block block-rounded block-bordered">
                    <div class="block-header">
                        <h3 class="block-title text-uppercase">Sales</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                            <button type="button" class="btn-block-option">
                                <i class="si si-wrench"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content p-5">
                        <!-- Lines Chart Container functionality is initialized in js/pages/db_corporate.min.js which was auto compiled from _es6/pages/db_corporate.js -->
                        <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                        <canvas class="js-chartjs-corporate-lines"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="block block-rounded block-bordered">
                    <div class="block-header">
                        <h3 class="block-title text-uppercase">Earnings</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                            <button type="button" class="btn-block-option">
                                <i class="si si-wrench"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content p-5">
                        <!-- Lines Chart Container functionality is initialized in js/pages/db_corporate.min.js which was auto compiled from _es6/pages/db_corporate.js -->
                        <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                        <canvas class="js-chartjs-corporate-lines2"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Charts -->

        <!-- More Data -->
        <div class="row">
            <!-- Latest Orders -->
            <div class="col-xl-6">
                <div class="block block-rounded block-bordered">
                    <div class="block-header">
                        <h3 class="block-title text-uppercase">Latest Orders</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                            <button type="button" class="btn-block-option">
                                <i class="si si-wrench"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content p-5">
                        <table class="table table-borderless table-striped mb-0">
                            <thead>
                                <tr>
                                    <th style="width: 100px;">ID</th>
                                    <th>Status</th>
                                    <th class="d-none d-sm-table-cell">Customer</th>
                                    <th class="text-right">Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <a class="font-w600" href="javascript:void(0)">ORD.1851</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-danger">Canceled</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <a href="javascript:void(0)">Jose Parker</a>
                                    </td>
                                    <td class="text-right">
                                        <span class="text-black">$203</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="font-w600" href="javascript:void(0)">ORD.1850</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-warning">Pending</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <a href="javascript:void(0)">Jose Parker</a>
                                    </td>
                                    <td class="text-right">
                                        <span class="text-black">$842</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="font-w600" href="javascript:void(0)">ORD.1849</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-danger">Canceled</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <a href="javascript:void(0)">Betty Kelley</a>
                                    </td>
                                    <td class="text-right">
                                        <span class="text-black">$151</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="font-w600" href="javascript:void(0)">ORD.1848</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-success">Completed</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <a href="javascript:void(0)">Barbara Scott</a>
                                    </td>
                                    <td class="text-right">
                                        <span class="text-black">$688</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="font-w600" href="javascript:void(0)">ORD.1847</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-danger">Canceled</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <a href="javascript:void(0)">Susan Day</a>
                                    </td>
                                    <td class="text-right">
                                        <span class="text-black">$963</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="font-w600" href="javascript:void(0)">ORD.1846</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-success">Completed</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <a href="javascript:void(0)">Susan Day</a>
                                    </td>
                                    <td class="text-right">
                                        <span class="text-black">$836</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="font-w600" href="javascript:void(0)">ORD.1845</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-info">Processing</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <a href="javascript:void(0)">Alice Moore</a>
                                    </td>
                                    <td class="text-right">
                                        <span class="text-black">$616</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="font-w600" href="javascript:void(0)">ORD.1844</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-warning">Pending</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <a href="javascript:void(0)">Sara Fields</a>
                                    </td>
                                    <td class="text-right">
                                        <span class="text-black">$162</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="font-w600" href="javascript:void(0)">ORD.1843</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-info">Processing</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <a href="javascript:void(0)">Betty Kelley</a>
                                    </td>
                                    <td class="text-right">
                                        <span class="text-black">$683</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="font-w600" href="javascript:void(0)">ORD.1842</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-info">Processing</span>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <a href="javascript:void(0)">Megan Fuller</a>
                                    </td>
                                    <td class="text-right">
                                        <span class="text-black">$240</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END Latest Orders -->

            <!-- Top Products -->
            <div class="col-xl-6">
                <div class="block block-rounded block-bordered">
                    <div class="block-header">
                        <h3 class="block-title text-uppercase">Top Products</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                            <button type="button" class="btn-block-option">
                                <i class="si si-wrench"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content p-5">
                        <table class="table table-borderless table-striped mb-0">
                            <thead>
                                <tr>
                                    <th class="d-none d-sm-table-cell" style="width: 100px;">ID</th>
                                    <th>Product</th>
                                    <th class="text-center">Orders</th>
                                    <th class="d-none d-sm-table-cell text-center">Rating</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="d-none d-sm-table-cell">
                                        <a class="font-w600" href="javascript:void(0)">PID.258</a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0)">Dark Souls III</a>
                                    </td>
                                    <td class="text-center">
                                        <a class="text-gray-dark" href="javascript:void(0)">912</a>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-center">
                                        <div class="text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="d-none d-sm-table-cell">
                                        <a class="font-w600" href="javascript:void(0)">PID.198</a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0)">Bioshock Collection</a>
                                    </td>
                                    <td class="text-center">
                                        <a class="text-gray-dark" href="javascript:void(0)">895</a>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-center">
                                        <div class="text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="d-none d-sm-table-cell">
                                        <a class="font-w600" href="javascript:void(0)">PID.852</a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0)">Alien Isolation</a>
                                    </td>
                                    <td class="text-center">
                                        <a class="text-gray-dark" href="javascript:void(0)">820</a>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-center">
                                        <div class="text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="d-none d-sm-table-cell">
                                        <a class="font-w600" href="javascript:void(0)">PID.741</a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0)">Bloodborne</a>
                                    </td>
                                    <td class="text-center">
                                        <a class="text-gray-dark" href="javascript:void(0)">793</a>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-center">
                                        <div class="text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="d-none d-sm-table-cell">
                                        <a class="font-w600" href="javascript:void(0)">PID.985</a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0)">Forza Motorsport 7</a>
                                    </td>
                                    <td class="text-center">
                                        <a class="text-gray-dark" href="javascript:void(0)">782</a>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-center">
                                        <div class="text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="d-none d-sm-table-cell">
                                        <a class="font-w600" href="javascript:void(0)">PID.056</a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0)">Fifa 18</a>
                                    </td>
                                    <td class="text-center">
                                        <a class="text-gray-dark" href="javascript:void(0)">776</a>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-center">
                                        <div class="text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="d-none d-sm-table-cell">
                                        <a class="font-w600" href="javascript:void(0)">PID.036</a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0)">Gears of War 4</a>
                                    </td>
                                    <td class="text-center">
                                        <a class="text-gray-dark" href="javascript:void(0)">680</a>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-center">
                                        <div class="text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="d-none d-sm-table-cell">
                                        <a class="font-w600" href="javascript:void(0)">PID.682</a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0)">Minecraft</a>
                                    </td>
                                    <td class="text-center">
                                        <a class="text-gray-dark" href="javascript:void(0)">670</a>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-center">
                                        <div class="text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="d-none d-sm-table-cell">
                                        <a class="font-w600" href="javascript:void(0)">PID.478</a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0)">Dishonored 2</a>
                                    </td>
                                    <td class="text-center">
                                        <a class="text-gray-dark" href="javascript:void(0)">640</a>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-center">
                                        <div class="text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="d-none d-sm-table-cell">
                                        <a class="font-w600" href="javascript:void(0)">PID.952</a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0)">Gran Turismo Sport</a>
                                    </td>
                                    <td class="text-center">
                                        <a class="text-gray-dark" href="javascript:void(0)">630</a>
                                    </td>
                                    <td class="d-none d-sm-table-cell text-center">
                                        <div class="text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END Top Products -->
        </div>
        <!-- END More Data -->
    </div>
    <!-- END Content -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/chartjs/Chart.bundle.min.js'); ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/db_corporate.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>