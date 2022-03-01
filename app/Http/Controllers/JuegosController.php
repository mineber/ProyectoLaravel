<?php

namespace App\Http\Controllers;

use App\Models\juegos as ModelsJuegos;
use App\Models\users;
use Illuminate\Http\Request;
use Juegos;
use App\Models\carritos as ModelsCarritos;

class JuegosController extends Controller
{
    public function index(){
        session_start();
        $juegos = ModelsJuegos::simplePaginate(6);
        $users = users::all();
        //compact manda la variable juegos
        return view('inicio', compact('juegos'), compact('users'));
    }
    // public function Nintendo(){
    //     session_start();
    //     $juegos = ModelsJuegos::where(strtoupper('plataforma'), '=', strtoupper("Nintendo"))->simplePaginate(6);
    //     $users = users::all();
        
    //     //compact manda la variable juegos
    //     return view('inicio', compact('juegos'), compact('users'));
    // }
    public function borrarjuego(request $datos){
        session_start();
        
        $carrito2 = ModelsCarritos::where('juego_id', '=', $datos->id_juego)->delete();
        $juegocarrito = ModelsJuegos::where('cod_juego', '=', $datos->id_juego);
        $juegocarrito->delete();
        $carrito = ModelsCarritos::where('user_id', '=', $_SESSION['id_user'])->simplepaginate(6);
        $_SESSION['carrito'] = 0;
        foreach ($carrito as $key => $value) {
            $_SESSION['carrito']+=1;
        }
        return redirect(route('user'));
    }
    public function show(){
        return "show";
    }
}
