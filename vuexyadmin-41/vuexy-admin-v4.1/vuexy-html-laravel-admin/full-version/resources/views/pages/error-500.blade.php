@extends('layouts/fullLayoutMaster')

@section('title', 'Error 500')

@section('page-style')
        {{-- Page Css files --}}
        <link rel="stylesheet" href="{{ asset(mix('css/pages/error.css')) }}">
@endsection
@section('content')
<!-- error 500 -->
<section class="row flexbox-container">
  <div class="col-xl-7 col-md-8 col-12 d-flex justify-content-center">
    <div class="card auth-card bg-transparent shadow-none rounded-0 mb-0 w-100">
      <div class="card-content">
        <div class="card-body text-center">
          <img src="{{ asset('images/pages/500.png') }}" class="img-fluid align-self-center" alt="branding logo">
          <h1 class="font-large-2 mt-1 mb-0">Internal Server Error!</h1>
          <p class="p-3">
            susceptive nonturbinated indoctrination formulary dyskinetic deafforest Strumella frolicsomeness encrustment
            portia myelination lachrymatory bestain hoople piscator pyramidoidal parter clipt.
          </p>
          <a class="btn btn-primary btn-lg" href="dashboard-analytics">Back to Home</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- error 500 end -->
@endsection
