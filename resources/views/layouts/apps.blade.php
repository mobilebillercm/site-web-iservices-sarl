<!DOCTYPE html>
<!-- saved from url=(0051)https://livedemo00.template-help.com/wt_prod-18029/ -->
<html class="wide wow-animation desktop landscape rd-navbar-static-linked" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>
        @yield('title')
    </title>

    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <script type="text/javascript" async="" src="{{asset('js/ec.js')}}"></script>
    <script type="text/javascript" async="" src="{{asset('js/analytics.js')}}"></script>
    <script async="" src="{{asset('js/gtm.js')}}"></script>
    <script type="text/javascript" async="" src="{{asset('js/ga.js')}}"></script>
    <script src="{{asset('js/3ts2ksMwXvKRuG480KNifJ2_JNM.js')}}"></script>
    {{--<script src="{{assert('cdn-cgi/apps/body/4o300efCt-CXoq1JEC-sVReFz48.js')}}"></script>--}}
    {{--<script src="{{asset('js/4o300efCt-CXoq1JEC-sVReFz48.js')}}"></script>--}}
    <link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{asset('css/font/family.css')}}">
    <link rel="stylesheet" href="{{asset('css/style-1.css')}}">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
    <link rel="stylesheet" href="{{asset('css/font/charset.css')}}">
    <link rel="stylesheet" href="{{asset('css/mystyle.css')}}">

</head>
<body class="">
<div class="ie-panel">
    <a href="https://windows.microsoft.com/en-US/internet-explorer/">
        <img src="{{asset('images/warning_bar_0000_us.jpg')}}" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
<div class="preloader loaded">
    <div class="cssload-container">
        <div class="load-circle-item">
            <div class="load-circle"></div>
        </div>
        <div class="load-circle-item">
            <div class="load-circle"></div>
        </div>
        <div class="load-circle-item">
            <div class="load-circle"></div>
        </div>
        <div class="load-circle-item">
            <div class="load-circle"></div>
        </div>
        <div class="load-circle-item">
            <div class="load-circle"></div>
        </div>
        <div class="load-circle-item">
            <div class="load-circle"></div>
        </div>
        <div class="load-circle-item">
            <div class="load-circle"></div>
        </div>
        <div class="load-circle-item">
            <div class="load-circle"></div>
        </div>
        <div class="load-circle-item">
            <div class="load-circle"></div>
        </div>
    </div>
</div>
<div class="page animated" style="animation-duration: 500ms;">
    <header class="section page-header">
        <!--RD Navbar-->
        <div class="rd-navbar-wrap">
            <nav class="rd-navbar rd-navbar-modern rd-navbar-modern-1" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="50px" data-xl-stick-up-offset="50px" data-xxl-stick-up-offset="50px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true" data-lg-auto-height="false" data-xl-auto-height="false" data-xxl-auto-height="false">
                <div class="rd-navbar-main-outer">
                    <div class="rd-navbar-main">
                        <!--RD Navbar Panel-->
                        <div class="rd-navbar-panel">
                            <!--RD Navbar Toggle-->
                            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                            <!--RD Navbar Brand-->
                            <div class="rd-navbar-brand">
                                <!--Brand--><a class="brand" href="{{url('/')}}">
                                    <img class="brand-logo-dark" src="{{asset('images/logo-iservices-transparent.png')}}" alt="" />
                                    <img class="brand-logo-light" src="{{asset('images/logo-iservices-transparent.png')}}" alt="" />
                                </a>
                            </div>
                        </div>
                        <div class="rd-navbar-nav-wrap">
                            <ul class="rd-navbar-nav" id="rd-navbar-nav">
                                <li class="rd-nav-item {{(url('/') === $url or url('/home') === $url)?'active':''}}">
                                    <a class="rd-nav-link" href="{{url('/')}}">{{__('Home')}}</a>
                                </li>
                                <li class="rd-nav-item {{url('/our-services') === $url?'active':''}}">
                                    <a class="rd-nav-link" href="{{url('/our-services')}}">{{__('Our Services')}}</a>
                                </li>
                                <li class="rd-nav-item {{url('/our-partners') === $url?'active':''}}">
                                    <a class="rd-nav-link" href="{{url('/our-partners')}}">{{__('Our Partners')}}</a>
                                </li>
                                <li class="rd-nav-item {{url('/team') === $url?'active':''}}">
                                    <a class="rd-nav-link" href="{{url('/team')}}">{{__('Team')}}</a>
                                </li>
                                <li class="rd-nav-item {{url('/portfolio') === $url?'active':''}}">
                                    <a class="rd-nav-link" href="{{url('/portfolio')}}">{{__('Portfolio')}}</a>
                                </li>
                                <li class="rd-nav-item {{url('/contact-us') === $url?'active':''}}">
                                    <a class="rd-nav-link" href="{{url('contact-us')}}">{{__('Contact Us')}}</a>
                                </li>
                                <li class="rd-nav-item {{url('/testimonial') === $url?'active':''}}">
                                    <a class="rd-nav-link" href="{{url('/testimonial')}}">{{__('Testimonials')}}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="rd-navbar-elements">
                            {{--<a class="rd-navbar-basket linearicons-cart rd-navbar-fixed-element-2" href="cart-page.html"><span>2</span></a>--}}
                            <button class="sidebar-toggle sidebar-toggle-1 rd-navbar-fixed-element-1" data-multitoggle=".sidebar-wrap"
                                    data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate="" >
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <button class="sidebar-toggle sidebar-toggle-2" data-multitoggle=".sidebar-wrap" data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate=""
                style="color: #165c41;">
                    <span></span>
                </button>
                <div class="sidebar-wrap">
                    <div class="sidebar">
                        <h5 class="sidebar-title" style="color: #165c41;">{{__('Get in Touch')}}</h5><img src="{{asset('images/logo-iservices-et-slogan.jpg')}}" alt="" width="333" height="262"/>
                        <ul class="contacts-creative" style="color: #165c41;">

                            <li>
                                <div class="unit unit-spacing-md">
                                    <div class="unit-left"><span class="icon linearicons-map2"></span></div>
                                    <div class="unit-body">Nous sommes situes a Douala - Cameroun<br>Qartier: Bonamoussadi - Denver
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="unit unit-spacing-md">
                                    <div class="unit-left"><span class="icon linearicons-telephone"></span></div>
                                    <div class="unit-body">Tel: <a href="tel:#">(+237)691179154 / 697239822</a><br>E-Mail: iservices.cm@gmail.com
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="unit unit-spacing-md">
                                    <div class="unit-left"><span class="icon linearicons-clock3"></span></div>
                                    <div class="unit-body">Heures d'ouverture:<br>07:00 am - 07:00 pm</div>
                                </div>
                            </li>
                            {{--<li>
                                <div class="unit unit-spacing-md">
                                    <div class="unit-left"><span class="icon linearicons-map2"></span></div>
                                    <div class="unit-body"><a href="#">652 Main Road, Apt 12 New York, USA 10033</a></div>
                                </div>
                            </li>--}}
                        </ul>
                    </div>
                    <div class="sidebar-panel">
                        <ul class="list-social">
                            <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                            <li><a class="icon mdi mdi-google" href="#"></a></li>
                            <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                            <li><a class="icon mdi mdi-pinterest" href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    @yield('commonsection')
    <footer class="section footer-classic bg-gray-5">
        <div class="footer-classic-body section-lg">
            <div class="container wow fadeInUp" style="visibility: hidden; animation-name: none;">
                <div class="row row-30 justify-content-lg-between">
                    <div class="col-md-4">
                        <div class="inset-xl-right-70">
                            <div class="heading-6 footer-classic-title">About Us</div>
                            <p>
                                {{__('iServices SARL is a young Cameroonian company specializing in Computer and Internet
                                Services and Engineering. It designs and develops multiplatform computing applications with
                                high impact on the socio-economic development of populations. In addition to its activities in
                                the field of Cyber Security, iServices is also involved in Consulting, Studies and Audits in
                                the fields of Information and Communication Technologies.')}}
                            </p>
                            <div class="footer-classic-list-social">
                                <ul class="list-social list-inline list-inline-md">
                                    <li><a class="icon mdi mdi-facebook" href="https://livedemo00.template-help.com/wt_prod-18029/#"></a></li>
                                    <li><a class="icon mdi mdi-google" href="https://livedemo00.template-help.com/wt_prod-18029/#"></a></li>
                                    <li><a class="icon mdi mdi-twitter" href="https://livedemo00.template-help.com/wt_prod-18029/#"></a></li>
                                    <li><a class="icon mdi mdi-pinterest" href="https://livedemo00.template-help.com/wt_prod-18029/#"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-4 col-xl-5">
                        <div class="inset-xl-right-70 inset-xl-left-70">
                            <div class="heading-6 footer-classic-title">Newsletter</div>
                            <form class=" form-style-1 rd-mailform" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="{{url('/')}}" novalidate="novalidate">
                                <div class="form-wrap">
                                    <input class="form-input form-control-has-validation" id="subscribe-form-email" disabled type="email" name="email" data-constraints="@Email @Required"><span class="form-validation"></span>
                                    <label class="form-label rd-input-label" for="subscribe-form-email"><span class="icon mdi mdi-email-outline"></span><span>Enter your email</span></label>
                                </div>
                                <button class="button button-block button-gradient" type="submit" disabled>Subscribe</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="inset-xl-left-70">
                            <div class="heading-6 footer-classic-title">Contacts</div>
                            <ul class="contacts-modern">
                                <li>Denver - Bonamoussadi - Douala, {{__('Cameroon')}}</li>
                                <li><a href="tel:#">(+237) 691179154</a><br><a href="mailto:#">iservices.cm@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-classic-panel">
            <div class="container wow fadeInUp" style="visibility: hidden; animation-name: none;">
                <div class="row row-20 align-items-center justify-content-center justify-content-md-between">
                    <div class="col-sm-auto">
                        <div class="footer-classic-brand">
                            <!--Brand--><a class="brand" href="{{url('/')}}">
                                {{--<img class="brand-logo-dark" src="{{asset('images/logo-default-234x84.png')}}" alt="" width="117" height="42">
                                <img class="brand-logo-light" src="{{asset('images/logo-inverse-234x84.png')}}" alt="" width="117" height="42"></a>--}}
                                <img class="brand-logo-dark" src="{{asset('images/logo-iservices-sarl-white.png')}}" alt="" width="240" height="80">
                                <img class="brand-logo-light" src="{{asset('images/logo-iservices-sarl-white.png')}}" alt="" width="240" height="80"></a>
                        </div>
                    </div>
                    <div class="col-sm-auto">
                        <ul class="footer-classic-nav list-inline list-inline-md">
                            <li><a href="{{url('/')}}#our-mission">{{__('About Us')}}</a></li>
                            <li><a href="{{url('/our-services')}}">{{__('About iServices SARL')}}</a></li>
                            <li><a href="{{url('/our-partners')}}">{{__('Our Partners')}}</a></li>
                            <li><a href="{{url('/team')}}">{{__('Team')}}</a></li>
                            <li><a href="{{url('/portfolio')}}">{{__('Portfolio')}}</a></li>
                            <li><a href="{{url('/contact-us')}}">{{__('Contact Us')}}</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-auto">
                        <p class="rights"><span>iServices SARL </span><span>&nbsp;©&nbsp;</span><span class="copyright-year">{{date('Y')}}</span><span>.&nbsp;</span><a href="{{url('/privacy-policy')}}">Privacy Policy</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<div class="snackbars" id="form-output-global"></div>
<script src="{{asset('js/core.min.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>

<!--LIVEDEMO_00 -->

<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-7078796-5']);
    _gaq.push(['_trackPageview']);
    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'https://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();</script>

<script data-cfasync="false" src="{{asset('js/email-decode.min.js')}}"></script>

<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
<a href="https://livedemo00.template-help.com/wt_prod-18029/#" id="ui-to-top" class="ui-to-top fa fa-angle-up"></a>
<script type="text/javascript" id="">(function(){var b=document.location.search.split("aff\x3d")[1];if(b){var d=document.querySelectorAll("a"),c;for(c=0;c<d.length;c++){var a=d[c];0==a.href.indexOf("https://www.templatemonster.com")&&(0<a.href.indexOf("?")?a.href=a.href+"\x26aff\x3d"+b:a.href=a.href+"?aff\x3d"+b)}}b=document.location.search.split("i\x3d")[1];var e=document.location.search.split("pr_code\x3d")[1];if(b&&e)for(b=b.split("\x26")[0],d=document.querySelectorAll("a"),c=0;c<d.length;c++)a=d[c],0==a.href.indexOf("https://www.templatemonster.com")&&
    (a.href="https://www.templatehelp.com/preset/cart.php?act\x3dadd\x26templ\x3d"+b+"\x26pr_code\x3d"+e)})();</script>

<script type="text/javascript" src="{{asset('js/custom.js')}}"></script>

<script type="text/javascript">

    $(document).ready(function () {

       /* $('.rd-nav-item').on('click', function () {
            $('li.active').removeClass('active');
            $(this).addClass('active');

        });*/

       /* $(".rd-nav-item a").each(function() {
            //console.log($(this).attr('href'));
            if ((window.location.pathname.indexOf($(this).attr('href'))) > -1) {
                $(this).parent().addClass('activeMenuItem');
            }
        });*/
        /*$('.rd-nav-item').click(function (e){

            // Get the container element
            var btnContainer = document.getElementById("rd-navbar-nav");

// Get all buttons with class="btn" inside the container
            var btns = btnContainer.getElementsByClassName("rd-nav-item");

            alert('mmojoofj: ' + btns.length);
// Loop through the buttons and add the active class to the current/clicked button
            for (var i = 0; i < btns.length; i++) {
                btns[i].classList.remove('active');
                btns[i].addEventListener("click", function() {
                    var current = document.getElementsByClassName("active");
                    current[0].className = current[0].className.replace(" active", "");
                    this.className += " active";
                });
            }
        });*/
    });

</script>
{{--<!-- Start your project here-->

<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="{{asset('MDB-Free_4.8.10/js/jquery-3.4.1.min.js')}}"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{asset('MDB-Free_4.8.10/js/popper.min.js')}}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{asset('MDB-Free_4.8.10/js/bootstrap.min.js')}}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{asset('MDB-Free_4.8.10/js/mdb.min.js')}}"></script>--}}

</body><!-- Google Tag Manager --></html>
