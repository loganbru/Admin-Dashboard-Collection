<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <!-- SlimScroll ([data-toggle="slimscroll"] is initialized in Helpers.slimscroll()) -->
    <!-- For more info and examples you can check out http://rocha.la/jQuery-slimScroll -->
    <h2 class="content-heading">Scrolling <small>Default height</small></h2>
    <div class="row">
        <div class="col-lg-4">
            <!-- Autohide Scrollbar -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Autohide Scrollbar</h3>
                </div>
                <div class="block-content" data-toggle="slimscroll">
                    <?php $cb->get_text('medium', 3); ?>
                </div>
            </div>
            <!-- END Autohide Scrollbar -->
        </div>
        <div class="col-lg-4">
            <!-- Always Visible Scrollbar -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Visible Scrollbar</h3>
                </div>
                <div class="block-content" data-toggle="slimscroll" data-always-visible="true">
                    <?php $cb->get_text('medium', 3); ?>
                </div>
            </div>
            <!-- END Always Visible Scrollbar -->
        </div>
        <div class="col-lg-4">
            <!-- Colorful Scrollbar -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Colorful Scrollbar</h3>
                </div>
                <div class="block-content" data-toggle="slimscroll" data-color="#42a5f5" data-opacity="1" data-always-visible="true">
                    <?php $cb->get_text('medium', 3); ?>
                </div>
            </div>
            <!-- END Colorful Scrollbar -->
        </div>
        <div class="col-lg-4">
            <!-- Scrollbar Size -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Scrollbar Size</h3>
                </div>
                <div class="block-content" data-toggle="slimscroll" data-always-visible="true" data-size="8px">
                    <?php $cb->get_text('medium', 3); ?>
                </div>
            </div>
            <!-- END Scrollbar Size -->
        </div>
        <div class="col-lg-4">
            <!-- Scrollbar Rail -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Scrollbar Rail</h3>
                </div>
                <div class="block-content" data-toggle="slimscroll" data-always-visible="true" data-rail-visible="true" data-rail-color="#eee" data-rail-opacity="1">
                    <?php $cb->get_text('medium', 3); ?>
                </div>
            </div>
            <!-- END Scrollbar Rail -->
        </div>
        <div class="col-lg-4">
            <!-- Scrollbar Position -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Scrollbar Position</h3>
                </div>
                <div class="block-content" data-toggle="slimscroll" data-position="left" data-always-visible="true">
                    <?php $cb->get_text('medium', 3); ?>
                </div>
            </div>
            <!-- END Scrollbar Position -->
        </div>
    </div>
    <h2 class="content-heading">Scrolling <small>Specific height</small></h2>
    <div class="row">
        <div class="col-lg-4">
            <!-- Scroll Height 350px -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">350px</h3>
                </div>
                <div class="block-content" data-toggle="slimscroll" data-height="350px" data-color="#9ccc65" data-opacity="1" data-always-visible="true">
                    <?php $cb->get_text('medium', 3); ?>
                </div>
            </div>
            <!-- END Scroll Height 350px -->
        </div>
        <div class="col-lg-4">
            <!-- Scroll Height 250px -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">250px</h3>
                </div>
                <div class="block-content" data-toggle="slimscroll" data-height="250px" data-color="#ffca28" data-opacity="1" data-always-visible="true">
                    <?php $cb->get_text('medium', 3); ?>
                </div>
            </div>
            <!-- END Scroll Height 250px -->
        </div>
        <div class="col-lg-4">
            <!-- Scroll Height 150px -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">150px</h3>
                </div>
                <div class="block-content" data-toggle="slimscroll" data-height="150px" data-color="#ef5350" data-opacity="1" data-always-visible="true">
                    <?php $cb->get_text('medium', 3); ?>
                </div>
            </div>
            <!-- END Scroll Height 150px -->
        </div>
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/jquery-slimscroll/jquery.slimscroll.min.js'); ?>

<!-- Page JS Helpers (SlimScroll plugin) -->
<script>jQuery(function(){ Codebase.helpers(['slimscroll']); });</script>

<?php require 'inc/_global/views/footer_end.php'; ?>