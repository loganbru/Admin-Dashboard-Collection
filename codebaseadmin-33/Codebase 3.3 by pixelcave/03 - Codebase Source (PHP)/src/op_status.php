<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<div class="bg-body-light bg-pattern" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/various/bg-pattern-inverse.png');">
    <div class="row no-gutters justify-content-center">
        <div class="hero-static col-lg-7">
            <div class="content content-full overflow-hidden">
                <!-- Header -->
                <div class="py-50 text-center">
                    <a class="link-effect font-w700" href="index.php">
                        <i class="si si-fire"></i>
                        <span class="font-size-xl text-primary-dark">code</span><span class="font-size-xl">base</span>
                    </a>
                    <h1 class="h4 font-w700 mt-30 mb-10">Status Page</h1>
                    <h2 class="h5 font-w400 text-muted mb-0">Check out the current status of our services</h2>
                </div>
                <!-- END Header -->

                <!-- Status -->
                <div class="row no-gutters d-flex justify-content-center">
                    <div class="col-md-10 col-xl-7">
                        <div class="d-flex justify-content-between">
                            <a class="btn btn-hero btn-alt-secondary" href="be_pages_dashboard.php">
                                <i class="fa fa-arrow-left mr-5"></i> Dashboard
                            </a>
                            <a class="btn btn-hero btn-alt-primary" href="javascript:void(0)">
                                <i class="fa fa-rss"></i> <span class="d-none d-sm-inline-block ml-5">Subscribe</span>
                            </a>
                        </div>
                        <hr>
                        <div class="alert alert-warning d-flex align-items-center justify-content-between mb-15" role="alert">
                            <div class="flex-fill mr-10">
                                <p class="mb-0">API is currently under maintenance. Please stand by for a while as we are working on it.</p>
                            </div>
                            <div class="flex-00-auto">
                                <i class="fa fa-fw fa-2x fa-exclamation-triangle"></i>
                            </div>
                        </div>
                        <div class="alert alert-danger d-flex align-items-center justify-content-between mb-15" role="alert">
                            <div class="flex-fill mr-10">
                                <p class="mb-0">Helpdesk service is experiencing some issues but our ninja developers are on it and should be back shortly!</p>
                            </div>
                            <div class="flex-00-auto">
                                <i class="fa fa-fw fa-2x fa-bug"></i>
                            </div>
                        </div>
                        <ul class="list-group push">
                            <li class="list-group-item d-flex justify-content-between align-items-center font-w600">
                                Backend
                                <span class="badge badge-pill badge-success">Operational</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center font-w600">
                                Frontend
                                <span class="badge badge-pill badge-success">Operational</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center font-w600">
                                API
                                <span class="badge badge-pill badge-warning">Maintenance</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center font-w600">
                                Payments
                                <span class="badge badge-pill badge-success">Operational</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center font-w600">
                                Helpdesk
                                <span class="badge badge-pill badge-danger">Down</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END Status -->
            </div>
        </div>
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>