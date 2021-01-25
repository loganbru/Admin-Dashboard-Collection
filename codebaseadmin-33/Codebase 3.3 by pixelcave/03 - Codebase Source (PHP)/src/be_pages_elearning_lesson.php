<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Codebase - Page specific configuration
$cb->l_header_style = 'glass-inverse';
?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $cb->get_css('js/plugins/highlightjs/styles/github-gist.css'); ?>

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
        <a class="breadcrumb-item" href="be_pages_elearning_course.php">Learn HTML</a>
        <span class="breadcrumb-item active">1.1 HTML5 Intro</span>
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
            <!-- Lesson -->
            <div class="font-size-lg p-20 bg-earth rounded text-white text-center push">
                <div class="mb-5">
                    <i class="fa fa-3x fa-gift"></i>
                </div>
                <p class="mb-0">
                    This is a free preview!<br>If you like it, you can subscribe or purchase this course for only $14!
                </p>
            </div>
            <div class="block block-rounded">
                <div class="block-content">
                    <h3 >1.1 HTML5 Intro (free preview)</h3>
                    <?php echo $cb->get_text('medium', 2); ?>
                    <pre class="pre-sh push"><code class="html">&lt;!doctype html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;

        &lt;title&gt;Title&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;!-- Your content --&gt;
    &lt;/body&gt;
&lt;/html&gt;</code></pre>
                    <?php echo $cb->get_text('medium', 2); ?>
                    <div class="alert alert-warning font-w600 text-center">
                        <i class="fa fa-warning"></i> This is an attention message.
                    </div>
                    <?php echo $cb->get_text('medium', 2); ?>
                    <pre class="pre-sh push"><code class="html">&lt;div id=&quot;id-name&quot; class=&quot;class-name&quot;&gt;
    &lt;!-- This is a comment --&gt;
&lt;/div&gt;</code></pre>
                    <p class="font-w600">Things to do:</p>
                    <ul class="fa-ul list list-simple-mini push">
                        <li>
                            <i class="fa fa-check fa-li text-success"></i>
                            Make sure you are always closing your tags.
                        </li>
                        <li>
                            <i class="fa fa-check fa-li text-success"></i>
                            Keep writing markup to become more familiar.
                        </li>
                        <li>
                            <i class="fa fa-check fa-li text-success"></i>
                            Create your own projects.
                        </li>
                    </ul>
                    <p class="alert alert-success font-w600 text-center">
                        <i class="fa fa-thumbs-up"></i> Congrats! Let's head up to the next lesson.
                    </p>
                </div>
            </div>
            <!-- END Lesson -->
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

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/highlightjs/highlight.pack.min.js'); ?>

<!-- Page JS Helpers (Highlight.js plugin) -->
<script>jQuery(function(){ Codebase.helpers('highlightjs'); });</script>

<?php require 'inc/_global/views/footer_end.php'; ?>
