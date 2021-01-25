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
<!-- jQuery Vide for video backgrounds, for more examples you can check out https://github.com/VodkaBears/Vide -->
<div class="bg-video" data-vide-bg="<?php echo $cb->assets_folder; ?>/media/videos/city_night" data-vide-options="posterType: jpg">
    <div class="hero bg-black-op">
        <div class="hero-inner">
            <div class="content content-full text-center">
                <h1 class="display-4 font-w700 text-white mb-10">Codebase</h1>
                <h2 class="font-w400 text-white-op mb-50">Amazing features to Get Started</h2>
                <a class="btn btn-hero btn-noborder btn-rounded btn-success" href="be_layout_hero_video.php">
                    <i class="si si-user mr-10"></i> Apply to Join
                </a>
            </div>
        </div>
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/jquery-vide/jquery.vide.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>