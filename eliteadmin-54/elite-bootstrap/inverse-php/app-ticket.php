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
    <!-- Footable CSS -->
    <link href="../assets/node_modules/footable/css/footable.bootstrap.min.css" rel="stylesheet">
    <!-- Page CSS -->
    <link href="dist/css/pages/contact-app-page.css" rel="stylesheet">
    <link href="dist/css/pages/footable-page.css" rel="stylesheet">
    <!-- Custom CSS -->
    
    <link href="dist/css/style.min.css" rel="stylesheet">
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
                        <h4 class="text-themecolor">Tickets</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Tickets</li>
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
                                <h4 class="card-title">Support Ticket List</h4>
                                <h6 class="card-subtitle">List of ticket opend by customers</h6>
                                <div class="row m-t-40">
                                    <!-- Column -->
                                    <div class="col-md-6 col-lg-3 col-xlg-3">
                                        <div class="card">
                                            <div class="box bg-info text-center">
                                                <h1 class="font-light text-white">2,064</h1>
                                                <h6 class="text-white">Total Tickets</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <div class="col-md-6 col-lg-3 col-xlg-3">
                                        <div class="card">
                                            <div class="box bg-primary text-center">
                                                <h1 class="font-light text-white">1,738</h1>
                                                <h6 class="text-white">Responded</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <div class="col-md-6 col-lg-3 col-xlg-3">
                                        <div class="card">
                                            <div class="box bg-success text-center">
                                                <h1 class="font-light text-white">1100</h1>
                                                <h6 class="text-white">Resolve</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <div class="col-md-6 col-lg-3 col-xlg-3">
                                        <div class="card">
                                            <div class="box bg-dark text-center">
                                                <h1 class="font-light text-white">964</h1>
                                                <h6 class="text-white">Pending</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                </div>
                                <div class="table-responsive">
                                    <table id="demo-foo-addrow" class="table m-t-30 table-hover no-wrap contact-list" data-paging="true" data-paging-size="7">
                                        <thead>
                                            <tr>
                                                <th>ID #</th>
                                                <th>Opened By</th>
                                                <th>Cust. Email</th>
                                                <th>Sbuject</th>
                                                <th>Status</th>
                                                <th>Assign to</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1011</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user" class="img-circle" /> Genelia Deshmukh</a>
                                                </td>
                                                <td>genelia@gmail.com</td>
                                                <td>How to customize the template?</td>
                                                <td><span class="label label-warning">New</span> </td>
                                                <td>Johnathon</td>
                                                <td>14-10-2017</td>
                                            </tr>
                                            <tr>
                                                <td>1224</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user" class="img-circle" /> Ritesh Deshmukh</a>
                                                </td>
                                                <td>ritesh@gmail.com</td>
                                                <td>How to change colors</td>
                                                <td><span class="label label-success">Complete</span> </td>
                                                <td>Salman khan</td>
                                                <td>13-10-2017</td>
                                            </tr>
                                            <tr>
                                                <td>1024</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user" class="img-circle" /> Govinda Mauli</a>
                                                </td>
                                                <td>govinda@gmail.com</td>
                                                <td>How to set Horizontal nav</td>
                                                <td><span class="label label-success">Complete</span> </td>
                                                <td>Hritik Roshan</td>
                                                <td>13-10-2017</td>
                                            </tr>
                                            <tr>
                                                <td>2124</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user" class="img-circle" /> Raja Mauli</a>
                                                </td>
                                                <td>bahubali@gmail.com</td>
                                                <td>How this will connect with bahubali</td>
                                                <td><span class="label label-inverse">Pending</span> </td>
                                                <td>Hritik Roshan</td>
                                                <td>12-10-2017</td>
                                            </tr>
                                            <tr>
                                                <td>3124</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user" class="img-circle" /> Rana Dagubati</a>
                                                </td>
                                                <td>ranabati@gmail.com</td>
                                                <td>How to set navigation</td>
                                                <td><span class="label label-success">Complete</span> </td>
                                                <td>Hritik Roshan</td>
                                                <td>12-10-2017</td>
                                            </tr>
                                            <tr>
                                                <td>1611</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user" class="img-circle" /> Tony Deshmukh</a>
                                                </td>
                                                <td>genelia@gmail.com</td>
                                                <td>How to customize the template?</td>
                                                <td><span class="label label-warning">New</span> </td>
                                                <td>Johnathon</td>
                                                <td>14-10-2017</td>
                                            </tr>
                                            <tr>
                                                <td>4224</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user" class="img-circle" /> Ritesh Deshmukh</a>
                                                </td>
                                                <td>ritesh@gmail.com</td>
                                                <td>How to change colors</td>
                                                <td><span class="label label-success">Complete</span> </td>
                                                <td>Salman khan</td>
                                                <td>13-10-2017</td>
                                            </tr>
                                            <tr>
                                                <td>2524</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user" class="img-circle" /> Govinda Mauli</a>
                                                </td>
                                                <td>govinda@gmail.com</td>
                                                <td>How to set Horizontal nav</td>
                                                <td><span class="label label-success">Complete</span> </td>
                                                <td>Hritik Roshan</td>
                                                <td>13-10-2017</td>
                                            </tr>
                                            <tr>
                                                <td>7524</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user" class="img-circle" /> Raja Mauli</a>
                                                </td>
                                                <td>bahubali@gmail.com</td>
                                                <td>How this will connect with bahubali</td>
                                                <td><span class="label label-inverse">Pending</span> </td>
                                                <td>Hritik Roshan</td>
                                                <td>12-10-2017</td>
                                            </tr>
                                            <tr>
                                                <td>4124</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user" class="img-circle" /> Rana Dagubati</a>
                                                </td>
                                                <td>ranabati@gmail.com</td>
                                                <td>How to set navigation</td>
                                                <td><span class="label label-success">Complete</span> </td>
                                                <td>Hritik Roshan</td>
                                                <td>12-10-2017</td>
                                            </tr>
                                            <tr>
                                                <td>1011</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user" class="img-circle" /> Ama Deshmukh</a>
                                                </td>
                                                <td>genelia@gmail.com</td>
                                                <td>How to customize the template?</td>
                                                <td><span class="label label-warning">New</span> </td>
                                                <td>Johnathon</td>
                                                <td>14-10-2017</td>
                                            </tr>
                                            <tr>
                                                <td>1224</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user" class="img-circle" /> adfh abraham</a>
                                                </td>
                                                <td>ritesh@gmail.com</td>
                                                <td>How to change colors</td>
                                                <td><span class="label label-success">Complete</span> </td>
                                                <td>Salman khan</td>
                                                <td>13-10-2017</td>
                                            </tr>
                                            <tr>
                                                <td>8024</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user" class="img-circle" /> atest adg</a>
                                                </td>
                                                <td>govinda@gmail.com</td>
                                                <td>How to set Horizontal nav</td>
                                                <td><span class="label label-success">Complete</span> </td>
                                                <td>Hritik Roshan</td>
                                                <td>13-10-2017</td>
                                            </tr>
                                            <tr>
                                                <td>5124</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user" class="img-circle" /> Raja Mauli</a>
                                                </td>
                                                <td>bahubali@gmail.com</td>
                                                <td>How this will connect with bahubali</td>
                                                <td><span class="label label-inverse">Pending</span> </td>
                                                <td>Hritik Roshan</td>
                                                <td>12-10-2017</td>
                                            </tr>
                                            <tr>
                                                <td>3144</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user" class="img-circle" /> Rana Dagubati</a>
                                                </td>
                                                <td>ranabati@gmail.com</td>
                                                <td>How to set navigation</td>
                                                <td><span class="label label-success">Complete</span> </td>
                                                <td>Hritik Roshan</td>
                                                <td>12-10-2017</td>
                                            </tr>
                                            <tr>
                                                <td>1621</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user" class="img-circle" /> Tony Deshmukh</a>
                                                </td>
                                                <td>genelia@gmail.com</td>
                                                <td>How to customize the template?</td>
                                                <td><span class="label label-warning">New</span> </td>
                                                <td>Johnathon</td>
                                                <td>14-10-2017</td>
                                            </tr>
                                            <tr>
                                                <td>4724</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user" class="img-circle" /> Ritesh Deshmukh</a>
                                                </td>
                                                <td>ritesh@gmail.com</td>
                                                <td>How to change colors</td>
                                                <td><span class="label label-success">Complete</span> </td>
                                                <td>Salman khan</td>
                                                <td>13-10-2017</td>
                                            </tr>
                                            <tr>
                                                <td>2594</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user" class="img-circle" /> Govinda Mauli</a>
                                                </td>
                                                <td>govinda@gmail.com</td>
                                                <td>How to set Horizontal nav</td>
                                                <td><span class="label label-success">Complete</span> </td>
                                                <td>Hritik Roshan</td>
                                                <td>13-10-2017</td>
                                            </tr>
                                            <tr>
                                                <td>7524</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user" class="img-circle" /> Raja Mauli</a>
                                                </td>
                                                <td>bahubali@gmail.com</td>
                                                <td>How this will connect with bahubali</td>
                                                <td><span class="label label-inverse">Pending</span> </td>
                                                <td>Hritik Roshan</td>
                                                <td>12-10-2017</td>
                                            </tr>
                                            <tr>
                                                <td>4124</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user" class="img-circle" /> Rana Dagubati</a>
                                                </td>
                                                <td>ranabati@gmail.com</td>
                                                <td>How to set navigation</td>
                                                <td><span class="label label-success">Complete</span> </td>
                                                <td>Hritik Roshan</td>
                                                <td>12-10-2017</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="2">
                                                    <button type="button" class="btn btn-info btn-rounded" data-toggle="modal" data-target="#add-contact">Add New Contact</button>
                                                </td>
                                                <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="myModalLabel">Add New Contact</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <from class="form-horizontal form-material">
                                                                    <div class="form-group">
                                                                        <div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" placeholder="Type name"> </div>
                                                                        <div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" placeholder="Email"> </div>
                                                                        <div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" placeholder="Phone"> </div>
                                                                        <div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" placeholder="Designation"> </div>
                                                                        <div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" placeholder="Age"> </div>
                                                                        <div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" placeholder="Date of joining"> </div>
                                                                        <div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" placeholder="Salary"> </div>
                                                                        <div class="col-md-12 m-b-20">
                                                                            <div class="fileupload btn btn-danger btn-rounded waves-effect waves-light"><span><i class="ion-upload m-r-5"></i>Upload Contact Image</span>
                                                                                <input type="file" class="upload"> </div>
                                                                        </div>
                                                                    </div>
                                                                </from>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Save</button>
                                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                                            </div>
                                                        </div>
                                                        <!-- /.modal-content -->
                                                    </div>
                                                    <!-- /.modal-dialog -->
                                                </div>
                                                <td colspan="6">
                                                    <div class="text-right">
                                                        <ul class="pagination"> </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
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
    <!-- Footable -->
    <script src="../assets/node_modules/moment/moment.js"></script>
    <script src="../assets/node_modules/footable/js/footable.min.js"></script>
    <!--FooTable init-->
    <script>
        $(function () {
            $('#demo-foo-addrow').footable();
        });
    </script>

</body>

</html>