<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <div class="my-50 text-center">
        <h2 class="font-w700 text-black mb-10">Crypto Dashboard</h2>
        <h3 class="h5 text-muted mb-0">Welcome to your overview.</h3>
    </div>

    <!-- Coins -->
    <div class="block block-fx-shadow">
        <ul id="crypto-tabs" class="nav nav-tabs nav-tabs-block align-items-center" data-toggle="tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link" href="#crypto-coins-btc">
                    <span class="d-sm-none">BTC</span>
                    <span class="d-none d-sm-inline">Bitcoin <span class="text-muted">$14000</span></span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#crypto-coins-eth">
                    <span class="d-sm-none">ETH</span>
                    <span class="d-none d-sm-inline">Ethereum <span class="text-muted">$1100</span></span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#crypto-coins-ltc">
                    <span class="d-sm-none">LTC</span>
                    <span class="d-none d-sm-inline">Litecoin <span class="text-muted">$250</span></span>
                </a>
            </li>
            <li class="nav-item ml-auto">
                <div class="block-options mr-15">
                    <div class="dropdown" role="group">
                        <button type="button" class="btn-block-option" id="btnGroupTabs1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-calendar mr-5"></i>
                            <i class="fa fa-angle-down"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupTabs1">
                            <button type="button" class="btn btn-sm btn-block btn-alt-secondary" tabindex="-1">1 Hour</button>
                            <button type="button" class="btn btn-sm btn-block btn-alt-secondary" tabindex="-1">1 Week</button>
                            <button type="button" class="btn btn-sm btn-block btn-alt-secondary active" tabindex="-1">1 Month</button>
                            <button type="button" class="btn btn-sm btn-block btn-alt-secondary" tabindex="-1">1 Year</button>
                            <div class="dropdown-divider"></div>
                            <button type="button" class="btn btn-sm btn-block btn-alt-secondary" tabindex="-1">ALL</button>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="block-content block-content-full tab-content">
            <div class="tab-pane" id="crypto-coins-btc">
                <div class="row items-push text-center my-20">
                    <div class="col-md-4">
                        <div class="font-size-h3 font-w700">$14.000</div>
                        <div class="text-muted font-w600 text-uppercase">Bitcoin Price</div>
                    </div>
                    <div class="col-md-4">
                        <div class="font-size-h3 font-w700">
                            <span class="text-success">+</span> $3.500
                        </div>
                        <div class="text-muted font-w600 text-uppercase">Since Last Month (USD)</div>
                    </div>
                    <div class="col-md-4">
                        <div class="font-size-h3 font-w700">
                            <span class="text-success">+</span> 133%
                        </div>
                        <div class="text-muted font-w600 text-uppercase">Since Last Month (%)</div>
                    </div>
                </div>
                <hr class="my-30">
                <div>
                    <!-- Bitcoin Chart.js functionality is initialized in js/pages/be_pages_crypto_dashboard.min.js which was auto compiled from _es6/pages/be_pages_crypto_dashboard.js -->
                    <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                    <canvas class="js-chartjs-bitcoin" height="300"></canvas>
                </div>
            </div>
            <div class="tab-pane" id="crypto-coins-eth">
                <div class="row items-push text-center my-20">
                    <div class="col-md-4">
                        <div class="font-size-h3 font-w700">$1.100</div>
                        <div class="text-muted font-w600 text-uppercase">Ethereum Price</div>
                    </div>
                    <div class="col-md-4">
                        <div class="font-size-h3 font-w700">
                            <span class="text-success">+</span> $600
                        </div>
                        <div class="text-muted font-w600 text-uppercase">Since Last Month (USD)</div>
                    </div>
                    <div class="col-md-4">
                        <div class="font-size-h3 font-w700">
                            <span class="text-success">+</span> 210%
                        </div>
                        <div class="text-muted font-w600 text-uppercase">Since Last Month (%)</div>
                    </div>
                </div>
                <hr class="my-30">
                <div>
                    <!-- Ethereum Chart.js functionality is initialized in js/pages/be_pages_crypto_dashboard.min.js which was auto compiled from _es6/pages/be_pages_crypto_dashboard.js -->
                    <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                    <canvas class="js-chartjs-ethereum" height="300"></canvas>
                </div>
            </div>
            <div class="tab-pane" id="crypto-coins-ltc">
                <div class="row items-push text-center my-20">
                    <div class="col-md-4">
                        <div class="font-size-h3 font-w700">$250</div>
                        <div class="text-muted font-w600 text-uppercase">Litecoin Price</div>
                    </div>
                    <div class="col-md-4">
                        <div class="font-size-h3 font-w700">
                            <span class="text-danger">-</span> $50
                        </div>
                        <div class="text-muted font-w600 text-uppercase">Since Last Month (USD)</div>
                    </div>
                    <div class="col-md-4">
                        <div class="font-size-h3 font-w700">
                            <span class="text-danger">-</span> 17%
                        </div>
                        <div class="text-muted font-w600 text-uppercase">Since Last Month (%)</div>
                    </div>
                </div>
                <hr class="my-30">
                <div>
                    <!-- Litecoin Chart.js functionality is initialized in js/pages/be_pages_crypto_dashboard.min.js which was auto compiled from _es6/pages/be_pages_crypto_dashboard.js -->
                    <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                    <canvas class="js-chartjs-litecoin" height="300"></canvas>
                </div>
            </div>
        </div>
    </div>
    <!-- END Coins -->

    <!-- Portfolio and Activity -->
    <div class="row">
        <div class="col-lg-6">
            <!-- Portfolio -->
            <div class="block block-fx-shadow">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Portfolio</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option">
                            <i class="si si-wrench"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <table class="table table-borderless table-striped table-vcenter">
                        <tbody>
                            <tr>
                                <td style="width: 32px;">
                                    <i class="fa fa-circle text-warning"></i>
                                </td>
                                <td style="width: 140px;">
                                    <strong>Bitcoin</strong>
                                </td>
                                <td class="d-none d-sm-table-cell" style="width: 160px;">
                                    <div class="progress mb-0" style="height: 10px;">
                                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="47" aria-valuemin="0" aria-valuemax="100" style="width: 47%"></div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    0.50 BTC
                                </td>
                                <td class="d-none d-sm-table-cell text-right text-muted">
                                    ~ $7.000
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fa fa-circle text-info"></i>
                                </td>
                                <td>
                                    <strong>Ethereum</strong>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <div class="progress mb-0" style="height: 10px;">
                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100" style="width: 22%"></div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    3.00 ETH
                                </td>
                                <td class="d-none d-sm-table-cell text-right text-muted">
                                    ~ $3.300
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fa fa-circle text-muted"></i>
                                </td>
                                <td>
                                    <strong>Litecoin</strong>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <div class="progress mb-0" style="height: 10px;">
                                        <div class="progress-bar bg-muted" role="progressbar" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100" style="width: 16%"></div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    10.00 LTC
                                </td>
                                <td class="d-none d-sm-table-cell text-right text-muted">
                                    ~ $2.500
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fa fa-circle text-danger"></i>
                                </td>
                                <td>
                                    <strong>US Dollars</strong>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <div class="progress mb-0" style="height: 10px;">
                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="13" aria-valuemin="0" aria-valuemax="100" style="width: 13%"></div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    2.000 USD
                                </td>
                                <td class="d-none d-sm-table-cell text-right text-muted">
                                    $2.000
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fa fa-circle text-success"></i>
                                </td>
                                <td>
                                    <strong>Euros</strong>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <div class="progress mb-0" style="height: 10px;">
                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0"></div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    0 EUR
                                </td>
                                <td class="d-none d-sm-table-cell text-right text-muted">
                                    0€
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fa fa-circle text-elegance"></i>
                                </td>
                                <td>
                                    <strong>British Pounds</strong>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <div class="progress mb-0" style="height: 10px;">
                                        <div class="progress-bar bg-elegance" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0"></div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    0 GBP
                                </td>
                                <td class="d-none d-sm-table-cell text-right text-muted">
                                    £0
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="block-content block-content-full bg-body-light text-muted text-center font-w600">
                    Total Balance ~ $14.800,00
                </div>
            </div>
            <!-- END Portfolio -->
        </div>
        <div class="col-lg-6">
            <!-- Recent Activity -->
            <div class="block block-fx-shadow">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Recent Activity</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option">
                            <i class="si si-wrench"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <table class="table table-borderless table-striped table-vcenter">
                        <tbody>
                            <tr>
                                <td class="text-center" style="width: 50px;">
                                    JAN<br>10
                                </td>
                                <td>
                                    <strong>Bought Bitcoin</strong><br>
                                    <span class="text-muted">Using USD wallet</span>
                                </td>
                                <td class="text-right text-success font-w600">
                                    + 0.50 BTC
                                </td>
                                <td class="d-none d-sm-table-cell text-right text-danger font-w600">
                                    - $6.500
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center" style="width: 50px;">
                                    JAN<br>05
                                </td>
                                <td>
                                    <strong>Bought Ethereum</strong><br>
                                    <span class="text-muted">Using USD wallet</span>
                                </td>
                                <td class="text-right text-success font-w600">
                                    + 3.00 ETH
                                </td>
                                <td class="d-none d-sm-table-cell text-right text-danger font-w600">
                                    - $2.900
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center" style="width: 50px;">
                                    JAN<br>02
                                </td>
                                <td>
                                    <strong>Bought Litecoin</strong><br>
                                    <span class="text-muted">Using USD wallet</span>
                                </td>
                                <td class="text-right text-success font-w600">
                                    + 8.00 LTC
                                </td>
                                <td class="d-none d-sm-table-cell text-right text-danger font-w600">
                                    - $1.800
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center" style="width: 50px;">
                                    JAN<br>01
                                </td>
                                <td>
                                    <strong>Bought Litecoin</strong><br>
                                    <span class="text-muted">Using USD wallet</span>
                                </td>
                                <td class="text-right text-success font-w600">
                                    + 2.00 LTC
                                </td>
                                <td class="d-none d-sm-table-cell text-right text-danger font-w600">
                                    - $370
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="block-content block-content-full bg-body-light text-center font-w600">
                    <a class="link-effect" href="be_pages_crypto_wallets.php">
                        View Your Wallets <i class="fa fa-angle-right ml-5"></i>
                    </a>
                </div>
            </div>
            <!-- END Recent Activity -->
        </div>
    </div>
    <!-- END Portfolio and Activity -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/chartjs/Chart.bundle.min.js'); ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/be_pages_crypto_dashboard.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>
