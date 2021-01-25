<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $cb->get_css('js/plugins/nestable2/jquery.nestable.min.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <!-- Nestable2, .js-nestable-* classes are initialized in js/pages/be_comp_nestable.min.js which was auto compiled from _es6/pages/be_comp_nestable.js -->
    <!-- For more info and examples you can check out https://github.com/RamonSmit/Nestable2 -->

    <!-- Connected lists -->
    <h2 class="content-heading">Nestable2 <small>Connected lists</small></h2>
    <div class="row">
        <div class="col-xl-4">
            <!-- Simple -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Simple</h3>
                </div>
                <div class="block-content block-content-full">
                    <div class="js-nestable-connected-simple dd">
                        <ol class="dd-list">
                            <li class="dd-item" data-id="1">
                                <div class="dd-handle">Projects</div>
                                <ol class="dd-list">
                                    <li class="dd-item" data-id="2">
                                        <div class="dd-handle">Themes</div>
                                    </li>
                                    <li class="dd-item" data-id="3">
                                        <div class="dd-handle">Apps</div>
                                    </li>
                                    <li class="dd-item" data-id="4">
                                        <div class="dd-handle">Games</div>
                                    </li>
                                </ol>
                            </li>
                            <li class="dd-item" data-id="5">
                                <div class="dd-handle">Tutorials</div>
                                <ol class="dd-list">
                                    <li class="dd-item" data-id="6">
                                        <div class="dd-handle">Design</div>
                                    </li>
                                    <li class="dd-item" data-id="7">
                                        <div class="dd-handle">Coding</div>
                                    </li>
                                    <li class="dd-item" data-id="8">
                                        <div class="dd-handle">Marketing</div>
                                    </li>
                                </ol>
                            </li>
                            <li class="dd-item" data-id="9">
                                <div class="dd-handle">Inspiration</div>
                            </li>
                            <li class="dd-item" data-id="10">
                                <div class="dd-handle">Resources</div>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- END Simple -->
        </div>
        <div class="col-xl-4">
            <!-- With Icons -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">With Icons</h3>
                </div>
                <div class="block-content block-content-full">
                    <div class="js-nestable-connected-icons dd">
                        <ol class="dd-list">
                            <li class="dd-item" data-id="11">
                                <div class="dd-handle">
                                    <i class="fa fa-briefcase mr-5"></i> Projects</div>
                                <ol class="dd-list">
                                    <li class="dd-item" data-id="12">
                                        <div class="dd-handle">
                                            <i class="fa fa-paint-brush mr-5"></i> Themes
                                        </div>
                                    </li>
                                    <li class="dd-item" data-id="13">
                                        <div class="dd-handle">
                                            <i class="fa fa-cubes mr-5"></i> Apps
                                        </div>
                                    </li>
                                    <li class="dd-item" data-id="14">
                                        <div class="dd-handle">
                                            <i class="fa fa-gamepad mr-5"></i> Games
                                        </div>
                                    </li>
                                </ol>
                            </li>
                            <li class="dd-item" data-id="15">
                                <div class="dd-handle">
                                    <i class="fa fa-support mr-5"></i> Tutorials
                                </div>
                                <ol class="dd-list">
                                    <li class="dd-item" data-id="16">
                                        <div class="dd-handle">
                                            <i class="fa fa-paw mr-5"></i> Design
                                        </div>
                                    </li>
                                    <li class="dd-item" data-id="17">
                                        <div class="dd-handle">
                                            <i class="fa fa-code mr-5"></i> Coding
                                        </div>
                                    </li>
                                    <li class="dd-item" data-id="18">
                                        <div class="dd-handle">
                                            <i class="fa fa-users mr-5"></i> Marketing
                                        </div>
                                    </li>
                                </ol>
                            </li>
                            <li class="dd-item" data-id="19">
                                <div class="dd-handle">
                                    <i class="fa fa-rocket mr-5"></i> Inspiration
                                </div>
                            </li>
                            <li class="dd-item" data-id="20">
                                <div class="dd-handle">
                                    <i class="fa fa-coffee mr-5"></i> Resources
                                </div>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- END With Icons -->
        </div>
        <div class="col-xl-4">
            <!-- Tree View -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Tree View</h3>
                </div>
                <div class="block-content block-content-full">
                    <div class="js-nestable-connected-treeview dd">
                        <ol class="dd-list">
                            <li class="dd-item" data-id="21">
                                <div class="dd-handle">
                                    <i class="fa fa-folder text-warning mr-1"></i> Photos
                                </div>
                                <ol class="dd-list">
                                    <li class="dd-item" data-id="22">
                                        <div class="dd-handle">
                                            <i class="fa fa-file-image-o text-info mr-1"></i> image_1.jpg
                                        </div>
                                    </li>
                                    <li class="dd-item" data-id="23">
                                        <div class="dd-handle">
                                            <i class="fa fa-file-image-o text-info mr-1"></i> image_2.jpg
                                        </div>
                                    </li>
                                    <li class="dd-item" data-id="24">
                                        <div class="dd-handle">
                                            <i class="fa fa-file-image-o text-info mr-1"></i> image_3.jpg
                                        </div>
                                    </li>
                                    <li class="dd-item" data-id="25">
                                        <div class="dd-handle">
                                            <i class="fa fa-file-image-o text-info mr-1"></i> image_4.jpg
                                        </div>
                                    </li>
                                </ol>
                            </li>
                            <li class="dd-item" data-id="26">
                                <div class="dd-handle">
                                    <i class="fa fa-folder text-warning mr-1"></i> Videos
                                </div>
                                <ol class="dd-list">
                                    <li class="dd-item" data-id="27">
                                        <div class="dd-handle">
                                            <i class="fa fa-file-movie-o text-info mr-1"></i> video_1.mov
                                        </div>
                                    </li>
                                </ol>
                            </li>
                            <li class="dd-item" data-id="28">
                                <div class="dd-handle">
                                    <i class="fa fa-folder text-warning mr-1"></i> Notes
                                </div>
                                <ol class="dd-list">
                                    <li class="dd-item" data-id="29">
                                        <div class="dd-handle">
                                            <i class="fa fa-file-text-o text-info mr-1"></i> Work.docx
                                        </div>
                                    </li>
                                </ol>
                            </li>
                            <li class="dd-item" data-id="30">
                                <div class="dd-handle">
                                    <i class="fa fa-file-archive-o text-info mr-1"></i> Backup.zip
                                </div>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- END Tree View -->
        </div>
    </div>
    <!-- END Connected lists -->

    <!-- Unconnected lists -->
    <h2 class="content-heading">Nestable2 <small>Unconnected lists</small></h2>
    <div class="row">
        <div class="col-xl-4">
            <!-- Simple -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Simple</h3>
                </div>
                <div class="block-content block-content-full">
                    <div class="js-nestable-simple dd">
                    <ol class="dd-list">
                            <li class="dd-item" data-id="1">
                                <div class="dd-handle">Projects</div>
                                <ol class="dd-list">
                                    <li class="dd-item" data-id="2">
                                        <div class="dd-handle">Themes</div>
                                    </li>
                                    <li class="dd-item" data-id="3">
                                        <div class="dd-handle">Apps</div>
                                    </li>
                                    <li class="dd-item" data-id="4">
                                        <div class="dd-handle">Games</div>
                                    </li>
                                </ol>
                            </li>
                            <li class="dd-item" data-id="5">
                                <div class="dd-handle">Tutorials</div>
                                <ol class="dd-list">
                                    <li class="dd-item" data-id="6">
                                        <div class="dd-handle">Design</div>
                                    </li>
                                    <li class="dd-item" data-id="7">
                                        <div class="dd-handle">Coding</div>
                                    </li>
                                    <li class="dd-item" data-id="8">
                                        <div class="dd-handle">Marketing</div>
                                    </li>
                                </ol>
                            </li>
                            <li class="dd-item" data-id="9">
                                <div class="dd-handle">Inspiration</div>
                            </li>
                            <li class="dd-item" data-id="10">
                                <div class="dd-handle">Resources</div>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- END Simple -->
        </div>
        <div class="col-xl-4">
            <!-- With Icons -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">With Icons</h3>
                </div>
                <div class="block-content block-content-full">
                    <div class="js-nestable-icons dd">
                    <ol class="dd-list">
                            <li class="dd-item" data-id="1">
                                <div class="dd-handle">
                                    <i class="fa fa-briefcase mr-5"></i> Projects</div>
                                <ol class="dd-list">
                                    <li class="dd-item" data-id="2">
                                        <div class="dd-handle">
                                            <i class="fa fa-paint-brush mr-5"></i> Themes
                                        </div>
                                    </li>
                                    <li class="dd-item" data-id="3">
                                        <div class="dd-handle">
                                            <i class="fa fa-cubes mr-5"></i> Apps
                                        </div>
                                    </li>
                                    <li class="dd-item" data-id="4">
                                        <div class="dd-handle">
                                            <i class="fa fa-gamepad mr-5"></i> Games
                                        </div>
                                    </li>
                                </ol>
                            </li>
                            <li class="dd-item" data-id="5">
                                <div class="dd-handle">
                                    <i class="fa fa-support mr-5"></i> Tutorials
                                </div>
                                <ol class="dd-list">
                                    <li class="dd-item" data-id="6">
                                        <div class="dd-handle">
                                            <i class="fa fa-paw mr-5"></i> Design
                                        </div>
                                    </li>
                                    <li class="dd-item" data-id="7">
                                        <div class="dd-handle">
                                            <i class="fa fa-code mr-5"></i> Coding
                                        </div>
                                    </li>
                                    <li class="dd-item" data-id="8">
                                        <div class="dd-handle">
                                            <i class="fa fa-users mr-5"></i> Marketing
                                        </div>
                                    </li>
                                </ol>
                            </li>
                            <li class="dd-item" data-id="9">
                                <div class="dd-handle">
                                    <i class="fa fa-rocket mr-5"></i> Inspiration
                                </div>
                            </li>
                            <li class="dd-item" data-id="10">
                                <div class="dd-handle">
                                    <i class="fa fa-coffee mr-5"></i> Resources
                                </div>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- END With Icons -->
        </div>
        <div class="col-xl-4">
            <!-- Tree View -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Tree View</h3>
                </div>
                <div class="block-content block-content-full">
                    <div class="js-nestable-treeview dd">
                        <ol class="dd-list">
                            <li class="dd-item" data-id="1">
                                <div class="dd-handle">
                                    <i class="fa fa-folder text-warning mr-1"></i> Photos
                                </div>
                                <ol class="dd-list">
                                    <li class="dd-item" data-id="2">
                                        <div class="dd-handle">
                                            <i class="fa fa-file-image-o text-info mr-1"></i> image_1.jpg
                                        </div>
                                    </li>
                                    <li class="dd-item" data-id="3">
                                        <div class="dd-handle">
                                            <i class="fa fa-file-image-o text-info mr-1"></i> image_2.jpg
                                        </div>
                                    </li>
                                    <li class="dd-item" data-id="4">
                                        <div class="dd-handle">
                                            <i class="fa fa-file-image-o text-info mr-1"></i> image_3.jpg
                                        </div>
                                    </li>
                                    <li class="dd-item" data-id="5">
                                        <div class="dd-handle">
                                            <i class="fa fa-file-image-o text-info mr-1"></i> image_4.jpg
                                        </div>
                                    </li>
                                </ol>
                            </li>
                            <li class="dd-item" data-id="6">
                                <div class="dd-handle">
                                    <i class="fa fa-folder text-warning mr-1"></i> Videos
                                </div>
                                <ol class="dd-list">
                                    <li class="dd-item" data-id="7">
                                        <div class="dd-handle">
                                            <i class="fa fa-file-movie-o text-info mr-1"></i> video_1.mov
                                        </div>
                                    </li>
                                </ol>
                            </li>
                            <li class="dd-item" data-id="8">
                                <div class="dd-handle">
                                    <i class="fa fa-folder text-warning mr-1"></i> Notes
                                </div>
                                <ol class="dd-list">
                                    <li class="dd-item" data-id="9">
                                        <div class="dd-handle">
                                            <i class="fa fa-file-text-o text-info mr-1"></i> Work.docx
                                        </div>
                                    </li>
                                </ol>
                            </li>
                            <li class="dd-item" data-id="10">
                                <div class="dd-handle">
                                    <i class="fa fa-file-archive-o text-info mr-1"></i> Backup.zip
                                </div>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- END Tree View -->
        </div>
    </div>
    <!-- END Unconnected lists -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/nestable2/jquery.nestable.min.js'); ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/be_comp_nestable.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>