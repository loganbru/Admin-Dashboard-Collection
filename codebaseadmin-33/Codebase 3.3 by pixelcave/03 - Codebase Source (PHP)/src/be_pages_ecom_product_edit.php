<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Codebase - Page specific configuration
$cb->l_sidebar_inverse = true;
$cb->l_header_style    = 'glass-inverse';
?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $cb->get_css('js/plugins/select2/css/select2.min.css'); ?>
<?php $cb->get_css('js/plugins/jquery-tags-input/jquery.tagsinput.min.css'); ?>
<?php $cb->get_css('js/plugins/dropzonejs/dist/min/dropzone.min.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo8@2x.jpg');">
    <div class="bg-black-op-75">
        <div class="content content-top content-full text-center">
            <div class="py-20">
                <h1 class="h2 font-w700 text-white mb-10">Dark Souls III</h1>
                <h2 class="h4 font-w400 text-white-op mb-0">In <a class="text-primary-light link-effect" href="be_pages_ecom_products.php">video game</a> category.</h2>
            </div>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Breadcrumb -->
<div class="bg-body-light border-b">
    <div class="content py-5 text-center">
        <nav class="breadcrumb bg-body-light mb-0">
            <a class="breadcrumb-item" href="be_pages_ecom_dashboard.php">e-Commerce</a>
            <a class="breadcrumb-item" href="be_pages_ecom_products.php">Products</a>
            <span class="breadcrumb-item active">Dark Souls III</span>
        </nav>
    </div>
</div>
<!-- END Breadcrumb -->

<!-- Page Content -->
<div class="content">
    <!-- Overview -->
    <h2 class="content-heading">Overview</h2>
    <div class="row gutters-tiny">
        <!-- In Orders -->
        <div class="col-md-6 col-xl-4">
            <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full block-sticky-options">
                    <div class="block-options">
                        <div class="block-options-item">
                            <i class="fa fa-shopping-basket fa-2x text-info-light"></i>
                        </div>
                    </div>
                    <div class="py-20 text-center">
                        <div class="font-size-h2 font-w700 mb-0 text-info" data-toggle="countTo" data-to="39">0</div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">In Orders</div>
                    </div>
                </div>
            </a>
        </div>
        <!-- END In Orders -->

        <!-- Stock -->
        <div class="col-md-6 col-xl-4">
            <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full block-sticky-options">
                    <div class="block-options">
                        <div class="block-options-item">
                            <i class="fa fa-check fa-2x text-success-light"></i>
                        </div>
                    </div>
                    <div class="py-20 text-center">
                        <div class="font-size-h2 font-w700 mb-0 text-success" data-toggle="countTo" data-to="85">0</div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Stock</div>
                    </div>
                </div>
            </a>
        </div>
        <!-- END Stock -->

        <!-- Delete Product -->
        <div class="col-xl-4">
            <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full block-sticky-options">
                    <div class="block-options">
                        <div class="block-options-item">
                            <i class="fa fa-archive fa-2x text-danger-light"></i>
                        </div>
                    </div>
                    <div class="py-20 text-center">
                        <div class="font-size-h2 font-w700 mb-0 text-danger">
                            <i class="fa fa-times"></i>
                        </div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Delete Product</div>
                    </div>
                </div>
            </a>
        </div>
        <!-- END Delete Product -->
    </div>
    <!-- END Overview -->

    <!-- Update Product -->
    <h2 class="content-heading">Update Product</h2>
    <div class="row gutters-tiny">
        <!-- Basic Info -->
        <div class="col-md-7">
            <form action="be_pages_ecom_product_edit.php" method="post" onsubmit="return false;">
                <div class="block block-rounded block-themed">
                    <div class="block-header bg-gd-primary">
                        <h3 class="block-title">Basic Info</h3>
                        <div class="block-options">
                            <button type="submit" class="btn btn-sm btn-alt-primary">
                                <i class="fa fa-save mr-5"></i>Save
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full">
                        <div class="form-group row">
                            <label class="col-12">Product ID</label>
                            <div class="col-12">
                                <div class="form-control-plaintext">2599</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="ecom-product-name">Name</label>
                            <div class="col-12">
                                <input type="text" class="form-control" id="ecom-product-name" name="ecom-product-name" placeholder="Product Name" value="Dark Souls III">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="example-select2">Category</label>
                            <div class="col-12">
                                <!-- Select2 (.js-select2 class is initialized in Helpers.select2()) -->
                                <!-- For more info and examples you can check out https://github.com/select2/select2 -->
                                <select class="js-select2 form-control" id="example-select2" name="example-select2" style="width: 100%;" data-placeholder="Choose one..">
                                    <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                    <option value="1" selected>Video Games</option>
                                    <option value="2">Electronics</option>
                                    <option value="3">Mobile Phones</option>
                                    <option value="4">House</option>
                                    <option value="5">Hobby</option>
                                    <option value="6">Auto - Moto</option>
                                    <option value="7">Kids</option>
                                    <option value="8">Health</option>
                                    <option value="9">Fashion</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12">Description</label>
                            <div class="col-12">
                                <!-- CKEditor (js-ckeditor id is initialized in Helpers.ckeditor()) -->
                                <!-- For more info and examples you can check out http://ckeditor.com -->
                                <textarea class="form-control" id="js-ckeditor" name="js-ckeditor" placeholder="Main Description" rows="8">Dark Souls III is an action role-playing game played in a third-person perspective, similar to previous games in the series. According to lead director and series creator Hidetaka Miyazaki, the game's gameplay design followed "closely from Dark Souls II". Players are equipped with a variety of weapons to fight against enemies, such as bows, throwable projectiles, and swords. Shields can act as secondary weapons but they are mainly used to deflect enemies' attacks and protect the player from suffering damage. Each weapon has two basic types of attacks, one being a standard attack, and the other being slightly more powerful that can be charged up, similar to FromSoftware's previous game, Bloodborne. In addition, attacks can be evaded through dodge-rolling. Bonfires, which serve as checkpoints, return from previous installments. Ashes, according to Miyazaki, play an important role in the game. Magic is featured in the game, with a returning magic system from Demon's Souls, now known as "focus points" (FP). When performing spells, the players' focus points are consumed. There are two separate types of Estus Flasks in the game, which can be allotted to fit a players' particular play style. One of them refills hit points like previous games in the series, while another, newly introduced in Dark Souls III, refills focus points. Combat and movements were made faster and more fluid in Dark Souls III, with several players' movements, such as backstepping and swinging heavy weapons, able to be performed more rapidly, allowing players to deal more damage in a short period of time.</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="ecom-product-description-short">Short Description</label>
                            <div class="col-12">
                                <textarea class="form-control" id="ecom-product-description-short" name="ecom-product-description-short" placeholder="Description visible on preview.." rows="6">Dark Souls III is an action role-playing video game developed by FromSoftware and published by Bandai Namco Entertainment for PlayStation 4, Xbox One, and Microsoft Windows.</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="ecom-product-stock">Stock</label>
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-fw fa-archive"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="ecom-product-stock" name="ecom-product-stock" placeholder="0" value="85">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="ecom-product-price">Price</label>
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-fw fa-usd"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="ecom-product-price" name="ecom-product-price" placeholder="Price in USD.." value="69,00">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- END Basic Info -->

        <!-- More Options -->
        <div class="col-md-5">
            <!-- Status -->
            <form action="be_pages_ecom_product_edit.php" method="post" onsubmit="return false;">
                <div class="block block-rounded block-themed">
                    <div class="block-header bg-gd-primary">
                        <h3 class="block-title">Status</h3>
                        <div class="block-options">
                            <button type="submit" class="btn btn-sm btn-alt-primary">
                                <i class="fa fa-save mr-5"></i>Save
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full">
                        <div class="form-group row">
                            <label class="col-12">Condition</label>
                            <div class="col-12">
                                <label class="css-control css-control-primary css-radio">
                                    <input type="radio" class="css-control-input" id="ecom-product-condition-new" name="ecom-product-condition" checked>
                                    <span class="css-control-indicator"></span> New
                                </label>
                                <label class="css-control css-control-secondary css-radio">
                                    <input type="radio" class="css-control-input" id="ecom-product-condition-old" name="ecom-product-condition">
                                    <span class="css-control-indicator"></span> Old
                                </label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12">Published</label>
                            <div class="col-12">
                                <label class="css-control css-control-success css-switch">
                                    <input type="checkbox" class="css-control-input" id="ecom-product-published" name="ecom-product-published" checked>
                                    <span class="css-control-indicator"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- END Status -->

            <!-- Meta Data -->
            <form action="be_pages_ecom_product_edit.php" method="post" onsubmit="return false;">
                <div class="block block-rounded block-themed">
                    <div class="block-header bg-gd-primary">
                        <h3 class="block-title">Meta Data</h3>
                        <div class="block-options">
                            <button type="submit" class="btn btn-sm btn-alt-primary">
                                <i class="fa fa-save mr-5"></i>Save
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <!-- Bootstrap Maxlength (.js-maxlength class is initialized in Helpers.maxlength()) -->
                        <!-- For more info and examples you can check out https://github.com/mimo84/bootstrap-maxlength -->
                        <div class="form-group row">
                            <label class="col-12" for="ecom-product-meta-title">Title</label>
                            <div class="col-12">
                                <input type="text" class="js-maxlength form-control" id="ecom-product-meta-title" name="ecom-product-meta-title" maxlength="55" data-always-show="true" data-placement="top" placeholder="Meta Title" value="Dark Souls III">
                                <div class="form-text text-muted font-size-sm text-right">55 Characters Max</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="ecom-product-meta-tags">Tags</label>
                            <div class="col-12">
                                <!-- jQuery Tags Input (.js-tags-input class is initialized in Helpers.tagsInput()) -->
                                <!-- For more info and examples you can check out https://github.com/xoxco/jQuery-Tags-Input -->
                                <input type="text" class="js-tags-input form-control" data-height="34px" id="ecom-product-meta-tags" name="ecom-product-meta-tags" placeholder="Meta Tags" value="ps4, rpg, action">
                                <div class="form-text text-muted font-size-sm text-right">Choose the best ones!</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="ecom-product-meta-description">Description</label>
                            <div class="col-12">
                                <textarea class="js-maxlength form-control" id="ecom-product-meta-description" name="ecom-product-meta-description" maxlength="115" data-always-show="true" data-placement="top" placeholder="Meta Description" rows="2">Dark Souls III is an action role-playing video game developed by FromSoftware.</textarea>
                                <div class="form-text text-muted font-size-sm text-right">115 Characters Max</div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- END Meta Data -->

            <!-- Images -->
            <div class="block block-rounded block-themed">
                <div class="block-header bg-gd-primary">
                    <h3 class="block-title">Images</h3>
                </div>
                <div class="block-content block-content-full">
                    <!-- Existing Images -->
                    <div class="row gutters-tiny items-push">
                        <div class="col-sm-6 col-xl-4">
                            <div class="options-container">
                                <?php $cb->get_photo(8, false, 'img-fluid options-item'); ?>
                                <div class="options-overlay bg-black-op-75">
                                    <div class="options-overlay-content">
                                        <a class="btn btn-sm btn-rounded btn-alt-danger min-width-75" href="javascript:void(0)">
                                            <i class="fa fa-times"></i> Remove
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <div class="options-container">
                                <?php $cb->get_photo(18, false, 'img-fluid options-item'); ?>
                                <div class="options-overlay bg-black-op-75">
                                    <div class="options-overlay-content">
                                        <a class="btn btn-sm btn-rounded btn-alt-danger min-width-75" href="javascript:void(0)">
                                            <i class="fa fa-times"></i> Remove
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Existing Images -->

                    <!-- DropzoneJS Container -->
                    <!-- For more info and examples you can check out http://www.dropzonejs.com/#usage -->
                    <form class="dropzone" action="be_pages_ecom_product_edit.php"></form>
                </div>
            </div>
            <!-- END Images -->
        </div>
        <!-- END More Options -->
    </div>
    <!-- END Update Product -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/ckeditor/ckeditor.js'); ?>
<?php $cb->get_js('js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js'); ?>
<?php $cb->get_js('js/plugins/select2/js/select2.full.min.js'); ?>
<?php $cb->get_js('js/plugins/jquery-tags-input/jquery.tagsinput.min.js'); ?>
<?php $cb->get_js('js/plugins/dropzonejs/dropzone.min.js'); ?>

<!-- Page JS Helpers (CKEditor + BS Maxlength + Select + Tags Inputs plugins) -->
<script>jQuery(function(){ Codebase.helpers(['ckeditor', 'maxlength', 'select2', 'tags-inputs']); });</script>

<?php require 'inc/_global/views/footer_end.php'; ?>