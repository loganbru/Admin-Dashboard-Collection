@extends('layouts/contentLayoutMaster')

@section('title', 'FAQ')

@section('page-style')
        {{-- Page Css files --}}
        <link rel="stylesheet" href="{{ asset(mix('css/pages/faq.css')) }}">
@endsection
@section('content')
<section id="faq-search">
  <div class="row">
      <div class="col-12">
          <div class="card faq-bg white">
              <div class="card-content">
                  <div class="card-body p-sm-4 p-2">
                      <h1 class="white">Have Any Questions?</h1>
                      <p class="card-text mb-2">
                          Bonbon sesame snaps lemon drops marshmallow ice cream carrot cake croissant wafer.
                      </p>
                      <form>
                          <fieldset class="form-group position-relative has-icon-left mb-0">
                              <input type="text" class="form-control form-control-lg" id="searchbar" placeholder="Search">
                              <div class="form-control-position">
                                  <i class="feather icon-search px-1"></i>
                              </div>
                          </fieldset>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<section class="faq">
  <div class="row">
      <div class="col-xl-3 col-md-5 col-12">
          <div class="card">
              <div class="card-body">
                  <h4>Table of Content</h4>
                  <div class="faq-content mt-1">
                      <div class="faq-table-content">
                          <i class="fa fa-circle light"></i> All
                      </div>
                      <div class="faq-table-content">
                          <i class="fa fa-circle primary"></i> General
                      </div>
                      <div class="faq-table-content">
                          <i class="fa fa-circle success"></i> Licenses
                      </div>
                      <div class="faq-table-content">
                          <i class="fa fa-circle warning"></i> Company usage
                      </div>
                      <div class="faq-table-content">
                          <i class="fa fa-circle danger"></i> Trademark use
                      </div>
                  </div>
                  <h4 class="mt-3">Supporters</h4>
                  <div class="supporter-details mt-2">
                      <div class="supporter-img d-inline-block">
                          <img class="rounded-circle" src="{{ asset('images/portrait/small/avatar-s-1.jpg') }}" alt="Avatar">
                      </div>
                      <div class="supporter-info d-inline-block">
                          <div class="font-weight-bold">Boyce Shene</div>
                          <small>Web Developer</small>
                      </div>
                  </div>
                  <div class="supporter-details mt-2">
                      <div class="supporter-img d-inline-block">
                          <img class="rounded-circle" src="{{ asset('images/portrait/small/avatar-s-2.jpg') }}" alt="Avatar">
                      </div>
                      <div class="supporter-info d-inline-block">
                          <div class="font-weight-bold">Margie Sevy</div>
                          <small>Web Designer</small>
                      </div>
                  </div>
                  <div class="supporter-details mt-2">
                      <div class="supporter-img d-inline-block">
                          <img class="rounded-circle" src="{{ asset('images/portrait/small/avatar-s-3.jpg') }}" alt="Avatar">
                      </div>
                      <div class="supporter-info d-inline-block">
                          <div class="font-weight-bold">Cyndi Navas</div>
                          <small>Web Developer</small>
                      </div>
                  </div>
                  <div class="supporter-details mt-2">
                      <div class="supporter-img d-inline-block">
                          <img class="rounded-circle" src="{{ asset('images/portrait/small/avatar-s-4.jpg') }}" alt="Avatar">
                      </div>
                      <div class="supporter-info d-inline-block">
                          <div class="font-weight-bold">Chi Petrusky</div>
                          <small>Web Developer</small>
                      </div>
                  </div>
                  <div class="supporter-details mt-2">
                      <div class="supporter-img d-inline-block">
                          <img class="rounded-circle" src="{{ asset('images/portrait/small/avatar-s-5.jpg') }}" alt="Avatar">
                      </div>
                      <div class="supporter-info d-inline-block">
                          <div class="font-weight-bold">Shanel Dumag</div>
                          <small>Web Designer</small>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-xl-9 col-md-7 col-12">
        <div class="card bg-transparent border-0 shadow-none collapse-icon accordion-icon-rotate">
          <div class="card-body p-0">
            <div class="accordion search-content-info" id="accordionExample">
              <div class="collapse-margin search-content mt-0">
                <div class="card-header" id="headingOne" role="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  <span class="lead collapse-title">
                    What does royalty free mean?
                  </span>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                    Royalty free means you just need to pay for rights to use the item once per end product. You don't need to pay additional or ongoing fees for each person who sees or uses it. Please note that there may be some limits placed on uses under the different license types available on the marketplaces, such as our Photo and Music Licenses.
                  </div>
                </div>
              </div>
              <div class="collapse-margin">
                <div class="card-header" id="headingTwo" role="button" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="false" aria-controls="collapseTwo">
                  <span class="lead collapse-title collapsed">
                    What do you mean by item and end product?
                  </span>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div class="card-body">
                    The item is what you purchase from Envato Market. The end product is what you build with that item. Example: The item is a business card template; the end product is the finalized business card. The item is a button graphic; the end product is an app using the button graphic in the app's interface.
                  </div>
                </div>
              </div>
              <div class="collapse-margin search-content">
                <div class="card-header" id="headingThree" role="button" data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="false" aria-controls="collapseThree">
                  <span class="lead collapse-title collapsed">
                    Am I allowed to modify the item that I purchased?
                  </span>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="card-body">
                    Yes. You can customize our items to fit the needs of your end product. Example: You could change the colors, text, and layout of a flyer template or convert an HTML template into a WordPress theme for a single client.
                  </div>
                </div>
              </div>
              <div class="collapse-margin search-content">
                <div class="card-header" id="headingFour" role="button" data-toggle="collapse" data-target="#collapseFour"
                    aria-expanded="false" aria-controls="collapseFour">
                  <span class="lead collapse-title collapsed">
                    What does non-exclusive mean?
                  </span>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                  <div class="card-body">
                    Non-exclusive means that you are not the only person with access to the item. Others will also be licensing and using the same item.
                  </div>
                </div>
              </div>
              <div class="collapse-margin search-content">
                <div class="card-header" id="headingFive" role="button" data-toggle="collapse" data-target="#collapseFive"
                    aria-expanded="false" aria-controls="collapseFive">
                  <span class="lead collapse-title collapsed">
                    Is the Regular License the same thing as an editorial license?
                  </span>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                  <div class="card-body">
                    No, our Regular License is for a free end product (whether or not the item is used in the end product in an editorial way). And our Extended License is for an end product that's sold (whether or not the item is used in the end product in an editorial way). If you want to use an item in an editorial way in your end product, choose the Regular License if your end product is distributed for free, and choose the Extended License if your end product is sold to the end customer.
                  </div>
                </div>
              </div>
              <div class="collapse-margin search-content">
                <div class="card-header" id="headingSix" role="button" data-toggle="collapse" data-target="#collapseSix"
                    aria-expanded="false" aria-controls="collapseSix">
                  <span class="lead collapse-title collapsed">
                    Which license do I need for an end product that is only accessible to paying users?
                  </span>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                  <div class="card-body">
                    If the end users need to pay to see the end product, you need an Extended License. There can be more than one end user as long as there is only one end product. Example: A website that requires money before you can access the content.
                  </div>
                </div>
              </div>
              <div class="collapse-margin search-content">
                <div class="card-header" id="headingSeven" role="button" data-toggle="collapse" data-target="#collapseSeven"
                    aria-expanded="false" aria-controls="collapseSeven">
                  <span class="lead collapse-title collapsed">
                    Which license do I need to use an item in a commercial?
                  </span>
                </div>
                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                  <div class="card-body">
                    You only need a Regular License where the end product is an advertisement, as the audience does not have to pay to view it. It doesn't matter if the advertisement is for things that are being sold. Example: An After Effects template used to produce a TV commercial would only need the Regular License
                  </div>
                </div>
              </div>
              <div class="collapse-margin search-content">
                <div class="card-header" id="headingEight" role="button" data-toggle="collapse" data-target="#collapseEight"
                    aria-expanded="false" aria-controls="collapseEight">
                  <span class="lead collapse-title collapsed">
                    Can I re-distribute an item? What about under an Extended License?
                  </span>
                </div>
                <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                  <div class="card-body">
                    No. You can't license items and then make them available to others "as-is" (that is, as a stand-alone item or as stock), regardless of which license you purchase. Example: You can't buy a business card template and distribute it as a template, source files and all.
                  </div>
                </div>
              </div>
              <div class="collapse-margin search-content">
                <div class="card-header" id="headingNine" role="button" data-toggle="collapse" data-target="#collapseNine"
                    aria-expanded="false" aria-controls="collapseNine">
                  <span class="lead collapse-title collapsed">
                    Can multiple people within my company have access to the item?
                  </span>
                </div>
                <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
                  <div class="card-body">
                    Yes. If you purchased a single-use license, access should only be given to people working on the single end product incorporating that item.
                  </div>
                </div>
              </div>
              <div class="collapse-margin search-content">
                <div class="card-header" id="headingTen" role="button" data-toggle="collapse" data-target="#collapseTen"
                    aria-expanded="false" aria-controls="collapseTen">
                  <span class="lead collapse-title collapsed">
                    Can I store the item on an intranet so everyone has access?
                  </span>
                </div>
                <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
                  <div class="card-body">
                    No, items must be stored in a location where only those who need them have access. If you purchased a single-use license, once the item has been used in a single end product, the only place you should store it is in the archive files for that end product.
                  </div>
                </div>
              </div>
              <div class="collapse-margin search-content">
                <div class="card-header" id="headingEleven" role="button" data-toggle="collapse" data-target="#collapseEleven"
                    aria-expanded="false" aria-controls="collapseEleven">
                  <span class="lead collapse-title collapsed">
                    Does this apply to all items from Envato Market?
                  </span>
                </div>
                <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordionExample">
                  <div class="card-body">
                    No. This only applies to items with real-world products and trademarks in the actual item. This is most likely in product mock-ups (graphics items), product promos (motion graphics project files) and 3D items. This does not apply to PhotoDune items, which are available for commercial use. This also does not apply to images of products and trademarks used illustratively in item previews, as they're not included in the item you download.
                  </div>
                </div>
              </div>
              <div class="collapse-margin search-content">
                <div class="card-header" id="headingTwelve" role="button" data-toggle="collapse" data-target="#collapseTwelve"
                    aria-expanded="false" aria-controls="collapseTwelve">
                  <span class="lead collapse-title collapsed">
                    What does 'editorial use' mean?
                  </span>
                </div>
                <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#accordionExample">
                  <div class="card-body">
                    Editorial use means using an item only for news or journalistic purposes like in blogs, magazine and newspaper editorial applications.
                  </div>
                </div>
              </div>
              <div class="collapse-margin search-content">
                <div class="card-header" id="headingThirteen" role="button" data-toggle="collapse" data-target="#collapseThirteen"
                    aria-expanded="false" aria-controls="collapseThirteen">
                  <span class="lead collapse-title collapsed">
                    Is this item still 'royalty free'?
                  </span>
                </div>
                <div id="collapseThirteen" class="collapse" aria-labelledby="headingThirteen" data-parent="#accordionExample">
                  <div class="card-body">
                    Yes. Royalty free means you pay for the item once for each end product, and you don't need to pay any additional or ongoing fees for each person who sees or uses it. This is separate to whether you need a clearance from the owner of rights in the real world product or trademark within an item.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</section>
@endsection
@section('page-script')
{{-- Page js files --}}
        <script src="{{ asset(mix('js/scripts/pages/faq-kb.js')) }}"></script>
@endsection
