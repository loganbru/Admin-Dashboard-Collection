<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $cb->get_css('js/plugins/magnific-popup/magnific-popup.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <!-- Simple Gallery (.js-gallery class is initialized in Helpers.magnific()) -->
    <!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
    <h2 class="content-heading">Gallery <small>Simple</small></h2>
    <div class="row items-push js-gallery img-fluid-100">
        <?php for ($i = 17; $i < 29; $i++) { ?>
        <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
            <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="<?php echo $cb->assets_folder; ?>/media/photos/photo<?php echo $i; ?>@2x.jpg">
                <?php $cb->get_photo($i, false, 'img-fluid'); ?>
            </a>
        </div>
        <?php } ?>
    </div>
    <!-- END Simple Gallery -->

    <!-- Advanced Gallery (.js-gallery class is initialized in Helpers.magnific()) -->
    <!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
    <h2 class="content-heading">Gallery <small>Advanced</small></h2>
    <div class="row items-push js-gallery">
        <?php for ($i = 16; $i > 4; $i--) { ?>
        <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
            <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
                <?php $cb->get_photo($i, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-black-op-75">
                    <div class="options-overlay-content">
                        <h3 class="h4 text-white mb-5">Image</h3>
                        <h4 class="h6 text-white-op mb-15">More Details</h4>
                        <a class="btn btn-sm btn-rounded btn-noborder btn-alt-primary min-width-75 img-lightbox" href="<?php echo $cb->assets_folder; ?>/media/photos/photo<?php echo $i; ?>@2x.jpg">
                            <i class="fa fa-search-plus"></i> View
                        </a>
                        <a class="btn btn-sm btn-rounded btn-noborder btn-alt-success min-width-75" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    <!-- END Advanced Gallery -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/magnific-popup/jquery.magnific-popup.min.js'); ?>

<!-- Page JS Helpers (Magnific Popup plugin) -->
<script>jQuery(function(){ Codebase.helpers('magnific-popup'); });</script>

<?php require 'inc/_global/views/footer_end.php'; ?>