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
                    Hosting Dashboard
                </h2>
                <h3 class="h5 text-muted mb-0">
                    You currently have 1 active server and 3 domains!
                </h3>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Overview -->
    <h2 class="h4 font-w300 mt-50">Overview</h2>
    <div class="row">
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full text-center">
                    <div class="p-20 mb-5">
                        <i class="fa fa-3x fa-globe text-primary"></i>
                    </div>
                    <p class="font-size-lg font-w600 mb-0">
                        3 Active
                    </p>
                    <p class="font-size-sm text-uppercase font-w600 text-muted mb-0">
                        Domains
                    </p>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full text-center">
                    <div class="p-20 mb-5">
                        <i class="fa fa-3x fa-server text-elegance"></i>
                    </div>
                    <p class="font-size-lg font-w600 mb-0">
                        1 VPS
                    </p>
                    <p class="font-size-sm text-uppercase font-w600 text-muted mb-0">
                        Server
                    </p>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full text-center">
                    <div class="p-20 mb-5">
                        <i class="fa fa-3x fa-dot-circle-o text-pulse"></i>
                    </div>
                    <p class="font-size-lg font-w600 mb-0">
                        VIP
                    </p>
                    <p class="font-size-sm text-uppercase font-w600 text-muted mb-0">
                        Plan
                    </p>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full text-center">
                    <div class="p-20 mb-5">
                        <i class="fa fa-3x fa-cc-paypal text-gray-dark"></i>
                    </div>
                    <p class="font-size-lg font-w600 mb-0">
                        $49 Pending
                    </p>
                    <p class="font-size-sm text-uppercase font-w600 text-muted mb-0">
                        Payment
                    </p>
                </div>
            </a>
        </div>
    </div>
    <!-- END Overview -->

    <!-- VPS -->
    <div class="d-flex justify-content-between align-items-center mt-50 mb-20">
        <h2 class="h4 font-w300 mb-0">VPS (1)</h2>
        <button type="button" class="btn btn-primary btn-sm btn-alt-primary btn-rounded" onclick="Codebase.blocks('#cb-add-server', 'open');">
            <i class="fa fa-plus mr-1"></i> Add Server
        </button>
    </div>
    <div id="cb-add-server" class="block bg-body-light animated fadeIn d-none">
        <div class="block-header">
            <h3 class="block-title">Add a new VPS</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option">
                    <i class="si si-question"></i>
                </button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="close">
                    <i class="si si-close"></i>
                </button>
            </div>
        </div>
        <div class="block-content">
            <form action="be_pages_hosting_dashboard.php" method="POST" onsubmit="return false;">
                <div class="form-group row gutters-tiny mb-0 items-push">
                    <div class="col-md-5">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    vps798_
                                </span>
                            </div>
                            <input type="text" class="form-control" id="example-hosting-name" name="example-hosting-name" placeholder="Server Name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <select class="custom-select" id="example-hosting-vps" name="example-hosting-vps">
                            <option value="0">Select a configuration</option>
                            <option value="1">$9/m - 2GB RAM, 30GB Storage, Unlimited Domains</option>
                            <option value="2">$19/m - 4GB RAM, 60GB Storage, Unlimited Domains</option>
                            <option value="3">$39/m - 6GB RAM, 120GB Storage, Unlimited Domains</option>
                            <option value="4">$49/m - 8GB RAM, 240GB Storage, Unlimited Domains</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-alt-success btn-block">
                            <i class="fa fa-plus mr-1"></i> Create
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">
                vps741_game <small>Los Angeles</small>
            </h3>
        </div>
        <div class="block-content block-content-full">
            <div class="row align-items-center">
                <div class="col-sm-6 py-10">
                    <div class="progress mb-5" style="height: 8px;">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 33%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="font-size-sm font-w600 mb-20">
                        <span class="font-w700">2GB</span> of <span class="font-w700">6GB</span> RAM
                    </p>
                    <div class="progress mb-5" style="height: 8px;">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 65%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="font-size-sm font-w600 mb-0">
                        <span class="font-w700">78GB</span> of <span class="font-w700">120GB</span> Disk Space
                    </p>
                </div>
                <div class="col-sm-6 py-10 text-md-right">
                    <a class="btn btn-sm btn-outline-secondary btn-rounded mr-5 my-5" href="javascript:void(0)">
                        <i class="fa fa-undo mr-5"></i> Restart
                    </a>
                    <a class="btn btn-sm btn-outline-secondary btn-rounded mr-5 my-5" href="javascript:void(0)">
                        <i class="fa fa-wrench mr-5"></i> Manage
                    </a>
                    <a class="btn btn-sm btn-outline-danger btn-rounded mr-5 my-5" href="javascript:void(0)">
                        <i class="fa fa-times mr-5"></i> Delete
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- END VPS -->

    <!-- Domains -->
    <div class="d-flex justify-content-between align-items-center mt-50 mb-20">
        <h2 class="h4 font-w300 mb-0">Domains (3)</h2>
        <button type="button" class="btn btn-primary btn-sm btn-alt-primary btn-rounded" onclick="Codebase.blocks('#cb-add-domain', 'open');">
            <i class="fa fa-plus mr-1"></i> Add Domain
        </button>
    </div>
    <div id="cb-add-domain" class="block bg-body-light animated fadeIn d-none">
        <div class="block-header">
            <h3 class="block-title">Add a new Domain</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option">
                    <i class="si si-question"></i>
                </button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="close">
                    <i class="si si-close"></i>
                </button>
            </div>
        </div>
        <div class="block-content">
            <form action="be_pages_hosting_dashboard.php" method="POST" onsubmit="return false;">
                <div class="form-group row gutters-tiny mb-0 items-push">
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="example-hosting-domain" name="example-hosting-domain" placeholder="example.com">
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-alt-secondary btn-block">
                            <i class="fa fa-arrows-h mr-5"></i> Transfer
                        </button>
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-alt-success btn-block">
                            <i class="fa fa-plus mr-5"></i> Register
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="block">
        <div class="block-content block-content-full">
            <div class="row align-items-center">
                <div class="col-sm-6 py-10">
                    <h3 class="h5 font-w700 mb-10">
                        <i class="fa fa-circle text-success mr-5"></i> example.com
                    </h3>
                    <p class="font-size-sm mb-10">
                        <a class="mr-5 mb-5" href="javascript:void(0)">DNS</a>
                        <a class="mr-5 mb-5" href="javascript:void(0)">Visit</a>
                        <a class="mr-5 mb-5" href="javascript:void(0)">WebFTP</a>
                        <a class="mr-5 mb-5" href="javascript:void(0)">FTP</a>
                        <a class="mr-5 mb-5" href="javascript:void(0)">Add IP</a>
                        <a class="mr-5 mb-5" href="javascript:void(0)">Email</a>
                    </p>
                    <p class="font-size-sm text-muted mb-0">
                        Expires on 15th June, 2030
                    </p>
                </div>
                <div class="col-sm-6 py-10 text-md-right">
                    <a class="btn btn-sm btn-outline-secondary btn-rounded mr-5 my-5" href="javascript:void(0)">
                        <i class="fa fa-wrench mr-1"></i> Manage
                    </a>
                    <a class="btn btn-sm btn-outline-danger btn-rounded mr-5 my-5" href="javascript:void(0)">
                        <i class="fa fa-times mr-1"></i> Delete
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="block">
        <div class="block-content block-content-full">
            <div class="row align-items-center">
                <div class="col-sm-6 py-10">
                    <h3 class="h5 font-w700 mb-10">
                        <i class="fa fa-circle text-success mr-5"></i> example.co.uk
                    </h3>
                    <p class="font-size-sm mb-10">
                        <a class="mr-5 mb-5" href="javascript:void(0)">DNS</a>
                        <a class="mr-5 mb-5" href="javascript:void(0)">Visit</a>
                        <a class="mr-5 mb-5" href="javascript:void(0)">WebFTP</a>
                        <a class="mr-5 mb-5" href="javascript:void(0)">FTP</a>
                        <a class="mr-5 mb-5" href="javascript:void(0)">Add IP</a>
                        <a class="mr-5 mb-5" href="javascript:void(0)">Email</a>
                    </p>
                    <p class="font-size-sm text-muted mb-0">
                        Expires on 12th October, 2027
                    </p>
                </div>
                <div class="col-sm-6 py-10 text-md-right">
                    <a class="btn btn-sm btn-outline-secondary btn-rounded mr-5 my-5" href="javascript:void(0)">
                        <i class="fa fa-wrench mr-1"></i> Manage
                    </a>
                    <a class="btn btn-sm btn-outline-danger btn-rounded mr-5 my-5" href="javascript:void(0)">
                        <i class="fa fa-times mr-1"></i> Delete
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="block">
        <div class="block-content block-content-full">
            <div class="row align-items-center">
                <div class="col-sm-6 py-10">
                    <h3 class="h5 font-w700 mb-10">
                        <i class="fa fa-circle text-warning mr-5"></i> example.io
                    </h3>
                    <p class="font-size-sm mb-10">
                        <a class="mr-5 mb-5" href="javascript:void(0)">DNS</a>
                        <a class="mr-5 mb-5" href="javascript:void(0)">Visit</a>
                        <a class="mr-5 mb-5" href="javascript:void(0)">WebFTP</a>
                        <a class="mr-5 mb-5" href="javascript:void(0)">FTP</a>
                        <a class="mr-5 mb-5" href="javascript:void(0)">Add IP</a>
                        <a class="mr-5 mb-5" href="javascript:void(0)">Email</a>
                    </p>
                    <p class="font-size-sm text-muted mb-0">
                        <a class="font-w600 text-danger" href="javascript:void(0)">Expires in 1 week - Renew Today</a>
                    </p>
                </div>
                <div class="col-sm-6 py-10 text-md-right">
                    <a class="btn btn-sm btn-outline-secondary btn-rounded mr-5 my-5" href="javascript:void(0)">
                        <i class="fa fa-wrench mr-1"></i> Manage
                    </a>
                    <a class="btn btn-sm btn-outline-danger btn-rounded mr-5 my-5" href="javascript:void(0)">
                        <i class="fa fa-times mr-1"></i> Delete
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- END Domains -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
