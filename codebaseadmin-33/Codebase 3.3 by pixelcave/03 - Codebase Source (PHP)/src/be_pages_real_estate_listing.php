<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $cb->get_css('js/plugins/magnific-popup/magnific-popup.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <div class="my-50 text-center">
        <h2 class="font-w700 text-black mb-10">
            Downtown Apartment
        </h2>
        <h3 class="h5 text-muted mb-0">
            <i class="fa fa-map-pin mr-5"></i> 965 Westwood Avenue, NY
        </h3>
    </div>
    <div class="block block-rounded block-fx-shadow">
        <div class="block-content p-0 bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo35@2x.jpg');">
            <div class="px-20 py-150 bg-black-op text-center rounded-top">
                <h5 class="font-size-h1 font-w300 text-white mb-10">$350,000</h5>
                <span class="badge badge-primary text-uppercase font-w700 py-10 px-15">For Sale</span>
            </div>
        </div>
        <div class="block-content bg-body-light">
            <div class="row py-10">
                <div class="col-6 col-md-4">
                    <p>
                        <i class="fa fa-fw fa-bed text-muted mr-5"></i> <strong>2</strong> Bedrooms
                    </p>
                </div>
                <div class="col-6 col-md-4">
                    <p>
                        <i class="fa fa-fw fa-bath text-muted mr-5"></i> <strong>1</strong> Bathroom
                    </p>
                </div>
                <div class="col-6 col-md-4">
                    <p>
                        <i class="fa fa-fw fa-car text-muted mr-5"></i> <strong>1</strong> Parking
                    </p>
                </div>
                <div class="col-6 col-md-4">
                    <p>
                        <i class="fa fa-fw fa-arrows-alt text-muted mr-5"></i> <strong>310</strong> sq.ft.
                    </p>
                </div>
                <div class="col-6 col-md-4">
                    <p>
                        <i class="fa fa-fw fa-fire text-muted mr-5"></i> Electricity
                    </p>
                </div>
                <div class="col-6 col-md-4">
                    <p>
                        <i class="fa fa-fw fa-globe text-muted mr-5"></i> <strong>1</strong> Gbps
                    </p>
                </div>
            </div>
        </div>
        <div class="block-content block-content-full">
            <div class="row">
                <div class="col-md-6 order-md-2 py-20">
                    <div class="row gutters-tiny js-gallery img-fluid-100">
                        <div class="col-6">
                            <a class="img-link img-link-simple img-thumb img-lightbox" href="<?php echo $cb->assets_folder; ?>/media/photos/photo35@2x.jpg">
                                <?php $cb->get_photo(35, false, 'img-fluid'); ?>
                            </a>
                        </div>
                        <div class="col-6">
                            <a class="img-link img-link-simple img-thumb img-lightbox" href="<?php echo $cb->assets_folder; ?>/media/photos/photo41@2x.jpg">
                                <?php $cb->get_photo(41, false, 'img-fluid'); ?>
                            </a>
                        </div>
                        <div class="col-6">
                            <a class="img-link img-link-simple img-thumb img-lightbox" href="<?php echo $cb->assets_folder; ?>/media/photos/photo42@2x.jpg">
                                <?php $cb->get_photo(42, false, 'img-fluid'); ?>
                            </a>
                        </div>
                        <div class="col-6">
                            <a class="img-link img-link-simple img-thumb img-lightbox" href="<?php echo $cb->assets_folder; ?>/media/photos/photo43@2x.jpg">
                                <?php $cb->get_photo(43, false, 'img-fluid'); ?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 order-md-1 py-20">
                    <?php echo $cb->get_text('small', 4); ?>
                </div>
            </div>
        </div>
        <div class="block-content block-content-full border-top clearfix">
            <a class="btn btn-hero btn-alt-danger float-right" href="javascript:void(0)">
                <i class="fa fa-heart"></i>
            </a>
            <a class="btn btn-hero btn-alt-primary" href="javascript:void(0)">
                <i class="fa fa-envelope mr-5"></i> Contact
            </a>
        </div>
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/magnific-popup/jquery.magnific-popup.min.js'); ?>

<!-- Page JS Helpers (Magnific Popup plugin) -->
<script>jQuery(function(){ Codebase.helpers('magnific-popup'); });</script>

<?php require 'inc/_global/views/footer_end.php'; ?>
