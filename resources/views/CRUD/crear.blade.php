@extends('layouts.admin')
@section('content')
<x-navbarAdm />
    <div class="max-w-4xl mx-auto bg-gradient-to-b from-white to-gray-100 shadow-lg rounded-lg mt-10 p-6">
        <h2 class="text-3xl font-bold text-blue-700 mb-6 text-center">Registro de Hotel</h2>

        <!-- Mensaje de éxito -->
        @if (session('success'))
            <div class="mt-4 bg-green-100 border-l-4 border-green-500 text-green-700 p-4" role="alert">
                <p class="font-bold">¡Éxito!</p>
                <p>{{ session('success') }}</p>
            </div>
        @endif

        <form method="POST" action="{{ route('CRUD.store') }}" class="space-y-5" enctype="multipart/form-data">
            @csrf

            <!-- Nombre -->
            <div class="flex items-center">
                <span class="text-blue-600 mr-3 text-xl"><i class="fas fa-hotel"></i></span>
                <div class="w-full">
                    <label for="name" class="block text-md font-medium text-gray-700">Nombre</label>
                    <input type="text" id="name" name="name"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-md"
                        placeholder="Nombre del hotel" required>
                </div>
            </div>

            <div class="flex items-center">
                <span class="text-blue-600 mr-3 text-xl"><i class="fas fa-hotel"></i></span>
                <div class="w-full">
                    <label for="name" class="block text-md font-medium text-gray-700">Nombre</label>
                    <input type="text" name="id_admin" >
                </div>
            </div>

            <!-- Descripción -->
            <div class="flex items-center">
                <span class="text-blue-600 mr-3 text-xl"><i class="fas fa-info-circle"></i></span>
                <div class="w-full">
                    <label for="address" class="block text-md font-medium text-gray-700">Direccion</label>
                    <input type="text" id="address" name="address"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-md"
                        placeholder="Ubicacion del hotel" required>
                </div>
            </div>

            <!-- Número de habitaciones -->
            <div class="flex items-center">
                <span class="text-blue-600 mr-3 text-xl"><i class="fas fa-door-closed"></i></span>
                <div class="w-full">
                    <label for="number_rooms" class="block text-md font-medium text-gray-700">Número de habitaciones</label>
                    <input type="number" id="number_rooms" name="number_rooms"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-md"
                        placeholder="Número total de habitaciones" required>
                </div>
            </div>

            <!-- Número de teléfono -->
            <div class="flex items-center">
                <span class="text-blue-600 mr-3 text-xl"><i class="fas fa-phone-alt"></i></span>
                <div class="w-full">
                    <label for="phone_number" class="block text-md font-medium text-gray-700">Número de teléfono</label>
                    <input type="tel" id="phone_number" name="phone_number"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-md"
                        placeholder="Telefono del hotel" required>
                </div>
            </div>

            <!-- Calificación -->
            <div class="flex items-center">
                <span class="text-blue-600 mr-3 text-xl"><i class="fas fa-star"></i></span>
                <div class="w-full">
                    <label for="qualification" class="block text-md font-medium text-gray-700">Calificación</label>
                    <input type="text" step="0.1" id="qualification" name="qualification"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-md"
                        placeholder="Calificación del 1 al 5" required>
                </div>
            </div>

             <!-- Calificación -->
             <div class="flex items-center">
                <span class="text-blue-600 mr-3 text-xl"><i class="fas fa-star"></i></span>
                <div class="w-full">
                    <label for="price" class="block text-md font-medium text-gray-700">Precio</label>
                    <input type="numeric" step="0.1" id="price" name="price"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-md"
                        placeholder="Calificación del 1 al 5" required>
                </div>
            </div>
            <!-- Botón de Enviar -->
            <div class="text-center">
                <button type="submit"
                    class="w-full bg-gradient-to-r from-blue-500 to-blue-700 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 transition duration-150">
                    <i class="fas fa-save mr-2"></i> Registrar hotel
                </button>
            </div>
        </form>
    </div>
@endsection
