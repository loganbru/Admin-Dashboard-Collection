<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <!-- Lock Forms -->
    <h2 class="content-heading">Lock Forms</h2>
    <div class="row">
        <div class="col-md-4">
            <!-- Bootstrap Lock -->
            <div class="block block-themed">
                <div class="block-header bg-pulse">
                    <h3 class="block-title">Bootstrap</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                    </div>
                </div>
                <div class="block-content block-content-full text-center bg-pulse-lighter">
                    <?php $cb->get_avatar(1, '', 96, 'img-thumb'); ?>
                </div>
                <div class="block-content">
                    <form action="be_forms_premade.php" method="post" onsubmit="return false;">
                        <div class="form-group row">
                            <label class="col-12" for="lock1-password">Password</label>
                            <div class="col-12">
                                <input type="password" class="form-control" id="lock1-password" name="lock1-password" placeholder="Enter your password..">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-alt-danger">
                                    <i class="fa fa-unlock mr-5"></i> Unlock
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Bootstrap Lock -->
        </div>
        <div class="col-md-4">
            <!-- Material Lock -->
            <div class="block block-themed">
                <div class="block-header bg-pulse">
                    <h3 class="block-title">Material</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                    </div>
                </div>
                <div class="block-content block-content-full text-center bg-pulse-lighter">
                    <?php $cb->get_avatar(15, '', 96, 'img-thumb'); ?>
                </div>
                <div class="block-content">
                    <form action="be_forms_premade.php" method="post" onsubmit="return false;">
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material">
                                    <input type="password" class="form-control" id="lock2-password" name="lock2-password" placeholder="Enter your password..">
                                    <label for="lock2-password">Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-alt-danger">
                                    <i class="fa fa-unlock mr-5"></i> Unlock
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Material Lock -->
        </div>
        <div class="col-md-4">
            <!-- Material (floating) Lock -->
            <div class="block block-themed">
                <div class="block-header bg-pulse">
                    <h3 class="block-title">Material</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                    </div>
                </div>
                <div class="block-content block-content-full text-center bg-pulse-lighter">
                    <?php $cb->get_avatar(8, '', 96, 'img-thumb'); ?>
                </div>
                <div class="block-content">
                    <form action="be_forms_premade.php" method="post" onsubmit="return false;">
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material floating">
                                    <input type="password" class="form-control" id="lock3-password" name="lock3-password">
                                    <label for="lock3-password">Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-alt-danger">
                                    <i class="fa fa-unlock mr-5"></i> Unlock
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Material (floating) Lock -->
        </div>
    </div>
    <!-- END Lock Forms -->

    <!-- Login Forms -->
    <h2 class="content-heading">Login Forms</h2>
    <div class="row">
        <div class="col-md-4">
            <!-- Bootstrap Login -->
            <div class="block block-themed">
                <div class="block-header bg-gd-aqua">
                    <h3 class="block-title">Bootstrap</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                    </div>
                </div>
                <div class="block-content">
                    <form action="be_forms_premade.php" method="post" onsubmit="return false;">
                        <div class="form-group row">
                            <label class="col-12" for="login1-username">Username</label>
                            <div class="col-12">
                                <input type="text" class="form-control" id="login1-username" name="login1-username" placeholder="Enter your username..">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="login1-password">Password</label>
                            <div class="col-12">
                                <input type="password" class="form-control" id="login1-password" name="login1-password" placeholder="Enter your password..">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <label class="css-control css-control-sm css-control-primary css-switch">
                                    <input type="checkbox" class="css-control-input" id="login1-remember-me" name="login1-remember-me">
                                    <span class="css-control-indicator"></span> Remember Me?
                                </label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-alt-primary">
                                    <i class="fa fa-arrow-right mr-5"></i> Log in
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Bootstrap Login -->
        </div>
        <div class="col-md-4">
            <!-- Material Login -->
            <div class="block block-themed">
                <div class="block-header bg-gd-dusk">
                    <h3 class="block-title">Material</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                    </div>
                </div>
                <div class="block-content">
                    <form action="be_forms_premade.php" method="post" onsubmit="return false;">
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material">
                                    <input type="text" class="form-control" id="login2-username" name="login2-username" placeholder="Enter your username..">
                                    <label for="login2-username">Username</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material">
                                    <input type="password" class="form-control" id="login2-password" name="login2-password" placeholder="Enter your password..">
                                    <label for="login2-password">Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <label class="css-control css-control-sm css-control-primary css-switch">
                                    <input type="checkbox" class="css-control-input" id="login2-remember-me" name="login2-remember-me">
                                    <span class="css-control-indicator"></span> Remember Me?
                                </label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-alt-primary">
                                    <i class="fa fa-arrow-right mr-5"></i> Log in
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Material Login -->
        </div>
        <div class="col-md-4">
            <!-- Material (floating) Login -->
            <div class="block block-themed">
                <div class="block-header bg-gd-sea">
                    <h3 class="block-title">Material</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                    </div>
                </div>
                <div class="block-content">
                    <form action="be_forms_premade.php" method="post" onsubmit="return false;">
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material floating">
                                    <input type="text" class="form-control" id="login3-username" name="login3-username">
                                    <label for="login3-username">Username</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material floating">
                                    <input type="password" class="form-control" id="login3-password" name="login3-password">
                                    <label for="login3-password">Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <label class="css-control css-control-sm css-control-primary css-switch">
                                    <input type="checkbox" class="css-control-input" id="login3-remember-me" name="login3-remember-me">
                                    <span class="css-control-indicator"></span> Remember Me?
                                </label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-alt-primary">
                                    <i class="fa fa-arrow-right mr-5"></i> Log in
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Material (floating) Login -->
        </div>
    </div>
    <!-- END Login Forms -->

    <!-- Register Forms -->
    <h2 class="content-heading">Register Forms</h2>
    <div class="row">
        <div class="col-md-4">
            <!-- Bootstrap Register -->
            <div class="block block-themed">
                <div class="block-header bg-gd-leaf">
                    <h3 class="block-title">Bootstrap</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                    </div>
                </div>
                <div class="block-content">
                    <form action="be_forms_premade.php" method="post" onsubmit="return false;">
                        <div class="form-group row">
                            <label class="col-12" for="register1-username">Username</label>
                            <div class="col-12">
                                <input type="text" class="form-control" id="register1-username" name="register1-username" placeholder="Enter your username..">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="register1-email">Email</label>
                            <div class="col-12">
                                <input type="email" class="form-control" id="register1-email" name="register1-email" placeholder="Enter your email..">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="register1-password">Password</label>
                            <div class="col-12">
                                <input type="password" class="form-control" id="register1-password" name="register1-password" placeholder="Enter your password..">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="register1-password2">Confirm Password</label>
                            <div class="col-12">
                                <input type="password" class="form-control" id="register1-password2" name="register1-password2" placeholder="Confirm your password..">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <label class="css-control css-control-sm css-control-success css-switch">
                                    <input type="checkbox" class="css-control-input" id="register1-terms" name="register1-terms">
                                    <span class="css-control-indicator"></span> Agree to terms?
                                </label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-alt-success">
                                    <i class="fa fa-plus mr-5"></i> Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Bootstrap Register -->
        </div>
        <div class="col-md-4">
            <!-- Material Register -->
            <div class="block block-themed">
                <div class="block-header bg-gd-emerald">
                    <h3 class="block-title">Material</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                    </div>
                </div>
                <div class="block-content">
                    <form action="be_forms_premade.php" method="post" onsubmit="return false;">
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material">
                                    <input type="text" class="form-control" id="register2-username" name="register2-username" placeholder="Enter your username..">
                                    <label for="register2-username">Username</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material">
                                    <input type="email" class="form-control" id="register2-email" name="register2-email" placeholder="Enter your email..">
                                    <label for="register2-email">Email</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material">
                                    <input type="password" class="form-control" id="register2-password" name="register2-password" placeholder="Enter your password..">
                                    <label for="register2-password">Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material">
                                    <input type="password" class="form-control" id="register2-password2" name="register2-password2" placeholder="Confirm your password..">
                                    <label for="register2-password2">Confirm Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <label class="css-control css-control-sm css-control-success css-switch">
                                    <input type="checkbox" class="css-control-input" id="register2-terms" name="register2-terms">
                                    <span class="css-control-indicator"></span> Agree to terms?
                                </label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-alt-success">
                                    <i class="fa fa-plus mr-5"></i> Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Material Register -->
        </div>
        <div class="col-md-4">
            <!-- Material (floating) Register -->
            <div class="block block-themed">
                <div class="block-header bg-gd-lake">
                    <h3 class="block-title">Material</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                    </div>
                </div>
                <div class="block-content">
                    <form action="be_forms_premade.php" method="post" onsubmit="return false;">
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material floating">
                                    <input type="text" class="form-control" id="register3-username" name="register3-username">
                                    <label for="register3-username">Username</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material floating">
                                    <input type="email" class="form-control" id="register3-email" name="register3-email">
                                    <label for="register3-email">Email</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material floating">
                                    <input type="password" class="form-control" id="register3-password" name="register3-password">
                                    <label for="register3-password">Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material floating">
                                    <input type="password" class="form-control" id="register3-password2" name="register3-password2">
                                    <label for="register3-password2">Confirm Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <label class="css-control css-control-sm css-control-success css-switch">
                                    <input type="checkbox" class="css-control-input" id="register3-terms" name="register3-terms">
                                    <span class="css-control-indicator"></span> Agree to terms?
                                </label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-alt-success">
                                    <i class="fa fa-plus mr-5"></i> Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Material (floating) Register -->
        </div>
    </div>
    <div class="row">
        <div class="col-xl-4">
            <!-- Bootstrap Register -->
            <div class="block block-themed">
                <div class="block-header bg-success">
                    <h3 class="block-title">Bootstrap</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                    </div>
                </div>
                <div class="block-content">
                    <form action="be_forms_premade.php" method="post" onsubmit="return false;">
                        <div class="form-group row">
                            <div class="col-6">
                                <label for="register4-firstname">Firstname</label>
                                <input type="text" class="form-control" id="register4-firstname" name="register4-firstname" placeholder="Enter your firstname..">
                            </div>
                            <div class="col-6">
                                <label for="register4-lastname">Lastname</label>
                                <input type="text" class="form-control" id="register4-lastname" name="register4-lastname" placeholder="Enter your lastname..">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="register4-account">Company</label>
                            <div class="col-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="register4-account" name="register4-account" placeholder="Company's name..">
                                    <div class="input-group-append">
                                        <span class="input-group-text">.example.com</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="register4-email">Email</label>
                            <div class="col-12">
                                <div class="input-group">
                                    <input type="email" class="form-control" id="register4-email" name="register4-email" placeholder="Enter your email..">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-envelope-o"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="register4-password">Password</label>
                            <div class="col-12">
                                <div class="input-group">
                                    <input type="password" class="form-control" id="register4-password" name="register4-password" placeholder="Enter your password..">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-asterisk"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="register4-password2">Confirm Password</label>
                            <div class="col-12">
                                <div class="input-group">
                                    <input type="password" class="form-control" id="register4-password2" name="register4-password2" placeholder="Enter your password..">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-asterisk"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <label class="css-control css-control-success css-checkbox">
                                    <input type="checkbox" class="css-control-input" id="register4-terms" name="register4-terms">
                                    <span class="css-control-indicator"></span> Agree to terms?
                                </label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-alt-success">
                                    <i class="fa fa-plus mr-5"></i> Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Bootstrap Register -->
        </div>
        <div class="col-xl-4">
            <!-- Material Register -->
            <div class="block block-themed">
                <div class="block-header bg-success">
                    <h3 class="block-title">Material</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                    </div>
                </div>
                <div class="block-content">
                    <form action="be_forms_premade.php" method="post" onsubmit="return false;">
                        <div class="form-group row">
                            <div class="col-6">
                                <div class="form-material">
                                    <input type="text" class="form-control" id="register5-firstname" name="register5-firstname" placeholder="Enter your firstname..">
                                    <label for="register5-firstname">Firstname</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-material">
                                    <input type="text" class="form-control" id="register5-lastname" name="register5-lastname" placeholder="Enter your lastname..">
                                    <label for="register5-lastname">Lastname</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material input-group">
                                    <input type="text" class="form-control" id="register5-account" name="register5-account" placeholder="Company's name..">
                                    <label for="register5-account">Company</label>
                                    <div class="input-group-append">
                                        <span class="input-group-text">.example.com</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material input-group">
                                    <input type="email" class="form-control" id="register5-email" name="register5-email" placeholder="Enter your email..">
                                    <label for="register5-email">Email</label>
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-envelope-o"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material input-group">
                                    <input type="password" class="form-control" id="register5-password" name="register5-password" placeholder="Enter your password..">
                                    <label for="register5-password">Password</label>
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-asterisk"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material input-group">
                                    <input type="password" class="form-control" id="register5-password2" name="register5-password2" placeholder="Confirm your password..">
                                    <label for="register5-password2">Confirm Password</label>
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-asterisk"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <label class="css-control css-control-success css-checkbox">
                                    <input type="checkbox" class="css-control-input" id="register5-terms" name="register5-terms">
                                    <span class="css-control-indicator"></span> Agree to terms?
                                </label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-alt-success">
                                    <i class="fa fa-plus mr-5"></i> Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Material Register -->
        </div>
        <div class="col-xl-4">
            <!-- Material (floating) Register -->
            <div class="block block-themed">
                <div class="block-header bg-success">
                    <h3 class="block-title">Material</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                    </div>
                </div>
                <div class="block-content">
                    <form action="be_forms_premade.php" method="post" onsubmit="return false;">
                        <div class="form-group row">
                            <div class="col-6">
                                <div class="form-material floating">
                                    <input type="text" class="form-control" id="register6-firstname" name="register6-firstname">
                                    <label for="register6-firstname">Firstname</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-material floating">
                                    <input type="text" class="form-control" id="register6-lastname" name="register6-lastname">
                                    <label for="register6-lastname">Lastname</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material input-group floating">
                                    <input type="text" class="form-control" id="register6-account" name="register6-account">
                                    <label for="register6-account">Company</label>
                                    <div class="input-group-append">
                                        <span class="input-group-text">.example.com</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material input-group floating">
                                    <input type="email" class="form-control" id="register6-email" name="register6-email">
                                    <label for="register6-email">Email</label>
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-envelope-o"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material input-group floating">
                                    <input type="password" class="form-control" id="register6-password" name="register6-password">
                                    <label for="register6-password">Password</label>
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-asterisk"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material input-group floating">
                                    <input type="password" class="form-control" id="register6-password2" name="register6-password2">
                                    <label for="register6-password2">Confirm Password</label>
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-asterisk"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <label class="css-control css-control-success css-checkbox">
                                    <input type="checkbox" class="css-control-input" id="register6-terms" name="register6-terms">
                                    <span class="css-control-indicator"></span> Agree to terms?
                                </label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-alt-success">
                                    <i class="fa fa-plus mr-5"></i> Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Material (floating) Register -->
        </div>
    </div>
    <!-- END Register Forms -->

    <!-- Contact Forms -->
    <h2 class="content-heading">Contact Forms</h2>
    <div class="row">
        <div class="col-xl-4">
            <!-- Bootstrap Contact -->
            <div class="block block-themed">
                <div class="block-header bg-info">
                    <h3 class="block-title">Bootstrap</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                    </div>
                </div>
                <div class="block-content">
                    <form action="be_forms_premade.php" method="post" onsubmit="return false;">
                        <div class="form-group row">
                            <div class="col-6">
                                <label for="contact1-firstname">Firstname</label>
                                <input type="text" class="form-control" id="contact1-firstname" name="contact1-firstname" placeholder="Enter your firstname..">
                            </div>
                            <div class="col-6">
                                <label for="contact1-lastname">Lastname</label>
                                <input type="text" class="form-control" id="contact1-lastname" name="contact1-lastname" placeholder="Enter your lastname..">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="contact1-email">Email</label>
                            <div class="col-12">
                                <div class="input-group">
                                    <input type="email" class="form-control" id="contact1-email" name="contact1-email" placeholder="Enter your email..">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-envelope-o"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="contact1-subject">Where?</label>
                            <div class="col-12">
                                <select class="form-control" id="contact1-subject" name="contact1-subject" size="1">
                                    <option value="1">Support</option>
                                    <option value="2">Billing</option>
                                    <option value="3">Management</option>
                                    <option value="4">Feature Request</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="contact1-msg">Message</label>
                            <div class="col-12">
                                <textarea class="form-control" id="contact1-msg" name="contact1-msg" rows="7" placeholder="Enter your message.."></textarea>
                                <div class="form-text text-muted">Feel free to use common tags: &lt;blockquote&gt;, &lt;strong&gt;, &lt;em&gt;</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-alt-info">
                                    <i class="fa fa-send mr-5"></i> Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Bootstrap Contact -->
        </div>
        <div class="col-xl-4">
            <!-- Material Contact -->
            <div class="block block-themed">
                <div class="block-header bg-info">
                    <h3 class="block-title">Material</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                    </div>
                </div>
                <div class="block-content">
                    <form action="be_forms_premade.php" method="post" onsubmit="return false;">
                        <div class="form-group row">
                            <div class="col-6">
                                <div class="form-material">
                                    <input type="text" class="form-control" id="contact2-firstname" name="contact2-firstname" placeholder="Enter your firstname..">
                                    <label for="contact2-firstname">Firstname</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-material">
                                    <input type="text" class="form-control" id="contact2-lastname" name="contact2-lastname" placeholder="Enter your lastname..">
                                    <label for="contact2-lastname">Lastname</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material input-group">
                                    <input type="email" class="form-control" id="contact2-email" name="contact2-email" placeholder="Enter your email..">
                                    <label for="contact2-email">Email</label>
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-envelope-o"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material">
                                    <select class="form-control" id="contact2-subject" name="contact2-subject" size="1">
                                        <option value="1">Support</option>
                                        <option value="2">Billing</option>
                                        <option value="3">Management</option>
                                        <option value="4">Feature Request</option>
                                    </select>
                                    <label for="contact2-subject">Where?</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material">
                                    <textarea class="form-control" id="contact2-msg" name="contact2-msg" rows="7" placeholder="Enter your message.."></textarea>
                                    <label for="contact2-msg">Message</label>
                                </div>
                                <div class="form-text text-muted text-right">Feel free to use common tags: &lt;blockquote&gt;, &lt;strong&gt;, &lt;em&gt;</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-alt-info">
                                    <i class="fa fa-send mr-5"></i> Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Material Contact -->
        </div>
        <div class="col-xl-4">
            <!-- Material (floating) Contact -->
            <div class="block block-themed">
                <div class="block-header bg-info">
                    <h3 class="block-title">Material</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                    </div>
                </div>
                <div class="block-content">
                    <form action="be_forms_premade.php" method="post" onsubmit="return false;">
                        <div class="form-group row">
                            <div class="col-6">
                                <div class="form-material floating">
                                    <input type="text" class="form-control" id="contact3-firstname" name="contact3-firstname">
                                    <label for="contact3-firstname">Firstname</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-material floating">
                                    <input type="text" class="form-control" id="contact3-lastname" name="contact3-lastname">
                                    <label for="contact3-lastname">Lastname</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material floating input-group">
                                    <input type="email" class="form-control" id="contact3-email" name="contact3-email">
                                    <label for="contact3-email">Email</label>
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-envelope-o"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material floating">
                                    <select class="form-control" id="contact3-subject" name="contact3-subject" size="1">
                                        <option value="1">Support</option>
                                        <option value="2">Billing</option>
                                        <option value="3">Management</option>
                                        <option value="4">Feature Request</option>
                                    </select>
                                    <label for="contact3-subject">Where?</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material floating">
                                    <textarea class="form-control" id="contact3-msg" name="contact3-msg" rows="7"></textarea>
                                    <label for="contact3-msg">Message</label>
                                </div>
                                <div class="form-text text-muted text-right">Feel free to use common tags: &lt;blockquote&gt;, &lt;strong&gt;, &lt;em&gt;</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-alt-info">
                                    <i class="fa fa-send mr-5"></i> Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Material (floating) Contact -->
        </div>
    </div>
    <!-- END Contact Forms -->

    <!-- Mega Form -->
    <h2 class="content-heading">Mega Form</h2>
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Multiple Columns</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                    <i class="si si-refresh"></i>
                </button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
            </div>
        </div>
        <div class="block-content">
            <form action="be_forms_premade.php" method="post" onsubmit="return false;">
                <div class="row">
                    <div class="col-md-7">
                        <div class="form-group row">
                            <div class="col-6">
                                <label for="mega-firstname">Firstname</label>
                                <input type="text" class="form-control form-control-lg" id="mega-firstname" name="mega-firstname" placeholder="Enter your firstname..">
                            </div>
                            <div class="col-6">
                                <label for="mega-lastname">Lastname</label>
                                <input type="text" class="form-control form-control-lg" id="mega-lastname" name="mega-lastname" placeholder="Enter your lastname..">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group row">
                            <div class="col-12">
                                <label for="mega-lastname">Username</label>
                                <input type="text" class="form-control form-control-lg" id="mega-username" name="mega-username" placeholder="Enter your username..">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <div class="form-group row">
                            <div class="col-12">
                                <label for="mega-bio">Bio</label>
                                <textarea class="form-control form-control-lg" id="mega-bio" name="mega-bio" rows="22" placeholder="Enter a few details about yourself.."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group row">
                            <div class="col-12">
                                <label for="mega-city">Where do you live?</label>
                                <input type="text" class="form-control form-control-lg" id="mega-city" name="mega-city" placeholder="Enter your location..">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <label for="mega-skills">Skills</label>
                                <select class="form-control" id="mega-skills" name="mega-skills" size="7" multiple>
                                    <option value="1">HTML</option>
                                    <option value="2">CSS</option>
                                    <option value="3">JavaScript</option>
                                    <option value="4">PHP</option>
                                    <option value="5">Ruby</option>
                                    <option value="6">Photoshop</option>
                                    <option value="7">Illustrator</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-6">
                                <label for="mega-age">Age</label>
                                <input type="text" class="form-control form-control-lg" id="mega-age" name="mega-age" placeholder="Enter your age..">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12">Gender</label>
                            <div class="col-12">
                                <label class="css-control css-control-primary css-radio mr-10">
                                    <input type="radio" class="css-control-input" name="mega-gender-group">
                                    <span class="css-control-indicator"></span> Female
                                </label>
                                <label class="css-control css-control-primary css-radio">
                                    <input type="radio" class="css-control-input" name="mega-gender-group">
                                    <span class="css-control-indicator"></span> Male
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-alt-primary">
                            <i class="fa fa-check mr-5"></i> Complete Profile
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- END Mega Form -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>