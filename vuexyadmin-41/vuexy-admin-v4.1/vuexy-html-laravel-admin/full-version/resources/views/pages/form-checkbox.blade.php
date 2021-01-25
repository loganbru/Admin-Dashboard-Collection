
@extends('layouts/contentLayoutMaster')

@section('title', 'Checkbox')

@section('content')
<!-- Basic Checkbox start -->
<section class="basic-checkbox">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Basic Checkboxes</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <ul class="list-unstyled mb-0">
              <li class="d-inline-block mr-2">
                <fieldset>
                  <label>
                    <input type="checkbox" value="" checked>
                    Active
                  </label>
                </fieldset>
              </li>
              <li class="d-inline-block mr-2">
                <fieldset>
                  <label>
                    <input type="checkbox" value="">
                    Inactive
                  </label>
                </fieldset>
              </li>
              <li class="d-inline-block mr-2">
                <fieldset>
                  <label>
                    <input type="checkbox" value="" disabled checked>
                    Active - disabled
                  </label>
                </fieldset>
              </li>
             <li class="d-inline-block">
                <fieldset>
                <label>
                    <input type="checkbox" value="" disabled>
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
<!-- Basic Checkbox end -->

<!-- Custom Checkbox start -->
<section class="custom-checkbox">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Custom Checkboxes</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
             <p>Add <code>.custom-control .custom-checkbox</code> as a single wrapper &amp; add
              <code>.custom-control-label</code> for better output.</p>
            <ul class="list-unstyled mb-0">
              <li class="d-inline-block mr-2">
                <fieldset>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" checked name="customCheck" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Active</label>
                  </div>
                </fieldset>
              </li>
              <li class="d-inline-block mr-2">
                <fieldset>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="customCheck" id="customCheck2">
                    <label class="custom-control-label" for="customCheck2">Inactive</label>
                  </div>
                </fieldset>
              </li>
              <li class="d-inline-block mr-2">
                <fieldset>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" checked name="customCheck" id="customCheck3"
                      disabled>
                    <label class="custom-control-label" for="customCheck3">Active - disabled</label>
                  </div>
                </fieldset>

              </li>
             <li class="d-inline-block">
                <fieldset>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="customCheck" disabled id="customCheck4">
                    <label class="custom-control-label" for="customCheck4">Inactive - disabled</label>
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
<!-- Custom Checkbox end -->

<!-- Vuexy Checkbox start -->
<section class="vuexy-checkbox">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Vuexy Checkboxes</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
             <p>To add a checkBox, we have the <code>.vs-checkbox-con</code> as a wrapper. Also use <code>.vs-checkbox</code> for better output.</p>
            <ul class="list-unstyled mb-0">
              <li class="d-inline-block mr-2">
                <fieldset>
                 <div class="vs-checkbox-con vs-checkbox-primary">
                    <input type="checkbox" checked value="false">
                    <span class="vs-checkbox">
                      <span class="vs-checkbox--check">
                        <i class="vs-icon feather icon-check"></i>
                      </span>
                    </span>
                    <span class="">Active</span>
                  </div>
                </fieldset>
              </li>
              <li class="d-inline-block mr-2">
                <fieldset>
                  <div class="vs-checkbox-con vs-checkbox-primary">
                    <input type="checkbox" value="false">
                    <span class="vs-checkbox">
                      <span class="vs-checkbox--check">
                        <i class="vs-icon feather icon-check"></i>
                      </span>
                    </span>
                    <span class="">Inactive</span>
                  </div>
                </fieldset>
              </li>
              <li class="d-inline-block mr-2">
                <fieldset>
                  <div class="vs-checkbox-con vs-checkbox-primary">
                    <input type="checkbox" disabled="disabled" checked value="false">
                    <span class="vs-checkbox">
                      <span class="vs-checkbox--check">
                        <i class="vs-icon feather icon-check"></i>
                      </span>
                    </span>
                    <span class="">Active - disabled</span>
                  </div>
                </fieldset>
              </li>
             <li class="d-inline-block">
                <fieldset>
                  <div class="vs-checkbox-con vs-checkbox-primary">
                    <input type="checkbox" disabled="disabled" value="false">
                    <span class="vs-checkbox">
                      <span class="vs-checkbox--check">
                        <i class="vs-icon feather icon-check"></i>
                      </span>
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
<!-- Vuexy Checkbox end -->

<!-- Vuexy Checkbox Color start -->
<section class="vuexy-checkbox-color">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Color</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
             <p>To change the color of the checkBox use the <code>.vs-checkbox-{value}</code> for primary, success, danger, info, warning.</p>
            <ul class="list-unstyled mb-0">
              <li class="d-inline-block mr-2">
                <fieldset>
                 <div class="vs-checkbox-con vs-checkbox-primary">
                    <input type="checkbox" checked value="false">
                    <span class="vs-checkbox">
                      <span class="vs-checkbox--check">
                        <i class="vs-icon feather icon-check"></i>
                      </span>
                    </span>
                    <span class="">Primary</span>
                  </div>
                </fieldset>
              </li>
              <li class="d-inline-block mr-2">
                <fieldset>
                  <div class="vs-checkbox-con vs-checkbox-success">
                    <input type="checkbox" checked value="false">
                    <span class="vs-checkbox">
                      <span class="vs-checkbox--check">
                        <i class="vs-icon feather icon-check"></i>
                      </span>
                    </span>
                    <span class="">Success</span>
                  </div>
                </fieldset>
              </li>
              <li class="d-inline-block mr-2">
                <fieldset>
                  <div class="vs-checkbox-con vs-checkbox-danger">
                    <input type="checkbox" checked value="false">
                    <span class="vs-checkbox">
                      <span class="vs-checkbox--check">
                        <i class="vs-icon feather icon-check"></i>
                      </span>
                    </span>
                    <span class="">Danger</span>
                  </div>
                </fieldset>
              </li>
              <li class="d-inline-block mr-2">
                <fieldset>
                  <div class="vs-checkbox-con vs-checkbox-info">
                    <input type="checkbox" checked value="false">
                    <span class="vs-checkbox">
                      <span class="vs-checkbox--check">
                        <i class="vs-icon feather icon-check"></i>
                      </span>
                    </span>
                    <span class="">Info</span>
                  </div>
                </fieldset>
              </li>
              <li class="d-inline-block">
                <fieldset>
                  <div class="vs-checkbox-con vs-checkbox-warning">
                    <input type="checkbox" checked value="false">
                    <span class="vs-checkbox">
                      <span class="vs-checkbox--check">
                        <i class="vs-icon feather icon-check"></i>
                      </span>
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
<!-- Vuexy Checkbox Color end -->

<!-- Vuexy Checkbox Icon start -->
<section class="vuexy-checkbox-icon">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Change Icon</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
             <p>Use <code>.vs-icon</code> to change change the internal icon inside the checkbox.</p>
            <ul class="list-unstyled mb-0">
              <li class="d-inline-block mr-2">
                <fieldset>
                 <div class="vs-checkbox-con vs-checkbox-primary">
                    <input type="checkbox" checked value="false">
                    <span class="vs-checkbox">
                      <span class="vs-checkbox--check">
                        <i class="vs-icon feather icon-check"></i>
                      </span>
                    </span>
                    <span class="">Primary</span>
                  </div>
                </fieldset>
              </li>
              <li class="d-inline-block mr-2">
                <fieldset>
                  <div class="vs-checkbox-con vs-checkbox-success">
                    <input type="checkbox" checked value="false">
                    <span class="vs-checkbox">
                      <span class="vs-checkbox--check">
                        <i class="vs-icon feather icon-message-square"></i>
                      </span>
                    </span>
                    <span class="">Success</span>
                  </div>
                </fieldset>
              </li>
              <li class="d-inline-block mr-2">
                <fieldset>
                  <div class="vs-checkbox-con vs-checkbox-danger">
                    <input type="checkbox" checked value="false">
                    <span class="vs-checkbox">
                      <span class="vs-checkbox--check">
                        <i class="vs-icon feather icon-x"></i>
                      </span>
                    </span>
                    <span class="">Danger</span>
                  </div>
                </fieldset>
              </li>
              <li class="d-inline-block mr-2">
                <fieldset>
                  <div class="vs-checkbox-con vs-checkbox-info">
                    <input type="checkbox" checked value="false">
                    <span class="vs-checkbox">
                      <span class="vs-checkbox--check">
                        <i class="vs-icon feather icon-paperclip"></i>
                      </span>
                    </span>
                    <span class="">Info</span>
                  </div>
                </fieldset>
              </li>
              <li class="d-inline-block">
                <fieldset>
                  <div class="vs-checkbox-con vs-checkbox-warning">
                    <input type="checkbox" checked value="false">
                    <span class="vs-checkbox">
                      <span class="vs-checkbox--check">
                        <i class="vs-icon feather icon-bold"></i>
                      </span>
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
<!-- Vuexy Checkbox icon end -->

<!-- Vuexy Checkbox Sizes start -->
<section class="vuexy-checkbox-sizes">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Vuexy Checkboxes Sizes</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
             <p>To add a checkBox with different sizes, we have the <code>.vs-checkbox-sm</code> and <code>.vs-checkbox-lg</code> for small and large checkboxes respectively. Add it alongwith <code>.vs-checkbox</code> class.</p>
            <ul class="list-unstyled mb-0">
              <li class="d-inline-block mr-2">
                <fieldset>
                 <div class="vs-checkbox-con vs-checkbox-primary">
                    <input type="checkbox" value="false">
                    <span class="vs-checkbox vs-checkbox-sm">
                      <span class="vs-checkbox--check">
                        <i class="vs-icon feather icon-check"></i>
                      </span>
                    </span>
                    <span class="">Small</span>
                  </div>
                </fieldset>
              </li>
              <li class="d-inline-block mr-2">
                <fieldset>
                  <div class="vs-checkbox-con vs-checkbox-primary">
                    <input type="checkbox" value="false">
                    <span class="vs-checkbox">
                      <span class="vs-checkbox--check">
                        <i class="vs-icon feather icon-check"></i>
                      </span>
                    </span>
                    <span class="">Default</span>
                  </div>
                </fieldset>
              </li>
              <li class="d-inline-block mr-2">
                <fieldset>
                  <div class="vs-checkbox-con vs-checkbox-primary">
                    <input type="checkbox" checked value="false">
                    <span class="vs-checkbox vs-checkbox-lg">
                      <span class="vs-checkbox--check">
                        <i class="vs-icon feather icon-check"></i>
                      </span>
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
<!-- Vuexy Checkbox Sizes end -->
@endsection
