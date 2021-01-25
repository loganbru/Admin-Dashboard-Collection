<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Codebase - Page specific configuration
$cb->l_sidebar_inverse = true;
$cb->l_header_style    = 'glass-inverse';
?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo26@2x.jpg');">
    <div class="bg-black-op-75">
        <div class="content content-top content-full text-center">
            <div class="py-20">
                <h1 class="h2 font-w700 text-white mb-10">ORD.1185</h1>
                <h2 class="h4 font-w400 text-white-op mb-0">Currently processing..</h2>
            </div>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Breadcrumb -->
<div class="bg-body-light border-b">
    <div class="content py-5 text-center">
        <nav class="breadcrumb bg-body-light mb-0">
            <a class="breadcrumb-item" href="be_pages_ecom_dashboard.php">e-Commerce</a>
            <a class="breadcrumb-item" href="be_pages_ecom_orders.php">Orders</a>
            <span class="breadcrumb-item active">ORD.1185</span>
        </nav>
    </div>
</div>
<!-- END Breadcrumb -->

<!-- Page Content -->
<div class="content">
    <!-- Progress -->
    <h2 class="content-heading">
        <button type="button" class="btn btn-sm btn-secondary float-right">
            <i class="fa fa-check text-success mr-5"></i>Complete
        </button>
        <button type="button" class="btn btn-sm btn-secondary float-right mr-5">
            <i class="fa fa-times text-danger mr-5"></i>Cancel
        </button>
        Progress
    </h2>
    <div class="row gutters-tiny">
        <!-- Submitted -->
        <div class="col-md-6 col-xl-3">
            <div class="block block-rounded">
                <div class="block-content block-content-full">
                    <div class="py-20 text-center">
                        <div class="mb-20">
                            <i class="fa fa-check fa-3x text-success"></i>
                        </div>
                        <div class="font-size-sm font-w600 text-uppercase text-success">1. Submitted</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Submitted -->

        <!-- Payment -->
        <div class="col-md-6 col-xl-3">
            <div class="block block-rounded">
                <div class="block-content block-content-full">
                    <div class="py-20 text-center">
                        <div class="mb-20">
                            <i class="fa fa-check fa-3x text-success"></i>
                        </div>
                        <div class="font-size-sm font-w600 text-uppercase text-success">2. Payment</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Payment -->

        <!-- Packaging -->
        <div class="col-md-6 col-xl-3">
            <div class="block block-rounded">
                <div class="block-content block-content-full">
                    <div class="py-20 text-center">
                        <div class="mb-20">
                            <i class="fa fa-spinner fa-3x fa-spin text-warning"></i>
                        </div>
                        <div class="font-size-sm font-w600 text-uppercase text-warning">3. Packaging</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Packaging -->

        <!-- Completed -->
        <div class="col-md-6 col-xl-3">
            <div class="block block-rounded">
                <div class="block-content block-content-full">
                    <div class="py-20 text-center">
                        <div class="mb-20">
                            <i class="fa fa-times fa-3x text-muted"></i>
                        </div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">4. Completed</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Completed -->
    </div>
    <!-- END Progress -->

    <!-- Customer -->
    <h2 class="content-heading">
        <button type="button" class="btn btn-sm btn-secondary float-right">
            <i class="fa fa-envelope-o text-info mr-5"></i>Contact
        </button>
        Customer
    </h2>
    <div class="row row-deck">
        <!-- Customer's Basic Info -->
        <div class="col-lg-4">
            <a class="block block-rounded block-link-shadow text-center" href="be_pages_ecom_customer.php">
                <div class="block-content bg-gd-dusk">
                    <div class="push">
                        <?php $cb->get_avatar(15, '', 64, 'img-thumb'); ?>
                    </div>
                    <div class="pull-r-l pull-b py-10 bg-black-op-25">
                        <div class="font-w600 mb-5 text-white">
                            John Smith <i class="fa fa-star text-warning"></i>
                        </div>
                        <div class="font-size-sm text-white-op">Premium Member</div>
                    </div>
                </div>
                <div class="block-content">
                    <div class="row items-push text-center">
                        <div class="col-6">
                            <div class="mb-5"><i class="si si-bag fa-2x"></i></div>
                            <div class="font-size-sm text-muted">6 Orders</div>
                        </div>
                        <div class="col-6">
                            <div class="mb-5"><i class="si si-basket-loaded fa-2x"></i></div>
                            <div class="font-size-sm text-muted">15 Products</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <!-- END Customer's Basic Info -->

        <!-- Customer's Past Orders -->
        <div class="col-lg-8">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Past Orders</h3>
                </div>
                <div class="block-content">
                    <table class="table table-borderless table-sm table-striped">
                        <tbody>
                            <?php for ($i = 1; $i < 6; $i++) { ?>
                            <tr>
                                <td>
                                    <a class="font-w600" href="be_pages_ecom_order.php">ORD.<?php echo rand(100, 999); ?></a>
                                </td>
                                <td>
                                    <span class="badge badge-success">Completed</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    2017/10/<?php echo 28 - $i; ?>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <a href="be_pages_ecom_customer.php">John Smith</a>
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
        <!-- END Customer's Past Orders -->
    </div>
    <!-- END Customer -->

    <!-- Addresses -->
    <h2 class="content-heading">Addresses</h2>
    <div class="row row-deck gutters-tiny">
        <!-- Billing Address -->
        <div class="col-md-6">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Billing Address</h3>
                </div>
                <div class="block-content">
                    <div class="font-size-lg text-black mb-5">John Smith</div>
                    <address>
                        5110 8th Ave<br>
                        New York 11220<br>
                        United States<br><br>
                        <i class="fa fa-phone mr-5"></i> (999) 111-222222<br>
                        <i class="fa fa-envelope-o mr-5"></i> <a href="javascript:void(0)">company@example.com</a>
                    </address>
                </div>
            </div>
        </div>
        <!-- END Billing Address -->

        <!-- Shipping Address -->
        <div class="col-md-6">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Shipping Address</h3>
                </div>
                <div class="block-content">
                    <div class="font-size-lg text-black mb-5">John Smith</div>
                    <address>
                        5110 8th Ave<br>
                        New York 11220<br>
                        United States<br><br>
                        <i class="fa fa-phone mr-5"></i> (999) 111-222222<br>
                        <i class="fa fa-envelope-o mr-5"></i> <a href="javascript:void(0)">company@example.com</a>
                    </address>
                </div>
            </div>
        </div>
        <!-- END Shipping Address -->
    </div>
    <!-- END Addresses -->

    <!-- Products -->
    <h2 class="content-heading">Products (5)</h2>
    <div class="block block-rounded">
        <div class="block-content">
            <div class="table-responsive">
                <table class="table table-borderless table-striped">
                    <thead>
                        <tr>
                            <th style="width: 100px;">ID</th>
                            <th>Product</th>
                            <th class="text-center">Stock</th>
                            <th class="text-center">QTY</th>
                            <th class="text-right" style="width: 10%;">UNIT</th>
                            <th class="text-right" style="width: 10%;">PRICE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <a class="font-w600" href="be_pages_ecom_product_edit.php">PID.258</a>
                            </td>
                            <td>
                                <a href="be_pages_ecom_product_edit.php">Dark Souls III</a>
                            </td>
                            <td class="text-center">92</td>
                            <td class="text-center font-w600">1</td>
                            <td class="text-right">$69,00</td>
                            <td class="text-right">$69,00</td>
                        </tr>
                        <tr>
                            <td>
                                <a class="font-w600" href="be_pages_ecom_product_edit.php">PID.263</a>
                            </td>
                            <td>
                                <a href="be_pages_ecom_product_edit.php">Bloodborne</a>
                            </td>
                            <td class="text-center">32</td>
                            <td class="text-center font-w600">1</td>
                            <td class="text-right">$29,00</td>
                            <td class="text-right">$29,00</td>
                        </tr>
                        <tr>
                            <td>
                                <a class="font-w600" href="be_pages_ecom_product_edit.php">PID.214</a>
                            </td>
                            <td>
                                <a href="be_pages_ecom_product_edit.php">The Surge</a>
                            </td>
                            <td class="text-center">15</td>
                            <td class="text-center font-w600">1</td>
                            <td class="text-right">$59,00</td>
                            <td class="text-right">$59,00</td>
                        </tr>
                        <tr>
                            <td>
                                <a class="font-w600" href="be_pages_ecom_product_edit.php">PID.358</a>
                            </td>
                            <td>
                                <a href="be_pages_ecom_product_edit.php">Bioshock Collection</a>
                            </td>
                            <td class="text-center">77</td>
                            <td class="text-center font-w600">1</td>
                            <td class="text-right">$39,00</td>
                            <td class="text-right">$39,00</td>
                        </tr>
                        <tr>
                            <td>
                                <a class="font-w600" href="be_pages_ecom_product_edit.php">PID.425</a>
                            </td>
                            <td>
                                <a href="be_pages_ecom_product_edit.php">Until Dawn</a>
                            </td>
                            <td class="text-center">25</td>
                            <td class="text-center font-w600">1</td>
                            <td class="text-right">$49,00</td>
                            <td class="text-right">$49,00</td>
                        </tr>
                        <tr>
                            <td colspan="5" class="text-right font-w600">Total Price:</td>
                            <td class="text-right">$245,00</td>
                        </tr>
                        <tr>
                            <td colspan="5" class="text-right font-w600">Total Paid:</td>
                            <td class="text-right">$245,00</td>
                        </tr>
                        <tr class="table-success">
                            <td colspan="5" class="text-right font-w600 text-uppercase">Total Due:</td>
                            <td class="text-right font-w600">$0,00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- END Products -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>