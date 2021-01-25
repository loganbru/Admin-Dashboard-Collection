<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Codebase - Page specific configuration
$cb->l_m_content    = '';
$cb->l_header_style = '';
?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $cb->get_css('js/plugins/fullcalendar/fullcalendar.min.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <!-- Calendar and Events functionality is initialized in js/pages/be_comp_calendar.min.js which was auto compiled from _es6/pages/be_comp_calendar.js -->
    <!-- For more info and examples you can check out https://fullcalendar.io/ -->
    <div class="block">
        <div class="block-content">
            <div class="row items-push">
                <div class="col-xl-9">
                    <!-- Calendar Container -->
                    <div class="js-calendar"></div>
                </div>
                <div class="col-xl-3 d-none d-xl-block">
                    <!-- Add Event Form -->
                    <form class="js-form-add-event mb-30" action="be_comp_calendar.php" method="post">
                        <div class="input-group">
                            <input type="text" class="js-add-event form-control" placeholder="Add Event..">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-secondary">
                                    <i class="fa fa-plus-circle"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- END Add Event Form -->

                    <!-- Event List -->
                    <ul class="js-events list list-events">
                        <li class="bg-info-light">Project Mars</li>
                        <li class="bg-success-light">Cinema</li>
                        <li class="bg-danger-light">Project X</li>
                        <li class="bg-warning-light">Skype Meeting</li>
                        <li class="bg-info-light">Codename PX</li>
                        <li class="bg-success-light">Weekend Adventure</li>
                        <li class="bg-warning-light">Meeting</li>
                        <li class="bg-success-light">Walk the dog</li>
                        <li class="bg-info-light">AI schedule</li>
                    </ul>
                    <div class="text-center">
                        <em class="font-size-xs text-muted"><i class="fa fa-arrows"></i> Drag and drop events on the calendar</em>
                    </div>
                    <!-- END Event List -->
                </div>
            </div>
        </div>
    </div>
    <!-- END Calendar -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/jquery-ui/jquery-ui.min.js'); ?>
<?php $cb->get_js('js/plugins/moment/moment.min.js'); ?>
<?php $cb->get_js('js/plugins/fullcalendar/fullcalendar.min.js'); ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/be_comp_calendar.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>
