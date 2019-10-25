@extends('layouts.apps')
@section('title', 'iServices/'.__('Team'))
@section('commonsection')


    <!-- Breadcrumbs-->
    <section class="breadcrumbs-custom bg-image context-dark scroll-handler" style="background-image: url({{asset('images/bg-breadcrumbs.png')}});">
        <div class="image-overlay" data-canvas-src="{{asset('images/bg-breadcrumbs.png')}}" style="background-image: url({{asset('images/bg-breadcrumbs.png')}});"></div>
        <div class="breadcrumbs-main">
            <div class="container">
                <h2 class="breadcrumbs-custom-title scroll-title">{{__('Team')}}</h2>
            </div>
        </div>
        <div class="breadcrumbs-panel">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{url('/')}}">{{__('Home')}}</a></li>
                    <li><a href="#">{{__('Team')}}</a></li>
                </ul>
            </div>
        </div>
    </section>


    <section class="section section-xl bg-default text-center">
        <div class="container">
            <h2>Notre equipe</h2>
            <div class="row row-xl row-30 gutter-6">
                <div class="col-sm-6 col-lg-3">
                    <!-- Team modern-->
                    <article class="team-modern block-1">
                        <div class="team-modern-figure"><a href="#">
                                <img class="img-duotone" src="{{asset('images/team/didier.png')}}" alt="" width="290" height="339" data-gradient-map="#242659, #7bd7eb"/></a></div>
                        <div class="team-modern-content">
                            <div class="heading-5 team-modern-name"><a href="#">Didier J. Nkalla Ehawe</a></div>
                            <div class="team-modern-position">Software Engineer - iServices SARL</div>
                            <div class="team-modern-share">
                                <div class="team-modern-share-button" data-custom-toggle="" data-custom-toggle-disable-on-blur="true"></div>
                                <ul class="team-modern-list-social">
                                    <li><a class="icon mdi mdi-facebook" href="https://www.facebook.com/didnkal"></a></li>
                                    <li><a class="icon mdi mdi-whatsapp" href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <!-- Team modern-->
                    <article class="team-modern block-1">
                        <div class="team-modern-figure"><a href="#">
                                <img class="img-duotone" src="{{asset('images/team/felicien.jpeg')}}" alt="" width="290" height="339" data-gradient-map="#242659, #7bd7eb"/></a></div>
                        <div class="team-modern-content">
                            <div class="heading-5 team-modern-name"><a href="#">Felicien Fotio Manfo</a></div>
                            <div class="team-modern-position">Software Engineer - iServices SARL</div>
                            <div class="team-modern-share">
                                <div class="team-modern-share-button" data-custom-toggle="" data-custom-toggle-disable-on-blur="true"></div>
                                <ul class="team-modern-list-social">
                                    <li><a class="icon mdi mdi-facebook" href="https://www.facebook.com/elbertinino"></a></li>
                                    <li><a class="icon mdi mdi-whatsapp" href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <!-- Team modern-->
                    <article class="team-modern block-1">
                        <div class="team-modern-figure"><a href="#">
                                <img class="img-duotone" src="{{asset('images/team/fabrice.jpeg')}}" alt="" width="290" height="339" data-gradient-map="#242659, #7bd7eb"/></a></div>
                        <div class="team-modern-content">
                            <div class="heading-5 team-modern-name"><a href="#">Fabrice Fothe Fopa</a></div>
                            <div class="team-modern-position">Network Security Engineer - iServices SARL</div>
                            <div class="team-modern-share">
                                <div class="team-modern-share-button" data-custom-toggle="" data-custom-toggle-disable-on-blur="true"></div>
                                <ul class="team-modern-list-social">
                                    <li><a class="icon mdi mdi-facebook" href="https://www.facebook.com/fothefabrice"></a></li>
                                    <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <!-- Team modern-->
                    <article class="team-modern block-1">
                        <div class="team-modern-figure"><a href="#">
                                <img class="img-duotone" src="{{asset('images/team/arnauld.jpg')}}" alt="" width="290" height="339" data-gradient-map="#242659, #7bd7eb"/></a></div>
                        <div class="team-modern-content">
                            <div class="heading-5 team-modern-name"><a href="#">Arnauld Pierre Nyambe Teke</a></div>
                            <div class="team-modern-position">Telecommunication Engineer - iServices SARL</div>
                            <div class="team-modern-share">
                                <div class="team-modern-share-button" data-custom-toggle="" data-custom-toggle-disable-on-blur="true"></div>
                                <ul class="team-modern-list-social">
                                    <li><a class="icon mdi mdi-facebook" href="https://www.facebook.com/arnauld.nyambe"></a></li>
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
