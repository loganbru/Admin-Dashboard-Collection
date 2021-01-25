<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Codebase - Page specific configuration
$cb->l_header_style = 'glass-inverse';
?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-primary">
    <div class="bg-pattern bg-black-op-25" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/various/bg-pattern.png');">
        <div class="content content-top text-center">
            <div class="py-50">
                <h1 class="font-w700 text-white mb-10">Team</h1>
                <h2 class="h4 font-w400 text-white-op">Get to know our passionate team.</h2>
            </div>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content content-full">
    <!-- Team -->
    <div class="row gutters-tiny py-20">
        <div class="col-md-6 col-xl-4">
            <div class="block text-center">
                <div class="block-content">
                    <?php $cb->get_avatar(1, '', 96); ?>
                </div>
                <div class="block-content block-content-full">
                    <div class="font-size-h4 font-w600 mb-0"><?php $cb->get_name('female'); ?></div>
                    <div class="font-size-h5 text-muted">Founder</div>
                </div>
                <div class="block-content block-content-full bg-body-light">
                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="block text-center">
                <div class="block-content">
                    <?php $cb->get_avatar(10, '', 96); ?>
                </div>
                <div class="block-content block-content-full">
                    <div class="font-size-h4 font-w600 mb-0"><?php $cb->get_name('male'); ?></div>
                    <div class="font-size-h5 text-muted">Co-Founder</div>
                </div>
                <div class="block-content block-content-full bg-body-light">
                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="block text-center">
                <div class="block-content">
                    <?php $cb->get_avatar(14, '', 96); ?>
                </div>
                <div class="block-content block-content-full">
                    <div class="font-size-h4 font-w600 mb-0"><?php $cb->get_name('male'); ?></div>
                    <div class="font-size-h5 text-muted">Marketing</div>
                </div>
                <div class="block-content block-content-full bg-body-light">
                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="block text-center">
                <div class="block-content">
                    <?php $cb->get_avatar(12, '', 96); ?>
                </div>
                <div class="block-content block-content-full">
                    <div class="font-size-h4 font-w600 mb-0"><?php $cb->get_name('female'); ?></div>
                    <div class="font-size-h5 text-muted">Developer</div>
                </div>
                <div class="block-content block-content-full bg-body-light">
                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-github"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="block text-center">
                <div class="block-content">
                    <?php $cb->get_avatar(13, '', 96); ?>
                </div>
                <div class="block-content block-content-full">
                    <div class="font-size-h4 font-w600 mb-0"><?php $cb->get_name('male'); ?></div>
                    <div class="font-size-h5 text-muted">Developer</div>
                </div>
                <div class="block-content block-content-full bg-body-light">
                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-github"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="block text-center">
                <div class="block-content">
                    <?php $cb->get_avatar(9, '', 96); ?>
                </div>
                <div class="block-content block-content-full">
                    <div class="font-size-h4 font-w600 mb-0"><?php $cb->get_name('male'); ?></div>
                    <div class="font-size-h5 text-muted">Designer</div>
                </div>
                <div class="block-content block-content-full bg-body-light">
                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-dribbble"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="block text-center">
                <div class="block-content">
                    <?php $cb->get_avatar(6, '', 96); ?>
                </div>
                <div class="block-content block-content-full">
                    <div class="font-size-h4 font-w600 mb-0"><?php $cb->get_name('female'); ?></div>
                    <div class="font-size-h5 text-muted">Designer</div>
                </div>
                <div class="block-content block-content-full bg-body-light">
                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-dribbble"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="block text-center">
                <div class="block-content">
                    <?php $cb->get_avatar(3, '', 96); ?>
                </div>
                <div class="block-content block-content-full">
                    <div class="font-size-h4 font-w600 mb-0"><?php $cb->get_name('female'); ?></div>
                    <div class="font-size-h5 text-muted">Customer Support</div>
                </div>
                <div class="block-content block-content-full bg-body-light">
                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="block text-center">
                <div class="block-content">
                    <img class="img-avatar img-avatar96" src="<?php echo $cb->assets_folder; ?>/media/avatars/avatar0.jpg" alt="Your photo">
                </div>
                <div class="block-content block-content-full">
                    <div class="font-size-h4 font-w600 mb-0">You!</div>
                    <div class="font-size-h5 text-muted">Customer Support</div>
                </div>
                <div class="block-content block-content-full bg-body-light">
                    <a class="btn btn-rounded btn-alt-primary" href="be_pages_generic_contact.php">
                        <i class="fa fa-pencil mr-5"></i>Apply Today!
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- END Team -->

    <!-- Info -->
    <div class="block">
        <div class="block-content">
            <div class="row nice-copy">
                <div class="col-md-4 py-30">
                    <h3 class="h4 font-w700 text-uppercase pb-10 border-b border-3x">Who We <span class="text-primary">Are</span>.</h3>
                    <p class="mb-0">Posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos.</p>
                </div>
                <div class="col-md-4 py-30">
                    <h3 class="h4 font-w700 text-uppercase pb-10 border-b border-3x">What We <span class="text-primary">Do</span>.</h3>
                    <p class="mb-0">Posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos.</p>
                </div>
                <div class="col-md-4 py-30">
                    <h3 class="h4 font-w700 text-uppercase pb-10 border-b border-3x">Why Join <span class="text-primary">Us</span>.</h3>
                    <p class="mb-0">Posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos.</p>
                </div>
                <div class="col-md-12 py-30">
                    <h3 class="h4 font-w700 text-uppercase text-center pb-10 border-b border-3x mb-0">Quick <span class="text-primary">Statistics</span>.</h3>

                    <!-- CountTo ([data-toggle="countTo"] is initialized in Helpers.coreAppearCountTo()) -->
                    <!-- For more info and examples you can check out https://github.com/mhuggins/jquery-countTo -->
                    <div class="row text-center">
                        <div class="col-sm-6 col-md-3 py-30">
                            <div class="mb-20">
                                <i class="si si-briefcase fa-3x text-primary"></i>
                            </div>
                            <div class="font-size-h1 font-w700 text-black mb-5" data-toggle="countTo" data-to="9600" data-after="+">0</div>
                            <div class="font-w600 text-muted text-uppercase">Projects</div>
                        </div>
                        <div class="col-sm-6 col-md-3 py-30">
                            <div class="mb-20">
                                <i class="si si-users fa-3x text-primary"></i>
                            </div>
                            <div class="font-size-h1 font-w700 text-black mb-5" data-toggle="countTo" data-to="760" data-after="+">0</div>
                            <div class="font-w600 text-muted text-uppercase">Clients</div>
                        </div>
                        <div class="col-sm-6 col-md-3 py-30">
                            <div class="mb-20">
                                <i class="si si-clock fa-3x text-primary"></i>
                            </div>
                            <div class="font-size-h1 font-w700 text-black mb-5" data-toggle="countTo" data-to="88600" data-after="+">0</div>
                            <div class="font-w600 text-muted text-uppercase">Hours</div>
                        </div>
                        <div class="col-sm-6 col-md-3 py-30">
                            <div class="mb-20">
                                <i class="si si-badge fa-3x text-primary"></i>
                            </div>
                            <div class="font-size-h1 font-w700 text-black mb-5" data-toggle="countTo" data-to="60" data-after="+">0</div>
                            <div class="font-w600 text-muted text-uppercase">Awards</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Info -->
</div>
<!-- END Page Content -->

<!-- We are hiring -->
<div class="bg-body-dark">
    <div class="content">
        <div class="py-50 nice-copy text-center">
            <h3 class="font-w700 mb-10">We Are Hiring!</h3>
            <h4 class="font-w400 text-muted mb-30">Would you like to join our team?</h4>
            <a class="btn btn-hero btn-noborder btn-lg btn-rounded btn-primary" href="be_pages_generic_contact.php">Get In Touch</a>
        </div>
    </div>
</div>
<!-- END We are hiring -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>