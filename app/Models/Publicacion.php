<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    /** @use HasFactory<\Database\Factories\PublicacionFactory> */
    use HasFactory;

    //quita el atributo que viene por defecto porque no lo tenemos en el DER
    public $timestamps = false;

    protected $fillable = [
    'titulo',
    'descripcion',
    'imagen',
    'fecha_publicacion',
    'persona_dni'
    ];


   
    

}
