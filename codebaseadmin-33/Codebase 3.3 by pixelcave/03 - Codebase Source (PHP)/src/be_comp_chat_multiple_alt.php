<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="js-chat-container row no-gutters content content-full">
    <!-- Left Column -->
    <div class="js-chat-options d-none d-md-block col-md-6 col-lg-4 bg-white border-right">
        <!-- Logged In User -->
        <div class="js-chat-logged-user m-15 p-15 d-flex align-items-center justify-content-between rounded bg-body-light">
            <div class="d-flex align-items-center">
                <a class="img-link img-status" href="javascript:void(0)">
                    <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar15.jpg" alt="Avatar">
                    <div class="img-status-indicator bg-success"></div>
                </a>
                <div class="ml-10">
                    <a class="font-w600" href="javascript:void(0)">John Doe</a>
                    <div class="font-size-sm text-muted">Web Developer</div>
                </div>
            </div>
            <div class="ml-10">
                <button type="button" class="btn btn-sm btn-circle btn-alt-secondary" data-toggle="dropdown">
                    <i class="fa fa-cog"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="javascript:void(0)">
                        <i class="fa fa-fw fa-user mr-5"></i> View Profile
                    </a>
                    <a class="dropdown-item" href="javascript:void(0)">
                        <i class="fa fa-fw fa-pencil mr-5"></i> Edit Profile
                    </a>
                    <a class="dropdown-item" href="javascript:void(0)">
                        <i class="fa fa-fw fa-eye mr-5"></i> Change Visibility
                    </a>
                    <a class="dropdown-item mb-0" href="javascript:void(0)">
                        <i class="fa fa-fw fa-cog mr-5"></i> Settings
                    </a>
                </div>
                <!-- Toggle Chat options on mobile (left column) -->
                <button type="button" class="d-md-none btn btn-sm btn-circle btn-alt-success ml-5" data-toggle="class-toggle" data-target=".js-chat-options" data-class="d-none">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
        </div>
        <!-- END Logged In User -->

        <!-- Search -->
        <div class="js-chat-search px-15 pb-5">
            <form action="be_comp_chat_multiple_alt.php" method="POST" onsubmit="return false;">
                <div class="form-group mb-0">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button type="submit" class="btn btn-light">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                        <input type="text" class="form-control" placeholder="Search..">
                    </div>
                </div>
            </form>
        </div>
        <!-- END Search -->

        <!-- Chat Tabs -->
        <div class="block block-transparent mb-0">
            <ul class="js-chat-tabs nav nav-tabs nav-tabs-alt nav-justified px-15" data-toggle="tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" href="#chat-tabs-chats">
                        <i class="fa fa-comment text-muted font-size-lg"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#chat-tabs-calls">
                        <i class="fa fa-phone text-muted font-size-lg"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#chat-tabs-contacts">
                        <i class="fa fa-address-book text-muted font-size-lg"></i>
                    </a>
                </li>
            </ul>
            <div class="js-chat-tabs-content block-content tab-content p-0">
                <!-- Chats -->
                <div class="tab-pane active p-15" id="chat-tabs-chats" role="tabpanel" data-simplebar>
                    <!-- Channels -->
                    <div class="push">
                        <div class="d-flex align-items-center justify-content-between mb-5">
                            <span class="font-w600 font-size-xs text-muted text-uppercase">Channels</span>
                            <a class="text-muted" href="javascript:void(0)">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                        <a class="font-w600 d-block rounded bg-body-light py-5 px-10 mb-5" href="javascript:void(0)">#design</a>
                        <a class="font-w600 d-block rounded bg-body-light py-5 px-10 mb-5" href="javascript:void(0)">#development</a>
                    </div>
                    <!-- END Channels -->

                    <!-- Favorites -->
                    <div class="push">
                        <div class="d-flex align-items-center justify-content-between">
                            <span class="font-w600 font-size-xs text-muted text-uppercase">Favorites</span>
                            <a class="text-muted" href="javascript:void(0)">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                        <ul class="chat-list">
                            <li class="chat-list-item">
                                <div class="mr-10">
                                    <a class="img-link img-status" href="javascript:void(0)">
                                        <?php $cb->get_avatar('', 'female', 48); ?>
                                        <div class="img-status-indicator bg-success"></div>
                                    </a>
                                </div>
                                <div>
                                    <a class="font-w600" href="javascript:void(0)"><?php $cb->get_name('female'); ?></a>
                                    <div class="font-size-xs text-muted">
                                        Hello there!
                                    </div>
                                </div>
                                <div class="ml-auto">
                                    <span class="badge badge-danger badge-pill">2</span>
                                </div>
                            </li>
                            <li class="chat-list-item">
                                <div class="mr-10">
                                    <a class="img-link img-status" href="javascript:void(0)">
                                        <?php $cb->get_avatar('', 'male', 48); ?>
                                        <div class="img-status-indicator bg-success"></div>
                                    </a>
                                </div>
                                <div>
                                    <a class="font-w600" href="javascript:void(0)"><?php $cb->get_name('male'); ?></a>
                                    <div class="font-size-xs text-muted">
                                        It's ready..
                                    </div>
                                </div>
                                <div class="ml-auto">
                                    <span class="badge badge-danger badge-pill">5</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- END Favorites -->

                    <!-- Contacts -->
                    <div class="push">
                        <div class="d-flex align-items-center justify-content-between">
                            <span class="font-w600 font-size-xs text-muted text-uppercase">Contacts</span>
                            <a class="text-muted" href="javascript:void(0)">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                        <ul class="chat-list">
                            <li class="chat-list-item">
                                <div class="mr-10">
                                    <a class="img-link img-status" href="javascript:void(0)">
                                        <?php $cb->get_avatar('', 'female', 48); ?>
                                        <div class="img-status-indicator bg-success"></div>
                                    </a>
                                </div>
                                <div>
                                    <a class="font-w600" href="javascript:void(0)"><?php $cb->get_name('female'); ?></a>
                                    <div class="font-size-xs text-muted">
                                        Could you check out this PSD?
                                    </div>
                                </div>
                                <div class="ml-auto">
                                    <span class="badge badge-danger badge-pill">5</span>
                                </div>
                            </li>
                            <li class="chat-list-item">
                                <div class="mr-10">
                                    <a class="img-link img-status" href="javascript:void(0)">
                                        <?php $cb->get_avatar('', 'male', 48); ?>
                                        <div class="img-status-indicator bg-success"></div>
                                    </a>
                                </div>
                                <div>
                                    <a class="font-w600" href="javascript:void(0)"><?php $cb->get_name('male'); ?></a>
                                    <div class="font-size-xs text-muted">
                                        Hey John, how are you?
                                    </div>
                                </div>
                                <div class="ml-auto">
                                    <span class="badge badge-danger badge-pill">2</span>
                                </div>
                            </li>
                            <li class="chat-list-item">
                                <div class="mr-10">
                                    <a class="img-link img-status" href="javascript:void(0)">
                                        <?php $cb->get_avatar('', 'female', 48); ?>
                                        <div class="img-status-indicator bg-success"></div>
                                    </a>
                                </div>
                                <div>
                                    <a class="font-w600" href="javascript:void(0)"><?php $cb->get_name('female'); ?></a>
                                    <div class="font-size-xs text-muted">
                                        Can you please call me?
                                    </div>
                                </div>
                                <div class="ml-auto">
                                    <span class="badge badge-danger badge-pill">8</span>
                                </div>
                            </li>
                            <li class="chat-list-item">
                                <div class="mr-10">
                                    <a class="img-link img-status" href="javascript:void(0)">
                                        <?php $cb->get_avatar('', 'male', 48); ?>
                                        <div class="img-status-indicator bg-success"></div>
                                    </a>
                                </div>
                                <div>
                                    <a class="font-w600" href="javascript:void(0)"><?php $cb->get_name('male'); ?></a>
                                    <div class="font-size-xs text-muted">
                                        This is very interesting..
                                    </div>
                                </div>
                                <div class="ml-auto">
                                    <span class="badge badge-danger badge-pill">7</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- END Contacts -->
                </div>
                <!-- END Chats -->

                <!-- Calls -->
                <div class="tab-pane p-15" id="chat-tabs-calls" role="tabpanel" data-simplebar>
                    <ul class="chat-list">
                        <li class="chat-list-item">
                            <div class="mr-10">
                                <a class="img-link img-status" href="javascript:void(0)">
                                    <?php $cb->get_avatar('', 'female', 48); ?>
                                    <div class="img-status-indicator bg-success"></div>
                                </a>
                            </div>
                            <div>
                                <a class="font-w600" href="javascript:void(0)"><?php $cb->get_name('female'); ?></a>
                                <div class="font-size-xs text-muted">
                                    Today, 13:10
                                </div>
                            </div>
                            <div class="ml-auto">
                                <a class="btn btn-sm btn-circle btn-alt-secondary mr-5" href="javascript:void(0)">
                                    <i class="fa fa-phone text-danger"></i>
                                </a>
                            </div>
                        </li>
                        <li class="chat-list-item">
                            <div class="mr-10">
                                <a class="img-link img-status" href="javascript:void(0)">
                                    <?php $cb->get_avatar('', 'female', 48); ?>
                                    <div class="img-status-indicator bg-success"></div>
                                </a>
                            </div>
                            <div>
                                <a class="font-w600" href="javascript:void(0)"><?php $cb->get_name('female'); ?></a>
                                <div class="font-size-xs text-muted">
                                    Today, 17:23, 11min
                                </div>
                            </div>
                            <div class="ml-auto">
                                <a class="btn btn-sm btn-circle btn-alt-secondary mr-5" href="javascript:void(0)">
                                    <i class="fa fa-phone text-success"></i>
                                </a>
                            </div>
                        </li>
                        <li class="chat-list-item">
                            <div class="mr-10">
                                <a class="img-link img-status" href="javascript:void(0)">
                                    <?php $cb->get_avatar('', 'male', 48); ?>
                                    <div class="img-status-indicator bg-success"></div>
                                </a>
                            </div>
                            <div>
                                <a class="font-w600" href="javascript:void(0)"><?php $cb->get_name('male'); ?></a>
                                <div class="font-size-xs text-muted">
                                    Yesterday, 14:05
                                </div>
                            </div>
                            <div class="ml-auto">
                                <a class="btn btn-sm btn-circle btn-alt-secondary mr-5" href="javascript:void(0)">
                                    <i class="fa fa-phone text-danger"></i>
                                </a>
                            </div>
                        </li>
                        <li class="chat-list-item">
                            <div class="mr-10">
                                <a class="img-link img-status" href="javascript:void(0)">
                                    <?php $cb->get_avatar('', 'female', 48); ?>
                                    <div class="img-status-indicator bg-muted"></div>
                                </a>
                            </div>
                            <div>
                                <a class="font-w600" href="javascript:void(0)"><?php $cb->get_name('female'); ?></a>
                                <div class="font-size-xs text-muted">
                                    Yesterday, 16:05, 7min
                                </div>
                            </div>
                            <div class="ml-auto">
                                <a class="btn btn-sm btn-circle btn-alt-secondary mr-5" href="javascript:void(0)">
                                    <i class="fa fa-phone text-success"></i>
                                </a>
                            </div>
                        </li>
                        <li class="chat-list-item">
                            <div class="mr-10">
                                <a class="img-link img-status" href="javascript:void(0)">
                                    <?php $cb->get_avatar('', 'female', 48); ?>
                                    <div class="img-status-indicator bg-warning"></div>
                                </a>
                            </div>
                            <div>
                                <a class="font-w600" href="javascript:void(0)"><?php $cb->get_name('female'); ?></a>
                                <div class="font-size-xs text-muted">
                                    Yesterday, 20:07
                                </div>
                            </div>
                            <div class="ml-auto">
                                <a class="btn btn-sm btn-circle btn-alt-secondary mr-5" href="javascript:void(0)">
                                    <i class="fa fa-phone text-danger"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- END Calls -->

                <!-- Contacts -->
                <div class="tab-pane p-15" id="chat-tabs-contacts" role="tabpanel" data-simplebar>
                    <ul class="chat-list">
                        <li class="chat-list-item">
                            <div class="mr-10">
                                <a class="img-link img-status" href="javascript:void(0)">
                                    <?php $cb->get_avatar('', 'female', 48); ?>
                                    <div class="img-status-indicator bg-success"></div>
                                </a>
                            </div>
                            <div>
                                <a class="font-w600" href="javascript:void(0)"><?php $cb->get_name('female'); ?></a>
                                <div class="font-size-xs text-muted">
                                    Web Developer
                                </div>
                            </div>
                            <div class="ml-auto">
                                <a class="btn btn-sm btn-circle btn-alt-warning my-5 mr-5" href="javascript:void(0)">
                                    <i class="fa fa-phone"></i>
                                </a>
                                <a class="btn btn-sm btn-circle btn-alt-info my-5 mr-5" href="javascript:void(0)">
                                    <i class="fa fa-video-camera"></i>
                                </a>
                                <a class="btn btn-sm btn-circle btn-alt-success my-5" href="javascript:void(0)">
                                    <i class="fa fa-comment"></i>
                                </a>
                            </div>
                        </li>
                        <li class="chat-list-item">
                            <div class="mr-10">
                                <a class="img-link img-status" href="javascript:void(0)">
                                    <?php $cb->get_avatar('', 'male', 48); ?>
                                    <div class="img-status-indicator bg-success"></div>
                                </a>
                            </div>
                            <div>
                                <a class="font-w600" href="javascript:void(0)"><?php $cb->get_name('male'); ?></a>
                                <div class="font-size-xs text-muted">
                                    Web Design
                                </div>
                            </div>
                            <div class="ml-auto">
                                <a class="btn btn-sm btn-circle btn-alt-warning my-5 mr-5" href="javascript:void(0)">
                                    <i class="fa fa-phone"></i>
                                </a>
                                <a class="btn btn-sm btn-circle btn-alt-info my-5 mr-5" href="javascript:void(0)">
                                    <i class="fa fa-video-camera"></i>
                                </a>
                                <a class="btn btn-sm btn-circle btn-alt-success my-5" href="javascript:void(0)">
                                    <i class="fa fa-comment"></i>
                                </a>
                            </div>
                        </li>
                        <li class="chat-list-item">
                            <div class="mr-10">
                                <a class="img-link img-status" href="javascript:void(0)">
                                    <?php $cb->get_avatar('', 'female', 48); ?>
                                    <div class="img-status-indicator bg-muted"></div>
                                </a>
                            </div>
                            <div>
                                <a class="font-w600" href="javascript:void(0)"><?php $cb->get_name('female'); ?></a>
                                <div class="font-size-xs text-muted">
                                    UI Designer
                                </div>
                            </div>
                            <div class="ml-auto">
                                <a class="btn btn-sm btn-circle btn-alt-warning my-5 mr-5" href="javascript:void(0)">
                                    <i class="fa fa-phone"></i>
                                </a>
                                <a class="btn btn-sm btn-circle btn-alt-info my-5 mr-5" href="javascript:void(0)">
                                    <i class="fa fa-video-camera"></i>
                                </a>
                                <a class="btn btn-sm btn-circle btn-alt-success my-5" href="javascript:void(0)">
                                    <i class="fa fa-comment"></i>
                                </a>
                            </div>
                        </li>
                        <li class="chat-list-item">
                            <div class="mr-10">
                                <a class="img-link img-status" href="javascript:void(0)">
                                    <?php $cb->get_avatar('', 'male', 48); ?>
                                    <div class="img-status-indicator bg-success"></div>
                                </a>
                            </div>
                            <div>
                                <a class="font-w600" href="javascript:void(0)"><?php $cb->get_name('male'); ?></a>
                                <div class="font-size-xs text-muted">
                                    Journalist
                                </div>
                            </div>
                            <div class="ml-auto">
                                <a class="btn btn-sm btn-circle btn-alt-warning my-5 mr-5" href="javascript:void(0)">
                                    <i class="fa fa-phone"></i>
                                </a>
                                <a class="btn btn-sm btn-circle btn-alt-info my-5 mr-5" href="javascript:void(0)">
                                    <i class="fa fa-video-camera"></i>
                                </a>
                                <a class="btn btn-sm btn-circle btn-alt-success my-5" href="javascript:void(0)">
                                    <i class="fa fa-comment"></i>
                                </a>
                            </div>
                        </li>
                        <li class="chat-list-item">
                            <div class="mr-10">
                                <a class="img-link img-status" href="javascript:void(0)">
                                    <?php $cb->get_avatar('', 'female', 48); ?>
                                    <div class="img-status-indicator bg-danger"></div>
                                </a>
                            </div>
                            <div>
                                <a class="font-w600" href="javascript:void(0)"><?php $cb->get_name('female'); ?></a>
                                <div class="font-size-xs text-muted">
                                    Photographer
                                </div>
                            </div>
                            <div class="ml-auto">
                                <a class="btn btn-sm btn-circle btn-alt-warning my-5 mr-5" href="javascript:void(0)">
                                    <i class="fa fa-phone"></i>
                                </a>
                                <a class="btn btn-sm btn-circle btn-alt-info my-5 mr-5" href="javascript:void(0)">
                                    <i class="fa fa-video-camera"></i>
                                </a>
                                <a class="btn btn-sm btn-circle btn-alt-success my-5" href="javascript:void(0)">
                                    <i class="fa fa-comment"></i>
                                </a>
                            </div>
                        </li>
                        <li class="chat-list-item">
                            <div class="mr-10">
                                <a class="img-link img-status" href="javascript:void(0)">
                                    <?php $cb->get_avatar('', 'female', 48); ?>
                                    <div class="img-status-indicator bg-warning"></div>
                                </a>
                            </div>
                            <div>
                                <a class="font-w600" href="javascript:void(0)"><?php $cb->get_name('female'); ?></a>
                                <div class="font-size-xs text-muted">
                                    Writer
                                </div>
                            </div>
                            <div class="ml-auto">
                                <a class="btn btn-sm btn-circle btn-alt-warning my-5 mr-5" href="javascript:void(0)">
                                    <i class="fa fa-phone"></i>
                                </a>
                                <a class="btn btn-sm btn-circle btn-alt-info my-5 mr-5" href="javascript:void(0)">
                                    <i class="fa fa-video-camera"></i>
                                </a>
                                <a class="btn btn-sm btn-circle btn-alt-success my-5" href="javascript:void(0)">
                                    <i class="fa fa-comment"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- END Contacts -->
            </div>
        </div>
        <!-- END Chat Tabs -->

        <!-- Separator (visible on mobile) -->
        <div class="d-md-none py-5 bg-body-dark"></div>
    </div>
    <!-- END Left Column -->

    <!-- Right Column -->
    <div class="col-md-6 col-lg-8 bg-white d-flex flex-column">
        <!-- Active Chat User -->
        <div class="js-chat-active-user p-15 d-flex align-items-center justify-content-between bg-white">
            <div class="d-flex align-items-center">
                <a class="img-link img-status" href="javascript:void(0)">
                    <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar12.jpg" alt="Avatar">
                    <div class="img-status-indicator bg-success"></div>
                </a>
                <div class="ml-10">
                    <a class="font-w600" href="javascript:void(0)">Justin Smith</a>
                    <div class="font-size-sm text-muted">Web Designer</div>
                </div>
            </div>
            <div class="ml-10">
                <button type="button" class="btn btn-sm btn-circle btn-alt-secondary mr-5">
                    <i class="fa fa-phone"></i>
                </button>
                <button type="button" class="btn btn-sm btn-circle btn-alt-secondary mr-5">
                    <i class="fa fa-star"></i>
                </button>
                <button type="button" class="btn btn-sm btn-circle btn-alt-secondary" data-toggle="dropdown">
                    <i class="fa fa-ellipsis-v"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="javascript:void(0)">
                        <i class="fa fa-fw fa-thumb-tack mr-5"></i> Pin to top
                    </a>
                    <a class="dropdown-item" href="javascript:void(0)">
                        <i class="fa fa-fw fa-trash mr-5"></i> Delete Chat
                    </a>
                    <a class="dropdown-item mb-0" href="javascript:void(0)">
                        <i class="fa fa-fw fa-ban mr-5"></i> Block
                    </a>
                </div>
                <!-- Toggle Chat options on mobile (left column) -->
                <button type="button" class="d-md-none btn btn-sm btn-circle btn-alt-success ml-5" data-toggle="class-toggle" data-target=".js-chat-options" data-class="d-none">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
        </div>
        <!-- END Active Chat User -->

        <!-- Chat Window -->
        <div class="js-chat-window p-15 bg-light flex-grow-1 text-wrap-break-word overflow-y-auto">
            <!-- User Message -->
            <div class="d-flex mb-20">
                <div>
                    <a class="img-link img-status" href="javascript:void(0)">
                        <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar12.jpg" alt="Avatar">
                        <div class="img-status-indicator bg-success"></div>
                    </a>
                </div>
                <div class="mx-10">
                    <div>
                        <p class="bg-body-dark text-dark rounded px-15 py-10 mb-5">
                            Hello there! How are you? I would like to ask you a couple of questions regarding the active project.
                        </p>
                    </div>
                    <div class="text-muted font-size-xs font-italic">10 min ago</div>
                </div>
            </div>
            <!-- END User Message -->

            <!-- Own Message -->
            <div class="d-flex flex-row-reverse mb-20">
                <div>
                    <a class="img-link img-status" href="javascript:void(0)">
                        <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar15.jpg" alt="Avatar">
                        <div class="img-status-indicator bg-success"></div>
                    </a>
                </div>
                <div class="mx-10 text-right">
                    <div>
                        <p class="bg-primary-lighter text-primary-darker rounded px-15 py-10 mb-5 d-inline-block">
                            Hi Justin! Sure thing!
                        </p>
                    </div>
                    <div>
                        <p class="bg-primary-lighter text-primary-darker rounded px-15 py-10 mb-5 d-inline-block">
                            Let me know what you would like to know.
                        </p>
                    </div>
                    <div class="text-right text-muted font-size-xs font-italic">just now</div>
                </div>
            </div>
            <!-- END Own Message -->
        </div>
        <!-- END Chat Window -->

        <!-- Chat Input -->
        <div class="js-chat-message p-10 mt-auto">
            <form action="be_comp_chat_multiple_alt.php" method="POST" onsubmit="return false;">
                <div class="d-flex align-items-center">
                    <button type="button" class="btn btn-alt-secondary btn-circle mr-5">
                        <i class="fa fa-fw fa-smile-o font-size-lg"></i>
                    </button>
                    <button type="button" class="btn btn-alt-secondary btn-circle mr-5">
                        <i class="fa fa-fw fa-paperclip font-size-lg"></i>
                    </button>
                    <button type="button" class="btn btn-alt-secondary btn-circle mr-5">
                        <i class="fa fa-fw fa-microphone font-size-lg"></i>
                    </button>
                    <input type="text" class="form-control flex-grow mr-5" placeholder="Type a message..">
                    <button type="submit" class="btn btn-circle btn-alt-primary">
                        <i class="fa fa-share-square"></i>
                    </button>    
                </div>
            </form>
        </div>
        <!-- END Chat Input -->
    </div>
    <!-- END Right Column -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/be_comp_chat_alt.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>
