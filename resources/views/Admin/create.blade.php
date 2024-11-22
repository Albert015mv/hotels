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

<body>
    <x-navbarAdm />
    <center><br>
        <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-md">

            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center border-b pb-4">
                Crear nuevo usuario
            </h2>
            <div class="overflow-hidden rounded-lg border border-gray-300 shadow-sm">
                <form action="{{ route('user.store') }}" method="POST">
                    @csrf
                    <table class="w-full text-left bg-gray-50 divide-y divide-gray-200">
                        <tbody class="divide-y divide-gray-300">
                            <!-- Nombre del Hotel -->
                            <tr>
                                <td class="p-4 font-semibold bg-blue-100 text-gray-700 w-1/3">Nombre del usuario</td>
                                <td class="p-4">
                                    <input type="text" name="name" id="name" placeholder="Ingrese su nombre"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 transition"
                                        required>
                                </td>
                            </tr>
                            <!-- Dirección -->
                            <tr>
                                <td class="p-4 font-semibold bg-blue-100 text-gray-700">Correo</td>
                                <td class="p-4">
                                    <input type="email" name="email" id="email" placeholder="Ingrese su correo"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 transition"
                                        required>
                                </td>
                            </tr>
                            <!-- Número de Habitaciones -->
                            <tr>
                                <td class="p-4 font-semibold bg-blue-100 text-gray-700">Contraseña</td>
                                <td class="p-4">
                                    <input type="password" name="password" id="password"
                                        placeholder="Ingrese su contraseña"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 transition"
                                        required>
                                </td>
                            </tr>
                            <!-- Calificación -->
                            <tr>
                                <td class="p-4 font-semibold bg-blue-100 text-gray-700">Rol</td>
                                <td class="p-4">
                                    <select name="rol" id="rol"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 transition">
                                        <option selected>Selecciona la opcion</option>
                                        <option value="1">Turista</option>
                                        <option value="2">Administrador</option>
                                        <option value="3">Administrador de un Hotel</option>
                                    </select>
                                </td>
                            </tr>

                            <!-- Botón de envío -->
                            <tr>
                                <td colspan="2" class="p-4 bg-gray-100 text-center">
                                    <button type="submit"
                                        class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 rounded-lg shadow-lg transition duration-300 transform hover:scale-105">
                                        Crear Usuario
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </center>
</body>

</html>
