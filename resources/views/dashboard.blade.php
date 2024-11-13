<x-app-layout>
    <!-- Imagen Principal con animación -->
    <div class="relative w-full h-[500px] overflow-hidden">
        <img src="{{ asset('imagen 1.jpg') }}" alt="Explora Teapa"
            class="object-cover w-full h-full brightness-70 transition-transform duration-500 hover:scale-110 hover:brightness-50">
        <div class="absolute inset-0 flex flex-col justify-center items-center">
            <h1
                class="text-white text-7xl font-bold opacity-0 transform translate-y-[-50px] transition-opacity duration-800 ease-in-out">
                Explora Teapa</h1>
            <p class="text-white text-2xl bg-black bg-opacity-50 mt-4 px-4 py-2 rounded">Descubre la magia y belleza de
                Teapa, Tabasco.</p>
        </div>
    </div>

    <!-- Sección de información con tarjetas animadas -->
    <section class="py-16">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Tarjeta 1: Hoteles -->
                <a href="/catalogoHoteles" class="block">
                    <div
                        class="bg-white p-6 rounded-lg shadow-lg transform transition-transform duration-500 hover:scale-105 opacity-0 translate-y-20 transition-opacity duration-500">
                        <img class="w-full h-48 object-cover rounded-md mb-4" src="{{ asset('img/hoteles.jfif') }}"
                            alt="Hoteles">
                        <h2 class="text-lg font-semibold mb-2">Hoteles</h2>
                        <p class="text-gray-600">Descubre los mejores hoteles para una estadía relajante en Teapa.</p>
                    </div>
                </a>

                <!-- Tarjeta 2: Restaurantes -->
                <a href="restaurants/index" class="block">
                    <div
                        class="bg-white p-6 rounded-lg shadow-lg transform transition-transform duration-500 hover:scale-105 opacity-0 translate-y-20 transition-opacity duration-500">
                        <img class="w-full h-48 object-cover rounded-md mb-4" src="{{ asset('img/restaurantes.jfif') }}"
                            alt="Restaurantes">
                        <h2 class="text-lg font-semibold mb-2">Restaurantes</h2>
                        <p class="text-gray-600">Disfruta de una gastronomía única en los restaurantes más populares.
                        </p>
                    </div>
                </a>

                <!-- Tarjeta 3: Zona Turística -->
                <a href="tour/index" class="block">
                    <div
                        class="bg-white p-6 rounded-lg shadow-lg transform transition-transform duration-500 hover:scale-105 opacity-0 translate-y-20 transition-opacity duration-500">
                        <img class="w-full h-48 object-cover rounded-md mb-4" src="{{ asset('img/zonas.jfif') }}"
                            alt="Zona Turística">
                        <h2 class="text-lg font-semibold mb-2">Zonas Turísticas</h2>
                        <p class="text-gray-600">Explora los lugares más icónicos y maravillosos de Teapa.</p>
                    </div>
                </a>
                <!-- Tarjeta 2: Restaurantes -->
                <a href="balnearios/index" class="block">
                    <div
                        class="bg-white p-6 rounded-lg shadow-lg transform transition-transform duration-500 hover:scale-105 opacity-0 translate-y-20 transition-opacity duration-500">
                        <img class="w-full h-48 object-cover rounded-md mb-4" src="{{ asset('img/balnearios.png') }}"
                            alt="Restaurantes">
                        <h2 class="text-lg font-semibold mb-2">Balnearios</h2>
                        <p class="text-gray-600">Consulta los diferentes balnearios en teapa tabasco.
                        </p>
                    </div>
                </a>
            </div><br>
            <div class="bg-blue-500 w-[1280px] h-[100px]">
            </div>

            <section class="text-white bg-gray-900 bg-repeat"
                style="background-image: url('{{ asset('img/seccion2.jfif') }}'); background-size: 200px;">
                <div class="container px-5 py-24 mx-auto">
                    <div class="flex justify-center items-center flex-wrap -m-4">
                        <div class="p-4 md:w-1/2 w-full">
                            <div class="h-[300px] bg-white p-8 rounded flex flex-col justify-center items-center">
                                <h1 class="text-center text-2xl font-bold text-black">Vuelve pronto</h1>
                                <h3 class="text-center text-lg text-black">Una vez que publiquen entradas, las verás
                                    aquí.</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="bg-blue-500 w-[1280px] h-[100px]">
            </div>
        </div>
    </section>
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
</x-app-layout>
