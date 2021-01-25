<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Codebase - Page specific configuration
$cb->l_header_style = '';
?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<!-- User Info -->
<div class="bg-image bg-image-bottom" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo13@2x.jpg');">
    <div class="bg-primary-dark-op py-30">
        <div class="content content-full text-center">
            <!-- Avatar -->
            <div class="mb-15">
                <a class="img-link" href="be_pages_generic_profile.php">
                    <?php $cb->get_avatar(15, '', 96, 'img-thumb'); ?>
                </a>
            </div>
            <!-- END Avatar -->

            <!-- Personal -->
            <h1 class="h3 text-white font-w700 mb-10">
                John Smith
            </h1>
            <h2 class="h5 text-white-op">
                Product Manager <a class="text-primary-light" href="javascript:void(0)">@GraphicXspace</a>
            </h2>
            <!-- END Personal -->

            <!-- Actions -->
            <button type="button" class="btn btn-rounded btn-hero btn-sm btn-alt-success mb-5">
                <i class="fa fa-plus mr-5"></i> Add Friend
            </button>
            <button type="button" class="btn btn-rounded btn-hero btn-sm btn-alt-primary mb-5">
                <i class="fa fa-envelope-o mr-5"></i> Message
            </button>
            <a class="btn btn-rounded btn-hero btn-sm btn-alt-secondary mb-5 px-20" href="be_pages_generic_profile_edit.php">
                <i class="fa fa-pencil"></i>
            </a>
            <!-- END Actions -->
        </div>
    </div>
</div>
<!-- END User Info -->

<!-- Main Content -->
<div class="content">
    <!-- Projects -->
    <h2 class="content-heading">
        <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary float-right">View More..</button>
        <i class="si si-briefcase mr-5"></i> Projects
    </h2>
    <div class="row items-push">
        <div class="col-md-6 col-xl-3">
            <div class="block block-rounded ribbon ribbon-modern ribbon-primary text-center">
                <div class="ribbon-box">$2500</div>
                <div class="block-content block-content-full">
                    <div class="item item-circle bg-danger text-danger-light mx-auto my-20">
                        <i class="fa fa-globe"></i>
                    </div>
                    <div class="text-warning">
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <div class="font-w600 mb-5">Website Design</div>
                    <div class="font-size-sm text-muted">https://example.com</div>
                </div>
                <div class="block-content block-content-full">
                    <a class="btn btn-rounded btn-alt-secondary" href="javascript:void(0)">
                        <i class="fa fa-briefcase mr-5"></i>View Project
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="block block-rounded ribbon ribbon-modern ribbon-primary text-center">
                <div class="ribbon-box">$499</div>
                <div class="block-content block-content-full">
                    <div class="item item-circle bg-success text-success-light mx-auto my-20">
                        <i class="fa fa-birthday-cake"></i>
                    </div>
                    <div class="text-warning">
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <div class="font-w600 mb-5">Special Icon Set</div>
                    <div class="font-size-sm text-muted">3000 icons</div>
                </div>
                <div class="block-content block-content-full">
                    <a class="btn btn-rounded btn-alt-secondary" href="javascript:void(0)">
                        <i class="fa fa-briefcase mr-5"></i>View Project
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="block block-rounded ribbon ribbon-modern ribbon-primary text-center">
                <div class="ribbon-box">$2999</div>
                <div class="block-content block-content-full">
                    <div class="item item-circle bg-info text-info-light mx-auto my-20">
                        <i class="fa fa-windows"></i>
                    </div>
                    <div class="text-warning">
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <div class="font-w600 mb-5">Windows App</div>
                    <div class="font-size-sm text-muted">Accounting Dashboard</div>
                </div>
                <div class="block-content block-content-full">
                    <a class="btn btn-rounded btn-alt-secondary" href="javascript:void(0)">
                        <i class="fa fa-briefcase mr-5"></i>View Project
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="block block-rounded ribbon ribbon-modern ribbon-primary text-center">
                <div class="ribbon-box">$3999</div>
                <div class="block-content block-content-full">
                    <div class="item item-circle bg-warning text-warning-light mx-auto my-20">
                        <i class="fa fa-mobile"></i>
                    </div>
                    <div class="text-warning">
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <div class="font-w600 mb-5">iOS App</div>
                    <div class="font-size-sm text-muted">Accounting Dashboard</div>
                </div>
                <div class="block-content block-content-full">
                    <a class="btn btn-rounded btn-alt-secondary" href="javascript:void(0)">
                        <i class="fa fa-briefcase mr-5"></i>View Project
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- END Projects -->

    <!-- Colleagues -->
    <h2 class="content-heading">
        <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary float-right">View More..</button>
        <i class="si si-users mr-5"></i> Colleagues
    </h2>
    <div class="row items-push">
        <div class="col-md-6 col-xl-3">
            <div class="block block-rounded text-center">
                <div class="block-content block-content-full">
                    <?php $cb->get_avatar('', 'female'); ?>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <div class="font-w600 mb-5"><?php $cb->get_name('female'); ?></div>
                    <div class="font-size-sm text-muted">Product Designer</div>
                </div>
                <div class="block-content block-content-full">
                    <a class="btn btn-rounded btn-alt-success" href="javascript:void(0)">
                        <i class="fa fa-plus mr-5"></i>Add
                    </a>
                    <a class="btn btn-rounded btn-alt-secondary" href="javascript:void(0)">
                        <i class="fa fa-user-circle mr-5"></i>Profile
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="block block-rounded text-center">
                <div class="block-content block-content-full">
                    <?php $cb->get_avatar('', 'male'); ?>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <div class="font-w600 mb-5"><?php $cb->get_name('male'); ?></div>
                    <div class="font-size-sm text-muted">Senior Developer</div>
                </div>
                <div class="block-content block-content-full">
                    <a class="btn btn-rounded btn-alt-success" href="javascript:void(0)">
                        <i class="fa fa-plus mr-5"></i>Add
                    </a>
                    <a class="btn btn-rounded btn-alt-secondary" href="javascript:void(0)">
                        <i class="fa fa-user-circle mr-5"></i>Profile
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="block block-rounded text-center">
                <div class="block-content block-content-full">
                    <?php $cb->get_avatar('', 'male'); ?>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <div class="font-w600 mb-5"><?php $cb->get_name('male'); ?></div>
                    <div class="font-size-sm text-muted">Junior Designer</div>
                </div>
                <div class="block-content block-content-full">
                    <a class="btn btn-rounded btn-alt-success" href="javascript:void(0)">
                        <i class="fa fa-plus mr-5"></i>Add
                    </a>
                    <a class="btn btn-rounded btn-alt-secondary" href="javascript:void(0)">
                        <i class="fa fa-user-circle mr-5"></i>Profile
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="block block-rounded text-center">
                <div class="block-content block-content-full">
                    <?php $cb->get_avatar('', 'female'); ?>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <div class="font-w600 mb-5"><?php $cb->get_name('female'); ?></div>
                    <div class="font-size-sm text-muted">Marketing</div>
                </div>
                <div class="block-content block-content-full">
                    <a class="btn btn-rounded btn-alt-success" href="javascript:void(0)">
                        <i class="fa fa-plus mr-5"></i>Add
                    </a>
                    <a class="btn btn-rounded btn-alt-secondary" href="javascript:void(0)">
                        <i class="fa fa-user-circle mr-5"></i>Profile
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- END Colleagues -->

    <!-- Articles -->
    <h2 class="content-heading">
        <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary float-right">View More..</button>
        <i class="si si-note mr-5"></i> Articles
    </h2>
    <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
        <div class="block-content block-content-full">
            <p class="font-size-sm text-muted float-sm-right mb-5"><em>3 hours ago</em></p>
            <h4 class="font-size-default text-primary mb-0">
                <i class="fa fa-newspaper-o text-muted mr-5"></i> 5 things I've learned working from home
            </h4>
        </div>
    </a>
    <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
        <div class="block-content block-content-full">
            <p class="font-size-sm text-muted float-sm-right mb-5"><em>2 days ago</em></p>
            <h4 class="font-size-default text-primary mb-0">
                <i class="fa fa-newspaper-o text-muted mr-5"></i> Vue.js or React.js? Let's dive in!
            </h4>
        </div>
    </a>
    <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
        <div class="block-content block-content-full">
            <p class="font-size-sm text-muted float-sm-right mb-5"><em>1 week ago</em></p>
            <h4 class="font-size-default text-primary mb-0">
                <i class="fa fa-newspaper-o text-muted mr-5"></i> 10 important things I wish I knew
            </h4>
        </div>
    </a>
    <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
        <div class="block-content block-content-full">
            <p class="font-size-sm text-muted float-sm-right mb-5"><em>2 weeks ago</em></p>
            <h4 class="font-size-default text-primary mb-0">
                <i class="fa fa-newspaper-o text-muted mr-5"></i> Bringing your productivity back
            </h4>
        </div>
    </a>
    <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
        <div class="block-content block-content-full">
            <p class="font-size-sm text-muted float-sm-right mb-5"><em>1 month ago</em></p>
            <h4 class="font-size-default text-primary mb-0">
                <i class="fa fa-newspaper-o text-muted mr-5"></i> Creating a super smooth CSS animation
            </h4>
        </div>
    </a>
    <!-- END Articles -->
</div>
<!-- END Main Content -->
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>