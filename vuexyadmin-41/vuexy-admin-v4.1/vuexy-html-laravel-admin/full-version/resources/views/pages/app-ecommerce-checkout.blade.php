@extends('layouts/contentLayoutMaster')

@section('title', 'Checkout')

@section('vendor-style')
        <!-- Vendor css files -->
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/spinner/jquery.bootstrap-touchspin.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/toastr.css')) }}">
@endsection

@section('page-style')
        <!-- Page css files -->
        <link rel="stylesheet" href="{{ asset(mix('css/pages/app-ecommerce-shop.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('css/plugins/forms/wizard.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('css/plugins/extensions/toastr.css')) }}">
@endsection
@section('content')
<form action="#" class="icons-tab-steps checkout-tab-steps wizard-circle">
    <!-- Checkout Place order starts -->
    <h6><i class="step-icon step feather icon-shopping-cart"></i>Cart</h6>
    <fieldset class="checkout-step-1 px-0">
        <section id="place-order" class="list-view product-checkout">
        <div class="checkout-items">
            <div class="card ecommerce-card">
            <div class="card-content">
                <a href="app-ecommerce-details">
                    <div class="item-img text-center">
                        <img src="{{ asset('images/pages/eCommerce/9.png') }}" alt="img-placeholder">
                    </div>
                    <div class="card-body">
                    <div class="item-name">
                        <span>Amazon - Fire TV Stick with Alexa Voice Remote - Black</span>
                        <p class="item-company">By <span class="company-name">Amazon</span></p>
                        <p class="stock-status-in">In Stock</p>
                    </div>
                    <div class="item-quantity">
                        <p class="quantity-title">Quantity</p>
                        <div class="input-group quantity-counter-wrapper">
                        <input type="text" class="quantity-counter" value="1">
                        </div>
                    </div>
                    <p class="delivery-date">Delivery by, Wed Apr 25</p>
                    <p class="offers">17% off 4 offers Available</p>
                    </a>
                </div>
                <div class="item-options text-center">
                <div class="item-wrapper">
                    <div class="item-rating">
                    <div class="badge badge-primary badge-md">
                        4 <i class="feather icon-star ml-25"></i>
                    </div>
                    </div>
                    <div class="item-cost">
                    <h6 class="item-price">
                        $39.99
                    </h6>
                    <p class="shipping">
                        <i class="feather icon-shopping-cart"></i> Free Shipping
                    </p>
                    </div>
                </div>
                <div class="wishlist remove-wishlist">
                    <i class="feather icon-x align-middle"></i> Remove
                </div>
                <div class="cart remove-wishlist">
                    <i class="fa fa-heart-o mr-25"></i> Wishlist
                </div>
                </div>
            </div>
            </div>
            <div class="card ecommerce-card">
            <div class="card-content">
                <a href="app-ecommerce-details">
                    <div class="item-img text-center">
                    <img src="{{ asset('images/pages/eCommerce/2.png') }}" alt="img-placeholder">
                    </div>
                    <div class="card-body">
                    <div class="item-name">
                        <span>Apple - Macbook® - Intel Core M5</span>
                        <p class="item-company">By <span class="company-name">Apple</span></p>
                        <p class="stock-status-in">In Stock</p>
                    </div>
                    <div class="item-quantity">
                        <p class="quantity-title">Quantity</p>
                        <div class="input-group quantity-counter-wrapper">
                        <input type="text" class="quantity-counter" value="1">
                        </div>
                    </div>
                    <p class="delivery-date">Delivery by, Wed Apr 24</p>
                    <p class="offers">7% off 1 offers Available</p>
                    </a>
                </div>
                <div class="item-options text-center">
                <div class="item-wrapper">
                    <div class="item-rating">
                    <div class="badge badge-primary badge-md">
                        4 <i class="feather icon-star ml-25"></i>
                    </div>
                    </div>
                    <div class="item-cost">
                    <h6 class="item-price">
                        $1599.99
                    </h6>
                    <p class="shipping">
                        <i class="feather icon-shopping-cart"></i> Free Shipping
                    </p>
                    </div>
                </div>
                <div class="wishlist remove-wishlist">
                    <i class="feather icon-x align-middle"></i> Remove
                </div>
                <div class="cart remove-wishlist">
                    <i class="fa fa-heart-o mr-25"></i> Wishlist
                </div>
                </div>
            </div>
            </div>
            <div class="card ecommerce-card">
            <div class="card-content">
                <a href="app-ecommerce-details">
                    <div class="item-img text-center">
                    <img src="{{ asset('images/pages/eCommerce/3.png') }}" alt="img-placeholder">
                    </div>
                    <div class="card-body">
                    <div class="item-name">
                        <span>Google - Chromecast - Black</span>
                        <p class="item-company">By <span class="company-name">Google</span></p>
                        <p class="stock-status-in">In Stock</p>
                    </div>
                    <div class="item-quantity">
                        <p class="quantity-title">Quantity</p>
                        <div class="input-group quantity-counter-wrapper">
                        <input type="text" class="quantity-counter" value="1">
                        </div>
                    </div>
                    <p class="delivery-date">Delivery by, Wed Apr 27</p>
                    <p class="offers">3% off 1 offers Available</p>
                    </a>
                </div>
                <div class="item-options text-center">
                <div class="item-wrapper">
                    <div class="item-rating">
                    <div class="badge badge-primary badge-md">
                        4 <i class="feather icon-star ml-25"></i>
                    </div>
                    </div>
                    <div class="item-cost">
                    <h6 class="item-price">
                        $35
                    </h6>
                    </div>
                </div>
                <div class="wishlist remove-wishlist">
                    <i class="feather icon-x align-middle"></i> Remove
                </div>
                <div class="cart remove-wishlist">
                    <i class="fa fa-heart-o mr-25"></i> Wishlist
                </div>
                </div>
            </div>
            </div>
            <div class="card ecommerce-card">
            <div class="card-content">
                <a href="app-ecommerce-details">
                    <div class="item-img text-center">
                    <img src="{{ asset('images/pages/eCommerce/4.png') }}" alt="img-placeholder">
                    </div>
                    <div class="card-body">
                    <div class="item-name">
                        <span>Sharp - 50" Class (49.5" Diag.) - LED - 1080p - Black</span>
                        <p class="item-company">By <span class="company-name">Sharp</span></p>
                        <p class="stock-status-in">In Stock</p>
                    </div>
                    <div class="item-quantity">
                        <p class="quantity-title">Quantity</p>
                        <div class="input-group quantity-counter-wrapper">
                        <input type="text" class="quantity-counter" value="1">
                        </div>
                    </div>
                    <p class="delivery-date">Delivery by, Wed Apr 29</p>
                    <p class="offers">5% off 2 offers Available</p>
                    </a>
                </div>
                <div class="item-options text-center">
                <div class="item-wrapper">
                    <div class="item-rating">
                    <div class="badge badge-primary badge-md">
                        4 <i class="feather icon-star ml-25"></i>
                    </div>
                    </div>
                    <div class="item-cost">
                    <h6 class="item-price">
                        $429.99
                    </h6>
                    <p class="shipping">
                        <i class="feather icon-shopping-cart"></i> Free Shipping
                    </p>
                    </div>
                </div>
                <div class="wishlist remove-wishlist">
                    <i class="feather icon-x align-middle"></i> Remove
                </div>
                <div class="cart remove-wishlist">
                    <i class="fa fa-heart-o mr-25"></i> Wishlist
                </div>
                </div>
            </div>
            </div>
            <div class="card ecommerce-card">
            <div class="card-content">
                <a href="app-ecommerce-details">
                    <div class="item-img text-center">
                    <img src="{{ asset('images/pages/eCommerce/10.png') }}" alt="img-placeholder">
                    </div>
                    <div class="card-body">
                    <div class="item-name">
                        <span>Dell - Inspiron 15.6" Touch-Screen Laptop - Black</span>
                        <p class="item-company">By <span class="company-name">Dell</span></p>
                        <p class="stock-status-in">In Stock</p>
                    </div>
                    <div class="item-quantity">
                        <p class="quantity-title">Quantity</p>
                        <div class="input-group quantity-counter-wrapper">
                        <input type="text" class="quantity-counter" value="1">
                        </div>
                    </div>
                    <p class="delivery-date">Delivery by, Wed Apr 30</p>
                    <p class="offers">3% off 1 offers Available</p>
                    </a>
                </div>
                <div class="item-options text-center">
                <div class="item-wrapper">
                    <div class="item-rating">
                    <div class="badge badge-primary badge-md">
                        4 <i class="feather icon-star ml-25"></i>
                    </div>
                    </div>
                    <div class="item-cost">
                    <h6 class="item-price">
                        $499.99
                    </h6>
                    <p class="shipping">
                        <i class="feather icon-shopping-cart"></i> Free Shipping
                    </p>
                    </div>
                </div>
                <div class="wishlist remove-wishlist">
                    <i class="feather icon-x align-middle"></i> Remove
                </div>
                <div class="cart remove-wishlist">
                    <i class="fa fa-heart-o mr-25"></i> Wishlist
                </div>
                </div>
            </div>
            </div>
            <div class="card ecommerce-card">
            <div class="card-content">
                <a href="app-ecommerce-details">
                    <div class="item-img text-center">
                    <img src="{{ asset('images/pages/eCommerce/6.png') }}" alt="img-placeholder">
                    </div>
                    <div class="card-body">
                    <div class="item-name">
                        <span>Amazon - Echo Dot</span>
                        <p class="item-company">By <span class="company-name">Amazon</span></p>
                        <p class="stock-status-in">In Stock</p>
                    </div>
                    <div class="item-quantity">
                        <p class="quantity-title">Quantity</p>
                        <div class="input-group quantity-counter-wrapper">
                        <input type="text" class="quantity-counter" value="1">
                        </div>
                    </div>
                    <p class="delivery-date">Delivery by, Wed Apr 30</p>
                    <p class="offers">6% off 3 offers Available</p>
                    </a>
                </div>
                <div class="item-options text-center">
                <div class="item-wrapper">
                    <div class="item-rating">
                    <div class="badge badge-primary badge-md">
                        4 <i class="feather icon-star ml-25"></i>
                    </div>
                    </div>
                    <div class="item-cost">
                    <h6 class="item-price">
                        $49.99
                    </h6>
                    </div>
                </div>
                <div class="wishlist remove-wishlist">
                    <i class="feather icon-x align-middle"></i> Remove
                </div>
                <div class="cart remove-wishlist">
                    <i class="fa fa-heart-o mr-25"></i> Wishlist
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="checkout-options">
            <div class="card">
            <div class="card-content">
                <div class="card-body">
                <p class="options-title">Options</p>
                <div class="coupons">
                    <div class="coupons-title">
                    <p>Coupons</p>
                    </div>
                    <div class="apply-coupon">
                    <p>Apply</p>
                    </div>
                </div>
                <hr>
                <div class="price-details">
                    <p>Price Details</p>
                </div>
                <div class="detail">
                    <div class="detail-title">
                    Total MRP
                    </div>
                    <div class="detail-amt">
                    $598
                    </div>
                </div>
                <div class="detail">
                    <div class="detail-title">
                    Bag Discount
                    </div>
                    <div class="detail-amt discount-amt">
                    -25$
                    </div>
                </div>
                <div class="detail">
                    <div class="detail-title">
                    Estimated Tax
                    </div>
                    <div class="detail-amt">
                    $1.3
                    </div>
                </div>
                <div class="detail">
                    <div class="detail-title">
                    EMI Eligibility
                    </div>
                    <div class="detail-amt emi-details">
                    Details
                    </div>
                </div>
                <div class="detail">
                    <div class="detail-title">
                    Delivery Charges
                    </div>
                    <div class="detail-amt discount-amt">
                    Free
                    </div>
                </div>
                <hr>
                <div class="detail">
                    <div class="detail-title detail-total">Total</div>
                    <div class="detail-amt total-amt">$574</div>
                </div>
                <div class="btn btn-primary btn-block place-order">PLACE ORDER</div>
                </div>
            </div>
            </div>
        </div>
        </section>
    </fieldset>
    <!-- Checkout Place order Ends -->
    
    <!-- Checkout Customer Address Starts -->
    <h6><i class="step-icon step feather icon-home"></i>Address</h6>
    <fieldset class="checkout-step-2 px-0">
        <section id="checkout-address" class="list-view product-checkout">
        <div class="card">
            <div class="card-header flex-column align-items-start">
            <h4 class="card-title">Add New Address</h4>
            <p class="text-muted mt-25">Be sure to check "Deliver to this address" when you have finished</p>
            </div>
            <div class="card-content">
            <div class="card-body">
                <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                    <label for="checkout-name">Full Name:</label>
                    <input type="text" id="checkout-name" class="form-control required" name="fname">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                    <label for="checkout-number">Mobile Number:</label>
                    <input type="number" id="checkout-number" class="form-control required" name="mnumber">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                    <label for="checkout-apt-number">Flat, House No:</label>
                    <input type="number" id="checkout-apt-number" class="form-control required" name="apt-number">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                    <label for="checkout-landmark">Landmark e.g. near apollo hospital:</label>
                    <input type="text" id="checkout-landmark" class="form-control required" name="landmark">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                    <label for="checkout-city">Town/City:</label>
                    <input type="text" id="checkout-city" class="form-control required" name="city">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                    <label for="checkout-pincode">Pincode:</label>
                    <input type="number" id="checkout-pincode" class="form-control required" name="pincode">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                    <label for="checkout-state">State:</label>
                    <input type="text" id="checkout-state" class="form-control required" name="state">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                    <label for="add-type">Address Type:</label>
                    <select class="form-control" id="add-type">
                        <option>Home</option>
                        <option>Work</option>
                    </select>
                    </div>
                </div>
                <div class="col-sm-6 offset-md-6">
                    <div class="btn btn-primary delivery-address float-right">
                    SAVE AND DELIVER HERE
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="customer-card">
            <div class="card">
            <div class="card-header">
                <h4 class="card-title">John Doe</h4>
            </div>
            <div class="card-content">
                <div class="card-body actions">
                <p class="mb-0">9447 Glen Eagles Drive</p>
                <p>Lewis Center, OH 43035</p>
                <p>UTC-5: Eastern Standard Time (EST) </p>
                <p>202-555-0140</p>
                <hr>
                <div class="btn btn-primary btn-block delivery-address" formnovalidate="formnovalidate">DELIVER TO THIS ADDRESS</div>
                </div>
            </div>
            </div>
        </div>
        </section>
    </fieldset>
    
    <!-- Checkout Customer Address Ends -->
    
    <!-- Checkout Payment Starts -->
    <h6><i class="step-icon step feather icon-credit-card"></i>Payment</h6>
    <fieldset class="checkout-step-3 px-0">
        <section id="checkout-payment" class="list-view product-checkout">
        <div class="payment-type">
            <div class="card">
            <div class="card-header flex-column align-items-start">
                <h4 class="card-title">Payment options</h4>
                <p class="text-muted mt-25">Be sure to click on correct payment option</p>
            </div>
            <div class="card-content">
                <div class="card-body">
                <div class="d-flex justify-content-between flex-wrap">
                    <div class="vs-radio-con vs-radio-primary">
                    <input type="radio" name="vueradio" checked="" value="false">
                    <span class="vs-radio">
                        <span class="vs-radio--border"></span>
                        <span class="vs-radio--circle"></span>
                    </span>
                    <img src="{{ asset('images/pages/eCommerce/bank.png') }}" alt="img-placeholder" height="40">
                    <span>US Unlocked Debit Card 12XX XXXX XXXX 0000
                    </span>
                    </div>
                    <div class="card-holder-name mt-75">
                    John Doe
                    </div>
                    <div class="card-expiration-date mt-75">
                    11/2020
                    </div>
                </div>
                <div class="customer-cvv mt-1">
                    <div class="form-inline">
                    <label class="mb-50" for="card-holder-cvv">Enter CVV:</label>
                    <input type="number" class="form-control ml-75 mb-50 input-cvv" id="card-holder-cvv">
                    <div class="btn btn-primary btn-cvv ml-50 mb-50">Continue</div>
                    </div>
                </div>
                <hr class="my-2">
                <ul class="other-payment-options list-unstyled">
                    <li>
                    <div class="vs-radio-con vs-radio-primary py-25">
                        <input type="radio" name="vueradio" value="false">
                        <span class="vs-radio">
                        <span class="vs-radio--border"></span>
                        <span class="vs-radio--circle"></span>
                        </span>
                        <span>
                        Credit / Debit / ATM Card
                        </span>
                    </div>
                    </li>
                    <li>
                    <div class="vs-radio-con vs-radio-primary py-25">
                        <input type="radio" name="vueradio" value="false">
                        <span class="vs-radio">
                        <span class="vs-radio--border"></span>
                        <span class="vs-radio--circle"></span>
                        </span>
                        <span>
                        Net Banking
                        </span>
                    </div>
                    </li>
                    <li>
                    <div class="vs-radio-con vs-radio-primary py-25">
                        <input type="radio" name="vueradio" value="false">
                        <span class="vs-radio">
                        <span class="vs-radio--border"></span>
                        <span class="vs-radio--circle"></span>
                        </span>
                        <span>
                        EMI (Easy Installment)
                        </span>
                    </div>
                    </li>
                    <li>
                    <div class="vs-radio-con vs-radio-primary py-25">
                        <input type="radio" name="vueradio" value="false">
                        <span class="vs-radio">
                        <span class="vs-radio--border"></span>
                        <span class="vs-radio--circle"></span>
                        </span>
                        <span>
                        Cash On Delivery
                        </span>
                    </div>
                    </li>
                </ul>
                <hr>
                <div class="gift-card">
                    <p><i class="feather icon-plus-square mr-25 font-medium-5"></i>
                    Add Gift Card
                    </p>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="amount-payable checkout-options">
            <div class="card">
            <div class="card-header">
                <h4 class="card-title">Price Details</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                <div class="detail">
                    <div class="details-title">
                    Price of 3 items
                    </div>
                    <div class="detail-amt">
                    <strong>$699.30</strong>
                    </div>
                </div>
                <div class="detail">
                    <div class="details-title">
                    Delivery Charges
                    </div>
                    <div class="detail-amt discount-amt">
                    Free
                    </div>
                </div>
                <hr>
                <div class="detail">
                    <div class="details-title">
                    Amount Payable
                    </div>
                    <div class="detail-amt total-amt">$699.30</div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>
    </fieldset>
    
    <!-- Checkout Payment Starts -->
</form>
@endsection

@section('vendor-script')
        <!-- Vendor js files -->
        <script src="{{ asset(mix('vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/extensions/jquery.steps.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/extensions/toastr.min.js')) }}"></script>
@endsection

@section('page-script')
    <!-- Page js files -->
    <script src="{{ asset(mix('js/scripts/pages/app-ecommerce-shop.js')) }}"></script>
@endsection
