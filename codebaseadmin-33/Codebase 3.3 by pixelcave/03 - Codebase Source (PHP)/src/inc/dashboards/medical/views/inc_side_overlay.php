<?php
/**
 * dashboards/medical/views/inc_side_overlay.php
 *
 * Author: pixelcave
 *
 * The side overlay of each page
 *
 */
?>

<!-- Side Overlay-->
<aside id="side-overlay">
    <!-- Side Header -->
    <div class="content-header content-header-fullrow">
        <div class="content-header-section align-parent">
            <!-- Close Side Overlay -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-circle btn-dual-secondary align-v-r" data-toggle="layout" data-action="side_overlay_close">
                <i class="fa fa-times text-danger"></i>
            </button>
            <!-- END Close Side Overlay -->

            <!-- User Info -->
            <div class="content-header-item">
                <a class="img-link mr-5" href="javascript:void(0)">
                    <?php $cb->get_avatar('11', '', 32, false); ?>
                </a>
                <a class="align-middle link-effect text-body-color-dark font-w600" href="javascript:void(0)">Dr. Stone</a>
            </div>
            <!-- END User Info -->
        </div>
    </div>
    <!-- END Side Header -->

    <!-- Emergency Notification -->
    <div class="content-side content-side-full bg-danger-light text-center">
        <i class="fa fa-exclamation-triangle fa-2x text-danger animated swing infinite"></i>
        <p class="font-size-h5 font-w700 text-danger mt-10 mb-0">
            There is an emergency, please proceed to surgery immediately!
        </p>
    </div>
    <!-- END Emergency Notification -->

    <!-- Side Content -->
    <div class="content-side">
        <!-- Mini Stats -->
        <div class="block pull-r-l">
            <div class="block-content block-content-full block-content-sm bg-body-light">
                <div class="row text-center">
                    <div class="col-6">
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Patients</div>
                        <a class="link-effect font-w600 font-size-h4" href="javascript:void(0)">5</a>
                    </div>
                    <div class="col-6">
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Appointments</div>
                        <a class="link-effect font-w600 font-size-h4" href="javascript:void(0)">6</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Mini Stats -->

        <!-- Notifications -->
        <div class="block pull-r-l">
            <div class="block-header bg-body-light">
                <h3 class="block-title">Recent Notifications</h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                        <i class="si si-refresh"></i>
                    </button>
                </div>
            </div>
            <div class="block-content">
                <ul class="list list-activity">
                    <li>
                        <i class="fa fa-exclamation-triangle text-danger"></i>
                        <div class="font-w600">There is an emergency!</div>
                        <div>
                            <a class="font-w600 text-danger" href="javascript:void(0)">Event Details</a>
                        </div>
                        <div class="font-size-xs text-muted">just now</div>
                    </li>
                    <li>
                        <i class="fa fa-check text-success"></i>
                        <div class="font-w600">New patient was added successfully</div>
                        <div>
                            <a class="font-w600 text-success" href="javascript:void(0)"><?php $cb->get_name(); ?></a>
                        </div>
                        <div class="font-size-xs text-muted">15 min ago</div>
                    </li>
                    <li>
                        <i class="fa fa-pencil text-info"></i>
                        <div class="font-w600">You edited a file</div>
                        <div>
                            <a class="font-w600 text-info" href="javascript:void(0)">
                                <i class="fa fa-file-text-o"></i> Prescription#2.doc
                            </a>
                        </div>
                        <div class="font-size-xs text-muted">1 day ago</div>
                    </li>
                    <li>
                        <i class="fa fa-paypal text-primary"></i>
                        <div class="font-w600">New payment received!</div>
                        <div>
                            From <a class="font-w600" href="javascript:void(0)"><?php $cb->get_name(); ?></a>
                        </div>
                        <div class="font-size-xs text-muted">1 day ago</div>
                    </li>
                    <li>
                        <i class="fa fa-check text-success"></i>
                        <div class="font-w600">New appointment was scheduled successfully</div>
                        <div>
                            Tomorrow with <a class="font-w600 text-success" href="javascript:void(0)"><?php $cb->get_name(); ?></a>
                        </div>
                        <div class="font-size-xs text-muted">2 days ago</div>
                    </li>
                </ul>
                <a class="btn btn-block btn-alt-secondary" href="javascript:void(0)">
                    Load more..
                </a>
                <a class="btn btn-block btn-hero btn-alt-primary" href="javascript:void(0)">
                    <i class="fa fa-flag mr-5"></i>
                    View All Notifications
                </a>
            </div>
        </div>
        <!-- END Notifications -->
    </div>
    <!-- END Side Content -->
</aside>
<!-- END Side Overlay -->
