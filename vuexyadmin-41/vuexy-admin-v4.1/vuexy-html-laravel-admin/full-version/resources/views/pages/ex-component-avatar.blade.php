@extends('layouts/contentLayoutMaster')

@section('title', 'Avatar')

@section('content')
{{-- Default Avatar Starts --}}
<section id="default-avatar">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Default</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>
                Wrap your content with <code>.avatar</code> class and wrap your text in <code>.avatar-content</code> to
                create a avatar.You have to use inline <code>attributes</code> to set height width of image in default
                avatar.
              </p>
              <div class="avatar mr-1 ">
                <span class="avatar-content"><i class="avatar-icon feather icon-github"></i></span>
              </div>
              <div class="avatar mr-1 ">
                <span class="avatar-content">LD</span>
              </div>
              <div class="avatar mr-1 ">
                <span class="avatar-content">Luisd</span>
              </div>
              <div class="avatar mr-1 ">
                <img src="{{ asset('images/portrait/small/avatar-s-20.jpg') }}" alt="avtar img holder" height="32"
                  width="32">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Default Avatar Ends --}}

  {{-- Sizes Avatar Starts --}}
  <section id="sizes-avatar">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Sizes</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>
                use class <code>.avatar-{sm|lg|xl}</code> to modify size of your avatar.
              </p>
              <div class="avatar mr-1 avatar-sm">
                <span class="avatar-content"><i class="avatar-icon feather icon-github"></i></span>
              </div>
              <div class="avatar mr-1">
                <span class="avatar-content">LD</span>
              </div>
              <div class="avatar mr-1 avatar-lg">
                <img src="{{ asset('images/portrait/small/avatar-s-20.jpg') }}" alt="avtar img holder">
              </div>
              <div class="avatar mr-1 avatar-xl">
                <img src="{{ asset('images/portrait/small/avatar-s-20.jpg') }}" alt="avtar img holder">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Sizes Avatar Ends --}}

  {{-- Avatar Colors Starts--}}
  <section id="avatar-colors">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Colors</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>
                use class <code>bg-{color-name}</code> to change background color of your avatar
              </p>
              <div class="avatar bg-primary mr-1">
                <div class="avatar-content">
                  P
                </div>
              </div>
              <div class="avatar bg-success mr-1">
                <div class="avatar-content">
                  S
                </div>
              </div>
              <div class="avatar bg-danger mr-1">
                <div class="avatar-content">
                  D
                </div>
              </div>
              <div class="avatar bg-info mr-1">
                <div class="avatar-content">
                  I
                </div>
              </div>
              <div class="avatar bg-warning mr-1">
                <div class="avatar-content">
                  W
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Avatar Colors Ends --}}

  {{-- Avatar With Badge Starts --}}
  <section id="avatar-badge">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Avatar With Badge</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>
                You can add notification label to avatar by using <code>.badge</code> with <code>.badge-up</code> </p>
              <div class="avatar bg-primary mr-1">
                <div class="avatar-content position-relative">
                  <i class="avatar-icon feather icon-facebook"></i>
                  <span class="badge badge-pill badge-danger badge-sm badge-up">7</span>
                </div>
              </div>
              <div class="avatar bg-info mr-1">
                <div class="avatar-content position-relative">
                  <i class="avatar-icon feather icon-twitter"></i>
                  <span class="badge badge-pill badge-danger badge-sm badge-up">5</span>
                </div>
              </div>
              <div class="avatar bg-success mr-1">
                <div class="avatar-content position-relative">
                  <i class="avatar-icon feather icon-instagram"></i>
                  <span class="badge badge-pill badge-danger badge-sm badge-up">6</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Avatar With Badge Ends --}}

  {{-- Avatar Icons Starts --}}
  <section id="avatar-icons">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Icons</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <div class="avatar mr-1">
                <div class="avatar-content">
                  <i class="avatar-icon feather icon-github"></i>
                </div>
              </div>
              <div class="avatar bg-primary mr-1">
                <div class="avatar-content">
                  <i class="avatar-icon feather icon-calendar"></i>
                </div>
              </div>
              <div class="avatar bg-success mr-1">
                <div class="avatar-content">
                  <i class="avatar-icon feather icon-inbox"></i>
                </div>
              </div>
              <div class="avatar bg-danger mr-1">
                <div class="avatar-content">
                  <i class="avatar-icon feather icon-camera"></i>
                </div>
              </div>
              <div class="avatar bg-warning mr-1">
                <div class="avatar-content">
                  <i class="avatar-icon feather icon-award"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Avatar Icons Ends --}}

  {{-- Avatar Status Starts --}}
  <section id="avatar-status">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Status</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>
                use class <code>.avatar-status-{online | offline | away | busy}</code> after <code>.avatar-content</code>
                to create avatar with status
              </p>
              <div class="avatar mr-1">
                <span class="avatar-content"><i class="avatar-icon feather icon-github"></i></span>
                <span class="avatar-status-online"></span>
              </div>
              <div class="avatar mr-1">
                <span class="avatar-content">LD</span>
                <span class="avatar-status-offline"></span>
              </div>
              <div class="avatar mr-1">
                <span class="avatar-content">Luisd</span>
                <span class="avatar-status-away"></span>
              </div>

              <div class="avatar mr-1">
                <img src="{{ asset('images/portrait/small/avatar-s-20.jpg') }}" alt="avtar img holder" width="32"
                  height="32">
                <span class="avatar-status-busy"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Avatar Status Ends --}}
  @endsection
