<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo34@2x.jpg');">
    <div class="row mx-0 bg-pulse-op">
        <div class="hero-static col-md-6 col-xl-8 d-none d-md-flex align-items-md-end">
            <div class="p-30 invisible" data-toggle="appear">
                <p class="font-size-h3 font-w600 text-white">
                    <i class="fa fa-bell"></i> You have <a class="link-effect text-white-op font-w700" href="javascript:void(0)">5 new notifications</a>!
                </p>
                <p class="font-italic text-white-op">
                    Copyright &copy; <span class="js-year-copy"></span>
                </p>
            </div>
        </div>
        <div class="hero-static col-md-6 col-xl-4 d-flex align-items-center bg-white text-center">
            <div class="content content-full">
                <!-- Header -->
                <div class="px-30 pt-10 pb-30">
                    <a class="link-effect text-pulse font-w700" href="index.php">
                        <i class="si si-fire"></i>
                        <span class="font-size-xl text-pulse-dark">code</span><span class="font-size-xl">base</span>
                    </a>
                    <h1 class="h3 font-w700 mt-30 mb-10">Welcome back, Admin</h1>
                    <h2 class="h5 font-w400 text-muted mb-30">Please enter your password</h2>
                    <?php $cb->get_avatar(15, '', 96); ?>
                </div>
                <!-- END Header -->

                <!-- Unlock Form -->
                <!-- jQuery Validation functionality is initialized with .js-validation-lock class in js/pages/op_auth_lock.min.js which was auto compiled from _es6/pages/op_auth_lock.js -->
                <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                <form class="js-validation-lock px-30" action="be_pages_auth_all.php" method="post">
                    <div class="form-group row">
                        <div class="col-12">
                            <div class="form-material floating">
                                <input type="password" class="form-control" id="lock-password" name="lock-password">
                                <label for="lock-password">Password</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-sm btn-hero btn-alt-danger">
                            <i class="si si-lock-open mr-10"></i> Unlock
                        </button>
                        <div class="mt-30">
                            <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="op_auth_signin2.php">
                                <i class="fa fa-user text-muted mr-5"></i> Not you? Sign In
                            </a>
                        </div>
                    </div>
                </form>
                <!-- END Unlock Form -->
            </div>
        </div>
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