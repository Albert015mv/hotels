<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrador</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Estilos personalizados */
        body {
            display: flex;
            background-color: #f8f9fa;
        }

        nav {
            min-height: 100vh;
        }

        .nav-link {
            color: white !important;
        }

        .nav-link:hover {
            background-color: #007bff;
            border-radius: 5px;
        }

        .content-area {
            flex: 1;
            padding: 20px;
        }
    </style>
</head>

<body>
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <!-- Barra de navegación lateral -->
    <nav class="bg-dark p-4">
        <a href="index" class="d-flex align-items-center mb-4 text-white">
            <svg class="h-8 w-8 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 24 24">
                <path
                    d="M12 12c2.76 0 5-2.24 5-5s-2.24-5-5 5-5 2.24-5 5 2.24 5 5 5zm0 2c-3.31 0-10 1.67-10 5v2h20v-2c0-3.33-6.69-5-10-5z" />
            </svg>
            <span class="h4 ml-2">Administrador del hotel</span>
        </a>

        <!-- Menú de navegación -->
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="#" onclick="toggleMenu('admin-hotels-menu')">Reservaciones</a>
                <ul id="admin-hotels-menu" class="ml-3 max-height-0 transition-height" style="display: none;">
                    <li><a href="../reservation/consultarH" class="nav-link">Consultar</a></li>
                </ul>
            </li>
        </ul>

        <!-- Botón de Cerrar sesión -->
        <div class="mt-4">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Cerrar sesión</button>
            </form>
        </div>
    </nav>

    <!-- Contenido principal -->
    <main class="content-area">
        <h2>Bienvenido</h2>
        <div id="content-area">
            <!-- Aquí se cargará el contenido dinámico -->
        </div>
    </main>

    <script>
        // Función para mostrar u ocultar los submenús
        function toggleMenu(menuId) {
            const menu = document.getElementById(menuId);
            if (menu.style.display === "none" || menu.style.display === "") {
                menu.style.display = "block";
            } else {
                menu.style.display = "none";
            }
        }

        function loadContent(url) {
            event.preventDefault();
            const contentArea = document.getElementById('content-area');
            fetch(url)
                .then(response => response.text())
                .then(data => {
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
