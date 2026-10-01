<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    /** @use HasFactory<\Database\Factories\RolFactory> */
    use HasFactory;

    protected $table = 'rol';
    protected $fillable = [ 'nombre', ];

    // Relación: un Rol tiene muchas Personas

    public function personas(){
        return $this->hasMany(User::class, 'rol_id');
    }
}
