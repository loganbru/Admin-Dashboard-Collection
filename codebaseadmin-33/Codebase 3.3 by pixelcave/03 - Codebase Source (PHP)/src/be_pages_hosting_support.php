<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <!-- Hero -->
    <div class="block block-rounded">
        <div class="block-content block-content-full bg-pattern" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/various/bg-pattern-inverse.png');">
            <div class="py-20 text-center">
                <h2 class="font-w700 text-black mb-10">
                    Hosting Support
                </h2>
                <h3 class="h5 text-muted">
                    Start your search here
                </h3>
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-6">
                        <form action="be_pages_hosting_support.php" method="POST">
                            <div class="input-group input-group-lg">
                                <input type="text" class="form-control" placeholder="Search Knowledge Base..">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-secondary">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- General Topics -->
    <h2 class="h4 font-w300 mt-50">General Topics</h2>
    <div class="row row-deck">
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-pop" href="javascript:void(0)">
                <div class="block-content block-content-full text-center">
                    <div class="p-20 mb-5">
                        <i class="fa fa-3x fa-rocket text-gray"></i>
                    </div>
                    <p class="font-size-lg font-w600 mb-0">
                        Getting Started
                    </p>
                    <p class="font-size-sm font-w600 text-muted mb-0">
                        7 Articles
                    </p>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-pop" href="javascript:void(0)">
                <div class="block-content block-content-full text-center">
                    <div class="p-20 mb-5">
                        <i class="fa fa-3x fa-power-off text-gray"></i>
                    </div>
                    <p class="font-size-lg font-w600 mb-0">
                        General Hosting Topics
                    </p>
                    <p class="font-size-sm font-w600 text-muted mb-0">
                        18 Articles
                    </p>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-pop" href="javascript:void(0)">
                <div class="block-content block-content-full text-center">
                    <div class="p-20 mb-5">
                        <i class="fa fa-3x fa-question text-gray"></i>
                    </div>
                    <p class="font-size-lg font-w600 mb-0">
                        FAQs
                    </p>
                    <p class="font-size-sm font-w600 text-muted mb-0">
                        25 Articles
                    </p>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-pop" href="javascript:void(0)">
                <div class="block-content block-content-full text-center">
                    <div class="p-20 mb-5">
                        <i class="fa fa-3x fa-user-circle text-gray"></i>
                    </div>
                    <p class="font-size-lg font-w600 mb-0">
                        Account Management
                    </p>
                    <p class="font-size-sm font-w600 text-muted mb-0">
                        6 Articles
                    </p>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-pop" href="javascript:void(0)">
                <div class="block-content block-content-full text-center">
                    <div class="p-20 mb-5">
                        <i class="fa fa-3x fa-globe text-gray"></i>
                    </div>
                    <p class="font-size-lg font-w600 mb-0">
                        DNS
                    </p>
                    <p class="font-size-sm font-w600 text-muted mb-0">
                        9 Articles
                    </p>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-pop" href="javascript:void(0)">
                <div class="block-content block-content-full text-center">
                    <div class="p-20 mb-5">
                        <i class="fa fa-3x fa-server text-gray"></i>
                    </div>
                    <p class="font-size-lg font-w600 mb-0">
                        Hosting Plans
                    </p>
                    <p class="font-size-sm font-w600 text-muted mb-0">
                        3 Articles
                    </p>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-pop" href="javascript:void(0)">
                <div class="block-content block-content-full text-center">
                    <div class="p-20 mb-5">
                        <i class="fa fa-3x fa-code text-gray"></i>
                    </div>
                    <p class="font-size-lg font-w600 mb-0">
                        PHP
                    </p>
                    <p class="font-size-sm font-w600 text-muted mb-0">
                        37 Articles
                    </p>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-pop" href="javascript:void(0)">
                <div class="block-content block-content-full text-center">
                    <div class="p-20 mb-5">
                        <i class="fa fa-3x fa-lock text-gray"></i>
                    </div>
                    <p class="font-size-lg font-w600 mb-0">
                        SSl certificates
                    </p>
                    <p class="font-size-sm font-w600 text-muted mb-0">
                        8 Articles
                    </p>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-pop" href="javascript:void(0)">
                <div class="block-content block-content-full text-center">
                    <div class="p-20 mb-5">
                        <i class="fa fa-3x fa-user-secret text-gray"></i>
                    </div>
                    <p class="font-size-lg font-w600 mb-0">
                        Security/Policies
                    </p>
                    <p class="font-size-sm font-w600 text-muted mb-0">
                        12 Articles
                    </p>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-pop" href="javascript:void(0)">
                <div class="block-content block-content-full text-center">
                    <div class="p-20 mb-5">
                        <i class="fa fa-3x fa-wrench text-gray"></i>
                    </div>
                    <p class="font-size-lg font-w600 mb-0">
                        Troubleshooting
                    </p>
                    <p class="font-size-sm font-w600 text-muted mb-0">
                        11 Articles
                    </p>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-pop" href="javascript:void(0)">
                <div class="block-content block-content-full text-center">
                    <div class="p-20 mb-5">
                        <i class="fa fa-3x fa-cogs text-gray"></i>
                    </div>
                    <p class="font-size-lg font-w600 mb-0">
                        Customization
                    </p>
                    <p class="font-size-sm font-w600 text-muted mb-0">
                        19 Articles
                    </p>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-pop" href="javascript:void(0)">
                <div class="block-content block-content-full text-center">
                    <div class="p-20 mb-5">
                        <i class="fa fa-3x fa-bullhorn text-gray"></i>
                    </div>
                    <p class="font-size-lg font-w600 mb-0">
                        Announcements
                    </p>
                    <p class="font-size-sm font-w600 text-muted mb-0">
                        45 Articles
                    </p>
                </div>
            </a>
        </div>
    </div>
    <!-- END General Topics -->

    <!-- Product Support -->
    <h2 class="h4 font-w300 mt-50">Product Support</h2>
    <div class="row row-deck">
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-pop" href="javascript:void(0)">
                <div class="block-content block-content-full text-center">
                    <div class="p-20 mb-5">
                        <i class="fa fa-3x fa-server text-gray"></i>
                    </div>
                    <p class="font-size-lg font-w600 mb-0">
                        Dedicated Hosting
                    </p>
                    <p class="font-size-sm font-w600 text-muted mb-0">
                        31 Articles
                    </p>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-pop" href="javascript:void(0)">
                <div class="block-content block-content-full text-center">
                    <div class="p-20 mb-5">
                        <i class="fa fa-3x fa-server text-gray"></i>
                    </div>
                    <p class="font-size-lg font-w600 mb-0">
                        Shared Hosting
                    </p>
                    <p class="font-size-sm font-w600 text-muted mb-0">
                        29 Articles
                    </p>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-pop" href="javascript:void(0)">
                <div class="block-content block-content-full text-center">
                    <div class="p-20 mb-5">
                        <i class="fa fa-3x fa-server text-gray"></i>
                    </div>
                    <p class="font-size-lg font-w600 mb-0">
                        VPS Hosting
                    </p>
                    <p class="font-size-sm font-w600 text-muted mb-0">
                        28 Articles
                    </p>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-pop" href="javascript:void(0)">
                <div class="block-content block-content-full text-center">
                    <div class="p-20 mb-5">
                        <i class="fa fa-3x fa-wordpress text-gray"></i>
                    </div>
                    <p class="font-size-lg font-w600 mb-0">
                        WordPress
                    </p>
                    <p class="font-size-sm font-w600 text-muted mb-0">
                        46 Articles
                    </p>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-pop" href="javascript:void(0)">
                <div class="block-content block-content-full text-center">
                    <div class="p-20 mb-5">
                        <i class="fa fa-3x fa-envelope-open text-gray"></i>
                    </div>
                    <p class="font-size-lg font-w600 mb-0">
                        Email
                    </p>
                    <p class="font-size-sm font-w600 text-muted mb-0">
                        7 Articles
                    </p>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-pop" href="javascript:void(0)">
                <div class="block-content block-content-full text-center">
                    <div class="p-20 mb-5">
                        <i class="fa fa-3x fa-database text-gray"></i>
                    </div>
                    <p class="font-size-lg font-w600 mb-0">
                        MySQL Databases
                    </p>
                    <p class="font-size-sm font-w600 text-muted mb-0">
                        45 Articles
                    </p>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-pop" href="javascript:void(0)">
                <div class="block-content block-content-full text-center">
                    <div class="p-20 mb-5">
                        <i class="fa fa-3x fa-paw text-gray"></i>
                    </div>
                    <p class="font-size-lg font-w600 mb-0">
                        3rd Party Apps
                    </p>
                    <p class="font-size-sm font-w600 text-muted mb-0">
                        18 Articles
                    </p>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-pop" href="javascript:void(0)">
                <div class="block-content block-content-full text-center">
                    <div class="p-20 mb-5">
                        <i class="fa fa-3x fa-globe text-gray"></i>
                    </div>
                    <p class="font-size-lg font-w600 mb-0">
                        Domains
                    </p>
                    <p class="font-size-sm font-w600 text-muted mb-0">
                        13 Articles
                    </p>
                </div>
            </a>
        </div>
    </div>
    <!-- END Product Support -->

    <!-- Promoted Articles -->
    <h2 class="h4 font-w300 mt-50">Promoted Articles</h2>
    <div class="block block-rounded bg-body-light">
        <div class="block-content">
            <div class="row">
                <div class="col-md-6">
                    <p>
                        <i class="fa fa-star text-warning mr-5"></i>
                        <a class="font-w600" href="javascript:void(0)">How do I get started?</a>
                    </p>
                    <p>
                        <i class="fa fa-star text-warning mr-5"></i>
                        <a class="font-w600" href="javascript:void(0)">FTP overview and credentials</a>
                    </p>
                    <p>
                        <i class="fa fa-star text-warning mr-5"></i>
                        <a class="font-w600" href="javascript:void(0)">How to register a new domain?</a>
                    </p>
                    <p>
                        <i class="fa fa-star text-warning mr-5"></i>
                        <a class="font-w600" href="javascript:void(0)">How to install your new WordPress website?</a>
                    </p>
                    <p>
                        <i class="fa fa-star text-warning mr-5"></i>
                        <a class="font-w600" href="javascript:void(0)">Security and updates</a>
                    </p>
                    <p>
                        <i class="fa fa-star text-warning mr-5"></i>
                        <a class="font-w600" href="javascript:void(0)">How to add a new SSH user?</a>
                    </p>
                    <p>
                        <i class="fa fa-star text-warning mr-5"></i>
                        <a class="font-w600" href="javascript:void(0)">How to improve performance</a>
                    </p>
                </div>
                <div class="col-md-6">
                    <p>
                        <i class="fa fa-star text-warning mr-5"></i>
                        <a class="font-w600" href="javascript:void(0)">How to connect to your MySQL Database?</a>
                    </p>
                    <p>
                        <i class="fa fa-star text-warning mr-5"></i>
                        <a class="font-w600" href="javascript:void(0)">How to improve your website speed?</a>
                    </p>
                    <p>
                        <i class="fa fa-star text-warning mr-5"></i>
                        <a class="font-w600" href="javascript:void(0)">Advanced configuration for serverless apps</a>
                    </p>
                    <p>
                        <i class="fa fa-star text-warning mr-5"></i>
                        <a class="font-w600" href="javascript:void(0)">PHP 7.4 New features</a>
                    </p>
                    <p>
                        <i class="fa fa-star text-warning mr-5"></i>
                        <a class="font-w600" href="javascript:void(0)">How to add a new SSL certificate to your website</a>
                    </p>
                    <p>
                        <i class="fa fa-star text-warning mr-5"></i>
                        <a class="font-w600" href="javascript:void(0)">Getting started with Dedicated hosting</a>
                    </p>
                    <p>
                        <i class="fa fa-star text-warning mr-5"></i>
                        <a class="font-w600" href="javascript:void(0)">Updating to latest WordPress version</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- END Promoted Articles -->

    <!-- Contact Support Team -->
    <div class="block block-rounded bg-body-light mt-50">
        <div class="block-content block-content-full">
            <div class="py-20 text-center">
                <h3 class="font-w700 text-black mb-10">
                    Didn't find what you're looking for?
                </h3>
                <h4 class="h5 text-muted">
                    Contact our support team today.
                </h4>
                <a class="btn btn-alt-primary btn-rounded px-30 py-15" href="javascript:void(0)">
                    <i class="fa fa-send mr-5"></i> Contact Support
                </a>
            </div>
        </div>
    </div>
    <!-- END Contact Support Team -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
