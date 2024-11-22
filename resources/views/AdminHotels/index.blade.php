<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrador del Hotel</title>
    @vite('resources/css/app.css')
    <script>
        // Función para cargar contenido externo
        async function loadSection(url) {
            const contentArea = document.getElementById('content-area');
            try {
                const response = await fetch(url);
                const content = await response.text();
                contentArea.innerHTML = content;
            } catch (error) {
                contentArea.innerHTML = `<p class="text-red-500">Error al cargar la sección. Intenta nuevamente.</p>`;
            }
        }
    </script>
</head>

<body class="bg-gray-100 text-gray-800">
<x-navAdminHotel />
    <!-- Contenido principal -->
    <main class="p-6" id="content-area">
        <!-- Vista inicial -->
        <p class="text-gray-700">Bienvenido </p>
    </main>

</body>

</html>
