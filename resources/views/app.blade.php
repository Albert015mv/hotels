<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página con Barra de Navegación</title>
  @vite('resources/css/app.css') <!-- Para usar Tailwind CSS -->
</head>
<body class="bg-gray-100">

  <!-- Barra de Navegación -->
  <nav class="bg-blue-600 p-4 shadow-lg fixed w-full top-0 z-10">
    <div class="container mx-auto flex justify-between items-center">
      <a href="#" class="text-white font-bold text-2xl">Mi Sitio Web</a>
      <ul class="flex space-x-4">
        <li><a href="#" class="text-white hover:text-blue-200">Inicio</a></li>
        <li><a href="#" class="text-white hover:text-blue-200">Servicios</a></li>
        <li><a href="#" class="text-white hover:text-blue-200">Acerca de</a></li>
        <li><a href="#" class="text-white hover:text-blue-200">Contacto</a></li>
      </ul>
    </div>
  </nav>

  <!-- Sección de Información Central -->
  <div class="container mx-auto mt-24 p-8">
    <div class="bg-white rounded-lg shadow-lg p-6">
      <h2 class="text-4xl font-bold text-center mb-6 text-gray-800">Opciones de Información</h2>
      
      <!-- Opciones de Información en la parte central -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-blue-50 p-6 rounded-lg shadow-md text-center">
          <h3 class="text-2xl font-semibold text-blue-600 mb-4">Opción 1</h3>
          <p class="text-gray-600">Descripción de la primera opción con detalles importantes.</p>
          <a href="#" class="mt-4 inline-block bg-blue-600 text-white font-bold py-2 px-4 rounded-full hover:bg-blue-700">Ver más</a>
        </div>

        <div class="bg-blue-50 p-6 rounded-lg shadow-md text-center">
          <h3 class="text-2xl font-semibold text-blue-600 mb-4">Opción 2</h3>
          <p class="text-gray-600">Descripción de la segunda opción con información adicional.</p>
          <a href="#" class="mt-4 inline-block bg-blue-600 text-white font-bold py-2 px-4 rounded-full hover:bg-blue-700">Ver más</a>
        </div>

        <div class="bg-blue-50 p-6 rounded-lg shadow-md text-center">
          <h3 class="text-2xl font-semibold text-blue-600 mb-4">Opción 3</h3>
          <p class="text-gray-600">Descripción de la tercera opción con algunos detalles extras.</p>
          <a href="#" class="mt-4 inline-block bg-blue-600 text-white font-bold py-2 px-4 rounded-full hover:bg-blue-700">Ver más</a>
        </div>
      </div>
    </div>
  </div>
  
</body>
</html>
