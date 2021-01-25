<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <!-- Stats Widgets -->
    <h2 class="content-heading">Stats Widgets <small>Simple</small></h2>
    <div class="row gutters-tiny">
        <!-- Row #1 -->
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="font-size-h2 font-w700">64</div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">Sales</div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="font-size-h2 font-w700">$740</div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">Earnings</div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full text-right">
                    <div class="font-size-h2 font-w700">$3,900</div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">Total</div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full text-right">
                    <div class="font-size-h2 font-w700">$16,800</div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">Estimated</div>
                </div>
            </a>
        </div>
        <!-- END Row #1 -->
    </div>
    <div class="row gutters-tiny">
        <!-- Row #2 -->
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="py-50 text-center">
                        <div class="font-size-h2 font-w700 text-primary">72</div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Sales</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="py-50 text-center">
                        <div class="font-size-h2 font-w700 text-success">$620</div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Earnings</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full text-right">
                    <div class="py-50 text-center">
                        <div class="font-size-h2 font-w700 text-info">$2,760</div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Total</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full text-right">
                    <div class="py-50 text-center">
                        <div class="font-size-h2 font-w700 text-warning">$12,850</div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Estimated</div>
                    </div>
                </div>
            </a>
        </div>
        <!-- END Row #2 -->
    </div>
    <div class="row gutters-tiny">
        <!-- Row #3 -->
        <div class="col-md-6">
            <a class="block block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="font-size-sm font-w600 text-uppercase text-muted">Sales</div>
                    <div class="py-50 text-center">
                        <div class="font-size-h1 font-w700 mb-0">680</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6">
            <a class="block block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="font-size-sm font-w600 text-uppercase text-muted text-right">Earnings</div>
                    <div class="py-50 text-center">
                        <div class="font-size-h1 font-w700 mb-0">$17,800</div>
                    </div>
                </div>
            </a>
        </div>
        <!-- END Row #3 -->
    </div>
    <div class="row gutters-tiny">
        <!-- Row #4 -->
        <div class="col-md-6 col-xl-3">
            <a class="block block-transparent" href="javascript:void(0)">
                <div class="block-content block-content-full bg-primary">
                    <div class="py-50 text-center bg-black-op-10">
                        <div class="font-size-h2 font-w700 mb-0 text-white">85</div>
                        <div class="font-size-sm font-w600 text-uppercase text-white-op">Sales</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-transparent" href="javascript:void(0)">
                <div class="block-content block-content-full bg-gd-lake">
                    <div class="py-50 text-center bg-black-op-10">
                        <div class="font-size-h2 font-w700 mb-0 text-white">$1050</div>
                        <div class="font-size-sm font-w600 text-uppercase text-white-op">Earnings</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-transparent" href="javascript:void(0)">
                <div class="block-content block-content-full text-right bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo26.jpg');">
                    <div class="py-50 text-center bg-black-op-25">
                        <div class="font-size-h2 font-w700 mb-0 text-white">$9,100</div>
                        <div class="font-size-sm font-w600 text-uppercase text-white-op">Total</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-transparent" href="javascript:void(0)">
                <div class="block-content block-content-full text-right bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo28.jpg');">
                    <div class="py-50 text-center bg-black-op-25">
                        <div class="font-size-h2 font-w700 mb-0 text-white">52</div>
                        <div class="font-size-sm font-w600 text-uppercase text-white-op">Seats Available</div>
                    </div>
                </div>
            </a>
        </div>
        <!-- END Row #4 -->
    </div>
    <div class="row gutters-tiny">
        <!-- Row #5 -->
        <div class="col-md-6 col-xl-3">
            <a class="block block-transparent" href="javascript:void(0)">
                <div class="block-content block-content-full bg-primary-lighter">
                    <div class="py-50 text-center bg-white-op-25">
                        <div class="font-size-h2 font-w700 mb-0 text-primary">78</div>
                        <div class="font-size-sm font-w600 text-uppercase text-primary-dark">Sales</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-transparent" href="javascript:void(0)">
                <div class="block-content block-content-full bg-success-light">
                    <div class="py-50 text-center bg-white-op-25">
                        <div class="font-size-h2 font-w700 mb-0 text-success">$880</div>
                        <div class="font-size-sm font-w600 text-uppercase text-pulse-dark">Earnings</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-transparent" href="javascript:void(0)">
                <div class="block-content block-content-full bg-info-light">
                    <div class="py-50 text-center bg-white-op-25">
                        <div class="font-size-h2 font-w700 mb-0 text-info">$4,500</div>
                        <div class="font-size-sm font-w600 text-uppercase">Total</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-transparent" href="javascript:void(0)">
                <div class="block-content block-content-full bg-warning-light">
                    <div class="py-50 text-center bg-white-op-25">
                        <div class="font-size-h2 font-w700 mb-0 text-warning">$19,700</div>
                        <div class="font-size-sm font-w600 text-uppercase">Estimated</div>
                    </div>
                </div>
            </a>
        </div>
        <!-- END Row #5 -->
    </div>
    <!-- END Simple Stats Widgets -->

    <!-- Stats Widgets with Icons -->
    <h2 class="content-heading">Stats Widgets <small>Icons</small></h2>
    <div class="row gutters-tiny">
        <!-- Row #1 -->
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-shadow text-right" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="float-left mt-10">
                        <i class="si si-bag fa-3x text-body-bg-dark"></i>
                    </div>
                    <div class="font-size-h3 font-w600">34</div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">Sales</div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-shadow text-right" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="float-left mt-10">
                        <i class="si si-wallet fa-3x text-body-bg-dark"></i>
                    </div>
                    <div class="font-size-h3 font-w600">$780</div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">Earnings</div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-shadow text-left" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="float-right mt-10">
                        <i class="si si-users fa-3x text-body-bg-dark"></i>
                    </div>
                    <div class="font-size-h3 font-w600">65</div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">Online</div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-shadow text-left" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="float-right mt-10">
                        <i class="si si-briefcase fa-3x text-body-bg-dark"></i>
                    </div>
                    <div class="font-size-h3 font-w600">7</div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">Projects</div>
                </div>
            </a>
        </div>
        <!-- END Row #1 -->
    </div>
    <div class="row gutters-tiny">
        <!-- Row #2 -->
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="py-20 text-center">
                        <div class="mb-20">
                            <i class="si si-bag fa-4x text-body-bg-dark"></i>
                        </div>
                        <div class="font-size-h3 font-w600">56</div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Sales</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="py-20 text-center">
                        <div class="mb-20">
                            <i class="si si-wallet fa-4x text-success"></i>
                        </div>
                        <div class="font-size-h3 font-w600">$1,230</div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Earnings</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="py-20 text-center">
                        <div class="mb-20">
                            <i class="si si-users fa-4x text-info"></i>
                        </div>
                        <div class="font-size-h3 font-w600">77</div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Online</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="py-20 text-center">
                        <div class="mb-20">
                            <i class="si si-briefcase fa-4x text-warning"></i>
                        </div>
                        <div class="font-size-h3 font-w600">7</div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Projects</div>
                    </div>
                </div>
            </a>
        </div>
        <!-- END Row #2 -->
    </div>
    <div class="row gutters-tiny">
        <!-- Row #3 -->
        <div class="col-md-6">
            <a class="block" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <i class="si si-briefcase fa-2x text-body-bg-dark"></i>
                    <div class="row py-20">
                        <div class="col-6 text-right border-r">
                            <div class="font-size-h3 font-w600">54</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Projects</div>
                        </div>
                        <div class="col-6">
                            <div class="font-size-h3 font-w600">234</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Tickets</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6">
            <a class="block" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="text-right">
                        <i class="si si-users fa-2x text-body-bg-dark"></i>
                    </div>
                    <div class="row py-20">
                        <div class="col-6 text-right border-r">
                            <div class="font-size-h3 font-w600 text-info">5400</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Accounts</div>
                        </div>
                        <div class="col-6">
                            <div class="font-size-h3 font-w600 text-success">97%</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Active</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <!-- END Row #3 -->
    </div>
    <div class="row gutters-tiny">
        <!-- Row #4 -->
        <div class="col-md-6">
            <a class="block" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <i class="si si-game-controller fa-2x text-pulse"></i>
                    <div class="row py-20 text-center">
                        <div class="col-6 border-r">
                            <div class="font-size-h3 font-w600">24</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Games</div>
                        </div>
                        <div class="col-6">
                            <div class="font-size-h3 font-w600">3</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Subscriptions</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6">
            <a class="block" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="text-right">
                        <i class="si si-wallet fa-2x text-success"></i>
                    </div>
                    <div class="row py-20 text-center">
                        <div class="col-6 border-r">
                            <div class="font-size-h3 font-w600">$240</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Today</div>
                        </div>
                        <div class="col-6">
                            <div class="font-size-h3 font-w600">$1,670</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Last Week</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <!-- END Row #4 -->
    </div>
    <div class="row gutters-tiny">
        <!-- Row #5 -->
        <div class="col-md-6 col-xl-3">
            <a class="block block-transparent" href="javascript:void(0)">
                <div class="block-content block-content-full bg-primary">
                    <div class="py-20 text-center">
                        <div class="mb-20">
                            <i class="si si-bag fa-4x text-primary-lighter"></i>
                        </div>
                        <div class="font-size-h3 font-w600 text-white">56</div>
                        <div class="font-size-sm font-w600 text-uppercase text-primary-lighter">Sales</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-transparent" href="javascript:void(0)">
                <div class="block-content block-content-full bg-warning">
                    <div class="py-20 text-center">
                        <div class="mb-20">
                            <i class="si si-wallet fa-4x text-warning-light"></i>
                        </div>
                        <div class="font-size-h3 font-w600 text-white">$1,230</div>
                        <div class="font-size-sm font-w600 text-uppercase text-warning-light">Earnings</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-transparent" href="javascript:void(0)">
                <div class="block-content block-content-full bg-info">
                    <div class="py-20 text-center">
                        <div class="mb-20">
                            <i class="si si-users fa-4x text-info-light"></i>
                        </div>
                        <div class="font-size-h3 font-w600 text-white">77</div>
                        <div class="font-size-sm font-w600 text-uppercase text-info-light">Online</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-transparent" href="javascript:void(0)">
                <div class="block-content block-content-full bg-success">
                    <div class="py-20 text-center">
                        <div class="mb-20">
                            <i class="si si-briefcase fa-4x text-success-light"></i>
                        </div>
                        <div class="font-size-h3 font-w600 text-white">7</div>
                        <div class="font-size-sm font-w600 text-uppercase text-warning-light">Projects</div>
                    </div>
                </div>
            </a>
        </div>
        <!-- END Row #5 -->
    </div>
    <div class="row gutters-tiny">
        <!-- Row #6 -->
        <div class="col-md-6 col-xl-3">
            <a class="block block-transparent" href="javascript:void(0)">
                <div class="block-content block-content-full bg-corporate text-center">
                    <div class="item item-2x item-circle bg-black-op-10 mx-auto mb-20">
                        <i class="si si-bag text-corporate-lighter"></i>
                    </div>
                    <div class="font-size-h3 font-w600 text-white">124</div>
                    <div class="font-size-sm font-w600 text-uppercase text-corporate-lighter">Sales</div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-transparent" href="javascript:void(0)">
                <div class="block-content block-content-full bg-danger text-center">
                    <div class="item item-2x item-circle bg-black-op-10 mx-auto mb-20">
                        <i class="si si-badge text-danger-light"></i>
                    </div>
                    <div class="font-size-h3 font-w600 text-white">43</div>
                    <div class="font-size-sm font-w600 text-uppercase text-danger-light">Awards</div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-transparent" href="javascript:void(0)">
                <div class="block-content block-content-full bg-elegance text-center">
                    <div class="item item-2x item-circle bg-black-op-10 mx-auto mb-20">
                        <i class="si si-basket text-elegance-lighter"></i>
                    </div>
                    <div class="font-size-h3 font-w600 text-white">2</div>
                    <div class="font-size-sm font-w600 text-uppercase text-elegance-lighter">Cart</div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-transparent" href="javascript:void(0)">
                <div class="block-content block-content-full bg-gd-leaf text-center">
                    <div class="item item-2x item-circle bg-black-op-10 mx-auto mb-20">
                        <i class="si si-calendar text-white-op"></i>
                    </div>
                    <div class="font-size-h3 font-w600 text-white">6</div>
                    <div class="font-size-sm font-w600 text-uppercase text-white-op">Events</div>
                </div>
            </a>
        </div>
        <!-- END Row #6 -->
    </div>
    <!-- END Stats Widgets with Icons -->

    <!-- Stats Widgets with Easy Pie Chart -->
    <!-- Easy Pie Chart (.js-pie-chart class is initialized in Helpers.easyPieChart()) -->
    <!-- For more info and examples you can check out http://rendro.github.io/easy-pie-chart/ -->
    <h2 class="content-heading">Stats Widgets <small>Easy Pie Chart</small></h2>
    <div class="row gutters-tiny">
        <!-- Row #1 -->
        <div class="col-md-6 col-xl-3">
            <a class="block" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="py-20 text-center">
                        <div class="js-pie-chart pie-chart mb-20" data-percent="47" data-line-width="4" data-size="100" data-bar-color="#9ccc65" data-track-color="#e9e9e9">
                            <span>
                                <?php $cb->get_avatar(); ?>
                            </span>
                        </div>
                        <div class="font-size-h3 font-w600">2,3</div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">from 5GB</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="py-20 text-center">
                        <div class="js-pie-chart pie-chart mb-20" data-percent="90" data-line-width="4" data-size="100" data-bar-color="#ef5350" data-track-color="#e9e9e9">
                            <span>
                                <?php $cb->get_avatar(); ?>
                            </span>
                        </div>
                        <div class="font-size-h3 font-w600">90%</div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Storage</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="py-20 text-center">
                        <div class="js-pie-chart pie-chart mb-20" data-percent="75" data-line-width="4" data-size="100" data-bar-color="#ffca28" data-track-color="#e9e9e9">
                            <span>
                                <?php $cb->get_avatar(); ?>
                            </span>
                        </div>
                        <div class="font-size-h3 font-w600">75%</div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Profile</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block" href="javascript:void(0)">
                <div class="block-content block-content-full">
                    <div class="py-20 text-center">
                        <div class="js-pie-chart pie-chart mb-20" data-percent="50" data-line-width="4" data-size="100" data-bar-color="#42a5f5" data-track-color="#e9e9e9">
                            <span>
                                <?php $cb->get_avatar(); ?>
                            </span>
                        </div>
                        <div class="font-size-h3 font-w600">4</div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">From 8 Tasks</div>
                    </div>
                </div>
            </a>
        </div>
        <!-- END Row #1 -->
    </div>
    <div class="row gutters-tiny">
        <!-- Row #2 -->
        <div class="col-md-6 col-xl-3">
            <div class="block">
                <div class="block-content block-content-full bg-primary-light">
                    <div class="js-pie-chart pie-chart" data-percent="88" data-line-width="4" data-size="120" data-bar-color="#ffffff" data-track-color="rgba(255,255,255,.25)" data-scale-color="rgba(255,255,255,.5)">
                        <span class="text-white">88MB<br><small class="text-white-op">/100MB</small></span>
                    </div>
                </div>
                <div class="block-content block-content-full text-center">
                    <a class="btn btn-rounded btn-alt-primary" href="javascript:void(0)">
                        <i class="fa fa-arrow-up mr-5"></i> Upgrade Plan
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="block">
                <div class="block-content block-content-full bg-warning">
                    <div class="js-pie-chart pie-chart" data-percent="30" data-line-width="4" data-size="120" data-bar-color="#ffffff" data-track-color="rgba(255,255,255,.25)" data-scale-color="rgba(255,255,255,.5)">
                        <span class="text-white">6 Slots</span>
                    </div>
                </div>
                <div class="block-content block-content-full text-center">
                    <a class="btn btn-rounded btn-alt-warning" href="javascript:void(0)">
                        <i class="fa fa-plus mr-5"></i> Add new
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="block">
                <div class="block-content block-content-full bg-pulse">
                    <div class="js-pie-chart pie-chart" data-percent="65" data-line-width="4" data-size="120" data-bar-color="#ffffff" data-track-color="rgba(255,255,255,.25)" data-scale-color="rgba(255,255,255,.5)">
                        <span class="text-white">17<br>Projects</span>
                    </div>
                </div>
                <div class="block-content block-content-full text-center">
                    <a class="btn btn-rounded btn-alt-danger" href="javascript:void(0)">
                        <i class="fa fa-minus mr-5"></i> Remove
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="block">
                <div class="block-content block-content-full bg-success">
                    <div class="js-pie-chart pie-chart" data-percent="5" data-line-width="4" data-size="120" data-bar-color="#ffffff" data-track-color="rgba(255,255,255,.25)" data-scale-color="rgba(255,255,255,.5)">
                        <span class="text-white">3<br>Emails</span>
                    </div>
                </div>
                <div class="block-content block-content-full text-center">
                    <a class="btn btn-rounded btn-alt-success" href="javascript:void(0)">
                        <i class="fa fa-inbox mr-5"></i> Inbox
                    </a>
                </div>
            </div>
        </div>
        <!-- END Row #2 -->
    </div>
    <div class="row gutters-tiny">
        <!-- Row #3 -->
        <div class="col-md-6">
            <div class="block block-transparent bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo13.jpg');">
                <div class="block-content bg-primary-op">
                    <div class="row items-push py-20">
                        <div class="col-sm-6">
                            <div class="js-pie-chart pie-chart" data-percent="6" data-line-width="4" data-size="120" data-bar-color="#ffffff" data-track-color="rgba(255,255,255,.25)">
                                <span class="text-white">79<br><i class="fa fa-line-chart"></i> Sales</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="js-pie-chart pie-chart" data-percent="67" data-line-width="4" data-size="120" data-bar-color="#ffffff" data-track-color="rgba(255,255,255,.25)">
                                <span class="text-white">$4,567<br><i class="fa fa-money"></i> Wallet</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="block block-transparent bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo22.jpg');">
                <div class="block-content bg-primary-dark-op">
                    <div class="row items-push py-20">
                        <div class="col-sm-6">
                            <div class="js-pie-chart pie-chart" data-percent="6" data-line-width="4" data-size="120" data-bar-color="#ffffff" data-track-color="rgba(255,255,255,.25)">
                                <span class="text-white">45<br><i class="fa fa-briefcase"></i> Products</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="js-pie-chart pie-chart" data-percent="67" data-line-width="4" data-size="120" data-bar-color="#ffffff" data-track-color="rgba(255,255,255,.25)">
                                <span class="text-white">2<br><i class="fa fa-ticket"></i> Tickets</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Row #3 -->
    </div>
    <!-- END Stats Widgets with Easy Pie Chart -->

    <!-- Stats Widgets with Chart.js -->
    <!-- Chart.js Charts functionality is initialized in js/pages/be_widgets_stats.min.js which was auto compiled from _es6/pages/be_widgets_stats.js -->
    <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
    <h2 class="content-heading">Stats Widgets <small>Chart.js</small></h2>
    <div class="row gutters-tiny">
        <!-- Row #1 -->
        <div class="col-md-6">
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">
                        Statistics <small>This Week</small>
                    </h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option">
                            <i class="si si-wrench"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content block-content-full bg-body-light text-center">
                    <div class="row gutters-tiny">
                        <div class="col-4">
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Sales</div>
                            <div class="font-size-h3 font-w600">63</div>
                            <div class="font-w600 text-success">
                                <i class="fa fa-caret-up"></i> +12%
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Earnings</div>
                            <div class="font-size-h3 font-w600">$ 880</div>
                            <div class="font-w600 text-danger">
                                <i class="fa fa-caret-down"></i> -10%
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Balance</div>
                            <div class="font-size-h3 font-w600">$ 4,560</div>
                            <div class="font-w600 text-success">
                                <i class="fa fa-caret-up"></i> +23%
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <div class="pull-all">
                        <!-- Lines Chart Container -->
                        <canvas class="js-chartjs-widget-lines"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">
                        Statistics <small>This Week</small>
                    </h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option">
                            <i class="si si-wrench"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content block-content-full bg-body-light">
                    <div class="pull-all">
                        <!-- Lines Chart Container -->
                        <canvas class="js-chartjs-widget-lines2"></canvas>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <div class="row gutters-tiny text-center">
                        <div class="col-4">
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Sales</div>
                            <div class="font-size-h3 font-w600">79</div>
                            <div class="font-w600 text-success">
                                <i class="fa fa-caret-up"></i> +15%
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Earnings</div>
                            <div class="font-size-h3 font-w600">$ 690</div>
                            <div class="font-w600 text-danger">
                                <i class="fa fa-caret-down"></i> -5%
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Balance</div>
                            <div class="font-size-h3 font-w600">$ 3,915</div>
                            <div class="font-w600 text-success">
                                <i class="fa fa-caret-up"></i> +33%
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Row #1 -->
    </div>
    <div class="row gutters-tiny">
        <!-- Row #2 -->
        <div class="col-md-6">
            <div class="block block-transparent bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo23@2x.jpg');">
                <div class="block-content block-content-full text-center bg-black-op-25">
                    <div class="row gutters-tiny pt-30">
                        <div class="col-4">
                            <div class="font-size-sm font-w600 text-white-op text-uppercase">Sales</div>
                            <div class="font-size-h3 font-w600 text-white">98</div>
                            <div class="font-w600 text-success">
                                <i class="fa fa-caret-up"></i> +12%
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="font-size-sm font-w600 text-white-op text-uppercase">Earnings</div>
                            <div class="font-size-h3 font-w600 text-white">$ 620</div>
                            <div class="font-w600 text-danger">
                                <i class="fa fa-caret-down"></i> -10%
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="font-size-sm font-w600 text-white-op text-uppercase">Balance</div>
                            <div class="font-size-h3 font-w600 text-white">$ 2,460</div>
                            <div class="font-w600 text-success">
                                <i class="fa fa-caret-up"></i> +23%
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-content block-content-full bg-black-op-25">
                    <div class="pull-all">
                        <!-- Lines Chart Container -->
                        <canvas class="js-chartjs-widget-lines3"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="block block-transparent bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo27@2x.jpg');">
                <div class="block-content block-content-full text-center bg-black-op">
                    <div class="row gutters-tiny pt-30">
                        <div class="col-4">
                            <div class="font-size-sm font-w600 text-white-op text-uppercase">Sales</div>
                            <div class="font-size-h3 font-w600 text-white">136</div>
                            <div class="font-w600 text-danger">
                                <i class="fa fa-caret-down"></i> -26%
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="font-size-sm font-w600 text-white-op text-uppercase">Earnings</div>
                            <div class="font-size-h3 font-w600 text-white">$ 930</div>
                            <div class="font-w600 text-success">
                                <i class="fa fa-caret-up"></i> +25%
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="font-size-sm font-w600 text-white-op text-uppercase">Balance</div>
                            <div class="font-size-h3 font-w600 text-white">$ 9,310</div>
                            <div class="font-w600 text-success">
                                <i class="fa fa-caret-up"></i> +35%
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-content block-content-full bg-black-op">
                    <div class="pull-all">
                        <!-- Lines Chart Container -->
                        <canvas class="js-chartjs-widget-lines4"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Row #2 -->
    </div>
    <!-- END Stats Widgets with Chart.js -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/sparkline/jquery.sparkline.min.js'); ?>
<?php $cb->get_js('js/plugins/easy-pie-chart/jquery.easypiechart.min.js'); ?>
<?php $cb->get_js('js/plugins/chartjs/Chart.bundle.min.js'); ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/be_widgets_stats.min.js'); ?>

<!-- Page JS Helpers (Easy Pie Chart Plugin) -->
<script>jQuery(function(){ Codebase.helpers('easy-pie-chart'); });</script>

<?php require 'inc/_global/views/footer_end.php'; ?>
