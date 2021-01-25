<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Elite Admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- page css -->
    <link href="dist/css/pages/other-pages.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-default fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Elite admin</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php 
            include 'dist/php/header.php';
        ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php
            include 'dist/php/left-sidebar.php';
        ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">List Media</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">List Media</li>
                            </ol>
                            <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>
                             
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- .row -->
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 p-20">
                                        <h4 class="card-title">Basic example <a class="get-code" data-toggle="collapse" href="#pgr1" aria-expanded="true"><i class="fa fa-code" title="Get Code" data-toggle="tooltip"></i></a></h4>
                                        <div class="collapse m-t-15 well" id="pgr1" aria-expanded="true">
                                            <pre class="highlight">
 <code class="prettyprint">
  &lt;ul class="list-group"&gt;<br/>
    &lt;li class="list-group-item"&gt;Cras justo odio&lt;/li&gt;<br/>
    &lt;li class="list-group-item"&gt;Dapibus ac facilisis in&lt;/li&gt;<br/>
    &lt;li class="list-group-item"&gt;Morbi leo risus&lt;/li&gt;<br/>
    &lt;li class="list-group-item"&gt;Porta ac consectetur ac&lt;/li&gt;<br/>
    &lt;li class="list-group-item"&gt;Vestibulum at eros&lt;/li&gt;<br/>
  &lt;/ul&gt;</code></pre> </div>
                                        <ul class="list-group">
                                            <li class="list-group-item">Cras justo odio</li>
                                            <li class="list-group-item">Dapibus ac facilisis in</li>
                                            <li class="list-group-item">Morbi leo risus</li>
                                            <li class="list-group-item">Porta ac consectetur ac</li>
                                            <li class="list-group-item">Vestibulum at eros</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 col-sm-4 p-20">
                                        <h4 class="card-title">Linked items <a class="get-code" data-toggle="collapse" href="#pgr2" aria-expanded="true"><i class="fa fa-code" title="Get Code" data-toggle="tooltip"></i></a></h4>
                                        <div class="collapse m-t-15 well" id="pgr2" aria-expanded="true">
                                            <pre class="highlight">
    <code class="prettyprint">
  &lt;div class="list-group"&gt;<br/>
  &lt;a href="javascript:void(0)" class="list-group-item active"&gt;Cras justo odio&lt;/a&gt;
  &lt;a href="javascript:void(0)" class="list-group-item"&gt;Dapibus ac facilisis in&lt;/a&gt;
  &lt;a href="javascript:void(0)" class="list-group-item"&gt;Morbi leo risus&lt;/a&gt;
  &lt;a href="javascript:void(0)" class="list-group-item"&gt;Porta ac consectetur ac&lt;/a&gt;
  &lt;a href="javascript:void(0)" class="list-group-item"&gt;Vestibulum at eros&lt;/a&gt;
&lt;/div&gt;</code> </pre></div>
                                        <div class="list-group"> <a href="javascript:void(0)" class="list-group-item active">Cras justo odio</a> <a href="javascript:void(0)" class="list-group-item">Dapibus ac facilisis in</a> <a href="javascript:void(0)" class="list-group-item">Morbi leo risus</a> <a href="javascript:void(0)" class="list-group-item">Porta ac consectetur ac</a> <a href="javascript:void(0)" class="list-group-item">Vestibulum at eros</a> </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 p-20">
                                        <h4 class="card-title">With Badges <a class="get-code" data-toggle="collapse" href="#pgr3" aria-expanded="true"><i class="fa fa-code" title="Get Code" data-toggle="tooltip"></i></a></h4>
                                        <div class="collapse m-t-15 well" id="pgr3" aria-expanded="true">
                                            <pre>
    <code class="prettyprint">
      &lt;ul class="list-group list-group-full"&gt;<br/>
        &lt;li class="list-group-item"&gt;<br/>
          &lt;span class="badge badge-success"&gt;6&lt;/span&gt; Cras justo odio
        &lt;/li&gt;<br/>
        &lt;li class="list-group-item"&gt;<br/>
          Dapibus ac facilisis in
        &lt;/li&gt;<br/>
        &lt;li class="list-group-item"&gt;<br/>
          &lt;span class="badge badge-danger"&gt;3&lt;/span&gt; Morbi leo risus
        &lt;/li&gt;<br/>
        &lt;li class="list-group-item active"&gt;<br/>
          &lt;span class="badge badge-info"&gt;10&lt;/span&gt; Porta ac consectetur ac
        &lt;/li&gt;<br/>
        &lt;li class="list-group-item"&gt;<br/>
          Vestibulum at eros
        &lt;/li&gt;<br/>

      &lt;/ul&gt;</code> </pre>
                                        </div>
                                        <ul class="list-group list-group-full">
                                            <li class="list-group-item"> Cras justo odio <span class="badge badge-info ml-auto">6</span></li>
                                            <li class="list-group-item"> Dapibus ac facilisis in </li>
                                            <li class="list-group-item"> Morbi leo risus <span class="badge badge-danger ml-auto">3</span></li>
                                            <li class="list-group-item active"> Porta ac consectetur ac <span class="badge badge-success ml-auto">10</span></li>
                                            <li class="list-group-item"> Vestibulum at eros </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- / .row -->
                                <!-- .row -->
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 p-20">
                                        <h4 class="card-title">Button items</h4>
                                        <div class="list-group">
                                            <button type="button" class="list-group-item">Cras justo odio</button>
                                            <button type="button" class="list-group-item">Dapibus ac facilisis in</button>
                                            <button type="button" class="list-group-item">Morbi leo risus</button>
                                            <button type="button" class="list-group-item">Porta ac consectetur ac</button>
                                            <button type="button" class="list-group-item">Vestibulum at eros</button>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 p-20">
                                        <h4 class="card-title">Disabled items</h4>
                                        <div class="list-group">
                                            <a href="javascript:void(0)" class="list-group-item disabled">                    Cras justo odio                      </a>
                                            <a href="javascript:void(0)" class="list-group-item">Dapibus ac facilisis in</a>
                                            <a href="javascript:void(0)" class="list-group-item">Morbi leo risus</a>
                                            <a href="javascript:void(0)" class="list-group-item">Porta ac consectetur ac</a>
                                            <a href="javascript:void(0)" class="list-group-item">Vestibulum at eros</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 p-20">
                                        <h4 class="card-title">Disabled items</h4>
                                        <ul class="list-group">
                                            <li class="list-group-item list-group-item-success">Dapibus ac facilisis in</li>
                                            <li class="list-group-item list-group-item-info">Cras sit amet nibh libero</li>
                                            <li class="list-group-item list-group-item-warning">Porta ac consectetur ac</li>
                                            <li class="list-group-item list-group-item-danger">Vestibulum at eros</li>
                                            <li class="list-group-item list-group-item-default">Vestibulum at eros</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /.row -->
                                <!-- .row -->
                                <div class="row">
                                    <div class="col-md-8 p-20">
                                        <h4 class="card-title">Media object</h4>
                                        <ul class="list-unstyled">
                                            <li class="media">
                                                <img class="d-flex mr-3" src="../assets/images/users/1.jpg" width="60" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="mt-0 mb-1">List-based media object</h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                </div>
                                            </li>
                                            <li class="media my-4">
                                                <img class="d-flex mr-3" src="../assets/images/users/2.jpg" width="60" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="mt-0 mb-1">List-based media object</h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                </div>
                                            </li>
                                            <li class="media">
                                                <img class="d-flex mr-3" src="../assets/images/users/3.jpg" width="60" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="mt-0 mb-1">List-based media object</h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                    <div class="media mt-3">
                                                        <a class="d-flex pr-3" href="javascript:void(0)">
                                                            <img src="../assets/images/users/4.jpg" width="60" height="60" alt="Generic placeholder image">
                                                        </a>
                                                        <div class="media-body">
                                                            <h5 class="mt-0">Media heading</h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 col-sm-12 p-20">
                                        <h4 class="card-title">Custom content</h4>
                                        <div class="list-group">
                                            <a href="javascript:void(0)"class="list-group-item list-group-item-action flex-column align-items-start active">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h5 class="mb-1 text-white">List group item heading</h5>
                                                    <small>3 days ago</small>
                                                </div>
                                                <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                                <small>Donec id elit non mi porta.</small>
                                            </a>
                                            <a href="javascript:void(0)"class="list-group-item list-group-item-action flex-column align-items-start">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h5 class="mb-1">List group item heading</h5>
                                                    <small class="text-muted">3 days ago</small>
                                                </div>
                                                <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                                <small class="text-muted">Donec id elit non mi porta.</small>
                                            </a>
                                            <a href="javascript:void(0)"class="list-group-item list-group-item-action flex-column align-items-start">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h5 class="mb-1">List group item heading</h5>
                                                    <small class="text-muted">3 days ago</small>
                                                </div>
                                                <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                                <small class="text-muted">Donec id elit non mi porta.</small>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <?php
                    include 'dist/php/right-sidebar.php';
                ?>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <?php
            include 'dist/php/footer.php';
        ?>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/node_modules/popper/popper.min.js"></script>
    <script src="../assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="../assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js?lang=css&amp;skin=default"></script>
</body>

</html>