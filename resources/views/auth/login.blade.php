html
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pagina inicial</title>
</head>

<body>


    <h1>Iniciar sesión</h1>

    @if ($errors->any())
        <div>
            {{ $errors->first() }}
        </div>
    @endif

    <form action="{{ route('login.procesar') }}" method="POST">

        @csrf

        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" value="{{ old('correo') }}" required>
           
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Iniciar sesión</button>


    </form>

</body>

</html>
