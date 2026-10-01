<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registrarse</h1>


    <form action="{{ Route('registro.validacion') }}" method="POST">
        <!--Dentro del formulario se debe agregar obligatoriamente la directiva @csrf para protección contra estos ataques-->

        @csrf
        
        <label for="dni">DNI</label>
        <input type="text" name="dni">
        <!--Podemos controlar si existe un error puntual para un campo usando @error(‘nombre_campo) -->
        @error('dni')
            {{ $message }}
        @enderror

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre">
        @error('nombre')
            {{ $message }}
        @enderror
                
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido">
        @error('apellido')
            {{ $message }}
        @enderror

        <!--old('correo') sirve para que, si la validación falla, Laravel recupere el valor que el usuario había escrito.-->
        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" value="{{ old('correo') }}" required>
        @error('correo')
            {{ $message }}
        @enderror
           
        <label for="telefono">Telefono</label>
        <input type="text" name="telefono">
        @error('telelfono')
            {{ $message }}
        @enderror

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
        @error('password')
            {{ $message }}
        @enderror

        <button type="submit">Registrarse</button>

    </form>

</body>
</html>