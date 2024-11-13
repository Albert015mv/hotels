<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrador</title>
    @vite('resources/css/app.css')
    <style>
        /* Transiciones personalizadas para desplegar */
        .transition-height {
            transition: max-height 0.5s ease, opacity 0.5s ease;
        }

        .max-height-0 {
            max-height: 0;
            opacity: 0;
            overflow: hidden;
        }

        .max-height-full {
            max-height: 500px;
            /* Puedes ajustar el valor según el contenido */
            opacity: 1;
        }
    </style>
</head>

<body class="flex">

    <!-- Barra de navegación lateral -->
    <nav class="bg-gray-900 w-64 min-h-screen p-4 flex flex-col justify-between text-white">
        <div>
            <a href="index" class="flex items-center space-x-3 rtl:space-x-reverse mb-6">
                <!-- Ícono de usuario -->
                <svg class="h-8 w-8 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 24 24">
                    <path
                        d="M12 12c2.76 0 5-2.24 5-5s-2.24-5-5 5-5 2.24-5 5 2.24 5 5 5zm0 2c-3.31 0-10 1.67-10 5v2h20v-2c0-3.33-6.69-5-10-5z" />
                </svg>
                <span class="text-2xl font-semibold">Administrador</span>
            </a>

            <!-- Menú de navegación -->
            <ul class="flex flex-col space-y-4">

                <!-- Menú Hoteles -->
                <li>
                    <button onclick="toggleMenu('hoteles-menu')"
                        class="flex items-center p-2 w-full rounded-lg hover:bg-gray-700 focus:outline-none">
                        <span>Hoteles</span>
                        <svg class="w-4 h-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <ul id="hoteles-menu" class="ml-6 max-height-0 transition-height space-y-2">
                        <li><a href="../CRUD/crear" 
                                class="block py-2 px-3 rounded-lg hover:bg-gray-700">Ingresar</a></li>
                        <li><a href="{{route('CRUD.consultar')}}"
                                class="block py-2 px-3 rounded-lg hover:bg-gray-700">Consultar</a></li>
                    </ul>
                </li>

                <!-- Menú Reservaciones -->
                <li>
                    <button onclick="toggleMenu('admin-hotels-menu')"
                        class="flex items-center p-2 w-full rounded-lg hover:bg-gray-700 focus:outline-none">
                        <span>Reservaciones</span>
                        <svg class="w-4 h-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <ul id="admin-hotels-menu" class="ml-6 max-height-0 transition-height space-y-2">
                       
                        <li><a href="../reservation/consultarH"
                                class="block py-2 px-3 rounded-lg hover:bg-gray-700">Consultar</a></li>
                    </ul>
                </li>

                <!-- Menú Usuarios -->
                <li>
                    <button onclick="toggleMenu('usuarios-menu')"
                        class="flex items-center p-2 w-full rounded-lg hover:bg-gray-700 focus:outline-none">
                        <span>Usuarios</span>
                        <svg class="w-4 h-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <ul id="usuarios-menu" class="ml-6 max-height-0 transition-height space-y-2">
                        <li><a href="../users/crearU"
                                class="block py-2 px-3 rounded-lg hover:bg-gray-700">Ingresar</a></li>
                        <li><a href="../users/consultarU"
                                class="block py-2 px-3 rounded-lg hover:bg-gray-700">Consultar</a></li>
                    </ul>
                </li>

                <!-- Menú Usuarios -->
                <li>
                    <button onclick="toggleMenu('administrador-menu')"
                        class="flex items-center p-2 w-full rounded-lg hover:bg-gray-700 focus:outline-none">
                        <span>Administrador</span>
                        <svg class="w-4 h-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <ul id="administrador-menu" class="ml-6 max-height-0 transition-height space-y-2">
                        <li><a href="../Admin/registerA"
                                class="block py-2 px-3 rounded-lg hover:bg-gray-700">Ingresar</a></li>
                        <li><a href="#consultar-administrador"
                                class="block py-2 px-3 rounded-lg hover:bg-gray-700">Consultar</a></li>
                    </ul>
                </li>

                <!-- Menú Usuarios -->
                <li>
                    <button onclick="toggleMenu('admin-hotels-menu')"
                        class="flex items-center p-2 w-full rounded-lg hover:bg-gray-700 focus:outline-none">
                        <span>Administrador de Hoteles</span>
                        <svg class="w-4 h-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <ul id="admin-hotels-menu" class="ml-6 max-height-0 transition-height space-y-2">
                        <li><a href="#ingresar-admin-hotels"
                                class="block py-2 px-3 rounded-lg hover:bg-gray-700">Ingresar</a></li>
                        <li><a href="#consultar-admin-hotels"
                                class="block py-2 px-3 rounded-lg hover:bg-gray-700">Consultar</a></li>
                    </ul>
                </li>
                
            </ul>
        </div>
       

          <!-- Botón de Cerrar sesión -->
          <div class="mb-6">
            <a href="{{ route('logout')}}" class="flex items-center p-2 rounded-lg hover:bg-red-600 text-red-500">
                <svg class="w-6 h-6 mr-2" xmlns="" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1m0-14v1" />
                </svg>
                <span>Cerrar sesión</span>
            </a>
        </div>
    </nav>

    <!-- Contenido principal -->
    <main class="flex-1 p-6 bg-gray-100">
        <span>Bienvenido</span>
        <div id="content-area">
            <!-- Aquí se cargará el contenido dinámico -->
        </div>
    </main>

    </main>

    <script>
        // Función para mostrar u ocultar los submenús con transición
        function toggleMenu(menuId) {
            const menu = document.getElementById(menuId);
            if (menu.classList.contains('max-height-0')) {
                menu.classList.remove('max-height-0');
                menu.classList.add('max-height-full');
            } else {
                menu.classList.remove('max-height-full');
                menu.classList.add('max-height-0');
            }
        }
    </script>
    <script>
        function loadContent(url) {
            // Evita la recarga de la página
            event.preventDefault();

            // Selecciona el área de contenido donde se mostrará la información
            const contentArea = document.getElementById('content-area');

            // Usa Fetch API para cargar el contenido de la URL
            fetch(url)
                .then(response => response.text())
                .then(data => {
                    // Coloca el contenido recibido en el área de contenido
                    contentArea.innerHTML = data;
                })
                .catch(error => {
                    console.error("Error al cargar el contenido:", error);
                    contentArea.innerHTML = "<p>Error al cargar el contenido.</p>";
                });
        }
    </script>

</body>

</html>