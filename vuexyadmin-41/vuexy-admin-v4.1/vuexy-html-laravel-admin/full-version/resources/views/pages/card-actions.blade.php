@extends('layouts/contentLayoutMaster')

@section('title', 'Card Actions')

@section('content')
<!-- card actions section start -->
<section id="card-actions">
<!-- Info table about action starts -->
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Card Actions </h4>
            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
              <ul class="list-inline mb-0">
                <li><a data-action="collapse"><i class="feather icon-chevron-down"></i></a></li>
                <li><a data-action="expand"><i class="feather icon-maximize"></i></a></li>
                <li><a data-action="reload"><i class="feather icon-rotate-cw"></i></a></li>
                <li><a data-action="close"><i class="feather icon-x"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="card-content collapse show">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-12">
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Action</th>
                          <th>Icon</th>
                          <th>Details</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Collapse</td>
                          <td class="text-center">
                            <i class="feather icon-chevron-down"></i>
                          </td>
                          <td> Collapse card content using collapse action.</td>
                        </tr>
                        <tr>
                          <td>Expand Card</td>
                          <td class="text-center">
                            <i class="feather icon-maximize"></i>
                          </td>
                          <td>Maximize your card using expand action</td>
                        </tr>
                        <tr>
                          <td>Refresh Content</td>
                          <td class="text-center">
                            <i class="feather icon-rotate-cw"></i>
                          </td>
                          <td>Refresh your card content using refresh action.</td>
                        </tr>
                        <tr>
                          <td>Remove Card</td>
                          <td class="text-center">
                            <i class="feather icon-x"></i>
                          </td>
                          <td> Remove card from page using remove card action</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Info table about action Ends -->

    <!-- Collapsible and Refresh Action starts -->
    <div class="row">
      <div class="col-md-6 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Collapsible </h4>
            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
              <ul class="list-inline mb-0">
                <li><a data-action="collapse"><i class="feather icon-chevron-down"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="card-content collapse show">
            <div class="card-body">
              <p>
                You can create a collapsible content by by adding <code>[data-action="collapse"]</code> and wrapping it up
                with <code>.heading-elements</code> in <code>.card-header</code>
              </p>
              <p>
                Click on <i class="feather icon-chevron-down align-middle"></i> to see card collapse in action
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Refresh Content</h4>
            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
              <ul class="list-inline mb-0">
                <li><a data-action="reload"><i class="feather icon-rotate-cw"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>
                To create a card with refresh action use <code>[data-action="reload"]</code> inside of
                <code>.heading-element</code>
              </p>
              <p>
                Click on <i class="feather icon-rotate-cw align-middle"></i> icon to see refresh card content in action.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Collapsible and Refresh Action Ends -->

    <!-- Expand And Remove Actions Starts -->
    <div class="row">
      <div class="col-md-6 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Remove Card</h4>
            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
              <ul class="list-inline mb-0">
                <li><a data-action="close"><i class="feather icon-x"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="card-content collapse show">
            <div class="card-body">
              <p>
                You can create a closeable card by using <code>[data-action="close"]</code> inside
                <code>.heading-element</code>
              </p>
              <p>
                Click on <i class="feather icon-x align-middle"></i> icon to see closeable card in action.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Expand Card</h4>
            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
              <ul class="list-inline mb-0">
                <li><a data-action="expand"><i class="feather icon-maximize"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="card-content collapse show">
            <div class="card-body">
              <p>
                Use <code>[data-action="expand"]</code> insdie of <code>.heading-elements</code> to maximize your card.
              </p>
              <p>
                Click on <i class="feather icon-maximize align-middle"></i> icon to see close card in action.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Expand And Remove Actions Ends -->

  </section>
<!-- // card-actions section end -->
@endsection
