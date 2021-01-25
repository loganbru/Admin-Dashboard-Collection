<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Codebase - Page specific configuration
$cb->l_header_fixed     = true;
$cb->l_sidebar_inverse  = true;
?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <div class="row invisible" data-toggle="appear">
        <!-- Row #1 -->
        <div class="col-6 col-xl-3">
            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="float-right mt-15 d-none d-sm-block">
                        <i class="si si-bag fa-2x text-primary-light"></i>
                    </div>
                    <div class="font-size-h3 font-w600 text-primary" data-toggle="countTo" data-speed="1000" data-to="1500">0</div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">Sales</div>
                </div>
            </a>
        </div>
        <div class="col-6 col-xl-3">
            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="float-right mt-15 d-none d-sm-block">
                        <i class="si si-wallet fa-2x text-earth-light"></i>
                    </div>
                    <div class="font-size-h3 font-w600 text-earth">$<span data-toggle="countTo" data-speed="1000" data-to="780">0</span></div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">Earnings</div>
                </div>
            </a>
        </div>
        <div class="col-6 col-xl-3">
            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="float-right mt-15 d-none d-sm-block">
                        <i class="si si-envelope-open fa-2x text-elegance-light"></i>
                    </div>
                    <div class="font-size-h3 font-w600 text-elegance" data-toggle="countTo" data-speed="1000" data-to="15">0</div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">Messages</div>
                </div>
            </a>
        </div>
        <div class="col-6 col-xl-3">
            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="float-right mt-15 d-none d-sm-block">
                        <i class="si si-users fa-2x text-pulse"></i>
                    </div>
                    <div class="font-size-h3 font-w600 text-pulse" data-toggle="countTo" data-speed="1000" data-to="4252">0</div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">Online</div>
                </div>
            </a>
        </div>
        <!-- END Row #1 -->
    </div>
    <div class="row invisible" data-toggle="appear">
        <!-- Row #2 -->
        <div class="col-md-6">
            <div class="block block-rounded block-bordered">
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
                <div class="block-content block-content-full">
                    <div class="pull-all pt-50">
                        <!-- Lines Chart Container functionality is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _es6/pages/be_pages_dashboard.js -->
                        <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                        <canvas class="js-chartjs-dashboard-lines"></canvas>
                    </div>
                </div>
                <div class="block-content">
                    <div class="row items-push text-center">
                        <div class="col-6 col-sm-4">
                            <div class="font-w600 text-success">
                                <i class="fa fa-caret-up"></i> +16%
                            </div>
                            <div class="font-size-h4 font-w600">720</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">This Month</div>
                        </div>
                        <div class="col-6 col-sm-4">
                            <div class="font-w600 text-danger">
                                <i class="fa fa-caret-down"></i> -3%
                            </div>
                            <div class="font-size-h4 font-w600">160</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">This Week</div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="font-w600 text-success">
                                <i class="fa fa-caret-up"></i> +9%
                            </div>
                            <div class="font-size-h4 font-w600">24.3</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Average</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="block block-rounded block-bordered">
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
                <div class="block-content block-content-full">
                    <div class="pull-all pt-50">
                        <!-- Lines Chart Container functionality is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _es6/pages/be_pages_dashboard.js -->
                        <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                        <canvas class="js-chartjs-dashboard-lines2"></canvas>
                    </div>
                </div>
                <div class="block-content bg-white">
                    <div class="row items-push text-center">
                        <div class="col-6 col-sm-4">
                            <div class="font-w600 text-success">
                                <i class="fa fa-caret-up"></i> +4%
                            </div>
                            <div class="font-size-h4 font-w600">$ 6,540</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">This Month</div>
                        </div>
                        <div class="col-6 col-sm-4">
                            <div class="font-w600 text-danger">
                                <i class="fa fa-caret-down"></i> -7%
                            </div>
                            <div class="font-size-h4 font-w600">$ 1,525</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">This Week</div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="font-w600 text-success">
                                <i class="fa fa-caret-up"></i> +35%
                            </div>
                            <div class="font-size-h4 font-w600">$ 9,352</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Balance</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Row #2 -->
    </div>
    <div class="row invisible" data-toggle="appear">
        <!-- Row #3 -->
        <div class="col-md-6">
            <div class="block block-rounded block-bordered">
                <div class="block-header block-header-default border-b">
                    <h3 class="block-title">Latest Orders</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option">
                            <i class="si si-wrench"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <table class="table table-borderless table-striped">
                        <thead>
                            <tr>
                                <th style="width: 100px;">ID</th>
                                <th>Status</th>
                                <th class="d-none d-sm-table-cell">Customer</th>
                                <th class="text-right">Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 1; $i < 11; $i++) { ?>
                            <tr>
                                <td>
                                    <a class="font-w600" href="be_pages_ecom_order.php">ORD.<?php echo 1852 - $i; ?></a>
                                </td>
                                <td>
                                    <?php $cb->get_tag(true, true); ?>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <a href="be_pages_ecom_customer.php"><?php $cb->get_name(); ?></a>
                                </td>
                                <td class="text-right">
                                    <span class="text-black">$<?php echo rand(100, 999); ?></span>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="block block-rounded block-bordered">
                <div class="block-header block-header-default border-b">
                    <h3 class="block-title">Top Products</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option">
                            <i class="si si-wrench"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <table class="table table-borderless table-striped">
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
                                    <a class="font-w600" href="be_pages_ecom_product_edit.php">PID.258</a>
                                </td>
                                <td>
                                    <a href="be_pages_ecom_product_edit.php">Dark Souls III</a>
                                </td>
                                <td class="text-center">
                                    <a class="text-gray-dark" href="be_pages_ecom_orders.php">912</a>
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
                                    <a class="font-w600" href="be_pages_ecom_product_edit.php">PID.198</a>
                                </td>
                                <td>
                                    <a href="be_pages_ecom_product_edit.php">Bioshock Collection</a>
                                </td>
                                <td class="text-center">
                                    <a class="text-gray-dark" href="be_pages_ecom_orders.php">895</a>
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
                                    <a class="font-w600" href="be_pages_ecom_product_edit.php">PID.852</a>
                                </td>
                                <td>
                                    <a href="be_pages_ecom_product_edit.php">Alien Isolation</a>
                                </td>
                                <td class="text-center">
                                    <a class="text-gray-dark" href="be_pages_ecom_orders.php">820</a>
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
                                    <a class="font-w600" href="be_pages_ecom_product_edit.php">PID.741</a>
                                </td>
                                <td>
                                    <a href="be_pages_ecom_product_edit.php">Bloodborne</a>
                                </td>
                                <td class="text-center">
                                    <a class="text-gray-dark" href="be_pages_ecom_orders.php">793</a>
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
                                    <a class="font-w600" href="be_pages_ecom_product_edit.php">PID.985</a>
                                </td>
                                <td>
                                    <a href="be_pages_ecom_product_edit.php">Forza Motorsport 7</a>
                                </td>
                                <td class="text-center">
                                    <a class="text-gray-dark" href="be_pages_ecom_orders.php">782</a>
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
                                    <a class="font-w600" href="be_pages_ecom_product_edit.php">PID.056</a>
                                </td>
                                <td>
                                    <a href="be_pages_ecom_product_edit.php">Fifa 18</a>
                                </td>
                                <td class="text-center">
                                    <a class="text-gray-dark" href="be_pages_ecom_orders.php">776</a>
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
                                    <a class="font-w600" href="be_pages_ecom_product_edit.php">PID.036</a>
                                </td>
                                <td>
                                    <a href="be_pages_ecom_product_edit.php">Gears of War 4</a>
                                </td>
                                <td class="text-center">
                                    <a class="text-gray-dark" href="be_pages_ecom_orders.php">680</a>
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
                                    <a class="font-w600" href="be_pages_ecom_product_edit.php">PID.682</a>
                                </td>
                                <td>
                                    <a href="be_pages_ecom_product_edit.php">Minecraft</a>
                                </td>
                                <td class="text-center">
                                    <a class="text-gray-dark" href="be_pages_ecom_orders.php">670</a>
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
                                    <a class="font-w600" href="be_pages_ecom_product_edit.php">PID.478</a>
                                </td>
                                <td>
                                    <a href="be_pages_ecom_product_edit.php">Dishonored 2</a>
                                </td>
                                <td class="text-center">
                                    <a class="text-gray-dark" href="be_pages_ecom_orders.php">640</a>
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
                                    <a class="font-w600" href="be_pages_ecom_product_edit.php">PID.952</a>
                                </td>
                                <td>
                                    <a href="be_pages_ecom_product_edit.php">Gran Turismo Sport</a>
                                </td>
                                <td class="text-center">
                                    <a class="text-gray-dark" href="be_pages_ecom_orders.php">630</a>
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
        <!-- END Row #3 -->
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