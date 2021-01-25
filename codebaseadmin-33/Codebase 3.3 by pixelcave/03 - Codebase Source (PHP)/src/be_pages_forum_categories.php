<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <nav class="breadcrumb bg-white push">
        <a class="breadcrumb-item" href="be_pages_forum_categories.php">Forum</a>
        <span class="breadcrumb-item active">Categories</span>
    </nav>
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Categories</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                    <i class="si si-refresh"></i>
                </button>
            </div>
        </div>
        <div class="block-content">
            <!-- Intro Category -->
            <table class="table table-striped table-borderless table-vcenter">
                <thead class="thead-light">
                    <tr>
                        <th colspan="2">Introduction</th>
                        <th class="d-none d-md-table-cell text-center" style="width: 90px;">Topics</th>
                        <th class="d-none d-md-table-cell text-center" style="width: 90px;">Posts</th>
                        <th class="d-none d-md-table-cell" style="width: 180px;">Last Post</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center" style="width: 65px;">
                            <i class="si si-check fa-2x"></i>
                        </td>
                        <td>
                            <a class="font-size-h5 font-w600" href="be_pages_forum_topics.php">Welcome</a>
                            <div class="text-muted my-5">Introduce yourself to our community</div>
                            <div class="font-size-sm text-muted">
                                <em><strong class="font-w600">Moderators:</strong> <a href="javascript:void(0)">admin</a></em>
                            </div>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(100, 1000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(3000, 10000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell">
                            <span class="font-size-sm">by <a href="be_pages_generic_profile.php"><?php $cb->get_name(); ?></a><br>on <em>January 23, 2017</em></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <i class="si si-bell fa-2x"></i>
                        </td>
                        <td>
                            <a class="font-size-h5 font-w600" href="be_pages_forum_topics.php">Announcements</a>
                            <div class="text-muted my-5">For all recent news</div>
                            <div class="font-size-sm text-muted">
                                <em><strong class="font-w600">Moderators:</strong> <a href="javascript:void(0)">admin</a></em>
                            </div>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(100, 1000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(3000, 10000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell">
                            <span class="font-size-sm">by <a href="be_pages_generic_profile.php"><?php $cb->get_name(); ?></a><br>on <em>January 15, 2017</em></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <i class="si si-badge fa-2x"></i>
                        </td>
                        <td>
                            <a class="font-size-h5 font-w600" href="be_pages_forum_topics.php">Terms &amp; Conditions</a>
                            <div class="text-muted my-5">Please read and comply with our forum’s rules</div>
                            <div class="font-size-sm text-muted">
                                <em><strong class="font-w600">Moderators:</strong> <a href="javascript:void(0)">admin</a></em>
                            </div>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(100, 1000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(3000, 10000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell">
                            <span class="font-size-sm">by <a href="be_pages_generic_profile.php"><?php $cb->get_name(); ?></a><br>on <em>January 21, 2017</em></span>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- END Intro Category -->

            <!-- Web App Category -->
            <table class="table table-striped table-borderless table-vcenter">
                <thead class="thead-light">
                    <tr>
                        <th colspan="2">Web App</th>
                        <th class="d-none d-md-table-cell text-center" style="width: 90px;">Topics</th>
                        <th class="d-none d-md-table-cell text-center" style="width: 90px;">Posts</th>
                        <th class="d-none d-md-table-cell" style="width: 180px;">Last Post</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center" style="width: 65px;">
                            <i class="si si-speedometer fa-2x"></i>
                        </td>
                        <td>
                            <a class="font-size-h5 font-w600" href="be_pages_forum_topics.php">Getting Started</a>
                            <div class="text-muted my-5">If you are a new user, here you will find everything you need</div>
                            <div class="font-size-sm text-muted">
                                <em><strong class="font-w600">Moderators:</strong> <a href="javascript:void(0)">admin</a>, <a href="javascript:void(0)">geogreen</a>, <a href="javascript:void(0)">annasco</a></em>
                            </div>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(100, 1000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(3000, 10000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell">
                            <span class="font-size-sm">by <a href="be_pages_generic_profile.php"><?php $cb->get_name(); ?></a><br>on <em>January 17, 2017</em></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <i class="si si-compass fa-2x"></i>
                        </td>
                        <td>
                            <a class="font-size-h5 font-w600" href="be_pages_forum_topics.php">Tutorials</a>
                            <div class="text-muted my-5">The best place to learn new stuff</div>
                            <div class="font-size-sm text-muted">
                                <em><strong class="font-w600">Moderators:</strong> <a href="javascript:void(0)">admin</a>, <a href="javascript:void(0)">geogreen</a>, <a href="javascript:void(0)">justinhunt</a></em>
                            </div>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(100, 1000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(3000, 10000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell">
                            <span class="font-size-sm">by <a href="be_pages_generic_profile.php"><?php $cb->get_name(); ?></a><br>on <em>January 23, 2017</em></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <i class="si si-wrench fa-2x"></i>
                        </td>
                        <td>
                            <a class="font-size-h5 font-w600" href="be_pages_forum_topics.php">Plugins</a>
                            <div class="text-muted my-5">Creating or looking for an existing plugin?</div>
                            <div class="font-size-sm text-muted">
                                <em><strong class="font-w600">Moderators:</strong> <a href="javascript:void(0)">admin</a>, <a href="javascript:void(0)">geogreen</a>, <a href="javascript:void(0)">barbaga</a></em>
                            </div>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(100, 1000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(3000, 10000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell">
                            <span class="font-size-sm">by <a href="be_pages_generic_profile.php"><?php $cb->get_name(); ?></a><br>on <em>January 22, 2017</em></span>
                        </td>
                    </tr>
                    <tr class="font-size-sm">
                        <td></td>
                        <td>
                            <span class="font-w600">Subforum:</span> <a class="font-w600" href="be_pages_forum_topics.php">Plugins <i class="fa fa-angle-right"></i> How to build</a>
                            <div class="text-muted mt-5">Looking for info about creating your own plugin?</div>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(100, 1000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(3000, 10000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell">
                            <span>by <a href="be_pages_generic_profile.php"><?php $cb->get_name(); ?></a><br>on <em>January 22, 2017</em></span>
                        </td>
                    </tr>
                    <tr class="font-size-sm">
                        <td></td>
                        <td>
                            <span class="font-w600">Subforum:</span> <a class="font-w600" href="be_pages_forum_topics.php">Plugins <i class="fa fa-angle-right"></i> Showcase</a>
                            <div class="text-muted mt-5">Did you create a plugin? Showcase it here</div>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(100, 1000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(3000, 10000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell">
                            <span>by <a href="be_pages_generic_profile.php"><?php $cb->get_name(); ?></a><br>on <em>January 22, 2017</em></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <i class="si si-settings fa-2x"></i>
                        </td>
                        <td>
                            <a class="font-size-h5 font-w600" href="be_pages_forum_topics.php">API</a>
                            <div class="text-muted my-5">Take advantage of our powerful API</div>
                            <div class="font-size-sm text-muted">
                                <em><strong class="font-w600">Moderators:</strong> <a href="javascript:void(0)">admin</a>, <a href="javascript:void(0)">geogreen</a>, <a href="javascript:void(0)">davidfu</a></em>
                            </div>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(100, 1000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(3000, 10000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell">
                            <span class="font-size-sm">by <a href="be_pages_generic_profile.php"><?php $cb->get_name(); ?></a><br>on <em>January 17, 2017</em></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <i class="si si-chemistry fa-2x"></i>
                        </td>
                        <td>
                            <a class="font-size-h5 font-w600" href="be_pages_forum_topics.php">Extentions</a>
                            <div class="text-muted my-5">Extend our web application’s features</div>
                            <div class="font-size-sm text-muted">
                                <em><strong class="font-w600">Moderators:</strong> <a href="javascript:void(0)">admin</a>, <a href="javascript:void(0)">geogreen</a>, <a href="javascript:void(0)">bettylee</a></em>
                            </div>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(100, 1000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(3000, 10000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell">
                            <span class="font-size-sm">by <a href="be_pages_generic_profile.php"><?php $cb->get_name(); ?></a><br>on <em>January 13, 2017</em></span>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- END Web App Category -->

            <!-- Support Category -->
            <table class="table table-striped table-borderless table-vcenter">
                <thead class="thead-light">
                    <tr>
                        <th colspan="2">Support</th>
                        <th class="d-none d-md-table-cell text-center" style="width: 90px;">Topics</th>
                        <th class="d-none d-md-table-cell text-center" style="width: 90px;">Posts</th>
                        <th class="d-none d-md-table-cell" style="width: 180px;">Last Post</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center" style="width: 65px;">
                            <i class="si si-question fa-2x"></i>
                        </td>
                        <td>
                            <a class="font-size-h5 font-w600" href="be_pages_forum_topics.php">Questions</a>
                            <div class="text-muted my-5">Need assistance? Don’t worry, we are here to help</div>
                            <div class="font-size-sm text-muted">
                                <em><strong class="font-w600">Moderators:</strong> <a href="javascript:void(0)">admin</a>, <a href="javascript:void(0)">johnex</a></em>
                            </div>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(100, 1000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(3000, 10000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell">
                            <span class="font-size-sm">by <a href="be_pages_generic_profile.php"><?php $cb->get_name(); ?></a><br>on <em>January 20, 2017</em></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <i class="si si-game-controller fa-2x"></i>
                        </td>
                        <td>
                            <a class="font-size-h5 font-w600" href="be_pages_forum_topics.php">Playground</a>
                            <div class="text-muted my-5">Discuss with other users</div>
                            <div class="font-size-sm text-muted">
                                <em><strong class="font-w600">Moderators:</strong> <a href="javascript:void(0)">admin</a>, <a href="javascript:void(0)">johnex</a></em>
                            </div>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(100, 1000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="font-w600" href="javascript:void(0)"><?php echo rand(3000, 10000); ?></a>
                        </td>
                        <td class="d-none d-md-table-cell">
                            <span class="font-size-sm">by <a href="be_pages_generic_profile.php"><?php $cb->get_name(); ?></a><br>on <em>January 24, 2017</em></span>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- END Support Category -->
        </div>
    </div>
    <!-- END Categories Block -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>