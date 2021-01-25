<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <!-- Form Wizards functionality is initialized in js/pages/be_forms_wizard.min.js which was auto compiled from _es6/pages/be_forms_wizard.js -->
    <!-- For more info and examples you can check out https://github.com/VinceG/twitter-bootstrap-wizard -->

    <!-- Simple Wizards -->
    <h2 class="content-heading">Simple Wizards</h2>
    <div class="row">
        <div class="col-md-6">
            <!-- Simple Wizard -->
            <div class="js-wizard-simple block">
                <!-- Step Tabs -->
                <ul class="nav nav-tabs nav-tabs-block nav-fill" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#wizard-simple-step1" data-toggle="tab">1. Personal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#wizard-simple-step2" data-toggle="tab">2. Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#wizard-simple-step3" data-toggle="tab">3. Extra</a>
                    </li>
                </ul>
                <!-- END Step Tabs -->

                <!-- Form -->
                <form action="be_forms_wizard.php" method="post">
                    <!-- Steps Content -->
                    <div class="block-content block-content-full tab-content" style="min-height: 265px;">
                        <!-- Step 1 -->
                        <div class="tab-pane active" id="wizard-simple-step1" role="tabpanel">
                            <div class="form-group">
                                <label for="wizard-simple-firstname">First Name</label>
                                <input class="form-control" type="text" id="wizard-simple-firstname" name="wizard-simple-firstname">
                            </div>
                            <div class="form-group">
                                <label for="wizard-simple-lastname">Last Name</label>
                                <input class="form-control" type="text" id="wizard-simple-lastname" name="wizard-simple-lastname">
                            </div>
                            <div class="form-group">
                                <label for="wizard-simple-email">Email</label>
                                <input class="form-control" type="email" id="wizard-simple-email" name="wizard-simple-email">
                            </div>
                        </div>
                        <!-- END Step 1 -->

                        <!-- Step 2 -->
                        <div class="tab-pane" id="wizard-simple-step2" role="tabpanel">
                            <div class="form-group">
                                <label for="wizard-simple-bio">Bio</label>
                                <textarea class="form-control" id="wizard-simple-bio" name="wizard-simple-bio" rows="9"></textarea>
                            </div>
                        </div>
                        <!-- END Step 2 -->

                        <!-- Step 3 -->
                        <div class="tab-pane" id="wizard-simple-step3" role="tabpanel">
                            <div class="form-group">
                                <label for="wizard-simple-location">Location</label>
                                <input class="form-control" type="text" id="wizard-simple-location" name="wizard-simple-location">
                            </div>
                            <div class="form-group">
                                <label for="wizard-simple-skills">Skills</label>
                                <select class="form-control" id="wizard-simple-skills" name="wizard-simple-skills" size="1">
                                    <option value="">Please select your best skill</option>
                                    <option value="1">Photoshop</option>
                                    <option value="2">HTML</option>
                                    <option value="3">CSS</option>
                                    <option value="4">JavaScript</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="css-control css-control-primary css-switch" for="wizard-simple-terms">
                                    <input type="checkbox" class="css-control-input" id="wizard-simple-terms" name="wizard-simple-terms">
                                    <span class="css-control-indicator"></span> Agree with the terms
                                </label>
                            </div>
                        </div>
                        <!-- END Step 3 -->
                    </div>
                    <!-- END Steps Content -->

                    <!-- Steps Navigation -->
                    <div class="block-content block-content-sm block-content-full bg-body-light">
                        <div class="row">
                            <div class="col-6">
                                <button type="button" class="btn btn-alt-secondary" data-wizard="prev">
                                    <i class="fa fa-angle-left mr-5"></i> Previous
                                </button>
                            </div>
                            <div class="col-6 text-right">
                                <button type="button" class="btn btn-alt-secondary" data-wizard="next">
                                    Next <i class="fa fa-angle-right ml-5"></i>
                                </button>
                                <button type="submit" class="btn btn-alt-primary d-none" data-wizard="finish">
                                    <i class="fa fa-check mr-5"></i> Submit
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- END Steps Navigation -->
                </form>
                <!-- END Form -->
            </div>
            <!-- END Simple Wizard -->
        </div>
        <div class="col-md-6">
            <!-- Simple Wizard 2 -->
            <div class="js-wizard-simple block">
                <!-- Step Tabs -->
                <ul class="nav nav-tabs nav-tabs-alt nav-fill" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#wizard-simple2-step1" data-toggle="tab">1. Personal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#wizard-simple2-step2" data-toggle="tab">2. Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#wizard-simple2-step3" data-toggle="tab">3. Extra</a>
                    </li>
                </ul>
                <!-- END Step Tabs -->

                <!-- Form -->
                <form action="be_forms_wizard.php" method="post">
                    <!-- Steps Content -->
                    <div class="block-content block-content-full tab-content" style="min-height: 267px;">
                        <!-- Step 1 -->
                        <div class="tab-pane active" id="wizard-simple2-step1" role="tabpanel">
                            <div class="form-group">
                                <div class="form-material floating">
                                    <input class="form-control" type="text" id="wizard-simple2-firstname" name="wizard-simple2-firstname">
                                    <label for="wizard-simple2-firstname">First Name</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-material floating">
                                    <input class="form-control" type="text" id="wizard-simple2-lastname" name="wizard-simple2-lastname">
                                    <label for="wizard-simple2-lastname">Last Name</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-material floating">
                                    <input class="form-control" type="email" id="wizard-simple2-email" name="wizard-simple2-email">
                                    <label for="wizard-simple2-email">Email</label>
                                </div>
                            </div>
                        </div>
                        <!-- END Step 1 -->

                        <!-- Step 2 -->
                        <div class="tab-pane" id="wizard-simple2-step2" role="tabpanel">
                            <div class="form-group">
                                <div class="form-material floating">
                                    <textarea class="form-control" id="wizard-simple2-bio" name="wizard-simple2-bio" rows="9"></textarea>
                                    <label for="wizard-simple2-bio">Bio</label>
                                </div>
                            </div>
                        </div>
                        <!-- END Step 2 -->

                        <!-- Step 3 -->
                        <div class="tab-pane" id="wizard-simple2-step3" role="tabpanel">
                            <div class="form-group">
                                <div class="form-material floating">
                                    <input class="form-control" type="text" id="wizard-simple2-location" name="wizard-simple2-location">
                                    <label for="wizard-simple2-location">Location</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-material floating">
                                    <select class="form-control" id="wizard-simple2-skills" name="wizard-simple2-skills" size="1">
                                        <option></option><!-- Empty value for demostrating material select box -->
                                        <option value="1">Photoshop</option>
                                        <option value="2">HTML</option>
                                        <option value="3">CSS</option>
                                        <option value="4">JavaScript</option>
                                    </select>
                                    <label for="wizard-simple2-skills">Skills</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="css-control css-control-primary css-switch" for="wizard-simple2-terms">
                                    <input type="checkbox" class="css-control-input" id="wizard-simple2-terms" name="wizard-simple2-terms">
                                    <span class="css-control-indicator"></span> Agree with the terms
                                </label>
                            </div>
                        </div>
                        <!-- END Step 3 -->
                    </div>
                    <!-- END Steps Content -->

                    <!-- Steps Navigation -->
                    <div class="block-content block-content-sm block-content-full bg-body-light">
                        <div class="row">
                            <div class="col-6">
                                <button type="button" class="btn btn-alt-secondary" data-wizard="prev">
                                    <i class="fa fa-angle-left mr-5"></i> Previous
                                </button>
                            </div>
                            <div class="col-6 text-right">
                                <button type="button" class="btn btn-alt-secondary" data-wizard="next">
                                    Next <i class="fa fa-angle-right ml-5"></i>
                                </button>
                                <button type="submit" class="btn btn-alt-primary d-none" data-wizard="finish">
                                    <i class="fa fa-check mr-5"></i> Submit
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- END Steps Navigation -->
                </form>
                <!-- END Form -->
            </div>
            <!-- END Simple Wizard 2 -->
        </div>
    </div>
    <!-- END Simple Wizards -->

    <!-- Progress Wizards -->
    <h2 class="content-heading">Progress Wizards</h2>
    <div class="row">
        <div class="col-md-6">
            <!-- Progress Wizard -->
            <div class="js-wizard-simple block">
                <!-- Step Tabs -->
                <ul class="nav nav-tabs nav-tabs-block nav-fill" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#wizard-progress-step1" data-toggle="tab">1. Personal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#wizard-progress-step2" data-toggle="tab">2. Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#wizard-progress-step3" data-toggle="tab">3. Extra</a>
                    </li>
                </ul>
                <!-- END Step Tabs -->

                <!-- Form -->
                <form action="be_forms_wizard.php" method="post">
                    <!-- Wizard Progress Bar -->
                    <div class="block-content block-content-sm">
                        <div class="progress" data-wizard="progress" style="height: 8px;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <!-- END Wizard Progress Bar -->

                    <!-- Steps Content -->
                    <div class="block-content block-content-full tab-content" style="min-height: 265px;">
                        <!-- Step 1 -->
                        <div class="tab-pane active" id="wizard-progress-step1" role="tabpanel">
                            <div class="form-group">
                                <label for="wizard-progress-firstname">First Name</label>
                                <input class="form-control" type="text" id="wizard-progress-firstname" name="wizard-progress-firstname">
                            </div>
                            <div class="form-group">
                                <label for="wizard-progress-lastname">Last Name</label>
                                <input class="form-control" type="text" id="wizard-progress-lastname" name="wizard-progress-lastname">
                            </div>
                            <div class="form-group">
                                <label for="wizard-progress-email">Email</label>
                                <input class="form-control" type="email" id="wizard-progress-email" name="wizard-progress-email">
                            </div>
                        </div>
                        <!-- END Step 1 -->

                        <!-- Step 2 -->
                        <div class="tab-pane" id="wizard-progress-step2" role="tabpanel">
                            <div class="form-group">
                                <label for="wizard-progress-bio">Bio</label>
                                <textarea class="form-control" id="wizard-progress-bio" name="wizard-progress-bio" rows="9"></textarea>
                            </div>
                        </div>
                        <!-- END Step 2 -->

                        <!-- Step 3 -->
                        <div class="tab-pane" id="wizard-progress-step3" role="tabpanel">
                            <div class="form-group">
                                <label for="wizard-progress-location">Location</label>
                                <input class="form-control" type="text" id="wizard-progress-location" name="wizard-progress-location">
                            </div>
                            <div class="form-group">
                                <label for="wizard-progress-skills">Skills</label>
                                <select class="form-control" id="wizard-progress-skills" name="wizard-progress-skills" size="1">
                                    <option value="">Please select your best skill</option>
                                    <option value="1">Photoshop</option>
                                    <option value="2">HTML</option>
                                    <option value="3">CSS</option>
                                    <option value="4">JavaScript</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="css-control css-control-primary css-switch" for="wizard-progress-terms">
                                    <input type="checkbox" class="css-control-input" id="wizard-progress-terms" name="wizard-progress-terms">
                                    <span class="css-control-indicator"></span> Agree with the terms
                                </label>
                            </div>
                        </div>
                        <!-- END Step 3 -->
                    </div>
                    <!-- END Steps Content -->

                    <!-- Steps Navigation -->
                    <div class="block-content block-content-sm block-content-full bg-body-light">
                        <div class="row">
                            <div class="col-6">
                                <button type="button" class="btn btn-alt-secondary" data-wizard="prev">
                                    <i class="fa fa-angle-left mr-5"></i> Previous
                                </button>
                            </div>
                            <div class="col-6 text-right">
                                <button type="button" class="btn btn-alt-secondary" data-wizard="next">
                                    Next <i class="fa fa-angle-right ml-5"></i>
                                </button>
                                <button type="submit" class="btn btn-alt-primary d-none" data-wizard="finish">
                                    <i class="fa fa-check mr-5"></i> Submit
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- END Steps Navigation -->
                </form>
                <!-- END Form -->
            </div>
            <!-- END Progress Wizard -->
        </div>
        <div class="col-md-6">
            <!-- Progress Wizard 2 -->
            <div class="js-wizard-simple block">
                <!-- Wizard Progress Bar -->
                <div class="progress rounded-0" data-wizard="progress" style="height: 8px;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <!-- END Wizard Progress Bar -->

                <!-- Step Tabs -->
                <ul class="nav nav-tabs nav-tabs-alt nav-fill" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#wizard-progress2-step1" data-toggle="tab">1. Personal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#wizard-progress2-step2" data-toggle="tab">2. Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#wizard-progress2-step3" data-toggle="tab">3. Extra</a>
                    </li>
                </ul>
                <!-- END Step Tabs -->

                <!-- Form -->
                <form action="be_forms_wizard.php" method="post">
                    <!-- Steps Content -->
                    <div class="block-content block-content-full tab-content" style="min-height: 274px;">
                        <!-- Step 1 -->
                        <div class="tab-pane active" id="wizard-progress2-step1" role="tabpanel">
                            <div class="form-group">
                                <div class="form-material floating">
                                    <input class="form-control" type="text" id="wizard-progress2-firstname" name="wizard-progress2-firstname">
                                    <label for="wizard-progress2-firstname">First Name</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-material floating">
                                    <input class="form-control" type="text" id="wizard-progress2-lastname" name="wizard-progress2-lastname">
                                    <label for="wizard-progress2-lastname">Last Name</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-material floating">
                                    <input class="form-control" type="email" id="wizard-progress2-email" name="wizard-progress2-email">
                                    <label for="wizard-progress2-email">Email</label>
                                </div>
                            </div>
                        </div>
                        <!-- END Step 1 -->

                        <!-- Step 2 -->
                        <div class="tab-pane" id="wizard-progress2-step2" role="tabpanel">
                            <div class="form-group">
                                <div class="form-material floating">
                                    <textarea class="form-control" id="wizard-progress2-bio" name="wizard-progress2-bio" rows="9"></textarea>
                                    <label for="wizard-progress2-bio">Bio</label>
                                </div>
                            </div>
                        </div>
                        <!-- END Step 2 -->

                        <!-- Step 3 -->
                        <div class="tab-pane" id="wizard-progress2-step3" role="tabpanel">
                            <div class="form-group">
                                <div class="form-material floating">
                                    <input class="form-control" type="text" id="wizard-progress2-location" name="wizard-simple2-location">
                                    <label for="wizard-simple2-location">Location</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-material floating">
                                    <select class="form-control" id="wizard-progress2-skills" name="wizard-progress2-skills" size="1">
                                        <option></option><!-- Empty value for demostrating material select box -->
                                        <option value="1">Photoshop</option>
                                        <option value="2">HTML</option>
                                        <option value="3">CSS</option>
                                        <option value="4">JavaScript</option>
                                    </select>
                                    <label for="wizard-progress2-skills">Skills</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="css-control css-control-primary css-switch" for="wizard-progress2-terms">
                                    <input type="checkbox" class="css-control-input" id="wizard-progress2-terms" name="wizard-progress2-terms">
                                    <span class="css-control-indicator"></span> Agree with the terms
                                </label>
                            </div>
                        </div>
                        <!-- END Step 3 -->
                    </div>
                    <!-- END Steps Content -->

                    <!-- Steps Navigation -->
                    <div class="block-content block-content-sm block-content-full bg-body-light">
                        <div class="row">
                            <div class="col-6">
                                <button type="button" class="btn btn-alt-secondary" data-wizard="prev">
                                    <i class="fa fa-angle-left mr-5"></i> Previous
                                </button>
                            </div>
                            <div class="col-6 text-right">
                                <button type="button" class="btn btn-alt-secondary" data-wizard="next">
                                    Next <i class="fa fa-angle-right ml-5"></i>
                                </button>
                                <button type="submit" class="btn btn-alt-primary d-none" data-wizard="finish">
                                    <i class="fa fa-check mr-5"></i> Submit
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- END Steps Navigation -->
                </form>
                <!-- END Form -->
            </div>
            <!-- END Progress Wizard 2 -->
        </div>
    </div>
    <!-- END Progress Wizards -->

    <!-- Validation Wizards -->
    <h2 class="content-heading">Validation Wizards</h2>
    <div class="row">
        <div class="col-md-6">
            <!-- Validation Wizard Classic -->
            <div class="js-wizard-validation-classic block">
                <!-- Step Tabs -->
                <ul class="nav nav-tabs nav-tabs-block nav-fill" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#wizard-validation-classic-step1" data-toggle="tab">1. Personal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#wizard-validation-classic-step2" data-toggle="tab">2. Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#wizard-validation-classic-step3" data-toggle="tab">3. Extra</a>
                    </li>
                </ul>
                <!-- END Step Tabs -->

                <!-- Form -->
                <form class="js-wizard-validation-classic-form" action="be_forms_wizard.php" method="post">
                    <!-- Steps Content -->
                    <div class="block-content block-content-full tab-content" style="min-height: 265px;">
                        <!-- Step 1 -->
                        <div class="tab-pane active" id="wizard-validation-classic-step1" role="tabpanel">
                            <div class="form-group">
                                <label for="wizard-validation-classic-firstname">First Name</label>
                                <input class="form-control" type="text" id="wizard-validation-classic-firstname" name="wizard-validation-classic-firstname">
                            </div>
                            <div class="form-group">
                                <label for="wizard-validation-classic-lastname">Last Name</label>
                                <input class="form-control" type="text" id="wizard-validation-classic-lastname" name="wizard-validation-classic-lastname">
                            </div>
                            <div class="form-group">
                                <label for="wizard-validation-classic-email">Email</label>
                                <input class="form-control" type="email" id="wizard-validation-classic-email" name="wizard-validation-classic-email">
                            </div>
                        </div>
                        <!-- END Step 1 -->

                        <!-- Step 2 -->
                        <div class="tab-pane" id="wizard-validation-classic-step2" role="tabpanel">
                            <div class="form-group">
                                <label for="wizard-validation-classic-bio">Bio</label>
                                <textarea class="form-control" id="wizard-validation-classic-bio" name="wizard-validation-classic-bio" rows="9"></textarea>
                            </div>
                        </div>
                        <!-- END Step 2 -->

                        <!-- Step 3 -->
                        <div class="tab-pane" id="wizard-validation-classic-step3" role="tabpanel">
                            <div class="form-group">
                                <label for="wizard-validation-classic-location">Location</label>
                                <input class="form-control" type="text" id="wizard-validation-classic-location" name="wizard-validation-classic-location">
                            </div>
                            <div class="form-group">
                                <label for="wizard-validation-classic-skills">Skills</label>
                                <select class="form-control" id="wizard-validation-classic-skills" name="wizard-validation-classic-skills" size="1">
                                    <option value="">Please select your best skill</option>
                                    <option value="1">Photoshop</option>
                                    <option value="2">HTML</option>
                                    <option value="3">CSS</option>
                                    <option value="4">JavaScript</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="css-control css-control-primary css-switch" for="wizard-validation-classic-terms">
                                    <input type="checkbox" class="css-control-input" id="wizard-validation-classic-terms" name="wizard-validation-classic-terms">
                                    <span class="css-control-indicator"></span> Agree with the terms
                                </label>
                            </div>
                        </div>
                        <!-- END Step 3 -->
                    </div>
                    <!-- END Steps Content -->

                    <!-- Steps Navigation -->
                    <div class="block-content block-content-sm block-content-full bg-body-light">
                        <div class="row">
                            <div class="col-6">
                                <button type="button" class="btn btn-alt-secondary" data-wizard="prev">
                                    <i class="fa fa-angle-left mr-5"></i> Previous
                                </button>
                            </div>
                            <div class="col-6 text-right">
                                <button type="button" class="btn btn-alt-secondary" data-wizard="next">
                                    Next <i class="fa fa-angle-right ml-5"></i>
                                </button>
                                <button type="submit" class="btn btn-alt-primary d-none" data-wizard="finish">
                                    <i class="fa fa-check mr-5"></i> Submit
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- END Steps Navigation -->
                </form>
                <!-- END Form -->
            </div>
            <!-- END Validation Wizard Classic -->
        </div>
        <div class="col-md-6">
            <!-- Validation Wizard Material -->
            <div class="js-wizard-validation-material block">
                <!-- Step Tabs -->
                <ul class="nav nav-tabs nav-tabs-alt nav-fill" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#wizard-validation-material-step1" data-toggle="tab">1. Personal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#wizard-validation-material-step2" data-toggle="tab">2. Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#wizard-validation-material-step3" data-toggle="tab">3. Extra</a>
                    </li>
                </ul>
                <!-- END Step Tabs -->

                <!-- Form -->
                <form class="js-wizard-validation-material-form" action="be_forms_wizard.php" method="post">
                    <!-- Steps Content -->
                    <div class="block-content block-content-full tab-content" style="min-height: 267px;">
                        <!-- Step 1 -->
                        <div class="tab-pane active" id="wizard-validation-material-step1" role="tabpanel">
                            <div class="form-group">
                                <div class="form-material floating">
                                    <input class="form-control" type="text" id="wizard-validation-material-firstname" name="wizard-validation-material-firstname">
                                    <label for="wizard-validation-material-firstname">First Name</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-material floating">
                                    <input class="form-control" type="text" id="wizard-validation-material-lastname" name="wizard-validation-material-lastname">
                                    <label for="wizard-validation-material-lastname">Last Name</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-material floating">
                                    <input class="form-control" type="email" id="wizard-validation-material-email" name="wizard-validation-material-email">
                                    <label for="wizard-validation-material-email">Email</label>
                                </div>
                            </div>
                        </div>
                        <!-- END Step 1 -->

                        <!-- Step 2 -->
                        <div class="tab-pane" id="wizard-validation-material-step2" role="tabpanel">
                            <div class="form-group">
                                <div class="form-material floating">
                                    <textarea class="form-control" id="wizard-validation-material-bio" name="wizard-validation-material-bio" rows="9"></textarea>
                                    <label for="wizard-validation-material-bio">Bio</label>
                                </div>
                            </div>
                        </div>
                        <!-- END Step 2 -->

                        <!-- Step 3 -->
                        <div class="tab-pane" id="wizard-validation-material-step3" role="tabpanel">
                            <div class="form-group">
                                <div class="form-material floating">
                                    <input class="form-control" type="text" id="wizard-validation-material-location" name="wizard-validation-material-location">
                                    <label for="wizard-validation-material-location">Location</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-material floating">
                                    <select class="form-control" id="wizard-validation-material-skills" name="wizard-validation-material-skills" size="1">
                                        <option></option><!-- Empty value for demostrating material select box -->
                                        <option value="1">Photoshop</option>
                                        <option value="2">HTML</option>
                                        <option value="3">CSS</option>
                                        <option value="4">JavaScript</option>
                                    </select>
                                    <label for="wizard-validation-material-skills">Skills</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="css-control css-control-primary css-switch" for="wizard-validation-material-terms">
                                    <input type="checkbox" class="css-control-input" id="wizard-validation-material-terms" name="wizard-validation-material-terms">
                                    <span class="css-control-indicator"></span> Agree with the terms
                                </label>
                            </div>
                        </div>
                        <!-- END Step 3 -->
                    </div>
                    <!-- END Steps Content -->

                    <!-- Steps Navigation -->
                    <div class="block-content block-content-sm block-content-full bg-body-light">
                        <div class="row">
                            <div class="col-6">
                                <button type="button" class="btn btn-alt-secondary" data-wizard="prev">
                                    <i class="fa fa-angle-left mr-5"></i> Previous
                                </button>
                            </div>
                            <div class="col-6 text-right">
                                <button type="button" class="btn btn-alt-secondary" data-wizard="next">
                                    Next <i class="fa fa-angle-right ml-5"></i>
                                </button>
                                <button type="submit" class="btn btn-alt-primary d-none" data-wizard="finish">
                                    <i class="fa fa-check mr-5"></i> Submit
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- END Steps Navigation -->
                </form>
                <!-- END Form -->
            </div>
            <!-- END Validation Wizard 2 -->
        </div>
    </div>
    <!-- END Validation Wizards -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.js'); ?>
<?php $cb->get_js('js/plugins/jquery-validation/jquery.validate.min.js'); ?>
<?php $cb->get_js('js/plugins/jquery-validation/additional-methods.js'); ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/be_forms_wizard.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>