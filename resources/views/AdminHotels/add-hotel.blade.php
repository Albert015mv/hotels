<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ingresar Hotel</title>
    <!-- Enlace a Tailwind CSS desde CDN -->
    @vite('resources/css/app.css')
    <style>
        body {
            background: linear-gradient(to right, #455c42, #161616);
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="flex justify-center items-center min-h-screen bg-gray-100">

    <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-md">
        
        <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center border-b pb-4">
            Agregar Nuevo Hotel
        </h2>
        <div class="overflow-hidden rounded-lg border border-gray-300 shadow-sm">
            <form action="{{ route('hotels.store') }}" method="POST">
                @csrf
                <table class="w-full text-left bg-gray-50 divide-y divide-gray-200">
                    <tbody class="divide-y divide-gray-300">
                        <!-- Nombre del Hotel -->
                        <tr>
                            <td class="p-4 font-semibold bg-blue-100 text-gray-700 w-1/3">Nombre del Hotel</td>
                            <td class="p-4">
                                <input type="text" name="name" id="name"
                                    placeholder="Ingrese el nombre del hotel"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 transition"
                                    required>
                            </td>
                        </tr>
                        <!-- ID del Administrador (Oculto) -->
                        <input type="hidden" name="id_admin" value="{{ $adminH }}">

                        <!-- Dirección -->
                        <tr>
                            <td class="p-4 font-semibold bg-blue-100 text-gray-700">Dirección</td>
                            <td class="p-4">
                                <input type="text" name="address" id="address" placeholder="Ingrese la dirección"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 transition"
                                    required>
                            </td>
                        </tr>
                        <!-- Número de Habitaciones -->
                        <tr>
                            <td class="p-4 font-semibold bg-blue-100 text-gray-700">Número de Habitaciones</td>
                            <td class="p-4">
                                <input type="number" name="number_rooms" id="number_rooms"
                                    placeholder="Ingrese el número de habitaciones"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 transition"
                                    required>
                            </td>
                        </tr>
                        <!-- Número de Teléfono -->
                        <tr>
                            <td class="p-4 font-semibold bg-blue-100 text-gray-700">Número de Teléfono</td>
                            <td class="p-4">
                                <input type="text" name="phone_number" id="phone_number"
                                    placeholder="Ingrese el número de teléfono"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 transition"
                                    required>
                            </td>
                        </tr>
                        <!-- Calificación -->
                        <tr>
                            <td class="p-4 font-semibold bg-blue-100 text-gray-700">Calificación</td>
                            <td class="p-4">
                                <input type="text" name="qualification" id="qualification"
                                    placeholder="Ingrese la calificación (ej. 5 estrellas)"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 transition"
                                    required>
                            </td>
                        </tr>
                        <!-- Precio -->
                        <tr>
                            <td class="p-4 font-semibold bg-blue-100 text-gray-700">Precio</td>
                            <td class="p-4">
                                <input type="number" name="price" id="price" step="0.01"
                                    placeholder="Ingrese el precio del hotel"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 transition"
                                    required>


                            </td>
                        </tr>

                        <!-- Botón de envío -->
                        <tr>
                            <td colspan="2" class="p-4 bg-gray-100 text-center">
                                <button type="submit"
                                    class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 rounded-lg shadow-lg transition duration-300 transform hover:scale-105">
                                    Agregar Hotel
                                </button>

                            </td>
                            
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>

</body>

</html>
