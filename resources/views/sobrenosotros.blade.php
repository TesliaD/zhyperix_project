<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Zhyperix</title>

    @vite('resources/js/app.jsx')

    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/body.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/whatsapp.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</head>

<body>

    <!-- BOTON WHATSAPP -->
    <a href="https://wa.me/526331325768" class="whatsapp-float" target="_blank">
        <i class="bi bi-whatsapp"></i>
    </a>


    <!-- NAVBAR -->
    <header>

        <div class="barra">

            <div class="contenedor barra-inner">

                <a href="/">
                    <img src="{{ asset('img/pnglogoclaro.png') }}" alt="Logo" class="logo">
                </a>

                <button class="menu-toggle" id="menuToggle">☰</button>

                <nav class="navegacion" id="navMenu">

                   <a href="/sobrenosotros">Nosotros</a>
                   <a href="/proyectos">Proyectos</a>
                   <a href="#">Referencias</a>
                   <a href="#">Contacto</a>

                </nav>

            </div>
        </div>

    </header>


    <!-- SOBRE NOSOTROS -->

    <section class="seccion sobre-seccion">

        <div class="contenedor">

            <div class="sobre-grid animar">

                <div class="sobre-text">

                    <h2>Sobre Nosotros</h2>

                    <p>
                        En Zhyperix desarrollamos soluciones tecnológicas que ayudan a empresas,
                        emprendedores y organizaciones a mejorar sus procesos mediante software
                        personalizado, desarrollo web profesional y servicios de soporte IT.
                    </p>

                    <p>
                        Nos enfocamos en crear sistemas modernos, eficientes y escalables que
                        permitan a nuestros clientes optimizar su operación y crecer en el
                        mundo digital.
                    </p>

                    <h3>Quiénes somos</h3>

                    <p>
                        Somos un equipo apasionado por la tecnología, especializado en
                        desarrollo de software, diseño de aplicaciones web y soporte
                        tecnológico empresarial.
                    </p>

                    <p>
                        Nuestro objetivo es convertir ideas en soluciones tecnológicas
                        reales que generen valor y permitan a nuestros clientes
                        destacar en el entorno digital.
                    </p>

                </div>


                <div class="sobre-img">

                    <img src="{{ asset('img/SobreNosotros.jpg') }}" alt="Equipo">

                </div>

            </div>

        </div>

    </section>



    <!-- QUE HACEMOS -->

    <section class="seccion servicios-seccion">

        <div class="contenedor">

            <h2 class="titulo-seccion">¿Qué hacemos?</h2>

            <div class="swiper serviciosSwiper">

                <div class="swiper-wrapper">


                    <!-- CARD 1 -->

                    <div class="swiper-slide">

                        <div class="quehacemos-card animar">

                            <div class="quehacemos-img">
                                <img src="{{ asset('img/digitechlogin.png') }}">
                            </div>

                            <h3>Desarrollo de Software</h3>

                            <p>Sistemas personalizados adaptados a cada cliente.</p>

                            <a href="#" class="boton-solicitar">
                                Ver Proyecto
                            </a>

                        </div>

                    </div>


                    <!-- CARD 2 -->

                    <div class="swiper-slide">

                        <div class="quehacemos-card animar">

                            <div class="quehacemos-img">
                                <img src="{{ asset('img/cristynailsdash.png') }}">
                            </div>

                            <h3>Desarrollo Web</h3>

                            <p>Sitios web modernos y optimizados.</p>

                            <a href="#" class="boton-solicitar">
                                Ver Proyecto
                            </a>

                        </div>

                    </div>



                    <!-- CARD 3 -->

                    <div class="swiper-slide">

                        <div class="quehacemos-card animar">

                            <div class="quehacemos-img">
                                <img src="{{ asset('img/serviciosit.jpg') }}">
                            </div>

                            <h3>Soporte IT</h3>

                            <p>Mantenimiento y soporte técnico profesional.</p>

                            <a href="#" class="boton-solicitar">
                                Ver Proyecto
                            </a>

                        </div>

                    </div>


                    <!-- CARD 4 -->

                    <div class="swiper-slide">

                        <div class="quehacemos-card animar">

                            <div class="quehacemos-img">
                                <img src="{{ asset('img/serviciosit.jpg') }}">
                            </div>

                            <h3>Infraestructura</h3>

                            <p>Configuración de redes, servidores y sistemas empresariales.</p>

                            <a href="#" class="boton-solicitar">
                                Ver Proyecto
                            </a>

                        </div>

                    </div>


                </div>

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>

            </div>

        </div>

    </section>



    <!-- VALORES -->

    <section class="seccion valores-seccion">

        <div class="contenedor">

            <h2 class="titulo-seccion">Nuestros Valores</h2>

            <div class="valores-grid">

                <div class="valor-card animar">

                    <div class="valor-icono">
                        <i class="bi bi-shield-check"></i>
                    </div>

                    <h3>Compromiso</h3>

                    <p>
                        Nos comprometemos con cada proyecto, entregando
                        soluciones tecnológicas de calidad.
                    </p>

                </div>


                <div class="valor-card animar">

                    <div class="valor-icono">
                        <i class="bi bi-lightning-charge"></i>
                    </div>

                    <h3>Innovación</h3>

                    <p>
                        Utilizamos tecnologías modernas para desarrollar
                        soluciones digitales competitivas.
                    </p>

                </div>


                <div class="valor-card animar">

                    <div class="valor-icono">
                        <i class="bi bi-people"></i>
                    </div>

                    <h3>Confianza</h3>

                    <p>
                        Construimos relaciones sólidas con nuestros clientes
                        basadas en transparencia y resultados.
                    </p>

                </div>


                <div class="valor-card animar">

                    <div class="valor-icono">
                        <i class="bi bi-graph-up"></i>
                    </div>

                    <h3>Resultados</h3>

                    <p>
                        Creamos soluciones tecnológicas que impulsan
                        el crecimiento de cada negocio.
                    </p>

                </div>

            </div>

        </div>

    </section>



    <!-- ESTADISTICAS -->

    <section class="seccion estadisticas-seccion">

        <div class="contenedor">

            <h2 class="titulo-seccion">Estadísticas</h2>

            <div class="estadisticas-grid">


                <div class="stat-card animar">

                    <h3 class="stat-numero">50+</h3>
                    <p>Proyectos completados</p>

                </div>


                <div class="stat-card animar">

                    <h3 class="stat-numero">30+</h3>
                    <p>Clientes satisfechos</p>

                </div>


                <div class="stat-card animar">

                    <h3 class="stat-numero">3</h3>
                    <p>Años de experiencia</p>

                </div>


                <div class="stat-card animar">

                    <h3 class="stat-numero">100%</h3>
                    <p>Soporte y compromiso</p>

                </div>

            </div>

        </div>

    </section>



    <!-- CTA -->

    <section class="cta">

        <div class="contenedor animar">

            <h2>¿Tienes un proyecto en mente?</h2>

            <p>
                Contáctanos y te ayudaremos a hacerlo realidad.
            </p>

            <a href="#" class="btn-principal">
                Comencemos
            </a>

        </div>

    </section>



    <!-- FOOTER -->

    <footer class="footer-area">

        <div class="contenedor">

            <div class="footer-brujula">

                <div class="brujula-top">

                    <img src="{{ asset('img/pnglogoclaro.png') }}" height="55">

                    <p class="footer-tagline">
                        Soluciones tecnológicas modernas
                    </p>

                </div>


                <div class="brujula-left">

                    <div class="footer-social">

                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>

                    </div>

                </div>


                <div class="brujula-center footer-links">

                    <h5>Ubicación</h5>
                    <a href="#">Abrir en Google Maps</a>

                </div>


                <div class="brujula-right footer-links">

                    <h5>Contacto</h5>
                    <a href="tel:+526331325768">+52 633 132 5768</a>

                </div>

            </div>

        </div>

        <div class="footer-bottom">
            <p>© 2026 Zhyperix. Todos los derechos reservados</p>
        </div>

    </footer>
</body>

</html>
