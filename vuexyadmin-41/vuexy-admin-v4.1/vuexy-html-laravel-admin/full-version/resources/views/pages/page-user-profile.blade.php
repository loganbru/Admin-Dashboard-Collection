@extends('layouts/contentLayoutMaster')

@section('title', 'Profile')

@section('page-style')
        {{-- Page Css files --}}
        <link rel="stylesheet" href="{{ asset(mix('css/pages/users.css')) }}">
@endsection
@section('content')
<div id="user-profile">
  <div class="row">
      <div class="col-12">
        <div class="profile-header mb-2">
          <div class="relative">
            <div class="cover-container">
              <img class="img-fluid bg-cover rounded-0 w-100" src="{{ asset('images/profile/user-uploads/cover.jpg') }}" alt="User Profile Image">
            </div>
            <div class="profile-img-container d-flex align-items-center justify-content-between">
              <img src="{{ asset('images/profile/user-uploads/user-13.jpg') }}" class="rounded-circle img-border box-shadow-1" alt="Card image">
              <div class="float-right">
                <button type="button" class="btn btn-icon btn-icon rounded-circle btn-primary mr-1">
                  <i class="feather icon-edit-2"></i>
                </button>
                <button type="button" class="btn btn-icon btn-icon rounded-circle btn-primary">
                  <i class="feather icon-settings"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-end align-items-center profile-header-nav">
            <nav class="navbar navbar-expand-sm w-100 pr-0">
              <button class="navbar-toggler pr-0" type="button" data-toggle="collapse" data-target="navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="feather icon-align-justify"></i></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav justify-content-around w-75 ml-sm-auto">
                      <li class="nav-item px-sm-0">
                          <a href="#" class="nav-link font-small-3">Timeline</a>
                      </li>
                      <li class="nav-item px-sm-0">
                          <a href="#" class="nav-link font-small-3">About</a>
                      </li>
                      <li class="nav-item px-sm-0">
                          <a href="#" class="nav-link font-small-3">Photos</a>
                      </li>
                      <li class="nav-item px-sm-0">
                          <a href="#" class="nav-link font-small-3">Friends</a>
                      </li>
                      <li class="nav-item px-sm-0">
                          <a href="#" class="nav-link font-small-3">Videos</a>
                      </li>
                      <li class="nav-item px-sm-0">
                          <a href="#" class="nav-link font-small-3">Events</a>
                      </li>
                  </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
  </div>
  <section id="profile-info">
    <div class="row">
      <div class="col-lg-3 col-12">
        <div class="card">
          <div class="card-header">
            <h4>About</h4>
            <i class="feather icon-more-horizontal cursor-pointer"></i>
          </div>
          <div class="card-body">
            <p>Tart I love sugar plum I love oat cake. Sweet roll caramels I love jujubes. Topping cake wafer.</p>
            <div class="mt-1">
              <h6 class="mb-0">Joined:</h6>
              <p>November 15, 2015</p>
            </div>
            <div class="mt-1">
              <h6 class="mb-0">Lives:</h6>
              <p>New York, USA</p>
            </div>
            <div class="mt-1">
              <h6 class="mb-0">Email:</h6>
              <p>bucketful@fiendhead.org</p>
            </div>
            <div class="mt-1">
              <h6 class="mb-0">Website:</h6>
              <p>www.pixinvent.com</p>
            </div>
            <div class="mt-1">
              <button type="button" class="btn btn-sm btn-icon btn-primary mr-25 p-25"><i class="feather icon-facebook"></i></button>
              <button type="button" class="btn btn-sm btn-icon btn-primary mr-25 p-25"><i class="feather icon-twitter"></i></button>
              <button type="button" class="btn btn-sm btn-icon btn-primary p-25"><i class="feather icon-instagram"></i></button>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Suggested Pages</h4>
          </div>
          <div class="card-body suggested-block">
            <div class="d-flex justify-content-start align-items-center mb-1">
              <div class="avatar mr-50">
                <img src="{{ asset('images/profile/pages/page-09.jpg') }}" alt="avtar img holder" height="35" width="35">
              </div>
              <div class="user-page-info">
                <p>Rockose</p>
                <span class="font-small-2">Company</span>
              </div>
              <div class="ml-auto"><i class="feather icon-star"></i></div>
            </div>
            <div class="d-flex justify-content-start align-items-center mb-1">
              <div class="avatar mr-50">
                <img src="{{ asset('images/profile/pages/page-08.jpg') }}" alt="avtar img holder" height="35" width="35">
              </div>
              <div class="user-page-info">
                <p>The Devil's</p>
                <span class="font-small-2">Clothing Store</span>
              </div>
              <div class="ml-auto"><i class="feather icon-star"></i></div>
            </div>
            <div class="d-flex justify-content-start align-items-center mb-1">
              <div class="avatar mr-1">
                <img src="{{ asset('images/profile/pages/page-03.jpg') }}" alt="avtar img holder" height="35" width="35">
              </div>
              <div class="user-page-info">
                <p>The Magician</p>
                <span class="font-small-2">Public Figure</span>
              </div>
              <div class="ml-auto"><i class="feather icon-star"></i></div>
            </div>
            <div class="d-flex justify-content-start align-items-center mb-1">
              <div class="avatar mr-50">
                <img src="{{ asset('images/profile/pages/page-02.jpg') }}" alt="avtar img holder" height="35" width="35">
              </div>
              <div class="user-page-info">
                <p>AC/DC</p>
                <span class="font-small-2">Music</span>
              </div>
              <div class="ml-auto"><i class="feather icon-star"></i></div>
            </div>
            <div class="d-flex justify-content-start align-items-center mb-1">
              <div class="avatar mr-50">
                <img src="{{ asset('images/profile/pages/page-07.jpg') }}" alt="avtar img holder" height="35" width="35">
              </div>
              <div class="user-page-info">
                <p>Eat Hard</p>
                <span class="font-small-2">Restaurant / Bar</span>
              </div>
              <div class="ml-auto"><i class="feather icon-star"></i></div>
            </div>
            <div class="d-flex justify-content-start align-items-center mb-1">
              <div class="avatar mr-50">
                <img src="{{ asset('images/profile/pages/page-04.jpg') }}" alt="avtar img holder" height="35" width="35">
              </div>
              <div class="user-page-info">
                <p>B4B</p>
                <span class="font-small-2">Beauty Store</span>
              </div>
              <div class="ml-auto"><i class="feather icon-star"></i></div>
            </div>
            <div class="d-flex justify-content-start align-items-center mb-1">
              <div class="avatar mr-50">
                <img src="{{ asset('images/profile/pages/page-05.jpg') }}" alt="avtar img holder" height="35" width="35">
              </div>
              <div class="user-page-info">
                <p>Kylie Jenner</p>
                <span class="font-small-2">Public Figure</span>
              </div>
              <div class="ml-auto"><i class="feather icon-star"></i></div>
            </div>
            <div class="d-flex justify-content-start align-items-center mb-1">
              <div class="avatar mr-50">
                <img src="{{ asset('images/profile/pages/page-01.jpg') }}" alt="avtar img holder" height="35" width="35">
              </div>
              <div class="user-page-info">
                <p>RDJ</p>
                <span class="font-small-2">Actor</span>
              </div>
              <div class="ml-auto"><i class="feather icon-star"></i></div>
            </div>
            <div class="d-flex justify-content-start align-items-center mb-1">
              <div class="avatar mr-50">
                <img src="{{ asset('images/profile/pages/page-06.jpg') }}" alt="avtar img holder" height="35" width="35">
              </div>
              <div class="user-page-info">
                <p>Taylor Swift</p>
                <span class="font-small-2">Music</span>
              </div>
              <div class="ml-auto"><i class="feather icon-star"></i></div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h4>Twitter Feeds</h4>
          </div>
          <div class="card-body">
            <div class="twitter-feed">
              <div class="d-flex justify-content-start align-items-center mb-1">
                <div class="avatar mr-50">
                  <img src="{{ asset('images/portrait/small/avatar-s-12.jpg') }}" alt="avtar img holder" height="35" width="35">
                </div>
                <div class="user-page-info">
                  <p class="text-bold-600 mb-0">Tiana Vercetti</p>
                  <small>@tiana59</small>
                  <div class="badge badge-primary badge-pill badge-sm p-0">
                    <i class="feather icon-check font-small-1"></i>
                  </div>
                </div>
              </div>
              <p class="mb-0">I love cookie chupa chups sweet tart apple pie chocolate bar. Jelly-o oat cake chupa chups.</p>
              <p class="text-primary">#js #vuejs</p>
              <small>12 Dec 2018</small>
            </div>
            <div class="twitter-feed mt-2">
              <div class="d-flex justify-content-start align-items-center mb-1">
                <div class="avatar mr-50">
                  <img src="{{ asset('images/portrait/small/avatar-s-12.jpg') }}" alt="avtar img holder" height="35" width="35">
                </div>
                <div class="user-page-info">
                  <p class="text-bold-600 mb-0">Tiana Vercetti</p>
                  <small>@tiana59</small>
                  <div class="badge badge-primary badge-pill badge-sm p-0">
                    <i class="feather icon-check font-small-1"></i>
                  </div>
                </div>
              </div>
              <p class="mb-0">Carrot cake cake gummies I love I love tiramisu. Biscuit marzipan cookie lemon drops.</p>
              <p class="text-primary">#python</p>
              <small>11 Dec 2018</small>
            </div>
            <div class="twitter-feed mt-2">
              <div class="d-flex justify-content-start align-items-center mb-1">
                <div class="avatar mr-50">
                  <img src="{{ asset('images/portrait/small/avatar-s-12.jpg') }}" alt="avtar img holder" height="35" width="35">
                </div>
                <div class="user-page-info">
                  <p class="text-bold-600 mb-0">Tiana Vercetti</p>
                  <small>@tiana59</small>
                  <div class="badge badge-primary badge-pill badge-sm p-0">
                    <i class="feather icon-check font-small-1"></i>
                  </div>
                </div>
              </div>
              <p class="mb-0">I love cookie chupa chups sweet tart apple pie chocolate bar. Jelly-o oat cake chupa chups.</p>
              <small>10 Dec 2018</small>
            </div>
            <div class="twitter-feed mt-2">
              <div class="d-flex justify-content-start align-items-center mb-1">
                <div class="avatar mr-50">
                  <img src="{{ asset('images/portrait/small/avatar-s-12.jpg') }}" alt="avtar img holder" height="35" width="35">
                </div>
                <div class="user-page-info">
                  <p class="text-bold-600 mb-0">Tiana Vercetti</p>
                  <small>@tiana59</small>
                  <div class="badge badge-primary badge-pill badge-sm p-0">
                    <i class="feather icon-check font-small-1"></i>
                  </div>
                </div>
              </div>
              <p class="mb-0">Muffin candy caramels. I love caramels tiramisu jelly. Pie I love wafer. Chocolate cake lollipop tootsie roll cake.</p>
              <p class="text-primary">#django #vuejs</p>
              <small>9 Dec 018</small>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-12">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-start align-items-center mb-1">
              <div class="avatar mr-1">
                <img src="{{ asset('images/profile/user-uploads/user-01.jpg') }}" alt="avtar img holder" height="45" width="45">
              </div>
              <div class="user-page-info">
                <p class="mb-0">Leeanna Alvord</p>
                <span class="font-small-2">12 Dec 2018 at 1:16 AM</span>
              </div>
              <div class="ml-auto user-like text-danger"><i class="fa fa-heart"></i></div>
            </div>
            <p>I love jujubes wafer pie ice cream tiramisu. Chocolate I love pastry pastry sesame snaps wafer. Pastry topping biscuit lollipop topping I love lemon drops sweet roll bonbon. Brownie donut icing.</p>
            <img class="img-fluid card-img-top rounded-sm mb-2" src="{{ asset('images/profile/post-media/2.jpg') }}" alt="avtar img holder">
            <div class="d-flex justify-content-start align-items-center mb-1">
              <div class="d-flex align-items-center">
                <i class="feather icon-heart font-medium-2 mr-50"></i>
                <span>145</span>
              </div>
              <div class="ml-2">
                <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                  <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                  data-original-title="Trina Lynes" class="avatar pull-up">
                    <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-1.jpg') }}" alt="Avatar" height="30" width="30">
                  </li>
                  <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                  data-original-title="Lilian Nenez" class="avatar pull-up">
                    <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-2.jpg') }}" alt="Avatar" height="30" width="30">
                  </li>
                  <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                  data-original-title="Alberto Glotzbach" class="avatar pull-up">
                    <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-3.jpg') }}" alt="Avatar" height="30" width="30">
                  </li>
                  <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                  data-original-title="George Nordic" class="avatar pull-up">
                    <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-5.jpg') }}" alt="Avatar" height="30" width="30">
                  </li>
                  <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                  data-original-title="Vinnie Mostowy" class="avatar pull-up">
                    <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-4.jpg') }}" alt="Avatar" height="30" width="30">
                  </li>
                  <li class="d-inline-block pl-50">
                    <span>+140 more</span>
                  </li>
                </ul>
              </div>
              <p class="ml-auto d-flex align-items-center">
                <i class="feather icon-message-square font-medium-2 mr-50"></i>77
              </p>
            </div>
            <div class="d-flex justify-content-start align-items-center mb-1">
              <div class="avatar mr-50">
                <img src="{{ asset('images/portrait/small/avatar-s-6.jpg') }}" alt="Avatar" height="30" width="30">
              </div>
              <div class="user-page-info">
                <h6 class="mb-0">Kitty Allanson</h6>
                <span class="font-small-2">orthoplumbate morningtide naphthaline exarteritis</span>
              </div>
              <div class="ml-auto cursor-pointer">
                <i class="feather icon-heart mr-50"></i>
                <i class="feather icon-message-square"></i>
              </div>
            </div>
            <div class="d-flex justify-content-start align-items-center mb-2">
              <div class="avatar mr-50">
                <img src="{{ asset('images/portrait/small/avatar-s-8.jpg') }}" alt="Avatar" height="30" width="30">
              </div>
              <div class="user-page-info">
                <h6 class="mb-0">Jeanie Bulgrin</h6>
                <span class="font-small-2">blockiness pandemy metaxylene speckle coppy</span>
              </div>
              <div class="ml-auto cursor-pointer">
                <i class="feather icon-heart mr-50"></i>
                <i class="feather icon-message-square"></i>
              </div>
            </div>
            <fieldset class="form-label-group mb-50">
                <textarea class="form-control" id="label-textarea" rows="3" placeholder="Add Comment"></textarea>
                <label for="label-textarea">Add Comment</label>
            </fieldset>
            <button type="button" class="btn btn-sm btn-primary">Post Comment</button>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-start align-items-center mb-1">
              <div class="avatar mr-1">
                <img src="{{ asset('images/profile/user-uploads/user-01.jpg') }}" alt="avtar img holder" height="45" width="45">
              </div>
              <div class="user-page-info">
                <h6 class="mb-0">Leeanna Alvord</h6>
                <span class="font-small-2">11 Dec 2018 at 1:35 AM</span>
              </div>
              <div class="ml-auto user-like"><i class="feather icon-heart"></i></div>
            </div>
            <p>Candy jelly beans powder brownie biscuit. Jelly marzipan oat cake cake. Cupcake I love wafer cake. Halvah I love powder jelly I love cheesecake cotton candy tiramisu brownie.</p>
            <img class="img-fluid rounded-sm mb-2" src="{{ asset('images/profile/post-media/25.jpg') }}" alt="avtar img holder">
            <div class="d-flex justify-content-start align-items-center mb-1">
              <div class="d-flex align-items-center">
                <i class="feather icon-heart font-medium-2 mr-50"></i>
                <span>276</span>
              </div>
              <div class="ml-2">
                <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                  <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                  data-original-title="Lai Lewandowski" class="avatar pull-up">
                    <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-6.jpg') }}" alt="Avatar" height="30" width="30">
                  </li>
                  <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                  data-original-title="Elicia Rieske" class="avatar pull-up">
                    <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-7.jpg') }}" alt="Avatar" height="30" width="30">
                  </li>
                  <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                  data-original-title="Darcey Nooner" class="avatar pull-up">
                    <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-8.jpg') }}" alt="Avatar" height="30" width="30">
                  </li>
                  <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                  data-original-title="Julee Rossignol" class="avatar pull-up">
                    <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-10.jpg') }}" alt="Avatar" height="30" width="30">
                  </li>
                  <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                  data-original-title="Jeffrey Gerondale" class="avatar pull-up">
                    <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-9.jpg') }}" alt="Avatar" height="30" width="30">
                  </li>
                  <li class="d-inline-block pl-50">
                    <span>+271 more</span>
                  </li>
                </ul>
              </div>
              <p class="ml-auto d-flex align-items-center">
                <i class="feather icon-message-square font-medium-2 mr-50"></i>105
              </p>
            </div>
            <div class="d-flex justify-content-start align-items-center mb-1">
              <div class="avatar mr-50">
                <img src="{{ asset('images/portrait/small/avatar-s-8.jpg') }}" alt="Avatar" height="30" width="30">
              </div>
              <div class="user-page-info">
                <h6 class="mb-0">Darcey Nooner</h6>
                <span class="font-small-2">I love cupcake danish jujubes sweet.</span>
              </div>
              <div class="ml-auto cursor-pointer">
                <i class="feather icon-heart mr-50"></i>
                <i class="feather icon-message-square"></i>
              </div>
            </div>
            <div class="d-flex justify-content-start align-items-center mb-2">
              <div class="avatar mr-50">
                <img src="{{ asset('images/portrait/small/avatar-s-6.jpg') }}" alt="Avatar" height="30" width="30">
              </div>
              <div class="user-page-info">
                <h6 class="mb-0">Lai Lewandowski</h6>
                <span class="font-small-2">Wafer I love brownie jelly bonbon tart apple pie</span>
              </div>
              <div class="ml-auto cursor-pointer">
                <i class="feather icon-heart mr-50"></i>
                <i class="feather icon-message-square"></i>
              </div>
            </div>
            <fieldset class="form-label-group mb-50">
                <textarea class="form-control" id="label-textarea2" rows="3" placeholder="Add Comment"></textarea>
                <label for="label-textarea2">Add Comment</label>
            </fieldset>
            <button type="button" class="btn btn-sm btn-primary">Post Comment</button>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-start align-items-center mb-1">
              <div class="avatar mr-1">
                <img src="{{ asset('images/profile/user-uploads/user-01.jpg') }}" alt="avtar img holder" height="45" width="45">
              </div>
              <div class="user-page-info">
                <h6 class="mb-0">Leeanna Alvord</h6>
                <span class="font-small-2">10 Dec 2018 at 5:35 AM</span>
              </div>
              <div class="ml-auto user-like"><i class="feather icon-heart"></i></div>
            </div>
            <p>Wafer I love brownie jelly bonbon tart. Candy jelly beans powder brownie biscuit. Jelly marzipan oat cake cake.</p>
           <iframe src="https://www.youtube.com/embed/WALZwXyxpHQ" class="w-100 height-250"></iframe>
            <div class="d-flex justify-content-start align-items-center mb-1">
              <div class="d-flex  cursor-pointeralign-items-center">
                <i class="feather icon-heart font-medium-2 mr-50"></i>
                <span>269</span>
              </div>
              <div class="ml-2">
                <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                  <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                  data-original-title="Vinnie Mostowy" class="avatar pull-up">
                    <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-5.jpg') }}" alt="Avatar" height="30" width="30">
                  </li>
                  <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                  data-original-title="Elicia Rieske" class="avatar pull-up">
                    <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-7.jpg') }}" alt="Avatar" height="30" width="30">
                  </li>
                  <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                  data-original-title="Julee Rossignol" class="avatar pull-up">
                    <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-10.jpg') }}" alt="Avatar" height="30" width="30">
                  </li>
                  <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                  data-original-title="Darcey Nooner" class="avatar pull-up">
                    <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-8.jpg') }}" alt="Avatar" height="30" width="30">
                  </li>
                  <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                  data-original-title="Elicia Rieske" class="avatar pull-up">
                    <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-7.jpg') }}" alt="Avatar" height="30" width="30">
                  </li>
                  <li class="d-inline-block pl-50">
                    <span>+264 more</span>
                  </li>
                </ul>
              </div>
              <p class="ml-auto d-flex align-items-center">
                <i class="feather icon-message-square font-medium-2 mr-50"></i>98
              </p>
            </div>
            <div class="d-flex justify-content-start align-items-center mb-1">
              <div class="avatar mr-50">
                <img src="{{ asset('images/portrait/small/avatar-s-8.jpg') }}" alt="Avatar" height="30" width="30">
              </div>
              <div class="user-page-info">
                <h6 class="mb-0">Darcey Nooner</h6>
                <span class="font-small-2">I love cupcake danish jujubes sweet.</span>
              </div>
              <div class="ml-auto cursor-pointer">
                <i class="feather icon-heart mr-50"></i>
                <i class="feather icon-message-square"></i>
              </div>
            </div>
            <div class="d-flex justify-content-start align-items-center mb-2">
              <div class="avatar mr-50">
                <img src="{{ asset('images/portrait/small/avatar-s-6.jpg') }}" alt="Avatar" height="30" width="30">
              </div>
              <div class="user-page-info">
                <h6 class="mb-0">Lai Lewandowski</h6>
                <span class="font-small-2">Wafer I love brownie jelly bonbon tart apple pie</span>
              </div>
              <div class="ml-auto cursor-pointer">
                <i class="feather icon-heart mr-50"></i>
                <i class="feather icon-message-square"></i>
              </div>
            </div>
            <fieldset class="form-label-group mb-50">
                <textarea class="form-control" id="label-textarea3" rows="3" placeholder="Add Comment"></textarea>
                <label for="label-textarea3">Add Comment</label>
            </fieldset>
            <button type="button" class="btn btn-sm btn-primary">Post Comment</button>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-12">
        <div class="card">
          <div class="card-header">
            <h4>Latest Photos</h4>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-4 col-6 user-latest-img">
                <img src="{{ asset('images/profile/user-uploads/user-01.jpg') }}" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
              </div>
              <div class="col-md-4 col-6 user-latest-img">
                <img src="{{ asset('images/profile/user-uploads/user-02.jpg') }}" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
              </div>
              <div class="col-md-4 col-6 user-latest-img">
                <img src="{{ asset('images/profile/user-uploads/user-03.jpg') }}" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
              </div>
              <div class="col-md-4 col-6 user-latest-img">
                <img src="{{ asset('images/profile/user-uploads/user-04.jpg') }}" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
              </div>
              <div class="col-md-4 col-6 user-latest-img">
                <img src="{{ asset('images/profile/user-uploads/user-05.jpg') }}" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
              </div>
              <div class="col-md-4 col-6 user-latest-img">
                <img src="{{ asset('images/profile/user-uploads/user-06.jpg') }}" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
              </div>
              <div class="col-md-4 col-6 user-latest-img">
                <img src="{{ asset('images/profile/user-uploads/user-07.jpg') }}" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
              </div>
              <div class="col-md-4 col-6 user-latest-img">
                <img src="{{ asset('images/profile/user-uploads/user-08.jpg') }}" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
              </div>
              <div class="col-md-4 col-6 user-latest-img">
                <img src="{{ asset('images/profile/user-uploads/user-09.jpg') }}" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header d-flex justify-content-between">
            <h4>Suggestions</h4>
            <i class="feather icon-more-horizontal cursor-pointer"></i>
          </div>
          <div class="card-body">
            <div class="d-flex justify-content-start align-items-center mb-1">
              <div class="avatar mr-50">
                <img src="{{ asset('images/portrait/small/avatar-s-5.jpg') }}" alt="avtar img holder" height="35" width="35">
              </div>
              <div class="user-page-info">
                <h6 class="mb-0">Carissa Dolle</h6>
                <span class="font-small-2">6 Mutual Friends</span>
              </div>
              <button type="button" class="btn btn-primary btn-icon ml-auto"><i class="feather icon-user-plus"></i></button>
            </div>
            <div class="d-flex justify-content-start align-items-center mb-1">
              <div class="avatar mr-50">
                <img src="{{ asset('images/portrait/small/avatar-s-6.jpg') }}" alt="avtar img holder" height="35" width="35">
              </div>
              <div class="user-page-info">
                <h6 class="mb-0">Liliana Pecor</h6>
                <span class="font-small-2">3 Mutual Friends</span>
              </div>
              <button type="button" class="btn btn-primary btn-icon ml-auto"><i class="feather icon-user-plus"></i></button>
            </div>
            <div class="d-flex justify-content-start align-items-center mb-1">
              <div class="avatar mr-50">
                <img src="{{ asset('images/portrait/small/avatar-s-7.jpg') }}" alt="avtar img holder" height="35" width="35">
              </div>
              <div class="user-page-info">
                <h6 class="mb-0">Isidra Strunk</h6>
                <span class="font-small-2">2 Mutual Friends</span>
              </div>
              <button type="button" class="btn btn-primary btn-icon ml-auto"><i class="feather icon-user-plus"></i></button>
            </div>
            <div class="d-flex justify-content-start align-items-center mb-1">
              <div class="avatar mr-50">
                <img src="{{ asset('images/portrait/small/avatar-s-8.jpg') }}" alt="avtar img holder" height="35" width="35">
              </div>
              <div class="user-page-info">
                <h6 class="mb-0">Gerald Licea</h6>
                <span class="font-small-2">1 Mutual Friends</span>
              </div>
              <button type="button" class="btn btn-primary btn-icon ml-auto"><i class="feather icon-user-plus"></i></button>
            </div>
            <div class="d-flex justify-content-start align-items-center mb-1">
              <div class="avatar mr-50">
                <img src="{{ asset('images/portrait/small/avatar-s-9.jpg') }}" alt="avtar img holder" height="35" width="35">
              </div>
              <div class="user-page-info">
                <h6 class="mb-0">Kelle Herrick</h6>
                <span class="font-small-2">1 Mutual Friends</span>
              </div>
              <button type="button" class="btn btn-primary btn-icon ml-auto"><i class="feather icon-user-plus"></i></button>
            </div>
            <div class="d-flex justify-content-start align-items-center mb-1">
              <div class="avatar mr-50">
                <img src="{{ asset('images/portrait/small/avatar-s-10.jpg') }}" alt="avtar img holder" height="35" width="35">
              </div>
              <div class="user-page-info">
                <h6 class="mb-0">Cesar Lee</h6>
                <span class="font-small-2">1 Mutual Friends</span>
              </div>
              <button type="button" class="btn btn-primary btn-icon ml-auto"><i class="feather icon-user-plus"></i></button>
            </div>
            <div class="d-flex justify-content-start align-items-center mb-1">
              <div class="avatar mr-50">
                <img src="{{ asset('images/portrait/small/avatar-s-11.jpg') }}" alt="avtar img holder" height="35" width="35">
              </div>
              <div class="user-page-info">
                <h6 class="mb-0">John Doe</h6>
                <span class="font-small-2">1 Mutual Friends</span>
              </div>
              <button type="button" class="btn btn-primary btn-icon ml-auto"><i class="feather icon-user-plus"></i></button>
            </div>
            <div class="d-flex justify-content-start align-items-center mb-2">
              <div class="avatar mr-50">
                <img src="{{ asset('images/portrait/small/avatar-s-12.jpg') }}" alt="avtar img holder" height="35" width="35">
              </div>
              <div class="user-page-info">
                <h6 class="mb-0">Tonia Seabold</h6>
                <span class="font-small-2">1 Mutual Friends</span>
              </div>
              <button type="button" class="btn btn-primary btn-icon ml-auto"><i class="feather icon-user-plus"></i></button>
            </div>
            <button type="button" class="btn btn-primary w-100 mt-1"><i class="feather icon-plus mr-25"></i>Load More</button>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h4>Polls</h4>
          </div>
          <div class="card-body">
            <h6>Who is the best actor in Marvel Cinematic Universe?</h6>
            <div class="polls-info mt-1">
              <div class="d-flex justify-content-between">
                <div class="vs-radio-con vs-radio-primary">
                  <input type="radio" name="vueradio" value="false">
                  <span class="vs-radio">
                    <span class="vs-radio--border"></span>
                    <span class="vs-radio--circle"></span>
                  </span>
                  <span class="">RDJ</span>
                </div>
                <div class="text-right">58%</div>
              </div>
              <div class="progress progress-bar-primary my-50">
                <div class="progress-bar" role="progressbar" aria-valuenow="58" aria-valuemin="58" aria-valuemax="100"
                  style="width:58%"></div>
              </div>
              <ul class="list-unstyled users-list d-flex">
                <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                data-original-title="Tonia Seabold" class="avatar pull-up ml-0">
                  <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-12.jpg') }}" alt="Avatar" height="30" width="30">
                </li>
                <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                data-original-title="Carissa Dolle" class="avatar pull-up">
                  <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-5.jpg') }}" alt="Avatar" height="30" width="30">
                </li>
                <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                data-original-title="Kelle Herrick" class="avatar pull-up">
                  <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-9.jpg') }}" alt="Avatar" height="30" width="30">
                </li>
                <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                data-original-title="Len Bregantini" class="avatar pull-up">
                  <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-10.jpg') }}" alt="Avatar" height="30" width="30">
                </li>
                <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                data-original-title="John Doe" class="avatar pull-up">
                  <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-11.jpg') }}" alt="Avatar" height="30" width="30">
                </li>
                <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                data-original-title="Tonia Seabold" class="avatar pull-up">
                  <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-12.jpg') }}" alt="Avatar" height="30" width="30">
                </li>
                <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                data-original-title="Dirk Fornili" class="avatar pull-up">
                  <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-2.jpg') }}" alt="Avatar" height="30" width="30">
                </li>
              </ul>
            </div>
            <div class="polls-info mt-1">
              <div class="d-flex justify-content-between">
                <div class="vs-radio-con vs-radio-primary">
                  <input type="radio" name="vueradio" value="false">
                  <span class="vs-radio">
                    <span class="vs-radio--border"></span>
                    <span class="vs-radio--circle"></span>
                  </span>
                  <span class="">Chris Hemswort</span>
                </div>
                <div class="text-right">16%</div>
              </div>
              <div class="progress progress-bar-primary my-50">
                <div class="progress-bar" role="progressbar" aria-valuenow="16" aria-valuemin="16" aria-valuemax="100"
                  style="width:16%"></div>
              </div>
              <ul class="list-unstyled users-list d-flex">
                <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                data-original-title="Liliana Pecor" class="avatar pull-up ml-0">
                  <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-6.jpg') }}" alt="Avatar" height="30" width="30">
                </li>
                <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                data-original-title="Kasandra NaleVanko" class="avatar pull-up">
                  <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-1.jpg') }}" alt="Avatar" height="30" width="30">
                </li>
              </ul>
            </div>
            <div class="polls-info mt-1">
              <div class="d-flex justify-content-between">
                <div class="vs-radio-con vs-radio-primary">
                  <input type="radio" name="vueradio" value="false">
                  <span class="vs-radio">
                    <span class="vs-radio--border"></span>
                    <span class="vs-radio--circle"></span>
                  </span>
                  <span class="">Mark Ruffalo</span>
                </div>
                <div class="text-right">8%</div>
              </div>
              <div class="progress progress-bar-primary my-50">
                <div class="progress-bar" role="progressbar" aria-valuenow="8" aria-valuemin="8" aria-valuemax="100"
                  style="width:8%"></div>
              </div>
              <ul class="list-unstyled users-list d-flex">
                <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                data-original-title="Lorelei Lacsamana" class="avatar pull-up ml-0">
                  <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-4.jpg') }}" alt="Avatar" height="30" width="30">
                </li>
              </ul>
            </div>
            <div class="polls-info mt-1">
              <div class="d-flex justify-content-between">
                <div class="vs-radio-con vs-radio-primary">
                  <input type="radio" name="vueradio" value="false">
                  <span class="vs-radio">
                    <span class="vs-radio--border"></span>
                    <span class="vs-radio--circle"></span>
                  </span>
                  <span class="">Chris Evans</span>
                </div>
                <div class="text-right">16%</div>
              </div>
              <div class="progress progress-bar-primary my-50">
                <div class="progress-bar" role="progressbar" aria-valuenow="16" aria-valuemin="16" aria-valuemax="100"
                  style="width:16%"></div>
              </div>
              <ul class="list-unstyled users-list d-flex">
                <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                data-original-title="JeanieBulgrin" class="avatar pull-up ml-0">
                  <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-8.jpg') }}" alt="Avatar" height="30" width="30">
                </li>
                <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                data-original-title="Graig Muckey" class="avatar pull-up">
                  <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-3.jpg') }}" alt="Avatar" height="30" width="30">
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <button type="button" class="btn btn-primary block-element mb-1">Load More</button>
      </div>
    </div>
  </section>
</div>
@endsection
@section('page-script')
{{-- Page js files --}}
        <script src="{{ asset(mix('js/scripts/pages/user-profile.js')) }}"></script>
@endsection
