
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Gestión de Canchas')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <header>
        <h1>Gestión de Canchas</h1>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Gestión de Canchas</p>
    </footer>

</body>
</html>
```
