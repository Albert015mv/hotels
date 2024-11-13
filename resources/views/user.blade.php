<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    
    <!-- Barra de navegación -->
    <x-navbar />

    <!-- Imagen Principal con animación -->
    <div class="relative w-full h-[500px] overflow-hidden">
        <img src="{{ asset('imagen 1.jpg') }}" alt="Explora Teapa" class="object-cover w-full h-full brightness-70 transition-transform duration-500 hover:scale-110 hover:brightness-50">
        <div class="absolute inset-0 flex flex-col justify-center items-center">
            <h1 class="text-white text-7xl font-bold opacity-0 transform translate-y-[-50px] transition-opacity duration-800 ease-in-out">Explora Teapa</h1>
            <p class="text-white text-2xl bg-black bg-opacity-50 mt-4 px-4 py-2 rounded">Descubre la magia y belleza de Teapa, Tabasco.</p>
        </div>
    </div>

    <!-- Sección de información con tarjetas animadas -->
    <section class="py-16">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Tarjeta 1: Hoteles -->
                <div class="bg-white p-6 rounded-lg shadow-lg transform transition-transform duration-500 hover:scale-105 opacity-0 translate-y-20 transition-opacity duration-500">
                    <img class="w-full h-48 object-cover rounded-md mb-4" src="{{ asset('hotel.jpg') }}" alt="Hoteles">
                    <h2 class="text-lg font-semibold mb-2">Hoteles</h2>
                    <p class="text-gray-600">Descubre los mejores hoteles para una estadía relajante en Teapa.</p>
                </div>

                <!-- Tarjeta 2: Restaurantes -->
                <div class="bg-white p-6 rounded-lg shadow-lg transform transition-transform duration-500 hover:scale-105 opacity-0 translate-y-20 transition-opacity duration-500">
                    <img class="w-full h-48 object-cover rounded-md mb-4" src="{{ asset('restauranes.jfif') }}" alt="Restaurantes">
                    <h2 class="text-lg font-semibold mb-2">Restaurantes</h2>
                    <p class="text-gray-600">Disfruta de una gastronomía única en los restaurantes más populares.</p>
                </div>

                <!-- Tarjeta 3: Zona Turística -->
                <div class="bg-white p-6 rounded-lg shadow-lg transform transition-transform duration-500 hover:scale-105 opacity-0 translate-y-20 transition-opacity duration-500">
                    <img class="w-full h-48 object-cover rounded-md mb-4" src="{{ asset('zona.png') }}" alt="Zona Turística">
                    <h2 class="text-lg font-semibold mb-2">Zonas Turísticas</h2>
                    <p class="text-gray-600">Explora los lugares más icónicos y maravillosos de Teapa.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Comments Section -->
    <x-comments />

    <script>
        // Efecto de fade-in en las tarjetas
        document.addEventListener('scroll', function() {
            const cards = document.querySelectorAll('.opacity-0');
            cards.forEach(card => {
                const rect = card.getBoundingClientRect();
                if (rect.top < window.innerHeight - 50) {
                    card.classList.remove('opacity-0', 'translate-y-20');
                }
            });

            // Efecto de fade-in en el título
            const title = document.querySelector('h1');
            const titleRect = title.getBoundingClientRect();
            if (titleRect.top < window.innerHeight - 50) {
                title.classList.remove('opacity-0', 'translate-y-[-50px]');
            }
        });
    </script>
</body>

</html>
