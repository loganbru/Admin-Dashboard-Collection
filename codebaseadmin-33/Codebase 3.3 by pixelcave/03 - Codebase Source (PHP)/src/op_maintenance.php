<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="hero bg-white bg-pattern" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/various/bg-pattern-inverse.png');">
    <div class="hero-inner">
        <div class="content content-full">
            <div class="py-30 text-center">
                <i class="si si-chemistry text-primary display-3"></i>
                <h1 class="h2 font-w700 mt-30 mb-10">We’ll be back soon!</h1>
                <h2 class="h3 font-w400 text-muted mb-50">We’re currently down for maintenance..</h2>
                <a class="btn btn-hero btn-noborder btn-rounded btn-alt-primary" href="be_pages_generic_blank.php">
                    <i class="fa fa-arrow-left mr-10"></i> Go Back to Dashboard
                </a>
            </div>
        </div>
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>