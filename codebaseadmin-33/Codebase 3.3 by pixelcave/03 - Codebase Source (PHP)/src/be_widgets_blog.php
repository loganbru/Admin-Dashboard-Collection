<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $cb->get_css('js/plugins/magnific-popup/magnific-popup.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <!-- Stories with multiple links -->
    <h2 class="content-heading">Stories with multiple links</h2>
    <div class="row row-deck">
        <div class="col-md-6 col-xl-4">
            <!-- Story #1 -->
            <div class="block d-flex flex-column">
                <div class="block-content block-content-full bg-image min-height-175 flex-grow-0" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo43.jpg');">
                    <a class="badge badge-secondary font-w700 p-2 text-uppercase" href="javascript:void(0)">
                        Business
                    </a>
                </div>
                <div class="block-content flex-grow-1">
                    <h5 class="mb-5">
                        <a class="text-dark" href="javascript:void(0)">
                            Starting your own home based online business from scratch
                        </a>
                    </h5>
                    <p class="text-muted">
                        <?php echo $cb->get_name(); ?> &middot; 24 min
                    </p>
                </div>
                <div class="block-content py-15 bg-body-light flex-grow-0">
                    <div class="row no-gutters font-size-sm text-center">
                        <div class="col-4">
                            <a class="text-muted font-w600" href="javascript:void(0)">
                                <i class="fa fa-fw fa-eye mr-5"></i> 1.5k
                            </a>
                        </div>
                        <div class="col-4">
                            <a class="text-muted font-w600" href="javascript:void(0)">
                                <i class="fa fa-fw fa-heart mr-5"></i> 300
                            </a>
                        </div>
                        <div class="col-4">
                            <a class="text-muted font-w600" href="javascript:void(0)">
                                <i class="fa fa-fw fa-comments mr-5"></i> 750
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Story #1 -->
        </div>
        <div class="col-md-6 col-xl-4">
            <!-- Story #2 -->
            <div class="block d-flex flex-column">
                <div class="block-content block-content-full bg-pulse min-height-175 flex-grow-0">
                    <a class="badge badge-secondary font-w700 p-2 text-uppercase" href="javascript:void(0)">
                        Coding
                    </a>
                    <h3 class="h2 text-white-op text-center mt-30">Laravel</h3>
                </div>
                <div class="block-content flex-grow-1">
                    <h5 class="mb-5">
                        <a class="text-dark" href="javascript:void(0)">
                            Best Laravel productivity tips
                        </a>
                    </h5>
                    <p class="text-muted">
                        <?php echo $cb->get_name(); ?> &middot; 15 min
                    </p>
                </div>
                <div class="block-content py-15 bg-body-light flex-grow-0">
                    <div class="row no-gutters font-size-sm text-center">
                        <div class="col-4">
                            <a class="text-muted font-w600" href="javascript:void(0)">
                                <i class="fa fa-fw fa-eye mr-5"></i> 2.3k
                            </a>
                        </div>
                        <div class="col-4">
                            <a class="text-muted font-w600" href="javascript:void(0)">
                                <i class="fa fa-fw fa-heart mr-5"></i> 42
                            </a>
                        </div>
                        <div class="col-4">
                            <a class="text-muted font-w600" href="javascript:void(0)">
                                <i class="fa fa-fw fa-comments mr-5"></i> 16
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Story #2 -->
        </div>
        <div class="col-md-6 col-xl-4">
            <!-- Story #3 -->
            <div class="block d-flex flex-column">
                <div class="block-content block-content-full bg-image min-height-175 flex-grow-0" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo13.jpg');">
                    <a class="badge badge-secondary font-w700 p-2 text-uppercase" href="javascript:void(0)">
                        Travel
                    </a>
                </div>
                <div class="block-content flex-grow-1">
                    <h5 class="mb-5">
                        <a class="text-dark" href="javascript:void(0)">
                            Exploring the countryside
                        </a>
                    </h5>
                    <p class="text-muted">
                        <?php echo $cb->get_name(); ?> &middot; 8 min
                    </p>
                </div>
                <div class="block-content py-15 bg-body-light flex-grow-0">
                    <div class="row no-gutters font-size-sm text-center">
                        <div class="col-4">
                            <a class="text-muted font-w600" href="javascript:void(0)">
                                <i class="fa fa-fw fa-eye mr-5"></i> 652
                            </a>
                        </div>
                        <div class="col-4">
                            <a class="text-muted font-w600" href="javascript:void(0)">
                                <i class="fa fa-fw fa-heart mr-5"></i> 25
                            </a>
                        </div>
                        <div class="col-4">
                            <a class="text-muted font-w600" href="javascript:void(0)">
                                <i class="fa fa-fw fa-comments mr-5"></i> 15
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Story #3 -->
        </div>
    </div>
    <div class="row row-deck">
        <div class="col-md-6 col-xl-4">
            <!-- Story #4 -->
            <div class="block d-flex flex-column">
                <div class="block-content block-content-full bg-corporate min-height-175 flex-grow-0">
                    <a class="badge badge-secondary font-w700 p-2 text-uppercase" href="javascript:void(0)">
                        Tutorial
                    </a>
                    <h3 class="h2 text-white-op text-center mt-30">React.js</h3>
                </div>
                <div class="block-content flex-grow-1">
                    <h5 class="mb-5">
                        <a class="text-dark" href="javascript:void(0)">
                            Build an SPA with React.js
                        </a>
                    </h5>
                    <p class="text-muted">
                        <?php echo $cb->get_name(); ?> &middot; 12 min
                    </p>
                </div>
                <div class="block-content py-15 bg-body-light flex-grow-0">
                    <div class="row no-gutters font-size-sm text-center">
                        <div class="col-4">
                            <a class="text-muted font-w600" href="javascript:void(0)">
                                <i class="fa fa-fw fa-eye mr-5"></i> 7.5k
                            </a>
                        </div>
                        <div class="col-4">
                            <a class="text-muted font-w600" href="javascript:void(0)">
                                <i class="fa fa-fw fa-heart mr-5"></i> 79
                            </a>
                        </div>
                        <div class="col-4">
                            <a class="text-muted font-w600" href="javascript:void(0)">
                                <i class="fa fa-fw fa-comments mr-5"></i> 53
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Story #4 -->
        </div>
        <div class="col-md-6 col-xl-4">
            <!-- Story #5 -->
            <div class="block d-flex flex-column">
                <div class="block-content block-content-full bg-image min-height-175 flex-grow-0" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo33.jpg');">
                    <a class="badge badge-secondary font-w700 p-2 text-uppercase" href="javascript:void(0)">
                        Travel
                    </a>
                </div>
                <div class="block-content flex-grow-1">
                    <h5 class="mb-5">
                        <a class="text-dark" href="javascript:void(0)">
                            Exploring amazing cities
                        </a>
                    </h5>
                    <p class="text-muted">
                        <?php echo $cb->get_name(); ?> &middot; 13 min
                    </p>
                </div>
                <div class="block-content py-15 bg-body-light flex-grow-0">
                    <div class="row no-gutters font-size-sm text-center">
                        <div class="col-4">
                            <a class="text-muted font-w600" href="javascript:void(0)">
                                <i class="fa fa-fw fa-eye mr-5"></i> 2.6k
                            </a>
                        </div>
                        <div class="col-4">
                            <a class="text-muted font-w600" href="javascript:void(0)">
                                <i class="fa fa-fw fa-heart mr-5"></i> 28
                            </a>
                        </div>
                        <div class="col-4">
                            <a class="text-muted font-w600" href="javascript:void(0)">
                                <i class="fa fa-fw fa-comments mr-5"></i> 16
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Story #5 -->
        </div>
        <div class="col-md-6 col-xl-4">
            <!-- Story #6 -->
            <div class="block d-flex flex-column">
                <div class="block-content block-content-full bg-flat min-height-175 flex-grow-0">
                    <a class="badge badge-secondary font-w700 p-2 text-uppercase" href="javascript:void(0)">
                        Tutorial
                    </a>
                    <h3 class="h2 text-white-op text-center mt-30">Vue.js</h3>
                </div>
                <div class="block-content flex-grow-1">
                    <h5 class="mb-5">
                        <a class="text-dark" href="javascript:void(0)">
                            Get started with Vue CLI
                        </a>
                    </h5>
                    <p class="text-muted">
                        <?php echo $cb->get_name(); ?> &middot; 23 min
                    </p>
                </div>
                <div class="block-content py-15 bg-body-light flex-grow-0">
                    <div class="row no-gutters font-size-sm text-center">
                        <div class="col-4">
                            <a class="text-muted font-w600" href="javascript:void(0)">
                                <i class="fa fa-fw fa-eye mr-5"></i> 4.9k
                            </a>
                        </div>
                        <div class="col-4">
                            <a class="text-muted font-w600" href="javascript:void(0)">
                                <i class="fa fa-fw fa-heart mr-5"></i> 150
                            </a>
                        </div>
                        <div class="col-4">
                            <a class="text-muted font-w600" href="javascript:void(0)">
                                <i class="fa fa-fw fa-comments mr-5"></i> 63
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Story #6 -->
        </div>
    </div>
    <!-- END Stories with multiple links -->

    <!-- Link Stories -->
    <h2 class="content-heading">Link Stories</h2>
    <div class="row row-deck">
        <div class="col-md-6 col-xl-4">
            <!-- Story #7 -->
            <a class="block d-flex flex-column" href="javascript:void(0)">
                <div class="block-content block-content-full bg-image min-height-175 flex-grow-0" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo32.jpg');">
                    <span class="badge badge-success font-w700 p-2 text-uppercase">
                        Travel
                    </span>
                </div>
                <div class="block-content flex-grow-1">
                    <h5 class="mb-5">
                        The mountains you have to climb
                    </h5>
                    <p class="text-muted">
                        <?php echo $cb->get_name(); ?> &middot; 9 min
                    </p>
                </div>
                <div class="block-content py-15 bg-body-light flex-grow-0">
                    <div class="row no-gutters font-size-sm text-center">
                        <div class="col-4">
                            <span class="text-muted font-w600">
                                <i class="fa fa-fw fa-eye mr-5"></i> 2.2k
                            </span>
                        </div>
                        <div class="col-4">
                            <span class="text-muted font-w600">
                                <i class="fa fa-fw fa-heart mr-5"></i> 169
                            </span>
                        </div>
                        <div class="col-4">
                            <span class="text-muted font-w600">
                                <i class="fa fa-fw fa-comments mr-5"></i> 25
                            </span>
                        </div>
                    </div>
                </div>
            </a>
            <!-- END Story #7 -->
        </div>
        <div class="col-md-6 col-xl-4">
            <!-- Story #8 -->
            <a class="block d-flex flex-column" href="javascript:void(0)">
                <div class="block-content block-content-full bg-image min-height-175 flex-grow-0" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo27.jpg');">
                    <span class="badge badge-primary font-w700 p-2 text-uppercase">
                        Inspiration
                    </span>
                </div>
                <div class="block-content flex-grow-1">
                    <h5 class="mb-5">
                        Start building your work habits
                    </h5>
                    <p class="text-muted">
                        <?php echo $cb->get_name(); ?> &middot; 5 min
                    </p>
                </div>
                <div class="block-content py-15 bg-body-light flex-grow-0">
                    <div class="row no-gutters font-size-sm text-center">
                        <div class="col-4">
                            <span class="text-muted font-w600">
                                <i class="fa fa-fw fa-eye mr-5"></i> 8.5k
                            </span>
                        </div>
                        <div class="col-4">
                            <span class="text-muted font-w600">
                                <i class="fa fa-fw fa-heart mr-5"></i> 95
                            </span>
                        </div>
                        <div class="col-4">
                            <span class="text-muted font-w600">
                                <i class="fa fa-fw fa-comments mr-5"></i> 25
                            </span>
                        </div>
                    </div>
                </div>
            </a>
            <!-- END Story #8 -->
        </div>
        <div class="col-md-6 col-xl-4">
            <!-- Story #9 -->
            <a class="block d-flex flex-column" href="javascript:void(0)">
                <div class="block-content block-content-full bg-image min-height-175 flex-grow-0" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo23.jpg');">
                    <span class="badge badge-danger font-w700 p-2 text-uppercase">
                        Adventure
                    </span>
                </div>
                <div class="block-content flex-grow-1">
                    <h5 class="mb-5">
                        Best places to see the northern lights
                    </h5>
                    <p class="text-muted">
                        <?php echo $cb->get_name(); ?> &middot; 19 min
                    </p>
                </div>
                <div class="block-content py-15 bg-body-light flex-grow-0">
                    <div class="row no-gutters font-size-sm text-center">
                        <div class="col-4">
                            <span class="text-muted font-w600">
                                <i class="fa fa-fw fa-eye mr-5"></i> 7.6k
                            </span>
                        </div>
                        <div class="col-4">
                            <span class="text-muted font-w600">
                                <i class="fa fa-fw fa-heart mr-5"></i> 69
                            </span>
                        </div>
                        <div class="col-4">
                            <span class="text-muted font-w600">
                                <i class="fa fa-fw fa-comments mr-5"></i> 12
                            </span>
                        </div>
                    </div>
                </div>
            </a>
            <!-- END Story #9 -->
        </div>
    </div>
    <div class="row row-deck">
        <div class="col-md-6 col-xl-4">
            <!-- Story #10 -->
            <a class="block block-link-pop d-flex flex-column" href="javascript:void(0)">
                <div class="block-content block-content-full bg-pulse min-height-175 flex-grow-0">
                    <span class="badge badge-secondary font-w700 p-2 text-uppercase">
                        Tutorial
                    </span>
                    <h3 class="h2 text-white-op text-center mt-30">Laravel</h3>
                </div>
                <div class="block-content flex-grow-1">
                    <h5 class="mb-5">
                        Create a blog site in under 2 hours
                    </h5>
                    <p class="text-muted">
                        <?php echo $cb->get_name(); ?> &middot; 24 min
                    </p>
                </div>
                <div class="block-content py-15 bg-body-light flex-grow-0">
                    <div class="row no-gutters font-size-sm text-center">
                        <div class="col-4">
                            <span class="text-muted font-w600">
                                <i class="fa fa-fw fa-eye mr-5"></i> 9.3k
                            </span>
                        </div>
                        <div class="col-4">
                            <span class="text-muted font-w600">
                                <i class="fa fa-fw fa-heart mr-5"></i> 480
                            </span>
                        </div>
                        <div class="col-4">
                            <span class="text-muted font-w600">
                                <i class="fa fa-fw fa-comments mr-5"></i> 463
                            </span>
                        </div>
                    </div>
                </div>
            </a>
            <!-- END Story #10 -->
        </div>
        <div class="col-md-6 col-xl-4">
            <!-- Story #11 -->
            <a class="block block-link-pop d-flex flex-column" href="javascript:void(0)">
                <div class="block-content block-content-full bg-flat min-height-175 flex-grow-0">
                    <span class="badge badge-secondary font-w700 p-2 text-uppercase">
                        Tutorial
                    </span>
                    <h3 class="h2 text-white-op text-center mt-30">Vue.js</h3>
                </div>
                <div class="block-content flex-grow-1">
                    <h5 class="mb-5">
                        How to structure your Vue.js based app
                    </h5>
                    <p class="text-muted">
                        <?php echo $cb->get_name(); ?> &middot; 29 min
                    </p>
                </div>
                <div class="block-content py-15 bg-body-light flex-grow-0">
                    <div class="row no-gutters font-size-sm text-center">
                        <div class="col-4">
                            <span class="text-muted font-w600">
                                <i class="fa fa-fw fa-eye mr-5"></i> 3.7k
                            </span>
                        </div>
                        <div class="col-4">
                            <span class="text-muted font-w600">
                                <i class="fa fa-fw fa-heart mr-5"></i> 87
                            </span>
                        </div>
                        <div class="col-4">
                            <span class="text-muted font-w600">
                                <i class="fa fa-fw fa-comments mr-5"></i> 36
                            </span>
                        </div>
                    </div>
                </div>
            </a>
            <!-- END Story #11 -->
        </div>
        <div class="col-md-6 col-xl-4">
            <!-- Story #12 -->
            <a class="block block-link-pop d-flex flex-column" href="javascript:void(0)">
                <div class="block-content block-content-full bg-earth min-height-175 flex-grow-0">
                    <span class="badge badge-secondary font-w700 p-2 text-uppercase">
                        Tutorial
                    </span>
                    <h3 class="h2 text-white-op text-center mt-30">Angular</h3>
                </div>
                <div class="block-content flex-grow-1">
                    <h5 class="mb-5">
                        Getting started with Google’s JS framework
                    </h5>
                    <p class="text-muted">
                        <?php echo $cb->get_name(); ?> &middot; 14 min
                    </p>
                </div>
                <div class="block-content py-15 bg-body-light flex-grow-0">
                    <div class="row no-gutters font-size-sm text-center">
                        <div class="col-4">
                            <span class="text-muted font-w600">
                                <i class="fa fa-fw fa-eye mr-5"></i> 4.9k
                            </span>
                        </div>
                        <div class="col-4">
                            <span class="text-muted font-w600">
                                <i class="fa fa-fw fa-heart mr-5"></i> 150
                            </span>
                        </div>
                        <div class="col-4">
                            <span class="text-muted font-w600">
                                <i class="fa fa-fw fa-comments mr-5"></i> 63
                            </span>
                        </div>
                    </div>
                </div>
            </a>
            <!-- END Story #12 -->
        </div>
    </div>
    <!-- END Link Stories -->

    <!-- Cover Link Stories -->
    <h2 class="content-heading">Cover Link Stories</h2>
    <div class="row row-deck">
        <div class="col-md-6 col-xl-4">
            <!-- Story #13 -->
            <a class="block bg-image d-flex flex-column" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo29.jpg');" href="javascript:void(0)">
                <div class="block-content bg-black-op flex-grow-1">
                    <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                        <p>
                            <span class="badge badge-success font-w700 p-2 text-uppercase">
                                Travel
                            </span>
                        </p>
                        <p class="font-size-sm">
                            <span class="text-white font-w600 mr-5">
                                <i class="fa fa-fw fa-eye text-white-50"></i> 3.9k
                            </span>
                            <span class="text-white font-w600 mr-5">
                                <i class="fa fa-fw fa-heart text-white-50"></i> 90
                            </span>
                            <span class="text-white font-w600 mr-5">
                                <i class="fa fa-fw fa-comments text-white-50"></i> 23
                            </span>
                        </p>
                    </div>
                    <h5 class="text-white font-w700 mb-5 mt-100">
                        Best beaches sto visit this summer
                    </h5>
                    <p class="font-w600 text-white-op">
                        <?php echo $cb->get_name(); ?> &middot; 12 min
                    </p>
                </div>
            </a>
            <!-- END Story #13 -->
        </div>
        <div class="col-md-6 col-xl-4">
            <!-- Story #14 -->
            <a class="block bg-image d-flex flex-column" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo17.jpg');" href="javascript:void(0)">
                <div class="block-content bg-black-op flex-grow-1">
                    <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                        <p>
                            <span class="badge badge-primary font-w700 p-2 text-uppercase">
                                Business
                            </span>
                        </p>
                        <p class="font-size-sm">
                            <span class="text-white font-w600 mr-5">
                                <i class="fa fa-fw fa-eye text-white-50"></i> 4.3k
                            </span>
                            <span class="text-white font-w600 mr-5">
                                <i class="fa fa-fw fa-heart text-white-50"></i> 210
                            </span>
                            <span class="text-white font-w600 mr-5">
                                <i class="fa fa-fw fa-comments text-white-50"></i> 87
                            </span>
                        </p>
                    </div>
                    <h5 class="text-white font-w700 mb-5 mt-100">
                        Moving your business to new territory
                    </h5>
                    <p class="font-w600 text-white-op">
                        <?php echo $cb->get_name(); ?> &middot; 8 min
                    </p>
                </div>
            </a>
            <!-- END Story #14 -->
        </div>
        <div class="col-md-6 col-xl-4">
            <!-- Story #15 -->
            <a class="block bg-image d-flex flex-column" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo34.jpg');" href="javascript:void(0)">
                <div class="block-content bg-black-op flex-grow-1">
                    <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                        <p>
                            <span class="badge badge-info font-w700 p-2 text-uppercase">
                                Story
                            </span>
                        </p>
                        <p class="font-size-sm">
                            <span class="text-white font-w600 mr-5">
                                <i class="fa fa-fw fa-eye text-white-50"></i> 6.2k
                            </span>
                            <span class="text-white font-w600 mr-5">
                                <i class="fa fa-fw fa-heart text-white-50"></i> 485
                            </span>
                            <span class="text-white font-w600 mr-5">
                                <i class="fa fa-fw fa-comments text-white-50"></i> 92
                            </span>
                        </p>
                    </div>
                    <h5 class="text-white font-w700 mb-5 mt-100">
                        How the latest tech will impact cities
                    </h5>
                    <p class="font-w600 text-white-op">
                        <?php echo $cb->get_name(); ?> &middot; 16 min
                    </p>
                </div>
            </a>
            <!-- END Story #15 -->
        </div>
    </div>
    <div class="row row-deck">
        <div class="col-md-6 col-xl-4">
            <!-- Story #16 -->
            <a class="block bg-pulse d-flex flex-column" href="javascript:void(0)">
                <div class="block-content flex-grow-1">
                    <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                        <p>
                            <span class="badge badge-secondary font-w700 p-2 text-uppercase">
                                Review
                            </span>
                        </p>
                        <p class="font-size-sm">
                            <span class="text-white font-w600 mr-5">
                                <i class="fa fa-fw fa-eye text-white-50"></i> 9.1k
                            </span>
                            <span class="text-white font-w600 mr-5">
                                <i class="fa fa-fw fa-heart text-white-50"></i> 65
                            </span>
                            <span class="text-white font-w600 mr-5">
                                <i class="fa fa-fw fa-comments text-white-50"></i> 34
                            </span>
                        </p>
                    </div>
                    <h5 class="text-white font-w700 mb-5 mt-100">
                        Visual Studio Code
                    </h5>
                    <p class="font-w600 text-white-op">
                        <?php echo $cb->get_name(); ?> &middot; 11 min
                    </p>
                </div>
            </a>
            <!-- END Story #16 -->
        </div>
        <div class="col-md-6 col-xl-4">
            <!-- Story #17 -->
            <a class="block bg-elegance d-flex flex-column" href="javascript:void(0)">
                <div class="block-content flex-grow-1">
                    <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                        <p>
                            <span class="badge badge-secondary font-w700 p-2 text-uppercase">
                                Tutorial
                            </span>
                        </p>
                        <p class="font-size-sm">
                            <span class="text-white font-w600 mr-5">
                                <i class="fa fa-fw fa-eye text-white-50"></i> 5.6k
                            </span>
                            <span class="text-white font-w600 mr-5">
                                <i class="fa fa-fw fa-heart text-white-50"></i> 198
                            </span>
                            <span class="text-white font-w600 mr-5">
                                <i class="fa fa-fw fa-comments text-white-50"></i> 25
                            </span>
                        </p>
                    </div>
                    <h5 class="text-white font-w700 mb-5 mt-100">
                        Using Laravel and Vue to build an app
                    </h5>
                    <p class="font-w600 text-white-op">
                        <?php echo $cb->get_name(); ?> &middot; 6 min
                    </p>
                </div>
            </a>
            <!-- END Story #17 -->
        </div>
        <div class="col-md-6 col-xl-4">
            <!-- Story #18 -->
            <a class="block bg-earth d-flex flex-column" href="javascript:void(0)">
                <div class="block-content flex-grow-1">
                    <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                        <p>
                            <span class="badge badge-secondary font-w700 p-2 text-uppercase">
                                Design
                            </span>
                        </p>
                        <p class="font-size-sm">
                            <span class="text-white font-w600 mr-5">
                                <i class="fa fa-fw fa-eye text-white-50"></i> 7.6k
                            </span>
                            <span class="text-white font-w600 mr-5">
                                <i class="fa fa-fw fa-heart text-white-50"></i> 784
                            </span>
                            <span class="text-white font-w600 mr-5">
                                <i class="fa fa-fw fa-comments text-white-50"></i> 36
                            </span>
                        </p>
                    </div>
                    <h5 class="text-white font-w700 mb-5 mt-100">
                        How to build an amazing UI
                    </h5>
                    <p class="font-w600 text-white-op">
                        <?php echo $cb->get_name(); ?> &middot; 9 min
                    </p>
                </div>
            </a>
            <!-- END Story #18 -->
        </div>
    </div>
    <!-- END Cover Link Stories -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
