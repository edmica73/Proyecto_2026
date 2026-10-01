<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Cancha;
use App\Http\Requests\CanchaRequest;
use Illuminate\Support\Facades\Auth;


class CanchaController extends Controller
{
    // Va a devolver las canchas 
    public function index(){
        //....
    }

    // Metodo encargado de devolver el formulario para crear una nueva publicacion
    public function create() {
        return view('cancha.create');
    }

    // Metodo encargado de recibir los datos del formulario de creacion de publicacion y procesarlos
    public function store(CanchaRequest $request)
    {
        $datos = $request->validated();

        /**Laravel tomará el DNI del usuario que inició sesión
         *  en lugar de tomar arbitrariamente un DNI de la tabla PERSONA.

        Así, cuando un administrador cree una publicación, persona_dni quedará 
        asociado correctamente a ese administrador */

        $persona = Auth::user()->dni;

        Cancha::create([
            'nombre' => $datos['nombre'],
            'descripcion' => $datos['descripcion'],
            'imagen' => $datos['imagen'],
            'precio' => $datos['precio'],
            'persona_dni' => $persona,

        ]);

        return view('dashboard');
    }
    
    public function edit(){
        return view('cancha.edit');
    }

    public function update(){
        //validar los datos actualizados...

        //una vez terminado te redirige al dashboard
        return view('dashboard')->with('success', 'Datos actualizados correctamente');
    }


}
