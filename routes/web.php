<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CanchaController;
use App\Http\Controllers\FranjaHorariaController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\BloqueoCanchaController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\PublicacionController;
use App\Http\Controllers\NotificacionController;
use App\Http\Controllers\LoginController;


//-----------Inicio

Route::get('/', function () {
    return view('welcome');
})->name('inicio');


//--------------Autenticación
Route::get('/registro', [AuthController::class, 'showRegistro'])
    ->name('registro');

Route::post('/registro', [AuthController::class, 'registro'])
    ->name('registro.validacion'); 


Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login');

Route::post('/login', [AuthController::class, 'login'])
    ->name('login.validacion');

Route::post('/logout', [AuthController::class, 'logout'])
    ->name('cerrar_sesion');




//------------Publicaciones

/**Route::resource() crea automáticamente las rutas necesarias para realizar las operaciones CRUD
 * (crear, consultar, editar y eliminar) sobre el recurso publicaciones, utilizando los métodos correspondientes de PublicacionController */
Route::resource('publicaciones', PublicacionController::class);



//------------------Canchas
Route::resource('canchas', CanchaController::class);


/*
|--------------------------------------------------------------------------
| Franjas horarias
|--------------------------------------------------------------------------
*/

//Route::resource('franjas-horarias', FranjaHorariaController::class);


/*
|--------------------------------------------------------------------------
| Horarios / Turnos
|--------------------------------------------------------------------------
*/

//Route::resource('horarios', HorarioController::class);


/*
|--------------------------------------------------------------------------
| Bloqueos de cancha
|--------------------------------------------------------------------------
*/

//Route::resource('bloqueos-cancha', BloqueoCanchaController::class);


/*
|--------------------------------------------------------------------------
| Reservas
|--------------------------------------------------------------------------
*/

//Route::resource('reservas', ReservaController::class);



/*
|--------------------------------------------------------------------------
| Notificaciones
|--------------------------------------------------------------------------
*/

//Route::resource('notificaciones', NotificacionController::class);
