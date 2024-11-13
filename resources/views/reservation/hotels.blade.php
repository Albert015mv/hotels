<x-navbar />
<!-- Imagen Principal con animación y filtro de color -->
<div class="relative w-full h-[500px] overflow-hidden">
    <img src="{{ asset('/img/hoteles.jfif') }}" alt=""
        class="object-cover w-full h-full brightness-50 saturate-125 transition-transform duration-1000 ease-in-out transform hover:scale-105">
    <div class="absolute inset-0 flex flex-col justify-center items-center text-center space-y-4">
        <h1 class="text-white text-7xl font-extrabold drop-shadow-lg tracking-wider animate-fadeInUp">Hoteles</h1>
        <p class="text-white text-2xl bg-black bg-opacity-60 mt-4 px-6 py-3 rounded-lg drop-shadow-lg">Conoce los
            Hoteles de Teapa, Tabasco para reservar.</p>
    </div>
</div>

<!-- Contenedor de Tarjetas -->
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 px-4 my-8">
    @foreach ($hotels as $hotel)
        <div
            class="lg:w-4/5 mx-auto flex flex-col justify-between bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-shadow duration-500 p-6">
            <div>
                <h2 class="text-sm title-font text-gray-500 tracking-widest uppercase text-center">Teapa, Tabasco</h2>
                <h1 class="text-gray-900 text-4xl font-bold mb-4 text-center">{{ $hotel->name }}</h1>
                <p class="leading-relaxed text-lg text-gray-700 mb-2"><strong>Descripción:</strong> {{ $hotel->address }}</p>
                <p class="text-gray-700 mb-2"><strong>Número de habitaciones:</strong> {{ $hotel->number_rooms }}</p>
                <p class="text-gray-700 mb-2"><strong>Número de teléfono:</strong> {{ $hotel->phone_number }}</p>
                <p class="text-gray-700 mb-4"><strong>Calificación:</strong> {{ $hotel->qualification }}</p>
            </div>
            <!-- Botón para abrir el modal de registro -->
            <a href="{{ route('reservation.crearH', ['hotel_id' => $hotel->id]) }}"
                class="mt-4 bg-blue-500 hover:bg-blue-600 text-white text-center font-semibold py-2 px-4 rounded-lg">
                Registrarse
            </a>
        </div>
    @endforeach
</div>
<x-comments />
