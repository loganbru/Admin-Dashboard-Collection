<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <!-- Material Design -->
    <h2 class="content-heading">Material Design</h2>
    <div class="row">
        <div class="col-md-6">
            <!-- Static Labels -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Static Labels</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option">
                            <i class="si si-wrench"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <form action="be_forms_elements_material.php" method="post" onsubmit="return false;">
                        <div class="form-group row">
                            <div class="col-md-9">
                                <div class="form-material">
                                    <input type="text" class="form-control" id="material-text" name="material-text" placeholder="Please enter your username">
                                    <label for="material-text">Username</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-9">
                                <div class="form-material">
                                    <input type="password" class="form-control" id="material-password" name="material-password" placeholder="Please enter your password">
                                    <label for="material-password">Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material">
                                    <input type="email" class="form-control" id="material-email" name="material-email" placeholder="Please enter your email">
                                    <label for="material-email">Email</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-6">
                                <div class="form-material">
                                    <input type="text" class="form-control" id="material-gridf" name="material-gridf" placeholder="col-6">
                                    <label for="material-gridf">Grid Input</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-material">
                                    <input type="text" class="form-control" id="material-gridl" name="material-gridl" placeholder="col-6">
                                    <label for="material-gridl">Grid Input</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material">
                                    <textarea class="form-control" id="material-textarea-small" name="material-textarea-small" rows="3" placeholder="Please add a comment"></textarea>
                                    <label for="material-textarea-small">Textarea Small</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material">
                                    <textarea class="form-control" id="material-textarea-large" name="material-textarea-large" rows="8" placeholder="Please add a comment"></textarea>
                                    <label for="material-textarea-large">Textarea Large</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-9">
                                <div class="form-material">
                                    <input type="text" class="form-control form-control-sm" id="material-input-size-sm" name="material-input-size-sm" placeholder=".form-control-sm">
                                    <label for="material-input-size-sm">Small Input Size</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-9">
                                <div class="form-material">
                                    <input type="text" class="form-control" id="material-input-size-normal" name="material-input-size-normal" placeholder=".form-control">
                                    <label for="material-input-size-normal">Normal Input Size</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-9">
                                <div class="form-material">
                                    <input type="text" class="form-control form-control-lg" id="material-input-size-lg" name="material-input-size-lg" placeholder=".form-control-lg">
                                    <label for="material-input-size-lg">Large Input Size</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-9">
                                <div class="form-material form-material-primary">
                                    <input type="text" class="form-control" id="material-color-primary" name="material-color-primary" placeholder="On focus">
                                    <label for="material-color-primary">Primary Color</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-9">
                                <div class="form-material form-material-success">
                                    <input type="text" class="form-control" id="material-color-success" name="material-color-success" placeholder="On focus">
                                    <label for="material-color-success">Success Color</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-9">
                                <div class="form-material form-material-info">
                                    <input type="text" class="form-control" id="material-color-info" name="material-color-info" placeholder="On focus">
                                    <label for="material-color-info">Info Color</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-9">
                                <div class="form-material form-material-warning">
                                    <input type="text" class="form-control" id="material-color-warning" name="material-color-warning" placeholder="On focus">
                                    <label for="material-color-warning">Warning Color</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-9">
                                <div class="form-material form-material-danger">
                                    <input type="text" class="form-control" id="material-color-danger" name="material-color-danger" placeholder="On focus">
                                    <label for="material-color-danger">Danger Color</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row is-valid">
                            <div class="col-md-9">
                                <div class="form-material">
                                    <input type="text" class="form-control" id="material-valid" name="material-valid" placeholder="Valid State">
                                    <label for="material-valid">Valid</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row is-invalid">
                            <div class="col-md-9">
                                <div class="form-material">
                                    <input type="text" class="form-control" id="material-invalid" name="material-invalid" placeholder="Invalid State">
                                    <label for="material-invalid">Invalid</label>
                                </div>
                                <div class="invalid-feedback">Invalid feedback</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-9">
                                <div class="form-material">
                                    <input type="text" class="form-control" id="material-help" name="material-help">
                                    <label for="material-help">With Help</label>
                                    <div class="form-text text-muted text-right">This is some help text!</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-9">
                                <div class="form-material input-group input-group-lg">
                                    <input type="text" class="form-control" id="material-addon-text" name="material-addon-text" placeholder="Company's name..">
                                    <label for="material-addon-text">Text Addon</label>
                                    <div class="input-group-append">
                                        <span class="input-group-text">.example.com</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-9">
                                <div class="form-material input-group">
                                    <input type="text" class="form-control" id="material-addon-icon" name="material-addon-icon" placeholder="Full name..">
                                    <label for="material-addon-icon">Icon Addon</label>
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-fw fa-user"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-9">
                                <div class="form-material">
                                    <input type="text" class="form-control" id="material-disabled" name="material-disabled" disabled>
                                    <label for="material-disabled">Disabled</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-9">
                                <div class="form-material">
                                    <select class="form-control" id="material-select" name="material-select">
                                        <option>...</option>
                                        <option value="1">Option #1</option>
                                        <option value="2">Option #2</option>
                                        <option value="3">Option #3</option>
                                    </select>
                                    <label for="material-select">Please Select</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-alt-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Static Labels -->
        </div>
        <div class="col-md-6">
            <!-- Floating Labels -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Floating Labels</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option">
                            <i class="si si-wrench"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <form action="be_forms_elements_material.php" method="post" onsubmit="return false;">
                        <div class="form-group row">
                            <div class="col-md-9">
                                <div class="form-material floating">
                                    <input type="text" class="form-control" id="material-text2" name="material-text2">
                                    <label for="material-text2">Username</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-9">
                                <div class="form-material floating">
                                    <input type="password" class="form-control" id="material-password2" name="material-password2">
                                    <label for="material-password2">Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material floating">
                                    <input type="email" class="form-control" id="material-email2" name="material-email2">
                                    <label for="material-email2">Email</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-6">
                                <div class="form-material floating">
                                    <input type="text" class="form-control" id="material-gridf2" name="material-gridf2">
                                    <label for="material-gridf2">Grid Input</label>
                                </div>
                            </div>
                            <div class="col-6 row">
                                <div class="form-material floating">
                                    <input type="text" class="form-control" id="material-gridl2" name="material-gridl2">
                                    <label for="material-gridl2">Grid Input</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material floating">
                                    <textarea class="form-control" id="material-textarea-small2" name="material-textarea-small2" rows="3"></textarea>
                                    <label for="material-textarea-small2">Textarea Small</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material floating">
                                    <textarea class="form-control" id="material-textarea-large2" name="material-textarea-large2" rows="8"></textarea>
                                    <label for="material-textarea-large2">Textarea Large</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-9">
                                <!-- For a small sized input you will also have to add .form-material-sm along with .floating class -->
                                <div class="form-material form-material-sm floating">
                                    <input type="text" class="form-control form-control-sm" id="material-input-size-sm2" name="material-input-size-sm2">
                                    <label for="material-input-size-sm2">Small Input Size</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-9">
                                <div class="form-material floating">
                                    <input type="text" class="form-control" id="material-input-size-normal2" name="material-input-size-normal2">
                                    <label for="material-input-size-normal2">Normal Input Size</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-9">
                                <!-- For a large sized input you will also have to add .form-material-lg along with .floating class -->
                                <div class="form-material form-material-lg floating">
                                    <input type="text" class="form-control form-control-lg" id="material-input-size-lg2" name="material-input-size-lg2">
                                    <label for="material-input-size-lg2">Large Input Size</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-9">
                                <div class="form-material form-material-primary floating">
                                    <input type="text" class="form-control" id="material-color-primary2" name="material-color-primary2">
                                    <label for="material-color-primary2">Primary Color (On focus)</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-9">
                                <div class="form-material form-material-success floating">
                                    <input type="text" class="form-control" id="material-color-success2" name="material-color-success2">
                                    <label for="material-color-success2">Success Color (On focus)</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-9">
                                <div class="form-material form-material-info floating">
                                    <input type="text" class="form-control" id="material-color-info2" name="material-color-info2">
                                    <label for="material-color-info2">Info Color (On focus)</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-9">
                                <div class="form-material form-material-warning floating">
                                    <input type="text" class="form-control" id="material-color-warning2" name="material-color-warning2">
                                    <label for="material-color-warning2">Warning Color (On focus)</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-9">
                                <div class="form-material form-material-danger floating">
                                    <input type="text" class="form-control" id="material-color-danger2" name="material-color-danger2">
                                    <label for="material-color-danger2">Danger Color (On focus)</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row is-valid">
                            <div class="col-md-9">
                                <div class="form-material floating">
                                    <input type="text" class="form-control" id="material-valid2" name="material-valid2">
                                    <label for="material-valid2">Valid</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row is-invalid">
                            <div class="col-md-9">
                                <div class="form-material floating">
                                    <input type="text" class="form-control" id="material-invalid2" name="material-invalid2">
                                    <label for="material-invalid2">Invalid</label>
                                </div>
                                <div class="invalid-feedback">Invalid feedback</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-9">
                                <div class="form-material floating">
                                    <input type="text" class="form-control" id="material-help2" name="material-help2">
                                    <label for="material-help2">With Help</label>
                                    <div class="form-text text-muted text-right">This is some help text!</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-9">
                                <div class="form-material floating input-group">
                                    <input type="text" class="form-control" id="material-addon-text2" name="material-addon-text2">
                                    <label for="material-addon-text2">Text Addon</label>
                                    <div class="input-group-append">
                                        <span class="input-group-text">.example.com</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-9">
                                <div class="form-material floating input-group">
                                    <input type="text" class="form-control" id="material-addon-icon2" name="material-addon-icon2">
                                    <label for="material-addon-icon2">Icon Addon</label>
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-fw fa-user"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-9">
                                <div class="form-material floating">
                                    <input type="text" class="form-control" id="material-disabled2" name="material-disabled2" disabled>
                                    <label for="material-disabled2">Disabled</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-9">
                                <div class="form-material floating">
                                    <select class="form-control" id="material-select2" name="material-select2">
                                        <option></option><!-- Empty value for demostrating material select box -->
                                        <option value="1">Option #1</option>
                                        <option value="2">Option #2</option>
                                        <option value="3">Option #3</option>
                                    </select>
                                    <label for="material-select2">Please Select</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-alt-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Floating Labels -->
        </div>
    </div>
    <!-- END Material Design -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>