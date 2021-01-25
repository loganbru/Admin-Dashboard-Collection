@extends('layouts/contentLayoutMaster')

@section('title', 'Spinner')

@section('content')
{{-- Start Of Bootstrap Spinners --}}
<section id="bootstrap-spinners">
    <div class="row match-height">
      <div class="col-md-6 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Border Spinners</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>Use class <code>.border-spinners</code> for a lightweight loading indicator.</p>
              <div class="spinner-border" role="status">
                <span class="sr-only">Loading...</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Colored Spinners</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>You can customize the color with text color utilities. You can use any of our text color
                utilities on the standard spinner. Use <code>.text-{color}</code></p>
              <div class="spinner-border text-primary" role="status">
                <span class="sr-only">Loading...</span>
              </div>
              <div class="spinner-border text-secondary" role="status">
                <span class="sr-only">Loading...</span>
              </div>
              <div class="spinner-border text-success" role="status">
                <span class="sr-only">Loading...</span>
              </div>
              <div class="spinner-border text-danger" role="status">
                <span class="sr-only">Loading...</span>
              </div>
              <div class="spinner-border text-warning" role="status">
                <span class="sr-only">Loading...</span>
              </div>
              <div class="spinner-border text-info" role="status">
                <span class="sr-only">Loading...</span>
              </div>
              <div class="spinner-border text-light" role="status">
                <span class="sr-only">Loading...</span>
              </div>
              <div class="spinner-border text-dark" role="status">
                <span class="sr-only">Loading...</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row match-height">
      <div class="col-md-6 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Growing Spinner</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>Use class <code>.spinner-grow</code> for a growing spinner.</p>
              <div class="spinner-grow" role="status">
                <span class="sr-only">Loading...</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Colored Growing Spinners</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>You can customize the color with text color utilities. You can use any of our text color
                utilities on the standard spinner. Use <code>.text-{color}</code></p>
              <div class="spinner-grow text-primary" role="status">
                <span class="sr-only">Loading...</span>
              </div>
              <div class="spinner-grow text-secondary" role="status">
                <span class="sr-only">Loading...</span>
              </div>
              <div class="spinner-grow text-success" role="status">
                <span class="sr-only">Loading...</span>
              </div>
              <div class="spinner-grow text-danger" role="status">
                <span class="sr-only">Loading...</span>
              </div>
              <div class="spinner-grow text-warning" role="status">
                <span class="sr-only">Loading...</span>
              </div>
              <div class="spinner-grow text-info" role="status">
                <span class="sr-only">Loading...</span>
              </div>
              <div class="spinner-grow text-light" role="status">
                <span class="sr-only">Loading...</span>
              </div>
              <div class="spinner-grow text-dark" role="status">
                <span class="sr-only">Loading...</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row match-height">
      <div class="col-md-6 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Flex</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>Use Flexbox utilities to place spinners.Use <code>.d-flex</code> and
                <code>.align-items-{side}</code></p>
              <div class="d-flex align-items-center">
                <strong>Loading...</strong>
                <div class="spinner-border ml-auto" role="status" aria-hidden="true"></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Float</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>You can also use Float to place your spinner <code>.float-{side}</code></p>
              <div class="clearfix">
                <div class="spinner-border float-right" role="status">
                  <span class="sr-only">Loading...</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row match-height">
      <div class="col-md-6 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Text Alignment</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>You can also use <code>.text-{side}</code> for your spinner's placement</p>
              <div class="text-center">
                <div class="spinner-border" role="status">
                  <span class="sr-only">Loading...</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Sizes</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>Use <code>.spinner-border-{sm/lg} </code> and <code>.spinner-grow-{sm/lg}</code> for Small or
                Large spinner</p>
              <div class="spinner-border spinner-border-sm" role="status">
                <span class="sr-only">Loading...</span>
              </div>
              <div class="spinner-grow spinner-grow-sm mr-3" role="status">
                <span class="sr-only">Loading...</span>
              </div>

              <div class="spinner-border" role="status">
                <span class="sr-only">Loading...</span>
              </div>
              <div class="spinner-grow mr-3" role="status">
                <span class="sr-only">Loading...</span>
              </div>

              <div class="spinner-border" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
              </div>
              <div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row match-height">
      <div class="col-md-6 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Buttons</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>Use <code>.spinner-border</code> or <code>.spinner-grow</code> inside buttons to indicate an
                action is currently processing or taking place</p>
              <button class="btn btn-primary mb-1" type="button" disabled>
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                <span class="sr-only">Loading...</span>
              </button>
              <button class="btn btn-primary mb-1" type="button" disabled>
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                Loading...
              </button>

              <button class="btn btn-primary mb-1" type="button" disabled>
                <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                <span class="sr-only">Loading...</span>
              </button>
              <button class="btn btn-primary mb-1" type="button" disabled>
                <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                Loading...
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
{{-- End Of Bootstrap Spinners --}}
@endsection
