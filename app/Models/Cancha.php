<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cancha extends Model
{
    /** @use HasFactory<\Database\Factories\CanchaFactory> */
    use HasFactory;

    //quita el atributo que viene por defecto porque no lo tenemos en el DER
    public $timestamps = false;

    protected $fillable = [
    'nombre',
    'descripcion',
    'imagen',
    'precio',
    'activo',
    'persona_dni',
    ];
}
