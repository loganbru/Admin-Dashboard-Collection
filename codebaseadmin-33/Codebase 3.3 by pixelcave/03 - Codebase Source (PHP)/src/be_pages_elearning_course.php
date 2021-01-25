<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Codebase - Page specific configuration
$cb->l_header_style = 'glass-inverse';
?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/various/landing-promo-developer-minded-html@2x.png');">
    <div class="bg-black-op">
        <div class="content content-top text-center">
            <div class="py-50">
                <h1 class="font-w700 text-white mb-10">Learn HTML5 in 10 easy steps</h1>
                <h2 class="h4 font-w400 text-white-op">10 lessons &bull; 5 hours</h2>
            </div>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <nav class="breadcrumb bg-white push">
        <a class="breadcrumb-item" href="be_pages_elearning_courses.php">Courses</a>
        <span class="breadcrumb-item active">Learn HTML5</span>
    </nav>
    <div class="row">
        <div class="col-xl-4">
            <!-- Subscribe -->
            <div class="block block-rounded">
                <div class="block-content">
                    <a class="btn btn-block btn-hero btn-noborder btn-rounded btn-success mb-10" href="javascript:void(0)">Subscribe from $19/month</a>
                    <p class="text-center">or <a class="link-effect" href="javascript:void(0)">buy this course for $14</a></p>
                </div>
            </div>
            <!-- END Subscribe -->

            <!-- Instructor -->
            <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-header block-header-default">
                    <h3 class="block-title">
                        <i class="fa fa-fw fa-graduation-cap"></i>
                        Instructor
                    </h3>
                </div>
                <div class="block-content block-content-full">
                    <div class="push">
                        <?php $cb->get_avatar(10); ?>
                    </div>
                    <div class="font-w600 mb-5">John Doe</div>
                    <div class="text-muted">Web Designer</div>
                </div>
            </a>
            <!-- END Instructor -->

            <!-- Course Info -->
            <div class="block block-rounded">
                <div class="block-header block-header-default text-center">
                    <h3 class="block-title">
                        <i class="fa fa-fw fa-info"></i>
                        About
                    </h3>
                </div>
                <div class="block-content">
                    <div class="text-warning text-center">
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                    </div>
                    <div class="font-size-sm text-muted text-center mb-20">
                        (258 reviews)
                    </div>
                    <table class="table table-borderless table-striped">
                        <tbody>
                            <tr>
                                <td>
                                    <i class="fa fa-fw fa-heart mr-10 text-danger"></i> 456 Favorites
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fa fa-fw fa-calendar mr-10"></i> 1 week ago
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fa fa-fw fa-tags mr-10"></i>
                                    <a class="badge badge-primary" href="javascript:void(0)">HTML</a>
                                    <a class="badge badge-primary" href="javascript:void(0)">CSS</a>
                                    <a class="badge badge-primary" href="javascript:void(0)">JavaScript</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END Course Info -->
        </div>
        <div class="col-xl-8">
            <!-- Lessons -->
            <div class="block block-rounded">
                <div class="block-content">
                    <!-- Introduction -->
                    <table class="table table-borderless table-vcenter mb-30">
                        <tbody>
                            <tr class="table-active">
                                <th style="width: 50px;"></th>
                                <th>1. Intro</th>
                                <th class="font-size-sm text-right">
                                    <span class="text-muted">0.5 hours</span>
                                </th>
                            </tr>
                            <tr>
                                <td class="table-success text-center">
                                    <i class="fa fa-fw fa-unlock text-success"></i>
                                </td>
                                <td>
                                    <a href="be_pages_elearning_lesson.php">1.1 HTML5 Intro (free preview)</a>
                                </td>
                                <td class="text-right">
                                    <em class="font-size-sm text-muted">30 min</em>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- END Introduction -->

                    <!-- Basics -->
                    <table class="table table-borderless table-vcenter mb-30">
                        <tbody>
                            <tr class="table-active">
                                <th style="width: 50px;"></th>
                                <th>2. Basics</th>
                                <th class="font-size-sm text-right">
                                    <span class="text-muted">2.5 hours</span>
                                </th>
                            </tr>
                            <tr>
                                <td class="table-danger text-center">
                                    <i class="fa fa-fw fa-lock text-danger"></i>
                                </td>
                                <td>
                                    <a href="javascript:void(0)">2.1 HTML5 Structure</a>
                                </td>
                                <td class="text-right">
                                    <em class="font-size-sm text-muted">30 min</em>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-danger text-center">
                                    <i class="fa fa-fw fa-lock text-danger"></i>
                                </td>
                                <td>
                                    <a href="javascript:void(0)">2.2 Basic HTML5 Elements</a>
                                </td>
                                <td class="text-right">
                                    <em class="font-size-sm text-muted">45 min</em>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-danger text-center">
                                    <i class="fa fa-fw fa-lock text-danger"></i>
                                </td>
                                <td>
                                    <a href="javascript:void(0)">2.3 New Elements in HTML5</a>
                                </td>
                                <td class="text-right">
                                    <em class="font-size-sm text-muted">30 min</em>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-danger text-center">
                                    <i class="fa fa-fw fa-lock text-danger"></i>
                                </td>
                                <td>
                                    <a href="javascript:void(0)">2.4 HTML5 Semantics</a>
                                </td>
                                <td class="text-right">
                                    <em class="font-size-sm text-muted">45 min</em>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- END Basics -->

                    <!-- Advanced -->
                    <table class="table table-borderless table-vcenter">
                        <tbody>
                            <tr class="table-active">
                                <th style="width: 50px;"></th>
                                <th>3. Advanced</th>
                                <th class="font-size-sm text-right">
                                    <span class="text-muted">2 hours</span>
                                </th>
                            </tr>
                            <tr>
                                <td class="table-danger text-center">
                                    <i class="fa fa-fw fa-lock text-danger"></i>
                                </td>
                                <td>
                                    <a href="javascript:void(0)">3.1 HTML5 Forms</a>
                                </td>
                                <td class="text-right">
                                    <em class="font-size-sm text-muted">30 min</em>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-danger text-center">
                                    <i class="fa fa-fw fa-lock text-danger"></i>
                                </td>
                                <td>
                                    <a href="table-javascript:void(0)">3.2 HTML5 Media</a>
                                </td>
                                <td class="text-right">
                                    <em class="font-size-sm text-muted">20 min</em>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-danger text-center">
                                    <i class="fa fa-fw fa-lock text-danger"></i>
                                </td>
                                <td>
                                    <a href="javascript:void(0)">3.3 HTML5 APIS</a>
                                </td>
                                <td class="text-right">
                                    <em class="font-size-sm text-muted">40 min</em>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-danger text-center">
                                    <i class="fa fa-fw fa-lock text-danger"></i>
                                </td>
                                <td>
                                    <a href="javascript:void(0)">3.4 HTML5 Graphics</a>
                                </td>
                                <td class="text-right">
                                    <em class="font-size-sm text-muted">14 min</em>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-danger text-center">
                                    <i class="fa fa-fw fa-lock text-danger"></i>
                                </td>
                                <td>
                                    <a href="javascript:void(0)">3.5 HTML5 Examples</a>
                                </td>
                                <td class="text-right">
                                    <em class="font-size-sm text-muted">16 min</em>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- END Advanced -->
                </div>
            </div>
            <!-- END Lessons -->
        </div>
    </div>
</div>
<!-- END Page Content -->

<!-- Subscribe Today -->
<div class="bg-image" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/various/landing-promo-developer-minded-html@2x.png');">
    <div class="bg-white-op-90">
        <div class="content">
            <div class="py-50 nice-copy text-center">
                <h3 class="font-w700 mb-10">Join Us Today</h3>
                <h4 class="font-w400 text-muted mb-30">Are you ready to learn HTML in under 5 hours?</h4>
                <a class="btn btn-hero btn-noborder btn-lg btn-rounded btn-success" href="javascript:void(0)">Subscribe for only $19/month</a>
            </div>
        </div>
    </div>
</div>
<!-- END Subscribe Today -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
