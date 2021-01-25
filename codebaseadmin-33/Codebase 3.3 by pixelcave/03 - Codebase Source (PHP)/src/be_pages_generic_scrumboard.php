<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Codebase - Page specific configuration
$cb->inc_footer         = '';
$cb->l_header_fixed     = true;
$cb->l_header_style     = '';
$cb->l_sidebar_inverse  = true;
$cb->l_sidebar_mini     = true;
$cb->l_m_content        = '';
?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Scrum Board functionality is initialized in js/pages/be_pages_generic_scrumboard.min.js which was auto compiled from _es6/pages/be_pages_generic_scrumboard.js -->
<div class="scrumboard js-scrumboard">
    <!-- Ideas Column -->
    <div class="scrumboard-col block block-themed">
        <div class="block-header bg-danger">
            <h3 class="block-title font-w600">Ideas</h3>
            <div class="block-options">
                <div class="dropdown">
                    <button type="button" class="btn-block-option" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-fw fa-ellipsis-v"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="javascript:void(0)">
                            <i class="fa fa-fw fa-pencil mr-5"></i>Edit
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)" data-toggle="block-option" data-action="close">
                            <i class="fa fa-fw fa-times text-danger mr-5"></i>Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-content block-content-full bg-body-light">
            <form class="w-100" method="post" data-toggle="sb-item-add">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-lightbulb-o"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" placeholder="New Idea..">
                </div>
            </form>
        </div>
        <div class="scrumboard-items block-content">
            <div class="scrumboard-item">
                <div class="scrumboard-item-options">
                    <a class="scrumboard-item-handler btn btn-sm btn-alt-warning" href="javascript:void(0)">
                        <i class="fa fa-hand-grab-o"></i>
                    </a>
                    <button class="btn btn-sm btn-alt-warning" data-toggle="sb-item-remove">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
                <div class="scrumboard-item-content">
                    Web Application
                </div>
            </div>
            <div class="scrumboard-item">
                <div class="scrumboard-item-options">
                    <a class="scrumboard-item-handler btn btn-sm btn-alt-warning" href="javascript:void(0)">
                        <i class="fa fa-hand-grab-o"></i>
                    </a>
                    <button class="btn btn-sm btn-alt-warning" data-toggle="sb-item-remove">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
                <div class="scrumboard-item-content">
                    Web service for to-do list
                </div>
            </div>
            <div class="scrumboard-item">
                <div class="scrumboard-item-options">
                    <a class="scrumboard-item-handler btn btn-sm btn-alt-warning" href="javascript:void(0)">
                        <i class="fa fa-hand-grab-o"></i>
                    </a>
                    <button class="btn btn-sm btn-alt-warning" data-toggle="sb-item-remove">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
                <div class="scrumboard-item-content">
                    Mobile Applications
                </div>
            </div>
            <div class="scrumboard-item">
                <div class="scrumboard-item-options">
                    <a class="scrumboard-item-handler btn btn-sm btn-alt-warning" href="javascript:void(0)">
                        <i class="fa fa-hand-grab-o"></i>
                    </a>
                    <button class="btn btn-sm btn-alt-warning" data-toggle="sb-item-remove">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
                <div class="scrumboard-item-content">
                    Mobile Game
                </div>
            </div>
            <div class="scrumboard-item">
                <div class="scrumboard-item-options">
                    <a class="scrumboard-item-handler btn btn-sm btn-alt-warning" href="javascript:void(0)">
                        <i class="fa fa-hand-grab-o"></i>
                    </a>
                    <button class="btn btn-sm btn-alt-warning" data-toggle="sb-item-remove">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
                <div class="scrumboard-item-content">
                    SaaS Application
                </div>
            </div>
        </div>
    </div>
    <!-- END Ideas Column -->

    <!-- Design Column -->
    <div class="scrumboard-col block block-themed">
        <div class="block-header bg-elegance">
            <h3 class="block-title font-w600">Design</h3>
            <div class="block-options">
                <div class="dropdown">
                    <button type="button" class="btn-block-option" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-fw fa-ellipsis-v"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="javascript:void(0)">
                            <i class="fa fa-fw fa-pencil mr-5"></i>Edit
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)" data-toggle="block-option" data-action="close">
                            <i class="fa fa-fw fa-times text-danger mr-5"></i>Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-content block-content-full bg-body-light">
            <form class="w-100" method="post" data-toggle="sb-item-add">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-lightbulb-o"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" placeholder="New Idea..">
                </div>
            </form>
        </div>
        <div class="scrumboard-items block-content">
            <div class="scrumboard-item">
                <div class="scrumboard-item-options">
                    <a class="scrumboard-item-handler btn btn-sm btn-alt-warning" href="javascript:void(0)">
                        <i class="fa fa-hand-grab-o"></i>
                    </a>
                    <button class="btn btn-sm btn-alt-warning" data-toggle="sb-item-remove">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
                <div class="scrumboard-item-content">
                    Bootstrap Dashboard
                </div>
            </div>
            <div class="scrumboard-item">
                <div class="scrumboard-item-options">
                    <a class="scrumboard-item-handler btn btn-sm btn-alt-warning" href="javascript:void(0)">
                        <i class="fa fa-hand-grab-o"></i>
                    </a>
                    <button class="btn btn-sm btn-alt-warning" data-toggle="sb-item-remove">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
                <div class="scrumboard-item-content">
                    Landing Page
                </div>
            </div>
        </div>
    </div>
    <!-- END Design Column -->

    <!-- Development Column -->
    <div class="scrumboard-col block block-themed">
        <div class="block-header bg-info">
            <h3 class="block-title font-w600">Development</h3>
            <div class="block-options">
                <div class="dropdown">
                    <button type="button" class="btn-block-option" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-fw fa-ellipsis-v"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="javascript:void(0)">
                            <i class="fa fa-fw fa-pencil mr-5"></i>Edit
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)" data-toggle="block-option" data-action="close">
                            <i class="fa fa-fw fa-times text-danger mr-5"></i>Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-content block-content-full bg-body-light">
            <form class="w-100" method="post" data-toggle="sb-item-add">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-lightbulb-o"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" placeholder="New Idea..">
                </div>
            </form>
        </div>
        <div class="scrumboard-items block-content">
            <div class="scrumboard-item">
                <div class="scrumboard-item-options">
                    <a class="scrumboard-item-handler btn btn-sm btn-alt-warning" href="javascript:void(0)">
                        <i class="fa fa-hand-grab-o"></i>
                    </a>
                    <button class="btn btn-sm btn-alt-warning" data-toggle="sb-item-remove">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
                <div class="scrumboard-item-content">
                    Todo App
                </div>
            </div>
            <div class="scrumboard-item">
                <div class="scrumboard-item-options">
                    <a class="scrumboard-item-handler btn btn-sm btn-alt-warning" href="javascript:void(0)">
                        <i class="fa fa-hand-grab-o"></i>
                    </a>
                    <button class="btn btn-sm btn-alt-warning" data-toggle="sb-item-remove">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
                <div class="scrumboard-item-content">
                    Project Management UI
                </div>
            </div>
            <div class="scrumboard-item">
                <div class="scrumboard-item-options">
                    <a class="scrumboard-item-handler btn btn-sm btn-alt-warning" href="javascript:void(0)">
                        <i class="fa fa-hand-grab-o"></i>
                    </a>
                    <button class="btn btn-sm btn-alt-warning" data-toggle="sb-item-remove">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
                <div class="scrumboard-item-content">
                    Web application framework
                </div>
            </div>
        </div>
    </div>
    <!-- END Development Column -->

    <!-- Add Column -->
    <div class="scrumboard-col block block-themed block-transparent">
        <div class="block-header bg-gray">
            <form class="w-100" method="post" data-toggle="sb-card-add">
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <span class="input-group-text border-0">
                            <i class="fa fa-plus"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control border-0" placeholder="Add New Card..">
                </div>
            </form>
        </div>
    </div>
    <!-- END Add Column -->
</div>
<!-- END Scrum Board -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/jquery-ui/jquery-ui.min.js'); ?>
<?php $cb->get_js('js/plugins/jquery-ui/jquery.ui.touch-punch.min.js'); ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/be_pages_generic_scrumboard.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>