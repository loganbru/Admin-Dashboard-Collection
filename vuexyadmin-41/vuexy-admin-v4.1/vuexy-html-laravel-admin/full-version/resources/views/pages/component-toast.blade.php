@extends('layouts/contentLayoutMaster')

@section('title', 'Toast')

@section('content')
{{-- Start of Bootstrap Toasts --}}
<section id="bootstrap-toasts">
    {{-- Translucent toast and basic toasts starts  --}}
    <div class="row match-height">
      <div class="col-md-6 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Basic Toast</h4>
          </div>
          <div class="card-body">
            <p>
              Toasts are as flexible as you need and have very little required markup. At a minimum, we
              require a single element to contain your “toasted” content and strongly encourage a dismiss
              button.
            </p>
            <div class="btn btn-outline-primary toast-toggler mt-2">Toast</div>
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
              <div class="toast-header">
                <img src="{{ asset('images/logo/logo.png') }}" class="rounded mr-2" alt="Toast image">
                <strong class="mr-auto">Vue Admin</strong>
                <small>11 mins ago</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="toast-body">
                Hello, world! This is a toast message.
              </div>
            </div>
            <div class="toast-bs-container">
              <div class="toast-position">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Translucent</h4>
            <p class="mt-1">Toasts are slightly translucent, too, so they blend over whatever they might appear
              over. For browsers that support the backdrop-filter CSS property, we’ll also attempt to blur the
              elements under a toast.</p>
          </div>
          <div class="card-content bg-dark">
            <div class="card-body">
              <div class="toast toast-wrapper toast-translucent" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                  <img src="{{ asset('images/logo/logo.png') }}" class="rounded mr-2" alt="Toast image">
                  <strong class="mr-auto">Vue Admin</strong>
                  <small>11 mins ago</small>
                  <button type="button" class="ml-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="toast-body">
                  Hello, world! This is a toast message.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- Translucent toast and basic toasts starts  --}}

    {{-- toast stacking and placement starts --}}
    <div class="row match-height">
      <div class="col-md-6 col-sm-12">
        <div class="card">
          <div class="card-header pb-0">
            <h4 class="card-title">Stacking</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p class="mt-1">When you have multiple toasts, we default to vertically stacking them in a readable
                manner.</p>
              <div class="btn btn-outline-primary toast-toggler mt-2 mr-1">Auto Hide Off</div>
              <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false">
                <div class="toast-header">
                  <img src="{{ asset('images/logo/logo.png') }}" class="rounded mr-2" alt="Toast Image">
                  <strong class="mr-auto">Vue Admin</strong>
                  <small class="text-muted">just now</small>
                  <button type="button" class="ml-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="toast-body">
                  See? Just like this.
                </div>
              </div>
              <div class="btn btn-outline-success toast-toggler mt-2 mr-1">Toast</div>
              <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
                <div class="toast-header">
                  <img src="{{ asset('images/logo/logo.png') }}" class="rounded mr-2" alt="Toast Image">
                  <strong class="mr-auto">Vue Admin</strong>
                  <small class="text-muted">2 seconds ago</small>
                  <button type="button" class="ml-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="toast-body">
                  Heads up, toasts will stack automatically
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-sm-12">
        <div class="card">
          <div class="card-header pb-0">
            <h4 class="title">Placement</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p class="mt-1">You can place toasts with custom CSS as you need them, put the positioning styles
                right on the <code>.toast</code>. or You can also get fancy with flexbox utilities to align toasts
                horizontally and/or vertically.
              </p>
              <div class="btn btn-outline-info placement mt-2">Toast Placement</div>
              <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
                <div class="toast-header">
                  <img src="{{ asset('images/logo/logo.png') }}" class="rounded mr-2" alt="Toast Image">
                  <strong class="mr-auto">Vue Admin</strong>
                  <small class="text-muted">2 seconds ago</small>
                  <button type="button" class="ml-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="toast-body">
                  Heads up, toasts will stack automatically
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- toast stacking and placement starts --}}
  </section>
  {{-- End of Bootstrap Toasts --}}

  {{-- Fixed Center Toast Starts --}}

  <div aria-live="polite" aria-atomic="true" class="toast-placement d-flex justify-content-center align-items-center"
    data-autohide="false">
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false">
      <div class="toast-header">
        <img src="{{ asset('images/logo/logo.png') }}" class="rounded mr-2" alt="Toast Image">
        <strong class="mr-auto">Vue Admin</strong>
        <small>1 mins ago</small>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="toast-body">
        Hello, world! This is a toast message.
      </div>
    </div>
  </div>
  {{-- Fixed Center Toast ends --}}
@endsection

@section('page-script')
        {{-- Page js files --}}
        <script src="{{ asset(mix('js/scripts/pages/bootstrap-toast.js')) }}"></script>
@endsection
