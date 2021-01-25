@extends('layouts/contentLayoutMaster')

@section('title', 'Context Menu')

@section('vendor-style')
        <!-- vendor css files -->
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/jquery.contextMenu.min.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/toastr.css')) }}">
@endsection
@section('page-style')
        <!-- Page css files -->
        <link rel="stylesheet" href="{{ asset(mix('css/plugins/extensions/toastr.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('css/plugins/extensions/context-menu.css')) }}">
@endsection
@section('content')
  <!-- context-menu Starts -->
  <section id="context-menu">
    <div class="row">
      <!-- Basic context menu starts -->
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Basic Menu</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>
                To create a basic context menu use <code>$.contextMenu()</code> and the add your target with
                <code>{selector: "myId"}</code> and then create your items for menu with
                <code>{items:{"name" : "item 1"}}</code>
              </p>
              <button class="btn btn-primary mr-1 mb-1" type="button" id="basic-context-menu">
                Right Click On Me
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- Basic context menu ends -->

      <!-- left click context menu starts -->
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Left Click</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>
                To create a context menu which pops up on left click use <code>{trigger : "left"}</code>.
              </p>
              <button class="btn btn-primary mr-1 mb-1" type="button" id="left-click-context-menu">
                Left Click On Me
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- left click context menu ends -->

      <!-- submenu context menu starts -->
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Submenu</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>
                You can create context menu with sub menus by using <code>{fold}</code> and adding menu items inside of
                it.
              </p>
              <button class="btn btn-primary mr-1 mb-1" type="button" id="submenu-context-menu">
                With Submenu
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- submenu context menu ends -->

      <!-- hover context menu starts -->
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Hover</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>
                To create a context menu which pops on hover use <code>{trigger : true}</code>
              </p>
              <button class="btn btn-primary mr-1 mb-1" type="button" id="hover-context-menu">
                Hover Over Me
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- hover context menu ends -->
    </div>
  </section>
<!-- context-menu Ends -->
@endsection

@section('vendor-script')
        <!-- vendor files -->
        <script src="{{ asset(mix('vendors/js/extensions/jquery.contextMenu.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/extensions/jquery.ui.position.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/extensions/toastr.min.js')) }}"></script>
@endsection
@section('page-script')
        <!-- Page js files -->
        <script src="{{ asset(mix('js/scripts/extensions/context-menu.js')) }}"></script>
@endsection
