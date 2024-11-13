<!-- Modal -->
<div id="modal{{ $hotel->id }}"
    class="modal hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center">
    <div class="bg-white rounded-lg shadow-lg max-w-lg w-full p-6 relative">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Actualizar Hotel</h2>

        <form action="{{ route('CRUD.update', $hotel->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input type="text" name="name" value="{{ $hotel->name }}"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm">
            </div>

            <div>
                <label for="address" class="block text-sm font-medium text-gray-700">Descripción</label>
                <input type="text" name="address" value="{{ $hotel->address }}"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm">
            </div>

            <!-- Número de habitaciones -->
            <div>
                <label for="number_rooms" class="block text-sm font-medium text-gray-700">Número de habitaciones</label>
                <input type="text" id="number_rooms" name="number_rooms" value="{{ $hotel->number_rooms }}"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                    required>
            </div>

            <!-- Número de teléfono -->
            <div>
                <label for="phone_number" class="block text-sm font-medium text-gray-700">Número de teléfono</label>
                <input type="text" id="phone_number" name="phone_number" value="{{ $hotel->phone_number }}"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                    required>
            </div>

            <!-- Calificación -->
            <div>
                <label for="qualification" class="block text-sm font-medium text-gray-700">Calificación</label>
                <input type="text" id="qualification" name="qualification" value="{{ $hotel->qualification }}"
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
