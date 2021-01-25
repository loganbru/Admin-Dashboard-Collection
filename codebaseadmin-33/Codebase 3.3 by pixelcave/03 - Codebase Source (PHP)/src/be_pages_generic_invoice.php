<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <!-- Invoice -->
    <h2 class="content-heading d-print-none">
        <button type="button" class="btn btn-sm btn-rounded btn-success float-right">New Invoice</button>
        Invoice
    </h2>
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">#INV0015</h3>
            <div class="block-options">
                <!-- Print Page functionality is initialized in Helpers.print() -->
                <button type="button" class="btn-block-option" onclick="Codebase.helpers('print-page');">
                    <i class="si si-printer"></i> Print Invoice
                </button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                    <i class="si si-refresh"></i>
                </button>
            </div>
        </div>
        <div class="block-content">
            <!-- Invoice Info -->
            <div class="row my-20">
                <!-- Company Info -->
                <div class="col-6">
                    <p class="h3">Company</p>
                    <address>
                        Street Address<br>
                        State, City<br>
                        Region, Postal Code<br>
                        ltd@example.com
                    </address>
                </div>
                <!-- END Company Info -->

                <!-- Client Info -->
                <div class="col-6 text-right">
                    <p class="h3">Client</p>
                    <address>
                        Street Address<br>
                        State, City<br>
                        Region, Postal Code<br>
                        ctr@example.com
                    </address>
                </div>
                <!-- END Client Info -->
            </div>
            <!-- END Invoice Info -->

            <!-- Table -->
            <div class="table-responsive push">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 60px;"></th>
                            <th>Product</th>
                            <th class="text-center" style="width: 90px;">Qnt</th>
                            <th class="text-right" style="width: 120px;">Unit</th>
                            <th class="text-right" style="width: 120px;">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>
                                <p class="font-w600 mb-5">Logo Creation</p>
                                <div class="text-muted">Logo and business cards design</div>
                            </td>
                            <td class="text-center">
                                <span class="badge badge-pill badge-primary">1</span>
                            </td>
                            <td class="text-right">$1.800,00</td>
                            <td class="text-right">$1.800,00</td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td>
                                <p class="font-w600 mb-5">Online Store Design &amp; Development</p>
                                <div class="text-muted">Design/Development for all popular modern browsers</div>
                            </td>
                            <td class="text-center">
                                <span class="badge badge-pill badge-primary">1</span>
                            </td>
                            <td class="text-right">$20.000,00</td>
                            <td class="text-right">$20.000,00</td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td>
                                <p class="font-w600 mb-5">App Design</p>
                                <div class="text-muted">Promotional mobile application</div>
                            </td>
                            <td class="text-center">
                                <span class="badge badge-pill badge-primary">1</span>
                            </td>
                            <td class="text-right">$3.200,00</td>
                            <td class="text-right">$3.200,00</td>
                        </tr>
                        <tr>
                            <td colspan="4" class="font-w600 text-right">Subtotal</td>
                            <td class="text-right">$25.000,00</td>
                        </tr>
                        <tr>
                            <td colspan="4" class="font-w600 text-right">Vat Rate</td>
                            <td class="text-right">20%</td>
                        </tr>
                        <tr>
                            <td colspan="4" class="font-w600 text-right">Vat Due</td>
                            <td class="text-right">$5.000,00</td>
                        </tr>
                        <tr class="table-warning">
                            <td colspan="4" class="font-w700 text-uppercase text-right">Total Due</td>
                            <td class="font-w700 text-right">$30.000,00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- END Table -->

            <!-- Footer -->
            <p class="text-muted text-center">Thank you very much for doing business with us. We look forward to working with you again!</p>
            <!-- END Footer -->
        </div>
    </div>
    <!-- END Invoice -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>