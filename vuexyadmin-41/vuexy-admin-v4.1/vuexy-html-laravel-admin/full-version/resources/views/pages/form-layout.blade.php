
@extends('layouts/contentLayoutMaster')

@section('title', 'Form Layouts')

@section('content')
<!-- Basic Horizontal form layout section start -->
<section id="basic-horizontal-layouts">
  <div class="row match-height">
      <div class="col-md-6 col-12">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">Horizontal Form</h4>
              </div>
              <div class="card-content">
                  <div class="card-body">
                      <form class="form form-horizontal">
                          <div class="form-body">
                              <div class="row">
                                  <div class="col-12">
                                      <div class="form-group row">
                                          <div class="col-md-4">
                      <span>First Name</span>
                    </div>
                                          <div class="col-md-8">
                                              <input type="text" id="first-name" class="form-control" name="fname" placeholder="First Name">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-group row">
                                          <div class="col-md-4">
                      <span>Email</span>
                    </div>
                                          <div class="col-md-8">
                                              <input type="email" id="email-id" class="form-control" name="email-id" placeholder="Email">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-group row">
                                          <div class="col-md-4">
                      <span>Mobile</span>
                    </div>
                                          <div class="col-md-8">
                                              <input type="number" id="contact-info" class="form-control" name="contact" placeholder="Mobile">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-group row">
                                          <div class="col-md-4">
                      <span>Password</span>
                    </div>
                                          <div class="col-md-8">
                                              <input type="password" id="password" class="form-control" name="password" placeholder="Password">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group col-md-8 offset-md-4">
                  <fieldset class="checkbox">
                    <div class="vs-checkbox-con vs-checkbox-primary">
                      <input type="checkbox">
                      <span class="vs-checkbox">
                        <span class="vs-checkbox--check">
                          <i class="vs-icon feather icon-check"></i>
                        </span>
                      </span>
                      <span class="">Remember me</span>
                    </div>
                  </fieldset>
                </div>
                <div class="col-md-8 offset-md-4">
                                      <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                                      <button type="reset" class="btn btn-outline-warning mr-1 mb-1">Reset</button>
                                  </div>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-md-6 col-12">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">Horizontal Form with Icons</h4>
              </div>
              <div class="card-content">
                  <div class="card-body">
                      <form class="form form-horizontal">
                          <div class="form-body">
                              <div class="row">
                                  <div class="col-12">
                                      <div class="form-group row">
                                          <div class="col-md-4">
                      <span>First Name</span>
                    </div>
                                          <div class="col-md-8">
                                              <div class="position-relative has-icon-left">
                                                  <input type="text" id="fname-icon" class="form-control" name="fname-icon" placeholder="First Name">
                                                  <div class="form-control-position">
                             <i class="feather icon-user"></i>
                        </div>
                      </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-group row">
                                          <div class="col-md-4">
                      <span>Email</span>
                    </div>
                                          <div class="col-md-8">
                                              <div class="position-relative has-icon-left">
                                                  <input type="email" id="email-icon" class="form-control" name="email-id-icon" placeholder="Email">
                                                  <div class="form-control-position">
                            <i class="feather icon-mail"></i>
                        </div>
                      </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-group row">
                                          <div class="col-md-4">
                      <span>Mobile</span>
                    </div>
                                          <div class="col-md-8">
                                              <div class="position-relative has-icon-left">
                                                  <input type="number" id="contact-icon" class="form-control" name="contact-icon" placeholder="Mobile">
                                                  <div class="form-control-position">
                            <i class="feather icon-smartphone"></i>
                        </div>
                      </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-group row">
                                          <div class="col-md-4">
                      <span>Password</span>
                    </div>
                                          <div class="col-md-8">
                                              <div class="position-relative has-icon-left">
                                                  <input type="password" id="pass-icon" class="form-control" name="contact-icon" placeholder="Password">
                                                  <div class="form-control-position">
                          <i class="feather icon-lock"></i>
                        </div>
                      </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group col-md-8 offset-md-4">
                  <fieldset class="checkbox">
                    <div class="vs-checkbox-con vs-checkbox-primary">
                      <input type="checkbox">
                      <span class="vs-checkbox">
                        <span class="vs-checkbox--check">
                          <i class="vs-icon feather icon-check"></i>
                        </span>
                      </span>
                      <span class="">Remember me</span>
                    </div>
                  </fieldset>
                </div>
                <div class="col-md-8 offset-md-4">
                                      <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                                      <button type="reset" class="btn btn-outline-warning mr-1 mb-1">Reset</button>
                                  </div>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- // Basic Horizontal form layout section end -->

<!-- Basic Vertical form layout section start -->
<section id="basic-vertical-layouts">
  <div class="row match-height">
      <div class="col-md-6 col-12">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">Vertical Form</h4>
              </div>
              <div class="card-content">
                  <div class="card-body">
                      <form class="form form-vertical">
                          <div class="form-body">
                              <div class="row">
                                  <div class="col-12">
                                      <div class="form-group">
                                          <label for="first-name-vertical">First Name</label>
                                          <input type="text" id="first-name-vertical" class="form-control" name="fname" placeholder="First Name">
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-group">
                                          <label for="email-id-vertical">Email</label>
                                          <input type="email" id="email-id-vertical" class="form-control" name="email-id" placeholder="Email">
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-group">
                                          <label for="contact-info-vertical">Mobile</label>
                                          <input type="number" id="contact-info-vertical" class="form-control" name="contact" placeholder="Mobile">
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-group">
                                          <label for="password-vertical">Password</label>
                                          <input type="password" id="password-vertical" class="form-control" name="contact" placeholder="Password">
                                      </div>
                                  </div>
                                  <div class="form-group col-12">
                  <fieldset class="checkbox">
                    <div class="vs-checkbox-con vs-checkbox-primary">
                      <input type="checkbox">
                      <span class="vs-checkbox">
                        <span class="vs-checkbox--check">
                          <i class="vs-icon feather icon-check"></i>
                        </span>
                      </span>
                      <span class="">Remember me</span>
                    </div>
                  </fieldset>
                </div>
                <div class="col-12">
                                      <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                                      <button type="reset" class="btn btn-outline-warning mr-1 mb-1">Reset</button>
                                  </div>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-md-6 col-12">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">Vertical Form with Icons</h4>
              </div>
              <div class="card-content">
                  <div class="card-body">
                      <form class="form form-vertical">
                          <div class="form-body">
                              <div class="row">
                                  <div class="col-12">
                                      <div class="form-group">
                                          <label for="first-name-icon">First Name</label>
                                          <div class="position-relative has-icon-left">
                                              <input type="text" id="first-name-icon" class="form-control" name="fname-icon" placeholder="First Name">
                                              <div class="form-control-position">
                        <i class="feather icon-user"></i>
                      </div>
                    </div>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-group">
                                          <label for="email-id-icon">Email</label>
                                          <div class="position-relative has-icon-left">
                                              <input type="email" id="email-id-icon" class="form-control" name="email-id-icon" placeholder="Email">
                                              <div class="form-control-position">
                        <i class="feather icon-mail"></i>
                      </div>
                    </div>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-group">
                                          <label for="contact-info-icon">Mobile</label>
                                          <div class="position-relative has-icon-left">
                                              <input type="number" id="contact-info-icon" class="form-control" name="contact-icon" placeholder="Mobile">
                                              <div class="form-control-position">
                          <i class="feather icon-smartphone"></i>
                      </div>
                    </div>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-group">
                                          <label for="password-icon">Password</label>
                                          <div class="position-relative has-icon-left">
                                              <input type="password" id="password-icon" class="form-control" name="contact-icon" placeholder="Password">
                                              <div class="form-control-position">
                        <i class="feather icon-lock"></i>
                      </div>
                    </div>
                                      </div>
                                  </div>
                                  <div class="form-group col-12">
                  <fieldset class="checkbox">
                    <div class="vs-checkbox-con vs-checkbox-primary">
                      <input type="checkbox">
                      <span class="vs-checkbox">
                        <span class="vs-checkbox--check">
                          <i class="vs-icon feather icon-check"></i>
                        </span>
                      </span>
                      <span class="">Remember me</span>
                    </div>
                  </fieldset>
                </div>
                <div class="col-12">
                                      <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                                      <button type="reset" class="btn btn-outline-warning mr-1 mb-1">Reset</button>
                                  </div>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- // Basic Vertical form layout section end -->

<!-- // Basic Floating Label Form section start -->
<section id="floating-label-layouts">
  <div class="row match-height">
      <div class="col-md-6 col-12">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">Form With Label Placeholder</h4>
              </div>
              <div class="card-content">
                  <div class="card-body">
                      <form class="form">
                          <div class="form-body">
                              <div class="row">
                                  <div class="col-12">
                                      <div class="form-label-group">
                                          <input type="text" id="first-name-floating" class="form-control" placeholder="First Name" name="fname-floating">
                                          <label for="first-name-floating">First Name</label>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-label-group">
                                          <input type="email" id="email-id-floating" class="form-control" name="email-id-floating" placeholder="Email">
                                          <label for="email-id-floating">Email</label>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-label-group">
                                          <input type="number" id="contact-info-floating" class="form-control" name="contact-floating" placeholder="Mobile">
                                          <label for="contact-info-floating">Mobile</label>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-label-group">
                                          <input type="password" id="password-floating" class="form-control" name="contact-floating" placeholder="Password">
                                          <label for="password-floating">Password</label>
                                      </div>
                                  </div>
                                  <div class="form-group col-12">
                  <fieldset class="checkbox">
                    <div class="vs-checkbox-con vs-checkbox-primary">
                      <input type="checkbox">
                      <span class="vs-checkbox">
                        <span class="vs-checkbox--check">
                          <i class="vs-icon feather icon-check"></i>
                        </span>
                      </span>
                      <span class="">Remember me</span>
                    </div>
                  </fieldset>
                </div>
                <div class="col-12">
                                      <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                                      <button type="reset" class="btn btn-outline-warning mr-1 mb-1">Reset</button>
                                  </div>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-md-6 col-12">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">Form With Label Placeholder with Icons</h4>
              </div>
              <div class="card-content">
                  <div class="card-body">
                      <form class="form">
                          <div class="form-body">
                              <div class="row">
                                  <div class="col-12">
                                      <div class="form-label-group position-relative has-icon-left">
                                          <input type="text" id="first-name-floating-icon" class="form-control" name="fname-floating-icon" placeholder="First Name">
                                          <div class="form-control-position">
                        <i class="feather icon-user"></i>
                    </div>
                                          <label for="first-name-floating-icon">First Name</label>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-label-group position-relative has-icon-left">
                                          <input type="email" id="email-id-floating-icon" class="form-control" name="email-id-floating-icon" placeholder="Email">
                                          <div class="form-control-position">
                        <i class="feather icon-mail"></i>
                    </div>
                                          <label for="email-id-floating-icon">Email</label>

                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-label-group position-relative has-icon-left">
                                          <input type="number" id="contact-floating-icon" class="form-control" name="contact-floating-icon" placeholder="Mobile">
                                          <div class="form-control-position">
                        <i class="feather icon-smartphone"></i>
                    </div>
                                          <label for="contact-floating-icon">Mobile</label>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="form-label-group position-relative has-icon-left">
                                          <input type="password" id="password-floating-icon" class="form-control" name="password-floating-icon" placeholder="Password">
                                          <div class="form-control-position">
                        <i class="feather icon-lock"></i>
                    </div>
                                          <label for="password-floating-icon">Password</label>
                                      </div>
                                  </div>
                                  <div class="form-group col-12">
                  <fieldset class="checkbox">
                    <div class="vs-checkbox-con vs-checkbox-primary">
                      <input type="checkbox">
                      <span class="vs-checkbox">
                        <span class="vs-checkbox--check">
                          <i class="vs-icon feather icon-check"></i>
                        </span>
                      </span>
                      <span class="">Remember me</span>
                    </div>
                  </fieldset>
                </div>
                <div class="col-12">
                                      <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                                      <button type="reset" class="btn btn-outline-warning mr-1 mb-1">Reset</button>
                                  </div>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- // Basic Floating Label Form section end -->

<!-- // Basic multiple Column Form section start -->
<section id="multiple-column-form">
  <div class="row match-height">
      <div class="col-12">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">Multiple Column</h4>
              </div>
              <div class="card-content">
                  <div class="card-body">
                      <form class="form">
                          <div class="form-body">
                              <div class="row">
                                  <div class="col-md-6 col-12">
                                      <div class="form-label-group">
                                          <input type="text" id="first-name-column" class="form-control" placeholder="First Name" name="fname-column">
                                          <label for="first-name-column">First Name</label>
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-label-group">
                                          <input type="text" id="last-name-column" class="form-control" placeholder="Last Name" name="lname-column">
                                          <label for="last-name-column">Last Name</label>
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-label-group">
                                          <input type="text" id="city-column" class="form-control" placeholder="City" name="city-column">
                                          <label for="city-column">City</label>
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-label-group">
                                          <input type="text" id="country-floating" class="form-control" name="country-floating" placeholder="Country">
                                          <label for="country-floating">Country</label>
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-label-group">
                                          <input type="text" id="company-column" class="form-control" name="company-column" placeholder="Company">
                                          <label for="company-column">Company</label>
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-label-group">
                                          <input type="email" id="email-id-column" class="form-control" name="email-id-column" placeholder="Email">
                                          <label for="email-id-column">Email</label>
                                      </div>
                                  </div>
                                  <div class="form-group col-12">
                  <fieldset class="checkbox">
                    <div class="vs-checkbox-con vs-checkbox-primary">
                      <input type="checkbox">
                      <span class="vs-checkbox">
                        <span class="vs-checkbox--check">
                          <i class="vs-icon feather icon-check"></i>
                        </span>
                      </span>
                      <span class="">Remember me</span>
                    </div>
                  </fieldset>
                </div>
                <div class="col-12">
                                      <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                                      <button type="reset" class="btn btn-outline-warning mr-1 mb-1">Reset</button>
                                  </div>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- // Basic Floating Label Form section end -->
@endsection
