@extends('layouts.apps')
@section('title', __('About JRI.cm').' MHSC (Media House of Sports in Cameroon)')
@section('commonsection')
    <!-- Breadcrumbs-->
    <section class="breadcrumbs-custom bg-image context-dark scroll-handler" style="background-image: url({{asset('images/bg-breadcrumbs.jpg')}});">
        <div class="image-overlay" data-canvas-src="images/bg-breadcrumbs.jpg" style="background-image: url({{asset('images/bg-breadcrumbs.jpg')}});"></div>
        <div class="breadcrumbs-main">
            <div class="container">
                <h2 class="breadcrumbs-custom-title scroll-title">{{__('Ours Services')}}</h2>
            </div>
        </div>
        <div class="breadcrumbs-panel">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{url('/')}}">{{__('Home')}}</a></li>
                    <li><a href="#">{{__('Ours Services')}}</a></li>
                    {{--<li class="active">About Us</li>--}}
                </ul>
            </div>
        </div>
    </section>
    <section class="section section-xl bg-gray-100">
        <div class="container">
            <div class="row row-30 row-md-50 row-xl-80">
                <div class="col-lg-6">
                    <!-- Service-->
                    <article class="service block-xl"><a class="service-figure" href="single-class.html"><img src="{{asset('images/service-1-570x319.jpg')}}" alt="" width="570" height="319"/></a>
                        <div class="service-caption">
                            <div class="heading-4 service-title"><a href="single-class.html">Cardio Training</a></div>
                            <div class="big service-text">Greatly improve your health with our cardio workouts.</div>
                        </div>
                        <div class="service-panel">
                            <ul class="list-inline">
                                <li>
                                    <div class="unit align-items-center">
                                        <div class="unit-left"><img class="service-userimage" src="{{asset('images/user-1-57x57.jpg')}}" alt="" width="57" height="57"/>
                                        </div>
                                        <div class="unit-body">
                                            <div class="big service-username">Patrick Stuart</div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="big service-time"><span class="icon mdi mdi-clock"></span><span class="big">60 min</span></div>
                                </li>
                                <li><a class="service-link" href="single-class.html">Read more</a></li>
                            </ul>
                        </div>
                    </article>
                </div>
                <div class="col-lg-6">
                    <!-- Service-->
                    <article class="service block-xl"><a class="service-figure" href="single-class.html"><img src="{{asset('images/service-2-570x319.jpg')}}" alt="" width="570" height="319"/></a>
                        <div class="service-caption">
                            <div class="heading-4 service-title"><a href="single-class.html">Endurance Training</a></div>
                            <div class="big service-text">Increase your stamina with Endurance workouts.</div>
                        </div>
                        <div class="service-panel">
                            <ul class="list-inline">
                                <li>
                                    <div class="unit align-items-center">
                                        <div class="unit-left"><img class="service-userimage" src="{{asset('images/user-2-57x57.jpg')}}" alt="" width="57" height="57"/>
                                        </div>
                                        <div class="unit-body">
                                            <div class="big service-username">Ann Williams</div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="big service-time"><span class="icon mdi mdi-clock"></span><span class="big">60 min</span></div>
                                </li>
                                <li><a class="service-link" href="single-class.html">Read more</a></li>
                            </ul>
                        </div>
                    </article>
                </div>
                <div class="col-lg-6">
                    <!-- Service-->
                    <article class="service block-xl"><a class="service-figure" href="single-class.html"><img src="{{asset('images/service-3-570x319.jpg')}}" alt="" width="570" height="319"/></a>
                        <div class="service-caption">
                            <div class="heading-4 service-title"><a href="single-class.html">Crossfit</a></div>
                            <div class="big service-text">Spice up your workout routine with CrossFit training.</div>
                        </div>
                        <div class="service-panel">
                            <ul class="list-inline">
                                <li>
                                    <div class="unit align-items-center">
                                        <div class="unit-left"><img class="service-userimage" src="{{asset('images/user-3-57x57.jpg')}}" alt="" width="57" height="57"/>
                                        </div>
                                        <div class="unit-body">
                                            <div class="big service-username">Kate McMillan</div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="big service-time"><span class="icon mdi mdi-clock"></span><span class="big">45 min</span></div>
                                </li>
                                <li><a class="service-link" href="single-class.html">Read more</a></li>
                            </ul>
                        </div>
                    </article>
                </div>
                <div class="col-lg-6">
                    <!-- Service-->
                    <article class="service block-xl"><a class="service-figure" href="single-class.html"><img src="{{asset('images/service-4-570x319.jpg')}}" alt="" width="570" height="319"/></a>
                        <div class="service-caption">
                            <div class="heading-4 service-title"><a href="single-class.html">Pilates</a></div>
                            <div class="big service-text">Get a great full-body workout without fancy equipment.</div>
                        </div>
                        <div class="service-panel">
                            <ul class="list-inline">
                                <li>
                                    <div class="unit align-items-center">
                                        <div class="unit-left"><img class="service-userimage" src="{{asset('images/user-4-57x57.jpg')}}" alt="" width="57" height="57"/>
                                        </div>
                                        <div class="unit-body">
                                            <div class="big service-username">Sophia Smith</div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="big service-time"><span class="icon mdi mdi-clock"></span><span class="big">45 min</span></div>
                                </li>
                                <li><a class="service-link" href="single-class.html">Read more</a></li>
                            </ul>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <div class="snackbars" id="form-output-global"></div>
    {{--<script data-cfasync="false" src="{{asset('js/email-decode.min.js')}}"></script>--}}
    <!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->

@endsection

