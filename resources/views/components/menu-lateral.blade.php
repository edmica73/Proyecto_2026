<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="menu-lateral">


        <nav>
            @if (auth()->user()->rol_id == 2)
            <ul>
                <li><a href="{{ route('publicaciones.create') }}">Agregar publicacion</a></li>
                <li><a href="{{ route('canchas.create') }}">Agregar canchas</a></li>
                <li><a href="{{ route('cliente.index') }}">Clientes</a></li>
                <li><a href="{{ route('cerrar_sesion') }}">Cerrar sesión</a></li>
            </ul>
            @endif

            @if (auth()->user()->rol_id == 1)
            <ul>
                <li><a href="#">Mis reservas</a></li>
                <li><a href="#">Mi perfil</a></li>
            </ul>
            
            @endif
        </nav>
        
    </div>
</body>
</html>