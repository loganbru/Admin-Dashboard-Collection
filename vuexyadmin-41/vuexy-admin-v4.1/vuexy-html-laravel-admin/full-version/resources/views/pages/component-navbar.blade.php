@extends('layouts/contentLayoutMaster')

@section('title', 'Navbar')

@section('content')
<section id="navbar-component">
  {{-- Basic Navbar Starts --}}
  <section id="basic-navbar">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Basic Navbar</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p class="mb-1">
                Navbars can utilize <code>.navbar-toggler</code>, <code>.navbar-collapse</code>, and
                <code>.navbar-expand{-sm|-md|-lg|-xl}</code> classes to change when their content collapses behind a
                button. In combination with other utilities, you can easily choose when to show or hide particular
                elements.
              </p>
              <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-light navbar-shadow">
                <div class="navbar-wrapper">
                  <div class="navbar-container content">
                    <div class="navbar-collapse" id="navbar-mobile-1">
                      <ul class="nav navbar-nav bookmark-icons mr-auto float-left">
                        <li class="nav-item mobile-menu d-xl-none mr-auto">
                          <a class="nav-link nav-menu-main hidden-xs menu-toggle is-active" href="#">
                            <i class="ficon feather icon-menu"></i>
                          </a>
                        </li>
                        <li class="nav-item d-none d-lg-block">
                          <a class="nav-link" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Todo">
                            <i class="ficon feather icon-check-square"></i>
                          </a>
                        </li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Chat"><i
                              class="ficon feather icon-message-square"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Email"><i class="ficon feather icon-mail"></i></a>
                        </li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Calendar"><i
                              class="ficon feather icon-calendar"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link"><i class="ficon feather icon-star warning"></i></a>
                        </li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link "><i
                              class="ficon feather icon-maximize"></i></a></li>
                      </ul>
                      <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link"
                            id="dropdown-flag-1" href="#" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span
                              class="selected-language">English</span></a>
                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-flag-1"><a
                              class="dropdown-item" href="#"><i class="flag-icon flag-icon-us"></i> English</a><a
                              class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a><a
                              class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> Chinese</a><a
                              class="dropdown-item" href="#"><i class="flag-icon flag-icon-de"></i> German</a></div>
                        </li>
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#"
                            data-toggle="dropdown"><i class="ficon feather icon-bell"></i><span
                              class="badge badge-pill badge-danger badge-up">5</span></a>
                          <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                              <div class="dropdown-header m-0 p-2">
                                <h3 class="white">5 New</h3><span class="grey darken-2">App Notifications</span>
                              </div>
                            </li>
                            <li class="scrollable-container media-list ps">
                              <a class="d-flex justify-content-between" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                  <div class="media-left"><i class="feather icon-plus-square font-medium-5 primary"></i></div>
                                  <div class="media-body">
                                    <h6 class="primary media-heading">You have new order!</h6><small
                                      class="notification-text"> Are your going to meet me tonight?</small>
                                  </div><small>
                                    <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">9 hours
                                      ago</time></small>
                                </div>
                              </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                  <div class="media-left"><i class="feather icon-download-cloud font-medium-5 success"></i></div>
                                  <div class="media-body">
                                    <h6 class="success media-heading red darken-1">99% Server load</h6><small
                                      class="notification-text">You got new order of goods.</small>
                                  </div><small>
                                    <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">5 hour
                                      ago</time></small>
                                </div>
                              </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                  <div class="media-left"><i class="feather icon-alert-triangle font-medium-5 danger"></i></div>
                                  <div class="media-body">
                                    <h6 class="danger media-heading yellow darken-3">Warning notifixation</h6><small
                                      class="notification-text">Server have 99% CPU usage.</small>
                                  </div><small>
                                    <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                                </div>
                              </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                  <div class="media-left"><i class="feather icon-check-circle font-medium-5 info"></i></div>
                                  <div class="media-body">
                                    <h6 class="info media-heading">Complete the task</h6><small
                                      class="notification-text">Cake sesame snaps cupcake</small>
                                  </div><small>
                                    <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Last
                                      week</time></small>
                                </div>
                              </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                  <div class="media-left"><i class="feather icon-file font-medium-5 warning"></i></div>
                                  <div class="media-body">
                                    <h6 class="warning media-heading">Generate monthly report</h6><small
                                      class="notification-text">Chocolate cake oat cake tiramisu marzipan</small>
                                  </div><small>
                                    <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Last
                                      month</time></small>
                                </div>
                              </a>
                              <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                              </div>
                              <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                              </div>
                            </li>
                            <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center"
                                href="javascript:void(0)">Read all notifications</a></li>
                          </ul>
                        </li>
                        <li class="nav-item nav-search"><a class="nav-link"><i class="ficon feather icon-search"></i></a>
                          <div class="search-input">
                            <div class="search-input-icon"><i class="feather icon-search primary"></i></div>
                          </div>
                        </li>
                        <li class="dropdown dropdown-user nav-item"><a
                            class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">John
                                Doe</span><span class="user-status">Available</span></div><span><img class="round"
                                src="{{ asset('images/portrait/small/avatar-s-11.jpg') }}" alt="avatar" height="40"
                                width="40"></span>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i
                                class="feather icon-user"></i> Edit Profile</a><a class="dropdown-item" href="#"><i
                                class="feather icon-mail"></i> My Inbox</a><a class="dropdown-item" href="#"><i
                                class="feather icon-check-square"></i> Task</a><a class="dropdown-item" href="#"><i
                                class="feather icon-message-square"></i> Chats</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i
                                class="feather icon-power"></i> Logout</a>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Basic Navbar Ends --}}

  {{-- Navbar Themes Starts --}}
  <section id="navbar-theme">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Navbar Themes</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p class="mb-1">
                Use class <code>.navbar-{color}</code> and <code>.bg-{color}</code> to create a navbar of your choice
              </p>
              <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu bg-primary navbar-dark navbar-shadow
                mb-2">
                <div class="navbar-wrapper">
                  <div class="navbar-container content">
                    <div class="navbar-collapse" id="navbar-mobile-2">
                      <ul class="nav navbar-nav bookmark-icons mr-auto float-left">
                        <li class="nav-item mobile-menu d-xl-none mr-auto">
                          <a class="nav-link nav-menu-main hidden-xs menu-toggle is-active" href="#">
                            <i class="ficon feather icon-menu"></i>
                          </a>
                        </li>
                        <li class="nav-item d-none d-lg-block">
                          <a class="nav-link" href="#" data-toggle="tooltip" data-placement="top" title=""
                            data-original-title="Todo">
                            <i class="ficon feather icon-check-square"></i>
                          </a>
                        </li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-toggle="tooltip"
                            data-placement="top" title="" data-original-title="Chat"><i
                              class="ficon feather icon-message-square"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-toggle="tooltip"
                            data-placement="top" title="" data-original-title="Email"><i class="ficon feather icon-mail"></i></a>
                        </li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-toggle="tooltip"
                            data-placement="top" title="" data-original-title="Calendar"><i
                              class="ficon feather icon-calendar"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link"><i
                              class="ficon feather icon-star warning"></i></a>
                        </li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link "><i
                              class="ficon feather icon-maximize"></i></a></li>
                      </ul>
                      <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link"
                            id="dropdown-flag-2" href="#" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span
                              class="selected-language">English</span></a>
                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-flag-2"><a
                              class="dropdown-item" href="#"><i class="flag-icon flag-icon-us"></i> English</a><a
                              class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a><a
                              class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> Chinese</a><a
                              class="dropdown-item" href="#"><i class="flag-icon flag-icon-de"></i> German</a></div>
                        </li>
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#"
                            data-toggle="dropdown"><i class="ficon feather icon-bell"></i><span
                              class="badge badge-pill badge-danger badge-up">5</span></a>
                          <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                              <div class="dropdown-header m-0 p-2">
                                <h3 class="white">5 New</h3><span class="grey darken-2">App Notifications</span>
                              </div>
                            </li>
                            <li class="scrollable-container media-list ps">
                              <a class="d-flex justify-content-between" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                  <div class="media-left"><i class="feather icon-plus-square font-medium-5 primary"></i></div>
                                  <div class="media-body">
                                    <h6 class="primary media-heading">You have new order!</h6><small
                                      class="notification-text"> Are your going to meet me tonight?</small>
                                  </div><small>
                                    <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">9 hours
                                      ago</time></small>
                                </div>
                              </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                  <div class="media-left"><i class="feather icon-download-cloud font-medium-5 success"></i></div>
                                  <div class="media-body">
                                    <h6 class="success media-heading red darken-1">99% Server load</h6><small
                                      class="notification-text">You got new order of goods.</small>
                                  </div><small>
                                    <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">5 hour
                                      ago</time></small>
                                </div>
                              </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                  <div class="media-left"><i class="feather icon-alert-triangle font-medium-5 danger"></i></div>
                                  <div class="media-body">
                                    <h6 class="danger media-heading yellow darken-3">Warning notifixation</h6><small
                                      class="notification-text">Server have 99% CPU usage.</small>
                                  </div><small>
                                    <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                                </div>
                              </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                  <div class="media-left"><i class="feather icon-check-circle font-medium-5 info"></i></div>
                                  <div class="media-body">
                                    <h6 class="info media-heading">Complete the task</h6><small
                                      class="notification-text">Cake sesame snaps cupcake</small>
                                  </div><small>
                                    <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Last
                                      week</time></small>
                                </div>
                              </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                  <div class="media-left"><i class="feather icon-file font-medium-5 warning"></i></div>
                                  <div class="media-body">
                                    <h6 class="warning media-heading">Generate monthly report</h6><small
                                      class="notification-text">Chocolate cake oat cake tiramisu marzipan</small>
                                  </div><small>
                                    <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Last
                                      month</time></small>
                                </div>
                              </a>
                              <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                              </div>
                              <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                              </div>
                            </li>
                            <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center"
                                href="javascript:void(0)">Read all notifications</a></li>
                          </ul>
                        </li>
                        <li class="nav-item nav-search"><a class="nav-link"><i class="ficon feather icon-search"></i></a>
                          <div class="search-input">
                            <div class="search-input-icon"><i class="feather icon-search primary"></i></div>
                          </div>
                        </li>
                        <li class="dropdown dropdown-user nav-item"><a
                            class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">John
                                Doe</span><span class="user-status">Available</span></div><span><img class="round"
                                src="{{ asset('images/portrait/small/avatar-s-11.jpg') }}" alt="avatar" height="40"
                                width="40"></span>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i
                                class="feather icon-user"></i> Edit Profile</a><a class="dropdown-item" href="#"><i
                                class="feather icon-mail"></i> My Inbox</a><a class="dropdown-item" href="#"><i
                                class="feather icon-check-square"></i> Task</a><a class="dropdown-item" href="#"><i
                                class="feather icon-message-square"></i> Chats</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i
                                class="feather icon-power"></i> Logout</a>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </nav>
              <nav
                class="header-navbar navbar-expand-lg navbar navbar-with-menu bg-success navbar-dark navbar-shadow mb-2">
                <div class="navbar-wrapper">
                  <div class="navbar-container content">
                    <div class="navbar-collapse" id="navbar-mobile-3">
                      <ul class="nav navbar-nav bookmark-icons mr-auto float-left">
                        <li class="nav-item mobile-menu d-xl-none mr-auto">
                          <a class="nav-link nav-menu-main hidden-xs menu-toggle is-active" href="#">
                            <i class="ficon feather icon-menu"></i>
                          </a>
                        </li>
                        <li class="nav-item d-none d-lg-block">
                          <a class="nav-link" href="#" data-toggle="tooltip" data-placement="top" title=""
                            data-original-title="Todo">
                            <i class="ficon feather icon-check-square"></i>
                          </a>
                        </li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-toggle="tooltip"
                            data-placement="top" title="" data-original-title="Chat"><i
                              class="ficon feather icon-message-square"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-toggle="tooltip"
                            data-placement="top" title="" data-original-title="Email"><i class="ficon feather icon-mail"></i></a>
                        </li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-toggle="tooltip"
                            data-placement="top" title="" data-original-title="Calendar"><i
                              class="ficon feather icon-calendar"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link"><i
                              class="ficon feather icon-star warning"></i></a>
                        </li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link "><i
                              class="ficon feather icon-maximize"></i></a></li>
                      </ul>
                      <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link"
                            id="dropdown-flag-3" href="#" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span
                              class="selected-language">English</span></a>
                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-flag-3"><a
                              class="dropdown-item" href="#"><i class="flag-icon flag-icon-us"></i> English</a><a
                              class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a><a
                              class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> Chinese</a><a
                              class="dropdown-item" href="#"><i class="flag-icon flag-icon-de"></i> German</a></div>
                        </li>
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#"
                            data-toggle="dropdown"><i class="ficon feather icon-bell"></i><span
                              class="badge badge-pill badge-danger badge-up">5</span></a>
                          <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                              <div class="dropdown-header m-0 p-2">
                                <h3 class="white">5 New</h3><span class="grey darken-2">App Notifications</span>
                              </div>
                            </li>
                            <li class="scrollable-container media-list ps">
                              <a class="d-flex justify-content-between" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                  <div class="media-left"><i class="feather icon-plus-square font-medium-5 primary"></i></div>
                                  <div class="media-body">
                                    <h6 class="primary media-heading">You have new order!</h6><small
                                      class="notification-text"> Are your going to meet me tonight?</small>
                                  </div><small>
                                    <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">9 hours
                                      ago</time></small>
                                </div>
                              </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                  <div class="media-left"><i class="feather icon-download-cloud font-medium-5 success"></i>
                                  </div>
                                  <div class="media-body">
                                    <h6 class="success media-heading red darken-1">99% Server load</h6><small
                                      class="notification-text">You got new order of goods.</small>
                                  </div><small>
                                    <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">5 hour
                                      ago</time></small>
                                </div>
                              </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                  <div class="media-left"><i class="feather icon-alert-triangle font-medium-5 danger"></i></div>
                                  <div class="media-body">
                                    <h6 class="danger media-heading yellow darken-3">Warning notifixation</h6><small
                                      class="notification-text">Server have 99% CPU usage.</small>
                                  </div><small>
                                    <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                                </div>
                              </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                  <div class="media-left"><i class="feather icon-check-circle font-medium-5 info"></i></div>
                                  <div class="media-body">
                                    <h6 class="info media-heading">Complete the task</h6><small
                                      class="notification-text">Cake sesame snaps cupcake</small>
                                  </div><small>
                                    <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Last
                                      week</time></small>
                                </div>
                              </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                  <div class="media-left"><i class="feather icon-file font-medium-5 warning"></i></div>
                                  <div class="media-body">
                                    <h6 class="warning media-heading">Generate monthly report</h6><small
                                      class="notification-text">Chocolate cake oat cake tiramisu marzipan</small>
                                  </div><small>
                                    <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Last
                                      month</time></small>
                                </div>
                              </a>
                              <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                              </div>
                              <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                              </div>
                            </li>
                            <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center"
                                href="javascript:void(0)">Read all notifications</a></li>
                          </ul>
                        </li>
                        <li class="nav-item nav-search"><a class="nav-link"><i class="ficon feather icon-search"></i></a>
                          <div class="search-input">
                            <div class="search-input-icon"><i class="feather icon-search primary"></i></div>
                          </div>
                        </li>
                        <li class="dropdown dropdown-user nav-item"><a
                            class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">John
                                Doe</span><span class="user-status">Available</span></div><span><img class="round"
                                src="{{ asset('images/portrait/small/avatar-s-11.jpg') }}" alt="avatar" height="40"
                                width="40"></span>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i
                                class="feather icon-user"></i> Edit Profile</a><a class="dropdown-item" href="#"><i
                                class="feather icon-mail"></i> My Inbox</a><a class="dropdown-item" href="#"><i
                                class="feather icon-check-square"></i> Task</a><a class="dropdown-item" href="#"><i
                                class="feather icon-message-square"></i> Chats</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i
                                class="feather icon-power"></i> Logout</a>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </nav>
              <nav
                class="header-navbar navbar-expand-lg navbar navbar-with-menu bg-danger navbar-dark navbar-shadow mb-2">
                <div class="navbar-wrapper">
                  <div class="navbar-container content">
                    <div class="navbar-collapse" id="navbar-mobile-4">
                      <ul class="nav navbar-nav bookmark-icons mr-auto float-left">
                        <li class="nav-item mobile-menu d-xl-none mr-auto">
                          <a class="nav-link nav-menu-main hidden-xs menu-toggle is-active" href="#">
                            <i class="ficon feather icon-menu"></i>
                          </a>
                        </li>
                        <li class="nav-item d-none d-lg-block">
                          <a class="nav-link" href="#" data-toggle="tooltip" data-placement="top" title=""
                            data-original-title="Todo">
                            <i class="ficon feather icon-check-square"></i>
                          </a>
                        </li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-toggle="tooltip"
                            data-placement="top" title="" data-original-title="Chat"><i
                              class="ficon feather icon-message-square"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-toggle="tooltip"
                            data-placement="top" title="" data-original-title="Email"><i class="ficon feather icon-mail"></i></a>
                        </li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-toggle="tooltip"
                            data-placement="top" title="" data-original-title="Calendar"><i
                              class="ficon feather icon-calendar"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link"><i
                              class="ficon feather icon-star warning"></i></a>
                        </li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link "><i
                              class="ficon feather icon-maximize"></i></a></li>
                      </ul>
                      <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link"
                            id="dropdown-flag-4" href="#" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span
                              class="selected-language">English</span></a>
                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-flag-4"><a
                              class="dropdown-item" href="#"><i class="flag-icon flag-icon-us"></i> English</a><a
                              class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a><a
                              class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> Chinese</a><a
                              class="dropdown-item" href="#"><i class="flag-icon flag-icon-de"></i> German</a></div>
                        </li>
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#"
                            data-toggle="dropdown"><i class="ficon feather icon-bell"></i><span
                              class="badge badge-pill badge-primary badge-up">5</span></a>
                          <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                              <div class="dropdown-header m-0 p-2">
                                <h3 class="white">5 New</h3><span class="grey darken-2">App Notifications</span>
                              </div>
                            </li>
                            <li class="scrollable-container media-list ps">
                              <a class="d-flex justify-content-between" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                  <div class="media-left"><i class="feather icon-plus-square font-medium-5 primary"></i></div>
                                  <div class="media-body">
                                    <h6 class="primary media-heading">You have new order!</h6><small
                                      class="notification-text"> Are your going to meet me tonight?</small>
                                  </div><small>
                                    <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">9 hours
                                      ago</time></small>
                                </div>
                              </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                  <div class="media-left"><i class="feather icon-download-cloud font-medium-5 success"></i>
                                  </div>
                                  <div class="media-body">
                                    <h6 class="success media-heading red darken-1">99% Server load</h6><small
                                      class="notification-text">You got new order of goods.</small>
                                  </div><small>
                                    <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">5 hour
                                      ago</time></small>
                                </div>
                              </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                  <div class="media-left"><i class="feather icon-alert-triangle font-medium-5 danger"></i></div>
                                  <div class="media-body">
                                    <h6 class="danger media-heading yellow darken-3">Warning notifixation</h6><small
                                      class="notification-text">Server have 99% CPU usage.</small>
                                  </div><small>
                                    <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                                </div>
                              </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                  <div class="media-left"><i class="feather icon-check-circle font-medium-5 info"></i></div>
                                  <div class="media-body">
                                    <h6 class="info media-heading">Complete the task</h6><small
                                      class="notification-text">Cake sesame snaps cupcake</small>
                                  </div><small>
                                    <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Last
                                      week</time></small>
                                </div>
                              </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                  <div class="media-left"><i class="feather icon-file font-medium-5 warning"></i></div>
                                  <div class="media-body">
                                    <h6 class="warning media-heading">Generate monthly report</h6><small
                                      class="notification-text">Chocolate cake oat cake tiramisu marzipan</small>
                                  </div><small>
                                    <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Last
                                      month</time></small>
                                </div>
                              </a>
                              <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                              </div>
                              <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                              </div>
                            </li>
                            <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center"
                                href="javascript:void(0)">Read all notifications</a></li>
                          </ul>
                        </li>
                        <li class="nav-item nav-search"><a class="nav-link"><i class="ficon feather icon-search"></i></a>
                          <div class="search-input">
                            <div class="search-input-icon"><i class="feather icon-search primary"></i></div>
                          </div>
                        </li>
                        <li class="dropdown dropdown-user nav-item"><a
                            class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">John
                                Doe</span><span class="user-status">Available</span></div><span><img class="round"
                                src="{{ asset('images/portrait/small/avatar-s-11.jpg') }}" alt="avatar" height="40"
                                width="40"></span>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i
                                class="feather icon-user"></i> Edit Profile</a><a class="dropdown-item" href="#"><i
                                class="feather icon-mail"></i> My Inbox</a><a class="dropdown-item" href="#"><i
                                class="feather icon-check-square"></i> Task</a><a class="dropdown-item" href="#"><i
                                class="feather icon-message-square"></i> Chats</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i
                                class="feather icon-power"></i> Logout</a>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </nav>
              <nav
                class="header-navbar navbar-expand-lg navbar navbar-with-menu bg-info navbar-dark navbar-shadow mb-2">
                <div class="navbar-wrapper">
                  <div class="navbar-container content">
                    <div class="navbar-collapse" id="navbar-mobile-5">
                      <ul class="nav navbar-nav bookmark-icons mr-auto float-left">
                        <li class="nav-item mobile-menu d-xl-none mr-auto">
                          <a class="nav-link nav-menu-main hidden-xs menu-toggle is-active" href="#">
                            <i class="ficon feather icon-menu"></i>
                          </a>
                        </li>
                        <li class="nav-item d-none d-lg-block">
                          <a class="nav-link" href="#" data-toggle="tooltip" data-placement="top" title=""
                            data-original-title="Todo">
                            <i class="ficon feather icon-check-square"></i>
                          </a>
                        </li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-toggle="tooltip"
                            data-placement="top" title="" data-original-title="Chat"><i
                              class="ficon feather icon-message-square"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-toggle="tooltip"
                            data-placement="top" title="" data-original-title="Email"><i class="ficon feather icon-mail"></i></a>
                        </li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-toggle="tooltip"
                            data-placement="top" title="" data-original-title="Calendar"><i
                              class="ficon feather icon-calendar"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link"><i
                              class="ficon feather icon-star warning"></i></a>
                        </li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link "><i
                              class="ficon feather icon-maximize"></i></a></li>
                      </ul>
                      <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link"
                            id="dropdown-flag-5" href="#" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span
                              class="selected-language">English</span></a>
                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-flag-5"><a
                              class="dropdown-item" href="#"><i class="flag-icon flag-icon-us"></i> English</a><a
                              class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a><a
                              class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> Chinese</a><a
                              class="dropdown-item" href="#"><i class="flag-icon flag-icon-de"></i> German</a></div>
                        </li>
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#"
                            data-toggle="dropdown"><i class="ficon feather icon-bell"></i><span
                              class="badge badge-pill badge-danger badge-up">5</span></a>
                          <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                              <div class="dropdown-header m-0 p-2">
                                <h3 class="white">5 New</h3><span class="grey darken-2">App Notifications</span>
                              </div>
                            </li>
                            <li class="scrollable-container media-list ps">
                              <a class="d-flex justify-content-between" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                  <div class="media-left"><i class="feather icon-plus-square font-medium-5 primary"></i></div>
                                  <div class="media-body">
                                    <h6 class="primary media-heading">You have new order!</h6><small
                                      class="notification-text"> Are your going to meet me tonight?</small>
                                  </div><small>
                                    <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">9 hours
                                      ago</time></small>
                                </div>
                              </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                  <div class="media-left"><i class="feather icon-download-cloud font-medium-5 success"></i>
                                  </div>
                                  <div class="media-body">
                                    <h6 class="success media-heading red darken-1">99% Server load</h6><small
                                      class="notification-text">You got new order of goods.</small>
                                  </div><small>
                                    <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">5 hour
                                      ago</time></small>
                                </div>
                              </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                  <div class="media-left"><i class="feather icon-alert-triangle font-medium-5 danger"></i></div>
                                  <div class="media-body">
                                    <h6 class="danger media-heading yellow darken-3">Warning notifixation</h6><small
                                      class="notification-text">Server have 99% CPU usage.</small>
                                  </div><small>
                                    <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                                </div>
                              </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                  <div class="media-left"><i class="feather icon-check-circle font-medium-5 info"></i></div>
                                  <div class="media-body">
                                    <h6 class="info media-heading">Complete the task</h6><small
                                      class="notification-text">Cake sesame snaps cupcake</small>
                                  </div><small>
                                    <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Last
                                      week</time></small>
                                </div>
                              </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                  <div class="media-left"><i class="feather icon-file font-medium-5 warning"></i></div>
                                  <div class="media-body">
                                    <h6 class="warning media-heading">Generate monthly report</h6><small
                                      class="notification-text">Chocolate cake oat cake tiramisu marzipan</small>
                                  </div><small>
                                    <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Last
                                      month</time></small>
                                </div>
                              </a>
                              <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                              </div>
                              <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                              </div>
                            </li>
                            <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center"
                                href="javascript:void(0)">Read all notifications</a></li>
                          </ul>
                        </li>
                        <li class="nav-item nav-search"><a class="nav-link"><i class="ficon feather icon-search"></i></a>
                          <div class="search-input">
                            <div class="search-input-icon"><i class="feather icon-search primary"></i></div>
                          </div>
                        </li>
                        <li class="dropdown dropdown-user nav-item"><a
                            class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">John
                                Doe</span><span class="user-status">Available</span></div><span><img class="round"
                                src="{{ asset('images/portrait/small/avatar-s-11.jpg') }}" alt="avatar" height="40"
                                width="40"></span>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i
                                class="feather icon-user"></i> Edit Profile</a><a class="dropdown-item" href="#"><i
                                class="feather icon-mail"></i> My Inbox</a><a class="dropdown-item" href="#"><i
                                class="feather icon-check-square"></i> Task</a><a class="dropdown-item" href="#"><i
                                class="feather icon-message-square"></i> Chats</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i
                                class="feather icon-power"></i> Logout</a>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </nav>
              <nav
                class="header-navbar navbar-expand-lg navbar navbar-with-menu bg-warning navbar-dark navbar-shadow mb-2">
                <div class="navbar-wrapper">
                  <div class="navbar-container content">
                    <div class="navbar-collapse" id="navbar-mobile-6">
                      <ul class="nav navbar-nav bookmark-icons mr-auto float-left">
                        <li class="nav-item mobile-menu d-xl-none mr-auto">
                          <a class="nav-link nav-menu-main hidden-xs menu-toggle is-active" href="#">
                            <i class="ficon feather icon-menu"></i>
                          </a>
                        </li>
                        <li class="nav-item d-none d-lg-block">
                          <a class="nav-link" href="#" data-toggle="tooltip" data-placement="top" title=""
                            data-original-title="Todo">
                            <i class="ficon feather icon-check-square"></i>
                          </a>
                        </li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-toggle="tooltip"
                            data-placement="top" title="" data-original-title="Chat"><i
                              class="ficon feather icon-message-square"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-toggle="tooltip"
                            data-placement="top" title="" data-original-title="Email"><i class="ficon feather icon-mail"></i></a>
                        </li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-toggle="tooltip"
                            data-placement="top" title="" data-original-title="Calendar"><i
                              class="ficon feather icon-calendar"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link"><i class="ficon feather icon-star"></i></a>
                        </li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link "><i
                              class="ficon feather icon-maximize"></i></a></li>
                      </ul>
                      <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link"
                            id="dropdown-flag-6" href="#" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span
                              class="selected-language">English</span></a>
                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-flag-6"><a
                              class="dropdown-item" href="#"><i class="flag-icon flag-icon-us"></i> English</a><a
                              class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a><a
                              class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> Chinese</a><a
                              class="dropdown-item" href="#"><i class="flag-icon flag-icon-de"></i> German</a></div>
                        </li>
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#"
                            data-toggle="dropdown"><i class="ficon feather icon-bell"></i><span
                              class="badge badge-pill badge-danger badge-up">5</span></a>
                          <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                              <div class="dropdown-header m-0 p-2">
                                <h3 class="white">5 New</h3><span class="grey darken-2">App Notifications</span>
                              </div>
                            </li>
                            <li class="scrollable-container media-list ps">
                              <a class="d-flex justify-content-between" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                  <div class="media-left"><i class="feather icon-plus-square font-medium-5 primary"></i></div>
                                  <div class="media-body">
                                    <h6 class="primary media-heading">You have new order!</h6><small
                                      class="notification-text"> Are your going to meet me tonight?</small>
                                  </div><small>
                                    <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">9 hours
                                      ago</time></small>
                                </div>
                              </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                  <div class="media-left"><i class="feather icon-download-cloud font-medium-5 success"></i>
                                  </div>
                                  <div class="media-body">
                                    <h6 class="success media-heading red darken-1">99% Server load</h6><small
                                      class="notification-text">You got new order of goods.</small>
                                  </div><small>
                                    <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">5 hour
                                      ago</time></small>
                                </div>
                              </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                  <div class="media-left"><i class="feather icon-alert-triangle font-medium-5 danger"></i></div>
                                  <div class="media-body">
                                    <h6 class="danger media-heading yellow darken-3">Warning notifixation</h6><small
                                      class="notification-text">Server have 99% CPU usage.</small>
                                  </div><small>
                                    <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                                </div>
                              </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                  <div class="media-left"><i class="feather icon-check-circle font-medium-5 info"></i></div>
                                  <div class="media-body">
                                    <h6 class="info media-heading">Complete the task</h6><small
                                      class="notification-text">Cake sesame snaps cupcake</small>
                                  </div><small>
                                    <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Last
                                      week</time></small>
                                </div>
                              </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                  <div class="media-left"><i class="feather icon-file font-medium-5 warning"></i></div>
                                  <div class="media-body">
                                    <h6 class="warning media-heading">Generate monthly report</h6><small
                                      class="notification-text">Chocolate cake oat cake tiramisu marzipan</small>
                                  </div><small>
                                    <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Last
                                      month</time></small>
                                </div>
                              </a>
                              <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                              </div>
                              <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                              </div>
                            </li>
                            <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center"
                                href="javascript:void(0)">Read all notifications</a></li>
                          </ul>
                        </li>
                        <li class="nav-item nav-search"><a class="nav-link"><i class="ficon feather icon-search"></i></a>
                          <div class="search-input">
                            <div class="search-input-icon"><i class="feather icon-search primary"></i></div>
                          </div>
                        </li>
                        <li class="dropdown dropdown-user nav-item"><a
                            class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">John
                                Doe</span><span class="user-status">Available</span></div><span><img class="round"
                                src="{{ asset('images/portrait/small/avatar-s-11.jpg') }}" alt="avatar" height="40"
                                width="40"></span>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i
                                class="feather icon-user"></i> Edit Profile</a><a class="dropdown-item" href="#"><i
                                class="feather icon-mail"></i> My Inbox</a><a class="dropdown-item" href="#"><i
                                class="feather icon-check-square"></i> Task</a><a class="dropdown-item" href="#"><i
                                class="feather icon-message-square"></i> Chats</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i
                                class="feather icon-power"></i> Logout</a>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </nav>
              <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-dark bg-dark navbar-shadow">
                <div class="navbar-wrapper">
                  <div class="navbar-container content">
                    <div class="navbar-collapse" id="navbar-mobile-7">
                      <ul class="nav navbar-nav bookmark-icons mr-auto float-left">
                        <li class="nav-item mobile-menu d-xl-none mr-auto">
                          <a class="nav-link nav-menu-main hidden-xs menu-toggle is-active" href="#">
                            <i class="ficon feather icon-menu"></i>
                          </a>
                        </li>
                        <li class="nav-item d-none d-lg-block">
                          <a class="nav-link" href="#" data-toggle="tooltip" data-placement="top" title=""
                            data-original-title="Todo">
                            <i class="ficon feather icon-check-square"></i>
                          </a>
                        </li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-toggle="tooltip"
                            data-placement="top" title="" data-original-title="Chat"><i
                              class="ficon feather icon-message-square"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-toggle="tooltip"
                            data-placement="top" title="" data-original-title="Email"><i class="ficon feather icon-mail"></i></a>
                        </li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-toggle="tooltip"
                            data-placement="top" title="" data-original-title="Calendar"><i
                              class="ficon feather icon-calendar"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link"><i
                              class="ficon feather icon-star warning"></i></a>
                        </li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link "><i
                              class="ficon feather icon-maximize"></i></a></li>
                      </ul>
                      <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link"
                            id="dropdown-flag-7" href="#" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span
                              class="selected-language">English</span></a>
                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-flag-7"><a
                              class="dropdown-item" href="#"><i class="flag-icon flag-icon-us"></i> English</a><a
                              class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a><a
                              class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> Chinese</a><a
                              class="dropdown-item" href="#"><i class="flag-icon flag-icon-de"></i> German</a></div>
                        </li>
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#"
                            data-toggle="dropdown"><i class="ficon feather icon-bell"></i><span
                              class="badge badge-pill badge-danger badge-up">5</span></a>
                          <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                              <div class="dropdown-header m-0 p-2">
                                <h3 class="white">5 New</h3><span class="grey darken-2">App Notifications</span>
                              </div>
                            </li>
                            <li class="scrollable-container media-list ps">
                              <a class="d-flex7 justify-content-between" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                  <div class="media-left"><i class="feather icon-plus-square font-medium-5 primary"></i></div>
                                  <div class="media-body">
                                    <h6 class="primary media-heading">You have new order!</h6><small
                                      class="notification-text"> Are your going to meet me tonight?</small>
                                  </div><small>
                                    <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">9 hours
                                      ago</time></small>
                                </div>
                              </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                  <div class="media-left"><i class="feather icon-download-cloud font-medium-5 success"></i></div>
                                  <div class="media-body">
                                    <h6 class="success media-heading red darken-1">99% Server load</h6><small
                                      class="notification-text">You got new order of goods.</small>
                                  </div><small>
                                    <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">5 hour
                                      ago</time></small>
                                </div>
                              </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                  <div class="media-left"><i class="feather icon-alert-triangle font-medium-5 danger"></i></div>
                                  <div class="media-body">
                                    <h6 class="danger media-heading yellow darken-3">Warning notifixation</h6><small
                                      class="notification-text">Server have 99% CPU usage.</small>
                                  </div><small>
                                    <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                                </div>
                              </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                  <div class="media-left"><i class="feather icon-check-circle font-medium-5 info"></i></div>
                                  <div class="media-body">
                                    <h6 class="info media-heading">Complete the task</h6><small
                                      class="notification-text">Cake sesame snaps cupcake</small>
                                  </div><small>
                                    <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Last
                                      week</time></small>
                                </div>
                              </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                <div class="media d-flex align-items-start">
                                  <div class="media-left"><i class="feather icon-file font-medium-5 warning"></i></div>
                                  <div class="media-body">
                                    <h6 class="warning media-heading">Generate monthly report</h6><small
                                      class="notification-text">Chocolate cake oat cake tiramisu marzipan</small>
                                  </div><small>
                                    <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Last
                                      month</time></small>
                                </div>
                              </a>
                              <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                              </div>
                              <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                              </div>
                            </li>
                            <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center"
                                href="javascript:void(0)">Read all notifications</a></li>
                          </ul>
                        </li>
                        <li class="nav-item nav-search"><a class="nav-link"><i class="ficon feather icon-search"></i></a>
                          <div class="search-input">
                            <div class="search-input-icon"><i class="feather icon-search primary"></i></div>
                          </div>
                        </li>
                        <li class="dropdown dropdown-user nav-item"><a
                            class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">John
                                Doe</span><span class="user-status">Available</span></div><span><img class="round"
                                src="{{ asset('images/portrait/small/avatar-s-11.jpg') }}" alt="avatar" height="40"
                                width="40"></span>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i
                                class="feather icon-user"></i> Edit Profile</a><a class="dropdown-item" href="#"><i
                                class="feather icon-mail"></i> My Inbox</a><a class="dropdown-item" href="#"><i
                                class="feather icon-check-square"></i> Task</a><a class="dropdown-item" href="#"><i
                                class="feather icon-message-square"></i> Chats</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i
                                class="feather icon-power"></i> Logout</a>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Navbar Themes Ends --}}

  {{-- Navbar Collapsed Starts --}}
  <section id="navbar-collapsed">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">
              Collapsed Navbar
            </h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <div class="collapse" id="navbarToggleExternalContent">
                <div class="bg-dark p-1">
                  <ul class="nav flex-column">
                    <li class="nav-item">
                      <a class="nav-link text-white active" href="#">Active</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                  </ul>
                </div>
              </div>
              <nav class="navbar navbar-dark bg-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                  data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                  aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Navbar Collapse Ends --}}

  {{-- Navbar Placement Starts --}}
  <section id="navbar-placement">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Placement</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p class="mb-2">
                Use our position utilities to place navbars in non-static positions. Choose from fixed to the top, fixed
                to the bottom, or stickied to the top (scrolls with the page until it reaches the top, then stays
                there).for fixed top use <code>.fixed-top</code>, fixed bottom use <code>.fixed-footer</code>,sticky top
                use <code>.sticky-top</code>
              </p>
              <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-dark bg-primary navbar-shadow">
                <div class="navbar-wrapper">
                  <div class="navbar-container content">
                    <div class="navbar-collapse" id="navbar-mobile-8">
                      <ul class="nav navbar-nav bookmark-icons mr-auto float-left">
                        <li class="nav-item mobile-menu d-xl-none mr-auto">
                          <a class="nav-link nav-menu-main hidden-xs menu-toggle is-active" href="#">
                            <i class="ficon feather icon-menu"></i>
                          </a>
                        </li>
                        <li class="nav-item d-none d-lg-block">
                          <a class="nav-link" href="#" data-toggle="tooltip" data-placement="top" title=""
                            data-original-title="Todo">
                            <i class="ficon feather icon-check-square"></i>
                          </a>
                        </li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-toggle="tooltip"
                            data-placement="top" title="" data-original-title="Chat"><i
                              class="ficon feather icon-message-square"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-toggle="tooltip"
                            data-placement="top" title="" data-original-title="Email"><i class="ficon feather icon-mail"></i></a>
                        </li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-toggle="tooltip"
                            data-placement="top" title="" data-original-title="Calendar"><i
                              class="ficon feather icon-calendar"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link"><i
                              class="ficon feather icon-star warning"></i></a>
                        </li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link "><i
                              class="ficon feather icon-maximize"></i></a></li>
                      </ul>
                      <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link"
                            id="dropdown-flag-8" href="#" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span
                              class="selected-language">English</span></a>
                        </li>
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#"
                            data-toggle="dropdown"><i class="ficon feather icon-bell"></i><span
                              class="badge badge-pill badge-danger badge-up">5</span></a>
                        </li>
                        <li class="nav-item nav-search"><a class="nav-link"><i class="ficon feather icon-search"></i></a>
                          <div class="search-input">
                            <div class="search-input-icon"><i class="feather icon-search primary"></i></div>
                          </div>
                        </li>
                        <li class="dropdown dropdown-user nav-item"><a
                            class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">John
                                Doe</span><span class="user-status">Available</span></div><span><img class="round"
                                src="{{ asset('images/portrait/small/avatar-s-11.jpg') }}" alt="avatar" height="40"
                                width="40"></span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Navbar Placement Ends --}}
</section>
@endsection
