@extends('layouts/contentLayoutMaster')

@section('title', 'Collapse')

@section('content')
{{-- Collapse start --}}
<section id="collapsible">
    <div class="row">
      <div class="col-sm-12">
        <div class="card collapse-icon accordion-icon-rotate">
          <div class="card-header">
            <h4 class="card-title">Default</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>
                With basic collapse you can open multiple items at a time. to add
                bottom border use <code>.collapse-bordered</code> as a wrapper of collapse cards and
                for icons on the right of collapse use
                <code>.collapse-icon</code> <code>.accordion-icon-rotate</code>
              </p>
              <div class="default-collapse collapse-bordered">
                <div class="card collapse-header">
                  <div id="headingCollapse1" class="card-header" data-toggle="collapse" role="button" data-target="#collapse1"
                      aria-expanded="false" aria-controls="collapse1">
                    <span class="lead collapse-title">
                      Collapse Item 1
                    </span>
                  </div>
                  <div id="collapse1" role="tabpanel" aria-labelledby="headingCollapse1" class="collapse">
                    <div class="card-content">
                      <div class="card-body">
                        Pie dragée muffin. Donut cake liquorice marzipan carrot cake topping powder candy. Sugar plum
                        brownie brownie cotton candy.

                        Tootsie roll cotton candy pudding bonbon chocolate cake lemon drops candy. Jelly marshmallow
                        chocolate cake carrot cake bear claw ice cream chocolate. Fruitcake apple pie pudding jelly beans
                        pie candy canes candy canes jelly-o. Tiramisu brownie gummi bears soufflé dessert cake.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card collapse-header">
                  <div id="headingCollapse2" class="card-header collapse-header" data-toggle="collapse" role="button" data-target="#collapse2"
                      aria-expanded="false" aria-controls="collapse2">
                    <span class="lead collapse-title">
                      Collapse Item 2</span>
                  </div>
                  <div id="collapse2" role="tabpanel" aria-labelledby="headingCollapse2" class="collapse"
                    aria-expanded="false">
                    <div class="card-content">
                      <div class="card-body">

                        Jelly-o brownie marshmallow soufflé I love jelly beans oat cake. I love gummies chocolate bar
                        marshmallow sugar plum. Pudding carrot cake sweet roll marzipan I love jujubes. Sweet roll tart
                        sugar plum halvah donut.

                        Cake gingerbread tart. Tootsie roll soufflé danish powder marshmallow sugar plum halvah sweet
                        chocolate bar. Jujubes cupcake I love toffee biscuit.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card collapse-header">
                  <div id="headingCollapse3" class="card-header collapse-header" data-toggle="collapse" role="button" data-target="#collapse3"
                      aria-expanded="false" aria-controls="collapse3">
                    <span class="lead collapse-title">
                      Collapse Item 3
                    </span>
                  </div>
                  <div id="collapse3" role="tabpanel" aria-labelledby="headingCollapse3" class="collapse"
                    aria-expanded="false">
                    <div class="card-content">
                      <div class="card-body">
                        Pudding lollipop dessert chocolate gingerbread. Cake cupcake bonbon cupcake marshmallow. Gummi
                        bears carrot cake bonbon cake.

                        Sweet roll fruitcake bear claw soufflé. Apple pie ice cream liquorice sesame snaps brownie. Donut
                        marshmallow donut pudding chupa chups.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card collapse-header">
                  <div id="headingCollapse4" class="card-header" data-toggle="collapse" role="button" data-target="#collapse4"
                      aria-expanded="false" aria-controls="collapse4">
                    <span class="lead collapse-title">
                      Collapse Item 4
                    </span>
                  </div>
                  <div id="collapse4" role="tabpanel" aria-labelledby="headingCollapse4" class="collapse"
                    aria-expanded="false">
                    <div class="card-content">
                      <div class="card-body">
                        Brownie sweet carrot cake dragée caramels fruitcake. Gummi bears tootsie roll croissant
                        gingerbread dragée tootsie roll. Cookie caramels tootsie roll pie. Sesame snaps cookie cake donut
                        wafer.

                        Wafer cookie jelly-o candy muffin cake. Marzipan topping lollipop. Gummies chocolate sugar plum.
                      </div>
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
  {{-- Collapse end --}}

  {{-- Accordion start --}}
  <section id="accordion">
    <div class="row">
      <div class="col-sm-12">
        <div id="accordionWrapa1" role="tablist" aria-multiselectable="true">
          <div class="card collapse-icon accordion-icon-rotate">
            <div class="card-header">
              <h4 class="card-title">Accordion</h4>
            </div>
            <div class="card-content">
              <div class="card-body">
                <p>
                  you may want to open one item at a time for that you can use
                  accordion
                </p>
                <div class="accordion-default collapse-bordered">
                  <div class="card collapse-header">
                    <div id="heading1" class="card-header collapse-header" data-toggle="collapse" role="button" data-target="#accordion1"
                        aria-expanded="false" aria-controls="accordion1">
                      <span class="lead collapse-title">
                        Accordion Item 1
                      </span>
                    </div>
                    <div id="accordion1" role="tabpanel" data-parent="#accordionWrapa1" aria-labelledby="heading1"
                      class="collapse">
                      <div class="card-content">
                        <div class="card-body">
                          Cheesecake cotton candy bonbon muffin cupcake tiramisu croissant. Tootsie roll sweet candy bear
                          claw chupa chups lollipop toffee. Macaroon donut liquorice powder candy carrot cake macaroon
                          fruitcake. Cookie toffee lollipop cotton candy ice cream dragée soufflé.

                          Cake tiramisu lollipop wafer pie soufflé dessert tart. Biscuit ice cream pie apple pie topping
                          oat cake dessert. Soufflé icing caramels. Chocolate cake icing ice cream macaroon pie cheesecake
                          liquorice apple pie.
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card collapse-header">
                    <div id="heading2" class="card-header collapse-header" data-toggle="collapse" role="button" data-target="#accordion2"
                        aria-expanded="false" aria-controls="accordion2">
                      <span class="lead collapse-title" >
                        Accordion Item 2
                      </span>
                    </div>
                    <div id="accordion2" role="tabpanel" data-parent="#accordionWrapa1" aria-labelledby="heading2"
                      class="collapse" aria-expanded="false">
                      <div class="card-content">
                        <div class="card-body">
                          Pie pudding candy. Oat cake jelly beans bear claw lollipop. Ice cream candy canes tootsie roll
                          muffin powder donut powder. Topping candy canes chocolate bar lemon drops candy canes.

                          Halvah muffin marzipan powder sugar plum donut donut cotton candy biscuit. Wafer jujubes apple
                          pie sweet lemon drops jelly cupcake. Caramels dessert halvah marshmallow. Candy topping cotton
                          candy oat cake croissant halvah gummi bears toffee powder.
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card collapse-header">
                    <div id="heading3" class="card-header collapse-header" data-toggle="collapse" role="button" data-target="#accordion3"
                        aria-expanded="false" aria-controls="accordion3">
                      <span class="lead collapse-title">
                        Accordion Item 3
                      </span>
                    </div>
                    <div id="accordion3" role="tabpanel" data-parent="#accordionWrapa1" aria-labelledby="heading3"
                      class="collapse" aria-expanded="false">
                      <div class="card-content">
                        <div class="card-body">
                          Gingerbread liquorice liquorice cake muffin lollipop powder chocolate cake. Gummi bears lemon
                          drops toffee liquorice pastry cake caramels chocolate bar brownie. Sweet biscuit chupa chups
                          sweet.

                          Halvah fruitcake gingerbread croissant dessert cupcake. Chupa chups chocolate bar donut tart.
                          Donut cake dessert cookie. Ice cream tootsie roll powder chupa chups pastry cupcake soufflé.
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card collapse-header">
                    <div id="heading4" class="card-header" data-toggle="collapse" role="button" data-target="#accordion4"
                        aria-expanded="false" aria-controls="accordion4">
                      <span class="lead collapse-title">
                        Accordion Item 4
                      </span>
                    </div>
                    <div id="accordion4" role="tabpanel" data-parent="#accordionWrapa1" aria-labelledby="heading4"
                      class="collapse" aria-expanded="false">
                      <div class="card-content">
                        <div class="card-body">
                          Icing sweet roll cotton candy brownie candy canes candy canes. Pie jelly dragée pie. Ice cream
                          jujubes wafer. Wafer croissant carrot cake wafer gummies gummies chupa chups halvah bonbon.

                          Gummi bears cotton candy jelly-o halvah. Macaroon apple pie dragée bonbon marzipan cheesecake.
                          Jelly jelly beans marshmallow.
                        </div>
                      </div>
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
  {{-- Accordion end --}}

  {{-- Accordion with shadow start --}}
  <section id="accordion-with-shadow">
    <div class="row">
      <div class="col-sm-12">
        <div id="accordionWrapa10" role="tablist" aria-multiselectable="true">
          <div class="card collapse-icon accordion-icon-rotate">
            <div class="card-header">
              <h4 class="card-title">Shadow</h4>
            </div>
            <div class="card-content">
              <div class="card-body">
                <p>
                  use class <code>.accordion-shadow</code> as a wrapper of your accordion/collapse
                  <code>card</code> for shadow
                </p>
                <div class="accordion-shadow collapse-bordered">
                  <div class="card collapse-header">
                    <div id="heading11" class="card-header" data-toggle="collapse" role="button" data-target="#accordion10"
                        aria-expanded="false" aria-controls="accordion10">
                      <span class="lead collapse-title">
                        Accordion Item 1
                      </span>
                    </div>
                    <div id="accordion10" role="tabpanel" data-parent="#accordionWrapa10" aria-labelledby="heading11"
                      class="collapse">
                      <div class="card-content">
                        <div class="card-body">
                          Donut caramels sweet roll bonbon toffee sugar plum. Jelly marzipan cotton candy marshmallow
                          gummi bears gummies wafer. Cotton candy cotton candy pie icing gummies chupa chups powder candy
                          canes cake.

                          Biscuit gingerbread lollipop danish oat cake pudding apple pie cheesecake powder. Sweet roll
                          tart candy oat cake halvah lemon drops. Muffin topping jujubes cheesecake.
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card collapse-header">
                    <div id="heading20" class="card-header" data-toggle="collapse" role="button" data-target="#accordion20"
                        aria-expanded="false" aria-controls="accordion20">
                      <span class="lead collapse-title">
                        Accordion Item 2
                      </span>
                    </div>
                    <div id="accordion20" role="tabpanel" data-parent="#accordionWrapa10" aria-labelledby="heading20"
                      class="collapse" aria-expanded="false">
                      <div class="card-content">
                        <div class="card-body">
                          Gummies sugar plum tiramisu. Gingerbread sugar plum caramels pudding. Danish jelly cookie.

                          Pudding pie cookie oat cake caramels gingerbread toffee pie jelly beans. Candy canes topping
                          pastry marshmallow apple pie bear claw donut donut. Jelly-o jelly-o sweet roll ice cream cupcake
                          tootsie roll sweet gummi bears chocolate bar.
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card collapse-header">
                    <div id="heading30" class="card-header" data-toggle="collapse" role="button" data-target="#accordion30"
                        aria-expanded="false" aria-controls="accordion30">
                      <span class="lead collapse-title">
                        Accordion Item 3
                      </span>
                    </div>
                    <div id="accordion30" role="tabpanel" data-parent="#accordionWrapa10" aria-labelledby="heading30"
                      class="collapse" aria-expanded="false">
                      <div class="card-content">
                        <div class="card-body">
                          Sweet bear claw brownie jelly-o wafer. Lollipop pudding gummi bears brownie jujubes. Bear claw
                          cake ice cream sugar plum jujubes croissant icing. Bear claw icing chocolate cake toffee ice
                          cream dessert cake.

                          Lollipop cupcake gummi bears jujubes cotton candy cake marshmallow. Tart cake danish dessert
                          sweet roll danish icing jelly. Apple pie chupa chups soufflé. Lollipop jujubes sweet roll cookie
                          fruitcake croissant bear claw candy.
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card collapse-header">
                    <div id="heading40" class="card-header" data-toggle="collapse" role="button" data-target="#accordion40"
                        aria-expanded="false" aria-controls="accordion40">
                      <span class="lead collapse-title">
                        Accordion Item 4
                      </span>
                    </div>
                    <div id="accordion40" role="tabpanel" data-parent="#accordionWrapa10" aria-labelledby="heading40"
                      class="collapse" aria-expanded="false">
                      <div class="card-content">
                        <div class="card-body">
                          Tart danish donut pudding. Dessert gingerbread cookie candy pie bonbon toffee cake. Gummies
                          marzipan caramels icing.

                          Marzipan topping croissant candy canes gummies gingerbread biscuit dragée cookie. Oat cake chupa
                          chups toffee gingerbread jelly jujubes. Bear claw candy caramels.
                        </div>
                      </div>
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
  {{-- Accordion with Shadow end --}}

  {{-- Accordion with border start --}}
  <section id="accordion-with-border">
    <div class="row">
      <div class="col-sm-12">
        <div id="accordionWrapa50" role="tablist" aria-multiselectable="true">
          <div class="card collapse-icon accordion-icon-rotate">
            <div class="card-header">
              <h4 class="card-title">Border</h4>
            </div>
            <div class="card-content">
              <div class="card-body">
                <p>
                  use class <code>.collapse-border</code> with your
                  <code>.accordion</code> to create a bordered collapse
                </p>
                <div class="accordion" id="accordionExample0">
                  <div class="collapse-border-item collapse-header card collapse-bordered">
                    <div class="card-header" id="heading200" data-toggle="collapse" role="button" data-target="#collapse200"
                        aria-expanded="false" aria-controls="collapse200">
                      <span class="lead collapse-title">
                        Accordion Item 1
                      </span>
                    </div>

                    <div id="collapse200" class="collapse" aria-labelledby="heading200" data-parent="#accordionExample0">
                      <div class="card-body">
                        Gummi bears toffee soufflé jelly carrot cake pudding sweet roll bear claw. Sweet roll gingerbread
                        wafer liquorice cake tiramisu. Gummi bears caramels bonbon icing croissant lollipop topping
                        lollipop danish.

                        Marzipan tootsie roll bonbon toffee icing lollipop cotton candy pie gummies. Gingerbread bear claw
                        chocolate cake bonbon. Liquorice marzipan cotton candy liquorice tootsie roll macaroon marzipan
                        danish.
                      </div>
                    </div>
                  </div>
                  <div class="collapse-border-item card collapse-header">
                    <div class="card-header" id="heading210" data-toggle="collapse" role="button" data-target="#collapse210"
                        aria-expanded="false" aria-controls="collapse210">
                      <span class="lead collapse-title">
                        Accordion Item 2
                      </span>
                    </div>
                    <div id="collapse210" class="collapse" aria-labelledby="heading210" data-parent="#accordionExample0">
                      <div class="card-body">
                        Jelly tootsie roll sugar plum sesame snaps apple pie. Icing donut pie sesame snaps. Bonbon gummi
                        bears carrot cake muffin chocolate bar.

                        Cupcake pastry candy bonbon. Sesame snaps dragée biscuit chocolate bar candy canes sesame snaps.
                        Lemon drops cake lollipop pastry tart macaroon gummi bears. Powder cheesecake macaroon candy canes
                        dessert bonbon bonbon candy canes.
                      </div>
                    </div>
                  </div>
                  <div class="card collapse-header collapse-border-item">
                    <div class="card-header" id="heading220" data-toggle="collapse" role="button" data-target="#collapse220"
                        aria-expanded="false" aria-controls="collapse220">
                      <span class="lead collapse-title">
                        Accordion Item 3
                      </span>
                    </div>
                    <div id="collapse220" class="collapse" aria-labelledby="heading220" data-parent="#accordionExample0">
                      <div class="card-body">
                        Soufflé sugar plum bonbon lemon drops candy canes icing brownie. Dessert tart dessert apple pie.
                        Muffin wafer cookie.

                        Soufflé fruitcake lollipop chocolate bar. Muffin gummi bears marzipan sesame snaps gummi bears
                        topping toffee. Cupcake bonbon muffin. Cake caramels candy lollipop cheesecake bonbon soufflé
                        apple pie cake.
                      </div>
                    </div>
                  </div>
                  <div class="card collapse-header collapse-border-item">
                    <div class="card-header" id="heading230" data-toggle="collapse" role="button" data-target="#collapse230"
                        aria-expanded="false" aria-controls="collapse230">
                      <span class="lead collapse-title">
                        Accordion Item 4
                      </span>
                    </div>
                    <div id="collapse230" class="collapse" aria-labelledby="heading230" data-parent="#accordionExample0">
                      <div class="card-body">
                        Marzipan candy apple pie icing. Sweet roll pudding dragée icing icing cookie pie fruitcake
                        caramels. Bonbon candy canes candy canes.

                        Dragée jelly beans chocolate bar dragée biscuit fruitcake gingerbread toffee apple pie.
                        Gingerbread donut powder ice cream sesame snaps jelly beans oat cake. Candy wafer pudding dragée
                        gummies. Carrot cake macaroon cake sesame snaps caramels.
                      </div>
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
  {{-- Accordion with border end --}}

  {{-- Accordion with margin start --}}
  <section id="accordion-with-margin">
    <div class="row">
      <div class="col-sm-12">
        <div class="card collapse-icon accordion-icon-rotate">
          <div class="card-header">
            <h4 class="card-title">Margin</h4>
          </div>
          <div class="card-body">
            <p>
              To create a collapse with margin use
              <code>.collapse-margin</code> class as a wrapper for your collapse
              header
            </p>
            <div class="accordion" id="accordionExample">
              <div class="collapse-margin">
                <div class="card-header" id="headingOne" data-toggle="collapse" role="button" data-target="#collapseOne"
                    aria-expanded="false" aria-controls="collapseOne">
                  <span class="lead collapse-title">
                    Accordion Item 1
                  </span>
                </div>

                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                    Pastry pudding cookie toffee bonbon jujubes jujubes powder topping. Jelly beans gummi bears sweet roll
                    bonbon muffin liquorice. Wafer lollipop sesame snaps. Brownie macaroon cookie muffin cupcake candy
                    caramels tiramisu.

                    Oat cake chocolate cake sweet jelly-o brownie biscuit marzipan. Jujubes donut marzipan chocolate bar.
                    Jujubes sugar plum jelly beans tiramisu icing cheesecake.
                  </div>
                </div>
              </div>
              <div class="collapse-margin">
                <div class="card-header" id="headingTwo" data-toggle="collapse" role="button" data-target="#collapseTwo"
                    aria-expanded="false" aria-controls="collapseTwo">
                  <span class="lead collapse-title">
                    Accordion Item 2
                  </span>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div class="card-body">
                    Sweet pie candy jelly. Sesame snaps biscuit sugar plum. Sweet roll topping fruitcake. Caramels
                    liquorice biscuit ice cream fruitcake cotton candy tart.

                    Donut caramels gingerbread jelly-o gingerbread pudding. Gummi bears pastry marshmallow candy canes
                    pie. Pie apple pie carrot cake.
                  </div>
                </div>
              </div>
              <div class="collapse-margin">
                <div class="card-header" id="headingThree" data-toggle="collapse" role="button" data-target="#collapseThree"
                    aria-expanded="false" aria-controls="collapseThree">
                  <span class="lead collapse-title">
                    Accordion Item 3
                  </span>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="card-body">
                    Tart gummies dragée lollipop fruitcake pastry oat cake. Cookie jelly jelly macaroon icing jelly beans
                    soufflé cake sweet. Macaroon sesame snaps cheesecake tart cake sugar plum.

                    Dessert jelly-o sweet muffin chocolate candy pie tootsie roll marzipan. Carrot cake marshmallow
                    pastry. Bonbon biscuit pastry topping toffee dessert gummies. Topping apple pie pie croissant cotton
                    candy dessert tiramisu.
                  </div>
                </div>
              </div>
              <div class="collapse-margin">
                <div class="card-header" id="headingFour" data-toggle="collapse" role="button" data-target="#collapseFour"
                    aria-expanded="false" aria-controls="collapseFour">
                  <span class="lead collapse-title">
                    Accordion Item 4
                  </span>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                  <div class="card-body">
                    Cheesecake muffin cupcake dragée lemon drops tiramisu cake gummies chocolate cake. Marshmallow tart
                    croissant. Tart dessert tiramisu marzipan lollipop lemon drops. Cake bonbon bonbon gummi bears topping
                    jelly beans brownie jujubes muffin.

                    Donut croissant jelly-o cake marzipan. Liquorice marzipan cookie wafer tootsie roll. Tootsie roll
                    sweet cupcake.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Accordion with margin end --}}

  {{-- Accordion with hover start --}}
  <section id="accordion-hover">
    <div class="row">
      <div class="col-sm-12">
        <div class="card collapse-icon accordion-icon-rotate">
          <div class="card-header">
            <h4 class="card-title">Hover</h4>
          </div>
          <div class="card-body">
            <p>
              To create a collapse which opens on hover use
              <code>data-open-hover="true"</code> as an attribute with your
              accordion class
            </p>
            <div class="accordion" id="accordionExample3" data-toggle-hover="true">
              <div class="collapse-bordered">
                <div class="card">
                  <div class="card-header" id="heading300" data-toggle="collapse" role="button"
                      data-target="#collapse300" aria-expanded="true" aria-controls="collapse300">
                    <span class="lead collapse-title collapse-hover-title">
                      Accordion Item 1
                    </span>
                  </div>

                  <div id="collapse300" class="collapse show" aria-labelledby="heading300"
                    data-parent="#accordionExample3">
                    <div class="card-body">
                      Pastry bear claw caramels ice cream pudding candy candy canes wafer ice cream. Topping sesame snaps
                      cookie pastry ice cream toffee jujubes ice cream. Bear claw bonbon cotton candy candy jujubes.

                      Jelly beans candy canes ice cream gummies gingerbread dragée sweet cookie croissant. Chocolate cake
                      macaroon donut candy. Soufflé chocolate bar liquorice lemon drops sweet cookie.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="heading310" data-toggle="collapse" role="button"
                      data-target="#collapse310" aria-expanded="false" aria-controls="collapse310">
                    <span class="lead collapse-title collapse-hover-title">
                      Accordion Item 2
                    </span>
                  </div>
                  <div id="collapse310" class="collapse" aria-labelledby="heading310" data-parent="#accordionExample3">
                    <div class="card-body">
                      Cake lollipop bonbon icing. Candy canes cookie caramels cookie bonbon liquorice. Jelly-o carrot cake
                      carrot cake carrot cake danish powder. Caramels candy tootsie roll tart chocolate bar candy canes
                      muffin gummies.

                      Liquorice dragée jujubes chocolate bar jelly-o topping. Cotton candy dragée candy pudding tart sweet
                      roll. Chocolate cupcake chocolate jelly-o pastry candy canes cupcake chupa chups.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="heading350" data-toggle="collapse" role="button"
                      data-target="#collapse350" aria-expanded="false" aria-controls="collapse350">
                    <span class="lead collapse-title collapse-hover-title">
                      Accordion Item 3
                    </span>
                  </div>
                  <div id="collapse350" class="collapse" aria-labelledby="heading350" data-parent="#accordionExample3">
                    <div class="card-body">

                      Cake danish apple pie. Tart pastry sweet roll oat cake marzipan muffin jelly gummies. Carrot cake
                      wafer topping sweet roll cupcake pastry.

                      Biscuit pastry bonbon. Cupcake lollipop topping caramels jelly beans bear claw. Toffee candy canes
                      dessert pastry cheesecake chocolate bar. Candy croissant pastry.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="heading330" data-toggle="collapse" role="button"
                      data-target="#collapse330" aria-expanded="false" aria-controls="collapse330">
                    <span class="lead collapse-title collapse-hover-title">
                      Accordion Item 4
                    </span>
                  </div>
                  <div id="collapse330" class="collapse" aria-labelledby="heading330" data-parent="#accordionExample3">
                    <div class="card-body">

                      Cake danish apple pie. Tart pastry sweet roll oat cake marzipan muffin jelly gummies. Carrot cake
                      wafer topping sweet roll cupcake pastry.

                      Biscuit pastry bonbon. Cupcake lollipop topping caramels jelly beans bear claw. Toffee candy canes
                      dessert pastry cheesecake chocolate bar. Candy croissant pastry.
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
  {{-- Accordion with hover end --}}
  @endsection
