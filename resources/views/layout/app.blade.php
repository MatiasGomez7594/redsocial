<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous"><script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js" integrity="sha384-VQqxDN0EQCkWoxt/0vsQvZswzTHUVOImccYmSyhJTp7kGtPed0Qcx8rK9h9YEgx+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>    

</head>
<body class="bg-dark">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark text-light">
        <div class="container-fluid">
            {{-- Botón del toggle para móviles --}}
            <button class="navbar-toggler bg-primary " type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            {{-- Contenedor colapsable --}}
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto nav-underline" id="nav-list">
                    <li class="nav-item">
                        <a class="nav-link text-primary {{ request()->routeIs('inicio') ? 'active text-primary' : '' }}"
                            href="{{ route('inicio') }}">
                            Inicio
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-primary {{ request()->routeIs('proyectos*') ? 'active text-primary' : '' }}"
                            href="{{ route('proyectos') }}">
                            Proyectos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-primary {{ request()->routeIs('contacto') ? 'active text-primary' : '' }}"
                            href="{{ route('contacto') }}">
                            Contacto
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container bg-dark">
        @yield('content')
    </main>

</body>
</html>
