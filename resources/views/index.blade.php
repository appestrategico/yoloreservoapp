<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="ThemeStarz">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,600">
    <link rel="stylesheet" href="{{asset('estiloshome/assets/bootstrap/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('estiloshome/assets/font-awesome/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('estiloshome/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('estiloshome/assets/css/owl.carousel.min.css')}}">
	<title>Yo lo reservo</title>

</head>
<body data-spy="scroll" data-target=".navbar" class="has-loading-screen" data-bg-parallax="scroll" data-bg-parallax-speed="3">
    <div class="ts-page-wrapper" id="page-top">
        <!--*********************************************************************************************************-->
        <!--************ HERO ***************************************************************************************-->
        <!--*********************************************************************************************************-->
        <header id="ts-hero" class="ts-full-screen">

            <!--NAVIGATION ******************************************************************************************-->
            <nav class="navbar navbar-expand-lg navbar-light fixed-top ts-separate-bg-element" data-bg-color="#fff">
                <div class="container">
                    <a class="navbar-brand" href="#page-top">
                        <img src="{{asset('estiloshome/assets/img/logo.png')}}" alt="">
                    </a>
                    <!--end navbar-brand-->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!--end navbar-toggler-->
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav ml-auto">
                            <a class="nav-item nav-link active ts-scroll" href="{{ url('/home') }}">Inicio </a>
                            <a class="nav-item nav-link ts-scroll" href="{{ route('login') }}">Iniciar Sesi&oacute;n</a>
                        </div>
                        <!--end navbar-nav-->
                    </div>
                    <!--end collapse-->
                </div>
                <!--end container-->
            </nav>
            <!--end navbar-->

            <!--HERO CONTENT ****************************************************************************************-->
            <div class="container align-self-center">
                <div class="row align-items-center">
                    <div class="col-sm-7">
                        <h1>Yo lo reservo App</h1>
                        <h3 class="ts-font-color__black ts-opacity__50" align="center">Una forma diferente y estrategica de vender tus productos</h3>
                        <a href="#how-it-works" class="btn btn-primary btn-lg ts-scroll" data-bg-color="#1b1464">Ver Mas</a>
                    </div>
                    <!--end col-sm-7 col-md-7-->
                    <div class="col-sm-5 d-none d-sm-block">
                        <div class="owl-carousel text-center" data-owl-nav="1" data-owl-loop="1">
                            <img src="{{asset('estiloshome/assets/img/img-phone-1st-screen.png')}}" class="d-inline-block mw-100 p-md-5 p-lg-0 ts-width__auto" alt="">
                            <img src="{{asset('estiloshome/assets/img/img-phone-2nd-screen.png')}}" class="d-inline-block mw-100 p-md-5 p-lg-0 ts-width__auto" alt="">
                        </div>
                    </div>
                    <!--end col-sm-5 col-md-5 col-xl-5-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->

            <div id="ts-dynamic-waves" class="ts-background">
                <svg class="ts-svg ts-z-index__1 ts-flip-x" width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <defs></defs>
                    <path class="ts-dynamic-wave" id="wave-1" d="" data-wave-color="#fff" data-wave-height=".3" data-wave-bones="4" data-wave-speed="0.5"/>
                </svg>
                <svg class="ts-svg ts-z-index__1" width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <defs></defs>
                    <path class="ts-dynamic-wave" id="wave-2" d="" data-wave-color="#fff" data-wave-height=".3" data-wave-bones="6" data-wave-speed="0.3"/>
                </svg>
                <div class="ts-background-image ts-parallax-element" data-bg-image="{{asset('estiloshome/assets/img/bg-blurred-run.jpg')}}"></div>
            </div>

        </header>
        <!--end #hero-->

        <!--*********************************************************************************************************-->
        <!--************ CONTENT ************************************************************************************-->
        <!--*********************************************************************************************************-->
        <main id="ts-content">

            <!--HOW IT WORKS ****************************************************************************************-->
            <section id="how-it-works" class="ts-block text-center">
                <div class="container">
                    <div class="ts-title">
                        <h2>Nuestra Aplicaci&oacute;n</h2>
                    </div>
                    <!--end ts-title-->
                    <div class="row">
                        <div class="col-sm-6 col-md-4 col-xl-4">
                            <figure data-animate="ts-fadeInUp">
                                <figure class="icon mb-5 p-2">
                                    <img src="{{asset('estiloshome/assets/img/icon-watch-heart.png')}}" alt="">
                                    <div class="ts-svg ts-svg__organic-shape-01" data-animate="ts-zoomInShort"></div>
                                </figure>
                                <h4>Variedad</h4>
                                <p>
                                    Podras encontrar muchos sectores en los cuales podras gestionar tus 
                                </p>
                            </figure>
                        </div>
                        <!--end col-xl-4-->
                        <div class="col-sm-6 col-md-4 col-xl-4">
                            <figure data-animate="ts-fadeInUp" data-delay="0.1s">
                                <figure class="icon mb-5 p-2">
                                    <img src="{{asset('estiloshome/assets/img/icon-lcd-chart.png')}}" alt="">
                                    <div class="ts-svg ts-svg__organic-shape-02" data-animate="ts-zoomInShort"></div>
                                </figure>
                                <h4>Ventas</h4>
                                <p>
                                    Podras vender desde cualquier lado, prestando servicio a domicilio o en tu oficina
                                </p>
                            </figure>
                        </div>
                        <!--end col-xl-4-->
                        <div class="col-sm-6 offset-sm-4 col-md-4 offset-md-0 col-xl-4">
                            <figure data-animate="ts-fadeInUp" data-delay="0.2s">
                                <figure class="icon mb-5 p-2">
                                    <img src="{{asset('estiloshome/assets/img/icon-cup-winner.png')}}" alt="">
                                    <div class="ts-svg ts-svg__organic-shape-03" data-animate="ts-zoomInShort"></div>
                                </figure>
                                <h4>Reservas</h4>
                                <p>
                                   Podras reservas tu mesas, sin filas 
                                </p>
                            </figure>
                        </div>
                        <!--end col-xl-4-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </section>
            <!--END HOW IT WORKS ************************************************************************************-->

            <!--PARTNERS ********************************************************************************************-->
            <section id="partners" class="py-5 ts-block" data-bg-color="#f6f6f6">
                <!--container-->
                <div class="container">
                    <!--block of logos-->
                    <div class="d-block d-md-flex justify-content-between align-items-center text-center ts-partners ">
                        <a href="#">
                            <img src="{{asset('estiloshome/assets/img/logo-01.png')}}" alt="">
                        </a>
                        <a href="#">
                            <img src="{{asset('estiloshome/assets/img/logo-02.png')}}" alt="">
                        </a>
                        <a href="#">
                            <img src="{{asset('estiloshome/assets/img/logo-03.png')}}" alt="">
                        </a>
                        <a href="#">
                            <img src="{{asset('estiloshome/assets/img/logo-04.png')}}" alt="">
                        </a>
                        <a href="#">
                            <img src="{{asset('estiloshome/assets/img/logo-05.png')}}" alt="">
                        </a>
                    </div>
                    <!--end logos-->
                </div>
                <!--end container-->
            </section>
            <!--END PARTNERS ****************************************************************************************-->

            <!--HOW IT LOOKS ****************************************************************************************-->
            <section id="how-it-looks" class="pb-0 ts-block text-center ts-overflow__hidden ts-shape-mask__down" data-bg-color="#ededed" data-bg-image="assets/img/bg-blurred-shape.jpg" data-bg-repeat="no-repeat" data-bg-position="bottom" data-bg-size="inherit">
                <div class="container">
                    <div class="ts-title">
                        <h2>How It Looks</h2>
                        <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h5>
                    </div>
                    <!--end ts-title-->

                    <ul class="nav nav-tabs justify-content-center my-5" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="desktop-tab" data-toggle="tab" href="#desktop" role="tab" aria-controls="desktop" aria-selected="true">
                                <h4>Desktop</h4>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tablet-tab" data-toggle="tab" href="#tablet" role="tab" aria-controls="tablet" aria-selected="false">
                                <h4>Tablet</h4>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="mobile-tab" data-toggle="tab" href="#mobile" role="tab" aria-controls="mobile" aria-selected="false">
                                <h4>Mobile</h4>
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content pt-5 ts-tabs-presentation" id="myTabContent" data-animate="ts-fadeInUp">
                        <div class="tab-pane fade show active" id="desktop" role="tabpanel" aria-labelledby="desktop">
                            <img src="{{asset('estiloshome/assets/img/img-desktop.png')}}" class="mw-100" alt="">
                        </div>
                        <div class="tab-pane fade" id="tablet" role="tabpanel" aria-labelledby="tablet">
                            <img src="{{asset('estiloshome/assets/img/img-tablet.png')}}" class="mw-100" alt="">
                        </div>
                        <div class="tab-pane fade" id="mobile" role="tabpanel" aria-labelledby="mobile">
                            <img src="{{asset('estiloshome/assets/img/img-phone.png')}}" class="mw-100" alt="">
                        </div>
                    </div>

                </div>
            </section>
            <!--END HOW IT LOOKS ************************************************************************************-->

            <!--WHAT IS APPSTORM ************************************************************************************-->
            <section id="what-is-appstorm" class="ts-block">
                <div class="container">
                    <div class="ts-title">
                        <h2>What Is AppStorm?</h2>
                    </div>
                    <!--end ts-title-->
                    <div class="row">
                        <div class="col-md-5 col-xl-5" data-animate="ts-fadeInUp" data-offset="100">
                            <p>
                                Vivamus fermentum magna non faucibus dignissim. Sed a venenatis mi, vel tempus neque.
                                Fusce pharetra, diam in hendrerit facilisis, enim diam cursus augue, egestas egestas
                                purus diam at felis. Nullam tellus turpis, molestie ac urna quis, pulvinar semper massa.
                            </p>
                            <p>
                                Nam tristique  Sed nisl justo, commodo ac gravida vitae, sodales maximus erat. Phasellus
                                euismod nunc metus, et posuere elit venenatis eget. Nunc non risus libero.
                            </p>
                            <a href="#download" class="btn btn-primary mb-4 ts-scroll">Download Now!</a>
                        </div>
                        <!--end col-xl-5-->
                        <div class="col-md-7 col-xl-7 text-center" data-animate="ts-fadeInUp" data-delay="0.1s" data-offset="100">
                            <div class="px-3">
                                <img src="{{asset('estiloshome/assets/img/img-screen-desktop.jpg')}}" class="mw-100 ts-shadow__lg ts-border-radius__md" alt="">
                            </div>
                        </div>
                        <!--end col-xl-7-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </section>
            <!--END WHAT IS APPSTORM ********************************************************************************-->

            <!--FEATURES ********************************************************************************************-->
            <section id="features" class="ts-block" data-bg-image="assets/img/bg-blurred-shape-02.jpg" data-bg-size="contain" data-bg-position="left" data-bg-repeat="no-repeat">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-xl-7 text-center">
                            <div class="position-relative">
                                <figure class="position-absolute text-center w-100 ts-z-index__1" data-animate="ts-zoomInShort">
                                    <img src="{{asset('estiloshome/assets/img/img-screen-small-01.jpg')}}" class="mw-100 d-inline-block ts-shadow__lg" alt="">
                                </figure>
                                <figure class="p-5" data-animate="ts-zoomInShort" data-delay="0.1s">
                                    <img src="{{asset('estiloshome/assets/img/img-screen-desktop.jpg')}}" class="mw-100 ts-shadow__lg" alt="">
                                </figure>
                                <figure class="position-absolute ts-bottom__0 ts-left__0 ts-z-index__2" data-animate="ts-zoomInShort" data-delay="0.2s">
                                    <img src="{{asset('estiloshome/assets/img/img-screen-small-02.jpg')}}" class="mw-100 d-inline-block ts-shadow__lg" alt="">
                                </figure>
                            </div>
                        </div>
                        <!--end col-xl-7-->
                        <div class="col-md-5 col-xl-5" data-animate="ts-fadeInUp" data-offset="100">
                            <div class="ts-title">
                                <h2>Features</h2>
                            </div>
                            <!--end ts-title-->
                            <p>
                                Vivamus fermentum magna non faucibus dignissim. Sed a venenatis mi, vel tempus neque.
                                Fusce pharetra, diam in hendrerit facilisis, enim diam cursus augue.
                            </p>
                            <!--features list-->
                            <ul class="list-unstyled ts-list-divided">
                                <li>
                                    <a href="#feature-1" class="ts-font-color__black" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="feature-1">
                                        <h6 class="my-2">Real Time Statistics</h6>
                                    </a>
                                    <div class="collapse" id="feature-1">
                                        <p>
                                            Proin dapibus augue vitae massa placerat, vitae pulvinar lectus sodales.
                                            Suspendisse lobortis justo sed sapien placerat eleifend.
                                        </p>
                                    </div>
                                    <!--end collapse-->
                                </li>
                                <li>
                                    <a href="#feature-2" class="ts-font-color__black" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="feature-2">
                                        <h6 class="my-2">Beautiful Charts</h6>
                                    </a>
                                    <div class="collapse" id="feature-2">
                                        <p>
                                            Proin dapibus augue vitae massa placerat, vitae pulvinar lectus sodales.
                                            Suspendisse lobortis justo sed sapien placerat eleifend.
                                        </p>
                                    </div>
                                    <!--end collapse-->
                                </li>
                                <li>
                                    <a href="#feature-3" class="ts-font-color__black" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="feature-3">
                                        <h6 class="my-2">Activity Reminder</h6>
                                    </a>
                                    <div class="collapse" id="feature-3">
                                        <p>
                                            Proin dapibus augue vitae massa placerat, vitae pulvinar lectus sodales.
                                            Suspendisse lobortis justo sed sapien placerat eleifend.
                                        </p>
                                    </div>
                                    <!--end collapse-->
                                </li>
                            </ul>
                            <!--end features list-->
                        </div>
                        <!--end col-xl-5-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </section>
            <!--FEATURES ********************************************************************************************-->

            <!--SUBSCRIBE *******************************************************************************************-->
            <section id="subscribe" class="ts-block ts-separate-bg-element" data-bg-image="assets/img/bg-pattern-dot.png" data-bg-size="inherit" data-bg-image-opacity=".1" data-bg-repeat="repeat">
                <div class="container">
                    <h3>Subscribe For Crypto News!</h3>
                    <form class="ts-form ts-form-email ts-labels-inside-input" data-php-path="assets/php/email.php">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="form-group mb-0">
                                    <label for="email-subscribe">Email address</label>
                                    <input type="email" class="form-control" id="email-subscribe" aria-describedby="subscribe" name="email" placeholder="" required>
                                    <small class="form-text mt-2 ts-opacity__50">*You’ll get only relevant news once a week</small>
                                </div>
                                <!--end form-group-->
                            </div>
                            <!--end col-md-10-->
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary w-100">Submit</button>
                            </div>
                            <!--end col-md-2-->
                        </div>
                        <!--end row-->
                    </form>
                    <!--end ts-form-->
                </div>
                <!--end container-->
            </section>
            <!--END SUBSCRIBE ***************************************************************************************-->

            <!--PRICING *********************************************************************************************-->
            <section id="pricing" class="ts-block">
                <div class="container">
                    <div class="ts-title text-center">
                        <h2>Affordable Prices</h2>
                    </div>
                    <!--end ts-title-->
                    <div class="row no-gutters ts-cards-same-height">
                        <!--Price Box-->
                        <div class="col-sm-4 col-lg-4">
                            <div class="card text-center ts-price-box" data-animate="ts-fadeInUp">
                                <div class="card-header p-0">
                                    <h5 class="mb-0 py-3 text-white" data-bg-color="#1b1464">Basic</h5>
                                    <div class="ts-title py-5 mb-0">
                                        <h3 class="mb-0 font-weight-normal">Free</h3>
                                        <small class="ts-opacity__50">forever</small >
                                    </div>
                                </div>
                                <!--end card-header-->
                                <div class="card-body p-0">
                                    <ul class="list-unstyled ts-list-divided">
                                        <li>3 Sport Activity</li>
                                        <li>60 Days Track Record</li>
                                        <li><s class="ts-opacity__50">Cloud Backup</s></li>
                                        <li><s class="ts-opacity__50">Ads Removed</s></li>
                                    </ul>
                                    <!--end list-->
                                </div>
                                <!--end card-body-->
                                <div class="card-footer bg-transparent pt-0 ts-border-none">
                                    <a href="#" class="btn btn-outline-primary">Select Now</a>
                                </div>
                            </div>
                            <!--end card-->
                        </div>
                        <!--end price-box col-md-4-->

                        <!--Price Box Promoted-->
                        <div class="col-sm-4 col-lg-4">
                            <div class="card text-center ts-price-box ts-price-box__promoted" data-animate="ts-fadeInUp" data-delay="0.1s">
                                <div class="card-header p-0" data-bg-color="#d96270">
                                    <h5 class="mb-0 py-3 text-white" data-bg-color="#f26d7d">Premium</h5>
                                    <div class="ts-title text-white py-5 mb-0">
                                        <h3 class="mb-0 font-weight-normal">
                                            <sup>$</sup>9,99
                                        </h3>
                                        <small class="ts-opacity__50">per month</small >
                                    </div>
                                </div>
                                <!--end card-header-->
                                <div class="card-body p-0">
                                    <ul class="list-unstyled ts-list-divided">
                                        <li>3 Sport Activity</li>
                                        <li>60 Days Track Record</li>
                                        <li>Cloud Backup</li>
                                        <li>Ads Removed</li>
                                    </ul>
                                    <!--end list-->
                                </div>
                                <!--end card-body-->
                                <div class="card-footer bg-transparent pt-0 ts-border-none">
                                    <a href="#" class="btn btn-primary">Select Now</a>
                                </div>
                            </div>
                            <!--end card-->
                        </div>
                        <!--end price-box col-md-4-->

                        <!--Price Box-->
                        <div class="col-sm-4 col-lg-4">
                            <div class="card text-center ts-price-box" data-animate="ts-fadeInUp" data-delay="0.2s">
                                <div class="card-header p-0">
                                    <h5 class="mb-0 py-3 text-white" data-bg-color="#1b1464">Premium</h5>
                                    <div class="ts-title py-5 mb-0">
                                        <h3 class="mb-0 font-weight-normal">
                                            <sup>$</sup>19,99
                                        </h3>
                                        <small class="ts-opacity__50">per month</small >
                                    </div>
                                </div>
                                <!--end card-header-->
                                <div class="card-body p-0">
                                    <ul class="list-unstyled ts-list-divided">
                                        <li>5 Sport Activity</li>
                                        <li>Unlimited Days Track Record</li>
                                        <li>Cloud Backup</li>
                                        <li>Ads Removed</li>
                                    </ul>
                                    <!--end list-->
                                </div>
                                <!--end card-body-->
                                <div class="card-footer bg-transparent pt-0 ts-border-none">
                                    <a href="#" class="btn btn-outline-primary">Select Now</a>
                                </div>
                            </div>
                            <!--end card-->
                        </div>
                        <!--end price-box col-md-4-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </section>
            <!--END PRICING *****************************************************************************************-->

            <section id="our-clients" class="ts-block text-center">
                <div class="container">
                    <div class="ts-title">
                        <h2>Our Clients</h2>
                    </div>
                    <!--end ts-title-->
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="owl-carousel ts-carousel-blockquote" data-owl-dots="1" data-animate="ts-zoomInShort">
                                <blockquote class="blockquote">
                                    <!--person image-->
                                    <figure>
                                        <aside>
                                            <i class="fa fa-quote-right"></i>
                                        </aside>
                                        <div class="ts-circle__lg" data-bg-image="assets/img/person-05.jpg"></div>
                                    </figure>
                                    <!--end person image-->
                                    <!--cite-->
                                    <p>
                                        Morbi et nisl a sapien malesuada scelerisque. Suspendisse tempor turpis mattis nibh posuere. Aenean sagittis nisl.
                                        uthicula sagitti
                                    </p>
                                    <!--end cite-->
                                    <!--person name-->
                                    <footer class="blockquote-footer">
                                        <h4>Jane Doe</h4>
                                        <h6>CEO at MarketsGuru</h6>
                                    </footer>
                                    <!--end person name-->
                                </blockquote>
                                <!--end blockquote-->
                                <blockquote class="blockquote">
                                    <!--person image-->
                                    <figure>
                                        <aside>
                                            <i class="fa fa-quote-right"></i>
                                        </aside>
                                        <div class="ts-circle__lg" data-bg-image="assets/img/person-05.jpg"></div>
                                    </figure>
                                    <!--end person image-->
                                    <!--cite-->
                                    <p>
                                        Morbi et nisl a sapien malesuada scelerisque. Suspendisse tempor turpis mattis nibh posuere. Aenean sagittis nisl.
                                        uthicula sagitti
                                    </p>
                                    <!--end cite-->
                                    <!--person name-->
                                    <footer class="blockquote-footer">
                                        <h4>Jane Doe</h4>
                                        <h6>CEO at MarketsGuru</h6>
                                    </footer>
                                    <!--end person name-->
                                </blockquote>
                                <!--end blockquote-->
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!--end #our-clients.ts-block-->

            <section id="gallery" class="ts-block ts-shape-mask__up" data-bg-color="#f7f7f7" data-bg-image="assets/img/bg-shapes.png" data-bg-size="contain" data-bg-repeat="no-repeat">
                <div class="ts-title text-center">
                    <h2>Gallery</h2>
                </div>
                <!--end ts-title-->
                <div class="owl-carousel ts-carousel-centered py-2 mb-5" data-owl-loop="1" data-owl-nav="1" data-owl-items="3" data-owl-margin="30" data-owl-center="1">
                    <div class="slide">
                        <img src="assets/img/img-screen-desktop.jpg" class="ts-shadow__md ts-border-radius__md" alt="">
                    </div>
                    <div class="slide">
                        <img src="assets/img/img-screen-desktop.jpg" class="ts-shadow__md ts-border-radius__md" alt="">
                    </div>
                    <div class="slide">
                        <img src="assets/img/img-screen-desktop.jpg" class="ts-shadow__md ts-border-radius__md" alt="">
                    </div>
                    <div class="slide">
                        <img src="assets/img/img-screen-desktop.jpg" class="ts-shadow__md ts-border-radius__md" alt="">
                    </div>
                </div>
            </section>
            <!--end #gallery.ts-block-->

            <section id="organize" class="ts-block mt-5">
                <div class="container">
                    <div class="ts-title text-center">
                        <h2>Organize Everything!</h2>
                    </div>
                    <!--end ts-title-->
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <figure class="text-right ts-xs-text-center" data-animate="ts-fadeInUp">
                                <figure class="icon">
                                    <img src="assets/img/icon-watch-heart.png" class="" alt="">
                                </figure>
                                <h4 class="mb-2">Invest With The Best</h4>
                                <p>
                                    Morbi et nisl a sapien malesuada scelerisque. Suspendisse tempor turpis mattis
                                </p>
                            </figure>
                            <figure class="text-right ts-xs-text-center" data-animate="ts-fadeInUp" data-delay=".1s">
                                <figure class="icon">
                                    <img src="assets/img/icon-lcd-chart.png" class="" alt="">
                                </figure>
                                <h4 class="mb-2">Real Time Price</h4>
                                <p>
                                    Morbi et nisl a sapien malesuada scelerisque. Suspendisse tempor turpis mattis
                                </p>
                            </figure>
                            <figure class="text-right ts-xs-text-center" data-animate="ts-fadeInUp" data-delay=".3s">
                                <figure class="icon">
                                    <img src="assets/img/icon-cup-winner.png" class="" alt="">
                                </figure>
                                <h4 class="mb-2">Trade From Enywhere</h4>
                                <p>
                                    Morbi et nisl a sapien malesuada scelerisque. Suspendisse tempor turpis mattis
                                </p>
                            </figure>
                        </div>
                        <!--end col-md-4-->

                        <div class="col-md-4 my-5 d-flex justify-content-center align-items-center">
                            <div class="image position-relative">
                                <img src="assets/img/img-phone-1st-screen.png" class="mw-100" alt="" data-animate="ts-zoomInShort" data-delay=".1s">
                                <aside class="ts-svg ts-svg__organic-shape-01 ts-background-size-contain" data-animate="ts-zoomInShort" data-delay=".4s"></aside>
                            </div>
                        </div>
                        <!--end col-md-4-->

                        <div class="col-md-4">
                            <figure class="ts-xs-text-center" data-animate="ts-fadeInUp">
                                <figure class="icon">
                                    <img src="assets/img/icon-watch-heart.png" class="" alt="">
                                </figure>
                                <h4 class="mb-2">Invest With The Best</h4>
                                <p>
                                    Morbi et nisl a sapien malesuada scelerisque. Suspendisse tempor turpis mattis
                                </p>
                            </figure>
                            <figure class="ts-xs-text-center" data-animate="ts-fadeInUp" data-delay=".1s">
                                <figure class="icon">
                                    <img src="assets/img/icon-lcd-chart.png" class="" alt="">
                                </figure>
                                <h4 class="mb-2">Real Time Price</h4>
                                <p>
                                    Morbi et nisl a sapien malesuada scelerisque. Suspendisse tempor turpis mattis
                                </p>
                            </figure>
                            <figure class="ts-xs-text-center" data-animate="ts-fadeInUp" data-delay=".3s">
                                <figure class="icon">
                                    <img src="assets/img/icon-cup-winner.png" class="" alt="">
                                </figure>
                                <h4 class="mb-2">Trade From Enywhere</h4>
                                <p>
                                    Morbi et nisl a sapien malesuada scelerisque. Suspendisse tempor turpis mattis
                                </p>
                            </figure>
                        </div>
                        <!--end col-md-4-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </section>
            <!--end #organize-->

            <section id="download">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="p-5 text-center ts-border-radius__round-shape ts-shadow__lg" data-bg-color="#1b1464">
                                <div class="bg-white p-5 ts-border-radius__round-shape">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href="#">
                                                <img src="assets/img/download-appstore.png" class="mw-100 py-3" alt="">
                                            </a>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="#">
                                                <img src="assets/img/download-play.png" class="mw-100 py-3" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="position-absolute ts-top__0 ts-bottom__0 m-auto w-100 ts-z-index__-1">
            </section>

            <!--OUR TEAM ********************************************************************************************-->
            <section id="our-team" class="ts-block">
                <div class="container">
                    <div class="ts-title">
                        <h2>Our Team</h2>
                    </div>
                    <!--end ts-title-->
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="card" data-animate="ts-fadeInUp">
                                <div class="ts-card__image ts-img-into-bg">
                                    <img class="card-img-top" src="assets/img/person-01.jpg" alt="Card image cap">
                                </div>
                                <!--end ts-card__image-->
                                <div class="card-body">
                                    <h5 class="mb-1">Anita Matthews</h5>
                                    <h6 class="ts-opacity__50">Company CEO</h6>
                                </div>
                                <!--end card-body-->
                                <div class="card-footer bg-white">
                                    <div class="ts-social-icons">
                                        <a href="#">
                                            <i class="fa fa-envelope"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fab fa-linkedin"></i>
                                        </a>
                                    </div>
                                    <!--end social-icons-->
                                </div>
                                <!--end card-footer-->
                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-md-3-->
                        <div class="col-sm-6 col-lg-3">
                            <div class="card" data-animate="ts-fadeInUp" data-delay=".1s">
                                <div class="ts-card__image ts-img-into-bg">
                                    <img class="card-img-top" src="assets/img/person-02.jpg" alt="Card image cap">
                                </div>
                                <div class="card-body">
                                    <h5 class="mb-1">Levi Masters</h5>
                                    <h6 class="ts-opacity__50">Investment Specialist</h6>
                                </div>
                                <div class="card-footer bg-white">
                                    <div class="ts-social-icons">
                                        <a href="#">
                                            <i class="fa fa-envelope"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fab fa-linkedin"></i>
                                        </a>
                                    </div>
                                    <!--end social-icons-->
                                </div>
                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-md-3-->
                        <div class="col-sm-6 col-lg-3">
                            <div class="card" data-animate="ts-fadeInUp" data-delay=".2s">
                                <div class="ts-card__image ts-img-into-bg">
                                    <img class="card-img-top" src="assets/img/person-03.jpg" alt="Card image cap">
                                </div>
                                <div class="card-body">
                                    <h5 class="mb-1">John Doe</h5>
                                    <h6 class="ts-opacity__50">Head Of Marketing</h6>
                                </div>
                                <div class="card-footer bg-white">
                                    <div class="ts-social-icons">
                                        <a href="#">
                                            <i class="fa fa-envelope"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fab fa-linkedin"></i>
                                        </a>
                                    </div>
                                    <!--end social-icons-->
                                </div>
                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-md-3-->
                        <div class="col-sm-6 col-lg-3">
                            <div class="card" data-animate="ts-fadeInUp" data-delay=".3s">
                                <div class="ts-card__image ts-img-into-bg">
                                    <img class="card-img-top" src="assets/img/person-04.jpg" alt="Card image cap">
                                </div>
                                <div class="card-body">
                                    <h5 class="mb-1">Lisa Haley</h5>
                                    <h6 class="ts-opacity__50">Customer Support</h6>
                                </div>
                                <div class="card-footer bg-white">
                                    <div class="ts-social-icons">
                                        <a href="#">
                                            <i class="fa fa-envelope"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fab fa-linkedin"></i>
                                        </a>
                                    </div>
                                    <!--end social-icons-->
                                </div>
                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-md-3-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </section>
            <!--END OUR TEAM ****************************************************************************************-->

            <!--NUMBERS *********************************************************************************************-->
            <section id="numbers" class="ts-block ts-separate-bg-element" data-bg-image="assets/img/pattern-topo.png" data-bg-image-opacity=".05" data-bg-size="inherit" data-bg-repeat="repeat">
                <div class="container">
                    <div class="ts-promo-numbers">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="ts-promo-number text-center">
                                    <h2 data-animate="ts-zoomIn">1,200+</h2>
                                    <h3 class="mb-0 ts-opacity__50">Clients</h3>
                                    <span class="ts-promo-number-divider"></span>
                                </div>
                                <!--end ts-promo-number-->
                            </div>
                            <!--end col-sm-4-->
                            <div class="col-sm-4">
                                <div class="ts-promo-number text-center">
                                    <h2 data-animate="ts-zoomIn" data-delay="0.2s">$3,15 M</h2>
                                    <h3 class="mb-0 ts-opacity__50">Invested</h3>
                                    <span class="ts-promo-number-divider"></span>
                                </div>
                                <!--end ts-promo-number-->
                            </div>
                            <!--end col-sm-4-->
                            <div class="col-sm-4">
                                <div class="ts-promo-number text-center">
                                    <h2 data-animate="ts-zoomIn" data-delay="0.2s">14%</h2>
                                    <h3 class="mb-0 ts-opacity__50">Growth p.a.</h3>
                                </div>
                                <!--end ts-promo-number-->
                            </div>
                            <!--end col-sm-4-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end ts-promo-numbers-->
                </div>
                <!--end container-->
            </section>
            <!--END NUMBERS *****************************************************************************************-->

        </main>
        <!--end #content-->

        <!--*********************************************************************************************************-->
        <!--************ FOOTER *************************************************************************************-->
        <!--*********************************************************************************************************-->
        <footer id="ts-footer">

            <div class="map ts-height__600px" id="map"></div>

            <section id="contact" class="ts-separate-bg-element" data-bg-image="assets/img/bg-desk.jpg" data-bg-image-opacity=".1" data-bg-color="#1b1464">
                <div class="container">
                    <div class="ts-box mb-0 p-5 ts-mt__n-10">
                        <div class="row">
                            <div class="col-md-4">
                                <h3>Contact Us</h3>
                                <address>
                                    <figure>
                                        2590 Rocky Road
                                        Philadelphia, PA 19108
                                    </figure>
                                    <br>
                                    <figure>
                                        <div class="font-weight-bold">Email:</div>
                                        <a href="#">office@example.com</a>
                                    </figure>
                                    <figure>
                                        <div class="font-weight-bold">Phone:</div>
                                        +1 215-606-0391
                                    </figure>
                                    <div class="font-weight-bold">Skype:</div>
                                    crypto.agency
                                </address>
                                <!--end address-->
                            </div>
                            <!--end col-md-4-->
                            <div class="col-md-8">
                                <h3>Contact Form</h3>
                                <form id="form-contact" method="post" class="clearfix ts-form ts-form-email ts-inputs__transparent" data-php-path="assets/php/email.php">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="form-contact-name">Your Name *</label>
                                                <input type="text" class="form-control" id="form-contact-name" name="name" placeholder="Your Name" required>
                                            </div>
                                            <!--end form-group -->
                                        </div>
                                        <!--end col-md-6 col-sm-6 -->
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="form-contact-email">Your Email *</label>
                                                <input type="email" class="form-control" id="form-contact-email" name="email" placeholder="Your Email" required>
                                            </div>
                                            <!--end form-group -->
                                        </div>
                                        <!--end col-md-6 col-sm-6 -->
                                    </div>
                                    <!--end row -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="form-contact-message">Your Message *</label>
                                                <textarea class="form-control" id="form-contact-message" rows="5" name="message" placeholder="Your Message" required></textarea>
                                            </div>
                                            <!--end form-group -->
                                        </div>
                                        <!--end col-md-12 -->
                                    </div>
                                    <!--end row -->
                                    <div class="form-group clearfix">
                                        <button type="submit" class="btn btn-primary float-right" id="form-contact-submit">Send a Message</button>
                                    </div>
                                    <!--end form-group -->
                                    <div class="form-contact-status"></div>
                                </form>
                                <!--end form-contact -->
                            </div>
                        </div>
                        <!--end row-->
                    </div>
                    <!--end ts-box-->
                    <div class="text-center text-white py-4">
                        <small>© 2018 ThemeStarz, All Rights Reserved</small>
                    </div>
                </div>
                <!--end container-->
            </section>

        </footer>
        <!--end #footer-->
    </div>
    <!--end page-->

    <script>
        if( document.getElementsByClassName("ts-full-screen").length ) {
            document.getElementsByClassName("ts-full-screen")[0].style.height = window.innerHeight + "px";
        }
    </script>
	<script src="{{asset('estiloshome/assets/js/jquery-3.3.1.min.js')}}"></script>
	<script src="{{asset('estiloshome/assets/js/popper.min.js')}}"></script>
	<script src="{{asset('estiloshome/assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('estiloshome/assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58"></script>
	<script src="{{asset('estiloshome/assets/js/isInViewport.jquery.js')}}"></script>
	<script src="{{asset('estiloshome/assets/js/jquery.particleground.min.js')}}"></script>
	<script src="{{asset('estiloshome/assets/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('estiloshome/assets/js/scrolla.jquery.min.js')}}"></script>
	<script src="{{asset('estiloshome/assets/js/jquery.validate.min.js')}}"></script>
	<script src="{{asset('estiloshome/assets/js/jquery-validate.bootstrap-tooltip.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js"></script>
    <script src="{{asset('estiloshome/assets/js/jquery.wavify.js')}}"></script>
    <script src="{{asset('estiloshome/assets/js/custom.js')}}"></script>

    <!--Google map-->

    <script>
        var latitude = 34.038405;
        var longitude = -117.946944;
        var markerImage = "assets/img/map-marker.png";
        var mapElement = "map";
        var mapStyle = [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#dbdbdb"},{"visibility":"on"}]}];
        google.maps.event.addDomListener(window, 'load', simpleMap(latitude, longitude, markerImage, mapStyle, mapElement));
    </script>

</body>
</html>