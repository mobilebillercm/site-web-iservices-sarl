@extends('layouts.apps')
@section('title', __('About JRI.cm').' MHSC (Media House of Sports in Cameroon)')
@section('commonsection')
    <!-- Breadcrumbs-->
    <section class="breadcrumbs-custom bg-image context-dark scroll-handler" style="background-image: url({{asset('images/bg-breadcrumbs.jpg')}});">
        <div class="image-overlay" data-canvas-src="images/bg-breadcrumbs.jpg" style="background-image: url({{asset('images/bg-breadcrumbs.jpg')}});"></div>
        <div class="breadcrumbs-main">
            <div class="container">
                <h2 class="breadcrumbs-custom-title scroll-title">{{$articleid}}</h2>
            </div>
        </div>
        <div class="breadcrumbs-panel">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{url('/')}}">{{__('Home')}}</a></li>
                    <li><a href="#">{{__('In the headlines')}}</a></li>
                    <li class="active">{{$articleid}}</li>
                </ul>
            </div>
        </div>
    </section>
    <!--Coaches 2-->
    <section class="section section-xl bg-gray-100 text-center">
        <div class="container">
            <h6 class="title-8 wow fadeInUp">Wide Variety of Workouts</h6>
            <h2 class="font-weight-bold wow fadeInUp">Choose a program</h2>
            <div class="row row-xl row-30 row-md-50 row-xl-80 justify-content-center service-modern-wrap">
                <div class="col-sm-10 col-md-10 wow fadeInLeft">
                    <!-- Service-->
                    <article class="service-modern block-xl service-modern-1">
                        <div class="service-modern-figure">
                            <a href="single-class.html">
                                <img class="img-duotone" src="{{asset('images/service-11-570x363.jpg')}}" alt="" width="570" height="363" data-gradient-map="#242659, #87f8fc"/></a>
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
                            <div class="big service-modern-text">L’armée du Burkina Faso a connu, lundi 19 août, sa journée la plus noire depuis que ce pays d’Afrique de l’Ouest est devenu, début 2016, la cible de groupes armés extrémistes. Affiliés à Al-Qaida ou à l’organisation Etat islamique, ceux-ci étendent la terreur dans le Sahel et au-delà sans que les forces de sécurité nationales et étrangères déployées dans la région parviennent à l’endiguer.

                                Selon un communiqué publié mardi par l’état-major général des armées, le bilan de cette attaque menée par « des groupes armés terroristes » contre la caserne de Koutougou (extrême nord sahélien du Burkina, proche de la frontière malienne) s’élève, du côté des militaires, à 24 morts, 7 blessés et cinq disparus. « Le 19 août est une tache noire dans la vie de notre armée car c’est la première fois que nous avons [un tel] nombre de victimes. C’est un bilan lourd, c’est un bilan qui nous interpelle », a écrit le président, Roch Marc Christian Kaboré.


                                « L’attaque d’envergure » du détachement militaire a eu lieu « au petit matin », a précisé l’état-major. Le nombre d’assaillants était, semble-t-il, très élevé : « une centaine d’hommes armés, avec des drapeaux noirs », équipés d’armes lourdes et de fusils d’assaut de type « kalachnikov », selon une source sécuritaire. « C’est visiblement une attaque bien préparée et coordonnée par plusieurs groupes terroristes. Ils ont tiré à l’arme lourde sur le camp de base, notamment des roquettes qui ont incendié plusieurs installations, des moyens roulants et de l’armement », a précisé une autre source citée par l’Agence France-Presse. « En réaction à cette attaque barbare, une vaste opération aérienne et terrestre de ratissage a permis de neutraliser de nombreux assaillants », a assuré l’état-major, sans plus de précision.

                                Lire aussi  Du Mali au Burkina Faso, une spirale de violence
                                Deux sources de violences
                                Mardi soir, l’attaque n’avait pas encore été revendiquée. Mais la nature militaire de la cible, le mode opératoire et la localisation semblent désigner les groupes djihadistes évoluant dans cette région. Car cette zone est également en proie aux affrontements intercommunautaires commis par des groupes dits « d’autodéfense ».

                                La conjugaison de ces deux sources de violences, qui s’alimentent par un cycle de représailles, se traduit d’ores et déjà par une situation alarmante pour les civils. Un décompte du bureau de coordination des affaires humanitaires de l’ONU (OCHA) indique que le nombre de personnes déplacées au Burkina en raison des violences est passé de 47 000 à 239 000 de janvier à juillet. Près de la moitié d’entre elles sont originaires du Soum, division régionale incluant Koutougou. On en comptait dix fois moins un an auparavant. Ces attaques de diverses origines ont également fait plus de 500 morts ces derniers mois sur tout le territoire. L’OCHA alerte sur « une dégradation sans précédent de la situation humanitaire dans le pays (…) consécutive à l’escalade de la violence ».

                                Dans un rapport remis mi-juillet au secrétaire général de l’ONU, l’équipe d’appui analytique et de surveillance des sanctions onusiennes à l’encontre de l’Etat islamique et d’Al-Qaida s’inquiétait en effet de « l’ambition et de l’emprise croissantes des groupes terroristes au Sahel et en Afrique de l’Ouest ». Le Burkina Faso – considéré jusqu’à récemment comme un havre de paix alors que le Mali, son voisin, s’enfonçait dès 2012 dans la guerre – illustre ce constat.

                                Lir</div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-10 col-md-6 wow fadeInRight">
                    <!-- Service-->
                    <article class="service-modern block-xl service-modern-1">
                        <div class="service-modern-figure"><a href="single-class.html"><img class="img-duotone" src="{{asset('images/service-12-570x363.jpg')}}" alt="" width="570" height="363" data-gradient-map="#242659, #87f8fc"/></a>
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
                        <div class="service-modern-figure"><a href="single-class.html"><img class="img-duotone" src="{{asset('images/service-13-570x363.jpg')}}" alt="" width="570" height="363" data-gradient-map="#242659, #87f8fc"/></a>
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
                        <div class="service-modern-figure"><a href="single-class.html"><img class="img-duotone" src="{{asset('images/service-14-570x363.jpg')}}" alt="" width="570" height="363" data-gradient-map="#242659, #87f8fc"/></a>
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

    <div class="snackbars" id="form-output-global"></div>

    <!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->

@endsection
