<!-- Modal -->
<div id="modal{{ $reserva->id }}"
    class="modal hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center">
    <div class="bg-white rounded-lg shadow-lg max-w-lg w-full p-6 relative overflow-y-auto max-h-screen">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Actualizar Hotel</h2>

        <form action="{{ route('reservation.update', $reserva->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <!-- Contenido del formulario -->

            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input type="text" name="name" value="{{ $reserva->name }}"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm">
            </div>

            <div>
                <label for="paternal_surname" class="block text-sm font-medium text-gray-700">Apellido Paterno</label>
                <input type="text" name="paternal_surname" id="paternal_surname" value="{{ $reserva->paternal_surname }}"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm">
            </div>

            <!-- Número de habitaciones -->
            <div>
                <label for="maternal_surname" class="block text-sm font-medium text-gray-700">Apellido Materno</label>
                <input type="text" id="maternal_surname" name="maternal_surname" value="{{ $reserva->maternal_surname }}"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                    required>
            </div>

            <!-- Número de teléfono -->
            <div>
                <label for="registration_date" class="block text-sm font-medium text-gray-700">Dia de Registro</label>
                <input type="date" id="registration_date" name="registration_date" value="{{ $reserva->registration_date }}"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                    required>
            </div>

            <!-- Calificación -->
            <div>
                <label for="number_people" class="block text-sm font-medium text-gray-700">Numero de personas</label>
                <input type="number" id="number_people" name="number_people" value="{{ $reserva->number_people }}"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                    required>
            </div>

            <div>
                <label for="room_number" class="block text-sm font-medium text-gray-700">numero de habitacion</label>
                <input type="text" id="room_number" name="room_number" value="{{ $reserva->room_number }}"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                    required>
            </div>

            <div>
                <label for="end_date" class="block text-sm font-medium text-gray-700">Final de registro</label>
                <input type="text" id="end_date" name="end_date" value="{{ $reserva->end_date }}"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                    required>
            </div>

            <div>
                <button type="submit"
                    class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                    Guardar cambios
                </button>
            </div>
        </form>

        <!-- Botón de cerrar el modal -->
        <button class="absolute top-2 right-2 text-gray-600 hover:text-gray-900 close-modal">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>
</div>

<script>
    function openModal(id) {
        document.getElementById('modal' + id).classList.remove('hidden');
    }

    function closeModal(id) {
        document.getElementById('modal' + id).classList.add('hidden');
    }
    document.querySelectorAll('button[data-target]').forEach(button => {
        button.addEventListener('click', function () {
            const target = this.getAttribute('data-target');
            document.querySelector(target).classList.remove('hidden');
        });
    });

    document.querySelectorAll('.close-modal').forEach(button => {
        button.addEventListener('click', function() {
            const modal = this.closest('.modal');
            modal.classList.add('hidden');
        });
    });
</script>

