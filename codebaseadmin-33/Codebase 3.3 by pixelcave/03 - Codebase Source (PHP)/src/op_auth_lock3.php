<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="bg-image bg-pattern" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo34@2x.jpg');">
    <div class="row mx-0 justify-content-center bg-white-op-95">
        <div class="hero-static col-lg-6 col-xl-4">
            <div class="content content-full overflow-hidden">
                <!-- Header -->
                <div class="py-30 text-center">
                    <a class="link-effect text-pulse font-w700" href="index.php">
                        <i class="si si-fire"></i>
                        <span class="font-size-xl text-pulse-dark">code</span><span class="font-size-xl">base</span>
                    </a>
                    <h1 class="h4 font-w700 mt-30 mb-10">Welcome back, Admin</h1>
                    <h2 class="h5 font-w400 text-muted mb-0">Please enter your password</h2>
                </div>
                <!-- END Header -->

                <!-- Unlock Form -->
                <!-- jQuery Validation functionality is initialized with .js-validation-lock class in js/pages/op_auth_lock.min.js which was auto compiled from _es6/pages/op_auth_lock.js -->
                <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                <form class="js-validation-lock" action="be_pages_auth_all.php" method="post">
                    <div class="block block-themed block-rounded block-shadow">
                        <div class="block-header bg-gd-pulse">
                            <h3 class="block-title">Unlock Account</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option">
                                    <i class="si si-wrench"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="form-group text-center">
                                <?php $cb->get_avatar(15, '', 96); ?>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="lock-password">Password</label>
                                    <input type="password" class="form-control" id="lock-password" name="lock-password">
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-alt-danger">
                                    <i class="si si-lock-open mr-10"></i> Unlock
                                </button>
                            </div>
                        </div>
                        <div class="block-content bg-body-light">
                            <div class="form-group text-center">
                                <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="op_auth_signin3.php">
                                <i class="fa fa-user text-muted mr-5"></i> Not you? Sign In
                            </a>
                            </div>
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