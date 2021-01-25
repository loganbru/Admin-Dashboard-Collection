@extends('layouts/contentLayoutMaster')

@section('title', 'Knowledge-base')

@section('page-style')
        {{-- Page Css files --}}
        <link rel="stylesheet" href="{{ asset(mix('css/pages/knowledge-base.css')) }}">
@endsection
@section('content')
<!-- Knowledge base Jumbotron -->
<section id="knowledge-base-search">
  <div class="row">
    <div class="col-12">
      <div class="card knowledge-base-bg white">
        <div class="card-content">
          <div class="card-body p-sm-4 p-2">
            <h1 class="white">Dedicated Source Used on Website</h1>
            <p class="card-text mb-2">
              Bonbon sesame snaps lemon drops marshmallow ice cream carrot cake croissant wafer.
            </p>
            <form>
              <fieldset class="form-group position-relative has-icon-left mb-0">
                <input type="text" class="form-control form-control-lg" id="searchbar"
                  placeholder="Search Topic or Keyword">
                <div class="form-control-position">
                  <i class="feather icon-search px-1"></i>
                </div>
              </fieldset>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Knowledge base Jumbotron ends -->
<!-- Knowledge base -->
<section id="knowledge-base-content">
  <div class="row search-content-info">
    <div class="col-md-4 col-sm-6 col-12 search-content">
      <div class="card">
        <div class="card-body text-center">
          <a href="page-kb-category">
            <img src="{{ asset('images/pages/graphic-1.png') }}" class="mx-auto mb-2" width="180"
              alt="knowledge-base-image">
            <h4>SALES AUTOMATION</h4>
            <small class="text-dark">Muffin lemon drops chocolate carrot cake chocolate bar sweet roll.</small>
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 col-12 search-content">
      <div class="card">
        <div class="card-body text-center">
          <a href="page-kb-category">
            <img src="{{ asset('images/pages/graphic-2.png') }}" class="mx-auto mb-2" width="180"
              alt="knowledge-base-image">
            <h4>MARKETING AUTOMATION</h4>
            <small class="text-dark">Gingerbread sesame snaps wafer soufflé. Macaroon brownie ice cream</small>
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 col-12 search-content">
      <div class="card">
        <div class="card-body text-center">
          <a href="page-kb-category">
            <img src="{{ asset('images/pages/graphic-3.png') }}" class="mx-auto mb-2" width="180"
              alt="knowledge-base-image">
            <h4>MARKETING BI</h4>
            <small class="text-dark">cotton candy caramels danish chocolate cake pie candy. Lemon drops tart.</small>
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 col-12 search-content">
      <div class="card">
        <div class="card-body text-center">
          <a href="page-kb-category">
            <img src="{{ asset('images/pages/graphic-4.png') }}" class="mx-auto mb-2" width="180"
              alt="knowledge-base-image">
            <h4>PERSONALIZATION</h4>
            <small class="text-dark">Pudding oat cake carrot cake lemon drops gummies marshmallow.</small>
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 col-12 search-content">
      <div class="card">
        <div class="card-body text-center">
          <a href="page-kb-category">
            <img src="{{ asset('images/pages/graphic-5.png') }}" class="mx-auto mb-2" width="180"
              alt="knowledge-base-image">
            <h4>EMAIL MARKETING</h4>
            <small class="text-dark">Gummi bears pudding icing sweet caramels chocolate.Muffin croissant</small>
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 col-12 search-content">
      <div class="card">
        <div class="card-body text-center">
          <a href="page-kb-category">
            <img src="{{ asset('images/pages/graphic-6.png') }}" class="mx-auto mb-2" width="180"
              alt="knowledge-base-image">
            <h4>DEMAND GENERATION</h4>
            <small class="text-dark">Dragée jelly beans candy canes pudding cake wafer. Muffin croissant.</small>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Knowledge base ends -->
@endsection
@section('page-script')
{{-- Page js files --}}
        <script src="{{ asset(mix('js/scripts/pages/faq-kb.js')) }}"></script>
@endsection
