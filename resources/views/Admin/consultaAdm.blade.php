@extends('layouts.admin')
@section('content')
<x-navbarAdm />
<div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between mb-8">
        <div>
            <h1 class="text-4xl font-bold text-gray-800">Listado de los Usuarios</h1>
            <p class="text-gray-600 text-lg mt-2">
                Gestiona la información de los usuarios registrados.
            </p>
        </div>
        <a href="{{ route('user.create') }}"
           class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition-transform transform hover:scale-105">
            Agregar Usuario
        </a>
    </div>

    @if (session('success'))
        <div class="mt-4 bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-lg shadow-md"
            role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto shadow-lg rounded-lg">
        <table class="min-w-full bg-white rounded-lg">
            <thead class="bg-gradient-to-r from-gray-800 to-gray-600 text-white">
                <tr>
                    <th class="px-6 py-4 text-left text-sm font-semibold uppercase">Nombre</th>
                    <th class="px-6 py-4 text-left text-sm font-semibold uppercase">Correo</th>
                    <th class="px-6 py-4 text-left text-sm font-semibold uppercase">Contraseña</th>
                    <th class="px-6 py-4 text-left text-sm font-semibold uppercase">Rol</th>
                    <th class="px-6 py-4 text-center text-sm font-semibold uppercase">Acción</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 bg-gray-50">
                @foreach ($users as $admin)
                    <tr class="hover:bg-gray-100 transition duration-300">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $admin->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $admin->email }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $admin->password }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $admin->rol }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            <form action="{{ route('user.destroy', $admin->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full shadow transition-transform transform hover:scale-105">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
