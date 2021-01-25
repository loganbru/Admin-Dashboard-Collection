<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <!-- Simple User Widgets -->
    <h2 class="content-heading">User Widgets <small>Simple</small></h2>
    <div class="row">
        <!-- Row #1 -->
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="float-right">
                        <?php $cb->get_avatar('', 'female'); ?>
                    </div>
                    <div class="float-left mt-10">
                        <div class="font-w600 mb-5"><?php $cb->get_name('female'); ?></div>
                        <div class="font-size-sm text-muted">Web Designer</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="float-right">
                        <?php $cb->get_avatar('', 'female'); ?>
                    </div>
                    <div class="float-left mt-10">
                        <div class="font-w600 mb-5"><?php $cb->get_name('female'); ?></div>
                        <div class="font-size-sm text-muted">Copywriter</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="text-right float-right mt-10">
                        <div class="font-w600 mb-5"><?php $cb->get_name('male'); ?></div>
                        <div class="font-size-sm text-muted">Developer</div>
                    </div>
                    <div class="float-left">
                        <?php $cb->get_avatar('', 'male'); ?>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="text-right float-right mt-10">
                        <div class="font-w600 mb-5"><?php $cb->get_name('male'); ?></div>
                        <div class="font-size-sm text-muted">Photographer</div>
                    </div>
                    <div class="float-left">
                        <?php $cb->get_avatar('', 'male'); ?>
                    </div>
                </div>
            </a>
        </div>
        <!-- END Row #1 -->
    </div>
    <div class="row">
        <!-- Row #2 -->
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-pop text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <?php $cb->get_avatar('', 'female'); ?>
                </div>
                <div class="block-content block-content-full bg-body-light">
                    <div class="font-w600 mb-5"><?php $cb->get_name('female'); ?></div>
                    <div class="font-size-sm text-muted">Web Designer</div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-pop text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <?php $cb->get_avatar('', 'female'); ?>
                </div>
                <div class="block-content block-content-full bg-body-light">
                    <div class="font-w600 mb-5"><?php $cb->get_name('female'); ?></div>
                    <div class="font-size-sm text-muted">Graphic Designer</div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-pop text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <?php $cb->get_avatar('', 'male'); ?>
                </div>
                <div class="block-content block-content-full bg-body-light">
                    <div class="font-w600 mb-5"><?php $cb->get_name('male'); ?></div>
                    <div class="font-size-sm text-muted">Web Developer</div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-pop text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <?php $cb->get_avatar('', 'male'); ?>
                </div>
                <div class="block-content block-content-full bg-body-light">
                    <div class="font-w600 mb-5"><?php $cb->get_name('male'); ?></div>
                    <div class="font-size-sm text-muted">Photographer</div>
                </div>
            </a>
        </div>
        <!-- END Row #2 -->
    </div>
    <div class="row">
        <!-- Row #3 -->
        <div class="col-md-6 col-xl-3">
            <a class="block text-center" href="javascript:void(0)">
                <div class="block-content block-content-full bg-gd-sun">
                    <?php $cb->get_avatar('', 'female', 64, 'img-thumb'); ?>
                </div>
                <div class="block-content block-content-full">
                    <div class="font-w600 mb-5"><?php $cb->get_name('female'); ?></div>
                    <div class="font-size-sm text-muted">Web Designer</div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <span class="font-w600 font-size-sm text-danger">user@example.com</span>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block text-center" href="javascript:void(0)">
                <div class="block-content block-content-full bg-gd-leaf">
                    <?php $cb->get_avatar('', 'female', 64, 'img-thumb'); ?>
                </div>
                <div class="block-content block-content-full">
                    <div class="font-w600 mb-5"><?php $cb->get_name('female'); ?></div>
                    <div class="font-size-sm text-muted">Graphic Designer</div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <span class="font-w600 font-size-sm text-success">user@example.com</span>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block text-center" href="javascript:void(0)">
                <div class="block-content block-content-full bg-gd-emerald">
                    <?php $cb->get_avatar('', 'male', 64, 'img-thumb'); ?>
                </div>
                <div class="block-content block-content-full">
                    <div class="font-w600 mb-5"><?php $cb->get_name('male'); ?></div>
                    <div class="font-size-sm text-muted">Web Developer</div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <span class="font-w600 font-size-sm text-corporate">user@example.com</span>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block text-center" href="javascript:void(0)">
                <div class="block-content block-content-full bg-gd-dusk">
                    <?php $cb->get_avatar('', 'male', 64, 'img-thumb'); ?>
                </div>
                <div class="block-content block-content-full">
                    <div class="font-w600 mb-5"><?php $cb->get_name('male'); ?></div>
                    <div class="font-size-sm text-muted">Photographer</div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <span class="font-w600 font-size-sm text-elegance">user@example.com</span>
                </div>
            </a>
        </div>
        <!-- END Row #3 -->
    </div>
    <div class="row">
        <!-- Row #4 -->
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-pop bg-info text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <?php $cb->get_avatar('', 'female', 64, 'img-thumb'); ?>
                </div>
                <div class="block-content block-content-full bg-black-op-5">
                    <div class="font-w600 text-white mb-5"><?php $cb->get_name('female'); ?></div>
                    <div class="font-size-sm text-white-op">Web Designer</div>
                </div>
                <div class="block-content block-content-full block-content-sm">
                    <span class="font-w600 font-size-sm text-info-light">user@example.com</span>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-pop bg-success text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <?php $cb->get_avatar('', 'female', 64, 'img-thumb'); ?>
                </div>
                <div class="block-content block-content-full bg-black-op-5">
                    <div class="font-w600 text-white mb-5"><?php $cb->get_name('female'); ?></div>
                    <div class="font-size-sm text-white-op">Graphic Designer</div>
                </div>
                <div class="block-content block-content-full block-content-sm">
                    <span class="font-w600 font-size-sm text-success-light">user@example.com</span>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-pop bg-warning text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <?php $cb->get_avatar('', 'male', 64, 'img-thumb'); ?>
                </div>
                <div class="block-content block-content-full bg-black-op-5">
                    <div class="font-w600 text-white mb-5"><?php $cb->get_name('male'); ?></div>
                    <div class="font-size-sm text-white-op">Web Developer</div>
                </div>
                <div class="block-content block-content-full block-content-sm">
                    <span class="font-w600 font-size-sm text-warning-light">user@example.com</span>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-pop bg-danger text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <?php $cb->get_avatar('', 'male', 64, 'img-thumb'); ?>
                </div>
                <div class="block-content block-content-full bg-black-op-5">
                    <div class="font-w600 text-white mb-5"><?php $cb->get_name('male'); ?></div>
                    <div class="font-size-sm text-white-op">Photographer</div>
                </div>
                <div class="block-content block-content-full block-content-sm">
                    <span class="font-w600 font-size-sm text-danger-light">user@example.com</span>
                </div>
            </a>
        </div>
        <!-- END Row #4 -->
    </div>
    <!-- END Simple User Widgets -->

    <!-- User Widgets with Icons -->
    <h2 class="content-heading">User Widgets <small>Icons</small></h2>
    <div class="row">
        <!-- Row #1 -->
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <?php $cb->get_avatar('', 'female'); ?>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <div class="font-w600 mb-5"><?php $cb->get_name('female'); ?></div>
                    <div class="font-size-sm text-muted">Photographer</div>
                </div>
                <div class="block-content">
                    <div class="row items-push text-center">
                        <div class="col-6">
                            <div class="mb-5"><i class="si si-wallet fa-2x"></i></div>
                            <div class="font-size-sm text-muted">$3.090</div>
                        </div>
                        <div class="col-6">
                            <div class="mb-5"><i class="si si-trophy fa-2x"></i></div>
                            <div class="font-size-sm text-muted">4 Awards</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <?php $cb->get_avatar('', 'female'); ?>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <div class="font-w600 mb-5"><?php $cb->get_name('female'); ?></div>
                    <div class="font-size-sm text-muted">Copywriter</div>
                </div>
                <div class="block-content">
                    <div class="row items-push text-center">
                        <div class="col-6">
                            <div class="mb-5"><i class="si si-briefcase fa-2x"></i></div>
                            <div class="font-size-sm text-muted">35 Projects</div>
                        </div>
                        <div class="col-6">
                            <div class="mb-5"><i class="si si-users fa-2x"></i></div>
                            <div class="font-size-sm text-muted">350 Users</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <?php $cb->get_avatar('', 'male'); ?>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <div class="font-w600 mb-5"><?php $cb->get_name('male'); ?></div>
                    <div class="font-size-sm text-muted">Web Designer</div>
                </div>
                <div class="block-content">
                    <div class="row items-push text-center">
                        <div class="col-6">
                            <div class="mb-5"><i class="si si-badge fa-2x"></i></div>
                            <div class="font-size-sm text-muted">8 Badges</div>
                        </div>
                        <div class="col-6">
                            <div class="mb-5"><i class="si si-wallet fa-2x"></i></div>
                            <div class="font-size-sm text-muted">$3.100</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <?php $cb->get_avatar('', 'male'); ?>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <div class="font-w600 mb-5"><?php $cb->get_name('male'); ?></div>
                    <div class="font-size-sm text-muted">Web Developer</div>
                </div>
                <div class="block-content">
                    <div class="row items-push">
                        <div class="col-6">
                            <div class="mb-5"><i class="si si-notebook fa-2x"></i></div>
                            <div class="font-size-sm text-muted">4 Notes</div>
                        </div>
                        <div class="col-6">
                            <div class="mb-5"><i class="si si-camera fa-2x"></i></div>
                            <div class="font-size-sm text-muted">14 Photos</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <!-- END Row #1 -->
    </div>
    <div class="row">
        <!-- Row #2 -->
        <div class="col-md-6 col-xl-3">
            <a class="block text-center" href="javascript:void(0)">
                <div class="block-content block-content-full block-content-sm bg-primary">
                    <span class="font-w600 text-white"><?php $cb->get_name('female'); ?></span>
                </div>
                <div class="block-content block-content-full bg-primary-lighter">
                    <?php $cb->get_avatar('', 'female', 64, 'img-fluid'); ?>
                </div>
                <div class="block-content">
                    <div class="row items-push text-center">
                        <div class="col-6">
                            <div class="mb-5"><i class="si si-playlist fa-2x text-primary"></i></div>
                            <div class="font-size-sm text-muted">5 Albums</div>
                        </div>
                        <div class="col-6">
                            <div class="mb-5"><i class="si si-wallet fa-2x text-primary"></i></div>
                            <div class="font-size-sm text-muted">$4.850</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block text-center" href="javascript:void(0)">
                <div class="block-content block-content-full block-content-sm bg-pulse">
                    <span class="font-w600 text-white"><?php $cb->get_name('female'); ?></span>
                </div>
                <div class="block-content block-content-full bg-pulse-lighter">
                    <?php $cb->get_avatar('', 'female', 64, 'img-fluid'); ?>
                </div>
                <div class="block-content">
                    <div class="row items-push text-center">
                        <div class="col-6">
                            <div class="mb-5"><i class="si si-globe fa-2x text-pulse"></i></div>
                            <div class="font-size-sm text-muted">World</div>
                        </div>
                        <div class="col-6">
                            <div class="mb-5"><i class="si si-briefcase fa-2x text-pulse"></i></div>
                            <div class="font-size-sm text-muted">35 Projects</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block text-center" href="javascript:void(0)">
                <div class="block-content block-content-full block-content-sm bg-elegance">
                    <span class="font-w600 text-white"><?php $cb->get_name('male'); ?></span>
                </div>
                <div class="block-content block-content-full bg-elegance-lighter">
                    <?php $cb->get_avatar('', 'male', 64, 'img-fluid'); ?>
                </div>
                <div class="block-content">
                    <div class="row items-push text-center">
                        <div class="col-6">
                            <div class="mb-5"><i class="si si-bubbles fa-2x text-elegance"></i></div>
                            <div class="font-size-sm text-muted">29 Posts</div>
                        </div>
                        <div class="col-6">
                            <div class="mb-5"><i class="si si-star fa-2x text-elegance"></i></div>
                            <div class="font-size-sm text-muted">198 Reviews</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block text-center" href="javascript:void(0)">
                <div class="block-content block-content-full block-content-sm bg-info">
                    <span class="font-w600 text-white"><?php $cb->get_name('male'); ?></span>
                </div>
                <div class="block-content block-content-full bg-info-light">
                    <?php $cb->get_avatar('', 'male', 64, 'img-fluid'); ?>
                </div>
                <div class="block-content">
                    <div class="row items-push">
                        <div class="col-6">
                            <div class="mb-5"><i class="si si-basket fa-2x text-info"></i></div>
                            <div class="font-size-sm text-muted">2 Products</div>
                        </div>
                        <div class="col-6">
                            <div class="mb-5"><i class="si si-camcorder fa-2x text-info"></i></div>
                            <div class="font-size-sm text-muted">5 Videos</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <!-- END Row #2 -->
    </div>
    <div class="row">
        <!-- Row #3 -->
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content block-content-full block-content-sm">
                    <div class="font-w600"><?php $cb->get_name('female'); ?></div>
                </div>
                <div class="block-content block-content-full bg-body-light">
                    <?php $cb->get_avatar('', 'female'); ?>
                </div>
                <div class="block-content">
                    <div class="row items-push text-center">
                        <div class="col-6">
                            <div class="item item-circle bg-success-light mx-auto mb-10">
                                <i class="fa fa-money text-success"></i>
                            </div>
                            <div class="text-muted">$9.980</div>
                        </div>
                        <div class="col-6">
                            <div class="item item-circle bg-info-light mx-auto mb-10">
                                <i class="fa fa-diamond text-info"></i>
                            </div>
                            <div class="text-muted">4 Awards</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content block-content-full block-content-sm">
                    <div class="font-w600"><?php $cb->get_name('female'); ?></div>
                </div>
                <div class="block-content block-content-full bg-body-light">
                    <?php $cb->get_avatar('', 'female'); ?>
                </div>
                <div class="block-content">
                    <div class="row items-push text-center">
                        <div class="col-6">
                            <div class="item item-circle bg-earth-lighter mx-auto mb-10">
                                <i class="fa fa-bitcoin text-earth"></i>
                            </div>
                            <div class="text-muted">4 Bitcoins</div>
                        </div>
                        <div class="col-6">
                            <div class="item item-circle bg-pulse-lighter mx-auto mb-10">
                                <i class="fa fa-gamepad text-pulse"></i>
                            </div>
                            <div class="text-muted">85 Games</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content block-content-full block-content-sm">
                    <div class="font-w600"><?php $cb->get_name('male'); ?></div>
                </div>
                <div class="block-content block-content-full bg-body-light">
                    <?php $cb->get_avatar('', 'male'); ?>
                </div>
                <div class="block-content">
                    <div class="row items-push text-center">
                        <div class="col-6">
                            <div class="item item-circle bg-elegance-lighter mx-auto mb-10">
                                <i class="fa fa-download text-elegance"></i>
                            </div>
                            <div class="text-muted">1 Download</div>
                        </div>
                        <div class="col-6">
                            <div class="item item-circle bg-corporate-lighter mx-auto mb-10">
                                <i class="fa fa-bluetooth text-corporate"></i>
                            </div>
                            <div class="text-muted">5 Devices</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content block-content-full block-content-sm">
                    <div class="font-w600"><?php $cb->get_name('male'); ?></div>
                </div>
                <div class="block-content block-content-full bg-body-light">
                    <?php $cb->get_avatar('', 'male'); ?>
                </div>
                <div class="block-content">
                    <div class="row items-push text-center">
                        <div class="col-6">
                            <div class="item item-circle bg-danger-light mx-auto mb-10">
                                <i class="fa fa-calendar text-danger"></i>
                            </div>
                            <div class="text-muted">2 Events</div>
                        </div>
                        <div class="col-6">
                            <div class="item item-circle bg-warning-light mx-auto mb-10">
                                <i class="fa fa-car text-warning"></i>
                            </div>
                            <div class="text-muted">2 Cars</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <!-- END Row #3 -->
    </div>
    <!-- END User Widgets with Icons -->

    <!-- User Widgets with Images -->
    <h2 class="content-heading">User Widgets <small>Images</small></h2>
    <div class="row">
        <!-- Row #1 -->
        <div class="col-md-6 col-xl-3">
            <a class="block block-rounded block-link-pop text-center" href="javascript:void(0)">
                <div class="block-content block-content-full bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo30.jpg');">
                    <?php $cb->get_avatar('', 'female', 64, 'img-thumb'); ?>
                </div>
                <div class="block-content block-content-full">
                    <div class="font-w600 mb-5"><?php $cb->get_name('female'); ?></div>
                    <div class="font-size-sm text-muted">VIP Account</div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-rounded block-link-pop text-center" href="javascript:void(0)">
                <div class="block-content block-content-full bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo4.jpg');">
                    <?php $cb->get_avatar('', 'female', 64, 'img-thumb'); ?>
                </div>
                <div class="block-content block-content-full">
                    <div class="font-w600 mb-5"><?php $cb->get_name('female'); ?></div>
                    <div class="font-size-sm text-muted">Premium Account</div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-rounded block-link-pop text-center" href="javascript:void(0)">
                <div class="block-content block-content-full bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo25.jpg');">
                    <?php $cb->get_avatar('', 'male', 64, 'img-thumb'); ?>
                </div>
                <div class="block-content block-content-full">
                    <div class="font-w600 mb-5"><?php $cb->get_name('male'); ?></div>
                    <div class="font-size-sm text-muted">Trial Account</div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-rounded block-link-pop text-center" href="javascript:void(0)">
                <div class="block-content block-content-full bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo1.jpg');">
                    <?php $cb->get_avatar('', 'male', 64, 'img-thumb'); ?>
                </div>
                <div class="block-content block-content-full">
                    <div class="font-w600 mb-5"><?php $cb->get_name('male'); ?></div>
                    <div class="font-size-sm text-muted">Free Account</div>
                </div>
            </a>
        </div>
        <!-- END Row #1 -->
    </div>
    <div class="row">
        <!-- Row #2 -->
        <div class="col-md-6 col-xl-3">
            <a class="block block-rounded block-transparent text-center bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo22.jpg');" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <?php $cb->get_avatar('', 'female', 64, 'img-thumb'); ?>
                </div>
                <div class="block-content block-content-full block-content-sm bg-black-op">
                    <div class="font-w600 text-white mb-5"><?php $cb->get_name('female'); ?></div>
                    <div class="font-size-sm text-white-op">Web Designer</div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-rounded block-transparent text-center bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo17.jpg');" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <?php $cb->get_avatar('', 'female', 64, 'img-thumb'); ?>
                </div>
                <div class="block-content block-content-full block-content-sm bg-black-op">
                    <div class="font-w600 text-white mb-5"><?php $cb->get_name('female'); ?></div>
                    <div class="font-size-sm text-white-op">Graphic Designer</div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-rounded block-transparent text-center bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo9.jpg');" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <?php $cb->get_avatar('', 'male', 64, 'img-thumb'); ?>
                </div>
                <div class="block-content block-content-full block-content-sm bg-black-op">
                    <div class="font-w600 text-white mb-5"><?php $cb->get_name('male'); ?></div>
                    <div class="font-size-sm text-white-op">Web Developer</div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-rounded block-transparent text-center bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo2.jpg');" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <?php $cb->get_avatar('', 'male', 64, 'img-thumb'); ?>
                </div>
                <div class="block-content block-content-full block-content-sm bg-black-op">
                    <div class="font-w600 text-white mb-5"><?php $cb->get_name('male'); ?></div>
                    <div class="font-size-sm text-white-op">Photographer</div>
                </div>
            </a>
        </div>
        <!-- END Row #2 -->
    </div>
    <div class="row">
        <!-- Row #3 -->
        <div class="col-md-6 col-xl-3">
            <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content block-content-full block-content-sm bg-elegance-dark">
                    <div class="font-w600 text-white"><?php $cb->get_name('female'); ?></div>
                </div>
                <div class="block-content block-content-full bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo28.jpg');">
                    <?php $cb->get_avatar('', 'female', 64, 'img-thumb'); ?>
                </div>
                <div class="block-content block-content-full block-content-sm bg-elegance">
                    <div class="font-size-sm text-white">VIP Account</div>
                </div>
                <div class="block-content block-content-full">
                    <div class="mb-5"><i class="si si-clock fa-2x text-elegance"></i></div>
                    <div class="font-size-sm text-muted">~ 1 month left</div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content block-content-full block-content-sm bg-corporate-dark">
                    <div class="font-w600 text-white"><?php $cb->get_name('female'); ?></div>
                </div>
                <div class="block-content block-content-full bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo23.jpg');">
                    <?php $cb->get_avatar('', 'female', 64, 'img-thumb'); ?>
                </div>
                <div class="block-content block-content-full block-content-sm bg-corporate">
                    <div class="font-size-sm text-white">Premium Account</div>
                </div>
                <div class="block-content block-content-full">
                    <div class="mb-5"><i class="si si-clock fa-2x text-corporate"></i></div>
                    <div class="font-size-sm text-muted">~ 1 year left</div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content block-content-full block-content-sm bg-pulse-dark">
                    <div class="font-w600 text-white"><?php $cb->get_name('male'); ?></div>
                </div>
                <div class="block-content block-content-full bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo26.jpg');">
                    <?php $cb->get_avatar('', 'male', 64, 'img-thumb'); ?>
                </div>
                <div class="block-content block-content-full block-content-sm bg-pulse">
                    <div class="font-size-sm text-white">Trial Account</div>
                </div>
                <div class="block-content block-content-full">
                    <div class="mb-5"><i class="si si-clock fa-2x text-pulse"></i></div>
                    <div class="font-size-sm text-muted">~ 6 months left</div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content block-content-full block-content-sm bg-primary-dark">
                    <div class="font-w600 text-white"><?php $cb->get_name('male'); ?></div>
                </div>
                <div class="block-content block-content-full bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo12.jpg');">
                    <?php $cb->get_avatar('', 'male', 64, 'img-thumb'); ?>
                </div>
                <div class="block-content block-content-full block-content-sm bg-primary">
                    <div class="font-size-sm text-white">Free Account</div>
                </div>
                <div class="block-content block-content-full">
                    <div class="mb-5"><i class="si si-clock fa-2x text-primary"></i></div>
                    <div class="font-size-sm text-muted">~ 3 days left</div>
                </div>
            </a>
        </div>
        <!-- END Row #3 -->
    </div>
    <!-- END User Widgets with Images -->

    <!-- User Widgets with Buttons and Menus -->
    <h2 class="content-heading">User Widgets <small>Buttons &amp; Menus</small></h2>
    <div class="row">
        <!-- Row #1 -->
        <div class="col-md-6 col-xl-3">
            <div class="block text-center">
                <div class="block-content block-content-full block-sticky-options pt-30">
                    <div class="block-options">
                        <div class="dropdown">
                            <button type="button" class="btn-block-option" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-fw fa-ellipsis-v"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-plus mr-5"></i>Add friend
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-user mr-5"></i>Check out profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-envelope-o mr-5"></i>Send a message
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php $cb->get_avatar('', 'male'); ?>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <div class="font-w600 mb-5"><?php $cb->get_name('male'); ?></div>
                    <div class="font-size-sm text-muted">Web Developer</div>
                </div>
                <div class="block-content">
                    <div class="row items-push">
                        <div class="col-6">
                            <div class="mb-5"><i class="si si-notebook fa-2x"></i></div>
                            <div class="font-size-sm text-muted">4 Notes</div>
                        </div>
                        <div class="col-6">
                            <div class="mb-5"><i class="si si-camera fa-2x"></i></div>
                            <div class="font-size-sm text-muted">14 Photos</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="block text-center">
                <div class="block-content block-content-full block-sticky-options pt-30">
                    <div class="block-options">
                        <div class="dropdown">
                            <button type="button" class="btn-block-option" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-plus mr-5"></i>Add friend
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-user mr-5"></i>Check out profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-envelope-o mr-5"></i>Send a message
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php $cb->get_avatar('', 'female'); ?>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <div class="font-w600 mb-5"><?php $cb->get_name('female'); ?></div>
                    <div class="font-size-sm text-muted">Web Designer</div>
                </div>
                <div class="block-content">
                    <div class="row items-push">
                        <div class="col-6">
                            <div class="mb-5"><i class="si si-badge fa-2x"></i></div>
                            <div class="font-size-sm text-muted">9 Awards</div>
                        </div>
                        <div class="col-6">
                            <div class="mb-5"><i class="si si-calendar fa-2x"></i></div>
                            <div class="font-size-sm text-muted">2 Events</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="block text-center">
                <div class="block-content block-content-full block-sticky-options pt-30">
                    <div class="block-options block-options-left">
                        <div class="dropdown">
                            <button type="button" class="btn-block-option" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="si si-wrench"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-cog mr-5"></i>Settings
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-hand-stop-o mr-5"></i>Privacy
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-envelope-o mr-5"></i>Messages
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php $cb->get_avatar('', 'female'); ?>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <div class="font-w600 mb-5"><?php $cb->get_name('female'); ?></div>
                    <div class="font-size-sm text-muted">Professor</div>
                </div>
                <div class="block-content">
                    <div class="row items-push">
                        <div class="col-6">
                            <div class="mb-5"><i class="si si-badge fa-2x"></i></div>
                            <div class="font-size-sm text-muted">9 Awards</div>
                        </div>
                        <div class="col-6">
                            <div class="mb-5"><i class="si si-calendar fa-2x"></i></div>
                            <div class="font-size-sm text-muted">2 Events</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="block text-center">
                <div class="block-content block-content-full block-sticky-options pt-30">
                    <div class="block-options block-options-left">
                        <div class="dropdown">
                            <button type="button" class="btn-block-option" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-navicon"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-home mr-5"></i>Home
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-pencil mr-5"></i>Profile
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-users mr-5"></i>Friends
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-bell mr-5"></i>Notifications
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="block-options">
                        <div class="dropdown">
                            <button type="button" class="btn-block-option" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-cog mr-5"></i>Settings
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-hand-stop-o mr-5"></i>Privacy
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-envelope-o mr-5"></i>Messages
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php $cb->get_avatar('', 'male'); ?>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <div class="font-w600 mb-5"><?php $cb->get_name('male'); ?></div>
                    <div class="font-size-sm text-muted">App Developer</div>
                </div>
                <div class="block-content">
                    <div class="row items-push">
                        <div class="col-6">
                            <div class="mb-5"><i class="si si-badge fa-2x"></i></div>
                            <div class="font-size-sm text-muted">9 Awards</div>
                        </div>
                        <div class="col-6">
                            <div class="mb-5"><i class="si si-calendar fa-2x"></i></div>
                            <div class="font-size-sm text-muted">2 Events</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Row #1 -->
    </div>
    <div class="row">
        <!-- Row #2 -->
        <div class="col-md-6 col-xl-3">
            <div class="block block-themed text-center">
                <div class="block-content block-content-full block-sticky-options pt-30 bg-primary-dark">
                    <div class="block-options">
                        <div class="dropdown">
                            <button type="button" class="btn-block-option" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-fw fa-ellipsis-v"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-plus mr-5"></i>Add friend
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-user mr-5"></i>Check out profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-envelope-o mr-5"></i>Send a message
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php $cb->get_avatar('', 'male', 64, 'img-thumb'); ?>
                </div>
                <div class="block-content block-content-full block-content-sm bg-primary">
                    <div class="font-w600 text-white mb-5"><?php $cb->get_name('male'); ?></div>
                    <div class="font-size-sm text-white-op">Web Developer</div>
                </div>
                <div class="block-content">
                    <div class="row items-push">
                        <div class="col-6">
                            <div class="mb-5"><i class="si si-notebook fa-2x"></i></div>
                            <div class="font-size-sm text-muted">4 Notes</div>
                        </div>
                        <div class="col-6">
                            <div class="mb-5"><i class="si si-camera fa-2x"></i></div>
                            <div class="font-size-sm text-muted">14 Photos</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="block block-themed text-center">
                <div class="block-content block-content-full block-sticky-options pt-30 bg-elegance-dark">
                    <div class="block-options">
                        <div class="dropdown">
                            <button type="button" class="btn-block-option" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-plus mr-5"></i>Add friend
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-user mr-5"></i>Check out profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-envelope-o mr-5"></i>Send a message
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php $cb->get_avatar('', 'female', 64, 'img-fluid'); ?>
                </div>
                <div class="block-content block-content-full block-content-sm bg-elegance">
                    <div class="font-w600 text-white mb-5"><?php $cb->get_name('female'); ?></div>
                    <div class="font-size-sm text-white-op">Web Designer</div>
                </div>
                <div class="block-content">
                    <div class="row items-push">
                        <div class="col-6">
                            <div class="mb-5"><i class="si si-badge fa-2x"></i></div>
                            <div class="font-size-sm text-muted">9 Awards</div>
                        </div>
                        <div class="col-6">
                            <div class="mb-5"><i class="si si-calendar fa-2x"></i></div>
                            <div class="font-size-sm text-muted">2 Events</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="block block-themed text-center">
                <div class="block-content block-content-full block-sticky-options pt-30 bg-earth">
                    <div class="block-options block-options-left">
                        <div class="dropdown">
                            <button type="button" class="btn-block-option" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="si si-wrench"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-cog mr-5"></i>Settings
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-hand-stop-o mr-5"></i>Privacy
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-envelope-o mr-5"></i>Messages
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php $cb->get_avatar('', 'female', 64, 'img-fluid'); ?>
                </div>
                <div class="block-content block-content-full block-content-sm bg-earth-dark">
                    <div class="font-w600 text-white mb-5"><?php $cb->get_name('female'); ?></div>
                    <div class="font-size-sm text-white-op">Professor</div>
                </div>
                <div class="block-content">
                    <div class="row items-push">
                        <div class="col-6">
                            <div class="mb-5"><i class="si si-badge fa-2x"></i></div>
                            <div class="font-size-sm text-muted">9 Awards</div>
                        </div>
                        <div class="col-6">
                            <div class="mb-5"><i class="si si-calendar fa-2x"></i></div>
                            <div class="font-size-sm text-muted">2 Events</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="block block-themed text-center">
                <div class="block-content block-content-full block-sticky-options pt-30 bg-flat">
                    <div class="block-options block-options-left">
                        <div class="dropdown">
                            <button type="button" class="btn-block-option" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-navicon"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-home mr-5"></i>Home
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-pencil mr-5"></i>Profile
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-users mr-5"></i>Friends
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-bell mr-5"></i>Notifications
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="block-options">
                        <div class="dropdown">
                            <button type="button" class="btn-block-option" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-cog mr-5"></i>Settings
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-hand-stop-o mr-5"></i>Privacy
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-envelope-o mr-5"></i>Messages
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php $cb->get_avatar('', 'male', 64, 'img-fluid'); ?>
                </div>
                <div class="block-content block-content-full block-content-sm bg-flat-dark">
                    <div class="font-w600 text-white mb-5"><?php $cb->get_name('male'); ?></div>
                    <div class="font-size-sm text-white-op">App Developer</div>
                </div>
                <div class="block-content">
                    <div class="row items-push">
                        <div class="col-6">
                            <div class="mb-5"><i class="si si-badge fa-2x"></i></div>
                            <div class="font-size-sm text-muted">9 Awards</div>
                        </div>
                        <div class="col-6">
                            <div class="mb-5"><i class="si si-calendar fa-2x"></i></div>
                            <div class="font-size-sm text-muted">2 Events</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Row #2 -->
    </div>
    <div class="row">
        <!-- Row #3 -->
        <div class="col-md-6 col-xl-3">
            <div class="block text-center">
                <div class="block-content block-content-full block-content-sm">
                    <div class="font-w600"><?php $cb->get_name('male'); ?></div>
                </div>
                <div class="block-content block-content-full bg-body-light">
                    <?php $cb->get_avatar('', 'male', 64, 'img-fluid'); ?>
                </div>
                <div class="block-content block-content-full">
                    <button type="button" class="btn btn-circle btn-alt-warning mr-5 mb-5" data-toggle="tooltip" title="Edit">
                        <i class="fa fa-pencil"></i>
                    </button>
                    <button type="button" class="btn btn-circle btn-alt-success mr-5 mb-5" data-toggle="tooltip" title="Profile">
                        <i class="fa fa-user"></i>
                    </button>
                    <button type="button" class="btn btn-circle btn-alt-primary mr-5 mb-5" data-toggle="tooltip" title="Settings">
                        <i class="fa fa-cog"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="block text-center">
                <div class="block-content block-content-full block-content-sm">
                    <div class="font-w600"><?php $cb->get_name('female'); ?></div>
                </div>
                <div class="block-content block-content-full bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo28.jpg');">
                    <?php $cb->get_avatar('', 'female', 64, 'img-fluid'); ?>
                </div>
                <div class="block-content block-content-full">
                    <button type="button" class="btn btn-circle btn-alt-success mr-5 mb-5" data-toggle="tooltip" data-placement="bottom" title="Add to group">
                        <i class="fa fa-plus"></i>
                    </button>
                    <button type="button" class="btn btn-circle btn-alt-danger mr-5 mb-5" data-toggle="tooltip" data-placement="bottom" title="Remove from group">
                        <i class="fa fa-times"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="block text-center">
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <div class="font-w600"><?php $cb->get_name('female'); ?></div>
                </div>
                <div class="block-content block-content-full">
                    <?php $cb->get_avatar('', 'female', 64, 'img-fluid'); ?>
                </div>
                <div class="block-content block-content-full bg-body-light">
                    <button type="button" class="btn btn-circle btn-alt-warning mr-5 mb-5" data-toggle="tooltip" title="Edit">
                        <i class="fa fa-pencil"></i>
                    </button>
                    <button type="button" class="btn btn-circle btn-alt-success mr-5 mb-5" data-toggle="tooltip" title="Profile">
                        <i class="fa fa-user"></i>
                    </button>
                    <button type="button" class="btn btn-circle btn-alt-primary mr-5 mb-5" data-toggle="tooltip" title="Settings">
                        <i class="fa fa-cog"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="block text-center">
                <div class="block-content block-content-full block-content-sm">
                    <div class="font-w600"><?php $cb->get_name('male'); ?></div>
                </div>
                <div class="block-content block-content-full bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo1.jpg');">
                    <?php $cb->get_avatar('', 'male', 64, 'img-fluid'); ?>
                </div>
                <div class="block-content block-content-full">
                    <button type="button" class="btn btn-circle btn-alt-success mr-5 mb-5" data-toggle="tooltip" data-placement="bottom" title="Add to group">
                        <i class="fa fa-plus"></i>
                    </button>
                    <button type="button" class="btn btn-circle btn-alt-danger mr-5 mb-5" data-toggle="tooltip" data-placement="bottom" title="Remove from group">
                        <i class="fa fa-times"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- END Row #3 -->
    </div>
    <div class="row">
        <!-- Row #4 -->
        <div class="col-md-6 col-xl-3">
            <div class="block block-themed">
                <div class="block-content block-content-full bg-primary-light text-center">
                    <?php $cb->get_avatar('', 'male', 64, 'img-thumb'); ?>
                    <div class="font-w600 text-white mt-10"><?php $cb->get_name('male'); ?></div>
                    <div class="font-size-sm text-white-op">Web Developer</div>
                </div>
                <div class="block-content block-content-full">
                    <div class="list-group">
                        <a class="list-group-item list-group-item-action active" href="javascript:void(0)">
                            <i class="fa fa-fw fa-home mr-5"></i> Home
                        </a>
                        <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" href="javascript:void(0)">
                            <span><i class="fa fa-fw fa-envelope-o mr-5"></i> Messages</span>
                            <span class="badge badge-pill badge-secondary">5</span>
                        </a>
                        <a class="list-group-item list-group-item-action" href="javascript:void(0)">
                            <i class="fa fa-fw fa-product-hunt mr-5"></i> Products
                        </a>
                        <a class="list-group-item list-group-item-action" href="javascript:void(0)">
                            <i class="fa fa-fw fa-line-chart mr-5"></i> Statistics
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="block block-themed">
                <div class="block-content block-content-full bg-primary text-center">
                    <?php $cb->get_avatar('', 'female', 64, 'img-fluid'); ?>
                    <div class="font-w600 text-white mt-10"><?php $cb->get_name('female'); ?></div>
                    <div class="font-size-sm text-white-op">Web Designer</div>
                </div>
                <div class="block-content block-content-full">
                    <div class="list-group">
                        <a class="list-group-item list-group-item-action active" href="javascript:void(0)">
                            <i class="fa fa-fw fa-home mr-5"></i> Home
                        </a>
                        <a class="list-group-item list-group-item-action" href="javascript:void(0)">
                            <i class="fa fa-fw fa-envelope-o mr-5"></i> Messages
                        </a>
                        <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" href="javascript:void(0)">
                            <span><i class="fa fa-fw fa-product-hunt mr-5"></i> Products</span>
                            <span class="badge badge-pill badge-secondary">3</span>
                        </a>
                        <a class="list-group-item list-group-item-action" href="javascript:void(0)">
                            <i class="fa fa-fw fa-line-chart mr-5"></i> Statistics
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="block block-themed">
                <div class="block-content block-content-full bg-primary-dark text-center">
                    <?php $cb->get_avatar('', 'female', 64, 'img-fluid'); ?>
                    <div class="font-w600 text-white mt-10"><?php $cb->get_name('female'); ?></div>
                    <div class="font-size-sm text-white-op">Professor</div>
                </div>
                <div class="block-content block-content-full">
                    <div class="list-group">
                        <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center active" href="javascript:void(0)">
                            <span><i class="fa fa-fw fa-home mr-5"></i> Home</span>
                            <span class="badge badge-pill badge-secondary">8</span>
                        </a>
                        <a class="list-group-item list-group-item-action" href="javascript:void(0)">
                            <i class="fa fa-fw fa-envelope-o mr-5"></i> Messages
                        </a>
                        <a class="list-group-item list-group-item-action" href="javascript:void(0)">
                            <i class="fa fa-fw fa-product-hunt mr-5"></i> Products
                        </a>
                        <a class="list-group-item list-group-item-action" href="javascript:void(0)">
                            <i class="fa fa-fw fa-line-chart mr-5"></i> Statistics
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="block block-themed">
                <div class="block-content block-content-full bg-primary-darker text-center">
                    <?php $cb->get_avatar('', 'male', 64, 'img-fluid'); ?>
                    <div class="font-w600 text-white mt-10"><?php $cb->get_name('male'); ?></div>
                    <div class="font-size-sm text-white-op">App Developer</div>
                </div>
                <div class="block-content block-content-full">
                    <div class="list-group">
                        <a class="list-group-item list-group-item-action active" href="javascript:void(0)">
                            <i class="fa fa-fw fa-home mr-5"></i> Home
                        </a>
                        <a class="list-group-item list-group-item-action" href="javascript:void(0)">
                            <i class="fa fa-fw fa-envelope-o mr-5"></i> Messages
                        </a>
                        <a class="list-group-item list-group-item-action" href="javascript:void(0)">
                            <i class="fa fa-fw fa-product-hunt mr-5"></i> Products
                        </a>
                        <a class="list-group-item list-group-item-action" href="javascript:void(0)">
                            <i class="fa fa-fw fa-line-chart mr-5"></i> Statistics
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Row #4 -->
    </div>
    <!-- END User Widgets with Buttons and Menus -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
