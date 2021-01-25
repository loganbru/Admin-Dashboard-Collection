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
    <h2 class="content-heading">Project X <small>Web Design and Development</small></h2>
    <div class="block">
        <!-- Navigation -->
        <div class="block-content block-content-full border-b clearfix">
            <div class="btn-group float-right">
                <a class="btn btn-secondary" href="javascript:void(0)">
                    <i class="fa fa-arrow-left text-primary mr-5"></i> Prev
                </a>
                <a class="btn btn-secondary" href="javascript:void(0)">
                    Next <i class="fa fa-arrow-right text-primary ml-5"></i>
                </a>
            </div>
            <a class="btn btn-secondary" href="be_pages_generic_project_list.php">
                <i class="fa fa-th-large text-primary mr-5 "></i> All Projects
            </a>
        </div>
        <!-- END Navigation -->

        <!-- Project -->
        <div class="block-content block-content-full">
            <div class="row py-20">
                <div class="col-sm-6 invisible" data-toggle="appear">
                    <!-- Image Slider (.js-slider class is initialized in Helpers.slick()) -->
                    <!-- For more info and examples you can check out http://kenwheeler.github.io/slick/ -->
                    <div class="js-slider slick-nav-black slick-dotted-inner slick-dotted-white" data-dots="true" data-arrows="true">
                        <div>
                            <img class="img-fluid" src="<?php echo $cb->assets_folder; ?>/media/various/cb-project-promo1.png" alt="Project Promo 1">
                        </div>
                        <div>
                            <img class="img-fluid" src="<?php echo $cb->assets_folder; ?>/media/various/cb-project-promo2.png" alt="Project Promo 2">
                        </div>
                        <div>
                            <img class="img-fluid" src="<?php echo $cb->assets_folder; ?>/media/various/cb-project-promo3.png" alt="Project Promo 3">
                        </div>
                    </div>
                    <!-- END Image Slider -->

                    <!-- Project Info -->
                    <table class="table table-striped table-borderless mt-20">
                        <tbody>
                            <tr>
                                <td class="font-w600">Client</td>
                                <td>Company S.A.</td>
                            </tr>
                            <tr>
                                <td class="font-w600">Budget</td>
                                <td>$10.000</td>
                            </tr>
                            <tr>
                                <td class="font-w600">Category</td>
                                <td>Web Development</td>
                            </tr>
                            <tr>
                                <td class="font-w600">Website</td>
                                <td>
                                    <a href="javascript:void(0)">https://example.com/</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- END Project Info -->
                </div>
                <div class="col-sm-6 nice-copy">
                    <!-- Project Description -->
                    <h3 class="mb-10">Introduction</h3>
                    <?php $cb->get_text('small'); ?>
                    <h3 class="mt-20 mb-10">Research</h3>
                    <?php $cb->get_text('small', 2); ?>
                    <!-- END Project Description -->
                </div>
            </div>
        </div>
        <!-- END Project -->

        <!-- Key Features -->
        <div class="block-content-full border-t">
            <div class="row text-center py-30 invisible" data-toggle="appear">
                <div class="col-6 col-md-4 col-xl-3 py-30">
                    <div class="item item-rounded item-2x mx-auto bg-primary-lighter push">
                        <i class="si si-rocket text-primary"></i>
                    </div>
                    <h5 class="mb-0">Bootstrap Powered</h5>
                </div>
                <div class="col-6 col-md-4 col-xl-3 py-30">
                    <div class="item item-rounded item-2x mx-auto bg-pulse-lighter push">
                        <i class="si si-screen-smartphone text-pulse"></i>
                    </div>
                    <h5 class="mb-0">Fully Responsive</h5>
                </div>
                <div class="col-6 col-md-4 col-xl-3 py-30">
                    <div class="item item-rounded item-2x mx-auto bg-corporate-lighter push">
                        <i class="si si-speech text-corporate"></i>
                    </div>
                    <h5 class="mb-0">AI Powered</h5>
                </div>
                <div class="col-6 col-md-4 col-xl-3 py-30">
                    <div class="item item-rounded item-2x mx-auto bg-warning-light push">
                        <i class="si si-moustache text-warning"></i>
                    </div>
                    <h5 class="mb-0">Clean Code</h5>
                </div>
                <div class="col-6 col-md-4 col-xl-3 py-30">
                    <div class="item item-rounded item-2x mx-auto bg-earth-lighter push">
                        <i class="si si-globe-alt text-earth"></i>
                    </div>
                    <h5 class="mb-0">Global</h5>
                </div>
                <div class="col-6 col-md-4 col-xl-3 py-30">
                    <div class="item item-rounded item-2x mx-auto bg-elegance-lighter push">
                        <i class="si si-earphones-alt text-elegance"></i>
                    </div>
                    <h5 class="mb-0">Support Center</h5>
                </div>
                <div class="col-6 col-md-4 col-xl-3 py-30">
                    <div class="item item-rounded item-2x mx-auto bg-info-light push">
                        <i class="si si-graduation text-info"></i>
                    </div>
                    <h5 class="mb-0">Smart UI</h5>
                </div>
                <div class="col-6 col-md-4 col-xl-3 py-30">
                    <div class="item item-rounded item-2x mx-auto bg-gray-light push">
                        <i class="si si-book-open text-gray-dark"></i>
                    </div>
                    <h5 class="mb-0">Ready Pages</h5>
                </div>
                <div class="col-6 col-md-4 col-xl-3 py-30">
                    <div class="item item-rounded item-2x mx-auto bg-danger-light push">
                        <i class="si si-energy text-danger"></i>
                    </div>
                    <h5 class="mb-0">Super Fast</h5>
                </div>
                <div class="col-6 col-md-4 col-xl-3 py-30">
                    <div class="item item-rounded item-2x mx-auto bg-success-light push">
                        <i class="si si-speedometer text-success"></i>
                    </div>
                    <h5 class="mb-0">Extra Smooth</h5>
                </div>
                <div class="col-6 col-md-4 col-xl-3 py-30">
                    <div class="item item-rounded item-2x mx-auto bg-warning-light push">
                        <i class="si si-settings text-warning"></i>
                    </div>
                    <h5 class="mb-0">Services</h5>
                </div>
                <div class="col-6 col-md-4 col-xl-3 py-30">
                    <div class="item item-rounded item-2x mx-auto bg-flat-lighter push">
                        <i class="si si-support text-flat"></i>
                    </div>
                    <h5 class="mb-0">Support</h5>
                </div>
            </div>
        </div>
        <!-- END Key Features -->

        <!-- Testimonial -->
        <div class="bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo30@2x.jpg');">
            <div class="block-content block-content-full bg-primary-dark-op text-center">
                <div class="py-30 invisible" data-toggle="appear">
                    <div class="py-10">
                        <?php $cb->get_avatar(10, '', 96, true); ?>
                    </div>
                    <div class="row justify-content-center py-10">
                        <div class="col-md-8">
                            <div class="mb-10">
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                            </div>
                            <h3 class="font-w700 text-white mb-10">Highly recommended! <i class="fa fa-thumbs-up"></i></h3>
                            <p class="font-size-lg text-body-bg-dark">We couldn't wish for a better team to take off our project! Professional team that will help you bring your ideas to life in the most inspiring and overwhelming way. Looking forward working with you again! Thank you very much!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Testimonial -->
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/slick/slick.min.js'); ?>

<!-- Page JS Helpers (Slick Slider plugin) -->
<script>jQuery(function(){ Codebase.helpers('slick'); });</script>

<?php require 'inc/_global/views/footer_end.php'; ?>