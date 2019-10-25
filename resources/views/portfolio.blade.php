@extends('layouts.apps')
@section('title', 'iServices/'.__('Portfolio'))
@section('commonsection')


    <!-- Breadcrumbs-->
    <section class="breadcrumbs-custom bg-image context-dark scroll-handler" style="background-image: url({{asset('images/bg-breadcrumbs.png')}});">
        <div class="image-overlay" data-canvas-src="{{asset('images/bg-breadcrumbs.png')}}" style="background-image: url({{asset('images/bg-breadcrumbs.png')}});"></div>
        <div class="breadcrumbs-main">
            <div class="container">
                <h2 class="breadcrumbs-custom-title scroll-title">{{__('Portfolio')}}</h2>
            </div>
        </div>
        <div class="breadcrumbs-panel">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{url('/')}}">{{__('Home')}}</a></li>
                    <li><a href="#">{{__('Portfolio')}}</a></li>
                </ul>
            </div>
        </div>
    </section>



    <section class="section section-xl bg-gray-100 text-center">
        <div class="container">
            <h2 class="title-7"><span>{{__('Our realizations')}}</span></h2>
            <div class="row row-30 row-md-50 row-xl-80">
                <div class="col-lg-6">
                    <!-- Service-->
                    <article class="service block-xl"><a class="service-figure" href="https://play.google.com/store/apps/details?id=search.pridesoft.armp.cm.pridesoftsearch&hl=en"><img src="{{asset('images/pridesoft-mobile.png')}}" alt="" width="570" height="319"/></a>
                        <div class="service-caption">
                            <div class="heading-4 service-title"><a href="https://play.google.com/store/apps/details?id=search.pridesoft.armp.cm.pridesoftsearch&hl=en">Pridesoft Mobile</a></div>
                            <div class="big service-text">Application Mobile Pour l'application Pridesoft de ARMP.</div>
                        </div>
                        <div class="service-panel">
                            <ul class="list-inline">
                                <li>
                                    <div class="unit align-items-center">
                                        <div class="unit-left"><img class="service-userimage" src="{{asset('images/ic_launcher-pridesoftmobile.png')}}" alt="" width="57" height="57"/></div>
                                        <div class="unit-body">
                                            <div class="big service-username">ARMP</div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="big service-time"><span class="icon mdi mdi-clock"></span><span class="big">Réalisé en Juin 2016</span></div>
                                </li>
                                <li><a class="service-link" href="http://armp.cm/">{{__('Read more')}}</a></li>
                            </ul>
                        </div>
                    </article>
                </div>

                <div class="col-lg-6">
                    <!-- Service-->
                    <article class="service block-xl"><a class="service-figure" href="http://tradexsa.net/"><img src="{{asset('images/tradex.jpg')}}" alt="" width="570" height="319"/></a>
                        <div class="service-caption">
                            <div class="heading-4 service-title"><a href="http://tradexsa.net/">Tradex Mobile</a></div>
                            <div class="big service-text">Application de géolocalisation des stations services Tradex et de notification sur les disponibilités des produits Tradex</div>
                        </div>
                        <div class="service-panel">
                            <ul class="list-inline">
                                <li>
                                    <div class="unit align-items-center">
                                        <div class="unit-left"><img class="service-userimage" src="{{asset('images/tradex-logo.jpeg')}}" alt="" width="57" height="57"/>
                                        </div>
                                        <div class="unit-body">
                                            <div class="big service-username">TRADEX S.A</div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="big service-time"><span class="icon mdi mdi-clock"></span><span class="big">Réalisé en 2018</span></div>
                                </li>
                                <li><a class="service-link" href="https://play.google.com/store/apps/details?id=cm.siplus2018.tradex&hl=en">{{__('Read more')}}</a></li>
                            </ul>
                        </div>
                    </article>
                </div>

                <div class="col-lg-6">
                    <!-- Service-->
                    <article class="service block-xl"><a class="service-figure" href="{{url('/')}}"><img src="{{asset('images/soweda.png')}}" alt="" width="570" height="319"/></a>
                        <div class="service-caption">
                            <div class="heading-4 service-title"><a href="{{url('/')}}">SOWEDA SIG</a></div>
                            <div class="big service-text">système de gestion intégré de la SOWEDA.</div>
                        </div>
                        <div class="service-panel">
                            <ul class="list-inline">
                                <li>
                                    <div class="unit align-items-center">
                                        <div class="unit-left"><img class="service-userimage" src="{{asset('images/soweda.png')}}" alt="" width="57" height="57"/>
                                        </div>
                                        <div class="unit-body">
                                            <div class="big service-username">MINADER/SOWEDA</div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="big service-time"><span class="icon mdi mdi-clock"></span><span class="big">Réalisé en 2018. En partenariat avec N.C. Consulting</span></div>
                                </li>
                                <li><a class="service-link" href="http://www.ncconsulting.com/">{{__('Read more')}}</a></li>
                            </ul>
                        </div>
                    </article>
                </div>

                <div class="col-lg-6">
                    <!-- Service-->
                    <article class="service block-xl"><a class="service-figure" href="https://www.facebook.com/ngassaaugustin">
                            <img src="{{asset('images/printland.png')}}" alt="" width="570" height="319"/></a>
                        <div class="service-caption">
                            <div class="heading-4 service-title"><a href="https://www.facebook.com/ngassaaugustin">X-Presence</a></div>
                            <div class="big service-text">Application de controle de présence dans les établissements scolaires.</div>
                        </div>
                        <div class="service-panel">
                            <ul class="list-inline">
                                <li>
                                    <div class="unit align-items-center">
                                        <div class="unit-left"><img class="service-userimage" src="{{asset('images/ngassa.jpg')}}" alt="" width="57" height="57"/>
                                        </div>
                                        <div class="unit-body">
                                            <div class="big service-username"><strong style="color: orange;">Print</strong><strong style="color: green;">Land</strong></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="big service-time"><span class="icon mdi mdi-clock"></span><span class="big">En cours de realisation</span></div>
                                </li>
                                <li><a class="service-link" href="https://www.facebook.com/ngassaaugustin">{{__('Read more')}}</a></li>
                            </ul>
                        </div>
                    </article>
                </div>


                <div class="col-lg-6">
                    <!-- Service-->
                    <article class="service block-xl"><a class="service-figure" href="https://mobilebiller.idea-cm.club/"><img src="{{asset('images/mobilebiller.png')}}" alt="" width="570" height="319"/></a>
                        <div class="service-caption">
                            <div class="heading-4 service-title"><a href="https://mobilebiller.idea-cm.club/">Mobile Biller</a></div>
                            <div class="big service-text">Application d'émission de preuves matériels après une transaction Mobile money ou Orange money.</div>
                        </div>
                        <div class="service-panel">
                            <ul class="list-inline">
                                <li>
                                    <div class="unit align-items-center">
                                        <div class="unit-left"><img class="service-userimage" src="http://mobilebiller.idea-cm.club/mobilebiller/web/public/assets/images/logo.png" alt="" width="57" height="57"/>
                                        </div>
                                        <div class="unit-body">
                                            <div class="big service-username">iServices SARL</div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="big service-time"><span class="icon mdi mdi-clock"></span><span class="big">Réalisé en 2018</span></div>
                                </li>
                                <li><a class="service-link" href="https://mobilebiller.idea-cm.club/">{{__('Read more')}}</a></li>
                            </ul>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>


    <div class="snackbars" id="form-output-global"></div>

    <!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->

@endsection
