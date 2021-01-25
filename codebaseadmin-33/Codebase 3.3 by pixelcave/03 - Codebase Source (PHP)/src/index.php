<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/landing/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-white bg-pattern" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/various/bg-pattern-inverse.png');">
    <div class="d-flex align-items-center">
        <div class="content content-full">
            <div class="row no-gutters w-100 py-100 overflow-hidden">
                <div class="col-md-5 py-30 d-flex align-items-center invisible" data-toggle="appear">
                    <div class="text-center text-md-left">
                        <span class="d-inline-block bg-body-light rounded-pill py-5 px-15 mb-15 font-w600">Version 3.3</span>
                        <h1 class="font-w600 font-size-h2 mb-20">
                            Next generation, multipurpose UI framework.
                        </h1>
                        <p class="font-size-lg nice-copy text-muted mb-30">
                            Codebase is a super flexible solution built with Bootstrap 4, ECMAScript 6 and Sass. Use it to save time and create all kinds of web applications with friendly and fast user interface.
                        </p>
                        <a class="btn btn-hero btn-alt-secondary" href="be_pages_dashboard.php">
                            <i class="fa fa-arrow-right text-muted mr-5"></i> Enter Dashboard
                        </a>
                    </div>
                </div>
                <div class="col-md-7 py-30 d-none d-md-flex align-items-md-center justify-content-md-end invisible" data-toggle="appear" data-class="animated fadeInRight">
                    <img class="img-fluid" src="<?php echo $cb->assets_folder; ?>/media/various/landing-promo-hero.png" srcset="<?php echo $cb->assets_folder; ?>/media/various/landing-promo-hero@2x.png 2x" alt="Hero Promo">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Key Features -->
<div class="bg-body-light overflow-hidden">
    <div class="content content-full">
    <div class="row no-gutters justify-content-center text-center nice-copy py-50">
        <div class="col-xl-4">
            <div class="w-100 py-30 invisible" data-toggle="appear" data-class="animated fadeInUp" data-offset="-150">
                <p>
                    <i class="fa fa-cubes fa-4x text-default"></i>
                </p>
                <h4 class="mb-5">
                    Powerful Layout
                </h4>
                <p class="text-muted mb-0">
                    Tons of predesigned pages.
                </p>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="w-100 py-30 invisible" data-toggle="appear" data-class="animated fadeInUp" data-offset="-150" data-timeout="150">
                <p>
                    <i class="fa fa-code fa-4x text-pulse"></i>
                </p>
                <h4 class="mb-5">
                    Laravel Starter Kit
                </h4>
                <p class="text-muted mb-0">
                    Super boost your Laravel based project.
                </p>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="w-100 py-30 invisible" data-toggle="appear" data-class="animated fadeInUp" data-offset="-150" data-timeout="300">
                <p>
                    <i class="fa fa-rocket fa-4x text-elegance"></i>
                </p>
                <h4 class="mb-5">
                    Bootstrap 4, Sass and ES6
                </h4>
                <p class="text-muted mb-0">
                    Only the latest tech under the hood.
                </p>
            </div>
        </div>
    </div>  
    </div>
</div>
<!-- END Key Features -->

<!-- Unlimited Dashboards -->
<div class="bg-white">
    <div class="content content-full">
        <div class="pt-100 pb-50">
            <div class="position-relative">
                <span class="text-back">01</span>
                <h2 class="font-w700 mb-10 text-center">    
                    Unlimited <span class="text-primary">Dashboards</span>
                </h2>
                <h3 class="h4 font-w400 text-muted text-center mb-50">
                    Let your imagination build your idea with Codebase.
                </h3>
            </div>
            <div class="row nice-copy my-10">
                <div class="col-md-4 py-20">
                    <a class="options-container push" href="be_pages_dashboard.php">
                        <img class="img-fluid options-item" src="<?php echo $cb->assets_folder; ?>/media/various/preview-db-default.png" alt="Dashboard Default">
                        <div class="options-overlay bg-white-op-90">
                            <div class="options-overlay-content h5 font-w700 text-uppercase">
                                <i class="fa fa-link fa-4x"></i>
                            </div>
                        </div>
                    </a>
                    <h4 class="font-size-xl font-w700 mb-10">
                        <span class="text-uppercase">Default</span>
                    </h4>
                    <p>
                        Codebase’s original dashboard design provides a clean, modern and minimal starting point for your web application.
                    </p>
                </div>
                <div class="col-md-4 py-20">
                    <a class="options-container push" href="db_classic.php">
                        <img class="img-fluid options-item" src="<?php echo $cb->assets_folder; ?>/media/various/preview-db-classic.png" alt="Dashboard Classic">
                        <div class="options-overlay bg-white-op-90">
                            <div class="options-overlay-content h5 font-w700 text-uppercase">
                                <i class="fa fa-link fa-4x"></i>
                            </div>
                        </div>
                    </a>
                    <h4 class="font-size-xl font-w700 mb-10">
                        <span class="text-uppercase">Classic</span>
                    </h4>
                    <p>
                        A classic and well tested approach for a project which is going to handle much data and needs all the space it can get.
                    </p>
                </div>
                <div class="col-md-4 py-20">
                    <a class="options-container push" href="db_clean.php">
                        <img class="img-fluid options-item" src="<?php echo $cb->assets_folder; ?>/media/various/preview-db-clean.png" alt="Dashboard Clean">
                        <div class="options-overlay bg-white-op-90">
                            <div class="options-overlay-content h5 font-w700 text-uppercase">
                                <i class="fa fa-link fa-4x"></i>
                            </div>
                        </div>
                    </a>
                    <h4 class="font-size-xl font-w700 mb-10">
                        <span class="text-uppercase">Clean</span>
                    </h4>
                    <p>
                        Clean and modern dashboard which enables you to create rich content and user driven experiences.
                    </p>
                </div>
                <div class="col-md-4 py-20">
                    <a class="options-container push" href="db_social.php">
                        <img class="img-fluid options-item" src="<?php echo $cb->assets_folder; ?>/media/various/preview-db-social.png" alt="Dashboard Social">
                        <div class="options-overlay bg-white-op-90">
                            <div class="options-overlay-content h5 font-w700 text-uppercase">
                                <i class="fa fa-link fa-4x"></i>
                            </div>
                        </div>
                    </a>
                    <h4 class="font-size-xl font-w700 mb-10">
                        <span class="text-uppercase">Social</span>
                    </h4>
                    <p>
                        Building a social dashboard shouldn’t be hard. It should be easy, so you could spend more time building your app.
                    </p>
                </div>
                <div class="col-md-4 py-20">
                    <a class="options-container push" href="db_corporate.php">
                        <img class="img-fluid options-item" src="<?php echo $cb->assets_folder; ?>/media/various/preview-db-corporate.png" alt="Dashboard Corporate">
                        <div class="options-overlay bg-white-op-90">
                            <div class="options-overlay-content h5 font-w700 text-uppercase">
                                <i class="fa fa-link fa-4x"></i>
                            </div>
                        </div>
                    </a>
                    <h4 class="font-size-xl font-w700 mb-10">
                        <span class="text-uppercase">Corporate</span>
                    </h4>
                    <p>
                        Corporate dashboard design that is modern, clean and provokes the credibility you want for your business.
                    </p>
                </div>
                <div class="col-md-4 py-20">
                    <a class="options-container push" href="db_minimal.php">
                        <img class="img-fluid options-item" src="<?php echo $cb->assets_folder; ?>/media/various/preview-db-minimal.png" alt="Dashboard Minimal">
                        <div class="options-overlay bg-white-op-90">
                            <div class="options-overlay-content h5 font-w700 text-uppercase">
                                <i class="fa fa-link fa-4x"></i>
                            </div>
                        </div>
                    </a>
                    <h4 class="font-size-xl font-w700 mb-10">
                        <span class="text-uppercase">Minimal</span>
                    </h4>
                    <p>
                        Super minimal design for you that you value simplicity and would like to incorporate into in your projects.
                    </p>
                </div>
                <div class="col-md-4 py-20">
                    <a class="options-container push" href="db_pop.php">
                        <img class="img-fluid options-item" src="<?php echo $cb->assets_folder; ?>/media/various/preview-db-pop.png" alt="Dashboard Pop">
                        <div class="options-overlay bg-white-op-90">
                            <div class="options-overlay-content h5 font-w700 text-uppercase">
                                <i class="fa fa-link fa-4x"></i>
                            </div>
                        </div>
                    </a>
                    <h4 class="font-size-xl font-w700 mb-10">
                        <span class="text-uppercase">Pop</span>
                    </h4>
                    <p>
                        Material inspired design which give depth to your block elements and changes the way interact with your dashboard.
                    </p>
                </div>
                <div class="col-md-4 py-20">
                    <a class="options-container push" href="db_dark.php">
                        <img class="img-fluid options-item" src="<?php echo $cb->assets_folder; ?>/media/various/preview-db-dark.png" alt="Dashboard Dark">
                        <div class="options-overlay bg-white-op-90">
                            <div class="options-overlay-content h5 font-w700 text-uppercase">
                                <i class="fa fa-link fa-4x"></i>
                            </div>
                        </div>
                    </a>
                    <h4 class="font-size-xl font-w700 mb-10">
                        <span class="text-uppercase">Dark</span>
                    </h4>
                    <p>
                        A complete dark dashboard showcasing the power of utility CSS classes and how you can use them to create what you want.
                    </p>
                </div>
                <div class="col-md-4 py-20">
                    <a class="options-container push" href="db_medical.php">
                        <img class="img-fluid options-item" src="<?php echo $cb->assets_folder; ?>/media/various/preview-db-medical.png" alt="Dashboard Medical">
                        <div class="options-overlay bg-white-op-90">
                            <div class="options-overlay-content h5 font-w700 text-uppercase">
                                <i class="fa fa-link fa-4x"></i>
                            </div>
                        </div>
                    </a>
                    <h4 class="font-size-xl font-w700 mb-10">
                        <span class="text-uppercase">Medical</span>
                    </h4>
                    <p>A perfect starting point for your medical web application showcasing a doctor’s overview dashboard.</p>
                </div>
            </div>
            <div class="text-center">
                <a class="btn btn-hero btn-noborder btn-alt-secondary min-width-175" href="be_pages_dashboard2.php">
                    <i class="si si-rocket mr-5"></i> Explore More Dashboards
                </a>
            </div>
        </div>
    </div>
</div>
<!-- END Unlimited Dashboards -->

<!-- Page Packs -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="pt-100 pb-50">
            <div class="position-relative">
                <span class="text-back">02</span>
                <h2 class="font-w700 text-center mb-10">
                    Page <span class="text-primary">Packs</span>
                </h2>
                <h3 class="h4 font-w400 text-muted text-center mb-50">
                    Just a glimpse of the ready made pages included to rocket start your project.
                </h3>
            </div>
            <div class="row nice-copy my-10">
                <div class="col-md-4 py-20">
                    <a class="options-container push" href="be_pages_crypto_dashboard.php">
                        <img class="img-fluid options-item" src="<?php echo $cb->assets_folder; ?>/media/various/preview-page-pack-crypto.png" alt="Page Pack Crypto">
                        <div class="options-overlay bg-white-op-90">
                            <div class="options-overlay-content h5 font-w700 text-uppercase">
                                <i class="fa fa-link fa-4x"></i>
                            </div>
                        </div>
                    </a>
                    <h4 class="font-size-xl font-w700 text-uppercase mb-10">Crypto</h4>
                    <p>Cryptocurrency exchange pages for your blockchain project.</p>
                </div>
                <div class="col-md-4 py-20">
                    <a class="options-container push" href="be_pages_ecom_dashboard.php">
                        <img class="img-fluid options-item" src="<?php echo $cb->assets_folder; ?>/media/various/preview-page-pack-ecommerce.png" alt="Page Pack e-Commerce">
                        <div class="options-overlay bg-white-op-90">
                            <div class="options-overlay-content h5 font-w700 text-uppercase">
                                <i class="fa fa-link fa-4x"></i>
                            </div>
                        </div>
                    </a>
                    <h4 class="font-size-xl font-w700 text-uppercase mb-10">e-Commerce</h4>
                    <p>Products and sales management pages for your e-commerce dashboards.</p>
                </div>
                <div class="col-md-4 py-20">
                    <a class="options-container push" href="be_pages_elearning_courses.php">
                        <img class="img-fluid options-item" src="<?php echo $cb->assets_folder; ?>/media/various/preview-page-pack-elearning.png" alt="Page Pack e-Learning">
                        <div class="options-overlay bg-white-op-90">
                            <div class="options-overlay-content h5 font-w700 text-uppercase">
                                <i class="fa fa-link fa-4x"></i>
                            </div>
                        </div>
                    </a>
                    <h4 class="font-size-xl font-w700 text-uppercase mb-10">e-Learning</h4>
                    <p>Start building your e-learning platform easily with the included pages.</p>
                </div>
                <div class="col-md-4 py-20">
                    <a class="options-container push" href="be_pages_forum_categories.php">
                        <img class="img-fluid options-item" src="<?php echo $cb->assets_folder; ?>/media/various/preview-page-pack-forum.png" alt="Page Pack Forum">
                        <div class="options-overlay bg-white-op-90">
                            <div class="options-overlay-content h5 font-w700 text-uppercase">
                                <i class="fa fa-link fa-4x"></i>
                            </div>
                        </div>
                    </a>
                    <h4 class="font-size-xl font-w700 text-uppercase mb-10">Forum</h4>
                    <p>Perfect if you are building a community or support section in your app.</p>
                </div>
                <div class="col-md-4 py-20">
                    <a class="options-container push" href="be_pages_auth_all.php">
                        <img class="img-fluid options-item" src="<?php echo $cb->assets_folder; ?>/media/various/preview-page-pack-auth.png" alt="Page Pack Authentication">
                        <div class="options-overlay bg-white-op-90">
                            <div class="options-overlay-content h5 font-w700 text-uppercase">
                                <i class="fa fa-link fa-4x"></i>
                            </div>
                        </div>
                    </a>
                    <h4 class="font-size-xl font-w700 text-uppercase mb-10">Authentication</h4>
                    <p>Tons of options to meet every possible need when designing your authentication sections.</p>
                </div>
                <div class="col-md-4 py-20">
                    <a class="options-container push" href="be_pages_error_all.php">
                        <img class="img-fluid options-item" src="<?php echo $cb->assets_folder; ?>/media/various/preview-page-pack-error.png" alt="Page Pack Error">
                        <div class="options-overlay bg-white-op-90">
                            <div class="options-overlay-content h5 font-w700 text-uppercase">
                                <i class="fa fa-link fa-4x"></i>
                            </div>
                        </div>
                    </a>
                    <h4 class="font-size-xl font-w700 text-uppercase mb-10">Error</h4>
                    <p>Clean error pages to incorporate in case of a server or an app failure.</p>
                </div>
            </div>
            <div class="text-center">
                <a class="btn btn-hero btn-noborder btn-alt-secondary min-width-175" href="be_pages_generic_todo.php">
                    <i class="si si-rocket mr-5"></i> Explore More Pages
                </a>
            </div>
        </div>
    </div>
</div>
<!-- END Page Packs -->

<!-- Feature: Powerful Layout -->
<div class="bg-white">
    <div class="content">
        <div class="pt-100 pb-50">
            <div class="position-relative">
                <span class="text-back">03</span>
                <h2 class="font-w700 text-center mb-10">
                    Powerful <span class="text-primary">Layout</span>
                </h2>
                <h3 class="h4 font-w400 text-muted text-center mb-50">
                    One super flexible and reusable layout.
                </h3>
            </div>
            <div class="row nice-copy my-10">
                <div class="col-md-4 py-20">
                    <h4 class="font-size-xl font-w700 text-uppercase mb-10">
                        <i class="fa fa-circle-o text-elegance mr-5"></i> Unity
                    </h4>
                    <p class="mb-0">Codebase’s layout is really unique, adaptive and flexible. It enables you to create all kinds of pages that look great and work seamlessly across mobile and desktop devices.</p>
                </div>
                <div class="col-md-4 py-20">
                    <h4 class="font-size-xl font-w700 text-uppercase mb-10">
                        <i class="fa fa-refresh text-earth mr-5"></i> Reusability
                    </h4>
                    <p class="mb-0">It is the core principle we followed to create a layout that can work for different purposes with the minimum cost. That means fast and responsive layouts with limitless possibilities.</p>
                </div>
                <div class="col-md-4 py-20">
                    <h4 class="font-size-xl font-w700 text-uppercase mb-10">
                        <i class="fa fa-bolt text-danger mr-5"></i> Flexibility
                    </h4>
                    <p class="mb-0">It is based on various layout & UI components which work together harmoniously to help you create what you imagine. Lots of boilerplate pages to help you started are included.</p>
                </div>
            </div>
        </div>
        <div class="row no-gutters pull-b text-center overflow-hidden">
            <div class="col-4 invisible" data-toggle="appear" data-class="animated fadeInUp" data-offset="-200">
                <a class="options-container" href="be_pages_dashboard.php">
                    <img class="img-fluid options-item" src="<?php echo $cb->assets_folder; ?>/media/various/landing-promo-layout-backend.png" srcset="<?php echo $cb->assets_folder; ?>/media/various/landing-promo-layout-backend@2x.png 2x" alt="Backend Promo">
                    <div class="options-overlay bg-white">
                        <div class="options-overlay-content">
                            <h3 class="h5 font-w700 text-uppercase mb-5">
                                Explore <span class="text-primary">Backend</span>
                            </h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4 invisible" data-toggle="appear" data-class="animated fadeInUp" data-offset="-200" data-timeout="250">
                <a class="options-container" href="db_classic.php">
                    <img class="img-fluid options-item" src="<?php echo $cb->assets_folder; ?>/media/various/landing-promo-layout-classic-dashboard.png" srcset="<?php echo $cb->assets_folder; ?>/media/various/landing-promo-layout-classic-dashboard@2x.png 2x" alt="Classic Dashboard Promo">
                    <div class="options-overlay bg-white">
                        <div class="options-overlay-content">
                            <h3 class="h5 font-w700 text-uppercase mb-5">
                                Explore <span class="text-primary">Classic Dashboard</span>
                            </h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4 invisible" data-toggle="appear" data-class="animated fadeInUp" data-offset="-200" data-timeout="500">
                <a class="options-container" href="be_layout_api.php">
                    <img class="img-fluid options-item" src="<?php echo $cb->assets_folder; ?>/media/various/landing-promo-layout-api.png" srcset="<?php echo $cb->assets_folder; ?>/media/various/landing-promo-layout-api@2x.png 2x" alt="Layout API Promo">
                    <div class="options-overlay bg-white">
                        <div class="options-overlay-content">
                            <h3 class="h5 font-w700 text-uppercase mb-5">
                                Explore <span class="text-primary">Layout</span>
                            </h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- END Feature: Powerful Layout -->

<!-- Feature: Bootstrap 4 -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="pt-100 pb-50">
            <div class="position-relative">
                <span class="text-back">04</span>
                <h2 class="font-w700 text-center mb-10">
                    Bootstrap <span class="text-primary">4</span>
                </h2>
                <h3 class="h4 font-w400 text-muted text-center mb-50">
                    Based on the new version of the most popular HTML, CSS, and JS framework.
                </h3>
            </div>
            <div class="row nice-copy my-10">
                <div class="col-md-4 py-20">
                    <h4 class="font-size-xl font-w700 text-uppercase mb-10">
                        <i class="fa fa-leaf text-success mr-5"></i> Fresh
                    </h4>
                    <p class="mb-0">The newest Bootstrap version is a major rewrite of almost the entire project and comes packed with lots of changes and features that make it the coolest release till now.</p>
                </div>
                <div class="col-md-4 py-20">
                    <h4 class="font-size-xl font-w700 text-uppercase mb-10">
                        <i class="fa fa-expand text-warning mr-5"></i> Flexbox
                    </h4>
                    <p class="mb-0">Flexbox is now the default layout module used throughout the Bootstrap framework. Due to this feature, creating complex layouts and aligning elements is now easier than ever.</p>
                </div>
                <div class="col-md-4 py-20">
                    <h4 class="font-size-xl font-w700 text-uppercase mb-10">
                        <i class="fa fa-rocket text-corporate mr-5"></i> Features
                    </h4>
                    <p class="mb-0">From Sass to Typography, from new UI Components to the revamped Grid, Bootstrap 4 features lots of new additions and improvements under the hood.</p>
                </div>
            </div>
        </div>
        <div class="row no-gutters pull-b text-center overflow-hidden">
            <div class="col-4 invisible" data-toggle="appear" data-class="animated fadeInUp" data-offset="-200">
                <a class="options-container" href="be_ui_grid.php">
                    <img class="img-fluid options-item" src="<?php echo $cb->assets_folder; ?>/media/various/landing-promo-bootstrap4-grid.png" srcset="<?php echo $cb->assets_folder; ?>/media/various/landing-promo-bootstrap4-grid@2x.png 2x" alt="Bootstrap 4 Grid Promo">
                    <div class="options-overlay bg-body-light">
                        <div class="options-overlay-content">
                            <h3 class="h5 font-w700 text-uppercase mb-5">
                                Explore
                                <span class="text-primary">Grid</span>
                            </h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4 invisible" data-toggle="appear" data-class="animated fadeInUp" data-offset="-200" data-timeout="250">
                <a class="options-container" href="be_ui_typography.php">
                    <img class="img-fluid options-item" src="<?php echo $cb->assets_folder; ?>/media/various/landing-promo-bootstrap4-typography.png" srcset="<?php echo $cb->assets_folder; ?>/media/various/landing-promo-bootstrap4-typography@2x.png 2x" alt="Bootstrap 4 Typography Promo">
                    <div class="options-overlay bg-body-light">
                        <div class="options-overlay-content">
                            <h3 class="h5 font-w700 text-uppercase mb-5">
                                Explore
                                <span class="text-primary">Typography</span>
                            </h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4 invisible" data-toggle="appear" data-class="animated fadeInUp" data-offset="-200" data-timeout="500">
                <a class="options-container" href="be_ui_buttons.php">
                    <img class="img-fluid options-item" src="<?php echo $cb->assets_folder; ?>/media/various/landing-promo-bootstrap4-buttons.png" srcset="<?php echo $cb->assets_folder; ?>/media/various/landing-promo-bootstrap4-buttons@2x.png 2x" alt="Bootstrap 4 Buttons Promo">
                    <div class="options-overlay bg-body-light">
                        <div class="options-overlay-content">
                            <h3 class="h5 font-w700 text-uppercase mb-5">
                                Explore
                                <span class="text-primary">Buttons</span>
                            </h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- END Feature: Bootstrap 4 -->

<!-- Feature: Smart Tools -->
<div class="bg-white">
    <div class="content content-full">
        <div class="pt-100 pb-50">
            <div class="position-relative">
                <span class="text-back">05</span>
                <h2 class="font-w700 text-center mb-10">
                    Smart <span class="text-primary">Tools</span>
                </h2>
                <h3 class="h4 font-w400 text-muted text-center mb-50">
                    Make your life easier and work more efficiently.
                </h3>
            </div>
            <div class="row nice-copy my-10">
                <div class="col-md-4 py-20">
                    <h4 class="font-size-xl font-w700 text-uppercase mb-10">
                        <i class="fa fa-cogs text-elegance mr-5"></i> Preprocessor
                    </h4>
                    <p class="mb-0">Codebase CSS framework was built with Sass following a completely modular approach. It is easy to understand, customize and extend to fulfill your needs or project’s requirements.</p>
                </div>
                <div class="col-md-4 py-20">
                    <h4 class="font-size-xl font-w700 text-uppercase mb-10">
                        <i class="fa fa-terminal text-info mr-5"></i> Live Tasks
                    </h4>
                    <p class="mb-0">Smart tasks will serve your project, auto refresh on file changes, live compile your ES6 to ES5 and Sass to CSS while you work (also auto adding any required browser prefixes).</p>
                </div>
                <div class="col-md-4 py-20">
                    <h4 class="font-size-xl font-w700 text-uppercase mb-10">
                        <i class="fa fa-dot-circle-o text-danger mr-5"></i> Build
                    </h4>
                    <p class="mb-0">Time-saving task that will build a custom, minimized and production ready Codebase framework for you. Create your own variation based on your project.</p>
                </div>
            </div>
        </div>
        <div class="row no-gutters justify-content-center pull-b text-center overflow-hidden">
            <div class="col-sm-6 invisible" data-toggle="appear" data-class="animated zoomIn">
                <img class="img-fluid" src="<?php echo $cb->assets_folder; ?>/media/various/landing-promo-smart-tools.png" srcset="<?php echo $cb->assets_folder; ?>/media/various/landing-promo-smart-tools@2x.png 2x" alt="Smart Tools Promo">
            </div>
        </div>
    </div>
</div>
<!-- END Feature: Smart Tools -->

<!-- Feature: Developer Minded -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="pt-100 pb-50">
            <div class="position-relative">
                <span class="text-back">06</span>
                <h2 class="font-w700 text-center mb-10">
                    Developer <span class="text-primary">Minded</span>
                </h2>
                <h3 class="h4 font-w400 text-muted text-center mb-50">
                    We built Codebase based on your valuable feedback.
                </h3>
            </div>
            <div class="row nice-copy my-10">
                <div class="col-md-4 py-20">
                    <h4 class="font-size-xl font-w700 text-uppercase mb-10">
                        <i class="fa fa-bullhorn text-danger mr-5"></i> Feedback
                    </h4>
                    <p class="mb-0">We get to know you better by continuously listening to your feedback. This way, we learn where to focus our efforts and build/improve quality products to better match your needs.</p>
                </div>
                <div class="col-md-4 py-20">
                    <h4 class="font-size-xl font-w700 text-uppercase mb-10">
                        <i class="fa fa-book text-info mr-5"></i> Documentation
                    </h4>
                    <p class="mb-0">In the package, you will find the Codebase Docs which can become a valuable tool in getting familiar with the overall structure and helping you start your project faster.</p>
                </div>
                <div class="col-md-4 py-20">
                    <h4 class="font-size-xl font-w700 text-uppercase mb-10">
                        <i class="fa fa-code text-elegance mr-5"></i> Clean Code
                    </h4>
                    <p class="mb-0">Working with someone else’s code can become uncomfortable and make you unproductive. We strive to ensure that your experience with Codebase will be the exact opposite.</p>
                </div>
            </div>
        </div>
        <div class="row no-gutters pull-b text-center overflow-hidden">
            <div class="col-4 invisible" data-toggle="appear" data-class="animated fadeInUp" data-offset="-200">
                <img class="img-fluid" src="<?php echo $cb->assets_folder; ?>/media/various/landing-promo-developer-minded-php.png" srcset="<?php echo $cb->assets_folder; ?>/media/various/landing-promo-developer-minded-php@2x.png 2x" alt="Developer Minded PHP Promo">
            </div>
            <div class="col-4 invisible" data-toggle="appear" data-class="animated fadeInUp" data-offset="-200" data-timeout="250">
                <img class="img-fluid" src="<?php echo $cb->assets_folder; ?>/media/various/landing-promo-developer-minded-docs.png" srcset="<?php echo $cb->assets_folder; ?>/media/various/landing-promo-developer-minded-docs@2x.png 2x" alt="Developer Minded Docs Promo">
            </div>
            <div class="col-4 invisible" data-toggle="appear" data-class="animated fadeInUp" data-offset="-200" data-timeout="500">
                <img class="img-fluid" src="<?php echo $cb->assets_folder; ?>/media/various/landing-promo-developer-minded-html.png" srcset="<?php echo $cb->assets_folder; ?>/media/various/landing-promo-developer-minded-html@2x.png 2x" alt="Developer Minded HTML Promo">
            </div>
        </div>
    </div>
</div>
<!-- END Feature: Developer Minded -->

<!-- Feature: Handcrafted Design -->
<div class="bg-white">
    <div class="content content-full">
        <div class="pt-100 pb-50">
            <div class="position-relative">
                <span class="text-back">07</span>
                <h2 class="font-w700 text-center mb-10">
                    Handcrafted <span class="text-primary">Design</span>
                </h2>
                <h3 class="h4 font-w400 text-muted text-center mb-50">
                    It’s not only about quantity, it’s about quality first and foremost.
                </h3>
            </div>
            <div class="row nice-copy py-10">
                <div class="col-md-4 py-20">
                    <h4 class="font-size-xl font-w700 text-uppercase mb-10">
                        <i class="fa fa-heart text-pulse mr-5"></i> Passion
                    </h4>
                    <p class="mb-0">We are passionate with what we do and love crafting products that can make your life easier and help you succeed. We pay attention to small details and always aiming for the best.</p>
                </div>
                <div class="col-md-4 py-20">
                    <h4 class="font-size-xl font-w700 text-uppercase mb-10">
                        <i class="fa fa-compress text-corporate mr-5"></i> Commitment
                    </h4>
                    <p class="mb-0">We are committed to our work and stand by our projects. Our aim is to improve them in every update and offer the most full-featured packages with the smallest possible footprint.</p>
                </div>
                <div class="col-md-4 py-20">
                    <h4 class="font-size-xl font-w700 text-uppercase mb-10">
                        <i class="fa fa-circle-thin text-gray mr-5"></i> Less is More
                    </h4>
                    <p class="mb-0">We believe that design should be invisible and enhance the user experience, not get in the way. This gives room for your content to breath and attracts your users’ attention to the right place.</p>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-4 col-md-2 py-30 invisible" data-toggle="appear" data-class="animated bounceIn">
                <div class="item item-circle mx-auto">
                    <i class="si si-heart text-pulse"></i>
                </div>
                <div class="font-w600">Passion</div>
            </div>
            <div class="col-4 col-md-2 py-30 invisible" data-toggle="appear" data-class="animated bounceIn" data-timeout="150">
                <div class="item item-circle mx-auto">
                    <i class="si si-chemistry text-elegance"></i>
                </div>
                <div class="font-w600">Creativity</div>
            </div>
            <div class="col-4 col-md-2 py-30 invisible" data-toggle="appear" data-class="animated bounceIn" data-timeout="300">
                <div class="item item-circle mx-auto">
                    <i class="si si-vector text-default"></i>
                </div>
                <div class="font-w600">Design</div>
            </div>
            <div class="col-4 col-md-2 py-30 invisible" data-toggle="appear" data-class="animated bounceIn" data-timeout="450">
                <div class="item item-circle mx-auto">
                    <i class="si si-badge text-warning"></i>
                </div>
                <div class="font-w600">Quality</div>
            </div>
            <div class="col-4 col-md-2 py-30 invisible" data-toggle="appear" data-class="animated bounceIn" data-timeout="600">
                <div class="item item-circle mx-auto">
                    <i class="si si-energy text-pulse"></i>
                </div>
                <div class="font-w600">Simplicity</div>
            </div>
            <div class="col-4 col-md-2 py-30 invisible" data-toggle="appear" data-class="animated bounceIn" data-timeout="750">
                <div class="item item-circle mx-auto">
                    <i class="si si-compass text-success"></i>
                </div>
                <div class="font-w600">Motivation</div>
            </div>
        </div>
    </div>
</div>
<!-- END Feature: Handcrafted Design -->

<!-- Features -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="pt-100 pb-50">
            <div class="position-relative">
                <span class="text-back">Explore it</span>
                <h2 class="font-w700 text-center mb-10">
                    Feature <span class="text-primary">Rich</span>
                </h2>
                <h3 class="h4 font-w400 text-muted text-center mb-50">
                    Extra care and thought were put into each and every one.
                </h3>
            </div>
            <div class="row nice-copy py-10">
                <div class="col-md-4 py-20">
                    <h4 class="font-size-lg font-w700 text-uppercase mb-10">HTML5 &amp; CSS3</h4>
                    <p class="mb-0">Using the latest technologies, following the best practices. W3C valid code.</p>
                </div>
                <div class="col-md-4 py-20">
                    <h4 class="font-size-lg font-w700 text-uppercase mb-10">Fully Responsive</h4>
                    <p class="mb-0">User Interface auto adjusts and looks great to any screen size.</p>
                </div>
                <div class="col-md-4 py-20">
                    <h4 class="font-size-lg font-w700 text-uppercase mb-10">Retina Ready</h4>
                    <p class="mb-0">User Interface looks crispy clear on high resolution screens.</p>
                </div>
                <div class="col-md-4 py-20">
                    <h4 class="font-size-lg font-w700 text-uppercase mb-10">Cross Browser Support</h4>
                    <p class="mb-0">It plays nice with all modern browsers including IE (10 and up).</p>
                </div>
                <div class="col-md-4 py-20">
                    <h4 class="font-size-lg font-w700 text-uppercase mb-10">Fast &amp; Lightweight</h4>
                    <p class="mb-0">It is created to be as fast and lightweight as possible. You can use only what you need.</p>
                </div>
                <div class="col-md-4 py-20">
                    <h4 class="font-size-lg font-w700 text-uppercase mb-10">Custom JS APIs</h4>
                    <p class="mb-0">Powerful JavaScript APIs are included. Layout or blocks manipulation is just a JS call away.</p>
                </div>
                <div class="col-md-4 py-20">
                    <h4 class="font-size-lg font-w700 text-uppercase mb-10">Get Started Version</h4>
                    <p class="mb-0">Simple version with boilerplate pages to help you rocket start your project.</p>
                </div>
                <div class="col-md-4 py-20">
                    <h4 class="font-size-lg font-w700 text-uppercase mb-10">PHP Version</h4>
                    <p class="mb-0">A PHP version is included to assist you with your custom PHP project.</p>
                </div>
                <div class="col-md-4 py-20">
                    <h4 class="font-size-lg font-w700 text-uppercase mb-10">HTML Version</h4>
                    <p class="mb-0">The generic and abstract version which can be used with any framework or language.</p>
                </div>
                <div class="col-md-4 py-20">
                    <h4 class="font-size-lg font-w700 text-uppercase mb-10">RTL Support</h4>
                    <p class="mb-0">Boilerplate RTL pages are also included in 'Get Started' version providing a great starting point.</p>
                </div>
                <div class="col-md-4 py-20">
                    <h4 class="font-size-lg font-w700 text-uppercase mb-10">Components</h4>
                    <p class="mb-0">Carefully picked and integrated to enhance and enrich your project with great functionality.</p>
                </div>
                <div class="col-md-4 py-20">
                    <h4 class="font-size-lg font-w700 text-uppercase mb-10">6 Inspiring Color Themes</h4>
                    <p class="mb-0">Carefully chosen and integrated color themes to choose from for your website/dashboard.</p>
                </div>
                <div class="col-md-4 py-20">
                    <h4 class="font-size-lg font-w700 text-uppercase mb-10">1100+ Font Based Icons</h4>
                    <p class="mb-0">With so many unique icons included in Codebase, you don’t have to worry about running out.</p>
                </div>
                <div class="col-md-4 py-20">
                    <h4 class="font-size-lg font-w700 text-uppercase mb-10">Super-Fast UI</h4>
                    <p class="mb-0">GPU powered sidebar animations and smart CSS styles will ensure a great experience.</p>
                </div>
                <div class="col-md-4 py-20">
                    <h4 class="font-size-lg font-w700 text-uppercase mb-10">Flexible Side Areas</h4>
                    <p class="mb-0">Multiple available layouts and completely adjustable by using the powerful layout API.</p>
                </div>
                <div class="col-md-4 py-20">
                    <h4 class="font-size-lg font-w700 text-uppercase mb-10">Designed Pages</h4>
                    <p class="mb-0">All kinds of pages, carefully designed, to get inspired and create your own.</p>
                </div>
                <div class="col-md-4 py-20">
                    <h4 class="font-size-lg font-w700 text-uppercase mb-10">Gulp Tasks</h4>
                    <p class="mb-0">Time-saving tasks that will be a valuable tool to your workflow.</p>
                </div>
                <div class="col-md-4 py-20">
                    <h4 class="font-size-lg font-w700 text-uppercase mb-10">Easy Updating</h4>
                    <p class="mb-0">Updating a template can be hard but if you follow the instructions you will be just a copy-paste away.</p>
                </div>
                <div class="col-md-4 py-20">
                    <h4 class="font-size-lg font-w700 text-uppercase mb-10">Free Updates</h4>
                    <p class="mb-0">All updates are free for existing customers to download. Great new features at no extra cost.</p>
                </div>
                <div class="col-md-4 py-20">
                    <h4 class="font-size-lg font-w700 text-uppercase mb-10">Support</h4>
                    <p class="mb-0">By purchasing a license, you are eligible to email support. We are here to help!</p>
                </div>
                <div class="col-md-4 py-20 text-center text-md-left">
                    <h4 class="font-size-lg font-w700 text-uppercase mb-10">Many Many More..</h4>
                    <a class="btn btn-hero btn-sm btn-alt-secondary" href="be_pages_dashboard.php">
                        <i class="fa fa-external-link-square mr-5"></i> Explore Codebase
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Features -->

<!-- Call to Action -->
<div class="bg-white">
    <div class="content content-full text-center overflow-hidden">
        <div class="py-100">
            <h2 class="font-w700 mb-10">
                Crafted with <i class="fa fa-heart text-danger"></i> by <a class="link-effect" href="https://1.envato.market/ydb">pixelcave</a>
            </h2>
            <h3 class="h4 font-w400 text-muted mb-50">Passionate web design and development with over 12.000 customers worldwide.</h3>
            <a class="btn btn-hero btn-lg btn-noborder btn-alt-success mb-10 invisible" data-toggle="appear" data-class="animated zoomIn" href="https://1.envato.market/95j">
                <i class="fa fa-shopping-bag mr-10"></i> Purchase Codebase
            </a>
        </div>
    </div>
</div>
<!-- END Call to Action -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
