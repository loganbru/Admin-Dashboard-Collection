<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <!-- Easy Pie Chart (.js-pie-chart class is initialized in Template._easyPieChart()) -->
    <!-- For more info and examples you can check out http://rendro.github.io/easy-pie-chart/ -->
    <!-- Randomize Values Buttons functionality initialized in js/pages/be_comp_charts.min.js which was auto compiled from _es6/pages/be_comp_charts.js -->
    <h2 class="content-heading">Easy Pie Chart</h2>
    <div class="row">
        <div class="col-xl-6">
            <!-- Avatar -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Avatar</h3>
                    <div class="block-options">
                        <button type="button" class="js-pie-randomize btn-block-option" data-toggle="tooltip" title="Randomize">
                            <i class="fa fa-random"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <div class="row items-push-2x text-center invisible" data-toggle="appear">
                        <div class="col-6 col-md-4">
                            <!-- Pie Chart Container -->
                            <div class="js-pie-chart pie-chart" data-percent="25" data-line-width="2" data-size="100" data-bar-color="#ef5350" data-track-color="#e9e9e9" data-scale-color="#d9d9d9">
                                <span>
                                    <?php $cb->get_avatar(); ?>
                                </span>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <!-- Pie Chart Container -->
                            <div class="js-pie-chart pie-chart" data-percent="50" data-line-width="2" data-size="100" data-bar-color="#ffca28" data-track-color="#e9e9e9" data-scale-color="#d9d9d9">
                                <span>
                                    <?php $cb->get_avatar(); ?>
                                </span>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <!-- Pie Chart Container -->
                            <div class="js-pie-chart pie-chart" data-percent="90" data-line-width="2" data-size="100" data-bar-color="#9ccc65" data-track-color="#e9e9e9" data-scale-color="#d9d9d9">
                                <span>
                                    <?php $cb->get_avatar(); ?>
                                </span>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <!-- Pie Chart Container -->
                            <div class="js-pie-chart pie-chart" data-percent="25" data-line-width="4" data-size="100" data-bar-color="#ef5350" data-track-color="#e9e9e9">
                                <span>
                                    <?php $cb->get_avatar(); ?>
                                </span>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <!-- Pie Chart Container -->
                            <div class="js-pie-chart pie-chart" data-percent="50" data-line-width="4" data-size="100" data-bar-color="#ffca28" data-track-color="#e9e9e9">
                                <span>
                                    <?php $cb->get_avatar(); ?>
                                </span>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <!-- Pie Chart Container -->
                            <div class="js-pie-chart pie-chart" data-percent="90" data-line-width="4" data-size="100" data-bar-color="#9ccc65" data-track-color="#e9e9e9">
                                <span>
                                    <?php $cb->get_avatar(); ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Avatar -->
        </div>
        <div class="col-xl-6">
            <!-- Simple -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Simple</h3>
                    <div class="block-options">
                        <button type="button" class="js-pie-randomize btn-block-option" data-toggle="tooltip" title="Randomize">
                            <i class="fa fa-random"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <div class="row items-push-2x text-center invisible" data-toggle="appear">
                        <div class="col-6 col-md-4">
                            <!-- Pie Chart Container -->
                            <div class="js-pie-chart pie-chart" data-percent="25" data-line-width="2" data-size="100" data-bar-color="#ef5350" data-track-color="#e9e9e9" data-scale-color="#d9d9d9">
                                <span>25mb<br><small class="text-muted">/100mb</small></span>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <!-- Pie Chart Container -->
                            <div class="js-pie-chart pie-chart" data-percent="50" data-line-width="2" data-size="100" data-bar-color="#ffca28" data-track-color="#e9e9e9" data-scale-color="#d9d9d9">
                                <span>50%</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <!-- Pie Chart Container -->
                            <div class="js-pie-chart pie-chart" data-percent="90" data-line-width="2" data-size="100" data-bar-color="#9ccc65" data-track-color="#e9e9e9" data-scale-color="#d9d9d9">
                                <span>90<br><small class="text-muted">/100</small></span>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <!-- Pie Chart Container -->
                            <div class="js-pie-chart pie-chart" data-percent="25" data-line-width="4" data-size="100" data-bar-color="#ef5350" data-track-color="#e9e9e9">
                                <span>25mb<br><small class="text-muted">/100mb</small></span>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <!-- Pie Chart Container -->
                            <div class="js-pie-chart pie-chart" data-percent="50" data-line-width="4" data-size="100" data-bar-color="#ffca28" data-track-color="#e9e9e9">
                                <span>50%</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <!-- Pie Chart Container -->
                            <div class="js-pie-chart pie-chart" data-percent="90" data-line-width="4" data-size="100" data-bar-color="#9ccc65" data-track-color="#e9e9e9">
                                <span>90<br><small class="text-muted">/100</small></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Simple -->
        </div>
    </div>
    <!-- END Easy Pie Chart -->

    <!-- jQuery Sparkline functionality is initialized in js/pages/be_comp_charts.min.js which was auto compiled from _es6/pages/be_comp_charts.js -->
    <!-- For more info and examples you can check out http://omnipotent.net/jquery.sparkline/#s-about -->
    <h2 class="content-heading">Sparkline</h2>
    <div class="row">
        <div class="col-xl-6">
            <!-- Lines -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Lines</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <div class="row items-push-2x text-center invisible" data-toggle="appear">
                        <div class="col-6 col-md-4">
                            <!-- Sparkline Line 1 Container -->
                            <span class="js-slc-line1">4,3,8,2,4,5,7,4</span>
                            <div class="font-w600 mt-10">
                                <i class="fa fa-ticket text-muted mr-5"></i> Tickets
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <!-- Sparkline Line 2 Container -->
                            <span class="js-slc-line2">500,700,1500,980,1210,1350,900,1485</span>
                            <div class="font-w600 mt-10">
                                <i class="fa fa-line-chart text-muted mr-5"></i> Earnings
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <!-- Sparkline Line 3 Container -->
                            <span class="js-slc-line3">8,11,7,5,10,12,9,8</span>
                            <div class="font-w600 mt-10">
                                <i class="fa fa-suitcase text-muted mr-5"></i> Sales
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Lines -->
        </div>
        <div class="col-xl-6">
            <!-- Bars -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Bars</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <div class="row items-push-2x text-center invisible" data-toggle="appear">
                        <div class="col-6 col-md-4">
                            <!-- Sparkline Bar 1 Container -->
                            <span class="js-slc-bar1">4,3,2,4,4,5,7,8</span>
                            <div class="font-w600 mt-10">
                                <i class="fa fa-ticket text-muted"></i> Tickets
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <!-- Sparkline Bar 2 Container -->
                            <span class="js-slc-bar2">980,1210,1350,900,500,700,1500,1485</span>
                            <div class="font-w600 mt-10">
                                <i class="fa fa-line-chart text-muted"></i> Earnings
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <!-- Sparkline Bar 3 Container -->
                            <span class="js-slc-bar3">8,11,9,8,7,5,10,12</span>
                            <div class="font-w600 mt-10">
                                <i class="fa fa-suitcase text-muted"></i> Sales
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Bars -->
        </div>
        <div class="col-xl-6">
            <!-- Pie -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Pie</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <div class="row items-push-2x text-center invisible" data-toggle="appear">
                        <div class="col-6 col-md-4">
                            <!-- Sparkline Pie 1 Container -->
                            <span class="js-slc-pie1">15,25,26,18</span>
                            <div class="font-w600 mt-10">
                                <i class="fa fa-ticket text-muted mr-5"></i> Tickets
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <!-- Sparkline Pie 2 Container -->
                            <span class="js-slc-pie2">1500,1350,1280,800</span>
                            <div class="font-w600 mt-10">
                                <i class="fa fa-line-chart text-muted mr-5"></i> Earnings
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <!-- Sparkline Pie 3 Container -->
                            <span class="js-slc-pie3">350,390,420,375</span>
                            <div class="font-w600 mt-10">
                                <i class="fa fa-suitcase text-muted mr-5"></i> Sales
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Pie -->
        </div>
        <div class="col-xl-6">
            <!-- Tristate -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Tristate</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <div class="row items-push-2x text-center invisible" data-toggle="appear">
                        <div class="col-6 col-md-4">
                            <!-- Sparkline Tristate 1 Container -->
                            <span class="js-slc-tristate1">1,-1,-1,1,0,1,0,1</span>
                        </div>
                        <div class="col-6 col-md-4">
                            <!-- Sparkline Tristate 2 Container -->
                            <span class="js-slc-tristate2">-1,-1,1,1,0,1,1,-1</span>
                        </div>
                        <div class="col-12 col-md-4">
                            <!-- Sparkline Tristate 3 Container -->
                            <span class="js-slc-tristate3">-1,0,1,-1,0,-1,0,1</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Tristate -->
        </div>
    </div>
    <!-- END Sparkline Charts -->

    <!-- Chart.js Charts functionality is initialized in js/pages/be_comp_charts.min.js which was auto compiled from _es6/pages/be_comp_charts.js -->
    <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
    <h2 class="content-heading">Chart.js</h2>
    <div class="row">
        <div class="col-xl-6">
            <!-- Lines Chart -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Lines</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content block-content-full text-center">
                    <!-- Lines Chart Container -->
                    <canvas class="js-chartjs-lines"></canvas>
                </div>
            </div>
            <!-- END Lines Chart -->
        </div>
        <div class="col-xl-6">
            <!-- Bars Chart -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Bars</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content block-content-full text-center">
                    <!-- Bars Chart Container -->
                    <canvas class="js-chartjs-bars"></canvas>
                </div>
            </div>
            <!-- END Bars Chart -->
        </div>
        <div class="col-xl-6">
            <!-- Pie Chart -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Pie</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content block-content-full text-center">
                    <!-- Pie Chart Container -->
                    <canvas class="js-chartjs-pie"></canvas>
                </div>
            </div>
            <!-- END Pie Chart -->
        </div>
        <div class="col-xl-6">
            <!-- Donut Chart -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Donut</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content block-content-full text-center">
                    <!-- Donut Chart Container -->
                    <canvas class="js-chartjs-donut"></canvas>
                </div>
            </div>
            <!-- END Donut Chart -->
        </div>
        <div class="col-xl-6">
            <!-- Polar Area Chart -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Polar Area</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content block-content-full text-center">
                    <!-- Polar Area Chart Container -->
                    <canvas class="js-chartjs-polar"></canvas>
                </div>
            </div>
            <!-- END Polar Area Chart -->
        </div>
        <div class="col-xl-6">
            <!-- Radar Chart -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Radar</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content block-content-full text-center">
                    <!-- Radar Chart Container -->
                    <canvas class="js-chartjs-radar"></canvas>
                </div>
            </div>
            <!-- END Radar Chart -->
        </div>
    </div>
    <!-- END Chart.js Charts -->

    <!-- Flot Charts functionality is initialized in js/pages/be_comp_charts.min.js which was auto compiled from _es6/pages/be_comp_charts.js -->
    <!-- For more info and examples you can check out http://www.flotcharts.org/flot/examples -->
    <h2 class="content-heading">Flot Charts</h2>
    <div class="row">
        <div class="col-xl-12">
            <!-- Live Chart -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Live</h3>
                    <div class="block-options">
                        <div class="block-options-item">
                            <span class="js-flot-live-info text-primary font-w700"></span>
                        </div>
                        <div class="block-options-item">
                            <i class="fa fa-refresh fa-spin text-muted"></i>
                        </div>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <!-- Live Chart Container -->
                    <div class="js-flot-live" style="height: 380px;"></div>
                </div>
            </div>
            <!-- END Live Chart -->
        </div>
        <div class="col-xl-6">
            <!-- Lines Chart -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Lines</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <!-- Lines Chart Container -->
                    <div class="js-flot-lines" style="height: 340px;"></div>
                </div>
            </div>
            <!-- END Lines Chart -->
        </div>
        <div class="col-xl-6">
            <!-- Stacked Chart -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Stacked</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <!-- Stacked Chart Container -->
                    <div class="js-flot-stacked" style="height: 340px;"></div>
                </div>
            </div>
            <!-- END Stacked Chart -->
        </div>
        <div class="col-xl-6">
            <!-- Bars Chart -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Bars</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <!-- Bars Chart Container -->
                    <div class="js-flot-bars" style="height: 340px;"></div>
                </div>
            </div>
            <!-- END Bars Chart -->
        </div>
        <div class="col-xl-6">
            <!-- Pie Chart -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Pie</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <!-- Pie Chart Container -->
                    <div class="js-flot-pie" style="height: 340px;"></div>
                </div>
            </div>
            <!-- END Pie Chart -->
        </div>
    </div>
    <!-- END Flot Charts -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/sparkline/jquery.sparkline.min.js'); ?>
<?php $cb->get_js('js/plugins/easy-pie-chart/jquery.easypiechart.min.js'); ?>
<?php $cb->get_js('js/plugins/chartjs/Chart.bundle.min.js'); ?>
<?php $cb->get_js('js/plugins/flot/jquery.flot.min.js'); ?>
<?php $cb->get_js('js/plugins/flot/jquery.flot.pie.min.js'); ?>
<?php $cb->get_js('js/plugins/flot/jquery.flot.stack.min.js'); ?>
<?php $cb->get_js('js/plugins/flot/jquery.flot.resize.min.js'); ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/be_comp_charts.min.js'); ?>

<!-- Page JS Helpers (Easy Pie Chart Plugin) -->
<script>jQuery(function(){ Codebase.helpers('easy-pie-chart'); });</script>

<?php require 'inc/_global/views/footer_end.php'; ?>
