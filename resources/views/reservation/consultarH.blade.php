<x-app-layout>
    <body class="bg-blue-100 min-h-screen flex items-center justify-center">

        <!-- Contenedor principal -->
        <div class="max-w-7xl mx-auto py-8 px-6 bg-white bg-opacity-90 shadow-lg rounded-lg">

            <!-- Título principal -->
            <h1 class="text-4xl font-bold text-center text-gray-800 mb-6">Tus Reservaciones</h1>

            <!-- Sección de resumen -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                <div class="bg-blue-600 text-white p-6 rounded-lg shadow-md">
                    <h2 class="text-xl font-bold">Total de Reservaciones</h2>
                    <p class="text-3xl mt-2 font-semibold">{{ $reservations->count() }}</p>
                </div>
                
            </div>

            <!-- Tabla de Reservaciones -->
            <div 
                class="overflow-x-auto shadow-lg rounded-lg w-full mt-6 bg-cover bg-center"
                style="background-image: url('https://via.placeholder.com/1500x500');">
                <table class="min-w-full bg-white bg-opacity-90 rounded-lg overflow-hidden border border-gray-200">
                    <!-- Encabezado de la tabla -->
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="px-6 py-4 text-left text-sm font-semibold">Hotel</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold">Nombre</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold">Apellido Paterno</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold">Apellido Materno</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold">Día de Registro</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold">Número de Personas</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold">Número de Habitación</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold">Fin del Registro</th>
                            <th class="px-6 py-4 text-center text-sm font-semibold">Acción</th>
                        </tr>
                    </thead>

                    <!-- Cuerpo de la tabla -->
                    <tbody class="divide-y divide-gray-300">
                        @foreach ($reservations as $reserva)
                            <tr class="hover:bg-gray-100 transition-all duration-200">
                                <td class="px-6 py-4 text-sm text-gray-800">{{ $reserva->hotel_id }}</td>
                                <td class="px-6 py-4 text-sm text-gray-800">{{ $reserva->name }}</td>
                                <td class="px-6 py-4 text-sm text-gray-800">{{ $reserva->paternal_surname }}</td>
                                <td class="px-6 py-4 text-sm text-gray-800">{{ $reserva->maternal_surname }}</td>
                                <td class="px-6 py-4 text-sm text-gray-800">{{ $reserva->registration_date }}</td>
                                <td class="px-6 py-4 text-sm text-gray-800">{{ $reserva->number_people }}</td>
                                <td class="px-6 py-4 text-sm text-gray-800">{{ $reserva->room_number }}</td>
                                <td class="px-6 py-4 text-sm text-gray-800">{{ $reserva->end_date }}</td>
                                <td class="px-6 py-4 text-center">
                                    <div class="flex justify-center space-x-2">
                                        
                                        <form action="{{ route('reservation.destroy', $reserva->id) }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full transition-transform duration-200 hover:scale-105">
                                                Cancelar
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </body>
</x-app-layout>
