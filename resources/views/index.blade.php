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
    <header>
        <div class="contenedor">
            <div class="barra">
                <a href="/">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo" class="logo">
                </a>

                <div class="mobile-menu">
                    <img alt="icono menu responsive">
                </div>
                
                <div class="derecha">
                    <nav class="navegacion">
                    </nav>
                </div>
            </div> 
            <h1>Software, sistemas a medida y soporte IT profesional.</h1>
        </div>
    </header>

    <div id="react-root">
        HOLA MUNDOSAMDKSA
    </div>
</body>
</html>