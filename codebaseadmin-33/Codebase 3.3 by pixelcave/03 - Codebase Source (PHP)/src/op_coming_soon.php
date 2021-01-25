<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo23@2x.jpg');">
    <div class="hero bg-black-op">
        <div class="hero-inner">
            <div class="content content-full">
                <div class="row justify-content-center">
                    <div class="col-md-6 py-30 text-center">
                        <h1 class="display-4 font-w700 text-white mb-10">Codebase</h1>
                        <h2 class="h4 font-w400 text-white-op pb-30 mb-20 border-white-op-b">We’re working on it! Coming soon..</h2>

                        <!-- Countdown.js functionality is initialized with .js-countdown class in js/pages/op_coming_soon.min.js which was auto compiled from _es6/pages/op_coming_soon.js -->
                        <!-- For more info and examples you can check out https://github.com/hilios/jQuery.countdown -->
                        <div class="js-countdown mb-20"></div>

                        <a class="btn btn-hero btn-noborder btn-rounded btn-outline-warning" href="be_pages_generic_blank.php">
                            <i class="fa fa-arrow-left mr-10"></i> Go Back to Dashboard
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/jquery-countdown/jquery.countdown.min.js'); ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/op_coming_soon.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>