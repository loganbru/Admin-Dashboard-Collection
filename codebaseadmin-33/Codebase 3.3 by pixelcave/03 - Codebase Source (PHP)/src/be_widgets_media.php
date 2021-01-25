<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $cb->get_css('js/plugins/magnific-popup/magnific-popup.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <!-- Image Cards Media Widgets -->
    <h2 class="content-heading">Media Widgets <small>Image Cards</small></h2>
    <div class="row">
        <!-- Row #1 -->
        <div class="col-md-6 col-xl-4">
            <a class="block block-transparent border-left border-5x border-primary bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo20.jpg');" href="javascript:void(0)">
                <div class="block-content block-content-full bg-black-op">                
                    <div class="pt-100">
                        <h3 class="h4 text-white font-w700 mb-10">10 ways to build your own business</h3>
                        <h4 class="text-white-op font-size-default mb-0">
                            <span class="mr-10">
                                <i class="fa fa-clock-o"></i> 15 min
                            </span>
                            <span>
                                <i class="fa fa-comments-o"></i> 240
                            </span>
                        </h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-4">
            <a class="block block-transparent border-left border-5x border-success bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo26.jpg');" href="javascript:void(0)">
                <div class="block-content block-content-full bg-black-op">                
                    <div class="pt-100">
                        <h3 class="h4 text-white font-w700 mb-10">The most happy cities in the world</h3>
                        <h4 class="text-white-op font-size-default mb-0">
                            <span class="mr-10">
                                <i class="fa fa-clock-o"></i> 12 min
                            </span>
                            <span>
                                <i class="fa fa-comments-o"></i> 132
                            </span>
                        </h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-4">
            <a class="block block-transparent border-left border-5x border-danger bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo28.jpg');" href="javascript:void(0)">
                <div class="block-content block-content-full bg-black-op">                
                    <div class="pt-100">
                        <h3 class="h4 text-white font-w700 mb-10">Learn Laravel in one week the easy way</h3>
                        <h4 class="text-white-op font-size-default mb-0">
                            <span class="mr-10">
                                <i class="fa fa-clock-o"></i> 20 min
                            </span>
                            <span>
                                <i class="fa fa-comments-o"></i> 420
                            </span>
                        </h4>
                    </div>
                </div>
            </a>
        </div>
        <!-- END Row #1 -->
    </div>
    <div class="row">
        <!-- Row #2 -->
        <div class="col-md-6 col-xl-4">
            <a class="block block-link-shadow block-transparent border-left border-5x border-info bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo25.jpg');" href="javascript:void(0)">
                <div class="block-content block-content-full bg-white-op-90">                
                    <div class="pt-100">
                        <h3 class="h4 font-w700 mb-10">An adventure of a lifetime to remember</h3>
                        <h4 class="text-muted font-size-default mb-0">
                            <span class="mr-10">
                                <i class="fa fa-clock-o"></i> 17 min
                            </span>
                            <span>
                                <i class="fa fa-comments-o"></i> 87
                            </span>
                        </h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-4">
            <a class="block block-link-shadow block-transparent border-left border-5x border-warning bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo34.jpg');" href="javascript:void(0)">
                <div class="block-content block-content-full bg-white-op-90">                
                    <div class="pt-100">
                        <h3 class="h4 font-w700 mb-10">How to code like a professional coder</h3>
                        <h4 class="text-muted font-size-default mb-0">
                            <span class="mr-10">
                                <i class="fa fa-clock-o"></i> 16 min
                            </span>
                            <span>
                                <i class="fa fa-comments-o"></i> 25
                            </span>
                        </h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-4">
            <a class="block block-link-shadow block-transparent border-left border-5x border-primary bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo32.jpg');" href="javascript:void(0)">
                <div class="block-content block-content-full bg-white-op-90">                
                    <div class="pt-100">
                        <h3 class="h4 font-w700 mb-10">Learn Laravel in one week the easy way</h3>
                        <h4 class="text-muted font-size-default mb-0">
                            <span class="mr-10">
                                <i class="fa fa-clock-o"></i> 9 min
                            </span>
                            <span>
                                <i class="fa fa-comments-o"></i> 12
                            </span>
                        </h4>
                    </div>
                </div>
            </a>
        </div>
        <!-- END Row #2 -->
    </div>
    <!-- END Image Cards Media Widgets -->

    <!-- Simple Media Widgets -->
    <h2 class="content-heading">Media Widgets <small>Simple</small></h2>
    <div class="row">
        <!-- Row #1 -->
        <div class="col-md-6 col-xl-4">
            <a class="block block-link-pop" href="javascript:void(0)">
                <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                    <div class="p-20">
                        <i class="fa fa-2x fa-music text-primary"></i>
                    </div>
                    <div class="ml-5 text-right">
                        <p class="font-size-lg font-w600 mb-0">
                            14 Albums
                        </p>
                        <p class="font-size-sm text-uppercase font-w600 text-muted mb-0">
                            Pop
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-4">
            <a class="block block-link-pop" href="javascript:void(0)">
            <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                    <div class="p-20">
                        <i class="fa fa-2x fa-film text-warning"></i>
                    </div>
                    <div class="ml-5 text-right">
                        <p class="font-size-lg font-w600 mb-0">
                            73 Movies
                        </p>
                        <p class="font-size-sm text-uppercase font-w600 text-muted mb-0">
                            Horror
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-4">
            <a class="block block-link-pop" href="javascript:void(0)">
                <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                    <div class="p-20">
                        <i class="fa fa-2x fa-gamepad text-danger"></i>
                    </div>
                    <div class="ml-5 text-right">
                        <p class="font-size-lg font-w600 mb-0">
                            120 Games
                        </p>
                        <p class="font-size-sm text-uppercase font-w600 text-muted mb-0">
                            Adventure
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <!-- END Row #1 -->
    </div>
    <div class="row">
        <!-- Row #2 -->
        <div class="col-md-6 col-xl-4">
            <a class="block block-transparent bg-primary" href="javascript:void(0)">
                <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                    <div class="p-20">
                        <i class="fa fa-2x fa-music text-black-op"></i>
                    </div>
                    <div class="ml-5 text-right">
                        <p class="font-size-lg font-w600 text-white mb-0">
                            24 Albums
                        </p>
                        <p class="font-size-sm text-uppercase font-w600 text-white-op mb-0">
                            Jazz
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-4">
            <a class="block block-transparent bg-warning" href="javascript:void(0)">
            <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                    <div class="p-20">
                        <i class="fa fa-2x fa-film text-black-op"></i>
                    </div>
                    <div class="ml-5 text-right">
                        <p class="font-size-lg font-w600 text-white mb-0">
                            50 Movies
                        </p>
                        <p class="font-size-sm text-uppercase font-w600 text-white-op mb-0">
                            Biography
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-4">
            <a class="block block-transparent bg-danger" href="javascript:void(0)">
                <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                    <div class="p-20">
                        <i class="fa fa-2x fa-gamepad text-black-op"></i>
                    </div>
                    <div class="ml-5 text-right">
                        <p class="font-size-lg font-w600 text-white mb-0">
                            189 Games
                        </p>
                        <p class="font-size-sm text-uppercase font-w600 text-white-op mb-0">
                            Puzzle
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <!-- END Row #2 -->
    </div>
    <div class="row">
        <!-- Row #3 -->
        <div class="col-md-6 col-xl-4">
            <a class="block block-link-pop" href="javascript:void(0)">
                <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                    <div class="mr-5">
                        <p class="font-size-lg font-w600 mb-0">
                            423 Games
                        </p>
                        <p class="font-size-sm text-uppercase font-w600 text-muted mb-0">
                            Steam
                        </p>
                    </div>
                    <div class="p-20">
                        <i class="fa fa-2x fa-steam text-black"></i>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-4">
            <a class="block block-link-pop" href="javascript:void(0)">
                <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                    <div class="mr-5">
                        <p class="font-size-lg font-w600 mb-0">
                            143 Videos
                        </p>
                        <p class="font-size-sm text-uppercase font-w600 text-muted mb-0">
                            Favorites
                        </p>
                    </div>
                    <div class="p-20">
                        <i class="fa fa-2x fa-youtube-play text-pulse"></i>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-4">
            <a class="block block-link-pop" href="javascript:void(0)">
                <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                    <div class="mr-5">
                        <p class="font-size-lg font-w600 mb-0">
                            780 Playlists
                        </p>
                        <p class="font-size-sm text-uppercase font-w600 text-muted mb-0">
                            Spotify
                        </p>
                    </div>
                    <div class="p-20">
                        <i class="fa fa-2x fa-spotify text-earth"></i>
                    </div>
                </div>
            </a>
        </div>
        <!-- END Row #3 -->
    </div>
    <div class="row">
        <!-- Row #4 -->
        <div class="col-md-6 col-xl-4">
            <a class="block block-transparent bg-black" href="javascript:void(0)">
                <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                    <div class="mr-5">
                        <p class="font-size-lg font-w600 text-white mb-0">
                            89 Games
                        </p>
                        <p class="font-size-sm text-uppercase font-w600 text-white-op mb-0">
                            Steam
                        </p>
                    </div>
                    <div class="p-20">
                        <i class="fa fa-2x fa-steam text-white-op"></i>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-4">
            <a class="block block-transparent bg-pulse" href="javascript:void(0)">
            <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                    <div class="mr-5">
                        <p class="font-size-lg font-w600 text-white mb-0">
                            542 Videos
                        </p>
                        <p class="font-size-sm text-uppercase font-w600 text-white-op mb-0">
                            Watch Later
                        </p>
                    </div>
                    <div class="p-20">
                        <i class="fa fa-2x fa-youtube-play text-black-op"></i>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-4">
            <a class="block block-transparent bg-earth" href="javascript:void(0)">
                <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                    <div class="mr-5">
                        <p class="font-size-lg font-w600 text-white mb-0">
                            238 Playlists
                        </p>
                        <p class="font-size-sm text-uppercase font-w600 text-white-op mb-0">
                            Spotify
                        </p>
                    </div>
                    <div class="p-20">
                        <i class="fa fa-2x fa-spotify text-black-op"></i>
                    </div>
                </div>
            </a>
        </div>
        <!-- END Row #4 -->
    </div>
    <div class="row">
        <!-- Row #5 -->
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full text-center">
                    <div class="p-20 mb-10">
                        <i class="fa fa-3x fa-steam text-black"></i>
                    </div>
                    <p class="font-size-lg font-w600 mb-0">
                        545 Games
                    </p>
                    <p class="font-size-sm text-uppercase font-w600 text-muted mb-0">
                        Steam
                    </p>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full text-center">
                    <div class="p-20 mb-10">
                        <i class="fa fa-3x fa-spotify text-earth"></i>
                    </div>
                    <p class="font-size-lg font-w600 mb-0">
                        120 Albums
                    </p>
                    <p class="font-size-sm text-uppercase font-w600 text-muted mb-0">
                        Spotify
                    </p>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full text-center">
                    <div class="p-20 mb-10">
                        <i class="fa fa-3x fa-youtube text-pulse"></i>
                    </div>
                    <p class="font-size-lg font-w600 mb-0">
                        14 Videos
                    </p>
                    <p class="font-size-sm text-uppercase font-w600 text-muted mb-0">
                        Youtube
                    </p>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full text-center">
                    <div class="p-20 mb-10">
                        <i class="fa fa-3x fa-medium text-gray-dark"></i>
                    </div>
                    <p class="font-size-lg font-w600 mb-0">
                        17 Stories
                    </p>
                    <p class="font-size-sm text-uppercase font-w600 text-muted mb-0">
                        Medium
                    </p>
                </div>
            </a>
        </div>
        <!-- END Row #5 -->
    </div>
    <div class="row">
        <!-- Row #6 -->
        <div class="col-md-6 col-xl-3">
            <a class="block block-transparent bg-black" href="javascript:void(0)">
                <div class="block-content block-content-full text-center">
                    <div class="p-20 mb-10">
                        <i class="fa fa-3x fa-steam text-white-op"></i>
                    </div>
                    <p class="font-size-lg font-w600 text-white mb-0">
                        545 Games
                    </p>
                    <p class="font-size-sm text-uppercase font-w600 text-white-op mb-0">
                        Steam
                    </p>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-transparent bg-earth" href="javascript:void(0)">
                <div class="block-content block-content-full text-center">
                    <div class="p-20 mb-10">
                        <i class="fa fa-3x fa-spotify text-black-op"></i>
                    </div>
                    <p class="font-size-lg font-w600 text-white mb-0">
                        120 Albums
                    </p>
                    <p class="font-size-sm text-uppercase font-w600 text-white-op mb-0">
                        Spotify
                    </p>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-transparent bg-pulse" href="javascript:void(0)">
                <div class="block-content block-content-full text-center">
                    <div class="p-20 mb-10">
                        <i class="fa fa-3x fa-youtube text-black-op"></i>
                    </div>
                    <p class="font-size-lg font-w600 text-white mb-0">
                        14 Videos
                    </p>
                    <p class="font-size-sm text-uppercase font-w600 text-white-op mb-0">
                        Youtube
                    </p>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-transparent bg-gray-dark" href="javascript:void(0)">
                <div class="block-content block-content-full text-center">
                    <div class="p-20 mb-10">
                        <i class="fa fa-3x fa-medium text-black-op"></i>
                    </div>
                    <p class="font-size-lg font-w600 text-white mb-0">
                        17 Stories
                    </p>
                    <p class="font-size-sm text-uppercase font-w600 text-white-op mb-0">
                        Medium
                    </p>
                </div>
            </a>
        </div>
        <!-- END Row #6 -->
    </div>
    <!-- END Simple Media Widgets -->

    <!-- Advanced Media Widgets -->
    <h2 class="content-heading">Media Widgets <small>Advanced</small></h2>
    <div class="row">
        <!-- Row #1 -->
        <div class="col-md-6">
            <div class="block">
                <div class="block-content block-content-full d-flex align-items-center justify-content-between bg-primary">
                    <div class="mr-5">
                        <p class="font-size-lg font-w600 text-white mb-0">
                            Trip Gallery
                        </p>
                        <p class="font-size-sm text-uppercase font-w600 text-white-op mb-0">
                            6 Photos
                        </p>
                    </div>
                    <div class="p-20">
                        <i class="fa fa-2x fa-image text-white-op"></i>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <!-- Simple Gallery (.js-gallery class is initialized in Helpers.magnific()) -->
                    <!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
                    <div class="row js-gallery img-fluid-100 gutters-tiny">
                        <?php for ($i = 23; $i < 29; $i++) { ?>
                        <div class="col-6 col-lg-4 animated fadeIn">
                            <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="<?php echo $cb->assets_folder; ?>/media/photos/photo<?php echo $i; ?>@2x.jpg">
                                <?php $cb->get_photo($i, false, 'img-fluid'); ?>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                    <!-- END Simple Gallery -->
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="block">
                <div class="block-content block-content-full d-flex align-items-center justify-content-between bg-primary-dark">                
                    <div class="p-20">
                        <i class="fa fa-2x fa-camera-retro text-white-op"></i>
                    </div>    
                    <div class="ml-5 text-right">
                        <p class="font-size-lg font-w600 text-white mb-0">
                            Real Estate Gallery
                        </p>
                        <p class="font-size-sm text-uppercase font-w600 text-white-op mb-0">
                            6 Photos
                        </p>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <!-- Simple Gallery (.js-gallery class is initialized in Helpers.magnific()) -->
                    <!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
                    <div class="row js-gallery img-fluid-100 gutters-tiny">
                        <?php for ($i = 36; $i < 42; $i++) { ?>
                        <div class="col-6 col-lg-4 animated fadeIn">
                            <a class="img-link img-link-simple img-link-zoom-in img-thumb img-lightbox" href="<?php echo $cb->assets_folder; ?>/media/photos/photo<?php echo $i; ?>@2x.jpg">
                                <?php $cb->get_photo($i, false, 'img-fluid'); ?>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                    <!-- END Simple Gallery -->
                </div>
            </div>
        </div>
        <!-- END Row #1 -->
    </div>
    <div class="row">
        <!-- Row #2 -->
        <div class="col-md-6 col-xl-4">
            <div class="block">
                <div class="block-content block-content-full text-center bg-gd-sea">
                    <div class="p-20 mb-10">
                        <i class="fa fa-3x fa-steam text-white-op"></i>
                    </div>
                    <p class="font-size-lg font-w600 text-white mb-0">
                        Best Games
                    </p>
                    <p class="font-size-sm text-uppercase font-w600 text-white-op mb-0">
                        Top 5
                    </p>
                </div>
                <div class="block-content block-content-full">
                    <table class="table table-borderless table-striped table-hover mb-0">
                        <tbody>
                            <tr>
                                <td class="text-center" style="width: 40px;">01</td>
                                <td>
                                    <strong>Half Life 2</strong>
                                </td>
                                <td class="text-center" style="width: 40px;">
                                    <strong class="text-success">9.6</strong>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">02</td>
                                <td>
                                    <strong>Grand Theft Auto V</strong>
                                </td>
                                <td class="text-center">
                                    <strong class="text-success">9.6</strong>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">03</td>
                                <td>
                                    <strong>The Orange Box</strong>
                                </td>
                                <td class="text-center">
                                    <strong class="text-success">9.6</strong>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">04</td>
                                <td>
                                    <strong>Half Life</strong>
                                </td>
                                <td class="text-center">
                                    <strong class="text-success">9.6</strong>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">05</td>
                                <td>
                                    <strong>BioShock</strong>
                                </td>
                                <td class="text-center">
                                    <strong class="text-success">9.6</strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="block-content block-content-full text-center bg-body-light">
                    <a class="btn btn-alt-secondary" href="javascript:void(0)">
                        <i class="fa fa-eye mr-5"></i> Show all..
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="block">
                <div class="block-content block-content-full text-center bg-gd-dusk">
                    <div class="p-20 mb-10">
                        <i class="fa fa-3x fa-film text-white-op"></i>
                    </div>
                    <p class="font-size-lg font-w600 text-white mb-0">
                        Best Movies
                    </p>
                    <p class="font-size-sm text-uppercase font-w600 text-white-op mb-0">
                        Top 5
                    </p>
                </div>
                <div class="block-content block-content-full">
                    <table class="table table-borderless table-striped table-hover mb-0">
                        <tbody>
                            <tr>
                                <td class="text-center" style="width: 40px;">01</td>
                                <td>
                                    <strong>The Godfather</strong>
                                </td>
                                <td class="text-center" style="width: 40px;">
                                    <strong class="text-success">9.2</strong>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">02</td>
                                <td>
                                    <strong>The Shawshank Redemption</strong>
                                </td>
                                <td class="text-center">
                                    <strong class="text-success">9.3</strong>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">03</td>
                                <td>
                                    <strong>Schindler's List </strong>
                                </td>
                                <td class="text-center">
                                    <strong class="text-success">8.9</strong>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">04</td>
                                <td>
                                    <strong>Raging Bull</strong>
                                </td>
                                <td class="text-center">
                                    <strong class="text-success">8.2</strong>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">05</td>
                                <td>
                                    <strong>Casablanca</strong>
                                </td>
                                <td class="text-center">
                                    <strong class="text-success">8.5</strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="block-content block-content-full text-center bg-body-light">
                    <a class="btn btn-alt-secondary" href="javascript:void(0)">
                        <i class="fa fa-eye mr-5"></i> Show all..
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="block">
                <div class="block-content block-content-full text-center bg-gd-cherry">
                    <div class="p-20 mb-10">
                        <i class="fa fa-3x fa-youtube-play text-white-op"></i>
                    </div>
                    <p class="font-size-lg font-w600 text-white mb-0">
                        Best TV Shows
                    </p>
                    <p class="font-size-sm text-uppercase font-w600 text-white-op mb-0">
                        Top 5
                    </p>
                </div>
                <div class="block-content block-content-full">
                    <table class="table table-borderless table-striped table-hover mb-0">
                        <tbody>
                            <tr>
                                <td class="text-center" style="width: 40px;">01</td>
                                <td>
                                    <strong>Planet Earth II</strong>
                                </td>
                                <td class="text-center" style="width: 40px;">
                                    <strong class="text-success">9.5</strong>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">02</td>
                                <td>
                                    <strong>Band of Brothers</strong>
                                </td>
                                <td class="text-center">
                                    <strong class="text-success">9.5</strong>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">03</td>
                                <td>
                                    <strong>Planet Earth</strong>
                                </td>
                                <td class="text-center">
                                    <strong class="text-success">9.5</strong>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">04</td>
                                <td>
                                    <strong>Game of Thrones</strong>
                                </td>
                                <td class="text-center">
                                    <strong class="text-success">9.4</strong>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">05</td>
                                <td>
                                    <strong>Breaking Bad</strong>
                                </td>
                                <td class="text-center">
                                    <strong class="text-success">9.4</strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="block-content block-content-full text-center bg-body-light">
                    <a class="btn btn-alt-secondary" href="javascript:void(0)">
                        <i class="fa fa-eye mr-5"></i> Show all..
                    </a>
                </div>
            </div>
        </div>
        <!-- END Row #2 -->
    </div>
    <!-- END Advanced Media Widgets -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/magnific-popup/jquery.magnific-popup.min.js'); ?>

<!-- Page JS Helpers (Magnific Popup plugin) -->
<script>jQuery(function(){ Codebase.helpers('magnific-popup'); });</script>

<?php require 'inc/_global/views/footer_end.php'; ?>
