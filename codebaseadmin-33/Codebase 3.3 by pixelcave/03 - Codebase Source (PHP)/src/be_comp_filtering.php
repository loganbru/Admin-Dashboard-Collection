<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <!-- Images Filtering -->
    <h2 class="content-heading">Images <small>Filtering with auto added numbers</small></h2>

    <!-- Content Filtering (.js-filter class is initialized in Helpers.contentFilter()) -->
    <!-- If data-numbers="true" is added, then the number of the items of each category will be auto added to each category link -->
    <div class="js-filter" data-numbers="true">
        <div class="p-10 bg-white push">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link active" href="#" data-category-link="all">
                        <i class="fa fa-fw fa-image mr-5"></i> All
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-category-link="mountains">Mountains</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-category-link="water">Water</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-category-link="nature">Nature</a>
                </li>
            </ul>
        </div>
        <div class="row items-push">
            <div class="col-md-6 col-lg-4 col-xl-3" data-category="mountains">
                <img class="img-fluid img-thumb" src="<?php echo $cb->assets_folder; ?>/media/photos/photo1.jpg" alt="">
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3" data-category="mountains">
                <img class="img-fluid img-thumb" src="<?php echo $cb->assets_folder; ?>/media/photos/photo2.jpg" alt="">
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3" data-category="water">
                <img class="img-fluid img-thumb" src="<?php echo $cb->assets_folder; ?>/media/photos/photo3.jpg" alt="">
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3" data-category="nature">
                <img class="img-fluid img-thumb" src="<?php echo $cb->assets_folder; ?>/media/photos/photo5.jpg" alt="">
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3" data-category="mountains">
                <img class="img-fluid img-thumb" src="<?php echo $cb->assets_folder; ?>/media/photos/photo6.jpg" alt="">
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3" data-category="nature">
                <img class="img-fluid img-thumb" src="<?php echo $cb->assets_folder; ?>/media/photos/photo8.jpg" alt="">
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3" data-category="water">
                <img class="img-fluid img-thumb" src="<?php echo $cb->assets_folder; ?>/media/photos/photo9.jpg" alt="">
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3" data-category="nature">
                <img class="img-fluid img-thumb" src="<?php echo $cb->assets_folder; ?>/media/photos/photo11.jpg" alt="">
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3" data-category="nature">
                <img class="img-fluid img-thumb" src="<?php echo $cb->assets_folder; ?>/media/photos/photo13.jpg" alt="">
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3" data-category="mountains">
                <img class="img-fluid img-thumb" src="<?php echo $cb->assets_folder; ?>/media/photos/photo21.jpg" alt="">
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3" data-category="mountains">
                <img class="img-fluid img-thumb" src="<?php echo $cb->assets_folder; ?>/media/photos/photo22.jpg" alt="">
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3" data-category="nature">
                <img class="img-fluid img-thumb" src="<?php echo $cb->assets_folder; ?>/media/photos/photo23.jpg" alt="">
            </div>
        </div>
    </div>
    <!-- END Images Filtering -->

    <!-- Files Filtering -->
    <h2 class="content-heading">Files <small>Filtering with slower animation</small></h2>

    <!-- Content Filtering (.js-filter class is initialized in Helpers.contentFilter()) -->
    <!-- You can set the animation duration through data-speed="speed_in_ms" -->
    <div class="js-filter" data-speed="400">
        <div class="p-10 bg-white push">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link active" href="#" data-category-link="all">
                        <i class="fa fa-fw fa-folder-open-o mr-5"></i> All
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-category-link="movies">
                        <i class="fa fa-fw fa-file-movie-o mr-5"></i> Movies
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-category-link="photos">
                        <i class="fa fa-fw fa-file-photo-o mr-5"></i> Photos
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-category-link="music">
                        <i class="fa fa-fw fa-file-audio-o mr-5"></i> Music
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-category-link="books">
                        <i class="fa fa-fw fa-file-text-o mr-5"></i> Books
                    </a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-6 col-xl-3" data-category="books">
                <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                    <div class="block-content block-content-full text-center">
                        <div class="item item-circle bg-warning-light text-warning mx-auto my-20">
                            <i class="fa fa-book"></i>
                        </div>
                        <div class="font-size-lg">The Martian.epub</div>
                        <div class="font-size-sm text-muted">~ 7 hrs | 426 pages</div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3" data-category="photos">
                <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                    <div class="block-content block-content-full text-center">
                        <div class="item item-circle bg-info-light text-info mx-auto my-20">
                            <i class="fa fa-image"></i>
                        </div>
                        <div class="font-size-lg">DSC00018.jpg</div>
                        <div class="font-size-sm text-muted">12 mp | 3 mb</div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3" data-category="books">
                <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                    <div class="block-content block-content-full text-center">
                        <div class="item item-circle bg-warning-light text-warning mx-auto my-20">
                            <i class="fa fa-book"></i>
                        </div>
                        <div class="font-size-lg">Learn HTML.epub</div>
                        <div class="font-size-sm text-muted">~ 4 hrs | 330 pages</div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3" data-category="music">
                <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                    <div class="block-content block-content-full text-center">
                        <div class="item item-circle bg-success-light text-success mx-auto my-20">
                            <i class="fa fa-music"></i>
                        </div>
                        <div class="font-size-lg">Intro.mp3</div>
                        <div class="font-size-sm text-muted">2 min | 384 kbps</div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3" data-category="movies">
                <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                    <div class="block-content block-content-full text-center">
                        <div class="item item-circle bg-danger-light text-danger mx-auto my-20">
                            <i class="fa fa-film"></i>
                        </div>
                        <div class="font-size-lg">Iron Man 3.mov</div>
                        <div class="font-size-sm text-muted">124 min | 1080p</div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3" data-category="photos">
                <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                    <div class="block-content block-content-full text-center">
                        <div class="item item-circle bg-info-light text-info mx-auto my-20">
                            <i class="fa fa-image"></i>
                        </div>
                        <div class="font-size-lg">DSC00100.jpg</div>
                        <div class="font-size-sm text-muted">32 mp | 12 mb</div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3" data-category="music">
                <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                    <div class="block-content block-content-full text-center">
                        <div class="item item-circle bg-success-light text-success mx-auto my-20">
                            <i class="fa fa-music"></i>
                        </div>
                        <div class="font-size-lg">Immposible Day.mp3</div>
                        <div class="font-size-sm text-muted">6 min | 384 kbps</div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3" data-category="movies">
                <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                    <div class="block-content block-content-full text-center">
                        <div class="item item-circle bg-danger-light text-danger mx-auto my-20">
                            <i class="fa fa-film"></i>
                        </div>
                        <div class="font-size-lg">CA: Civil War.mov</div>
                        <div class="font-size-sm text-muted">154 min | 1080p</div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3" data-category="movies">
                <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                    <div class="block-content block-content-full text-center">
                        <div class="item item-circle bg-danger-light text-danger mx-auto my-20">
                            <i class="fa fa-film"></i>
                        </div>
                        <div class="font-size-lg">The Hobbit.mov</div>
                        <div class="font-size-sm text-muted">180 min | 1080p</div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3" data-category="music">
                <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                    <div class="block-content block-content-full text-center">
                        <div class="item item-circle bg-success-light text-success mx-auto my-20">
                            <i class="fa fa-music"></i>
                        </div>
                        <div class="font-size-lg">Stranger Things.mp3</div>
                        <div class="font-size-sm text-muted">5 min | 384 kbps</div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3" data-category="photos">
                <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                    <div class="block-content block-content-full text-center">
                        <div class="item item-circle bg-info-light text-info mx-auto my-20">
                            <i class="fa fa-image"></i>
                        </div>
                        <div class="font-size-lg">DSC00025.jpg</div>
                        <div class="font-size-sm text-muted">24 mp | 6 mb</div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3" data-category="books">
                <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                    <div class="block-content block-content-full text-center">
                        <div class="item item-circle bg-warning-light text-warning mx-auto my-20">
                            <i class="fa fa-book"></i>
                        </div>
                        <div class="font-size-lg">Start a business.epub</div>
                        <div class="font-size-sm text-muted">~ 10 hrs | 590 pages</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- END Files Filtering -->

    <!-- Users Filtering -->
    <h2 class="content-heading">Users <small>Filtering with super fast animation</small></h2>

    <!-- Content Filtering (.js-filter class is initialized in Helpers.contentFilter()) -->
    <!-- You can set the animation duration through data-speed="speed_in_ms" -->
    <div class="js-filter" data-speed="50">
        <div class="p-10 bg-white push">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link active" href="#" data-category-link="all">
                        <i class="fa fa-fw fa-users mr-5"></i> All
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-category-link="family">Family</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-category-link="friends">Friends</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-category-link="work">Work</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-6 col-xl-3" data-category="family">
                <a class="block block-link-pop" href="javascript:void(0)">
                    <div class="block-content block-content-full text-center">
                        <?php $cb->get_avatar('', 'female'); ?>
                    </div>
                    <div class="block-content block-content-full bg-body-light text-center">
                        <div class="font-w600 mb-5"><?php $cb->get_name('female'); ?></div>
                        <div class="font-size-sm text-muted">Web Designer</div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3" data-category="friends">
                <a class="block block-link-pop" href="javascript:void(0)">
                    <div class="block-content block-content-full text-center">
                        <?php $cb->get_avatar('', 'male'); ?>
                    </div>
                    <div class="block-content block-content-full bg-body-light text-center">
                        <div class="font-w600 mb-5"><?php $cb->get_name('male'); ?></div>
                        <div class="font-size-sm text-muted">Web Development</div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3" data-category="family">
                <a class="block block-link-pop" href="javascript:void(0)">
                    <div class="block-content block-content-full text-center">
                        <?php $cb->get_avatar('', 'male'); ?>
                    </div>
                    <div class="block-content block-content-full bg-body-light text-center">
                        <div class="font-w600 mb-5"><?php $cb->get_name('male'); ?></div>
                        <div class="font-size-sm text-muted">Photographer</div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3" data-category="friends">
                <a class="block block-link-pop" href="javascript:void(0)">
                    <div class="block-content block-content-full text-center">
                        <?php $cb->get_avatar('', 'female'); ?>
                    </div>
                    <div class="block-content block-content-full bg-body-light text-center">
                        <div class="font-w600 mb-5"><?php $cb->get_name('female'); ?></div>
                        <div class="font-size-sm text-muted">Graphic Designer</div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3" data-category="work">
                <a class="block block-link-pop" href="javascript:void(0)">
                    <div class="block-content block-content-full text-center">
                        <?php $cb->get_avatar('', 'female'); ?>
                    </div>
                    <div class="block-content block-content-full bg-body-light text-center">
                        <div class="font-w600 mb-5"><?php $cb->get_name('female'); ?></div>
                        <div class="font-size-sm text-muted">App Developer</div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3" data-category="family">
                <a class="block block-link-pop" href="javascript:void(0)">
                    <div class="block-content block-content-full text-center">
                        <?php $cb->get_avatar('', 'male'); ?>
                    </div>
                    <div class="block-content block-content-full bg-body-light text-center">
                        <div class="font-w600 mb-5"><?php $cb->get_name('male'); ?></div>
                        <div class="font-size-sm text-muted">Web Designer</div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3" data-category="family">
                <a class="block block-link-pop" href="javascript:void(0)">
                    <div class="block-content block-content-full text-center">
                        <?php $cb->get_avatar('', 'female'); ?>
                    </div>
                    <div class="block-content block-content-full bg-body-light text-center">
                        <div class="font-w600 mb-5"><?php $cb->get_name('female'); ?></div>
                        <div class="font-size-sm text-muted">Author</div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3" data-category="friends">
                <a class="block block-link-pop" href="javascript:void(0)">
                    <div class="block-content block-content-full text-center">
                        <?php $cb->get_avatar('', 'female'); ?>
                    </div>
                    <div class="block-content block-content-full bg-body-light text-center">
                        <div class="font-w600 mb-5"><?php $cb->get_name('female'); ?></div>
                        <div class="font-size-sm text-muted">iOS Developer</div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3" data-category="friends">
                <a class="block block-link-pop" href="javascript:void(0)">
                    <div class="block-content block-content-full text-center">
                        <?php $cb->get_avatar('', 'female'); ?>
                    </div>
                    <div class="block-content block-content-full bg-body-light text-center">
                        <div class="font-w600 mb-5"><?php $cb->get_name('female'); ?></div>
                        <div class="font-size-sm text-muted">MacOS Specialist</div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3" data-category="work">
                <a class="block block-link-pop" href="javascript:void(0)">
                    <div class="block-content block-content-full text-center">
                        <?php $cb->get_avatar('', 'male'); ?>
                    </div>
                    <div class="block-content block-content-full bg-body-light text-center">
                        <div class="font-w600 mb-5"><?php $cb->get_name('male'); ?></div>
                        <div class="font-size-sm text-muted">Web Developer</div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3" data-category="work">
                <a class="block block-link-pop" href="javascript:void(0)">
                    <div class="block-content block-content-full text-center">
                        <?php $cb->get_avatar('', 'male'); ?>
                    </div>
                    <div class="block-content block-content-full bg-body-light text-center">
                        <div class="font-w600 mb-5"><?php $cb->get_name('male'); ?></div>
                        <div class="font-size-sm text-muted">Web Designer</div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-3" data-category="work">
                <a class="block block-link-pop" href="javascript:void(0)">
                    <div class="block-content block-content-full text-center">
                        <?php $cb->get_avatar('', 'male'); ?>
                    </div>
                    <div class="block-content block-content-full bg-body-light text-center">
                        <div class="font-w600 mb-5"><?php $cb->get_name('male'); ?></div>
                        <div class="font-size-sm text-muted">Author</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- END Users Filtering -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Helpers (Content Filtering helper) -->
<script>jQuery(function(){ Codebase.helpers('content-filter'); });</script>

<?php require 'inc/_global/views/footer_end.php'; ?>