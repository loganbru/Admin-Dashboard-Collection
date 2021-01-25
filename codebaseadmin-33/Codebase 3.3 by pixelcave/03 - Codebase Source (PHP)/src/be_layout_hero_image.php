<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Codebase - Page specific configuration
$cb->inc_footer     = false;
$cb->l_header_fixed = false;
$cb->l_header_style = 'glass-inverse';
?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo2@2x.jpg');">
    <div class="hero bg-primary-dark-op">
        <div class="hero-inner">
            <div class="content content-full text-center">
                <h1 class="display-4 font-w700 text-white mb-10 invisible" data-toggle="appear" data-class="animated fadeInDown">Codebase</h1>
                <h2 class="font-w400 text-white-op mb-50 invisible" data-toggle="appear" data-class="animated fadeInUp" data-timeout="250">It’s Time to Create Your Next Amazing Project</h2>
                <a class="btn btn-hero btn-noborder btn-rounded btn-primary invisible" data-toggle="appear" data-class="animated bounceIn" data-timeout="750" href="be_layout_hero_image.php">
                    <i class="si si-rocket mr-10"></i> Get Started
                </a>
            </div>
        </div>
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>