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
    public function log(request $datos){
        $user = users::where('nombre_usuario', '=', $datos->nombre_usuario)->where('contraseña', '=', $datos->contraseña)->first();
        if(!isset($user->id)){
            return redirect('login');
        } else {
            
            return redirect('');
        }
    }
}
