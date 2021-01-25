
@extends('layouts/contentLayoutMaster')

@section('title', 'Select')

@section('vendor-style')
        <!-- vendor css files -->
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
@endsection
@section('content')
<!-- Bootstrap Select start -->
<section class="bootstrap-select">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Bootstrap Select</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div class="row">
            	<div class="col-md-6 col-12">
		            <div class="text-bold-600 font-medium-2">
							Basic Select
					</div>
					<p>Use <code>.form-control</code> class for basic select control.</p>
		            <fieldset class="form-group">
		                <select class="form-control" id="basicSelect">
		                    <option>IT</option>
		                    <option>Blade Runner</option>
		                    <option>Thor Ragnarok</option>
		                </select>
		            </fieldset>
		        </div>
              	<div class="col-md-6 col-12">
	                <div class="text-bold-600 font-medium-2">
							Custom Select
					</div>
					<p>Use <code>.custom-select</code> class for Custom Select control.</p>
	                <fieldset class="form-group">
	                    <select class="custom-select" id="customSelect">
	                        <option selected>Open this menu</option>
	                        <option value="IT">IT</option>
	                        <option value="Blade Runner">Blade Runner</option>
	                        <option value="Thor Ragnarok">Thor Ragnarok</option>
	                    </select>
	                </fieldset>
	            </div>
	            <div class="col-md-6 col-12">
	                <div class="text-bold-600 font-medium-2">
							Multiple Select
					</div>
					<p>Use <code>multiple</code> attribute for Multiple select control.</p>
	                <fieldset class="form-group">
	                    <select class="form-control" id="countrySelect" multiple="multiple">
	                        <option selected="selected">Square</option>
	                        <option>Rectangle</option>
	                        <option selected="selected">Rombo</option>
	                        <option>Romboid</option>
	                        <option>Trapeze</option>
	                        <option>Triangle</option>
	                        <option selected="selected">Polygon</option>
	                        <option>Regular polygon</option>
	                        <option>Circumference</option>
	                        <option>Circle</option>
	                    </select>
	                </fieldset>
	            </div>
	            <div class="col-md-6 col-12">
	                <div class="text-bold-600 font-medium-2">
							Disabled Select
						</div>
						<p>Use <code>disabled</code> attribute for disabled select control.</p>
	                <fieldset class="form-group">
	                    <select class="form-control" disabled="disabled" id="disabledSelect">
	                        <option>Green</option>
	                        <option>Red</option>
	                        <option>Blue</option>
	                    </select>
	                </fieldset>
	            </div>
	        </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Bootstrap Select end -->

<!-- Basic Select2 start -->
<section class="basic-select2">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Select2</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div class="row">
            	<div class="col-12 mb-2">
            		<a href="https://select2.org/getting-started/installation" target="_blank">For more information </a>
            	</div>
            	<div class="col-sm-6 col-12">
					<div class="text-bold-600 font-medium-2">
						Basic Select2
					</div>
					<p>Use <code>.select2</code> class for basic select2 control.</p>
	                <div class="form-group">
						<select class="select2 form-control">
							<option value="square">Square</option>
	                        <option value="rectangle">Rectangle</option>
	                        <option value="rombo">Rombo</option>
	                        <option value="romboid">Romboid</option>
	                        <option value="trapeze">Trapeze</option>
	                        <option value="traible">Triangle</option>
	                        <option value="polygon">Polygon</option>
						</select>
					</div>
		        </div>
              	<div class="col-sm-6 col-12">
					<div class="text-bold-600 font-medium-2">
						Single Select with Label
					</div>
					<p>Use <code>optgroup</code> attribute for basic select2 with Label control.</p>
	                <div class="form-group">
						<select class="select2 form-control">
							<optgroup label="Figures">
								<option value="romboid">Romboid</option>
								<option value="trapeze">Trapeze</option>
								<option value="triangle">Triangle</option>
								<option value="polygon">Polygon</option>
							</optgroup>
							<optgroup label="Colors">
								<option value="red">Red</option>
								<option value="green">Green</option>
								<option value="blue">Blue</option>
								<option value="purple">Purple</option>
							</optgroup>
						</select>
					</div>
		        </div>
	            <div class="col-sm-6 col-12">
					<div class="text-bold-600 font-medium-2">
						Select With Icon
					</div>
					<p>Use data attribute <code>data-icon</code> to add icon name for each options. And use class <code>.select2-icons</code> to set icon with option.</p>
	                <div class="form-group">
						<select data-placeholder="Select a state..." class="select2-icons form-control" id="select2-icons">
							<optgroup label="Services">
								<option value="wordpress2" data-icon="fa fa-wordpress" selected>WordPress</option>
								<option value="codepen" data-icon="fa fa-codepen">Codepen</option>
								<option value="drupal" data-icon="fa fa-drupal">Drupal</option>
								<option value="pinterest2" data-icon="fa fa-css3">CSS3</option>
								<option value="html5" data-icon="fa fa-html5">HTML5</option>
							</optgroup>
							<optgroup label="File types">
								<option value="pdf" data-icon="fa fa-file-pdf-o">PDF</option>
								<option value="word" data-icon="fa fa-file-word-o">Word</option>
								<option value="excel" data-icon="fa fa-file-excel-o">Excel</option>
								<option value="facebook" data-icon="fa fa-facebook-official">Facebook</option>
							</optgroup>
							<optgroup label="Browsers">
								<option value="chrome" data-icon="fa fa-chrome">Chrome</option>
								<option value="firefox" data-icon="fa fa-firefox">Firefox</option>
								<option value="safari" data-icon="fa fa-safari">Safari</option>
								<option value="opera" data-icon="fa fa-opera">Opera</option>
								<option value="IE" data-icon="fa fa-internet-explorer">IE</option>
							</optgroup>
						</select>
					</div>
		        </div>
		        <div class="col-sm-6 col-12">
					<div class="text-bold-600 font-medium-2">
						Template support
					</div>
					<p>Select2 supports custom themes using the theme option so you can style Select2 to match the rest of your application. These are using the <code>classic</code> theme, which matches the old look of Select2.</p>
					<div class="form-group">
						<select class="select2-theme form-control" id="select2-theme">
							<optgroup label="Figures">
								<option value="romboid">Romboid</option>
								<option value="trapeze">Trapeze</option>
								<option value="triangle">Triangle</option>
								<option value="polygon">Polygon</option>
							</optgroup>
							<optgroup label="Colors">
								<option value="red">Red</option>
								<option value="green">Green</option>
								<option value="blue">Blue</option>
								<option value="purple">Purple</option>
							</optgroup>
						</select>
					</div>
		        </div>
	        </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic Select2 end -->

<!-- Multiple Select2 start -->
<section class="multiple-select2">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Multiple Select2</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div class="row">
            	<div class="col-sm-6 col-12">
					<div class="text-bold-600 font-medium-2">
						Basic Multiple Select2
					</div>
					<p>Use <code>.select2</code> class for basic select2 control. Use <code>multiple="multiple"</code> attribute for multiple select box.</p>
					<div class="form-group">
						<select class="select2 form-control" multiple="multiple">
							<option value="square">Square</option>
	                        <option value="rectangle" selected>Rectangle</option>
	                        <option value="rombo">Rombo</option>
	                        <option value="romboid">Romboid</option>
	                        <option value="trapeze">Trapeze</option>
	                        <option value="traible" selected>Triangle</option>
	                        <option value="polygon">Polygon</option>
						</select>
					</div>
		        </div>
              	<div class="col-sm-6 col-12">
					<div class="text-bold-600 font-medium-2">
						Multiple Select with Label
					</div>
					<p>Use <code>optgroup</code> attribute for multiple select box with Label control.</p>
	                <div class="form-group">
						<select class="select2 form-control" multiple="multiple">
							<optgroup label="Figures">
								<option value="romboid">Romboid</option>
								<option value="trapeze" selected>Trapeze</option>
								<option value="triangle">Triangle</option>
								<option value="polygon">Polygon</option>
							</optgroup>
							<optgroup label="Colors">
								<option value="red">Red</option>
								<option value="green">Green</option>
								<option value="blue" selected>Blue</option>
								<option value="purple">Purple</option>
							</optgroup>
						</select>
					</div>
		        </div>
	            <div class="col-sm-6 col-12">
					<div class="text-bold-600 font-medium-2">
						Select With Icon
					</div>
					<p>Use data attribute <code>data-icon</code> to add icon name for each options. And use class <code>.select2-icons</code> to set icon with option.</p>
	                <div class="form-group">
						<select data-placeholder="Select a state..." class="select2-icons form-control" id="multiple-select2-icons" multiple="multiple">
							<optgroup label="Services">
								<option value="wordpress2" data-icon="fa fa-wordpress" selected>WordPress</option>
								<option value="codepen" data-icon="fa fa-codepen">Codepen</option>
								<option value="drupal" data-icon="fa fa-drupal">Drupal</option>
								<option value="pinterest2" data-icon="fa fa-css3">CSS3</option>
								<option value="html5" data-icon="fa fa-html5">HTML5</option>
							</optgroup>
							<optgroup label="File types">
								<option value="pdf" data-icon="fa fa-file-pdf-o">PDF</option>
								<option value="word" data-icon="fa fa-file-word-o">Word</option>
								<option value="excel" data-icon="fa fa-file-excel-o">Excel</option>
								<option value="facebook" data-icon="fa fa-facebook-official">Facebook</option>
							</optgroup>
							<optgroup label="Browsers">
								<option value="chrome" data-icon="fa fa-chrome">Chrome</option>
								<option value="firefox" data-icon="fa fa-firefox">Firefox</option>
								<option value="safari" data-icon="fa fa-safari">Safari</option>
								<option value="opera" data-icon="fa fa-opera">Opera</option>
								<option value="IE" data-icon="fa fa-internet-explorer">IE</option>
							</optgroup>
						</select>
					</div>
		        </div>
		        <div class="col-sm-6 col-12">
					<div class="text-bold-600 font-medium-2">
						Maximum Select with Label
					</div>
					<p>Select2 multi-value select boxes can set restrictions regarding the maximum number of options selected. The select below is declared with the <code>multiple</code> attribute with <code>maximumSelectionLength</code> in the select2 options.</p>
	                <div class="form-group">
						<select class="max-length form-control" multiple="multiple" id="max_length">
							<optgroup label="Figures">
								<option value="romboid">Romboid</option>
								<option value="trapeze" selected>Trapeze</option>
								<option value="triangle">Triangle</option>
								<option value="polygon">Polygon</option>
							</optgroup>
							<optgroup label="Colors">
								<option value="red">Red</option>
								<option value="green">Green</option>
								<option value="blue">Blue</option>
								<option value="purple">Purple</option>
							</optgroup>
						</select>
					</div>
		        </div>
	        </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Multiple Select2 end -->

<!-- Select2 Advance Options start -->
<section class="select2-advance">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Advance Options</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div class="row">
            	<div class="col-sm-6 col-12">
					<div class="text-bold-600 font-medium-2">
						Loading Array Data
					</div>
					<p>Select2 provides a way to load the data from a local array. You can provide initial selections with array data by providing the option tag for the selected values, similar to how it would be done for a standard select.</p>
					<div class="form-group">
						<select class="select2-data-array form-control" id="select2-array"></select>
					</div>
		        </div>
              	<div class="col-sm-6 col-12">
					<div class="text-bold-600 font-medium-2">
						Loading Remote Data
					</div>
					<p>Select2 comes with AJAX support built in, using jQuery's AJAX methods. In this example, we can search for repositories using GitHub's API.</p>
	                <div class="form-group">
						<select class="select2-data-ajax form-control" id="select2-ajax"></select>
					</div>
		        </div>
	            <div class="col-sm-6 col-12">
					<div class="text-bold-600 font-medium-2">
						Customizing How Results Are Matched
					</div>
					<p>Unlike other dropdowns on this page, this one matches options only if the term appears in the beginning of the string as opposed to anywhere: This custom matcher uses a compatibility module that is only bundled in the full version of Select2. You also have the option of using a more complex matcher.</p>
	                <div class="form-group">
						<select class="select2-customize-result form-control" multiple="multiple" id="select2-customize-result">
							<optgroup label="Figures">
								<option value="romboid">Romboid</option>
								<option value="trapeze">Trapeze</option>
								<option value="triangle">Triangle</option>
								<option value="polygon">Polygon</option>
							</optgroup>
							<optgroup label="Colors">
								<option value="red">Red</option>
								<option value="green">Green</option>
								<option value="blue">Blue</option>
								<option value="purple">Purple</option>
							</optgroup>
						</select>
					</div>
		        </div>
		        <div class="col-sm-6 col-12">
					<div class="text-bold-600 font-medium-2">
						Programmatic access
					</div>
					<p>Select2 supports methods that allow programmatic control of the component.</p>
	                <div class="form-group">
						<select class="select2 js-example-programmatic form-control" id="programmatic-single">
							<optgroup label="Alaskan/Hawaiian Time Zone">
								<option value="AK">Alaska</option>
								<option value="HI">Hawaii</option>
							</optgroup>
							<optgroup label="Pacific Time Zone">
								<option value="CA">California</option>
								<option value="NV">Nevada</option>
								<option value="OR">Oregon</option>
								<option value="WA">Washington</option>
							</optgroup>
							<optgroup label="Mountain Time Zone">
								<option value="AZ">Arizona</option>
								<option value="CO">Colorado</option>
								<option value="ID">Idaho</option>
								<option value="MT">Montana</option>
								<option value="NE">Nebraska</option>
								<option value="NM">New Mexico</option>
								<option value="ND">North Dakota</option>
								<option value="UT">Utah</option>
								<option value="WY">Wyoming</option>
							</optgroup>
							<optgroup label="Central Time Zone">
								<option value="AL">Alabama</option>
								<option value="AR">Arkansas</option>
								<option value="IL">Illinois</option>
								<option value="IA">Iowa</option>
								<option value="KS">Kansas</option>
								<option value="KY">Kentucky</option>
								<option value="LA">Louisiana</option>
								<option value="MN">Minnesota</option>
								<option value="MS">Mississippi</option>
								<option value="MO">Missouri</option>
								<option value="OK">Oklahoma</option>
								<option value="SD">South Dakota</option>
								<option value="TX">Texas</option>
								<option value="TN">Tennessee</option>
								<option value="WI">Wisconsin</option>
							</optgroup>
							<optgroup label="Eastern Time Zone">
								<option value="CT">Connecticut</option>
								<option value="DE">Delaware</option>
								<option value="FL">Florida</option>
								<option value="GA">Georgia</option>
								<option value="IN">Indiana</option>
								<option value="ME">Maine</option>
								<option value="MD">Maryland</option>
								<option value="MA">Massachusetts</option>
								<option value="MI">Michigan</option>
								<option value="NH">New Hampshire</option>
								<option value="NJ">New Jersey</option>
								<option value="NY">New York</option>
								<option value="NC">North Carolina</option>
								<option value="OH">Ohio</option>
								<option value="PA">Pennsylvania</option>
								<option value="RI">Rhode Island</option>
								<option value="SC">South Carolina</option>
								<option value="VT">Vermont</option>
								<option value="VA">Virginia</option>
								<option value="WV">West Virginia</option>
							</optgroup>
						</select>
					</div>
					<div class="btn-toolbar" role="toolbar" aria-label="Programmatic control">
						<div class="btn-group btn-group-sm" aria-label="Set Select2 option">
							<button class="js-programmatic-set-val btn btn-outline-primary mr-1 mb-1">
								Set "California"
							</button>
						</div>
						<div class="btn-group btn-group-sm" role="group" aria-label="Open and close">
							<button class="js-programmatic-open btn btn-outline-primary mr-1 mb-1">
								Open
							</button>
							<button class="js-programmatic-close btn btn-outline-primary mr-1 mb-1">
								Close
							</button>
						</div>
						<div class="btn-group btn-group-sm" role="group" aria-label="Initialize and destroy">
							<button class="js-programmatic-init btn btn-outline-primary mr-1 mb-1">
								Init
							</button>
							<button class="js-programmatic-destroy btn btn-outline-primary mr-1 mb-1">
								Destroy
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
<!-- Select2 Advance Options end -->

<!-- Select2 Sizing start -->
<section class="select2-sizing">
  <div class="row">
    <div class="col-md-6 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Size</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div class="row">
            	<div class="col-12">
            		<p>For different sizes of select2, Use classes like <code>.select2-size-sm</code> &amp; <code>.select2-size-lg</code> for Large, small &amp; Extra Small Select respectively.</p>
            	</div>
            	<div class="col-12">
					<div class="text-bold-600 font-medium-2">
						Large
					</div>
	                <div class="form-group">
						<select class="select2-size-lg form-control" id="large-select">
							<option value="square">Square</option>
	                        <option value="rectangle">Rectangle</option>
	                        <option value="rombo">Rombo</option>
	                        <option value="romboid">Romboid</option>
	                        <option value="trapeze">Trapeze</option>
	                        <option value="traible">Triangle</option>
	                        <option value="polygon">Polygon</option>
						</select>
					</div>
		        </div>
              	<div class="col-12">
					<div class="text-bold-600 font-medium-2">
						Default
					</div>
	                <div class="form-group">
						<select class="select2 form-control" id="default-select">
							<option value="square">Square</option>
	                        <option value="rectangle">Rectangle</option>
	                        <option value="rombo">Rombo</option>
	                        <option value="romboid">Romboid</option>
	                        <option value="trapeze">Trapeze</option>
	                        <option value="traible">Triangle</option>
	                        <option value="polygon">Polygon</option>
						</select>
					</div>
		        </div>
		        <div class="col-12">
					<div class="text-bold-600 font-medium-2">
						Small
					</div>
					<div class="form-group">
						<select class="select2-size-sm form-control" id="small-select">
							<option value="square">Square</option>
	                        <option value="rectangle">Rectangle</option>
	                        <option value="rombo">Rombo</option>
	                        <option value="romboid">Romboid</option>
	                        <option value="trapeze">Trapeze</option>
	                        <option value="traible">Triangle</option>
	                        <option value="polygon">Polygon</option>
						</select>
					</div>
		        </div>
	        </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Multi Select Size</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div class="row">
            	<div class="col-12">
            		<p>For different sizes of select2, Use classes like <code>.select2-size-sm</code> &amp; <code>.select2-size-lg</code> for Large, small &amp; Extra Small Select respectively.</p>
            	</div>
            	<div class="col-12">
					<div class="text-bold-600 font-medium-2">
						Large
					</div>
	                <div class="form-group">
						<select class="select2-size-lg form-control" multiple="multiple" id="large-select-multi">
							<option value="square" selected>Square</option>
	                        <option value="rectangle">Rectangle</option>
	                        <option value="rombo">Rombo</option>
	                        <option value="romboid">Romboid</option>
	                        <option value="trapeze">Trapeze</option>
	                        <option value="traible">Triangle</option>
	                        <option value="polygon">Polygon</option>
						</select>
					</div>
		        </div>
              	<div class="col-12">
					<div class="text-bold-600 font-medium-2">
						Default
					</div>
	                <div class="form-group">
						<select class="select2 form-control" multiple="multiple" id="default-select-multi">
							<option value="square">Square</option>
	                        <option value="rectangle">Rectangle</option>
	                        <option value="rombo">Rombo</option>
	                        <option value="romboid">Romboid</option>
	                        <option value="trapeze">Trapeze</option>
	                        <option value="traible">Triangle</option>
	                        <option value="polygon" selected>Polygon</option>
						</select>
					</div>
		        </div>
		        <div class="col-12">
					<div class="text-bold-600 font-medium-2">
						Small
					</div>
					<div class="form-group">
						<select class="select2-size-sm form-control" multiple="multiple" id="small-select-multi">
							<option value="square">Square</option>
	                        <option value="rectangle">Rectangle</option>
	                        <option value="rombo" selected>Rombo</option>
	                        <option value="romboid">Romboid</option>
	                        <option value="trapeze">Trapeze</option>
	                        <option value="traible">Triangle</option>
	                        <option value="polygon">Polygon</option>
						</select>
					</div>
		        </div>
	        </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Select2 Sizing end -->

<!-- Select2 Color start -->
<section class="select2-color">
  <div class="row">
    <div class="col-md-6 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Color</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div class="row">
            	<div class="col-12">
					<div class="text-bold-600 font-medium-2">
						Background Color
					</div>
					<p>Use class <code>.select2-bg</code> with <code>data-bgcolor</code> &amp; <code>data-bgcolor-variation</code> attributes for background color of control.</p>
	                <div class="form-group">
						<select class="select2-bg form-control" id="bg-select" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
							<optgroup label="Figures">
								<option value="romboid">Romboid</option>
								<option value="trapeze">Trapeze</option>
								<option value="triangle">Triangle</option>
								<option value="polygon">Polygon</option>
							</optgroup>
							<optgroup label="Colors">
								<option value="red">Red</option>
								<option value="green">Green</option>
								<option value="blue">Blue</option>
								<option value="purple">Purple</option>
							</optgroup>
						</select>
					</div>
		        </div>
              	<div class="col-12">
					<div class="text-bold-600 font-medium-2">
						Full Background Color
					</div>
					<p>Use class <code>.select2-full-bg</code> with <code>data-bgcolor</code> &amp; <code>data-bgcolor-variation</code> attributes for full select2 control background color.</p>
	                <div class="form-group">
						<select class="select2-full-bg form-control" id="full-bg-select" data-bgcolor="info" data-bgcolor-variation="lighten-3" data-text-color="white">
							<optgroup label="Figures">
								<option value="romboid">Romboid</option>
								<option value="trapeze">Trapeze</option>
								<option value="triangle">Triangle</option>
								<option value="polygon">Polygon</option>
							</optgroup>
							<optgroup label="Colors">
								<option value="red">Red</option>
								<option value="green">Green</option>
								<option value="blue">Blue</option>
								<option value="purple">Purple</option>
							</optgroup>
						</select>
					</div>
		        </div>
	            <div class="col-12">
					<div class="text-bold-600 font-medium-2">
						Border Color
					</div>
					<p>Use class <code>.select2-border</code> with <code>data-border-color</code> &amp; <code>data-border-variation</code> attributes class for Border color of control.</p>
	                <div class="form-group">
						<select class="select2-border border-warning form-control" id="border-select" data-border-color="warning" data-border-variation="darken-2" data-text-color="warning" data-text-variation="darken-3">
							<optgroup label="Figures">
								<option value="romboid">Romboid</option>
								<option value="trapeze">Trapeze</option>
								<option value="triangle">Triangle</option>
								<option value="polygon">Polygon</option>
							</optgroup>
							<optgroup label="Colors">
								<option value="red">Red</option>
								<option value="green">Green</option>
								<option value="blue">Blue</option>
								<option value="purple">Purple</option>
							</optgroup>
						</select>
					</div>
		        </div>
	        </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Color for Multi Select</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div class="row">
            	<div class="col-12">
					<div class="text-bold-600 font-medium-2">
						Background Color
					</div>
					<p>Use class <code>.select2-bg</code> with <code>data-bgcolor</code> &amp; <code>data-bgcolor-variation</code> attributes for background color of control.</p>
	                <div class="form-group">
						<select class="select2-bg form-control" multiple="multiple" id="bg-select-multi" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
							<optgroup label="Figures">
								<option value="romboid" >Romboid</option>
								<option value="trapeze" selected>Trapeze</option>
								<option value="triangle">Triangle</option>
								<option value="polygon">Polygon</option>
							</optgroup>
							<optgroup label="Colors">
								<option value="red">Red</option>
								<option value="green">Green</option>
								<option value="blue">Blue</option>
								<option value="purple">Purple</option>
							</optgroup>
						</select>
					</div>
		        </div>
              	<div class="col-12">
					<div class="text-bold-600 font-medium-2">
						Full Background Color
					</div>
					<p>Use class <code>.select2-full-bg</code> with <code>data-bgcolor</code> &amp; <code>data-bgcolor-variation</code> attributes for full select2 control background color.</p>
	                <div class="form-group">
						<select class="select2-full-bg form-control" multiple="multiple" id="full-bg-select-multi" data-bgcolor="info" data-bgcolor-variation="lighten-3" data-text-color="white">
							<optgroup label="Figures">
								<option value="romboid">Romboid</option>
								<option value="trapeze">Trapeze</option>
								<option value="triangle">Triangle</option>
								<option value="polygon">Polygon</option>
							</optgroup>
							<optgroup label="Colors">
								<option value="red" selected>Red</option>
								<option value="green">Green</option>
								<option value="blue">Blue</option>
								<option value="purple">Purple</option>
							</optgroup>
						</select>
					</div>
		        </div>
	            <div class="col-12">
					<div class="text-bold-600 font-medium-2">
						Border Color
					</div>
					<p>Use class <code>.select2-border</code> with <code>data-border-color</code> &amp; <code>data-border-variation</code> attributes class for Border color of control.</p>
	                <div class="form-group">
						<select class="select2-border border-warning form-control" multiple="multiple" id="border-select-multi" data-border-color="warning" data-border-variation="darken-2" data-text-color="warning" data-text-variation="darken-3">
							<optgroup label="Figures">
								<option value="romboid">Romboid</option>
								<option value="trapeze">Trapeze</option>
								<option value="triangle">Triangle</option>
								<option value="polygon" selected>Polygon</option>
							</optgroup>
							<optgroup label="Colors">
								<option value="red">Red</option>
								<option value="green">Green</option>
								<option value="blue">Blue</option>
								<option value="purple">Purple</option>
							</optgroup>
						</select>
					</div>
		        </div>
	        </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Select2 Color end -->
@endsection

@section('vendor-script')
        <!-- vendor files -->
        <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
@endsection
@section('page-script')
        <!-- Page js files -->
        <script src="{{ asset(mix('js/scripts/forms/select/form-select2.js')) }}"></script>
@endsection
