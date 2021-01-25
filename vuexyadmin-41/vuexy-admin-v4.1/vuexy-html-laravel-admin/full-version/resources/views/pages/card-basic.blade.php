@extends('layouts/contentLayoutMaster')

@section('title', 'Basic Card')

@section('content')
<div class="alert alert-primary">
    <i class="feather icon-info mr-1"></i> Click <a href="https://getbootstrap.com/docs/4.3/components/card/"
      target="_blank">here</a> for more info on cards.
  </div>
  <!-- Content types section start -->
  <section id="content-types">
    <div class="row match-height">
      <div class="col-xl-4 col-md-6">
        <div class="card">
          <div class="card-header mb-1">
            <h4 class="card-title">Card With Header And Footer</h4>
          </div>
          <div class="card-content">
            <img class="img-fluid" src="{{ asset('images/slider/04.jpg') }}" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                the card's content.</p>
            </div>
          </div>
          <div class="card-footer text-muted">
            <span class="float-left">3 hours ago</span>
            <span class="float-right">
              <a href="#" class="card-link">Read More <i class="fa fa-angle-right"></i></a>
            </span>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-md-6 col-sm-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <h4 class="card-title">List Group</h4>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                the card's content.</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <span class="badge badge-pill bg-primary float-right">4</span>
                Cras justo odio
              </li>
              <li class="list-group-item">
                <span class="badge badge-pill bg-info float-right">2</span>
                Dapibus ac facilisis in
              </li>
              <li class="list-group-item">
                <span class="badge badge-pill bg-warning float-right">1</span>
                Morbi leo risus
              </li>
              <li class="list-group-item">
                <span class="badge badge-pill bg-success float-right">3</span>
                Porta ac consectetur ac
              </li>
              <li class="list-group-item">
                <span class="badge badge-pill bg-danger float-right">8</span>
                Vestibulum at eros
              </li>
              <li class="list-group-item">
                <span class="badge badge-pill bg-success float-right">4</span>
                Lorem ipsum dolor sit amet.
              </li>
            </ul>
            <div class="card-body">
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-md-12 col-sm-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <h4 class="card-title">Carousel</h4>
              <h6 class="card-subtitle text-muted">Support card subtitle</h6>
            </div>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                  <img src="{{ asset('images/slider/01.jpg') }}" class="d-block w-100" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('images/slider/02.jpg') }}" class="d-block w-100" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('images/slider/03.jpg') }}" class="d-block w-100" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="fa fa-angle-left icon-prev" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="fa fa-angle-right icon-next" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt assumenda mollitia
                officia dolorum eius quasi.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-4 col-md-6 col-sm-12">
        <div class="card collapse-icon accordion-icon-rotate">
          <div class="card-body">
            <div class="accordion" id="accordionExample" data-toggle-hover="true">
              <div class="collapse-margin">
                <div class="card-header" id="headingOne" data-toggle="collapse" role="button"
                    data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  <span class="lead collapse-title collapsed">
                    Accordion Item 1
                  </span>
                </div>

                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                    Pastry pudding cookie toffee bonbon jujubes jujubes powder topping. Jelly beans gummi bears sweet roll
                    bonbon muffin liquorice. Wafer lollipop sesame snaps.
                  </div>
                </div>
              </div>
              <div class="collapse-margin">
                <div class="card-header" id="headingTwo" data-toggle="collapse" role="button"
                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <span class="lead collapse-title collapsed">
                    Accordion Item 2
                  </span>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div class="card-body">
                    Sweet pie candy jelly. Sesame snaps biscuit sugar plum. Sweet roll topping fruitcake. Caramels
                    liquorice biscuit ice cream fruitcake cotton candy tart.
                  </div>
                </div>
              </div>
              <div class="collapse-margin">
                <div class="card-header" id="headingThree" data-toggle="collapse" role="button" data-target="#collapseThree"
                    aria-expanded="false" aria-controls="collapseThree">
                  <span class="lead collapse-title">
                    Accordion Item 3
                  </span>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="card-body">
                    Tart gummies dragée lollipop fruitcake pastry oat cake. Cookie jelly jelly macaroon icing jelly beans
                    soufflé cake sweet. Macaroon sesame snaps cheesecake tart cake sugar plum.
                  </div>
                </div>
              </div>
              <div class="collapse-margin">
                <div class="card-header" id="headingFour" data-toggle="collapse" role="button" data-target="#collapseFour"
                    aria-expanded="true" aria-controls="collapseFour">
                  <span class="lead collapse-title">
                    Accordion Item 4
                  </span>
                </div>
                <div id="collapseFour" class="collapse show" aria-labelledby="headingFour"
                  data-parent="#accordionExample">
                  <div class="card-body">
                    Cheesecake muffin cupcake dragée lemon drops tiramisu cake gummies chocolate cake. Marshmallow tart
                    croissant. Tart dessert tiramisu marzipan lollipop lemon drops.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-md-6 col-sm-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <h4 class="card-title">Video Card</h4>
            </div>
            <div class="embed-responsive embed-responsive-item embed-responsive-16by9">
              <iframe class="img-thumbnail" src="https://www.youtube.com/embed/vTlSEMdC5qw" allowfullscreen></iframe>
            </div>
            <div class="card-body">
              <p class="card-text">Candy cupcake sugar plum oat cake wafer marzipan jujubes.</p>
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-md-12 col-sm-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <h4 class="card-title">Feedback Form</h4>
            </div>
            <div class="card-body">
              <form class="form">
                <div class="form-body">
                  <div class="form-group">
                    <label for="feedback1" class="sr-only">Name</label>
                    <input type="text" id="feedback1" class="form-control" placeholder="Name" name="name">
                  </div>

                  <div class="form-group">
                    <label for="feedback2" class="sr-only">Email</label>
                    <input type="email" id="feedback2" class="form-control" placeholder="Email" name="email">
                  </div>

                  <div class="form-group">
                    <label for="feedback3" class="sr-only">Suggestion</label>
                    <textarea id="feedback3" rows="3" class="form-control" name="message"
                      placeholder="Suggestion"></textarea>
                  </div>
                </div>

                <div class="form-actions">
                  <button type="submit" class="btn btn-primary mr-1">Submit</button>
                  <button type="reset" class="btn btn-outline-warning">Cancel</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Content types section end -->

  <!-- Card Captions and Overlay section start -->
  <section id="card-caps">
    <div class="row my-3">
      <div class="col-xl-6 col-md-6 col-sm-12">
        <div class="card">
          <div class="card-content">
            <img class="card-img-top img-fluid" src="{{ asset('images/slider/05.jpg') }}" alt="Card image cap" />
            <div class="card-body">
              <h4 class="card-title">Top Image Cap</h4>
              <p class="card-text">Jelly-o sesame snaps cheesecake topping. Cupcake fruitcake macaroon donut
                pastry gummies tiramisu chocolate bar muffin. Dessert bonbon caramels brownie chocolate bar
                chocolate tart dragée.</p>
              <p class="card-text">Cupcake fruitcake macaroon donut pastry gummies tiramisu chocolate bar
                muffin.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-md-6 col-sm-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <h4 class="card-title">Bottom Image Cap</h4>
              <p class="card-text">Jelly-o sesame snaps cheesecake topping. Cupcake fruitcake macaroon donut
                pastry gummies tiramisu chocolate bar muffin. Dessert bonbon caramels brownie chocolate bar
                chocolate tart dragée.</p>
              <p class="card-text">Cupcake fruitcake macaroon donut pastry gummies tiramisu chocolate bar
                muffin.</p>
              <p class="card-text mt-1"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            <img class="card-img-bottom img-fluid" src="{{ asset('images/slider/06.jpg') }}" alt="Card image cap">
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card">
          <div class="card-content">
            <img class="card-img img-fluid" src="{{ asset('images/slider/04.jpg') }}" alt="Card image">
            <div class="card-img-overlay overflow-hidden overlay-danger overlay-lighten-2">
              <h4 class="card-title text-white">Card Image Overlay</h4>
              <p class="card-text text-white">Sugar plum tiramisu sweet. Cake jelly marshmallow cotton candy chupa chups.
              </p>
              <p class="card-text"><small class="text-white">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card text-white border-0 box-shadow-0">
          <div class="card-content">
            <img class="card-img img-fluid" src="{{ asset('images/slider/04.jpg') }}" alt="Card image">
            <div class="card-img-overlay overflow-hidden overlay-success">
              <h4 class="card-title text-white">Card Image Overlay</h4>
              <p class="card-text text-white">Sugar plum tiramisu sweet. Cake jelly marshmallow cotton candy chupa chups.
              </p>
              <p class="card-text text-white"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card">
          <div class="card-content">
            <img class="card-img img-fluid" src="{{ asset('images/slider/04.jpg') }}" alt="Card image">
            <div class="card-img-overlay overflow-hidden overlay-warning">
              <h4 class="card-title text-white">Card Image Overlay</h4>
              <p class="card-text text-white">Sugar plum tiramisu sweet. Cake jelly marshmallow cotton candy chupa chups.
              </p>
              <p class="card-text"><small class="text-white">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card text-white border-0 box-shadow-0">
          <div class="card-content">
            <img class="card-img img-fluid" src="{{ asset('images/slider/04.jpg') }}" alt="Card image">
            <div class="card-img-overlay overflow-hidden overlay-info">
              <h4 class="card-title text-white">Card Image Overlay</h4>
              <p class="card-text text-white">Sugar plum tiramisu sweet. Cake jelly marshmallow cotton candy chupa chups.
              </p>
              <p class="card-text text-white"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Card Captions and Overlay section end -->

  <!-- Background variants section start -->
  <section id="bg-variants">
    <div class="row">
      <div class="col-12 mt-3 mb-1">
        <h4 class="text-uppercase">Background variants</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card text-white bg-gradient-primary text-center">
          <div class="card-content d-flex">
            <div class="card-body">
              <img src="{{ asset('images/elements/apple-watch.png') }}" alt="element 01" width="150"
                class="float-left px-1">
              <h4 class="card-title text-white mt-3">Brand Minute</h4>
              <p class="card-text">Donut toffee candy brownie.</p>
              <button class="btn btn-primary">Buy Now</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card border-info text-center bg-transparent">
          <div class="card-content">
            <img src="{{ asset('images/elements/macbook-pro.png') }}" alt="element 04" width="200"
              class="float-left mt-3 pl-2">
            <div class="card-body">
              <h4 class="card-title mt-3">New Arrival</h4>
              <p class="card-text mb-25">Donut toffee brownie.</p>
              <button class="btn btn-info mt-1">Buy Now</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card text-white bg-gradient-danger text-center">
          <div class="card-content d-flex">
            <div class="card-body">
              <img src="{{ asset('images/elements/iphone-x.png') }}" alt="element 03" width="150" height="150"
                class="float-right px-1">
              <h4 class="card-title text-white mt-3">Brand Minute</h4>
              <p class="card-text">Donut toffee candy brownie.</p>
              <button class="btn btn-danger btn-darken-3">Buy Now</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card border-warning text-center bg-transparent">
          <div class="card-content">
            <div class="card-body">
              <img src="{{ asset('images/elements/magic-mouse.png') }}" alt="element 05" width="100" class="mb-1">
              <h4 class="card-title">Storage Device</h4>
              <p class="card-text">945 items</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card text-white bg-gradient-success text-center">
          <div class="card-content">
            <div class="card-body">
              <img src="{{ asset('images/elements/beats-headphones.png') }}" alt="element 02" width="150"
                height="200" class="mb-1">
              <h3 class="card-title text-white">Ceramic Bottle</h3>
              <p class="card-text">456 items</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card border-danger text-center bg-transparent">
          <div class="card-content d-flex">
            <div class="card-body">
              <img src="{{ asset('images/elements/ipad-pro.png') }}" alt="element 06" height="150" class="mb-1">
              <h4 class="card-title">New Arrival</h4>
              <p class="card-text">Donut toffee candy brownie.</p>
              <button class="btn btn-danger">Buy Now</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Background variants section end -->

  <!-- Groups section start -->
  <section id="groups">
    <div class="row">
      <div class="col-12 mt-3 mb-1">
        <h4 class="text-uppercase">Groups</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card-group">

          <div class="card">
            <div class="card-content">
              <img class="card-img-top img-fluid" src="{{ asset('images/pages/content-img-3.jpg') }}"
                alt="Card image cap" />
              <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional
                  content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-content">
              <img class="card-img-top img-fluid" src="{{ asset('images/pages/content-img-2.jpg') }}"
                alt="Card image cap" />
              <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional
                  content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-content">
              <img class="card-img-top img-fluid" src="{{ asset('images/pages/content-img-4.jpg') }}"
                alt="Card image cap" />
              <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional
                  content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-content">
              <img class="card-img-top img-fluid" src="{{ asset('images/pages/content-img-1.jpg') }}"
                alt="Card image cap" />
              <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional
                  content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Groups section end -->

  <!-- Decks section start -->
  <section id="decks">
    <div class="row">
      <div class="col-12 mt-3 mb-1">
        <h4 class="text-uppercase">Decks</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card-deck-wrapper">
          <div class="card-deck">
            <div class="card">
              <div class="card-content">
                <img class="card-img-top img-fluid" src="{{ asset('images/slider/01.jpg') }}" alt="Card image cap" />
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">This card has supporting text below as a natural lead-in to
                    additional content.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-content">
                <img class="card-img-top img-fluid" src="{{ asset('images/slider/04.jpg') }}" alt="Card image cap" />
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">This card has supporting text below as a natural lead-in to
                    additional content.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-content">
                <img class="card-img-top img-fluid" src="{{ asset('images/slider/05.jpg') }}" alt="Card image cap" />
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">This card has supporting text below as a natural lead-in to
                    additional content.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-content">
                <img class="card-img-top img-fluid" src="{{ asset('images/slider/06.jpg') }}" alt="Card image cap" />
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">This card has supporting text below as a natural lead-in to
                    additional content.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Decks section end -->

  <!-- Columns section start -->
  <section id="columns">
    <div class="row">
      <div class="col-12 mt-3 mb-1">
        <h4 class="text-uppercase">Columns</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 mt-1">
        <div class="card-columns">
          <div class="card">
            <div class="card-content">
              <img class="card-img-top img-fluid" src="{{ asset('images/slider/06.jpg') }}" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                  of the card's content.</p>
                <a href="#" class="btn btn-outline-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="card text-white bg-primary text-center">
            <div class="card-content">
              <div class="card-body">
                <img src="{{ asset('images/elements/iphone-x.png') }}" alt="element 05" width="150"
                  class="mb-1 img-fluid">
                <h4 class="card-title text-white">Storage Device</h4>
                <p class="card-text text-white">945 items</p>
              </div>
            </div>
          </div>
          <div class="card text-white bg-gradient-info text-center">
            <div class="card-content">
              <div class="card-body">
                <img src="{{ asset('images/elements/ipad-pro.png') }}" alt="element 02" width="120"
                  class="mb-1 img-fluid">
                <h3 class="card-title text-white">Ceramic Bottle</h3>
                <p class="card-text">456 items</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-content">
              <div class="card-body">
                <h4 class="card-title">Bottom Image Cap</h4>
                <p class="card-text">Jelly-o sesame snaps cheesecake topping. Cupcake fruitcake macaroon
                  donut pastry gummies tiramisu chocolate bar muffin. Dessert bonbon caramels brownie
                  chocolate bar chocolate tart dragée.</p>
                <p class="card-text">Cupcake fruitcake macaroon donut pastry gummies tiramisu chocolate bar
                  muffin.</p>
                <p class="card-text mt-1"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
              <img class="card-img-bottom img-fluid" src="{{ asset('images/slider/01.jpg') }}" alt="Card image cap">
            </div>
          </div>
          <div class="card text-white">
            <div class="card-content">
              <img class="card-img img-fluid" src="{{ asset('images/slider/03.jpg') }}" alt="Card image">
              <div class="card-img-overlay overflow-hidden overlay-cyan">
                <h4 class="card-title text-white">Overlay Card</h4>
                <p class="card-text">Sugar plum tiramisu sweet. Cake jelly marshmallow cotton candy chupa
                  chups carrot cake topping chupa chups.</p>
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
          </div>
          <div class="card border-info text-center bg-transparent">
            <div class="card-content">
              <img src="{{ asset('images/elements/macbook-pro.png') }}" alt="element 04" width="150"
                class="float-left mt-3 pl-2 img-fluid">
              <div class="card-body">
                <h4 class="card-title mt-3">New Arrival</h4>
                <p class="card-text">Donut toffee candy.</p>
                <button class="btn btn-info">Buy Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- Columns section end -->
@endsection
