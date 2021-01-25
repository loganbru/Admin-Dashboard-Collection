<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <div class="my-50 text-center">
        <h2 class="font-w700 text-black mb-10">Buy/Sell</h2>
        <h3 class="h5 text-muted mb-0">Bitcoin (BTC)</h3>
    </div>
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <div class="block block-fx-shadow">
                <ul class="nav nav-tabs nav-tabs-block nav-justified" data-toggle="tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#crypto-buy">Buy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#crypto-sell">Sell</a>
                    </li>
                </ul>
                <div class="block-content tab-content">
                    <div class="tab-pane active" id="crypto-buy">
                        <form action="be_pages_crypto_buy_sell.php" method="post" onsubmit="return false;">
                            <div class="form-group row">
                                <label class="col-12" for="crypto-buy-from">Buy From</label>
                                <div class="col-12">
                                    <select class="form-control form-control-lg" id="crypto-buy-from" name="crypto-buy-from" size="3">
                                        <option value="1">USD Wallet - $2000</option>
                                        <option value="2">EUR Wallet - 0€</option>
                                        <option value="3">GBP Wallet - £0</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12" for="crypto-buy-to">Deposit To</label>
                                <div class="col-12">
                                    <select class="form-control form-control-lg" id="crypto-buy-to" name="crypto-buy-to">
                                        <option value="1">Bitcoin Wallet - 0.50 BTC</option>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <div class="col-12 mb-15">
                                    <div class="mb-5">
                                        <div class="float-right">
                                            $1.000,00 USD &bullet; <a href="javascript:void(0)">Increase Limits</a>
                                        </div>
                                        <strong>Total Limit</strong>
                                    </div>
                                    <div class="progress mb-0" style="height: 5px;">
                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                                    </div>
                                </div>
                                <div class="col-6 border-r">
                                    <div class="input-group input-group-lg">
                                        <input type="text" class="form-control" id="crypto-buy-usd" name="crypto-buy-usd" placeholder="0,00">
                                        <div class="input-group-append">
                                            <span class="input-group-text font-w600">USD</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group input-group-lg">
                                        <input type="text" class="form-control" id="crypto-buy-btc" name="crypto-buy-btc" placeholder="0.00">
                                        <div class="input-group-append">
                                            <span class="input-group-text font-w600">BTC</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <div class="col-12 text-center">
                                    <div class="btn-group btn-group-toggle my-5" data-toggle="buttons">
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="crypto-buy-repeat" id="crypto-buy-repeat-daily"> Daily
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="crypto-buy-repeat" id="crypto-buy-repeat-weekly"> Weekly
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="crypto-buy-repeat" id="crypto-buy-repeat-monthly"> Monthly
                                        </label>
                                    </div>
                                    <div class="font-size-sm text-muted">
                                        <i class="fa fa-repeat"></i> <em>Repeat this transaction</em>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-hero btn-lg btn-block btn-alt-primary">Buy Bitcoin Instantly</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="crypto-sell">
                        <form action="be_pages_crypto_buy_sell.php" method="post" onsubmit="return false;">
                            <div class="form-group row">
                                <label class="col-12" for="crypto-sell-from">Sell From</label>
                                <div class="col-12">
                                    <select class="form-control form-control-lg" id="crypto-sell-from" name="crypto-sell-from">
                                        <option value="1">Bitcoin Wallet - 0.50 BTC</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12" for="crypto-sell-to">Deposit To</label>
                                <div class="col-12">
                                    <select class="form-control form-control-lg" id="crypto-sell-to" name="crypto-sell-to" size="3">
                                        <option value="1">USD Wallet - $2000</option>
                                        <option value="2">EUR Wallet - 0€</option>
                                        <option value="3">GBP Wallet - £0</option>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <div class="col-12 mb-15">
                                    <div class="mb-5">
                                        <div class="float-right">
                                            $1.000,00 USD &bullet; <a href="javascript:void(0)">Increase Limits</a>
                                        </div>
                                        <strong>Total Limit</strong>
                                    </div>
                                    <div class="progress mb-0" style="height: 5px;">
                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                                    </div>
                                </div>
                                <div class="col-6 border-r">
                                    <div class="input-group input-group-lg">
                                        <input type="text" class="form-control" id="crypto-sell-btc" name="crypto-sell-btc" placeholder="0.00">
                                        <div class="input-group-append">
                                            <span class="input-group-text font-w600">BTC</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group input-group-lg">
                                        <input type="text" class="form-control" id="crypto-sell-usd" name="crypto-sell-usd" placeholder="0,00">
                                        <div class="input-group-append">
                                            <span class="input-group-text font-w600">USD</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <div class="col-12 text-center">
                                    <div class="btn-group btn-group-toggle my-5" data-toggle="buttons">
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="crypto-sell-repeat" id="crypto-buy-sell-daily"> Daily
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="crypto-sell-repeat" id="crypto-buy-sell-weekly"> Weekly
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name="crypto-sell-repeat" id="crypto-buy-sell-monthly"> Monthly
                                        </label>
                                    </div>
                                    <div class="font-size-sm text-muted">
                                        <i class="fa fa-repeat"></i> <em>Repeat this transaction</em>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-hero btn-lg btn-block btn-alt-primary">Sell Bitcoin Instantly</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
