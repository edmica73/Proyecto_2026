<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicacion;
use Illuminate\Support\Facades\DB;


class PublicacionController extends Controller
{

     // Metodo encargado de devolver el formulario para crear una nueva publicacion
    public function create() {
        return view('publicaciones.create');
    }

    // Metodo encargado de recibir los datos del formulario de creacion de publicacion y procesarlos
    public function store(Request $request)
    {
        $datos = $request->validate([
            'titulo' => 'required|string|max:100',
            'descripcion' => 'required|string|max:255',
            'imagen' => 'required|string|max:255',
            'fecha_publicacion' => 'required|datetime'
            
        ]);

        $persona = DB::table('persona')->value('dni');

        Publicacion::create([
            'titulo' => $datos['titulo'],
            'descripcion' => $datos['descripcion'],
            'imagen' => $datos['imagen'],
            'fecha_publicacion' => $datos['fecha_publicacion'],
            'persona_dni' => $persona,

        ]);

        return view('index');
    }
}