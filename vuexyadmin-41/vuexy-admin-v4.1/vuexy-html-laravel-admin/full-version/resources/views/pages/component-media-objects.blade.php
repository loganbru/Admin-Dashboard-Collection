@extends('layouts/contentLayoutMaster')

@section('title', 'Media Objects')

@section('content')
{{-- Default Media Object start --}}
<section id="basic-media-object">
    <div class="row match-height">
      <div class="col-xl-6 col-lg-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Left Aligned Media Objects</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>
                Wrap your <code>&lt;img&gt;</code> tag inside of <code>.media</code> class to align your image to left.
                you don't have to add any extra classes to to align your text to left.
              </p>
              <div class="media-list">
                <div class="media">
                  <a class="media-left" href="#">
                    <img src="{{ asset('images/portrait/small/avatar-s-3.jpg') }}" alt="Generic placeholder image"
                      height="64" width="64" />
                  </a>
                  <div class="media-body">
                    <h4 class="media-heading">Cookie candy</h4>
                    Cookie candy dragée marzipan gingerbread pie pudding. Brownie fruitcake wafer bonbon gummi bears apple
                    pie. Brownie lemon drops chocolate cake donut croissant cotton candy.
                  </div>
                </div>
                <div class="media">
                  <a class="media-left" href="#">
                    <img src="{{ asset('images/portrait/small/avatar-s-6.jpg') }}" alt="Generic placeholder image"
                      height="64" width="64" />
                  </a>
                  <div class="media-body">
                    <h4 class="media-heading">Tootsie roll dessert </h4>
                    Tootsie roll dessert tart candy canes ice cream gingerbread cookie. Jelly jelly-o bear claw bear claw
                    halvah. Biscuit icing pastry tootsie roll gingerbread croissant chupa chups.
                  </div>
                </div>
                <div class="media">
                  <a class="media-left" href="#">
                    <img src="{{ asset('images/portrait/small/avatar-s-1.jpg') }}" alt="Generic placeholder image"
                      height="64" width="64" />
                  </a>
                  <div class="media-body">
                    <h4 class="media-heading">Tootsie roll dessert </h4>
                    Tootsie roll dessert tart candy canes ice cream gingerbread cookie. Jelly jelly-o bear claw bear claw
                    halvah. Biscuit icing pastry tootsie roll gingerbread croissant chupa chups.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-lg-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Right Aligned Media With Round Images</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>
                You class <code>.rounded-circle</code> with your <code>&lt;img&gt;</code> tag to shape image as a circle
                and wrap your <code>&lt;img&gt;</code> inside of <code>.media-right</code> class. use class
                <code>.text-right</code> with <code>.media-body</code> for right aligned text
              </p>
              <div class="media-list">
                <div class="media">
                  <div class="media-body text-right">
                    <h4 class="media-heading">Oat cake </h4>
                    Oat cake topping oat cake jelly soufflé donut jelly-o tootsie roll. Candy sweet cake. Tiramisu cookie
                    toffee donut. Chocolate pie croissant gummi bears muffin dessert chocolate.
                  </div>
                  <a class="media-right" href="#">
                    <img class="media-object rounded-circle"
                      src="{{ asset('images/portrait/small/avatar-s-10.jpg') }}" alt="Generic placeholder image"
                      height="64" width="64" />
                  </a>
                </div>
                <div class="media">
                  <div class="media-body text-right">
                    <h4 class="media-heading">Jelly chocolate cake</h4>
                    Jelly chocolate cake lemon drops halvah dragée caramels jelly-o biscuit. Fruitcake jelly beans
                    marzipan sesame snaps.Jelly beans cake chocolate cake gummi bears lollipop.
                  </div>
                  <a class="media-right" href="#">
                    <img class="media-object rounded-circle"
                      src="{{ asset('images/portrait/small/avatar-s-7.jpg') }}" alt="Generic placeholder image"
                      height="64" width="64" />
                  </a>
                </div>
                <div class="media">
                  <div class="media-body text-right">
                    <h4 class="media-heading">Pudding marshmallow</h4>
                    Pudding marshmallow cheesecake. Chocolate cake apple pie jelly-o bear claw ice cream sugar plum
                    biscuit. Lemon drops brownie biscuit jelly-o biscuit gummies.
                  </div>
                  <a class="media-right" href="#">
                    <img class="media-object rounded-circle"
                      src="{{ asset('images/portrait/small/avatar-s-2.jpg') }}" alt="Generic placeholder image"
                      height="64" width="64" />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Default Media Object end --}}

  {{-- Bordered Media Object start --}}
  <section id="bordered-media-object">
    <div class="row match-height">
      <div class="col-xl-6 col-lg-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Left Aligned Media Bordered</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>Wrap media list using <code>.media-bordered</code> class for bordered Media Object.</p>
              <div class="media-list media-bordered">
                <div class="media">
                  <a class="media-left" href="#">
                    <img src="{{ asset('images/portrait/small/avatar-s-23.jpg') }}" alt="Generic placeholder image"
                      height="64" width="64" />
                  </a>
                  <div class="media-body">
                    <h4 class="media-heading">Cookie candy</h4>
                    Cookie candy dragée marzipan gingerbread pie pudding. Brownie fruitcake wafer bonbon gummi bears apple
                    pie. Brownie lemon drops chocolate cake donut croissant cotton candy.
                  </div>
                </div>
                <div class="media">
                  <a class="media-left" href="#">
                    <img src="{{ asset('images/portrait/small/avatar-s-16.jpg') }}" alt="Generic placeholder image"
                      height="64" width="64" />
                  </a>
                  <div class="media-body">
                    <h4 class="media-heading">Tootsie roll dessert </h4>
                    Tootsie roll dessert tart candy canes ice cream gingerbread cookie. Jelly jelly-o bear claw bear claw
                    halvah. Biscuit icing pastry tootsie roll gingerbread croissant chupa chups.
                  </div>
                </div>
                <div class="media">
                  <a class="media-left" href="#">
                    <img src="{{ asset('images/portrait/small/avatar-s-15.jpg') }}" alt="Generic placeholder image"
                      height="64" width="64" />
                  </a>
                  <div class="media-body">
                    <h4 class="media-heading">Lemon drops ice cream</h4>
                    Lemon drops ice cream chocolate cake marzipan ice cream. Gummi bears cotton candy cheesecake tootsie
                    roll. Candy sweet cake. Tiramisu cookie toffee donut.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-lg-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Bordered Media</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>Wrap media list using <code>.media-bordered</code> class for bordered Media Object.</p>
              <div class="media-list media-bordered">
                <div class="media">
                  <div class="media-body text-right">
                    <h4 class="media-heading">Chupa chups candy</h4>
                    Oat cake topping oat cake jelly soufflé donut jelly-o tootsie roll. Candy sweet cake. Tiramisu cookie
                    toffee donut. Chocolate pie croissant gummi bears muffin dessert chocolate.
                  </div>
                  <a class="media-right" href="#">
                    <img class="rounded-circle" src="{{ asset('images/portrait/small/avatar-s-9.jpg') }}"
                      alt="Generic placeholder image" height="64" width="64" />
                  </a>
                </div>
                <div class="media">
                  <div class="media-body text-right">
                    <h4 class="media-heading">Chocolate pudding</h4>
                    Jelly chocolate cake lemon drops halvah dragée caramels jelly-o biscuit. Fruitcake jelly beans
                    marzipan sesame snaps.Jelly beans cake chocolate cake gummi bears lollipop.
                  </div>
                  <a class="media-right" href="#">
                    <img class="rounded-circle" src="{{ asset('images/portrait/small/avatar-s-14.jpg') }}"
                      alt="Generic placeholder image" height="64" width="64" />
                  </a>
                </div>
                <div class="media">
                  <div class="media-body text-right">
                    <h4 class="media-heading">Cotton candy jelly</h4>
                    Pudding marshmallow cheesecake. Chocolate cake apple pie jelly-o bear claw ice cream sugar plum
                    biscuit. Lemon drops brownie biscuit jelly-o biscuit gummies.
                  </div>
                  <a class="media-right" href="#">
                    <img class="rounded-circle" src="{{ asset('images/portrait/small/avatar-s-21.jpg') }}"
                      alt="Generic placeholder image" height="64" width="64" />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Bordered Media Object end --}}

  {{-- Nested Media List start --}}
  <section id="nested-media-list">
    <div class="row match-height">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Nested Media</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <div class="media">
                <img src="{{ asset('images/portrait/small/avatar-s-12.jpg') }}" class="mr-1" alt="img placeholder"
                  height="64" width="64">
                <div class="media-body">
                  <h5 class="mt-0">Media heading</h5>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                  odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                  fringilla. Donec lacinia congue felis in faucibus.

                  <div class="media mt-3">
                    <a class="mr-1" href="#">
                      <img src="{{ asset('images/portrait/small/avatar-s-13.jpg') }}" alt="img placeholder"
                        height="64" width="64">
                    </a>
                    <div class="media-body">
                      <h5 class="mt-0">Media heading</h5>
                      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras
                      purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
                      vulputate fringilla. Donec lacinia congue felis in faucibus.
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
  {{-- Nested Media List end --}}

  {{-- Media Alignment start --}}
  <section id="media-alignment">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Media Aligned Left</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>The images or other media can be aligned top, middle, or bottom. The default is top aligned.</p>
              <p>For left align, use class <code>.mr-3</code>, For Right align, use class <code>.media-right</code>.</p>
              <p>Now, for vertical align, Top is default alignment. For Middle alignment, use
                <code>.align-self-center</code>
                and For Bottom alignment, use <code>.align-self-end</code> with left or right aligned class.</p>
              <div class="media-list media-bordered">
                <div class="media">
                  <a class="align-self-start media-left" href="#">
                    <img src="{{ asset('images/portrait/small/avatar-s-4.jpg') }}" alt="Generic placeholder image"
                      height="64" width="64" />
                  </a>
                  <div class="media-body">
                    <h5 class="media-heading">Top Aligned Media</h5>
                    <p class="mb-0">
                      Chocolate bar apple pie lollipop pastry candy canes. Candy soufflé brownie toffee tootsie roll.
                      Brownie lemon drops chocolate cake donut croissant cotton candy ice cream.
                    </p>
                    <p class="mb-0">
                      Chocolate pudding jelly beans powder carrot cake pastry. Sweet candy dragée cake brownie cheesecake
                      jelly beans tart lemon drops. Liquorice cake fruitcake dragée sesame snaps candy canes biscuit
                      pastry.
                    </p>
                    <p class="mb-0">
                      Cookie caramels brownie carrot cake macaroon brownie pastry. Donut powder croissant tootsie roll
                      cake
                      cupcake. Cake tart icing jelly-o ice cream tootsie roll bear claw toffee brownie. Sugar plum danish
                      muffin gummi bears.
                    </p>
                    <p class="mb-0">
                      Bonbon chocolate bar candy canes sugar plum pie gingerbread wafer chupa chups gummi bears. Carrot
                      cake oat cake jujubes cookie. Marzipan topping jelly brownie bear claw. Bonbon gummies fruitcake
                      liquorice tart sesame snaps.
                    </p>
                  </div>
                </div>
                <div class="media">
                  <a class="media-left align-self-center" href="#">
                    <img src="{{ asset('images/portrait/small/avatar-s-1.jpg') }}" alt="Generic placeholder image"
                      height="64" width="64" />
                  </a>
                  <div class="media-body">
                    <h5 class="media-heading">Middle Aligned Media</h5>
                    <p class="mb-0">
                      Dragée topping chocolate dragée icing gingerbread. Ice cream jujubes pie sweet roll sweet roll
                      marshmallow powder. Cotton candy dessert apple pie chocolate cake dessert lemon drops topping
                      gingerbread biscuit.
                    </p>
                    <p class="mb-0">
                      Sugar plum tootsie roll sweet gummi bears soufflé cake gummies lollipop jelly beans. Gummies sugar
                      plum apple pie apple pie cake bear claw. Jelly beans gingerbread biscuit lollipop.
                    </p>
                    <p class="mb-0">
                      Topping halvah wafer croissant jelly tootsie roll. Candy jujubes gummi bears sweet roll dessert.
                      Apple
                      pie jelly gummies tiramisu macaroon tiramisu oat cake. Apple pie tiramisu cake chocolate cake
                      topping
                      danish sweet apple pie sugar plum.
                    </p>
                  </div>
                </div>
                <div class="media">
                  <a class="media-left align-self-end" href="#">
                    <img src="{{ asset('images/portrait/small/avatar-s-16.jpg') }}" alt="Generic placeholder image"
                      height="64" width="64" />
                  </a>
                  <div class="media-body">
                    <h5 class="media-heading">Bottom Aligned Media</h5>
                    <p class="mb-0">
                      Sweet sesame snaps dragée chocolate tiramisu cotton candy sweet roll bonbon dessert. Chocolate cake
                      tiramisu dragée. Carrot cake pudding marshmallow fruitcake carrot cake.
                    </p>
                    <p class="mb-0">
                      Cotton candy pastry chocolate bar. Apple pie sesame snaps macaroon muffin cookie toffee bonbon
                      gummies
                      candy canes. Soufflé chocolate bar soufflé tart fruitcake muffin. Macaroon sweet roll apple pie
                      jelly
                      beans powder pudding.
                    </p>
                    <p class="mb-0">
                      Brownie cupcake bonbon sweet lemon drops. Lollipop danish jelly beans cotton candy marshmallow
                      brownie. Brownie pastry tiramisu candy oat cake tiramisu halvah cookie tart. Cotton candy danish
                      gingerbread powder liquorice.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
{{-- Media Alignment end --}}
@endsection
