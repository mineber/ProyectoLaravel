<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
        // return redirect()->view('inicio');
    } 
    public function cs()
    {
        
        session_start();
        unset($_SESSION['usuario']);
        return redirect('');
    } 
    public function log(request $datos){
        $user = users::where(strtoupper('nombre_usuario'), '=', strtoupper($datos->nombre_usuario))->where('contraseña', '=', $datos->contraseña)->first();
        if(!isset($user->id)){
            return redirect('login');
        } else {
            session_start();
            $datoss = strtoupper($datos->nombre_usuario[0]).''.strtolower(substr($datos->nombre_usuario, 1));
            $_SESSION['usuario'] = $datoss;
            setcookie('nombre_usuario', $user->nombre_usuario, 100*24*3600);
            return redirect('');
        }
    }
    public function register(request $datos){
        $user = new users;
        $user->nombre_usuario = $datos->nombre_usuario;
        $user->name = $datos->name;
        $user->fecha_nac = $datos->fecha_nac;
        $user->direccion = $datos->direccion;
        $user->telefono = $datos->telefono;
        $user->contraseña = $datos->contraseña;
        $user->save();
        
            return redirect('')->with("echo '<script language='javascript'>alert('Cuenta registrada, inicia sesión');</script>';");
        
    }
}
