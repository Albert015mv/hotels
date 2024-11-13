
@vite('resources/css/app.css')
<x-navbarHotel />
<!-- Formulario de Registro -->
<div class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-md">
        <h3 class="text-2xl font-semibold mb-4 text-center">Registrar en el Hotel</h3>

        <form method="POST" action="{{ route('reservation.store') }}">
            @csrf
            <!-- Campo oculto para el ID del Hotel -->
            <input type="hidden" name="hotel_id" value="{{ $hotel_id }}">

            <!-- Otros campos del formulario -->
            <div class="mb-4">
                <label class="block text-gray-700">Nombre</label>
                <input type="text" name="name" class="w-full p-2 border border-gray-300 rounded mt-1" required>
            </div>
            <div class="mb-5">
                <label class="block text-gray-700 text-sm font-medium mb-1">Apellido Paterno</label>
                <input type="text" name="paternal_surname"
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required>
            </div>
            <div class="mb-5">
                <label class="block text-gray-700 text-sm font-medium mb-1">Apellido Materno</label>
                <input type="text" name="maternal_surname"
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required>
            </div>
            <div class="mb-5">
                <label class="block text-gray-700 text-sm font-medium mb-1">Fecha de Registro</label>
                <input type="date" name="registration_date"
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required>
            </div>
            <div class="mb-5">
                <label class="block text-gray-700 text-sm font-medium mb-1">Número de Personas</label>
                <input type="number" name="number_people"
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required>
            </div>
            <div class="mb-5">
                <label class="block text-gray-700 text-sm font-medium mb-1">Número de Habitación</label>
                <input type="number" name="room_number"
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required>
            </div>
            <div class="mb-5">
                <label class="block text-gray-700 text-sm font-medium mb-1">Fecha de Salida</label>
                <input type="date" name="end_date"
                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required>
            </div>

            <!-- Botones de acción -->
            <div class="flex justify-between mt-6">
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">Registrar</button>
            </div>
        </form>
    </div>
</div>
<!-- Modal de Confirmación -->
@if (session('reservation_success'))
    <div id="successModal" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex justify-center items-center">
        <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-sm">
            <h3 class="text-lg font-semibold mb-4 text-center text-green-500">Reservación Exitosa</h3>
            <p class="text-center">La reservación se ha registrado correctamente.</p>
            
            <!-- Botón para descargar el ticket PDF -->
            <div class="mt-4 text-center">
                <a href="{{ route('reservation.downloadTicket', ['id' => session('reservation_id')]) }}" 
                   class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">
                   Descargar Ticket PDF
                </a>
            </div>
            
            <!-- Botón para volver al hotel -->
            <div class="mt-4 text-center">
                <a href="{{ url('/catalogoHoteles') }}" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg">
                    Volver al Hotel
                </a>
            </div>
            
            <!-- Botón para cerrar el modal -->
            <div class="mt-4 text-center">
                <button onclick="closeModal()" class="bg-gray-400 hover:bg-gray-500 text-white px-4 py-2 rounded-lg">
                    Cerrar
                </button>
            </div>
        </div>
    </div>
@endif

<script>
    function closeModal() {
        document.getElementById('successModal').style.display = 'none';
    }
</script>
<x-comments />

