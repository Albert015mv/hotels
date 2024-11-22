<x-navAdminHotel />
<div class="bg-white rounded shadow p-6">
    <!-- Sección de resumen -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
        <div class="bg-blue-600 text-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-bold">Total de Hoteles</h2>
            <p class="text-3xl mt-2 font-semibold">{{ $hotels->count() }}</p>
        </div>

    </div>
    <h2 class="text-xl font-semibold mb-4">Lista de Hoteles</h2>
    <table class="min-w-full table-auto">
        <thead class="bg-gray-200">
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Nombre</th>
                <th class="px-4 py-2">Dirección</th>
                <th class="px-4 py-2">Número de Habitaciones</th>
                <th class="px-4 py-2">Número de Teléfono</th>
                <th class="px-4 py-2">Calificación</th>
                <th class="px-4 py-2">Precio</th>
                <th class="px-4 py-2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($hotels as $hotel)
                <tr>
                    <td class="px-4 py-2">{{ $hotel->id }}</td>
                    <td class="px-4 py-2">{{ $hotel->name }}</td>
                    <td class="px-4 py-2">{{ $hotel->address }}</td>
                    <td class="px-4 py-2">{{ $hotel->number_rooms }}</td>
                    <td class="px-4 py-2">{{ $hotel->phone_number }}</td>
                    <td class="px-4 py-2">{{ $hotel->qualification }}</td>
                    <td class="px-4 py-2">{{ $hotel->price }}</td>
                    <td class="px-4 py-2">
                        <form action="{{ route('hotels.destroy', $hotel->id) }}" method="POST"
                            onsubmit="return confirm('¿Estás seguro de que deseas eliminar este hotel?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
