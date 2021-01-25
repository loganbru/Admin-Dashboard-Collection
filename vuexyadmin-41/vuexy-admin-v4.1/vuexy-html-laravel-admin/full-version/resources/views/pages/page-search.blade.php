@extends('layouts/contentLayoutMaster')

@section('title', 'Search')

@section('page-style')
        {{-- Page Css files --}}
        <link rel="stylesheet" href="{{ asset(mix('css/pages/search.css')) }}">
@endsection
@section('content')
<!-- Search Bar -->
<section id="search-bar">
  <div class="search-bar">
      <form>
          <fieldset class="form-group position-relative has-icon-left">
              <input type="text" class="form-control round" id="searchbar" value="Modern Admin">
              <div class="form-control-position">
                  <i class="feather icon-search px-1"></i>
              </div>
          </fieldset>
      </form>
  </div>
  <div class="row search-menu">
      <div class="col-md-8 float-left">
          <div class="search-filter d-inline-block round mr-1 mb-1">All</div>
          <div class="search-filter d-inline-block round mr-1 mb-1">Images</div>
          <div class="search-filter d-inline-block round mr-1 mb-1">Video</div>
          <div class="search-filter d-inline-block round mr-1 mb-1">Maps</div>
          <div class="search-filter d-inline-block round mr-1 mb-1">News</div>
          <div class="dropdown d-inline-block mb-1">
              <div class="search-filter dropdown-toggle" role="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                More
              </div>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Shopping</a>
                <a class="dropdown-item" href="#">Books</a>
                <a class="dropdown-item" href="#">Flight</a>
                <a class="dropdown-item" href="#">Finance</a>
                <a class="dropdown-item" href="#">Flight</a>
              </div>
          </div>
      </div>
      <div class="col-md-4 float-right text-md-right text-left">
          <div class="dropdown d-inline-block mb-1">
              <div class="search-filter dropdown-toggle mr-1" role="button" id="dropdownMenuSearch"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Settings
              </div>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuSearch">
                <a class="dropdown-item" href="#">Search Settings</a>
                <a class="dropdown-item" href="#">Langauge</a>
                <a class="dropdown-item" href="#">Turn on SafeSearch</a>
                <a class="dropdown-item" href="#">Hide Private Results</a>
                <a class="dropdown-item" href="#">Advanced Search</a>
              </div>
          </div>
          <div class="search-filter d-inline-block round mr-1 mb-1">Tools</div>
      </div>
  </div>
  <div class="row search-result-info mt-2 mb-1">
      <div class="col-sm-8 float-left">
          <p class="mt-1">Approx 84,00,00,000 results (0.35s)</p>
      </div>
      <div class="col-sm-4 float-right text-sm-right">
          <div class="btn-group">
              <div class="dropdown">
                  <button class="btn border-0 dropdown-toggle px-0" type="button" id="dropdownItem1"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Any Time
                  </button>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem1">
                    <a class="dropdown-item" href="#">Any Time</a>
                    <a class="dropdown-item" href="#">Past Hour</a>
                    <a class="dropdown-item" href="#">Past 24 Hours</a>
                    <a class="dropdown-item" href="#">Past Week</a>
                    <a class="dropdown-item" href="#">Past Month</a>
                    <a class="dropdown-item" href="#">Past Year</a>
                    <a class="dropdown-item" href="#">Custom Period</a>
                  </div>
              </div>
              <div class="dropdown">
                  <button class="btn border-0 dropdown-toggle px-0 ml-1" type="button" id="dropdownItem2"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    All Result
                  </button>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem2">
                    <a class="dropdown-item" href="#">All Result</a>
                    <a class="dropdown-item" href="#">Verbatim</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- Search Bar end -->
<!-- Search Form  -->
<section id="search-website">
  <div class="row">
      <div class="col-md-8 col-12 order-2 order-md-1">
          <div class="card">
              <div class="card-content">
                  <!--Search Result-->
                  <div id="search-results" class="card-body pb-0">
                      <ul class="media-list p-0">
                          <!--search with list-->
                          <li class="media">
                              <div class="media-body">
                                  <h3 class="mb-0 text-bold-400"><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-modern-menu-template/search-website.html" target="_blank">Modern Admin - Clean Bootstrap 4 Dashboard HTML Template</a></h3>
                                  <p class="mb-0"><a href="https://1.envato.market/pixinvent_portfolio" class="success" target="_blank">https://1.envato.market/pixinvent_portfolio</a></p>
                                  <ul class="list-inline list-inline-pipe">
                                      <li>
                                          <i class="fa fa-star warning darken-2"></i>
                                          <i class="fa fa-star warning darken-2"></i>
                                          <i class="fa fa-star warning darken-2"></i>
                                          <i class="fa fa-star warning darken-2"></i>
                                          <i class="fa fa-star warning darken-2"></i>&nbsp;&nbsp;&nbsp;25 reviews
                                      </li>
                                      <li>25.00 USD</li>
                                      <li>In Stock</li>
                                  </ul>

                                  <p>10 Dec 2018 - Cake sesame snaps cupcake gingerbread danish I love gingerbread. Apple pie pie jujubes chupa chups muffin halvah lollipop. Chocolate cake oat cake tiramisu marzipan sugar plum. Donut sweet pie oat cake dragée fruitcake cotton...</p>
                                  <div class="website-detailed-list mx-1 my-1">
                                      <div class="row">
                                          <div class="col-lg-4 col-sm-6 col-12 pl-0">
                                              <div class="content-group">
                                                  <div class="media-body">
                                                      <p class="mb-0"><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-modern-menu-template/search-website.html" target="_blank">Dashboard</a></p>
                                                      <p>Halvah marzipan icing chocolate caramels candy can...</p>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-lg-4 col-sm-6 col-12 pl-0">
                                              <div class="content-group">
                                                  <div class="media-body">
                                                      <p class="mb-0"><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-modern-menu-template/search-website.html" target="_blank">Support</a></p>
                                                      <p>Carrot cake sweet soufflé cake bear claw lollipop....</p>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-lg-4 col-sm-6 col-12 pl-0">
                                              <div class="content-group">
                                                  <div class="media-body">
                                                      <p class="mb-0"><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-modern-menu-template/search-website.html" target="_blank">UI Components</a></p>
                                                      <p>Brownie lollipop chocolate bar chocolate cake maca...</p>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-lg-4 col-sm-6 col-12 pl-0">
                                              <div class="content-group">
                                                  <div class="media-body">
                                                      <p class="mb-0"><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-modern-menu-template/search-website.html" target="_blank">Charts</a></p>
                                                      <p>Gingerbread chupa chups toffee jelly chocolate cak...</p>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-lg-4 col-sm-6 col-12 pl-0">
                                              <div class="content-group">
                                                  <div class="media-body">
                                                      <p class="mb-0"><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-modern-menu-template/search-website.html" target="_blank">Form Elements</a></p>
                                                      <p>Lollipop cake wafer. Candy chocolate toffee icing....</p>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-lg-4 col-sm-6 col-12 pl-0">
                                              <div class="content-group">
                                                  <div class="media-body">
                                                      <p class="mb-0"><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-modern-menu-template/search-website.html" target="_blank">Documentation</a></p>
                                                      <p>Powder brownie candy toffee soufflé. Gingerbread s...</p>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </li>
                          <!--search with image-->
                          <li class="media d-sm-flex d-block">
                              <div class="media-left pr-sm-2 pr-0">
                                  <a href="#">
                                      <img class="media-object" src="{{ asset('images/pages/search-result.jpg') }}" alt="Generic placeholder image">
                                  </a>
                              </div>
                              <div class="media-body pr-sm-50 pr-0">
                                  <h3 class="text-bold-400 mb-0"><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-modern-menu-template/search-website.html" target="_blank">Attire bench - Quick win shoot me an email</a></h3>
                                  <p class="mb-0"><a href="https://1.envato.market/pixinvent_portfolio" class="success" target="_blank">https://1.envato.market/pixinvent_portfolio</a></p>
                                  <ul class="list-inline list-inline-pipe">
                                      <li>
                                          <i class="fa fa-star warning darken-2"></i>
                                          <i class="fa fa-star warning darken-2"></i>
                                          <i class="fa fa-star warning darken-2"></i>
                                          <i class="fa fa-star warning darken-2"></i>
                                          <i class="fa fa-star-half warning darken-2"></i> &nbsp;17 reviews
                                      </li>
                                      <li>12 votes</li>
                                      <li>28.00 USD</li>
                                      <li>In Stock</li>
                                  </ul>
                                  <p>23 Feb 2017 - Tiramisu soufflé gummies ice cream liquorice gingerbread sweet roll. Cake cotton candy candy ice cream muffin donut soufflé danish. Dessert jelly beans wafer cheesecake. Sugar plum gingerbread caramels candy canes gummi bears...</p>
                              </div>
                          </li>
                          <!--search with video-->
                          <li class="media d-sm-flex d-block">
                              <div class="media-left pr-sm-2 pr-0">
                                  <iframe src="https://www.youtube.com/embed/oNBX7Ag2Wgc"></iframe>
                              </div>
                              <div class="media-body pl-sm-50 pl-0">
                                  <h3 class="text-bold-400 mb-0"><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-modern-menu-template/search-website.html" target="_blank">The Table - for what do you feel you would</a></h3>
                                  <p class="mb-0"><a href="https://1.envato.market/pixinvent_portfolio" class="success" target="_blank">https://1.envato.market/pixinvent_portfolio</a></p>
                                  <ul class="list-inline list-inline-pipe">
                                      <li>1M Views</li>
                                      <li>Uploaded by PlayStation</li>
                                  </ul>
                                  <p>25 Jun 2016 - Tiramisu soufflé gummies ice cream liquorice gingerbread sweet roll. Cake cotton candy candy ice cream muffin donut soufflé danish. Dessert jelly beans wafer cheesecake. Sugar plum gingerbread caramels candy canes gummi bears...</p>
                              </div>
                          </li>
                          <li class="media">
                              <div class="media-body">
                                  <h3 class="text-bold-400 mb-0"><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-modern-menu-template/search-website.html" target="_blank">Microdosing - deep v actually schlitz chia</a></h3>
                                  <p class="mb-0"><a href="https://1.envato.market/pixinvent_portfolio" class="success" target="_blank">https://1.envato.market/pixinvent_portfolio</a></p>
                                  <p>Wafer liquorice sweet roll jelly beans cake soufflé. Oat cake marzipan chocolate cake sesame snaps jujubes. Dragée biscuit dessert. Chocolate muffin wafer. Sugar plum icing tootsie roll gummi bears marzipan candy canes biscui...</p>
                              </div>
                          </li>
                          <li class="media">
                              <div class="media-body">
                                  <h3 class="text-bold-400 mb-0"><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-modern-menu-template/search-website.html" target="_blank">Aesthetic neutra freegan, mlkshk literally</a></h3>
                                  <p class="mb-0"><a href="https://1.envato.market/pixinvent_portfolio" class="success" target="_blank">https://1.envato.market/pixinvent_portfolio</a></p>
                                  <p>30 Jun 2017 - Donut jelly cake chupa chups powder chocolate cake cheesecake. Wafer macaroon sweet roll gingerbread cheesecake gummi bears. Marzipan jujubes sweet roll tootsie roll cookie apple pie brownie bear claw jelly beans....</p>
                              </div>
                          </li>
                           <li class="media">
                              <div class="media-body">
                                  <h3 class="text-bold-400 mb-0"><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-modern-menu-template/search-website.html" target="_blank">iCell - disrupt butcher pitchfork.</a></h3>
                                  <p class="mb-0"><a href="https://1.envato.market/pixinvent_portfolio" class="success" target="_blank">https://1.envato.market/pixinvent_portfolio</a></p>
                                  <p>12 DEC 2015 - Cake fruitcake cake caramels jelly beans chocolate bar. Macaroon gingerbread pastry. Gummies ice cream chocolate lollipop brownie cotton candy. Topping cotton candy brownie. Cake tiramisu macaroon sugar plum. Sweet cotton can...</p>
                              </div>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>

          <!-- Search Pagination -->
          <div class="search-pagination">
              <ul class="pagination pagination-separate pagination-round pagination-flat justify-content-center">
                  <li class="page-item prev-item">
                      <a class="page-link" href="#"></a>
                  </li>
                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">4</a></li>
                  <li class="page-item"><a class="page-link" href="#">...</a></li>
                  <li class="page-item"><a class="page-link" href="#">37</a></li>
                  <li class="page-item"><a class="page-link" href="#">38</a></li>
                  <li class="page-item"><a class="page-link" href="#">39</a></li>
                  <li class="page-item"><a class="page-link" href="#">40</a></li>
                  <li class="page-item next-item">
                      <a class="page-link" href="#"></a>
                  </li>
              </ul>
          </div>
          <!-- Search Pagination end -->
      </div>
      <div class="col-md-4 col-12 order-1 order-md-2">
          <div class="card bg-transparent border-light shadow-none">
              <div class="card-body">
                  <div class="text-center">
                      <img class="img-fluid rounded" src="{{ asset('images/pages/modern.jpg') }}" alt="logo">
                  </div>
                  <h3 class="mt-1">Modern Admin - Clean Bootstrap 4 Dashboard HTML Template</h3>
                  <small>Clean Bootstrap 4 Dashboard HTML Template</small>
                  <p class="mt-1"><i class="feather icon-external-link pr-1"></i><a href="https://themeforest.net/item/modern-admin-clean-bootstrap-4-dashboard-html-template/21430660" target="_blank">View on Themeforest</a></p>
                  <p class="card-text">Clean Bootstrap 4 Dashboard HTML Template + Bitcoin Dashboard can be used for any type of web applications: Project Management, eCommerce backends, CRM, Analytics, Fitness or any custom admin panels.</p>
                  <div class="knowledge-panel text-center">
                      <div class="panel-1 border-right border-1 d-inline-block pr-2">
                          <p class="mb-0">1,367</p>
                          <small>Sales</small>
                      </div>
                      <div class="panel-2 border-right border-1 d-inline-block px-2">
                          <p class="mb-0">74</p>
                          <small>Comments</small>
                      </div>
                      <div class="panel-3 d-inline-block pl-2">
                          <p class="mb-0">5</p>
                          <small>Ratings</small>
                      </div>
                  </div>
                  <div class="py-1 knowledge-panel-info">
                      <div><strong>Bootstrap:  </strong> v4.13 updated</div>
                      <div><strong>Created:  </strong> Mar 8 2018</div>
                      <div><strong>Last Update:  </strong> Nov 28 2018</div>
                      <div><strong>Documentation:  </strong> Well Documented</div>
                      <div><strong>Layout:  </strong> Responsive</div>
                  </div>
                  <h5>People also search for</h5>
                  <div class="knowledge-panel-suggestion">
                      <div class="suggestion-1 d-inline-block text-center mr-2">
                          <a href="https://themeforest.net/item/apex-angular-4-bootstrap-admin-template/20774875" target="_blank">
                              <img src="{{ asset('images/pages/1-apex.png') }}" alt="Image description" height="40" width="40">
                              <span class="font-small-2 d-block">Apex</span>
                          </a>
                      </div>
                      <div class="suggestion-1 d-inline-block text-center mr-2">
                          <a href="https://themeforest.net/item/convex-angular-bootstrap-admin-dashboard-template/22424619" target="_blank">
                              <img src="{{ asset('images/pages/3-convex.png') }}" alt="Image description" height="40" width="40">
                              <span class="font-small-2 d-block">Convex</span>
                          </a>
                      </div>
                      <div class="suggestion-1 d-inline-block text-center mr-2">
                          <a href="https://themeforest.net/item/materialize-material-design-admin-template/11446068" target="_blank">
                              <img src="{{ asset('images/pages/4-materialize.png') }}" alt="Image description" height="40" width="40">
                              <span class="font-small-2 d-block">Materialize</span>
                          </a>
                      </div>
                      <div class="suggestion-1 d-inline-block text-center">
                          <a href="https://themeforest.net/item/stack-responsive-bootstrap-4-admin-template/20039431" target="_blank">
                              <img src="{{ asset('images/pages/2-stack.png') }}" alt="Image description" height="40" width="40">
                              <span class="font-small-2 d-block">Stack</span>
                          </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!--/ Search form -->
@endsection
