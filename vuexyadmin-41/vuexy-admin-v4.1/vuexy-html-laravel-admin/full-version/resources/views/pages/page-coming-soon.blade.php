@extends('layouts/fullLayoutMaster')

@section('title', 'Coming Soon')

@section('page-style')
        {{-- Page Css files --}}
        <link rel="stylesheet" href="{{ asset(mix('css/pages/coming-soon.css')) }}">
@endsection
@section('content')
<!-- coming soon flat design -->
<section>
  <div class="row d-flex vh-100 align-items-center justify-content-center">
    <div class="col-xl-5 col-md-8 col-sm-10 col-12 px-md-0 px-2">
        <div class="card text-center w-100 mb-0">
            <div class="card-header justify-content-center pb-0">
                <div class="card-title">
                    <h2 class="mb-0">We are launching soon</h2>
                </div>
            </div>
            <div class="card-content">
                <div class="card-body pt-0">
                    <img src="{{ asset('images/pages/rocket.png') }}" class="img-responsive block width-150 mx-auto" width="150" alt="bg-img">
                    <div id="clockFlat" class="card-text text-center getting-started pt-2 d-flex justify-content-center flex-wrap"></div>
                    <div class="divider">
                        <div class="divider-text">Subscribe</div>
                    </div>
                    <p class="text-left">
                        If you would like to be notified when our app is live, Please subscribe to our mailing list.
                    </p>
                    <form class="form-horizontal">
                        <fieldset class="form-label-group">
                            <input type="text" class="form-control" id="user-email" placeholder="Email">
                            <label for="user-email">Email</label>
                        </fieldset>
                    </form>
                    <button class="btn btn-primary w-100">Subscribe</button>
                </div>
            </div>
        </div>
    </div>
  </div>
</section>
<!--/ coming soon flat design -->
@endsection
@section('vendor-script')
        {{-- vendor js files --}}
        <script src="{{ asset(mix('vendors/js/coming-soon/jquery.countdown.min.js')) }}"></script>
@endsection

@section('page-script')
        {{-- Page js files --}}
        <script src="{{ asset(mix('js/scripts/pages/coming-soon.js')) }}"></script>
@endsection
