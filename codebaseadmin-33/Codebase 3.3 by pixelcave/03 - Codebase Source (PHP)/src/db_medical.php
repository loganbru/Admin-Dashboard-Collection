<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/dashboards/medical/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Quick Navigation -->
<div class="bg-body-dark">
    <div class="content">
        <div class="row">
            <div class="col-6 col-md-4 col-xl-2">
                <a class="block block-rounded text-center" href="javascript:void(0)">
                    <div class="block-content">
                        <p class="mt-5 mb-10">
                            <i class="fa fa-envelope-o text-gray fa-2x d-xl-none"></i>
                            <i class="fa fa-envelope-o text-gray fa-3x d-none d-xl-inline-block"></i>
                        </p>
                        <p class="font-w600 font-size-sm text-uppercase">Inbox</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-xl-2">
                <a class="block block-rounded text-center" href="javascript:void(0)">
                    <div class="block-content">
                        <p class="mt-5 mb-10">
                            <i class="fa fa-pencil text-gray fa-2x d-xl-none"></i>
                            <i class="fa fa-pencil text-gray fa-3x d-none d-xl-inline-block"></i>
                        </p>
                        <p class="font-w600 font-size-sm text-uppercase">Profile</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-xl-2">
                <a class="block block-rounded text-center" href="javascript:void(0)">
                    <div class="block-content">
                        <p class="mt-5 mb-10">
                            <i class="fa fa-wrench text-gray fa-2x d-xl-none"></i>
                            <i class="fa fa-wrench text-gray fa-3x d-none d-xl-inline-block"></i>
                        </p>
                        <p class="font-w600 font-size-sm text-uppercase">Settings</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-xl-2">
                <a class="block block-rounded text-center" href="javascript:void(0)">
                    <div class="block-content">
                        <p class="mt-5 mb-10">
                            <i class="fa fa-plus-square-o text-gray fa-2x d-xl-none"></i>
                            <i class="fa fa-plus-square-o text-gray fa-3x d-none d-xl-inline-block"></i>
                        </p>
                        <p class="font-w600 font-size-sm text-uppercase">Add Patient</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-xl-2">
                <a class="block block-rounded text-center" href="javascript:void(0)">
                    <div class="block-content">
                        <p class="mt-5 mb-10">
                            <i class="fa fa-plus-square-o text-gray fa-2x d-xl-none"></i>
                            <i class="fa fa-plus-square-o text-gray fa-3x d-none d-xl-inline-block"></i>
                        </p>
                        <p class="font-w600 font-size-sm text-uppercase">Add Event</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-xl-2">
                <a class="block block-rounded text-center" href="javascript:void(0)">
                    <div class="block-content">
                        <p class="mt-5 mb-10">
                            <i class="fa fa-plus-square-o text-gray fa-2x d-xl-none"></i>
                            <i class="fa fa-plus-square-o text-gray fa-3x d-none d-xl-inline-block"></i>
                        </p>
                        <p class="font-w600 font-size-sm text-uppercase">Add Payment</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- END Quick Navigation -->

<!-- Page Content -->
<div class="content">
    <!-- Overview -->
    <div class="row invisible" data-toggle="appear">
        <div class="col-md-4">
            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="py-20 text-center">
                        <div class="mb-10">
                            <i class="fa fa-user-circle-o fa-3x text-corporate"></i>
                        </div>
                        <div class="font-size-h4 font-w600">5 Patients</div>
                        <div class="text-muted">2 were added today!</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="py-20 text-center">
                        <div class="mb-10">
                            <i class="fa fa-calendar fa-3x text-elegance"></i>
                        </div>
                        <div class="font-size-h4 font-w600">6 Appointments</div>
                        <div class="text-muted">4 are scheduled for today!</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="py-20 text-center">
                        <div class="mb-10">
                            <i class="fa fa-paypal fa-3x text-primary"></i>
                        </div>
                        <div class="font-size-h4 font-w600">2 Payments</div>
                        <div class="text-muted">Pending for tomorrow.</div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!-- END Overview -->

    <!-- Patients -->
    <div class="block block-rounded block-bordered invisible" data-toggle="appear">
        <div class="block-header block-header-default">
            <h3 class="block-title">Current Patients</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                    <i class="si si-refresh"></i>
                </button>
                <button type="button" class="btn-block-option">
                    <i class="si si-wrench"></i>
                </button>
            </div>
        </div>
        <div class="block-content block-content-full">
            <div class="table-responsive">
                <table class="table table-borderless table-hover table-striped table-vcenter mb-0">
                    <thead>
                        <tr>
                            <th style="width: 100px;">ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Condition</th>
                            <th>Actions</th>
                            <th>Added</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <a class="font-w600" href="javascript:void(0)">54874</a>
                            </td>
                            <td>
                                <strong>Roy</strong>
                            </td>
                            <td>
                                <strong>Obrien</strong>
                            </td>
                            <td>
                                <span class="badge badge-success">Normal</span>
                            </td>
                            <td>
                                <a class="btn btn-sm btn-secondary" href="javascript:void(0)">
                                    <i class="fa fa-heartbeat text-danger mr-5"></i> Medical History
                                </a>
                            </td>
                            <td>
                                <span class="text-muted font-italic">today</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="font-w600" href="javascript:void(0)">54873</a>
                            </td>
                            <td>
                                <strong>Bobby</strong>
                            </td>
                            <td>
                                <strong>Lane</strong>
                            </td>
                            <td>
                                <span class="badge badge-info">Stable</span>
                            </td>
                            <td>
                                <a class="btn btn-sm btn-secondary" href="javascript:void(0)">
                                    <i class="fa fa-heartbeat text-danger mr-5"></i> Medical History
                                </a>
                            </td>
                            <td>
                                <span class="text-muted font-italic">today</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="font-w600" href="javascript:void(0)">54872</a>
                            </td>
                            <td>
                                <strong>Amanda</strong>
                            </td>
                            <td>
                                <strong>Ray</strong>
                            </td>
                            <td>
                                <span class="badge badge-danger">Critical</span>
                            </td>
                            <td>
                                <a class="btn btn-sm btn-secondary" href="javascript:void(0)">
                                    <i class="fa fa-heartbeat text-danger mr-5"></i> Medical History
                                </a>
                            </td>
                            <td>
                                <span class="text-muted font-italic">3 days ago</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="font-w600" href="javascript:void(0)">54871</a>
                            </td>
                            <td>
                                <strong>Rose</strong>
                            </td>
                            <td>
                                <strong>Alvarado</strong>
                            </td>
                            <td>
                                <span class="badge badge-warning">Pending..</span>
                            </td>
                            <td>
                                <a class="btn btn-sm btn-secondary" href="javascript:void(0)">
                                    <i class="fa fa-heartbeat text-danger mr-5"></i> Medical History
                                </a>
                            </td>
                            <td>
                                <span class="text-muted font-italic">4 days ago</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="font-w600" href="javascript:void(0)">54870</a>
                            </td>
                            <td>
                                <strong>Jose</strong>
                            </td>
                            <td>
                                <strong>Fowler</strong>
                            </td>
                            <td>
                                <span class="badge badge-info">Stable</span>
                            </td>
                            <td>
                                <a class="btn btn-sm btn-secondary" href="javascript:void(0)">
                                    <i class="fa fa-heartbeat text-danger mr-5"></i> Medical History
                                </a>
                            </td>
                            <td>
                                <span class="text-muted font-italic">5 days ago</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- END Patients -->

    <!-- Appointments -->
    <div class="block block-rounded block-bordered invisible" data-toggle="appear">
        <div class="block-header block-header-default">
            <h3 class="block-title">Appointments</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                    <i class="si si-refresh"></i>
                </button>
                <button type="button" class="btn-block-option">
                    <i class="si si-wrench"></i>
                </button>
            </div>
        </div>
        <div class="block-content block-content-full">
            <div class="table-responsive">
                <table class="table table-borderless table-hover table-striped table-vcenter mb-0">
                    <thead>
                        <tr>
                            <th style="width: 100px;">ID</th>
                            <th>Patient</th>
                            <th>First time?</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <a class="font-w600" href="javascript:void(0)">36986</a>
                            </td>
                            <td>
                                <a href="javascript:void(0)"><?php echo $cb->get_name(); ?></a>
                            </td>
                            <td>
                                <i class="fa fa-check-circle text-success"></i>
                            </td>
                            <td>
                                Today at 10:00
                            </td>
                            <td>
                                <a class="btn btn-sm btn-secondary m-5" href="javascript:void(0)">
                                    <i class="fa fa-refresh text-primary mr-5"></i> Reschedule
                                </a>
                                <a class="btn btn-sm btn-secondary m-5" href="javascript:void(0)">
                                    <i class="fa fa-times text-danger mr-5"></i> Cancel
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="font-w600" href="javascript:void(0)">36985</a>
                            </td>
                            <td>
                                <a href="javascript:void(0)"><?php echo $cb->get_name(); ?></a>
                            </td>
                            <td>
                                <i class="fa fa-check-circle text-success"></i>
                            </td>
                            <td>
                                Today at 12:00
                            </td>
                            <td>
                                <a class="btn btn-sm btn-secondary m-5" href="javascript:void(0)">
                                    <i class="fa fa-refresh text-primary mr-5"></i> Reschedule
                                </a>
                                <a class="btn btn-sm btn-secondary m-5" href="javascript:void(0)">
                                    <i class="fa fa-times text-danger mr-5"></i> Cancel
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="font-w600" href="javascript:void(0)">36984</a>
                            </td>
                            <td>
                                <a href="javascript:void(0)"><?php echo $cb->get_name(); ?></a>
                            </td>
                            <td>
                                <i class="fa fa-check-circle text-success"></i>
                            </td>
                            <td>
                                Today at 14:00
                            </td>
                            <td>
                                <a class="btn btn-sm btn-secondary m-5" href="javascript:void(0)">
                                    <i class="fa fa-refresh text-primary mr-5"></i> Reschedule
                                </a>
                                <a class="btn btn-sm btn-secondary m-5" href="javascript:void(0)">
                                    <i class="fa fa-times text-danger mr-5"></i> Cancel
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="font-w600" href="javascript:void(0)">36983</a>
                            </td>
                            <td>
                                <a href="javascript:void(0)"><?php echo $cb->get_name(); ?></a>
                            </td>
                            <td>
                                <i class="fa fa-times-circle text-danger"></i>
                            </td>
                            <td>
                                Today at 16:00
                            </td>
                            <td>
                                <a class="btn btn-sm btn-secondary m-5" href="javascript:void(0)">
                                    <i class="fa fa-refresh text-primary mr-5"></i> Reschedule
                                </a>
                                <a class="btn btn-sm btn-secondary m-5" href="javascript:void(0)">
                                    <i class="fa fa-times text-danger mr-5"></i> Cancel
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="font-w600" href="javascript:void(0)">36982</a>
                            </td>
                            <td>
                                <a href="javascript:void(0)"><?php echo $cb->get_name(); ?></a>
                            </td>
                            <td>
                                <i class="fa fa-check-circle text-success"></i>
                            </td>
                            <td>
                                Tomorrow at 08:00
                            </td>
                            <td>
                                <a class="btn btn-sm btn-secondary m-5" href="javascript:void(0)">
                                    <i class="fa fa-refresh text-primary mr-5"></i> Reschedule
                                </a>
                                <a class="btn btn-sm btn-secondary m-5" href="javascript:void(0)">
                                    <i class="fa fa-times text-danger mr-5"></i> Cancel
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="font-w600" href="javascript:void(0)">36981</a>
                            </td>
                            <td>
                                <a href="javascript:void(0)"><?php echo $cb->get_name(); ?></a>
                            </td>
                            <td>
                                <i class="fa fa-times-circle text-danger"></i>
                            </td>
                            <td>
                                Tomorrow at 10:00
                            </td>
                            <td>
                                <a class="btn btn-sm btn-secondary m-5" href="javascript:void(0)">
                                    <i class="fa fa-refresh text-primary mr-5"></i> Reschedule
                                </a>
                                <a class="btn btn-sm btn-secondary m-5" href="javascript:void(0)">
                                    <i class="fa fa-times text-danger mr-5"></i> Cancel
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- END Appointments -->

    <!-- Payments -->
    <div class="block block-rounded block-bordered invisible" data-toggle="appear">
        <div class="block-header block-header-default">
            <h3 class="block-title">Open Payments</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                    <i class="si si-refresh"></i>
                </button>
                <button type="button" class="btn-block-option">
                    <i class="si si-wrench"></i>
                </button>
            </div>
        </div>
        <div class="block-content block-content-full">
            <div class="table-responsive">
                <table class="table table-borderless table-hover table-striped table-vcenter mb-0">
                    <thead>
                        <tr>
                            <th style="width: 100px;">ID</th>
                            <th>Patient</th>
                            <th>Invoice</th>
                            <th>Due</th>
                            <th>Actions</th>
                            <th class="text-right">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <a class="font-w600" href="javascript:void(0)">158214</a>
                            </td>
                            <td>
                                <a href="javascript:void(0)"><?php echo $cb->get_name(); ?></a>
                            </td>
                            <td>
                                <a href="javascript:void(0)">
                                    INV_158214.pdf
                                </a>
                            </td>
                            <td>
                                <span class="badge badge-primary">tomorrow</span>
                            </td>
                            <td>
                                <a class="btn btn-sm btn-secondary m-5" href="javascript:void(0)">
                                    <i class="fa fa-pencil text-primary mr-5"></i> Edit
                                </a>
                                <a class="btn btn-sm btn-secondary m-5" href="javascript:void(0)">
                                    <i class="fa fa-times text-danger mr-5"></i> Cancel
                                </a>
                            </td>
                            <td class="text-right">
                                $3.500,00
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="font-w600" href="javascript:void(0)">158213</a>
                            </td>
                            <td>
                                <a href="javascript:void(0)"><?php echo $cb->get_name(); ?></a>
                            </td>
                            <td>
                                <a href="javascript:void(0)">
                                    INV_158213.pdf
                                </a>
                            </td>
                            <td>
                                <span class="badge badge-primary">tomorrow</span>
                            </td>
                            <td>
                                <a class="btn btn-sm btn-secondary m-5" href="javascript:void(0)">
                                    <i class="fa fa-pencil text-primary mr-5"></i> Edit
                                </a>
                                <a class="btn btn-sm btn-secondary m-5" href="javascript:void(0)">
                                    <i class="fa fa-times text-danger mr-5"></i> Cancel
                                </a>
                            </td>
                            <td class="text-right">
                                $1.280,00
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5" class="text-right">
                                <strong class="text-uppercase">Total Due</strong>
                            </td>
                            <td class="text-right">
                                <strong>$4.780,00</strong>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- END Payments -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>