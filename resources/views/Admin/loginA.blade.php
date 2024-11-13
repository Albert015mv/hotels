<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <h2 class="text-2xl font-bold text-center mb-6">Iniciar Sesion</h2>
            
            <form action="{{ route('iniciar-sesion') }}" method="POST" class="space-y-6">
                @csrf
                
                <!-- Email -->
                <div>
                    <label for="email" class="block text-gray-700 font-medium mb-1">Email</label>
                    <input type="email" id="email" name="email" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Ingresa tu email">
                </div>
                
                <!-- Password -->
                <div>
                    <label for="password" class="block text-gray-700 font-medium mb-1">Contraseña</label>
                    <input type="password" id="password" name="password" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Ingresa tu contraseña">
                </div>
                
                <!-- Mantener la sesión iniciada -->
                <div class="flex items-center">
                    <input type="checkbox" id="remember" name="remember" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <label for="remember" class="ml-2 block text-gray-700 font-medium">Mantener la sesión iniciada</label>
                </div>
                
                <!-- Botón de registro -->
                <div>
                    <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition duration-200">Registrarse</button>
                </div>

                <!-- ¿No tienes cuenta? -->
                <div class="text-center">
                    <p class="text-gray-700">¿No tienes una cuenta? 
                        <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Registrarse</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
