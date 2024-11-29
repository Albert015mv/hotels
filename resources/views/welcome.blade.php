<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pueblo Mágico Teapa</title>

    @vite('resources/css/app.css')

    <style>
        /* Opciones de estilo adicionales */
        .hover-zoom:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .concepto {
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .grupo:hover .concepto {
            background-color: rgba(255, 255, 255, 0.8);
            color: #1a202c;
            opacity: 1;
        }
    </style>
</head>

<body class="antialiased bg-gray-100 text-gray-800">
    <!-- Contenedor principal -->
    <div class="relative flex flex-col min-h-screen">

        <!-- Encabezado de acceso -->
        @if (Route::has('login'))
            <div class="fixed top-0 right-0 p-6 text-right z-10">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-lg text-teal-700 hover:text-teal-900">Inicio</a>
                @else
                    <a href="{{ route('login') }}" class="text-lg text-teal-700 hover:text-teal-900">Sesion</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-lg text-teal-700 hover:text-teal-900">Registrarse</a>
                    @endif
                @endauth
            </div>
        @endif

        <!-- Sección de bienvenida -->
        <section
            class="flex items-center justify-center bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 py-20">
            <div class="container mx-auto flex flex-col lg:flex-row items-center space-y-10 lg:space-y-0 lg:space-x-12">
                <div class="lg:w-1/2 text-center lg:text-left">
                    <h1 class="text-4xl md:text-6xl font-bold text-white leading-tight mb-6">Descubre el encanto de
                        Teapa</h1>
                    <p class="text-lg text-white mb-8">Explora la belleza y tradición de nuestro pueblo mágico con una
                        plataforma fácil de usar.</p>
                </div>
                <div class="lg:w-1/2">
                    <img src="{{ asset('zona.png') }}" alt="Imagen de Teapa"
                        class="rounded-lg shadow-lg hover:scale-105 transition-all duration-300">
                </div>
            </div>
        </section>

        <!-- Sección de artesanías -->
        <section class="py-16 bg-white">
            <div class="container mx-auto text-center">
                <h2 class="text-3xl font-semibold mb-12 text-indigo-600">Fiestas populares</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Sombrero de Palma -->
                    <div class="bg-gray-50 p-6 rounded-lg shadow-lg grupo hover-zoom">
                        <img class="w-32 h-32 mb-4 rounded-lg mx-auto" src="{{ asset('img/imagen_1.jfif') }}"
                            alt="Sombrero de Palma">

                        <div class="uppercase font-bold text-indigo-800 concepto bg-opacity-0 text-white text-sm p-2">
                            Feria municipal</div>
                    </div>

                    <!-- Cerámica -->
                    <div class="bg-gray-50 p-6 rounded-lg shadow-lg grupo hover-zoom">
                        <img class="w-32 h-32 mb-4 rounded-lg mx-auto" src="{{ asset('img/ferrocarrilero.jfif') }}"
                            alt="Cerámica">
                        <div class="uppercase font-bold text-indigo-800 concepto bg-opacity-0 text-white text-sm p-2">
                            Fiesta de ferrocarrilero</div>
                    </div>

                    <!-- Textiles -->
                    <div class="bg-gray-50 p-6 rounded-lg shadow-lg grupo hover-zoom">
                        <img class="w-32 h-32 mb-4 rounded-lg mx-auto" src="{{ asset('img/dia.jfif') }}" alt="Textiles">
                        <div class="uppercase font-bold text-indigo-800 concepto bg-opacity-0 text-white text-sm p-2">
                            Carnaval Teapaneco</div>
                    </div>

                    <!-- Cestos -->
                    <div class="bg-gray-50 p-6 rounded-lg shadow-lg grupo hover-zoom">
                        <img class="w-32 h-32 mb-4 rounded-lg mx-auto" src="{{ asset('img/dia.jfif') }}" alt="Cestos">
                        <div class="uppercase font-bold text-indigo-800 concepto bg-opacity-0 text-white text-sm p-2">
                            Fiesta de santiago apostol</div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <x-comments />
</body>

</html>
