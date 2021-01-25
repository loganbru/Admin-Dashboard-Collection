
@extends('layouts/contentLayoutMaster')

@section('title', 'Input Groups')

@section('content')
<!-- Basic Inputs Groups start -->
<section id="basic-input-groups">
  <div class="row">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">Basic Input Groups</h4>
              </div>
              <div class="card-content">
                  <div class="card-body">
                    <p>Add span with <code>.input-group-text</code> class <b>before</b> <code>&lt;input&gt;</code> for input-group-prepend and add span with <code>.input-group-text</code> class <b>after</b> <code>&lt;input&gt;</code> for input-group-append.</p>
                      <div class="row">
                          <div class="col-md-4 col-12 mb-1">
                              <fieldset>
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                  </div>
                                  <input type="text" class="form-control" placeholder="Addon to Left" aria-describedby="basic-addon1">
                                </div>
                              </fieldset>
                          </div>
                          <div class="col-md-4 col-12 mb-1">
                              <fieldset>
                                <div class="input-group">
                                  <input type="text" class="form-control" placeholder="Addon To Right" aria-describedby="basic-addon2">
                                  <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">@example.com</span>
                                  </div>
                                </div>
                              </fieldset>
                          </div>
                          <div class="col-md-4 col-12 mb-1">
                              <fieldset>
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                  </div>
                                  <input type="text" class="form-control" placeholder="Addon On Both Side" aria-label="Amount (to the nearest dollar)">
                                  <div class="input-group-append">
                                    <span class="input-group-text">.00</span>
                                  </div>
                                </div>
                              </fieldset>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- Basic Inputs Groups end -->

<!-- Inputs Group Checkbox and Radio Buttons end -->
<section id="input-group-checkbox-radio">
  <div class="row">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">Input Groups with Checkboxes and Radios</h4>
              </div>
              <div class="card-content">
                  <div class="card-body">
                    <p>Input Groups can use with checkboxes and radio buttons also. For it add code for <code>.vs-checkbox-con</code> class and <code>.vs-radio-con</code>.</p>
                      <div class="row">
                          <div class="col-sm-6 col-12 mb-1">
                              <fieldset>
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text">
                                      <div class="vs-checkbox-con">
                                        <input type="checkbox" checked value="false">
                                        <span class="vs-checkbox vs-checkbox-sm">
                                          <span class="vs-checkbox--check">
                                            <i class="vs-icon feather icon-check"></i>
                                          </span>
                                        </span>
                                      </div>
                                    </div>
                                  </div>
                                  <input type="text" class="form-control" aria-label="Text input with checkbox">
                                </div>
                              </fieldset>
                          </div>
                          <div class="col-sm-6 col-12 mb-1">
                              <fieldset>
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text">
                                      <div class="vs-radio-con">
                                        <input type="radio" name="vueradio" value="false">
                                        <span class="vs-radio vs-radio-sm">
                                          <span class="vs-radio--border"></span>
                                          <span class="vs-radio--circle"></span>
                                        </span>
                                      </div>
                                    </div>
                                  </div>
                                  <input type="text" class="form-control" aria-label="Text input with radio button">
                                </div>
                              </fieldset>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- Inputs Group Checkbox and Radio Buttons end -->

<!-- Inputs Group Sizes -->
<section id="input-group-size">
  <div class="row">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">Input Groups with different sizes</h4>
              </div>
              <div class="card-content">
                  <div class="card-body">
                    <p>Add <code>.input-group-{lg/sm}</code> class to <code>.input-group</code> for Large/Small addon/prepend.</p>
                      <div class="row">
                          <div class="col-sm-6 col-12 mb-1">
                              <fieldset>
                                <div class="input-group input-group-lg">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text" id="sizing-addon1">@</span>
                                  </div>
                                  <input type="text" class="form-control" placeholder="Large Addon" aria-describedby="sizing-addon1">
                                </div>
                              </fieldset>
                          </div>
                          <div class="col-sm-6 col-12 mb-1">
                            <fieldset>
                              <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="sizing-addon3">@example.com</span>
                                </div>
                                <input type="text" class="form-control" placeholder="Small Addon" aria-describedby="sizing-addon3">
                              </div>
                            </fieldset>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- Inputs Group Sizes end -->

<!-- Inputs Group with Buttons -->
<section id="input-group-buttons">
  <div class="row">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">Input Groups with Buttons</h4>
              </div>
              <div class="card-content">
                  <div class="card-body">
                    <p>Add span with <code>.input-group-btn</code> class and add button inside <b>before</b> or <b>after</b> <code>&lt;input&gt;</code>.</p>
                      <div class="row">
                          <div class="col-md-6 col-12 mb-1">
                              <fieldset>
                                <div class="input-group">
                                  <input type="text" class="form-control" placeholder="Button on right" aria-describedby="button-addon2">
                                  <div class="input-group-append" id="button-addon2">
                                    <button class="btn btn-primary" type="button">Go</button>
                                  </div>
                                </div>
                              </fieldset>
                          </div>
                          <div class="col-md-6 col-12 mb-1">
                            <fieldset>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <button class="btn btn-primary" type="button"><i class="feather icon-search"></i></button>
                                </div>
                                <input type="text" class="form-control" placeholder="Button on both side" aria-label="Amount">
                                <div class="input-group-append">
                                  <button class="btn btn-primary" type="button">Search !</button>
                                </div>
                              </div>
                            </fieldset>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- Inputs Group with Buttons end -->

<!-- Inputs Group with Dropdown -->
<section id="input-group-dropdown">
  <div class="row">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">Input Groups with Dropdown</h4>
              </div>
              <div class="card-content">
                  <div class="card-body">
                    <p>Add <code>&lt;button&gt;</code> with <code>.dropdown-toggle</code> class and add dropdown-menu after it to get input group with dropdown.</p>
                      <div class="row">
                          <div class="col-md-6 col-12 mb-1">
                            <fieldset>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                  </button>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div role="separator" class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                  </div>
                                </div>
                                <input type="text" class="form-control" placeholder="Dropdown on left">
                              </div>
                            </fieldset>
                          </div>
                          <div class="col-md-6 col-12 mb-1">
                            <fieldset>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-pencil"></i>
                                  </button>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div role="separator" class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                  </div>
                                </div>
                                <input type="text" class="form-control" placeholder="Dropdown on both side" aria-label="Amount">
                                <div class="input-group-append">
                                  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                  </button>
                                  <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div role="separator" class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                  </div>
                                </div>
                              </div>
                            </fieldset>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- Inputs Group with Dropdown end -->
@endsection
