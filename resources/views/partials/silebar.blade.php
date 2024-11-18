
<nav class="bg-dark p-4 min-vh-100">
    <a href="{{ url('index') }}" class="d-flex align-items-center mb-4 text-white">
        <svg class="h-8 w-8 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 12c2.76 0 5-2.24 5-5s-2.24-5-5 5-5 2.24-5 5 2.24 5 5 5zm0 2c-3.31 0-10 1.67-10 5v2h20v-2c0-3.33-6.69-5-10-5z" />
        </svg>
        <span class="h4 ml-2">Administrador del hotel</span>
    </a>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link text-white" href="#" onclick="toggleMenu('hoteles-menu')">Hoteles</a>
            <ul id="hoteles-menu" class="ml-3" style="display: none;">
                <li><a href="{{ url('CRUD/crear') }}" class="nav-link">Ingresar</a></li>
                <li><a href="{{ route('CRUD.consultar') }}" class="nav-link">Consultar</a></li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="#" onclick="toggleMenu('admin-hotels-menu')">Reservaciones</a>
            <ul id="admin-hotels-menu" class="ml-3" style="display: none;">
                <li><a href="{{ url('reservation/consultarH') }}" class="nav-link">Consultar</a></li>
            </ul>
        </li>
    </ul>
    <div class="mt-4">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Cerrar sesión</button>
        </form>
    </div>
</nav>
