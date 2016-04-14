<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Base</title>
    <link rel="stylesheet" href="{!! asset('/css/app.css') !!}">
</head>
<body>

<nav class="navbar navbar-default">
    <ul>
        <li><a href="/coche/create">Nuevo Coche</a></li>
    </ul>
    <ul>
        <li><a href="/coche">Ver Coches</a></li>
    </ul>
</nav>

<div class="contenido">
    @yield('contenido')
</div>

</body>
</html>