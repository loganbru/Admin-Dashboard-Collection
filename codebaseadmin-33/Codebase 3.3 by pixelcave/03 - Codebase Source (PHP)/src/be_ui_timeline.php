<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $cb->get_css('js/plugins/magnific-popup/magnific-popup.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <!-- Timeline Default Style -->
    <h2 class="content-heading">Timeline <small>Default Style</small></h2>
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Latest News</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                    <i class="si si-refresh"></i>
                </button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
            </div>
        </div>
        <div class="block-content">
            <ul class="list list-timeline pull-t">
                <!-- Twitter Notification -->
                <li>
                    <div class="list-timeline-time">50 min ago</div>
                    <i class="list-timeline-icon fa fa-twitter bg-info"></i>
                    <div class="list-timeline-content">
                        <p class="font-w600">+ 79 Followers</p>
                        <p>You’re getting more and more followers, keep it up!</p>
                    </div>
                </li>
                <!-- END Twitter Notification -->

                <!-- Photo Notification -->
                <li>
                    <div class="list-timeline-time">2 hrs ago</div>
                    <i class="list-timeline-icon fa fa-camera bg-elegance"></i>
                    <div class="list-timeline-content">
                        <p class="font-w600">+ 3 New photos</p>
                        <p>Austria Travel Guide was updated with new images</p>
                        <!-- Gallery (.js-gallery class is initialized in Helpers.magnific()) -->
                        <!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
                        <div class="row items-push js-gallery img-fluid-100">
                            <div class="col-sm-6 col-xl-3">
                                <a class="img-link img-link-zoom-in img-lightbox" href="<?php echo $cb->assets_folder; ?>/media/photos/photo2@2x.jpg">
                                    <?php $cb->get_photo(2, false, 'img-fluid'); ?>
                                </a>
                            </div>
                            <div class="col-sm-6 col-xl-3">
                                <a class="img-link img-link-zoom-in img-lightbox" href="<?php echo $cb->assets_folder; ?>/media/photos/photo8@2x.jpg">
                                    <?php $cb->get_photo(8, false, 'img-fluid'); ?>
                                </a>
                            </div>
                            <div class="col-sm-6 col-xl-3">
                                <a class="img-link img-link-zoom-in img-lightbox" href="<?php echo $cb->assets_folder; ?>/media/photos/photo9@2x.jpg">
                                    <?php $cb->get_photo(9, false, 'img-fluid'); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- END Photos Notification -->

                <!-- Facebook Notification -->
                <li>
                    <div class="list-timeline-time">5 hrs ago</div>
                    <i class="list-timeline-icon fa fa-facebook bg-default"></i>
                    <div class="list-timeline-content">
                        <p class="font-w600">+ 160 Page likes</p>
                        <p>You are doing great, keep it up!</p>
                    </div>
                </li>
                <!-- END Facebook Notification -->

                <!-- System Notification -->
                <li>
                    <div class="list-timeline-time">3 days ago</div>
                    <i class="list-timeline-icon fa fa-database bg-pulse"></i>
                    <div class="list-timeline-content">
                        <p class="font-w600">Server backup completed!</p>
                        <p>Download the <a href="javascript:void(0)">latest backup</a>.</p>
                    </div>
                </li>
                <!-- END System Notification -->

                <!-- Social Notification -->
                <li>
                    <div class="list-timeline-time">5 days ago</div>
                    <i class="list-timeline-icon fa fa-user-plus bg-success"></i>
                    <div class="list-timeline-content">
                        <p class="font-w600">+ 4 new contacts</p>
                        <p>It seems that you might know these professionals.</p>
                        <div class="row">
                            <div class="col-sm-6 col-xl-4">
                                <ul class="nav-users push">
                                    <li>
                                        <a href="be_pages_generic_profile.php">
                                            <?php $cb->get_avatar('', 'female'); ?>
                                            <i class="fa fa-circle text-success"></i> <?php $cb->get_name('female'); echo "\n"; ?>
                                            <div class="font-w400 font-size-xs text-muted">Web Designer</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_profile.php">
                                            <?php $cb->get_avatar('', 'female'); ?>
                                            <i class="fa fa-circle text-warning"></i> <?php $cb->get_name('female'); echo "\n"; ?>
                                            <div class="font-w400 font-size-xs text-muted">Photographer</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_profile.php">
                                            <?php $cb->get_avatar('', 'male'); ?>
                                            <i class="fa fa-circle text-warning"></i> <?php $cb->get_name('male'); echo "\n"; ?>
                                            <div class="font-w400 font-size-xs text-muted">Copywriter</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_profile.php">
                                            <?php $cb->get_avatar('', 'male'); ?>
                                            <i class="fa fa-circle text-danger"></i> <?php $cb->get_name('male'); echo "\n"; ?>
                                            <div class="font-w400 font-size-xs text-muted">UI Designer</div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- END Social Notification -->

                <!-- Photo Notification -->
                <li>
                    <div class="list-timeline-time">6 days ago</div>
                    <i class="list-timeline-icon fa fa-camera bg-elegance"></i>
                    <div class="list-timeline-content">
                        <p class="font-w600">+ 2 New photos</p>
                        <p>We had a great time!</p>
                        <!-- Gallery (.js-gallery class is initialized in Helpers.magnific()) -->
                        <!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
                        <div class="row items-push js-gallery img-fluid-100">
                            <div class="col-sm-6 col-xl-3">
                                <a class="img-link img-link-zoom-in img-lightbox" href="<?php echo $cb->assets_folder; ?>/media/photos/photo4@2x.jpg">
                                    <?php $cb->get_photo(4, false, 'img-fluid'); ?>
                                </a>
                            </div>
                            <div class="col-sm-6 col-xl-3">
                                <a class="img-link img-link-zoom-in img-lightbox" href="<?php echo $cb->assets_folder; ?>/media/photos/photo18@2x.jpg">
                                    <?php $cb->get_photo(18, false, 'img-fluid'); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- END Photo Notification -->

                <!-- System Notification -->
                <li>
                    <div class="list-timeline-time">2 weeks ago</div>
                    <i class="list-timeline-icon fa fa-cog bg-gray-darker"></i>
                    <div class="list-timeline-content">
                        <p class="font-w600">System updated to v3.9</p>
                        <p>Please check the complete changelog at the <a href="javascript:void(0)">activity page</a>.</p>
                    </div>
                </li>
                <!-- END System Notification -->
            </ul>
        </div>
    </div>
    <!-- END Timeline Default Style -->

    <!-- Timeline Modern Style -->
    <h2 class="content-heading">Timeline <small>Modern Style</small></h2>
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Screens &gt; 767px</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                    <i class="si si-refresh"></i>
                </button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
            </div>
        </div>
        <div class="block-content block-content-full">
            <ul class="list list-timeline list-timeline-modern pull-t">
                <!-- Twitter Notification -->
                <li>
                    <div class="list-timeline-time">50 min ago</div>
                    <i class="list-timeline-icon fa fa-twitter bg-info"></i>
                    <div class="list-timeline-content">
                        <p class="font-w600">+ 79 Followers</p>
                        <p>You’re getting more and more followers, keep it up!</p>
                    </div>
                </li>
                <!-- END Twitter Notification -->

                <!-- Photo Notification -->
                <li>
                    <div class="list-timeline-time">2 hrs ago</div>
                    <i class="list-timeline-icon fa fa-camera bg-elegance"></i>
                    <div class="list-timeline-content">
                        <p class="font-w600">+ 3 New photos</p>
                        <p>Austria Travel Guide was updated with new images</p>
                        <!-- Gallery (.js-gallery class is initialized in Helpers.magnific()) -->
                        <!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
                        <div class="row items-push js-gallery img-fluid-100">
                            <div class="col-sm-6 col-xl-3">
                                <a class="img-link img-link-zoom-in img-lightbox" href="<?php echo $cb->assets_folder; ?>/media/photos/photo2@2x.jpg">
                                    <?php $cb->get_photo(2, false, 'img-fluid'); ?>
                                </a>
                            </div>
                            <div class="col-sm-6 col-xl-3">
                                <a class="img-link img-link-zoom-in img-lightbox" href="<?php echo $cb->assets_folder; ?>/media/photos/photo8@2x.jpg">
                                    <?php $cb->get_photo(8, false, 'img-fluid'); ?>
                                </a>
                            </div>
                            <div class="col-sm-6 col-xl-3">
                                <a class="img-link img-link-zoom-in img-lightbox" href="<?php echo $cb->assets_folder; ?>/media/photos/photo9@2x.jpg">
                                    <?php $cb->get_photo(9, false, 'img-fluid'); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- END Photos Notification -->

                <!-- Facebook Notification -->
                <li>
                    <div class="list-timeline-time">5 hrs ago</div>
                    <i class="list-timeline-icon fa fa-facebook bg-default"></i>
                    <div class="list-timeline-content">
                        <p class="font-w600">+ 160 Page likes</p>
                        <p>You are doing great, keep it up!</p>
                    </div>
                </li>
                <!-- END Facebook Notification -->

                <!-- System Notification -->
                <li>
                    <div class="list-timeline-time">3 days ago</div>
                    <i class="list-timeline-icon fa fa-database bg-pulse"></i>
                    <div class="list-timeline-content">
                        <p class="font-w600">Server backup completed!</p>
                        <p>Download the <a href="javascript:void(0)">latest backup</a>.</p>
                    </div>
                </li>
                <!-- END System Notification -->

                <!-- Social Notification -->
                <li>
                    <div class="list-timeline-time">5 days ago</div>
                    <i class="list-timeline-icon fa fa-user-plus bg-success"></i>
                    <div class="list-timeline-content">
                        <p class="font-w600">+ 4 new contacts</p>
                        <p>It seems that you might know these professionals.</p>
                        <div class="row">
                            <div class="col-sm-6 col-xl-4">
                                <ul class="nav-users push">
                                    <li>
                                        <a href="be_pages_generic_profile.php">
                                            <?php $cb->get_avatar('', 'female'); ?>
                                            <i class="fa fa-circle text-success"></i> <?php $cb->get_name('female'); echo "\n"; ?>
                                            <div class="font-w400 font-size-xs text-muted">Web Designer</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_profile.php">
                                            <?php $cb->get_avatar('', 'female'); ?>
                                            <i class="fa fa-circle text-warning"></i> <?php $cb->get_name('female'); echo "\n"; ?>
                                            <div class="font-w400 font-size-xs text-muted">Photographer</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_profile.php">
                                            <?php $cb->get_avatar('', 'male'); ?>
                                            <i class="fa fa-circle text-warning"></i> <?php $cb->get_name('male'); echo "\n"; ?>
                                            <div class="font-w400 font-size-xs text-muted">Copywriter</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_profile.php">
                                            <?php $cb->get_avatar('', 'male'); ?>
                                            <i class="fa fa-circle text-danger"></i> <?php $cb->get_name('male'); echo "\n"; ?>
                                            <div class="font-w400 font-size-xs text-muted">UI Designer</div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- END Social Notification -->

                <!-- Photo Notification -->
                <li>
                    <div class="list-timeline-time">6 days ago</div>
                    <i class="list-timeline-icon fa fa-camera bg-elegance"></i>
                    <div class="list-timeline-content">
                        <p class="font-w600">+ 2 New photos</p>
                        <p>We had a great time!</p>
                        <!-- Gallery (.js-gallery class is initialized in Helpers.magnific()) -->
                        <!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
                        <div class="row items-push js-gallery img-fluid-100">
                            <div class="col-sm-6 col-xl-3">
                                <a class="img-link img-link-zoom-in img-lightbox" href="<?php echo $cb->assets_folder; ?>/media/photos/photo4@2x.jpg">
                                    <?php $cb->get_photo(4, false, 'img-fluid'); ?>
                                </a>
                            </div>
                            <div class="col-sm-6 col-xl-3">
                                <a class="img-link img-link-zoom-in img-lightbox" href="<?php echo $cb->assets_folder; ?>/media/photos/photo18@2x.jpg">
                                    <?php $cb->get_photo(18, false, 'img-fluid'); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- END Photo Notification -->

                <!-- System Notification -->
                <li>
                    <div class="list-timeline-time">2 weeks ago</div>
                    <i class="list-timeline-icon fa fa-cog bg-gray-darker"></i>
                    <div class="list-timeline-content">
                        <p class="font-w600">System updated to v3.9</p>
                        <p>Please check the complete changelog at the <a href="javascript:void(0)">activity page</a>.</p>
                    </div>
                </li>
                <!-- END System Notification -->
            </ul>
        </div>
    </div>
    <!-- END Timeline Modern Style -->

    <!-- Timeline Activity -->
    <h2 class="content-heading">Timeline <small>Activity</small></h2>
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Simple Events</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                    <i class="si si-refresh"></i>
                </button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
            </div>
        </div>
        <div class="block-content">
            <ul class="list list-activity">
                <li>
                    <i class="si si-wallet text-success"></i>
                    <div class="font-w600">+$29 New sale</div>
                    <div>
                        <a href="javascript:void(0)">Admin Template</a>
                    </div>
                    <div class="font-size-xs text-muted">5 min ago</div>
                </li>
                <li>
                    <i class="si si-close text-danger"></i>
                    <div class="font-w600">Project removed</div>
                    <div>
                        <a href="javascript:void(0)">Best Icon Set</a>
                    </div>
                    <div class="font-size-xs text-muted">26 min ago</div>
                </li>
                <li>
                    <i class="si si-pencil text-info"></i>
                    <div class="font-w600">You edited the file</div>
                    <div>
                        <a href="javascript:void(0)">
                            <i class="fa fa-file-text-o"></i> Docs.doc
                        </a>
                    </div>
                    <div class="font-size-xs text-muted">3 hours ago</div>
                </li>
                <li>
                    <i class="si si-plus text-success"></i>
                    <div class="font-w600">New user</div>
                    <div>
                        <a href="javascript:void(0)">StudioWeb - View Profile</a>
                    </div>
                    <div class="font-size-xs text-muted">5 hours ago</div>
                </li>
                <li>
                    <i class="si si-wrench text-warning"></i>
                    <div class="font-w600">Core v3.9 is available</div>
                    <div>
                        <a href="javascript:void(0)">Update now</a>
                    </div>
                    <div class="font-size-xs text-muted">8 hours ago</div>
                </li>
                <li>
                    <i class="si si-user-follow text-pulse"></i>
                    <div class="font-w600">+1 Friend Request</div>
                    <div>
                        <a href="javascript:void(0)">Accept</a>
                    </div>
                    <div class="font-size-xs text-muted">1 day ago</div>
                </li>
            </ul>
        </div>
    </div>
    <!-- END Timeline Activity -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/magnific-popup/jquery.magnific-popup.min.js'); ?>

<!-- Page JS Helpers (Magnific Popup plugin) -->
<script>jQuery(function(){ Codebase.helpers('magnific-popup'); });</script>

<?php require 'inc/_global/views/footer_end.php'; ?>