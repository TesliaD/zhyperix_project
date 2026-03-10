<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/js/app.jsx')

    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/body.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/whatsapp.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <title>Zhyperix</title>
</head>

<body>

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
                <a href="#">Anuncios</a>
                <a href="#">Blog</a>
                <a href="#">Referencias</a>
                <a href="#">Contacto</a>
            </nav>

            </div>
        </div>
    </header>


    <!-- SOBRE NOSOTROS -->
    <section class="quehacemos-seccion">
        <div class="contenedor">
              <div class="sobre-grid">

                <div class="sobre-text">
                    <h2 class="sobrenosotros-text">Sobre Nosotros</h2>
                    <p>
                    En Zhyperix desarrollamos soluciones tecnológicas que ayudan a empresas,
                    emprendedores y organizaciones a mejorar sus procesos mediante software
                    personalizado, desarrollo web profesional y servicios de soporte IT.

                    Nos enfocamos en crear sistemas modernos, eficientes y escalables que
                    permitan a nuestros clientes optimizar su operación y crecer en el
                    mundo digital.
                    </p>

                    <!-- QUIENES SOMOS -->
                    <div>
                        <h2>Quiénes somos</h2>
                        
                        <p>
                            Somos un equipo apasionado por la tecnología, especializado en
                            desarrollo de software, diseño de aplicaciones web y soporte
                            tecnológico empresarial, asi como los diferentes servicios IT que ofrecemos.

                            Trabajamos con herramientas modernas y buenas prácticas de desarrollo
                            para entregar soluciones confiables, seguras y adaptadas a las
                            necesidades de cada cliente.
                        </p>
                    </div>
                    <p>
                        Nuestro objetivo es convertir ideas en soluciones tecnológicas
                        reales que generen valor, mejoren la productividad y permitan
                        a nuestros clientes destacar en un entorno digital cada vez
                        más competitivo.
                    </p>
                </div>

            <div class="sobre-img">
                <img src="{{ asset('img/SobreNosotros.jpg') }}" alt="Equipo">
            </div>

            </div>
        </div>
    </section>

   <!--¿QUÉ HACEMOS?-->
    <section class="quehacemos-seccion">

        <div class="contenedor">

            <h2 class="quehacemos-text">¿Qué hacemos?</h2>

            <div class="swiper serviciosSwiper">

                <div class="swiper-wrapper">

                    <!-- CARD 1 -->
                    <div class="swiper-slide">
                        <div class="quehacemos-card">

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
                        <div class="quehacemos-card">

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
                        <div class="quehacemos-card">

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
                        <div class="quehacemos-card">

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

                <!-- Flechas -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>

                <!-- Paginación -->
                <div class="swiper-pagination"></div>

            </div>

        </div>

    </section>
    
    <!-- VALORES -->
    <section class="quehacemos-seccion">

        <div class="contenedor">

            <h2 class="valores-titulo">Nuestros Valores</h2>

            <div class="valores-grid">

                <div class="valor-card">
                    <div class="valor-icono"><i class="bi bi-shield-check"></i></div>
                    <h3>Compromiso</h3>
                    <p>
                    Nos comprometemos con cada proyecto, entregando
                    soluciones tecnológicas de calidad que cumplen
                    con los objetivos de nuestros clientes.
                    </p>
                </div>

                <div class="valor-card">
                    <div class="valor-icono"><i class="bi bi-lightning-charge"></i></div>
                    <h3>Innovación</h3>
                    <p>
                    Utilizamos tecnologías modernas y metodologías
                    eficientes para desarrollar soluciones digitales
                    innovadoras y competitivas.
                    </p>
                </div>

                <div class="valor-card">
                    <div class="valor-icono"><i class="bi bi-people"></i></div>
                    <h3>Confianza</h3>
                    <p>
                    Construimos relaciones sólidas con nuestros clientes
                    basadas en transparencia, comunicación y resultados.
                    </p>
                </div>

                <div class="valor-card">
                    <div class="valor-icono"><i class="bi bi-graph-up"></i></div>
                    <h3>Resultados</h3>
                    <p>
                    Nos enfocamos en generar valor real mediante
                    soluciones tecnológicas que impulsen el crecimiento
                    de cada negocio.
                    </p>
                </div>

            </div>

        </div>

    </section>


    
    <!-- ESTADISTICAS -->
    <section class="quehacemos-seccion">

        <div class="contenedor">

            <div class="estadisticas-grid">

                <div class="stat-card">
                    <div class="valor-icono-white"><i class="bi bi-code-slash"></i></div>
                    <h3 class="stat-numero">50+</h3>
                    <p>Proyectos completados</p>
                </div>

                <div class="stat-card">
                    <div class="valor-icono-white"><i class="bi bi-people"></i></div>
                    <h3 class="stat-numero">30+</h3>
                    <p>Clientes satisfechos</p>
                </div>

                <div class="stat-card">
                    <div class="valor-icono-white"><i class="bi bi-award"></i></div>
                    <h3 class="stat-numero">3</h3>
                    <p>Años de experiencia</p>
                </div>

                <div class="stat-card">
                    <div class="valor-icono-white"><i class="bi bi-headset"></i></div>
                    <h3 class="stat-numero">100%</h3>
                    <p>Soporte y compromiso</p>
                </div>

            </div>

        </div>

    </section>

    <!-- CTA -->
    <section class="quehacemos-seccion contenedor cta">

        <h2>¿Tienes un proyecto en mente?</h2>
        <p>Contáctanos y te ayudaremos a hacerlo realidad.</p>

        <a href="#" class="btn-principal">Comencemos</a>

    </section>

    <!-- FOOTER -->

    <footer class="footer-area">
        <div class="contenedor">

            <div class="footer-brujula">

            <!-- ARRIBA -->
            <div class="brujula-top">
                <img src="{{ asset('img/pnglogoclaro.png') }}" height="55" alt="Logo">
                <p class="footer-tagline">
                Belleza • Estilo • Confianza
                </p>
            </div>

            <!-- IZQUIERDA -->
            <div class="brujula-left">
                <div class="footer-social">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
            
            <!-- ABAJO -->
            <div class="brujula-center footer-links">
                <h5>Ubicación</h5>
                <a href="#" target="_blank">Abrir en Google Maps</a>
            </div>
        

            <!-- DERECHA -->
            <div class="brujula-right footer-links">
                <h5>Contacto</h5>
                <a href="tel:+14803632904">+1 (480) 363-2904</a>
            </div>

            </div>

        </div>

        <div class="footer-bottom">
            <p>© 2021 Todos los derechos reservados</p>
        </div>
    </footer>

</body>
<script>
const swiper = new Swiper(".serviciosSwiper", {

slidesPerView: 1,
spaceBetween: 25,
loop: true,

autoplay:{
delay:4000,
disableOnInteraction:false
},

pagination:{
el:".swiper-pagination",
clickable:true
},

navigation:{
nextEl:".swiper-button-next",
prevEl:".swiper-button-prev"
},

breakpoints:{

640:{
slidesPerView:1
},

768:{
slidesPerView:2
},

1024:{
slidesPerView:3
}

}

});
</script>
</html>