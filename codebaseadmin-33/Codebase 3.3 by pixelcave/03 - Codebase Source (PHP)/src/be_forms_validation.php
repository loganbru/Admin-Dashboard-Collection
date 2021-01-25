<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $cb->get_css('js/plugins/select2/css/select2.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <!-- Bootstrap Forms Validation -->
    <h2 class="content-heading">Bootstrap Forms</h2>
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Validation</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option">
                    <i class="si si-wrench"></i>
                </button>
            </div>
        </div>
        <div class="block-content">
            <div class="row justify-content-center py-20">
                <div class="col-xl-6">
                    <!-- jQuery Validation functionality is initialized in js/pages/be_forms_validation.min.js which was auto compiled from _es6/pages/be_forms_validation.js -->
                    <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                    <form class="js-validation-bootstrap" action="be_forms_validation.php" method="post">
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-username">Username <span class="text-danger">*</span></label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Enter a username..">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-email">Email <span class="text-danger">*</span></label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="val-email" name="val-email" placeholder="Your valid email..">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-password">Password <span class="text-danger">*</span></label>
                            <div class="col-lg-8">
                                <input type="password" class="form-control" id="val-password" name="val-password" placeholder="Choose a safe one..">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-confirm-password">Confirm Password <span class="text-danger">*</span></label>
                            <div class="col-lg-8">
                                <input type="password" class="form-control" id="val-confirm-password" name="val-confirm-password" placeholder="..and confirm it!">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-select2">Select2 <span class="text-danger">*</span></label>
                            <div class="col-lg-8">
                                <select class="js-select2 form-control" id="val-select2" name="val-select2" style="width: 100%;" data-placeholder="Choose one..">
                                    <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                    <option value="html">HTML</option>
                                    <option value="css">CSS</option>
                                    <option value="javascript">JavaScript</option>
                                    <option value="angular">Angular</option>
                                    <option value="react">React</option>
                                    <option value="vuejs">Vue.js</option>
                                    <option value="ruby">Ruby</option>
                                    <option value="php">PHP</option>
                                    <option value="asp">ASP.NET</option>
                                    <option value="python">Python</option>
                                    <option value="mysql">MySQL</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-select2-multiple">Select2 Multiple <span class="text-danger">*</span></label>
                            <div class="col-lg-8">
                                <select class="js-select2 form-control" id="val-select2-multiple" name="val-select2-multiple" style="width: 100%;" data-placeholder="Choose at least two.." multiple>
                                    <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                    <option value="html">HTML</option>
                                    <option value="css">CSS</option>
                                    <option value="javascript">JavaScript</option>
                                    <option value="angular">Angular</option>
                                    <option value="react">React</option>
                                    <option value="vuejs">Vue.js</option>
                                    <option value="ruby">Ruby</option>
                                    <option value="php">PHP</option>
                                    <option value="asp">ASP.NET</option>
                                    <option value="python">Python</option>
                                    <option value="mysql">MySQL</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-suggestions">Suggestions <span class="text-danger">*</span></label>
                            <div class="col-lg-8">
                                <textarea class="form-control" id="val-suggestions" name="val-suggestions" rows="5" placeholder="What would you like to see?"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-skill">Best Skill <span class="text-danger">*</span></label>
                            <div class="col-lg-6">
                                <select class="form-control" id="val-skill" name="val-skill">
                                    <option value="">Please select</option>
                                    <option value="html">HTML</option>
                                    <option value="css">CSS</option>
                                    <option value="javascript">JavaScript</option>
                                    <option value="angular">Angular</option>
                                    <option value="react">React</option>
                                    <option value="vuejs">Vue.js</option>
                                    <option value="ruby">Ruby</option>
                                    <option value="php">PHP</option>
                                    <option value="asp">ASP.NET</option>
                                    <option value="python">Python</option>
                                    <option value="mysql">MySQL</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-currency">Currency <span class="text-danger">*</span></label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="val-currency" name="val-currency" placeholder="$21.60">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-website">Website <span class="text-danger">*</span></label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="val-website" name="val-website" placeholder="http://example.com">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-phoneus">Phone (US) <span class="text-danger">*</span></label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="val-phoneus" name="val-phoneus" placeholder="212-999-0000">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-digits">Digits <span class="text-danger">*</span></label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="val-digits" name="val-digits" placeholder="5">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-number">Number <span class="text-danger">*</span></label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="val-number" name="val-number" placeholder="5.0">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-range">Range [1, 5] <span class="text-danger">*</span></label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="val-range" name="val-range" placeholder="4">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label"><a data-toggle="modal" data-target="#modal-terms" href="#">Terms &amp; Conditions</a> <span class="text-danger">*</span></label>
                            <div class="col-lg-8">
                                <label class="css-control css-control-primary css-checkbox" for="val-terms">
                                    <input type="checkbox" class="css-control-input" id="val-terms" name="val-terms" value="1">
                                    <span class="css-control-indicator"></span> I agree to the terms
                                </label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-8 ml-auto">
                                <button type="submit" class="btn btn-alt-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- Bootstrap Forms Validation -->

    <!-- Material Forms Validation -->
    <h2 class="content-heading">Material Forms</h2>
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Validation</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option">
                    <i class="si si-wrench"></i>
                </button>
            </div>
        </div>
        <div class="block-content">
            <div class="row justify-content-center py-20">
                <div class="col-xl-6">
                    <!-- jQuery Validation functionality is initialized in js/pages/be_forms_validation.min.js which was auto compiled from _es6/pages/be_forms_validation.js -->
                    <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                    <form class="js-validation-material" action="be_forms_validation.php" method="post">
                        <div class="form-group">
                            <div class="form-material">
                                <input type="text" class="form-control" id="val-username2" name="val-username2" placeholder="Enter a username..">
                                <label for="val-username2">Username</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <input type="text" class="form-control" id="val-email2" name="val-email2" placeholder="Your valid email..">
                                <label for="val-email2">Email</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <input type="password" class="form-control" id="val-password2" name="val-password2" placeholder="Choose a safe one..">
                                <label for="val-password2">Password</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <input type="password" class="form-control" id="val-confirm-password2" name="val-confirm-password2" placeholder="..and confirm it!">
                                <label for="val-confirm-password2">Confirm Password</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <select class="js-select2 form-control" id="val-select22" name="val-select22" style="width: 100%;" data-placeholder="Choose one..">
                                    <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                    <option value="html">HTML</option>
                                    <option value="css">CSS</option>
                                    <option value="javascript">JavaScript</option>
                                    <option value="angular">Angular</option>
                                    <option value="react">React</option>
                                    <option value="vuejs">Vue.js</option>
                                    <option value="ruby">Ruby</option>
                                    <option value="php">PHP</option>
                                    <option value="asp">ASP.NET</option>
                                    <option value="python">Python</option>
                                    <option value="mysql">MySQL</option>
                                </select>
                                <label for="val-select2">Select2</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <select class="js-select2 form-control" id="val-select2-multiple2" name="val-select2-multiple2" style="width: 100%;" data-placeholder="Choose at least two.." multiple>
                                    <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                    <option value="html">HTML</option>
                                    <option value="css">CSS</option>
                                    <option value="javascript">JavaScript</option>
                                    <option value="angular">Angular</option>
                                    <option value="react">React</option>
                                    <option value="vuejs">Vue.js</option>
                                    <option value="ruby">Ruby</option>
                                    <option value="php">PHP</option>
                                    <option value="asp">ASP.NET</option>
                                    <option value="python">Python</option>
                                    <option value="mysql">MySQL</option>
                                </select>
                                <label for="val-select2-multiple2">Select2 Multiple</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <textarea class="form-control" id="val-suggestions2" name="val-suggestions2" rows="3" placeholder="What you would like to see?"></textarea>
                                <label for="val-suggestions2">Suggestions</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <select class="form-control" id="val-skill2" name="val-skill2">
                                    <option value="">Please select</option>
                                    <option value="html">HTML</option>
                                    <option value="css">CSS</option>
                                    <option value="javascript">JavaScript</option>
                                    <option value="angular">Angular</option>
                                    <option value="react">React</option>
                                    <option value="vuejs">Vue.js</option>
                                    <option value="ruby">Ruby</option>
                                    <option value="php">PHP</option>
                                    <option value="asp">ASP.NET</option>
                                    <option value="python">Python</option>
                                    <option value="mysql">MySQL</option>
                                </select>
                                <label for="val-skill2">Best Skill</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <input type="text" class="form-control" id="val-currency2" name="val-currency2" placeholder="$21.60">
                                <label for="val-currency2">Currency</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <input type="text" class="form-control" id="val-phoneus2" name="val-phoneus2" placeholder="212-999-0000">
                                <label for="val-phoneus2">Phone (US)</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <input type="text" class="form-control" id="val-website2" name="val-website2" placeholder="http://example.com">
                                <label for="val-website2">Website</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <input type="text" class="form-control" id="val-digits2" name="val-digits2" placeholder="5">
                                <label for="val-digits2">Digits</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <input type="text" class="form-control" id="val-number2" name="val-number2" placeholder="5.0">
                                <label for="val-number2">Number</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <input type="text" class="form-control" id="val-range2" name="val-range2" placeholder="4">
                                <label for="val-range2">Range [1, 5]</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <label><a data-toggle="modal" data-target="#modal-terms" href="#">Terms &amp; Conditions</a> <span class="text-danger">*</span></label>
                            </div>
                            <label class="css-control css-control-primary css-checkbox" for="val-terms2">
                                <input type="checkbox" class="css-control-input" id="val-terms2" name="val-terms2" value="1">
                                <span class="css-control-indicator"></span> I agree to the terms
                            </label>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-alt-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END Material Forms Validation -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>

<!-- Terms Modal -->
<div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popin">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Terms &amp; Conditions</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <h4 class="mb-10">1. General</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                    <h4 class="mb-10">2. Account</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                    <h4 class="mb-10">3. Service</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                    <h4 class="mb-10">4. Payments</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-alt-primary" data-dismiss="modal">
                    <i class="fa fa-check"></i> Ok
                </button>
            </div>
        </div>
    </div>
</div>
<!-- END Terms Modal -->

<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/select2/js/select2.full.min.js'); ?>
<?php $cb->get_js('js/plugins/jquery-validation/jquery.validate.min.js'); ?>
<?php $cb->get_js('js/plugins/jquery-validation/additional-methods.js'); ?>

<!-- Page JS Helpers (Select2 plugin) -->
<script>jQuery(function(){ Codebase.helpers('select2'); }); </script>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/be_forms_validation.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>