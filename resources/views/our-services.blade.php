@extends('layouts.apps')
@section('title', 'iServices/'.__('Ours Services'))
@section('commonsection')
    <!-- Breadcrumbs-->
    <section class="breadcrumbs-custom bg-image context-dark scroll-handler" style="background-image: url({{asset('images/bg-breadcrumbs.png')}});">
        <div class="image-overlay" data-canvas-src="{{asset('images/bg-breadcrumbs.png')}}" style="background-image: url({{asset('images/bg-breadcrumbs.png')}});"></div>
        <div class="breadcrumbs-main">
            <div class="container">
                <h2 class="breadcrumbs-custom-title scroll-title">{{__('Our Services')}}</h2>
            </div>
        </div>
        <div class="breadcrumbs-panel">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{url('/')}}">{{__('Home')}}</a></li>
                    <li><a href="#">{{__('Our Services')}}</a></li>
                </ul>
            </div>
        </div>
    </section>




    <!--Coaches 2-->
    <section class="section section-xl bg-default" >
        <div class="section-md bg-default section-decor section-decor-left section text-center">
            <div class="container">
                <h2 class="title-7"><span>{{__('Our Mission')}}</span></h2>
                <h4>Depuis 2006, nous équipons les entreprises des solutions informatiques globales, flexibles, robustes et proactives.</h4>
                <hr><br>
                <h3><strong>Nous nous occupons de</strong></h3>
                <div class="row row-xl no-gutters bordered-2 ordered-1 wow fadeInRight" style="visibility: hidden; animation-name: none;">
                    <div class="col-sm-12 col-lg-12">
                        <!-- Box minimal #0D80D6 -->
                        <article class="box-minimal">
                            <div class="unit align-items-center">
                                <div class="unit-left">
                                    <div class="">
                                        <img src="{{asset('images/software.png')}}" height="100" width="100" />
                                    </div>
                                </div>
                                <div class="unit-body">
                                    <div class="heading-4 box-minimal-title"><p><strong>Applications sur mesure:</strong> Conception et réalisation des logiciels a la demande</p></div>
                                </div>

                            </div>

                            <br>
                            <ol class="circle-list">
                                <li>

                                        <span> &nbsp;&nbsp;&nbsp;<img src="{{asset('images/list-style.png')}}" height="20" width="20"> </span><strong>Assistance à la maîtrise d’œuvre</strong><br>
                                        <div class="sub-title-description">Conception des architectures détaillées et développement logiciel en version Desktop, web et mobile (Principalement Android et IOS).</div>

                                </li>
                                <li>

                                        <span> &nbsp;&nbsp;&nbsp;<img src="{{asset('images/list-style.png')}}" height="20" width="20"> </span><strong>Paramétrage logiciel</strong><br>
                                        <div class="sub-title-description">Paramétrage des logitiels de gestion tels que SAGE-SARI, Odoo, etc.</div>

                                </li>
                                <li>

                                        <span> &nbsp;&nbsp;&nbsp;<img src="{{asset('images/list-style.png')}}" height="20" width="20"> </span><strong>Maintenance évolutive et corrective</strong><br>
                                        <div class="sub-title-description">Maintenance évolutive et corrective</div>

                                </li>
                                <li>

                                        <span> &nbsp;&nbsp;&nbsp;<img src="{{asset('images/list-style.png')}}" height="20" width="20"> </span><strong>Tests</strong><br>
                                        <div class="sub-title-description">Définition et mise en œuvre des tests unitaires, tests d’intégration, tests de performance.
                                            Controle de qualité, de bonne pratique, et audit des systemes d'informations</div>

                                </li>
                            </ol>
                            <div class="heading-5 box-minimal-number ordered-item"></div>
                        </article>
                    </div>
                    <div class="col-sm-12 col-lg-12">
                        <!-- Box minimal-->
                        <article class="box-minimal">
                            <div class="unit align-items-center">
                                <div class="unit-left">
                                    <div class="">
                                        <img src="{{asset('images/security.png')}}" height="100" width="100" />
                                    </div>
                                </div>
                                <div class="unit-body">
                                    <div class="heading-4 box-minimal-title"><strong>Sécurité:</strong> Anticipation des attaques et renforcement de la protection de <br>votre patrimoine informationnel</div>
                                </div>
                            </div>
                            <br>
                            <ol class="circle-list">
                                <li>

                                        <span> &nbsp;&nbsp;&nbsp;<img src="{{asset('images/list-style.png')}}" height="20" width="20"> </span><strong>Audit et conseil</strong><br>
                                        <div class="sub-title-description">Audit organisationnel, d’architecture, de configuration, des fournisseurs. Test d’intrusion en boite noire, blanche et grise</div>

                                </li>
                                <li>

                                        <span> &nbsp;&nbsp;&nbsp;<img src="{{asset('images/list-style.png')}}" height="20" width="20"> </span><strong>Gouvernance-réglementaire-conformité</strong><br>
                                        <div class="sub-title-description">Accompagnement des clients dans la mise en œuvre et l’amélioration continue de la stratégie de sécurité du SI.
                                            Accompagner les clients dans l’homologation du SI (organisme privées ou publics), alignement aux contraintes règlementaires.</div>

                                </li>
                                <li>

                                        <span> &nbsp;&nbsp;&nbsp;<img src="{{asset('images/list-style.png')}}" height="20" width="20"> </span><strong>Identité numérique</strong><br>
                                        <div class="sub-title-description">Gestion du cycle de vie de l’identité, gestion des habilitation, gestion du provisioning, gestion des rôles, authentification forte : mise en place des solutions d’authentification forte SSO, SAML, IAM, PKI. Gestion des comptes à haut privilèges (PAM) </div>

                                </li>
                                <li>

                                        <span> &nbsp;&nbsp;&nbsp;<img src="{{asset('images/list-style.png')}}" height="20" width="20"> </span><strong>Sécurité opérationnelle</strong><br>
                                        <div class="sub-title-description">analyse des logs (SIEM/SOC), durcissement des systèmes, Data Loss Prévention (DLP), PKI, Chiffrement.</div>

                                </li>
                            </ol>
                            <div class="heading-5 box-minimal-number ordered-item"></div>
                        </article>
                    </div>
                    <div class="col-sm-12 col-lg-12">
                        <!-- Box minimal-->
                        <article class="box-minimal">
                            <div class="unit align-items-center">
                                <div class="unit-left">
                                    <div class="">
                                        <img src="{{asset('images/network.png')}}" height="100" width="100" />
                                    </div>
                                </div>
                                <div class="unit-body">
                                    <div class="heading-4 box-minimal-title"><strong>Ingénierie réseaux et système: </strong>Conception d'architectures réseaux, installation, configuration, cablage, Monitoring et assistance des réseaux IT et Télécom</div>
                                </div>
                            </div>
                            <br>
                            <ol class="circle-list">
                                <li>

                                    <span> &nbsp;&nbsp;&nbsp;<img src="{{asset('images/list-style.png')}}" height="20" width="20"> </span><strong>Conception d’architectures réseaux</strong><br>
                                    {{--<div class="sub-title-description">Conception des architectures détaillées et développement logiciel en version Desktop, web et mobile (Principalement Android et IOS).</div>--}}

                                </li>
                                <li>

                                    <span> &nbsp;&nbsp;&nbsp;<img src="{{asset('images/list-style.png')}}" height="20" width="20"> </span><strong>Câblage</strong><br>
                                    <div class="sub-title-description">Supervision des dispositifs et logiciels grace au SMTP et le moteur de supervision NGIOS</div>

                                </li>
                                <li>

                                    <span> &nbsp;&nbsp;&nbsp;<img src="{{asset('images/list-style.png')}}" height="20" width="20"> </span><strong>Monitoring réseau</strong><br>
                                    {{--<div class="sub-title-description">Maintenance évolutive et corrective</div>--}}

                                </li>
                                <li>

                                    <span> &nbsp;&nbsp;&nbsp;<img src="{{asset('images/list-style.png')}}" height="20" width="20"> </span><strong>Fourniture et maintenance du matériel TIC</strong><br>
                                    {{--<div class="sub-title-description">Définition et mise en œuvre des test unitaires, tests d’intégration, tests de performance. Controle de qualite, de bonne pratique, et audit des systemes d'informations</div>--}}

                                </li>
                            </ol>
                            <div class="heading-5 box-minimal-number ordered-item"></div>
                        </article>
                    </div>
                    <div class="col-sm-12 col-lg-12">
                        <!-- Box minimal-->
                        <article class="box-minimal">
                            <div class="unit align-items-center">
                                <div class="unit-left">
                                    <div class="">
                                        <img src="{{asset('images/advice.png')}}" height="100" width="100" />
                                    </div>
                                </div>
                                <div class="unit-body">
                                    <div class="heading-4 box-minimal-title"><strong>Conseil: </strong>
                                        Conseils, accompagnement dans l'ellaboration des plans directeurs et rédaction des cahiers des charges fonctionnelles</div>
                                    <h3>Conseil en stratégie IT</h3>
                                    <p>

                                    </p>
                                </div>
                            </div>

                            <br>
                            <ol class="circle-list">
                                <li>

                                    <span> &nbsp;&nbsp;&nbsp;<img src="{{asset('images/list-style.png')}}" height="20" width="20"> </span><strong>Conseil en stratégie IT</strong><br>
                                    <div class="sub-title-description">
                                        En collaboration avec la DSI construction d’une vision IT de l’entreprise, définition
                                        des grandes orientations et de la feuille de route à partir des enjeux et de besoins métier sur le cours, moyen ou long terme.
                                    </div>

                                </li>
                                <li>

                                    <span> &nbsp;&nbsp;&nbsp;<img src="{{asset('images/list-style.png')}}" height="20" width="20"> </span><strong>Conseil en organisation IT</strong><br>
                                    <div class="sub-title-description">Définition des relations de la DSI avec les partenaires, fournisseurs ou clients.</div>

                                </li>
                                <li>
                                    <span> &nbsp;&nbsp;&nbsp;<img src="{{asset('images/list-style.png')}}" height="20" width="20"> </span><strong>Conseil en urbanisation IT</strong><br>
                                    <div class="sub-title-description">Conception et réalisation des architectures fonctionnelles et techniques.</div>
                                </li>
                                <li>

                                    <span> &nbsp;&nbsp;&nbsp;<img src="{{asset('images/list-style.png')}}" height="20" width="20"> </span><strong>Assistance à la maîtrise d’ouvrage</strong><br>
                                    <div class="sub-title-description">
                                        Rédaction de l’expression des besoins, du cahier de charges, aide au choix des solutions, validation des spécifications fonctionnelles,
                                        recette utilisateur, animation des sessions de formation.
                                    </div>

                                </li>
                                <li>

                                    <span> &nbsp;&nbsp;&nbsp;<img src="{{asset('images/list-style.png')}}" height="20" width="20"> </span><strong>Assistance au pilotage de projet</strong><br>
                                    <div class="sub-title-description">PMO, gouvernance de projet. </div>

                                </li>
                            </ol>
                            <div class="heading-5 box-minimal-number ordered-item"></div>
                        </article>
                    </div>
                    <div class="col-sm-2 col-lg-12">
                        <!-- Box minimal-->
                        <article class="box-minimal">
                            <div class="unit align-items-center">
                                <div class="unit-left">
                                    <div class="">
                                        <img src="{{asset('images/training.png')}}" height="100" width="100" />
                                    </div>
                                </div>
                                <div class="unit-body">
                                    <div class="heading-4 box-minimal-title"><strong>Formation: </strong>Accompagnement dans la mise a niveau des personnels,
                                        <br>la prise en main des nouveautés dans les IT</div>
                                </div>
                            </div>

                            <br>
                            <ol class="circle-list">
                                <li>

                                    <span> &nbsp;&nbsp;&nbsp;<img src="{{asset('images/list-style.png')}}" height="20" width="20"> </span><strong>Formation en développement logiciel web et mobile</strong><br>
                                    {{--<div class="sub-title-description">Conception des architectures détaillées et développement logiciel en version Desktop, web et mobile (Principalement Android et IOS).</div>--}}

                                </li>
                                <li>

                                    <span> &nbsp;&nbsp;&nbsp;<img src="{{asset('images/list-style.png')}}" height="20" width="20"> </span><strong>Formation en gestion et management de projets informatiques</strong><br>
                                    {{--<div class="sub-title-description">Paramétrage des logitiels de gestion tels que SAGE-SARI, Odoo, etc.</div>--}}

                                </li>
                                <li>

                                    <span> &nbsp;&nbsp;&nbsp;<img src="{{asset('images/list-style.png')}}" height="20" width="20"> </span><strong>Formation dans les domaines IT émergents</strong><br>
                                    {{--<div class="sub-title-description">Maintenance évolutive et corrective</div>--}}

                                </li>
                            </ol>

                            <div class="heading-5 box-minimal-number ordered-item"></div>
                        </article>
                    </div>
                    <div class="col-sm-12 col-lg-12">
                        <!-- Box minimal-->
                        <article class="box-minimal">
                            <div class="unit align-items-center">
                                <div class="unit-left">
                                    <div class="">
                                        <img src="{{asset('images/device.png')}}" height="100" width="100" />
                                    </div>
                                </div>
                                <div class="unit-body">
                                    <div class="heading-4 box-minimal-title"><strong>Equipement: </strong>Fourniture et maintenance du materiel IT et Telecom</div>
                                </div>
                            </div>
                            <br>
                            <ol class="circle-list">
                                <li>

                                    <span> &nbsp;&nbsp;&nbsp;<img src="{{asset('images/list-style.png')}}" height="20" width="20"> </span><strong>Routeurs</strong><br>
                                    {{--<div class="sub-title-description">Conception des architectures détaillées et développement logiciel en version Desktop, web et mobile (Principalement Android et IOS).</div>--}}

                                </li>
                                <li>

                                    <span> &nbsp;&nbsp;&nbsp;<img src="{{asset('images/list-style.png')}}" height="20" width="20"> </span><strong>Switch</strong><br>
                                    {{--<div class="sub-title-description">Paramétrage des logitiels de gestion tels que SAGE-SARI, Odoo, etc.</div>--}}

                                </li>
                                <li>

                                    <span> &nbsp;&nbsp;&nbsp;<img src="{{asset('images/list-style.png')}}" height="20" width="20"> </span><strong>Serveurs</strong><br>
                                    {{--<div class="sub-title-description">Maintenance évolutive et corrective</div>--}}

                                </li>
                                <li>

                                    <span> &nbsp;&nbsp;&nbsp;<img src="{{asset('images/list-style.png')}}" height="20" width="20"> </span><strong>Etc.</strong><br>
                                    {{--<div class="sub-title-description">Maintenance évolutive et corrective</div>--}}

                                </li>
                            </ol>
                            <div class="heading-5 box-minimal-number ordered-item"></div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="snackbars" id="form-output-global"></div>

    <!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->

@endsection
