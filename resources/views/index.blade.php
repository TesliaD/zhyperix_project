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
    <title>Zhyperix</title>
</head>
    <script>
        const toggle = document.getElementById('menuToggle');
        const nav = document.getElementById('navMenu');

        toggle.addEventListener('click', () => {
            nav.classList.toggle('activo');
        });
    </script>

    <script>
        const reveals = document.querySelectorAll('.servicio-card, .cta, .testimoniales');

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
            });
        }, { threshold: 0.15 });

        reveals.forEach(el => {
            el.classList.add('reveal');
            observer.observe(el);
        });
    </script>

    <a href="https://wa.me/526311234567" class="whatsapp-float" target="_blank"><i class="bi bi-whatsapp"></i></a>
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
        <h2>Nuestros Servicios</h2>

        <div class="servicios-grid">

            <div class="servicio-card">
                <div class="servicio-img">
                    <img src="{{ asset('img/coding.jpg') }}" alt="Codigo">
                </div>
                    <span class="icono">🚀</span>
                    <h3>Desarrollo de Software</h3>
                    <p>Aplicaciones web y sistemas empresariales escalables y modernos.</p>
            </div>

            <div class="servicio-card">
                <div class="servicio-img">
                    <img src="{{ asset('img/sistemasmedida.jpeg') }}" alt="Codigo">
                </div>
                <span class="icono">📱</span>
                <h3>Sistemas a la Medida</h3>
                <p>Soluciones personalizadas adaptadas a las necesidades de tu negocio.</p>
            </div>

            <div class="servicio-card">
                <span class="icono">📷</span>
                <h3>Instalación de Cámaras</h3>
                <p>Implementación profesional de sistemas de videovigilancia.</p>
            </div>

            <div class="servicio-card">
                <span class="icono">🛠️</span>
                <h3>Mantenimiento Correctivo</h3>
                <p>Diagnóstico y reparación de equipos de cómputo.</p>
            </div>

            <div class="servicio-card">
                <span class="icono">🖥️</span>
                <h3>Configuración de Servidores</h3>
                <p>Implementación y administración de infraestructura empresarial.</p>
            </div>

        </div>
    </section>
    <section class="porque">
        <div class="contenedor">
            <h2>¿Por qué elegir ZYPHERIX?</h2>

            <div class="porque-grid">

            <div>
                <h4>⚡ Respuesta rápida</h4>
                <p>Atendemos incidencias en el menor tiempo posible.</p>
            </div>

            <div>
                <h4>🧠 Experiencia técnica</h4>
                <p>Especialistas en infraestructura y desarrollo.</p>
            </div>

            <div>
                <h4>🔒 Soluciones confiables</h4>
                <p>Implementaciones seguras y escalables.</p>
            </div>

            </div>
        </div>
    </section>

    <section class="cta">
        <div class="contenedor">
            <h2>¿Listo para llevar tu negocio al siguiente nivel?</h2>
            <a href="#" class="btn-principal">Contáctanos</a>
        </div>
    </section>

     <section class="testimoniales">
            <h3>Testimoniales</h3>
            <div class="testimonial">
                <blockquote>
                        El personal se comportó de una excelente forma, muy buena atención y la casa que me 
                        ofrecieron cumple con todas mis expectativas.
                </blockquote>
                <p>Ian Felix</p>
            </div>
        </section>

    <footer class="footer seccion">
        <div class="contenedor  contenido-footer">
               <nav class="navegacion-footer">
                    <a>Nosotros</a>
                    <a>Anuncios</a>
                    <a>Blog</a>
                    <a>Contacto</a>
                </nav>
        </div>
        <p class="copyright">Todos los derechos reservados 2021 &copy;</p>
    </footer>
    
</body>
</html>