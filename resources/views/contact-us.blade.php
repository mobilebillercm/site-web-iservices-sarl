@extends('layouts.apps')
@section('title', 'iServices/'.__('Contact Us'))
@section('commonsection')
    <!-- Breadcrumbs-->
    <section class="breadcrumbs-custom bg-image context-dark scroll-handler" style="background-image: url({{asset('images/bg-breadcrumbs.jpg')}});">
        <div class="image-overlay" data-canvas-src="images/bg-breadcrumbs.png" style="background-image: url({{asset('images/bg-breadcrumbs.png')}});"></div>
        <div class="breadcrumbs-main">
            <div class="container">
                <h2 class="breadcrumbs-custom-title scroll-title">{{__('Contact Us')}}</h2>
            </div>
        </div>
        <div class="breadcrumbs-panel">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{url('/')}}">{{__('Home')}}</a></li>
                    <li><a href="#">{{__('Contact Us')}}</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--Contact us-->
    <section class="section section-xl bg-default">
        <div class="container">
            <div class="row row-30 row-md-50">
                <div class="col-lg-4 col-xl-5">
                    <div class="inset-xl-right-70">
                        <h3>{{__('Have Any Questions?')}}</h3>
                        <h5 class="title-6">{{__('Feel free to contact us using the form on the right.')}}</h5>
                        <ul class="list-contacts">
                            <li><span class="icon mdi mdi-phone"></span><a class="big" href="tel:#">+237 691179154</a></li>
                            <li><span class="icon mdi mdi-map-marker"></span><a class="big" href="#">Denver - Bonamoussadi - Douala, {{__('Cameroon')}}</a></li>
                            <li><span class="icon mdi mdi-email-outline">

                                </span><a class="big" href="/cdn-cgi/l/email-protection#97b4">
                                    <span class="__cf_email__" >iservices.cm@gmail.com</span></a></li>
                        </ul>
                        <ul class="list-social list-inline list-inline-md">
                            <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                            <li><a class="icon mdi mdi-google" href="#"></a></li>
                            <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                            <li><a class="icon mdi mdi-pinterest" href="#"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-7">
                    <!--RD Mailform-->
                    <form  data-form-output="form-output-global" data-form-type="contact" method="post" action="{{url('contact-us')}}">

                        @csrf
                        @if(session('message') and session('message')['result']['success'] === 1 and session('message')['result']['faillure'] === 0)
                            <div class="alert-success" style="background-color: rgba(0, 255, 0, 0.15); color: darkgreen; padding-left: 15px;">{{session('message')['result']['response']}}</div>
                        @else
                            @if(session('message') and session('message')['result']['success'] === 0 and session('message')['result']['faillure'] === 1)
                                <?php
                                $jsonObj = json_decode(session('message')['result']['raison'], true);
                                ?>
                                <div class="alert-danger" style="background-color: rgba(255, 0, 0, 0.0); color: red; padding-left: 15px;">
                                    <ul class="list-group">
                                        <?php
                                        //echo  var_dump($jsonObj); exit();
                                        if ($jsonObj == null or is_string($jsonObj)) {
                                            echo '<li class="list-group-item" style="background-color: rgba(255, 0, 0, 0.15); color: red; padding-left: 15px;">' . session('message')['result']['raison'] . '</li>';
                                        } else {
                                        foreach ($jsonObj as $key => $value) {
                                        ?>

                                        <li class="list-group-item">{{$value[0]}}</li>
                                        <?php
                                        }
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <?php
                                ?>
                            @else
                                <div class="alert-danger">{{session('message')['result']['raison']}}</div>
                            @endif
                        @endif

                        <div class="row row-20 gutter-20">
                            <div class="col-sm-6">
                                <div class="form-wrap">
                                    <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                                    <label class="form-label" for="contact-name">{{__('Your Name')}}</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-wrap">
                                    <input class="form-input" id="contact-surname" type="text" name="surname" >
                                    <label class="form-label" for="contact-surname">{{__('Your Surname')}}</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-wrap">
                                    <input class="form-input" id="contact-phone" type="text" name="phone">
                                    <label class="form-label" for="contact-phone">{{__('Phone')}} ex. +237671747569</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-wrap">
                                    <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                                    <label class="form-label" for="contact-email">{{__('E-mail')}} </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-wrap">
                                    <label class="form-label" for="contact-message">{{__('Message')}}</label>
                                    <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="group-lg group-custom-1">
                            <div class="group-custom-ie">
                                <div class="unit unit-spacing-md form-text">
                                    <div class="unit-left"><span class="icon mdi mdi-information-outline"></span></div>
                                    <div class="unit-body">
                                        <p>Vos données personnelles seront traitées dans le strict respect des règles relatives aux traitements des données personnelles.</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button class="button button-gray-5" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--Google Map-->
{{--    <section class="section">
        <!--Please, add the data attribute data-key="YOUR_API_KEY" in order to insert your own API key for the Google map.-->
        <!--Please note that YOUR_API_KEY should replaced with your key.-->
        <!--Example: <div class="google-map-container" data-key="YOUR_API_KEY">-->
        <div class="google-map-container" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-zoom="5" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png" data-styles="[{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;labels&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;labels&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;labels&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;labels&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#00aaff&quot;},{&quot;saturation&quot;:-100},{&quot;gamma&quot;:2.15},{&quot;lightness&quot;:12}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;lightness&quot;:24}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;lightness&quot;:57}]}]">
            <div class="google-map"></div>
            <ul class="google-map-markers">
                <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow"></li>
            </ul>
        </div>
    </section>--}}

    <!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->

@endsection



