
@extends('layouts/contentLayoutMaster')

@section('title', 'Bootstrap Tables')

@section('content')
<!-- Basic Tables start -->
<div class="row" id="basic-table">
  <div class="col-12">
      <div class="card">
          <div class="card-header">
              <h4 class="card-title">Basic Tables</h4>
          </div>
          <div class="card-content">
              <div class="card-body">
                  <p class="card-text">Using the most basic table Leanne Grahamup, here’s how <code>.table</code>-based tables look in Bootstrap. You can use any example of below table for your table and it can be use with any type of bootstrap tables.</p>
                  <p><span class="text-bold-600">Example 1:</span> Table with outer spacing</p>
                  <!-- Table with outer spacing -->
                  <div class="table-responsive">
                      <table class="table">
                          <thead>
                              <tr>
                                  <th>ID</th>
                                  <th>Name</th>
                                  <th>Email</th>
                                  <th>User ID</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <th scope="row">1</th>
                                  <td>Leanne Graham</td>
                                  <td>sincere@april.biz</td>
                                  <td>@mdo</td>
                              </tr>
                              <tr>
                                  <th scope="row">2</th>
                                  <td>Ervin Howell</td>
                                  <td>shanna@melissa.tv</td>
                                  <td>@fat</td>
                              </tr>
                              <tr>
                                  <th scope="row">3</th>
                                  <td>Clementine Bauch</td>
                                  <td>nathan@yesenia.net</td>
                                  <td>@twitter</td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
              <p class="px-2"><span class="text-bold-600">Example 2:</span> Minimal Table with no outer spacing.</p>

              <!-- Table with no outer spacing -->
              <div class="table-responsive">
                  <table class="table mb-0">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>User ID</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <th scope="row">1</th>
                              <td>Leanne Graham</td>
                              <td>sincere@april.biz</td>
                              <td>@mdo</td>
                          </tr>
                          <tr>
                              <th scope="row">2</th>
                              <td>Ervin Howell</td>
                              <td>shanna@melissa.tv</td>
                              <td>@fat</td>
                          </tr>
                          <tr>
                              <th scope="row">3</th>
                              <td>Clementine Bauch</td>
                              <td>nathan@yesenia.net</td>
                              <td>@twitter</td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Basic Tables end -->

<!--  Inverse table start -->
<div class="row" id="table-inverse">
  <div class="col-12">
      <div class="card">
          <div class="card-header">
              <h4 class="card-title">Inverse table</h4>
          </div>
          <div class="card-content">
              <div class="card-body">
                  <p>You can also invert the colors—with light text on dark backgrounds—with <code class="highlighter-rouge">.table-inverse</code>.</p>
              </div>
              <div class="table-responsive">
                  <table class="table table-inverse">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>User ID</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <th scope="row">1</th>
                              <td>Leanne Graham</td>
                              <td>sincere@april.biz</td>
                              <td>@mdo</td>
                          </tr>
                          <tr>
                              <th scope="row">2</th>
                              <td>Ervin Howell</td>
                              <td>shanna@melissa.tv</td>
                              <td>@fat</td>
                          </tr>
                          <tr>
                              <th scope="row">3</th>
                              <td>Clementine Bauch</td>
                              <td>nathan@yesenia.net</td>
                              <td>@twitter</td>
                          </tr>
                      </tbody>
                  </table>
              </div>

              <!-- inverse dark table -->
              <p class="p-2">You can also invert the colors—with light text on dark backgrounds—with <code class="highlighter-rouge">.table-dark</code>.</p>
              <div class="table-responsive">
                  <table class="table table-dark mb-0">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>User ID</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <th scope="row">1</th>
                              <td>Leanne Graham</td>
                              <td>sincere@april.biz</td>
                              <td>@mdo</td>
                          </tr>
                          <tr>
                              <th scope="row">2</th>
                              <td>Ervin Howell</td>
                              <td>shanna@melissa.tv</td>
                              <td>@fat</td>
                          </tr>
                          <tr>
                              <th scope="row">3</th>
                              <td>Clementine Bauch</td>
                              <td>nathan@yesenia.net</td>
                              <td>@twitter</td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Inverse table end -->


<!-- Table head options start -->
<div class="row" id="table-head">
  <div class="col-12">
      <div class="card">
          <div class="card-header">
              <h4 class="card-title">Table head options</h4>
          </div>
          <div class="card-content">
              <div class="card-body">
                  <p>Similar to tables and dark tables, use the modifier classes <code class="highlighter-rouge">.thead-light</code> or <code class="highlighter-rouge">.thead-dark</code> to make <code class="highlighter-rouge">&lt;thead&gt;</code>s appear light or dark gray.</p>
              </div>
              <div class="table-responsive">
                  <table class="table mb-0">
                      <thead class="thead-dark">
                          <tr>
                              <th scope="col">ID</th>
                              <th scope="col">Name</th>
                              <th scope="col">Email</th>
                              <th scope="col">User ID</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Leanne Graham</td>
                            <td>sincere@april.biz</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Ervin Howell</td>
                            <td>shanna@melissa.tv</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Clementine Bauch</td>
                            <td>nathan@yesenia.net</td>
                            <td>@twitter</td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Table head options end -->

<!-- Table Hover Animation start -->
<div class="row" id="table-hover-animation">
  <div class="col-12">
      <div class="card">
          <div class="card-header">
              <h4 class="card-title">Table Hover Animation</h4>
          </div>
          <div class="card-content">
              <div class="card-body">
                  <p>Add <code>.table-hover-animation</code> to enable a hover stat with animation on table rows within a <code class="highlighter-rouge">&lt;tbody&gt;</code>.</p>
                  <div class="table-responsive">
                      <table class="table table-hover-animation mb-0">
                          <thead>
                              <tr>
                                  <th scope="col">ID</th>
                                  <th scope="col">Name</th>
                                  <th scope="col">Email</th>
                                  <th scope="col">User ID</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Leanne Graham</td>
                                <td>sincere@april.biz</td>
                                <td>@mdo</td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Ervin Howell</td>
                                <td>shanna@melissa.tv</td>
                                <td>@fat</td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td>Clementine Bauch</td>
                                <td>nathan@yesenia.net</td>
                                <td>@twitter</td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Table head options end -->

<!-- Striped rows start -->
<div class="row" id="table-striped">
  <div class="col-12">
      <div class="card">
          <div class="card-header">
              <h4 class="card-title">Striped rows</h4>
          </div>
          <div class="card-content">
              <div class="card-body">
                  <p class="card-text">Use <code class="highlighter-rouge">.table-striped</code> to add zebra-striping to any table row within the <code class="highlighter-rouge">&lt;tbody&gt;</code>. This styling doesn't work in IE8 and below as <code>:nth-child</code> CSS selector isn't supported.</p>
              </div>
              <div class="table-responsive">
                  <table class="table table-striped mb-0">
                      <thead>
                          <tr>
                              <th scope="col">ID</th>
                              <th scope="col">Name</th>
                              <th scope="col">Email</th>
                              <th scope="col">User ID</th>
                          </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Leanne Graham</td>
                        <td>sincere@april.biz</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Ervin Howell</td>
                        <td>shanna@melissa.tv</td>
                        <td>@fat</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Clementine Bauch</td>
                        <td>nathan@yesenia.net</td>
                        <td>@twitter</td>
                      </tr>
                    </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Striped rows end -->

<!-- Striped rows with inverse dark table start -->
<div class="row" id="table-striped-dark">
  <div class="col-12">
      <div class="card">
          <div class="card-header">
              <h4 class="card-title">Striped rows with inverse dark</h4>
          </div>
          <div class="card-content">
              <div class="card-body">
                  <p class="card-text">Use <code>.table-dark</code> with <code>.table-striped</code> to add zebra-striping to any inverse table row within the <code>&lt;tbody&gt;</code>. This styling doesn't work in IE8 and below as <code>:nth-child</code> CSS selector isn't supported.</p>
              </div>
              <div class="table-responsive">
                  <table class="table table-striped table-dark mb-0">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>User ID</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <th scope="row">1</th>
                              <td>Leanne Graham</td>
                              <td>sincere@april.biz</td>
                              <td>@mdo</td>
                          </tr>
                          <tr>
                              <th scope="row">2</th>
                              <td>Ervin Howell</td>
                              <td>shanna@melissa.tv</td>
                              <td>@fat</td>
                          </tr>
                          <tr>
                              <th scope="row">3</th>
                              <td>Clementine Bauch</td>
                              <td>nathan@yesenia.net</td>
                              <td>@twitter</td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Striped rows with inverse dark table end -->

<!-- Bordered table start -->
<div class="row" id="table-bordered">
  <div class="col-12">
      <div class="card">
          <div class="card-header">
              <h4 class="card-title">Bordered table</h4>
          </div>
          <div class="card-content">
              <div class="card-body">
                  <p class="card-text">Add <code>.table-bordered</code> for borders on all sides of the table and cells. For Inverse Dark Table, add <code>.table-dark</code> along with <code>.table-bordered</code>.</p>
              </div>
              <div class="table-responsive">
                  <table class="table table-bordered mb-0">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>User ID</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <th scope="row">1</th>
                              <td>Leanne Graham</td>
                              <td>sincere@april.biz</td>
                              <td>@mdo</td>
                          </tr>
                          <tr>
                              <th scope="row">2</th>
                              <td>Leanne Graham</td>
                              <td>sincere@april.biz</td>
                              <td>@TwBootstrap</td>
                          </tr>
                          <tr>
                              <th scope="row">3</th>
                              <td>Ervin Howell</td>
                              <td>shanna@melissa.tv</td>
                              <td>@fat</td>
                          </tr>
                          <tr>
                              <th scope="row">4</th>
                              <td>Clementine Bauch</td>
                              <td>nathan@yesenia.net</td>
                              <td>@twitter</td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Bordered table end -->

<!-- Borderless table start -->
<div class="row" id="table-borderless">
  <div class="col-12">
      <div class="card">
          <div class="card-header">
              <h4 class="card-title">Borderless Table</h4>
          </div>
          <div class="card-content">
              <div class="card-body">
                  <p class="card-text">Add <code>.table-borderless</code> for a table without borders. It can also be used on dark tables.</p>
              </div>
              <div class="table-responsive">
                  <table class="table table-borderless mb-0">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>User ID</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <th scope="row">1</th>
                              <td>Leanne Graham</td>
                              <td>sincere@april.biz</td>
                              <td>@mdo</td>
                          </tr>
                          <tr>
                              <th scope="row">2</th>
                              <td>Leanne Graham</td>
                              <td>sincere@april.biz</td>
                              <td>@TwBootstrap</td>
                          </tr>
                          <tr>
                              <th scope="row">3</th>
                              <td>Ervin Howell</td>
                              <td>shanna@melissa.tv</td>
                              <td>@fat</td>
                          </tr>
                          <tr>
                              <th scope="row">4</th>
                              <td>Clementine Bauch</td>
                              <td>nathan@yesenia.net</td>
                              <td>@twitter</td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Borderless table end -->

<!-- Hoverable rows start -->
<div class="row" id="table-hover-row">
  <div class="col-12">
      <div class="card">
          <div class="card-header">
              <h4 class="card-title">Hoverable rows</h4>
          </div>
          <div class="card-content">
              <div class="card-body">
                  <p>Add <code class="highlighter-rouge">.table-hover</code> to enable a hover state on table rows within a <code class="highlighter-rouge">&lt;tbody&gt;</code>.</p>
              </div>
              <div class="table-responsive">
                  <table class="table table-hover mb-0">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>User ID</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <th scope="row">1</th>
                              <td>Leanne Graham</td>
                              <td>sincere@april.biz</td>
                              <td>@mdo</td>
                          </tr>
                          <tr>
                              <th scope="row">2</th>
                              <td>Ervin Howell</td>
                              <td>shanna@melissa.tv</td>
                              <td>@fat</td>
                          </tr>
                          <tr>
                              <th scope="row">3</th>
                              <td>Clementine Bauch</td>
                              <td>nathan@yesenia.net</td>
                              <td>@twitter</td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Hoverable rows end -->

<!-- Contextual classes start -->
<div class="row" id="table-contexual">
  <div class="col-12">
      <div class="card">
          <div class="card-header">
              <h4 class="card-title">Contextual classes</h4>
          </div>
          <div class="card-content">
              <div class="card-body">
                  <p>Use contextual classes to color table rows or individual cells. Read full documnetation <a href = "https://getbootstrap.com/docs/4.3/content/tables/IDcontextual-classes" target="_blank">here.</a></p>
              </div>
              <div class="table-responsive">
                  <table class="table mb-0">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>User ID</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr class="table-active">
                              <th scope="row">1</th>
                              <td>Leanne Graham</td>
                              <td>sincere@april.biz</td>
                              <td>@mdo</td>
                          </tr>
                          <tr>
                              <th scope="row">2</th>
                              <td>Ervin Howell</td>
                              <td>shanna@melissa.tv</td>
                              <td>@fat</td>
                          </tr>
                          <tr class="table-primary">
                              <th scope="row">3</th>
                              <td>Clementine Bauch</td>
                              <td>Graham</td>
                              <td>@twitter</td>
                          </tr>
                          <tr class="table-success">
                              <th scope="row">4</th>
                              <td>Ervin</td>
                              <td>nathan@yesenia.net</td>
                              <td>@gmail</td>
                          </tr>
                          <tr class="table-warning">
                              <th scope="row">5</th>
                              <td>Clementine Bauch</td>
                              <td>nathan@yesenia.net</td>
                              <td>@messanger</td>
                          </tr>
                          <tr class="table-danger">
                              <th scope="row">6</th>
                              <td>Patricia Lebsack</td>
                              <td>julianne.OConner@kory.org</td>
                              <td>@twitter</td>
                          </tr>
                          <tr class="table-info">
                              <th scope="row">7</th>
                              <td>Chelsey Dietrich</td>
                              <td>lucio_Hettinger@annie.ca</td>
                              <td>@messanger</td>
                          </tr>
                          <tr class="table-light">
                              <th scope="row">8</th>
                              <td>Kurtis Weissnat</td>
                              <td>telly.Hoeger@billy.biz</td>
                              <td>@fat</td>
                          </tr>
                          <tr class="table-dark">
                              <th scope="row">9</th>
                              <td>Glenna Reichert</td>
                              <td>chaim_McDermott@dana.io</td>
                              <td>@mdo</td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Contextual classes end -->

<!-- Responsive tables start -->
<div class="row" id="table-responsive">
  <div class="col-12">
      <div class="card">
          <div class="card-header">
              <h4 class="card-title">Responsive tables</h4>
          </div>
          <div class="card-content">
              <div class="card-body">
                  <p>Responsive tables allow tables to be scrolled horizontally with ease. Make any table responsive across all viewports by adding <code class="highlighter-rouge">.table-responsive</code> class on <code class="highlighter-rouge">.table</code>. Or, pick a maximum breakpoint with which to have a responsive table up to by adding <code class="highlighter-rouge"> .table-responsive{-sm|-md|-lg|-xl}</code>. Read full documnetation <a href = "https://getbootstrap.com/docs/4.3/content/tables/#responsive-tables" target="_blank">here.</a></p>
                  <div class="alert alert-info mt-1 p-1">
                      <h4 class="warning">Vertical clipping/truncation</h4>
                      <p>Responsive tables make use of <code class="highlighter-rouge">overflow-y: hidden</code>, which clips off any content that goes beyond the bottom or top edges of the table. In particular, this can clip off dropdown menus and other third-party widgets.</p>
                  </div>
                  <h5 class="card-title mt-2">Always responsive</h5>
              </div>
              <table class="table table-responsive mb-0">
                  <thead>
                      <tr>
                          <th scope="col">#</th>
                          <th scope="col">Heading 1</th>
                          <th scope="col">Heading 2</th>
                          <th scope="col">Heading 3</th>
                          <th scope="col">Heading 4</th>
                          <th scope="col">Heading 5</th>
                          <th scope="col">Heading 6</th>
                          <th scope="col">Heading 7</th>
                          <th scope="col">Heading 8</th>
                          <th scope="col">Heading 9</th>
                          <th scope="col">Heading 10</th>
                          <th scope="col">Heading 11</th>
                          <th scope="col">Heading 12</th>
                          <th scope="col">Heading 13</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <th scope="row">1</th>
                          <td>Table cell</td>
                          <td>Table cell</td>
                          <td>Table cell</td>
                          <td>Table cell</td>
                          <td>Table cell</td>
                          <td>Table cell</td>
                          <td>Table cell</td>
                          <td>Table cell</td>
                          <td>Table cell</td>
                          <td>Table cell</td>
                          <td>Table cell</td>
                          <td>Table cell</td>
                          <td>Table cell</td>
                      </tr>
                      <tr>
                          <th scope="row">2</th>
                          <td>Table cell</td>
                          <td>Table cell</td>
                          <td>Table cell</td>
                          <td>Table cell</td>
                          <td>Table cell</td>
                          <td>Table cell</td>
                          <td>Table cell</td>
                          <td>Table cell</td>
                          <td>Table cell</td>
                          <td>Table cell</td>
                          <td>Table cell</td>
                          <td>Table cell</td>
                          <td>Table cell</td>
                      </tr>
                      <tr>
                          <th scope="row">3</th>
                          <td>Table cell</td>
                          <td>Table cell</td>
                          <td>Table cell</td>
                          <td>Table cell</td>
                          <td>Table cell</td>
                          <td>Table cell</td>
                          <td>Table cell</td>
                          <td>Table cell</td>
                          <td>Table cell</td>
                          <td>Table cell</td>
                          <td>Table cell</td>
                          <td>Table cell</td>
                          <td>Table cell</td>
                      </tr>
                  </tbody>
              </table>
          </div>
      </div>
  </div>
</div>
<!-- Responsive tables end -->
@endsection
