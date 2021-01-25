<?php
/**
 * dashboards/pop/views/inc_side_overlay.php
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
            <button type="button" class="btn btn-dual-secondary align-v-r" data-toggle="layout" data-action="side_overlay_close">
                <i class="fa fa-times text-danger"></i>
            </button>
            <!-- END Close Side Overlay -->

            <!-- User Info -->
            <div class="content-header-item">
                <a class="img-link mr-5" href="javascript:void(0)">
                    <?php $cb->get_avatar(14, '', 32); ?>
                </a>
                <a class="align-middle link-effect font-w600" href="javascript:void(0)">Admin</a>
            </div>
            <!-- END User Info -->
        </div>
    </div>
    <!-- END Side Header -->

    <!-- Side Content -->
    <div class="content-side">
        <!-- Mini Stats -->
        <div class="block pull-t pull-r-l">
            <div class="block-content block-content-full block-content-sm bg-danger-light">
                <div class="row text-center">
                    <div class="col-4">
                        <div class="font-size-sm font-w600 text-uppercase text-pulse-dark">Sales</div>
                        <div class="font-size-h4 text-pulse-darker">350</div>
                    </div>
                    <div class="col-4">
                        <div class="font-size-sm font-w600 text-uppercase text-pulse-dark">Tickets</div>
                        <div class="font-size-h4 text-pulse-darker">25</div>
                    </div>
                    <div class="col-4">
                        <div class="font-size-sm font-w600 text-uppercase text-pulse-dark">Projects</div>
                        <div class="font-size-h4 text-pulse-darker">17</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Mini Stats -->

        <!-- Search -->
        <div class="block pull-r-l">
            <div class="block-content block-content-full block-content-sm bg-body-light">
                <form>
                    <div class="input-group">
                        <input type="text" class="form-control" id="side-overlay-search" name="side-overlay-search" placeholder="Search..">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-secondary px-10">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END Search -->

        <!-- Notifications -->
        <div class="block pull-r-l">
            <div class="block-header bg-body-light">
                <h3 class="block-title">Notifications</h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                        <i class="si si-refresh"></i>
                    </button>
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                </div>
            </div>
            <div class="block-content">
                <ul class="list list-activity">
                    <li>
                        <i class="si si-wallet text-success"></i>
                        <div class="font-w600">+$29 New sale</div>
                        <div>
                            <a href="javascript:void(0)">Admin Template</a>
                        </div>
                        <div class="font-size-xs text-muted">5 min ago</div>
                    </li>
                    <li>
                        <i class="si si-close text-danger"></i>
                        <div class="font-w600">Project removed</div>
                        <div>
                            <a href="javascript:void(0)">Best Icon Set</a>
                        </div>
                        <div class="font-size-xs text-muted">26 min ago</div>
                    </li>
                    <li>
                        <i class="si si-pencil text-info"></i>
                        <div class="font-w600">You edited the file</div>
                        <div>
                            <a href="javascript:void(0)">
                                <i class="fa fa-file-text-o"></i> Docs.doc
                            </a>
                        </div>
                        <div class="font-size-xs text-muted">3 hours ago</div>
                    </li>
                    <li>
                        <i class="si si-plus text-success"></i>
                        <div class="font-w600">New user</div>
                        <div>
                            <a href="javascript:void(0)">StudioWeb - View Profile</a>
                        </div>
                        <div class="font-size-xs text-muted">5 hours ago</div>
                    </li>
                    <li>
                        <i class="si si-wrench text-warning"></i>
                        <div class="font-w600">Core v3.9 is available</div>
                        <div>
                            <a href="javascript:void(0)">Update now</a>
                        </div>
                        <div class="font-size-xs text-muted">8 hours ago</div>
                    </li>
                    <li>
                        <i class="si si-user-follow text-pulse"></i>
                        <div class="font-w600">+1 Friend Request</div>
                        <div>
                            <a href="javascript:void(0)">Accept</a>
                        </div>
                        <div class="font-size-xs text-muted">1 day ago</div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END Notifications -->
    </div>
    <!-- END Side Content -->
</aside>
<!-- END Side Overlay -->
