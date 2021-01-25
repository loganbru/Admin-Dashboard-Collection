@extends('layouts/contentLayoutMaster')

@section('title', 'View User Page')

@section('page-style')
        {{-- Page Css files --}}
        <link rel="stylesheet" href="{{ asset(mix('css/pages/app-user.css')) }}">
@endsection

@section('content')
<!-- page users view start -->
<section class="page-users-view">
  <div class="row">
    <!-- account start -->
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="card-title">Account</div>
          <div class="row">
            <div class="col-2 users-view-image">
              <img src="{{ asset('images/portrait/small/avatar-s-12.jpg') }}" class="w-100 rounded mb-2"
                alt="avatar">
              <!-- height="150" width="150" -->
            </div>
            <div class="col-sm-4 col-12">
              <table>
                <tr>
                  <td class="font-weight-bold">Username</td>
                  <td>adoptionism744</td>
                </tr>
                <tr>
                  <td class="font-weight-bold">Name</td>
                  <td>Angelo Sashington</td>
                </tr>
                <tr>
                  <td class="font-weight-bold">Email</td>
                  <td>angelo@sashington.com</td>
                </tr>
              </table>
            </div>
            <div class="col-md-6 col-12 ">
              <table class="ml-0 ml-sm-0 ml-lg-0">
                <tr>
                  <td class="font-weight-bold">Status</td>
                  <td>active</td>
                </tr>
                <tr>
                  <td class="font-weight-bold">Role</td>
                  <td>admin</td>
                </tr>
                <tr>
                  <td class="font-weight-bold">Company</td>
                  <td>WinDon Technologies Pvt Ltd</td>
                </tr>
              </table>
            </div>
            <div class="col-12">
              <a href="app-user-edit" class="btn btn-primary mr-1"><i class="feather icon-edit-1"></i> Edit</a>
              <button class="btn btn-outline-danger"><i class="feather icon-trash-2"></i> Delete</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- account end -->
    <!-- information start -->
    <div class="col-md-6 col-12 ">
      <div class="card">
        <div class="card-body">
          <div class="card-title mb-2">Information</div>
          <table>
            <tr>
              <td class="font-weight-bold">Birth Date </td>
              <td>28 January 1998
              </td>
            </tr>
            <tr>
              <td class="font-weight-bold">Mobile</td>
              <td>+65958951757</td>
            </tr>
            <tr>
              <td class="font-weight-bold">Website</td>
              <td>https://rowboat.com/insititious/Angelo
              </td>
            </tr>
            <tr>
              <td class="font-weight-bold">Languages</td>
              <td>English, Arabic
              </td>
            </tr>
            <tr>
              <td class="font-weight-bold">Gender</td>
              <td>female</td>
            </tr>
            <tr>
              <td class="font-weight-bold">Contact</td>
              <td>email, message, phone
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <!-- information start -->
    <!-- social links end -->
    <div class="col-md-6 col-12 ">
      <div class="card">
        <div class="card-body">
          <div class="card-title mb-2">Social Links</div>
          <table>
            <tr>
              <td class="font-weight-bold">Twitter</td>
              <td>https://twitter.com/adoptionism744
              </td>
            </tr>
            <tr>
              <td class="font-weight-bold">Facebook</td>
              <td>https://www.facebook.com/adoptionism664
              </td>
            </tr>
            <tr>
              <td class="font-weight-bold">Instagram</td>
              <td>https://www.instagram.com/adopt-ionism744/
              </td>
            </tr>
            <tr>
              <td class="font-weight-bold">Github</td>
              <td>https://github.com/madop818
              </td>
            </tr>
            <tr>
              <td class="font-weight-bold">CodePen</td>
              <td>https://codepen.io/adoptism243
              </td>
            </tr>
            <tr>
              <td class="font-weight-bold">Slack</td>
              <td>@adoptionism744
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <!-- social links end -->
    <!-- permissions start -->
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <h6 class="border-bottom py-1 mx-1 mb-0 font-medium-2"><i class="feather icon-lock mr-50 "></i>Permission
            </h6>
            <table class="table table-borderless">
              <thead>
                <tr>
                  <th>Module</th>
                  <th>Read</th>
                  <th>Write</th>
                  <th>Create</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Users</td>
                  <td>
                    <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox1"
                        class="custom-control-input" checked>
                      <label class="custom-control-label" for="users-checkbox1"></label>
                    </div>
                  </td>
                  <td>
                    <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox2"
                        class="custom-control-input"><label class="custom-control-label" for="users-checkbox2"></label>
                    </div>
                  </td>
                  <td>
                    <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox3"
                        class="custom-control-input"><label class="custom-control-label" for="users-checkbox3"></label>
                    </div>
                  </td>
                  <td>
                    <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox4"
                        class="custom-control-input" checked>
                      <label class="custom-control-label" for="users-checkbox4"></label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Articles</td>
                  <td>
                    <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox5"
                        class="custom-control-input"><label class="custom-control-label" for="users-checkbox5"></label>
                    </div>
                  </td>
                  <td>
                    <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox6"
                        class="custom-control-input" checked>
                      <label class="custom-control-label" for="users-checkbox6"></label>
                    </div>
                  </td>
                  <td>
                    <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox7"
                        class="custom-control-input"><label class="custom-control-label" for="users-checkbox7"></label>
                    </div>
                  </td>
                  <td>
                    <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox8"
                        class="custom-control-input" checked>
                      <label class="custom-control-label" for="users-checkbox8"></label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Staff</td>
                  <td>
                    <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox9"
                        class="custom-control-input" checked>
                      <label class="custom-control-label" for="users-checkbox9"></label>
                    </div>
                  </td>
                  <td>
                    <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox10"
                        class="custom-control-input" checked>
                      <label class="custom-control-label" for="users-checkbox10"></label>
                    </div>
                  </td>
                  <td>
                    <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox11"
                        class="custom-control-input"><label class="custom-control-label" for="users-checkbox11"></label>
                    </div>
                  </td>
                  <td>
                    <div class="custom-control custom-checkbox"><input type="checkbox" id="users-checkbox12"
                        class="custom-control-input"><label class="custom-control-label" for="users-checkbox12"></label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- permissions end -->
  </div>
</section>
<!-- page users view end -->
@endsection

@section('page-script')
  {{-- Page js files --}}
  <script src="{{ asset(mix('js/scripts/pages/app-user.js')) }}"></script>
@endsection
