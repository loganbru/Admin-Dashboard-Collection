<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <!-- Preview Color Themes -->
    <!-- Themes functionality is initialized in Template._uiHandleTheme() -->
    <h2 class="content-heading">Preview Color Theme</h2>
    <div class="block">
        <div class="block-content">
            <div class="row items-push text-center">
                <div class="col-6 col-md-6 col-xl-2">
                    <a class="item item-circle bg-default text-white-op mx-auto mb-15" data-toggle="theme" data-theme="default" href="javascript:void(0)">
                        <i class="fa fa-paint-brush"></i>
                    </a>
                    <div class="font-w600">Default</div>
                </div>
                <div class="col-6 col-md-6 col-xl-2">
                    <a class="item item-circle bg-elegance text-white-op mx-auto mb-15" data-toggle="theme" data-theme="<?php echo $cb->assets_folder; ?>/css/themes/elegance.min.css" href="javascript:void(0)">
                        <i class="fa fa-paint-brush"></i>
                    </a>
                    <div class="font-w600">Elegance</div>
                </div>
                <div class="col-6 col-md-6 col-xl-2">
                    <a class="item item-circle bg-pulse text-white-op mx-auto mb-15" data-toggle="theme" data-theme="<?php echo $cb->assets_folder; ?>/css/themes/pulse.min.css" href="javascript:void(0)">
                        <i class="fa fa-paint-brush"></i>
                    </a>
                    <div class="font-w600">Pulse</div>
                </div>
                <div class="col-6 col-md-6 col-xl-2">
                    <a class="item item-circle bg-flat text-white-op mx-auto mb-15" data-toggle="theme" data-theme="<?php echo $cb->assets_folder; ?>/css/themes/flat.min.css" href="javascript:void(0)">
                        <i class="fa fa-paint-brush"></i>
                    </a>
                    <div class="font-w600">Flat</div>
                </div>
                <div class="col-6 col-md-6 col-xl-2">
                    <a class="item item-circle bg-corporate text-white-op mx-auto mb-15" data-toggle="theme" data-theme="<?php echo $cb->assets_folder; ?>/css/themes/corporate.min.css" href="javascript:void(0)">
                        <i class="fa fa-paint-brush"></i>
                    </a>
                    <div class="font-w600">Corporate</div>
                </div>
                <div class="col-6 col-md-6 col-xl-2">
                    <a class="item item-circle bg-earth text-white-op mx-auto mb-15" data-toggle="theme" data-theme="<?php echo $cb->assets_folder; ?>/css/themes/earth.min.css" href="javascript:void(0)">
                        <i class="fa fa-paint-brush"></i>
                    </a>
                    <div class="font-w600">Earth</div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Preview Color Themes -->

    <!-- Primary Colors -->
    <h2 class="content-heading">Primary Colors <small>Colors of the active color theme</small></h2>
    <div class="block">
        <div class="block-content">
            <div class="row items-push text-center">
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="item item-circle bg-primary-lighter mx-auto mb-15"></div>
                    <code>.bg-primary-lighter</code>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="item item-circle bg-primary-light mx-auto mb-15"></div>
                    <code>.bg-primary-light</code>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="item item-circle bg-primary mx-auto mb-15"></div>
                    <code>.bg-primary</code>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="item item-circle bg-gd-primary mx-auto mb-15"></div>
                    <code>.bg-gd-primary</code>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="item item-circle bg-primary-dark mx-auto mb-15"></div>
                    <code>.bg-primary-dark</code>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="item item-circle bg-primary-darker mx-auto mb-15"></div>
                    <code>.bg-primary-darker</code>
                </div>
            </div>
        </div>
    </div>
    <!-- END Primary Colors -->

    <!-- Gray Colors -->
    <h2 class="content-heading">Gray Colors</h2>
    <div class="block">
        <div class="block-content">
            <div class="row items-push text-center">
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="item item-circle bg-gray-lighter mx-auto mb-15"></div>
                    <code>.bg-gray-lighter</code>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="item item-circle bg-gray-light mx-auto mb-15"></div>
                    <code>.bg-gray-light</code>
                </div>
                <div class="col-12 col-md-4 col-xl-4">
                    <div class="item item-circle bg-gray mx-auto mb-15"></div>
                    <code>.bg-gray</code>
                </div>
                <div class="col-6 col-md-6 col-xl-2">
                    <div class="item item-circle bg-gray-dark mx-auto mb-15"></div>
                    <code>.bg-gray-dark</code>
                </div>
                <div class="col-6 col-md-6 col-xl-2">
                    <div class="item item-circle bg-gray-darker mx-auto mb-15"></div>
                    <code>.bg-gray-darker</code>
                </div>
            </div>
        </div>
    </div>
    <!-- END Gray Colors -->

    <!-- Default Theme -->
    <h2 class="content-heading">Default Theme</h2>
    <div class="block">
        <div class="block-content">
            <div class="row items-push text-center">
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="item item-circle bg-default-lighter mx-auto mb-15"></div>
                    <code>.bg-default-lighter</code>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="item item-circle bg-default-light mx-auto mb-15"></div>
                    <code>.bg-default-light</code>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="item item-circle bg-default mx-auto mb-15"></div>
                    <code>.bg-default</code>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="item item-circle bg-gd-default mx-auto mb-15"></div>
                    <code>.bg-gd-default</code>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="item item-circle bg-default-dark mx-auto mb-15"></div>
                    <code>.bg-default-dark</code>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="item item-circle bg-default-darker mx-auto mb-15"></div>
                    <code>.bg-default-darker</code>
                </div>
            </div>
        </div>
    </div>
    <!-- END Default Theme -->

    <!-- Elegance Theme -->
    <h2 class="content-heading">Elegance Theme</h2>
    <div class="block">
        <div class="block-content">
            <div class="row items-push text-center">
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="item item-circle bg-elegance-lighter mx-auto mb-15"></div>
                    <code>.bg-elegance-lighter</code>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="item item-circle bg-elegance-light mx-auto mb-15"></div>
                    <code>.bg-elegance-light</code>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="item item-circle bg-elegance mx-auto mb-15"></div>
                    <code>.bg-elegance</code>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="item item-circle bg-gd-elegance mx-auto mb-15"></div>
                    <code>.bg-gd-elegance</code>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="item item-circle bg-elegance-dark mx-auto mb-15"></div>
                    <code>.bg-elegance-dark</code>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="item item-circle bg-elegance-darker mx-auto mb-15"></div>
                    <code>.bg-elegance-darker</code>
                </div>
            </div>
        </div>
    </div>
    <!-- END Elegance Theme -->

    <!-- Pulse Theme -->
    <h2 class="content-heading">Pulse Theme</h2>
    <div class="block">
        <div class="block-content">
            <div class="row items-push text-center">
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="item item-circle bg-pulse-lighter mx-auto mb-15"></div>
                    <code>.bg-pulse-lighter</code>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="item item-circle bg-pulse-light mx-auto mb-15"></div>
                    <code>.bg-pulse-light</code>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="item item-circle bg-pulse mx-auto mb-15"></div>
                    <code>.bg-pulse</code>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="item item-circle bg-gd-pulse mx-auto mb-15"></div>
                    <code>.bg-gd-pulse</code>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="item item-circle bg-pulse-dark mx-auto mb-15"></div>
                    <code>.bg-pulse-dark</code>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="item item-circle bg-pulse-darker mx-auto mb-15"></div>
                    <code>.bg-pulse-darker</code>
                </div>
            </div>
        </div>
    </div>
    <!-- END Pulse Theme -->

    <!-- Flat Theme -->
    <h2 class="content-heading">Flat Theme</h2>
    <div class="block">
        <div class="block-content">
            <div class="row items-push text-center">
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="item item-circle bg-flat-lighter mx-auto mb-15"></div>
                    <code>.bg-flat-lighter</code>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="item item-circle bg-flat-light mx-auto mb-15"></div>
                    <code>.bg-flat-light</code>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="item item-circle bg-flat mx-auto mb-15"></div>
                    <code>.bg-flat</code>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="item item-circle bg-gd-flat mx-auto mb-15"></div>
                    <code>.bg-gd-flat</code>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="item item-circle bg-flat-dark mx-auto mb-15"></div>
                    <code>.bg-flat-dark</code>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="item item-circle bg-flat-darker mx-auto mb-15"></div>
                    <code>.bg-flat-darker</code>
                </div>
            </div>
        </div>
    </div>
    <!-- END Flat Theme -->

    <!-- Corporate Theme -->
    <h2 class="content-heading">Corporate Theme</h2>
    <div class="block">
        <div class="block-content">
            <div class="row items-push text-center">
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="item item-circle bg-corporate-lighter mx-auto mb-15"></div>
                    <code>.bg-corporate-lighter</code>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="item item-circle bg-corporate-light mx-auto mb-15"></div>
                    <code>.bg-corporate-light</code>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="item item-circle bg-corporate mx-auto mb-15"></div>
                    <code>.bg-corporate</code>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="item item-circle bg-gd-corporate mx-auto mb-15"></div>
                    <code>.bg-gd-corporate</code>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="item item-circle bg-corporate-dark mx-auto mb-15"></div>
                    <code>.bg-corporate-dark</code>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="item item-circle bg-corporate-darker mx-auto mb-15"></div>
                    <code>.bg-corporate-darker</code>
                </div>
            </div>
        </div>
    </div>
    <!-- END Corporate Theme -->

    <!-- Earth Theme -->
    <h2 class="content-heading">Earth Theme</h2>
    <div class="block">
        <div class="block-content">
            <div class="row items-push text-center">
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="item item-circle bg-earth-lighter mx-auto mb-15"></div>
                    <code>.bg-earth-lighter</code>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="item item-circle bg-earth-light mx-auto mb-15"></div>
                    <code>.bg-earth-light</code>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="item item-circle bg-earth mx-auto mb-15"></div>
                    <code>.bg-earth</code>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="item item-circle bg-gd-earth mx-auto mb-15"></div>
                    <code>.bg-gd-earth</code>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="item item-circle bg-earth-dark mx-auto mb-15"></div>
                    <code>.bg-earth-dark</code>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="item item-circle bg-earth-darker mx-auto mb-15"></div>
                    <code>.bg-earth-darker</code>
                </div>
            </div>
        </div>
    </div>
    <!-- END Earth Theme -->

    <!-- Contextual Colors -->
    <h2 class="content-heading">Contextual Colors</h2>
    <div class="block">
        <div class="block-content">
            <div class="row items-push text-center">
                <div class="col-6 col-md-3">
                    <div class="item item-circle bg-success mx-auto mb-15"></div>
                    <code>.bg-success</code>
                </div>
                <div class="col-6 col-md-3">
                    <div class="item item-circle bg-info mx-auto mb-15"></div>
                    <code>.bg-info</code>
                </div>
                <div class="col-6 col-md-3">
                    <div class="item item-circle bg-warning mx-auto mb-15"></div>
                    <code>.bg-warning</code>
                </div>
                <div class="col-6 col-md-3">
                    <div class="item item-circle bg-danger mx-auto mb-15"></div>
                    <code>.bg-danger</code>
                </div>
                <div class="col-6 col-md-3">
                    <div class="item item-circle bg-success-light mx-auto mb-15"></div>
                    <code>.bg-success-light</code>
                </div>
                <div class="col-6 col-md-3">
                    <div class="item item-circle bg-info-light mx-auto mb-15"></div>
                    <code>.bg-info-light</code>
                </div>
                <div class="col-6 col-md-3">
                    <div class="item item-circle bg-warning-light mx-auto mb-15"></div>
                    <code>.bg-warning-light</code>
                </div>
                <div class="col-6 col-md-3">
                    <div class="item item-circle bg-danger-light mx-auto mb-15"></div>
                    <code>.bg-danger-light</code>
                </div>
            </div>
        </div>
    </div>
    <!-- END Contextual Colors -->

    <!-- Gradient Colors -->
    <h2 class="content-heading">Gradient Colors</h2>
    <div class="block">
        <div class="block-content">
            <div class="row items-push text-center">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="item item-2x item-circle bg-gd-dusk mx-auto mb-15"></div>
                    <code>.bg-gd-dusk</code>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="item item-2x item-circle bg-gd-cherry mx-auto mb-15"></div>
                    <code>.bg-gd-cherry</code>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="item item-2x item-circle bg-gd-aqua mx-auto mb-15"></div>
                    <code>.bg-gd-aqua</code>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="item item-2x item-circle bg-gd-emerald mx-auto mb-15"></div>
                    <code>.bg-gd-emerald</code>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="item item-2x item-circle bg-gd-sea mx-auto mb-15"></div>
                    <code>.bg-gd-sea</code>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="item item-2x item-circle bg-gd-leaf mx-auto mb-15"></div>
                    <code>.bg-gd-leaf</code>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="item item-2x item-circle bg-gd-lake mx-auto mb-15"></div>
                    <code>.bg-gd-lake</code>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="item item-2x item-circle bg-gd-sun mx-auto mb-15"></div>
                    <code>.bg-gd-sun</code>
                </div>
            </div>
        </div>
    </div>
    <!-- END Gradient Colors -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>