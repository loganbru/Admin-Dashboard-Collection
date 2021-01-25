
@extends('layouts/contentLayoutMaster')

@section('title', 'Radio Buttons')

@section('content')
<!-- Basic Radio Button start -->
<section class="basic-radio">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Basic Radio Buttons</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <ul class="list-unstyled mb-0">
              <li class="d-inline-block mr-2">
                <fieldset>
                  <label>
                    <input type="radio" name="radio" checked>
                    Active
                  </label>
                </fieldset>
              </li>
              <li class="d-inline-block mr-2">
                <fieldset>
                  <label>
                    <input type="radio" name="radio">
                    Inactive
                  </label>
                </fieldset>
              </li>
              <li class="d-inline-block mr-2">
                <fieldset>
                  <label>
                    <input type="radio" disabled checked>
                    Active - disabled
                  </label>
                </fieldset>
              </li>
             <li class="d-inline-block">
                <fieldset>
                <label>
                    <input type="radio" disabled>
                    Inactive - disabled
                  </label>
                </fieldset>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic Radio Button end -->

<!-- Custom Radio Buttons start -->
<section class="custom-radio">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Custom Radio Buttons</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
             <p>Add <code>.custom-control .custom-radio</code> as a single wrapper &amp; add
              <code>.custom-control-label</code> for better output.</p>
            <ul class="list-unstyled mb-0">
              <li class="d-inline-block mr-2">
                <fieldset>
                  <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="customRadio" id="customRadio1" checked>
                    <label class="custom-control-label" for="customRadio1">Active</label>
                  </div>
                </fieldset>
              </li>
              <li class="d-inline-block mr-2">
                <fieldset>
                  <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" name="customRadio" id="customRadio2">
                    <label class="custom-control-label" for="customRadio2">Inactive</label>
                  </div>
                </fieldset>
              </li>
              <li class="d-inline-block mr-2">
                <fieldset>
                  <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" checked id="customRadio3"
                      disabled>
                    <label class="custom-control-label" for="customRadio3">Active - disabled</label>
                  </div>
                </fieldset>
              </li>
              <li class="d-inline-block">
                <fieldset>
                  <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="customRadio4" disabled>
                    <label class="custom-control-label" for="customRadio4">Inactive - disabled</label>
                  </div>
                </fieldset>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Custom Radio Buttons end -->

<!-- Vuexy Radio Buttons start -->
<section class="vuexy-radio">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Vuexy Radio Buttons</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
             <p>To add a checkBox, we have the <code>.vs-radio-con</code> as a wrapper. Also use <code>.vs-radio</code> for better output.</p>
            <ul class="list-unstyled mb-0">
              <li class="d-inline-block mr-2">
                <fieldset>
                 <div class="vs-radio-con">
                    <input type="radio" name="vueradio" checked value="false">
                    <span class="vs-radio">
                      <span class="vs-radio--border"></span>
                      <span class="vs-radio--circle"></span>
                    </span>
                    <span class="">Active</span>
                  </div>
                </fieldset>
              </li>
              <li class="d-inline-block mr-2">
                <fieldset>
                  <div class="vs-radio-con">
                    <input type="radio" name="vueradio" value="false">
                    <span class="vs-radio">
                      <span class="vs-radio--border"></span>
                      <span class="vs-radio--circle"></span>
                    </span>
                    <span class="">Inactive</span>
                  </div>
                </fieldset>
              </li>
              <li class="d-inline-block mr-2">
                <fieldset>
                  <div class="vs-radio-con">
                    <input type="radio" disabled="disabled" checked value="false">
                    <span class="vs-radio">
                      <span class="vs-radio--border"></span>
                      <span class="vs-radio--circle"></span>
                    </span>
                    <span class="">Active - disabled</span>
                  </div>
                </fieldset>
              </li>
             <li class="d-inline-block">
                <fieldset>
                  <div class="vs-radio-con">
                    <input type="radio" disabled="disabled" value="false">
                    <span class="vs-radio">
                      <span class="vs-radio--border"></span>
                      <span class="vs-radio--circle"></span>
                    </span>
                    <span class="">Inactive - disabled</span>
                  </div>
                </fieldset>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Vuexy Radio Buttons end -->

<!-- Vuexy Radio Buttons Color start -->
<section class="vuexy-radio-color">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Color</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
             <p>To change the color of the radio use the <code>.vs-radio-{value}</code> for primary, success, danger, info, warning.</p>
            <ul class="list-unstyled mb-0">
              <li class="d-inline-block mr-2">
                <fieldset>
                 <div class="vs-radio-con">
                    <input type="radio" name="radiocolor" checked value="false">
                    <span class="vs-radio">
                      <span class="vs-radio--border"></span>
                      <span class="vs-radio--circle"></span>
                    </span>
                    <span class="">Primary (Default)</span>
                  </div>
                </fieldset>
              </li>
              <li class="d-inline-block mr-2">
                <fieldset>
                  <div class="vs-radio-con vs-radio-success">
                    <input type="radio" name="radiocolor" value="false">
                    <span class="vs-radio">
                      <span class="vs-radio--border"></span>
                      <span class="vs-radio--circle"></span>
                    </span>
                    <span class="">Success</span>
                  </div>
                </fieldset>
              </li>
              <li class="d-inline-block mr-2">
                <fieldset>
                  <div class="vs-radio-con vs-radio-danger">
                    <input type="radio" name="radiocolor" value="false">
                    <span class="vs-radio">
                      <span class="vs-radio--border"></span>
                      <span class="vs-radio--circle"></span>
                    </span>
                    <span class="">Danger</span>
                  </div>
                </fieldset>
              </li>
              <li class="d-inline-block mr-2">
                <fieldset>
                  <div class="vs-radio-con vs-radio-info">
                    <input type="radio" name="radiocolor" value="false">
                    <span class="vs-radio">
                      <span class="vs-radio--border"></span>
                      <span class="vs-radio--circle"></span>
                    </span>
                    <span class="">Info</span>
                  </div>
                </fieldset>
              </li>
              <li class="d-inline-block">
                <fieldset>
                  <div class="vs-radio-con vs-radio-warning">
                    <input type="radio" name="radiocolor" value="false">
                    <span class="vs-radio">
                      <span class="vs-radio--border"></span>
                      <span class="vs-radio--circle"></span>
                    </span>
                    <span class="">Warning</span>
                  </div>
                </fieldset>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Vuexy Radio Buttons Color end -->

<!-- Vuexy Radio Buttons Sizes start -->
<section class="vuexy-radio-size">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Vuexy Radio Buttons Sizes</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
             <p>To add a radio button with different sizes, we have the <code>.vs-radio-sm</code> and <code>.vs-radio-lg</code> for small and large Radio Buttons respectively. Add it alongwith <code>.vs-radio</code> class.</p>
            <ul class="list-unstyled mb-0">
              <li class="d-inline-block mr-2">
                <fieldset>
                 <div class="vs-radio-con vs-radio-primary">
                    <input type="radio" name="vueradisize" value="false">
                    <span class="vs-radio vs-radio-sm">
                      <span class="vs-radio--border"></span>
                      <span class="vs-radio--circle"></span>
                    </span>
                    <span class="">Small</span>
                  </div>
                </fieldset>
              </li>
              <li class="d-inline-block mr-2">
                <fieldset>
                  <div class="vs-radio-con vs-radio-primary">
                    <input type="radio" name="vueradisize" value="false">
                    <span class="vs-radio">
                      <span class="vs-radio--border"></span>
                      <span class="vs-radio--circle"></span>
                    </span>
                    <span class="">Default</span>
                  </div>
                </fieldset>
              </li>
              <li class="d-inline-block mr-2">
                <fieldset>
                  <div class="vs-radio-con vs-radio-primary">
                    <input type="radio" name="vueradisize" value="false">
                    <span class="vs-radio vs-radio-lg">
                      <span class="vs-radio--border"></span>
                      <span class="vs-radio--circle"></span>
                    </span>
                    <span class="">Large</span>
                  </div>
                </fieldset>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Vuexy Radio Buttons sizes end -->
@endsection
