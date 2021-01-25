<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <!-- Search -->
    <form class="push" action="be_pages_generic_search.php" method="post">
        <div class="input-group input-group-lg">
            <input type="text" class="form-control" placeholder="Search web app..">
            <div class="input-group-append">
                <button type="submit" class="btn btn-secondary">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </form>
    <!-- END Search -->

    <!-- Results -->
    <div class="block">
        <ul class="nav nav-tabs nav-tabs-block" data-toggle="tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" href="#search-classic">Classic</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#search-photos">Photos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#search-users">Users</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#search-projects">Projects</a>
            </li>
        </ul>
        <div class="block-content block-content-full tab-content overflow-hidden">
            <!-- Classic -->
            <div class="tab-pane fade show active" id="search-classic" role="tabpanel">
                <div class="font-size-h3 font-w600 py-30 mb-20 text-center border-b">
                    <span class="text-primary font-w700">10</span> sites found for <mark class="text-danger">codebase</mark>
                </div>
                <div class="row items-push">
                    <?php for ($i = 1; $i < 6; $i++) { ?>
                    <div class="col-lg-6">
                        <h4 class="h5 mb-5">
                            <a href="javascript:void(0)">Codebase - Bootstrap 4 UI Framework</a>
                        </h4>
                        <div class="font-sm text-earth mb-5">https://pixelcave.com/codebase/</div>
                        <p class="font-sm text-muted">Tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti himenaeos habitant quis in sit varius lorem quis dictumst proin odio sagittis..</p>
                    </div>
                    <div class="col-lg-6">
                        <h4 class="h5 mb-5">
                            <a href="javascript:void(0)">Codebase - Bootstrap 4 UI Framework</a>
                        </h4>
                        <div class="font-sm text-earth mb-5">https://pixelcave.com/codebase/</div>
                        <p class="font-sm text-muted">Tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti himenaeos habitant quis in sit varius lorem quis dictumst proin odio sagittis..</p>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <!-- END Classic -->

            <!-- Photos -->
            <div class="tab-pane fade" id="search-photos" role="tabpanel">
                <div class="font-size-h3 font-w600 py-30 mb-20 text-center border-b">
                    <span class="text-primary font-w700">9</span> images found for <mark class="text-danger">mountain</mark>
                </div>
                <div class="row gutters-tiny">
                    <div class="col-md-6 col-lg-4 push">
                        <img class="img-fluid" src="<?php echo $cb->assets_folder; ?>/media/photos/photo1.jpg" alt="">
                    </div>
                    <div class="col-md-6 col-lg-4 push">
                        <img class="img-fluid" src="<?php echo $cb->assets_folder; ?>/media/photos/photo2.jpg" alt="">
                    </div>
                    <div class="col-md-6 col-lg-4 push">
                        <img class="img-fluid" src="<?php echo $cb->assets_folder; ?>/media/photos/photo6.jpg" alt="">
                    </div>
                    <div class="col-md-6 col-lg-4 push">
                        <img class="img-fluid" src="<?php echo $cb->assets_folder; ?>/media/photos/photo21.jpg" alt="">
                    </div>
                    <div class="col-md-6 col-lg-4 push">
                        <img class="img-fluid" src="<?php echo $cb->assets_folder; ?>/media/photos/photo22.jpg" alt="">
                    </div>
                    <div class="col-md-6 col-lg-4 push">
                        <img class="img-fluid" src="<?php echo $cb->assets_folder; ?>/media/photos/photo9.jpg" alt="">
                    </div>
                    <div class="col-md-6 col-lg-4 push">
                        <img class="img-fluid" src="<?php echo $cb->assets_folder; ?>/media/photos/photo23.jpg" alt="">
                    </div>
                    <div class="col-md-6 col-lg-4 push">
                        <img class="img-fluid" src="<?php echo $cb->assets_folder; ?>/media/photos/photo24.jpg" alt="">
                    </div>
                    <div class="col-md-6 col-lg-4 push">
                        <img class="img-fluid" src="<?php echo $cb->assets_folder; ?>/media/photos/photo25.jpg" alt="">
                    </div>
                </div>
            </div>
            <!-- END Photos -->

            <!-- Users -->
            <div class="tab-pane fade" id="search-users" role="tabpanel">
                <div class="font-size-h3 font-w600 py-30 mb-20 text-center border-b">
                    <span class="text-primary font-w700">10</span> users found for <mark class="text-danger">client</mark>
                </div>
                <table class="table table-striped table-borderless table-hover table-vcenter">
                    <thead class="thead-light">
                        <tr>
                            <th class="d-none d-sm-table-cell text-center" style="width: 40px;">#</th>
                            <th class="text-center" style="width: 70px;"><i class="si si-user"></i></th>
                            <th>Name</th>
                            <th class="d-none d-sm-table-cell">Email</th>
                            <th class="d-none d-lg-table-cell" style="width: 15%;">Access</th>
                            <th class="text-center" style="width: 80px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $gender = array('male', 'female');

                        for ($i = 1; $i < 11; $i++) {
                            $gender_random = $gender[rand(0,1)];
                        ?>
                        <tr>
                            <td class="d-none d-sm-table-cell text-center">
                                <span class="badge badge-pill badge-primary"><?php echo $i; ?></span>
                            </td>
                            <td class="text-center">
                                <?php $cb->get_avatar(0, $gender_random, 48); ?>
                            </td>
                            <td class="font-w600">
                                <a href="javascript:void(0)"><?php $cb->get_name($gender_random); ?></a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                client<?php echo $i; ?>@example.com
                            </td>
                            <td class="d-none d-lg-table-cell">
                                <?php $cb->get_tag(); ?>
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit">
                                        <i class="fa fa-pencil"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Delete">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- END Users -->

            <!-- Projects -->
            <div class="tab-pane fade" id="search-projects" role="tabpanel">
                <div class="font-size-h3 font-w600 py-30 mb-20 text-center border-b">
                    <span class="text-primary font-w700">6</span> projects found for <mark class="text-danger">creativity</mark>
                </div>
                <table class="table table-striped table-borderless table-hover table-vcenter">
                    <thead class="thead-light">
                        <tr>
                            <th style="width: 50%;">Project</th>
                            <th class="d-none d-lg-table-cell text-center" style="width: 15%;">Status</th>
                            <th class="d-none d-lg-table-cell text-center" style="width: 15%;">Sales</th>
                            <th class="text-center" style="width: 20%;">Earnings</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <h4 class="h5 mt-15 mb-5">
                                    <a href="javascript:void(0)">Web Application Framework</a>
                                </h4>
                                <p class="d-none d-sm-block text-muted">
                                    Your web applications have never been so easy to create and publish.
                                </p>
                            </td>
                            <td class="d-none d-lg-table-cell text-center">
                                <span class="badge badge-success">Completed</span>
                            </td>
                            <td class="d-none d-lg-table-cell font-size-xl text-center font-w600">1795</td>
                            <td class="font-size-xl text-center font-w600">$ 21,987</td>
                        </tr>
                        <tr>
                            <td>
                                <h4 class="h5 mt-15 mb-5">
                                    <a href="javascript:void(0)">WP Theme</a>
                                </h4>
                                <p class="d-none d-sm-block text-muted">
                                    Create a fully functional website with just a few clicks.
                                </p>
                            </td>
                            <td class="d-none d-lg-table-cell text-center">
                                <span class="badge badge-warning">In Progress</span>
                            </td>
                            <td class="d-none d-lg-table-cell font-size-xl text-center font-w600">1680</td>
                            <td class="font-size-xl text-center font-w600">$ 11,350</td>
                        </tr>
                        <tr>
                            <td>
                                <h4 class="h5 mt-15 mb-5">
                                    <a href="javascript:void(0)">Dashboard Template</a>
                                </h4>
                                <p class="d-none d-sm-block text-muted">
                                    Explore new designs with this new and fresh dashboard admin template.
                                </p>
                            </td>
                            <td class="d-none d-lg-table-cell text-center">
                                <span class="badge badge-success">Completed</span>
                            </td>
                            <td class="d-none d-lg-table-cell font-size-xl text-center font-w600">3500</td>
                            <td class="font-size-xl text-center font-w600">$ 16,218</td>
                        </tr>
                        <tr>
                            <td>
                                <h4 class="h5 mt-15 mb-5">
                                    <a href="javascript:void(0)">Flaticon Set</a>
                                </h4>
                                <p class="d-none d-sm-block text-muted">
                                    A beatifully and and crafted icon set including more than 3000 icons.
                                </p>
                            </td>
                            <td class="d-none d-lg-table-cell text-center">
                                <span class="badge badge-success">Completed</span>
                            </td>
                            <td class="d-none d-lg-table-cell font-size-xl text-center font-w600">2500</td>
                            <td class="font-size-xl text-center font-w600">$ 18,800</td>
                        </tr>
                        <tr>
                            <td>
                                <h4 class="h5 mt-15 mb-5">
                                    <a href="javascript:void(0)">iOS UI Kit</a>
                                </h4>
                                <p class="d-none d-sm-block text-muted">
                                    Create your app wireframes easily with this new UI Kit featuring iOS based designs.
                                </p>
                            </td>
                            <td class="d-none d-lg-table-cell text-center">
                                <span class="badge badge-danger">Cancelled</span>
                            </td>
                            <td class="d-none d-lg-table-cell font-size-xl text-center font-w600">2690</td>
                            <td class="font-size-xl text-center font-w600">$ 10,002</td>
                        </tr>
                        <tr>
                            <td>
                                <h4 class="h5 mt-15 mb-5">
                                    <a href="javascript:void(0)">Mobile App Framework</a>
                                </h4>
                                <p class="d-none d-sm-block text-muted">
                                    Create your iOS and Android applications with this powerful and modern framework.
                                </p>
                            </td>
                            <td class="d-none d-lg-table-cell text-center">
                                <span class="badge badge-success">Completed</span>
                            </td>
                            <td class="d-none d-lg-table-cell font-size-xl text-center font-w600">1980</td>
                            <td class="font-size-xl text-center font-w600">$ 25,985</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- END Projects -->
        </div>
    </div>
    <!-- END Results -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>