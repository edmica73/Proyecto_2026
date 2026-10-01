<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    @extends('layouts.app')
    @section('titulo', 'Gestion de canchas')
</head>
<body>
    <header>
        <h1>Bienvenid@!</h1>
        <x-menu-lateral />
    </header>
    @if(session('success'))
        <div>
            <p>{{ session('success') }}</p>
        </div>
    @endif
</body>
</html>