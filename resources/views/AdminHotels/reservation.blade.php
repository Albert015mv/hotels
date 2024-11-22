<x-navAdminHotel />
<div class="bg-white rounded shadow p-6">
    <div class="bg-blue-600 text-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-bold">Total de Reservaciones</h2>
        <p class="text-3xl mt-2 font-semibold">{{ $reservations->count() }}</p>
    </div>
    <h2 class="text-xl font-semibold mb-4">Lista de Reservaciones</h2>
    <table class="min-w-full table-auto">
        <thead class="bg-gray-200">
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Hotel</th>
                <th class="px-4 py-2">Nombre</th>
                <th class="px-4 py-2">Apellido Paterno</th>
                <th class="px-4 py-2">Apellido Materno</th>
                <th class="px-4 py-2">Fecha de Registro</th>
                <th class="px-4 py-2">Número de Personas</th>
                <th class="px-4 py-2">Número de Habitación</th>
                <th class="px-4 py-2">Final del Registro</th>
                <th class="px-4 py-2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservations as $reservation)
                <tr>
                    <td class="px-4 py-2">{{ $reservation->id }}</td>
                    <td class="px-4 py-2">{{ $reservation->hotel_id }}</td>
                    <td class="px-4 py-2">{{ $reservation->name }}</td>
                    <td class="px-4 py-2">{{ $reservation->paternal_surname }}</td>
                    <td class="px-4 py-2">{{ $reservation->maternal_surname }}</td>
                    <td class="px-4 py-2">{{ $reservation->registration_date }}</td>
                    <td class="px-4 py-2">{{ $reservation->number_people }}</td>
                    <td class="px-4 py-2">{{ $reservation->room_number }}</td>
                    <td class="px-4 py-2">{{ $reservation->end_date }}</td>
                    <td class="px-4 py-2">
                        <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta reservación?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
