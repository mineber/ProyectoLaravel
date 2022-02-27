<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use App\Models\carritos as ModelsCarritos;

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
            
            // $datoss = strtoupper($datos->nombre_usuario[0]).''.strtolower(substr($datos->nombre_usuario, 1));
            $_SESSION['usuario'] = $user->nombre_usuario;
            $_SESSION['id_user'] = $user->id;
            $carrito = ModelsCarritos::where('user_id', '=', $_SESSION['id_user'])->simplepaginate(6);
            $_SESSION['carrito'] = 0;
            foreach ($carrito as $key => $value) {
                $_SESSION['carrito']+=1;
            }
            setcookie('nombre_usuario', $user->nombre_usuario, 100*24*3600);
            return redirect('');
        }
    }
    public function registro(request $datos){
        $user = new users;
        $user->nombre_usuario = $datos->nameUser;
        $user->name = $datos->name;
        $user->fecha_nac = $datos->fecha_nac;
        $user->direccion = $datos->direccion;
        $user->mail = $datos->direccion;
        $user->telefono = $datos->telefono;
        $user->contraseña = $datos->passw;
        $user->save();
        
         return redirect('');
        
    }
}
