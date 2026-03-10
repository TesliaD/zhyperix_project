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
<body>
    <a href="https://wa.me/526331325768" class="whatsapp-float" target="_blank"><i class="bi bi-whatsapp"></i></a>
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
                        <a href="/sobrenosotros">Nosotros</a>
                        <a href="#">Anuncios</a>
                        <a href="#">Blog</a>
                        <a href="#">Contacto</a>
                    </nav>

                </div>
            </div>
            <h1 class="hero-title">Software, sistemas a medida y soporte IT profesional.</h1>
        </div>
    </header>
    <section class="servicios">
        <div class="contenedor">
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
        </div>
    </section>
       
        <section class="seccion-inferior">
            <div class="contenedor">
                <div class="seccion-grid">
                    <section class="blog">
            
                        <h2>¿Por qué elegir ZYPHERIX?</h2>

                        <div class="porque-grid">
                            <div class="porque-card porque-con-img">
                                <div class="porque-texto">
                                    <h4>Respuesta rápida</h4>
                                    <p>Atendemos incidencias en el menor tiempo posible.</p>
                                </div>
                                <div class="porque-img">
                                    <img src="{{ asset('img/coding.jpg') }}" alt="Codigo">
                                </div>
                            </div>

                            <div class="porque-card porque-con-img">
                                <div class="porque-texto">
                                    <h4>Experiencia técnica</h4>
                                    <p>Especialistas en infraestructura y desarrollo.</p>
                                </div>
                                <div class="porque-img">
                                    <img src="{{ asset('img/coding.jpg') }}" alt="Codigo">
                                </div>
                            </div>

                            <div class="porque-card porque-con-img">
                                <div class="porque-texto">
                                    <h4>Soluciones confiables</h4>
                                    <p>Implementaciones seguras y escalables.</p>
                                </div>
                                <div class="porque-img">
                                    <img src="{{ asset('img/coding.jpg') }}" alt="Codigo">
                                </div>
                                
                            </div>

                            <div class="porque-card porque-con-img">
                                <div class="porque-texto">
                                    <h4>Soluciones confiables</h4>
                                    <p>Implementaciones seguras y escalables.</p>
                                </div>
                                <div class="porque-img">
                                    <img src="{{ asset('img/coding.jpg') }}" alt="Codigo">
                                </div>
                            </div>
                        </div> 
                </section>

                <!-- DERECHA -->
                <section class="testimoniales-pro">

                        <h3 class="testimoniales-titulo">Lo que dicen nuestros clientes</h3>

                        <div class="testimonial-carrusel">
                            <div class="testimonial-card active">
                                <img src="{{ asset('img/user1.jpg') }}" alt="Cliente">

                                <div class="testimonial-stars">
                                    ★★★★★
                                </div>

                                <blockquote>
                                    El equipo de ZYPHERIX resolvió nuestro problema en tiempo récord.
                                    Servicio profesional y altamente recomendado.
                                </blockquote>

                                <p class="testimonial-nombre">Ian Felix</p>
                                </div>

                                <!-- Testimonial 2 -->
                                <div class="testimonial-card">
                                <img src="{{ asset('img/user1.jpg') }}" alt="Cliente">

                                <div class="testimonial-stars">
                                    ★★★★★
                                </div>

                                <blockquote>
                                    Excelente atención y soluciones muy confiables.
                                    Sin duda volveríamos a trabajar con ellos.
                                </blockquote>

                                <p class="testimonial-nombre">Cliente satisfecho</p>
                                </div>
                        </div>
                </section>

                </div>
            </div>
        </section>    
        
      
        <section class="cta">
            <div class="contenedor">
                <h2>¿Listo para llevar tu negocio al siguiente nivel?</h2>
                <a href="#" class="btn-principal">Contáctanos</a>
            </div>
        </section>

    <!-- FOOTER -->

    <footer class="footer-area">
        <div class="contenedor">

            <div class="footer-brujula">

            <!-- ARRIBA -->
            <div class="brujula-top">
                <img src="{{ asset('img/pnglogoclaro.png') }}" height="55" alt="Logo">
                <p class="footer-tagline">
                    Software • Desarrollo Web • Soluciones Tecnológicas
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
</html>