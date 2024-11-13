<x-navbar />
    <!-- Imagen Principal con animación y filtro de color -->
    <div class="relative w-full h-[500px] overflow-hidden">
        <img src="{{ asset('/img/zonas.jfif') }}" alt=""
            class="object-cover w-full h-full brightness-50 saturate-125 transition-transform duration-1000 ease-in-out transform hover:scale-105">
        <div class="absolute inset-0 flex flex-col justify-center items-center text-center space-y-4">
            <h1 class="text-white text-7xl font-extrabold drop-shadow-lg tracking-wider animate-fadeInUp">Zonas
                turísticas
            </h1>
            <p class="text-white text-2xl bg-black bg-opacity-60 mt-4 px-6 py-3 rounded-lg drop-shadow-lg">Conoce los
                lugares turísticos más reconocidos en el municipio de Teapa.</p>
        </div>
    </div>

    <!-- Sección de descripción de lugares -->
    <section class="bg-gray-100 py-24">
        <div class="container mx-auto px-5 space-y-12">

            <!-- Card "Grutas de Coconá" -->
            <div
                class="lg:w-4/5 mx-auto flex flex-wrap items-center bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-2xl transition-shadow duration-500">
                <img alt="Grutas de Coconá"
                    class="lg:w-1/2 w-full h-64 lg:h-auto object-cover object-center rounded-l-lg"
                    src="/img/grutas.jfif">
                <div class="lg:w-1/2 w-full p-8">
                    <h2 class="text-sm title-font text-gray-500 tracking-widest uppercase">Teapa, Tabasco</h2>
                    <h1 class="text-gray-900 text-4xl font-bold mb-4">Grutas de Coconá</h1>

                    <!-- Descripción única -->
                    <div class="leading-relaxed text-lg text-gray-700 mt-4 bg-blue-50 p-6 rounded-lg shadow-inner">
                        <p>Las Grutas de Coconá son una de las maravillas naturales más importantes del estado. Ubicadas
                            en la sierra de Teapa, rodeadas de selva tropical, son ideales para los amantes de la
                            naturaleza y el ecoturismo. Las grutas presentan pasajes subterráneos, cámaras y formaciones
                            rocosas esculpidas durante miles de años por la acción del agua y el tiempo, con
                            estalactitas y estalagmitas iluminadas que ofrecen un espectáculo visual único.</p>
                    </div>

                    <!-- Mapa de ubicación -->
                    <div class="mt-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3803.815409881544!2d-92.93095242578626!3d17.563972997696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85edb9f06401a51f%3A0x9aad6884724d8025!2sGrutas%20de%20Cocon%C3%A1!5e0!3m2!1ses-419!2smx!4v1731211105034!5m2!1ses-419!2smx"
                            width="430" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade" class="rounded-lg shadow-lg"></iframe>
                    </div>
                </div>
            </div>

            <!-- Card "Centro de Teapa" -->
            <div
                class="lg:w-4/5 mx-auto flex flex-wrap items-center bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-2xl transition-shadow duration-500">
                <img alt="centro de Teapa"
                    class="lg:w-1/2 w-full h-64 lg:h-auto object-cover object-center rounded-l-lg"
                    src="/img/centro-teapa.jpg">
                <div class="lg:w-1/2 w-full p-8">
                    <h2 class="text-sm title-font text-gray-500 tracking-widest uppercase">Teapa, Tabasco</h2>
                    <h1 class="text-gray-900 text-4xl font-bold mb-4">Centro de Teapa</h1>

                    <!-- Descripción única -->
                    <div class="leading-relaxed text-lg text-gray-700 mt-4 bg-blue-50 p-6 rounded-lg shadow-inner">
                        <p>La plaza central es un lugar de encuentro tanto para locales como para turistas, con espacios
                            para relajarse, jardines bien cuidados y un kiosco en el que suelen realizarse eventos
                            culturales y actividades festivas. Además, el Centro de Teapa es conocido por sus delicias
                            gastronómicas, incluyendo platillos típicos como el pejelagarto asado, tamales, y dulces
                            regionales. </p>
                    </div>

                    <!-- Mapa de ubicación -->
                    <div class="mt-4">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15216.08856158102!2d-92.96462386476347!3d17.554132542388384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85edb74ba51ae753%3A0xfe2226b1dff86fba!2sCentro%2C%20Teapa%2C%20Tab.!5e0!3m2!1ses-419!2smx!4v1730687731964!5m2!1ses-419!2smx"
                            width="430" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade" class="rounded-lg shadow-lg"></iframe>
                    </div>
                </div>
            </div>

            <!-- card Parque Miguel Hidalgo" -->
            <div
                class="lg:w-4/5 mx-auto flex flex-wrap items-center bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-2xl transition-shadow duration-500">
                <img alt="Parque Miguel Hidalgo"
                    class="lg:w-1/2 w-full h-64 lg:h-auto object-cover object-center rounded-l-lg"
                    src="/img/parque-mi.jfif">
                <div class="lg:w-1/2 w-full p-8">
                    <h2 class="text-sm title-font text-gray-500 tracking-widest uppercase">Teapa, Tabasco</h2>
                    <h1 class="text-gray-900 text-4xl font-bold mb-4">Parque Miguel Hidalgo</h1>

                    <!-- Descripción única -->
                    <div class="leading-relaxed text-lg text-gray-700 mt-4 bg-blue-50 p-6 rounded-lg shadow-inner">
                        <p>El parque cuenta con áreas verdes bien cuidadas, senderos peatonales, y varias bancas, lo que
                            lo hace ideal para paseos tranquilos y momentos de descanso. También tiene una serie de
                            árboles que proporcionan sombra, lo cual es muy apreciado en el clima cálido de la región.
                        </p>
                    </div>

                    <!-- Mapa de ubicación -->
                    <div class="mt-4">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3804.1460612486208!2d-92.95624792578664!3d17.54823129815351!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85edb0b4655634b3%3A0xbcc21f54b582912!2sParque%20Miguel%20Hidalgo%20y%20Costilla%20Teapa%20Tabasco.!5e0!3m2!1ses-419!2smx!4v1730687831287!5m2!1ses-419!2smx"
                            width="430" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade" class="rounded-lg shadow-lg"></iframe>
                    </div>
                </div>
            </div>

            <!-- Card "Iglesia de Teapa" -->
            <div
                class="lg:w-4/5 mx-auto flex flex-wrap items-center bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-2xl transition-shadow duration-500">
                <img alt="Ilgesia de teapa"
                    class="lg:w-1/2 w-full h-64 lg:h-auto object-cover object-center rounded-l-lg"
                    src="/img/parque-mi.jfif">
                <div class="lg:w-1/2 w-full p-8">
                    <h2 class="text-sm title-font text-gray-500 tracking-widest uppercase">Teapa, Tabasco</h2>
                    <h1 class="text-gray-900 text-4xl font-bold mb-4">Iglesia de teapa</h1>

                    <!-- Descripción única -->
                    <div class="leading-relaxed text-lg text-gray-700 mt-4 bg-blue-50 p-6 rounded-lg shadow-inner">
                        <p>ubicada en Teapa, Tabasco, es uno de los sitios más representativos del municipio. Este
                            templo, de estilo colonial, data del siglo XVIII y destaca por su arquitectura sobria y
                            detalles históricos. Su fachada es sencilla pero encantadora, con paredes blancas y una
                            torre de campanario que se eleva sobre el centro del pueblo.</p>
                    </div>

                    <!-- Mapa de ubicación -->
                    <div class="mt-4">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15216.582120961602!2d-92.96397276500576!3d17.548256589436093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85edb0b464ffa77d%3A0xd575ae87f9e574b3!2sParroquia%20de%20Santiago%20Ap%C3%B3stol!5e0!3m2!1ses-419!2smx!4v1730687893418!5m2!1ses-419!2smx"
                            width="430" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade" class="rounded-lg shadow-lg"></iframe>
                    </div>
                </div>
            </div>


            <!-- Card "Estacion del ferrocarril" -->
            <div
                class="lg:w-4/5 mx-auto flex flex-wrap items-center bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-2xl transition-shadow duration-500">
                <img alt="Ilgesia de teapa"
                    class="lg:w-1/2 w-full h-64 lg:h-auto object-cover object-center rounded-l-lg"
                    src="/img/estacion.jpeg">
                <div class="lg:w-1/2 w-full p-8">
                    <h2 class="text-sm title-font text-gray-500 tracking-widest uppercase">Teapa, Tabasco</h2>
                    <h1 class="text-gray-900 text-4xl font-bold mb-4">Estacion del ferroviaria</h1>

                    <!-- Descripción única -->
                    <div class="leading-relaxed text-lg text-gray-700 mt-4 bg-blue-50 p-6 rounded-lg shadow-inner">
                        <p>La estación ferroviaria de Teapa, Tabasco, es un sitio emblemático en la historia del
                            municipio y un reflejo de la época dorada del ferrocarril en México. Construida en el siglo
                            XX, la estación fue un importante punto de conexión para el transporte de personas y
                            mercancías entre el sureste mexicano y el resto del país, siendo parte de la ruta del
                            ferrocarril del Istmo de Tehuantepec.</p>
                    </div>

                    <!-- Mapa de ubicación -->
                    <div class="mt-4">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3803.7913229571923!2d-92.95155072578619!3d17.565119197662582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85edb79a936b6d9b%3A0xb26c090fda04f0fd!2sEstaci%C3%B3n%20Ferroviaria%20Teapa!5e0!3m2!1ses-419!2smx!4v1730687968283!5m2!1ses-419!2smx"
                            width="430" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade" class="rounded-lg shadow-lg"></iframe>
                    </div>
                </div>
            </div>

            <!-- Card "Rio Puyacatengo" -->
            <div
                class="lg:w-4/5 mx-auto flex flex-wrap items-center bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-2xl transition-shadow duration-500">
                <img alt="Ilgesia de teapa"
                    class="lg:w-1/2 w-full h-64 lg:h-auto object-cover object-center rounded-l-lg"
                    src="/img/rios-puya.jpg">
                <div class="lg:w-1/2 w-full p-8">
                    <h2 class="text-sm title-font text-gray-500 tracking-widest uppercase">Teapa, Tabasco</h2>
                    <h1 class="text-gray-900 text-4xl font-bold mb-4">Rio Puyacatengo</h1>

                    <!-- Descripción única -->
                    <div class="leading-relaxed text-lg text-gray-700 mt-4 bg-blue-50 p-6 rounded-lg shadow-inner">
                        <p>Este río nace en la Sierra de Teapa y serpentea a través de hermosos paisajes selváticos y
                            montañosos, ofreciendo a locales y visitantes un espacio para disfrutar de la naturaleza.
                            Sus aguas cristalinas y refrescantes se prestan para actividades recreativas como nadar,
                            hacer picnic y disfrutar del entorno natural.</p>
                    </div>

                    <!-- Mapa de ubicación -->
                    <div class="mt-4">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3803.9190574853947!2d-92.95152172578638!3d17.559039997839342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85edb74e6e06b625%3A0xccd894b382d614f9!2sC.%20R%C3%ADo%20Puyacatengo%2C%20La%20Sierra%20Secc%20Rios%2C%2086801%20Teapa%2C%20Tab.!5e0!3m2!1ses-419!2smx!4v1730688020988!5m2!1ses-419!2smx"
                            width="430" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade" class="rounded-lg shadow-lg"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function toggleTab(tabId) {
            // Ocultar todo el contenido de las pestañas
            document.querySelectorAll('.tab-content').forEach(tab => {
                tab.classList.add('hidden');
            });

            // Mostrar el contenido de la pestaña seleccionada
            document.getElementById(tabId).classList.remove('hidden');
        }
    </script>
<x-comments />
