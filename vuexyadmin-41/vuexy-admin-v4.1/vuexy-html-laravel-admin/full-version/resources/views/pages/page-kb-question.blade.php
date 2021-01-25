@extends('layouts/contentLayoutMaster')

@section('title', 'Question')

@section('page-style')
        {{-- Page Css files --}}
        <link rel="stylesheet" href="{{ asset(mix('css/pages/knowledge-base.css')) }}">
@endsection
@section('content')
<!-- Knowledge base question Content  -->
<section id="knowledge-base-question">
  <div class="row">
      <div class="col-lg-3 col-md-5 col-12">
          <div class="card">
              <div class="card-body">
                  <h4>Related Questions</h4>
                  <a href="#" class="knowledge-base-question">
                      <ul class="list-group list-group-flush mt-1">
                          <li class="list-group-item">Cake icing gummi bears?</li>
                          <li class="list-group-item">Jelly soufflé apple pie?</li>
                          <li class="list-group-item">Soufflé apple pie ice cream cotton?</li>
                          <li class="list-group-item">Powder wafer brownie?</li>
                          <li class="list-group-item">Toffee donut dragée cotton candy?</li>
                          <li class="list-group-item">Soufflé chupa chups chocolate bar?</li>
                      </ul>
                  </a>
              </div>
          </div>
      </div>
      <div class="col-lg-9 col-md-7 col-12">
          <div class="card">
              <div class="card-body">
                  <div class="title mb-2">
                      <h1>Dessert halvah carrot cake sweet?</h1>
                      <p>Last updated on 10 Dec 2018</p>
                  </div>
                  <p>
                      Pastry jelly chocolate bar caramels fruitcake gummies marshmallow lemon drops. Powder cupcake topping muffin carrot cake croissant soufflé sugar plum sweet roll. Cotton candy ice cream gummies biscuit bonbon biscuit. Icing pastry bonbon. Sweet roll chocolate cake liquorice jelly beans caramels jelly cookie caramels. Pastry candy canes cake powder lollipop tootsie roll sugar plum. Cake cotton candy dragée danish. Muffin croissant sweet roll candy wafer marzipan cheesecake. Carrot cake toffee gummi bears gingerbread donut biscuit. Donut chupa chups oat cake cheesecake apple pie gummies marzipan icing cake. Macaroon jelly beans gummi bears carrot cake tiramisu liquorice. Sweet tootsie roll cookie marzipan brownie icing cookie jelly tart. Lollipop cookie tootsie roll candy canes.
                  </p>
                  <img src="{{ asset('images/pages/kb-article.jpg') }}" class="img-fluid rounded-sm mb-1 w-100" alt="artilcle-img">
                  <p>
                      Candy canes oat cake biscuit halvah ice cream. Marshmallow icing topping toffee caramels dessert carrot cake. Liquorice soufflé brownie sugar plum dessert cotton candy. Cupcake halvah topping oat cake soufflé pastry dragée pudding cotton candy.
                  </p>
                  <h5 class="mb-1">Topics:</h5>
                  <ul class="article-question p-0 list-unstyled">
                      <li><i class="feather icon-chevrons-right"></i> <span>Pastry jelly chocolate bar caramels</span></li>
                      <li><i class="feather icon-chevrons-right"></i><span>Donut chupa chups oat cake</span></li>
                      <li><i class="feather icon-chevrons-right"></i><span>Marshmallow icing topping toffee caramels dessert carrot cake</span></li>
                  </ul>
                  <p class="mt-2">
                      Chocolate cake powder I love jelly beans lemon drops candy fruitcake. Sesame snaps sugar plum chocolate candy canes muffin. Wafer pastry topping croissant pudding dessert I love. Bonbon apple pie fruitcake candy canes I love. Lollipop sweet gingerbread I love I love dessert. I love halvah marshmallow pie jelly beans macaroon candy. Bonbon ice cream lollipop pie fruitcake oat cake. Topping marshmallow I love sesame snaps dragée. I love sesame snaps jelly. Chocolate sesame snaps jelly I love I love powder jelly-o.
                  </p>
                  <div class="d-flex justify-content-between mt-2">
                      <a href="#">
                          <i class="feather icon-chevrons-left"></i>
                          <span>Previous Article</span>
                      </a>
                      <a href="#">
                          <span>Next Article</span>
                          <i class="feather icon-chevrons-right"></i>
                      </a>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- Knowledge base question Content ends -->
@endsection
