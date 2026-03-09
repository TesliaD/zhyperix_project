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
<a href="#">Contacto</a>
</nav>

</div>
</div>
</header>


<!-- SOBRE NOSOTROS -->
<section class="contenedor sobre">
<h2>Sobre Nosotros</h2>

<div class="sobre-grid">

<div class="sobre-text">
<p>
Desarrollamos soluciones tecnológicas que ayudan a empresas y emprendedores
a crecer mediante software a medida, soporte IT y desarrollo web profesional.
</p>
</div>

<div class="sobre-img">
<img src="{{ asset('img/SobreNosotros.jpg') }}" alt="Equipo">
</div>

</div>
</section>


<!-- QUIENES SOMOS -->
<section class="contenedor">
<h2>Quiénes somos</h2>

<p>
Somos un equipo especializado en desarrollo de software,
diseño web y soporte tecnológico para empresas.
Nuestro objetivo es ofrecer soluciones digitales eficientes,
modernas y escalables.
</p>

</section>


<!-- SERVICIOS -->
<section class="servicios">

<div class="contenedor">

<h2 class="quehacemos-text">¿Qué hacemos?</h2>

<div class="swiper serviciosSwiper">

<div class="swiper-wrapper">

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

</div>
</div>

</div>
</section>


<!-- VALORES -->
<section class="contenedor">

<h2>Nuestros valores</h2>

<ul class="valores">

<li>🔒 Compromiso</li>
<li>⚡ Innovación</li>
<li>🤝 Confianza</li>
<li>📈 Resultados</li>

</ul>

</section>


<!-- ESTADISTICAS -->
<section class="contenedor estadisticas">

<div class="stat">+50 proyectos</div>
<div class="stat">+30 clientes</div>
<div class="stat">3 años experiencia</div>
<div class="stat">100% soporte</div>

</section>


<!-- CTA -->
<section class="contenedor cta">

<h2>¿Tienes un proyecto en mente?</h2>
<p>Contáctanos y te ayudaremos a hacerlo realidad.</p>

<a href="#" class="btn-principal">Contáctanos</a>

</section>


<!-- FOOTER -->

<footer class="footer-area">

<div class="contenedor">

<div class="footer-brujula">

<div class="brujula-top">
<img src="{{ asset('img/pnglogoclaro.png') }}" height="55">
<p>Belleza • Estilo • Confianza</p>
</div>

<div class="brujula-left">
<div class="footer-social">
<a href="#"><i class="bi bi-facebook"></i></a>
<a href="#"><i class="bi bi-instagram"></i></a>
</div>
</div>

<div class="brujula-center">
<h5>Ubicación</h5>
<a href="#">Abrir en Google Maps</a>
</div>

<div class="brujula-right">
<h5>Contacto</h5>
<a href="tel:+14803632904">+1 (480) 363-2904</a>
</div>

</div>

<div class="footer-bottom">
<p>© 2026 Todos los derechos reservados</p>
</div>

</div>

</footer>

</body>
</html>