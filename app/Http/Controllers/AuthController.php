<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\LoginUsuarioRequest;
use App\Http\Requests\StoreUsuarioRequest;

class AuthController extends Controller{
    public function showRegistro(){
        return view('auth.register');
    }

    public function storeRegistro(StoreUsuarioRequest $request){
            
        //1. validar lso datos en StoreUsuarioRequest

        $datos = $request->validated();

        $rolCliente = DB::table('rol')
            ->where('nombre', 'Cliente')
            ->value('id');

        //2. Guardar en DB

        User::create([
            'dni' => $datos['dni'],
            'password_hash' => $datos['password'],
            'nombre' => $datos['nombre'],
            'apellido' => $datos['apellido'],
            'correo' => $datos['correo'],
            'telefono' => $datos['telefono'],
            'activo' => true,
            'rol_id' => $rolCliente,
        ]);

        //3. redirigir a la pagina index

        return view('dashboard')->with('success', 'Registro realizado correctamente.');
            
    }

    //mostrar formulario de inicio sesion
    public function showLogin(){
            return view('auth.login');
    }

    public function storeLogin(StoreUsuarioRequest $request){
        $datos = $request->validated();
        $usuario = User::where('correo', $datos['correo'])->first(); 
        if (!$usuario) { 
            return back()->withErrors([ 'correo' => 'El correo es incorrecto' ]); 
        }

        if (!Hash::check($datos['password'], $usuario->password_hash)) { 
            return back()->withErrors([ 'correo' => 'contraseña incorrecta']);
        } 

        Auth::login($usuario);  

        return view('dashboard'); 
    }

    //mostrar usuario si existe en caso de no existir, va a mostrar error 404
    public function show(string $dni){
        $usuario = User::FindOrFail($dni);
        return View('usuario.show', compact($usuario));
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Cierra la sesión
        $request->session()->invalidate(); // Invalida la sesión
        $request->session()->regenerateToken(); // Regenera el token
        return view('welcome');
    }
        

}

        


