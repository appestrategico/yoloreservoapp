<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="ThemeStarz">

    <link rel="stylesheet" href="{{asset('estiloshome/assets/bootstrap/css/fuentes.css')}}">
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
            <nav class="navbar navbar-expand-lg navbar-light fixed-top ts-separate-bg-element menub" data-bg-color="#fff" style="background: #662d91 !important;border-bottom: 4px solid #510fa1 !important;" >
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
                        <h3 class="ts-font-color__black ts-opacity__50" align="center">Una forma diferente y estrategica de vender tus servicios</h3>
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
                                    <img src="{{asset('estiloshome/assets/img/imgreservas.png')}}"  alt="" >
                                <h4>Variedad</h4>
                                <p> Podras encontrar muchos sectores en los cuales podras gestionar tus reservas </p>
                        </div>
                        <!--end col-xl-4-->
                        <div class="col-sm-6 col-md-4 col-xl-4">
                                    <img src="{{asset('estiloshome/assets/img/imgventas.png')}}"  alt="" data-animate="ts-fadeInUp" data-delay="0.1s">
                                <h4>Ventas</h4>
                                <p>
                                    Podras vender desde cualquier lado, prestando servicio a domicilio o en tu oficina
                                </p>
                        </div>
                        <!--end col-xl-4-->
                        <div class="col-sm-6 offset-sm-4 col-md-4 offset-md-0 col-xl-4">
                                    <img src="{{asset('estiloshome/assets/img/reserva1.png')}}"  alt="" data-animate="ts-fadeInUp" data-delay="0.2s" >
                                <h4>Reservas</h4>
                                <p>Podras reservas tu mesas, sin filas </p>
                        </div>
                        <!--end col-xl-4-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </section>
            <!--END HOW IT WORKS ************************************************************************************-->

            <!--WHAT IS APPSTORM ************************************************************************************-->
            <section id="what-is-appstorm" class="ts-block">
                <div class="container">
                    <div class="ts-title">
                        <h2>Que es Yoloreservo?</h2>
                    </div>
                    <!--end ts-title-->
                    <div class="row">
                        <div class="col-md-5 col-xl-5" data-animate="ts-fadeInUp" data-offset="100">
                            <p align="justify">
                                Una aplicación que te ayudara a vender tus servicios con facilidad y darte a conocer sin pagar publicidad a un publico muy amplio. Ademas podras reservas mesas en los negocios registrados dentro de la plataforma.

                                "El mundo esta cambiando la forma de gestionar las citas tambien" 
                            </p>
                            <a href="#download" class="btn btn-primary mb-4 ts-scroll">Ver Mas</a>
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
           <!-- <section id="our-clients" class="ts-block text-center">
                <div class="container">
                    <div class="ts-title">
                        <h2>Testimonios</h2>
                    </div>

                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="owl-carousel ts-carousel-blockquote" data-owl-dots="1" data-animate="ts-zoomInShort">
                                <blockquote class="blockquote">
                                    
                                    <figure>
                                        <aside>
                                            <i class="fa fa-quote-right"></i>
                                        </aside>
                                        <div class="ts-circle__lg" data-bg-image="{{asset('estiloshome/assets/img/person-05.jpg')}}"></div>
                                    </figure>
                                    <p>Excelente app.Con ella he agendado más y me di a conocer de una manera facil y practica.</p>
                                    <footer class="blockquote-footer">
                                        <h4>Mario Muñoz</h4>
                                        <h6>Independiente</h6>
                                    </footer>
                                   
                                </blockquote>
                                
                                <blockquote class="blockquote">
                                    
                                    <figure>
                                        <aside>
                                            <i class="fa fa-quote-right"></i>
                                        </aside>
                                        <div class="ts-circle__lg" data-bg-image="{{asset('estiloshome/assets/img/person-05.jpg')}}"></div>
                                    </figure>
                                    
                                    
                                    <p>He generado muchos ingresos y aun sin tener local. He tenido mucho servicio a domicilio</p>
                                    
                                    
                                    <footer class="blockquote-footer">
                                        <h4>Fabian Perez</h4>
                                        <h6>Independiente</h6>
                                    </footer>
                                   
                                </blockquote>
                                

                                <blockquote class="blockquote">
                                    
                                    <figure>
                                        <aside>
                                            <i class="fa fa-quote-right"></i>
                                        </aside>
                                        <div class="ts-circle__lg" data-bg-image="{{asset('estiloshome/assets/img/person-05.jpg')}}"></div>
                                    </figure>
                                    
                                    
                                    <p>100 % recomendado. Cambio mi negocio en esta era digital y con ella he aumentado mis ventas</p>
                                    
                                    
                                    <footer class="blockquote-footer">
                                        <h4>Eric Pastrana</h4>
                                        <h6>Independiente</h6>
                                    </footer>
                                   
                                </blockquote>
                                
                            </div>
                        </div>
                    </div>

                </div>
            </section> -->

            <section id="gallery" class="ts-block ts-shape-mask__up" data-bg-color="#f7f7f7" data-bg-image="assets/img/bg-shapes.png" data-bg-size="contain" data-bg-repeat="no-repeat">
                <div class="ts-title text-center">
                    <h2>Galeria</h2>
                </div>
                <!--end ts-title-->
                <div class="owl-carousel ts-carousel-centered py-2 mb-5" data-owl-loop="1" data-owl-nav="1" data-owl-items="3" data-owl-margin="30" data-owl-center="1">
                    <div class="slide">
                        <img src="{{asset('estiloshome/assets/img/img-screen-desktop.jpg')}}" class="ts-shadow__md ts-border-radius__md" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{asset('estiloshome/assets/img/img-screen-desktop.jpg')}}" class="ts-shadow__md ts-border-radius__md" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{asset('estiloshome/assets/img/img-screen-desktop.jpg')}}" class="ts-shadow__md ts-border-radius__md" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{asset('estiloshome/assets/img/img-screen-desktop.jpg')}}" class="ts-shadow__md ts-border-radius__md" alt="">
                    </div>
                </div>
            </section>
            <!--end #gallery.ts-block-->

            <section id="organize" class="ts-block mt-5">
                <div class="container">
                    <div class="ts-title text-center">
                        <h2 align="center">Ventajas de nuestra App</h2>
                    </div>
                    <!--end ts-title-->
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <figure class="text-right ts-xs-text-center" data-animate="ts-fadeInUp">
                                <figure class="icon">
                                    <img src="{{asset('estiloshome/assets/img/ganancias.png')}}" with="20px" class="" alt="">
                                </figure>
                                <h4 class="mb-2">Ganancias</h4>
                                <p>Generas ingresos con una misma tarifa y sin pagar comision</p>
                            </figure>
                            <figure class="text-right ts-xs-text-center" data-animate="ts-fadeInUp" data-delay=".1s">
                                <figure class="icon">
                                    <img src="{{asset('estiloshome/assets/img/gestion.png')}}" with="20px" class="" alt="">
                                </figure>
                                <h4 class="mb-2">Gestion</h4>
                                <p>Podras gestionar tus citas y servicios</p>
                            </figure>
                            <figure class="text-right ts-xs-text-center" data-animate="ts-fadeInUp" data-delay=".3s">
                                <figure class="icon">
                                    <img src="{{asset('estiloshome/assets/img/certificados.png')}}" with="20px" class="" alt="">
                                </figure>
                                <h4 class="mb-2">Multi Servicios</h4>
                                <p>Podras encontrar servicios y empresas para reservar.</p>
                            </figure>
                        </div>
                        <!--end col-md-4-->

                        <div class="col-md-4 my-5 d-flex justify-content-center align-items-center">
                            <div class="image position-relative">
                                <img src="{{asset('estiloshome/assets/img/img-phone-1st-screen.png')}}" class="mw-100" alt="" data-animate="ts-zoomInShort" data-delay=".1s">
                                <aside class="ts-svg ts-svg__organic-shape-01 ts-background-size-contain" data-animate="ts-zoomInShort" data-delay=".4s"></aside>
                            </div>
                        </div>
                        <!--end col-md-4-->

                        <div class="col-md-4">
                            <figure class="text-left ts-xs-text-center" data-animate="ts-fadeInUp">
                                <figure class="icon">
                                <img src="{{asset('estiloshome/assets/img/adaptable.png')}}" class="" alt="">
                                </figure>
                                <h4 class="mb-2">Adaptable</h4>
                                <p aling='justify'>Esta aplicacion esta diseñada para aplicaciones moviles. Android y ios</p>
                            </figure>
                            <figure class="text-left ts-xs-text-center" data-animate="ts-fadeInUp" data-delay=".1s">
                                <figure class="icon">
                                <img src="{{asset('estiloshome/assets/img/reservas.png')}}" class="" alt="">
                                </figure>
                                <h4 class="mb-2">Resera de Mesas</h4>
                                <p aling='justify'> Podras reserva mesas para en tu negocio sin aglomeración en tu negocio</p>
                            </figure>
                            <figure class="text-left ts-xs-text-center" data-animate="ts-fadeInUp" data-delay=".3s">
                                <figure class="icon">
                                <img src="{{asset('estiloshome/assets/img/icon-cup-winner.png')}}" class="" alt="">
                                </figure>
                                <h4 class="mb-2">Valoracion</h4>
                                <p aling='justify'> Nos encargamos de que puedas valorar los servicios de la personas para asi recomedarlo para la proxima </p>
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
                                                <img src="{{asset('estiloshome/assets/img/google-play.png')}}" style="width: 200px;" class="mw-100 py-3" alt="">
                                            </a>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="#">
                                                <img src="{{asset('estiloshome/assets/img/google-ios.png')}}" style="width: 200px;" class="mw-100 py-3" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="position-absolute ts-top__0 ts-bottom__0 m-auto w-100 ts-z-index__-1">
            </section><br><br>


            <!--NUMBERS *********************************************************************************************-->
            <section id="numbers" class="ts-block ts-separate-bg-element" data-bg-image="{{asset('estiloshome/assets/img/pattern-topo.png')}}" data-bg-image-opacity=".05" data-bg-size="inherit" data-bg-repeat="repeat">
                <div class="container">
                    <div class="ts-promo-numbers">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="ts-promo-number text-center">
                                    <h2 data-animate="ts-zoomIn">100+</h2>
                                    <h3 class="mb-0 ts-opacity__50">Clientes</h3>
                                    <span class="ts-promo-number-divider"></span>
                                </div>
                                <!--end ts-promo-number-->
                            </div>
                            <!--end col-sm-4-->
                            <div class="col-sm-4">
                                <div class="ts-promo-number text-center">
                                    <h2 data-animate="ts-zoomIn" data-delay="0.2s">70</h2>
                                    <h3 class="mb-0 ts-opacity__50">Profesionales</h3>
                                    <span class="ts-promo-number-divider"></span>
                                </div>
                                <!--end ts-promo-number-->
                            </div>
                            <!--end col-sm-4-->
                            <div class="col-sm-4">
                                <div class="ts-promo-number text-center">
                                    <h2 data-animate="ts-zoomIn" data-delay="0.2s">90%</h2>
                                    <h3 class="mb-0 ts-opacity__50">Clientes Satisfechos</h3>
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

        </main> -->
        <!--end #content-->

        <!--*********************************************************************************************************-->
        <!--************ FOOTER *************************************************************************************-->
        <!--*********************************************************************************************************-->
        <footer id="ts-footer">

            <div class="map ts-height__600px"></div>

            <section id="contact" class="ts-separate-bg-element" data-bg-image="{{asset('estiloshome/assets/img/bg-desk.jpg')}}" data-bg-image-opacity=".1" data-bg-color="#1b1464">
                <div class="container">
                    <div class="ts-box mb-0 p-5 ts-mt__n-10">
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <h3 align="center">Contactenos</h3>
                                <form id="form-contact" method="post" class="clearfix ts-form ts-form-email ts-inputs__transparent" data-php-path="assets/php/email.php">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="form-contact-name">Tu nombre *</label>
                                                <input type="text" class="form-control" id="form-contact-name" name="name" placeholder="Tu nombre..." required>
                                            </div>
                                            <!--end form-group -->
                                        </div>
                                        <!--end col-md-6 col-sm-6 -->
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="form-contact-email">Tu correo *</label>
                                                <input type="email" class="form-control" id="form-contact-email" name="email" placeholder="Tu correo..." required>
                                            </div>
                                            <!--end form-group -->
                                        </div>
                                        <!--end col-md-6 col-sm-6 -->
                                    </div>
                                    <!--end row -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="form-contact-message">Tu Mensaje *</label>
                                                <textarea class="form-control" id="form-contact-message" rows="5" name="message" placeholder="Tu Mensaje..." required></textarea>
                                            </div>
                                            <!--end form-group -->
                                        </div>
                                        <!--end col-md-12 -->
                                    </div>
                                    <!--end row -->
                                    <div class="form-group clearfix">
                                        <button type="submit" class="btn btn-primary float-right" id="form-contact-submit">Enviar</button>
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
                        <small>©  Todos los derechos reservados. Desarrollado por <a href="https://hygcolombia.com">Hyg Colombia</a></small>
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
	<script src="{{asset('estiloshome/assets/js/isInViewport.jquery.js')}}"></script>
	<script src="{{asset('estiloshome/assets/js/jquery.particleground.min.js')}}"></script>
	<script src="{{asset('estiloshome/assets/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('estiloshome/assets/js/scrolla.jquery.min.js')}}"></script>
	<script src="{{asset('estiloshome/assets/js/jquery.validate.min.js')}}"></script>
	<script src="{{asset('estiloshome/assets/js/jquery-validate.bootstrap-tooltip.min.js')}}"></script>
    <script src="{{asset('estiloshome/assets/js/TweenMax.min.js')}}"></script>
    <script src="{{asset('estiloshome/assets/js/jquery.wavify.js')}}"></script>
    <script src="{{asset('estiloshome/assets/js/custom.js')}}"></script>


</body>
</html>
