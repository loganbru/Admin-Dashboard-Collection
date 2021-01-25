@extends('layouts/contentLayoutMaster')

@section('title', 'Colors')

@section('page-style')
        {{-- Page css files --}}
        <link rel="stylesheet" href="{{ asset(mix('/css/pages/colors.css')) }}">
@endsection
@section('content')
{{-- Background color start --}}
<section id="backcolor">
    <div class="row">
      <div class="col-12">
        <div class="card background-color">
          <div class="card-header">
            <h4 class="card-title">Default Colors</h4>
          </div>
          <div class="card-content">
            <div class="card-body mb-0">
              <p class="mb-0">We have a series of colors that are used by default. They include:</p>
              <ul class="colors-list list-unstyled mb-0">
                <li>
                  <i class="feather icon-chevrons-right"></i>Primary
                </li>
                <li>
                  <i class="feather icon-chevrons-right"></i>Success
                </li>
                <li>
                  <i class="feather icon-chevrons-right"></i>Danger
                </li>
                <li>
                  <i class="feather icon-chevrons-right"></i>Warning
                </li>
                <li>
                  <i class="feather icon-chevrons-right"></i>Info
                </li>
              </ul>
              <p>For each color, we think has its functionality in the application as alerts of errors <b>(danger)</b>,
                warnings to the user <b>(warning)</b>, communications of approval <b>(success)</b>, or main color of the
                application <b>(primary)</b>.
                <div class="d-flex justify-content-start flex-wrap">
                  <div
                    class="text-center bg-primary colors-container rounded text-white width-100 height-100 d-flex align-items-center justify-content-center mr-1 ml-50 my-1 shadow">
                    <span class="align-middle">primary</span>
                  </div>
                  <div
                    class="text-center bg-success colors-container rounded text-white width-100 height-100 d-flex align-items-center justify-content-center mr-1 ml-50  my-1 shadow">
                    <span class="align-middle">success</span>
                  </div>
                  <div
                    class="text-center bg-danger colors-container rounded text-white width-100 height-100 d-flex align-items-center justify-content-center mr-1 ml-50  my-1 shadow">
                    <span class="align-middle">danger</span>
                  </div>
                  <div
                    class="text-center bg-warning colors-container rounded text-white width-100 height-100 d-flex align-items-center justify-content-center mr-1 ml-50  my-1 shadow">
                    <span class="align-middle">warning</span>
                  </div>
                  <div
                    class="text-center bg-info colors-container rounded text-white width-100 height-100 d-flex align-items-center justify-content-center my-1 ml-50 shadow">
                    <span class="align-middle">info</span>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Background color end --}}

  {{-- Gradient color start --}}
  <section id="backcolor-gradient">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Gradient Colors</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p class="mb-0">We have make gradient color based on our default color:</p>
              <ul class="colors-list list-unstyled mb-0">
                <li>
                  <i class="feather icon-chevrons-right"></i>bg-gradient-primary
                </li>
                <li>
                  <i class="feather icon-chevrons-right"></i>bg-gradient-success
                </li>
                <li>
                  <i class="feather icon-chevrons-right"></i>bg-gradient-danger
                </li>
                <li>
                  <i class="feather icon-chevrons-right"></i>bg-gradient-warning
                </li>
                <li>
                  <i class="feather icon-chevrons-right"></i>bg-gradient-info
                </li>
              </ul>
              <p>For each color, we think has its functionality in the application as alerts of errors <b>(danger)</b>,
                warnings to the user <b>(warning)</b>, communications of approval <b>(success)</b>, or main color of the
                application <b>(primary)</b>.
                <div class="d-flex justify-content-start flex-wrap">
                  <div
                    class="text-center colors-container bg-gradient-primary rounded text-white width-100 height-100 d-flex align-items-center justify-content-center mr-1 ml-50 my-1 shadow">
                    <span class="align-middle">primary gradient</span>
                  </div>
                  <div
                    class="text-center colors-container bg-gradient-success rounded text-white width-100 height-100 d-flex align-items-center justify-content-center mr-1 ml-50  my-1 shadow">
                    <span class="align-middle">success gradient</span>
                  </div>
                  <div
                    class="text-center colors-container bg-gradient-danger rounded text-white width-100 height-100 d-flex align-items-center justify-content-center mr-1 ml-50  my-1 shadow">
                    <span class="align-middle">danger gradient</span>
                  </div>
                  <div
                    class="text-center colors-container bg-gradient-warning rounded text-white width-100 height-100 d-flex align-items-center justify-content-center mr-1 ml-50  my-1 shadow">
                    <span class="align-middle">warning gradient</span>
                  </div>
                  <div
                    class="text-center colors-container bg-gradient-info rounded text-white width-100 height-100 d-flex align-items-center justify-content-center my-1 ml-50 shadow px-1">
                    <span class="align-middle">info gradient</span>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
{{-- Gradient color end --}}
@endsection
