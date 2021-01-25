<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <!-- Pagination -->
    <h2 class="content-heading">Pagination</h2>
    <div class="row row-deck">
        <div class="col-xl-4">
            <!-- Default Pagination -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Default</h3>
                </div>
                <div class="block-content">
                    <nav aria-label="Page navigation">
                        <ul class="pagination pagination-sm">
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)" aria-label="Previous">
                                    <span aria-hidden="true">
                                        <i class="fa fa-angle-left"></i>
                                    </span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)" aria-label="Next">
                                    <span aria-hidden="true">
                                        <i class="fa fa-angle-right"></i>
                                    </span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)" aria-label="Previous">
                                    <span aria-hidden="true">
                                        <i class="fa fa-angle-left"></i>
                                    </span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)" aria-label="Next">
                                    <span aria-hidden="true">
                                        <i class="fa fa-angle-right"></i>
                                    </span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <nav aria-label="Page navigation">
                        <ul class="pagination pagination-lg">
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)" aria-label="Previous">
                                    <span aria-hidden="true">
                                        <i class="fa fa-angle-left"></i>
                                    </span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)" aria-label="Next">
                                    <span aria-hidden="true">
                                        <i class="fa fa-angle-right"></i>
                                    </span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- END Default Pagination -->
        </div>
        <div class="col-xl-4">
            <!-- Disabled and Active States -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Disabled and Active States</h3>
                </div>
                <div class="block-content">
                    <nav aria-label="Page navigation">
                        <ul class="pagination pagination-sm">
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
                                    <span aria-hidden="true">
                                        <i class="fa fa-angle-double-left"></i>
                                    </span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="javascript:void(0)">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">2</a>
                            </li>
                            <li class="page-item disabled">
                                <a class="page-link" href="javascript:void(0)">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)" aria-label="Next">
                                    <span aria-hidden="true">
                                        <i class="fa fa-angle-double-right"></i>
                                    </span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
                                    <span aria-hidden="true">
                                        <i class="fa fa-angle-double-left"></i>
                                    </span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="javascript:void(0)">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">2</a>
                            </li>
                            <li class="page-item disabled">
                                <a class="page-link" href="javascript:void(0)">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)" aria-label="Next">
                                    <span aria-hidden="true">
                                        <i class="fa fa-angle-double-right"></i>
                                    </span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <nav aria-label="Page navigation">
                        <ul class="pagination pagination-lg">
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
                                    <span aria-hidden="true">
                                        <i class="fa fa-angle-double-left"></i>
                                    </span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="javascript:void(0)">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">2</a>
                            </li>
                            <li class="page-item disabled">
                                <a class="page-link" href="javascript:void(0)">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)" aria-label="Next">
                                    <span aria-hidden="true">
                                        <i class="fa fa-angle-double-right"></i>
                                    </span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- END Disabled and Active States -->
        </div>
        <div class="col-xl-4">
            <!-- Pager -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Pager <small>Button based</small></h3>
                </div>
                <div class="block-content">
                    <nav class="clearfix push">
                        <button type="button" class="btn btn-alt-secondary float-right" data-toggle="tooltip" title="Next">
                            <i class="fa fa-angle-right fa-fw"></i>
                        </button>
                        <button type="button" class="btn btn-alt-secondary float-left" data-toggle="tooltip" title="Previous">
                            <i class="fa fa-angle-left fa-fw"></i>
                        </button>
                    </nav>
                    <nav class="clearfix push">
                        <button type="button" class="btn btn-alt-secondary float-right" data-toggle="tooltip" title="Next">
                            <i class="fa fa-chevron-right fa-fw"></i>
                        </button>
                        <button type="button" class="btn btn-alt-secondary float-left" data-toggle="tooltip" title="Previous">
                            <i class="fa fa-chevron-left fa-fw"></i>
                        </button>
                    </nav>
                    <nav class="clearfix push">
                        <button type="button" class="btn btn-alt-secondary float-right" data-toggle="tooltip" title="Next">
                            <i class="fa fa-arrow-right fa-fw"></i>
                        </button>
                        <button type="button" class="btn btn-alt-secondary float-left" data-toggle="tooltip" title="Previous">
                            <i class="fa fa-arrow-left fa-fw"></i>
                        </button>
                    </nav>
                    <nav class="clearfix push">
                        <button type="button" class="btn btn-alt-secondary min-width-100 float-right">Next</button>
                        <button type="button" class="btn btn-alt-secondary min-width-100 float-left">Previous</button>
                    </nav>
                </div>
            </div>
            <!-- END Pager -->
        </div>
    </div>
    <!-- END Pagination -->

    <!-- Breadcrumb -->
    <h2 class="content-heading">Breadcrump</h2>
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Default</h3>
        </div>
        <div class="block-content">
            <nav class="breadcrumb push">
                <a class="breadcrumb-item" href="javascript:void(0)">Home</a>
                <a class="breadcrumb-item" href="javascript:void(0)">Library</a>
                <a class="breadcrumb-item" href="javascript:void(0)">Data</a>
                <span class="breadcrumb-item active">Bootstrap</span>
            </nav>
        </div>
    </div>
    <!-- END Breadcrumb -->

    <!-- Navigation Pills -->
    <h2 class="content-heading">Navigation Pills</h2>
    <div class="row">
        <div class="col-xl-4">
            <!-- Default Pills -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Default Style</h3>
                </div>
                <div class="block-content">
                    <ul class="nav nav-pills push">
                        <li class="nav-item">
                            <a class="nav-link active" href="javascript:void(0)">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)"><i class="fa fa-envelope"></i></a>
                        </li>
                    </ul>
                    <ul class="nav nav-pills push">
                        <li class="nav-item">
                            <a class="nav-link active" href="javascript:void(0)">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">Tools</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END Default Pills -->
        </div>
        <div class="col-xl-4">
            <!-- With Icons -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">With Icons</h3>
                </div>
                <div class="block-content">
                    <ul class="nav nav-pills push">
                        <li class="nav-item">
                            <a class="nav-link active" href="javascript:void(0)">
                                <i class="fa fa-fw fa-home mr-5"></i>Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">
                                <i class="fa fa-fw fa-pencil mr-5"></i>Profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">
                                <i class="fa fa-cog"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-pills push">
                        <li class="nav-item">
                            <a class="nav-link active" href="javascript:void(0)">
                                <i class="fa fa-fw fa-home mr-5"></i>Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">
                                <i class="fa fa-fw fa-pencil mr-5"></i>Profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">Tools</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END With Icons -->
        </div>
        <div class="col-xl-4">
            <!-- With Badges -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">With Badges</h3>
                </div>
                <div class="block-content">
                    <ul class="nav nav-pills push">
                        <li class="nav-item">
                            <a class="nav-link active" href="javascript:void(0)">
                                Home <span class="badge badge-pill badge-secondary ml-5">3</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">
                                Profile <span class="badge badge-pill badge-secondary ml-5">1</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">
                                <i class="fa fa-cog"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-pills push">
                        <li class="nav-item">
                            <a class="nav-link active" href="javascript:void(0)">
                                Home <span class="badge badge-pill badge-secondary ml-5">3</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">
                                Profile <span class="badge badge-pill badge-secondary ml-5">1</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">Tools</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END With Badges -->
        </div>
    </div>
    <!-- END Navigation Pills -->

    <!-- List Groups -->
    <h2 class="content-heading">List Groups</h2>
    <div class="row">
        <div class="col-xl-4">
            <!-- Default List Groups -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Default Style</h3>
                </div>
                <div class="block-content">
                    <ul class="list-group push">
                        <li class="list-group-item">This is a simple</li>
                        <li class="list-group-item">List Group</li>
                        <li class="list-group-item">For showcasing</li>
                        <li class="list-group-item">A list of items</li>
                    </ul>
                </div>
            </div>
            <!-- END Default List Groups -->
        </div>
        <div class="col-xl-4">
            <!-- With Badges -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">With Badges</h3>
                </div>
                <div class="block-content">
                    <ul class="list-group push">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            This is a simple
                            <span class="badge badge-pill badge-secondary">1</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            List Group
                            <span class="badge badge-pill badge-secondary">7</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            For showcasing
                            <span class="badge badge-pill badge-secondary">5</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            A list of items
                            <span class="badge badge-pill badge-secondary">3</span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END With Badges -->
        </div>
        <div class="col-xl-4">
            <!-- With Links -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">With Links</h3>
                </div>
                <div class="block-content">
                    <div class="list-group push">
                        <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center active" href="javascript:void(0)">
                            This is a simple
                            <span class="badge badge-pill badge-secondary">1</span>
                        </a>
                        <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" href="javascript:void(0)">
                            List Group
                            <span class="badge badge-pill badge-secondary">7</span>
                        </a>
                        <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center disabled" href="javascript:void(0)">
                            For showcasing
                        </a>
                        <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" href="javascript:void(0)">
                            A list of items
                            <span class="badge badge-pill badge-secondary">3</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- END With Links -->
        </div>
    </div>
    <!-- END List Groups -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>