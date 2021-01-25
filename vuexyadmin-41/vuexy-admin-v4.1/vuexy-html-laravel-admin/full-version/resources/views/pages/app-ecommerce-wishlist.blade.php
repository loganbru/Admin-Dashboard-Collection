@extends('layouts/contentLayoutMaster')

@section('title', 'Wish List')

@section('page-style')
        <!-- Page css files -->
        <link rel="stylesheet" href="{{ asset(mix('css/pages/app-ecommerce-shop.css')) }}">
@endsection
@section('content')
  <!-- Wishlist Starts -->
<section id="wishlist" class="grid-view wishlist-items">
    <div class="card ecommerce-card">
        <div class="card-content">
            <a href="app-ecommerce-details">
                <div class="item-img text-center">
                    <img src="{{ asset('images/pages/eCommerce/1.png') }}" class="img-fluid" alt="img-placeholder">
                </div>
                <div class="card-body">
                    <div class="item-wrapper">
                    <div class="item-rating">
                        <div class="badge badge-primary badge-md">
                        4 <i class="feather icon-star ml-25"></i>
                        </div>
                    </div>
                    <div>
                        <h6 class="item-price">
                        $19.99
                        </h6>
                    </div>
                    </div>
                    <div class="item-name">
                    <span>Sony - ZX Series On-Ear Headphones - Black</span>
                    </div>
                    <div>
                    <p class="item-description">
                        These Sony ZX Series MDRZX110/BLK headphones feature neodymium magnets and 30mm drivers for powerful,
                        reinforced sound. Enjoy your favorite songs with lush bass response thanks to the Acoustic Bass Booster
                        technology.
                    </p>
                    </div>
                </div>
            </a>
            <div class="item-options text-center">
                <div class="wishlist remove-wishlist">
                <i class="feather icon-x align-middle"></i> Remove
                </div>
                <div class="cart move-cart">
                <i class="feather icon-shopping-cart"></i> <span class="add-to-cart">Move to cart</span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="card ecommerce-card">
        <div class="card-content">
            <a href="app-ecommerce-details">
                <div class="item-img text-center">
                    <img src="{{ asset('images/pages/eCommerce/2.png') }}" class="img-fluid" alt="img-placeholder">
                </div>
                <div class="card-body">
                    <div class="item-wrapper">
                    <div class="item-rating">
                        <div class="badge badge-primary badge-md">
                        1 <i class="feather icon-star ml-25"></i>
                        </div>
                    </div>
                    <div>
                        <h6 class="item-price">
                        $4999.99
                        </h6>
                    </div>
                    </div>
                    <div class="item-name">
                    <span>
                        Asus - ROG Desktop - Intel Core i7 - 16GB Memory - Double NVIDIA GeForce GTX1080 - 1TB Hard Drive +
                        2x512GB Solid State Drive - Gray
                    </span>
                    </div>
                    <div>
                    <p class="item-description">
                        Place the sleek form of this ASUS desktop computer tower on your desk, and take your gaming to the next
                        level. With Intel Core i7 processing inside, this speedy desktop keeps up with even multilayered action
                        games. Nvidia graphics on this ASUS desktop computer help eliminate ghosting and stutter so you see
                        every move your enemy makes.
                    </p>
                    </div>
                </div>
            </a>
            <div class="item-options text-center">
                <div class="wishlist remove-wishlist">
                <i class="feather icon-x align-middle"></i> Remove
                </div>
                <div class="cart move-cart">
                <i class="feather icon-shopping-cart"></i> <span class="add-to-cart">Move to cart</span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="card ecommerce-card">
        <div class="card-content">
            <a href="app-ecommerce-details">
                <div class="item-img text-center">
                    <img src="{{ asset('images/pages/eCommerce/3.png') }}" class="img-fluid" alt="img-placeholder">
                </div>
                <div class="card-body">
                    <div class="item-wrapper">
                    <div class="item-rating">
                        <div class="badge badge-primary badge-md">
                        4 <i class="feather icon-star ml-25"></i>
                        </div>
                    </div>
                    <div>
                        <h6 class="item-price">
                        $4499.99
                        </h6>
                    </div>
                    </div>
                    <div class="item-name">
                    <span>
                        Sony - 75" Class (74.5" diag) - LED - 2160p - Smart - 3D - 4K Ultra HD TV with High Dynamic Range -
                        Black
                    </span>
                    </div>
                    <div>
                    <p class="item-description">
                        This Sony 4K HDR TV boasts 4K technology for vibrant hues. Its X940D series features a bold 75-inch
                        screen and slim design. Wires remain hidden, and the unit is easily wall mounted. This television has a
                        4K Processor X1 and 4K X-Reality PRO for crisp video. This Sony 4K HDR TV is easy to control via voice
                        commands.
                    </p>
                    </div>
                </div>
            </a>
            <div class="item-options text-center">
                <div class="wishlist remove-wishlist">
                <i class="feather icon-x align-middle"></i> Remove
                </div>
                <div class="cart view-cart">
                <i class="feather icon-shopping-cart"></i> <a href="app-ecommerce-checkout" class="view-in-cart">View cart</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="card ecommerce-card">
        <div class="card-content">
            <a href="app-ecommerce-details">
                <div class="item-img text-center">
                    <img src="{{ asset('images/pages/eCommerce/4.png') }}" class="img-fluid" alt="img-placeholder">
                </div>
                <div class="card-body">
                    <div class="item-wrapper">
                    <div class="item-rating">
                        <div class="badge badge-primary badge-md">
                        0 <i class="feather icon-star ml-25"></i>
                        </div>
                    </div>
                    <div>
                        <h6 class="item-price">
                        $599.99
                        </h6>
                    </div>
                    </div>
                    <div class="item-name">
                    <span>
                        Garmin - fēnix 5 GPS Heart Rate Monitor Watch - Slate gray
                    </span>
                    </div>
                    <div>
                    <p class="item-description">
                        Map your adventure with this Garmin Fenix 5 GPS watch. Built-in navigation lets you know where you are
                        when hiking or camping, and integrated Wi-Fi connects to the Garmin Connect to track your fitness level
                        and daily steps. This Garmin Fenix 5 GPS watch is water-resistant up to 100m for use in wet conditions.
                    </p>
                    </div>
                </div>
            </a>
            <div class="item-options text-center">
                <div class="wishlist remove-wishlist">
                <i class="feather icon-x align-middle"></i> Remove
                </div>
                <div class="cart move-cart">
                <i class="feather icon-shopping-cart"></i> <span class="add-to-cart">Move to cart</span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="card ecommerce-card">
        <div class="card-content">
            <a href="app-ecommerce-details">
                <div class="item-img text-center">
                    <img src="{{ asset('images/pages/eCommerce/5.png') }}" class="img-fluid" alt="img-placeholder">
                </div>
                <div class="card-body">
                    <div class="item-wrapper">
                    <div class="item-rating">
                        <div class="badge badge-primary badge-md">
                        4 <i class="feather icon-star ml-25"></i>
                        </div>
                    </div>
                    <div>
                        <h6 class="item-price">
                        $649.99
                        </h6>
                    </div>
                    </div>
                    <div class="item-name">
                    <span>
                        Garmin - fenix 3 Sapphire GPS Watch - Silver
                    </span>
                    </div>
                    <div>
                    <p class="item-description">
                        This Garmin fenix 3 Sapphire GPS watch comes with a titanium bezel and band, providing style and
                        strength. This watch is waterproof up to 100m, and it comes with state-of-the-art fitness training
                        features such as advanced running dynamics with vertical oscillation and vertical ratio. Track your
                        activity and stay fit with the Garmin fenix 3 Sapphire GPS watch.
                    </p>
                    </div>
                </div>
            </a>
            <div class="item-options text-center">
                <div class="wishlist remove-wishlist">
                <i class="feather icon-x align-middle"></i> Remove
                </div>
                <div class="cart move-cart">
                <i class="feather icon-shopping-cart"></i> <span class="add-to-cart">Move to
                    cart</span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="card ecommerce-card">
        <div class="card-content">
            <a href="app-ecommerce-details">
                <div class="item-img text-center">
                    <img src="{{ asset('images/pages/eCommerce/6.png') }}" class="img-fluid" alt="img-placeholder">
                </div>
                <div class="card-body">
                    <div class="item-wrapper">
                    <div class="item-rating">
                        <div class="badge badge-primary badge-md">
                        4 <i class="feather icon-star ml-25"></i>
                        </div>
                    </div>
                    <div>
                        <h6 class="item-price">
                        $1999.99
                        </h6>
                    </div>
                    </div>
                    <div class="item-name">
                    <span>
                        Alienware - 17.3" Laptop - Intel Core i7 - 16GB Memory - NVIDIA GeForce GTX 1070 - 1TB Hard Drive +
                        128GB Solid State Drive - Silver
                    </span>
                    </div>
                    <div>
                    <p class="item-description">
                        Alienware Laptop: Bring video games to life with this 17.3-inch Dell Alienware laptop. It has a powerful
                        quad-core Intel Core i7 processor and 16GB of DDR4 RAM to run modern games quickly, and its 1TB hard
                        drive stores plenty of game and other files. This Dell Alienware laptop has a 2.1 speaker configuration
                        with a subwoofer for a dynamic gaming experience.
                    </p>
                    </div>
                </div>
            </a>
            <div class="item-options text-center">
                <div class="wishlist remove-wishlist">
                <i class="feather icon-x align-middle"></i> Remove
                </div>
                <div class="cart move-cart">
                <i class="feather icon-shopping-cart"></i> <span class="add-to-cart">Move to
                    cart</span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="card ecommerce-card">
        <div class="card-content">
            <a href="app-ecommerce-details">
                <div class="item-img text-center">
                    <img src="{{ asset('images/pages/eCommerce/7.png') }}" class="img-fluid" alt="img-placeholder">
                </div>
                <div class="card-body">
                    <div class="item-wrapper">
                    <div class="item-rating">
                        <div class="badge badge-primary badge-md">
                        4 <i class="feather icon-star ml-25"></i>
                        </div>
                    </div>
                    <div>
                        <h6 class="item-price">
                        $39.99
                        </h6>
                    </div>
                    </div>
                    <div class="item-name">
                    <span>
                        Amazon - Fire TV Stick with Alexa Voice Remote - Black
                    </span>
                    </div>
                    <div>
                    <p class="item-description">
                        Enjoy smart access to videos, games and apps with this Amazon Fire TV stick. Its Alexa voice remote lets
                        you deliver hands-free commands when you want to watch television or engage with other applications.
                        With a quad-core processor, 1GB internal memory and 8GB of storage, this portable Amazon Fire TV stick
                        works fast for buffer-free streaming.
                    </p>
                    </div>
                </div>
            </a>
            <div class="item-options text-center">
                <div class="wishlist remove-wishlist">
                <i class="feather icon-x align-middle"></i> Remove
                </div>
                <div class="cart move-cart">
                <i class="feather icon-shopping-cart"></i> <span class="add-to-cart">Move to
                    cart</span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="card ecommerce-card">
        <div class="card-content">
            <a href="app-ecommerce-details">
                <div class="item-img text-center">
                    <img src="{{ asset('images/pages/eCommerce/8.png') }}" class="img-fluid" alt="img-placeholder">
                </div>
                <div class="card-body">
                    <div class="item-wrapper">
                    <div class="item-rating">
                        <div class="badge badge-primary badge-md">
                        4 <i class="feather icon-star ml-25"></i>
                        </div>
                    </div>
                    <div>
                        <h6 class="item-price">
                        $3199.99
                        </h6>
                    </div>
                    </div>
                    <div class="item-name">
                    <span>
                        Apple - 27" iMac with Retina 5K display - Intel Core i7 - 32GB Memory - 2TB Fusion Drive - Silver
                    </span>
                    </div>
                    <div>
                    <p class="item-description">
                        With 14.7 million pixels, the 27-inch iMac with Retina 5K display is the most powerful iMac ever. It
                        features quad-core Intel processors, the latest AMD graphics, 2TB Fusion Drive, and great built-in
                        apps. All in the same ultrathin design that's just 5mm at the edge.
                    </p>
                    </div>
                </div>
            </a>
            <div class="item-options text-center">
                <div class="wishlist remove-wishlist">
                <i class="feather icon-x align-middle"></i> Remove
                </div>
                <div class="cart move-cart">
                <i class="feather icon-shopping-cart"></i> <span class="add-to-cart">Move to
                    cart</span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="card ecommerce-card">
        <div class="card-content">
            <a href="app-ecommerce-details">
                <div class="item-img text-center">
                    <img src="{{ asset('images/pages/eCommerce/9.png') }}" class="img-fluid" alt="img-placeholder">
                </div>
                <div class="card-body">
                    <div class="item-wrapper">
                    <div class="item-rating">
                        <div class="badge badge-primary badge-md">
                        4 <i class="feather icon-star ml-25"></i>
                        </div>
                    </div>
                    <div>
                        <h6 class="item-price">
                        $4399.99
                        </h6>
                    </div>
                    </div>
                    <div class="item-name">
                    <span>
                        Canon - EOS 5D Mark IV DSLR Camera with 24-70mm f/4L IS USM Lens
                    </span>
                    </div>
                    <div>
                    <p class="item-description">
                        Shoot professional photos and videos with this Canon EOS 5D Mk V 24-70mm lens kit. A huge 30.4-megapixel
                        full-frame sensor delivers outstanding image clarity, and 4K video is possible from this DSLR for
                        powerful films. Ultra-precise autofocus and huge ISO ranges give you the images you want from this Canon
                        EOS 5D Mk V 24-70mm lens kit.
                    </p>
                    </div>
                </div>
            </a>
            <div class="item-options text-center">
                <div class="wishlist remove-wishlist">
                <i class="feather icon-x align-middle"></i> Remove
                </div>
                <div class="cart move-cart">
                <i class="feather icon-shopping-cart"></i> <span class="add-to-cart">Move to
                    cart</span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="card ecommerce-card">
        <div class="card-content">
            <a href="app-ecommerce-details">
                <div class="item-img text-center">
                    <img src="{{ asset('images/pages/eCommerce/10.png') }}" class="img-fluid" alt="img-placeholder">
                </div>
                <div class="card-body">
                    <div class="item-wrapper">
                    <div class="item-rating">
                        <div class="badge badge-primary badge-md">
                        4 <i class="feather icon-star ml-25"></i>
                        </div>
                    </div>
                    <div>
                        <h6 class="item-price">
                        $4999.99
                        </h6>
                    </div>
                    </div>
                    <div class="item-name">
                    <span>
                        Samsung - Chef Collection 34.3 Cu. Ft. 4-Door Flex French Door Refrigerator with Thru-the-Door Ice and
                        Water - Stainless Steel
                    </span>
                    </div>
                    <div>
                    <p class="item-description">
                        Samsung 34.3 Cu. Ft. Frost-Free 4-Door Flex French Door Refrigerator with Thru-the Door Ice and Water:
                        Take the utmost care of your ingredients, and keep them all organized, with this ultralarge-capacity
                        Chef Collection refrigerator. It features 2 compressors, 3 evaporators and 4 temperature zones, keeping
                        foods at their optimum temperature for freshness and flavor.
                    </p>
                    </div>
                </div>
            </a>
            <div class="item-options text-center">
                <div class="wishlist remove-wishlist">
                <i class="feather icon-x align-middle"></i> Remove
                </div>
                <div class="cart move-cart">
                <i class="feather icon-shopping-cart"></i> <span class="add-to-cart">Move to
                    cart</span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="card ecommerce-card">
        <div class="card-content">
            <a href="app-ecommerce-details">
                <div class="item-img text-center">
                    <img src="{{ asset('images/pages/eCommerce/11.png') }}" class="img-fluid" alt="img-placeholder">
                </div>
                <div class="card-body">
                    <div class="item-wrapper">
                    <div class="item-rating">
                        <div class="badge badge-primary badge-md">
                        5 <i class="feather icon-star ml-25"></i>
                        </div>
                    </div>
                    <div>
                        <h6 class="item-price">
                        $1999.98
                        </h6>
                    </div>
                    </div>
                    <div class="item-name">
                    <span>
                        Bowers & Wilkins - CM10 S2 Triple 6-1/2" 3-Way Floorstanding Speaker (Each) - Gloss Black
                    </span>
                    </div>
                    <div>
                    <p class="item-description">
                        Featuring triple 6-1/2" bass cones, a 6" midrange cone and a 1" tweeter, this Bowers & Wilkins CM10 S2
                        floorstanding speaker fills a large room with stunning, true-to-life audio. The tweeter-on-top design
                        ensures studio-grade sound is emitted.
                    </p>
                    </div>
                </div>
            </a>
            <div class="item-options text-center">
                <div class="wishlist remove-wishlist">
                <i class="feather icon-x align-middle"></i> Remove
                </div>
                <div class="cart move-cart">
                <i class="feather icon-shopping-cart"></i> <span class="add-to-cart">Move to
                    cart</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Wishlist Ends -->

@endsection

@section('page-script')
    <!-- Page js files -->
    <script src="{{ asset(mix('js/scripts/pages/app-ecommerce-shop.js')) }}"></script>
@endsection
