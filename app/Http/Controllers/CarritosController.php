<?php

namespace App\Http\Controllers;

use App\Models\juegos as ModelsJuegos;
use App\Models\users;
use App\Models\carritos as ModelsCarritos;
use Illuminate\Http\Request;

class CarritosController extends Controller
{
    public function index(){
        session_start();
        $carrito = ModelsCarritos::where('user_id', '=', $_SESSION['id_user'])->simplePaginate(6);
        $juegos = ModelsJuegos::all();
        $users = users::where('user_id', '=', $_SESSION['id_user']);
        //compact manda la variable juegos
        $_SESSION['total']=0;
        foreach ($carrito as $key => $value) {
            foreach ($juegos as $key => $value2) {
                if ($value->juego_id==$value2->cod_juego) {
                    $_SESSION['total']+= $value2->precio;
                }
            }
            
        }
        return view('carrito', compact('carrito'), compact('juegos'), compact('users'));
    }
    public function juegosUser(){
        session_start();
        //coge carrito donde user_id == user_id logueado
        $carrito = ModelsCarritos::where(strtoupper('user_id'), '=', strtoupper($_SESSION['usuario']))->simplePaginate(6);
        $users = users::all();
        $juegos = ModelsJuegos::all();
        
        //compact manda la variable juegos
        return view('carrito', compact('carrito'), compact('juegos'));
    }
    public function aniadircarrito(request $datos){
        session_start();
        $cc = ModelsCarritos::where('juego_id', '=', $datos->id_juego)->simplepaginate(6);
        $juegocarrito = new ModelsCarritos();
        //para que no se repita en el carrito dos veces el mismo juego
        if (ModelsCarritos::where('juego_id','=', $datos->id_juego)->where('user_id','=', $_SESSION['id_user'])->doesntExist()) {
            $juegocarrito->user_id = $_SESSION['id_user'];
            $juegocarrito->juego_id = $datos->id_juego;
            $juegocarrito->save();
            $carrito = ModelsCarritos::where('user_id', '=', $_SESSION['id_user'])->simplepaginate(6);
            $_SESSION['carrito'] = 0;
            foreach ($carrito as $key => $value) {
                $_SESSION['carrito']+=1;
            }
        }    
    
        return redirect('');
    }
    public function borrarcarrito(request $datos){
        session_start();

        $juegocarrito = ModelsCarritos::where('cod_carrito', '=', $datos->cod_carrito)->delete();

        $carrito = ModelsCarritos::where('user_id', '=', $_SESSION['id_user'])->simplepaginate(6);
        $_SESSION['carrito'] = 0;
        foreach ($carrito as $key => $value) {
            $_SESSION['carrito']+=1;
        }
        return redirect(route('carrito'));
    }

    public function repetidos(request $datos){
        session_start();
    }
}