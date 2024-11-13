@extends('layouts.admin')
@section('content')
<x-navbarAdm />
    <div class="max-w-7xl mx-auto py-8">
        <h1 class="text-4xl font-bold text-center text-gray-800 mb-10">Listado de Reservacion</h1>

        <p class="text-center text-gray-600 mb-6 text-lg">
            Bienvenido al listado de reservaciones. Aquí puedes ver la información, actualizar o eliminar registros.
        </p>

        @if (session('success'))
            <div class="mt-4 bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-lg mx-auto w-11/12 lg:w-3/4 shadow-md"
                role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto shadow-2xl rounded-lg mx-auto w-full lg:w-3/4">
            <table class="min-w-full bg-white rounded-lg overflow-hidden shadow-lg">
                <thead class="text-white bg-gradient-to-r from-gray-700 via-gray-600 to-gray-700">
                    <tr>
                        <th class="px-6 py-4 text-left text-sm font-semibold tracking-wide uppercase">Hotel</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold tracking-wide uppercase">Nombre</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold tracking-wide uppercase">Apellido Paterno</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold tracking-wide uppercase">Apellido Materno</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold tracking-wide uppercase">Dia del registro</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold tracking-wide uppercase">Numero de personas</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold tracking-wide uppercase">Numero de habitacion</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold tracking-wide uppercase">Fin del registro</th>
                        <th class="px-6 py-4 text-center text-sm font-semibold tracking-wide uppercase">Acción</th>
                    </tr>
                </thead>
                <tbody class="bg-gray-50 divide-y divide-gray-200">
                    @foreach ($reservations as $reserva)
                        <tr class="hover:bg-blue-50 transition-colors duration-300">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $reserva->hotel_id }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $reserva->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $reserva->paternal_surname }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $reserva->maternal_surname }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $reserva->registration_date }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $reserva->number_people }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $reserva->room_number }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $reserva->end_date }}</td>
                            <td class="px-6 py-4 whitespace-nowrap flex justify-center space-x-2">
                                <div>
                                    <button
                                        class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full shadow-md transition-transform duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50"
                                        data-target="#modal{{ $reserva->id }}">
                                        Actualizar
                                    </button>
                                    @include('reservation.actualizarH') <!-- Modal de actualización -->
                                </div>
                                <div>
                                    <form action="{{ route('reservation.destroy', $reserva->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full shadow-md transition-transform duration-300 transform hover:scale-105">
                                            Eliminar
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
@endsection
