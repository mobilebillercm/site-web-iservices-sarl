@extends('layouts.apps')
@section('title', 'iServices/'.__('Our Partners'))
@section('commonsection')


    <!-- Breadcrumbs-->
    <section class="breadcrumbs-custom bg-image context-dark scroll-handler" style="background-image: url({{asset('images/bg-breadcrumbs.png')}});">
        <div class="image-overlay" data-canvas-src="{{asset('images/bg-breadcrumbs.png')}}" style="background-image: url({{asset('images/bg-breadcrumbs.png')}});"></div>
        <div class="breadcrumbs-main">
            <div class="container">
                <h2 class="breadcrumbs-custom-title scroll-title">{{__('Our Partners')}}</h2>
            </div>
        </div>
        <div class="breadcrumbs-panel">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{url('/')}}">{{__('Home')}}</a></li>
                    <li><a href="#">{{__('Our Partners')}}</a></li>
                </ul>
            </div>
        </div>
    </section>


    <section class="section section-xl bg-default text-center">
        <div class="container">
            <h2 class="title-7 wow fadeInUp" style="visibility: hidden; animation-name: none;"><span>{{__('Our Partners')}}</span></h2>
            <p class="big wow fadeInUp" style="visibility: hidden; animation-name: none;">
                {{__('We work with a large number of partners and investors who have trusted us and we help them achieve their goals')}}
                {{--<br class="d-none d-xl-block">{{__('our events but also make impactful contributions in the life of our community.')}}--}}
            </p>
            <div class="row row-xl row-30">
                <div class="col-sm-4 col-lg-3 wow fadeInUp" style="visibility: hidden; animation-name: none;"><a class="client-classic" href="http://tradexsa.net/">
                        <img src="{{asset('images/partners/tradex-ok.jpg')}}" alt="" width="270" height="145"></a></div>
                <div class="col-sm-4 col-lg-3 wow fadeInUp" data-wow-delay=".15s" style="visibility: hidden; animation-delay: 0.15s; animation-name: none;"><a class="client-classic" href="https://www.orange.cm/">
                        <img src="{{asset('images/partners/orange-ok.png')}}" alt="" width="270" height="145"></a></div>
                <div class="col-sm-4 col-lg-3 wow fadeInDown" style="visibility: hidden; animation-name: none;"><a class="client-classic" href="http://armp.cm/">
                        <img src="{{asset('images/partners/armp-ok.jpg')}}" alt="" width="270" height="145"></a></div>
                <div class="col-sm-4 col-lg-3 wow fadeInDown" data-wow-delay=".05s" style="visibility: hidden; animation-delay: 0.05s; animation-name: none;"><a class="client-classic" href="https://www.gruppodarco.it">
                        <img src="{{asset('images/partners/darco-ok.png')}}" alt="" width="270" height="145"></a></div>
                <div class="col-sm-4 col-lg-3 wow fadeInDown" data-wow-delay=".1s" style="visibility: hidden; animation-delay: 0.1s; animation-name: none;"><a class="client-classic" href="https://adsnet.cm/">
                        <img src="{{asset('images/partners/logo-adsnet.jpg')}}" alt="" width="270" height="145"></a></div>
                <div class="col-sm-4 col-lg-3 wow fadeInDown" data-wow-delay=".15s" style="visibility: hidden; animation-delay: 0.15s; animation-name: none;"><a class="client-classic" href="https://www.top-systemsrl.com/">
                        <img src="{{asset('images/partners/logo_TopSystem-ok.png')}}" alt="" width="270" height="145"></a></div>
                <div class="col-sm-4 col-lg-3 wow fadeInUp" data-wow-delay=".1s" style="visibility: hidden; animation-delay: 0.1s; animation-name: none;"><a class="client-classic" href="https://www.facebook.com/ngassaaugustin">
                        <img src="{{asset('images/partners/printland-logo-ok.jpg')}}" alt="" width="270" height="145"></a></div>
                <div class="col-sm-4 col-lg-3 wow fadeInUp" data-wow-delay=".05s" style="visibility: hidden; animation-delay: 0.05s; animation-name: none;"><a class="client-classic" href="{{url('/')}}">
                        <img src="{{asset('images/partners/soweda-ok.jpg')}}" alt="" width="270" height="145"></a></div>

            </div>
        </div>
    </section>


    <div class="snackbars" id="form-output-global"></div>

    <!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->

@endsection
