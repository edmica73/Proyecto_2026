<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;




class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;
    use SoftDeletes;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    // indica que este modelo utiliza la tabla PERSONA
    protected $table = 'PERSONA';

    // va a ser la clave primaria 
    protected $primaryKey = 'dni';

    // indica que no es autoincremental 
    public $incrementing = false;

    // indica que la clave primaria es texto
    protected $keyType = 'string';

    //quita el atributo que viene por defecto porque no lo tenemos en el DER
    public $timestamps = false;

    protected $fillable = [
    'dni',
    'password_hash',
    'nombre',
    'apellido',
    'correo',
    'telefono',
    'activo',
    'rol_id',
    ];

    // Campos que no se muestran 
    protected $hidden = [ 'password_hash', 'remember_token', ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password_hash' => 'hashed',
        ];
    }

    //Una persona pertenece a un rol
    public function rol(){
    return $this->belongsTo(Rol::class, 'rol_id');
    }
}
