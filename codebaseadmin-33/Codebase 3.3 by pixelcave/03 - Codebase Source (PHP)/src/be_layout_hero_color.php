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
<div class="bg-primary">
    <div class="hero bg-black-op-5">
        <div class="hero-inner">
            <div class="content content-full text-center">
                <h1 class="display-4 font-w700 text-white mb-10 invisible" data-toggle="appear" data-class="animated fadeIn">Codebase</h1>
                <h2 class="font-w400 text-white-op mb-50 invisible" data-toggle="appear" data-class="animated fadeIn" data-timeout="250">Imagine, Design and Create.</h2>
                <a class="btn btn-hero btn-noborder btn-rounded btn-alt-primary invisible" data-toggle="appear" data-class="animated fadeInUp" data-timeout="300" href="be_layout_hero_color.php">
                    <i class="si si-energy mr-10"></i> Let's go!
                </a>
            </div>
        </div>
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>