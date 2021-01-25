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
    <link href="dist/css/pages/ui-bootstrap-page.css" rel="stylesheet">
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
                        <h4 class="text-themecolor">Bootstrap Ui</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Bootstrap Ui</li>
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
                                <div class="row">
                                    <div class="col-lg-6 m-b-30">
                                        <h4 class="card-title">Badges</h4>
                                        <h6 class="card-subtitle">Use class <code>.badge</code> and for colors <code>badge-success</code> for get desire badge.</h6>
                                        <h1>Example heading <span class="badge badge-default">New</span></h1>
                                        <h2>Example heading <span class="badge badge-success">New</span></h2>
                                        <h3>Example heading <span class="badge badge-info">New</span></h3>
                                        <h4>Example heading <span class="badge badge-primary">New</span></h4>
                                        <h5>Example heading <span class="badge badge-danger">New</span></h5>
                                        <h6>Example heading <span class="badge badge-warning">New</span></h6>
                                    </div>
                                    <div class="col-lg-3 m-b-30">
                                        <h4 class="card-title">Contextual Badge variations</h4>
                                        <h6 class="card-subtitle">Use class <code>.badge</code> and for colors <code>badge-success</code> for get desire badge.</h6>
                                        <span class="badge badge-default">Default</span>
                                        <br/>
                                        <span class="badge badge-primary">Primary</span>
                                        <br/>
                                        <span class="badge badge-success">Success</span>
                                        <br/>
                                        <span class="badge badge-info">Info</span>
                                        <br/>
                                        <span class="badge badge-warning">Warning</span>
                                        <br/>
                                        <span class="badge badge-danger">Danger</span>
                                    </div>
                                    <div class="col-lg-3 m-b-30">
                                        <h4 class="card-title">Pill badges</h4>
                                        <h6 class="card-subtitle">Use class <code>.badge-pill</code> and for colors <code>badge-success</code> for get desire badge.</h6>
                                        <span class="badge badge-pill badge-default">Default</span>
                                        <br/>
                                        <span class="badge badge-pill badge-primary">Primary</span>
                                        <br/>
                                        <span class="badge badge-pill badge-success">Success</span>
                                        <br/>
                                        <span class="badge badge-pill badge-info">Info</span>
                                        <br/>
                                        <span class="badge badge-pill badge-warning">Warning</span>
                                        <br/>
                                        <span class="badge badge-pill badge-danger">Danger</span>
                                    </div>
                                    <div class="col-12">
                                        <br>
                                        <br>
                                        <hr>
                                        <br>
                                        <br>
                                    </div>
                                    <div class="col-lg-5 m-b-30">
                                        <h4 class="card-title">Collapse (Toggle)</h4>
                                        <h6 class="card-subtitle">click below button, for Use a link with the <code>href</code> attribute, with class <code>.collapse</code> get desire toggle.</h6>
                                        <p>
                                            <a class="btn btn-info" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                        Link with href
                                      </a>
                                            <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                                Button with data-target
                                            </button>
                                        </p>
                                        <div class="collapse" id="collapseExample">
                                            <div class="card card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 offset-lg-1">
                                        <h4 class="card-title">Accordion example</h4>
                                        <h6 class="card-subtitle">Extend the default collapse behavior to create an accordion.<code><a href="#code" data-toggle="collapse" class="text-danger">Get HTMl</a></code></h6>
                                        <div class="collapse" id="code">
                                            <div class="card card-body">
                                                <pre>
<code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">id=</span><span class="s">"accordionexample"</span> <span class="na">class=</span><span class="s">"accordion"</span> <span class="na">role=</span><span class="s">"tablist"</span> <span class="na">aria-multiselectable=</span><span class="s">"true"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-header"</span> <span class="na">role=</span><span class="s">"tab"</span> <span class="na">id=</span><span class="s">"headingOne"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;h5</span> <span class="na">class=</span><span class="s">"mb-0"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">data-toggle=</span><span class="s">"collapse"</span> <span class="na">data-parent=</span><span class="s">"#accordionexample"</span> <span class="na">href=</span><span class="s">"#collapseexaOne"</span> <span class="na">aria-expanded=</span><span class="s">"true"</span> <span class="na">aria-controls=</span><span class="s">"collapseexaOne"</span><span class="nt">&gt;</span>
          Collapsible Group Item #1
        <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/h5&gt;</span>
    <span class="nt">&lt;/div&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">id=</span><span class="s">"collapseexaOne"</span> <span class="na">class=</span><span class="s">"collapse show"</span> <span class="na">role=</span><span class="s">"tabpanel"</span> <span class="na">aria-labelledby=</span><span class="s">"headingOne"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-body"</span><span class="nt">&gt;</span>
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-header"</span> <span class="na">role=</span><span class="s">"tab"</span> <span class="na">id=</span><span class="s">"headingTwo"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;h5</span> <span class="na">class=</span><span class="s">"mb-0"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"collapsed"</span> <span class="na">data-toggle=</span><span class="s">"collapse"</span> <span class="na">data-parent=</span><span class="s">"#accordionexample"</span> <span class="na">href=</span><span class="s">"#collapseexaTwo"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span> <span class="na">aria-controls=</span><span class="s">"collapseexaTwo"</span><span class="nt">&gt;</span>
          Collapsible Group Item #2
        <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/h5&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">id=</span><span class="s">"collapseexaTwo"</span> <span class="na">class=</span><span class="s">"collapse"</span> <span class="na">role=</span><span class="s">"tabpanel"</span> <span class="na">aria-labelledby=</span><span class="s">"headingTwo"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-body"</span><span class="nt">&gt;</span>
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-header"</span> <span class="na">role=</span><span class="s">"tab"</span> <span class="na">id=</span><span class="s">"headingThree"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;h5</span> <span class="na">class=</span><span class="s">"mb-0"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"collapsed"</span> <span class="na">data-toggle=</span><span class="s">"collapse"</span> <span class="na">data-parent=</span><span class="s">"#accordionexample"</span> <span class="na">href=</span><span class="s">"#collapseexaThree"</span> <span class="na">aria-expanded=</span><span class="s">"false"</span> <span class="na">aria-controls=</span><span class="s">"collapseexaThree"</span><span class="nt">&gt;</span>
          Collapsible Group Item #3
        <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/h5&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">id=</span><span class="s">"collapseexaThree"</span> <span class="na">class=</span><span class="s">"collapse"</span> <span class="na">role=</span><span class="s">"tabpanel"</span> <span class="na">aria-labelledby=</span><span class="s">"headingThree"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-body"</span><span class="nt">&gt;</span>
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. 
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code>
                                            </pre>
                                            </div>
                                        </div>
                                        <div class="accordion" id="accordionExample1">
                                            <div class="card m-b-0">
                                                <div class="card-header bg-white p-0" id="heading1">
                                                  <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                                      Collapsible Group Item #1
                                                    </button>
                                                  </h5>
                                                </div>

                                                <div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#accordionExample1">
                                                  <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. 
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="card m-b-0">
                                                <div class="card-header bg-white p-0" id="heading2">
                                                  <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                                      Collapsible Group Item #2
                                                    </button>
                                                  </h5>
                                                </div>
                                                <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordionExample1">
                                                  <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="card m-b-0">
                                                <div class="card-header bg-white p-0" id="heading3">
                                                  <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                                      Collapsible Group Item #3
                                                    </button>
                                                  </h5>
                                                </div>
                                                <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionExample1">
                                                  <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <br>
                                        <br>
                                        <hr>
                                        <br>
                                        <br>
                                    </div>
                                    <div class="col-lg-6 m-b-30">
                                        <h4 class="card-title">Label Example</h4>
                                        <h6 class="card-subtitle">Use class <code>.label </code> for get desire text.</h6>
                                        <h1>Example heading <span class="label label-inverse">New</span></h1>
                                        <h2>Example heading <span class="label label-success">New</span></h2>
                                        <h3>Example heading <span class="label label-info">New</span></h3>
                                        <h4>Example heading <span class="label label-primary">New</span></h4>
                                        <h5>Example heading <span class="label label-danger">New</span></h5>
                                        <h6>Example heading <span class="label label-warning">New</span></h6>
                                    </div>
                                    <div class="col-lg-3 m-b-30">
                                        <h4 class="card-title">Contextual Label variations</h4>
                                        <h6 class="card-subtitle">Use class <code>.label</code> and for colors <code>label-success & .label-light-success</code> for get desire label.</h6>
                                        <span class="label label-inverse">Default</span> <span class="label label-light-inverse">Default</span>
                                        <br>
                                        <span class="label label-primary">Primary</span> <span class="label label-light-primary">Primary</span>
                                        <br>
                                        <span class="label label-success">Success</span> <span class="label label-light-success">Success</span>
                                        <br>
                                        <span class="label label-info">Info</span> <span class="label label-light-info">Info</span>
                                        <br>
                                        <span class="label label-warning">Warning</span> <span class="label label-light-warning">Warning</span>
                                        <br>
                                        <span class="label label-danger">Danger</span> <span class="label label-light-danger">Danger</span>
                                    </div>
                                    <div class="col-lg-3 m-b-30">
                                        <h4 class="card-title">Label rounded</h4>
                                        <h6 class="card-subtitle">Use class <code>.label .label-rounded</code> and for colors <code>label-success</code> for get desire label.</h6>
                                        <span class="label label-rounded label-inverse">Default</span>
                                        <br>
                                        <span class="label label-rounded label-primary">Primary</span>
                                        <br>
                                        <span class="label label-rounded label-success">Success</span>
                                        <br>
                                        <span class="label label-rounded label-info">Info</span>
                                        <br>
                                        <span class="label label-rounded label-warning">Warning</span>
                                        <br>
                                        <span class="label label-rounded label-danger">Danger</span>
                                    </div>
                                    <div class="col-12">
                                        <br>
                                        <br>
                                        <hr>
                                        <br>
                                        <br>
                                    </div>
                                    <div class="col-lg-4 m-b-30">
                                        <h4 class="card-title">Simple pagination</h4>
                                        <h6 class="card-subtitle">To make pagination give class <code>pagination</code> to ul</h6>
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination">
                                                <li class="page-item"><a class="page-link" href="javascript:void(0)">Previous</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0)">Next</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="col-lg-4 m-b-30">
                                        <h4 class="card-title">Working with icons</h4>
                                        <h6 class="card-subtitle">To make pagination give class <code>pagination</code> to ul</h6>
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination">
                                                <li class="page-item">
                                                    <a class="page-link" href="javascript:void(0)"aria-label="Previous">
                                                        <span aria-hidden="true">&laquo;</span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="javascript:void(0)"aria-label="Next">
                                                        <span aria-hidden="true">&raquo;</span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="col-lg-4 m-b-30">
                                        <h4 class="card-title">Disabled and active states</h4>
                                        <h6 class="card-subtitle">To make pagination active or disable give class <code>.disabled & .active</code> to ul</h6>
                                        <nav aria-label="...">
                                            <ul class="pagination">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="javascript:void(0)"tabindex="-1">Previous</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                                <li class="page-item active">
                                                    <a class="page-link" href="javascript:void(0)">2 <span class="sr-only">(current)</span></a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="javascript:void(0)">Next</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="col-12">
                                        <br>
                                        <br>
                                        <hr>
                                        <br>
                                        <br>
                                    </div>
                                    <div class="col-lg-4 m-b-30">
                                        <h4 class="card-title">Sizing</h4>
                                        <h6 class="card-subtitle">Fancy larger or smaller pagination? Add<code>.pagination-lg </code> for additional sizes.</h6>
                                        <nav aria-label="...">
                                            <ul class="pagination pagination-lg">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="javascript:void(0)"tabindex="-1">Previous</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="javascript:void(0)">Next</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="col-lg-4 m-b-30">
                                        <h4 class="card-title">Sizing</h4>
                                        <h6 class="card-subtitle">Fancy larger or smaller pagination? Add<code>.pagination-sm </code> for additional sizes.</h6>
                                        <nav aria-label="...">
                                            <ul class="pagination pagination-sm">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="javascript:void(0)"tabindex="-1">Previous</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="javascript:void(0)">Next</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="col-lg-4 m-b-30">
                                        <h4 class="card-title">Alignment</h4>
                                        <h6 class="card-subtitle">Change the alignment of pagination components with felxbox <code>justify-content-center, justify-content-end, </code></h6>
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination justify-content-center">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="javascript:void(0)"tabindex="-1">Previous</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="javascript:void(0)">Next</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="col-12">
                                        <br>
                                        <br>
                                        <hr>
                                        <br>
                                        <br>
                                    </div>
                                    <div class="col-lg-4 m-b-30">
                                        <h4 class="card-title">Image with round corner</h4>
                                        <h6 class="card-subtitle"><code>.img-rounded</code></h6>
                                        <img src="../assets/images/big/img1.jpg" alt="image" class="img-responsive img-rounded" width="200">
                                        <p class="m-t-15 m-b-0">
                                    </div>
                                    <div class="col-lg-4 text-center m-b-30">
                                        <h4 class="card-title">Image with circle</h4>
                                        <h6 class="card-subtitle"><code>.img-circle</code> Make sure the image is square not ractangle</h6>
                                        <img src="../assets/images/users/5.jpg" alt="image" class="img-circle" width="290">
                                        <p class="m-t-15 m-b-0">
                                    </div>
                                    <div class="col-lg-4">
                                        <h4 class="card-title">Image with Thumbnail</h4>
                                        <h6 class="card-subtitle"><code>img-thumbnail</code></h6>
                                        <img src="../assets/images/big/img5.jpg" alt="image" class="img-responsive img-thumbnail" width="200">
                                        <p class="m-t-15 m-b-0">
                                    </div>
                                    <div class="col-12">
                                        <br>
                                        <br>
                                        <hr>
                                        <br>
                                        <br>
                                    </div>
                                    <div class="col-lg-6">
                                        <h4 class="card-title">jumbotron</h4>
                                        <h6 class="card-subtitle">A lightweight, flexible component that can optionally extend the entire viewport to showcase key marketing messages on your site.</h6>
                                        <div class="jumbotron">
                                            <h1 class="display-3">Hello, world!</h1>
                                            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                                            <hr class="my-4">
                                            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                                            <p class="lead">
                                                <a class="btn btn-primary btn-lg" href="javascript:void(0)"role="button">Learn more</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <h4 class="card-title">Fluid jumbotron</h4>
                                        <h6 class="card-subtitle">To make the jumbotron full width, and without rounded corners, add the <code>jumbotron-fluid</code></h6>
                                        <div class="jumbotron jumbotron-fluid">
                                            <div class="container">
                                                <h1 class="display-3">Fluid jumbotron</h1>
                                                <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
                                            </div>
                                        </div>
                                    </div>
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
</body>

</html>