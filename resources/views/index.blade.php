<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Vite SIEMPRE en head --}}
    @vite('resources/js/app.jsx')

    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <!--BootStrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <title>Zhyperix</title>
</head>
     <a href="https://wa.me/526331325768" class="whatsapp-float" target="_blank"><i class="bi bi-whatsapp"></i></a>
<body>
    <header class="header inicio">
        <div class="contenedor contenido-header">

            <div class="barra">
                <div class="barra-inner">

                    <a href="/">
                    <img src="{{ asset('img/pnglogoclaro.png') }}" alt="Logo" class="logo">
                    </a>

                    <!-- BOTON HAMBURGUESA -->
                    <button class="menu-toggle" id="menuToggle">
                    ☰
                    </button>

                    <nav class="navegacion" id="navMenu">
                    <a href="#">Nosotros</a>
                    <a href="#">Anuncios</a>
                    <a href="#">Blog</a>
                    <a href="#">Contacto</a>
                    </nav>

                </div>
            </div>
            <h1 class="hero-title">Software, sistemas a medida y soporte IT profesional.</h1>
        </div>
    </header>
    <section class="servicios contenedor">
    <h2 class="nuestros-servicios">Nuestros Servicios</h2>

    <div class="swiper serviciosSwiper">
        <div class="swiper-wrapper">

            <!-- CARD -->
            <div class="swiper-slide">
                <div class="servicio-card">
                    <div class="servicio-img">
                        <img src="{{ asset('img/coding.jpg') }}" alt="Codigo">
                    </div>
                    <span class="icono">🚀</span>
                    <h3>Desarrollo de Software</h3>
                    <p>Aplicaciones web y sistemas empresariales escalables y modernos.</p>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        Officiis soluta, exercitationem asperiores sint consequuntur ipsam voluptatem ab id. 
                        Sed delectus in, maiores minus enim corporis quas quia natus velit esse.
                    </p>
                    <a href="{{ route('sobrenosotros') }}" class="boton-solicitar">
                        Solicitar Servicio
                    </a>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="servicio-card">
                    <div class="servicio-img">
                        <img src="{{ asset('img/sistemasmedida.jpeg') }}" alt="">
                    </div>
                    <span class="icono">📱</span>
                    <h3>Sistemas a la Medida</h3>
                    <p>Soluciones personalizadas adaptadas a las necesidades de tu negocio.</p>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        Officiis soluta, exercitationem asperiores sint consequuntur ipsam voluptatem ab id. 
                        Sed delectus in, maiores minus enim corporis quas quia natus velit esse.
                    </p>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="servicio-card">
                    <div class="servicio-img">
                        <img src="{{ asset('img/instalacion-camaras.jpg') }}" alt="">
                    </div>
                    <span class="icono">📷</span>
                    <h3>Instalación de Cámaras</h3>
                    <p>Implementación profesional de sistemas de videovigilancia.</p>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        Officiis soluta, exercitationem asperiores sint consequuntur ipsam voluptatem ab id. 
                        Sed delectus in, maiores minus enim corporis quas quia natus velit esse.
                    </p>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="servicio-card">
                    <div class="servicio-img">
                        <img src="{{ asset('img/mantenimiento-preventivo.jpg') }}" alt="">
                    </div>
                    <span class="icono">🛠️</span>
                    <h3>Mantenimiento Correctivo</h3>
                    <p>Diagnóstico y reparación de equipos de cómputo.</p>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        Officiis soluta, exercitationem asperiores sint consequuntur ipsam voluptatem ab id. 
                        Sed delectus in, maiores minus enim corporis quas quia natus velit esse.
                    </p>
                </div>
            </div>

             <div class="swiper-slide">
                <div class="servicio-card">
                    <div class="servicio-img">
                        <img src="{{ asset('img/configuracionserver.jpg') }}" alt="">
                    </div>
                    <span class="icono">🛠️</span>
                    <h3>Configuracion de Servidores</h3>
                    <p>Diagnóstico y reparación de equipos de cómputo.</p>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        Officiis soluta, exercitationem asperiores sint consequuntur ipsam voluptatem ab id. 
                        Sed delectus in, maiores minus enim corporis quas quia natus velit esse.
                    </p>
                </div>
            </div>

        </div>

        <!-- Flechas -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

        <!-- Paginación -->
        <div class="swiper-pagination"></div>
    </div>
    </section>
       
        <div class="contenedor seccion-inferior">
            <section class="blog">
           
                <h2>¿Por qué elegir ZYPHERIX?</h2>

                <div class="porque-grid">
                     <div class="porque-card porque-con-img">
                        <div class="porque-texto">
                            <h4>⚡ Respuesta rápida</h4>
                            <p>Atendemos incidencias en el menor tiempo posible.</p>
                        </div>
                        <div class="porque-img">
                            <img src="{{ asset('img/coding.jpg') }}" alt="Codigo">
                        </div>
                    </div>

                    <div class="porque-card porque-con-img">
                        <div class="porque-texto">
                            <h4>🧠 Experiencia técnica</h4>
                            <p>Especialistas en infraestructura y desarrollo.</p>
                        </div>
                         <div class="porque-img">
                            <img src="{{ asset('img/coding.jpg') }}" alt="Codigo">
                        </div>
                    </div>

                    <div class="porque-card porque-con-img">
                        <div class="porque-texto">
                            <h4>🔒 Soluciones confiables</h4>
                            <p>Implementaciones seguras y escalables.</p>
                        </div>
                        <div class="porque-img">
                            <img src="{{ asset('img/coding.jpg') }}" alt="Codigo">
                        </div>
                        
                    </div>

                </div> 
        </section>

        <!-- DERECHA -->
        <aside class="testimoniales">
            <h3>Testimoniales</h3>

            <div class="testimonial">
                <blockquote>
                    El personal se comportó de una excelente forma...
                </blockquote>
                <p>Ian Felix</p>
            </div>
        </aside>
    </div>
      
        <section class="cta">
            <div class="contenedor">
                <h2>¿Listo para llevar tu negocio al siguiente nivel?</h2>
                <a href="#" class="btn-principal">Contáctanos</a>
            </div>
        </section>

    <!-- FOOTER -->
    <footer class="footer-area shadow-sm">
        <div class="container">
        <div class="row g-4 justify-content-between">

            <div class="col-md-4">
            <img src="{{ asset('img/main-logo.png') }}" height="55">
            <p class="text-muted mt-3">Belleza • Estilo • Confianza</p>

            <div class="d-flex gap-3">
                <a href="#"><i class="bi bi-facebook fs-4"></i></a>
                <a href="#"><i class="bi bi-instagram fs-4"></i></a>
            </div>
            </div>

            <div class="col-md-3">
            <h5 class="fw-bold mb-2">Ubicación</h5>
            <a href="#" target="_blank">Abrir en Google Maps</a>
            </div>

            <div class="col-md-3">
            <h5 class="fw-bold mb-2">Contacto</h5>
            <p><a href="tel:+14803632904">+1 (480) 363-2904</a></p>
            </div>

        </div>
        </div>
          <p class="copyright">Todos los derechos reservados 2021 &copy;</p>
    </footer>   
    
</body>
</html>