<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Codebase - Page specific configuration
$cb->l_header_style = 'glass-inverse';
?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $cb->get_css('js/plugins/slick/slick.css'); ?>
<?php $cb->get_css('js/plugins/slick/slick-theme.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-primary">
    <div class="bg-pattern bg-black-op-25" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/various/bg-pattern.png');">
        <div class="content content-top text-center">
            <div class="py-50">
                <h1 class="font-w700 text-white mb-10">Blog</h1>
                <h2 class="h4 font-w400 text-white-op">Our latest news and learning articles.</h2>
            </div>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Blog and Sidebar -->
<div class="content">
    <div class="row items-push py-30">
        <!-- Posts -->
        <div class="col-xl-8">
            <div class="mb-50">
                <div class="overflow-hidden rounded mb-20" style="height: 200px;">
                    <a class="img-link" href="be_pages_generic_story.php">
                        <?php $cb->get_photo(3, true, 'img-fluid'); ?>
                    </a>
                </div>
                <h3 class="h4 font-w700 text-uppercase mb-5">The new version is now live!</h3>
                <div class="text-muted mb-10">
                    <span class="mr-15">
                        <i class="fa fa-fw fa-calendar mr-5"></i>July 16, 2017
                    </span>
                    <a class="text-muted mr-15" href="be_pages_generic_profile.php">
                        <i class="fa fa-fw fa-user mr-5"></i>John Smith
                    </a>
                    <a class="text-muted" href="javascript:void(0)">
                        <i class="fa fa-fw fa-tag mr-5"></i>News
                    </a>
                </div>
                <?php $cb->get_text('small'); ?>
                <a class="link-effect font-w600" href="be_pages_generic_story.php">Read More..</a>
            </div>
            <div class="mb-50">
                <div class="overflow-hidden rounded mb-20" style="height: 200px;">
                    <a class="img-link" href="be_pages_generic_story.php">
                        <?php $cb->get_photo(7, true, 'img-fluid'); ?>
                    </a>
                </div>
                <h3 class="h4 font-w700 text-uppercase mb-5">How to work from home more efficiently</h3>
                <div class="text-muted mb-10">
                    <span class="mr-15">
                        <i class="fa fa-fw fa-calendar mr-5"></i>July 10, 2017
                    </span>
                    <a class="text-muted mr-15" href="be_pages_generic_profile.php">
                        <i class="fa fa-fw fa-user mr-5"></i>John Smith
                    </a>
                    <a class="text-muted" href="javascript:void(0)">
                        <i class="fa fa-fw fa-tag mr-5"></i>Inpiration
                    </a>
                </div>
                <?php $cb->get_text('small'); ?>
                <a class="link-effect font-w600" href="be_pages_generic_story.php">Read More..</a>
            </div>
            <div class="mb-50">
                <div class="overflow-hidden rounded mb-20" style="height: 200px;">
                    <a class="img-link" href="be_pages_generic_story.php">
                        <?php $cb->get_photo(28, true, 'img-fluid'); ?>
                    </a>
                </div>
                <h3 class="h4 font-w700 text-uppercase mb-5">Travel the world and feel alive</h3>
                <div class="text-muted mb-10">
                    <span class="mr-15">
                        <i class="fa fa-fw fa-calendar mr-5"></i>July 5, 2017
                    </span>
                    <a class="text-muted mr-15" href="be_pages_generic_profile.php">
                        <i class="fa fa-fw fa-user mr-5"></i>John Smith
                    </a>
                    <a class="text-muted" href="javascript:void(0)">
                        <i class="fa fa-fw fa-tag mr-5"></i>Travel
                    </a>
                </div>
                <?php $cb->get_text('small'); ?>
                <a class="link-effect font-w600" href="be_pages_generic_story.php">Read More..</a>
            </div>
            <div class="mb-50">
                <div class="overflow-hidden rounded mb-20" style="height: 200px;">
                    <a class="img-link" href="be_pages_generic_story.php">
                        <?php $cb->get_photo(30, true, 'img-fluid'); ?>
                    </a>
                </div>
                <h3 class="h4 font-w700 text-uppercase mb-5">Believe in your dreams and start working</h3>
                <div class="text-muted mb-10">
                    <span class="mr-15">
                        <i class="fa fa-fw fa-calendar mr-5"></i>July 1, 2017
                    </span>
                    <a class="text-muted mr-15" href="be_pages_generic_profile.php">
                        <i class="fa fa-fw fa-user mr-5"></i>John Smith
                    </a>
                    <a class="text-muted" href="javascript:void(0)">
                        <i class="fa fa-fw fa-tag mr-5"></i>Motivation
                    </a>
                </div>
                <?php $cb->get_text('small'); ?>
                <a class="link-effect font-w600" href="be_pages_generic_story.php">Read More..</a>
            </div>
            <nav class="clearfix push">
                <a class="btn btn-secondary min-width-100 float-right" href="javascript:void(0)">
                    Next <i class="fa fa-arrow-right ml-5"></i>
                </a>
                <a class="btn btn-secondary min-width-100 float-left" href="javascript:void(0)">
                    <i class="fa fa-arrow-left mr-5"></i> Prev
                </a>
            </nav>
            <hr class="d-xl-none">
        </div>
        <!-- END Posts -->

        <!-- Sidebar -->
        <div class="col-xl-4">
            <!-- Twitter Feed -->
            <div class="block block-transparent">
                <div class="block-header">
                    <h3 class="block-title text-uppercase">Twitter Feed</h3>
                    <div class="block-options">
                        <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                            <i class="si si-social-twitter mr-5"></i> Follow Us
                        </a>
                    </div>
                </div>
                <div class="block-content">
                    <div class="media mb-20">
                        <?php $cb->get_avatar(13, false, 32, false, 'd-flex mr-20'); ?>
                        <div class="media-body">
                            <p class="mb-5">In gravida nulla. Nulla vel metus scelerisque ante sollicitudin. <a class="text-elegance" href="javascript:void(0)">#startup</a> <a class="text-elegance" href="javascript:void(0)">#life</a></p>
                            <div class="font-size-sm text-muted">10 hrs ago</div>
                        </div>
                    </div>
                    <div class="media mb-20">
                        <?php $cb->get_avatar(5, false, 32, false, 'd-flex mr-20'); ?>
                        <div class="media-body">
                            <p class="mb-5">Vestibulum in vulputate at, tempus viverra turpis. Fusce <a href="javascript:void(0)">condimentum</a> nunc ac nisi vulputate fringilla.</p>
                            <div class="font-size-sm text-muted">15 hrs ago</div>
                        </div>
                    </div>
                    <div class="media mb-20">
                        <?php $cb->get_avatar(6, false, 32, false, 'd-flex mr-20'); ?>
                        <div class="media-body">
                            <p class="mb-5">In gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</p>
                            <div class="font-size-sm text-muted">2 days ago</div>
                        </div>
                    </div>
                    <div class="media mb-20">
                        <?php $cb->get_avatar(16, false, 32, false, 'd-flex mr-20'); ?>
                        <div class="media-body">
                            <p class="mb-5">Vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum <a href="javascript:void(0)">nunc</a> ac nisi vulputate fringilla. <a class="text-elegance" href="javascript:void(0)">#web</a> <a class="text-elegance" href="javascript:void(0)">#stuff</a></p>
                            <div class="font-size-sm text-muted">5 days ago</div>
                        </div>
                    </div>
                    <div class="media mb-20">
                        <?php $cb->get_avatar(8, false, 32, false, 'd-flex mr-20'); ?>
                        <div class="media-body">
                            <p class="mb-5">Vestibulum in vulputate at, tempus viverra turpis. Fusce <a href="javascript:void(0)">condimentum</a> nunc ac nisi vulputate fringilla.</p>
                            <div class="font-size-sm text-muted">1 week ago</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Twitter Feed -->

            <!-- Categories -->
            <div class="block block-transparent">
                <div class="block-header">
                    <h3 class="block-title text-uppercase">
                        <i class="fa fa-fw fa-list mr-5"></i> Categories
                    </h3>
                </div>
                <div class="block-content">
                    <ul class="nav nav-pills flex-column push">
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center justify-content-between active" href="javascript:void(0)">
                                <span><i class="fa fa-fw fa-star mr-5"></i> News</span>
                                <span class="badge badge-pill badge-secondary">59</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                <span><i class="fa fa-fw fa-magic mr-5"></i> Special Offers</span>
                                <span class="badge badge-pill badge-secondary">40</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                <span><i class="fa fa-fw fa-briefcase mr-5"></i> Products</span>
                                <span class="badge badge-pill badge-secondary">95</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                <span><i class="fa fa-fw fa-pencil mr-5"></i> Tutorials</span>
                                <span class="badge badge-pill badge-secondary">25</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                <span><i class="fa fa-fw fa-book mr-5"></i> Guides</span>
                                <span class="badge badge-pill badge-secondary">49</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                <span><i class="fa fa-fw fa-newspaper-o mr-5"></i> Updates</span>
                                <span class="badge badge-pill badge-secondary">78</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END Categories -->

            <!-- Tag Cloud -->
            <div class="block block-transparent">
                <div class="block-header">
                    <h3 class="block-title text-uppercase">
                        <i class="fa fa-fw fa-tags mr-5"></i> Tag Cloud
                    </h3>
                </div>
                <div class="block-content block-content-full">
                    <a class="btn btn-sm btn-alt-secondary mb-5" href="javascript:void(0)">
                        <i class="fa fa-tag text-muted mr-5"></i>html5
                    </a>
                    <a class="btn btn-sm btn-alt-secondary mb-5" href="javascript:void(0)">
                        <i class="fa fa-tag text-muted mr-5"></i>css3
                    </a>
                    <a class="btn btn-sm btn-alt-secondary mb-5" href="javascript:void(0)">
                        <i class="fa fa-tag text-muted mr-5"></i>javascript
                    </a>
                    <a class="btn btn-sm btn-alt-secondary mb-5" href="javascript:void(0)">
                        <i class="fa fa-tag text-muted mr-5"></i>angular2
                    </a>
                    <a class="btn btn-sm btn-alt-secondary mb-5" href="javascript:void(0)">
                        <i class="fa fa-tag text-muted mr-5"></i>vuejs
                    </a>
                    <a class="btn btn-sm btn-alt-secondary mb-5" href="javascript:void(0)">
                        <i class="fa fa-tag text-muted mr-5"></i>react
                    </a>
                    <a class="btn btn-sm btn-alt-secondary mb-5" href="javascript:void(0)">
                        <i class="fa fa-tag text-muted mr-5"></i>php
                    </a>
                    <a class="btn btn-sm btn-alt-secondary mb-5" href="javascript:void(0)">
                        <i class="fa fa-tag text-muted mr-5"></i>ruby
                    </a>
                    <a class="btn btn-sm btn-alt-secondary mb-5" href="javascript:void(0)">
                        <i class="fa fa-tag text-muted mr-5"></i>jquery
                    </a>
                    <a class="btn btn-sm btn-alt-secondary mb-5" href="javascript:void(0)">
                        <i class="fa fa-tag text-muted mr-5"></i>modern
                    </a>
                    <a class="btn btn-sm btn-alt-secondary mb-5" href="javascript:void(0)">
                        <i class="fa fa-tag text-muted mr-5"></i>dashboard
                    </a>
                    <a class="btn btn-sm btn-alt-secondary mb-5" href="javascript:void(0)">
                        <i class="fa fa-tag text-muted mr-5"></i>themes
                    </a>
                    <a class="btn btn-sm btn-alt-secondary mb-5" href="javascript:void(0)">
                        <i class="fa fa-tag text-muted mr-5"></i>freebies
                    </a>
                </div>
            </div>
            <!-- END Tag Cloud -->
        </div>
        <!-- END Sidebar -->
    </div>
</div>
<!-- END Blog and Sidebar -->

<!-- Inspiring Quotes -->
<div class="bg-body-dark">
    <div class="content content-full text-center">
        <div class="py-30 invisible" data-toggle="appear">
            <!-- Quotes Slider (.js-slider class is initialized in Helpers.slick()) -->
            <!-- For more info and examples you can check out http://kenwheeler.github.io/slick/ -->
            <div class="js-slider slick-nav-black" data-autoplay="true" data-autoplay-speed="6000">
                <div>
                    <div class="h3 font-w700 mb-10">&ldquo; Strive not to be a success, but rather to be of value &rdquo;</div>
                    <div class="h4 font-w400 text-muted"><em>Albert Einstein</em></div>
                </div>
                <div>
                    <div class="h3 font-w700 mb-10">&ldquo; Success is where preparation and opportunity meet &rdquo;</div>
                    <div class="h4 font-w400 text-muted"><em>Bobby Unser</em></div>
                </div>
                <div>
                    <div class="h3 font-w700 mb-10">&ldquo; Life is really simple, but we insist on making it complicated &rdquo;</div>
                    <div class="h4 font-w400 text-muted"><em>Confucius</em></div>
                </div>
            </div>
            <!-- END Quotes Slider -->
        </div>
    </div>
</div>
<!-- END Inspiring Quotes -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/slick/slick.min.js'); ?>

<!-- Page JS Helpers (Slick Slider plugin) -->
<script>jQuery(function(){ Codebase.helpers('slick'); });</script>

<?php require 'inc/_global/views/footer_end.php'; ?>