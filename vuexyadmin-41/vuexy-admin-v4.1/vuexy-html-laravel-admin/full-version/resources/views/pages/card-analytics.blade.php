@extends('layouts/contentLayoutMaster')

@section('title', 'Analytics Card')

@section('vendor-style')
        {{-- Vendor Css files --}}
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/charts/apexcharts.css')) }}">
@endsection
@section('page-style')
        {{-- Page Css files --}}
        <link rel="stylesheet" href="{{ asset(mix('css/pages/card-analytics.css')) }}">
@endsection
@section('content')
<!-- Analytics card section start -->
<section id="analytics-card">
    <div class="row">
        <div class="col-lg-4 col-12">
          <div class="card">
            <div class="card-header d-flex justify-content-between align-items-end">
                <h4>Sessions By Device</h4>
                <div class="dropdown chart-dropdown">
                    <button class="btn btn-sm border-0 dropdown-toggle px-50" type="button" id="dropdownItem1"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Last 7 Days
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem1">
                      <a class="dropdown-item" href="#">Last 28 Days</a>
                      <a class="dropdown-item" href="#">Last Month</a>
                      <a class="dropdown-item" href="#">Last Year</a>
                    </div>
                </div>
            </div>
            <div class="card-content">
                <div class="card-body pt-50">
                    <div id="session-chart" class="mb-1"></div>
                    <div class="chart-info d-flex justify-content-between mb-1">
                        <div class="series-info d-flex align-items-center">
                            <i class="feather icon-monitor font-medium-2 text-primary"></i>
                            <span class="text-bold-600 mx-50">Desktop</span>
                            <span> -  58.6%</span>
                        </div>
                        <div class="series-result">
                            <span>2%</span>
                            <i class="feather icon-arrow-up text-success"></i>
                        </div>
                    </div>
                    <div class="chart-info d-flex justify-content-between mb-1">
                        <div class="series-info d-flex align-items-center">
                            <i class="feather icon-tablet font-medium-2 text-warning"></i>
                            <span class="text-bold-600 mx-50">Mobile</span>
                            <span> -  34.9%</span>
                        </div>
                        <div class="series-result">
                            <span>8%</span>
                            <i class="feather icon-arrow-up text-success"></i>
                        </div>
                    </div>
                    <div class="chart-info d-flex justify-content-between mb-50">
                        <div class="series-info d-flex align-items-center">
                            <i class="feather icon-tablet font-medium-2 text-danger"></i>
                            <span class="text-bold-600 mx-50">Tablet</span>
                            <span> -  6.5%</span>
                        </div>
                        <div class="series-result">
                            <span>-5%</span>
                            <i class="feather icon-arrow-down text-danger"></i>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="card-title">Product Orders</h4>
                    <div class="dropdown chart-dropdown">
                        <button class="btn btn-sm border-0 dropdown-toggle px-50" type="button" id="dropdownItem2"
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Last 7 Days
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem2">
                          <a class="dropdown-item" href="#">Last 28 Days</a>
                          <a class="dropdown-item" href="#">Last Month</a>
                          <a class="dropdown-item" href="#">Last Year</a>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body pt-50">
                        <div id="product-order-chart" class="mb-2"></div>
                        <div class="chart-info d-flex justify-content-between mb-1">
                            <div class="series-info d-flex align-items-center">
                                <i class="fa fa-circle-o text-bold-700 text-primary"></i>
                                <span class="text-bold-600 ml-50">Finished</span>
                            </div>
                            <div class="product-result">
                                <span>23043</span>
                            </div>
                        </div>
                        <div class="chart-info d-flex justify-content-between mb-1">
                            <div class="series-info d-flex align-items-center">
                                <i class="fa fa-circle-o text-bold-700 text-warning"></i>
                                <span class="text-bold-600 ml-50">Pending</span>
                            </div>
                            <div class="product-result">
                                <span>14658</span>
                            </div>
                        </div>
                        <div class="chart-info d-flex justify-content-between mb-25">
                            <div class="series-info d-flex align-items-center">
                                <i class="fa fa-circle-o text-bold-700 text-danger"></i>
                                <span class="text-bold-600 ml-50">Rejected</span>
                            </div>
                            <div class="product-result">
                                <span>4758</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-end">
                    <h4 class="card-title">Customers</h4>
                    <div class="dropdown chart-dropdown">
                        <button class="btn btn-sm border-0 dropdown-toggle px-50" type="button" id="dropdownItem3"
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Last 7 Days
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem3">
                          <a class="dropdown-item" href="#">Last 28 Days</a>
                          <a class="dropdown-item" href="#">Last Month</a>
                          <a class="dropdown-item" href="#">Last Year</a>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body py-0">
                        <div id="customer-chart"></div>
                    </div>
                    <ul class="list-group list-group-flush customer-info">
                        <li class="list-group-item d-flex justify-content-between">
                            <div class="series-info">
                                <i class="fa fa-circle font-small-3 text-primary"></i>
                                <span class="text-bold-600">New</span>
                            </div>
                            <div class="product-result">
                                <span>890</span>
                            </div>
                        </li><li class="list-group-item d-flex justify-content-between ">
                            <div class="series-info">
                                <i class="fa fa-circle font-small-3 text-warning"></i>
                                <span class="text-bold-600">Returning</span>
                            </div>
                            <div class="product-result">
                                <span>258</span>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between ">
                            <div class="series-info">
                                <i class="fa fa-circle font-small-3 text-danger"></i>
                                <span class="text-bold-600">Referrals</span>
                            </div>
                            <div class="product-result">
                                <span>149</span>
                            </div>
                        </li>
                      </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-12">
          <div class="card">
            <div class="card-header d-flex justify-content-between align-items-start">
              <div>
                <h4 class="card-title">Sales</h4>
                <p class="text-muted mb-0">Last 6 months</p>
              </div>
                <p class="mb-0"><i class="feather icon-more-vertical font-medium-3 text-muted cursor-pointer"></i></p>
            </div>
            <div class="card-content">
                <div class="card-body pb-0">
                    <div class="series-info d-inline-block mr-2">
                        <i class="fa fa-circle font-small-3 text-primary mr-25"></i>
                        <span>Sales</span>
                    </div>
                    <div class="series-info d-inline-block">
                        <i class="fa fa-circle font-small-3 text-info mr-25"></i>
                        <span>Visits</span>
                    </div>
                    <div id="sales-chart" class="mt-3"></div>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-12">
        <div class="card">
          <div class="card-header d-flex justify-content-between pb-0">
              <h4 class="card-title">Support Tracker</h4>
              <div class="dropdown chart-dropdown">
                  <button class="btn btn-sm border-0 dropdown-toggle p-50" type="button" id="dropdownItem4"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Last 7 Days
                  </button>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem4">
                    <a class="dropdown-item" href="#">Last 28 Days</a>
                    <a class="dropdown-item" href="#">Last Month</a>
                    <a class="dropdown-item" href="#">Last Year</a>
                  </div>
              </div>
          </div>
          <div class="card-content">
              <div class="card-body pt-0">
                 <div class="row">
                      <div class="col-sm-2 col-12 d-flex flex-column flex-wrap text-center">
                          <h1 class="font-large-2 text-bold-700 mt-2 mb-0">163</h1>
                          <small>Tickets</small>
                      </div>
                      <div class="col-sm-10 col-12 d-flex justify-content-center">
                          <div id="support-tracker-chart"></div>
                      </div>
                  </div>
                  <div class="chart-info d-flex justify-content-between">
                      <div class="text-center">
                          <p class="mb-50">New Tickets</p>
                          <span class="font-large-1">29</span>
                      </div>
                      <div class="text-center">
                          <p class="mb-50">Open Tickets</p>
                          <span class="font-large-1">63</span>
                      </div>
                      <div class="text-center">
                          <p class="mb-50">Response Time</p>
                          <span class="font-large-1">1d</span>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
        <div class="col-lg-8 col-md-6 col-12">
          <div class="card">
              <div class="card-header d-flex justify-content-between align-items-end">
                  <h4 class="card-title">Revenue</h4>
                  <p class="font-medium-5 mb-0"><i class="feather icon-settings text-muted cursor-pointer"></i></p>
              </div>
              <div class="card-content">
                  <div class="card-body pb-0">
                      <div class="d-flex justify-content-start">
                          <div class="mr-2">
                              <p class="mb-50 text-bold-600">This Month</p>
                              <h2 class="text-bold-400">
                                  <sup class="font-medium-1">$</sup>
                                  <span class="text-success">86,589</span>
                              </h2>
                          </div>
                          <div>
                              <p class="mb-50 text-bold-600">Last Month</p>
                              <h2 class="text-bold-400">
                                  <sup class="font-medium-1">$</sup>
                                  <span>73,683</span>
                              </h2>
                          </div>

                      </div>
                      <div id="revenue-chart"></div>
                  </div>
              </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <div class="card">
              <div class="card-header d-flex justify-content-between align-items-end">
                  <h4 class="mb-0">Goal Overview</h4>
                  <p class="font-medium-5 mb-0"><i class="feather icon-help-circle text-muted cursor-pointer"></i></p>
              </div>
              <div class="card-content">
                  <div class="card-body px-0 pb-0">
                      <div id="goal-overview-chart" class="mt-75"></div>
                      <div class="row text-center mx-0">
                          <div class="col-6 border-top border-right d-flex align-items-between flex-column py-1">
                              <p class="mb-50">Completed</p>
                              <p class="font-large-1 text-bold-700 mb-50">786,617</p>
                          </div>
                          <div class="col-6 border-top d-flex align-items-between flex-column py-1">
                              <p class="mb-50">In Progress</p>
                              <p class="font-large-1 text-bold-700 mb-50">13,561</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
    <div class="row">
        <div class="col-md-6">
        <div class="card">
          <div class="card-content">
              <div class="card-body">
                  <div class="row pb-50">
                      <div class="col-lg-6 col-12 d-flex justify-content-between flex-column order-lg-1 order-2">
                          <div>
                              <h2 class="text-bold-700 mb-25">2.7K</h2>
                              <p class="text-bold-500 mb-75">Avg Sessions</p>
                              <h5 class="font-medium-2">
                                  <span class="text-success">+5.2% </span>
                                  <span>vs last 7 days</span>
                              </h5>
                          </div>
                          <a href="#" class="btn btn-primary shadow">View Details <i class="feather icon-chevrons-right"></i></a>
                      </div>
                      <div class="col-lg-6 col-12 d-flex justify-content-between flex-column text-right order-lg-2 order-1">
                          <div class="dropdown chart-dropdown">
                              <button class="btn btn-sm border-0 dropdown-toggle p-50" type="button" id="dropdownItem5"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Last 7 Days
                              </button>
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem5">
                                <a class="dropdown-item" href="#">Last 28 Days</a>
                                <a class="dropdown-item" href="#">Last Month</a>
                                <a class="dropdown-item" href="#">Last Year</a>
                              </div>
                          </div>
                          <div id="avg-session-chart"></div>
                      </div>
                  </div>
                  <hr/>
                  <div class="row avg-sessions pt-50">
                      <div class="col-6">
                          <small>Goal: $100000</small>
                          <div class="progress progress-bar-primary mt-25">
                            <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="50" aria-valuemax="100"
                              style="width:50%"></div>
                          </div>
                      </div>
                      <div class="col-6">
                          <small>Users: 100K</small>
                          <div class="progress progress-bar-warning mt-25">
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="60" aria-valuemax="100"
                              style="width:60%"></div>
                          </div>
                      </div>
                      <div class="col-6">
                          <small>Retention: 90%</small>
                          <div class="progress progress-bar-danger mt-25">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="70" aria-valuemax="100"
                              style="width:70%"></div>
                          </div>
                      </div>
                      <div class="col-6">
                          <small>Duration: 1yr</small>
                          <div class="progress progress-bar-success mt-25">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="90" aria-valuemax="100"
                              style="width:90%"></div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center border-bottom pb-1">
                    <div>
                        <p class="mb-75"><strong>2 task completed </strong>out of 10</p>
                        <div class="progress progress-bar-primary">
                          <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="20" aria-valuemax="100"
                            style="width:20%"></div>
                        </div>
                    </div>
                    <p>Sat, 16, Feb</p>
                </div>
                <div class="card-content">
                    <div class="list-group analytics-list">
                        <div class="list-group-item d-lg-flex justify-content-between align-items-start py-1">
                            <div class="float-left">
                              <p class="text-bold-600 font-medium-2 mb-0 mt-25">Refactor button component</p>
                              <small>16 Feb 2019 - 2 hrs</small>
                            </div>
                            <div class="float-right">
                                <button type="button" class="btn btn-sm btn-icon rounded-circle btn-outline-primary mr-50">
                                    <i class="feather icon-check"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-icon rounded-circle btn-outline-primary mr-50">
                                    <i class="feather icon-edit-2"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-icon rounded-circle btn-outline-primary">
                                    <i class="feather icon-trash"></i>
                                </button>
                            </div>
                        </div>
                        <div class="list-group-item d-lg-flex justify-content-between align-items-start py-1">
                            <div class="float-left">
                              <p class="text-bold-600 font-medium-2 mb-0 mt-25">Submit report to admin</p>
                              <small>16 Feb 2019 - 2 hrs</small>
                            </div>
                            <div class="float-right">
                                <button type="button" class="btn btn-sm btn-icon rounded-circle btn-outline-primary mr-50">
                                    <i class="feather icon-check"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-icon rounded-circle btn-outline-primary mr-50">
                                    <i class="feather icon-edit-2"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-icon rounded-circle btn-outline-primary">
                                    <i class="feather icon-trash"></i>
                                </button>
                            </div>
                        </div>
                        <div class="list-group-item d-lg-flex justify-content-between align-items-start py-1">
                            <div class="float-left">
                              <p class="text-bold-600 font-medium-2 mb-0 mt-25">Prepare presentation</p>
                              <small>16 Feb 2019 - 2 hrs</small>
                            </div>
                            <div class="float-right">
                                <button type="button" class="btn btn-sm btn-icon rounded-circle btn-outline-primary mr-50">
                                    <i class="feather icon-check"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-icon rounded-circle btn-outline-primary mr-50">
                                    <i class="feather icon-edit-2"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-icon rounded-circle btn-outline-primary">
                                    <i class="feather icon-trash"></i>
                                </button>
                            </div>
                        </div>
                        <div class="list-group-item d-lg-flex justify-content-between align-items-start py-1">
                            <div class="float-left">
                              <p class="text-bold-600 font-medium-2 mb-0 mt-25">Calculate monthly income</p>
                              <small>16 Feb 2019 - 2 hrs</small>
                            </div>
                            <div class="float-right">
                                <button type="button" class="btn btn-sm btn-icon rounded-circle btn-outline-primary mr-50">
                                    <i class="feather icon-check"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-icon rounded-circle btn-outline-primary mr-50">
                                    <i class="feather icon-edit-2"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-icon rounded-circle btn-outline-primary">
                                    <i class="feather icon-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-9 col-md-8 col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="card-title">Sales</h4>
                    <h3><i class="feather icon-settings text-muted cursor-pointer"></i></h3>
                </div>
                <div class="card-content">
                    <div class="card-body pb-0">
                        <div id="sales-line-chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-12">
          <div class="card">
            <div class="card-body d-flex justify-content-between align-items-start flex-column">
                <div>
                    <h1 class="mb-0">
                        <sup class="font-medium-3">$</sup>
                        23,597
                    </h1>
                    <small><span class="text-muted">Deposits: </span>$20,065</small>
                    <h5 class="mt-1">
                        <span class="text-success">+5.2% ($956)</span>
                    </h5>
                </div>
                <button class="btn btn-primary w-100 box-shadow-1 mt-2">Add Funds <i class="feather icon-chevrons-right"></i></button>
            </div>
            <hr class="my-50">
            <div class="card-body d-flex justify-content-around flex-column">
              <div>
                  <small>Earned: $56,156</small>
                  <div class="progress progress-bar-success mt-1">
                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="50" aria-valuemax="100"
                      style="width:50%"></div>
                  </div>
              </div>
              <div>
                  <small>Duration: 2y</small>
                  <div class="progress progress-bar-warning mt-1">
                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="50" aria-valuemax="100"
                      style="width:50%"></div>
                  </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Browser Statistics</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-25">
                      <div class="browser-info">
                        <p class="mb-25">Google Chrome</p>
                        <h4>73%</h4>
                      </div>
                      <div class="stastics-info text-right">
                        <span>800 <i class="feather icon-arrow-up text-success"></i></span>
                        <span class="text-muted d-block">13:16</span>
                      </div>
                    </div>
                    <div class="progress progress-bar-primary mb-2">
                      <div class="progress-bar" role="progressbar" aria-valuenow="73" aria-valuemin="73" aria-valuemax="100" style="width:73%"></div>
                    </div>
                    <div class="d-flex justify-content-between mb-25">
                      <div class="browser-info">
                        <p class="mb-25">Opera</p>
                        <h4>8%</h4>
                      </div>
                      <div class="stastics-info text-right">
                        <span>-200 <i class="feather icon-arrow-down text-danger"></i></span>
                        <span class="text-muted d-block">13:16</span>
                      </div>
                    </div>
                    <div class="progress progress-bar-primary mb-2">
                      <div class="progress-bar" role="progressbar" aria-valuenow="8" aria-valuemin="8" aria-valuemax="100"
                        style="width:8%"></div>
                    </div>
                    <div class="d-flex justify-content-between mb-25">
                      <div class="browser-info">
                        <p class="mb-25">Firefox</p>
                        <h4>19%</h4>
                      </div>
                      <div class="stastics-info text-right">
                        <span>100 <i class="feather icon-arrow-up text-success"></i></span>
                        <span class="text-muted d-block">13:16</span>
                      </div>
                    </div>
                    <div class="progress progress-bar-primary mb-2">
                      <div class="progress-bar" role="progressbar" aria-valuenow="19" aria-valuemin="19" aria-valuemax="100"
                        style="width:19%"></div>
                    </div>
                    <div class="d-flex justify-content-between mb-25">
                      <div class="browser-info">
                        <p class="mb-25">Internet Explorer</p>
                        <h4>27%</h4>
                      </div>
                      <div class="stastics-info text-right">
                        <span>-450 <i class="feather icon-arrow-down text-danger"></i></span>
                        <span class="text-muted d-block">13:16</span>
                      </div>
                    </div>
                    <div class="progress progress-bar-primary mb-50">
                      <div class="progress-bar" role="progressbar" aria-valuenow="27" aria-valuemin="27" aria-valuemax="100"
                        style="width:27%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="col-md-8 col-12">
          <div class="card">
            <div class="card-header">
                <h4 class="card-title">Client Retention</h4>
            </div>
            <div class="card-content">
              <div class="card-body">
                <div id="client-retention-chart">
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</section>
<!-- Analytics Card section end-->
@endsection
@section('vendor-script')
{{-- Vendor js files --}}
        <script src="{{ asset(mix('vendors/js/charts/apexcharts.min.js')) }}"></script>
@endsection
@section('page-script')
{{-- Page js files --}}
        <script src="{{ asset(mix('js/scripts/cards/card-analytics.js')) }}"></script>
@endsection
