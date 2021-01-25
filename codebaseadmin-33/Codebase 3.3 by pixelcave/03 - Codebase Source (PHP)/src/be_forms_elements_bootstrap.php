<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <!-- Bootstrap Design -->
    <h2 class="content-heading">Bootstrap Design</h2>
    <div class="row">
        <div class="col-md-6">
            <!-- Default Elements -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Default Elements</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option">
                            <i class="si si-wrench"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <form action="be_forms_elements_bootstrap.php" method="post" enctype="multipart/form-data" onsubmit="return false;">
                        <div class="form-group row">
                            <label class="col-12">Static</label>
                            <div class="col-md-9">
                                <div class="form-control-plaintext">Username</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-text-input">Text</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="example-text-input" name="example-text-input" placeholder="Text..">
                                <div class="form-text text-muted">Further info about this input</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-email-input">Email</label>
                            <div class="col-md-9">
                                <input type="email" class="form-control" id="example-email-input" name="example-email-input" placeholder="Email..">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-password-input">Password</label>
                            <div class="col-md-9">
                                <input type="password" class="form-control" id="example-password-input" name="example-password-input" placeholder="Password..">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-text-input-valid">Valid State</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control is-valid" id="example-text-input-valid" name="example-text-input-valid" placeholder="Valid State..">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-text-input-invalid">Invalid State</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control is-invalid" id="example-text-input-invalid" name="example-text-input-invalid" placeholder="Invalid State..">
                                <div class="invalid-feedback">Invalid feedback</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-disabled-input">Disabled</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="example-disabled-input" name="example-disabled-input" placeholder="Disabled.." disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-textarea-input">Textarea</label>
                            <div class="col-12">
                                <textarea class="form-control" id="example-textarea-input" name="example-textarea-input" rows="6" placeholder="Content.."></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-select">Select</label>
                            <div class="col-md-9">
                                <select class="form-control" id="example-select" name="example-select">
                                    <option value="0">Please select</option>
                                    <option value="1">Option #1</option>
                                    <option value="2">Option #2</option>
                                    <option value="3">Option #3</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-multiple-select">Multiple Select</label>
                            <div class="col-md-9">
                                <select class="form-control" id="example-multiple-select" name="example-multiple-select" size="7" multiple>
                                    <option value="1">Option #1</option>
                                    <option value="2">Option #2</option>
                                    <option value="3">Option #3</option>
                                    <option value="4">Option #4</option>
                                    <option value="5">Option #5</option>
                                    <option value="6">Option #6</option>
                                    <option value="7">Option #7</option>
                                    <option value="8">Option #8</option>
                                    <option value="9">Option #9</option>
                                    <option value="10">Option #10</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12">Radios</label>
                            <div class="col-12">
                                <div class="custom-control custom-radio mb-5">
                                    <input class="custom-control-input" type="radio" name="example-radios" id="example-radio1" value="option1" checked>
                                    <label class="custom-control-label" for="example-radio1">Option 1</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input class="custom-control-input" type="radio" name="example-radios" id="example-radio2" value="option2">
                                    <label class="custom-control-label" for="example-radio2">Option 2</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input class="custom-control-input" type="radio" name="example-radios" id="example-radio3" value="option3">
                                    <label class="custom-control-label" for="example-radio3">Option 3</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12">Inline Radios</label>
                            <div class="col-12">
                                <div class="custom-control custom-radio custom-control-inline mb-5">
                                    <input class="custom-control-input" type="radio" name="example-inline-radios" id="example-inline-radio1" value="option1" checked>
                                    <label class="custom-control-label" for="example-inline-radio1">Option 1</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline mb-5">
                                    <input class="custom-control-input" type="radio" name="example-inline-radios" id="example-inline-radio2" value="option2">
                                    <label class="custom-control-label" for="example-inline-radio2">Option 2</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline mb-5">
                                    <input class="custom-control-input" type="radio" name="example-inline-radios" id="example-inline-radio3" value="option3">
                                    <label class="custom-control-label" for="example-inline-radio3">Option 3</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12">Checkboxes</label>
                            <div class="col-12">
                                <div class="custom-control custom-checkbox mb-5">
                                    <input class="custom-control-input" type="checkbox" name="example-checkbox1" id="example-checkbox1" value="option1" checked>
                                    <label class="custom-control-label" for="example-checkbox1">Option 1</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-5">
                                    <input class="custom-control-input" type="checkbox" name="example-checkbox2" id="example-checkbox2" value="option2">
                                    <label class="custom-control-label" for="example-checkbox2">Option 2</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-5">
                                    <input class="custom-control-input" type="checkbox" name="example-checkbox3" id="example-checkbox3" value="option3">
                                    <label class="custom-control-label" for="example-checkbox3">Option 3</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12">Inline Checkboxes</label>
                            <div class="col-12">
                                <div class="custom-control custom-checkbox custom-control-inline mb-5">
                                    <input class="custom-control-input" type="checkbox" name="example-inline-checkbox1" id="example-inline-checkbox1" value="option1" checked>
                                    <label class="custom-control-label" for="example-inline-checkbox1">Option 1</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline mb-5">
                                    <input class="custom-control-input" type="checkbox" name="example-inline-checkbox2" id="example-inline-checkbox2" value="option2">
                                    <label class="custom-control-label" for="example-inline-checkbox2">Option 2</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline mb-5">
                                    <input class="custom-control-input" type="checkbox" name="example-inline-checkbox3" id="example-inline-checkbox3" value="option3">
                                    <label class="custom-control-label" for="example-inline-checkbox3">Option 3</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-file-input">File Input</label>
                            <div class="col-12">
                                <input type="file" id="example-file-input" name="example-file-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-file-multiple-input">File Input (Multiple)</label>
                            <div class="col-12">
                                <input type="file" id="example-file-multiple-input" name="example-file-multiple-input" multiple>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12">Bootstrap's Custom File Input</label>
                            <div class="col-8">
                                <div class="custom-file">
                                    <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                    <input type="file" class="custom-file-input" id="example-file-input-custom" name="example-file-input-custom" data-toggle="custom-file-input">
                                    <label class="custom-file-label" for="example-file-input-custom">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12">Bootstrap's Custom File Input (Multiple)</label>
                            <div class="col-8">
                                <div class="custom-file">
                                    <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                    <!-- When multiple files are selected, we use the word 'Files'. You can easily change it to your own language by adding the following to the input, eg for DE: data-lang-files="Dateien" -->
                                    <input type="file" class="custom-file-input" id="example-file-multiple-input-custom" name="example-file-multiple-input-custom" data-toggle="custom-file-input" multiple>
                                    <label class="custom-file-label" for="example-file-multiple-input-custom">Choose files</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-alt-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Default Elements -->
        </div>
        <div class="col-md-6">
            <!-- Normal Form -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Normal Form</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option">
                            <i class="si si-wrench"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <form action="be_forms_elements_bootstrap.php" method="post" onsubmit="return false;">
                        <div class="form-group">
                            <label for="example-nf-email">Email</label>
                            <input type="email" class="form-control" id="example-nf-email" name="example-nf-email" placeholder="Enter Email..">
                        </div>
                        <div class="form-group">
                            <label for="example-nf-password">Password</label>
                            <input type="password" class="form-control" id="example-nf-password" name="example-nf-password" placeholder="Enter Password..">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-alt-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Normal Form -->

            <!-- Inline Form -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Inline Form</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option">
                            <i class="si si-wrench"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <form class="form-inline" action="be_forms_elements_bootstrap.php" method="post" onsubmit="return false;">
                        <label class="sr-only" for="example-if-email">Email</label>
                        <input type="email" class="form-control mb-2 mr-sm-2 mb-sm-0" id="example-if-email" name="example-if-email" placeholder="Enter Email..">
                        <label class="sr-only" for="example-if-password">Password</label>
                        <input type="password" class="form-control mb-2 mr-sm-2 mb-sm-0" id="example-if-password" name="example-if-password" placeholder="Enter Password..">
                        <button type="submit" class="btn btn-alt-primary">Login</button>
                    </form>
                </div>
            </div>
            <!-- END Inline Form -->

            <!-- Horizontal Form -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Horizontal Form</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option">
                            <i class="si si-wrench"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <form action="be_forms_elements_bootstrap.php" method="post" onsubmit="return false;">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label" for="example-hf-email">Email</label>
                            <div class="col-lg-7">
                                <input type="email" class="form-control" id="example-hf-email" name="example-hf-email" placeholder="Enter Email..">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label" for="example-hf-password">Password</label>
                            <div class="col-lg-7">
                                <input type="password" class="form-control" id="example-hf-password" name="example-hf-password" placeholder="Enter Password..">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-9 ml-auto">
                                <button type="submit" class="btn btn-alt-primary">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Horizontal Form -->

            <!-- Input Sizes -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Input Sizes</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option">
                            <i class="si si-wrench"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <form action="be_forms_elements_bootstrap.php" method="post" onsubmit="return false;">
                        <div class="form-group">
                            <label for="example-input-small">Small Input</label>
                            <input type="text" class="form-control form-control-sm" id="example-input-small" name="example-input-small" placeholder=".form-control-sm">
                        </div>
                        <div class="form-group">
                            <label for="example-input-normal">Normal Input</label>
                            <input type="text" class="form-control" id="example-input-normal" name="example-input-normal" placeholder="..">
                        </div>
                        <div class="form-group">
                            <label for="example-input-large">Large Input</label>
                            <input type="text" class="form-control form-control-lg" id="example-input-large" name="example-input-large" placeholder=".form-control-lg">
                        </div>
                        <div class="form-group">
                            <label>Grid Inputs</label>
                            <div class="row">
                                <div class="col-4">
                                    <input type="text" class="form-control" placeholder=".col-4">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-5">
                                    <input type="text" class="form-control" placeholder=".col-5">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" class="form-control" placeholder=".col-6">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-7">
                                    <input type="text" class="form-control" placeholder=".col-7">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-8">
                                    <input type="text" class="form-control" placeholder=".col-8">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-9">
                                    <input type="text" class="form-control" placeholder=".col-9">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-10">
                                    <input type="text" class="form-control" placeholder=".col-10">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-11">
                                    <input type="text" class="form-control" placeholder=".col-11">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-12">
                                    <input type="text" class="form-control" placeholder=".col-12">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12 col-form-label">Multiple Grid Inputs</label>
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder=".col-6">
                            </div>
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder=".col-6">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-4">
                                <input type="text" class="form-control" placeholder=".col-4">
                            </div>
                            <div class="col-4">
                                <input type="text" class="form-control" placeholder=".col-4">
                            </div>
                            <div class="col-4">
                                <input type="text" class="form-control" placeholder=".col-4">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <input type="text" class="form-control" placeholder=".col-3">
                            </div>
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder=".col-6">
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" placeholder=".col-3">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-8">
                                <input type="text" class="form-control" placeholder=".col-8">
                            </div>
                            <div class="col-4">
                                <input type="text" class="form-control" placeholder=".col-4">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-4">
                                <input type="text" class="form-control" placeholder=".col-4">
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control" placeholder=".col-8">
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-alt-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Input Sizes -->
        </div>
    </div>
    <div class="row">
        <div class="col-xl-4">
            <!-- Icon/Text Groups -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Icon/Text Groups</h3>
                </div>
                <div class="block-content">
                    <form action="be_forms_elements_bootstrap.php" method="post" onsubmit="return false;">
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="example-input1-group1" name="example-input1-group1" placeholder="Username">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <div class="input-group">
                                    <input type="email" class="form-control" id="example-input2-group1" name="example-input2-group1" placeholder="Email">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-envelope-o"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-euro"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="example-input3-group1" name="example-input3-group1" placeholder="..">
                                    <div class="input-group-append">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-alt-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Icon/Text Groups -->
        </div>
        <div class="col-xl-4">
            <!-- Button Groups -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Button Groups</h3>
                </div>
                <div class="block-content">
                    <form action="be_forms_elements_bootstrap.php" method="post" onsubmit="return false;">
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <button type="button" class="btn btn-secondary">
                                            <i class="fa fa-search"></i> Search
                                        </button>
                                    </div>
                                    <input type="text" class="form-control" id="example-input1-group2" name="example-input1-group2" placeholder="Username">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <div class="input-group">
                                    <input type="email" class="form-control" id="example-input2-group2" name="example-input2-group2" placeholder="Email">
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-secondary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <button type="button" class="btn btn-secondary">
                                            <i class="fa fa-facebook"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control" id="example-input3-group2" name="example-input3-group2" placeholder="Search">
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-secondary">
                                            <i class="fa fa-twitter"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-alt-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Button Groups -->
        </div>
        <div class="col-xl-4">
            <!-- Dropdown Groups -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Dropdown Groups</h3>
                </div>
                <div class="block-content">
                    <form action="be_forms_elements_bootstrap.php" method="post" onsubmit="return false;">
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <button type="button" class="btn btn-secondary">Options</button>
                                        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="fa fa-fw fa-bell mr-5"></i>News
                                            </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="fa fa-fw fa-envelope-o mr-5"></i>Messages
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="fa fa-fw fa-pencil mr-5"></i>Edit Profile
                                            </a>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" id="example-input1-group3" name="example-input1-group3" placeholder="Username">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <div class="input-group">
                                    <input type="email" class="form-control" id="example-input2-group3" name="example-input2-group3" placeholder="Email">
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="fa fa-fw fa-bell mr-5"></i>News
                                            </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="fa fa-fw fa-envelope-o mr-5"></i>Messages
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <div class="input-group">
                                    <div class="input-group-prepend dropup">
                                        <button type="button" class="btn btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-angle-up"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="fa fa-fw fa-bell mr-5"></i>News
                                            </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="fa fa-fw fa-envelope-o mr-5"></i>Messages
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="fa fa-fw fa-pencil mr-5"></i>Edit Profile
                                            </a>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" id="example-input3-group3" name="example-input3-group3" placeholder="..">
                                    <div class="input-group-append dropup">
                                        <button type="button" class="btn btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-angle-up"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="fa fa-fw fa-bell mr-5"></i>News
                                            </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="fa fa-fw fa-envelope-o mr-5"></i>Messages
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="fa fa-fw fa-pencil mr-5"></i>Edit Profile
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-alt-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Dropdown Groups -->
        </div>
    </div>
    <!-- END Bootstrap Design -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
