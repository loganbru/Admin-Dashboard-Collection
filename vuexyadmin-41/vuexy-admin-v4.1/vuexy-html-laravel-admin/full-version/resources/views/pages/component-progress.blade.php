@extends('layouts/contentLayoutMaster')

@section('title', 'Progress')

@section('content')
{{-- Basic Progress start --}}
<section id="basic-progress">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Basic Progress</h4>
          </div>
          <div class="card-content">
            <div class="card-body text-center">
              <div class="text-center" id="example-caption-1">Reticulating splines&hellip; 0%</div>
              <div class="progress progress-bar-primary">
                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                  aria-describedby="example-caption-1"></div>
              </div>

              <div class="text-center" id="example-caption-2">Reticulating splines&hellip; 25%</div>
              <div class="progress progress-bar-primary">
                <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="25" aria-valuemax="100"
                  style="width:25%" aria-describedby="example-caption-2"></div>
              </div>

              <div class="text-center" id="example-caption-3">Reticulating splines&hellip; 50%</div>
              <div class="progress progress-bar-primary">
                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="50" aria-valuemax="100"
                  style="width:50%" aria-describedby="example-caption-3"></div>
              </div>

              <div class="text-center" id="example-caption-4">Reticulating splines&hellip; 75%</div>
              <div class="progress progress-bar-primary">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="75" aria-valuemax="100"
                  style="width:75%" aria-describedby="example-caption-4"></div>
              </div>

              <div class="text-center" id="example-caption-5">Reticulating splines&hellip; 100%</div>
              <div class="progress progress-bar-primary">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="100" aria-valuemax="100"
                  style="width:100%" aria-describedby="example-caption-5"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Basic Progress end --}}

  {{-- Colored Progress start --}}
  <section id="colored-progress">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Colored Progress</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>Use class <code>.progress-bar-{color-name}</code>. to choose color of your choice</p>
              <div class="progress progress-bar-primary">
                <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="20" aria-valuemax="100"
                  style="width:20%"></div>
              </div>
              <div class="progress progress-bar-success">
                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100"
                  style="width:40%"></div>
              </div>
              <div class="progress progress-bar-danger">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="60" aria-valuemax="100"
                  style="width:60%"></div>
              </div>
              <div class="progress progress-bar-info">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="80" aria-valuemax="100"
                  style="width:80%"></div>
              </div>
              <div class="progress progress-bar-warning">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="100" aria-valuemax="100"
                  style="width:100%"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Colored Progress end --}}

  {{-- Labeled Progress start --}}
  <section id="labeled-progress">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Labeled Progress</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <div class="progress progress-bar-primary progress-lg">
                <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="20" aria-valuemax="100"
                  style="width:20%">20%</div>
              </div>
              <div class="progress progress-bar-success progress-lg">
                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100"
                  style="width:40%">40%</div>
              </div>
              <div class="progress progress-bar-danger progress-lg">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="60" aria-valuemax="100"
                  style="width:60%">60%</div>
              </div>
              <div class="progress progress-bar-info progress-lg">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="80" aria-valuemax="100"
                  style="width:80%">80%</div>
              </div>
              <div class="progress progress-bar-warning progress-lg">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="100" aria-valuemax="100"
                  style="width:100%">100%</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Labeled Progress end --}}

  {{-- Striped Progress start --}}
  <section id="striped-progress">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Striped Progress</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>Uses a gradient to create a striped effect, add <code>.progress-bar-striped</code> with <code>.progress-bar</code> class.</p>
              <div class="progress progress-bar-primary progress-lg">
                <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="20"
                  aria-valuemax="100" style="width:20%"></div>
              </div>
              <div class="progress progress-bar-success progress-lg">
                <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="40"
                  aria-valuemax="100" style="width:40%"></div>
              </div>
              <div class="progress progress-bar-danger progress-lg">
                <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="60"
                  aria-valuemax="100" style="width:60%"></div>
              </div>
              <div class="progress progress-bar-info progress-lg">
                <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="80"
                  aria-valuemax="100" style="width:80%"></div>
              </div>
              <div class="progress progress-bar-warning progress-lg">
                <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="100"
                  aria-valuemax="100" style="width:100%"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Striped Progress end --}}

  {{-- Animated Progress start --}}
  <section id="animated-progress">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Animated Progress</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>To get progressbar with animated effect, add <code>.progress-bar-animated</code> with <code>.progress-bar</code> class.</p>
              <div class="progress progress-bar-primary progress-lg">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="20"
                  aria-valuemin="20" aria-valuemax="100" style="width:20%"></div>
              </div>
              <div class="progress progress-bar-success progress-lg">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="40"
                  aria-valuemin="40" aria-valuemax="100" style="width:40%"></div>
              </div>
              <div class="progress progress-bar-danger progress-lg">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="60"
                  aria-valuemin="60" aria-valuemax="100" style="width:60%"></div>
              </div>
              <div class="progress progress-bar-info progress-lg">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="80"
                  aria-valuemin="80" aria-valuemax="100" style="width:80%"></div>
              </div>
              <div class="progress progress-bar-warning progress-lg">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                  aria-valuenow="100" aria-valuemin="100" aria-valuemax="100" style="width:100%"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Animated Progress end --}}

  {{-- Progress Sizes start --}}
  <section id="progress-sizes">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Progress Sizes</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>For Default progress, No size class needed. you can use class <code>.progress-{sm|md|lg|xl}</code>
                with <code>.progress</code> to change size of your progress bar.
              </p>
              <div class="progress progress-bar-primary progress-xl">
                <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="20"
                  aria-valuemax="100" style="width:20%;"></div>
              </div>
              <div class="progress progress-bar-success progress-lg">
                <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="40"
                  aria-valuemax="100" style="width:40%;"></div>
              </div>
              <div class="progress progress-bar-danger progress-md">
                <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="60"
                  aria-valuemax="100" style="width:60%;"></div>
              </div>
              <div class="progress progress-bar-info progress-sm">
                <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="80"
                  aria-valuemax="100" style="width:80%;"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
{{-- Progress Sizes end --}}
@endsection
