<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Main Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <style>
        .nav-item .active {
            color: red;
        }
    </style>
</head>

<body>
    <nav>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link {{request()->routeIs('administradorTareas.inicio')? 'active' : ''}}" aria-current="page" href="{{route('administradorTareas.inicio')}}">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{request()->routeIs('administradorTareas.create')? 'active' : ''}}" href="{{route('administradorTareas.create')}}">Nuevo tarea</a>
            </li>
        </ul>
    </nav>
    <div class="content">
        @yield('cuerpo')
    </div>
</body>

</html>
