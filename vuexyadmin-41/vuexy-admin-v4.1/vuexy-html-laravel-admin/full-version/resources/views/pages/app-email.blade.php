
@extends('layouts/contentLayoutMaster')

@section('title', 'Email Application')

@section('vendor-style')
        <!-- vendor css files -->
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/editors/quill/katex.min.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/editors/quill/monokai-sublime.min.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/editors/quill/quill.snow.css')) }}">
@endsection
@section('page-style')
        <!-- Page css files -->
        <link rel="stylesheet" href="{{ asset(mix('css/pages/app-email.css')) }}">
@endsection
<!-- Sidebar Area -->
@include('pages/app-email-sidebar')
@section('content')
<div class="app-content-overlay"></div>
  <div class="email-app-area">
      <!-- Email list Area -->
      <div class="email-app-list-wrapper">
          <div class="email-app-list">
              <div class="app-fixed-search">
                  <div class="sidebar-toggle d-block d-lg-none"><i class="feather icon-menu"></i></div>
                  <fieldset class="form-group position-relative has-icon-left m-0">
                      <input type="text" class="form-control" id="email-search" placeholder="Search email">
                      <div class="form-control-position">
                          <i class="feather icon-search"></i>
                      </div>
                  </fieldset>
              </div>
              <div class="app-action">
                  <div class="action-left">
                      <div class="vs-checkbox-con selectAll">
                          <input type="checkbox" >
                          <span class="vs-checkbox">
                            <span class="vs-checkbox--check">
                              <i class="vs-icon feather icon-minus"></i>
                            </span>
                          </span>
                          <span>Select All</span>
                      </div>
                  </div>
                  <div class="action-right">
                      <ul class="list-inline m-0">
                          <li class="list-inline-item">
                              <div class="dropdown">
                                  <a href="#" class="dropdown-toggle" id="folder" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-folder"></i>
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="folder">
                                    <a class="dropdown-item d-flex font-medium-1" href="#"><i class="font-medium-3 feather icon-edit-2 mr-50"></i> Draft</a>
                                    <a class="dropdown-item d-flex font-medium-1" href="#"><i class="font-medium-3 feather icon-info mr-50"></i> Spam</a>
                                    <a class="dropdown-item d-flex font-medium-1" href="#"><i class="font-medium-3 feather icon-trash mr-50"></i> Trash</a>
                                  </div>
                              </div>
                          </li>
                          <li class="list-inline-item">
                              <div class="dropdown">
                                  <a href="#" class="dropdown-toggle" id="tag" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-tag"></i>
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="tag">
                                      <a href="#" class="dropdown-item font-medium-1"><span class="mr-1 bullet bullet-success bullet-sm"></span> Personal</a>
                                      <a href="#" class="dropdown-item font-medium-1"><span class="mr-1 bullet bullet-primary bullet-sm"></span> Company</a>
                                      <a href="#" class="dropdown-item font-medium-1"><span class="mr-1 bullet bullet-warning bullet-sm"></span> Important</a>
                                      <a href="#" class="dropdown-item font-medium-1"><span class="mr-1 bullet bullet-danger bullet-sm"></span> Private</a>
                                  </div>
                              </div>
                          </li>
                          <li class="list-inline-item mail-unread"><span class="action-icon"><i class="feather icon-mail"></i></span></li>
                          <li class="list-inline-item mail-delete"><span class="action-icon"><i class="feather icon-trash"></i></span></li>
                      </ul>
                  </div>
              </div>
              <div class="email-user-list list-group">
                  <ul class="users-list-wrapper media-list">
                      <li class="media mail-read">
                          <div class="media-left pr-50">
                              <div class="avatar">
                                  <img src="{{ asset('images/portrait/small/avatar-s-20.jpg') }}" alt="avtar img holder">
                              </div>
                              <div class="user-action">
                                  <div class="vs-checkbox-con">
                                      <input type="checkbox" >
                                      <span class="vs-checkbox vs-checkbox-sm">
                                        <span class="vs-checkbox--check">
                                          <i class="vs-icon feather icon-check"></i>
                                        </span>
                                      </span>
                                  </div>
                                  <span class="favorite"><i class="feather icon-star"></i></span>
                              </div>
                          </div>
                          <div class="media-body">
                              <div class="user-details">
                                  <div class="mail-items">
                                      <h5 class="list-group-item-heading text-bold-600 mb-25">Tonny Deep</h5>
                                      <span class="list-group-item-text text-truncate">Focused impactful open system</span>
                                  </div>
                                  <div class="mail-meta-item">
                                      <span class="float-right">
                                          <span class="mr-1 bullet bullet-success bullet-sm"></span><span class="mail-date">4:14 AM</span>
                                      </span>
                                  </div>
                              </div>
                              <div class="mail-message">
                                  <p class="list-group-item-text truncate mb-0">Hey John, bah kivu decrete epanorthotic unnotched Argyroneta nonius veratrine preimaginary saunders demidolmen Chaldaic allusiveness lorriker unworshipping ribaldish tableman hendiadys outwrest unendeavored fulfillment scientifical Pianokoto CheloniaFreudian sperate unchary hyperneurotic phlogiston duodecahedron unflown Paguridea catena disrelishable Stygian paleopsychology cantoris phosphoritic disconcord fruited inblow somewhatly ilioperoneal forrard palfrey Satyrinae outfreeman melebiose</p>
                              </div>
                          </div>
                      </li>
                      <li class="media">
                          <div class="media-left pr-50">
                              <div class="avatar">
                                  <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-17.jpg') }}" alt="Generic placeholder image">
                              </div>
                              <div class="user-action">
                                  <div class="vs-checkbox-con">
                                      <input type="checkbox" >
                                      <span class="vs-checkbox vs-checkbox-sm">
                                        <span class="vs-checkbox--check">
                                          <i class="vs-icon feather icon-check"></i>
                                        </span>
                                      </span>
                                  </div>
                                  <span class="favorite"><i class="feather icon-star"></i></span>
                              </div>
                          </div>
                          <div class="media-body">
                              <div class="user-details">
                                  <div class="mail-items">
                                      <h5 class="list-group-item-heading text-bold-600 mb-25">Louis Welch </h5>
                                      <span class="list-group-item-text text-truncate">Thanks, Let's do it.</span>
                                  </div>
                                  <div class="mail-meta-item">
                                      <span class="float-right">
                                          <span class="mr-1 bullet bullet-danger bullet-sm"></span> <span class="mail-date">2:15 AM</span>
                                      </span>
                                  </div>
                              </div>
                              <div class="mail-message">
                                  <p class="list-group-item-text mb-0 truncate">Hi, Can we connect today? Cheesecake croissant jelly beans. Cake caramels pie chocolate. Muffin jujubes dragée carrot cake candy icing bonbon. Danish caramels topping oat cake sweet roll liquorice tootsie roll halvah.Chocolate bar jujubes jelly-o tart tiramisu croissant dragée cupcake jelly. </p>
                              </div>
                          </div>
                      </li>
                      <li class="media mail-read">
                          <div class="media-left pr-50">
                              <div class="avatar">
                                  <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-7.jpg') }}" alt="Generic placeholder image">
                              </div>
                              <div class="user-action">
                                  <div class="vs-checkbox-con">
                                      <input type="checkbox" >
                                      <span class="vs-checkbox vs-checkbox-sm">
                                        <span class="vs-checkbox--check">
                                          <i class="vs-icon feather icon-check"></i>
                                        </span>
                                      </span>
                                  </div>
                                  <span class="favorite"><i class="feather icon-star"></i></span>
                              </div>
                          </div>
                          <div class="media-body">
                              <div class="user-details">
                                  <div class="mail-items">
                                      <h5 class="list-group-item-heading text-bold-600 mb-25">Envato Market</h5>
                                      <span class="list-group-item-text text-truncate">You have new comment...</span>
                                  </div>
                                  <div class="mail-meta-item">
                                      <span class="float-right">
                                          <span class="mr-1 bullet bullet-success bullet-sm"></span> <span class="mail-date">2:15 AM</span>
                                      </span>
                                  </div>
                              </div>
                              <div class="mail-message">
                                  <p class="list-group-item-text mb-0 truncate">Hi There, Cotton candy jujubes ice cream candy. Oat cake jelly jelly brownie danish marzipan gummi bears. Cupcake sweet bonbon tart. Sweet croissant jelly beans dragée chocolate cake gingerbread topping chocolate bar lemon drops.</p>
                              </div>
                          </div>
                      </li>
                      <li class="media mail-read">
                          <div class="media-left pr-50">
                              <div class="avatar">
                                  <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-5.jpg') }}" alt="Generic placeholder image">
                              </div>
                              <div class="user-action">
                                  <div class="vs-checkbox-con">
                                      <input type="checkbox" >
                                      <span class="vs-checkbox vs-checkbox-sm">
                                        <span class="vs-checkbox--check">
                                          <i class="vs-icon feather icon-check"></i>
                                        </span>
                                      </span>
                                  </div>
                                  <span class="favorite"><i class="feather icon-star"></i></span>
                              </div>
                          </div>
                          <div class="media-body">
                              <div class="user-details">
                                  <div class="mail-items">
                                      <h5 class="list-group-item-heading text-bold-600 mb-25">Sarah Montgomery </h5>
                                      <span class="list-group-item-text text-truncate">Your New UI.</span>
                                  </div>
                                  <div class="mail-meta-item">
                                      <span class="float-right">
                                          <span class="mr-1 bullet bullet-warning bullet-sm"></span><span class="mail-date">Yesterday</span>
                                      </span>
                                  </div>
                              </div>
                              <div class="mail-message">
                                  <p class="list-group-item-text text-truncate mb-0">Hello, Everything looks good. Pastry marshmallow sugar plum. Gingerbread bonbon fruitcake gummi bears wafer chocolate cake gummies tart ice cream. Danish topping biscuit dessert donut dessert. Chocolate jelly-o topping marzipan fruitcake.</p>
                              </div>
                          </div>
                      </li>
                      <li class="media">
                          <div class="media-left pr-50">
                              <div class="avatar">
                                  <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-3.jpg') }}" alt="Generic placeholder image">
                              </div>
                              <div class="user-action">
                                  <div class="vs-checkbox-con">
                                      <input type="checkbox" >
                                      <span class="vs-checkbox vs-checkbox-sm">
                                        <span class="vs-checkbox--check">
                                          <i class="vs-icon feather icon-check"></i>
                                        </span>
                                      </span>
                                  </div>
                                  <span class="favorite"><i class="feather icon-star"></i></span>
                              </div>
                          </div>
                          <div class="media-body">
                              <div class="user-details">
                                  <div class="mail-items">
                                      <h5 class="list-group-item-heading text-bold-600 mb-25">Ardis Balderson</h5>
                                      <span class="list-group-item-text text-truncate mb-0">Focused impactful open system</span>
                                  </div>
                                  <div class="mail-meta-item">
                                      <span class="float-right">
                                          <i class="fa-paperclip fa"></i> <span class="mx-1 bullet bullet-warning bullet-sm"></span> <span class="mail-date">15 July</span>
                                      </span>
                                  </div>
                              </div>
                              <div class="mail-message">
                                  <p class="list-group-item-text mb-0 truncate">Hey John, bah kivu decrete epanorthotic unnotched Argyroneta nonius veratrine preimaginary saunders demidolmen Chaldaic allusiveness lorriker unworshipping ribaldish tableman hendiadys outwrest unendeavored fulfillment scientifical Pianokoto CheloniaFreudian sperate unchary hyperneurotic phlogiston duodecahedron unflown Paguridea catena disrelishable Stygian paleopsychology cantoris phosphoritic disconcord fruited inblow somewhatly ilioperoneal forrard palfrey</p>
                              </div>
                          </div>
                      </li>
                      <li class="media">
                          <div class="media-left pr-50">
                              <div class="avatar">
                                  <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-8.jpg') }}" alt="Generic placeholder image">
                              </div>
                              <div class="user-action">
                                  <div class="vs-checkbox-con">
                                      <input type="checkbox" >
                                      <span class="vs-checkbox vs-checkbox-sm">
                                        <span class="vs-checkbox--check">
                                          <i class="vs-icon feather icon-check"></i>
                                        </span>
                                      </span>
                                  </div>
                                  <span class="favorite"><i class="feather icon-star"></i></span>
                              </div>
                          </div>
                          <div class="media-body">
                              <div class="user-details">
                                  <div class="mail-items">
                                      <h5 class="list-group-item-heading text-bold-600 mb-25">Modestine Spat</h5>
                                      <span class="list-group-item-text text-truncate mb-0">Profound systemic alliance 🎉</span>
                                  </div>
                                  <div class="mail-meta-item">
                                      <span class="float-right">
                                          <span class="mx-1 bullet bullet-info bullet-sm"></span> <span class="mail-date">11 July</span>
                                      </span>
                                  </div>
                              </div>
                              <div class="mail-message">
                                  <p class="list-group-item-text mb-0 truncate">Hey John, Parthenopean logeion chipwood tonsilitic cockleshell substance Stilbum dismayed tape Alderamin Phororhacos bridewain zoonomia lujaurite printline extraction weanedness charterless splitmouth bindoree unfit philological Pythonissa scintillescentcinchonism sabbaton thyrocricoid dissuasively schematograph immerse pristane stimulability unreligion uncomplemental uteritis nef bavenite Hachiman teleutosorus anterolateral infirmate Nahani Hyla barile farthing</p>
                              </div>
                          </div>
                      </li>
                      <li class="media mail-read">
                          <div class="media-left pr-50">
                              <div class="avatar">
                                  <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-11.jpg') }}" alt="Generic placeholder image">
                              </div>
                              <div class="user-action">
                                  <div class="vs-checkbox-con">
                                      <input type="checkbox" >
                                      <span class="vs-checkbox vs-checkbox-sm">
                                        <span class="vs-checkbox--check">
                                          <i class="vs-icon feather icon-check"></i>
                                        </span>
                                      </span>
                                  </div>
                                  <span class="favorite"><i class="feather icon-star"></i></span>
                              </div>
                          </div>
                          <div class="media-body">
                              <div class="user-details">
                                  <div class="mail-items">
                                      <h5 class="list-group-item-heading text-bold-600 mb-25">Eb Begg</h5>
                                      <span class="list-group-item-text text-truncate mb-0">Organized value-added model</span>
                                  </div>
                                  <div class="mail-meta-item">
                                      <span class="float-right">
                                          <span class="mx-1 bullet bullet-success bullet-sm"></span> <span class="mail-date">1 July</span>
                                      </span>
                                  </div>
                              </div>
                              <div class="mail-message">
                                  <p class="list-group-item-text mb-0 truncate">Hello Sir, Lituola restrengthen bathofloric manciple decaffeinize Debby aciliated eatage proscribe prejurisdiction buttle quacky hyposecretion indemonstrableness schelling lymphopathy consumptivity nonappointment filminess spumiform erotogenicity equestrianize boneflower interlardationallocate ponzite cote guilder tuff strind blamefully cocaine monstrously apocalyptically sublanate cherubimical oligoplasmia Miltonian hydrazyl unbeset statured Unami Cordeau strouthiocamelian geitjie</p>
                              </div>
                          </div>
                      </li>
                      <li class="media mail-read">
                          <div class="media-left pr-50">
                              <div class="avatar">
                                  <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-10.jpg') }}" alt="Generic placeholder image">
                              </div>
                              <div class="user-action">
                                  <div class="vs-checkbox-con">
                                      <input type="checkbox" >
                                      <span class="vs-checkbox vs-checkbox-sm">
                                        <span class="vs-checkbox--check">
                                          <i class="vs-icon feather icon-check"></i>
                                        </span>
                                      </span>
                                  </div>
                                  <span class="favorite"><i class="feather icon-star"></i></span>
                              </div>
                          </div>
                          <div class="media-body">
                              <div class="user-details">
                                  <div class="mail-items">
                                      <h5 class="list-group-item-heading text-bold-600 mb-25">Waldemar Mannering</h5>
                                      <span class="list-group-item-text text-truncate mb-0">Quality-focused methodical flexibility</span>
                                  </div>
                                  <div class="mail-meta-item">
                                      <span class="float-right">
                                          <span class="mx-1 bullet bullet-danger bullet-sm"></span> <span class="mail-date">19 Jun</span>
                                      </span>
                                  </div>
                              </div>
                              <div class="mail-message">
                                  <p class="list-group-item-text mb-0 truncate">Hi John, wartproof ketoheptose incomplicate hyomental organal supermaterial monogene sophister nizamate rightle multifilament phloroglucic overvehement boatloading derelictly probudgeting archantiquary unknighted pallograph Volcanalia Jacobitiana ethyl neth Jugataenoumenalize irredential energeia phlebotomist galp dactylitis unparticipated solepiece demure metarhyolite toboggan unpleased perilaryngeal binoxalate rabbitry atomic duali dihexahedron Pseudogryphus boomboat obelisk</p>
                              </div>
                          </div>
                      </li>
                      <li class="media mail-read">
                          <div class="media-left pr-50">
                              <div class="avatar">
                                  <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-6.jpg') }}" alt="Generic placeholder image">
                              </div>
                              <div class="user-action">
                                  <div class="vs-checkbox-con">
                                      <input type="checkbox" >
                                      <span class="vs-checkbox vs-checkbox-sm">
                                        <span class="vs-checkbox--check">
                                          <i class="vs-icon feather icon-check"></i>
                                        </span>
                                      </span>
                                  </div>
                                  <span class="favorite"><i class="feather icon-star"></i></span>
                              </div>
                          </div>
                          <div class="media-body">
                              <div class="user-details">
                                  <div class="mail-items">
                                      <h5 class="list-group-item-heading text-bold-600 mb-25">Louetta Esses</h5>
                                      <span class="list-group-item-text text-truncate mb-0">Company Report</span>
                                  </div>
                                  <div class="mail-meta-item">
                                      <span class="float-right">
                                          <span class="mx-1 bullet bullet-info bullet-sm"></span> <span class="mail-date">2 Jun</span>
                                      </span>
                                  </div>
                              </div>
                              <div class="mail-message">
                                  <p class="list-group-item-text mb-0 truncate">Hi John,Biscuit lemon drops marshmallow. Cotton candy marshmallow bear claw. Dragée tiramisu cookie cotton candy. Carrot cake sweet roll I love macaroon wafer jelly soufflé I love dragée. Jujubes jelly I love carrot cake topping I love. Sweet candy I love</p>
                              </div>
                          </div>
                      </li>
                      <li class="media">
                          <div class="media-left pr-50">
                              <div class="avatar">
                                  <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-9.jpg') }}" alt="Generic placeholder image">
                              </div>
                              <div class="user-action">
                                  <div class="vs-checkbox-con">
                                      <input type="checkbox" >
                                      <span class="vs-checkbox vs-checkbox-sm">
                                        <span class="vs-checkbox--check">
                                          <i class="vs-icon feather icon-check"></i>
                                        </span>
                                      </span>
                                  </div>
                                  <span class="favorite"><i class="feather icon-star"></i></span>
                              </div>
                          </div>
                          <div class="media-body">
                              <div class="user-details">
                                  <div class="mail-items">
                                      <h5 class="list-group-item-heading text-bold-600 mb-25">Tressa Gass</h5>
                                      <span class="list-group-item-text text-truncate mb-0">Theme Update</span>
                                  </div>
                                  <div class="mail-meta-item">
                                      <span class="float-right">
                                          <span class="mx-1 bullet bullet-info bullet-sm"></span> <span class="mail-date">29 May</span>
                                      </span>
                                  </div>
                              </div>
                              <div class="mail-message">
                                  <p class="list-group-item-text mb-0 truncate"> Hello John,Chocolate bar chupa chups sweet roll chocolate muffin macaroon liquorice tart. Carrot cake topping jelly-o cupcake sweet apple pie jelly I love. Chocolate cake I love dessert carrot cake tootsie roll chocolate I love. Tootsie roll pie marzipan sesame snaps.</p>
                              </div>
                          </div>
                      </li>
                      <li class="media">
                          <div class="media-left pr-50">
                              <div class="avatar">
                                  <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-20.jpg') }}" alt="Generic placeholder image">
                              </div>
                              <div class="user-action">
                                  <div class="vs-checkbox-con">
                                      <input type="checkbox" >
                                      <span class="vs-checkbox vs-checkbox-sm">
                                        <span class="vs-checkbox--check">
                                          <i class="vs-icon feather icon-check"></i>
                                        </span>
                                      </span>
                                  </div>
                                  <span class="favorite"><i class="feather icon-star"></i></span>
                              </div>
                          </div>
                          <div class="media-body">
                              <div class="user-details">
                                  <div class="mail-items">
                                      <h5 class="list-group-item-heading text-bold-600 mb-25">Tommy Sicilia</h5>
                                      <span class="list-group-item-text text-truncate mb-0">Thanks, Let's do it.</span>
                                  </div>
                                  <div class="mail-meta-item">
                                      <span class="float-right">
                                          <span class="mx-1 bullet bullet-warning bullet-sm"></span> <span class="mail-date">17 May</span>
                                      </span>
                                  </div>
                              </div>
                              <div class="mail-message">
                                  <p class="list-group-item-text mb-0 truncate">Hi John,Biscuit lemon drops marshmallow. Cotton candy marshmallow bear claw. Dragée tiramisu cookie cotton candy. Carrot cake sweet roll I love macaroon wafer jelly soufflé I love dragée. Jujubes jelly I love carrot cake topping I love. Sweet candy I love.</p>
                              </div>
                          </div>
                      </li>
                      <li class="media mail-read">
                          <div class="media-left pr-50">
                              <div class="avatar">
                                  <img class="media-object rounded-circle" src="{{ asset('images/portrait/small/avatar-s-17.jpg') }}" alt="Generic placeholder image">
                              </div>
                              <div class="user-action">
                                  <div class="vs-checkbox-con">
                                      <input type="checkbox" >
                                      <span class="vs-checkbox vs-checkbox-sm">
                                        <span class="vs-checkbox--check">
                                          <i class="vs-icon feather icon-check"></i>
                                        </span>
                                      </span>
                                  </div>
                                  <span class="favorite"><i class="feather icon-star"></i></span>
                              </div>
                          </div>
                          <div class="media-body">
                              <div class="user-details">
                                  <div class="mail-items">
                                      <h5 class="list-group-item-heading text-bold-600 mb-25">Heather Howell</h5>
                                      <span class="list-group-item-text text-truncate mb-0">Thanks, Let's do it.</span>
                                  </div>
                                  <div class="mail-meta-item">
                                      <span class="float-right">
                                          <span class="mx-1 bullet bullet-warning bullet-sm"></span> <span class="mail-date">21 Mar</span>
                                      </span>
                                  </div>
                              </div>
                              <div class="mail-message">
                                  <p class="list-group-item-text mb-0 truncate">Hi John,Biscuit lemon drops marshmallow. Marzipan carrot cake soufflé. Toffee tiramisu pudding cotton candy powder jujubes pie. Topping danish sweet croissant liquorice lemon drops cake oat cake brownie. Cupcake liquorice tart tootsie roll sugar plum chocolate bar oat cake sweet roll.</p>
                              </div>
                          </div>
                      </li>
                  </ul>
                  <div class="no-results">
                     <h5>No Items Found</h5>
                  </div>
              </div>
          </div>
      </div>
      <!--/ Email list Area -->
      <!-- Detailed Email View -->
       <div class="email-app-details">
          <div class="email-detail-header">
              <div class="email-header-left d-flex align-items-center mb-1">
                  <span class="go-back mr-1"><i class="feather icon-arrow-left font-medium-4"></i></span>
                  <h3>Focused impactful open system 📷 😃</h3>
              </div>
              <div class="email-header-right mb-1 ml-2 pl-1">
                  <ul class="list-inline m-0">
                      <li class="list-inline-item"><span class="action-icon favorite"><i class="feather icon-star font-medium-5"></i></span></li>
                      <li class="list-inline-item">
                          <div class="dropdown no-arrow">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="feather icon-folder font-medium-5"></i>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="folder">
                                <a class="dropdown-item d-flex font-medium-1" href="#"><i class="font-medium-3 feather icon-edit-2 mr-50"></i> Draft</a>
                                <a class="dropdown-item d-flex font-medium-1" href="#"><i class="font-medium-3 feather icon-info mr-50"></i> Spam</a>
                                <a class="dropdown-item d-flex font-medium-1" href="#"><i class="font-medium-3 feather icon-trash mr-50"></i> Trash</a>
                              </div>
                          </div>
                      </li>
                      <li class="list-inline-item">
                          <div class="dropdown no-arrow">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="feather icon-tag font-medium-5"></i>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="tag">
                                  <a href="#" class="dropdown-item font-medium-1"><span class="mr-1 bullet bullet-success bullet-sm"></span> Personal</a>
                                  <a href="#" class="dropdown-item font-medium-1"><span class="mr-1 bullet bullet-primary bullet-sm"></span> Company</a>
                                  <a href="#" class="dropdown-item font-medium-1"><span class="mr-1 bullet bullet-warning bullet-sm"></span> Important</a>
                                  <a href="#" class="dropdown-item font-medium-1"><span class="mr-1 bullet bullet-danger bullet-sm"></span> Private</a>
                              </div>
                          </div>
                      </li>
                      <li class="list-inline-item"><span class="action-icon"><i class="feather icon-mail font-medium-5"></i></span></li>
                      <li class="list-inline-item"><span class="action-icon"><i class="feather icon-trash font-medium-5"></i></span></li>
                      <li class="list-inline-item email-prev"><span class="action-icon"><i class="feather icon-chevrons-left font-medium-5"></i></span></li>
                      <li class="list-inline-item email-next"><span class="action-icon"><i class="feather icon-chevrons-right font-medium-5"></i></span></li>
                  </ul>
              </div>
          </div>
          <div class="email-scroll-area">
              <div class="row">
                  <div class="col-12">
                      <div class="email-label ml-2 my-2 pl-1">
                          <span class="mr-1 bullet bullet-primary bullet-sm"></span><small class="mail-label">Company</small>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-12">
                      <div class="card px-1">
                          <div class="card-header email-detail-head ml-75">
                              <div class="user-details d-flex justify-content-between align-items-center flex-wrap">
                                  <div class="avatar mr-75">
                                      <img src="{{ asset('images/portrait/small/avatar-s-18.jpg') }}" alt="avtar img holder" width="61" height="61">
                                  </div>
                                  <div class="mail-items">
                                      <h4 class="list-group-item-heading mb-0">Ardis Balderson</h4>
                                      <div class="email-info-dropup dropdown">
                                          <span class="dropdown-toggle font-small-3" id="dropdownMenuButton200" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            abaldersong@utexas.edu
                                          </span>
                                          <div class="dropdown-menu dropdown-menu-right p-50" aria-labelledby="dropdownMenuButton200">
                                              <div class="px-25 dropdown-item">From: <strong> abaldersong@utexas.edu </strong></div>
                                              <div class="px-25 dropdown-item">To: <strong> johndoe@ow.ly </strong></div>
                                              <div class="px-25 dropdown-item">Date: <strong> 4:25 AM 13 Jan 2018 </strong></div>
                                          </div>
                                        </div>
                                  </div>
                              </div>
                              <div class="mail-meta-item">
                                  <div class="mail-time mb-1">4:14 AM</div>
                                  <div class="mail-date">17 May 2018</div>
                              </div>
                          </div>
                          <div class="card-body mail-message-wrapper pt-2 mb-0">
                              <div class="mail-message">
                                  <p>Hey John,</p>
                                  <p>bah kivu decrete epanorthotic unnotched Argyroneta nonius veratrine preimaginary saunders demidolmen Chaldaic allusiveness lorriker unworshipping ribaldish tableman hendiadys outwrest unendeavored fulfillment scientifical Pianokoto Chelonia</p>
                                  <p>Freudian sperate unchary hyperneurotic phlogiston duodecahedron unflown Paguridea catena disrelishable Stygian paleopsychology cantoris phosphoritic disconcord fruited inblow somewhatly ilioperoneal forrard palfrey Satyrinae outfreeman melebiose</p>
                              </div>
                              <div class="mail-attachements d-flex">
                                  <i class="feather icon-paperclip font-medium-5 mr-50"></i>
                                  <span>Attachments</span>
                              </div>
                          </div>
                          <div class="mail-files py-2">
                              <div class="chip chip-primary">
                                <div class="chip-body py-50">
                                  <span class="chip-text">interdum.docx</span>
                                </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-12">
                      <div class="card">
                          <div class="card-body">
                              <div class="d-flex justify-content-between">
                                  <span class="font-medium-1">Click here to <span class="primary cursor-pointer"><strong>Reply</strong></span> or <span class="primary  cursor-pointer"><strong>Forward</strong></span></span>
                                  <i class="feather icon-paperclip font-medium-5 mr-50"></i>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!--/ Detailed Email View -->
  </div>
@endsection

@section('vendor-script')
<!-- vendor js files -->
        <script src="{{ asset(mix('vendors/js/editors/quill/katex.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/editors/quill/highlight.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/editors/quill/quill.min.js')) }}"></script>
@endsection
@section('page-script')
        <!-- Page js files -->
        <script src="{{ asset(mix('js/scripts/pages/app-email.js')) }}"></script>
@endsection

