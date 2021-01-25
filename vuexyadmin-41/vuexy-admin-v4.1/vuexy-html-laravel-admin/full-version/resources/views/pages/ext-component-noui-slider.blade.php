@extends('layouts/contentLayoutMaster')

@section('title', 'NoUiSlider')

@section('vendor-style')
        <!-- vendor css files -->
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/nouislider.min.css')) }}">
@endsection
@section('page-style')
        <!-- Page css files -->
        <link rel="stylesheet" href="{{ asset(mix('css/plugins/extensions/noui-slider.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('css/core/colors/palette-noui.css')) }}">
@endsection
@section('content')
<!-- Slider values section start -->
<section id="slider-values">
  <div class="row match-height">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Slider Values</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <h4 class="mt-2">Handles</h4>
            <p>The number of handles can be set using the <code>start</code> option.</p>
            <div class="form-group">
              <div id="slider-handles" class="my-1"></div>
            </div>

            <h4 class="mt-2">Snapping between steps</h4>
            <p>When a non-linear slider has been configured, the <code>snap</code> option can be set to
              <code>true</code> to force the slider to jump between the specified values.</p>
            <div class="form-group">
              <div id="slider-snap" class="my-1"></div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- // Slider values section end -->

<!-- Slider behavior section start -->
<section id="slider-behavior">
  <div class="row">
    <!-- Simple Examples -->
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Slider behavior</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>noUiSlider offers several ways to handle user interaction. The range can be set to drag, and handles can
              move
              to taps. All these effects are optional, and can be enable by adding their keyword to the behavior option.
              This
              option accepts a <code>"-"</code> separated list of <code>"drag"</code>, <code>"tap"</code>,
              <code>"fixed"</code>, <code>"snap"</code> or <code>"none"</code>.</p>
            <h4>Tap</h4>
            <p>A handle snaps to a clicked location. A smooth transition is used. This option is <code>default</code>.
            </p>
            <div class="form-group">
              <div id="tap" class="my-1"></div>
            </div>

            <h4 class="mt-2">Drag</h4>
            <p>Makes the range draggable. Requires two handles. The <code>connect</code> option must be set to
              <code>true</code>.</p>
            <div class="form-group">
              <div id="drag" class="my-1"></div>
            </div>

            <h4 class="mt-2">Fixed dragging</h4>
            <p>Keeps the distance between handles fixed when the <code>'drag'</code> flag is set.</p>
            <div class="form-group">
              <div id="drag-fixed" class="my-1"></div>
            </div>


            <h4 class="mt-2">Combined options</h4>
            <p>Most <code>'behavior'</code> flags can be combined.</p>
            <div class="form-group">
              <div id="combined" class="my-1"></div>
            </div>

            <h4 class="mt-2">Hover</h4>
            <p>With this option set, the slider fires <code>hover</code> events when a mouse or pen user hovers over
              the slider.</p>
            <div class="form-group">
              <div id="hover" class="my-1"></div>
              <span class="example-val" id="hover-val"></span>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- // Slider values section end -->

<!-- Slider Scales / Pips section start -->
<section id="slider-scales-pips">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="text-uppercase">Slider Scales / Pips</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>This feature allows you to generate points along the slider. Five options can be set: <code>mode</code>
              to determine where to place pips, <code>values</code> as additional options for <code>mode</code>,
              <code>stepped</code> to round pip values to the slider stepping, <code>density</code> to pre-scale the
              number of pips, and <code>filter</code> to manually modify pip size.</p>
            <p>The <code>range</code> mode uses the slider range to determine where the pips should be. A pip is
              generated for every percentage specified.</p>
            <div class="form-group">
              <div id="pips-range" class="mt-1 mb-3"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Steps</h4>
        </div>
        <div class="card-content">
          <div class="card-body">

            <p>Like <code>range</code>, the <code>steps</code> mode uses the slider range. In <code>steps</code> mode, a
              pip is generated for every step. The <code>filter</code> option can be used to filter the generated pips.
              The <code>filter</code> function must return <code>0</code> (no value), <code>1</code> (large value) or
              <code>2</code> (small value).</p>

            <h4>Filtered Steps</h4>
            <div class="form-group">
              <div id="pips-steps-filter" class="my-3"></div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- // Slider Scales / Pips section end -->

<!-- Slider Colors - Handles section start -->
<section id="slider-colors-handles">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Slider Colors - Handles</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <fieldset>
              <h4 class="my-1">Default / Primary Color Slider</h4>
              <div class="form-group">
                <div id="default-color-slider" class="my-1"></div>
              </div>
            </fieldset>

            <fieldset>
              <h4 class="my-1">Success Color Slider</h4>
              <div class="form-group">
                <div id="success-color-slider" class="circle-filled slider-success my-1"></div>
              </div>
            </fieldset>

            <fieldset>
              <h4 class="my-1">Info Color Slider</h4>
              <div class="form-group">
                <div id="info-color-slider" class="square slider-info my-1"></div>
              </div>
            </fieldset>

            <fieldset>
              <h4 class="my-1">Warning Color Slider</h4>
              <div class="form-group">
                <div id="warning-color-slider" class="slider-warning my-1"></div>
              </div>
            </fieldset>


            <fieldset>
              <h4 class="my-1">Danger Color Slider</h4>
              <div class="form-group">
                <div id="danger-color-slider" class="circle-filled slider-danger my-1"></div>
              </div>
            </fieldset>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- // Slider Colors - Handles section end -->

<!-- Slider With date Starts -->
<section id="slider-date">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Slider With date</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <fieldset>
              <div class="form-group">
                <div class="slider-with-date my-1" id="slider-with-date"></div>
                <div class="my-1"><strong>Start Date: </strong> <span id="event-start"></span></div>
                <div><strong>End Date: </strong> <span id="event-end"></span></div>
              </div>
            </fieldset>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Slider With date Ends -->

<!-- Slider With Input Starts-->
<section id="slider-input">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Slider With Input</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <fieldset>
              <div class="my-1" id="slider-with-input"></div>
              <div class="row">
                <div class="col-xl-1 col-lg-2 col-md-3 col-12 slider-select">
                  <select class="form-control mr-1 mt-2 d-inline-block" id="slider-select">
                    <option value="-20">-20</option>
                    <option value="-19">-19</option>
                    <option value="-18">-18</option>
                    <option value="-17">-17</option>
                    <option value="-16">-16</option>
                    <option value="-15">-15</option>
                    <option value="-14">-14</option>
                    <option value="-13">-13</option>
                    <option value="-12">-12</option>
                    <option value="-11">-11</option>
                    <option value="-10">-10</option>
                    <option value="-9">-9</option>
                    <option value="-8">-8</option>
                    <option value="-7">-7</option>
                    <option value="-6">-6</option>
                    <option value="-5">-5</option>
                    <option value="-4">-4</option>
                    <option value="-3">-3</option>
                    <option value="-2">-2</option>
                    <option value="-1">-1</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                    <option value="32">32</option>
                    <option value="33">33</option>
                    <option value="34">34</option>
                    <option value="35">35</option>
                    <option value="36">36</option>
                    <option value="37">37</option>
                    <option value="38">38</option>
                    <option value="39">39</option>
                    <option value="40">40</option>
                  </select>
                </div>
                <div class="col-xl-1 col-lg-2 col-md-3 col-12">
                  <input class="form-control d-inline-block mt-2" type="number" min="-20" max="40" step="1"
                    id="slider-input-number">
                </div>
              </div>
            </fieldset>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Slider With Input Ends-->

<!-- Slider With Colored Connects Starts -->
<section id="slider-colored-connects">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Colored Connects</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <fieldset>
              <div id="colored-connect"></div>
            </fieldset>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Slider With Colored Connects Ends -->

<!-- Slider sizing section start -->
<section id="slider-sizing">
  <div class="row">
    <!-- Default Handle Sizing -->
    <div class="col-lg-4 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Default Handle</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <fieldset>
              <h4>Extra Large Size</h4>
              <div class="form-group">
                <div class="slider-xl my-1" id="extra-large-slider"></div>
              </div>
            </fieldset>

            <fieldset>
              <h4>Large Size</h4>
              <div class="form-group">
                <div class="slider-lg slider-success my-1" id="large-slider"></div>
              </div>
            </fieldset>

            <fieldset>
              <h4>Default</h4>
              <div class="form-group">
                <div class="slider-info my-1" id="default-slider"></div>
              </div>
            </fieldset>

            <fieldset>
              <h4>Small Size</h4>
              <div class="form-group">
                <div class="slider-sm slider-warning my-1" id="small-slider"></div>
              </div>
            </fieldset>

            <fieldset>
              <h4>Extra Small</h4>
              <div class="form-group">
                <div class="slider-xs slider-danger my-1" id="extra-small-slider"></div>
              </div>
            </fieldset>
          </div>
        </div>
      </div>
    </div>


    <!-- Circle filled handle sizing -->
    <div class="col-lg-4 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Circle Filled Handle</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <fieldset>
              <h4>Extra Large Size</h4>
              <div class="form-group">
                <div class="circle-filled slider-xl my-1" id="circle-extra-large-slider"></div>
              </div>
            </fieldset>

            <fieldset>
              <h4>Large Size</h4>
              <div class="form-group">
                <div class="circle-filled slider-lg slider-success my-1" id="circle-large-slider"></div>
              </div>
            </fieldset>

            <fieldset>
              <h4>Default</h4>
              <div class="form-group">
                <div class="circle-filled slider-info my-1" id="circle-default-slider"></div>
              </div>
            </fieldset>

            <fieldset>
              <h4>Small Size</h4>
              <div class="form-group">
                <div class="circle-filled slider-sm slider-warning my-1" id="circle-small-slider"></div>
              </div>
            </fieldset>

            <fieldset>
              <h4>Extra Small</h4>
              <div class="form-group">
                <div class="circle-filled slider-xs slider-danger my-1" id="circle-extra-small-slider"></div>
              </div>
            </fieldset>
          </div>
        </div>
      </div>
    </div>


    <!-- Square handle sizing -->
    <div class="col-lg-4 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Square Handle</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <fieldset>
              <h4>Extra Large Size</h4>
              <div class="form-group">
                <div class="square slider-xl my-1" id="square-extra-large-slider"></div>
              </div>
            </fieldset>

            <fieldset>
              <h4>Large Size</h4>
              <div class="form-group">
                <div class="square slider-lg slider-success my-1" id="square-large-slider"></div>
              </div>
            </fieldset>

            <fieldset>
              <h4>Default</h4>
              <div class="form-group">
                <div class="square slider-info my-1" id="square-default-slider"></div>
              </div>
            </fieldset>

            <fieldset>
              <h4>Small Size</h4>
              <div class="form-group">
                <div class="square slider-sm slider-warning my-1" id="square-small-slider"></div>
              </div>
            </fieldset>

            <fieldset>
              <h4>Extra Small</h4>
              <div class="form-group">
                <div class="square slider-xs slider-danger my-1" id="square-extra-small-slider"></div>
              </div>
            </fieldset>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- // Slider sizing section end -->

<!-- Vertical Sliders section start -->
<section id="vsliders">
  <div class="row">
    <div class="col-12 mt-3 mb-1">
      <h4 class="text-uppercase">Vertical Sliders</h4>
      <p>The orientation setting can be used to set the slider to <code>"vertical"</code></p>

      <p><strong>Set dimensions!</strong> Vertical sliders don't assume a default <code>height</code>, so you'll need to
        set one. You can use any unit you want, including <code>%</code> or <code>px</code>.</p>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-4 col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Default Vertical Slider</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <fieldset>
              <div class="form-group text-center">
                <div id="slider-vertical-1"></div>
                <div id="slider-vertical-2" class="ml-2 slider-info"></div>
                <div id="slider-vertical-3" class="ml-2 slider-success"></div>
                <div id="slider-vertical-4" class="ml-2 slider-warning"></div>
                <div id="slider-vertical-5" class="ml-2 slider-danger"></div>
              </div>
            </fieldset>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Connect to lower</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <fieldset>
              <div class="form-group text-center">
                <div id="connect-lower-1"></div>
                <div id="connect-lower-2" class="ml-2 slider-info"></div>
                <div id="connect-lower-3" class="ml-2 slider-success"></div>
                <div id="connect-lower-4" class="ml-2 slider-warning"></div>
                <div id="connect-lower-5" class="ml-2 slider-danger"></div>
              </div>
            </fieldset>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Connect to upper</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <fieldset>
              <div class="form-group text-center">
                <div id="connect-upper-1"></div>
                <div id="connect-upper-2" class="ml-2 slider-info"></div>
                <div id="connect-upper-3" class="ml-2 slider-success"></div>
                <div id="connect-upper-4" class="ml-2 slider-warning"></div>
                <div id="connect-upper-5" class="ml-2 slider-danger"></div>
              </div>
            </fieldset>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col-lg-4 col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Tooltips</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <fieldset>
              <div class="form-group text-center">
                <div id="slider-tooltips-1" class="mr-2"></div>
                <div id="slider-tooltips-2" class="ml-3 mr-2 slider-info"></div>
                <div id="slider-tooltips-3" class="ml-3 slider-warning"></div>
              </div>
            </fieldset>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Direction Top To Bottom</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <fieldset>
              <div class="form-group text-center">
                <div id="slider-direction-top-bottom-1" class="mr-2"></div>
                <div id="slider-direction-top-bottom-2" class="ml-3 mr-2 slider-warning"></div>
                <div id="slider-direction-top-bottom-3" class="ml-3 slider-danger"></div>
              </div>
            </fieldset>
          </div>
        </div>
      </div>
    </div>


    <div class="col-lg-4 col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Limit</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <fieldset>
              <div class="form-group text-center">
                <div id="vertical-limit-1"></div>
                <div id="vertical-limit-2" class="ml-2 slider-info"></div>
                <div id="vertical-limit-3" class="ml-2 slider-success"></div>
                <div id="vertical-limit-4" class="ml-2 slider-warning"></div>
                <div id="vertical-limit-5" class="ml-2 slider-danger"></div>
              </div>
            </fieldset>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
<!-- Vertical Sliders section end -->
@endsection

@section('vendor-script')
        <!-- vendor files -->
        <script src="{{ asset(mix('vendors/js/extensions/wNumb.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/extensions/nouislider.min.js')) }}"></script>
@endsection
@section('page-script')
        <!-- Page js files -->
        <script src="{{ asset(mix('js/scripts/extensions/noui-slider.js')) }}"></script>
@endsection
