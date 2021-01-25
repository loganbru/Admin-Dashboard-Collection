<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <!-- Rating functionality is initialized in js/pages/be_comp_rating.min.js which was auto compiled from _es6/pages/be_comp_rating.js -->
    <!-- For more info and examples you can check out https://github.com/wbotelhos/raty -->
    <h2 class="content-heading">Rating</h2>
    <div class="row">
        <div class="col-lg-6">
            <!-- Simple Rating -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Simple Rating</h3>
                </div>
                <div class="block-content block-content-full">
                    <p>Setting up rating is just a class away</p>

                    <!-- Rating Container -->
                    <div class="js-rating"></div>
                </div>
            </div>
            <!-- END Simple Rating -->
        </div>
        <div class="col-lg-6">
            <!-- Predefined Score -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Predefined Score</h3>
                </div>
                <div class="block-content block-content-full">
                    <p>You can easily set a default score</p>

                    <!-- Rating Container -->
                    <div class="js-rating" data-score="3"></div>
                </div>
            </div>
            <!-- END Predefined Score -->
        </div>
        <div class="col-lg-6">
            <!-- More Stars -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">More Stars</h3>
                </div>
                <div class="block-content block-content-full">
                    <p>You can easily set the number of stars</p>

                    <!-- Rating Container -->
                    <div class="js-rating" data-score="5" data-number="10"></div>
                </div>
            </div>
            <!-- END More Stars -->
        </div>
        <div class="col-lg-6">
            <!-- Reset Button -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Reset Button</h3>
                </div>
                <div class="block-content block-content-full">
                    <p>You can also add a reset button to your rating</p>

                    <!-- Rating Container -->
                    <div class="js-rating" data-cancel="true" data-score="3"></div>
                </div>
            </div>
            <!-- END Reset Button -->
        </div>
        <div class="col-lg-12">
            <!-- Hint Text -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Hint Text</h3>
                </div>
                <div class="block-content block-content-full">
                    <div class="row">
                        <div class="col-md-6">
                            Current Hint: <span class="js-rating-hint-text font-w600">..</span>
                        </div>
                        <div class="col-md-6">
                            <!-- Rating Container -->
                            <div class="js-rating" data-cancel="true" data-score="3" data-target=".js-rating-hint-text"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Hint Text -->
        </div>
        <div class="col-lg-12">
            <!-- Color Variations -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Color Variations</h3>
                </div>
                <div class="block-content">
                    <div class="row items-push-2x">
                        <div class="col-md-4">
                            <!-- Rating Container -->
                            <div class="js-rating" data-score="3" data-star-on="fa fa-fw fa-star text-primary"></div>
                        </div>
                        <div class="col-md-4">
                            <!-- Rating Container -->
                            <div class="js-rating" data-score="3" data-star-on="fa fa-fw fa-star text-success"></div>
                        </div>
                        <div class="col-md-4">
                            <!-- Rating Container -->
                            <div class="js-rating" data-score="3" data-star-on="fa fa-fw fa-star text-danger"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Color Variations -->

            <!-- Icon Variations -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Icon Variations</h3>
                </div>
                <div class="block-content">
                    <div class="row items-push-2x">
                        <div class="col-md-4">
                            <!-- Rating Container -->
                            <div class="js-rating" data-score="3" data-star-on="si si-drop text-earth" data-star-off="si si-drop text-muted"></div>
                        </div>
                        <div class="col-md-4">
                            <!-- Rating Container -->
                            <div class="js-rating" data-score="3" data-star-on="fa fa-fw fa-coffee text-info" data-star-off="fa fa-fw fa-thumbs-up text-muted"></div>
                        </div>
                        <div class="col-md-4">
                            <!-- Rating Container -->
                            <div class="js-rating" data-score="3" data-star-on="fa fa-fw fa-check text-primary" data-star-off="fa fa-fw fa-check text-muted"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Icon Variations -->

            <!-- Sizes Variations -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Sizes Variations</h3>
                </div>
                <div class="block-content">
                    <div class="row items-push-2x text-center text-xl-left">
                        <div class="col-xl-4">
                            <!-- Rating Container -->
                            <div class="js-rating" data-score="3" data-star-on="fa fa-fw fa-2x fa-heart text-pulse" data-star-off="fa fa-fw fa-2x fa-heart text-muted"></div>
                        </div>
                        <div class="col-xl-4">
                            <!-- Rating Container -->
                            <div class="js-rating" data-score="3" data-star-on="fa fa-fw fa-2x fa-star text-warning" data-star-off="fa fa-fw fa-2x fa-star text-muted"></div>
                        </div>
                        <div class="col-xl-4">
                            <!-- Rating Container -->
                            <div class="js-rating" data-score="3" data-star-on="fa fa-fw fa-2x fa-flash text-flat" data-star-off="fa fa-fw fa-2x fa-flash text-muted"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Sizes Variations -->
        </div>
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/jquery-raty/jquery.raty.js'); ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/be_comp_rating.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>