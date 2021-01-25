@extends('layouts/contentLayoutMaster')

@section('title', 'Popovers')

@section('content')
{{-- Popover Positions start --}}
<section id="popover-positions">
    <div class="row ">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Popover Positions</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>Four options are available: top, right, bottom, and left aligned.</p>
              <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                  <h5 class="text-center my-1">Basic Top Popover</h5>
                  <p class="text-center my-1">Add <code>data-toggle="popover"</code> &amp;
                    <code>data-placement="top"</code> to add top popover.</p>
                  <div class="text-center">
                    <button type="button" class="btn btn-outline-primary" data-toggle="popover" data-placement="top"
                      data-container="body" data-original-title="Popover on top"
                      data-content="Macaroon chocolate candy. I love carrot cake gingerbread cake lemon drops. Muffin sugar plum marzipan pie.">
                      Popover on top
                    </button>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                  <h5 class="text-center my-1">Basic Right Popover</h5>
                  <p class="text-center my-1">Add <code>data-toggle="popover"</code> &amp;
                    <code>data-placement="right"</code> to add right popover.</p>
                  <div class="text-center">
                    <button type="button" class="btn btn-outline-primary" data-toggle="popover" data-placement="right"
                      data-container="body" data-original-title="Popover on right"
                      data-content="Macaroon chocolate candy. I love carrot cake gingerbread cake lemon drops. Muffin sugar plum marzipan pie.">
                      Popover on right
                    </button>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                  <h5 class="text-center my-1">Basic Bottom Popover</h5>
                  <p class="text-center my-1">Add <code>data-toggle="popover"</code> &amp;
                    <code>data-placement="bottom"</code> to add bottom popover.</p>
                  <div class="text-center">
                    <button type="button" class="btn btn-outline-primary" data-toggle="popover" data-placement="bottom"
                      data-container="body" data-original-title="Popover on bottom"
                      data-content="Macaroon chocolate candy. I love carrot cake gingerbread cake lemon drops. Muffin sugar plum marzipan pie.">
                      Popover on bottom
                    </button>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                  <h5 class="text-center my-1">Basic Left Popover</h5>
                  <p class="text-center my-1">Add <code>data-toggle="popover"</code> &amp;
                    <code>data-placement="left"</code> to add left popover.</p>
                  <div class="text-center">
                    <button type="button" class="btn btn-outline-primary" data-toggle="popover" data-placement="left"
                      data-container="body" data-original-title="Popover on left"
                      data-content="Macaroon chocolate candy. I love carrot cake gingerbread cake lemon drops. Muffin sugar plum marzipan pie.">
                      Popover on left
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Popover Positions end --}}

  {{-- Popover Triggers start --}}
  <section id="popover-triggers">
    <div class="row ">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Popover Triggers</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>Popover is triggered using - click | hover | focus | manual options. You may pass multiple triggers;
                separate them with a space. "manual" cannot be combined with any other trigger.</p>
              <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                  <h5 class="text-center my-1">Hover</h5>
                  <p class="text-center my-1">Use <code>data-trigger="hover"</code> for hover trigger.</p>
                  <div class="text-center">
                    <button type="button" class="btn btn-primary" data-toggle="popover"
                      data-content="Tart macaroon marzipan I love soufflé apple pie wafer. Chocolate bar jelly caramels jujubes chocolate cake gummies."
                      data-trigger="hover" data-original-title="Hover Triggered">
                      On Hover Trigger
                    </button>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                  <h5 class="text-center my-1">Click</h5>
                  <p class="text-center my-1">Use <code>data-trigger="click"</code> for click trigger. This is a default
                    trigger.</p>
                  <div class="text-center">
                    <button type="button" class="btn btn-primary" data-toggle="popover"
                      data-content="Tart macaroon marzipan I love soufflé apple pie wafer. Chocolate bar jelly caramels jujubes chocolate cake gummies."
                      data-original-title="Click Triggered" data-trigger="click" data-placement="bottom">
                      On Click Trigger
                    </button>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                  <h5 class="text-center my-1">Focus</h5>
                  <p class="text-center my-1">Use <code>data-trigger="focus"</code> for focus trigger.</p>
                  <div class="text-center">
                    <button type="button" class="btn btn-primary" data-toggle="popover"
                      data-content="Tart macaroon marzipan I love soufflé apple pie wafer. Chocolate bar jelly caramels jujubes chocolate cake gummies."
                      data-original-title="Focus Triggered" data-trigger="focus">
                      On Focus Trigger
                    </button>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                  <h5 class="text-center my-1">Manual</h5>
                  <p class="text-center my-1">Use <code>data-trigger="manual"</code> for manual trigger. You can do
                    show/hide using js</p>
                  <div class="text-center">
                    <button type="button" class="btn btn-primary manual" data-toggle="popover" data-placement="left"
                      data-content="Tart macaroon marzipan I love soufflé apple pie wafer. Chocolate bar jelly caramels jujubes chocolate cake gummies."
                      data-original-title="Manual Triggered" data-trigger="manual">
                      On Manual Trigger
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Popover Triggers end --}}

  {{-- Popover Options start --}}
  <section id="popover-options">
    <div class="row ">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Popover Options</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6 col-sm-12 text-center">
                  <h5 class="text-center my-1">Disabled Animaition</h5>
                  <p class="text-center my-1">Use <code>data-animation="false"</code> to remove fade animation. Default is
                    true.</p>
                  <div class="text-center">
                    <button type="button" class="btn btn-primary" data-toggle="popover"
                      data-content="Tart macaroon marzipan I love soufflé apple pie wafer. Chocolate bar jelly caramels jujubes chocolate cake gummies."
                      data-original-title="Without Fade Animation" data-animation="false" data-placement="top">
                      No animation
                    </button>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 text-center">
                  <h5 class="text-center my-1">Delay Show/Hide</h5>
                  <p class="text-center my-1">Delay showing and hiding the popover (<code>ms</code>) - does not apply to
                    manual trigger type.</p>
                  <div class="text-center">
                    <button type="button" class="btn btn-primary delay" data-toggle="popover"
                      data-content="Tart macaroon marzipan I love soufflé apple pie wafer. Chocolate bar jelly caramels jujubes chocolate cake gummies."
                      data-original-title="Click Triggered" data-delay="500" data-placement="left">
                      Delay Popover
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Popover Options end --}}

  {{-- Popover Methods start --}}
  <section id="popover-methods">
    <div class="row ">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Popover Methods</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>This is considered a “manual” triggering of the popover.Popovers whose both title and content are
                zero-length are never displayed.</p>
              <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                  <h5 class="text-center my-1">Show</h5>
                  <p class="text-center my-1">Reveals an element’s popover. Returns to the caller before the popover has
                    actually been shown.(i.e. before the <code>shown.bs.popover</code> event occurs)</p>
                  <div class="text-center">
                    <button type="button" class="btn btn-primary" id="show-method" data-popup="popover"
                      data-placement="top" data-original-title="Show Method Popover"
                      data-content="Fruitcake candy cheesecake jelly beans cake gummies. Cotton candy I love sweet roll jujubes pastry cake halvah cake."
                      data-trigger="manual">
                      Show Method <i class="feather icon-play-circle ml-1"></i>
                    </button>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                  <h5 class="text-center my-1">Hide</h5>
                  <p class="text-center my-1">Hides an element’s popover. Returns to the caller before the popover has
                    actually been hidden (i.e. before the <code>hidden.bs.popover</code> event occurs).</p>
                  <div class="text-center">
                    <button type="button" class="btn btn-primary" id="hide-method" data-popup="popover"
                      data-placement="left" data-original-title="Hide Method Popover"
                      data-content="Fruitcake candy cheesecake jelly beans cake gummies. Cotton candy I love sweet roll jujubes pastry cake halvah cake."
                      data-trigger="manual">
                      Hide Method <i class="feather icon-play-circle ml-1"></i>
                    </button>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                  <h5 class="text-center my-1">Toggle</h5>
                  <p class="text-center my-1">Toggles an element’s popover. Returns to the caller before the popover has
                    actually been shown or hidden (i.e. before the <code>shown.bs.popover</code> or
                    <code>hidden.bs.popover</code> event occurs).</p>
                  <div class="text-center">
                    <button type="button" class="btn btn-primary" id="toggle-method" data-popup="popover"
                      data-original-title="Toggle Method Popover" data-placement="top"
                      data-content="Fruitcake candy cheesecake jelly beans cake gummies. Cotton candy I love sweet roll jujubes pastry cake halvah cake."
                      data-trigger="manual">
                      Toggle Method <i class="feather icon-play-circle ml-1"></i>
                    </button>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                  <h5 class="text-center my-1">Dispose</h5>
                  <p class="text-center my-1">Hides and destroys an element’s popover. Popovers that use delegation cannot
                    be individually destroyed on descendant trigger elements.</p>
                  <div class="text-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-primary" data-toggle="popover"
                        data-original-title="Dispose Method Popover" data-placement="left"
                        data-content="Fruitcake candy cheesecake jelly beans cake gummies. Cotton candy I love sweet roll jujubes pastry cake halvah cake."
                        data-trigger="click" id="dispose-method">
                        Dispose
                      </button>
                      <button type="button" class="btn btn-primary" id="dispose">
                        <i class="feather icon-play-circle"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Popover Methods end --}}

  {{-- Popover Events start --}}
  <section id="popover-events">
    <div class="row ">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Popover Events</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                  <h5 class="text-center my-1">Show Event</h5>
                  <p class="text-center my-1">This event fires immediately when the <code>show</code> instance method is
                    called.</p>
                  <div class="text-center">
                    <button type="button" class="btn btn-primary" id="show-popover">
                      Show Event Popover
                    </button>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                  <h5 class="text-center my-1">Shown Event</h5>
                  <p class="text-center my-1">This event is fired when the popover has been made visible to the user (will
                    wait for CSS transitions to complete).</p>
                  <div class="text-center">
                    <button type="button" class="btn btn-primary" id="shown-popover">
                      Shown Event Popover
                    </button>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                  <h5 class="text-center my-1">Hide Event</h5>
                  <p class="text-center my-1">This event is fired immediately when the <code>hide</code> instance method
                    has been called.</p>
                  <div class="text-center">
                    <button type="button" class="btn btn-primary" id="hide-popover">
                      Hide Event Popover
                    </button>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                  <h5 class="text-center my-1">Hidden Event</h5>
                  <p class="text-center my-1">This event is fired when the popover has finished being hidden from the user
                    (will wait for CSS transitions to complete).</p>
                  <div class="text-center">
                    <button type="button" class="btn btn-primary" id="hidden-popover">
                      Hidden Event Popover
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
{{-- Popover Events end --}}
@endsection

@section('page-script')
        {{-- Page js files --}}
        <script src="{{ asset(mix('js/scripts/popover/popover.js')) }}"></script>
@endsection
