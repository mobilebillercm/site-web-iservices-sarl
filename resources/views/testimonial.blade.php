@extends('layouts.apps')
@section('title', 'iServices/'.__('Testimonials'))
@section('commonsection')
    <!-- Breadcrumbs-->
    <section class="breadcrumbs-custom bg-image context-dark scroll-handler" style="background-image: url({{asset('images/bg-breadcrumbs.jpg')}});">
        <div class="image-overlay" data-canvas-src="images/bg-breadcrumbs.png" style="background-image: url({{asset('images/bg-breadcrumbs.png')}});"></div>
        <div class="breadcrumbs-main">
            <div class="container">
                <h2 class="breadcrumbs-custom-title scroll-title">{{__('Testimonials')}}</h2>
            </div>
        </div>
        <div class="breadcrumbs-panel">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{url('/')}}">{{__('Home')}}</a></li>
                    <li><a href="#">{{__('Testimonials')}}</a></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section section-xl bg-default" id="our-mission">
        <div class="container">
            <div class="row row-30 row-lg-50">
                <div class="col-md-12 text-center" >
                    <!-- Video-->
                    <article class="video" >
                        <img class="" src="{{asset('images/i-iservices-sarl.jpg')}}" alt="" width="549" height="384"/>
                        <a class="video-link" href="https://www.youtube.com/watch?v=1UWpbtUupQQ" data-lightgallery="item"><span class="icon mdi mdi-play"></span></a>
                    </article>
                </div>
            </div>
        </div>

    </section>

    <!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->

@endsection



