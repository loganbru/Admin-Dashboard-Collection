@extends('layouts/contentLayoutMaster')

@section('title', 'Tabs')

@section('content')
{{-- Basic tabs start --}}
<section id="basic-tabs-components">
    <div class="row">
      <div class="col-sm-12">
        <div class="card overflow-hidden">
          <div class="card-header">
            <h4 class="card-title">Basic Tab</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>Takes the basic nav and adds the <code>.nav-tabs</code> class to generate a tabbed interface.</p>
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                  <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" aria-controls="home" role="tab"
                    aria-selected="true">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" aria-controls="profile"
                    role="tab" aria-selected="false">Service</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link disabled">Disabled</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="about-tab" data-toggle="tab" href="#about" aria-controls="about" role="tab"
                    aria-selected="false">Account</a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane" id="home" aria-labelledby="home-tab" role="tabpanel">
                  <p>Candy canes donut chupa chups candy canes lemon drops oat cake wafer. Cotton candy candy canes
                    marzipan carrot cake. Sesame snaps lemon drops candy marzipan donut brownie tootsie roll. Icing
                    croissant bonbon biscuit gummi bears.</p>
                </div>
                <div class="tab-pane active" id="profile" aria-labelledby="profile-tab" role="tabpanel">
                  <p>Pudding candy canes sugar plum cookie chocolate cake powder croissant. Carrot cake tiramisu danish
                    candy cake muffin croissant tart dessert. Tiramisu caramels candy canes chocolate cake sweet roll
                    liquorice icing cupcake.</p>
                </div>
                <div class="tab-pane" id="dropdown31" role="tabpanel" aria-labelledby="dropdown31-tab"
                  aria-expanded="false">
                  <p>Cake croissant lemon drops gummi bears carrot cake biscuit cupcake croissant. Macaroon lemon drops
                    muffin jelly sugar plum chocolate cupcake danish icing. Soufflé tootsie roll lemon drops sweet roll
                    cake icing cookie halvah cupcake.</p>
                </div>
                <div class="tab-pane" id="dropdown32" role="tabpanel" aria-labelledby="dropdown32-tab"
                  aria-expanded="false">
                  <p>Chocolate croissant cupcake croissant jelly donut. Cheesecake toffee apple pie chocolate bar biscuit
                    tart croissant. Lemon drops danish cookie. Oat cake macaroon icing tart lollipop cookie sweet bear
                    claw.</p>
                </div>
                <div class="tab-pane" id="about" aria-labelledby="about-tab" role="tabpanel">
                  <p>Carrot cake dragée chocolate. Lemon drops ice cream wafer gummies dragée. Chocolate bar liquorice
                    cheesecake cookie chupa chups marshmallow oat cake biscuit. Dessert toffee fruitcake ice cream
                    powder
                    tootsie roll cake.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Basic Tag Input end --}}

  {{-- Vertical Tabs start --}}
  <section id="vertical-tabs">
    <div class="row">
      <div class="col-12 mt-3 mb-1">
        <h4 class="text-uppercase">Vertical Tabs</h4>
      </div>
    </div>
    <div class="row match-height">
      <div class="col-xl-6 col-lg-12">
        <div class="card overflow-hidden">
          <div class="card-header">
            <h4 class="card-title">Vertical Left Tabs</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>Wrap tabs and tab content with <code>.nav-vertical</code> class. To add left navigation use
                <code>.nav-left</code> class to <code>.nav.nav-tabs</code>.</p>
              <div class="nav-vertical">
                <ul class="nav nav-tabs nav-left flex-column" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="baseVerticalLeft-tab1" data-toggle="tab"
                      aria-controls="tabVerticalLeft1" href="#tabVerticalLeft1" role="tab" aria-selected="true">Tab
                      1</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="baseVerticalLeft-tab2" data-toggle="tab" aria-controls="tabVerticalLeft2"
                      href="#tabVerticalLeft2" role="tab" aria-selected="false">Tab 2</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="baseVerticalLeft-tab3" data-toggle="tab" aria-controls="tabVerticalLeft3"
                      href="#tabVerticalLeft3" role="tab" aria-selected="false">Tab 3 </a>
                  </li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="tabVerticalLeft1" role="tabpanel"
                    aria-labelledby="baseVerticalLeft-tab1">
                    <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake
                      carrot
                      cake. Jelly beans carrot cake marshmallow gingerbread chocolate cake. Gummies cupcake croissant.
                    </p>
                  </div>
                  <div class="tab-pane" id="tabVerticalLeft2" role="tabpanel" aria-labelledby="baseVerticalLeft-tab2">
                    <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake
                      fruitcake
                      jelly chupa chups. Pudding caramels pastry powder cake soufflé wafer caramels. Jelly-o pie
                      cupcake.
                    </p>
                  </div>
                  <div class="tab-pane" id="tabVerticalLeft3" role="tabpanel" aria-labelledby="baseVerticalLeft-tab3">
                    <p>Biscuit ice cream halvah candy canes bear claw ice cream cake chocolate bar donut. Toffee cotton
                      candy liquorice. Oat cake lemon drops gingerbread dessert caramels. Sweet dessert jujubes powder
                      sweet sesame snaps.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-lg-12">
        <div class="card overflow-hidden">
          <div class="card-header">
            <h4 class="card-title">Vertical Right Tabs</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>Wrap tabs and tab content with <code>.nav-vertical</code> class. To add right navigation use
                <code>.nav-right</code> class to <code>.nav.nav-tabs</code>.</p>
              <div class="nav-vertical">
                <ul class="nav nav-tabs nav-right flex-column" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="baseVerticalRight-tab1" data-toggle="tab"
                      aria-controls="tabVerticalRight1" href="#tabVerticalRight1" role="tab" aria-selected="true">Tab
                      1</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="baseVerticalRight-tab2" data-toggle="tab" aria-controls="tabVerticalRight2"
                      href="#tabVerticalRight2" role="tab" aria-selected="false">Tab 2</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="baseVerticalRight-tab3" data-toggle="tab" aria-controls="tabVerticalRight3"
                      href="#tabVerticalRight3" role="tab" aria-selected="false">Tab 3 </a>
                  </li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="tabVerticalRight1" role="tabpanel"
                    aria-labelledby="baseVerticalRight-tab1">
                    <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake
                      carrot
                      cake. Jelly beans carrot cake marshmallow gingerbread chocolate cake. Gummies cupcake croissant.
                    </p>
                  </div>
                  <div class="tab-pane" id="tabVerticalRight2" role="tabpanel" aria-labelledby="baseVerticalRight-tab2">
                    <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake
                      fruitcake
                      jelly chupa chups. Pudding caramels pastry powder cake soufflé wafer caramels. Jelly-o pie
                      cupcake.
                    </p>
                  </div>
                  <div class="tab-pane" id="tabVerticalRight3" role="tabpanel" aria-labelledby="baseVerticalRight-tab3">
                    <p>Biscuit ice cream halvah candy canes bear claw ice cream cake chocolate bar donut. Toffee cotton
                      candy liquorice. Oat cake lemon drops gingerbread dessert caramels. Sweet dessert jujubes powder
                      sweet sesame snaps.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Vertical Tabs end --}}

  {{-- Nav Filled Starts --}}
  <section id="nav-filled">
    <div class="row">
      <div class="col-sm-12">
        <div class="card overflow-hidden">
          <div class="card-header">
            <h4 class="card-title">Filled</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>Force your <code>.nav</code> contents to extend the full available width one of two modifier classes.
                To proportionately fill all available space with your <code>.nav-items</code>, use
                <code>.nav-fill</code>.
              </p>
              {{-- Nav tabs --}}
              <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab-fill" data-toggle="tab" href="#home-fill" role="tab"
                    aria-controls="home-fill" aria-selected="true">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab-fill" data-toggle="tab" href="#profile-fill" role="tab"
                    aria-controls="profile-fill" aria-selected="false">Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="messages-tab-fill" data-toggle="tab" href="#messages-fill" role="tab"
                    aria-controls="messages-fill" aria-selected="false">Messages</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="settings-tab-fill" data-toggle="tab" href="#settings-fill" role="tab"
                    aria-controls="settings-fill" aria-selected="false">Settings</a>
                </li>
              </ul>

              {{-- Tab panes --}}
              <div class="tab-content pt-1">
                <div class="tab-pane active" id="home-fill" role="tabpanel" aria-labelledby="home-tab-fill">
                  <p>
                    Biscuit powder jelly beans. Lollipop candy canes croissant icing chocolate cake. Cake fruitcake powder
                    pudding pastry.</p>
                  <p>
                    Tootsie roll oat cake I love bear claw I love caramels caramels halvah chocolate bar. Cotton candy
                    gummi
                    bears pudding pie apple pie cookie. Cheesecake jujubes lemon drops danish dessert I love caramels
                    powder.
                  </p>
                </div>
                <div class="tab-pane" id="profile-fill" role="tabpanel" aria-labelledby="profile-tab-fill">
                  <p>
                    Tootsie roll oat cake I love bear claw I love caramels caramels halvah chocolate bar. Cotton candy
                    gummi
                    bears pudding pie apple pie cookie. Cheesecake jujubes lemon drops danish dessert I love caramels
                    powder.
                  </p>
                </div>
                <div class="tab-pane" id="messages-fill" role="tabpanel" aria-labelledby="messages-tab-fill">
                  <p>
                    Biscuit powder jelly beans. Lollipop candy canes croissant icing chocolate cake. Cake fruitcake powder
                    pudding pastry.
                  </p>
                </div>
                <div class="tab-pane" id="settings-fill" role="tabpanel" aria-labelledby="settings-tab-fill">
                  <p>
                    Tootsie roll oat cake I love bear claw I love caramels caramels halvah chocolate bar. Cotton candy
                    gummi
                    bears pudding pie apple pie cookie. Cheesecake jujubes lemon drops danish dessert I love caramels
                    powder.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Nav Filled Ends --}}

  {{-- Nav Justified Starts --}}
  <section id="nav-justified">
    <div class="row">
      <div class="col-sm-12">
        <div class="card overflow-hidden">
          <div class="card-header">
            <h4 class="card-title">Justified</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>For equal-width elements, use <code>.nav-justified</code>. All horizontal space will be occupied by nav
                links, but unlike the <code>.nav-fill</code> above, every nav item will be the same width.</p>
              <ul class="nav nav-tabs nav-justified" id="myTab2" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab-justified" data-toggle="tab" href="#home-just" role="tab"
                    aria-controls="home-just" aria-selected="true">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab-justified" data-toggle="tab" href="#profile-just" role="tab"
                    aria-controls="profile-just" aria-selected="true">Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="messages-tab-justified" data-toggle="tab" href="#messages-just" role="tab"
                    aria-controls="messages-just" aria-selected="false">Messages</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="settings-tab-justified" data-toggle="tab" href="#settings-just" role="tab"
                    aria-controls="settings-just" aria-selected="false">Settings</a>
                </li>
              </ul>

              {{-- Tab panes --}}
              <div class="tab-content pt-1">
                <div class="tab-pane active" id="home-just" role="tabpanel" aria-labelledby="home-tab-justified">
                  <p>
                    Biscuit powder jelly beans. Lollipop candy canes croissant icing chocolate cake. Cake fruitcake powder
                    pudding pastry.Danish fruitcake bonbon bear claw gummi bears apple pie. Chocolate sweet topping
                    fruitcake cake.</p>
                </div>
                <div class="tab-pane" id="profile-just" role="tabpanel" aria-labelledby="profile-tab-justified">
                  <p>
                    Chocolate cake icing tiramisu liquorice toffee donut sweet roll cake. Cupcake dessert icing dragée
                    dessert. Liquorice jujubes cake tart pie donut. Cotton candy candy canes lollipop liquorice chocolate
                    marzipan muffin pie liquorice.
                  </p>
                </div>
                <div class="tab-pane" id="messages-just" role="tabpanel" aria-labelledby="messages-tab-justified">
                  <p>
                    Tootsie roll oat cake I love bear claw I love caramels caramels halvah chocolate bar. Cotton candy
                    gummi bears pudding pie apple pie cookie. Cheesecake jujubes lemon drops danish dessert I love
                    caramels powder.
                  </p>
                </div>
                <div class="tab-pane" id="settings-just" role="tabpanel" aria-labelledby="settings-tab-justified">
                  <p>
                    Biscuit powder jelly beans. Lollipop candy canes croissant icing chocolate cake. Cake fruitcake powder
                    pudding pastry.I love caramels caramels halvah chocolate bar. Cotton candy
                    gummi bears pudding pie apple pie cookie.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Nav Justified Ends --}}

  {{-- Nav Centered And Nav End Starts --}}
  <section id="nav-tabs-centered">
    <div class="row">
      <div class="col-sm-12">
        <div class="card overflow-hidden">
          <div class="card-header">
            <h4 class="card-title">Center</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>Use class <code>.justify-content-center</code> to align your menu to center</p>
              <ul class="nav nav-tabs justify-content-center" role="tablist">
                <li class="nav-item">
                  <a class="nav-link" id="home-tab-center" data-toggle="tab" href="#home-center"
                    aria-controls="home-center" role="tab" aria-selected="true">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" id="service-tab-center" data-toggle="tab" href="#service-center"
                    aria-controls="service-center" role="tab" aria-selected="false">Service</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled">
                    Disabled
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="account-tab-center" data-toggle="tab" href="#account-center"
                    aria-controls="account-center" role="tab" aria-selected="false">Account</a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane" id="home-center" aria-labelledby="home-tab-center" role="tabpanel">
                  <p>Candy canes donut chupa chups candy canes lemon drops oat cake wafer. Cotton candy candy canes
                    marzipan carrot cake. Sesame snaps lemon drops candy marzipan donut brownie tootsie roll. Icing
                    croissant bonbon biscuit gummi bears.</p>
                </div>
                <div class="tab-pane active" id="service-center" aria-labelledby="service-tab-center" role="tabpanel">
                  <p>Pudding candy canes sugar plum cookie chocolate cake powder croissant. Carrot cake tiramisu danish
                    candy cake muffin croissant tart dessert. Tiramisu caramels candy canes chocolate cake sweet roll
                    liquorice icing cupcake.</p>
                </div>
                <div class="tab-pane" id="account-center" aria-labelledby="account-tab-center" role="tabpanel">
                  <p>Carrot cake dragée chocolate. Lemon drops ice cream wafer gummies dragée. Chocolate bar liquorice
                    cheesecake cookie chupa chups marshmallow oat cake biscuit. Dessert toffee fruitcake ice cream
                    powder
                    tootsie roll cake.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Nav Centered And Nav End Ends --}}

  {{-- Nav Tabs End Aligned Starts --}}
  <section id="nav-tabs-end">
    <div class="row">
      <div class="col-sm-12">
        <div class="card overflow-hidden">
          <div class="card-header">
            <h4 class="card-title">End</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>Use class <code>.justify-content-end</code> to align your menu to end</p>
              <ul class="nav nav-tabs justify-content-end" role="tablist">
                <li class="nav-item">
                  <a class="nav-link" id="home-tab-end" data-toggle="tab" href="#home-align-end"
                    aria-controls="home-align-end" role="tab" aria-selected="true">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" id="service-tab-end" data-toggle="tab" href="#service-align-end"
                    aria-controls="service-align-end" role="tab" aria-selected="false">Service</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled">
                    Disabled
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="account-tab-end" data-toggle="tab" href="#account-align-end"
                    aria-controls="account-align-end" role="tab" aria-selected="false">Account</a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane" id="home-align-end" aria-labelledby="home-tab-end" role="tabpanel">
                  <p>Candy canes donut chupa chups candy canes lemon drops oat cake wafer. Cotton candy candy canes
                    marzipan carrot cake. Sesame snaps lemon drops candy marzipan donut brownie tootsie roll. Icing
                    croissant bonbon biscuit gummi bears.</p>
                </div>
                <div class="tab-pane active" id="service-align-end" aria-labelledby="service-tab-end" role="tabpanel">
                  <p>Pudding candy canes sugar plum cookie chocolate cake powder croissant. Carrot cake tiramisu danish
                    candy cake muffin croissant tart dessert. Tiramisu caramels candy canes chocolate cake sweet roll
                    liquorice icing cupcake.</p>
                </div>
                <div class="tab-pane" id="account-align-end" aria-labelledby="account-tab-end" role="tabpanel">
                  <p>Carrot cake dragée chocolate. Lemon drops ice cream wafer gummies dragée. Chocolate bar liquorice
                    cheesecake cookie chupa chups marshmallow oat cake biscuit. Dessert toffee fruitcake ice cream
                    powder
                    tootsie roll cake.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Nav Tabs End Aligned Ends --}}
@endsection
