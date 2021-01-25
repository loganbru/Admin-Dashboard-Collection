@extends('layouts/contentLayoutMaster')

@section('title', 'Pagination')

@section('content')
{{-- Default Pagination Starts --}}
<section id="default-pagination">
  <div class="row match-height">
    <div class="col-md-6 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Basic</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>
              A basic pagination with active item
            </p>
            <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center mt-3">
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item active"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#">6</a></li>
                <li class="page-item"><a class="page-link" href="#">7</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Seprated</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>Pagination with seprated Next and Previous icons </p>
            <p>To create seprated pagination use <code>.prev-item</code> class for the first item and
              <code>.next-item</code> for the last item</p>

            <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center mt-2">
                <li class="page-item prev-item"><a class="page-link" href="#"></a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item active" aria-current="page"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#">6</a></li>
                <li class="page-item"><a class="page-link" href="#">7</a></li>
                <li class="page-item next-item"><a class="page-link" href="#"></a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">With icon and text</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>
              Pagination with icon and text
            </p>
            <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center mt-2">
                <li class="page-item prev"><a class="page-link" href="#">Prev</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item active"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item next"><a class="page-link" href="#">Next</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Only icons</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>Pagination with only icons</p>
            <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center mt-2">
                <li class="page-item prev"><a class="page-link" href="#"></a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item active" aria-current="page"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#">6</a></li>
                <li class="page-item"><a class="page-link" href="#">7</a></li>
                <li class="page-item next"><a class="page-link" href="#"></a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- Default Pagination Ends --}}

{{-- Themed Pagination Starts --}}
<section id="themed-pagination">
  <div class="row">
    <div class="col-md-6 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Success</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>Use class <code>.pagination-success</code> with <code>.pagination</code>
            </p>
            <nav aria-label="Page navigation example">
              <ul class="pagination pagination-success justify-content-center mt-2">
                <li class="page-item prev">
                  <a class="page-link" href="#" aria-label="Previous"></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item active"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#">6</a></li>
                <li class="page-item"><a class="page-link" href="#">7</a></li>
                <li class="page-item next">
                  <a class="page-link" href="#" aria-label="Next"></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Danger</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>Use class <code>.pagination-danger</code> with <code>.pagination</code>
            </p>
            <nav aria-label="Page navigation example">
              <ul class="pagination pagination-danger justify-content-center mt-2">
                <li class="page-item prev">
                  <a class="page-link" href="#" aria-label="Previous"></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item active"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#">6</a></li>
                <li class="page-item"><a class="page-link" href="#">7</a></li>
                <li class="page-item next">
                  <a class="page-link" href="#" aria-label="Next"></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Info</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>Use class <code>.pagination-info</code> with <code>.pagination</code>
            </p>
            <nav aria-label="Page navigation example">
              <ul class="pagination pagination-info justify-content-center mt-2">
                <li class="page-item prev">
                  <a class="page-link" href="#" aria-label="Previous"></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item active"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#">6</a></li>
                <li class="page-item"><a class="page-link" href="#">7</a></li>
                <li class="page-item next">
                  <a class="page-link" href="#" aria-label="Next"></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Warning</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>Use class <code>.pagination-warning</code> with <code>.pagination</code>
            </p>
            <nav aria-label="Page navigation example">
              <ul class="pagination pagination-warning justify-content-center mt-2">
                <li class="page-item prev">
                  <a class="page-link" href="#" aria-label="Previous"></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item active"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#">6</a></li>
                <li class="page-item"><a class="page-link" href="#">7</a></li>
                <li class="page-item next">
                  <a class="page-link" href="#" aria-label="Next"></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- Themed Pagination Ends --}}

{{-- Pagination Positions start --}}
<section id="pagination-positions">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Pagination Positions</h4>
        </div>
        <div class="card-content collapse show">
          <div class="card-body">
            <p>use classes <code>.justify-content-{direction}</code> with <code>.pagination</code> to align your
              pagination</p>
            <div class="row">
              <div class="col-xl-4 col-lg-12">
                <h5 class="text-left">Left Aligned</h5>
                <nav aria-label="Page navigation">
                  <ul class="pagination justify-content-start mt-2">
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item active"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                  </ul>
                </nav>
              </div>
              <div class="col-xl-4 col-lg-12">
                <h5 class="text-center">Center Aligned</h5>
                <nav aria-label="Page navigation">
                  <ul class="pagination justify-content-center mt-2">
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item active"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                  </ul>
                </nav>
              </div>
              <div class="col-xl-4 col-lg-12">
                <h5 class="text-right">Right Aligned</h5>
                <nav aria-label="Page navigation">
                  <ul class="pagination justify-content-end mt-2">
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item active"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- Pagination Positions end --}}

{{-- Pagination Sizes start --}}
<section id="pagination-sizes">
  <div class="row">
    <div class="col-12 mt-3 mb-1">
      <h4 class="text-uppercase">Pagination Sizes</h4>
      <p>Use class <code>.pagination-lg</code> for large size pagination &amp; use <code>.pagination-sm</code> for small
        size pagination. For Default size no classes required.</p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Pagination Sizes</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div class="row">
              <div class="col-xl-4 col-lg-12">
                <nav aria-label="Page navigation">
                  <ul class="pagination pagination-lg mb-1">
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item active"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                  </ul>
                </nav>
              </div>
              <div class="col-xl-4 col-lg-12">
                <nav aria-label="Page navigation">
                  <ul class="pagination mb-1">
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item active"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                  </ul>
                </nav>
              </div>
              <div class="col-xl-4 col-lg-12">
                <nav aria-label="Page navigation">
                  <ul class="pagination pagination-sm">
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item active"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- Pagination Sizes end --}}

{{-- Dynamic Pagination start --}}
<section id="dynamic-pagination">
  <div class="row">
    <div class="col-12 mt-3 mb-1">
      <h4 class="text-uppercase">Dynamic Pagination</h4>
      <p>We are using <strong>jQuery Pagination plugin</strong>. This jQuery plugin simplifies the usage of Bootstrap
        Pagintion. It uses appropriate classes: <code>.pagination</code>, <code>.active</code> and
        <code>.disabled</code>.</p>
    </div>
  </div>
  <div class="row match-height">
    <div class="col-lg-6 col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Default Pagination</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div id="page1-content" class="border-grey border-lighten-2 p-1 mb-1">You are on page 1</div>
            <div class="text-center">
              <ul class="pagination justify-content-center page1-links"></ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Default Pagination with last &amp; first</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div id="firstLast1-content" class="border-grey border-lighten-2 p-1 mb-1">You are on page 1</div>
            <div class="text-center">
              <ul class="pagination justify-content-center firstLast1-links"></ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Pagination drop you here after reload</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div class="alert alert-warning">
              <strong>Warning!</strong> Page will reload.
            </div>
            <div id="url1-content" class="border-grey border-lighten-2 p-1 mb-1">You are on page 1</div>
            <div class="text-center">
              <ul class="pagination justify-content-center url1-links"></ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Set Start Page Of Pagination</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div id="start-content" class="border-grey border-lighten-2 p-1 mb-1">Your start Page 5</div>
            <div class="text-center">
              <ul class="pagination justify-content-center start-links"></ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- Dynamic Pagination end --}}
@endsection
@section('vendor-script')
<!-- vendor js files -->
        <script src="{{ asset(mix('vendors/js/pagination/jquery.bootpag.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/pagination/jquery.twbsPagination.min.js')) }}"></script>
@endsection
@section('page-script')
        {{-- Page js files --}}
        <script src="{{ asset(mix('js/scripts/pagination/pagination.js')) }}"></script>
@endsection
