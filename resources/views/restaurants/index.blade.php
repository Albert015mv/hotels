<x-app-layout>
    @vite('resources/css/app.css')

    <!-- Imagen Principal con animación y filtro de color -->
    <div class="relative w-full h-[500px] overflow-hidden">
        <img src="{{ asset('/img/restaurantes.jfif') }}" alt=""
            class="object-cover w-full h-full brightness-50 saturate-125 transition-transform duration-1000 ease-in-out transform hover:scale-105">
        <div class="absolute inset-0 flex flex-col justify-center items-center text-center space-y-4">
            <h1 class="text-white text-7xl font-extrabold drop-shadow-lg tracking-wider animate-fadeInUp">Restaurantes
            </h1>
            <p class="text-white text-2xl bg-black bg-opacity-60 mt-4 px-6 py-3 rounded-lg drop-shadow-lg">Conoce los
                mejores restaurantes de Teapa, Tabasco.</p>
        </div>
    </div>

    <!-- Sección de descripción de lugares -->
    <section class="bg-gray-100 py-24">
        <div class="container mx-auto px-5 space-y-12">

            <!-- Card "La Tiendita" -->
            <div
                class="lg:w-4/5 mx-auto flex flex-wrap items-center bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-2xl transition-shadow duration-500">
                <img alt="La Tiendita" class="lg:w-1/2 w-full h-64 lg:h-auto object-cover object-center rounded-l-lg"
                    src="{{ asset('/img/tiendita.jpg')}}">
                <div class="lg:w-1/2 w-full p-8">
                    <h2 class="text-sm title-font text-gray-500 tracking-widest uppercase">Teapa, Tabasco</h2>
                    <h1 class="text-gray-900 text-4xl font-bold mb-4">La Tiendita</h1>
                    <p class="leading-relaxed text-lg text-gray-700">Es un pintoresco y acogedor establecimiento que
                        captura la esencia de las tradicionales tiendas mexicanas. Con una decoración llena de encanto y
                        detalles rústicos, este lugar ofrece una amplia selección de productos locales, desde artesanías
                        hasta antojitos típicos.</p>
                    <div class="mt-4">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3804.2020862107242!2d-92.93284362578667!3d17.545562698231034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85edba047cc6167f%3A0x927b1e0ca210b2a7!2sLa%20Tiendita%20VNV!5e0!3m2!1ses-419!2smx!4v1730598091383!5m2!1ses-419!2smx"
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
                    <h1 class="text-gray-900 text-4xl font-bold mb-4">Café Anturio</h1>
                    <p class="leading-relaxed text-lg text-gray-700">Ofrece una experiencia acogedora y relajante para
                        los amantes del buen café. Con un ambiente rústico y decorado con detalles que reflejan la
                        cultura y el encanto tabasqueño, este café es ideal para disfrutar de una buena bebida, charlar
                        con amigos o simplemente relajarse.</p>
                    <div class="mt-4">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3804.168973150984!2d-92.95656902578668!3d17.547139998185184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ed275fe90ef1c7%3A0x8d4c0e101518d645!2sCaf%C3%A9%20Anturio!5e0!3m2!1ses-419!2smx!4v1730599424847!5m2!1ses-419!2smx"
                            width="430" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade" class="rounded-lg shadow-lg"></iframe>
                    </div>
                </div>
                <img alt="Café Anturio" class="lg:w-1/2 w-full h-64 lg:h-auto object-cover object-center rounded-r-lg"
                    src="{{ asset('/img/cafe.jpg')}}">
            </div>

            <!-- Card "Ciber Café Rosales" -->
            <div
                class="lg:w-4/5 mx-auto flex flex-wrap items-center bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-2xl transition-shadow duration-500">
                <img alt="Ciber Café Rosales"
                    class="lg:w-1/2 w-full h-64 lg:h-auto object-cover object-center rounded-l-lg"
                    src="{{ asset('/img/jacalito.jpeg')}}">
                <div class="lg:w-1/2 w-full p-8">
                    <h2 class="text-sm title-font text-gray-500 tracking-widest uppercase">Teapa, Tabasco</h2>
                    <h1 class="text-gray-900 text-4xl font-bold mb-4">Jacalito</h1>
                    <p class="leading-relaxed text-lg text-gray-700"> Este restaurante es famoso por su comida mexicana
                        y mariscos frescos. Tiene un ambiente rústico y cálido que recuerda a las fondas tradicionales,
                        con atención cercana y platos caseros. Destacan sus antojitos típicos, tacos de pescado, y
                        platillos que resaltan los sabores de la región. Es ideal para disfrutar de una comida relajada
                        y de alta calidad en un ambiente local.</p>
                    <div class="mt-4">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3804.153879961825!2d-92.95560112578663!3d17.54785889816431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85edb0b472acfb7f%3A0x2966b885a0ba2c50!2sEl%20Antiguo%20Jacalito!5e0!3m2!1ses-419!2smx!4v1731022889681!5m2!1ses-419!2smx"
                            width="430" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade" class="rounded-lg shadow-lg"></iframe>
                    </div>
                </div>
            </div>

            <!-- Card "Restaurante Viole" -->
            <div
                class="lg:w-4/5 mx-auto flex flex-wrap items-center bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-2xl transition-shadow duration-500">
                <div class="lg:w-1/2 w-full p-8">
                    <h2 class="text-sm title-font text-gray-500 tracking-widest uppercase">Teapa, Tabasco</h2>
                    <h1 class="text-gray-900 text-4xl font-bold mb-4">La Mancha</h1>
                    <p class="leading-relaxed text-lg text-gray-700">Este lugar ofrece una experiencia un poco más
                        contemporánea, con una decoración moderna y un enfoque en la cocina de mar. Su especialidad son
                        los mariscos, con platillos creativos que incorporan ingredientes locales. La Mancha es conocido
                        por su ambiente vibrante y fresco, perfecto para cenas familiares o para pasar tiempo con
                        amigos.</p>
                    <div class="mt-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3804.160021024253!2d-92.95573662578664!3d17.547566398172847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85edb0b4121716d9%3A0x4c11b8f7d1caf572!2sRestaurante%20La%20Mancha!5e0!3m2!1ses-419!2smx!4v1731894349651!5m2!1ses-419!2smx" 
                            width="430" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade" class="rounded-lg shadow-lg"></iframe>
                    </div>
                </div>
                <img alt="Restaurante Viole"
                    class="lg:w-1/2 w-full h-64 lg:h-auto object-cover object-center rounded-r-lg" src="/img/mancha.jpg">
            </div>

            <div
                class="lg:w-4/5 mx-auto flex flex-wrap items-center bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-2xl transition-shadow duration-500">
                <img alt="Ciber Café Rosales"
                    class="lg:w-1/2 w-full h-64 lg:h-auto object-cover object-center rounded-l-lg"
                    src="{{ asset('/img/pulpo.jpg')}}">
                <div class="lg:w-1/2 w-full p-8">
                    <h2 class="text-sm title-font text-gray-500 tracking-widest uppercase">Teapa, Tabasco</h2>
                    <h1 class="text-gray-900 text-4xl font-bold mb-4">El Gran Pulpo</h1>
                    <p class="leading-relaxed text-lg text-gray-700"> Como su nombre sugiere, este restaurante se
                        especializa en mariscos y pescados. Es muy conocido por sus frescos y generosos platillos de
                        mar, desde ceviches hasta camarones y otros manjares del mar. La decoración suele estar
                        inspirada en temas marinos, y el ambiente es familiar y cómodo, ideal para quienes buscan
                        sabores intensos y frescos..</p>
                    <div class="mt-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30430.063047465614!2d-92.97715859396669!3d17.566710449149607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85edb7c10870babb%3A0x41d3210d15147243!2sEl%20Gran%20Pulpo%20Restaurant%20Teapa!5e0!3m2!1ses-419!2smx!4v1731894293492!5m2!1ses-419!2smx" 
                            width="430" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade" class="rounded-lg shadow-lg"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
<x-comments />
