<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        $rolAdministrador = DB::table('rol')
            ->where('nombre', 'Administrador')
            ->value('id');

        DB::table('persona')->insert([
            'dni' => '00000000',
            'password_hash' => Hash::make('admin1234'),
            'nombre' => 'Administrador',
            'apellido' => 'Principal',
            'correo' => 'admin@canchas.com',
            'telefono' => '0000000000',
            'activo' => true,
            'rol_id' => $rolAdministrador,
        ]);
    }
}
