@extends('layouts/contentLayoutMaster')

@section('title', 'Echarts')

@section('content')
<div class="row">
  <div class="col-12">
      <p>ECharts component for visualization library for browser. Read full documnetation <a href="https://github.com/apache/incubator-echarts" target="_blank">here</a></p>
  </div>
</div>
<!-- Bar Chart -->
<div class="row">
  <div class="col-12">
      <div class="card">
          <div class="card-header">
              <h4 class="card-title">Bar Chart</h4>
          </div>
          <div class="card-content">
              <div class="card-body">
                  <div id="bar-chart" class="height-400"></div>
              </div>
          </div>
      </div>
  </div>
</div>

<!-- Line Chart -->
<div class="row">
  <div class="col-12">
      <div class="card">
          <div class="card-header">
              <h4 class="card-title">Line Chart</h4>
          </div>
          <div class="card-content">
              <div class="card-body">
                  <div id="line-chart" class="height-400"></div>
              </div>
          </div>
      </div>
  </div>
</div>

<!-- Pie Chart -->
<div class="row">
  <div class="col-12">
      <div class="card">
          <div class="card-header">
              <h4 class="card-title">Pie Chart</h4>
          </div>
          <div class="card-content">
              <div class="card-body">
                  <div id="pie-chart" class="height-400"></div>
              </div>
          </div>
      </div>
  </div>
</div>

<!-- Scatter Chart -->
<div class="row">
  <div class="col-12">
      <div class="card">
          <div class="card-header">
              <h4 class="card-title">Scatter Chart</h4>
          </div>
          <div class="card-content">
              <div class="card-body">
                  <div id="scatter-chart" class="height-400"></div>
              </div>
          </div>
      </div>
  </div>
</div>

<div class="row">
  <!-- Polar Chart -->
  <div class="col-md-6">
      <div class="card">
          <div class="card-header">
              <h4 class="card-title">Polar Chart</h4>
          </div>
          <div class="card-content">
              <div class="card-body">
                  <div id="polar-chart" class="height-400"></div>
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
                  <div id="radar-chart" class="height-400"></div>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection

@section('vendor-script')
        <!-- vendor files -->
        <script src="{{ asset(mix('vendors/js/charts/echarts/echarts.min.js')) }}"></script>
@endsection
@section('page-script')
        <!-- Page js files -->
        <script src="{{ asset(mix('js/scripts/charts/chart-echart.js')) }}"></script>
@endsection
