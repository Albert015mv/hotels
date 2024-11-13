<x-app-layout>
    @vite('resources/css/app.css')

    <!-- Imagen Principal con animación y filtro de color -->
    <div class="relative w-full h-[500px] overflow-hidden">
        <img src="{{ asset('/img/balnearios.png') }}" alt=""
            class="object-cover w-full h-full brightness-50 saturate-125 transition-transform duration-1000 ease-in-out transform hover:scale-105">
        <div class="absolute inset-0 flex flex-col justify-center items-center text-center space-y-4">
            <h1 class="text-white text-7xl font-extrabold drop-shadow-lg tracking-wider animate-fadeInUp">Balnearios
            </h1>
            <p class="text-white text-2xl bg-black bg-opacity-60 mt-4 px-6 py-3 rounded-lg drop-shadow-lg">Conoce los
                balnearios que puedes encontrar en Teapa Tabasco.</p>
        </div>
    </div>

    <!-- Sección de descripción de lugares -->
    <section class="bg-gray-100 py-24">
        <div class="container mx-auto px-5 space-y-12">

            <!-- Card "La Tiendita" -->
            <div
                class="lg:w-4/5 mx-auto flex flex-wrap items-center bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-2xl transition-shadow duration-500">
                <img alt="La Tiendita" class="lg:w-1/2 w-full h-64 lg:h-auto object-cover object-center rounded-l-lg"
                    src="/img/garzas.jpg">
                <div class="lg:w-1/2 w-full p-8">
                    <h2 class="text-sm title-font text-gray-500 tracking-widest uppercase">Teapa, Tabasco</h2>
                    <h1 class="text-gray-900 text-4xl font-bold mb-4">Balneario Las Garzas</h1>
                    <p class="leading-relaxed text-lg text-gray-700">es un sitio turístico popular por su entorno
                        natural y aguas frescas. Este balneario se encuentra rodeado de vegetación exuberante y es ideal
                        para pasar un día relajante en contacto con la naturaleza. Sus aguas cristalinas provienen de
                        manantiales locales, lo que las mantiene refrescantes incluso en el clima cálido de la región.
                    </p>
                    <div class="mt-4">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3804.0222337390055!2d-92.9270444257865!3d17.55412809798218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85edba01e9f2617d%3A0x4ebd67564c512d84!2sBalneario%20Las%20Garzas!5e0!3m2!1ses-419!2smx!4v1731209849559!5m2!1ses-419!2smx"
                            width="430" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade" class="rounded-lg shadow-lg"></iframe>
                    </div>
                </div>
            </div>

            <!-- Card "Café Anturio" -->
            <div
                class="lg:w-4/5 mx-auto flex flex-wrap items-center bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-2xl transition-shadow duration-500">
                <div class="lg:w-1/2 w-full p-8">
                    <h2 class="text-sm title-font text-gray-500 tracking-widest uppercase">Teapa, Tabasco</h2>
                    <h1 class="text-gray-900 text-4xl font-bold mb-4">La Hacienda</h1>
                    <p class="leading-relaxed text-lg text-gray-700">Es un lugar que combina historia y naturaleza en un
                        entorno que evoca las tradiciones tabasqueñas. Este sitio, rodeado de verdes montañas y
                        vegetación tropical, ofrece a los visitantes una experiencia auténtica de hacienda en un
                        ambiente rural. Con arquitectura colonial, amplios jardines y áreas abiertas, La Hacienda es
                        ideal para quienes buscan descansar y conectar con la naturaleza. </p>
                    <div class="mt-4">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243229.91507175838!2d-93.1249863435309!3d17.72260173518839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85edb1da176cf363%3A0x347584d880adf8bb!2sLA%20HACIENDA%20DEL%20TEAPANECO%2C%20BALNEARIO%20%26%20RESTAURANTE!5e0!3m2!1ses-419!2smx!4v1731209800474!5m2!1ses-419!2smx"
                            width="430" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade" class="rounded-lg shadow-lg"></iframe>
                    </div>
                </div>
                <img alt="Café Anturio" class="lg:w-1/2 w-full h-64 lg:h-auto object-cover object-center rounded-r-lg"
                    src="/img/hacienda.jfif">
            </div>

            <!-- Card "Café Anturio" -->
            <div
                class="lg:w-4/5 mx-auto flex flex-wrap items-center bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-2xl transition-shadow duration-500">
                <div class="lg:w-1/2 w-full p-8">
                    <h2 class="text-sm title-font text-gray-500 tracking-widest uppercase">Teapa, Tabasco</h2>
                    <h1 class="text-gray-900 text-4xl font-bold mb-4">Río La Joya</h1>
                    <p class="leading-relaxed text-lg text-gray-700">Si lo que buscas es una aventura al aire libre, el
                        río La Joya es el lugar ideal. Este río cristalino te invita a practicar diversas actividades
                        acuáticas, como nadar, kayak o tubing. </p>
                    <div class="mt-4">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243229.91507175838!2d-93.1249863435309!3d17.72260173518839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85edb1da176cf363%3A0x347584d880adf8bb!2sLA%20HACIENDA%20DEL%20TEAPANECO%2C%20BALNEARIO%20%26%20RESTAURANTE!5e0!3m2!1ses-419!2smx!4v1731209800474!5m2!1ses-419!2smx"
                            width="430" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade" class="rounded-lg shadow-lg"></iframe>
                    </div>
                </div>
                <img alt="Café Anturio" class="lg:w-1/2 w-full h-64 lg:h-auto object-cover object-center rounded-r-lg"
                    src="/img/hacienda.jfif">
            </div>
        </div>
    </section>
</x-app-layout>
<x-comments />
