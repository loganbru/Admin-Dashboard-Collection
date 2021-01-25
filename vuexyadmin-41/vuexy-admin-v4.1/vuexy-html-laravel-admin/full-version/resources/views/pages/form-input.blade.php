
@extends('layouts/contentLayoutMaster')

@section('title', 'Input')

@section('content')
<!-- Basic Inputs start -->
<section id="basic-input">
  <div class="row">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">Basic Inputs</h4>
              </div>
              <div class="card-content">
                  <div class="card-body">
                      <div class="row">
                          <div class="col-xl-4 col-md-6 col-12 mb-1">
                              <fieldset class="form-group">
                                  <label for="basicInput">Basic Input</label>
                                  <input type="text" class="form-control" id="basicInput"  placeholder="Enter email">
                              </fieldset>
                          </div>
                          <div class="col-xl-4 col-md-6 col-12 mb-1">
                              <fieldset class="form-group">
                                  <label for="helpInputTop">Input text with help</label>
                                  <small class="text-muted">eg.<i>someone@example.com</i></small>
                                  <input type="text" class="form-control" id="helpInputTop">
                              </fieldset>
                          </div>
                          <div class="col-xl-4 col-md-6 col-12 mb-1">
                              <fieldset class="form-group">
                                  <label for="disabledInput">Disabled Input</label>
                                  <input type="text" class="form-control" id="disabledInput" disabled>
                              </fieldset>
                          </div>
                          <div class="col-xl-4 col-md-6 col-12">
                              <fieldset class="form-group">
                                  <label for="helperText">With Helper Text</label>
                                  <input type="text" id="helperText" class="form-control" placeholder="Name">
                                  <p><small class="text-muted">Find helper text here for given textbox.</small></p>
                              </fieldset>
                          </div>
                          <div class="col-xl-4 col-md-6 col-12">
                              <fieldset class="form-group">
                                  <label for="disabledInput">Readonly Input</label>
                                  <input type="text" class="form-control" id="readonlyInput" readonly="readonly" value="You can't update me :P">
                              </fieldset>
                          </div>
                          <div class="col-xl-4 col-md-6 col-12">
                              <fieldset class="form-group">
                                  <label for="disabledInput">Static Text</label>
                                  <p class="form-control-static" id="staticInput">email@pixinvent.com</p>
                              </fieldset>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- Basic Inputs end -->

<!-- Input Style start -->
<section id="input-style">
  <div class="row">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">Input Styles</h4>
              </div>
              <div class="card-content">
                  <div class="card-body">
                      <div class="row">
                          <div class="col-12">
                              <p>To set rounded border to input box, use <code>.round</code> class and
                              to set square border to input box, use <code>.sqaure</code> class alongwith <code>.form-control</code> class.</p>
                          </div>
                          <div class="col-sm-6 col-12">
                              <fieldset class="form-group">
                                  <label for="roundText">Rounded Input</label>
                                  <input type="text" id="roundText" class="form-control round"
                                      placeholder="Rounded Input">
                              </fieldset>
                          </div>
                          <div class="col-sm-6 col-12">
                               <fieldset class="form-group">
                                  <label for="squareText">Square Input</label>
                                  <input type="text" id="squareText" class="form-control square"
                                      placeholder="square Input">
                              </fieldset>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- Input Style end -->

<!-- Floating Label Inputs start -->
<section id="floating-label-input">
  <div class="row">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">Floating Label Inputs</h4>
              </div>
              <div class="card-content">
                  <div class="card-body">
                      <div class="row">
                          <div class="col-12">
                              <p>For Flating Label Inputs, need to use <code>.form-label-group</code> class & add attribute <code>disabled</code> for disabled Floating Label Input.</p>
                          </div>
                          <div class="col-sm-6 col-12">
                              <fieldset class="form-label-group">
                                  <input type="text" class="form-control" id="floating-label1" placeholder="Label-placeholder">
                                  <label for="floating-label1">Label-placeholder</label>
                              </fieldset>
                          </div>
                          <div class="col-sm-6 col-12">
                               <fieldset class="form-label-group">
                                  <input type="text" class="form-control" id="floating-label-disable" placeholder="Label-placeholder" disabled>
                                  <label for="floating-label-disable">Disabled-placeholder</label>
                              </fieldset>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- Floating Label Inputs end -->

<!-- Basic File Browser start -->
<section id="input-file-browser">
  <div class="row">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                  <label class="card-title">File input</label>
              </div>
              <div class="card-content">
                  <div class="card-body">
                      <div class="row">
                          <div class="col-lg-6 col-md-12">
                              <fieldset class="form-group">
                                  <label for="basicInputFile">Simple File Input</label>
                                  <input type="file" class="form-control-file" id="basicInputFile">
                              </fieldset>
                          </div>
                          <div class="col-lg-6 col-md-12">
                              <fieldset class="form-group">
                                  <label for="basicInputFile">With Browse button</label>
                                  <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="inputGroupFile01">
                                      <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
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
<!-- Basic File Browser end -->

<!-- validations start -->
<section class="validations" id="validation">
  <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Input Validation States</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <div class="row">
                  <div class="col-12">
                      <p>You can indicate invalid and valid form fields with <code>.is-invalid</code> and <code>.is-valid</code>. Note that <code>.invalid-feedback</code> is also supported with these classes.</p>
                  </div>
                  <div class="col-sm-6 col-12">
                      <label for="valid-state">Valid State</label>
                      <input type="text" class="form-control is-valid" id="valid-state" placeholder="Valid" value="Valid" required>
                      <div class="valid-feedback">
                          This is valid state.
                      </div>
                  </div>
                  <div class="col-sm-6 col-12">
                    <label for="invalid-state">Invalid State</label>
                    <input type="text" class="form-control is-invalid" id="invalid-state" placeholder="Invalid" value="Invalid" required>
                    <div class="invalid-feedback">
                      This is invalid state.
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</section>
<!-- validations end -->

<!-- Tooltip validations start -->
<section class="tooltip-validations" id="tooltip-validation">
  <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Input Validation States with Tootltips</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
                <p><code>.{valid/invalid}-feedback</code> classes for <code>.{valid/invalid}-tooltip</code> classes to display validation feedback in a styled tooltip.</p>
                <form class="needs-validation" novalidate>
                  <div class="form-row">
                    <div class="col-md-4 col-12 mb-3">
                      <label for="validationTooltip01">First name</label>
                      <input type="text" class="form-control" id="validationTooltip01" placeholder="First name" value="Mark" required>
                      <div class="valid-tooltip">
                        Looks good!
                      </div>
                    </div>
                    <div class="col-md-4 col-12 mb-3">
                      <label for="validationTooltip02">Last name</label>
                      <input type="text" class="form-control" id="validationTooltip02" placeholder="Last name" value="Otto" required>
                      <div class="valid-tooltip">
                        Looks good!
                      </div>
                    </div>
                    <div class="col-md-4 col-12 mb-3">
                      <label for="validationTooltip03">City</label>
                      <input type="text" class="form-control" id="validationTooltip03" placeholder="City" required>
                      <div class="invalid-tooltip">
                        Please provide a valid city.
                      </div>
                    </div>
                  </div>
                  <button class="btn btn-primary" type="submit">Submit</button>
                </form>

            </div>
          </div>
        </div>
      </div>
  </div>
</section>
<!-- Tooltip validations end -->

<!-- Input with Icons start -->
<section id="input-with-icons">
<div class="row match-height">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Input with Icons</h4>
      </div>
      <div class="card-content">
        <div class="card-body">
          <div class="row">
              <div class="col-12">
                  <p>For Input Box with left side icon, use class <code>.has-icon-left</code> and for use divider between icon and input text box use <code>.input-divider-left</code> or <code>.input-divider-right</code> for left and right divider respectively.</p>
              </div>
              <div class="col-sm-6 col-12">
                  <div class="text-bold-600 font-medium-2 mb-1">
                      Left Icon
                  </div>
                  <fieldset class="form-group position-relative has-icon-left">
                      <input type="text" class="form-control" id="iconLeft1"
                          placeholder="Icon Left, Default Input">
                      <div class="form-control-position">
                          <i class="feather icon-phone"></i>
                      </div>
                  </fieldset>
              </div>
              <div class="col-sm-6 col-12">
                  <div class="text-bold-600 font-medium-2 mb-1">
                      Right Icon
                  </div>
                  <fieldset class="form-group position-relative">
                      <input type="text" class="form-control" id="iconLeft2"
                          placeholder="Icon Right, Default Input">
                      <div class="form-control-position">
                          <i class="feather icon-file"></i>
                      </div>
                  </fieldset>
              </div>
              <div class="col-sm-6 col-12">
                  <div class="text-bold-600 font-medium-2 mb-1">
                      Left Icon with Divider
                  </div>
                  <fieldset class="form-group position-relative has-icon-left input-divider-left">
                      <input type="text" class="form-control" id="iconLeft3"
                          placeholder="Icon Left, Default Input">
                      <div class="form-control-position">
                          <i class="feather icon-phone"></i>
                      </div>
                  </fieldset>
              </div>
              <div class="col-sm-6 col-12">
                  <div class="text-bold-600 font-medium-2 mb-1">
                      Right Icon with divider
                  </div>
                  <fieldset class="form-group position-relative input-divider-right">
                      <input type="text" class="form-control" id="iconLeft4"
                          placeholder="Icon Right, Default Input">
                      <div class="form-control-position">
                          <i class="feather icon-file"></i>
                      </div>
                  </fieldset>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Floating Label Input with Icons</h4>
      </div>
      <div class="card-content">
        <div class="card-body">
          <div class="row">
              <div class="col-sm-6 col-12">
                  <div class="text-bold-600 font-medium-2 mb-2">
                      Left Icon
                  </div>
                  <fieldset class="form-label-group form-group position-relative has-icon-left">
                      <input type="text" class="form-control" id="iconLabelLeft"
                          placeholder="Icon Left, Default Input">
                      <div class="form-control-position">
                          <i class="feather icon-phone"></i>
                      </div>
                      <label for="iconLabelLeft">Icon Left, Default Input</label>
                  </fieldset>
              </div>
              <div class="col-sm-6 col-12">
                  <div class="text-bold-600 font-medium-2 mb-2">
                      Right Icon
                  </div>
                  <fieldset class="form-label-group form-group position-relative">
                      <input type="text" class="form-control" id="iconLabelRight"
                          placeholder="Icon Right, Default Input">
                      <div class="form-control-position">
                          <i class="feather icon-file"></i>
                      </div>
                      <label for="iconLabelRight">Icon Right, Default Input</label>
                  </fieldset>
              </div>
              <div class="col-sm-6 col-12">
                  <div class="text-bold-600 font-medium-2 mb-2">
                      Left Icon with Divider
                  </div>
                  <fieldset class="form-label-group form-group position-relative has-icon-left input-divider-left">
                      <input type="text" class="form-control" id="iconLeftDivider"
                          placeholder="Icon Left, Default Input">
                      <div class="form-control-position">
                          <i class="feather icon-phone"></i>
                      </div>
                      <label for="iconLeftDivider">Icon Left, Default Input</label>
                  </fieldset>
              </div>
              <div class="col-sm-6 col-12">
                  <div class="text-bold-600 font-medium-2 mb-2">
                      Right Icon with divider
                  </div>
                  <fieldset class="form-label-group form-group position-relative input-divider-right">
                      <input type="text" class="form-control" id="iconRightDivider"
                          placeholder="Icon Right, Default Input">
                      <div class="form-control-position">
                          <i class="feather icon-file"></i>
                      </div>
                      <label for="iconRightDivider">Icon Right, Default Input</label>
                  </fieldset>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<!-- Input with Icons end -->

<!-- Input Sizing start -->
<section id="input-sizing">
<div class="row match-height">
  <div class="col-md-6 col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Control Sizing Option</h4>
      </div>
      <div class="card-content">
        <div class="card-body">
          <div class="row">
              <div class="col-12">
                  <p>For different sizes of Input, Use classes like <code>.form-control-lg</code> &amp; <code>.form-control-sm</code> for Large, Small input box.</p>
              </div>
              <div class="col-12">
                  <div class="text-bold-600 font-medium-2 mb-1">
                      Large
                  </div>
                  <input class="form-control form-control-lg" type="text" placeholder="Large Input">
              </div>
              <div class="col-12">
                  <div class="text-bold-600 font-medium-2 my-2">
                      Default
                  </div>
                  <input class="form-control" type="text" placeholder="Default Input">
              </div>
              <div class="col-12">
                  <div class="text-bold-600 font-medium-2 my-2">
                      Small
                  </div>
                  <input class="form-control form-control-sm" type="text" placeholder="Small Input">
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Label Control Sizing Option</h4>
      </div>
      <div class="card-content">
        <div class="card-body">
          <div class="row">
              <div class="col-12">
                  <p>For different sizes of Input, Use classes like <code>.form-control-lg</code> &amp; <code>.form-control-sm</code> for Large, Small input box.</p>
              </div>
              <div class="col-12">
                  <div class="text-bold-600 font-medium-2 mb-1">
                      Large
                  </div>
                  <fieldset class="form-label-group">
                      <input type="text" class="form-control form-control-lg" id="label-large"
                          placeholder="Large Input">
                      <label for="label-large">Large Input</label>
                  </fieldset>
              </div>
              <div class="col-12">
                  <div class="text-bold-600 font-medium-2 mb-1">
                      Default
                  </div>
                  <fieldset class="form-label-group">
                      <input type="text" class="form-control" id="label-default" placeholder="Default Input">
                      <label for="label-default">Default Input</label>
                  </fieldset>
              </div>
              <div class="col-12">
                  <div class="text-bold-600 font-medium-2 mb-1">
                      Small
                  </div>
                  <fieldset class="form-label-group">
                      <input type="text" class="form-control form-control-sm" id="label-small"
                          placeholder="Small Input">
                      <label for="label-small">Small Input</label>
                  </fieldset>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<!-- Input Sizing end -->
@endsection
@section('page-script')
        <!-- Page js files -->
        <script src="{{ asset(mix('js/scripts/forms/form-tooltip-valid.js')) }}"></script>
@endsection
