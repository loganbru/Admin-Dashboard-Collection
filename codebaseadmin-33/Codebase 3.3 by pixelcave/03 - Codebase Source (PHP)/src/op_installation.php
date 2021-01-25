<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<div class="bg-body-light hero-bubbles">
    <span class="hero-bubble wh-40 pos-t-20 pos-l-10 bg-primary"></span>
    <span class="hero-bubble wh-30 pos-t-20 pos-l-80 bg-success"></span>
    <span class="hero-bubble wh-20 pos-t-40 pos-l-25 bg-corporate"></span>
    <span class="hero-bubble wh-40 pos-t-30 pos-l-90 bg-pulse"></span>
    <span class="hero-bubble wh-30 pos-t-40 pos-l-20 bg-danger"></span>
    <span class="hero-bubble wh-30 pos-t-60 pos-l-25 bg-warning"></span>
    <span class="hero-bubble wh-30 pos-t-60 pos-l-80 bg-info"></span>
    <span class="hero-bubble wh-40 pos-t-75 pos-l-70 bg-flat"></span>
    <span class="hero-bubble wh-40 pos-t-75 pos-l-10 bg-earth"></span>
    <span class="hero-bubble wh-30 pos-t-90 pos-l-90 bg-elegance"></span>
    <div class="row no-gutters justify-content-center">
        <div class="hero-static col-lg-7">
            <div class="content content-full overflow-hidden">
                <!-- Header -->
                <div class="py-50 text-center">
                    <a class="link-effect font-w700" href="index.php">
                        <i class="si si-fire"></i>
                        <span class="font-size-xl text-primary-dark">code</span><span class="font-size-xl">base</span>
                    </a>
                    <h1 class="h4 font-w700 mt-30 mb-10">Welcome to your new web app installation</h1>
                    <h2 class="h5 font-w400 text-muted mb-0">Let's get started, it will only take a few seconds!</h2>
                </div>
                <!-- END Header -->

                <!-- Installation form -->
                <!-- jQuery Validation functionality is initialized with .js-validation-installation class in js/pages/op_installation.min.js which was auto compiled from _es6/pages/op_installation.js -->
                <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                <form class="js-validation-installation" action="op_installation.php" method="post">
                    <div class="block block-rounded block-shadow">
                        <!-- Database section -->
                        <div class="block-content block-content-full">
                            <h2 class="content-heading text-black pt-20">Database</h2>
                            <div class="row items-push">
                                <div class="col-lg-4">
                                    <p class="text-muted">
                                        Please pay extra attention because adding the correct database info is vital for a successful app installation.
                                    </p>
                                </div>
                                <div class="col-lg-6 offset-lg-1">
                                    <div class="form-group">
                                        <label for="install-db-name">Name</label>
                                        <input type="text" class="form-control form-control-lg" id="install-db-name" name="install-db-name" placeholder="What's the name of your database?">
                                    </div>
                                    <div class="form-group">
                                        <label for="install-db-host">Host</label>
                                        <input type="text" class="form-control form-control-lg" id="install-db-host" name="install-db-host" placeholder="Leave empty for 'localhost'">
                                    </div>
                                    <div class="form-group">
                                        <label for="install-db-prefix">Table Prefix</label>
                                        <input type="text" class="form-control form-control-lg" id="install-db-prefix" name="install-db-prefix" placeholder="Leave empty for 'app_'">
                                    </div>
                                    <div class="form-group">
                                        <label for="install-db-username">Username</label>
                                        <input type="text" class="form-control form-control-lg" id="install-db-username" name="install-db-username" placeholder="Database username">
                                    </div>
                                    <div class="form-group">
                                        <label for="install-db-password">Password</label>
                                        <input type="password" class="form-control form-control-lg" id="install-db-password" name="install-db-password" placeholder="Database password">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Database section -->

                        <!-- Administrator section -->
                        <div class="block-content block-content-full">
                            <h2 class="content-heading text-black pt-20">Administrator</h2>
                            <div class="row items-push">
                                <div class="col-lg-4">
                                    <p class="text-muted">
                                        Please add your email and a strong password to create the administrator account.
                                    </p>
                                </div>
                                <div class="col-lg-6 offset-lg-1">
                                    <div class="form-group">
                                        <label for="install-admin-email">Email</label>
                                        <input type="text" class="form-control form-control-lg" id="install-admin-email" name="install-admin-email">
                                    </div>
                                    <div class="form-group">
                                        <label for="install-admin-password">Password</label>
                                        <input type="password" class="form-control form-control-lg" id="install-admin-password" name="install-admin-password">
                                    </div>
                                    <div class="form-group">
                                        <label for="install-admin-password-confirm">Password Confirmation</label>
                                        <input type="password" class="form-control form-control-lg" id="install-admin-password-confirm" name="install-admin-password-confirm">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Administrator section -->

                        <div class="block-content">
                            <div class="form-group row">
                                <div class="col-lg-6 offset-lg-5">
                                    <button type="submit" class="btn btn-hero btn-alt-success min-width-150 mb-10">
                                        <i class="fa fa-arrow-right mr-10"></i> Install
                                    </button>
                                    <button type="reset" class="btn btn-hero btn-alt-secondary min-width-150 mb-10">
                                        <i class="fa fa-repeat mr-10"></i> Reset
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- END Installation Form -->
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
<?php $cb->get_js('js/pages/op_installation.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>