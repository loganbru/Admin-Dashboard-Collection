@extends('layouts/contentLayoutMaster')

@section('title', 'Pills')

@section('content')
{{-- Basic and Outline Pills start --}}
<section id="basic-and-outline-pills">
    <div class="row match-height">
      <div class="col-xl-6 col-lg-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Basic</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>
                Use class <code>.nav-pills</code> with <code>.nav</code> class to create tabs with pills
              </p>
              <ul class="nav nav-pills">
                <li class="nav-item">
                  <a class="nav-link" id="home-tab" data-toggle="pill" href="#home" aria-expanded="true">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" id="profile-tab" data-toggle="pill" href="#profile"
                    aria-expanded="false">Profile</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                    aria-expanded="false">
                    Dropdown
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" id="dropdown1-tab" href="#dropdown1" data-toggle="pill"
                      aria-expanded="true">@fat</a>
                    <a class="dropdown-item" id="dropdown2-tab" href="#dropdown2" data-toggle="pill"
                      aria-expanded="true">@mdo</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="about-tab" data-toggle="pill" href="#about" aria-expanded="false">About</a>
                </li>
              </ul>
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane" id="home" aria-labelledby="home-tab" aria-expanded="true">
                  <p>Candy canes donut chupa chups candy canes lemon drops oat cake wafer. Cotton candy candy canes
                    marzipan carrot cake. Sesame snaps lemon drops candy marzipan donut brownie tootsie roll. Icing
                    croissant bonbon biscuit gummi bears.</p>
                </div>
                <div class="tab-pane active" id="profile" role="tabpanel" aria-labelledby="profile-tab"
                  aria-expanded="false">
                  <p>Pudding candy canes sugar plum cookie chocolate cake powder croissant. Carrot cake tiramisu danish
                    candy cake muffin croissant tart dessert. Tiramisu caramels candy canes chocolate cake sweet roll
                    liquorice icing cupcake.</p>
                </div>
                <div class="tab-pane" id="dropdown1" role="tabpanel" aria-labelledby="dropdown1-tab"
                  aria-expanded="false">
                  <p>Cake croissant lemon drops gummi bears carrot cake biscuit cupcake croissant. Macaroon lemon drops
                    muffin jelly sugar plum chocolate cupcake danish icing. Soufflé tootsie roll lemon drops sweet roll
                    cake icing cookie halvah cupcake.</p>
                </div>
                <div class="tab-pane" id="dropdown2" role="tabpanel" aria-labelledby="dropdown2-tab"
                  aria-expanded="false">
                  <p>Chocolate croissant cupcake croissant jelly donut. Cheesecake toffee apple pie chocolate bar biscuit
                    tart croissant. Lemon drops danish cookie. Oat cake macaroon icing tart lollipop cookie sweet bear
                    claw.</p>
                </div>
                <div class="tab-pane" id="about" role="tabpanel" aria-labelledby="about-tab" aria-expanded="false">
                  <p>Carrot cake dragée chocolate. Lemon drops ice cream wafer gummies dragée. Chocolate bar liquorice
                    cheesecake cookie chupa chups marshmallow oat cake biscuit. Dessert toffee fruitcake ice cream powder
                    tootsie roll cake.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-lg-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Active Border Pills</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>Use <code>.nav-active-bordered-pill</code> class to <code>.nav-pills</code> for bordered type pills. </p>
              <ul class="nav nav-pills nav-active-bordered-pill">
                <li class="nav-item">
                  <a class="nav-link active" id="base-pill31" data-toggle="pill" href="#pill31" aria-expanded="true">Pill
                    1</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="base-pill32" data-toggle="pill" href="#pill32" aria-expanded="false">Pill 2</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="base-pill33" data-toggle="pill" href="#pill33" aria-expanded="false">Pill 3</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled">Disabled</a>
                </li>
              </ul>
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="pill31" aria-expanded="true"
                  aria-labelledby="base-pill31">
                  <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot
                    cake. Jelly beans carrot cake marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                </div>
                <div class="tab-pane" id="pill32" aria-labelledby="base-pill32">
                  <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake
                    jelly chupa chups. Pudding caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.
                  </p>
                </div>
                <div class="tab-pane" id="pill33" aria-labelledby="base-pill33">
                  <p>Biscuit ice cream halvah candy canes bear claw ice cream cake chocolate bar donut. Toffee cotton
                    candy liquorice. Oat cake lemon drops gingerbread dessert caramels. Sweet dessert jujubes powder sweet
                    sesame snaps.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Basic and Outline Pills end --}}

  {{-- Filled Pills Start --}}
  <section id="filled-pills">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Filled</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>Force your <code>.nav</code> contents to extend the full available width one of two modifier classes. To
                proportionately fill all available space with your <code>.nav-items</code>, use <code>.nav-fill</code>.
              </p>
              <ul class="nav nav-pills nav-fill">
                <li class="nav-item">
                  <a class="nav-link" id="home-tab-fill" data-toggle="pill" href="#home-fill"
                    aria-expanded="true">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" id="profile-tab-fill" data-toggle="pill" href="#profile-fill"
                    aria-expanded="false">Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#">
                    Disabled
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="about-tab-fill" data-toggle="pill" href="#about-fill"
                    aria-expanded="false">About</a>
                </li>
              </ul>
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane" id="home-fill" aria-labelledby="home-tab-fill" aria-expanded="true">
                  <p>Candy canes donut chupa chups candy canes lemon drops oat cake wafer. Cotton candy candy canes
                    marzipan carrot cake. Sesame snaps lemon drops candy marzipan donut brownie tootsie roll. Icing
                    croissant bonbon biscuit gummi bears.</p>
                </div>
                <div class="tab-pane active" id="profile-fill" role="tabpanel" aria-labelledby="profile-tab-fill"
                  aria-expanded="false">
                  <p>Pudding candy canes sugar plum cookie chocolate cake powder croissant. Carrot cake tiramisu danish
                    candy cake muffin croissant tart dessert. Tiramisu caramels candy canes chocolate cake sweet roll
                    liquorice icing cupcake.</p>
                </div>
                <div class="tab-pane" id="about-fill" role="tabpanel" aria-labelledby="about-tab-fill"
                  aria-expanded="false">
                  <p>Carrot cake dragée chocolate. Lemon drops ice cream wafer gummies dragée. Chocolate bar liquorice
                    cheesecake cookie chupa chups marshmallow oat cake biscuit. Dessert toffee fruitcake ice cream powder
                    tootsie roll cake.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Filled Pills End --}}

  {{-- Justified Pills Start --}}
  <section id="justified-pills">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Justified</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>
                For equal-width elements, use <code>.nav-justified</code>. All horizontal space will be occupied by nav
                links, but
                unlike the <code>.nav-fill</code> above, every nav item will be the same width.
              </p>
              <ul class="nav nav-pills nav-justified">
                <li class="nav-item">
                  <a class="nav-link" id="home-tab-justified" data-toggle="pill" href="#home-justified"
                    aria-expanded="true">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" id="profile-tab-justified" data-toggle="pill" href="#profile-justified"
                    aria-expanded="false">Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#">
                    Disabled
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="about-tab-justified" data-toggle="pill" href="#about-justified"
                    aria-expanded="false">About</a>
                </li>
              </ul>
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane" id="home-justified" aria-labelledby="home-tab-justified"
                  aria-expanded="true">
                  <p>Candy canes donut chupa chups candy canes lemon drops oat cake wafer. Cotton candy candy canes
                    marzipan carrot cake. Sesame snaps lemon drops candy marzipan donut brownie tootsie roll. Icing
                    croissant bonbon biscuit gummi bears.</p>
                </div>
                <div class="tab-pane active" id="profile-justified" role="tabpanel"
                  aria-labelledby="profile-tab-justified" aria-expanded="false">
                  <p>Pudding candy canes sugar plum cookie chocolate cake powder croissant. Carrot cake tiramisu danish
                    candy cake muffin croissant tart dessert. Tiramisu caramels candy canes chocolate cake sweet roll
                    liquorice icing cupcake.</p>
                </div>
                <div class="tab-pane" id="about-justified" role="tabpanel" aria-labelledby="about-tab-justified"
                  aria-expanded="false">
                  <p>Carrot cake dragée chocolate. Lemon drops ice cream wafer gummies dragée. Chocolate bar liquorice
                    cheesecake cookie chupa chups marshmallow oat cake biscuit. Dessert toffee fruitcake ice cream powder
                    tootsie roll cake.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Justified Pills End --}}

  {{-- Centered Pills Start --}}
  <section id="centered-pills">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Center Alignment</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>
                To force your nav items to center use class <code>.justify-content-center</code> with <code>.nav</code>
              </p>
              <ul class="nav nav-pills justify-content-center">
                <li class="nav-item">
                  <a class="nav-link" id="home-tab-center" data-toggle="pill" href="#home-center"
                    aria-expanded="true">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" id="profile-tab-center" data-toggle="pill" href="#profile-center"
                    aria-expanded="false">Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#">
                    Disabled
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="about-tab-center" data-toggle="pill" href="#about-center"
                    aria-expanded="false">About</a>
                </li>
              </ul>
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane" id="home-center" aria-labelledby="home-tab-center"
                  aria-expanded="true">
                  <p>Candy canes donut chupa chups candy canes lemon drops oat cake wafer. Cotton candy candy canes
                    marzipan carrot cake. Sesame snaps lemon drops candy marzipan donut brownie tootsie roll. Icing
                    croissant bonbon biscuit gummi bears.</p>
                </div>
                <div class="tab-pane active" id="profile-center" role="tabpanel" aria-labelledby="profile-tab-center"
                  aria-expanded="false">
                  <p>Pudding candy canes sugar plum cookie chocolate cake powder croissant. Carrot cake tiramisu danish
                    candy cake muffin croissant tart dessert. Tiramisu caramels candy canes chocolate cake sweet roll
                    liquorice icing cupcake.</p>
                </div>
                <div class="tab-pane" id="about-center" role="tabpanel" aria-labelledby="about-tab-center"
                  aria-expanded="false">
                  <p>Carrot cake dragée chocolate. Lemon drops ice cream wafer gummies dragée. Chocolate bar liquorice
                    cheesecake cookie chupa chups marshmallow oat cake biscuit. Dessert toffee fruitcake ice cream powder
                    tootsie roll cake.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Centered Pills End --}}

  {{-- End Pills Start --}}
  <section id="end-pills">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Right Alignment</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>
                To force your nav items to right use class <code>.justify-content-end</code> with <code>.nav</code>
              </p>
              <ul class="nav nav-pills justify-content-end">
                <li class="nav-item">
                  <a class="nav-link" id="home-tab-end" data-toggle="pill" href="#home-end" aria-expanded="true">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" id="profile-tab-end" data-toggle="pill" href="#profile-end"
                    aria-expanded="false">Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#">
                    Disabled
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="about-tab-end" data-toggle="pill" href="#about-end"
                    aria-expanded="false">About</a>
                </li>
              </ul>
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane" id="home-end" aria-labelledby="home-tab-end" aria-expanded="true">
                  <p>Candy canes donut chupa chups candy canes lemon drops oat cake wafer. Cotton candy candy canes
                    marzipan carrot cake. Sesame snaps lemon drops candy marzipan donut brownie tootsie roll. Icing
                    croissant bonbon biscuit gummi bears.</p>
                </div>
                <div class="tab-pane active" id="profile-end" role="tabpanel" aria-labelledby="profile-tab-end"
                  aria-expanded="false">
                  <p>Pudding candy canes sugar plum cookie chocolate cake powder croissant. Carrot cake tiramisu danish
                    candy cake muffin croissant tart dessert. Tiramisu caramels candy canes chocolate cake sweet roll
                    liquorice icing cupcake.</p>
                </div>
                <div class="tab-pane" id="about-end" role="tabpanel" aria-labelledby="about-tab-end"
                  aria-expanded="false">
                  <p>Carrot cake dragée chocolate. Lemon drops ice cream wafer gummies dragée. Chocolate bar liquorice
                    cheesecake cookie chupa chups marshmallow oat cake biscuit. Dessert toffee fruitcake ice cream powder
                    tootsie roll cake.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- End Pills End --}}

  {{-- Vertical Pills start --}}
  <section id="stacked-pills">
    <div class="row match-height">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Vertically Stacked Pills</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>Use <code>.flex-column</code> class with <code>.nav.nav-pills</code> to stack them vertically. Each
                <code>.nav-link</code> becomes block-level, allowing for larger hit areas via mouse or tap. </p>
              <div class="row">
                <div class="col-md-2 col-sm-12">
                  <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                      <a class="nav-link active" id="stacked-pill-1" data-toggle="pill" href="#vertical-pill-1"
                        aria-expanded="true">
                        Pill 1
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="stacked-pill-2" data-toggle="pill" href="#vertical-pill-2"
                        aria-expanded="false">
                        Pill 2
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="stacked-pill-3" data-toggle="pill" href="#vertical-pill-3"
                        aria-expanded="false">
                        Pill 3
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled">Disabled</a>
                    </li>
                  </ul>
                </div>
                <div class="col-md-10 col-sm-12">
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane" id="vertical-pill-1" aria-labelledby="stacked-pill-1"
                      aria-expanded="true">
                      <p>Candy canes donut chupa chups candy canes lemon drops oat cake wafer. Cotton candy candy canes
                        marzipan carrot cake. Sesame snaps lemon drops candy marzipan donut brownie tootsie roll. Icing
                        croissant bonbon biscuit gummi bears.</p>
                      <p>
                        Bear claw donut sesame snaps bear claw liquorice jelly-o bear claw carrot cake. Sesame snaps wafer
                        marshmallow danish dragée candy muffin jelly beans tootsie roll. Jelly beans oat cake chocolate
                        cake tiramisu sweet.
                      </p>
                    </div>
                    <div class="tab-pane active" id="vertical-pill-2" role="tabpanel" aria-labelledby="stacked-pill-2"
                      aria-expanded="false">
                      <p>Pudding candy canes sugar plum cookie chocolate cake powder croissant. Carrot cake tiramisu
                        danish candy cake muffin croissant tart dessert. Tiramisu caramels candy canes chocolate cake
                        sweet roll
                        liquorice icing cupcake.</p>
                      <p>
                        Icing cake bear claw. Cookie cheesecake sesame snaps liquorice topping lemon drops lollipop
                        powder. Oat cake cupcake danish gingerbread cotton candy carrot cake chocolate bar soufflé.
                      </p>
                    </div>
                    <div class="tab-pane" id="vertical-pill-3" role="tabpanel" aria-labelledby="stacked-pill-3"
                      aria-expanded="false">
                      <p>Carrot cake dragée chocolate. Lemon drops ice cream wafer gummies dragée. Chocolate bar liquorice
                        cheesecake cookie chupa chups marshmallow oat cake biscuit. Dessert toffee fruitcake ice cream
                        powder tootsie roll cake.</p>
                      <p>
                        Macaroon brownie lemon drops croissant marzipan sweet roll macaroon lollipop. Danish fruitcake
                        bonbon bear claw gummi bears apple pie. Chocolate sweet topping fruitcake cake.
                      </p>
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
  {{-- Vertical Pills end --}}

  {{-- Nav Pills Themes Starts --}}
  <section id="nav-pill-themes">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Pill Themes</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>Use class <code>.nav-pill-{color-name}</code> with <code>.nav-pills</code> class to apply color according
                to your choice</p>
              <h6>Success</h6>
              <ul class="nav nav-pills nav-pill-success my-2">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
              </ul>
              <h6>Danger</h6>
              <ul class="nav nav-pills nav-pill-danger my-2">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
              </ul>
              <h6>Info</h6>
              <ul class="nav nav-pills nav-pill-info my-2">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
              </ul>
              <h6>Warning</h6>
              <ul class="nav nav-pills nav-pill-warning my-2">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
{{-- Nav Pills Themes Ends --}}
@endsection
