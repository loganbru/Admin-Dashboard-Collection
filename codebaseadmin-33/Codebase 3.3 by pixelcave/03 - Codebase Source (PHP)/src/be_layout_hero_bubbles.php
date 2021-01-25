<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Codebase - Page specific configuration
$cb->inc_footer         = false;
$cb->l_sidebar_inverse  = true;
$cb->l_header_fixed     = false;
$cb->l_header_style     = 'glass';
?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="bg-white hero-bubbles">
    <span class="hero-bubble wh-40 pos-t-5 pos-l-20 bg-primary"></span>
    <span class="hero-bubble wh-30 pos-t-5 pos-l-90 bg-success"></span>
    <span class="hero-bubble wh-20 pos-t-10 pos-l-40 bg-corporate"></span>
    <span class="hero-bubble wh-40 pos-t-20 pos-l-75 bg-pulse"></span>
    <span class="hero-bubble wh-30 pos-t-30 pos-l-10 bg-danger"></span>
    <span class="hero-bubble wh-30 pos-t-60 pos-l-25 bg-warning"></span>
    <span class="hero-bubble wh-30 pos-t-60 pos-l-75 bg-info"></span>
    <span class="hero-bubble wh-40 pos-t-80 pos-l-50 bg-flat"></span>
    <span class="hero-bubble wh-40 pos-t-75 pos-l-10 bg-earth"></span>
    <span class="hero-bubble wh-30 pos-t-90 pos-l-90 bg-elegance"></span>
    <div class="hero bg-white">
        <div class="hero-inner">
            <div class="content content-full text-center">
                <h1 class="display-4 font-w700 mb-10 invisible" data-toggle="appear" data-class="animated fadeIn">Codebase</h1>
                <h2 class="font-w400 text-muted mb-50 invisible" data-toggle="appear" data-class="animated fadeIn" data-timeout="250">Imagine, Design and Create.</h2>
                <a class="btn btn-hero btn-noborder btn-rounded btn-alt-primary invisible" data-toggle="appear" data-class="animated fadeInUp" data-timeout="300" href="be_layout_hero_bubbles.php">
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