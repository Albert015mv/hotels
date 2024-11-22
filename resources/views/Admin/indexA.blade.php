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
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
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
                        <li><a href="/ConsultaAdmin" class="block py-2 px-3 rounded-lg hover:bg-gray-700">Ver los usuarios</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>


        <!-- Botón de Cerrar sesión -->
        <div class="mb-6">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit">Cerrar sesión</button>
            </form>
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
