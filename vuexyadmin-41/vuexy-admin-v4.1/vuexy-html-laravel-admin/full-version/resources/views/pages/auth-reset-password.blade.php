@extends('layouts/fullLayoutMaster')

@section('title', 'Reset Password')

@section('page-style')
        {{-- Page Css files --}}
        <link rel="stylesheet" href="{{ asset(mix('css/pages/authentication.css')) }}">
@endsection
@section('content')
<section class="row flexbox-container">
  <div class="col-xl-7 col-10 d-flex justify-content-center">
      <div class="card bg-authentication rounded-0 mb-0 w-100">
          <div class="row m-0">
              <div class="col-lg-6 d-lg-block d-none text-center align-self-center p-0">
                  <img src="{{ asset('images/pages/reset-password.png') }}" alt="branding logo">
              </div>
              <div class="col-lg-6 col-12 p-0">
                  <div class="card rounded-0 mb-0 px-2">
                      <div class="card-header pb-1">
                          <div class="card-title">
                              <h4 class="mb-0">Reset Password</h4>
                          </div>
                      </div>
                      <p class="px-2">Please enter your new password.</p>
                      <div class="card-content">
                          <div class="card-body pt-1">
                              <form action="dashboard-analytics">
                                  <fieldset class="form-label-group">
                                      <input type="text" class="form-control" id="user-email" placeholder="Email" required>
                                      <label for="user-email">Email</label>
                                  </fieldset>

                                  <fieldset class="form-label-group">
                                      <input type="password" class="form-control" id="user-password" placeholder="Password" required>
                                      <label for="user-password">Password</label>
                                  </fieldset>

                                   <fieldset class="form-label-group">
                                      <input type="password" class="form-control" id="user-confirm-password" placeholder="Confirm Password" required>
                                      <label for="user-confirm-password">Confirm Password</label>
                                  </fieldset>
                                  <div class="row pt-2">
                                      <div class="col-12 col-md-6 mb-1">
                                          <a href="auth-login" class="btn btn-outline-primary btn-block px-0">Go Back to Login</a>
                                      </div>
                                      <div class="col-12 col-md-6 mb-1">
                                          <button type="submit" class="btn btn-primary btn-block px-0">Reset</button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
@endsection
