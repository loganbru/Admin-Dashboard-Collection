<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content content-full">
    <!-- Images Filtering -->
    <h2 class="content-heading">Project List <small>All your latest projects</small></h2>

    <!-- Project Filtering (.js-filter class is initialized in Helpers.contentFilter()) -->
    <!-- If data-numbers="true" is added, then the number of the items of each category will be auto added to each category link -->
    <div class="js-filter">
        <!-- Navigation -->
        <div class="p-10 bg-white push">
            <ul class="nav nav-pills justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" href="#" data-category-link="all">
                        <i class="fa fa-fw fa-th-large mr-5"></i> All
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-category-link="webapp">
                        <i class="fa fa-fw fa-briefcase mr-5"></i> Web App
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-category-link="photography">
                        <i class="fa fa-fw fa-camera mr-5"></i> Photography
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-category-link="logo">
                        <i class="fa fa-fw fa-rocket mr-5"></i> Logo
                    </a>
                </li>
            </ul>
        </div>
        <!-- END Navigation -->

        <!-- Projects -->
        <div class="row items-push img-fluid-100">
            <div class="col-sm-6 col-md-3" data-category="logo">
                <a class="img-link" href="be_pages_generic_project.php">
                    <img class="img-fluid img-thumb" src="<?php echo $cb->assets_folder; ?>/media/various/cb-project-promo1.png" alt="Project 1 Promo">
                </a>
            </div>
            <div class="col-sm-6 col-md-3" data-category="webapp">
                <a class="img-link" href="be_pages_generic_project.php">
                    <img class="img-fluid img-thumb" src="<?php echo $cb->assets_folder; ?>/media/various/cb-project-promo2.png" alt="Project 2 Promo">
                </a>
            </div>
            <div class="col-sm-6 col-md-3" data-category="logo">
                <a class="img-link" href="be_pages_generic_project.php">
                    <img class="img-fluid img-thumb" src="<?php echo $cb->assets_folder; ?>/media/various/cb-project-promo3.png" alt="Project 3 Promo">
                </a>
            </div>
            <div class="col-sm-6 col-md-3" data-category="logo">
                <a class="img-link" href="be_pages_generic_project.php">
                    <img class="img-fluid img-thumb" src="<?php echo $cb->assets_folder; ?>/media/various/cb-project-promo4.png" alt="Project 4 Promo">
                </a>
            </div>
            <div class="col-sm-6 col-md-3" data-category="webapp">
                <a class="img-link" href="be_pages_generic_project.php">
                    <img class="img-fluid img-thumb" src="<?php echo $cb->assets_folder; ?>/media/various/cb-project-promo5.png" alt="Project 5 Promo">
                </a>
            </div>
            <div class="col-sm-6 col-md-3" data-category="logo">
                <a class="img-link" href="be_pages_generic_project.php">
                    <img class="img-fluid img-thumb" src="<?php echo $cb->assets_folder; ?>/media/various/cb-project-promo6.png" alt="Project 6 Promo">
                </a>
            </div>
            <div class="col-sm-6 col-md-3" data-category="webapp">
                <a class="img-link" href="be_pages_generic_project.php">
                    <img class="img-fluid img-thumb" src="<?php echo $cb->assets_folder; ?>/media/various/cb-project-promo2.png" alt="Project 7 Promo">
                </a>
            </div>
            <div class="col-sm-6 col-md-3" data-category="photography">
                <a class="img-link" href="be_pages_generic_project.php">
                    <img class="img-fluid img-thumb" src="<?php echo $cb->assets_folder; ?>/media/various/cb-project-promo1.png" alt="Project 8 Promo">
                </a>
            </div>
            <div class="col-sm-6 col-md-3" data-category="logo">
                <a class="img-link" href="be_pages_generic_project.php">
                    <img class="img-fluid img-thumb" src="<?php echo $cb->assets_folder; ?>/media/various/cb-project-promo4.png" alt="Project 9 Promo">
                </a>
            </div>
            <div class="col-sm-6 col-md-3" data-category="webapp">
                <a class="img-link" href="be_pages_generic_project.php">
                    <img class="img-fluid img-thumb" src="<?php echo $cb->assets_folder; ?>/media/various/cb-project-promo1.png" alt="Project 10 Promo">
                </a>
            </div>
            <div class="col-sm-6 col-md-3" data-category="photography">
                <a class="img-link" href="be_pages_generic_project.php">
                    <img class="img-fluid img-thumb" src="<?php echo $cb->assets_folder; ?>/media/various/cb-project-promo5.png" alt="Project 11 Promo">
                </a>
            </div>
            <div class="col-sm-6 col-md-3" data-category="webapp">
                <a class="img-link" href="be_pages_generic_project.php">
                    <img class="img-fluid img-thumb" src="<?php echo $cb->assets_folder; ?>/media/various/cb-project-promo3.png" alt="Project 12 Promo">
                </a>
            </div>
        </div>
        <!-- END Projects -->

        <!-- Quick Stats -->
        <!-- CountTo ([data-toggle="countTo"] is initialized in Helpers.coreAppearCountTo()) -->
        <!-- For more info and examples you can check out https://github.com/mhuggins/jquery-countTo -->
        <div class="bg-white push">
            <div class="row text-center">
                <div class="col-sm-4 py-30">
                    <div class="font-size-h1 font-w700 text-black" data-toggle="countTo" data-to="3">0</div>
                    <div class="font-w600 text-muted text-uppercase">Active</div>
                </div>
                <div class="col-sm-4 py-30">
                    <div class="font-size-h1 font-w700 text-black" data-toggle="countTo" data-to="12">0</div>
                    <div class="font-w600 text-muted text-uppercase">Projects</div>
                </div>
                <div class="col-sm-4 py-30">
                    <div class="font-size-h1 font-w700 text-black" data-toggle="countTo" data-to="9">0</div>
                    <div class="font-w600 text-muted text-uppercase">Clients</div>
                </div>
            </div>
        </div>
        <!-- END Quick Stats -->
    </div>
    <!-- END Project Filtering -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Helpers (Content Filtering helper) -->
<script>jQuery(function(){ Codebase.helpers('content-filter'); });</script>

<?php require 'inc/_global/views/footer_end.php'; ?>