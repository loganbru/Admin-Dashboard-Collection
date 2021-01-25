
@extends('layouts/contentLayoutMaster')

@section('title', 'Number Input')

@section('page-style')
         {{-- Page Css files --}}
         <link rel="stylesheet" href="{{ asset(mix('css/plugins/forms/validation/form-validation.css')) }}">
@endsection
@section('content')
<!-- Simple Validation start -->
<section class="simple-validation">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Simple Form Validation</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p class="mt-1">Add <code>novalidate</code> attribute to form tag and <code>required</code> attribute to input tag.</p>
            <form class="form-horizontal" novalidate>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <div class="controls">
                      <input type="text" name="text" class="form-control" placeholder="First Name" required
                        data-validation-required-message="This First Name field is required">
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <div class="controls">
                      <input type="email" name="email" class="form-control" placeholder="Email" required
                        data-validation-required-message="This Email field is required">
                    </div>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Input Validation end -->

<!-- Multiple Rules Validation start -->
<section class="multiple-validation">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Validating multiple rules</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <form class="form-horizontal" novalidate>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <div class="controls">
                      <input type="text" name="name" class="form-control" placeholder="Your Name" required
                        data-validation-required-message="This name field is required">
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <div class="controls">
                      <input type="email" name="email" class="form-control" placeholder="Your Email" required
                        data-validation-required-message="The email field is required">
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <div class="controls">
                      <input type="password" name="password" class="form-control" placeholder="Your Password" required
                        data-validation-required-message="The password field is required" minlength="6">
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <div class="controls">
                      <input type="password" name="con-password" class="form-control" placeholder="Confirm Password" required data-validation-match-match="password" data-validation-required-message="The Confirm password field is required" minlength="6">
                    </div>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Multiple Rule Validation end -->

<!-- Input Validation start -->
<section class="input-validation">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Inputs Validation</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <form class="form-horizontal" novalidate>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>This field is required</label>
                    <div class="controls">
                      <input type="text" name="text" class="form-control"
                        data-validation-required-message="This field is required" placeholder="First Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Must only consist of numbers</label>
                    <div class="controls">
                      <input type="text" name="numeric" class="form-control" required
                        data-validation-containsnumber-regex="(\d)+"
                        data-validation-containsnumber-message="The numeric field may only contain numeric characters." placeholder="Enter Numbers only">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Only alphabetic characters</label>
                    <div class="controls">
                      <input type="text" name="alpha" class="form-control" required
                        data-validation-containsnumber-regex="^[a-zA-Z]+$"
                        data-validation-containsnumber-message="The alpha field may only contain alphabetic characters." placeholder="Enter Character only">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Password Input Field</label>
                    <div class="controls">
                      <input type="password" name="password" class="form-control"
                        data-validation-required-message="This field is required" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Repeat password must match</label>
                    <div class="controls">
                      <input type="password" name="password2"
                        data-validation-match-match="password" class="form-control" data-validation-required-message="Repeat password must match" placeholder="Repeat Password">
                    </div>
                  </div>
                  <div class="form-group">
                      <label>Must be a valid email</label>
                      <div class="controls">
                        <input type="email" name="email" class="form-control"
                          data-validation-required-message="Must be a valid email" placeholder="Email">
                      </div>
                    </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Enter Number between 10 & 20</label>
                    <div class="controls">
                      <input type="text" class="form-control"  data-validation-regex-regex="([^a-z]*[A-Z]*)*" data-validation-containsnumber-regex="([^0-9]*[0-9]+)+" data-validation-containsnumber-message="Enter Number between 10 & 20" min="10" max="20" required placeholder="Enter Number between 10 & 20">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Must match the specified regular expression : ^([0-9]+)$ - numbers only</label>
                    <div class="controls">
                      <input type="text" name="text" class="form-control"
                        data-validation-containsnumber-regex="^([0-9]+)$" data-validation-containsnumber-message="The regex field format is invalid." placeholder="Enter specified regular expression" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Length should not be less than the specified length : 3</label>
                    <div class="controls">
                      <input type="text" name="minChar" class="form-control"
                        data-validation-required-message="The min field must be at least 3 characters."
                        minlength="3" placeholder="Enter minimum 3 characters">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>The digits field must be numeric and exactly contain 3 digits</label>
                    <div class="controls">
                      <input type="text" name="digit" class="form-control"
                      data-validation-regex-regex="([^a-z]*[A-Z]*)*" data-validation-containsnumber-regex="([^0-9]*[0-9]+)+"
                        data-validation-required-message="The digits field must be numeric and exactly contain 3 digits"
                        maxlength="3" minlength="3" placeholder="Enter Exactly 3 digits">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Only alphabetic characters, numbers, dashes or underscores</label>
                    <div class="controls">
                      <input type="text" name="reg-exp" class="form-control"
                        data-validation-regex-regex="^[-a-zA-Z_\d]+$"
                        data-validation-regex-message="Must Enter Character, Number, Dash or Uderscore"
                        placeholder="Enter Character, Numbers, Dash, Uderscore" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Must be a valid url</label>
                    <div class="controls">
                      <input type="text" name="url" class="form-control"
                        data-validation-regex-regex="^(http(s)?:\/\/)?(www\.)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$"
                        data-validation-regex-message="Must be a valid url"
                        placeholder="Enter valid url" required>
                    </div>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Input Validation end -->
@endsection

@section('vendor-script')
        <!-- vendor files -->
        <script src="{{ asset(mix('vendors/js/forms/validation/jqBootstrapValidation.js')) }}"></script>
@endsection
@section('page-script')
        <!-- Page js files -->
        <script src="{{ asset(mix('js/scripts/forms/validation/form-validation.js')) }}"></script>
@endsection
