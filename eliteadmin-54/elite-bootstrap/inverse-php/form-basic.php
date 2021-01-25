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
    <link href="dist/css/pages/file-upload.css" rel="stylesheet">
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
                        <h4 class="text-themecolor">Basic Form</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Basic Form</li>
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
                                <h4 class="card-title">Basic Material inputs</h4>
                                <h6 class="card-subtitle">Just add
                                    <code>form-material</code> class to the form that's it.</h6>
                                <form class="form-material m-t-40">
                                    <div class="form-group">
                                        <label>Default Text
                                            <span class="help"> e.g. "George deo"</span>
                                        </label>
                                        <input type="text" class="form-control form-control-line" value="Some text value..."> </div>
                                    <div class="form-group">
                                        <label for="example-email">Email
                                            <span class="help"> e.g. "example@gmail.com"</span>
                                        </label>
                                        <input type="email" id="example-email2" name="example-email" class="form-control" placeholder="Email"> </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" value="password"> </div>
                                    <div class="form-group">
                                        <label>Placeholder</label>
                                        <input type="text" class="form-control" placeholder="placeholder"> </div>
                                    <div class="form-group">
                                        <label>Text area</label>
                                        <textarea class="form-control" rows="5"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Input Select</label>
                                        <select class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>File upload</label>
                                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                            <div class="form-control" data-trigger="fileinput">
                                                <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                                <span class="fileinput-filename"></span>
                                            </div>
                                            <span class="input-group-addon btn btn-default btn-file">
                                                <span class="fileinput-new">Select file</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="hidden">
                                                <input type="file" name="..."> </span>
                                            <a href="javascript:void(0)" class="input-group-addon btn btn-default fileinput-exists"
                                                data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Helping text</label>
                                        <input type="text" class="form-control form-control-line">
                                        <span class="help-block text-muted">
                                            <small>A block of help text that breaks onto a new line and may extend beyond one line.</small>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Different Widths</h4>
                                <h6 class="card-subtitle">Just add
                                    <code>col*</code> class to form-group</h6>
                                <form class="form-material m-t-40 row">
                                    <div class="form-group col-md-6 m-t-20">
                                        <input type="text" class="form-control form-control-line" value="col-md-6"> </div>
                                    <div class="form-group col-md-6 m-t-20">
                                        <input type="email" id="example-email2" name="example-email" class="form-control" placeholder="col-md-6"> </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <input type="text" class="form-control form-control-line" value="col-md-4"> </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <input type="email" id="example-email2" name="example-email" class="form-control" placeholder="col-md-4"> </div>
                                    <div class="form-group col-md-4 m-t-20">
                                        <input type="text" class="form-control" value="col-md-4"> </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <input type="text" class="form-control" placeholder="col-md-3"> </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <select class="form-control">
                                            <option>col-md-3</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                            <div class="form-control" data-trigger="fileinput">
                                                <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                                <span class="fileinput-filename"></span>
                                            </div>
                                            <span class="input-group-addon btn btn-default btn-file">
                                                <span class="fileinput-new">Select file</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="..."> </span>
                                            <a href="javascript:void(0)" class="input-group-addon btn btn-default fileinput-exists"
                                                data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-3 m-t-20">
                                        <input type="text" placeholder="col-md-3" class="form-control form-control-line"> </div>
                                    <div class="form-group col-md-12 m-t-20">
                                        <label>Text area</label>
                                        <textarea class="form-control" rows="5"></textarea>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Default Basic Forms</h4>
                                <h6 class="card-subtitle"> All bootstrap element classies </h6>
                                <form class="form">
                                    <div class="form-group m-t-40 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Text</label>
                                        <div class="col-10">
                                            <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-search-input" class="col-2 col-form-label">Search</label>
                                        <div class="col-10">
                                            <input class="form-control" type="search" value="How do I shoot web" id="example-search-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-email-input" class="col-2 col-form-label">Email</label>
                                        <div class="col-10">
                                            <input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-url-input" class="col-2 col-form-label">URL</label>
                                        <div class="col-10">
                                            <input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-tel-input" class="col-2 col-form-label">Telephone</label>
                                        <div class="col-10">
                                            <input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-password-input" class="col-2 col-form-label">Password</label>
                                        <div class="col-10">
                                            <input class="form-control" type="password" value="hunter2" id="example-password-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-number-input" class="col-2 col-form-label">Number</label>
                                        <div class="col-10">
                                            <input class="form-control" type="number" value="42" id="example-number-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-datetime-local-input" class="col-2 col-form-label">Date and time</label>
                                        <div class="col-10">
                                            <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-2 col-form-label">Date</label>
                                        <div class="col-10">
                                            <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-month-input" class="col-2 col-form-label">Month</label>
                                        <div class="col-10">
                                            <input class="form-control" type="month" value="2011-08" id="example-month-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-week-input" class="col-2 col-form-label">Week</label>
                                        <div class="col-10">
                                            <input class="form-control" type="week" value="2011-W33" id="example-week-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-time-input" class="col-2 col-form-label">Time</label>
                                        <div class="col-10">
                                            <input class="form-control" type="time" value="13:45:00" id="example-time-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-month-input" class="col-2 col-form-label">Select</label>
                                        <div class="col-10">
                                            <select class="custom-select col-12" id="inlineFormCustomSelect">
                                                <option selected="">Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-color-input" class="col-2 col-form-label">Color</label>
                                        <div class="col-10">
                                            <input class="form-control" type="color" value="#563d7c" id="example-color-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-color-input" class="col-2 col-form-label">Input Range</label>
                                        <div class="col-10">
                                            <input type="range" class="form-control" id="range" value="50">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-body">
                            <h4 class="card-title">Default Horizontal Forms</h4>
                            <h6 class="card-subtitle"> All bootstrap element classies </h6>
                            <form class="form-horizontal m-t-40">
                                <div class="form-group">
                                    <label>Default Text
                                        <span class="help"> e.g. "George deo"</span>
                                    </label>
                                    <input type="text" class="form-control" value="George deo...">
                                </div>
                                <div class="form-group">
                                    <label for="example-email">Email
                                        <span class="help"> e.g. "example@gmail.com"</span>
                                    </label>
                                    <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" value="password">
                                </div>
                                <div class="form-group">
                                    <label>Placeholder</label>
                                    <input type="text" class="form-control" placeholder="placeholder">
                                </div>
                                <div class="form-group">
                                    <label>Text area</label>
                                    <textarea class="form-control" rows="5"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Read only input</label>
                                    <input class="form-control" type="text" placeholder="Readonly input here…" readonly>
                                </div>
                                <div class="form-group">
                                    <fieldset disabled>
                                        <label for="disabledTextInput">Disabled input</label>
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                                    </fieldset>
                                </div>
                                <div class="form-group row p-t-20">
                                    <div class="col-sm-4">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                            <label class="custom-control-label" for="customCheck2">Check this custom checkbox</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck3">
                                            <label class="custom-control-label" for="customCheck3">Check this custom checkbox</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio2">Toggle this custom radio</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Input Select</label>
                                    <select class="custom-select col-12" id="inlineFormCustomSelect">
                                        <option selected>Choose...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Default file upload</label>
                                    <input type="file" class="form-control" id="exampleInputFile" aria-describedby="fileHelp">
                                </div>
                                <div class="form-group">
                                    <label>Custom File upload</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Helping text</label>
                                    <input type="text" class="form-control" placeholder="Helping text">
                                    <span class="help-block">
                                        <small>A block of help text that breaks onto a new line and may extend beyond one line.</small>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-body">
                            <h4 class="card-title">Input groups</h4>
                            <h6 class="card-subtitle"> All bootstrap element classies </h6>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">@</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2">@example.com</span>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                                            </div>
                                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">$</span>
                                            </div>
                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                            <div class="input-group-append">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">$</span>
                                            </div>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">0.00</span>
                                            </div>
                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                        </div>
                                        <!-- form-group -->
                                    </form>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <form>
                                        <label class="control-label m-t-20" for="example-input1-group2">Checkboxes and radio addons</label>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <label class="custom-control custom-checkbox m-b-0">
                                                                <input type="checkbox" class="custom-control-input">
                                                                <span class="custom-control-label"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <input type="text" class="form-control" aria-label="Text input with checkbox">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <label class="custom-control custom-radio m-b-0">
                                                                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                                <span class="custom-control-label"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <input type="text" class="form-control" aria-label="Text input with radio button">
                                                </div>
                                            </div>
                                        </div>
                                        <label class="control-label m-t-20" for="example-input1-group2">Multiple addons</label>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <label class="custom-control custom-checkbox m-b-0">
                                                                <input type="checkbox" class="custom-control-input">
                                                                <span class="custom-control-label"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">0.00</span>
                                                    </div>
                                                    <input type="text" class="form-control" aria-label="Text input with checkbox">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">$</span>
                                                    </div>
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">0.00</span>
                                                    </div>
                                                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <form class="input-form">
                                        <label class="control-label m-t-20" for="example-input1-group2">Button addons</label>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-info" type="button">Go!</button>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-info" type="button">Go!</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-danger" type="button">Hate It</button>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-success" type="button">Love It</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- form-group -->
                                    </form>
                                </div>
                                <div class="col-sm-12 col-xs-12">
                                    <label class="control-label m-t-20" for="example-input1-group2">Dropdown addons</label>
                                    <form class="input-form">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                            <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                            <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                            <div role="separator" class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                            <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                            <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                                            <div role="separator" class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-body">
                            <h3 class="box-title m-b-0">Input States</h3>
                            <p class="text-muted m-b-30 font-13"> Validation styles for error, warning, and success states on form controls.</p>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <form class="form-horizontal row" role="form">
                                        <div class="col-12">
                                            <div class="form-group has-success">
                                                <label class="form-control-label" for="inputSuccess1">Input with success</label>
                                                <input type="text" class="form-control form-control-success" id="inputSuccess1">
                                                <div class="form-control-feedback">Success! You've done it.</div>
                                                <small class="form-text text-muted">Example help text that remains unchanged.</small>
                                            </div>
                                            <div class="form-group has-warning">
                                                <label class="form-control-label" for="inputWarning1">Input with warning</label>
                                                <input type="text" class="form-control form-control-warning" id="inputWarning1">
                                                <div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
                                                <small class="form-text text-muted">Example help text that remains unchanged.</small>
                                            </div>
                                            <div class="form-group has-danger">
                                                <label class="form-control-label" for="inputDanger1">Input with danger</label>
                                                <input type="text" class="form-control form-control-danger" id="inputDanger1">
                                                <div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
                                                <small class="form-text text-muted">Example help text that remains unchanged.</small>
                                            </div>
                                        </div>
                                    </form>
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group row has-success">
                                            <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control form-control-success" id="inputHorizontalSuccess" placeholder="name@example.com">
                                                <div class="form-control-feedback">Success! You've done it.</div>
                                                <small class="form-text text-muted">Example help text that remains unchanged.</small>
                                            </div>
                                        </div>
                                        <div class="form-group row has-warning">
                                            <label for="inputHorizontalWarning" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control form-control-warning" id="inputHorizontalWarning" placeholder="name@example.com">
                                                <div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
                                                <small class="form-text text-muted">Example help text that remains unchanged.</small>
                                            </div>
                                        </div>
                                        <div class="form-group row has-danger">
                                            <label for="inputHorizontalDnger" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control form-control-danger" id="inputHorizontalDnger" placeholder="name@example.com">
                                                <div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
                                                <small class="form-text text-muted">Example help text that remains unchanged.</small>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-sm-5 offset-sm-1 col-xs-12">
                                    <form role="form" class="form-horizontal row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="col-sm-3 form-control-label" for="example-input-small">Small</label>
                                                <div class="col-sm-6">
                                                    <input type="text" id="example-input-small" name="example-input-small" class="form-control form-control-sm" placeholder="form-control-sm">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 form-control-label" for="example-input-normal">Normal</label>
                                                <div class="col-sm-6">
                                                    <input type="text" id="example-input-normal" name="example-input-normal" class="form-control" placeholder="Normal">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 form-control-label" for="example-input-large">Large</label>
                                                <div class="col-sm-6">
                                                    <input type="text" id="example-input-large" name="example-input-large" class="form-control form-control-lg" placeholder="form-control-lg">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 form-control-label">Grid Sizes</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" placeholder=".col-4">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-5 col-sm-offset-3">
                                                    <input type="text" class="form-control" placeholder=".col-5">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-6 col-sm-offset-3">
                                                    <input type="text" class="form-control" placeholder=".col-6">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-body">
                            <h3 class="box-title m-b-0">Sample Basic Forms</h3>
                            <p class="text-muted m-b-30 font-13"> Bootstrap Elements </p>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">User Name</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Username">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
                                        </div>
                                        <div class="form-group">
                                            <label class="custom-control custom-checkbox m-b-0">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-label">Remember me</span>
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                        <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-body">
                            <h3 class="box-title m-b-0">Sample Horizontal form</h3>
                            <p class="text-muted m-b-30 font-13"> Use Bootstrap's predefined grid classes for horizontal form </p>
                            <form class="form-horizontal">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">Username*</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder="Username">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">Email*</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">Website</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder="Website">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-3 text-right control-label col-form-label">Password*</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword4" class="col-sm-3 text-right control-label col-form-label">Re Password*</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="inputPassword4" placeholder="Retype Password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-3 col-sm-9">
                                        <label class="custom-control custom-checkbox m-b-0">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-label">Check me out !</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group m-b-0">
                                    <div class="offset-sm-3 col-sm-9">
                                        <button type="submit" class="btn btn-info waves-effect waves-light m-t-10">Sign in</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Page Content -->
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
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <script src="dist/js/pages/jasny-bootstrap.js"></script>
</body>

</html>
