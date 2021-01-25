@extends('layouts/contentLayoutMaster')

@section('title', 'Product Details')

@section('vendor-style')
  {{-- Vendor Css files --}}
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/spinner/jquery.bootstrap-touchspin.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/swiper.min.css')) }}">
@endsection

@section('page-style')
  {{-- Page Css files --}}
  <link rel="stylesheet" href="{{ asset(mix('css/pages/app-ecommerce-details.css')) }}">
        
@endsection

@section('content')
<!-- app ecommerce details start -->
<section class="app-ecommerce-details">
  <div class="card">
    <div class="card-body">
      <div class="row mb-5 mt-2">
        <div class="col-12 col-md-5 d-flex align-items-center justify-content-center mb-2 mb-md-0">
          <div class="d-flex align-items-center justify-content-center">
            <img src="{{ asset('images/elements/macbook-pro.png') }}" class="img-fluid" alt="product image">
          </div>
        </div>
        <div class="col-12 col-md-6">
          <h5>Canon - EOS 5D Mark IV DSLR Camera with 24-70mm f/4L IS USM Lens
          </h5>
          <p class="text-muted">by Apple</p>
          <div class="ecommerce-details-price d-flex flex-wrap">

            <p class="text-primary font-medium-3 mr-1 mb-0">$43.99</p>
            <span class="pl-1 font-medium-3 border-left">
              <i class="feather icon-star text-warning"></i>
              <i class="feather icon-star text-warning"></i>
              <i class="feather icon-star text-warning"></i>
              <i class="feather icon-star text-warning"></i>
              <i class="feather icon-star text-secondary"></i>
            </span>
            <span class="ml-50 text-dark font-medium-1">424 ratings</span>
          </div>
          <hr>
          <p>Shoot professional photos and videos with this Canon EOS 5D Mk V 24-70mm lens kit. A huge 30.4-megapixel
            full-frame sensor delivers outstanding image clarity, and 4K video is possible from this DSLR for powerful
            films. Ultra-precise autofocus and huge ISO ranges give you the images you want from this Canon EOS 5D Mk V
            24-70mm lens kit.</p>
          <p class="font-weight-bold mb-25"> <i class="feather icon-truck mr-50 font-medium-2"></i>Free Shipping
          </p>
          <p class="font-weight-bold"> <i class="feather icon-dollar-sign mr-50 font-medium-2"></i>EMI options available
          </p>
          <hr>
          <div class="form-group">
            <label class="font-weight-bold">Color</label>
            <ul class="list-unstyled mb-0 product-color-options">
              <li class="d-inline-block selected">
                <div class="color-option b-primary">
                  <div class="filloption bg-primary"></div>
                </div>
              </li>
              <li class="d-inline-block">
                <div class="color-option b-success">
                  <div class="filloption bg-success"></div>
                </div>
              </li>
              <li class="d-inline-block">
                <div class="color-option b-danger">
                  <div class="filloption bg-danger"></div>
                </div>
              </li>
              <li class="d-inline-block">
                <div class="color-option b-warning">
                  <div class="filloption bg-warning"></div>
                </div>
              </li>
              <li class="d-inline-block">
                <div class="color-option b-black">
                  <div class="filloption bg-black"></div>
                </div>
              </li>
            </ul>
          </div>
          <hr>
          <p>Available - <span class="text-success">In stock</span></p>

          <div class="d-flex flex-column flex-sm-row">
            <button class="btn btn-primary mr-0 mr-sm-1 mb-1 mb-sm-0"><i class="feather icon-shopping-cart mr-25"></i>ADD TO CART</button>
            <button class="btn btn-outline-danger"><i class="feather icon-heart mr-25"></i>WISHLIST</button>
          </div>
          <hr>
          <button type="button" class="btn btn-icon rounded-circle btn-outline-primary mr-1 mb-1"><i
              class="feather icon-facebook"></i></button>
          <button type="button" class="btn btn-icon rounded-circle btn-outline-info mr-1 mb-1"><i
              class="feather icon-twitter"></i></button>
          <button type="button" class="btn btn-icon rounded-circle btn-outline-danger mr-1 mb-1"><i
              class="feather icon-youtube"></i></button>
          <button type="button" class="btn btn-icon rounded-circle btn-outline-primary mr-1 mb-1"><i
              class="feather icon-instagram"></i></button>
        </div>
      </div>
    </div>
    <div class="item-features py-5">
      <div class="row text-center pt-2">
        <div class="col-12 col-md-4 mb-4 mb-md-0 ">
          <div class="w-75 mx-auto">
            <i class="feather icon-award text-primary font-large-2"></i>
            <h5 class="mt-2 font-weight-bold">100% Original</h5>
            <p>Chocolate bar candy canes ice cream toffee. Croissant pie cookie halvah.</p>
          </div>
        </div>
        <div class="col-12 col-md-4 mb-4 mb-md-0">
          <div class="w-75 mx-auto">
            <i class="feather icon-clock text-primary font-large-2"></i>
            <h5 class="mt-2 font-weight-bold">10 Day Replacement</h5>
            <p>Marshmallow biscuit donut dragée fruitcake. Jujubes wafer cupcake.
            </p>
          </div>
        </div>
        <div class="col-12 col-md-4 mb-4 mb-md-0">
          <div class="w-75 mx-auto">
            <i class="feather icon-shield text-primary font-large-2"></i>
            <h5 class="mt-2 font-weight-bold">1 Year Warranty</h5>
            <p>Cotton candy gingerbread cake I love sugar plum I love sweet croissant.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="card-body">
      <div class="mt-4 mb-2 text-center">
        <h2>RELATED PRODUCTS</h2>
        <p>People also search for this items</p>
      </div>
      <div class="swiper-responsive-breakpoints swiper-container px-4 py-2">
        <div class="swiper-wrapper">
          <div class="swiper-slide rounded swiper-shadow">
            <div class="item-heading">
              <p class="text-truncate mb-0">
                Bowers Wilkins - CM10 S2 Triple 6-1/2" 3-Way Floorstanding Speaker (Each) - Gloss Black
              </p>
              <p>
                <small>by</small>
                <small>Bowers & Wilkins</small>
              </p>
            </div>
            <div class="img-container w-50 mx-auto my-2 py-75">
              <img src="{{ asset('images/elements/apple-watch.png') }}" class="img-fluid" alt="image">
            </div>
            <div class="item-meta">
              <div class="product-rating">
                <i class="feather icon-star text-warning"></i>
                <i class="feather icon-star text-warning"></i>
                <i class="feather icon-star text-warning"></i>
                <i class="feather icon-star text-warning"></i>
                <i class="feather icon-star text-secondary"></i>
              </div>
              <p class="text-primary mb-0">$19.98</p>
            </div>
          </div>
          <div class="swiper-slide rounded swiper-shadow">
            <div class="item-heading">
              <p class="text-truncate mb-0">
                Alienware - 17.3" Laptop - Intel Core i7 - 16GB Memory - NVIDIA GeForce GTX 1070 - 1TB Hard Drive +
                128GB Solid State Drive - Silver
              </p>
              <p>
                <small>by</small>
                <small>Alienware</small>
              </p>
            </div>
            <div class="img-container w-50 mx-auto my-2 py-75">
              <img src="{{ asset('images/elements/beats-headphones.png') }}" class="img-fluid" alt="image">
            </div>
            <div class="item-meta">
              <div class="product-rating">
                <i class="feather icon-star text-warning"></i>
                <i class="feather icon-star text-warning"></i>
                <i class="feather icon-star text-warning"></i>
                <i class="feather icon-star text-warning"></i>
                <i class="feather icon-star text-secondary"></i>
              </div>
              <p class="text-primary mb-0">$35.98</p>
            </div>
          </div>
          <div class="swiper-slide rounded swiper-shadow">
            <div class="item-heading">
              <p class="text-truncate mb-0">
                Canon - EOS 5D Mark IV DSLR Camera with 24-70mm f/4L IS USM Lens
              </p>
              <p>
                <small>by</small>
                <small>Canon</small>
              </p>
            </div>
            <div class="img-container w-50 mx-auto my-3 py-50">
              <img src="{{ asset('images/elements/macbook-pro.png') }}" class="img-fluid" alt="image">
            </div>
            <div class="item-meta">
              <div class="product-rating">
                <i class="feather icon-star text-warning"></i>
                <i class="feather icon-star text-warning"></i>
                <i class="feather icon-star text-warning"></i>
                <i class="feather icon-star text-warning"></i>
                <i class="feather icon-star text-secondary"></i>
              </div>
              <p class="text-primary mb-0">$49.98</p>
            </div>
          </div>
          <div class="swiper-slide rounded swiper-shadow">
            <div class="item-heading">
              <p class="text-truncate mb-0">
                Apple - 27" iMac with Retina 5K display - Intel Core i7 - 32GB Memory - 2TB Fusion Drive - Silver
              </p>
              <p>
                <small>by</small>
                <small>Apple</small>
              </p>
            </div>
            <div class="img-container w-50 mx-auto my-2 py-75">
              <img src="{{ asset('images/elements/homepod.png') }}" class="img-fluid" alt="image">
            </div>
            <div class="item-meta">
              <div class="product-rating">
                <i class="feather icon-star text-warning"></i>
                <i class="feather icon-star text-warning"></i>
                <i class="feather icon-star text-warning"></i>
                <i class="feather icon-star text-warning"></i>
                <i class="feather icon-star text-secondary"></i>
              </div>
              <p class="text-primary mb-0">$29.98</p>
            </div>
          </div>
          <div class="swiper-slide rounded swiper-shadow">
            <div class="item-heading">
              <p class="text-truncate mb-0">
                Bowers Wilkins - CM10 S2 Triple 6-1/2" 3-Way Floorstanding Speaker (Each) - Gloss Black
              </p>
              <p>
                <small>by</small>
                <small>Bowers & Wilkins</small>
              </p>
            </div>
            <div class="img-container w-50 mx-auto my-2 py-75">
              <img src="{{ asset('images/elements/magic-mouse.png') }}" class="img-fluid" alt="image">
            </div>
            <div class="item-meta">
              <div class="product-rating">
                <i class="feather icon-star text-warning"></i>
                <i class="feather icon-star text-warning"></i>
                <i class="feather icon-star text-warning"></i>
                <i class="feather icon-star text-warning"></i>
                <i class="feather icon-star text-secondary"></i>
              </div>
              <p class="text-primary mb-0">$99.98</p>
            </div>
          </div>
          <div class="swiper-slide rounded swiper-shadow">
            <div class="item-heading">
              <p class="text-truncate mb-0">
                Garmin - fenix 3 Sapphire GPS Watch - Silver
              </p>
              <p>
                <small>by</small>
                <small>Garmin</small>
              </p>
            </div>
            <div class="img-container w-50 mx-auto my-2 py-75">
              <img src="{{ asset('images/elements/iphone-x.png') }}" class="img-fluid" alt="image">
            </div>
            <div class="item-meta">
              <div class="product-rating">
                <i class="feather icon-star text-warning"></i>
                <i class="feather icon-star text-warning"></i>
                <i class="feather icon-star text-warning"></i>
                <i class="feather icon-star text-warning"></i>
                <i class="feather icon-star text-secondary"></i>
              </div>
              <p class="text-primary mb-0">$59.98</p>
            </div>
          </div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

      </div>
    </div>
  </div>
</section>
<!-- app ecommerce details end -->
@endsection

@section('vendor-script')
  {{-- Vendor js files --}}
  <script src="{{ asset(mix('vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/extensions/swiper.min.js')) }}"></script>
@endsection

@section('page-script')
  {{-- Page js files --}}
  <script src="{{ asset(mix('js/scripts/pages/app-ecommerce-details.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/forms/number-input.js')) }}"></script>
@endsection