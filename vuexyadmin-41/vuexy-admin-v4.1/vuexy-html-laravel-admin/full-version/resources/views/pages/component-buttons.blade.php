@extends('layouts/contentLayoutMaster')

@section('title', 'Buttons')

@section('content')
{{-- Filled Buttons start --}}
<section id="basic-buttons">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Filled</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <div class="row">
                <div class="col-12">
                  <p>Bootstrap includes six predefined button styles, each serving its own semantic purpose.</p>
                  {{-- basic buttons --}}
                  <button type="button" class="btn btn-primary mr-1 mb-1">Primary</button>
                  <button type="button" class="btn btn-success mr-1 mb-1">Success</button>
                  <button type="button" class="btn btn-info mr-1 mb-1">Info</button>
                  <button type="button" class="btn btn-warning mr-1 mb-1">Warning</button>
                  <button type="button" class="btn btn-danger mr-1 mb-1">Danger</button>
                  <button type="button" class="btn btn-light mr-1 mb-1">Light</button>
                  <button type="button" class="btn btn-dark mr-1 mb-1">Dark</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Filled Buttons end --}}

  {{-- Outline Buttons start --}}
  <section id="outline-button">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Border</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <div class="row">
                <div class="col-12">
                  <p>Use a class <code>.btn-outline-{color}</code> to quickly create a outline button.</p>
                  {{-- Outline buttons --}}
                  <button type="button" class="btn btn-outline-primary mr-1 mb-1">Primary</button>
                  <button type="button" class="btn btn-outline-success mr-1 mb-1">Success</button>
                  <button type="button" class="btn btn-outline-info mr-1 mb-1">Info</button>
                  <button type="button" class="btn btn-outline-warning mr-1 mb-1">Warning</button>
                  <button type="button" class="btn btn-outline-danger mr-1 mb-1">Danger</button>
                  <button type="button" class="btn btn-outline-light mr-1 mb-1">Light</button>
                  <button type="button" class="btn btn-outline-dark mr-1 mb-1">Dark</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Outline Buttons end --}}

  {{-- Flat Buttons start --}}
  <section id="flat-buttons">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Flat</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <div class="row">
                <div class="col-12">
                  <p>Use <code>.btn-flat-{color}</code> to create a flat button</p>
                  <button type="button" class="btn btn-flat-primary mr-1 mb-1">Primary</button>
                  <button type="button" class="btn btn-flat-success mr-1 mb-1">Success</button>
                  <button type="button" class="btn btn-flat-info mr-1 mb-1">Info</button>
                  <button type="button" class="btn btn-flat-warning mr-1 mb-1">Warning</button>
                  <button type="button" class="btn btn-flat-danger mr-1 mb-1">Danger</button>
                  <button type="button" class="btn btn-flat-light mr-1 mb-1">Light</button>
                  <button type="button" class="btn btn-flat-dark mr-1 mb-1">Dark</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Flat Buttons end --}}

  {{-- Gradient Buttons Start --}}
  <section id="gradient-buttons">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Gradient</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <div class="row">
                <div class="col-12">
                  <p>use <code>bg-gradient-{color}</code> create gradient buttons</p>
                  {{-- basic buttons --}}
                  <button type="button" class="btn bg-gradient-primary mr-1 mb-1">Primary</button>
                  <button type="button" class="btn bg-gradient-success mr-1 mb-1">Success</button>
                  <button type="button" class="btn bg-gradient-info mr-1 mb-1">Info</button>
                  <button type="button" class="btn bg-gradient-warning mr-1 mb-1">Warning</button>
                  <button type="button" class="btn bg-gradient-danger mr-1 mb-1">Danger</button>
                  <button type="button" class="btn bg-gradient-dark mr-1 mb-1">Dark</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Gradient Buttons End --}}

  {{-- Relief Buttons start --}}
  <section id="relief-buttons">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Relief</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <div class="row">
                <div class="col-12">
                  <p>Use <code>.btn-relief-{color}</code> to create a relief button</p>
                  <button type="button" class="btn btn-relief-primary mr-1 mb-1">Primary</button>
                  <button type="button" class="btn btn-relief-success mr-1 mb-1">Success</button>
                  <button type="button" class="btn btn-relief-info mr-1 mb-1">Info</button>
                  <button type="button" class="btn btn-relief-warning mr-1 mb-1">Warning</button>
                  <button type="button" class="btn btn-relief-danger mr-1 mb-1">Danger</button>
                  <button type="button" class="btn btn-relief-light mr-1 mb-1">Light</button>
                  <button type="button" class="btn btn-relief-dark mr-1 mb-1">Dark</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Relief Buttons end --}}

  {{-- Square Buttons start --}}
  <section id="square-outline-button">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Square buttons</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <div class="row">
                <div class="col-12">
                  <p>Use a class <code>.square</code> with outline button class to create square outline button.</p>
                  {{-- Square buttons --}}
                  <button type="button" class="btn btn-outline-primary square mr-1 mb-1">Primary</button>
                  <button type="button" class="btn btn-outline-success square mr-1 mb-1">Success</button>
                  <button type="button" class="btn btn-outline-info square mr-1 mb-1">Info</button>
                  <button type="button" class="btn btn-outline-warning square mr-1 mb-1">Warning</button>
                  <button type="button" class="btn btn-outline-danger square mr-1 mb-1">Danger</button>
                  <button type="button" class="btn btn-outline-light square mr-1 mb-1">Light</button>
                  <button type="button" class="btn btn-outline-dark square mr-1 mb-1">Dark</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Square Buttons end --}}

  {{-- Round Buttons start --}}
  <section id="round-outline-button">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Round buttons</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <div class="row">
                <div class="col-12">
                  <p>Use a class <code>.round</code> with outline button class to create round outline button.</p>
                  {{-- Round buttons --}}
                  <button type="button" class="btn btn-outline-primary round mr-1 mb-1">Primary</button>
                  <button type="button" class="btn btn-outline-success round mr-1 mb-1">Success</button>
                  <button type="button" class="btn btn-outline-info round mr-1 mb-1">Info</button>
                  <button type="button" class="btn btn-outline-warning round mr-1 mb-1">Warning</button>
                  <button type="button" class="btn btn-outline-danger round mr-1 mb-1">Danger</button>
                  <button type="button" class="btn btn-outline-light round mr-1 mb-1">Light</button>
                  <button type="button" class="btn btn-outline-dark round mr-1 mb-1">Dark</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Round Buttons end --}}


  {{-- Text Color Buttons start --}}
  <section id="text-color-buttons">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Text Color </h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <div class="row">
                <div class="col-12">
                  <p> You can change the font color of buttons, using <code>.text-{color}</code></p>
                  {{-- text color buttons --}}
                  <button type="button" class="btn btn-flat-primary border-primary text-primary mr-1 mb-1">
                    Primary
                  </button>
                  <button type="button" class="btn btn-flat-primary border-primary text-success mr-1 mb-1">
                    Success
                  </button>
                  <button type="button" class="btn btn-flat-primary border-primary text-info mr-1 mb-1">
                    Info
                  </button>
                  <button type="button" class="btn btn-flat-primary border-primary text-warning mr-1 mb-1">
                    Warning
                  </button>
                  <button type="button" class="btn btn-flat-primary border-primary text-danger mr-1 mb-1">
                    Danger
                  </button>
                  <button type="button" class="btn btn-flat-primary border-primary text-light mr-1 mb-1">
                    Light
                  </button>
                  <button type="button" class="btn btn-flat-primary border-primary text-dark mr-1 mb-1">
                    Dark
                  </button>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Text Color Buttons end --}}

  {{-- Basic Button Icon start --}}
  <section id="basic-button-icons">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Icon </h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <div class="row">
                <div class="col-12">
                  {{-- Buttons with Icon --}}
                  <button type="button" class="btn btn-outline-primary mr-1 mb-1"><i class="feather icon-home"></i> Home</button>
                  <button type="button" class="btn btn-warning mr-1 mb-1"><i class="feather icon-star"></i> Star</button>
                  <button type="button" class="btn btn-flat-success mr-1 mb-1"><i class="feather icon-check"></i>
                    Done</button>
                  <button type="button" class="btn btn-outline-primary mr-1 mb-1" disabled><i class="feather icon-home"></i>
                    Home</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Basic Button Icon end --}}

  {{-- Icon Buttons start --}}
  <section id="icon-only-buttons">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Icon Only</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>You can use <code>.btn-icon</code>. you can create a rounded button by using
                <code>.rounded-circle</code> with <code>.btn-icon</code>. You can only use <code>.btn-icon</code> when
                you only want icon in your button</p>
              <button type="button" class="btn btn-icon btn-outline-primary mr-1 mb-1"><i
                  class="feather icon-search"></i></button>
              <button type="button" class="btn btn-icon btn-warning mr-1 mb-1"><i class="feather icon-inbox"></i></button>
              <button type="button" class="btn btn-icon btn-flat-success mr-1 mb-1"><i class="feather icon-camera"></i></button>
              <button type="button" class="btn btn-icon btn-outline-primary mr-1 mb-1" disabled>
                <i class="feather icon-search"></i></button>
              <button type="button" class="btn btn-icon rounded-circle btn-outline-primary mr-1 mb-1"><i
                  class="feather icon-search"></i></button>
              <button type="button" class="btn btn-icon btn-icon rounded-circle btn-warning mr-1 mb-1"><i
                  class="feather icon-inbox"></i></button>
              <button type="button" class="btn btn-icon btn-icon rounded-circle btn-flat-success mr-1 mb-1"><i
                  class="feather icon-camera"></i></button>
              <button type="button" class="btn btn-icon btn-icon rounded-circle btn-outline-primary mr-1 mb-1" disabled>
                <i class="feather icon-search"></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Icon Buttons end --}}

  {{-- Basic Button group start --}}
  <section id="basic-button-group">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Basic Button group</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>Group a series of buttons together on a single line with the button group. Wrap a series of buttons
                with <code>.btn</code> in <code>.btn-group</code>.</p>
              {{-- button group --}}
              <div class="row">
                <div class="col-lg-6 col-md-12 mb-1">
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-primary">Left</button>
                    <button type="button" class="btn btn-danger">Middle</button>
                    <button type="button" class="btn btn-info">Right</button>
                  </div>
                </div>
                <div class="col-lg-6 col-md-12 mb-1">
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-outline-primary"><i class="feather icon-facebook"></i></button>
                    <button type="button" class="btn btn-outline-danger"><i class="feather icon-twitter"></i></button>
                    <button type="button" class="btn btn-outline-info"><i class="feather icon-instagram"></i></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Basic Button group end --}}

  {{-- Sizes start --}}
  <section id="sizes-2">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Sizes</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6 col-sm-12">
                  <p>Add <code>.btn-lg</code> or <code>.btn-sm</code> for Fancy larger or smaller buttons size.</p>
                  {{-- simple sizes --}}
                  <button type="button" class="btn mr-1 mb-1 btn-primary btn-lg">Large</button>
                  <button type="button" class="btn mr-1 mb-1 btn-primary">Default</button>
                  <button type="button" class="btn mr-1 mb-1 btn-primary btn-sm">Small</button>
                </div>
                <div class="col-md-6 col-sm-12">
                  <p>Add <code>.btn-lg</code> or <code>.btn-sm</code> with <code>.btn-outline-*</code> for outline btn in
                    diffrent sizes</p>
                  <button type="button" class="btn mr-1 mb-1 btn-outline-primary btn-lg">Large</button>
                  <button type="button" class="btn mr-1 mb-1 btn-outline-primary">Default</button>
                  <button type="button" class="btn mr-1 mb-1 btn-outline-primary btn-sm">Small</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Sizes end --}}

  {{-- Block level buttons start --}}
  <section id="block-level-buttons">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Block level buttons</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              {{-- Block level buttons --}}
              <p>Create block level buttons—those that span the full width of a parent—by adding <code>.btn-block</code>.
              </p>
              <div class="row">
                <div class="col-lg-6 col-md-12">
                  <div class="form-group">
                    <button type="button" class="btn mb-1 btn-primary btn-lg btn-block">Block level button</button>
                  </div>
                </div>
                <div class="col-lg-6 col-md-12">
                  {{-- Block level buttons with icon --}}
                  <div class="form-group">
                    <button type="button" class="btn mb-1 btn-outline-primary btn-icon btn-lg btn-block">Block level
                      button</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Block level buttons end --}}

  {{-- Button tags start --}}
  <section id="button-tags">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Button tags</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              {{-- anchor, button tag, input button, input submit Tags --}}
              <p>The <code>.btn</code> classes are designed to be used with the <code>&lt;button&gt;</code> element.
                However, you can
                also use these classes on <code>&lt;a&gt;</code> or <code>&lt;input&gt;</code> elements.</p>
              <a class="btn btn-primary mr-1 mb-1" href="https://pixinvent.com/" role="button" target="_blank">Link</a>
              <button class="btn btn-primary mr-1 mb-1" type="submit">Button</button>
              <input class="btn btn-primary mr-1 mb-1" type="button" value="Input">
              <input class="btn btn-primary mr-1 mb-1" type="submit" value="Submit">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Button tags end --}}

  {{-- Vertical variation start --}}
  <section id="vertical-variation">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Vertical variation</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <p class="mt-1">Make a set of buttons appear vertically.</p>
                  {{-- Vertical variation --}}
                  <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                    <button type="button" class="btn btn-primary">Button</button>
                    <button type="button" class="btn btn-primary">Button</button>
                    <button type="button" class="btn btn-primary">Button</button>
                    <button type="button" class="btn btn-primary">Button</button>
                    <div class="btn-group" role="group">
                      <button type="button" class="btn btn-primary">
                        Button
                      </button>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <p class="mt-1">Vertical variation with different colors</p>
                  <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                    <button type="button" class="btn btn-primary">Primary</button>
                    <div class="btn-group" role="group">
                    </div>
                    <button type="button" class="btn btn-success">Success</button>
                    <button type="button" class="btn btn-danger">Danger</button>
                    <div class="btn-group" role="group">
                      <button id="btnGroupVerticalDrop6" type="button" class="btn btn-info">
                        Info
                      </button>
                    </div>
                    <div class="btn-group" role="group">
                      <button id="btnGroupVerticalDrop7" type="button" class="btn btn-warning">
                        Warning
                      </button>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <p class="mt-1">Vertical variation with Outlines</p>
                  <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                    <button type="button" class="btn btn-outline-primary">Button</button>
                    <button type="button" class="btn btn-outline-secondary">Button</button>
                    <div class="btn-group" role="group">
                      <button type="button" class="btn btn-outline-warning">
                        Button
                      </button>
                    </div>
                    <button type="button" class="btn btn-outline-success">Button</button>
                    <button type="button" class="btn btn-outline-danger">Button</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Vertical variation end --}}
  @endsection
