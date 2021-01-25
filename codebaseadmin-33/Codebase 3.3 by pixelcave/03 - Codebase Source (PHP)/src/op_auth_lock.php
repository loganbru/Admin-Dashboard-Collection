<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo2@2x.jpg');">
    <div class="hero-static content content-full bg-white-op-90 invisible" data-toggle="appear" data-class="animated fadeIn">
        <!-- Avatar -->
        <div class="py-30 px-5 text-center">
            <a class="link-effect text-pulse font-w700" href="index.php">
                <i class="si si-fire"></i>
                <span class="font-size-xl text-pulse-dark">code</span><span class="font-size-xl">base</span>
            </a>
            <h1 class="h2 font-w700 mt-50 mb-10">Welcome back, Admin</h1>
            <h2 class="h4 font-w400 text-muted mb-30">Please enter your password</h2>
            <?php $cb->get_avatar(15, '', 96); ?>
        </div>
        <!-- END Avatar -->

        <!-- Unlock Content -->
        <div class="row justify-content-center px-5">
            <div class="col-sm-8 col-md-6 col-xl-4">
                <!-- jQuery Validation functionality is initialized with .js-validation-lock class in js/pages/op_auth_lock.min.js which was auto compiled from _es6/pages/op_auth_lock.js -->
                <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                <form class="js-validation-lock" action="be_pages_auth_all.php" method="post">
                    <div class="form-group row">
                        <div class="col-12">
                            <div class="form-material floating">
                                <input type="password" class="form-control" id="lock-password" name="lock-password">
                                <label for="lock-password">Password</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-hero btn-noborder btn-rounded btn-alt-danger">
                            <i class="si si-lock-open mr-10"></i> Unlock
                        </button>
                        <a class="btn btn-block btn-noborder btn-rounded btn-alt-secondary" href="op_auth_signin.php">
                            <i class="si si-logout text-muted mr-10"></i> Sign Out
                        </a>
                    </div>
                </form>
            </div>
        </div>
        <!-- END Unlock Content -->
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/jquery-validation/jquery.validate.min.js'); ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/op_auth_lock.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>