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
                    Email Management
                </h2>
                <h3 class="h5 text-muted mb-0">
                    You currently have 6 active mailboxes and 3 forwarding email addresses!
                </h3>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Overview -->
    <h2 class="h4 font-w300 mt-50">Overview</h2>
    <div class="row">
        <div class="col-lg-4">
            <a class="block block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full text-center">
                    <div class="p-20 mb-5">
                        <i class="fa fa-3x fa-envelope-o text-primary"></i>
                    </div>
                    <p class="font-size-lg font-w600 mb-0">
                        6 Active
                    </p>
                    <p class="font-size-sm text-uppercase font-w600 text-muted mb-0">
                        Mailboxes
                    </p>
                </div>
            </a>
        </div>
        <div class="col-lg-4">
            <a class="block block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full text-center">
                    <div class="p-20 mb-5">
                        <i class="fa fa-3x fa-mail-forward text-elegance"></i>
                    </div>
                    <p class="font-size-lg font-w600 mb-0">
                        3 Forwarding
                    </p>
                    <p class="font-size-sm text-uppercase font-w600 text-muted mb-0">
                        Email Addresses
                    </p>
                </div>
            </a>
        </div>
        <div class="col-lg-4">
            <a class="block block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full text-center">
                    <div class="p-20 mb-5">
                        <i class="fa fa-3x fa-floppy-o text-pulse"></i>
                    </div>
                    <p class="font-size-lg font-w600 mb-0">
                        1GB Storage
                    </p>
                    <p class="font-size-sm text-uppercase font-w600 text-muted mb-0">
                        Current Usage
                    </p>
                </div>
            </a>
        </div>
    </div>
    <!-- END Overview -->

    <!-- Mailboxes -->
    <div class="d-flex justify-content-between align-items-center mt-50 mb-20">
        <h2 class="h4 font-w300 mb-0">Mailboxes (6)</h2>
        <button type="button" class="btn btn-primary btn-sm btn-alt-primary btn-rounded" onclick="Codebase.blocks('#cb-add-mailbox', 'open');">
            <i class="fa fa-plus mr-1"></i> Add Mailbox
        </button>
    </div>
    <div id="cb-add-mailbox" class="block bg-body-light animated fadeIn d-none">
        <div class="block-header">
            <h3 class="block-title">Add a new Mailbox</h3>
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
            <form action="be_pages_hosting_emails.php" method="POST" onsubmit="return false;">
                <div class="form-group row gutters-tiny mb-0 items-push">
                    <div class="col-md-5">
                        <input type="text" class="form-control" id="example-hosting-mailbox" name="example-hosting-mailbox" placeholder="Mailbox Name">
                    </div>
                    <div class="col-md-4">
                        <select class="custom-select" id="example-hosting-domains" name="example-hosting-domains">
                            <option value="0">Select a domain</option>
                            <option value="1">@example.com</option>
                            <option value="2">@example.co.uk</option>
                            <option value="3">@example.io</option>
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
    <div class="block border-bottom mb-0">
        <div class="block-content block-content-full border-bottom">
            <div class="row align-items-center">
                <div class="col-sm-6 py-10">
                    <h3 class="h5 font-w700 mb-15">
                        info<span class="text-muted">@example.com</span>
                    </h3>
                    <div class="progress mb-5" style="height: 8px;">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 12%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="font-size-sm font-w600 mb-0">
                        <span class="font-w700">0.12GB</span> of <span class="font-w700">1GB</span> Storage
                    </p>
                </div>
                <div class="col-sm-6 py-10 text-md-right">
                    <a class="btn btn-sm btn-outline-secondary btn-rounded mr-5 my-5" href="javascript:void(0)">
                        <i class="fa fa-globe mr-5"></i> Webmail
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
        <div class="block-content block-content-full">
            <div class="row align-items-center">
                <div class="col-sm-6 py-10">
                    <h3 class="h5 font-w700 mb-15">
                        support<span class="text-muted">@example.com</span>
                    </h3>
                    <div class="progress mb-5" style="height: 8px;">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 23%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="font-size-sm font-w600 mb-0">
                        <span class="font-w700">0.23GB</span> of <span class="font-w700">1GB</span> Storage
                    </p>
                </div>
                <div class="col-sm-6 py-10 text-md-right">
                    <a class="btn btn-sm btn-outline-secondary btn-rounded mr-5 my-5" href="javascript:void(0)">
                        <i class="fa fa-globe mr-5"></i> Webmail
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
    <div class="block">
        <div class="block-content block-content-full">
            <div class="row align-items-center">
                <div class="col-sm-6 py-10">
                    <h3 class="h5 font-w700 mb-15">
                        hostmaster<span class="text-muted">@example.com</span>
                    </h3>
                    <div class="progress mb-5" style="height: 8px;">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 15%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="font-size-sm font-w600 mb-0">
                        <span class="font-w700">0.15GB</span> of <span class="font-w700">1GB</span> Storage
                    </p>
                </div>
                <div class="col-sm-6 py-10 text-md-right">
                    <a class="btn btn-sm btn-outline-secondary btn-rounded mr-5 my-5" href="javascript:void(0)">
                        <i class="fa fa-globe mr-5"></i> Webmail
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
    <div class="block">
        <div class="block-content block-content-full border-bottom">
            <div class="row align-items-center">
                <div class="col-sm-6 py-10">
                    <h3 class="h5 font-w700 mb-15">
                        admin<span class="text-muted">@example.io</span>
                    </h3>
                    <div class="progress mb-5" style="height: 8px;">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 7%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="font-size-sm font-w600 mb-0">
                        <span class="font-w700">0.07GB</span> of <span class="font-w700">1GB</span> Storage
                    </p>
                </div>
                <div class="col-sm-6 py-10 text-md-right">
                    <a class="btn btn-sm btn-outline-secondary btn-rounded mr-5 my-5" href="javascript:void(0)">
                        <i class="fa fa-globe mr-5"></i> Webmail
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
        <div class="block-content block-content-full">
            <div class="row align-items-center">
                <div class="col-sm-6 py-10">
                    <h3 class="h5 font-w700 mb-15">
                        hostmaster<span class="text-muted">@example.io</span>
                    </h3>
                    <div class="progress mb-5" style="height: 8px;">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 3%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="font-size-sm font-w600 mb-0">
                        <span class="font-w700">0.03GB</span> of <span class="font-w700">1GB</span> Storage
                    </p>
                </div>
                <div class="col-sm-6 py-10 text-md-right">
                    <a class="btn btn-sm btn-outline-secondary btn-rounded mr-5 my-5" href="javascript:void(0)">
                        <i class="fa fa-globe mr-5"></i> Webmail
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
    <div class="block">
        <div class="block-content block-content-full">
            <div class="row align-items-center">
                <div class="col-sm-6 py-10">
                    <h3 class="h5 font-w700 mb-15">
                        info<span class="text-muted">@example.co.uk</span>
                    </h3>
                    <div class="progress mb-5" style="height: 8px;">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 50%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="font-size-sm font-w600 mb-0">
                        <span class="font-w700">0.5GB</span> of <span class="font-w700">1GB</span> Storage
                    </p>
                </div>
                <div class="col-sm-6 py-10 text-md-right">
                    <a class="btn btn-sm btn-outline-secondary btn-rounded mr-5 my-5" href="javascript:void(0)">
                        <i class="fa fa-globe mr-5"></i> Webmail
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
    <!-- END Mailboxes -->

    <!-- Email Forwarding -->
    <div class="d-flex justify-content-between align-items-center mt-50 mb-20">
        <h2 class="h4 font-w300 mb-0">Email Forwarding (3)</h2>
        <button type="button" class="btn btn-primary btn-sm btn-alt-primary btn-rounded" onclick="Codebase.blocks('#cb-add-forwarder', 'open');">
            <i class="fa fa-plus mr-1"></i> Add Forwarder
        </button>
    </div>
    <div id="cb-add-forwarder" class="block bg-body-light animated fadeIn d-none">
        <div class="block-header">
            <h3 class="block-title">Add a new Forwarder</h3>
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
            <form action="be_pages_hosting_emails.php" method="POST" onsubmit="return false;">
                <div class="form-group row gutters-tiny mb-0 items-push">
                    <div class="col-md-5">
                        <input type="text" class="form-control" id="example-hosting-virtual-address" name="example-hosting-virtual-address" placeholder="Virtual Email Address">
                    </div>
                    <div class="col-md-5">
                        <select class="custom-select" id="example-hosting-forwarder-mailbox" name="example-hosting-forwarder-mailbox">
                            <option value="0">Select a mailbox to forward</option>
                            <option value="1">info@example.com</option>
                            <option value="2">support@example.com</option>
                            <option value="3">hostmaster@example.com</option>
                            <option value="4">admin@example.io</option>
                            <option value="5">hostmaster@example.io</option>
                            <option value="6">info@example.co.uk</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-alt-success btn-block">
                            <i class="fa fa-plus mr-5"></i> Add
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
                    <h3 class="h5 font-w700 mb-0">
                        testing@example.com
                    </h3>
                    <i class="fa fa-arrow-down text-primary py-10"></i>
                    <p class="h5 font-w700 text-muted mb-0">
                        info@example.com
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
                    <h3 class="h5 font-w700 mb-0">
                        store@example.com
                    </h3>
                    <i class="fa fa-arrow-down text-primary py-10"></i>
                    <p class="h5 font-w700 text-muted mb-0">
                        hostmaster@example.io
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
                    <h3 class="h5 font-w700 mb-0">
                        john@example.com
                    </h3>
                    <i class="fa fa-arrow-down text-primary py-10"></i>
                    <p class="h5 font-w700 text-muted mb-0">
                        admin@example.io
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
    <!-- END Email Forwarding -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
