@extends('layouts/contentLayoutMaster')

@section('title', 'Chartjs')

@section('content')
<div class="row">
  <div class="col-12">
      <p>You can easily create reuseable chart components. Read full documnetation <a href="https://www.chartjs.org/docs/latest/getting-started/" target="_blank">here</a></p>
  </div>
</div>
<!-- line chart section start -->
<section id="chartjs-charts">
  <!-- Line Chart -->
  <div class="row">
      <div class="col-md-6">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">Line Chart</h4>
              </div>
              <div class="card-content">
                  <div class="card-body pl-0">
                      <div class="height-300">
                          <canvas id="line-chart"></canvas>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- Bar Chart -->
      <div class="col-md-6">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">Bar Chart</h4>
              </div>
              <div class="card-content">
                  <div class="card-body pl-0">
                      <div class="height-300">
                          <canvas id="bar-chart"></canvas>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="row">
  <!-- Horizontal Chart -->
      <div class="col-md-6">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">Horizontal Bar Chart</h4>
              </div>
              <div class="card-content">
                  <div class="card-body pl-0">
                      <div class="height-300">
                          <canvas id="horizontal-bar"></canvas>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- Pie Chart -->
      <div class="col-md-6">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">Pie Chart</h4>
              </div>
              <div class="card-content">
                  <div class="card-body pl-0">
                      <div class="height-300">
                          <canvas id="simple-pie-chart"></canvas>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="row">
      <!-- Doughnut Chart -->
      <div class="col-md-6">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">Doughnut Chart</h4>
              </div>
              <div class="card-content">
                  <div class="card-body">
                      <div class="height-300">
                          <canvas id="simple-doughnut-chart"></canvas>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- Radar Chart -->
      <div class="col-md-6">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">Radar Chart</h4>
              </div>
              <div class="card-content">
                  <div class="card-body">
                      <div class="height-300">
                          <canvas id="radar-chart"></canvas>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

   <!-- Polar & Radar Chart -->
  <div class="row">
      <!-- Polar Chart -->
      <div class="col-md-6">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">Polar Chart</h4>
              </div>
              <div class="card-content">
                  <div class="card-body">
                      <div class="height-300">
                          <canvas id="polar-chart"></canvas>
                      </div>
                  </div>
              </div>
          </div>
      </div>


      <!-- Bubble Chart -->
      <div class="col-md-6">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">Bubble Chart</h4>
              </div>
              <div class="card-content">
                  <div class="card-body">
                      <div class="height-300">
                          <canvas id="bubble-chart" width="300"></canvas>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- Scatter logX Chart -->
  <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">Scatter Chart</h4>
              </div>
              <div class="card-content">
                  <div class="card-body">
                      <div class="height-300">
                          <canvas id="scatter-chart"></canvas>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- // line chart section end -->
@endsection

@section('vendor-script')
        <!-- vendor files -->
        <script src="{{ asset(mix('vendors/js/charts/chart.min.js')) }}"></script>
@endsection
@section('page-script')
        <!-- Page js files -->
        <script src="{{ asset(mix('js/scripts/charts/chart-chartjs.js')) }}"></script>
@endsection
