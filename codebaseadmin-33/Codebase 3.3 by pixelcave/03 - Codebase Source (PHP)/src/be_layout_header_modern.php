<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Codebase - Page specific configuration
$cb->l_header_fixed = false;
$cb->l_header_style = 'modern';
?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <h2 class="content-heading">Static Header - Modern</h2>
    <p>This is the default Header style, transparent and a bit closer to main content (screen width greater than 991px).</p>

    <!-- Dummy content -->
    <h2 class="content-heading">Dummy Content <small>To preview Header behaviour on scroll</small></h2>
    <div class="block">
        <div class="block-content">
            <p class="text-center py-100">...</p>
        </div>
    </div>
    <div class="block">
        <div class="block-content">
            <p class="text-center py-100">...</p>
        </div>
    </div>
    <div class="block">
        <div class="block-content">
            <p class="text-center py-100">...</p>
        </div>
    </div>
    <div class="block">
        <div class="block-content">
            <p class="text-center py-100">...</p>
        </div>
    </div>
    <!-- END Dummy content -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>