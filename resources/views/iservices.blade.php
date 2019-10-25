@extends('layouts.apps-iservices')
@section('title', __('Home').' MHSC (Media House of Sports in Cameroon)')
@section('commonsection')
    <!--Swiper-->
    <section class="section swiper-container swiper-slider swiper-slider-2" data-autoplay="5000" data-simulate-touch="false" data-slide-effect="fade">
        <div class="swiper-wrapper text-center">
            <div class="swiper-slide context-dark" data-slide-bg="images/swiper-2-slide-1.jpg">
                <div class="swiper-slide-custom"></div>
                <div class="swiper-slide-caption section-lg">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10 col-xl-9">
                                <h1 class="swiper-title" data-caption-animate="fadeInDown" data-caption-delay="100">Welcome<br>to Powerfit</h1>
                                <h4 class="swiper-subtitle" data-caption-animate="fadeInUp" data-caption-delay="250">Join our studio to stay fit and healthy!</h4>
                                <div class="swiper-button" data-caption-animate="fadeInUp" data-caption-delay="400"><a class="button button-lg button-primary" href="#">Join us</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide context-dark" data-slide-bg="images/swiper-2-slide-2.jpg">
                <div class="swiper-slide-custom"></div>
                <div class="swiper-slide-caption section-lg">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10 col-xl-9">
                                <h1 class="swiper-title" data-caption-animate="fadeInDown" data-caption-delay="100">Better<br>and stronger</h1>
                                <h4 class="swiper-subtitle" data-caption-animate="fadeInUp" data-caption-delay="250">We can help you look and feel amazing!</h4>
                                <div class="swiper-button" data-caption-animate="fadeInUp" data-caption-delay="400"><a class="button button-lg button-primary" href="#">Join us</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide context-dark" data-slide-bg="images/swiper-2-slide-3.jpg">
                <div class="swiper-slide-custom"></div>
                <div class="swiper-slide-caption section-lg">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10 col-xl-9">
                                <h1 class="swiper-title" data-caption-animate="fadeInDown" data-caption-delay="100">Top-notch<br>Experience</h1>
                                <h4 class="swiper-subtitle" data-caption-animate="fadeInUp" data-caption-delay="250">Enjoy your workouts the best way possible!</h4>
                                <div class="swiper-button" data-caption-animate="fadeInUp" data-caption-delay="400"><a class="button button-lg button-primary" href="#">Join us</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide context-dark" data-slide-bg="images/swiper-2-slide-4.jpg">
                <div class="swiper-slide-custom"></div>
                <div class="swiper-slide-caption section-lg">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10 col-xl-9">
                                <h1 class="swiper-title" data-caption-animate="fadeInDown" data-caption-delay="100">Inspiring<br>Atmosphere</h1>
                                <h4 class="swiper-subtitle" data-caption-animate="fadeInUp" data-caption-delay="250">Bringing you more than just ordinary workouts</h4>
                                <div class="swiper-button" data-caption-animate="fadeInUp" data-caption-delay="400"><a class="button button-lg button-primary" href="#">Join us</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Swiper Pagination-->
        <div class="swiper-pagination"></div>
        <!--Swiper Navigation-->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </section>
    <section class="section bg-gray-13">
        <!-- Owl Carousel-->
        <div class="owl-carousel owl-style-3" data-loop="false" data-items="1" data-sm-items="2" data-xl-items="3" data-dots="true" data-mouse-drag="false">
            <!-- Box abby-->
            <article class="box-abby wow fadeInUp" data-wow-delay=".05s">
                <div class="heading-6 box-abby-subtitle">Get in touch</div>
                <div class="heading-2 box-abby-title">Contacts</div>
                <ul class="box-abby-list-contacts big">
                    <li><span class="icon mdi mdi-map-marker"></span><a href="#">652 Main Road, Apt 12 New York, USA 10033</a></li>
                    <li><span class="icon mdi mdi-cellphone-android"></span><a href="tel:#">+1 800 123 1234</a></li>
                </ul>
            </article>
            <!-- Box abby-->
            <article class="box-abby wow fadeInUp">
                <div class="heading-6 box-abby-subtitle">Try crossfit</div>
                <div class="heading-2 box-abby-title">First time?</div><a class="button button-white-outline" href="#">Get a free Workout</a>
            </article>
            <!-- Box abby-->
            <article class="box-abby wow fadeInUp" data-wow-delay=".05s">
                <div class="heading-6 box-abby-subtitle">Our classes</div>
                <div class="heading-2 box-abby-title">Schedule</div>
                <div class="unit align-items-center box-abby-info">
                    <div class="unit-left"><span class="icon mdi mdi-calendar-text"></span></div>
                    <div class="unit-body"><a class="big" href="schedule.html">Select your perfect time<br>for crossfit</a></div>
                </div>
            </article>
        </div>
    </section>
    <!--Classes-->
    <section class="section section-xl bg-gray-100 text-center">
        <div class="container">
            <h6 class="title-8 wow fadeInUp">Wide Variety of Workouts</h6>
            <h2 class="font-weight-bold wow fadeInUp">Choose a program</h2>
            <div class="row row-xl row-30 row-md-50 row-xl-80 justify-content-center service-modern-wrap">
                <div class="col-sm-10 col-md-6 wow fadeInLeft">
                    <!-- Service-->
                    <article class="service-modern block-xl service-modern-1">
                        <div class="service-modern-figure"><a href="single-class.html"><img class="img-duotone" src="images/service-11-570x363.jpg" alt="" width="570" height="363" data-gradient-map="#242659, #87f8fc"/></a>
                            <ul class="service-modern-schedule">
                                <li>
                                    <div class="service-modern-days">Sat</div>
                                    <div class="big service-modern-time">10:00 am</div>
                                </li>
                                <li>
                                    <div class="service-modern-days">Sun</div>
                                    <div class="big service-modern-time">7:00 pm</div>
                                </li>
                                <li>
                                    <div class="service-modern-days">Mon</div>
                                    <div class="big service-modern-time">11:00 am</div>
                                </li>
                            </ul>
                        </div>
                        <div class="service-modern-caption">
                            <div class="heading-4 service-modern-title"><a href="single-class.html">Daily WoD</a></div>
                            <div class="big service-modern-text">with Frank Johnson, Cynthia Hernandez, Larry Carter</div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-10 col-md-6 wow fadeInRight">
                    <!-- Service-->
                    <article class="service-modern block-xl service-modern-1">
                        <div class="service-modern-figure"><a href="single-class.html"><img class="img-duotone" src="images/service-12-570x363.jpg" alt="" width="570" height="363" data-gradient-map="#242659, #87f8fc"/></a>
                            <ul class="service-modern-schedule">
                                <li>
                                    <div class="service-modern-days">Sat</div>
                                    <div class="big service-modern-time">10:00 am</div>
                                </li>
                                <li>
                                    <div class="service-modern-days">Sun</div>
                                    <div class="big service-modern-time">7:00 pm</div>
                                </li>
                                <li>
                                    <div class="service-modern-days">Mon</div>
                                    <div class="big service-modern-time">11:00 am</div>
                                </li>
                            </ul>
                        </div>
                        <div class="service-modern-caption">
                            <div class="heading-4 service-modern-title"><a href="single-class.html">Endurance Training</a></div>
                            <div class="big service-modern-text">with Martha Lewis, Joyce Hughes, Dorothy Bennett</div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-10 col-md-6 wow fadeInLeft">
                    <!-- Service-->
                    <article class="service-modern block-xl service-modern-1">
                        <div class="service-modern-figure"><a href="single-class.html"><img class="img-duotone" src="images/service-13-570x363.jpg" alt="" width="570" height="363" data-gradient-map="#242659, #87f8fc"/></a>
                            <ul class="service-modern-schedule">
                                <li>
                                    <div class="service-modern-days">Sat</div>
                                    <div class="big service-modern-time">10:00 am</div>
                                </li>
                                <li>
                                    <div class="service-modern-days">Sun</div>
                                    <div class="big service-modern-time">7:00 pm</div>
                                </li>
                                <li>
                                    <div class="service-modern-days">Mon</div>
                                    <div class="big service-modern-time">11:00 am</div>
                                </li>
                            </ul>
                        </div>
                        <div class="service-modern-caption">
                            <div class="heading-4 service-modern-title"><a href="single-class.html">Express WoD</a></div>
                            <div class="big service-modern-text">with Philip Perez, Earl Allen, Judy Mitchell</div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-10 col-md-6 wow fadeInRight">
                    <!-- Service-->
                    <article class="service-modern block-xl service-modern-1">
                        <div class="service-modern-figure"><a href="single-class.html"><img class="img-duotone" src="images/service-14-570x363.jpg" alt="" width="570" height="363" data-gradient-map="#242659, #87f8fc"/></a>
                            <ul class="service-modern-schedule">
                                <li>
                                    <div class="service-modern-days">Sat</div>
                                    <div class="big service-modern-time">10:00 am</div>
                                </li>
                                <li>
                                    <div class="service-modern-days">Sun</div>
                                    <div class="big service-modern-time">7:00 pm</div>
                                </li>
                                <li>
                                    <div class="service-modern-days">Mon</div>
                                    <div class="big service-modern-time">11:00 am</div>
                                </li>
                            </ul>
                        </div>
                        <div class="service-modern-caption">
                            <div class="heading-4 service-modern-title"><a href="single-class.html">Fundamentals</a></div>
                            <div class="big service-modern-text">with Jessica Roberts, Ann Torres, Jonathan Anderson</div>
                        </div>
                    </article>
                </div>
            </div><a class="button button-lg button-default-outline wow fadeInUp" href="#">Show all programs</a>
        </div>
    </section>
    <!--About us-->
    <section class="section">
        <div class="bg-default">
            <div class="container">
                <div class="row justify-content-center align-items-lg-end flex-lg-row-reverse justify-content-xl-between">
                    <div class="col-md-11 col-lg-5 wow fadeInRight">
                        <div class="section-xxl">
                            <h6 class="title-8">A few Words about us</h6>
                            <h2 class="font-weight-bold">#1 Crossfit Studio</h2>
                            <p class="big">We’re a family of like-minded and high-spirited people. We come together daily to inspire, challenge, and motivate each other to do more and become more.</p><a class="button button-lg button-primary" href="#">Learn more</a>
                        </div>
                    </div>
                    <div class="col-sm-10 col-md-8 col-lg-7 col-xl-6 wow fadeIn">
                        <!-- Video modern-->
                        <article class="video-modern"><img class="video-modern-image" src="images/video-3-584x628.png" alt="" width="584" height="628"/><a class="video-modern-link" href="https://www.youtube.com/watch?v=1UWpbtUupQQ" data-lightgallery="item"><span class="icon mdi mdi-play"></span></a>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Icon List-->
    <section class="section bg-gray-14">
        <div class="row no-gutters bordered-1">
            <div class="col-sm-6 col-xl-3">
                <!-- Box classic-->
                <article class="box-classic box-classic-1 wow fadeInUp">
                    <div class="box-classic-icon mdi mdi-wallet"></div>
                    <div class="heading-4 box-classic-title">Reasonable prices</div>
                    <div class="big box-classic-text">Our programs are affordably priced and available to all kinds of clients.</div>
                </article>
            </div>
            <div class="col-sm-6 col-xl-3">
                <!-- Box classic-->
                <article class="box-classic box-classic-1 wow fadeInUp" data-wow-delay=".05s">
                    <div class="box-classic-icon mdi mdi-account-star-variant"></div>
                    <div class="heading-4 box-classic-title">Professional Team</div>
                    <div class="big box-classic-text">Our coaches have years of experience in CrossFit and various types of fitness.</div>
                </article>
            </div>
            <div class="col-sm-6 col-xl-3">
                <!-- Box classic-->
                <article class="box-classic box-classic-1 wow fadeInUp" data-wow-delay=".1s">
                    <div class="box-classic-icon mdi mdi-map-marker"></div>
                    <div class="heading-4 box-classic-title">Best Location</div>
                    <div class="big box-classic-text">Our studio is located in the downtown area and is easily accessible via public transport.</div>
                </article>
            </div>
            <div class="col-sm-6 col-xl-3">
                <!-- Box classic-->
                <article class="box-classic box-classic-1 wow fadeInUp" data-wow-delay=".15s">
                    <div class="box-classic-icon mdi mdi-trophy-variant"></div>
                    <div class="heading-4 box-classic-title">Premium Equipment</div>
                    <div class="big box-classic-text">We use the top-notch equipment &amp; gear for workouts and training programs.</div>
                </article>
            </div>
        </div>
    </section>
    <!--Our schedule-->
    <section class="section section-lg section-inset-1 bg-gray-100 text-center">
        <div class="container">
            <h6 class="title-8 wow fadeInUp">Choose your time</h6>
            <h2 class="font-weight-bold wow fadeInUp">Our schedule</h2>
            <div class="cd-schedule cd-schedule-1 loading wow fadeInUp">
                <div class="events-timeline">
                    <ul>
                        <li><span>9:00 AM</span></li>
                        <li><span>10:00 AM</span></li>
                        <li><span>11:00 AM</span></li>
                        <li><span>12:00 PM</span></li>
                        <li><span>1:00 PM</span></li>
                        <li><span>2:00 PM</span></li>
                        <li><span>3:00 PM</span></li>
                        <li><span>4:00 PM</span></li>
                        <li><span>5:00 PM</span></li>
                        <li><span>6:00 PM</span></li>
                        <li><span>7:00 PM</span></li>
                    </ul>
                </div>
                <div class="events">
                    <ul>
                        <li class="events-group">
                            <div class="events-day"><span>Monday</span></div>
                            <ul>
                                <li class="single-event" data-start="09:00" data-end="11:00">
                                    <div class="event-caption">
                                        <div class="event-title">Daily WOD</div>
                                    </div>
                                    <div class="event-body">
                                        <div class="event-name">Frank Johnson</div>
                                        <div class="event-button"><a class="button" href="#">Book Now</a></div>
                                    </div>
                                </li>
                                <li class="single-event single-event-4" data-start="11:00" data-end="12:00">
                                    <div class="event-caption">
                                        <div class="event-title">Open WOD</div>
                                    </div>
                                    <div class="event-body">
                                        <div class="event-name">Frank Johnson</div>
                                        <div class="event-button"><a class="button" href="#">Book Now</a></div>
                                    </div>
                                </li>
                                <li class="single-event single-event-1" data-start="14:00" data-end="15:00">
                                    <div class="event-caption">
                                        <div class="event-title">Endurance</div>
                                    </div>
                                    <div class="event-body">
                                        <div class="event-name">Frank Johnson</div>
                                        <div class="event-button"><a class="button" href="#">Book Now</a></div>
                                    </div>
                                </li>
                                <li class="single-event single-event-4" data-start="15:00" data-end="17:00">
                                    <div class="event-caption">
                                        <div class="event-title">Open WOD</div>
                                    </div>
                                    <div class="event-body">
                                        <div class="event-name">Frank Johnson</div>
                                        <div class="event-button"><a class="button" href="#">Book Now</a></div>
                                    </div>
                                </li>
                                <li class="single-event" data-start="17:00" data-end="18:00">
                                    <div class="event-caption">
                                        <div class="event-title">Daily WOD</div>
                                    </div>
                                    <div class="event-body">
                                        <div class="event-name">Frank Johnson</div>
                                        <div class="event-button"><a class="button" href="#">Book Now</a></div>
                                    </div>
                                </li>
                                <li class="single-event single-event-1" data-start="19:00" data-end="20:00">
                                    <div class="event-caption">
                                        <div class="event-title">Endurance</div>
                                    </div>
                                    <div class="event-body">
                                        <div class="event-name">Frank Johnson</div>
                                        <div class="event-button"><a class="button" href="#">Book Now</a></div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="events-group">
                            <div class="events-day"><span>Tuesday</span></div>
                            <ul>
                                <li class="single-event single-event-1" data-start="09:00" data-end="11:00">
                                    <div class="event-caption">
                                        <div class="event-title">Endurance</div>
                                    </div>
                                    <div class="event-body">
                                        <div class="event-name">Frank Johnson</div>
                                        <div class="event-button"><a class="button" href="#">Book Now</a></div>
                                    </div>
                                </li>
                                <li class="single-event" data-start="11:00" data-end="13:00">
                                    <div class="event-caption">
                                        <div class="event-title">Daily WOD</div>
                                    </div>
                                    <div class="event-body">
                                        <div class="event-name">Frank Johnson</div>
                                        <div class="event-button"><a class="button" href="#">Book Now</a></div>
                                    </div>
                                </li>
                                <li class="single-event" data-start="15:00" data-end="16:00">
                                    <div class="event-caption">
                                        <div class="event-title">Daily WOD</div>
                                    </div>
                                    <div class="event-body">
                                        <div class="event-name">Frank Johnson</div>
                                        <div class="event-button"><a class="button" href="#">Book Now</a></div>
                                    </div>
                                </li>
                                <li class="single-event single-event-4" data-start="17:00" data-end="20:00">
                                    <div class="event-caption">
                                        <div class="event-title">Open WOD</div>
                                    </div>
                                    <div class="event-body">
                                        <div class="event-name">Frank Johnson</div>
                                        <div class="event-button"><a class="button" href="#">Book Now</a></div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="events-group">
                            <div class="events-day"><span>Wednesday</span></div>
                            <ul>
                                <li class="single-event" data-start="10:00" data-end="11:00">
                                    <div class="event-caption">
                                        <div class="event-title">Daily WOD</div>
                                    </div>
                                    <div class="event-body">
                                        <div class="event-name">Frank Johnson</div>
                                        <div class="event-button"><a class="button" href="#">Book Now</a></div>
                                    </div>
                                </li>
                                <li class="single-event single-event-4" data-start="12:00" data-end="14:00">
                                    <div class="event-caption">
                                        <div class="event-title">Open WOD</div>
                                    </div>
                                    <div class="event-body">
                                        <div class="event-name">Frank Johnson</div>
                                        <div class="event-button"><a class="button" href="#">Book Now</a></div>
                                    </div>
                                </li>
                                <li class="single-event single-event-1" data-start="14:00" data-end="15:00">
                                    <div class="event-caption">
                                        <div class="event-title">Endurance</div>
                                    </div>
                                    <div class="event-body">
                                        <div class="event-name">Frank Johnson</div>
                                        <div class="event-button"><a class="button" href="#">Book Now</a></div>
                                    </div>
                                </li>
                                <li class="single-event single-event-4" data-start="15:00" data-end="17:00">
                                    <div class="event-caption">
                                        <div class="event-title">Open WOD</div>
                                    </div>
                                    <div class="event-body">
                                        <div class="event-name">Frank Johnson</div>
                                        <div class="event-button"><a class="button" href="#">Book Now</a></div>
                                    </div>
                                </li>
                                <li class="single-event single-event-3" data-start="17:00" data-end="19:00">
                                    <div class="event-caption">
                                        <div class="event-title">Basic WOD</div>
                                    </div>
                                    <div class="event-body">
                                        <div class="event-name">Frank Johnson</div>
                                        <div class="event-button"><a class="button" href="#">Book Now</a></div>
                                    </div>
                                </li>
                                <li class="single-event single-event-4" data-start="19:00" data-end="20:00">
                                    <div class="event-caption">
                                        <div class="event-title">Open WOD</div>
                                    </div>
                                    <div class="event-body">
                                        <div class="event-name">Frank Johnson</div>
                                        <div class="event-button"><a class="button" href="#">Book Now</a></div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="events-group">
                            <div class="events-day"><span>Thursday</span></div>
                            <ul>
                                <li class="single-event single-event-1" data-start="10:00" data-end="12:00">
                                    <div class="event-caption">
                                        <div class="event-title">Endurance</div>
                                    </div>
                                    <div class="event-body">
                                        <div class="event-name">Frank Johnson</div>
                                        <div class="event-button"><a class="button" href="#">Book Now</a></div>
                                    </div>
                                </li>
                                <li class="single-event" data-start="13:00" data-end="14:00">
                                    <div class="event-caption">
                                        <div class="event-title">Daily WOD</div>
                                    </div>
                                    <div class="event-body">
                                        <div class="event-name">Frank Johnson</div>
                                        <div class="event-button"><a class="button" href="#">Book Now</a></div>
                                    </div>
                                </li>
                                <li class="single-event single-event-4" data-start="14:00" data-end="15:00">
                                    <div class="event-caption">
                                        <div class="event-title">Open WOD</div>
                                    </div>
                                    <div class="event-body">
                                        <div class="event-name">Frank Johnson</div>
                                        <div class="event-button"><a class="button" href="#">Book Now</a></div>
                                    </div>
                                </li>
                                <li class="single-event" data-start="18:00" data-end="19:00">
                                    <div class="event-caption">
                                        <div class="event-title">Daily WOD</div>
                                    </div>
                                    <div class="event-body">
                                        <div class="event-name">Frank Johnson</div>
                                        <div class="event-button"><a class="button" href="#">Book Now</a></div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="events-group">
                            <div class="events-day"><span>Friday</span></div>
                            <ul>
                                <li class="single-event" data-start="09:00" data-end="11:00">
                                    <div class="event-caption">
                                        <div class="event-title">Daily WOD</div>
                                    </div>
                                    <div class="event-body">
                                        <div class="event-name">Frank Johnson</div>
                                        <div class="event-button"><a class="button" href="#">Book Now</a></div>
                                    </div>
                                </li>
                                <li class="single-event single-event-4" data-start="13:00" data-end="14:00">
                                    <div class="event-caption">
                                        <div class="event-title">Open WOD</div>
                                    </div>
                                    <div class="event-body">
                                        <div class="event-name">Frank Johnson</div>
                                        <div class="event-button"><a class="button" href="#">Book Now</a></div>
                                    </div>
                                </li>
                                <li class="single-event single-event-1" data-start="14:00" data-end="15:00">
                                    <div class="event-caption">
                                        <div class="event-title">Endurance</div>
                                    </div>
                                    <div class="event-body">
                                        <div class="event-name">Frank Johnson</div>
                                        <div class="event-button"><a class="button" href="#">Book Now</a></div>
                                    </div>
                                </li>
                                <li class="single-event single-event-4" data-start="15:00" data-end="17:00">
                                    <div class="event-caption">
                                        <div class="event-title">Open WOD</div>
                                    </div>
                                    <div class="event-body">
                                        <div class="event-name">Frank Johnson</div>
                                        <div class="event-button"><a class="button" href="#">Book Now</a></div>
                                    </div>
                                </li>
                                <li class="single-event" data-start="17:00" data-end="18:00">
                                    <div class="event-caption">
                                        <div class="event-title">Daily WOD</div>
                                    </div>
                                    <div class="event-body">
                                        <div class="event-name">Frank Johnson</div>
                                        <div class="event-button"><a class="button" href="#">Book Now</a></div>
                                    </div>
                                </li>
                                <li class="single-event single-event-1" data-start="19:00" data-end="20:00">
                                    <div class="event-caption">
                                        <div class="event-title">Endurance</div>
                                    </div>
                                    <div class="event-body">
                                        <div class="event-name">Frank Johnson</div>
                                        <div class="event-button"><a class="button" href="#">Book Now</a></div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="events-group">
                            <div class="events-day"><span>Saturday</span></div>
                            <ul>
                                <li class="single-event single-event-1" data-start="09:00" data-end="11:00">
                                    <div class="event-caption">
                                        <div class="event-title">Endurance</div>
                                    </div>
                                    <div class="event-body">
                                        <div class="event-name">Frank Johnson</div>
                                        <div class="event-button"><a class="button" href="#">Book Now</a></div>
                                    </div>
                                </li>
                                <li class="single-event" data-start="11:00" data-end="13:00">
                                    <div class="event-caption">
                                        <div class="event-title">Daily WOD</div>
                                    </div>
                                    <div class="event-body">
                                        <div class="event-name">Frank Johnson</div>
                                        <div class="event-button"><a class="button" href="#">Book Now</a></div>
                                    </div>
                                </li>
                                <li class="single-event" data-start="15:00" data-end="16:00">
                                    <div class="event-caption">
                                        <div class="event-title">Daily WOD</div>
                                    </div>
                                    <div class="event-body">
                                        <div class="event-name">Frank Johnson</div>
                                        <div class="event-button"><a class="button" href="#">Book Now</a></div>
                                    </div>
                                </li>
                                <li class="single-event single-event-4" data-start="17:00" data-end="20:00">
                                    <div class="event-caption">
                                        <div class="event-title">Open WOD</div>
                                    </div>
                                    <div class="event-body">
                                        <div class="event-name">Frank Johnson</div>
                                        <div class="event-button"><a class="button" href="#">Book Now</a></div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="events-group">
                            <div class="events-day"><span>Sunday</span></div>
                            <ul>
                                <li class="single-event" data-start="10:00" data-end="11:00">
                                    <div class="event-caption">
                                        <div class="event-title">Daily WOD</div>
                                    </div>
                                    <div class="event-body">
                                        <div class="event-name">Frank Johnson</div>
                                        <div class="event-button"><a class="button" href="#">Book Now</a></div>
                                    </div>
                                </li>
                                <li class="single-event single-event-1" data-start="11:00" data-end="12:00">
                                    <div class="event-caption">
                                        <div class="event-title">Endurance</div>
                                    </div>
                                    <div class="event-body">
                                        <div class="event-name">Frank Johnson</div>
                                        <div class="event-button"><a class="button" href="#">Book Now</a></div>
                                    </div>
                                </li>
                                <li class="single-event single-event-4" data-start="12:00" data-end="14:00">
                                    <div class="event-caption">
                                        <div class="event-title">Open WOD</div>
                                    </div>
                                    <div class="event-body">
                                        <div class="event-name">Frank Johnson</div>
                                        <div class="event-button"><a class="button" href="#">Book Now</a></div>
                                    </div>
                                </li>
                                <li class="single-event single-event-1" data-start="14:00" data-end="15:00">
                                    <div class="event-caption">
                                        <div class="event-title">Endurance</div>
                                    </div>
                                    <div class="event-body">
                                        <div class="event-name">Frank Johnson</div>
                                        <div class="event-button"><a class="button" href="#">Book Now</a></div>
                                    </div>
                                </li>
                                <li class="single-event single-event-4" data-start="15:00" data-end="17:00">
                                    <div class="event-caption">
                                        <div class="event-title">Open WOD</div>
                                    </div>
                                    <div class="event-body">
                                        <div class="event-name">Frank Johnson</div>
                                        <div class="event-button"><a class="button" href="#">Book Now</a></div>
                                    </div>
                                </li>
                                <li class="single-event single-event-3" data-start="17:00" data-end="19:00">
                                    <div class="event-caption">
                                        <div class="event-title">Basic WOD</div>
                                    </div>
                                    <div class="event-body">
                                        <div class="event-name">Frank Johnson</div>
                                        <div class="event-button"><a class="button" href="#">Book Now</a></div>
                                    </div>
                                </li>
                                <li class="single-event single-event-4" data-start="19:00" data-end="20:00">
                                    <div class="event-caption">
                                        <div class="event-title">Open WOD</div>
                                    </div>
                                    <div class="event-body">
                                        <div class="event-name">Frank Johnson</div>
                                        <div class="event-button"><a class="button" href="#">Book Now</a></div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Our coaches-->
    <section class="section section-lg bg-default text-center">
        <div class="container">
            <h6 class="title-8 wow fadeInUp">True professionals</h6>
            <h2 class="font-weight-bold wow fadeInUp">Our coaches</h2>
            <div class="row row-xl row-30 gutter-6">
                <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay=".15s">
                    <!-- Team modern-->
                    <article class="team-modern block-1">
                        <div class="team-modern-figure"><a href="single-coach-page.html"><img class="img-duotone" src="images/team-7-290x339.jpg" alt="" width="290" height="339" data-gradient-map="#242659, #7bd7eb"/></a></div>
                        <div class="team-modern-content">
                            <div class="heading-5 team-modern-name"><a href="single-coach-page.html">Frank Johnson</a></div>
                            <div class="team-modern-position">Founder, Crossfit Coach</div>
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
                <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay=".1s">
                    <!-- Team modern-->
                    <article class="team-modern block-1">
                        <div class="team-modern-figure"><a href="single-coach-page.html"><img class="img-duotone" src="images/team-8-290x339.jpg" alt="" width="290" height="339" data-gradient-map="#242659, #7bd7eb"/></a></div>
                        <div class="team-modern-content">
                            <div class="heading-5 team-modern-name"><a href="single-coach-page.html">Judy Mitchell</a></div>
                            <div class="team-modern-position">CrossFit Coach</div>
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
                <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay=".05s">
                    <!-- Team modern-->
                    <article class="team-modern block-1">
                        <div class="team-modern-figure"><a href="single-coach-page.html"><img class="img-duotone" src="images/team-9-290x339.jpg" alt="" width="290" height="339" data-gradient-map="#242659, #7bd7eb"/></a></div>
                        <div class="team-modern-content">
                            <div class="heading-5 team-modern-name"><a href="single-coach-page.html">Earl Allen</a></div>
                            <div class="team-modern-position">Crossfit coach</div>
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
                <div class="col-sm-6 col-lg-3 wow fadeInUp">
                    <!-- Team modern-->
                    <article class="team-modern block-1">
                        <div class="team-modern-figure"><a href="single-coach-page.html"><img class="img-duotone" src="images/team-10-290x339.jpg" alt="" width="290" height="339" data-gradient-map="#242659, #7bd7eb"/></a></div>
                        <div class="team-modern-content">
                            <div class="heading-5 team-modern-name"><a href="single-coach-page.html">Jessica Roberts</a></div>
                            <div class="team-modern-position">Crossfit/Fitness Coach</div>
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
    <!--BMI calculator-->
    <section class="parallax-container bg-gray-14" data-parallax-img="images/parallax-3.jpg">
        <div class="parallax-content section-xl">
            <div class="container">
                <div class="row row-xl row-30 row-lg-50 justify-content-xl-between">
                    <div class="col-md-6 col-xl-5 wow fadeInLeft">
                        <h3 class="title-9">BMI calculator chart</h3>
                        <div class="table-custom-responsive table-info-wrap-1 inset-xl-right-40">
                            <table class="table-info">
                                <thead>
                                <tr>
                                    <th>BMI</th>
                                    <th>Weight Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Below 18.5</td>
                                    <td>Underweight</td>
                                </tr>
                                <tr>
                                    <td>18.5 - 24.9</td>
                                    <td>Healthy</td>
                                </tr>
                                <tr>
                                    <td>25.0 - 29.9</td>
                                    <td>Overweight</td>
                                </tr>
                                <tr>
                                    <td>30.0 - and Above</td>
                                    <td>Obese</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-6 box-calculator wow fadeInRight">
                        <h3 class="title-9">Calculate your BMI</h3>
                        <p>This BMI calculator can easily calculate the number of calories your body burns per day at rest.</p>
                        <form class="rd-form form-style-4">
                            <div class="row row-20 gutter-20">
                                <div class="col-sm-6">
                                    <div class="form-wrap">
                                        <input class="form-input" id="calculator-2-height" type="text" name="name">
                                        <label class="form-label" for="calculator-2-height">Height (ft)</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-wrap">
                                        <input class="form-input" id="calculator-2-weight" type="text" name="name">
                                        <label class="form-label" for="calculator-2-weight">Weight (lbs)</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-wrap">
                                        <input class="form-input" id="calculator-2-age" type="text" name="name">
                                        <label class="form-label" for="calculator-2-age">Age</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="select-wrap">
                                        <select>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="group-lg group-custom-2 align-items-center">
                            <div>
                                <button class="button button-primary" type="submit">Calculate</button>
                            </div>
                            <div>
                                <ul class="box-calculator-list-results">
                                    <li>Your BMI is:<span class="box-calculator-result">19</span></li>
                                    <li>Weight status is:<span class="box-calculator-result">Healthy</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonials-->
    <section class="section section-xl bg-default">
        <div class="container tabs-custom tabs-style-2">
            <div class="row row-30 justify-content-center">
                <div class="col-md-7 wow fadeInLeft">
                    <h6 class="title-8">Testimonials</h6>
                    <h2 class="font-weight-bold">Success stories</h2>
                    <!--Tab panes-->
                    <div class="tab-content inset-xl-right-40">
                        <div class="tab-pane fade show active" id="tabs-1-1">
                            <!-- Quote modern-->
                            <article class="quote-modern">
                                <div class="big quote-modern-text">
                                    <p class="q">PowerFit’s coaches are absolutely the best! They have the patience of saints and never lose faith in your ability to achieve the unachievable. They always push you to do more.</p>
                                </div>
                                <div class="heading-5 quote-modern-title">Amy Washington</div>
                                <div class="quote-modern-subtitle">Lost 80 lbs in 6 months</div>
                            </article>
                        </div>
                        <div class="tab-pane fade" id="tabs-1-2">
                            <!-- Quote modern-->
                            <article class="quote-modern">
                                <div class="big quote-modern-text">
                                    <p class="q">I’ve been in this club for a year now. I came in with very little CrossFit experience and within a year I have improved tenfold due to the amazing coaching and programming.</p>
                                </div>
                                <div class="heading-5 quote-modern-title">Gary Wood</div>
                                <div class="quote-modern-subtitle">Lost 130 lbs in 12 months</div>
                            </article>
                        </div>
                        <div class="tab-pane fade" id="tabs-1-3">
                            <!-- Quote modern-->
                            <article class="quote-modern">
                                <div class="big quote-modern-text">
                                    <p class="q">I’ve been doing CrossFit for over 5 years and I must say that the programming and coaching at PowerFit are outstanding. They are super personable and not intimidating.</p>
                                </div>
                                <div class="heading-5 quote-modern-title">Eric Thompson</div>
                                <div class="quote-modern-subtitle">Lost 90 lbs in 7 months</div>
                            </article>
                        </div>
                        <div class="tab-pane fade" id="tabs-1-4">
                            <!-- Quote modern-->
                            <article class="quote-modern">
                                <div class="big quote-modern-text">
                                    <p class="q">If you’re looking for a new place to work out, you should try PowerFit. The coaches are amazing — knowledgeable, patient, passionate — and they care about you and your safety.</p>
                                </div>
                                <div class="heading-5 quote-modern-title">Joseph Wilson</div>
                                <div class="quote-modern-subtitle">Lost 65 lbs in 4 months</div>
                            </article>
                        </div>
                        <div class="tab-pane fade" id="tabs-1-5">
                            <!-- Quote modern-->
                            <article class="quote-modern">
                                <div class="big quote-modern-text">
                                    <p class="q">I’d would like to thank PowerFit for amazing 5 months. I can’t believe how much I’ve improved with your coaching. The facility is really the best I’ve ever trained in.</p>
                                </div>
                                <div class="heading-5 quote-modern-title">Helen Russell</div>
                                <div class="quote-modern-subtitle">Lost 60 lbs in 5 months</div>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 wow fadeInRight">
                    <!--Nav tabs-->
                    <ul class="nav nav-tabs">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-1-1" data-toggle="tab"><img src="images/user-5-89x89.jpg" alt="" width="89" height="89"/></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-2" data-toggle="tab"><img src="images/user-12-89x89.jpg" alt="" width="89" height="89"/></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-3" data-toggle="tab"><img src="images/user-13-89x89.jpg" alt="" width="89" height="89"/></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-4" data-toggle="tab"><img src="images/user-14-89x89.jpg" alt="" width="89" height="89"/></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-5" data-toggle="tab"><img src="images/user-4-89x89.jpg" alt="" width="89" height="89"/></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Pricing plans-->
    <section class="section section-lg bg-gray-14 text-center">
        <div class="container">
            <h6 class="title-8 wow fadeInUp">Pricing plans</h6>
            <h2 class="font-weight-bold wow fadeInUp">Choose What You Need</h2>
            <div class="row row-xl row-30 row-lg-50 align-items-center">
                <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay="0.05s">
                    <!-- Pricing classic-->
                    <article class="pricing-classic block-md pricing-classic-2">
                        <div class="heading-4 pricing-classic-title">Basic</div>
                        <div class="pricing-classic-subtitle">Perfect for beginners</div>
                        <div class="heading-2 pricing-classic-price">$9</div>
                        <ul class="pricing-classic-list">
                            <li>1-Day Free Trial</li>
                            <li>50 Class Times Available</li>
                            <li>Elementary Workouts</li>
                        </ul><a class="button button-gray-18" href="#">Buy now</a>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow fadeInUp">
                    <!-- Pricing classic-->
                    <article class="pricing-classic block-md pricing-classic-1 pricing-classic-2">
                        <div class="heading-4 pricing-classic-title">Standard</div>
                        <div class="pricing-classic-subtitle">Personalzed workouts</div>
                        <div class="heading-2 pricing-classic-price">$28</div>
                        <ul class="pricing-classic-list">
                            <li>Drop-In Guests Welcome</li>
                            <li>Open Class Workouts are Available</li>
                            <li>CrossFit &amp; Specialty Classes</li>
                        </ul><a class="button button-primary" href="#">Buy now</a>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay="0.05s">
                    <!-- Pricing classic-->
                    <article class="pricing-classic block-md pricing-classic-2">
                        <div class="heading-4 pricing-classic-title">Premium</div>
                        <div class="pricing-classic-subtitle">For experienced clients</div>
                        <div class="heading-2 pricing-classic-price">$40</div>
                        <ul class="pricing-classic-list">
                            <li>Unlimited CrossFit Classes</li>
                            <li>One Full-Month Fee</li>
                            <li>First 25 New Members Only</li>
                        </ul><a class="button button-gray-18" href="#">Buy now</a>
                        <div class="pricing-classic-label">Power</div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!--Our blog-->
    <section class="section section-lg section-inset-6 bg-gray-100 text-center">
        <div class="container">
            <h6 class="title-8 wow fadeInUp">Our blog</h6>
            <h2 class="font-weight-bold wow fadeInUp">Latest posts</h2>
            <!-- Owl Carousel-->
            <div class="owl-carousel owl-style-4 owl-nav-1" data-items="1" data-nav="true" data-dots="true" data-autoplay="true" data-margin="30" data-xl-margin="170" data-smart-speed="400">
                <div class="row row-30">
                    <div class="col-sm-6">
                        <!--post creative-->
                        <article class="post-creative"><a class="post-creative-figure" href="blog-post.html"><img src="images/post-17-448x299.jpg" alt="" width="448" height="299"/></a>
                            <div class="post-creative-content">
                                <div class="heading-6 post-creative-title"><a href="blog-post.html">Here’s our Summer Workout Routine for Women</a></div>
                                <div class="post-creative-time">
                                    <time datetime="2019-03-12">March 12, 2019</time>
                                </div>
                            </div><a class="post-tag post-creative-tag post-tag-yellow" href="#">Workouts</a>
                        </article>
                    </div>
                    <div class="col-sm-6">
                        <!--post creative-->
                        <article class="post-creative"><a class="post-creative-figure" href="blog-post.html"><img src="images/post-18-448x299.jpg" alt="" width="448" height="299"/></a>
                            <div class="post-creative-content">
                                <div class="heading-6 post-creative-title"><a href="blog-post.html">How to Keep Your Body Healthy Over the Festive Season</a></div>
                                <div class="post-creative-time">
                                    <time datetime="2019-04-15">April 15, 2019</time>
                                </div>
                            </div><a class="post-tag post-creative-tag post-tag-secondary" href="#">Health</a>
                        </article>
                    </div>
                </div>
                <div class="row row-30">
                    <div class="col-sm-6">
                        <!--post creative-->
                        <article class="post-creative"><a class="post-creative-figure" href="blog-post.html"><img src="images/post-19-448x299.jpg" alt="" width="448" height="299"/></a>
                            <div class="post-creative-content">
                                <div class="heading-6 post-creative-title"><a href="blog-post.html">What It Really Takes to Get Six Pack Abs</a></div>
                                <div class="post-creative-time">
                                    <time datetime="2019-05-22">May 22, 2019</time>
                                </div>
                            </div><a class="post-tag post-creative-tag post-tag-primary" href="#">Tips</a>
                        </article>
                    </div>
                    <div class="col-sm-6">
                        <!--post creative-->
                        <article class="post-creative"><a class="post-creative-figure" href="blog-post.html"><img src="images/post-20-448x299.jpg" alt="" width="448" height="299"/></a>
                            <div class="post-creative-content">
                                <div class="heading-6 post-creative-title"><a href="blog-post.html">Give your fitness a boost with our Crossfit challenge</a></div>
                                <div class="post-creative-time">
                                    <time datetime="2019-01-18">February 18, 2019</time>
                                </div>
                            </div><a class="post-tag post-creative-tag post-tag-primary" href="#">Crossfit</a>
                        </article>
                    </div>
                </div>
                <div class="row row-30">
                    <div class="col-sm-6">
                        <!--post creative-->
                        <article class="post-creative"><a class="post-creative-figure" href="blog-post.html"><img src="images/post-21-448x299.jpg" alt="" width="448" height="299"/></a>
                            <div class="post-creative-content">
                                <div class="heading-6 post-creative-title"><a href="blog-post.html">How to Tackle Your Favorite CrossFit Benchmark Workout</a></div>
                                <div class="post-creative-time">
                                    <time datetime="2019-04-15">April 15, 2019</time>
                                </div>
                            </div><a class="post-tag post-creative-tag post-tag-yellow" href="#">Workouts</a>
                        </article>
                    </div>
                    <div class="col-sm-6">
                        <!--post creative-->
                        <article class="post-creative"><a class="post-creative-figure" href="blog-post.html"><img src="images/post-22-448x299.jpg" alt="" width="448" height="299"/></a>
                            <div class="post-creative-content">
                                <div class="heading-6 post-creative-title"><a href="blog-post.html">6 Practical Tips for Prioritizing Quality in CrossFit</a></div>
                                <div class="post-creative-time">
                                    <time datetime="2019-03-12">March 12, 2019</time>
                                </div>
                            </div><a class="post-tag post-creative-tag post-tag-primary" href="#">Tips</a>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--CTA-->
    <section class="section section-lg bg-default text-center">
        <div class="container wow fadeInUp">
            <h6 class="title-8">Join our studio</h6>
            <h2 class="font-weight-bold">It's time to join us</h2>
            <p class="big">Get in touch to book yourself a place for our classes.</p><a class="button button-lg button-primary" href="#">Get a free workout</a>
        </div>
    </section>
    <!--Gallery-->
    <section class="section">
        <div class="owl-carousel owl-style-3" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="4" data-mouse-drag="false" data-dots="true" data-loop="false" data-lightgallery="group">
            <!-- Thumbnail modern-->
            <article class="thumbnail-modern wow fadeIn"><a class="thumbnail-modern-figure" data-lightgallery="item" href="images/gallery-16-1200x800-original.jpg"><img class="img-duotone" src="images/gallery-16-480x362.jpg" alt="" width="480" height="362" data-gradient-map="#242659, #ade5e4"/>
                    <div class="thumbnail-modern-overlay"><span class="icon mdi mdi-plus"></span></div></a></article>
            <!-- Thumbnail modern-->
            <article class="thumbnail-modern wow fadeIn" data-wow-delay=".05s"><a class="thumbnail-modern-figure" data-lightgallery="item" href="images/gallery-17-1200x800-original.jpg"><img class="img-duotone" src="images/gallery-17-480x362.jpg" alt="" width="480" height="362" data-gradient-map="#242659, #ade5e4"/>
                    <div class="thumbnail-modern-overlay"><span class="icon mdi mdi-plus"></span></div></a></article>
            <!-- Thumbnail modern-->
            <article class="thumbnail-modern wow fadeIn" data-wow-delay=".1s"><a class="thumbnail-modern-figure" data-lightgallery="item" href="images/gallery-18-1200x800-original.jpg"><img class="img-duotone" src="images/gallery-18-480x362.jpg" alt="" width="480" height="362" data-gradient-map="#242659, #ade5e4"/>
                    <div class="thumbnail-modern-overlay"><span class="icon mdi mdi-plus"></span></div></a></article>
            <!-- Thumbnail modern-->
            <article class="thumbnail-modern wow fadeIn" data-wow-delay=".15s"><a class="thumbnail-modern-figure" data-lightgallery="item" href="images/gallery-19-1200x800-original.jpg"><img class="img-duotone" src="images/gallery-19-480x362.jpg" alt="" width="480" height="362" data-gradient-map="#242659, #ade5e4"/>
                    <div class="thumbnail-modern-overlay"><span class="icon mdi mdi-plus"></span></div></a></article>
        </div>
    </section>
    <!--Google Map-->
    <section class="section">
        <div class="section-xl bg-gray-100 google-map-style-1">
            <div class="container contacts-paul-wrap">
                <div class="row justify-content-sm-end">
                    <div class="col-sm-6 col-md-5 wow fadeInRight">
                        <ul class="contacts-paul">
                            <li>
                                <div class="unit align-items-center">
                                    <div class="unit-left"><span class="icon mdi mdi-map-marker"></span></div>
                                    <div class="unit-body"><a class="big" href="#">652 Main Road, Apt 12<br>New York, USA 10033</a></div>
                                </div>
                            </li>
                            <li>
                                <div class="unit align-items-center">
                                    <div class="unit-left"><span class="icon mdi mdi-cellphone-android"></span></div>
                                    <div class="unit-body"><a class="heading-5" href="tel:#">+1 800 123 1234</a></div>
                                </div>
                            </li>
                            <li>
                                <div class="unit align-items-center">
                                    <div class="unit-left"><span class="icon mdi mdi-email-outline"></span></div>
                                    <div class="unit-body"><a class="big" href="/cdn-cgi/l/email-protection#6546"><span class="__cf_email__" data-cfemail="7a13141c153a1e1f1715161314115415081d">[email&#160;protected]</span></a></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--Please, add the data attribute data-key="YOUR_API_KEY" in order to insert your own API key for the Google map.-->
            <!--Please note that YOUR_API_KEY should replaced with your key.-->
            <!--Example: <div class="google-map-container" data-key="YOUR_API_KEY">-->
            <div class="google-map-container" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-zoom="5" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png" data-styles="[{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;labels&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;labels&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;labels&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;labels&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#00aaff&quot;},{&quot;saturation&quot;:-100},{&quot;gamma&quot;:2.15},{&quot;lightness&quot;:12}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;lightness&quot;:24}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;lightness&quot;:57}]}]">
                <div class="google-map"></div>
                <ul class="google-map-markers">
                    <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow"></li>
                </ul>
            </div>
        </div>
    </section>
@endsection
