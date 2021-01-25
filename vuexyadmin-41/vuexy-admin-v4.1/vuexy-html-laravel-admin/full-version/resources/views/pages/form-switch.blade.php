
@extends('layouts/contentLayoutMaster')

@section('title', 'Switch')

@section('content')
<!-- Basic Switches Starts -->
<section id="basic-switches">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Basic Switch</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>use class <code>.switch-label</code> to add a label to switch.</p>
            <div class="custom-control custom-switch custom-control-inline">
              <input type="checkbox" class="custom-control-input" id="customSwitch1">
              <label class="custom-control-label" for="customSwitch1">
              </label>
              <span class="switch-label">Toggle this switch element</span>
            </div>
            <div class="custom-control custom-switch custom-control-inline">
              <input type="checkbox" class="custom-control-input" disabled id="customSwitch2">
              <label class="custom-control-label" for="customSwitch2">
              </label>
              <span class="switch-label">Disabled switch element</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic Switches Ends -->

<!-- Switch Colors Starts -->
<section id="switch-colors">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Colors</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>Use class <code>.custom-switch-#{$color-name}</code> with <code>.custom-switch</code> to change switch's
              color</p>
            <div class="d-flex justify-content-start flex-wrap">
              <div class="custom-control custom-switch mr-2 mb-1">
                <p class="mb-0">Primary</p>
                <input type="checkbox" class="custom-control-input" id="customSwitch3">
                <label class="custom-control-label" for="customSwitch3"></label>
              </div>
              <div class="custom-control custom-switch custom-switch-success mr-2 mb-1">
                <p class="mb-0">Success</p>
                <input type="checkbox" class="custom-control-input" id="customSwitch4">
                <label class="custom-control-label" for="customSwitch4"></label>
              </div>
              <div class="custom-control custom-switch custom-switch-danger mr-2 mb-1">
                <p class="mb-0">Danger</p>
                <input type="checkbox" class="custom-control-input" id="customSwitch5">
                <label class="custom-control-label" for="customSwitch5"></label>
              </div>
              <div class="custom-control custom-switch custom-switch-info mr-2 mb-1">
                <p class="mb-0">Info</p>
                <input type="checkbox" class="custom-control-input" id="customSwitch6">
                <label class="custom-control-label" for="customSwitch6"></label>
              </div>
              <div class="custom-control custom-switch custom-switch-warning mr-2 mb-1">
                <p class="mb-0">Warning</p>
                <input type="checkbox" class="custom-control-input" id="customSwitch7">
                <label class="custom-control-label" for="customSwitch7"></label>
              </div>
              <div class="custom-control custom-switch custom-switch-dark mb-1">
                <p class="mb-0">Dark</p>
                <input type="checkbox" class="custom-control-input" id="customSwitch8">
                <label class="custom-control-label" for="customSwitch8"></label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Switch Colors Ends -->

<!-- Switch Text Starts -->
<section id="switch-text">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Text</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>Use class <code>.switch-text-left & .switch-text-right</code> inside of
              <code>.custom-control-label</code> to create a switch with text.
            </p>
            <div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" id="customSwitch9">
              <label class="custom-control-label" for="customSwitch9">
                <span class="switch-text-left">On</span>
                <span class="switch-text-right">Off</span>
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Switch Text Ends -->

<!-- Switch Icons Starts -->
<section id="switch-icons">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Icons</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>Use class <code>.switch-icon-left & .switch-icon-right</code> inside of
              <code>.custom-control-label</code> to create a switch with icon.
            </p>
            <div class="d-flex justify-content-start flex-wrap">
              <div class="custom-control custom-switch mr-2 mb-1">
                <p class="mb-0">Primary</p>
                <input type="checkbox" class="custom-control-input" id="customSwitch10">
                <label class="custom-control-label" for="customSwitch10">
                  <span class="switch-icon-left"><i class="feather icon-check"></i></span>
                  <span class="switch-icon-right"><i class="feather icon-bell"></i></span>
                </label>
              </div>
              <div class="custom-control custom-switch custom-switch-success mr-2 mb-1">
                <p class="mb-0">Success</p>
                <input type="checkbox" class="custom-control-input" id="customSwitch11">
                <label class="custom-control-label" for="customSwitch11">
                  <span class="switch-icon-left"><i class="feather icon-check"></i></span>
                  <span class="switch-icon-right"><i class="feather icon-check"></i></span>
                </label>
              </div>
              <div class="custom-control custom-switch custom-switch-danger mr-2 mb-1">
                <p class="mb-0">Danger</p>
                <input type="checkbox" class="custom-control-input" id="customSwitch12">
                <label class="custom-control-label" for="customSwitch12">
                  <span class="switch-icon-left"><i class="feather icon-x"></i></span>
                  <span class="switch-icon-right"><i class="feather icon-x"></i></span>
                </label>
              </div>
              <div class="custom-control custom-switch custom-switch-info mr-2 mb-1">
                <p class="mb-0">Info</p>
                <input type="checkbox" class="custom-control-input" id="customSwitch13">
                <label class="custom-control-label" for="customSwitch13">
                  <span class="switch-icon-left"><i class="feather icon-info"></i></span>
                  <span class="switch-icon-right"><i class="feather icon-info"></i></span>
                </label>
              </div>
              <div class="custom-control custom-switch custom-switch-warning mr-2 mb-1">
                <p class="mb-0">Warning</p>
                <input type="checkbox" class="custom-control-input" id="customSwitch14">
                <label class="custom-control-label" for="customSwitch14">
                  <span class="switch-icon-left"><i class="feather icon-alert-triangle"></i></span>
                  <span class="switch-icon-right"><i class="feather icon-alert-triangle"></i></span>
                </label>
              </div>
              <div class="custom-control custom-switch custom-switch-dark mr-2 mb-1">
                <p class="mb-0">Dark</p>
                <input type="checkbox" class="custom-control-input" id="customSwitch15">
                <label class="custom-control-label" for="customSwitch15">
                  <span class="switch-icon-left"><i class="feather icon-volume-x"></i></span>
                  <span class="switch-icon-right"><i class="feather icon-volume-x"></i></span>
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Switch Icons Ends -->

<!-- Switch Sizes Starts -->
<section id="switch-sizes">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">
            Sizes
          </h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>use class <code>.switch-{md | lg}</code> with <code>.custom-switch</code> for medium or large size</p>
            <div class="d-flex justify-content-start flex-wrap">
              <div class="custom-control custom-switch mr-2 mb-1">
                <p class="mb-0">Default</p>
                <input type="checkbox" class="custom-control-input" id="customSwitch80">
                <label class="custom-control-label" for="customSwitch80">
                  <span class="switch-text-left">On</span>
                  <span class="switch-text-right">Off</span>
                </label>
              </div>
              <div class="custom-control custom-switch custom-switch-danger switch-md mr-2 mb-1">
                <p class="mb-0">Medium</p>
                <input type="checkbox" class="custom-control-input" id="customSwitch90">
                <label class="custom-control-label" for="customSwitch90">
                  <span class="switch-text-left">True</span>
                  <span class="switch-text-right">False</span>
                </label>
              </div>
              <div class="custom-control custom-switch switch-lg custom-switch-success mr-2 mb-1">
                <p class="mb-0">Large</p>
                <input type="checkbox" class="custom-control-input" id="customSwitch100">
                <label class="custom-control-label" for="customSwitch100">
                  <span class="switch-text-left">Agree</span>
                  <span class="switch-text-right">Disagree</span>
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Switch Sizes Ends -->
@endsection
