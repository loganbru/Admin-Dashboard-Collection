<?php
/**
 * dashboards/minimal/views/inc_sidebar.php
 *
 * Author: pixelcave
 *
 * The sidebar of each page
 *
 */
?>

<!-- Sidebar -->
<nav id="sidebar">
    <!-- Sidebar Content -->
    <div class="sidebar-content">
        <!-- Side Header -->
        <div class="content-header content-header-fullrow bg-black-op-10">
            <div class="content-header-section text-center align-parent">
                <!-- Close Sidebar, Visible only on mobile screens -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                    <i class="fa fa-times text-danger"></i>
                </button>
                <!-- END Close Sidebar -->

                <!-- Logo -->
                <div class="content-header-item">
                    <a class="link-effect font-w700" href="index.php">
                        <i class="si si-fire text-primary"></i>
                        <span class="font-size-xl text-dual-primary-dark">code</span><span class="font-size-xl text-primary">base</span>
                    </a>
                </div>
                <!-- END Logo -->
            </div>
        </div>
        <!-- END Side Header -->

        <!-- Side Main Navigation -->
        <div class="content-side content-side-full">
            <!--
            Mobile navigation, desktop navigation can be found in #page-header

            If you would like to use the same navigation in both mobiles and desktops, you can use exactly the same markup inside sidebar and header navigation ul lists
            -->
            <ul class="nav-main">
                <?php $cb->build_nav(); ?>
            </ul>
        </div>
        <!-- END Side Main Navigation -->
    </div>
    <!-- Sidebar Content -->
</nav>
<!-- END Sidebar -->
