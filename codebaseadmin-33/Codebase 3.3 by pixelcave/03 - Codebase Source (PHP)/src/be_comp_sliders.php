<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $cb->get_css('js/plugins/slick/slick.css'); ?>
<?php $cb->get_css('js/plugins/slick/slick-theme.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <!-- Slick slider (.js-slider class is initialized in Helpers.slick()) -->
    <!-- For more info and examples you can check out http://kenwheeler.github.io/slick/ -->
    <!--
        Extra Classes:

        'slick-nav-white'    for white navigation buttons
        'slick-nav-black'    for black navigation buttons
        'slick-nav-hover'    for navigation buttons visible on hover

        'slick-dotted-white' for white dots
        'slick-dotted-inner' for overlaying dots inside the slides

    -->

    <!-- Content Sliders -->
    <h2 class="content-heading">Content Sliders</h2>
    <div class="row items-push">
        <div class="col-md-4">
            <!-- Tiles Slider 1 -->
            <div class="js-slider" data-dots="true">
                <div class="block text-center bg-white mb-0">
                    <div class="block-content block-content-full bg-body-light">
                        <i class="fa fa-youtube-square fa-5x text-pulse"></i>
                    </div>
                    <div class="py-10">
                        <div class="font-size-h3 font-w600">29800</div>
                        <div class="text-muted">Views Today</div>
                    </div>
                </div>
                <div class="block text-center bg-white mb-0">
                    <div class="block-content block-content-full bg-body-light">
                        <i class="fa fa-twitter-square fa-5x text-info"></i>
                    </div>
                    <div class="py-10">
                        <div class="font-size-h3 font-w600">390864</div>
                        <div class="text-muted">Followers</div>
                    </div>
                </div>
                <div class="block text-center bg-white mb-0">
                    <div class="block-content block-content-full bg-body-light">
                        <i class="fa fa-facebook-square fa-5x text-primary"></i>
                    </div>
                    <div class="py-10">
                        <div class="font-size-h3 font-w600">18900</div>
                        <div class="text-muted">Likes</div>
                    </div>
                </div>
            </div>
            <!-- END Tiles Slider 1 -->
        </div>
        <div class="col-md-4">
            <!-- Tiles Slider 2 -->
            <div class="js-slider slick-nav-hover" data-dots="true" data-arrows="true">
                <div class="block text-center bg-white mb-0">
                    <div class="py-20">
                        <i class="fa fa-android fa-5x text-warning"></i>
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-body-light">
                        <div class="font-size-h3 font-w600">690</div>
                        <div class="text-muted">Mobile Phones</div>
                    </div>
                </div>
                <div class="block text-center bg-white mb-0">
                    <div class="py-20">
                        <i class="fa fa-gamepad fa-5x text-gray"></i>
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-body-light">
                        <div class="font-size-h3 font-w600">950</div>
                        <div class="text-muted">Games</div>
                    </div>
                </div>
                <div class="block text-center bg-white mb-0">
                    <div class="py-20">
                        <i class="fa fa-windows fa-5x text-default"></i>
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-body-light">
                        <div class="font-size-h3 font-w600">10</div>
                        <div class="text-muted">version</div>
                    </div>
                </div>
            </div>
            <!-- END Tiles Slider 2 -->
        </div>
        <div class="col-md-4">
            <!-- Tiles Slider 3 -->
            <div class="js-slider slick-nav-black slick-nav-hover" data-dots="true" data-autoplay="true" data-arrows="true">
                <div class="block text-center bg-white mb-0">
                    <div class="block-content block-content-full bg-success-light">
                        <i class="fa fa-inbox fa-5x text-success"></i>
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-success">
                        <div class="font-size-h3 font-w600 text-white">5</div>
                        <div class="text-white-op">New messages</div>
                    </div>
                </div>
                <div class="block text-center bg-white mb-0">
                    <div class="block-content block-content-full bg-primary-lighter">
                        <i class="fa fa-files-o fa-5x text-primary"></i>
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-primary">
                        <div class="font-size-h3 font-w600 text-white">760</div>
                        <div class="text-white-op">.doc files</div>
                    </div>
                </div>
                <div class="block text-center bg-white mb-0">
                    <div class="block-content block-content-full bg-danger-light">
                        <i class="fa fa-server fa-5x text-danger"></i>
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-danger">
                        <div class="font-size-h3 font-w600 text-white">19</div>
                        <div class="text-white-op">Websites</div>
                    </div>
                </div>
            </div>
            <!-- END Tiles Slider 3 -->
        </div>
    </div>
    <!-- END Content Sliders -->

    <!-- Image Sliders -->
    <h2 class="content-heading">Image Sliders</h2>
    <div class="row">
        <div class="col-md-6">
            <!-- Slider with dots -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Dots</h3>
                </div>
                <div class="js-slider" data-dots="true">
                    <div>
                        <?php $cb->get_photo(2, false, 'img-fluid'); ?>
                    </div>
                    <div>
                        <?php $cb->get_photo(3, false, 'img-fluid'); ?>
                    </div>
                    <div>
                        <?php $cb->get_photo(4, false, 'img-fluid'); ?>
                    </div>
                </div>
                <!-- END Slider with dots -->
            </div>
            <!-- END Dots -->
        </div>
        <div class="col-md-6">
            <!-- Slider with dots and white hover arrows -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Dots &amp; White Hover Arrows</h3>
                </div>
                <div class="js-slider slick-nav-white slick-nav-hover" data-dots="true" data-arrows="true">
                    <div>
                        <?php $cb->get_photo(7, false, 'img-fluid'); ?>
                    </div>
                    <div>
                        <?php $cb->get_photo(8, false, 'img-fluid'); ?>
                    </div>
                    <div>
                        <?php $cb->get_photo(9, false, 'img-fluid'); ?>
                    </div>
                </div>
            </div>
            <!-- END Slider with dots and white hover arrows -->
        </div>
        <div class="col-md-6">
            <!-- Slider with inner dots and black arrows -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Inner Dots &amp; Black Arrows</h3>
                </div>
                <div class="js-slider slick-nav-black slick-dotted-inner slick-dotted-white" data-dots="true" data-arrows="true">
                    <div>
                        <?php $cb->get_photo(21, false, 'img-fluid'); ?>
                    </div>
                    <div>
                        <?php $cb->get_photo(22, false, 'img-fluid'); ?>
                    </div>
                    <div>
                        <?php $cb->get_photo(23, false, 'img-fluid'); ?>
                    </div>
                </div>
            </div>
            <!-- END Slider with inner dots and black arrows -->
        </div>
        <div class="col-md-6">
            <!-- Slider with autoplay and white inner dots -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title"><i class="fa fa-play fa-fw text-primary"></i> Autoplay &amp; White Inner Dots</h3>
                </div>
                <div class="js-slider slick-dotted-inner slick-dotted-white" data-dots="true" data-autoplay="true" data-autoplay-speed="3000">
                    <div>
                        <?php $cb->get_photo(13, false, 'img-fluid'); ?>
                    </div>
                    <div>
                        <?php $cb->get_photo(14, false, 'img-fluid'); ?>
                    </div>
                    <div>
                        <?php $cb->get_photo(24, false, 'img-fluid'); ?>
                    </div>
                </div>
            </div>
            <!-- END Slider with autoplay and white inner dots -->
        </div>
        <div class="col-md-12">
            <!-- Slider with multiple images and center mode -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title"><i class="fa fa-play fa-fw text-primary"></i> Multiple Images &amp; Center Mode</h3>
                </div>
                <div class="js-slider slick-nav-black slick-nav-hover" data-dots="true" data-arrows="true" data-slides-to-show="3" data-center-mode="true" data-autoplay="true" data-autoplay-speed="3000">
                    <div>
                        <?php $cb->get_photo(27, false, 'img-fluid'); ?>
                    </div>
                    <div>
                        <?php $cb->get_photo(28, false, 'img-fluid'); ?>
                    </div>
                    <div>
                        <?php $cb->get_photo(29, false, 'img-fluid'); ?>
                    </div>
                    <div>
                        <?php $cb->get_photo(25, false, 'img-fluid'); ?>
                    </div>
                    <div>
                        <?php $cb->get_photo(26, false, 'img-fluid'); ?>
                    </div>
                </div>
            </div>
            <!-- END Slider with multiple images and center mode -->
        </div>
    </div>
    <!-- END Image Sliders -->

    <!-- Avatar Sliders -->
    <h2 class="content-heading">Avatar Sliders</h2>
    <div class="row items-push">
        <div class="col-md-4">
            <!-- Slider with Avatars -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Single Avatar</h3>
                </div>
                <div class="block-content">
                    <div class="js-slider text-center" data-dots="true" data-arrows="true">
                        <div class="py-20">
                            <?php $cb->get_avatar('14'); ?>
                            <div class="mt-10 font-w600"><?php $cb->get_name('male'); ?></div>
                            <div class="font-size-sm text-muted">Graphic Designer</div>
                        </div>
                        <div class="py-20">
                            <?php $cb->get_avatar('12'); ?>
                            <div class="mt-10 font-w600"><?php $cb->get_name('male'); ?></div>
                            <div class="font-size-sm text-muted">Photographer</div>
                        </div>
                        <div class="py-20">
                            <?php $cb->get_avatar('13'); ?>
                            <div class="mt-10 font-w600"><?php $cb->get_name('male'); ?></div>
                            <div class="font-size-sm text-muted">Web Developer</div>
                        </div>
                        <div class="py-20">
                            <?php $cb->get_avatar('9'); ?>
                            <div class="mt-10 font-w600"><?php $cb->get_name('male'); ?></div>
                            <div class="font-size-sm text-muted">Web Designer</div>
                        </div>
                        <div class="py-20">
                            <?php $cb->get_avatar('10'); ?>
                            <div class="mt-10 font-w600"><?php $cb->get_name('male'); ?></div>
                            <div class="font-size-sm text-muted">Font Designer</div>
                        </div>
                        <div class="py-20">
                            <?php $cb->get_avatar('11'); ?>
                            <div class="mt-10 font-w600"><?php $cb->get_name('male'); ?></div>
                            <div class="font-size-sm text-muted">Artist</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Slider with Avatars -->
        </div>
        <div class="col-md-8">
            <!-- Slider with Multiple Slides/Avatars -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title"><i class="fa fa-play fa-fw text-primary"></i> Multiple Avatars</h3>
                </div>
                <div class="block-content">
                    <div class="js-slider text-center" data-autoplay="true" data-dots="true" data-arrows="true" data-slides-to-show="3">
                        <div class="py-20">
                            <?php $cb->get_avatar('4'); ?>
                            <div class="mt-10 font-w600"><?php $cb->get_name('female'); ?></div>
                            <div class="font-size-sm text-muted">Graphic Designer</div>
                        </div>
                        <div class="py-20">
                            <?php $cb->get_avatar('5'); ?>
                            <div class="mt-10 font-w600"><?php $cb->get_name('female'); ?></div>
                            <div class="font-size-sm text-muted">Photographer</div>
                        </div>
                        <div class="py-20">
                            <?php $cb->get_avatar('6'); ?>
                            <div class="mt-10 font-w600"><?php $cb->get_name('female'); ?></div>
                            <div class="font-size-sm text-muted">Web Developer</div>
                        </div>
                        <div class="py-20">
                            <?php $cb->get_avatar('1'); ?>
                            <div class="mt-10 font-w600"><?php $cb->get_name('female'); ?></div>
                            <div class="font-size-sm text-muted">Web Designer</div>
                        </div>
                        <div class="py-20">
                            <?php $cb->get_avatar('2'); ?>
                            <div class="mt-10 font-w600"><?php $cb->get_name('female'); ?></div>
                            <div class="font-size-sm text-muted">Font Designer</div>
                        </div>
                        <div class="py-20">
                            <?php $cb->get_avatar('3'); ?>
                            <div class="mt-10 font-w600"><?php $cb->get_name('female'); ?></div>
                            <div class="font-size-sm text-muted">Artist</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Slider with Multiple Slides/Avatars -->
        </div>
    </div>
    <!-- END Avatar Sliders -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/slick/slick.min.js'); ?>

<!-- Page JS Helpers (Slick Slider plugin) -->
<script>jQuery(function(){ Codebase.helpers('slick'); });</script>

<?php require 'inc/_global/views/footer_end.php'; ?>
