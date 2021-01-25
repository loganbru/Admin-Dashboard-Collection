<?php
/**
 * dashboards/social/views/inc_header.php
 *
 * Author: pixelcave
 *
 * The header of each page
 *
 */
?>

<!-- Header -->
<header id="page-header">
    <!-- Header Content -->
    <div class="content-header">
        <div class="content-header-section w-100">
            <div class="row no-gutters">
                <div class="col">
                    <!-- Toggle Sidebar -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <button type="button" class="btn btn-dual-secondary d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                        <i class="fa fa-navicon"></i>
                    </button>
                    <!-- END Toggle Sidebar -->

                    <!-- Header Navigation -->
                    <!--
                    Desktop Navigation, mobile navigation can be found in #sidebar

                    If you would like to use the same navigation in both mobiles and desktops, you can use exactly the same markup inside sidebar and header navigation ul lists
                    If your sidebar menu includes headings, they won't be visible in your header navigation by default
                    If your sidebar menu includes icons and you would like to hide them, you can add the class 'nav-main-header-no-icons'
                    -->
                    <ul class="nav-main-header">
                        <li>
                            <a class="active" href="javascript:void(0)">
                                <i class="si si-home d-none d-xl-inline-block"></i> Home
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="si si-flag d-none d-xl-inline-block"></i> Notifications
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="si si-envelope d-none d-xl-inline-block"></i> Messages
                            </a>
                        </li>
                    </ul>
                    <!-- END Header Navigation -->
                </div>
                <div class="col-3 text-center">
                    <!-- Logo -->
                    <div class="content-header-item">
                        <a class="link-effect font-w700" href="index.php">
                            <i class="si si-fire text-primary"></i>
                            <span class="d-none d-md-inline-block">
                                <span class="font-size-xl text-dual-primary-dark">code</span><span class="font-size-xl text-primary">base</span>
                            </span>
                        </a>
                    </div>
                    <!-- END Logo -->
                </div>
                <div class="col text-right">
                    <!-- Open Search Section -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <button type="button" class="btn btn-dual-secondary" data-toggle="layout" data-action="header_search_on">
                        <i class="fa fa-search"></i>
                    </button>
                    <!-- END Open Search Section -->

                    <!-- Compose -->
                    <button type="button" class="btn btn-alt-success ml-5">
                        <i class="fa fa-pencil-square-o"></i>
                        <span class="d-none d-sm-inline">Compose</span>
                    </button>
                    <!-- END Compose -->
                </div>
            </div>
        </div>
    </div>
    <!-- END Header Content -->

    <!-- Header Search -->
    <div id="page-header-search" class="overlay-header">
        <div class="content-header content-header-fullrow">
            <form>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <!-- Close Search Section -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-secondary px-15" data-toggle="layout" data-action="header_search_off">
                            <i class="fa fa-times"></i>
                        </button>
                        <!-- END Close Search Section -->
                    </div>
                    <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary px-15">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- END Header Search -->

    <!-- Header Loader -->
    <div id="page-header-loader" class="overlay-header bg-primary">
        <div class="content-header content-header-fullrow text-center">
            <div class="content-header-item">
                <i class="fa fa-sun-o fa-spin text-white"></i>
            </div>
        </div>
    </div>
    <!-- END Header Loader -->
</header>
<!-- END Header -->
