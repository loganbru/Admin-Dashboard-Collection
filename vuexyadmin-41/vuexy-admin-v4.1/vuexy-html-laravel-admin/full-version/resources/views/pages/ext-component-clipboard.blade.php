@extends('layouts/contentLayoutMaster')

@section('title', 'Clipboard')

@section('content')
<!-- Copy to clipboard Starts -->
<Section id="copy-to-clipboard">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Clipboard</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div class="row">
              <div class="col-md-2 col-sm-12 pr-0">
                <div class="form-group">
                  <input type="text" class="form-control" id="copy-to-clipboard-input" value="Copy Me!">
                </div>
              </div>
              <div class="col-md-2 col-sm-12">
                <button class="btn btn-primary" id="btn-copy">Copy!</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</Section>
<!-- Copy to clipboard Starts -->
@endsection

@section('page-script')
        <!-- Page js files -->
        <script src="{{ asset(mix('js/scripts/extensions/copy-to-clipboard.js')) }}"></script>
@endsection
