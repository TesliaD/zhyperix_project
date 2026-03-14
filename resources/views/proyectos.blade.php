<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
        @vite('resources/js/app.jsx')

    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/body.css') }}">
    <link rel="stylesheet" href="{{ asset('css/proyectosinter.css') }}">
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
                   <a href="#">Proyectos</a>
                   <a href="#">Referencias</a>
                   <a href="#">Contacto</a>

                </nav>

            </div>
        </div>

    </header>

    <section class="proyectos">
        <div class="contenedor">

            <h1 class="proyectos-titulo">Nuestros Proyectos</h1>
            <p class="proyectos-subtitulo">
                Algunos de los trabajos y soluciones tecnológicas que hemos desarrollado.
            </p>

            <div class="proyectos-grid">

                <!-- PROYECTO 1 -->
                <div class="proyecto-card">
                    <div class="proyecto-img">
                        <img src="{{ asset('img/proyecto-demo.jpg') }}" alt="Proyecto">
                    </div>

                    <div class="proyecto-info">
                        <h3>Sistema de Inventario</h3>

                        <p>
                            Sistema web para control de productos, ventas
                            y administración empresarial.
                        </p>

                        <div class="proyecto-tech">
                            <span>Laravel</span>
                            <span>MySQL</span>
                            <span>Bootstrap</span>
                        </div>

                        <a href="#" class="btn-proyecto">Ver Proyecto</a>
                    </div>
                </div>

                <!-- PROYECTO 2 -->
                <div class="proyecto-card">
                    <div class="proyecto-img">
                        <img src="{{ asset('img/proyecto-demo.jpg') }}" alt="Proyecto">
                    </div>

                    <div class="proyecto-info">
                        <h3>Instalación de Cámaras</h3>

                        <p>
                            Sistema de videovigilancia con acceso remoto
                            y grabación 24/7.
                        </p>

                        <div class="proyecto-tech">
                            <span>IP Cameras</span>
                            <span>NVR</span>
                            <span>Remote Access</span>
                        </div>

                        <a href="#" class="btn-proyecto">Ver Proyecto</a>
                    </div>
                </div>

                <!-- PROYECTO 3 -->
                <div class="proyecto-card">
                    <div class="proyecto-img">
                        <img src="{{ asset('img/proyecto-demo.jpg') }}" alt="Proyecto">
                    </div>

                    <div class="proyecto-info">
                        <h3>Sistema de Inventario</h3>

                        <p>
                            Sistema web para control de productos, ventas
                            y administración empresarial.
                        </p>

                        <div class="proyecto-tech">
                            <span>Laravel</span>
                            <span>MySQL</span>
                            <span>Bootstrap</span>
                        </div>

                        <a href="#" class="btn-proyecto">Ver Proyecto</a>
                    </div>
                </div>

                 <!-- PROYECTO 3 -->
                <div class="proyecto-card">
                    <div class="proyecto-img">
                        <img src="{{ asset('img/proyecto-demo.jpg') }}" alt="Proyecto">
                    </div>

                    <div class="proyecto-info">
                        <h3>Sistema de Inventario</h3>

                        <p>
                            Sistema web para control de productos, ventas
                            y administración empresarial.
                        </p>

                        <div class="proyecto-tech">
                            <span>Laravel</span>
                            <span>MySQL</span>
                            <span>Bootstrap</span>
                        </div>

                        <a href="#" class="btn-proyecto">Ver Proyecto</a>
                    </div>
                </div>

                <!-- PROYECTO 3 -->
                <div class="proyecto-card">
                    <div class="proyecto-img">
                        <img src="{{ asset('img/proyecto-demo.jpg') }}" alt="Proyecto">
                    </div>

                    <div class="proyecto-info">
                        <h3>Sistema de Inventario</h3>

                        <p>
                            Sistema web para control de productos, ventas
                            y administración empresarial.
                        </p>

                        <div class="proyecto-tech">
                            <span>Laravel</span>
                            <span>MySQL</span>
                            <span>Bootstrap</span>
                        </div>

                        <a href="#" class="btn-proyecto">Ver Proyecto</a>
                    </div>
                </div>

                <!-- PROYECTO 3 -->
                <div class="proyecto-card">
                    <div class="proyecto-img">
                        <img src="{{ asset('img/proyecto-demo.jpg') }}" alt="Proyecto">
                    </div>

                    <div class="proyecto-info">
                        <h3>Sistema de Inventario</h3>

                        <p>
                            Sistema web para control de productos, ventas
                            y administración empresarial.
                        </p>

                        <div class="proyecto-tech">
                            <span>Laravel</span>
                            <span>MySQL</span>
                            <span>Bootstrap</span>
                        </div>

                        <a href="#" class="btn-proyecto">Ver Proyecto</a>
                    </div>
                </div>

            </div>

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