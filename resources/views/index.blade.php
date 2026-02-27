<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Vite SIEMPRE en head --}}
    @vite('resources/js/app.jsx')

    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <title>Document</title>
</head>
<body>
    <header class="header inicio">
        <div class="contenedor contenido-header">

            <div class="barra">
                <div class="barra-inner">
                    <a href="/">
                    <img src="{{ asset('img/PNGLOGO.png') }}" alt="Logo" class="logo">
                    </a>

                    <nav class="navegacion">
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
    <div id="react-root">
        HOLA MUNDOSAMDKSA
    </div>
</body>
</html>