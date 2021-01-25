@extends('layouts/contentLayoutMaster')

@section('title', 'Account Settings')

@section('vendor-style')
        <!-- vendor css files -->
        <link rel='stylesheet' href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
        <link rel='stylesheet' href="{{ asset(mix('vendors/css/pickers/pickadate/pickadate.css')) }}">
@endsection
@section('page-style')
        <!-- Page css files -->
        <link rel="stylesheet" href="{{ asset(mix('css/plugins/extensions/noui-slider.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('css/core/colors/palette-noui.css')) }}">
@endsection

@section('content')
<!-- account setting page start -->
<section id="page-account-settings">
    <div class="row">
      <!-- left menu section -->
      <div class="col-md-3 mb-2 mb-md-0">
        <ul class="nav nav-pills flex-column mt-md-0 mt-1">
          <li class="nav-item">
            <a class="nav-link d-flex py-75 active" id="account-pill-general" data-toggle="pill"
              href="#account-vertical-general" aria-expanded="true">
              <i class="feather icon-globe mr-50 font-medium-3"></i>
              General
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex py-75" id="account-pill-password" data-toggle="pill"
              href="#account-vertical-password" aria-expanded="false">
              <i class="feather icon-lock mr-50 font-medium-3"></i>
              Change Password
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex py-75" id="account-pill-info" data-toggle="pill" href="#account-vertical-info"
              aria-expanded="false">
              <i class="feather icon-info mr-50 font-medium-3"></i>
              Info
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex py-75" id="account-pill-social" data-toggle="pill" href="#account-vertical-social"
              aria-expanded="false">
              <i class="feather icon-camera mr-50 font-medium-3"></i>
              Social links
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex py-75" id="account-pill-connections" data-toggle="pill"
              href="#account-vertical-connections" aria-expanded="false">
              <i class="feather icon-feather mr-50 font-medium-3"></i>
              Connections
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex py-75" id="account-pill-notifications" data-toggle="pill"
              href="#account-vertical-notifications" aria-expanded="false">
              <i class="feather icon-message-circle mr-50 font-medium-3"></i>
              Notifications
            </a>
          </li>
        </ul>
      </div>
      <!-- right content section -->
      <div class="col-md-9">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="account-vertical-general"
                  aria-labelledby="account-pill-general" aria-expanded="true">
                  <div class="media">
                    <a href="javascript: void(0);">
                      <img src="{{ asset('images/portrait/small/avatar-s-12.jpg') }}" class="rounded mr-75"
                        alt="profile image" height="64" width="64">
                    </a>
                    <div class="media-body mt-75">
                      <div class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                        <label class="btn btn-sm btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer"
                          for="account-upload">Upload new photo</label>
                        <input type="file" id="account-upload" hidden>
                        <button class="btn btn-sm btn-outline-warning ml-50">Reset</button>
                      </div>
                      <p class="text-muted ml-75 mt-50"><small>Allowed JPG, GIF or PNG. Max
                          size of
                          800kB</small></p>
                    </div>
                  </div>
                  <hr>
                  <form novalidate>
                    <div class="row">
                      <div class="col-12">
                        <div class="form-group">
                          <div class="controls">
                            <label for="account-username">Username</label>
                            <input type="text" class="form-control" id="account-username" placeholder="Username"
                              value="hermione007" required
                              data-validation-required-message="This username field is required">
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <div class="controls">
                            <label for="account-name">Name</label>
                            <input type="text" class="form-control" id="account-name" placeholder="Name"
                              value="Hermione Granger" required
                              data-validation-required-message="This name field is required">
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <div class="controls">
                            <label for="account-e-mail">E-mail</label>
                            <input type="email" class="form-control" id="account-e-mail" placeholder="Email"
                              value="granger007@hogward.com" required
                              data-validation-required-message="This email field is required">
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="alert alert-warning alert-dismissible mb-2" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                          <p class="mb-0">
                            Your email is not confirmed. Please check your inbox.
                          </p>
                          <a href="javascript: void(0);">Resend confirmation</a>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label for="account-company">Company</label>
                          <input type="text" class="form-control" id="account-company" placeholder="Company name">
                        </div>
                      </div>
                      <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                        <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                          changes</button>
                        <button type="reset" class="btn btn-outline-warning">Cancel</button>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="tab-pane fade " id="account-vertical-password" role="tabpanel"
                  aria-labelledby="account-pill-password" aria-expanded="false">
                  <form novalidate>
                    <div class="row">
                      <div class="col-12">
                        <div class="form-group">
                          <div class="controls">
                            <label for="account-old-password">Old Password</label>
                            <input type="password" class="form-control" id="account-old-password" required
                              placeholder="Old Password"
                              data-validation-required-message="This old password field is required">
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <div class="controls">
                            <label for="account-new-password">New Password</label>
                            <input type="password" name="password" id="account-new-password" class="form-control"
                              placeholder="New Password" required
                              data-validation-required-message="The password field is required" minlength="6">
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <div class="controls">
                            <label for="account-retype-new-password">Retype New
                              Password</label>
                            <input type="password" name="con-password" class="form-control" required
                              id="account-retype-new-password" data-validation-match-match="password"
                              placeholder="New Password"
                              data-validation-required-message="The Confirm password field is required" minlength="6">
                          </div>
                        </div>
                      </div>
                      <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                        <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                          changes</button>
                        <button type="reset" class="btn btn-outline-warning">Cancel</button>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="tab-pane fade" id="account-vertical-info" role="tabpanel" aria-labelledby="account-pill-info"
                  aria-expanded="false">
                  <form novalidate>
                    <div class="row">
                      <div class="col-12">
                        <div class="form-group">
                          <label for="accountTextarea">Bio</label>
                          <textarea class="form-control" id="accountTextarea" rows="3"
                            placeholder="Your Bio data here..."></textarea>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <div class="controls">
                            <label for="account-birth-date">Birth date</label>
                            <input type="text" class="form-control birthdate-picker" required placeholder="Birth date"
                              id="account-birth-date" data-validation-required-message="This birthdate field is required">
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label for="accountSelect">Country</label>
                          <select class="form-control" id="accountSelect">
                            <option>USA</option>
                            <option>India</option>
                            <option>Canada</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label for="languageselect2">Languages</label>
                          <select class="form-control" id="languageselect2" multiple="multiple">
                            <option value="English" selected>English</option>
                            <option value="Spanish">Spanish</option>
                            <option value="French">French</option>
                            <option value="Russian">Russian</option>
                            <option value="German">German</option>
                            <option value="Arabic" selected>Arabic</option>
                            <option value="Sanskrit">Sanskrit</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <div class="controls">
                            <label for="account-phone">Phone</label>
                            <input type="text" class="form-control" id="account-phone" required placeholder="Phone number"
                              value="(+656) 254 2568"
                              data-validation-required-message="This phone number field is required">
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label for="account-website">Website</label>
                          <input type="text" class="form-control" id="account-website" placeholder="Website address">
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label for="musicselect2">Favourite Music</label>
                          <select class="form-control" id="musicselect2" multiple="multiple">
                            <option value="Rock">Rock</option>
                            <option value="Jazz" selected>Jazz</option>
                            <option value="Disco">Disco</option>
                            <option value="Pop">Pop</option>
                            <option value="Techno">Techno</option>
                            <option value="Folk" selected>Folk</option>
                            <option value="Hip hop">Hip hop</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label for="moviesselect2">Favourite movies</label>
                          <select class="form-control" id="moviesselect2" multiple="multiple">
                            <option value="The Dark Knight" selected>The Dark Knight
                            </option>
                            <option value="Harry Potter" selected>Harry Potter</option>
                            <option value="Airplane!">Airplane!</option>
                            <option value="Perl Harbour">Perl Harbour</option>
                            <option value="Spider Man">Spider Man</option>
                            <option value="Iron Man" selected>Iron Man</option>
                            <option value="Avatar">Avatar</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                        <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                          changes</button>
                        <button type="reset" class="btn btn-outline-warning">Cancel</button>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="tab-pane fade " id="account-vertical-social" role="tabpanel"
                  aria-labelledby="account-pill-social" aria-expanded="false">
                  <form>
                    <div class="row">
                      <div class="col-12">
                        <div class="form-group">
                          <label for="account-twitter">Twitter</label>
                          <input type="text" id="account-twitter" class="form-control" placeholder="Add link"
                            value="https://www.twitter.com">
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label for="account-facebook">Facebook</label>
                          <input type="text" id="account-facebook" class="form-control" placeholder="Add link">
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label for="account-google">Google+</label>
                          <input type="text" id="account-google" class="form-control" placeholder="Add link">
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label for="account-linkedin">LinkedIn</label>
                          <input type="text" id="account-linkedin" class="form-control" placeholder="Add link"
                            value="https://www.linkedin.com">
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label for="account-instagram">Instagram</label>
                          <input type="text" id="account-instagram" class="form-control" placeholder="Add link">
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label for="account-quora">Quora</label>
                          <input type="text" id="account-quora" class="form-control" placeholder="Add link">
                        </div>
                      </div>
                      <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                        <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                          changes</button>
                        <button type="reset" class="btn btn-outline-warning">Cancel</button>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="tab-pane fade" id="account-vertical-connections" role="tabpanel"
                  aria-labelledby="account-pill-connections" aria-expanded="false">
                  <div class="row">
                    <div class="col-12 mb-3">
                      <a href="javascript: void(0);" class="btn btn-info">Connect to
                        <strong>Twitter</strong></a>
                    </div>
                    <div class="col-12 mb-3">
                      <button class=" btn btn-sm btn-secondary float-right">edit</button>
                      <h6>You are connected to facebook.</h6>
                      <span>Johndoe@gmail.com</span>
                    </div>
                    <div class="col-12 mb-3">
                      <a href="javascript: void(0);" class="btn btn-danger">Connect to
                        <strong>Google</strong>
                      </a>
                    </div>
                    <div class="col-12 mb-2">
                      <button class=" btn btn-sm btn-secondary float-right">edit</button>
                      <h6>You are connected to Instagram.</h6>
                      <span>Johndoe@gmail.com</span>
                    </div>
                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                      <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                        changes</button>
                      <button type="reset" class="btn btn-outline-warning">Cancel</button>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="account-vertical-notifications" role="tabpanel"
                  aria-labelledby="account-pill-notifications" aria-expanded="false">
                  <div class="row">
                    <h6 class="m-1">Activity</h6>
                    <div class="col-12 mb-1">
                      <div class="custom-control custom-switch custom-control-inline">
                        <input type="checkbox" class="custom-control-input" checked id="accountSwitch1">
                        <label class="custom-control-label mr-1" for="accountSwitch1"></label>
                        <span class="switch-label w-100">Email me when someone comments
                          onmy
                          article</span>
                      </div>
                    </div>
                    <div class="col-12 mb-1">
                      <div class="custom-control custom-switch custom-control-inline">
                        <input type="checkbox" class="custom-control-input" checked id="accountSwitch2">
                        <label class="custom-control-label mr-1" for="accountSwitch2"></label>
                        <span class="switch-label w-100">Email me when someone answers on
                          my
                          form</span>
                      </div>
                    </div>
                    <div class="col-12 mb-1">
                      <div class="custom-control custom-switch custom-control-inline">
                        <input type="checkbox" class="custom-control-input" id="accountSwitch3">
                        <label class="custom-control-label mr-1" for="accountSwitch3"></label>
                        <span class="switch-label w-100">Email me hen someone follows
                          me</span>
                      </div>
                    </div>
                    <h6 class="m-1">Application</h6>
                    <div class="col-12 mb-1">
                      <div class="custom-control custom-switch custom-control-inline">
                        <input type="checkbox" class="custom-control-input" checked id="accountSwitch4">
                        <label class="custom-control-label mr-1" for="accountSwitch4"></label>
                        <span class="switch-label w-100">News and announcements</span>
                      </div>
                    </div>
                    <div class="col-12 mb-1">
                      <div class="custom-control custom-switch custom-control-inline">
                        <input type="checkbox" class="custom-control-input" id="accountSwitch5">
                        <label class="custom-control-label mr-1" for="accountSwitch5"></label>
                        <span class="switch-label w-100">Weekly product updates</span>
                      </div>
                    </div>
                    <div class="col-12 mb-1">
                      <div class="custom-control custom-switch custom-control-inline">
                        <input type="checkbox" class="custom-control-input" checked id="accountSwitch6">
                        <label class="custom-control-label mr-1" for="accountSwitch6"></label>
                        <span class="switch-label w-100">Weekly blog digest</span>
                      </div>
                    </div>
                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                      <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                        changes</button>
                      <button type="reset" class="btn btn-outline-warning">Cancel</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
<!-- account setting page end -->
@endsection

@section('vendor-script')
        <!-- vendor files -->
        <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/forms/validation/jqBootstrapValidation.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.date.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/extensions/dropzone.min.js')) }}"></script>
@endsection
@section('page-script')
        <!-- Page js files -->
        <script src="{{ asset(mix('js/scripts/pages/account-setting.js')) }}"></script>
@endsection