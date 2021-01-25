@extends('layouts/contentLayoutMaster')

@section('title', 'Pill Badges')

@section('content')
{{-- Basic Pill Badges start--}}
<section id="basic-pill-badges">
    <div class="row match-height">
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title text-center">Secondary Pill Badges</h4>
          </div>
          <div class="card-content">
            <div class="card-body text-center">
              <p>Use the <code>.badge</code> class, followed by<code>.badge-pill</code> with
                <code>.badge-secondary</code>class within element to create default pill badge.</p>
              <div class="badge badge-pill badge-secondary">Secondary</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title text-center">Primary Pill Badges</h4>
          </div>
          <div class="card-content">
            <div class="card-body text-center">
              <p>Use the <code>.badge</code> class, followed by<code>.badge-pill</code> with
                <code>.badge-primary</code>class within element to create primary pill badge.</p>
              <div class="badge badge-pill badge-primary">Primary</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title text-center">Success Pill Badges</h4>
          </div>
          <div class="card-content">
            <div class="card-body text-center">
              <p>Use the <code>.badge</code> class, followed by<code>.badge-pill</code> with
                <code>.badge-success</code>class within element to create success pill badge.</p>
              <div class="badge badge-pill badge-success">Success</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title text-center">Danger Pill Badges</h4>
          </div>
          <div class="card-content">
            <div class="card-body text-center">
              <p>Use the <code>.badge</code> class, followed by <code>.badge-pill</code> with
                <code>.badge-danger</code>class within element to create danger pill badge.</p>
              <div class="badge badge-pill badge-danger">Danger</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title text-center">Info Pill Badges</h4>
          </div>
          <div class="card-content">
            <div class="card-body text-center">
              <p>Use the <code>.badge</code> class, followed by <code>.badge-pill</code> with
                <code>.badge-info</code>class within element to create info pill badge.</p>
              <div class="badge badge-pill badge-info">Info</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title text-center">Warning Pill Badges</h4>
          </div>
          <div class="card-content">
            <div class="card-body text-center">
              <p>Use the <code>.badge</code> class, followed by <code>.badge-pill</code> with
                <code>.badge-warning</code>class within element to create warning pill badge.</p>
              <div class="badge badge-pill badge-warning">Warning</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Basic Pill Badges end --}}

  {{-- Badge Pill Glow Starts --}}
  <section id="badge-pill-glow">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Glow Badges</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>
                Use class <code>.badge-glow</code> to add glow effect to your badge
              </p>
              <div class="badge badge-pill badge-glow badge-primary mr-1 mb-1">Primary</div>
              <div class="badge badge-pill badge-glow badge-success mr-1 mb-1">Success</div>
              <div class="badge badge-pill badge-glow badge-danger mr-1 mb-1">Danger</div>
              <div class="badge badge-pill badge-glow badge-info mr-1 mb-1">Info</div>
              <div class="badge badge-pill badge-glow badge-warning mr-1 mb-1">Warning</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Badge Pill Glow Ends --}}

  {{-- Badge Pill With Icons Starts --}}
  <section id="badge-pill-icons">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Badge Pills With Icons</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <div class="badge badge-pill badge-primary mr-1 mb-1">
                <i class="feather icon-facebook"></i>
              </div>
              <div class="badge badge-pill badge-success mr-1 mb-1">
                <i class="feather icon-instagram"></i>
              </div>
              <div class="badge badge-pill badge-danger mr-1 mb-1">
                <i class="feather icon-github"></i>
              </div>
              <div class="badge badge-pill badge-info mr-1 mb-1">
                <i class="feather icon-twitter"></i>
              </div>
              <div class="badge badge-pill badge-warning mr-1 mb-1">
                <i class="feather icon-sun"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Badge Pill With Icons Ends --}}

  {{-- Pill Badges as Notification start--}}
  <section id="pill-badges-as-notification">
    <div class="row">
      <div class="col-12 mt-3 mb-1">
        <h4 class="text-uppercase">Pill Badges as Notification</h4>
        <p>Use <code>.badge-up</code> to set pill badge to higher than other text. So that it can work with notifications
          also.</p>
      </div>
    </div>
    <div class="row match-height">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title text-center">Icon Pill with Color Variations</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <div class="position-relative d-inline-block mr-2">
                <i class="feather icon-facebook font-medium-5 text-primary"></i>
                <span class="badge badge-pill badge-primary badge-up">4</span>
              </div>
              <div class="position-relative d-inline-block mr-2">
                <i class="feather icon-twitter font-medium-5 text-info"></i>
                <span class="badge badge-pill badge-info badge-up">5</span>
              </div>
              <div class="position-relative d-inline-block">
                <i class="feather icon-instagram font-medium-5 text-danger"></i>
                <span class="badge badge-pill badge-danger badge-glow badge-up">6</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Pill Badges as Notification end --}}


  {{-- Badge Pill Options Starts --}}
  <section id="badge-pill-options">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Badge Pill Link</h4>
          </div>
          <div class="card-content">
            <div class="card-body text-center">
              <p>Use class <code>.badge.badge-pill</code> with <code>&lt;a&gt;</code> tag to make your badge a link</p>
              <a class="badge badge-pill badge-primary" href="https://pixinvent.com" target="_blank">Primary</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Badge Pill Dropup</h4>
          </div>
          <div class="card-content">
            <div class="card-body text-center">
              <p>wrap your <code>.badge</code> with <code>.dropup</code> to make your badge a dropup</p>
              <div class="btn-group dropup">
                <div class="badge badge-pill dropdown-toggle badge-success" data-toggle="dropdown">
                  <i class="feather icon-flag"></i>
                </div>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Separated link</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Block Badge Pill</h4>
          </div>
          <div class="card-content">
            <div class="card-body text-center">
              <p>use <code>.block</code> with <code>.badge-pill</code> to display your badge as block level element</p>
              <div class="badge badge-pill block badge-danger">
                <span>Block Badge Pill</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Badge Pill Options Ends --}}


  {{-- Badge Pill Sizes Starts --}}
  <section id="badge-pill-sizes">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Badge Pill Sizes</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>Use classes <code>badge-{xl|lg|md|sm}</code> to change size of a badge</p>
              <div class="badge badge-pill badge-primary badge-xl mr-1 mb-1">Extra Large</div>
              <div class="badge badge-pill badge-primary badge-lg mr-1 mb-1">Large</div>
              <div class="badge badge-pill badge-primary badge-md mr-1 mb-1">Medium</div>
              <div class="badge badge-pill badge-primary badge-sm mr-1 mb-1">Small</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
{{-- Badge Pill Sizes Ends --}}
@endsection
