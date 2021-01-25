<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <div class="my-50 text-center">
        <h2 class="font-w700 text-black mb-10">
            <i class="fa fa-building text-muted mr-5"></i> Property Management
        </h2>
        <h3 class="h5 text-muted mb-0">
            You currently have 6 properties! <a href="be_pages_real_estate_listing_new.php">Add a new one</a>.
        </h3>
    </div>
    <div class="row">
        <div class="col-md-6 col-xl-4 invisible" data-toggle="appear">
            <!-- Property -->
            <div class="block block-rounded">
                <div class="block-content p-0 overflow-hidden">
                    <a class="img-link" href="be_pages_real_estate_listing.php">
                        <?php $cb->get_photo(35, false, 'img-fluid rounded-top'); ?>
                    </a>
                </div>
                <div class="block-content border-bottom">
                    <h4 class="font-size-h5 mb-10">Downtown Apartment</h4>
                    <h5 class="font-size-h1 font-w300 mb-5">$350,000</h5>
                    <p class="text-muted">
                        <i class="fa fa-map-pin mr-5"></i> 965 Westwood Avenue, NY
                    </p>
                </div>
                <div class="block-content border-bottom">
                    <div class="row">
                        <div class="col-6">
                            <p>
                                <i class="fa fa-fw fa-bed text-muted mr-5"></i> <strong>2</strong> Bedrooms
                            </p>
                        </div>
                        <div class="col-6">
                            <p>
                                <i class="fa fa-fw fa-bath text-muted mr-5"></i> <strong>1</strong> Bathroom
                            </p>
                        </div>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <div class="row">
                        <div class="col-6">
                            <a class="btn btn-sm btn-hero btn-noborder btn-secondary btn-block" href="be_pages_real_estate_listing.php">
                                Details
                            </a>
                        </div>
                        <div class="col-6">
                            <a class="btn btn-sm btn-hero btn-noborder btn-primary btn-block" href="be_pages_real_estate_listing_new.php">
                                Edit
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Property -->
        </div>
        <div class="col-md-6 col-xl-4 invisible" data-toggle="appear">
            <!-- Property -->
            <div class="block block-rounded">
                <div class="block-content p-0 overflow-hidden">
                    <a class="img-link" href="be_pages_real_estate_listing.php">
                        <?php $cb->get_photo(36, false, 'img-fluid rounded-top'); ?>
                    </a>
                </div>
                <div class="block-content border-bottom">
                    <h4 class="font-size-h5 mb-10">Luxury House</h4>
                    <h5 class="font-size-h1 font-w300 mb-5">$1,230,000</h5>
                    <p class="text-muted">
                        <i class="fa fa-map-pin mr-5"></i> 1333 Stanley Avenue, MA
                    </p>
                </div>
                <div class="block-content border-bottom">
                    <div class="row">
                        <div class="col-6">
                            <p>
                                <i class="fa fa-fw fa-bed text-muted mr-5"></i> <strong>4</strong> Bedrooms
                            </p>
                        </div>
                        <div class="col-6">
                            <p>
                                <i class="fa fa-fw fa-bath text-muted mr-5"></i> <strong>2</strong> Bathrooms
                            </p>
                        </div>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <div class="row">
                        <div class="col-6">
                            <a class="btn btn-sm btn-hero btn-noborder btn-secondary btn-block" href="be_pages_real_estate_listing.php">
                                Details
                            </a>
                        </div>
                        <div class="col-6">
                            <a class="btn btn-sm btn-hero btn-noborder btn-primary btn-block" href="javascript:void(0)">
                                Edit
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Property -->
        </div>
        <div class="col-md-6 col-xl-4 invisible" data-toggle="appear">
            <!-- Property -->
            <div class="block block-rounded">
                <div class="block-content p-0 overflow-hidden">
                    <a class="img-link" href="be_pages_real_estate_listing.php">
                        <?php $cb->get_photo(37, false, 'img-fluid rounded-top'); ?>
                    </a>
                </div>
                <div class="block-content border-bottom">
                    <h4 class="font-size-h5 mb-10">Detached House</h4>
                    <h5 class="font-size-h1 font-w300 mb-5">$770,000</h5>
                    <p class="text-muted">
                        <i class="fa fa-map-pin mr-5"></i> 725 Berkley Street, PA
                    </p>
                </div>
                <div class="block-content border-bottom">
                    <div class="row">
                        <div class="col-6">
                            <p>
                                <i class="fa fa-fw fa-bed text-muted mr-5"></i> <strong>6</strong> Bedrooms
                            </p>
                        </div>
                        <div class="col-6">
                            <p>
                                <i class="fa fa-fw fa-bath text-muted mr-5"></i> <strong>3</strong> Bathrooms
                            </p>
                        </div>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <div class="row">
                        <div class="col-6">
                            <a class="btn btn-sm btn-hero btn-noborder btn-secondary btn-block" href="be_pages_real_estate_listing.php">
                                Details
                            </a>
                        </div>
                        <div class="col-6">
                            <a class="btn btn-sm btn-hero btn-noborder btn-primary btn-block" href="javascript:void(0)">
                                Edit
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Property -->
        </div>
        <div class="col-md-6 col-xl-4 invisible" data-toggle="appear">
            <!-- Property -->
            <div class="block block-rounded">
                <div class="block-content p-0 overflow-hidden">
                    <a class="img-link" href="be_pages_real_estate_listing.php">
                        <?php $cb->get_photo(38, false, 'img-fluid rounded-top'); ?>
                    </a>
                </div>
                <div class="block-content border-bottom">
                    <h4 class="font-size-h5 mb-10">Renovated Cottage</h4>
                    <h5 class="font-size-h1 font-w300 mb-5">$220,000</h5>
                    <p class="text-muted">
                        <i class="fa fa-map-pin mr-5"></i> 961 South Street, TX
                    </p>
                </div>
                <div class="block-content border-bottom">
                    <div class="row">
                        <div class="col-6">
                            <p>
                                <i class="fa fa-fw fa-bed text-muted mr-5"></i> <strong>2</strong> Bedrooms
                            </p>
                        </div>
                        <div class="col-6">
                            <p>
                                <i class="fa fa-fw fa-bath text-muted mr-5"></i> <strong>1</strong> Bathroom
                            </p>
                        </div>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <div class="row">
                        <div class="col-6">
                            <a class="btn btn-sm btn-hero btn-noborder btn-secondary btn-block" href="be_pages_real_estate_listing.php">
                                Details
                            </a>
                        </div>
                        <div class="col-6">
                            <a class="btn btn-sm btn-hero btn-noborder btn-primary btn-block" href="javascript:void(0)">
                                Edit
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Property -->
        </div>
        <div class="col-md-6 col-xl-4 invisible" data-toggle="appear">
            <!-- Property -->
            <div class="block block-rounded">
                <div class="block-content p-0 overflow-hidden">
                    <a class="img-link" href="be_pages_real_estate_listing.php">
                        <?php $cb->get_photo(40, false, 'img-fluid rounded-top'); ?>
                    </a>
                </div>
                <div class="block-content border-bottom">
                    <h4 class="font-size-h5 mb-10">Renovated Apartment</h4>
                    <h5 class="font-size-h1 font-w300 mb-5">$490,000</h5>
                    <p class="text-muted">
                        <i class="fa fa-map-pin mr-5"></i> 3034 Coventry Court, NY
                    </p>
                </div>
                <div class="block-content border-bottom">
                    <div class="row">
                        <div class="col-6">
                            <p>
                                <i class="fa fa-fw fa-bed text-muted mr-5"></i> <strong>2</strong> Bedrooms
                            </p>
                        </div>
                        <div class="col-6">
                            <p>
                                <i class="fa fa-fw fa-bath text-muted mr-5"></i> <strong>1</strong> Bathroom
                            </p>
                        </div>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <div class="row">
                        <div class="col-6">
                            <a class="btn btn-sm btn-hero btn-noborder btn-secondary btn-block" href="be_pages_real_estate_listing.php">
                                Details
                            </a>
                        </div>
                        <div class="col-6">
                            <a class="btn btn-sm btn-hero btn-noborder btn-primary btn-block" href="javascript:void(0)">
                                Edit
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Property -->
        </div>
        <div class="col-md-6 col-xl-4 invisible" data-toggle="appear">
            <!-- Property -->
            <div class="block block-rounded">
                <div class="block-content p-0 overflow-hidden">
                    <a class="img-link" href="be_pages_real_estate_listing.php">
                        <?php $cb->get_photo(39, false, 'img-fluid rounded-top'); ?>
                    </a>
                </div>
                <div class="block-content border-bottom">
                    <h4 class="font-size-h5 mb-10">New Apartment</h4>
                    <h5 class="font-size-h1 font-w300 mb-5">$680,000</h5>
                    <p class="text-muted">
                        <i class="fa fa-map-pin mr-5"></i> 1890 Locust View Drive, CA
                    </p>
                </div>
                <div class="block-content border-bottom">
                    <div class="row">
                        <div class="col-6">
                            <p>
                                <i class="fa fa-fw fa-bed text-muted mr-5"></i> <strong>2</strong> Bedrooms
                            </p>
                        </div>
                        <div class="col-6">
                            <p>
                                <i class="fa fa-fw fa-bath text-muted mr-5"></i> <strong>1</strong> Bathroom
                            </p>
                        </div>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <div class="row">
                        <div class="col-6">
                            <a class="btn btn-sm btn-hero btn-noborder btn-secondary btn-block" href="be_pages_real_estate_listing.php">
                                Details
                            </a>
                        </div>
                        <div class="col-6">
                            <a class="btn btn-sm btn-hero btn-noborder btn-primary btn-block" href="javascript:void(0)">
                                Edit
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Property -->
        </div>
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
