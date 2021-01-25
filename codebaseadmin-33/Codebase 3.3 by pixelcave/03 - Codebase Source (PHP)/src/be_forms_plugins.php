<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $cb->get_css('js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css'); ?>
<?php $cb->get_css('js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css'); ?>
<?php $cb->get_css('js/plugins/select2/css/select2.min.css'); ?>
<?php $cb->get_css('js/plugins/jquery-tags-input/jquery.tagsinput.min.css'); ?>
<?php $cb->get_css('js/plugins/jquery-auto-complete/jquery.auto-complete.min.css'); ?>
<?php $cb->get_css('js/plugins/ion-rangeslider/css/ion.rangeSlider.css'); ?>
<?php $cb->get_css('js/plugins/dropzonejs/dist/dropzone.css'); ?>
<?php $cb->get_css('js/plugins/flatpickr/flatpickr.min.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <!-- Flatpickr Datetimepicker (.js-flatpickr class is initialized in Helpers.flatpickr()) -->
    <!-- For more info and examples you can check out https://github.com/flatpickr/flatpickr -->
    <h2 class="content-heading">Flatpickr Datetimepicker</h2>
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Examples</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option">
                    <i class="si si-wrench"></i>
                </button>
            </div>
        </div>
        <div class="block-content">
            <div class="row items-push">
                <!-- Flatpickr Datetimepicker (Bootstrap forms) -->
                <div class="col-xl-6">
                    <form action="be_forms_plugins.php" method="post" onsubmit="return false;">
                        <div class="form-row">
                            <div class="form-group col-lg-8">
                                <label for="example-flatpickr-default">Default format</label>
                                <input type="text" class="js-flatpickr form-control bg-white" id="example-flatpickr-default" name="example-flatpickr-default" placeholder="Y-m-d">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-8">
                                <label for="example-flatpickr-custom">Custom format</label>
                                <input type="text" class="js-flatpickr form-control bg-white" id="example-flatpickr-custom" name="example-flatpickr-custom" placeholder="d-m-Y" data-date-format="d-m-Y">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-8">
                                <label for="example-flatpickr-friendly">Friendly format</label>
                                <input type="text" class="js-flatpickr form-control bg-white" id="example-flatpickr-friendly" name="example-flatpickr-friendly" placeholder="F j, Y" data-alt-input="true" data-date-format="Y-m-d" data-alt-format="F j, Y">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-8">
                                <label for="example-flatpickr-range">Range</label>
                                <input type="text" class="js-flatpickr form-control bg-white" id="example-flatpickr-range" name="example-flatpickr-range" placeholder="Select Date Range" data-mode="range" data-min-date="today">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-8">
                                <label for="example-flatpickr-time-standalone">Time Standalone</label>
                                <input type="text" class="js-flatpickr form-control bg-white" id="example-flatpickr-time-standalone" name="example-flatpickr-time-standalone" data-enable-time="true" data-no-calendar="true" data-date-format="H:i">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-8">
                                <label for="example-flatpickr-time-standalone-24">Time Standalone (24-hour format)</label>
                                <input type="text" class="js-flatpickr form-control bg-white" id="example-flatpickr-time-standalone-24" name="example-flatpickr-time-standalone-24" data-enable-time="true" data-no-calendar="true" data-date-format="H:i" data-time_24hr="true">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-8">
                                <label for="example-flatpickr-datetime">Calendar and time picker</label>
                                <input type="text" class="js-flatpickr form-control bg-white" id="example-flatpickr-datetime" name="example-flatpickr-datetime" data-enable-time="true">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-8">
                                <label for="example-flatpickr-datetime-24">Calendar and time picker (24-hour format)</label>
                                <input type="text" class="js-flatpickr form-control bg-white" id="example-flatpickr-datetime-24" name="example-flatpickr-datetime-24" data-enable-time="true" data-time_24hr="true">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-8">
                                <label for="example-flatpickr-inline">Inline Datepicker</label>
                                <input type="text" class="js-flatpickr form-control" id="example-flatpickr-inline" name="example-flatpickr-inline" data-inline="true">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-8">
                                <label for="example-flatpickr-inline-time">Inline Datetimepicker</label>
                                <input type="text" class="js-flatpickr form-control" id="example-flatpickr-inline-time" name="example-flatpickr-inline-time" data-inline="true" data-enable-time="true">
                            </div>
                        </div>
                    </form>
                </div>
                <!-- END Flatpickr Datetimepicker (Bootstrap forms) -->

                <!-- Flatpickr Datetimepicker (Material forms) -->
                <div class="col-xl-6">
                    <form action="be_forms_plugins.php" method="post" onsubmit="return false;">
                        <div class="form-row">
                            <div class="form-group col-lg-8">
                                <div class="form-material">
                                    <input type="text" class="js-flatpickr form-control" id="example-material-flatpickr-default" name="example-material-flatpickr-default" placeholder="Y-m-d" data-allow-input="true">
                                    <label for="example-material-flatpickr-default">Default format</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-8">
                                <div class="form-material">
                                    <input type="text" class="js-flatpickr form-control" id="example-material-flatpickr-custom" name="example-material-flatpickr-custom" placeholder="d-m-Y" data-allow-input="true" data-date-format="d-m-Y">
                                    <label for="example-material-flatpickr-custom">Custom format</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-8">
                                <div class="form-material">
                                    <input type="text" class="js-flatpickr form-control" id="example-material-flatpickr-friendly" name="example-material-flatpickr-friendly" placeholder="F j, Y" data-allow-input="true" data-alt-input="true" data-date-format="Y-m-d" data-alt-format="F j, Y">
                                    <label for="example-material-flatpickr-friendly">Friendly format</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-8">
                                <div class="form-material">
                                    <input type="text" class="js-flatpickr form-control" id="example-material-flatpickr-range" name="example-material-flatpickr-range" placeholder="Select Date Range" data-allow-input="true" data-mode="range" data-min-date="today">
                                    <label for="example-material-flatpickr-range">Range</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-8">
                                <div class="form-material">
                                    <input type="text" class="js-flatpickr form-control" id="example-material-flatpickr-time-standalone" name="example-material-flatpickr-time-standalone" data-allow-input="true" data-enable-time="true" data-no-calendar="true" data-date-format="H:i">
                                    <label for="example-material-flatpickr-time-standalone">Time Standalone</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-8">
                                <div class="form-material">
                                    <input type="text" class="js-flatpickr form-control" id="example-material-flatpickr-time-standalone-24" name="example-material-flatpickr-time-standalone-24" data-allow-input="true" data-enable-time="true" data-no-calendar="true" data-date-format="H:i" data-time_24hr="true">
                                    <label for="example-material-flatpickr-time-standalone-24">Time Standalone (24-hour format)</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-8">
                                <div class="form-material">
                                    <input type="text" class="js-flatpickr form-control" id="example-material-flatpickr-datetime" name="example-material-flatpickr-datetime" data-allow-input="true" data-enable-time="true">
                                    <label for="example-material-flatpickr-datetime">Calendar and time picker</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-8">
                                <div class="form-material">
                                    <input type="text" class="js-flatpickr form-control" id="example-material-flatpickr-datetime-24" name="example-material-flatpickr-datetime-24" data-allow-input="true" data-enable-time="true" data-time_24hr="true">
                                    <label for="example-material-flatpickr-datetime-24">Calendar and time picker (24-hour format)</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-8">
                                <div class="form-material">
                                    <input type="text" class="js-flatpickr form-control" id="example-material-flatpickr-inline" name="example-material-flatpickr-inline" data-inline="true">
                                    <label for="example-material-flatpickr-inline">Inline Datepicker</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-8">
                                <div class="form-material">
                                    <input type="text" class="js-flatpickr form-control" id="example-material-flatpickr-inline-time" name="example-material-flatpickr-inline-time" data-inline="true" data-enable-time="true">
                                    <label for="example-material-flatpickr-inline-time">Inline Datetimepicker</label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- END Flatpickr Datetimepicker (Material forms) -->
            </div>
        </div>
    </div>
    <!-- END Flatpickr Datetimepicker -->

    <!-- jQuery Password Strength Meter functionality is initialized in js/pages/be_forms_plugins.min.js which was auto compiled from _es6/pages/be_forms_plugins.js -->
    <!-- For more info and examples you can check out https://github.com/ablanco/jquery.pwstrength.bootstrap -->
    <h2 class="content-heading">Password Strength Meter</h2>
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Examples</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option">
                    <i class="si si-wrench"></i>
                </button>
            </div>
        </div>
        <div class="block-content">
            <div class="row items-push">
                <div class="col-xl-6">
                    <!-- Password Strength (Bootstrap forms) -->
                    <form action="be_forms_plugins.php" method="post" onsubmit="return false;">
                        <div id="js-pw-strength1-container" class="form-group row">
                            <label class="col-12" for="example-pw-strength1">Password</label>
                            <div class="col-lg-8">
                                <input type="password" class="js-pw-strength1 form-control" id="example-pw-strength1" name="example-pw-strength1">
                                <div class="js-pw-strength1-progress pw-strength-progress mt-5"></div>
                                <p class="js-pw-strength1-feedback form-text"></p>
                                <p class="form-text mb-0">
                                    Please start typing a password to check its strength
                                </p>
                            </div>
                        </div>
                    </form>
                    <!-- END Password Strength (Bootstrap forms) -->
                </div>
                <div class="col-xl-6">
                    <!-- Password Strength (Material forms) -->
                    <form action="be_forms_plugins.php" method="post" onsubmit="return false;">
                        <div id="js-pw-strength2-container" class="form-group row">
                            <div class="col-lg-8">
                                <div class="form-material">
                                    <input type="password" class="js-pw-strength2 form-control" id="example-pw-strength2" name="example-pw-strength2">
                                    <label for="example-pw-strength2">Password</label>
                                </div>
                                <div class="js-pw-strength2-progress pw-strength-progress mt-5"></div>
                                <p class="js-pw-strength2-feedback form-text"></p>
                                <p class="form-text mb-0">
                                    Please start typing a password to check its strength
                                </p>
                            </div>
                        </div>
                    </form>
                    <!-- END Password Strength (Material forms) -->
                </div>
            </div>
        </div>
    </div>
    <!-- END jQuery Password Strength Meter -->

    <!-- Bootstrap Datepicker (.js-datepicker and .input-daterange class is initialized in Helpers.datepicker()) -->
    <!-- For more info and examples you can check out https://github.com/eternicode/bootstrap-datepicker -->
    <h2 class="content-heading">Bootstrap Datepicker</h2>
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Examples</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option">
                    <i class="si si-wrench"></i>
                </button>
            </div>
        </div>
        <div class="block-content">
            <div class="row items-push">
                <!-- Datepicker (Bootstrap forms) -->
                <div class="col-xl-6">
                    <form action="be_forms_plugins.php" method="post" onsubmit="return false;">
                        <div class="form-group row">
                            <label class="col-12" for="example-datepicker1">Datepicker</label>
                            <div class="col-lg-8">
                                <input type="text" class="js-datepicker form-control" id="example-datepicker1" name="example-datepicker1" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-8">
                                <input type="text" class="js-datepicker form-control" id="example-datepicker2" name="example-datepicker2" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd/mm/yy" placeholder="dd/mm/yy">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-8">
                                <input type="text" class="js-datepicker form-control" id="example-datepicker3" name="example-datepicker3" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-daterange1">Date Range</label>
                            <div class="col-lg-8">
                                <div class="input-daterange input-group" data-date-format="mm/dd/yyyy" data-week-start="1" data-autoclose="true" data-today-highlight="true">
                                    <input type="text" class="form-control" id="example-daterange1" name="example-daterange1" placeholder="From" data-week-start="1" data-autoclose="true" data-today-highlight="true">
                                    <div class="input-group-prepend input-group-append">
                                        <span class="input-group-text font-w600">to</span>
                                    </div>
                                    <input type="text" class="form-control" id="example-daterange2" name="example-daterange2" placeholder="To" data-week-start="1" data-autoclose="true" data-today-highlight="true">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12">Inline Datepicker</label>
                            <div class="col-12">
                                <div class="js-datepicker" data-week-start="1" data-today-highlight="true"></div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- END Datepicker (Bootstrap forms) -->

                <!-- Datepicker (Material forms) -->
                <div class="col-xl-6">
                    <form action="be_forms_plugins.php" method="post" onsubmit="return false;">
                        <div class="form-group row">
                            <div class="col-lg-8">
                                <div class="form-material">
                                    <input type="text" class="js-datepicker form-control" id="example-datepicker4" name="example-datepicker4" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                                    <label for="example-datepicker4">Choose a date</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-8">
                                <div class="form-material">
                                    <input type="text" class="js-datepicker form-control" id="example-datepicker5" name="example-datepicker5" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd/mm/yy" placeholder="dd/mm/yy">
                                    <label for="example-datepicker5">Choose a date</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-8">
                                <div class="form-material">
                                    <input type="text" class="js-datepicker form-control" id="example-datepicker6" name="example-datepicker6" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">
                                    <label for="example-datepicker6">Choose a date</label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- END Datepicker (Material forms) -->
            </div>
        </div>
    </div>
    <!-- END Bootstrap Datepicker -->

    <!-- Bootstrap Colorpicker (.js-colorpicker class is initialized in Helpers.colorpicker()) -->
    <!-- For more info and examples you can check out https://github.com/itsjavi/bootstrap-colorpicker/ -->
    <h2 class="content-heading">Bootstrap Colorpicker</h2>
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Examples</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option">
                    <i class="si si-wrench"></i>
                </button>
            </div>
        </div>
        <div class="block-content">
            <div class="row items-push">
                <!-- Colorpicker (Bootstrap forms) -->
                <div class="col-xl-6">
                    <form action="be_forms_plugins.php" method="post" onsubmit="return false;">
                        <div class="form-group row">
                            <label class="col-12" for="example-colorpicker1">Normal</label>
                            <div class="col-lg-8">
                                <input type="text" class="js-colorpicker form-control" id="example-colorpicker1" name="example-colorpicker1" data-format="hex" value="#42a5f5">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-colorpicker2">As Component</label>
                            <div class="col-lg-8">
                                <div class="js-colorpicker input-group" data-format="hex">
                                    <input type="text" class="form-control" id="example-colorpicker2" name="example-colorpicker2" value="#42a5f5">
                                    <div class="input-group-append">
                                        <span class="input-group-text colorpicker-input-addon">
                                            <i></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-colorpicker3">RGBa</label>
                            <div class="col-lg-8">
                                <input type="text" class="js-colorpicker form-control" data-format="rgba" id="example-colorpicker3" name="example-colorpicker3" value="rgba(66, 165, 245, .9)">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-colorpicker4">RGBa (component)</label>
                            <div class="col-lg-8">
                                <div class="js-colorpicker input-group" data-format="rgba">
                                    <input type="text" class="form-control" id="example-colorpicker4" name="example-colorpicker4" value="rgba(66, 165, 245, .9)">
                                    <div class="input-group-append">
                                        <span class="input-group-text colorpicker-input-addon">
                                            <i></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12">Inline</label>
                            <div class="col-12">
                                <div class="js-colorpicker" id="color-container" data-container="#color-container" data-format="hex" data-inline="true" data-color="#42a5f5"></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12">Inline (RGBa)</label>
                            <div class="col-12">
                                <div class="js-colorpicker" id="color-container2" data-container="#color-container2" data-format="rgba" data-inline="true" data-color="rgba(66, 165, 245, .9)"></div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- END Colorpicker (Bootstrap forms) -->

                <!-- Colorpicker (Material forms) -->
                <div class="col-xl-6">
                    <form action="be_forms_plugins.php" method="post" onsubmit="return false;">
                        <div class="form-group row">
                            <div class="col-lg-8">
                                <div class="form-material">
                                    <input type="text" class="js-colorpicker form-control" id="example-colorpicker5" name="example-colorpicker5" data-format="hex" value="#42a5f5">
                                    <label for="example-colorpicker5">Choose a color</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-8">
                                <div class="form-material">
                                    <input type="text" class="js-colorpicker form-control" data-format="rgba" id="example-colorpicker6" name="example-colorpicker6" value="#42a5f5">
                                    <label for="example-colorpicker6">Choose a color (RGBa)</label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- END Colorpicker (Material forms) -->
            </div>
        </div>
    </div>
    <!-- END Bootstrap Colorpicker -->

    <!-- Bootstrap Maxlength (.js-maxlength class is initialized in Helpers.maxlength()) -->
    <!-- For more info and examples you can check out https://github.com/mimo84/bootstrap-maxlength -->
    <h2 class="content-heading">Bootstrap Maxlength</h2>
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Examples</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option">
                    <i class="si si-wrench"></i>
                </button>
            </div>
        </div>
        <div class="block-content">
            <div class="row items-push">
                <!-- Bootstrap Maxlength (Bootstrap forms) -->
                <div class="col-xl-6">
                    <form action="be_forms_plugins.php" method="post" onsubmit="return false;">
                        <div class="form-group row">
                            <label class="col-12" for="example-maxlength1">Normal</label>
                            <div class="col-lg-8">
                                <input type="text" class="js-maxlength form-control" id="example-maxlength1" name="example-maxlength1" maxlength="20" placeholder="Try typing beyond 10 chars..">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-maxlength2">Threshold</label>
                            <div class="col-lg-8">
                                <input type="text" class="js-maxlength form-control" id="example-maxlength2" name="example-maxlength2" maxlength="20" placeholder="When to appear (5 chars).." data-threshold="15">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-maxlength3">Always Show</label>
                            <div class="col-lg-8">
                                <input type="text" class="js-maxlength form-control" id="example-maxlength3" name="example-maxlength3" maxlength="20" placeholder="When focused.." data-always-show="true">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-maxlength4">Custom Text</label>
                            <div class="col-lg-8">
                                <input type="text" class="js-maxlength form-control" id="example-maxlength4" name="example-maxlength4" maxlength="20" placeholder="20 chars limit.." data-always-show="true" data-pre-text="Used " data-separator=" of " data-post-text=" characters">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-maxlength5">Themed Label</label>
                            <div class="col-lg-8">
                                <input type="text" class="js-maxlength form-control" id="example-maxlength5" name="example-maxlength5" maxlength="20" placeholder="Primary color of active theme.." data-always-show="true" data-warning-class="badge badge-primary" data-limit-reached-class="badge badge-primary">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-maxlength6">Position (top)</label>
                            <div class="col-lg-8">
                                <input type="text" class="js-maxlength form-control" id="example-maxlength6" name="example-maxlength6" maxlength="20" placeholder="Top.." data-always-show="true" data-placement="top">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-maxlength7">Position (top-right)</label>
                            <div class="col-lg-8">
                                <input type="text" class="js-maxlength form-control" id="example-maxlength7" name="example-maxlength7" maxlength="20" placeholder="Top Right.." data-always-show="true" data-placement="top-right">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-maxlength8">Position (right)</label>
                            <div class="col-lg-8">
                                <input type="text" class="js-maxlength form-control" id="example-maxlength8" name="example-maxlength8" maxlength="20" placeholder="Right.." data-always-show="true" data-placement="right">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-maxlength9">Position (bottom-right)</label>
                            <div class="col-lg-8">
                                <input type="text" class="js-maxlength form-control" id="example-maxlength9" name="example-maxlength9" maxlength="20" placeholder="Bottom Right.." data-always-show="true" data-placement="bottom-right">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-maxlength10">Textarea</label>
                            <div class="col-lg-8">
                                <textarea class="js-maxlength form-control" id="example-maxlength10" name="example-maxlength10" rows="3" maxlength="100" placeholder="It even works on textareas.." data-always-show="true"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- END Bootstrap Maxlength (Bootstrap forms) -->

                <!-- Bootstrap Maxlength (Material forms) -->
                <div class="col-xl-6">
                    <form action="be_forms_plugins.php" method="post" onsubmit="return false;">
                        <div class="form-group row">
                            <div class="col-lg-8">
                                <div class="form-material">
                                    <input type="text" class="js-maxlength form-control" id="example-material-maxlength1" name="example-material-maxlength1" maxlength="20" placeholder="Try typing beyond 10 chars..">
                                    <label for="example-material-maxlength1">Normal</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-8">
                                <div class="form-material">
                                    <input type="text" class="js-maxlength form-control" id="example-material-maxlength2" name="example-material-maxlength2" maxlength="20" placeholder="When to appear (5 chars).." data-threshold="15">
                                    <label for="example-material-maxlength2">Threshold</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-8">
                                <div class="form-material">
                                    <input type="text" class="js-maxlength form-control" id="example-material-maxlength3" name="example-material-maxlength3" maxlength="20" placeholder="When focused.." data-always-show="true">
                                    <label for="example-material-maxlength3">Threshold</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-8">
                                <div class="form-material">
                                    <input type="text" class="js-maxlength form-control" id="example-material-maxlength4" name="example-material-maxlength4" maxlength="20" placeholder="20 chars limit.." data-always-show="true" data-pre-text="Used " data-separator=" of " data-post-text=" characters">
                                    <label for="example-material-maxlength4">Custom Text</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-8">
                                <div class="form-material">
                                    <input type="text" class="js-maxlength form-control" id="example-material-maxlength5" name="example-material-maxlength5" maxlength="20" placeholder="Primary color of active theme.." data-always-show="true" data-warning-class="badge badge-primary" data-limit-reached-class="badge badge-primary">
                                    <label for="example-material-maxlength5">Themed Label</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-8">
                                <div class="form-material">
                                    <input type="text" class="js-maxlength form-control" id="example-material-maxlength6" name="example-material-maxlength6" maxlength="20" placeholder="Top Right.." data-always-show="true" data-placement="top-right">
                                    <label for="example-material-maxlength6">Position (top-right)</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-8">
                                <div class="form-material">
                                    <textarea class="js-maxlength form-control" id="example-material-maxlength7" name="example-material-maxlength7" rows="3" maxlength="100" placeholder="It even works on textareas.." data-always-show="true"></textarea>
                                    <label for="example-material-maxlength7">Textarea</label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- END Bootstrap Maxlength (Material forms) -->
            </div>
        </div>
    </div>
    <!-- END Bootstrap Maxlength -->

    <!-- Select2 (.js-select2 class is initialized in Helpers.select2()) -->
    <!-- For more info and examples you can check out https://github.com/select2/select2 -->
    <h2 class="content-heading">Select2</h2>
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Examples</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option">
                    <i class="si si-wrench"></i>
                </button>
            </div>
        </div>
        <div class="block-content">
            <div class="row items-push">
                <!-- Select2 (Bootstrap forms) -->
                <div class="col-xl-6">
                    <form action="be_forms_plugins.php" method="post" onsubmit="return false;">
                        <div class="form-group row">
                            <label class="col-12" for="example-select2">Normal</label>
                            <div class="col-lg-8">
                                <select class="js-select2 form-control" id="example-select2" name="example-select2" style="width: 100%;" data-placeholder="Choose one..">
                                    <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                    <option value="1">HTML</option>
                                    <option value="2">CSS</option>
                                    <option value="3">JavaScript</option>
                                    <option value="4">PHP</option>
                                    <option value="5">MySQL</option>
                                    <option value="6">Ruby</option>
                                    <option value="7">Angular</option>
                                    <option value="8">React</option>
                                    <option value="9">Vue.js</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-select2-multiple">Multiple Values</label>
                            <div class="col-lg-8">
                                <select class="js-select2 form-control" id="example-select2-multiple" name="example-select2-multiple" style="width: 100%;" data-placeholder="Choose many.." multiple>
                                    <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                    <option value="1">HTML</option>
                                    <option value="2">CSS</option>
                                    <option value="3">JavaScript</option>
                                    <option value="4">PHP</option>
                                    <option value="5">MySQL</option>
                                    <option value="6">Ruby</option>
                                    <option value="7">Angular</option>
                                    <option value="8">React</option>
                                    <option value="9">Vue.js</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- END Select2 (Bootstrap forms) -->

                <!-- Select2 (Material forms) -->
                <div class="col-xl-6">
                    <form action="be_forms_plugins.php" method="post" onsubmit="return false;">
                        <div class="form-group row">
                            <div class="col-lg-8">
                                <div class="form-material">
                                    <select class="js-select2 form-control" id="example2-select2" name="example2-select2" style="width: 100%;" data-placeholder="Choose one..">
                                        <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                        <option value="1">HTML</option>
                                        <option value="2">CSS</option>
                                        <option value="3">JavaScript</option>
                                        <option value="4">PHP</option>
                                        <option value="5">MySQL</option>
                                        <option value="6">Ruby</option>
                                        <option value="7">AngularJS</option>
                                    </select>
                                    <label for="example2-select2">Normal</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-8">
                                <div class="form-material">
                                    <select class="js-select2 form-control" id="example2-select2-multiple" name="example2-select2-multiple" style="width: 100%;" data-placeholder="Choose many.." multiple>
                                        <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                        <option value="1">HTML</option>
                                        <option value="2">CSS</option>
                                        <option value="3">JavaScript</option>
                                        <option value="4">PHP</option>
                                        <option value="5">MySQL</option>
                                        <option value="6">Ruby</option>
                                        <option value="7">AngularJS</option>
                                    </select>
                                    <label for="example2-select2-multiple">Multiple Values</label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- END Select2 (Material forms) -->
            </div>
        </div>
    </div>
    <!-- END Select2 -->

    <!-- jQuery Tags Input (.js-tags-input class is initialized in Helpers.tagsInput()) -->
    <!-- For more info and examples you can check out https://github.com/xoxco/jQuery-Tags-Input -->
    <h2 class="content-heading">jQuery Tags Input</h2>
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Examples</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option">
                    <i class="si si-wrench"></i>
                </button>
            </div>
        </div>
        <div class="block-content">
            <div class="row items-push">
                <!-- jQuery Tags Input (Bootstrap forms) -->
                <div class="col-xl-6">
                    <form action="be_forms_plugins.php" method="post" onsubmit="return false;">
                        <div class="form-group row">
                            <label class="col-12" for="example-tags1">Normal</label>
                            <div class="col-lg-10">
                                <input type="text" class="js-tags-input form-control" data-height="34px" id="example-tags1" name="example-tags1" value="HTML,CSS,JavaScript">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-tags1">Normal (big)</label>
                            <div class="col-lg-10">
                                <input type="text" class="js-tags-input form-control" id="example-tags2" name="example-tags2" value="HTML,CSS,JavaScript">
                            </div>
                        </div>
                    </form>
                </div>
                <!-- END jQuery Tags Input (Bootstrap forms) -->

                <!-- jQuery Tags Input (Material forms) -->
                <div class="col-xl-6">
                    <form action="be_forms_plugins.php" method="post" onsubmit="return false;">
                        <div class="form-group row">
                            <div class="col-lg-10">
                                <div class="form-material">
                                    <input type="text" class="js-tags-input form-control" data-height="34px" id="example-tags3" name="example-tags3" value="HTML,CSS,JavaScript">
                                    <label for="example-tags3">Material</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-10">
                                <div class="form-material">
                                    <input type="text" class="js-tags-input form-control" id="example-tags4" name="example-tags4" value="HTML,CSS,JavaScript">
                                    <label for="example-tags4">Material (big)</label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- END jQuery Tags Input (Material forms) -->
            </div>
        </div>
    </div>
    <!-- END jQuery Tags Input -->

    <!-- jQuery AutoComplete functionality is initialized in js/pages/be_forms_plugins.min.js which was auto compiled from _es6/pages/be_forms_plugins.js -->
    <!-- For more info and examples you can check out https://github.com/Pixabay/jQuery-autoComplete -->
    <h2 class="content-heading">jQuery AutoComplete</h2>
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Examples</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option">
                    <i class="si si-wrench"></i>
                </button>
            </div>
        </div>
        <div class="block-content">
            <div class="row items-push">
                <!-- jQuery Auto Complete (Bootstrap forms) -->
                <div class="col-xl-6">
                    <form action="be_forms_plugins.php" method="post" onsubmit="return false;">
                        <div class="form-group row">
                            <label class="col-12" for="example-autocomplete1">Normal Search</label>
                            <div class="col-lg-8">
                                <input type="text" class="js-autocomplete form-control" id="example-autocomplete1" name="example-autocomplete1" placeholder="Countries..">
                            </div>
                        </div>
                    </form>
                </div>
                <!-- END jQuery Auto Complete (Bootstrap forms) -->

                <!-- jQuery Auto Complete (Material forms) -->
                <div class="col-xl-6">
                    <form action="be_forms_plugins.php" method="post" onsubmit="return false;">
                        <div class="form-group row">
                            <div class="col-lg-8">
                                <div class="form-material">
                                    <input type="text" class="js-autocomplete form-control" id="example-autocomplete2" name="example-autocomplete2" placeholder="Countries..">
                                    <label for="example-autocomplete2">Material Search</label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- END jQuery Auto Complete (Material forms) -->
            </div>
        </div>
    </div>
    <!-- END jQuery AutoComplete -->

    <!-- Masked Inputs (.js-masked-* classes are initialized in Helpers.maskedInputs()) -->
    <!-- For more info and examples you can check out http://digitalbush.com/projects/masked-input-plugin/ -->
    <h2 class="content-heading">Masked Inputs</h2>
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Default</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option">
                    <i class="si si-wrench"></i>
                </button>
            </div>
        </div>
        <div class="block-content">
            <div class="row">
                <!-- Masked Inputs (Bootstrap forms) -->
                <div class="col-xl-6">
                    <form action="be_forms_plugins.php" method="post" onsubmit="return false;">
                        <div class="form-group row">
                            <label class="col-12" for="example-masked-date1">Date (format 1)</label>
                            <div class="col-lg-8">
                                <input type="text" class="js-masked-date form-control" id="example-masked-date1" name="example-masked-date1" placeholder="dd/mm/yyyy">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-masked-date2">Date (format 2)</label>
                            <div class="col-lg-8">
                                <input type="text" class="js-masked-date-dash form-control" id="example-masked-date2" name="example-masked-date2" placeholder="dd-mm-yyyy">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-masked-phone">Phone</label>
                            <div class="col-lg-8">
                                <input type="text" class="js-masked-phone form-control" id="example-masked-phone" name="example-masked-phone" placeholder="(999) 999-9999">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-masked-phone-ext">Phone (Ext)</label>
                            <div class="col-lg-8">
                                <input type="text" class="js-masked-phone-ext form-control" id="example-masked-phone-ext" name="example-masked-phone-ext" placeholder="(999) 999-9999? x99999">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-masked-taxid">Tax ID</label>
                            <div class="col-lg-8">
                                <input type="text" class="js-masked-taxid form-control" id="example-masked-taxid" name="example-masked-taxid" placeholder="99-9999999">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-masked-ssn">SSN</label>
                            <div class="col-lg-8">
                                <input type="text" class="js-masked-ssn form-control" id="example-masked-ssn" name="example-masked-ssn" placeholder="999-99-9999">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-masked-pkey">Product Key</label>
                            <div class="col-lg-8">
                                <input type="text" class="js-masked-pkey form-control" id="example-masked-pkey" name="example-masked-pkey" placeholder="a*-999-a999">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-masked-time">Time Format</label>
                            <div class="col-lg-8">
                                <input type="text" class="js-masked-time form-control" id="example-masked-time" name="example-masked-time" placeholder="00:00">
                            </div>
                        </div>
                    </form>
                </div>
                <!-- END Masked Inputs (Bootstrap forms) -->

                <!-- Masked Inputs (Material forms) -->
                <div class="col-xl-6">
                    <form action="be_forms_plugins.php" method="post" onsubmit="return false;">
                        <div class="form-group row">
                            <div class="col-lg-8">
                                <div class="form-material">
                                    <input type="text" class="js-masked-date form-control" id="example-masked2-date1" name="example-masked2-date1" placeholder="dd/mm/yyyy">
                                    <label for="example-masked2-date1">Date (format 1)</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-8">
                                <div class="form-material">
                                    <input type="text" class="js-masked-date-dash form-control" id="example-masked2-date2" name="example-masked2-date2" placeholder="dd-mm-yyyy">
                                    <label for="example-masked2-date2">Date (format 2)</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-8">
                                <div class="form-material floating">
                                    <input type="text" class="js-masked-phone form-control" id="example-masked2-phone" name="example-masked2-phone">
                                    <label for="example-masked2-phone">Phone <small class="text-muted">(999) 999-9999</small></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-8">
                                <div class="form-material floating">
                                    <input type="text" class="js-masked-phone-ext form-control" id="example-masked2-phone-ext" name="example-masked2-phone-ext">
                                    <label for="example-masked2-phone-ext">Phone (Ext) <small class="text-muted">(999) 999-9999? x99999</small></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-8">
                                <div class="form-material floating">
                                    <input type="text" class="js-masked-pkey form-control" id="example-masked2-pkey" name="example-masked2-pkey">
                                    <label for="example-masked2-pkey">Product Key <small class="text-muted">a*-999-a999</small></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-8">
                                <div class="form-material floating">
                                    <input type="text" class="js-masked-time form-control" id="example-masked2-time" name="example-masked2-time">
                                    <label for="example-masked2-time">Time Format <small class="text-muted">00:00</small></label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- END Masked Inputs (Material forms) -->
            </div>
        </div>
    </div>
    <!-- END Masked Inputs -->

    <!-- Range Sliders -->
    <!-- Ion Range Sliders (.js-rangeslider class is initialized in Helpers.rangeslider()) -->
    <!-- For more info and examples you can check out https://github.com/IonDen/ion.rangeSlider -->
    <h2 class="content-heading">Range Sliders</h2>
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Examples</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option">
                    <i class="si si-wrench"></i>
                </button>
            </div>
        </div>
        <div class="block-content">
            <form action="be_forms_plugins.php" method="post" onsubmit="return false;">
                <div class="form-group row">
                    <label class="col-lg-2 col-form-label mt-10">Normal</label>
                    <div class="col-lg-10">
                        <input type="text" class="js-rangeslider" id="example-rangeslider1" name="example-rangeslider1" value="25">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-2 col-form-label mt-10">Min Max</label>
                    <div class="col-lg-10">
                        <input type="text" class="js-rangeslider" id="example-rangeslider2" name="example-rangeslider2" value="330" data-min="0" data-max="1000">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-2 col-form-label mt-10">Grid</label>
                    <div class="col-lg-10">
                        <input type="text" class="js-rangeslider" id="example-rangeslider3" name="example-rangeslider3" value="660" data-grid="true" data-min="0" data-max="1000">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-2 col-form-label mt-10">Double</label>
                    <div class="col-lg-10">
                        <input type="text" class="js-rangeslider" id="example-rangeslider4" name="example-rangeslider4" data-type="double" data-grid="true" data-min="0" data-max="1000" data-from="200" data-to="800">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-2 col-form-label mt-10">Negative</label>
                    <div class="col-lg-10">
                        <input type="text" class="js-rangeslider" id="example-rangeslider5" name="example-rangeslider5" data-type="double" data-grid="true" data-min="-500" data-max="500" data-from="-150" data-to="150">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-2 col-form-label mt-10">Step</label>
                    <div class="col-lg-10">
                        <input type="text" class="js-rangeslider" id="example-rangeslider6" name="example-rangeslider6" data-type="double" data-grid="true" data-min="-500" data-max="500" data-from="-250" data-to="250" data-step="50">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-2 col-form-label mt-10">Custom</label>
                    <div class="col-lg-10">
                        <input type="text" class="js-rangeslider" id="example-rangeslider7" name="example-rangeslider7" data-grid="true" data-from="5" data-values="January, February, March, April, May, June, July, August, September, October, November, December">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-2 col-form-label mt-10">Prefixes</label>
                    <div class="col-lg-10">
                        <input type="text" class="js-rangeslider" id="example-rangeslider8" name="example-rangeslider8" data-type="double" data-grid="true" data-min="0" data-max="10000" data-from="2500" data-to="7500" data-prefix="$">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-2 col-form-label mt-10">Postfixes</label>
                    <div class="col-lg-10">
                        <input type="text" class="js-rangeslider" id="example-rangeslider9" name="example-rangeslider9" data-grid="true" data-min="-20" data-max="90" data-from="35" data-postfix="&deg;">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- END Range Sliders -->

    <!-- DropzoneJS -->
    <!-- For more info and examples you can check out http://www.dropzonejs.com/#usage -->
    <h2 class="content-heading">DropzoneJS</h2>
    <div class="block">
        <div class="block-content block-content-full">
            <!-- DropzoneJS Container -->
            <form class="dropzone" action="be_forms_plugins.php"></form>
        </div>
    </div>
    <!-- END DropzoneJS -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/pwstrength-bootstrap/pwstrength-bootstrap.min.js'); ?>
<?php $cb->get_js('js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js'); ?>
<?php $cb->get_js('js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js'); ?>
<?php $cb->get_js('js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js'); ?>
<?php $cb->get_js('js/plugins/select2/js/select2.full.min.js'); ?>
<?php $cb->get_js('js/plugins/jquery-tags-input/jquery.tagsinput.min.js'); ?>
<?php $cb->get_js('js/plugins/jquery-auto-complete/jquery.auto-complete.min.js'); ?>
<?php $cb->get_js('js/plugins/masked-inputs/jquery.maskedinput.min.js'); ?>
<?php $cb->get_js('js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js'); ?>
<?php $cb->get_js('js/plugins/dropzonejs/dropzone.min.js'); ?>
<?php $cb->get_js('js/plugins/flatpickr/flatpickr.min.js'); ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/be_forms_plugins.min.js'); ?>

<!-- Page JS Helpers (Flatpickr + BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Input + Range Sliders + Tags Inputs plugins) -->
<script>jQuery(function(){ Codebase.helpers(['flatpickr', 'datepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider', 'tags-inputs']); });</script>

<?php require 'inc/_global/views/footer_end.php'; ?>
