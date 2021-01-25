@extends('layouts/contentLayoutMaster')

@section('title', 'Drag & Drop')

@section('vendor-style')
        <!-- vendor css files -->
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/dragula.min.css')) }}">
@endsection
@section('page-style')
        <!-- Page css files -->
        <link rel="stylesheet" href="{{ asset(mix('css/plugins/extensions/drag-and-drop.css')) }}">
@endsection
@section('content')
<!-- Draggable cards section start -->
<section id="draggable-cards">
  <div class="row" id="card-drag-area">
    <div class="col-xl-3 col-md-6 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">
            Draggable Card 1
          </h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p class="card-text">
              Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie roll bonbon liquorice tiramisu pie
              powder.Donut sweet roll marzipan pastry cookie cake tootsie roll oat cake cookie.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">
            Draggable Card 2
          </h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p class="card-text">
              Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie roll bonbon liquorice tiramisu pie
              powder.Donut sweet roll marzipan pastry cookie cake tootsie roll oat cake cookie.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">
            Draggable Card 3
          </h4>
        </div>
        <div class="card-content collapse show">
          <div class="card-body">
            <p class="card-text">
              Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie roll bonbon liquorice tiramisu pie
              powder.Donut sweet roll marzipan pastry cookie cake tootsie roll oat cake cookie.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">
            Draggable Card 4
          </h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p class="card-text">
              Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie roll bonbon liquorice tiramisu pie
              powder.Donut sweet roll marzipan pastry cookie cake tootsie roll oat cake cookie.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- // Draggable cards section end -->

<!-- Sortable lists section start -->
<section id="sortable-lists">
  <div class="row">
    <!-- Basic List Group -->
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Basic List Group Sortable</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p> The most basic list group is simply an unordered list with list items, and the proper
              classes.</p>
            <ul class="list-group" id="basic-list-group">
              <li class="list-group-item">
                <div class="media">
                  <img src="{{ asset('images/portrait/small/avatar-s-12.jpg') }}" class="rounded-circle mr-2"
                    alt="img-placeholder" height="50" width="50">
                  <div class="media-body">
                    <h5 class="mt-0">Mary S. Navarre</h5>
                    Chupa chups tiramisu apple pie biscuit sweet roll bonbon macaroon toffee icing.
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="media">
                  <img src="{{ asset('images/portrait/small/avatar-s-1.jpg') }}" class="rounded-circle mr-2"
                    alt="img-placeholder" height="50" width="50">
                  <div class="media-body">
                    <h5 class="mt-0">Samuel M. Ellis</h5>
                    Toffee powder marzipan tiramisu. Cake cake dessert danish.
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="media">
                  <img src="{{ asset('images/portrait/small/avatar-s-2.jpg') }}" class="rounded-circle mr-2"
                    alt="img-placeholder" height="50" width="50">
                  <div class="media-body">
                    <h5 class="mt-0">Sandra C. Toney</h5>
                    Sugar plum fruitcake gummies marzipan liquorice tiramisu. Pastry liquorice chupa chupsake
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="media">
                  <img src="{{ asset('images/portrait/small/avatar-s-3.jpg') }}" class="rounded-circle mr-2"
                    alt="img-placeholder" height="50" width="50">
                  <div class="media-body">
                    <h5 class="mt-0">Cleveland C. Goins</h5>
                    Toffee powder marzipan tiramisu. Cake cake dessert danish.
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="media">
                  <img src="{{ asset('images/portrait/small/avatar-s-4.jpg') }}" class="rounded-circle mr-2"
                    alt="img-placeholder" height="50" width="50">
                  <div class="media-body">
                    <h5 class="mt-0">Linda M. English</h5>
                    Chupa chups tiramisu apple pie biscuit sweet roll bonbon macaroon toffee icing.
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">
            Multiple Lists
          </h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>Drag and drop items of more than one list. Add same group to group prop
            </p>
            <div class="row">
              <div class="col-md-6 col-sm-12">
                <h4 class="my-1">People Group 1</h4>
                <ul class="list-group list-group-flush" id="multiple-list-group-a">
                  <li class="list-group-item">
                    <div class="media">
                      <img src="{{ asset('images/portrait/small/avatar-s-12.jpg') }}" class="rounded-circle mr-2"
                        alt="img-placeholder" height="50" width="50">
                      <div class="media-body">
                        <h5 class="mt-0">Mary S. Navarre</h5>
                        Chupa chups tiramisu apple pie biscuit sweet roll bonbon macaroon.
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <img src="{{ asset('images/portrait/small/avatar-s-1.jpg') }}" class="rounded-circle mr-2"
                        alt="img-placeholder" height="50" width="50">
                      <div class="media-body">
                        <h5 class="mt-0">Samuel M. Ellis</h5>
                        Toffee powder marzipan tiramisu. Cake cake dessert danish.
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <img src="{{ asset('images/portrait/small/avatar-s-2.jpg') }}" class="rounded-circle mr-2"
                        alt="img-placeholder" height="50" width="50">
                      <div class="media-body">
                        <h5 class="mt-0">Sandra C. Toney</h5>
                        Sugar plum fruitcake gummies marzipan liquorice tiramisu.
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <img src="{{ asset('images/portrait/small/avatar-s-3.jpg') }}" class="rounded-circle mr-2"
                        alt="img-placeholder" height="50" width="50">
                      <div class="media-body">
                        <h5 class="mt-0">Cleveland C. Goins</h5>
                        Toffee powder marzipan tiramisu. Cake cake dessert danish.
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <img src="{{ asset('images/portrait/small/avatar-s-4.jpg') }}" class="rounded-circle mr-2"
                        alt="img-placeholder" height="50" width="50">
                      <div class="media-body">
                        <h5 class="mt-0">Linda M. English</h5>
                        Chupa chups tiramisu apple pie biscuit sweet roll bonbon macaroon.
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="col-md-6 col-sm-12">
                <h4 class="my-1">People Group 2</h4>
                <ul class="list-group list-group-flush" id="multiple-list-group-b">
                  <li class="list-group-item">
                    <div class="media">
                      <img src="{{ asset('images/portrait/small/avatar-s-12.jpg') }}" class="rounded-circle mr-2"
                        alt="img-placeholder" height="50" width="50">
                      <div class="media-body">
                        <h5 class="mt-0">Mary S. Navarre</h5>
                        Chupa chups tiramisu apple pie biscuit sweet roll bonbon macaroon.
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <img src="{{ asset('images/portrait/small/avatar-s-1.jpg') }}" class="rounded-circle mr-2"
                        alt="img-placeholder" height="50" width="50">
                      <div class="media-body">
                        <h5 class="mt-0">Samuel M. Ellis</h5>
                        Toffee powder marzipan tiramisu. Cake cake dessert danish.
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <img src="{{ asset('images/portrait/small/avatar-s-2.jpg') }}" class="rounded-circle mr-2"
                        alt="img-placeholder" height="50" width="50">
                      <div class="media-body">
                        <h5 class="mt-0">Sandra C. Toney</h5>
                        Sugar plum fruitcake gummies marzipan liquorice tiramisu
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <img src="{{ asset('images/portrait/small/avatar-s-3.jpg') }}" class="rounded-circle mr-2"
                        alt="img-placeholder" height="50" width="50">
                      <div class="media-body">
                        <h5 class="mt-0">Cleveland C. Goins</h5>
                        Toffee powder marzipan tiramisu. Cake cake dessert danish.
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <img src="{{ asset('images/portrait/small/avatar-s-4.jpg') }}" class="rounded-circle mr-2"
                        alt="img-placeholder" height="50" width="50">
                      <div class="media-body">
                        <h5 class="mt-0">Linda M. English</h5>
                        Chupa chups tiramisu apple pie biscuit sweet roll bonbon macaroon.
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- // Sortable lists section end -->

<!-- Clone List Starts -->
<section id="clone-lists">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Clone List</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>Clone list items from another existing list.</p>
            <div class="row">
              <div class="col-md-6 col-sm-12">
                <h4 class="my-1">Chip Source 1</h4>
                <div id="chips-list-1">
                  <div class="chip mr-1">
                    <div class="chip-body">
                      <span class="chip-text">Youtube</span>
                    </div>
                  </div>
                  <div class="chip chip-primary mr-1">
                    <div class="chip-body">
                      <span class="chip-text">Facebook</span>
                    </div>
                  </div>
                  <div class="chip chip-success mr-1">
                    <div class="chip-body">
                      <span class="chip-text">Google</span>
                    </div>
                  </div>
                  <div class="chip chip-danger mr-1">
                    <div class="chip-body">
                      <span class="chip-text">Instagram</span>
                    </div>
                  </div>
                  <div class="chip chip-info mr-1">
                    <div class="chip-body">
                      <span class="chip-text">Discord</span>
                    </div>
                  </div>
                  <div class="chip chip-warning mr-1">
                    <div class="chip-body">
                      <span class="chip-text">Twitter</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-12">
                <h4 class="my-1">Chip Source 2</h4>
                <div id="chips-list-2">
                  <div class="chip mr-1">
                    <div class="chip-body">
                      <span class="chip-text">Github</span>
                    </div>
                  </div>
                  <div class="chip chip-primary mr-1">
                    <div class="chip-body">
                      <span class="chip-text">Gitlab</span>
                    </div>
                  </div>
                  <div class="chip chip-success mr-1">
                    <div class="chip-body">
                      <span class="chip-text">Slack</span>
                    </div>
                  </div>
                  <div class="chip chip-danger mr-1">
                    <div class="chip-body">
                      <span class="chip-text">Pintrest</span>
                    </div>
                  </div>
                  <div class="chip chip-info mr-1">
                    <div class="chip-body">
                      <span class="chip-text">Tinder</span>
                    </div>
                  </div>
                  <div class="chip chip-warning mr-1">
                    <div class="chip-body">
                      <span class="chip-text">Amazon</span>
                    </div>
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
<!-- // Clone List Ends -->

<!-- With Handle Starts -->
<section id="dd-with-handle">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Drag And Drop With Handle</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>You have to customize drag handle yourself using class <code>.handle</code></p>
            <div class="row">
              <div class="col-sm-6">
                <h4 class="my-1">List One</h4>
                <ul class="list-group" id="handle-list-1">
                  <li class="list-group-item"><span class="handle">+</span> Cras justo odio</li>
                  <li class="list-group-item"><span class="handle">+</span> Dapibus ac facilisis in</li>
                  <li class="list-group-item"><span class="handle">+</span> Morbi leo risus</li>
                  <li class="list-group-item"><span class="handle">+</span> Porta ac consectetur ac</li>
                  <li class="list-group-item"><span class="handle">+</span> Vestibulum at eros</li>
                </ul>
              </div>
              <div class="col-sm-6">
                <h4 class="my-1">List Two</h4>
                <ul class="list-group" id="handle-list-2">
                  <li class="list-group-item"><span class="handle">+</span> Cras justo odio</li>
                  <li class="list-group-item"><span class="handle">+</span> Dapibus ac facilisis in</li>
                  <li class="list-group-item"><span class="handle">+</span> Morbi leo risus</li>
                  <li class="list-group-item"><span class="handle">+</span> Porta ac consectetur ac</li>
                  <li class="list-group-item"><span class="handle">+</span> Vestibulum at eros</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- // With Handle Ends -->
@endsection

@section('vendor-script')
        <!-- vendor files -->
        <script src="{{ asset(mix('vendors/js/extensions/dragula.min.js')) }}"></script>
@endsection
@section('page-script')
        <!-- Page js files -->
        <script src="{{ asset(mix('js/scripts/extensions/drag-drop.js')) }}"></script>
@endsection
