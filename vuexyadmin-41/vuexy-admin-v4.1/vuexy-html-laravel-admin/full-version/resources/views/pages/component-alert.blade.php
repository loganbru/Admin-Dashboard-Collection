@extends('layouts/contentLayoutMaster')

@section('title', 'Alerts')

@section('content')
{{-- Basic Alerts start --}}
  <section id="basic-alerts">
    <div class="row">
      <div class="col-xl-12 col-lg-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Default</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>
                Alerts are available for any length of text, as well as an
                optional dismiss button. Add
                <code>.alert.alert-{color}</code> classes for alert with all theme
                colors.
              </p>
              <div class="alert alert-primary mb-2" role="alert">
                <strong>Good Morning!</strong> Start your day with some alerts.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Basic Alerts end --}}

  {{-- Alerts with Title start --}}
  <section id="alerts-with-title">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">
              Title
            </h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>Add a title to the alert with the <code>.alert-heading</code></p>
              <div class="alert alert-warning" role="alert">
                <h4 class="alert-heading">Lorem ipsum dolor sit amet</h4>
                <p class="mb-0">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Ducimus, laborum!.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Alerts with Title end --}}

  {{-- Alert Colors start --}}
  <section id="alert-colors">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">
              Colors
            </h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>
                Alerts are available for any length of text, as well as an
                optional dismiss button. Add
                <code>.alert.alert-{color}</code> classes for alert with all theme
                colors.
              </p>
              <div class="alert alert-primary" role="alert">
                <h4 class="alert-heading">Primary</h4>
                <p class="mb-0">
                  Tootsie roll lollipop lollipop icing. Wafer cookie danish
                  macaroon. Liquorice fruitcake apple pie I love cupcake cupcake.
                </p>
              </div>
              <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Success</h4>
                <p class="mb-0">
                  Tootsie roll lollipop lollipop icing. Wafer cookie danish
                  macaroon. Liquorice fruitcake apple pie I love cupcake cupcake.
                </p>
              </div>
              <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Danger</h4>
                <p class="mb-0">
                  Tootsie roll lollipop lollipop icing. Wafer cookie danish
                  macaroon. Liquorice fruitcake apple pie I love cupcake cupcake.
                </p>
              </div>
              <div class="alert alert-warning" role="alert">
                <h4 class="alert-heading">Warning</h4>
                <p class="mb-0">
                  Tootsie roll lollipop lollipop icing. Wafer cookie danish
                  macaroon. Liquorice fruitcake apple pie I love cupcake cupcake.
                </p>
              </div>
              <div class="alert alert-dark" role="alert">
                <h4 class="alert-heading">Dark</h4>
                <p class="mb-0">
                  Tootsie roll lollipop lollipop icing. Wafer cookie danish
                  macaroon. Liquorice fruitcake apple pie I love cupcake cupcake.
                </p>
              </div>
              <div class="alert alert-info" role="alert">
                <h4 class="alert-heading">Info</h4>
                <p class="mb-0">
                  Tootsie roll lollipop lollipop icing. Wafer cookie danish
                  macaroon. Liquorice fruitcake apple pie I love cupcake cupcake.
                </p>
              </div>
              <div class="alert alert-light" role="alert">
                <h4 class="alert-heading">Light</h4>
                <p class="mb-0">
                  Tootsie roll lollipop lollipop icing. Wafer cookie danish
                  macaroon. Liquorice fruitcake apple pie I love cupcake cupcake.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Alert Colors End --}}

  {{--Closable Alerts start --}}
  <section id="alerts-closable">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Closable Alerts</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>
                Add a dismiss button and the
                <code>.alert-dismissible</code> class, which adds extra padding to
                the right of the alert and positions the
                <code>.close button</code>.
              </p>
              <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <p class="mb-0">
                  Chupa chups topping bonbon. Jelly-o toffee I love. Sweet I love
                  wafer I love wafer.
                </p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <p>
                You can also change the icon used for the close buton on the
                alerts
              </p>
              <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <p class="mb-0">
                  Chupa chups topping bonbon. Jelly-o toffee I love. Sweet I love
                  wafer I love wafer.
                </p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true"><i class="feather icon-x-circle"></i></span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{--Closable Alerts end --}}

  {{-- Alert With Icon start --}}
  <section id="alerts-with-icons">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Icon</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>
                Alert With Icon
              </p>
              <div class="alert alert-primary" role="alert">
                <i class="feather icon-star mr-1 align-middle"></i>
                <span>
                  Chupa chups topping bonbon. Jelly-o toffee I love. Sweet I love
                  wafer I love wafer.</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Alert With Icon end --}}

  {{-- Example Alert start --}}
  <section id="alert-example">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Example</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>
                An example would be to have an input and when a condition is met,
                show the alert. use class <code>.alert-validation</code> for your input and class
                <code>.alert-validation-msg</code> with your alert.
              </p>
              <form>
                <label for="numbers">Enter Only Numbers</label>
                <input id="numbers" class="form-control w-25 h-25 pl-1 alert-validation" type="text"
                  placeholder="0123456789" />
              </form>
              <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                <i class="feather icon-info mr-1 align-middle"></i>
                <span>the value is <strong>invalid</strong> you can only enter numbers</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Example Alert end --}}
  @endsection
