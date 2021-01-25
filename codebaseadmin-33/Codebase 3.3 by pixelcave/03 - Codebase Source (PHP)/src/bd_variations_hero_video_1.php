<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend_boxed/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content content-full">
    <!-- Hero -->
    <!-- jQuery Vide for video backgrounds, for more examples you can check out https://github.com/VodkaBears/Vide -->
    <div class="block block-transparent bg-video" data-vide-bg="<?php echo $cb->assets_folder; ?>/media/videos/city_night" data-vide-options="posterType: jpg">
        <div class="block-content bg-primary-dark-op">
            <div class="py-20 text-center">
                <h1 class="font-w700 text-white mb-10">Dashboard</h1>
                <h2 class="h4 font-w400 text-white-op">Imagine your next app and build it!</h2>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Dummy content -->
    <div class="row">
        <div class="col-sm-4">
            <div class="block">
                <div class="block-content">
                    <p class="text-center py-100">...</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="block">
                <div class="block-content">
                    <p class="text-center py-100">...</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="block">
                <div class="block-content">
                    <p class="text-center py-100">...</p>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="block">
                <div class="block-content">
                    <p class="text-center py-100">...</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="block">
                <div class="block-content">
                    <p class="text-center py-100">...</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="block">
                <div class="block-content">
                    <p class="text-center py-100">...</p>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="block">
                <div class="block-content">
                    <p class="text-center py-100">...</p>
                </div>
            </div>
        </div>
    </div>
    <!-- END Dummy content -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/jquery-vide/jquery.vide.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>