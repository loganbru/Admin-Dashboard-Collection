<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <!-- Image Default -->
    <h2 class="content-heading">Image Default</h2>
    <div class="row items-push">
        <div class="col-md-4 animated fadeIn">
            <div class="options-container">
                <?php $cb->get_photo(1, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-black-op-75">
                    <div class="options-overlay-content">
                        <h3 class="h4 text-white mb-5">Image</h3>
                        <h4 class="h6 text-white-op mb-15">More Details</h4>
                        <a class="btn btn-sm btn-rounded btn-alt-primary min-width-75" href="javascript:void(0)">
                            <i class="fa fa-pencil"></i> Edit
                        </a>
                        <a class="btn btn-sm btn-rounded btn-alt-danger min-width-75" href="javascript:void(0)">
                            <i class="fa fa-times"></i> Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 animated fadeIn">
            <div class="options-container">
                <?php $cb->get_photo(1, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-white-op-90">
                    <div class="options-overlay-content">
                        <h3 class="h4 mb-5">Image</h3>
                        <h4 class="h6 text-gray-dark mb-15">More Details</h4>
                        <a class="btn btn-sm btn-rounded btn-primary min-width-75" href="javascript:void(0)">
                            <i class="fa fa-pencil"></i> Edit
                        </a>
                        <a class="btn btn-sm btn-rounded btn-danger min-width-75" href="javascript:void(0)">
                            <i class="fa fa-times"></i> Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 animated fadeIn">
            <div class="options-container">
                <?php $cb->get_photo(1, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-primary-dark-op">
                    <div class="options-overlay-content">
                        <h3 class="h4 text-white mb-5">Image</h3>
                        <h4 class="h6 text-white-op mb-15">More Details</h4>
                        <a class="btn btn-sm btn-rounded btn-alt-success min-width-75" href="javascript:void(0)">
                            <i class="fa fa-thumbs-up"></i> Like
                        </a>
                        <a class="btn btn-sm btn-rounded btn-alt-info min-width-75" href="javascript:void(0)">
                            <i class="fa fa-save"></i> Save
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Image Default -->

    <!-- Image Zoom In -->
    <h2 class="content-heading">Image Zoom In <small><code class="text-lowercase">.fx-item-zoom-in</code></small></h2>
    <div class="row items-push">
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-zoom-in">
                <?php $cb->get_photo(2, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-black-op">
                    <div class="options-overlay-content">
                        <h3 class="h4 text-white mb-5">Image</h3>
                        <h4 class="h6 text-white-op mb-15">More Details</h4>
                        <a class="btn btn-sm btn-rounded btn-alt-primary min-width-75" href="javascript:void(0)">
                            <i class="fa fa-pencil"></i> Edit
                        </a>
                        <a class="btn btn-sm btn-rounded btn-alt-danger min-width-75" href="javascript:void(0)">
                            <i class="fa fa-times"></i> Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-zoom-in">
                <?php $cb->get_photo(2, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-white-op-90">
                    <div class="options-overlay-content">
                        <h3 class="h4 mb-5">Image</h3>
                        <h4 class="h6 text-gray-dark mb-15">More Details</h4>
                        <a class="btn btn-sm btn-rounded btn-primary min-width-75" href="javascript:void(0)">
                            <i class="fa fa-pencil"></i> Edit
                        </a>
                        <a class="btn btn-sm btn-rounded btn-danger min-width-75" href="javascript:void(0)">
                            <i class="fa fa-times"></i> Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-zoom-in">
                <?php $cb->get_photo(2, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-primary-dark-op">
                    <div class="options-overlay-content">
                        <h3 class="h4 text-white mb-5">Image</h3>
                        <h4 class="h6 text-white-op mb-15">More Details</h4>
                        <a class="btn btn-sm btn-rounded btn-alt-success min-width-75" href="javascript:void(0)">
                            <i class="fa fa-thumbs-up"></i> Like
                        </a>
                        <a class="btn btn-sm btn-rounded btn-alt-info min-width-75" href="javascript:void(0)">
                            <i class="fa fa-save"></i> Save
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Image Zoom In -->

    <!-- Image Rotate Right -->
    <h2 class="content-heading">Image Rotate Right <small><code class="text-lowercase">.fx-item-rotate-r</code></small></h2>
    <div class="row items-push">
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-rotate-r">
                <?php $cb->get_photo(3, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-black-op">
                    <div class="options-overlay-content">
                        <h3 class="h4 text-white mb-5">Image</h3>
                        <h4 class="h6 text-white-op mb-15">More Details</h4>
                        <a class="btn btn-sm btn-rounded btn-alt-primary min-width-75" href="javascript:void(0)">
                            <i class="fa fa-pencil"></i> Edit
                        </a>
                        <a class="btn btn-sm btn-rounded btn-alt-danger min-width-75" href="javascript:void(0)">
                            <i class="fa fa-times"></i> Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-rotate-r">
                <?php $cb->get_photo(3, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-white-op-90">
                    <div class="options-overlay-content">
                        <h3 class="h4 mb-5">Image</h3>
                        <h4 class="h6 text-gray-dark mb-15">More Details</h4>
                        <a class="btn btn-sm btn-rounded btn-primary min-width-75" href="javascript:void(0)">
                            <i class="fa fa-pencil"></i> Edit
                        </a>
                        <a class="btn btn-sm btn-rounded btn-danger min-width-75" href="javascript:void(0)">
                            <i class="fa fa-times"></i> Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-rotate-r">
                <?php $cb->get_photo(3, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-primary-dark-op">
                    <div class="options-overlay-content">
                        <h3 class="h4 text-white mb-5">Image</h3>
                        <h4 class="h6 text-white-op mb-15">More Details</h4>
                        <a class="btn btn-sm btn-rounded btn-alt-success min-width-75" href="javascript:void(0)">
                            <i class="fa fa-thumbs-up"></i> Like
                        </a>
                        <a class="btn btn-sm btn-rounded btn-alt-info min-width-75" href="javascript:void(0)">
                            <i class="fa fa-save"></i> Save
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Image Rotate Right -->

    <!-- Image Rotate Left -->
    <h2 class="content-heading">Image Rotate Left <small><code class="text-lowercase">.fx-item-rotate-l</code></small></h2>
    <div class="row items-push">
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-rotate-l">
                <?php $cb->get_photo(4, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-black-op">
                    <div class="options-overlay-content">
                        <h3 class="h4 text-white mb-5">Image</h3>
                        <h4 class="h6 text-white-op mb-15">More Details</h4>
                        <a class="btn btn-sm btn-rounded btn-alt-primary min-width-75" href="javascript:void(0)">
                            <i class="fa fa-pencil"></i> Edit
                        </a>
                        <a class="btn btn-sm btn-rounded btn-alt-danger min-width-75" href="javascript:void(0)">
                            <i class="fa fa-times"></i> Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-rotate-l">
                <?php $cb->get_photo(4, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-white-op-90">
                    <div class="options-overlay-content">
                        <h3 class="h4 mb-5">Image</h3>
                        <h4 class="h6 text-gray-dark mb-15">More Details</h4>
                        <a class="btn btn-sm btn-rounded btn-primary min-width-75" href="javascript:void(0)">
                            <i class="fa fa-pencil"></i> Edit
                        </a>
                        <a class="btn btn-sm btn-rounded btn-danger min-width-75" href="javascript:void(0)">
                            <i class="fa fa-times"></i> Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-rotate-l">
                <?php $cb->get_photo(4, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-primary-dark-op">
                    <div class="options-overlay-content">
                        <h3 class="h4 text-white mb-5">Image</h3>
                        <h4 class="h6 text-white-op mb-15">More Details</h4>
                        <a class="btn btn-sm btn-rounded btn-alt-success min-width-75" href="javascript:void(0)">
                            <i class="fa fa-thumbs-up"></i> Like
                        </a>
                        <a class="btn btn-sm btn-rounded btn-alt-info min-width-75" href="javascript:void(0)">
                            <i class="fa fa-save"></i> Save
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Image Rotate Left -->

    <!-- Options Slide Left -->
    <h2 class="content-heading">Overlay Slide Left <small><code class="text-lowercase">.fx-overlay-slide-left</code></small></h2>
    <div class="row items-push">
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-zoom-in fx-overlay-slide-left">
                <?php $cb->get_photo(5, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-black-op">
                    <div class="options-overlay-content">
                        <h3 class="h4 text-white mb-5">Image</h3>
                        <h4 class="h6 text-white-op mb-15">More Details</h4>
                        <a class="btn btn-sm btn-rounded btn-alt-primary min-width-75" href="javascript:void(0)">
                            <i class="fa fa-pencil"></i> Edit
                        </a>
                        <a class="btn btn-sm btn-rounded btn-alt-danger min-width-75" href="javascript:void(0)">
                            <i class="fa fa-times"></i> Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-zoom-in fx-overlay-slide-left">
                <?php $cb->get_photo(5, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-white-op-90">
                    <div class="options-overlay-content">
                        <h3 class="h4 mb-5">Image</h3>
                        <h4 class="h6 text-gray-dark mb-15">More Details</h4>
                        <a class="btn btn-sm btn-rounded btn-primary min-width-75" href="javascript:void(0)">
                            <i class="fa fa-pencil"></i> Edit
                        </a>
                        <a class="btn btn-sm btn-rounded btn-danger min-width-75" href="javascript:void(0)">
                            <i class="fa fa-times"></i> Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-zoom-in fx-overlay-slide-left">
                <?php $cb->get_photo(5, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-primary-dark-op">
                    <div class="options-overlay-content">
                        <h3 class="h4 text-white mb-5">Image</h3>
                        <h4 class="h6 text-white-op mb-15">More Details</h4>
                        <a class="btn btn-sm btn-rounded btn-alt-success min-width-75" href="javascript:void(0)">
                            <i class="fa fa-thumbs-up"></i> Like
                        </a>
                        <a class="btn btn-sm btn-rounded btn-alt-info min-width-75" href="javascript:void(0)">
                            <i class="fa fa-save"></i> Save
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Options Slide Left -->

    <!-- Options Slide Right -->
    <h2 class="content-heading">Overlay Slide Right <small><code class="text-lowercase">.fx-overlay-slide-right</code></small></h2>
    <div class="row items-push">
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-zoom-in fx-overlay-slide-right">
                <?php $cb->get_photo(6, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-black-op">
                    <div class="options-overlay-content">
                        <h3 class="h4 text-white mb-5">Image</h3>
                        <h4 class="h6 text-white-op mb-15">More Details</h4>
                        <a class="btn btn-sm btn-rounded btn-alt-primary min-width-75" href="javascript:void(0)">
                            <i class="fa fa-pencil"></i> Edit
                        </a>
                        <a class="btn btn-sm btn-rounded btn-alt-danger min-width-75" href="javascript:void(0)">
                            <i class="fa fa-times"></i> Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-zoom-in fx-overlay-slide-right">
                <?php $cb->get_photo(6, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-white-op-90">
                    <div class="options-overlay-content">
                        <h3 class="h4 mb-5">Image</h3>
                        <h4 class="h6 text-gray-dark mb-15">More Details</h4>
                        <a class="btn btn-sm btn-rounded btn-primary min-width-75" href="javascript:void(0)">
                            <i class="fa fa-pencil"></i> Edit
                        </a>
                        <a class="btn btn-sm btn-rounded btn-danger min-width-75" href="javascript:void(0)">
                            <i class="fa fa-times"></i> Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-zoom-in fx-overlay-slide-right">
                <?php $cb->get_photo(6, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-primary-dark-op">
                    <div class="options-overlay-content">
                        <h3 class="h4 text-white mb-5">Image</h3>
                        <h4 class="h6 text-white-op mb-15">More Details</h4>
                        <a class="btn btn-sm btn-rounded btn-alt-success min-width-75" href="javascript:void(0)">
                            <i class="fa fa-thumbs-up"></i> Like
                        </a>
                        <a class="btn btn-sm btn-rounded btn-alt-info min-width-75" href="javascript:void(0)">
                            <i class="fa fa-save"></i> Save
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Options Slide Right -->

    <!-- Options Slide Down -->
    <h2 class="content-heading">Overlay Slide Down <small><code class="text-lowercase">.fx-overlay-slide-down</code></small></h2>
    <div class="row items-push">
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
                <?php $cb->get_photo(7, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-black-op">
                    <div class="options-overlay-content">
                        <h3 class="h4 text-white mb-5">Image</h3>
                        <h4 class="h6 text-white-op mb-15">More Details</h4>
                        <a class="btn btn-sm btn-rounded btn-alt-primary min-width-75" href="javascript:void(0)">
                            <i class="fa fa-pencil"></i> Edit
                        </a>
                        <a class="btn btn-sm btn-rounded btn-alt-danger min-width-75" href="javascript:void(0)">
                            <i class="fa fa-times"></i> Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
                <?php $cb->get_photo(7, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-white-op-90">
                    <div class="options-overlay-content">
                        <h3 class="h4 mb-5">Image</h3>
                        <h4 class="h6 text-gray-dark mb-15">More Details</h4>
                        <a class="btn btn-sm btn-rounded btn-primary min-width-75" href="javascript:void(0)">
                            <i class="fa fa-pencil"></i> Edit
                        </a>
                        <a class="btn btn-sm btn-rounded btn-danger min-width-75" href="javascript:void(0)">
                            <i class="fa fa-times"></i> Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
                <?php $cb->get_photo(7, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-primary-dark-op">
                    <div class="options-overlay-content">
                        <h3 class="h4 text-white mb-5">Image</h3>
                        <h4 class="h6 text-white-op mb-15">More Details</h4>
                        <a class="btn btn-sm btn-rounded btn-alt-success min-width-75" href="javascript:void(0)">
                            <i class="fa fa-thumbs-up"></i> Like
                        </a>
                        <a class="btn btn-sm btn-rounded btn-alt-info min-width-75" href="javascript:void(0)">
                            <i class="fa fa-save"></i> Save
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Options Slide Down -->

    <!-- Options Slide Top -->
    <h2 class="content-heading">Overlay Slide Top <small><code class="text-lowercase">.fx-overlay-slide-top</code></small></h2>
    <div class="row items-push">
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-zoom-in fx-overlay-slide-top">
                <?php $cb->get_photo(8, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-black-op">
                    <div class="options-overlay-content">
                        <h3 class="h4 text-white mb-5">Image</h3>
                        <h4 class="h6 text-white-op mb-15">More Details</h4>
                        <a class="btn btn-sm btn-rounded btn-alt-primary min-width-75" href="javascript:void(0)">
                            <i class="fa fa-pencil"></i> Edit
                        </a>
                        <a class="btn btn-sm btn-rounded btn-alt-danger min-width-75" href="javascript:void(0)">
                            <i class="fa fa-times"></i> Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-zoom-in fx-overlay-slide-top">
                <?php $cb->get_photo(8, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-white-op-90">
                    <div class="options-overlay-content">
                        <h3 class="h4 mb-5">Image</h3>
                        <h4 class="h6 text-gray-dark mb-15">More Details</h4>
                        <a class="btn btn-sm btn-rounded btn-primary min-width-75" href="javascript:void(0)">
                            <i class="fa fa-pencil"></i> Edit
                        </a>
                        <a class="btn btn-sm btn-rounded btn-danger min-width-75" href="javascript:void(0)">
                            <i class="fa fa-times"></i> Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-zoom-in fx-overlay-slide-top">
                <?php $cb->get_photo(8, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-primary-dark-op">
                    <div class="options-overlay-content">
                        <h3 class="h4 text-white mb-5">Image</h3>
                        <h4 class="h6 text-white-op mb-15">More Details</h4>
                        <a class="btn btn-sm btn-rounded btn-alt-success min-width-75" href="javascript:void(0)">
                            <i class="fa fa-thumbs-up"></i> Like
                        </a>
                        <a class="btn btn-sm btn-rounded btn-alt-info min-width-75" href="javascript:void(0)">
                            <i class="fa fa-save"></i> Save
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Options Slide Top -->

    <!-- Options Zoom In -->
    <h2 class="content-heading">Overlay Zoom In <small><code class="text-lowercase">.fx-overlay-zoom-in</code></small></h2>
    <div class="row items-push">
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-zoom-in fx-overlay-zoom-in">
                <?php $cb->get_photo(9, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-black-op">
                    <div class="options-overlay-content">
                        <h3 class="h4 text-white mb-5">Image</h3>
                        <h4 class="h6 text-white-op mb-15">More Details</h4>
                        <a class="btn btn-sm btn-rounded btn-alt-primary min-width-75" href="javascript:void(0)">
                            <i class="fa fa-pencil"></i> Edit
                        </a>
                        <a class="btn btn-sm btn-rounded btn-alt-danger min-width-75" href="javascript:void(0)">
                            <i class="fa fa-times"></i> Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-zoom-in fx-overlay-zoom-in">
                <?php $cb->get_photo(9, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-white-op-90">
                    <div class="options-overlay-content">
                        <h3 class="h4 mb-5">Image</h3>
                        <h4 class="h6 text-gray-dark mb-15">More Details</h4>
                        <a class="btn btn-sm btn-rounded btn-primary min-width-75" href="javascript:void(0)">
                            <i class="fa fa-pencil"></i> Edit
                        </a>
                        <a class="btn btn-sm btn-rounded btn-danger min-width-75" href="javascript:void(0)">
                            <i class="fa fa-times"></i> Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-zoom-in fx-overlay-zoom-in">
                <?php $cb->get_photo(9, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-primary-dark-op">
                    <div class="options-overlay-content">
                        <h3 class="h4 text-white mb-5">Image</h3>
                        <h4 class="h6 text-white-op mb-15">More Details</h4>
                        <a class="btn btn-sm btn-rounded btn-alt-success min-width-75" href="javascript:void(0)">
                            <i class="fa fa-thumbs-up"></i> Like
                        </a>
                        <a class="btn btn-sm btn-rounded btn-alt-info min-width-75" href="javascript:void(0)">
                            <i class="fa fa-save"></i> Save
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Options Zoom In -->

    <!-- Options Zoom Out -->
    <h2 class="content-heading">Overlay Zoom Out <small><code class="text-lowercase">.fx-overlay-zoom-out</code></small></h2>
    <div class="row items-push">
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-zoom-in fx-overlay-zoom-out">
                <?php $cb->get_photo(10, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-black-op">
                    <div class="options-overlay-content">
                        <h3 class="h4 text-white mb-5">Image</h3>
                        <h4 class="h6 text-white-op mb-15">More Details</h4>
                        <a class="btn btn-sm btn-rounded btn-alt-primary min-width-75" href="javascript:void(0)">
                            <i class="fa fa-pencil"></i> Edit
                        </a>
                        <a class="btn btn-sm btn-rounded btn-alt-danger min-width-75" href="javascript:void(0)">
                            <i class="fa fa-times"></i> Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-zoom-in fx-overlay-zoom-out">
                <?php $cb->get_photo(10, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-white-op-90">
                    <div class="options-overlay-content">
                        <h3 class="h4 mb-5">Image</h3>
                        <h4 class="h6 text-gray-dark mb-15">More Details</h4>
                        <a class="btn btn-sm btn-rounded btn-primary min-width-75" href="javascript:void(0)">
                            <i class="fa fa-pencil"></i> Edit
                        </a>
                        <a class="btn btn-sm btn-rounded btn-danger min-width-75" href="javascript:void(0)">
                            <i class="fa fa-times"></i> Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 animated fadeIn">
            <div class="options-container fx-item-zoom-in fx-overlay-zoom-out">
                <?php $cb->get_photo(10, false, 'img-fluid options-item'); ?>
                <div class="options-overlay bg-primary-dark-op">
                    <div class="options-overlay-content">
                        <h3 class="h4 text-white mb-5">Image</h3>
                        <h4 class="h6 text-white-op mb-15">More Details</h4>
                        <a class="btn btn-sm btn-rounded btn-alt-success min-width-75" href="javascript:void(0)">
                            <i class="fa fa-thumbs-up"></i> Like
                        </a>
                        <a class="btn btn-sm btn-rounded btn-alt-info min-width-75" href="javascript:void(0)">
                            <i class="fa fa-save"></i> Save
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Options Zoom Out -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>