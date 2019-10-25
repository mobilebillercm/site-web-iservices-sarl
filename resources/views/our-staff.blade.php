@extends('layouts.apps')
@section('title', __('About JRI.cm').' MHSC (Media House of Sports in Cameroon)')
@section('commonsection')
    <!-- Breadcrumbs-->
    <section class="breadcrumbs-custom bg-image context-dark scroll-handler" style="background-image: url({{asset('images/bg-breadcrumbs.jpg')}});">
        <div class="image-overlay" data-canvas-src="images/bg-breadcrumbs.jpg" style="background-image: url({{asset('images/bg-breadcrumbs.jpg')}});"></div>
        <div class="breadcrumbs-main">
            <div class="container">
                <h2 class="breadcrumbs-custom-title scroll-title">{{__('Ours Staff')}}</h2>
            </div>
        </div>
        <div class="breadcrumbs-panel">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{url('/')}}">{{__('Home')}}</a></li>
                    <li><a href="#">{{__('Ours Staff')}}</a></li>
                    {{--<li class="active">About Us</li>--}}
                </ul>
            </div>
        </div>
    </section>

    <!--Coaches 1-->
    <section class="section section-xl bg-default text-center">
        <div class="container">
            <h2>Coaches #1</h2>
            <div class="row row-xl row-30">
                <div class="col-sm-6 col-lg-4">
                    <!-- Team-->
                    <article class="team block-md"><img class="team-image" src="{{asset('images/team-1-370x314.jpg')}}" alt="" width="370" height="314"/>
                        <div class="team-content">
                            <div>
                                <div class="team-position">Fitness Coach</div>
                                <div class="heading-5 team-name"><a href="#">Patrick Stuart</a></div>
                                <ul class="team-list-social list-social list-inline list-inline-sm">
                                    <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                                    <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                                    <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <!-- Team-->
                    <article class="team block-md"><img class="team-image" src="{{asset('images/team-2-370x314.jpg')}}" alt="" width="370" height="314"/>
                        <div class="team-content">
                            <div>
                                <div class="team-position">Yoga/Fitness coach</div>
                                <div class="heading-5 team-name"><a href="#">Ann Williams</a></div>
                                <ul class="team-list-social list-social list-inline list-inline-sm">
                                    <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                                    <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                                    <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <!-- Team-->
                    <article class="team block-md"><img class="team-image" src="{{asset('images/team-3-370x314.jpg')}}" alt="" width="370" height="314"/>
                        <div class="team-content">
                            <div>
                                <div class="team-position">Crossfit Coach</div>
                                <div class="heading-5 team-name"><a href="#">Sam Peterson</a></div>
                                <ul class="team-list-social list-social list-inline list-inline-sm">
                                    <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                                    <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                                    <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <!-- Team-->
                    <article class="team block-md"><img class="team-image" src="{{asset('images/team-4-370x314.jpg')}}" alt="" width="370" height="314"/>
                        <div class="team-content">
                            <div>
                                <div class="team-position">Fitness Expert</div>
                                <div class="heading-5 team-name"><a href="#">Sophia Smith</a></div>
                                <ul class="team-list-social list-social list-inline list-inline-sm">
                                    <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                                    <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                                    <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <!-- Team-->
                    <article class="team block-md"><img class="team-image" src="{{asset('images/team-5-370x314.jpg')}}" alt="" width="370" height="314"/>
                        <div class="team-content">
                            <div>
                                <div class="team-position">Bodybuilding coach</div>
                                <div class="heading-5 team-name"><a href="#">Earl Allen</a></div>
                                <ul class="team-list-social list-social list-inline list-inline-sm">
                                    <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                                    <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                                    <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <!-- Team-->
                    <article class="team block-md"><img class="team-image" src="{{asset('images/team-6-370x314.jpg')}}" alt="" width="370" height="314"/>
                        <div class="team-content">
                            <div>
                                <div class="team-position">Crossfit/Fitness Coach</div>
                                <div class="heading-5 team-name"><a href="#">Jessica Roberts</a></div>
                                <ul class="team-list-social list-social list-inline list-inline-sm">
                                    <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                                    <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                                    <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!--Coaches 2-->
    <section class="section section-xl bg-default text-center">
        <div class="container">
            <h2>Coaches #2</h2>
            <div class="row row-xl row-30 gutter-6">
                <div class="col-sm-6 col-lg-3">
                    <!-- Team modern-->
                    <article class="team-modern block-1">
                        <div class="team-modern-figure"><a href="single-coach-page.html"><img class="img-duotone" src="{{asset('images/team-7-290x339.jpg')}}" alt="" width="290" height="339" data-gradient-map="#242659, #7bd7eb"/></a></div>
                        <div class="team-modern-content">
                            <div class="heading-5 team-modern-name"><a href="single-coach-page.html">Sam Peterson</a></div>
                            <div class="team-modern-position">Crossfit Coach</div>
                            <div class="team-modern-share">
                                <div class="team-modern-share-button" data-custom-toggle="" data-custom-toggle-disable-on-blur="true"></div>
                                <ul class="team-modern-list-social">
                                    <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                                    <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <!-- Team modern-->
                    <article class="team-modern block-1">
                        <div class="team-modern-figure"><a href="single-coach-page.html"><img class="img-duotone" src="{{asset('images/team-8-290x339.jpg')}}" alt="" width="290" height="339" data-gradient-map="#242659, #7bd7eb"/></a></div>
                        <div class="team-modern-content">
                            <div class="heading-5 team-modern-name"><a href="single-coach-page.html">Sophia smith</a></div>
                            <div class="team-modern-position">Fitness Expert</div>
                            <div class="team-modern-share">
                                <div class="team-modern-share-button" data-custom-toggle="" data-custom-toggle-disable-on-blur="true"></div>
                                <ul class="team-modern-list-social">
                                    <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                                    <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <!-- Team modern-->
                    <article class="team-modern block-1">
                        <div class="team-modern-figure"><a href="single-coach-page.html"><img class="img-duotone" src="{{asset('images/team-9-290x339.jpg')}}" alt="" width="290" height="339" data-gradient-map="#242659, #7bd7eb"/></a></div>
                        <div class="team-modern-content">
                            <div class="heading-5 team-modern-name"><a href="single-coach-page.html">Earl Allen</a></div>
                            <div class="team-modern-position">Bodybuilding Coach</div>
                            <div class="team-modern-share">
                                <div class="team-modern-share-button" data-custom-toggle="" data-custom-toggle-disable-on-blur="true"></div>
                                <ul class="team-modern-list-social">
                                    <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                                    <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <!-- Team modern-->
                    <article class="team-modern block-1">
                        <div class="team-modern-figure"><a href="single-coach-page.html"><img class="img-duotone" src="{{asset('images/team-10-290x339.jpg')}}" alt="" width="290" height="339" data-gradient-map="#242659, #7bd7eb"/></a></div>
                        <div class="team-modern-content">
                            <div class="heading-5 team-modern-name"><a href="single-coach-page.html">Jessica Robertson</a></div>
                            <div class="team-modern-position">Crossfit/fitness Coach</div>
                            <div class="team-modern-share">
                                <div class="team-modern-share-button" data-custom-toggle="" data-custom-toggle-disable-on-blur="true"></div>
                                <ul class="team-modern-list-social">
                                    <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                                    <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                                </ul>
                            </div>
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
