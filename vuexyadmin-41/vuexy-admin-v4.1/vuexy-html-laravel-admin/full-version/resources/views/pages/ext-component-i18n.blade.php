@extends('layouts/contentLayoutMaster')

@section('title', 'i18n')

@section('content')
<!-- internationalization starts -->
<section id="internationalization">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Change Locale</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div class="language-options checkbox">
              <div class="vs-radio-con vs-radio-primary mb-1">
                <input class="i18n-lang-option" type="radio" name="i18n-lang-radios" checked="" value="false"
                  data-lng="en_p">
                <span class="vs-radio">
                  <span class="vs-radio--border"></span>
                  <span class="vs-radio--circle"></span>
                </span>
                <span class="">English</span>
              </div>
              <div class="vs-radio-con vs-radio-primary mb-1">
                <input class="i18n-lang-option" type="radio" name="i18n-lang-radios" value="false" data-lng="fr_p">
                <span class="vs-radio">
                  <span class="vs-radio--border"></span>
                  <span class="vs-radio--circle"></span>
                </span>
                <span class="">French</span>
              </div>
              <div class="vs-radio-con vs-radio-primary mb-1">
                <input class="i18n-lang-option" type="radio" name="i18n-lang-radios" value="false" data-lng="de_p">
                <span class="vs-radio">
                  <span class="vs-radio--border"></span>
                  <span class="vs-radio--circle"></span>
                </span>
                <span class="">German</span>
              </div>
              <div class="vs-radio-con vs-radio-primary mb-1">
                <input class="i18n-lang-option" type="radio" name="i18n-lang-radios" value="false" data-lng="pt_p">
                <span class="vs-radio">
                  <span class="vs-radio--border"></span>
                  <span class="vs-radio--circle"></span>
                </span>
                <span class="">Portuguese</span>
              </div>
            </div>

            <div class="card border mt-3 card-localization">
              <div class="card-header">
                <h4 class="card-title">Card Title</h4>
              </div>
              <div class="card-content">
                <div class="card-body">
                  <div class="card-text" data-i18n="key">
                    Cake sesame snaps cupcake gingerbread danish I love gingerbread. Apple pie pie jujubes chupa chups
                    muffin halvah lollipop. Chocolate cake oat cake tiramisu marzipan sugar plum. Donut sweet pie oat
                    cake dragée fruitcake cotton candy lemon drops.
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
<!-- internationalization starts -->
@endsection

@section('page-script')
        <!-- Page js files -->
        <script src="{{ asset(mix('js/scripts/extensions/i18n.js')) }}"></script>
@endsection
