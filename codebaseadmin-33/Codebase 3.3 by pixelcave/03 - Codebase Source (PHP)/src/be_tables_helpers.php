<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <!-- Table Sections (.js-table-sections class is initialized in Helpers.tableToolsSections()) -->
    <h2 class="content-heading">Table Sections</h2>
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">
                <code>.js-table-sections</code>
            </h3>
        </div>
        <div class="block-content">
            <!--
            Separate your table content with multiple tbody sections. Add one row and add the class .js-table-sections-header to a
            tbody section to make it clickable. It will then toggle the next tbody section which can have multiple rows. Eg:

            <tbody class="js-table-sections-header">One row</tbody>
            <tbody>Multiple rows</tbody>
            <tbody class="js-table-sections-header">One row</tbody>
            <tbody>Multiple rows</tbody>
            <tbody class="js-table-sections-header">One row</tbody>
            <tbody>Multiple rows</tbody>

            You can also add the class .show in your tbody.js-table-sections-header to make the next tbody section visible by default
            -->
            <table class="js-table-sections table table-hover">
                <thead>
                    <tr>
                        <th style="width: 30px;"></th>
                        <th>Name</th>
                        <th style="width: 15%;">Access</th>
                        <th class="d-none d-sm-table-cell" style="width: 20%;">Date</th>
                    </tr>
                </thead>
                <?php for ($i = 1; $i < 6; $i++) { ?>
                <tbody class="js-table-sections-header<?php if ($i == 1) { echo ' show table-active'; } ?>">
                    <tr>
                        <td class="text-center">
                            <i class="fa fa-angle-right"></i>
                        </td>
                        <td class="font-w600"><?php $cb->get_name(); ?></td>
                        <td>
                            <?php $cb->get_tag(); ?>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <em class="text-muted">October <?php echo rand(1, 28); ?>, 2017 12:16</em>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <?php for ($j = 1; $j < 4; $j++) { ?>
                    <tr>
                        <td class="text-center"></td>
                        <td class="font-w600 text-success">+ $<?php echo rand(50, 300); ?>,00</td>
                        <td class="font-size-sm">Stripe</td>
                        <td class="d-none d-sm-table-cell">
                            <span class="font-size-sm text-muted">October <?php echo rand(1, 28); ?>, 2017 12:16</span>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
                <?php } ?>
            </table>
        </div>
    </div>
    <!-- END Table Sections -->

    <!-- Checkable Table (.js-table-checkable class is initialized in Helpers.tableToolsCheckable()) -->
    <h2 class="content-heading">Checkable Table</h2>
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">
                <code>.js-table-checkable</code>
            </h3>
        </div>
        <div class="block-content">
            <!-- If you put a checkbox in thead section, it will automatically toggle all tbody section checkboxes -->
            <table class="js-table-checkable table table-hover">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 70px;">
                            <label class="css-control css-control-primary css-checkbox py-0">
                                <input type="checkbox" class="css-control-input" id="check-all" name="check-all">
                                <span class="css-control-indicator"></span>
                            </label>
                        </th>
                        <th>Name</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
                        <th class="d-none d-sm-table-cell" style="width: 20%;">Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 1; $i < 6; $i++) { ?>
                    <tr>
                        <td class="text-center">
                            <label class="css-control css-control-primary css-checkbox">
                                <input type="checkbox" class="css-control-input" id="row_<?php echo $i; ?>" name="row_<?php echo $i; ?>">
                                <span class="css-control-indicator"></span>
                            </label>
                        </td>
                        <td>
                            <p class="font-w600 mb-10"><?php $cb->get_name(); ?></p>
                            <p class="text-muted mb-0">Customer details and further information</p>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <?php $cb->get_tag(); ?>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <em class="text-muted">November <?php echo rand(1, 28); ?>, 2017 13:17</em>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- END Checkable Table -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Helpers (Table Tools helper) -->
<script>jQuery(function(){ Codebase.helpers('table-tools'); });</script>

<?php require 'inc/_global/views/footer_end.php'; ?>