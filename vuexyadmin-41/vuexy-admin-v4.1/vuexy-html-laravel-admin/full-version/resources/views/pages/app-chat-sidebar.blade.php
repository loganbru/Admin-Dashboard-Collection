
@section('content-sidebar')
<!-- User Chat profile area -->
<div class="chat-profile-sidebar">
        <header class="chat-profile-header">
          <span class="close-icon">
            <i class="feather icon-x"></i>
          </span>
          <div class="header-profile-sidebar">
            <div class="avatar">
              <img src="{{ asset('images/portrait/small/avatar-s-11.jpg') }}" alt="user_avatar" height="70" width="70">
              <span class="avatar-status-online avatar-status-lg"></span>
            </div>
            <h4 class="chat-user-name">John Doe</h4>
          </div>
        </header>
        <div class="profile-sidebar-area">
          <div class="scroll-area">
            <h6>About</h6>
            <div class="about-user">
              <fieldset class="mb-0">
                  <textarea data-length="120" class="form-control char-textarea" id="textarea-counter" rows="5" placeholder="About User">Dessert chocolate cake lemon drops jujubes. Biscuit cupcake ice cream bear claw brownie brownie marshmallow.</textarea>
              </fieldset>
              <small class="counter-value float-right"><span class="char-count">108</span> / 120 </small>
            </div>
            <h6 class="mt-3">Status</h6>
            <ul class="list-unstyled user-status mb-0">
              <li class="pb-50">
                <fieldset>
                  <div class="vs-radio-con vs-radio-success">
                    <input type="radio" name="userStatus" value="online" checked="checked">
                    <span class="vs-radio">
                      <span class="vs-radio--border"></span>
                      <span class="vs-radio--circle"></span>
                    </span>
                    <span class="">Active</span>
                  </div>
                </fieldset>
              </li>
              <li class="pb-50">
                <fieldset>
                  <div class="vs-radio-con vs-radio-danger">
                    <input type="radio" name="userStatus" value="busy">
                    <span class="vs-radio">
                      <span class="vs-radio--border"></span>
                      <span class="vs-radio--circle"></span>
                    </span>
                    <span class="">Do Not Disturb</span>
                  </div>
                </fieldset>
              </li>
              <li class="pb-50">
                <fieldset>
                  <div class="vs-radio-con vs-radio-warning">
                    <input type="radio" name="userStatus" value="away">
                    <span class="vs-radio">
                      <span class="vs-radio--border"></span>
                      <span class="vs-radio--circle"></span>
                    </span>
                    <span class="">Away</span>
                  </div>
                </fieldset>
              </li>
              <li class="pb-50">
                <fieldset>
                  <div class="vs-radio-con vs-radio-secondary">
                    <input type="radio" name="userStatus" value="offline">
                    <span class="vs-radio">
                      <span class="vs-radio--border"></span>
                      <span class="vs-radio--circle"></span>
                    </span>
                    <span class="">Offline</span>
                  </div>
                </fieldset>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!--/ User Chat profile area -->
      <!-- Chat Sidebar area -->
      <div class="sidebar-content card">
          <span class="sidebar-close-icon">
            <i class="feather icon-x"></i>
          </span>
          <div class="chat-fixed-search">
              <div class="d-flex align-items-center">
                <div class="sidebar-profile-toggle position-relative d-inline-flex">
                  <div class="avatar">
                    <img src="{{ asset('images/portrait/small/avatar-s-11.jpg') }}" alt="user_avatar" height="40" width="40">
                    <span class="avatar-status-online"></span>
                  </div>
                  <div class="bullet-success bullet-sm position-absolute"></div>
                </div>
                <fieldset class="form-group position-relative has-icon-left mx-1 my-0 w-100">
                    <input type="text" class="form-control round" id="chat-search" placeholder="Search or start a new chat">
                    <div class="form-control-position">
                        <i class="feather icon-search"></i>
                    </div>
                </fieldset>
              </div>
          </div>
          <div id="users-list" class="chat-user-list list-group position-relative">
              <h3 class="primary p-1 mb-0">Chats</h3>
              <ul class="chat-users-list-wrapper media-list">
                <li>
                    <div class="pr-1">
                        <span class="avatar m-0 avatar-md"><img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-3.jpg') }}" height="42" width="42" alt="Generic placeholder image">
                        <i></i>
                        </span>
                    </div>
                    <div class="user-chat-info">
                      <div class="contact-info">
                        <h5 class="font-weight-bold mb-0">Elizabeth Elliott</h5>
                        <p class="truncate">Cake pie jelly jelly beans. Marzipan lemon drops halvah cake. Pudding cookie lemon drops icing</p>
                      </div>
                      <div class="contact-meta">
                        <span class="float-right mb-25">4:14 PM</span>
                        <span class="badge badge-primary badge-pill float-right">3</span>
                      </div>
                    </div>
                </li>
                <li>
                    <div class="pr-1">
                        <span class="avatar m-0 avatar-md"><img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-7.jpg') }}" height="42" width="42" alt="Generic placeholder image">
                        <i></i>
                        </span>
                    </div>
                    <div class="user-chat-info">
                      <div class="contact-info">
                        <h5 class="font-weight-bold mb-0">Kristopher Candy</h5>
                        <p class="truncate">Cake pie jelly jelly beans. Marzipan lemon drops halvah cake. Pudding cookie lemon drops icing</p>
                      </div>
                      <div class="contact-meta">
                        <span class="float-right mb-25">9:09 AM</span>
                      </div>
                    </div>
                </li>
              </ul>
              <h3 class="primary p-1 mb-0">Contacts</h3>
              <ul class="chat-users-list-wrapper media-list">
                <li>
                    <div class="pr-1">
                        <span class="avatar m-0 avatar-md"><img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-8.jpg') }}" height="42" width="42" alt="Generic placeholder image">
                        <i></i>
                        </span>
                    </div>
                    <div class="user-chat-info">
                      <div class="contact-info">
                        <h5 class="font-weight-bold mb-0">Sarah Woods</h5>
                        <p class="truncate">Cake pie jelly jelly beans. Marzipan lemon drops halvah cake. Pudding cookie lemon drops icing.</p>
                      </div>
                      <div class="contact-meta">
                        <span class="float-right mb-25"></span>
                      </div>
                    </div>
                </li>
                <li>
                    <div class="pr-1">
                        <span class="avatar m-0 avatar-md"><img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-7.jpg') }}" height="42" width="42" alt="Generic placeholder image">
                        <i></i>
                        </span>
                    </div>
                    <div class="user-chat-info">
                      <div class="contact-info">
                        <h5 class="font-weight-bold mb-0">Jenny Perich</h5>
                        <p class="truncate">Tart dragée carrot cake chocolate bar. Chocolate cake jelly beans caramels tootsie roll candy canes.</p>
                      </div>
                      <div class="contact-meta">
                        <span class="float-right mb-25"></span>
                      </div>
                    </div>
                </li>
                <li>
                    <div class="pr-1">
                        <span class="avatar m-0 avatar-md"><img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-5.jpg') }}" height="42" width="42" alt="Generic placeholder image">
                        <i></i>
                        </span>
                    </div>
                    <div class="user-chat-info">
                      <div class="contact-info">
                        <h5 class="font-weight-bold mb-0">Sarah Montgomery</h5>
                        <p class="truncate">Tootsie roll sesame snaps biscuit icing jelly-o biscuit chupa chups powder.</p>
                      </div>
                      <div class="contact-meta">
                        <span class="float-right mb-25"></span>
                      </div>
                    </div>
                </li>
                <li>
                    <div class="pr-1">
                        <span class="avatar m-0 avatar-md"><img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-9.jpg') }}" height="42" width="42" alt="Generic placeholder image">
                        <i></i>
                        </span>
                    </div>
                    <div class="user-chat-info">
                      <div class="contact-info">
                        <h5 class="font-weight-bold mb-0">Heather Howell</h5>
                        <p class="truncate">Tart cookie dragée sesame snaps halvah. Fruitcake sugar plum gummies cheesecake toffee.</p>
                      </div>
                      <div class="contact-meta">
                        <span class="float-right mb-25"></span>
                      </div>
                    </div>
                </li>
                <li>
                    <div class="pr-1">
                        <span class="avatar m-0 avatar-md"><img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-7.jpg') }}" height="42" width="42" alt="Generic placeholder image">
                        <i></i>
                        </span>
                    </div>
                    <div class="user-chat-info">
                      <div class="contact-info">
                        <h5 class="font-weight-bold mb-0">Kelly Reyes</h5>
                        <p class="truncate">Wafer toffee tart jelly cake croissant chocolate bar cupcake donut. Fruitcake gingerbread tiramisu sweet jelly-o.</p>
                      </div>
                      <div class="contact-meta">
                        <span class="float-right mb-25"></span>
                      </div>
                    </div>
                </li>
                <li>
                    <div class="pr-1">
                        <span class="avatar m-0 avatar-md"><img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-14.jpg') }}" height="42" width="42" alt="Generic placeholder image">
                        <i></i>
                        </span>
                    </div>
                    <div class="user-chat-info">
                      <div class="contact-info">
                        <h5 class="font-weight-bold mb-0">Vincent Nelson</h5>
                        <p class="truncate">Toffee gummi bears sugar plum gummi bears chocolate bar donut. Pudding cookie lemon drops icing</p>
                      </div>
                      <div class="contact-meta">
                        <span class="float-right mb-25"></span>
                      </div>
                    </div>
                </li>
                <li>
                    <div class="pr-1">
                        <span class="avatar m-0 avatar-md"><img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-3.jpg') }}" height="42" width="42" alt="Generic placeholder image">
                        <i></i>
                        </span>
                    </div>
                    <div class="user-chat-info">
                      <div class="contact-info">
                        <h5 class="font-weight-bold mb-0">Elizabeth Elliott</h5>
                        <p class="truncate">Candy canes ice cream jelly beans carrot cake chocolate bar pastry candy jelly-o.</p>
                      </div>
                      <div class="contact-meta">
                        <span class="float-right mb-25"></span>
                      </div>
                    </div>
                </li>
                <li>
                    <div class="pr-1">
                        <span class="avatar m-0 avatar-md"><img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-7.jpg') }}" height="42" width="42" alt="Generic placeholder image">
                        <i></i>
                        </span>
                    </div>
                    <div class="user-chat-info">
                      <div class="contact-info">
                        <h5 class="font-weight-bold mb-0">Kristopher Candy</h5>
                        <p class="truncate">Marzipan bonbon chocolate bar biscuit lemon drops muffin jelly-o sweet jujubes.</p>
                      </div>
                      <div class="contact-meta">
                        <span class="float-right mb-25"></span>
                      </div>
                    </div>
                </li>
              </ul>
          </div>
      </div>
      <!--/ Chat Sidebar area -->

@endsection
