@extends('layouts/contentLayoutMaster')

@section('title', 'Modal')

@section('content')
{{-- Basic Modals start --}}
<section id="basic-modals">
  <div class="row match-height">
    <div class="col-lg-3 col-md-6 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Basic Modal</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-12">
                <p>Toggle a modal via JavaScript by clicking the button above.</p>
                {{-- Button trigger modal --}}
                <button type="button" class="btn btn-outline-primary block btn-lg" data-toggle="modal"
                  data-target="#default">
                  Launch Modal
                </button>

                {{-- Modal --}}
                <div class="modal fade text-left" id="default" tabindex="-1" role="dialog"
                  aria-labelledby="myModalLabel1" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel1">Basic Modal</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <h5>Check First Paragraph</h5>
                        <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie.
                          Brownie carrot cake candy canes bonbon fruitcake topping halvah. Cake sweet roll cake
                          cheesecake cookie chocolate cake liquorice.</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Accept</button>
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
    <div class="col-lg-3 col-md-6 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">
            Vertically Centered
          </h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>
              Add <code>.modal-dialog-centered</code> to <code>.modal-dialog</code> to vertically center the modal.
            </p>
            <button type="button" class="btn btn-outline-primary btn-lg block" data-toggle="modal"
              data-target="#exampleModalCenter">
              Launch Modal
            </button>
            {{-- Modal --}}
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
              aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
                role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Vertically Centered</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p>Croissant jelly-o halvah chocolate sesame snaps. Brownie caramels candy canes chocolate cake
                      marshmallow icing lollipop I love. Gummies macaroon donut caramels biscuit topping danish.
                    </p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Accept</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Disabled Backdrop</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>You can disable the backdrop by using <code>data-backdrop="false"</code></p>
            {{-- Button trigger modal --}}
            <button type="button" class="btn btn-outline-primary block btn-lg" data-toggle="modal" data-backdrop="false"
              data-target="#backdrop">
              Launch Modal
            </button>

            {{-- Modal --}}
            <div class="modal fade text-left" id="backdrop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel4"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel4">Disabled Backdrop</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p>
                      Candy oat cake topping topping chocolate cake. Icing pudding jelly beans I love chocolate carrot
                      cake wafer candy canes. Biscuit croissant fruitcake bonbon soufflé.
                    </p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Accept</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Disabled Animation</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>For modals that simply appear rather than fade in to view, remove the .fade class from your modal
              markup.</p>
            {{-- Button trigger modal --}}
            <button type="button" class="btn btn-outline-primary block btn-lg" data-toggle="modal"
              data-target="#animation">
              Launch Modal
            </button>

            {{-- Modal --}}
            <div class="modal text-left" id="animation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel6"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel6">Disabled Animation</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p>
                      Chocolate bar jelly dragée cupcake chocolate bar I love donut liquorice. Powder I love marzipan
                      donut candy canes jelly-o. Dragée liquorice apple pie candy biscuit danish lemon drops sugar plum.
                    </p>
                    <div class="alert alert-success" role="alert">
                      <span class="text-bold-600">Well done!</span> You successfully read this important alert
                      message.
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Accept</button>
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
{{-- Basic Modals end --}}

{{-- Modal Themes start --}}
<section id="modal-themes">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Modal Themes</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p class="mb-1">
              Use class <code>.bg-*</code> with your <code>.modal-header</code> to change theme of modal
            </p>
            <div class="row">
              <div class="col-12">
                <div class="modal-primary mr-1 mb-1 d-inline-block">
                  {{-- Button trigger modal --}}
                  <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#primary">
                    Primary
                  </button>

                  {{-- Modal --}}
                  <div class="modal fade text-left" id="primary" tabindex="-1" role="dialog"
                    aria-labelledby="myModalLabel160" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                      <div class="modal-content">
                        <div class="modal-header bg-primary white">
                          <h5 class="modal-title" id="myModalLabel160">Primary Modal</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Tart lemon drops macaroon oat cake chocolate toffee chocolate bar icing. Pudding jelly beans
                          carrot cake pastry gummies cheesecake lollipop. I love cookie lollipop cake I love sweet
                          gummi
                          bears cupcake dessert.
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-primary" data-dismiss="modal">Accept</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-success mr-1 mb-1 d-inline-block">
                  {{-- Button trigger modal --}}
                  <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#success">
                    Success
                  </button>

                  {{-- Modal --}}
                  <div class="modal fade text-left" id="success" tabindex="-1" role="dialog"
                    aria-labelledby="myModalLabel110" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                      <div class="modal-content">
                        <div class="modal-header bg-success white">
                          <h5 class="modal-title" id="myModalLabel110">Success Modal</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Tart lemon drops macaroon oat cake chocolate toffee chocolate bar icing. Pudding jelly beans
                          carrot cake pastry gummies cheesecake lollipop. I love cookie lollipop cake I love sweet
                          gummi
                          bears cupcake dessert.
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-success" data-dismiss="modal">Accept</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-danger mr-1 mb-1 d-inline-block">
                  {{-- Button trigger modal --}}
                  <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#danger">
                    Danger
                  </button>

                  {{-- Modal --}}
                  <div class="modal fade text-left" id="danger" tabindex="-1" role="dialog"
                    aria-labelledby="myModalLabel120" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                      <div class="modal-content">
                        <div class="modal-header bg-danger white">
                          <h5 class="modal-title" id="myModalLabel120">Danger Modal</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Tart lemon drops macaroon oat cake chocolate toffee chocolate bar icing. Pudding jelly beans
                          carrot cake pastry gummies cheesecake lollipop. I love cookie lollipop cake I love sweet
                          gummi
                          bears cupcake dessert.
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Accept</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-info mr-1 mb-1 d-inline-block">
                  {{-- Button trigger modal --}}
                  <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#info">
                    Info
                  </button>

                  {{-- Modal --}}
                  <div class="modal fade text-left" id="info" tabindex="-1" role="dialog"
                    aria-labelledby="myModalLabel130" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                      <div class="modal-content">
                        <div class="modal-header bg-info white">
                          <h5 class="modal-title" id="myModalLabel130">Info Modal</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Tart lemon drops macaroon oat cake chocolate toffee chocolate bar icing. Pudding jelly beans
                          carrot cake pastry gummies cheesecake lollipop. I love cookie lollipop cake I love sweet
                          gummi
                          bears cupcake dessert.
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-info" data-dismiss="modal">Accept</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-warning mr-1 mb-1 d-inline-block">
                  {{-- Button trigger modal --}}
                  <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#warning">
                    Warning
                  </button>

                  {{-- Modal --}}
                  <div class="modal fade text-left" id="warning" tabindex="-1" role="dialog"
                    aria-labelledby="myModalLabel140" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                      <div class="modal-content">
                        <div class="modal-header bg-warning white">
                          <h5 class="modal-title" id="myModalLabel140">Warning Modal</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Tart lemon drops macaroon oat cake chocolate toffee chocolate bar icing. Pudding jelly beans
                          carrot cake pastry gummies cheesecake lollipop. I love cookie lollipop cake I love sweet
                          gummi
                          bears cupcake dessert.
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-warning" data-dismiss="modal">Accept</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-dark mr-1 mb-1 d-inline-block">
                  {{-- Button trigger modal --}}
                  <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#dark">
                    Dark
                  </button>

                  {{-- Modal --}}
                  <div class="modal fade text-left" id="dark" tabindex="-1" role="dialog"
                    aria-labelledby="myModalLabel150" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                      <div class="modal-content">
                        <div class="modal-header bg-dark white">
                          <h5 class="modal-title" id="myModalLabel150">Dark Modal</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Tart lemon drops macaroon oat cake chocolate toffee chocolate bar icing. Pudding jelly beans
                          carrot cake pastry gummies cheesecake lollipop. I love cookie lollipop cake I love sweet
                          gummi
                          bears cupcake dessert.
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-dark" data-dismiss="modal">Accept</button>
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
  </div>
</section>
{{-- Modal Themes end --}}

{{-- Modal Sizes start --}}
<section id="modal-sizes">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Modal Sizes</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>
              Add class <code>.nodal-{xs|sm|lg|xl}</code> with <code>.modalo-dialog</code> to create a modal with size
            </p>
            <div class="row">
              <div class="col-12">
                <div class="modal-size-xs mr-1 mb-1 d-inline-block">
                  {{-- Button trigger modal --}}
                  <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#xSmall">
                    Extra Small
                  </button>

                  {{-- Modal --}}
                  <div class="modal fade text-left" id="xSmall" tabindex="-1" role="dialog"
                    aria-labelledby="myModalLabel20" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xs" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title" id="myModalLabel20">Extra Small Modal</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Halvah powder wafer. Chupa chups pie topping carrot cake cake. Tootsie roll sesame snaps
                          jelly-o marshmallow marshmallow jelly jujubes candy. Chupa chups cheesecake gingerbread chupa
                          chups cake candy canes sweet roll.
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Accept</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-size-sm mr-1 mb-1 d-inline-block">
                  {{-- Button trigger modal --}}
                  <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#small">
                    Small Modal
                  </button>

                  {{-- Modal --}}
                  <div class="modal fade text-left" id="small" tabindex="-1" role="dialog"
                    aria-labelledby="myModalLabel19" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title" id="myModalLabel19">Small Modal</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Biscuit chocolate cake gummies. Lollipop I love macaroon bear claw caramels. I love
                          marshmallow tiramisu I love fruitcake I love gummi bears.
                          Carrot cake topping liquorice. Pudding caramels liquorice sweet I love. Donut powder cupcake
                          ice cream tootsie roll jelly.
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-primary" data-dismiss="modal">Accept</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-size-default mr-1 mb-1 d-inline-block">
                  {{-- Button trigger modal --}}
                  <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#defaultSize">
                    Default Modal
                  </button>

                  {{-- Modal --}}
                  <div class="modal fade text-left" id="defaultSize" tabindex="-1" role="dialog"
                    aria-labelledby="myModalLabel18" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title" id="myModalLabel18">Default Modal</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          I love candy candy cake powder I love icing ice cream pastry. Biscuit lemon drops sesame
                          snaps. Topping biscuit croissant gummi bears jelly beans cake cake bear claw muffin. Lemon
                          drops oat cake pastry bear claw liquorice lemon drops.
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-primary" data-dismiss="modal">Accept</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-size-lg mr-1 mb-1 d-inline-block">
                  {{-- Button trigger modal --}}
                  <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#large">
                    Large Modal
                  </button>

                  {{-- Modal --}}
                  <div class="modal fade text-left" id="large" tabindex="-1" role="dialog"
                    aria-labelledby="myModalLabel17" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title" id="myModalLabel17">Large Modal</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          I love tart cookie cupcake. I love chupa chups biscuit. I love marshmallow apple pie wafer
                          liquorice. Marshmallow cotton candy chocolate. Apple pie muffin tart. Marshmallow halvah pie
                          marzipan lemon drops jujubes. Macaroon sugar plum cake icing toffee.
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-primary" data-dismiss="modal">Accept</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-size-xl mr-1 mb-1 d-inline-block">
                  {{-- Button trigger modal --}}
                  <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#xlarge">
                    Extra Large Modal
                  </button>

                  {{-- Modal --}}
                  <div class="modal fade text-left" id="xlarge" tabindex="-1" role="dialog"
                    aria-labelledby="myModalLabel16" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title" id="myModalLabel16">Extra Large Modal</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Cake cupcake sugar plum. Sesame snaps pudding cupcake candy canes icing cheesecake. Sweet roll
                          pudding lollipop apple pie gummies dragée. Chocolate bar cookie caramels I love lollipop ice
                          cream tiramisu lollipop sweet.
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-primary" data-dismiss="modal">Accept</button>
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
  </div>
</section>
{{-- Modal Sizes end --}}

{{-- Modal Events start --}}
<section id="modal-events">
  <div class="row match-height">
    <div class="col-lg-3 col-md-6 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">On Show Event</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>This event fires immediately when the show instance method is called. If caused by a click, the
              clicked element is available as the relatedTarget property of the event.</p>
            {{-- Button trigger modal --}}
            <button type="button" class="btn btn-outline-danger block btn-lg" data-toggle="modal" id="onshowbtn"
              data-target="#onshow">
              Launch Modal
            </button>

            {{-- Modal --}}
            <div class="modal fade text-left" id="onshow" tabindex="-1" role="dialog" aria-labelledby="myModalLabel21"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel21">Basic Modal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Donut chocolate halvah I love caramels. Dessert croissant I love icing I love dragée candy canes
                    chocolate bar. Oat cake lollipop I love cake chocolate bar jelly sweet. I love cotton candy oat cake
                    jelly.
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Accept</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">
            On Shown Event
          </h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>This event is fired when the modal has been made visible to the user (will wait for CSS transitions to
              complete).</p>
            {{-- Button trigger modal --}}
            <button type="button" class="btn btn-outline-danger block btn-lg" data-toggle="modal" id="onshownbtn"
              data-target="#onshown">
              Launch Modal
            </button>

            {{-- Modal --}}
            <div class="modal fade text-left" id="onshown" tabindex="-1" role="dialog" aria-labelledby="myModalLabel22"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel22">Basic Modal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Jujubes chocolate bar topping sweet caramels chocolate cake. Fruitcake pie wafer toffee sweet roll
                    I love. Chocolate pastry halvah bear claw jelly beans sesame snaps candy canes cotton candy. Jelly
                    macaroon pie toffee cupcake soufflé cotton candy.
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Accept</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">
            On Hide Event
          </h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>This event is fired immediately when the hide instance method has been called.</p>
            {{-- Button trigger modal --}}
            <button type="button" class="btn btn-outline-danger block btn-lg" data-toggle="modal" id="onhidebtn"
              data-target="#onhide">
              Launch Modal
            </button>

            {{-- Modal --}}
            <div class="modal fade text-left" id="onhide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel23"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel23">Basic Modal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Sweet roll I love pudding sweet roll jujubes donut I love cookie tart. Chocolate cake I love bear
                    claw bonbon dragée. Jujubes carrot cake jujubes I love lemon drops cookie. Jelly beans jujubes
                    cotton candy tootsie roll.
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Accept</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">
            On Hidden Event
          </h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>This event is fired when the modal has finished being hidden from the user (will wait for CSS
              transitions to complete).</p>
            {{-- Button trigger modal --}}
            <button type="button" class="btn btn-outline-danger block btn-lg" data-toggle="modal" id="onhiddenbtn"
              data-target="#onhidden">
              Launch Modal
            </button>

            {{-- Modal --}}
            <div class="modal fade text-left" id="onhidden" tabindex="-1" role="dialog" aria-labelledby="myModalLabel24"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel24">Basic Modal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Cookie cupcake dessert cotton candy donut cupcake marshmallow pie marzipan. Tootsie roll wafer
                    sesame
                    snaps gummi bears cake. Cake icing cupcake I love gummi bears. Halvah I love chupa chups I love
                    bonbon
                    I love.
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Accept</button>
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
{{-- Modal Events end --}}

{{-- Form and scrolling Components start --}}
<section id="form-and-scrolling-components">
  <div class="row match-height">
    <div class="col-md-4 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Form Components</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div class="form-group">
              <h5>Login Form</h5>
              <p> Created Simple Login Form.</p>
              {{-- Button trigger modal --}}
              <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#inlineForm">
                Launch Modal
              </button>

              {{-- Modal --}}
              <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog"
                aria-labelledby="myModalLabel33" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title" id="myModalLabel33">Inline Login Form </h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form action="#">
                      <div class="modal-body">
                        <label>Email: </label>
                        <div class="form-group">
                          <input type="text" placeholder="Email Address" class="form-control">
                        </div>

                        <label>Password: </label>
                        <div class="form-group">
                          <input type="password" placeholder="Password" class="form-control">
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Login</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Scrolling long Content</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>If your content is longer you the page will autmatically adopt a scrollbar</p>
            {{-- Button trigger modal --}}
            <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModalLong">
              Launch demo modal
            </button>

            {{-- Modal --}}
            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
              aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p> Biscuit powder jelly beans. Lollipop candy canes croissant icing chocolate cake. Cake fruitcake
                      powder pudding pastry.</p>

                    <p>Tootsie roll oat cake I love bear claw I love caramels caramels halvah chocolate bar. Cotton
                      candy
                      gummi bears pudding pie apple pie cookie. Cheesecake jujubes lemon drops danish dessert I love
                      caramels powder.</p>

                    <p> Chocolate cake icing tiramisu liquorice toffee donut sweet roll cake. Cupcake dessert icing
                      dragée
                      dessert. Liquorice jujubes cake tart pie donut. Cotton candy candy canes lollipop liquorice
                      chocolate marzipan muffin pie liquorice.
                    </p>
                    <p> Powder cookie jelly beans sugar plum ice cream. Candy canes I love powder sugar plum tiramisu.
                      Liquorice pudding chocolate cake cupcake topping biscuit. Lemon drops apple pie sesame snaps
                      tootsie
                      roll carrot cake soufflé halvah.
                      Biscuit powder jelly beans. Lollipop candy canes croissant icing chocolate cake. Cake fruitcake
                      powder pudding pastry.</p>

                    <p>Tootsie roll oat cake I love bear claw I love caramels caramels halvah chocolate bar. Cotton
                      candy
                      gummi bears pudding pie apple pie cookie. Cheesecake jujubes lemon drops danish dessert I love
                      caramels powder.</p>

                    <p> Chocolate cake icing tiramisu liquorice toffee donut sweet roll cake. Cupcake dessert icing
                      dragée
                      dessert. Liquorice jujubes cake tart pie donut. Cotton candy candy canes lollipop liquorice
                      chocolate marzipan muffin pie liquorice.</p>

                    <p> Powder cookie jelly beans sugar plum ice cream. Candy canes I love powder sugar plum tiramisu.
                      Liquorice pudding chocolate cake cupcake topping biscuit. Lemon drops apple pie sesame snaps
                      tootsie
                      roll carrot cake soufflé halvah.
                      Biscuit powder jelly beans. Lollipop candy canes croissant icing chocolate cake. Cake fruitcake
                      powder pudding pastry.</p>

                    <p> Tootsie roll oat cake I love bear claw I love caramels caramels halvah chocolate bar. Cotton
                      candy
                      gummi bears pudding pie apple pie cookie. Cheesecake jujubes lemon drops danish dessert I love
                      caramels powder.</p>

                    <p> Chocolate cake icing tiramisu liquorice toffee donut sweet roll cake. Cupcake dessert icing
                      dragée
                      dessert. Liquorice jujubes cake tart pie donut. Cotton candy candy canes lollipop liquorice
                      chocolate marzipan muffin pie liquorice.</p>

                    <p> Powder cookie jelly beans sugar plum ice cream. Candy canes I love powder sugar plum tiramisu.
                      Liquorice pudding chocolate cake cupcake topping biscuit. Lemon drops apple pie sesame snaps
                      tootsie
                      roll carrot cake soufflé halvah.
                      Biscuit powder jelly beans. Lollipop candy canes croissant icing chocolate cake. Cake fruitcake
                      powder pudding pastry.</p>

                    <p> Tootsie roll oat cake I love bear claw I love caramels caramels halvah chocolate bar. Cotton
                      candy
                      gummi bears pudding pie apple pie cookie. Cheesecake jujubes lemon drops danish dessert I love
                      caramels powder.</p>

                    <p> Chocolate cake icing tiramisu liquorice toffee donut sweet roll cake. Cupcake dessert icing
                      dragée
                      dessert. Liquorice jujubes cake tart pie donut. Cotton candy candy canes lollipop liquorice
                      chocolate marzipan muffin pie liquorice.</p>

                    <p>Powder cookie jelly beans sugar plum ice cream. Candy canes I love powder sugar plum tiramisu.
                      Liquorice pudding chocolate cake cupcake topping biscuit. Lemon drops apple pie sesame snaps
                      tootsie
                      roll carrot cake soufflé halvah.</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Accept</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Scrolling long Content Inside Modal</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>You can also create a scrollable modal that allows scroll the modal body by adding
              <code>.modal-dialog-scrollable</code> to <code>.modal-dialog</code>.</p>
            {{-- Button trigger modal --}}
            <button type="button" class="btn btn-outline-success" data-toggle="modal"
              data-target="#exampleModalScrollable">
              Launch demo modal
            </button>

            {{-- Modal --}}
            <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
              aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p> Biscuit powder jelly beans. Lollipop candy canes croissant icing chocolate cake. Cake fruitcake
                      powder pudding pastry.</p>

                    <p>Tootsie roll oat cake I love bear claw I love caramels caramels halvah chocolate bar. Cotton
                      candy
                      gummi bears pudding pie apple pie cookie. Cheesecake jujubes lemon drops danish dessert I love
                      caramels powder.</p>

                    <p> Chocolate cake icing tiramisu liquorice toffee donut sweet roll cake. Cupcake dessert icing
                      dragée
                      dessert. Liquorice jujubes cake tart pie donut. Cotton candy candy canes lollipop liquorice
                      chocolate marzipan muffin pie liquorice.
                    </p>
                    <p> Powder cookie jelly beans sugar plum ice cream. Candy canes I love powder sugar plum tiramisu.
                      Liquorice pudding chocolate cake cupcake topping biscuit. Lemon drops apple pie sesame snaps
                      tootsie
                      roll carrot cake soufflé halvah.
                      Biscuit powder jelly beans. Lollipop candy canes croissant icing chocolate cake. Cake fruitcake
                      powder pudding pastry.</p>

                    <p>Tootsie roll oat cake I love bear claw I love caramels caramels halvah chocolate bar. Cotton
                      candy
                      gummi bears pudding pie apple pie cookie. Cheesecake jujubes lemon drops danish dessert I love
                      caramels powder.</p>

                    <p> Chocolate cake icing tiramisu liquorice toffee donut sweet roll cake. Cupcake dessert icing
                      dragée
                      dessert. Liquorice jujubes cake tart pie donut. Cotton candy candy canes lollipop liquorice
                      chocolate marzipan muffin pie liquorice.</p>

                    <p> Powder cookie jelly beans sugar plum ice cream. Candy canes I love powder sugar plum tiramisu.
                      Liquorice pudding chocolate cake cupcake topping biscuit. Lemon drops apple pie sesame snaps
                      tootsie
                      roll carrot cake soufflé halvah.
                      Biscuit powder jelly beans. Lollipop candy canes croissant icing chocolate cake. Cake fruitcake
                      powder pudding pastry.</p>

                    <p> Tootsie roll oat cake I love bear claw I love caramels caramels halvah chocolate bar. Cotton
                      candy
                      gummi bears pudding pie apple pie cookie. Cheesecake jujubes lemon drops danish dessert I love
                      caramels powder.</p>

                    <p> Chocolate cake icing tiramisu liquorice toffee donut sweet roll cake. Cupcake dessert icing
                      dragée
                      dessert. Liquorice jujubes cake tart pie donut. Cotton candy candy canes lollipop liquorice
                      chocolate marzipan muffin pie liquorice.</p>

                    <p> Powder cookie jelly beans sugar plum ice cream. Candy canes I love powder sugar plum tiramisu.
                      Liquorice pudding chocolate cake cupcake topping biscuit. Lemon drops apple pie sesame snaps
                      tootsie
                      roll carrot cake soufflé halvah.
                      Biscuit powder jelly beans. Lollipop candy canes croissant icing chocolate cake. Cake fruitcake
                      powder pudding pastry.</p>

                    <p> Tootsie roll oat cake I love bear claw I love caramels caramels halvah chocolate bar. Cotton
                      candy
                      gummi bears pudding pie apple pie cookie. Cheesecake jujubes lemon drops danish dessert I love
                      caramels powder.</p>

                    <p> Chocolate cake icing tiramisu liquorice toffee donut sweet roll cake. Cupcake dessert icing
                      dragée
                      dessert. Liquorice jujubes cake tart pie donut. Cotton candy candy canes lollipop liquorice
                      chocolate marzipan muffin pie liquorice.</p>

                    <p>Powder cookie jelly beans sugar plum ice cream. Candy canes I love powder sugar plum tiramisu.
                      Liquorice pudding chocolate cake cupcake topping biscuit. Lemon drops apple pie sesame snaps
                      tootsie
                      roll carrot cake soufflé halvah.</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Accept</button>
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
{{-- Form and scrolling Components end --}}
@endsection

@section('page-script')
        <!-- Page js files -->
        <script src="{{ asset(mix('js/scripts/modal/components-modal.js')) }}"></script>
@endsection
