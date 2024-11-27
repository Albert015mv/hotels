<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            font-family: 'Figtree', sans-serif;
            background-color: #f0f4f8; /* Color de fondo suave y profesional */
        }

        .background {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .top {
            background-color: #2c3e50; /* Color azul oscuro */
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 1.5rem;
            font-weight: 600;
            padding: 20px; /* Espaciado */
            text-align: center; /* Centrar texto */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3); /* Sombra más pronunciada */
        }

        .bottom {
            background-color: #ecf0f1; /* Color gris claro */
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            background: white; /* Fondo blanco para el contenedor de login */
            padding: 2rem;
            border-radius: 12px; /* Bordes más redondeados */
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px; /* Limitar el ancho del formulario */
            text-align: center; /* Centrar el texto */
            transition: transform 0.3s; /* Efecto de transformación */
        }

        .login-container:hover {
            transform: translateY(-5px); /* Efecto de elevación al pasar el mouse */
        }

        .login-container h2 {
            margin-bottom: 1rem; /* Espaciado inferior */
            color: #2c3e50; /* Color del texto */
            font-weight: 600; /* Peso de fuente */
        }

        .login-container a {
            color: #3498db; /* Color del enlace */
            text-decoration: none; /* Sin subrayado */
            font-weight: 500; /* Peso de fuente */
        }

        .login-container a:hover {
            text-decoration: underline; /* Subrayado al pasar el mouse */
        }

        .logo {
            width: 150px; /* Aumenta el tamaño del logo */
            height: auto; /* Mantiene la proporción */
            border-radius: 50%; /* Bordes redondeados para el logo */
            object-fit: cover; /* Mantener proporción y cubrir el área */
            margin-bottom: 20px; /* Espaciado inferior para el logo */
            display: block; /* Asegura que el logo se centre */
            margin-left: auto;
            margin-right: auto; /* Centrar el logo */
        }
        .footer {
            text-align: center;
            padding: 10px;
            font-size: 0.9rem;
            color: #7f8c8d; /* Color gris para el texto del pie */
        }
    </style>
</head>

<body>
    <div class="background">
        <div class="top">
            
            <h1>Bienvenido a la pagina Turismo</h1>
        </div>
        <div class="bottom">
            <div class="login-container">
                <a href="/"><img src="{{ asset('img/logoTeapa.png') }}" alt="Logo" class="logo" /></a>
                <h2>Iniciar Sesión</h2>
                <div class="mt-6">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div><br>
</body>

</html>