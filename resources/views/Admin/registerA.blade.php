<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    @vite('resources/css/app.css') <!-- Asegúrate de tener los estilos de Tailwind CSS -->
</head>

<body>
    <x-navbarAdm />
    
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            @if (session('success'))
            <div class="mt-4 bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-lg mx-auto w-11/12 lg:w-3/4 shadow-md"
                role="alert">
                {{ session('success') }}
            </div>
        @endif
            <h2 class="text-2xl font-bold text-center mb-6">Registro</h2>

            <!-- Formulario de Registro -->
            <form action="{{ route('register.crear') }}" method="POST" class="space-y-6">
                @csrf

                <!-- Nombre -->
                <div>
                    <label for="name" class="block text-gray-700 font-medium mb-1">Nombre</label>
                    <input type="text" id="name" name="name" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Ingresa tu nombre">
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-gray-700 font-medium mb-1">Email</label>
                    <input type="email" id="email" name="email" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Ingresa tu email">
                </div>

                <!-- Contraseña -->
                <div>
                    <label for="password" class="block text-gray-700 font-medium mb-1">Contraseña</label>
                    <input type="password" id="password" name="password" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Ingresa tu contraseña">
                </div>

                <!-- Botón de registro -->
                <div>
                    <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition duration-200">Registrarse</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
