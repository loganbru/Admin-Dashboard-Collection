<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="bg-gd-dusk">
    <div class="hero-static content content-full bg-white invisible" data-toggle="appear">
        <!-- Header -->
        <div class="py-30 px-5 text-center">
            <a class="link-effect font-w700" href="index.php">
                <i class="si si-fire"></i>
                <span class="font-size-xl text-primary-dark">code</span><span class="font-size-xl">base</span>
            </a>
            <h1 class="h2 font-w700 mt-50 mb-10">Welcome to Your Dashboard</h1>
            <h2 class="h4 font-w400 text-muted mb-0">Please sign in</h2>
        </div>
        <!-- END Header -->

        <!-- Sign In Form -->
        <div class="row justify-content-center px-5">
            <div class="col-sm-8 col-md-6 col-xl-4">
                <!-- jQuery Validation functionality is initialized with .js-validation-signin class in js/pages/op_auth_signin.min.js which was auto compiled from _es6/pages/op_auth_signin.js -->
                <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                <form class="js-validation-signin" action="be_pages_auth_all.php" method="post">
                    <div class="form-group row">
                        <div class="col-12">
                            <div class="form-material floating">
                                <input type="text" class="form-control" id="login-username" name="login-username">
                                <label for="login-username">Username</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <div class="form-material floating">
                                <input type="password" class="form-control" id="login-password" name="login-password">
                                <label for="login-password">Password</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row gutters-tiny">
                        <div class="col-12 mb-10">
                            <button type="submit" class="btn btn-block btn-hero btn-noborder btn-rounded btn-alt-primary">
                                <i class="si si-login mr-10"></i> Sign In
                            </button>
                        </div>
                        <div class="col-sm-6 mb-5">
                            <a class="btn btn-block btn-noborder btn-rounded btn-alt-secondary" href="op_auth_signup.php">
                                <i class="fa fa-plus text-muted mr-5"></i> New Account
                            </a>
                        </div>
                        <div class="col-sm-6 mb-5">
                            <a class="btn btn-block btn-noborder btn-rounded btn-alt-secondary" href="op_auth_reminder.php">
                                <i class="fa fa-warning text-muted mr-5"></i> Forgot password
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END Sign In Form -->
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/jquery-validation/jquery.validate.min.js'); ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/op_auth_signin.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>