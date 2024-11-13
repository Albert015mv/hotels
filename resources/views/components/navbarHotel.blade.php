<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hoteles</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div>
        <nav class="bg-white border-b border-gray-200 shadow">
            <div class="max-w-screen-xl flex items-center justify-between mx-auto p-4">
                <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="{{ asset('img/logoTeapa.png') }}" class="h-8" alt="Logo de Teapa" />
                    <span class="text-xl font-semibold text-gray-800">Teapa Tabasco</span>
                </a>
                <div class="hidden md:flex md:space-x-8">
                    <a href="/dashboard"
                        class="text-gray-700 hover:text-blue-600 font-medium transition duration-200">Inicio</a>
                    <a href="/catalogoHoteles"
                        class="text-gray-700 hover:text-blue-600 font-medium transition duration-200">Regresar</a>
                </div>
            </div>
        </nav>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggleButton = document.querySelector('[data-collapse-toggle]');
            const navbarMenu = document.getElementById('navbar-dropdown');

            toggleButton.addEventListener('click', function() {
                navbarMenu.classList.toggle('hidden');
            });
        });
    </script>
</body>

</html>
