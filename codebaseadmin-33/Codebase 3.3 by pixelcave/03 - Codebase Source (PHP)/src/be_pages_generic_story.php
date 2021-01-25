<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Codebase - Page specific configuration
$cb->l_header_style = 'glass-inverse';
?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $cb->get_css('js/plugins/magnific-popup/magnific-popup.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo27@2x.jpg');">
    <div class="bg-black-op-75">
        <div class="content content-top text-center">
            <div class="py-100">
                <h1 class="font-w700 text-white mb-10">How to travel and work</h1>
                <h2 class="h4 font-w400 text-white-op">Explore the world and provide value at the same time.</h2>
                <div class="font-size-md text-muted">
                    <a class="text-body-bg-dark" href="be_pages_generic_profile.php">John Smith</a> &bull; June 5, 2017
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Story -->
<div class="content content-full nice-copy-story">
    <div class="row justify-content-center py-30">
        <div class="col-lg-8">
            <h3>Getting out there</h3>
            <?php $cb->get_text('small'); ?>
            <?php $cb->get_text(); ?>
            <h3>Chase your dreams</h3>
            <?php $cb->get_text('medium'); ?>

            <!-- Simple Gallery (.js-gallery class is initialized in Helpers.magnific()) -->
            <!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
            <div class="row no-gutters push js-gallery img-fluid-100">
                <div class="col-6 animated fadeIn">
                    <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="<?php echo $cb->assets_folder; ?>/media/photos/photo32@2x.jpg">
                        <?php $cb->get_photo(32, false, 'img-fluid'); ?>
                    </a>
                </div>
                <div class="col-6 animated fadeIn">
                    <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="<?php echo $cb->assets_folder; ?>/media/photos/photo31@2x.jpg">
                        <?php $cb->get_photo(31, false, 'img-fluid'); ?>
                    </a>
                </div>
                <div class="col-4 animated fadeIn">
                    <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="<?php echo $cb->assets_folder; ?>/media/photos/photo33@2x.jpg">
                        <?php $cb->get_photo(33, false, 'img-fluid'); ?>
                    </a>
                </div>
                <div class="col-4 animated fadeIn">
                    <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="<?php echo $cb->assets_folder; ?>/media/photos/photo30@2x.jpg">
                        <?php $cb->get_photo(30, false, 'img-fluid'); ?>
                    </a>
                </div>
                <div class="col-4 animated fadeIn">
                    <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="<?php echo $cb->assets_folder; ?>/media/photos/photo28@2x.jpg">
                        <?php $cb->get_photo(28, false, 'img-fluid'); ?>
                    </a>
                </div>
                <div class="col-6 animated fadeIn">
                    <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="<?php echo $cb->assets_folder; ?>/media/photos/photo25@2x.jpg">
                        <?php $cb->get_photo(25, false, 'img-fluid'); ?>
                    </a>
                </div>
                <div class="col-6 animated fadeIn">
                    <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="<?php echo $cb->assets_folder; ?>/media/photos/photo26@2x.jpg">
                        <?php $cb->get_photo(26, false, 'img-fluid'); ?>
                    </a>
                </div>
            </div>
            <!-- END Simple Gallery -->

            <?php $cb->get_text('medium'); ?>
            <h3>Be Responsible</h3>
            <?php $cb->get_text('small', 2); ?>
            <h3>Provide value</h3>
            <?php $cb->get_text('small', 3); ?>
            <h3>What comes next</h3>
            <?php $cb->get_text('medium', 1); ?>
        </div>
    </div>
    <div class="row justify-content-center py-30">
        <div class="col-lg-8 clearfix">
            <button type="button" class="btn btn-rounded btn-secondary float-right">
                <i class="fa fa-share-alt text-primary mr-5 "></i> Share
            </button>
            <button type="button" class="btn btn-rounded btn-secondary mr-5">
                <i class="fa fa-heart text-danger mr-5 "></i> Reccomend
            </button>
        </div>
    </div>
</div>
<!-- END Story -->

<!-- Responses -->
<div class="bg-body-dark">
    <div class="content content-full">
        <div class="row justify-content-center py-30">
            <div class="col-lg-8">
                <h3 class="font-w700 mb-50">Responses (5)</h3>
                <div class="media mb-30">
                    <?php $cb->get_avatar(2, false, 48, false, 'd-flex mr-20'); ?>
                    <div class="media-body">
                        <p class="mb-5"><a class="font-w600" href="javascript:void(0)"><?php $cb->get_name('female'); ?></a> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                        <div class="font-size-sm">
                            <a class="link-effect" href="javascript:void(0)">Like</a>
                            <span role="presentation" aria-hidden="true"> · </span>
                            <a class="link-effect" href="javascript:void(0)">Reply</a>
                            <span role="presentation" aria-hidden="true"> · </span>
                            <span class="text-muted mr-5">2 days</span>
                        </div>
                        <div class="media my-20">
                            <?php $cb->get_avatar(5, false, 48, false, 'd-flex mr-20'); ?>
                            <div class="media-body">
                                <p class="mb-5"><a class="font-w600" href="javascript:void(0)"><?php $cb->get_name('female'); ?></a> Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                <div class="font-size-sm">
                                    <span class="badge badge-primary"><i class="fa fa-thumbs-up"></i> 3</span>
                                    <a class="link-effect" href="javascript:void(0)">Like</a>
                                    <span role="presentation" aria-hidden="true"> · </span>
                                    <a class="badge badge-secondary" href="javascript:void(0)"><i class="fa fa-comments"></i> 4</a>
                                    <a class="link-effect" href="javascript:void(0)">Reply</a>
                                    <span role="presentation" aria-hidden="true"> · </span>
                                    <span class="text-muted mr-5">1 day</span>
                                </div>
                            </div>
                        </div>
                        <div class="media my-20">
                            <?php $cb->get_avatar(11, false, 48, false, 'd-flex mr-20'); ?>
                            <div class="media-body">
                                <p class="mb-5"><a class="font-w600" href="javascript:void(0)"><?php $cb->get_name('male'); ?></a> Purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                <div class="font-size-sm">
                                    <span class="badge badge-primary mr-5"><i class="fa fa-thumbs-up"></i> 1</span>
                                    <a class="link-effect" href="javascript:void(0)">Like</a>
                                    <span role="presentation" aria-hidden="true"> · </span>
                                    <a class="link-effect" href="javascript:void(0)">Reply</a>
                                    <span role="presentation" aria-hidden="true"> · </span>
                                    <span class="text-muted mr-5">1 day</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="media mb-30">
                    <?php $cb->get_avatar(13, false, 48, false, 'd-flex mr-20'); ?>
                    <div class="media-body">
                        <p class="mb-5"><a class="font-w600" href="javascript:void(0)"><?php $cb->get_name('male'); ?></a> In gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                        <div class="font-size-sm">
                            <span class="badge badge-primary mr-5"><i class="fa fa-thumbs-up"></i> 10</span>
                            <a class="link-effect" href="javascript:void(0)">Like</a>
                            <span role="presentation" aria-hidden="true"> · </span>
                            <a class="link-effect" href="javascript:void(0)">Reply</a>
                            <span role="presentation" aria-hidden="true"> · </span>
                            <span class="text-muted mr-5">10 hrs</span>
                        </div>
                    </div>
                </div>
                <div class="media mb-30">
                    <?php $cb->get_avatar(5, false, 48, false, 'd-flex mr-20'); ?>
                    <div class="media-body">
                        <p class="mb-5"><a class="font-w600" href="javascript:void(0)"><?php $cb->get_name('female'); ?></a> Vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                        <div class="font-size-sm">
                            <a class="link-effect" href="javascript:void(0)">Like</a>
                            <span role="presentation" aria-hidden="true"> · </span>
                            <a class="link-effect" href="javascript:void(0)">Reply</a>
                            <span role="presentation" aria-hidden="true"> · </span>
                            <span class="text-muted mr-5">3 hrs</span>
                        </div>
                    </div>
                </div>
                <div class="media mb-30">
                    <img class="img-avatar img-avatar48 d-flex mr-20" src="<?php echo $cb->assets_folder; ?>/media/avatars/avatar0.jpg" alt="">
                    <div class="media-body">
                        <form action="be_pages_generic_story.php" method="post" onsubmit="return false;">
                            <textarea class="form-control mb-5" rows="5" placeholder="Write a response.."></textarea>
                            <button type="submit" class="btn btn-secondary">
                                <i class="fa fa-reply mr-5"></i>Respond
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Responses -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/magnific-popup/jquery.magnific-popup.min.js'); ?>

<!-- Page JS Helpers (Magnific Popup plugin) -->
<script>jQuery(function(){ Codebase.helpers('magnific-popup'); });</script>

<?php require 'inc/_global/views/footer_end.php'; ?>