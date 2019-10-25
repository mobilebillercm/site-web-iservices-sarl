@extends('layouts.apps')
@section('title', __('About JRI.cm').' MHSC (Media House of Sports in Cameroon)')
@section('commonsection')
    <!-- Breadcrumbs-->
    <section class="breadcrumbs-custom bg-image context-dark scroll-handler" style="background-image: url({{asset('images/bg-breadcrumbs.jpg')}});">
        <div class="image-overlay" data-canvas-src="images/bg-breadcrumbs.jpg" style="background-image: url({{asset('images/bg-breadcrumbs.jpg')}});"></div>
        <div class="breadcrumbs-main">
            <div class="container">
                <h2 class="breadcrumbs-custom-title scroll-title">{{__('About JRI.cm')}}</h2>
            </div>
        </div>
        <div class="breadcrumbs-panel">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{url('/')}}">{{__('Home')}}</a></li>
                    <li><a href="#">{{__('About JRI.cm')}}</a></li>
                    {{--<li class="active">About Us</li>--}}
                </ul>
            </div>
        </div>
    </section>
    <!--Our Mission-->
    <section class="section section-xl bg-default">
        <div class="container">
            <div class="row row-30 row-lg-50">
                <div class="col-md-6">
                    <!-- Video-->
                    <article class="video"><img class="video-image" src="{{asset('images/video-1-549x384.jpg')}}" alt="" width="549" height="384"/>
                        <a class="video-link" href="https://www.youtube.com/watch?v=1UWpbtUupQQ" data-lightgallery="item"><span class="icon mdi mdi-play"></span></a>
                    </article>
                </div>
                <div class="col-md-6">
                    <div class="inset-xl-left-70">
                        <h2>Our Mission</h2>
                        <!-- Quote minimal-->
                        <article class="quote-minimal">
                            <div class="heading-4 quote-minimal-text">
                                <p class="q">We aim to provide the community with quality fitness and sport events.</p>
                            </div>
                        </article>
                        <p class="big">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Adipiscing commodo elit at imperdiet dui. Mauris ultrices eros in cursus turpis massa tincidunt dui. Eget dolor morbi non arcu risus quis varius quam quisque.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Counters-->
    <section class="section section-lg bg-gray-700 text-center">
        <div class="container">

            <div class="row row-30 justify-content-center">
                <div class="col-12 text-center heading-2">
                    Nos palmares
                </div>
            </div>

            <div class="row row-30 justify-content-center">
                <div class="col-sm-6 col-md-4">
                    <!--Counter-->
                    <div class="counter-wrap block-sm">
                        <div class="counter-main">
                            <div class="heading-1 counter-number counter">45</div>
                            <div class="heading-3 counter-postfix">k</div>
                        </div>
                        <div class="big counter-text">Tellus mauris a diam maecenas sed adipiscing commodo elit</div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <!--Counter-->
                    <div class="counter-wrap block-sm">
                        <div class="counter-main">
                            <div class="heading-1 counter-number counter">78</div>
                            <div class="heading-3 counter-postfix">%</div>
                        </div>
                        <div class="big counter-text">Mauris ultrices eros in cursus turpis massa tincidunt dui.</div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <!--Counter-->
                    <div class="counter-wrap block-sm">
                        <div class="counter-main">
                            <div class="heading-1 counter-number counter">90</div>
                            <div class="heading-3 counter-postfix">k</div>
                        </div>
                        <div class="big counter-text">Lobortis scelerisque dui faucibus in viverra maecenas.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Coaches 1-->
    <section class="section section-xl bg-default text-center">
        <div class="container">
            <h2>Our team</h2>
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
    <!--Icon List-->
    <section class="section bg-gray-5">
        <div class="row no-gutters bordered-1">
            <div class="col-sm-6 col-xl-3">
                <!-- Box classic-->
                <article class="box-classic">
                    <div class="box-classic-icon mdi mdi-wallet"></div>
                    <div class="heading-3 box-classic-title">Affordable Prices</div>
                    <div class="big box-classic-text">Torquis nobilis cobaltum est. Sunt lacteaes magicae raptus, superbus verpaes.</div>
                </article>
            </div>
            <div class="col-sm-6 col-xl-3">
                <!-- Box classic-->
                <article class="box-classic">
                    <div class="box-classic-icon mdi mdi-account-star-variant"></div>
                    <div class="heading-3 box-classic-title">Professional Team</div>
                    <div class="big box-classic-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                </article>
            </div>
            <div class="col-sm-6 col-xl-3">
                <!-- Box classic-->
                <article class="box-classic">
                    <div class="box-classic-icon mdi mdi-map-marker"></div>
                    <div class="heading-3 box-classic-title">Best Location</div>
                    <div class="big box-classic-text">Vae, superbus sensorem! Albus, azureus particulas superbe reperire de domesticus.</div>
                </article>
            </div>
            <div class="col-sm-6 col-xl-3">
                <!-- Box classic-->
                <article class="box-classic">
                    <div class="box-classic-icon mdi mdi-trophy-variant"></div>
                    <div class="heading-3 box-classic-title">Premium Equipment</div>
                    <div class="big box-classic-text">Est bassus demissio, cesaris. Clemens, azureus fraticinidas velox imperium de secundus.</div>
                </article>
            </div>
        </div>
    </section>
    <!-- Our partners-->
    <section class="section section-xl bg-default text-center">
        <div class="container">
            <h2>Our partners</h2>
            <p class="big">Ultrices mi tempus imperdiet nulla malesuada pellentesque elit eget. Enim lobortis scelerisque fermentum <br class="d-none d-xl-block">dui faucibus. A lacus vestibulum sed arcu non. Eu tincidunt tortor aliquam nulla facilisi.
            </p>
            <div class="row row-xl row-30">
                <div class="col-sm-4 col-lg-3"><a class="client-classic" href="#"><img src="images/client-1-270x145.png" alt="" width="270" height="145"/></a></div>
                <div class="col-sm-4 col-lg-3"><a class="client-classic" href="#"><img src="images/client-2-270x145.png" alt="" width="270" height="145"/></a></div>
                <div class="col-sm-4 col-lg-3"><a class="client-classic" href="#"><img src="images/client-3-270x145.png" alt="" width="270" height="145"/></a></div>
                <div class="col-sm-4 col-lg-3"><a class="client-classic" href="#"><img src="images/client-4-270x145.png" alt="" width="270" height="145"/></a></div>
                <div class="col-sm-4 col-lg-3"><a class="client-classic" href="#"><img src="images/client-5-270x145.png" alt="" width="270" height="145"/></a></div>
                <div class="col-sm-4 col-lg-3"><a class="client-classic" href="#"><img src="images/client-6-270x145.png" alt="" width="270" height="145"/></a></div>
                <div class="col-sm-4 col-lg-3"><a class="client-classic" href="#"><img src="images/client-7-270x145.png" alt="" width="270" height="145"/></a></div>
                <div class="col-sm-4 col-lg-3"><a class="client-classic" href="#"><img src="images/client-8-270x145.png" alt="" width="270" height="145"/></a></div>
            </div>
        </div>
    </section>

    <div class="snackbars" id="form-output-global"></div>
    {{--<script data-cfasync="false" src="{{asset('js/email-decode.min.js')}}"></script>--}}
    <!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->

@endsection


