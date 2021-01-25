
@extends('layouts/contentLayoutMaster')

@section('title', 'Date & Time Picker')

@section('vendor-style')
        <!-- vendor css files -->
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/pickadate/pickadate.css')) }}">
@endsection
@section('content')
<!-- Pick-A-Date Picker start -->
<section id="pick-a-date">
  <div class="card">
   <div class="card-body">
      <div class="row">
        <div class="col-12">
          <h4>Date Picker</h4>
          <p class="mb-2">The basic setup requires targetting an <code>input</code> element and invoking the picker.</p>
        </div>
        <div class="col-md-6 col-12 mb-1">
            <h5 class="text-bold-500">Default</h5>
            <p>Use <code>.pickadate</code> class for basic Pick-A-Date Picker.</p>
            <form>
          <input type='text' class="form-control pickadate" />
        </form>
        </div>
        <div class="col-md-6 col-12 mb-1">
            <h5 class="text-bold-500">Format Date Picker</h5>
            <p>Set<code>format</code> attribute for basic change format of date.</p>
            <form>
          <input type='text' class="form-control format-picker" />
        </form>
        </div>
        <div class="col-md-6 col-12 mb-1">
            <h5 class="text-bold-500">Min-Max Date Range</h5>
            <p>Use <code>.pickadate-limits</code> class for min. and max. date range.</p>
            <form>
          <input type='text' class="form-control pickadate-limits" />
        </form>
        </div>
        <div class="col-md-6 col-12 mb-1">
          <h5 class="text-bold-500">Translation</h5>
            <p>Use <code>.pickadate-translations</code> class for language translation.</p>
            <form>
          <input type='text' class="form-control pickadate-translations" />
        </form>
        </div>
        <div class="col-md-6 col-12 mb-1">
            <h5 class="text-bold-500">Pick-a-date with short string</h5>
            <p>Use <code>.pickadate-short-string</code> class for short Month & Week String.</p>
            <form>
          <input type='text' class="form-control pickadate-short-string" />
        </form>
        </div>
        <div class="col-md-6 col-12 mb-1">
            <h5 class="text-bold-500">Change First Weekday</h5>
            <p>Use <code>.pickadate-firstday</code> class to change first weekday to Monday.</p>
            <form>
          <input type='text' class="form-control pickadate-firstday" />
        </form>
      </div>
      <div class="col-md-6 col-12 mb-1">
            <h5 class="text-bold-500">Select Month & Year</h5>
            <p>Use <code>.pickadate-months-year</code> class for display select menus to pick the month & year.</p>
            <form>
          <input type='text' class="form-control pickadate-months-year" />
        </form>
        </div>
      <div class="col-md-6 col-12 mb-1">
          <h5 class="text-bold-500">Disabled Dates & Weeks</h5>
            <p>Use <code>.pickadate-disable</code> class for disabled dates or weeks. (such as all Sun.1th day of week and 1st and 3rd Sat.).</p>
            <form>
          <input type='text' class="form-control pickadate-disable" />
        </form>
        </div>
    </div>
  </div>
</div>
</section>
<!-- Pick-A-Date Picker end -->


<!-- Pick-A-Time Picker start -->
<section id="pick-a-time">
 <div class="card">
   <div class="card-body">
      <div class="row match-height">
        <div class="col-12">
          <h4 class="mb-1">Time Picker</h4>
        </div>
        <div class="col-md-6 col-12 mb-1">
           <h5 class="text-bold-500">Default</h5>
              <p>Use <code>.pickatime</code> class for basic Pick-a-Time Picker.</p>
              <form>
          <input type='text' class="form-control pickatime" />
        </form>
        </div>
        <div class="col-md-6 col-12 mb-1">
            <h5 class="text-bold-500">Change Formats</h5>
            <p>Use <code>.pickatime-format</code> class to change time display formats.</p>
              <form>
          <input type='text' class="form-control pickatime-format" />
        </form>
        </div>
        <div class="col-md-6 col-12 mb-1">
            <h5 class="text-bold-500">Format with Label</h5>
            <p>Use <code>.pickatime-formatlabel</code> class to display time label format.</p>
              <form>
          <input type='text' class="form-control pickatime-formatlabel" />
        </form>
        </div>
        <div class="col-md-6 col-12 mb-1">
            <h5 class="text-bold-500">Intervals</h5>
            <p>Use <code>.pickatime-intervals</code> class to display time in Intervals.</p>
                  <form>
          <input type='text' class="form-control pickatime-intervals" />
        </form>
        </div>
        <div class="col-md-6 col-12 mb-1">
            <h5 class="text-bold-500">Disable set of Time</h5>
            <p>Use <code>.pickatime-disable</code> class to disable time hours.</p>
                <form>
          <input type='text' class="form-control pickatime-disable" />
        </form>
        </div>
        <div class="col-md-6 col-12 mb-1">
            <h5 class="text-bold-500">Minimum and maximum time range</h5>
              <p>Use <code>.pickatime-min-max</code> class for Start Time & End Time.</p>
                <form>
          <input type='text' class="form-control pickatime-min-max" />
        </form>
        </div>
    </div>
    </div>
  </div>
</section>
<!-- Pick-A-Time Picker end -->
@endsection

@section('vendor-script')
        <!-- vendor files -->
        <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.date.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.time.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/pickers/pickadate/legacy.js')) }}"></script>
@endsection
@section('page-script')
        <!-- Page js files -->
        <script src="{{ asset(mix('js/scripts/pickers/dateTime/pick-a-datetime.js')) }}"></script>
@endsection
