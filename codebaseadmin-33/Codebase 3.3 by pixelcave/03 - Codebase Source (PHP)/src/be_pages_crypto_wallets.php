<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <div class="my-50 text-center">
        <h2 class="font-w700 text-black mb-10">All Wallets</h2>
        <h3 class="h5 text-muted mb-0">All great, keep it up!</h3>
    </div>
    <div class="row">
        <div class="col-lg-6 col-xl-4">
            <div class="block block-fx-shadow text-center">
                <a class="d-block bg-warning font-w600 text-uppercase py-5" href="javascript:void(0)" data-toggle="modal" data-target="#modal-crypto-wallet-btc">
                    <span class="text-white">Bitcoin Wallet</span>
                </a>
                <div class="block-content block-content-full">
                    <div class="pt-20 pb-30">
                        <div class="font-size-h3 font-w700">0.50 BTC</div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">~ $7.000</div>
                    </div>
                    <a class="btn btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-send mr-5"></i> Send
                    </a>
                    <a class="btn btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-qrcode mr-5"></i> Receive
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-4">
            <div class="block block-fx-shadow text-center">
                <a class="d-block bg-info font-w600 text-uppercase py-5" href="javascript:void(0)" data-toggle="modal" data-target="#modal-crypto-wallet-eth">
                    <span class="text-white">Ethereum Wallet</span>
                </a>
                <div class="block-content block-content-full">
                    <div class="pt-20 pb-30">
                        <div class="font-size-h3 font-w700">3.00 ETH</div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">~ $3.300</div>
                    </div>
                    <a class="btn btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-send mr-5"></i> Send
                    </a>
                    <a class="btn btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-qrcode mr-5"></i> Receive
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-4">
            <div class="block block-fx-shadow text-center">
                <a class="d-block bg-muted font-w600 text-uppercase py-5" href="javascript:void(0)" data-toggle="modal" data-target="#modal-crypto-wallet-ltc">
                    <span class="text-white">Litecoin Wallet</span>
                </a>
                <div class="block-content block-content-full">
                    <div class="pt-20 pb-30">
                        <div class="font-size-h3 font-w700">10.00 LTC</div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">~ $2.500</div>
                    </div>
                    <a class="btn btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-send mr-5"></i> Send
                    </a>
                    <a class="btn btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-qrcode mr-5"></i> Receive
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-4">
            <div class="block block-fx-shadow text-center">
                <a class="d-block bg-danger font-w600 text-uppercase py-5" href="javascript:void(0)" data-toggle="modal" data-target="#modal-crypto-wallet-usd">
                    <span class="text-white">US Dollars Wallet</span>
                </a>
                <div class="block-content block-content-full">
                    <div class="pt-20 pb-30">
                        <div class="font-size-h3 font-w700">2.000 USD</div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">$2.000</div>
                    </div>
                    <a class="btn btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-arrow-circle-down mr-5"></i> Deposit
                    </a>
                    <a class="btn btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-arrow-circle-up mr-5"></i> Withdraw
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-4">
            <div class="block block-fx-shadow text-center">
                <a class="d-block bg-success font-w600 text-uppercase py-5" href="javascript:void(0)" data-toggle="modal" data-target="#modal-crypto-wallet-eur">
                    <span class="text-white">Euros Wallet</span>
                </a>
                <div class="block-content block-content-full">
                    <div class="pt-20 pb-30">
                        <div class="font-size-h3 font-w700">0 EUR</div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">0€</div>
                    </div>
                    <a class="btn btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-arrow-circle-down mr-5"></i> Deposit
                    </a>
                    <a class="btn btn-secondary disabled" href="javascript:void(0)">
                        <i class="fa fa-arrow-circle-up mr-5"></i> Withdraw
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-4">
            <div class="block block-fx-shadow text-center">
                <a class="d-block bg-elegance font-w600 text-uppercase py-5" href="javascript:void(0)" data-toggle="modal" data-target="#modal-crypto-wallet-gbp">
                    <span class="text-white">British Pounds Wallet</span>
                </a>
                <div class="block-content block-content-full">
                    <div class="pt-20 pb-30">
                        <div class="font-size-h3 font-w700">0 GBP</div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">£0</div>
                    </div>
                    <a class="btn btn-secondary" href="javascript:void(0)">
                        <i class="fa fa-arrow-circle-down mr-5"></i> Deposit
                    </a>
                    <a class="btn btn-secondary disabled" href="javascript:void(0)">
                        <i class="fa fa-arrow-circle-up mr-5"></i> Withdraw
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-4">
            <a class="block block-link-shadow" href="javascript:void(0)">
                <div class="bg-primary pt-5"></div>
                <div class="block-content block-content-full text-center">
                    <div class="pt-10 pb-10">
                        <i class="fa fa-plus-circle fa-3x text-primary"></i>
                    </div>
                    <div class="font-w600 text-uppercase">New Wallet</div>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>

<!-- BTC Wallet -->
<div class="modal fade" id="modal-crypto-wallet-btc" tabindex="-1" role="dialog" aria-labelledby="modal-crypto-wallet-btc" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">
                        <i class="si si-wallet text-warning mr-5"></i> Bitcoin Wallet
                    </h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <table class="table table-borderless table-striped table-vcenter mb-10">
                        <tbody>
                            <tr>
                                <td class="text-center">
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
                                <td class="text-center">
                                    JAN<br>05
                                </td>
                                <td>
                                    <strong>Bought Bitcoin</strong><br>
                                    <span class="text-muted">Using USD wallet</span>
                                </td>
                                <td class="text-right text-success font-w600">
                                    + 0.50 BTC
                                </td>
                                <td class="d-none d-sm-table-cell text-right text-danger font-w600">
                                    - $6.800
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    JAN<br>02
                                </td>
                                <td>
                                    <strong>Sold Bitcoin</strong><br>
                                    <span class="text-muted">Using USD wallet</span>
                                </td>
                                <td class="text-right text-danger font-w600">
                                    - 0.25 BTC
                                </td>
                                <td class="d-none d-sm-table-cell text-right text-success font-w600">
                                    + $3.470
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    JAN<br>01
                                </td>
                                <td>
                                    <strong>Sold Bitcoin</strong><br>
                                    <span class="text-muted">Using USD wallet</span>
                                </td>
                                <td class="text-right text-danger font-w600">
                                    - 0.50 BTC
                                </td>
                                <td class="d-none d-sm-table-cell text-right text-success font-w600">
                                    + $6.800
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-alt-secondary" type="button" data-dismiss="modal">Close</button>
                <button class="btn btn-alt-primary" type="button" data-dismiss="modal">Done</button>
            </div>
        </div>
    </div>
</div>
<!-- END BTC Wallet -->

<!-- ETH Wallet -->
<div class="modal fade" id="modal-crypto-wallet-eth" tabindex="-1" role="dialog" aria-labelledby="modal-crypto-wallet-eth" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">
                        <i class="si si-wallet text-info mr-5"></i> Ethereum Wallet
                    </h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <table class="table table-borderless table-striped table-vcenter mb-10">
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    JAN<br>10
                                </td>
                                <td>
                                    <strong>Bought Ethereum</strong><br>
                                    <span class="text-muted">Using USD wallet</span>
                                </td>
                                <td class="text-right text-success font-w600">
                                    + 2.50 ETH
                                </td>
                                <td class="d-none d-sm-table-cell text-right text-danger font-w600">
                                    - $2.405
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    JAN<br>05
                                </td>
                                <td>
                                    <strong>Bought Ethereum</strong><br>
                                    <span class="text-muted">Using USD wallet</span>
                                </td>
                                <td class="text-right text-success font-w600">
                                    + 0.50 ETH
                                </td>
                                <td class="d-none d-sm-table-cell text-right text-danger font-w600">
                                    - $530
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    JAN<br>02
                                </td>
                                <td>
                                    <strong>Sold Ethereum</strong><br>
                                    <span class="text-muted">Using USD wallet</span>
                                </td>
                                <td class="text-right text-danger font-w600">
                                    - 0.25 ETH
                                </td>
                                <td class="d-none d-sm-table-cell text-right text-success font-w600">
                                    + $260
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    JAN<br>01
                                </td>
                                <td>
                                    <strong>Sold Ethereum</strong><br>
                                    <span class="text-muted">Using USD wallet</span>
                                </td>
                                <td class="text-right text-danger font-w600">
                                    - 2.00 ETH
                                </td>
                                <td class="d-none d-sm-table-cell text-right text-success font-w600">
                                    + $2.120
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    JAN<br>01
                                </td>
                                <td>
                                    <strong>Bought Ethereum</strong><br>
                                    <span class="text-muted">Using USD wallet</span>
                                </td>
                                <td class="text-right text-success font-w600">
                                    + 1.00 ETH
                                </td>
                                <td class="d-none d-sm-table-cell text-right text-danger font-w600">
                                    - $1.000
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-alt-secondary" type="button" data-dismiss="modal">Close</button>
                <button class="btn btn-alt-primary" type="button" data-dismiss="modal">Done</button>
            </div>
        </div>
    </div>
</div>
<!-- END ETH Wallet -->

<!-- LTC Wallet -->
<div class="modal fade" id="modal-crypto-wallet-ltc" tabindex="-1" role="dialog" aria-labelledby="modal-crypto-wallet-ltc" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">
                        <i class="si si-wallet text-muted mr-5"></i> Litecoin Wallet
                    </h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <table class="table table-borderless table-striped table-vcenter mb-10">
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    DEC<br>26
                                </td>
                                <td>
                                    <strong>Bought Litecoin</strong><br>
                                    <span class="text-muted">Using USD wallet</span>
                                </td>
                                <td class="text-right text-success font-w600">
                                    + 2.50 LTC
                                </td>
                                <td class="d-none d-sm-table-cell text-right text-danger font-w600">
                                    - $769
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    DEC<br>24
                                </td>
                                <td>
                                    <strong>Bought Litecoin</strong><br>
                                    <span class="text-muted">Using USD wallet</span>
                                </td>
                                <td class="text-right text-success font-w600">
                                    + 0.50 LTC
                                </td>
                                <td class="d-none d-sm-table-cell text-right text-danger font-w600">
                                    - $124
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    DEC<br>15
                                </td>
                                <td>
                                    <strong>Sold Litecoin</strong><br>
                                    <span class="text-muted">Using USD wallet</span>
                                </td>
                                <td class="text-right text-danger font-w600">
                                    - 0.25 LTC
                                </td>
                                <td class="d-none d-sm-table-cell text-right text-success font-w600">
                                    + $68
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    DEC<br>14
                                </td>
                                <td>
                                    <strong>Sold Litecoin</strong><br>
                                    <span class="text-muted">Using USD wallet</span>
                                </td>
                                <td class="text-right text-danger font-w600">
                                    - 2.00 LTC
                                </td>
                                <td class="d-none d-sm-table-cell text-right text-success font-w600">
                                    + $515
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    DEC<br>03
                                </td>
                                <td>
                                    <strong>Bought Litecoin</strong><br>
                                    <span class="text-muted">Using USD wallet</span>
                                </td>
                                <td class="text-right text-success font-w600">
                                    + 1.00 LTC
                                </td>
                                <td class="d-none d-sm-table-cell text-right text-danger font-w600">
                                    - $260
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    DEC<br>01
                                </td>
                                <td>
                                    <strong>Bought Litecoin</strong><br>
                                    <span class="text-muted">Using USD wallet</span>
                                </td>
                                <td class="text-right text-success font-w600">
                                    + 2.00 LTC
                                </td>
                                <td class="d-none d-sm-table-cell text-right text-danger font-w600">
                                    - $760
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-alt-secondary" type="button" data-dismiss="modal">Close</button>
                <button class="btn btn-alt-primary" type="button" data-dismiss="modal">Done</button>
            </div>
        </div>
    </div>
</div>
<!-- END LTC Wallet -->

<!-- USD Wallet -->
<div class="modal fade" id="modal-crypto-wallet-usd" tabindex="-1" role="dialog" aria-labelledby="modal-crypto-wallet-usd" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">
                        <i class="si si-wallet text-danger mr-5"></i> US Dollars Wallet
                    </h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <table class="table table-borderless table-striped table-vcenter mb-10">
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    JAN<br>12
                                </td>
                                <td>
                                    <strong>Deposited funds</strong><br>
                                    <span class="text-muted">FROM BANK S.A. (000-000-000)</span>
                                </td>
                                <td class="text-right text-success font-w600">
                                    + 2.000 USD
                                </td>
                                <td class="d-none d-sm-table-cell text-right text-success font-w600">
                                    + $2.000
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-alt-secondary" type="button" data-dismiss="modal">Close</button>
                <button class="btn btn-alt-primary" type="button" data-dismiss="modal">Done</button>
            </div>
        </div>
    </div>
</div>
<!-- END USD Wallet -->

<!-- EUR Wallet -->
<div class="modal fade" id="modal-crypto-wallet-eur" tabindex="-1" role="dialog" aria-labelledby="modal-crypto-wallet-eur" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">
                        <i class="si si-wallet text-success mr-5"></i> Euros Wallet
                    </h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <p class="text-muted text-center">
                        No transactions yet!
                    </p>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-alt-secondary" type="button" data-dismiss="modal">Close</button>
                <button class="btn btn-alt-primary" type="button" data-dismiss="modal">Done</button>
            </div>
        </div>
    </div>
</div>
<!-- END EUR Wallet -->

<!-- GBP Wallet -->
<div class="modal fade" id="modal-crypto-wallet-gbp" tabindex="-1" role="dialog" aria-labelledby="modal-crypto-wallet-gbp" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">
                        <i class="si si-wallet text-elegance mr-5"></i> British Pounds Wallet
                    </h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <p class="text-muted text-center">
                        No transactions yet!
                    </p>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-alt-secondary" type="button" data-dismiss="modal">Close</button>
                <button class="btn btn-alt-primary" type="button" data-dismiss="modal">Done</button>
            </div>
        </div>
    </div>
</div>
<!-- END GBP Wallet -->

<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
