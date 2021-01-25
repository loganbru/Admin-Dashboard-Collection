<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">

            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-2">
                            <form id="form_validation" class="uk-form-stacked">
                                <div class="uk-form-row">
                                    <label for="fullname">Full Name<span class="req">*</span></label>
                                    <input type="text" name="fullname" required class="md-input" />
                                </div>
                                <div class="uk-form-row">
                                    <label for="email">Email<span class="req">*</span></label>
                                    <input type="email" name="email" data-parsley-trigger="change" required  class="md-input" />
                                </div>
                                <div class="uk-form-row">
                                    <label for="gender" class="uk-form-label">Gender<span class="req">*</span></label>
                                    <p>
                                        <input type="radio" name="val_radio_gender" id="val_radio_male" data-md-icheck required />
                                        <label for="val_radio_male" class="inline-label">Male</label>
                                    </p>
                                    <input type="radio" name="val_radio_gender" id="val_radio_female" data-md-icheck />
                                    <label for="val_radio_female" class="inline-label">Female</label>
                                </div>
                                <div class="uk-form-row">
                                    <label for="hobbies" class="uk-form-label">Hobbies (2 minimum):</label>
                                    <span class="icheck-inline">
                                        <input type="checkbox" name="val_check_hobbies" id="val_check_ski" data-md-icheck data-parsley-mincheck="2" />
                                        <label for="val_check_ski" class="inline-label">Skiing</label>
                                    </span>
                                    <span class="icheck-inline">
                                        <input type="checkbox" name="val_check_hobbies" id="val_check_run" data-md-icheck />
                                        <label for="val_check_run" class="inline-label">Running</label>
                                    </span>
                                    <span class="icheck-inline">
                                        <input type="checkbox" name="val_check_hobbies" id="val_check_eat" data-md-icheck />
                                        <label for="val_check_eat" class="inline-label">Eating</label>
                                    </span>
                                    <span class="icheck-inline">
                                        <input type="checkbox" name="val_check_hobbies" id="val_check_sleep" data-md-icheck />
                                        <label for="val_check_sleep" class="inline-label">Sleeping</label>
                                    </span>
                                    <span class="icheck-inline">
                                        <input type="checkbox" name="val_check_hobbies" id="val_check_read" data-md-icheck />
                                        <label for="val_check_read" class="inline-label">Reading</label>
                                    </span>
                                    <span class="icheck-inline">
                                        <input type="checkbox" name="val_check_hobbies" id="val_check_code" data-md-icheck />
                                        <label for="val_check_code" class="inline-label">Coding</label>
                                    </span>
                                </div>
                                <div class="uk-form-row">
                                    <label for="val_select" class="uk-form-label">Heard us by*</label>
                                    <select id="val_select" required data-md-selectize>
                                        <option value="">Choose..</option>
                                        <option value="press">Press</option>
                                        <option value="net">Internet</option>
                                        <option value="mouth">Word of mouth</option>
                                        <option value="other">Other..</option>
                                    </select>
                                </div>
                                <div class="uk-form-row">
                                    <label for="message">Message (20 chars min, 100 max)</label>
                                    <textarea class="md-input" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-validation-threshold="10" data-parsley-minlength-message = "Come on! You need to enter at least a 20 caracters long comment.."></textarea>
                                </div>
                                <div class="uk-form-row">
                                    <button type="submit" class="md-btn md-btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
