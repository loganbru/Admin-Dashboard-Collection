@extends('layouts.simple')

@section('content')
    <!-- Hero -->
    <div class="bg-white bg-pattern hero-bubbles" style="background-image: url('{{ asset('/media/various/bg-pattern-inverse.png') }}');">
        <span class="hero-bubble wh-40 pos-t-5 pos-l-20 bg-danger-light"></span>
        <span class="hero-bubble wh-30 pos-t-5 pos-l-90 bg-danger"></span>
        <span class="hero-bubble wh-20 pos-t-10 pos-l-40 bg-danger"></span>
        <span class="hero-bubble wh-40 pos-t-20 pos-l-75 bg-danger-light"></span>
        <span class="hero-bubble wh-30 pos-t-30 pos-l-10 bg-danger"></span>
        <span class="hero-bubble wh-30 pos-t-60 pos-l-25 bg-danger"></span>
        <span class="hero-bubble wh-30 pos-t-60 pos-l-75 bg-danger"></span>
        <span class="hero-bubble wh-40 pos-t-80 pos-l-50 bg-danger-light"></span>
        <span class="hero-bubble wh-40 pos-t-75 pos-l-10 bg-danger-light"></span>
        <span class="hero-bubble wh-30 pos-t-90 pos-l-90 bg-danger-light"></span>
        <div class="hero overflow-hidden">
            <div class="hero-inner">
                <div class="content content-full text-center">
                    <div class="pt-100 pb-150">
                        <h1 class="font-w700 display-4 mt-20 invisible" data-toggle="appear" data-timeout="50">
                            Codebase <span class="text-primary font-w300">3.3</span>
                            <span class="font-w300">+</span>
                            Laravel <span class="font-w300 text-pulse">6</span>
                        </h1>
                        <h2 class="h3 font-w400 text-muted mb-50 invisible" data-toggle="appear" data-class="animated fadeInDown" data-timeout="300">
                            Welcome to the starter kit! Build something amazing!
                        </h2>
                        <div class="invisible" data-toggle="appear" data-class="animated fadeInUp" data-timeout="300">
                            <a class="btn btn-hero btn-alt-primary min-width-175 mb-10 mx-5" href="/dashboard">
                                <i class="fa fa-fw fa-arrow-right mr-1"></i> Enter Dashboard
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Hero -->
@endsection
