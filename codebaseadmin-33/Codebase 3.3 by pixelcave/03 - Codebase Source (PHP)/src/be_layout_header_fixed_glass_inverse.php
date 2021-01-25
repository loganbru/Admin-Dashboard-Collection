<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Codebase - Page specific configuration
$cb->l_header_fixed = true;
$cb->l_header_style = 'glass-inverse';
?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Header Section -->
<div class="bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo21@2x.jpg');">
    <div class="bg-primary-dark-op">
        <div class="content content-full content-top">
            <h1 class="py-50 text-white text-center">Welcome Admin!</h1>
        </div>
    </div>
</div>
<!-- END Header Section -->

<!-- Page Content -->
<div class="content">
    <h2 class="content-heading">Fixed Header - Glass Inverse</h2>
    <p>This is the glass style for the Header but dark themed. It is transparent and its position is absolute, so it will overlay the top content of main content. It is perfect if you would like to add a dark background color or dark image at the top of your page. Now that it is fixed, it will get a dark background on scrolling.</p>

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