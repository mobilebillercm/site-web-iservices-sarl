@extends('layouts.apps')
@section('title', __('Testimonials').' MHSC (Media House of Sports in Cameroon)')
@section('commonsection')
    <!-- Breadcrumbs-->
    <section class="breadcrumbs-custom bg-image context-dark scroll-handler" style="background-image: url({{asset('images/bg-breadcrumbs.jpg')}});">
        <div class="image-overlay" data-canvas-src="{{asset('images/bg-breadcrumbs.jpg')}}" style="background-image: url({{asset('images/bg-breadcrumbs.jpg')}});"></div>
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
                    {{--<li class="active">About Us</li>--}}
                </ul>
            </div>
        </div>
    </section>


    <!--Blog Post-->
    <section class="section section-lg bg-default">
        <div class="container">
            <div class="row row-50 row-lg-70">
                <div class="col-lg-8">
                    <div class="row row-50 row-lg-80 row-xl-100">
                        <div class="col-12">
                            <div class="post-big">
                                <h3 class="post-big-title">10 Basic Elements of a Proper Athletic Training</h3>
                                <ul class="post-big-info list-inline list-inline-lg">
                                    <li><a class="post-tag post-tag-green" href="#">News</a></li>
                                    <li>
                                        <time class="post-big-time" datetime="2019-05-29">May 29, 2019</time>
                                    </li>
                                    <li>
                                        <div class="post-big-author"><span>by </span><a href="#">Alex Smith</a></div>
                                    </li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh eui   smod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel</p><img src="images/single-post-1-770x403.jpg" alt="" width="770" height="403"/>
                                <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                                <!-- Quote-->
                                <article class="quote">
                                    <div class="quote-body">
                                        <div class="heading-4 quote-text">
                                            <p class="q">Various capacities and capabilities of athleticism span and cross-over between the sensory and perceptual realms.</p>
                                        </div>
                                    </div>
                                </article><img src="{{asset('images/single-post-2-770x403.jpg')}}" alt="" width="770" height="403"/>
                                <p>Ultrices mi tempus imperdiet nulla malesuada pellentesque elit eget. Enim lobortis scelerisque fermentum dui faucibus. A lacus vestibulum sed arcu non. Eu tincidunt tortor aliquam nulla facilisi cras fermentum odio. Neque gravida in fermentum et sollicitudin. Eros in cursus turpis massa. In tellus integer feugiat scelerisque. Nam libero justo laoreet sit amet cursus sit.</p>
                                <div class="post-big-share">
                                    <div class="group-lg group-justify align-items-center">
                                        <div class="post-big-share-title big">Share this post</div>
                                        <div>
                                            <ul class="list-social list-inline list-inline-md">
                                                <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                                                <li><a class="icon mdi mdi-google" href="#"></a></li>
                                                <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                                                <li><a class="icon mdi mdi-pinterest" href="#"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <h6 class="title-5">Related Posts</h6>
                            <div class="row row-md row-30">
                                <div class="col-sm-6">
                                    <!--post creative-->
                                    <article class="post-classic block-md"><img class="post-classic-image" src="{{asset('images/post-10-370x366.jpg')}}" alt="" width="370" height="366"/>
                                        <div class="post-classic-content">
                                            <div><a class="post-tag post-tag-green" href="#">News</a></div>
                                            <div class="heading-5 post-classic-title"><a href="blog-post.html">Calculating Your Macros For a Weight Loss or Muscle Gain Diet</a></div>
                                        </div>
                                        <div class="post-classic-dummy"></div>
                                    </article>
                                </div>
                                <div class="col-sm-6">
                                    <!--post creative-->
                                    <article class="post-classic block-md"><img class="post-classic-image" src="{{asset('images/post-11-370x366.jpg')}}" alt="" width="370" height="366"/>
                                        <div class="post-classic-content">
                                            <div><a class="post-tag post-tag-red" href="#">Workout</a></div>
                                            <div class="heading-5 post-classic-title"><a href="blog-post.html">How To Progress Better at Isolation Exercises</a></div>
                                        </div>
                                        <div class="post-classic-dummy"></div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <h6 class="title-5"><span>3</span>Comments</h6>
                            <div class="comment-classic">
                                <div class="unit unit-spacing-lg flex-column flex-sm-row">
                                    <div class="unit-left"><img class="comment-classic-image" src="{{asset('images/user-6-66x66.jpg')}}" alt="" width="66" height="66"/>
                                    </div>
                                    <div class="unit-body">
                                        <div class="group-sm group-justify align-items-center">
                                            <div class="heading-6 comment-classic-author">Edward</div>
                                            <div class="comment-classic-time">3 day ago</div>
                                        </div>
                                        <p class="comment-classic-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        <ul class="comment-classic-panel list-inline list-inline-md">
                                            <li class="comment-classic-link"><span class="icon mdi mdi-thumb-up-outline"></span><a href="#">32</a></li>
                                            <li class="comment-classic-link"><span class="icon mdi mdi-comment-outline"></span><a href="#">Reply</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="comment-classic">
                                    <div class="unit unit-spacing-lg flex-column flex-sm-row">
                                        <div class="unit-left"><img class="comment-classic-image" src="{{asset('images/user-7-66x66.jpg')}}" alt="" width="66" height="66"/>
                                        </div>
                                        <div class="unit-body">
                                            <div class="group-sm group-justify align-items-center">
                                                <div class="heading-6 comment-classic-author">Anna</div>
                                                <div class="comment-classic-time">1 day ago</div>
                                            </div>
                                            <p class="comment-classic-text">Ac ut consequat semper viverra. Magna eget est lorem ipsum dolor sit. Commodo sed egestas egestas fringilla phasellus faucibus.</p>
                                            <ul class="comment-classic-panel list-inline list-inline-md">
                                                <li class="comment-classic-link"><span class="icon mdi mdi-thumb-up-outline"></span><a href="#">32</a></li>
                                                <li class="comment-classic-link"><span class="icon mdi mdi-comment-outline"></span><a href="#">Reply</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-classic">
                                <div class="unit unit-spacing-lg flex-column flex-sm-row">
                                    <div class="unit-left"><img class="comment-classic-image" src="{{asset('images/user-8-66x66.jpg')}}" alt="" width="66" height="66"/>
                                    </div>
                                    <div class="unit-body">
                                        <div class="group-sm group-justify align-items-center">
                                            <div class="heading-6 comment-classic-author">John</div>
                                            <div class="comment-classic-time">1 day ago</div>
                                        </div>
                                        <p class="comment-classic-text">Condimentum lacinia quis vel eros. Molestie ac feugiat sed lectus vestibulum mattis ullamcorper velit. Quis eleifend quam adipiscing vitae proin sagittis. Risus commodo viverra maecenas accumsan lacus vel facilisis. Mus mauris vitae ultricies leo integer malesuada nunc. Netus et malesuada fames ac turpis egestas sed</p>
                                        <ul class="comment-classic-panel list-inline list-inline-md">
                                            <li class="comment-classic-link"><span class="icon mdi mdi-thumb-up-outline"></span><a href="#">32</a></li>
                                            <li class="comment-classic-link"><span class="icon mdi mdi-comment-outline"></span><a href="#">Reply</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-form">
                                <div class="unit unit-spacing-lg flex-column flex-sm-row">
                                    <div class="unit-left"><img class="comment-classic-image" src="{{asset('images/user-9-66x66.jpg')}}" alt="" width="66" height="66"/>
                                    </div>
                                    <div class="unit-body">
                                        <div class="heading-6 comment-classic-author">Jane</div>
                                        <div class="form-wrap">
                                            <label class="form-label" for="comment-message">Your comment</label>
                                            <textarea class="form-input" id="comment-message" name="message" data-constraints="@Required"></textarea>
                                        </div>
                                        <button class="button button-lg button-gradient" type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="inset-xl-left-40">
                        <div class="aside row row-50 row-lg-70">
                            <div class="aside-item col-12">
                                <!-- RD Search Form-->
                                <form class="form-search rd-search form-search form-style-2" action="search-results.html" method="GET">
                                    <div class="form-wrap">
                                        <label class="form-label" for="search-form">Enter a keyword...</label>
                                        <input class="form-input" id="search-form" type="text" name="s" autocomplete="off">
                                        <button class="button-search mdi mdi-magnify" type="submit"></button>
                                    </div>
                                </form>
                            </div>
                            <div class="aside-item col-sm-6 col-lg-12">
                                <h6 class="aside-title">Category</h6>
                                <ul class="list-marked list-marked-2 list-category">
                                    <li><a href="#"><span>Fitness</span><span>12</span></a></li>
                                    <li><a href="#"><span>Sports</span><span>10</span></a></li>
                                    <li><a href="#"><span>Event</span><span>11</span></a></li>
                                    <li><a href="#"><span>Crossfit</span><span>14</span></a></li>
                                </ul>
                            </div>
                            <div class="aside-item col-sm-6 col-lg-12">
                                <h6 class="aside-title">Popular Posts</h6>
                                <div class="post-minimal-wrap">
                                    <!--post minimal-->
                                    <article class="post-minimal">
                                        <div class="unit align-items-md-center">
                                            <div class="unit-left"><a class="post-minimal-figure" href="blog-post.html"><img src="{{asset('images/post-7-106x104.jpg')}}" alt="" width="106" height="104"/></a></div>
                                            <div class="unit-body">
                                                <div class="post-minimal-title"><a href="blog-post.html">How To Build Muscle Fast: The 15-Step Guide</a></div>
                                                <div class="post-minimal-time">
                                                    <time datetime="2019-05-29">May 29, 2019</time>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <!--post minimal-->
                                    <article class="post-minimal">
                                        <div class="unit align-items-md-center">
                                            <div class="unit-left"><a class="post-minimal-figure" href="blog-post.html"><img src="{{asset('images/post-8-106x104.jpg')}}" alt="" width="106" height="104"/></a></div>
                                            <div class="unit-body">
                                                <div class="post-minimal-title"><a href="blog-post.html">Individual Training: Where to Begin and What to Expect</a></div>
                                                <div class="post-minimal-time">
                                                    <time datetime="2019-05-15">May 15, 2019</time>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <!--post minimal-->
                                    <article class="post-minimal">
                                        <div class="unit align-items-md-center">
                                            <div class="unit-left"><a class="post-minimal-figure" href="blog-post.html"><img src="{{asset('images/post-9-106x104.jpg')}}" alt="" width="106" height="104"/></a></div>
                                            <div class="unit-body">
                                                <div class="post-minimal-title"><a href="blog-post.html">6 Easy Sources of Vitamins You Might Be Overlooking</a></div>
                                                <div class="post-minimal-time">
                                                    <time datetime="2019-05-15">May 15, 2019</time>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="aside-item col-sm-6 col-lg-12">
                                <h6 class="aside-title">Blog Archive</h6>
                                <ul class="list-marked list-marked-2">
                                    <li><a href="#">September 2018</a></li>
                                    <li><a href="#">August 2018</a></li>
                                </ul>
                            </div>
                            <div class="aside-item col-sm-6 col-lg-12">
                                <h6 class="aside-title">Tags</h6>
                                <div class="group-xs group-middle"><a class="button-tag" href="#">Sport</a><a class="button-tag" href="#">Fitness</a><a class="button-tag" href="#">Running</a><a class="button-tag" href="#">Crossfit</a><a class="button-tag" href="#">Tips</a><a class="button-tag" href="#">Food</a></div>
                            </div>
                        </div>
                    </div>
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
