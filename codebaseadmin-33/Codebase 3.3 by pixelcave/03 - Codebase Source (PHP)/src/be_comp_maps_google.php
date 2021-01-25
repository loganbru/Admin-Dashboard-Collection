<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <!-- Maps and Search functionality is initialized in js/pages/be_comp_maps_google.min.js which was auto compiled from _es6/pages/be_comp_maps_google.js -->
    <!-- For more info and examples you can check out https://hpneo.github.io/gmaps/ -->
    <h2 class="content-heading">Google Maps</h2>

    <!-- Search Map -->
    <div class="block">
        <div class="block-content block-content-sm">
            <!-- Search Form -->
            <form class="js-form-search mb-10" action="be_comp_maps_google.php" method="post">
                <div class="input-group input-group-lg">
                    <input type="text" class="js-search-address form-control" placeholder="Search.. (eg: Tokyo)">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
            <!-- END Search Form -->
        </div>
        <!-- Search Map Container -->
        <div id="js-map-search" style="height: 500px;"></div>
    </div>
    <!-- END Search Map -->

    <!-- Satellite Map -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Satellite Map</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option">
                    <i class="si si-wrench"></i>
                </button>
            </div>
        </div>
        <!-- Satellite Map Container -->
        <div id="js-map-sat" style="height: 500px;"></div>
    </div>
    <!-- END Satellite Map -->

    <!-- Terrain Map -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Terrain Map</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option">
                    <i class="si si-wrench"></i>
                </button>
            </div>
        </div>
        <!-- Terrain Map Container -->
        <div id="js-map-ter" style="height: 500px;"></div>
    </div>
    <!-- END Terrain Map -->

    <!-- Overlay Map -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Overlay Map</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option">
                    <i class="si si-wrench"></i>
                </button>
            </div>
        </div>
        <!-- Overlay Map Container -->
        <div id="js-map-overlay" style="height: 500px;"></div>
    </div>
    <!-- END Overlay Map -->

    <!-- Map Markers Map -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Map Markers Map</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option">
                    <i class="si si-wrench"></i>
                </button>
            </div>
        </div>
        <!-- Markers Map Container -->
        <div id="js-map-markers" style="height: 500px;"></div>
    </div>
    <!-- END Map Markers Map -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<!-- Google Maps API Key (you will have to obtain a Google Maps API key to use Google Maps) -->
<!-- For more info please have a look at https://developers.google.com/maps/documentation/javascript/get-api-key#key -->
<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo $cb->google_maps_api_key; ?>"></script>
<?php $cb->get_js('js/plugins/gmapsjs/gmaps.min.js'); ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/be_comp_maps_google.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>
