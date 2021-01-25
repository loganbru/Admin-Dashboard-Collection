<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/dashboards/social/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <div class="row">
        <!-- User -->
        <div class="col-lg-4 col-xl-3">
            <!-- Account -->
            <div class="block block-rounded text-center font-w600">
                <div class="block-content block-content-full bg-gd-sea">
                    <?php $cb->get_avatar(5, '', 64, true); ?>
                </div>
                <div class="block-content block-content-full">
                    <div class="border-b pb-15 mb-15">
                        Andrea Gardner<br>
                        <a class="text-muted font-w400" href="javascript:void(0)">@andrea</a>
                    </div>
                    <div class="row gutters-tiny">
                        <div class="col-4">
                            <div class="font-size-xs text-muted">Updates</div>
                            <a class="font-size-lg" href="javascript:void(0)">750</a>
                        </div>
                        <div class="col-4">
                            <div class="font-size-xs text-muted">Following</div>
                            <a class="font-size-lg" href="javascript:void(0)">230</a>
                        </div>
                        <div class="col-4">
                            <div class="font-size-xs text-muted">Followers</div>
                            <a class="font-size-lg" href="javascript:void(0)">1,680</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Account -->

            <!-- Worldwide Trends -->
            <div class="block block-rounded">
                <div class="block-header">
                    <h3 class="block-title font-w600">Worldwide Trends</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option">
                            <i class="si si-wrench"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <a class="font-w600" href="javascript:void(0)">#laravelnews</a>
                    <p class="text-muted">29.3k Updates</p>
                    <a class="font-w600" href="javascript:void(0)">#reactjs</a>
                    <p class="text-muted">25.8k Updates</p>
                    <a class="font-w600" href="javascript:void(0)">#angular</a>
                    <p class="text-muted">19.3k Updates</p>
                    <a class="font-w600" href="javascript:void(0)">#pcnews</a>
                    <p class="text-muted">18.6k Updates</p>
                    <a class="font-w600" href="javascript:void(0)">#webdesign2018</a>
                    <p class="text-muted">17.2k Updates</p>
                </div>
            </div>
            <!-- END Worldwide Trends -->
        </div>
        <!-- END User -->

        <!-- Updates -->
        <div class="col-lg-4 col-xl-6">
            <div class="block block-rounded">
                <div class="block-content block-content-full bg-primary-light">
                    <form>
                        <div class="input-group">
                            <input type="text" class="form-control border-0" placeholder="What’s happening?">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary border-0">
                                    <i class="fa fa-pencil-square-o mr-5"></i> Post
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="block-content block-content-full">
                    <div class="media">
                        <?php $cb->get_avatar(13, '', 48, false, 'mr-20'); ?>
                        <div class="media-body">
                            <p class="mb-0">
                                <a class="font-w600" href="javascript:void(0)">Wayne Garcia</a>
                                <a class="text-muted" href="javascript:void(0)">@waynegarcia</a>
                                <em class="text-muted">&bull; 30m</em>
                            </p>
                            <p>
                                In gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </p>
                            <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                <i class="fa fa-fw fa-comment-o"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                <i class="fa fa-fw fa-retweet"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                <i class="fa fa-fw fa-heart-o"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                <i class="fa fa-fw fa-envelope-o"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="block-content block-content-full border-t">
                    <div class="media">
                        <?php $cb->get_avatar(9, '', 48, false, 'mr-20'); ?>
                        <div class="media-body">
                            <p class="mb-0">
                                <a class="font-w600" href="javascript:void(0)">John Smith</a>
                                <a class="text-muted" href="javascript:void(0)">@j.smith</a>
                                <em class="text-muted">&bull; 35m</em>
                            </p>
                            <p>
                                Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </p>
                            <?php $cb->get_photo(13, false, 'img-fluid push'); ?>
                            <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                <i class="fa fa-fw fa-comment-o"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                <i class="fa fa-fw fa-retweet"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                <i class="fa fa-fw fa-heart-o"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                <i class="fa fa-fw fa-envelope-o"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="block-content block-content-full border-t">
                    <div class="media">
                        <?php $cb->get_avatar(10, '', 48, false, 'mr-20'); ?>
                        <div class="media-body">
                            <p class="mb-0">
                                <a class="font-w600" href="javascript:void(0)">John Doe</a>
                                <a class="text-muted" href="javascript:void(0)">@j.doe</a>
                                <em class="text-muted">&bull; 50m</em>
                            </p>
                            <p>
                                Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus.
                            </p>
                            <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                <i class="fa fa-fw fa-comment-o"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                <i class="fa fa-fw fa-retweet"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                <i class="fa fa-fw fa-heart-o"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                <i class="fa fa-fw fa-envelope-o"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="block-content block-content-full border-t">
                    <div class="media">
                        <?php $cb->get_avatar(3, '', 48, false, 'mr-20'); ?>
                        <div class="media-body">
                            <p class="mb-0">
                                <a class="font-w600" href="javascript:void(0)">Lisa Ray</a>
                                <a class="text-muted" href="javascript:void(0)">@l.ray</a>
                                <em class="text-muted">&bull; 3d</em>
                            </p>
                            <p>
                                Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                            <?php $cb->get_photo(3, false, 'img-fluid push'); ?>
                            <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                <i class="fa fa-fw fa-comment-o"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                <i class="fa fa-fw fa-retweet"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                <i class="fa fa-fw fa-heart-o"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                <i class="fa fa-fw fa-envelope-o"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="block-content block-content-full border-t">
                    <div class="media">
                        <?php $cb->get_avatar(2, '', 48, false, 'mr-20'); ?>
                        <div class="media-body">
                            <p class="mb-0">
                                <a class="font-w600" href="javascript:void(0)">Laura Taylor</a>
                                <a class="text-muted" href="javascript:void(0)">@l.taylor</a>
                                <em class="text-muted">&bull; 5d</em>
                            </p>
                            <p>
                                Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                            <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                <i class="fa fa-fw fa-comment-o"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                <i class="fa fa-fw fa-retweet"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                <i class="fa fa-fw fa-heart-o"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                <i class="fa fa-fw fa-envelope-o"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Updates -->

        <!-- Extra -->
        <div class="col-lg-4 col-xl-3">
            <!-- Who to follow -->
            <div class="block block-rounded">
                <div class="block-header">
                    <h3 class="block-title font-w600">Who to Follow</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option">
                            <i class="si si-wrench"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <ul class="nav-users pull-all">
                        <li>
                            <a href="javascript:void(0)">
                                <?php $cb->get_avatar(5); ?>
                                <i class="fa fa-circle text-success"></i> Helen Jacobs
                                <div class="font-w400 font-size-xs text-muted">Web Designer</div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <?php $cb->get_avatar(6); ?>
                                <i class="fa fa-circle text-success"></i> Carol Ray
                                <div class="font-w400 font-size-xs text-muted">Photographer</div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <?php $cb->get_avatar(11); ?>
                                <i class="fa fa-circle text-success"></i> Justin Hunt
                                <div class="font-w400 font-size-xs text-muted">Copywriter</div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <?php $cb->get_avatar(9); ?>
                                <i class="fa fa-circle text-success"></i> Thomas Riley
                                <div class="font-w400 font-size-xs text-muted">UI Designer</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="block-content block-content-full border-t">
                    <a href="javascript:void(0)">
                        <i class="fa fa-users mr-5"></i> Find people you know
                    </a>
                </div>
            </div>
            <!-- END Who to follow -->

            <!-- About -->
            <div class="block block-rounded">
                <div class="block-content block-content-full text-muted font-size-sm">
                    &copy; <span class="js-year-copy"></span>
                    <a class="text-muted ml-5" href="javascript:void(0)">About Us</a>
                    <a class="text-muted ml-5" href="javascript:void(0)">Copyright</a>
                </div>
                <div class="block-content block-content-full border-t">
                    <a href="javascript:void(0)">
                        <i class="fa fa-external-link-square mr-5"></i> Advertise with Us
                    </a>
                </div>
            </div>
            <!-- END About -->
        </div>
        <!-- END Extra -->
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>