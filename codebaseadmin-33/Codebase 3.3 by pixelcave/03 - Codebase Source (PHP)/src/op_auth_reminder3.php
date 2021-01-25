<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="bg-body-dark bg-pattern" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/various/bg-pattern-inverse.png');">
    <div class="row mx-0 justify-content-center">
        <div class="hero-static col-lg-6 col-xl-4">
            <div class="content content-full overflow-hidden">
                <!-- Header -->
                <div class="py-30 text-center">
                    <a class="link-effect font-w700" href="index.php">
                        <i class="si si-fire"></i>
                        <span class="font-size-xl text-primary-dark">code</span><span class="font-size-xl">base</span>
                    </a>
                    <h1 class="h4 font-w700 mt-30 mb-10">Don’t worry, we’ve got your back</h1>
                    <h2 class="h5 font-w400 text-muted mb-0">Please enter your username or email</h2>
                </div>
                <!-- END Header -->

                <!-- Reminder Form -->
                <!-- jQuery Validation functionality is initialized with .js-validation-reminder class in js/pages/op_auth_reminder.min.js which was auto compiled from _es6/pages/op_auth_reminder.js -->
                <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                <form class="js-validation-reminder" action="be_pages_auth_all.php" method="post">
                    <div class="block block-themed block-rounded block-shadow">
                        <div class="block-header bg-gd-primary">
                            <h3 class="block-title">Password Reminder</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option">
                                    <i class="si si-wrench"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="reminder-credential">Username or Email</label>
                                    <input type="text" class="form-control" id="reminder-credential" name="reminder-credential">
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-alt-primary">
                                    <i class="fa fa-asterisk mr-10"></i> Password Reminder
                                </button>
                            </div>
                        </div>
                        <div class="block-content bg-body-light">
                            <div class="form-group text-center">
                                <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="op_auth_signin3.php">
                                <i class="fa fa-user text-muted mr-5"></i> Sign In
                            </a>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- END Reminder Form -->
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
<?php $cb->get_js('js/pages/op_auth_reminder.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>