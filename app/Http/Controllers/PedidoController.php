<?php

namespace App\Http\Controllers;

use App\Models\juegos as ModelsJuegos;
use App\Models\users;
use App\Models\carritos as ModelsCarritos;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index()
    {
        session_start();
        
        $carrito = ModelsCarritos::where('user_id', '=', $_SESSION['id_user'])->simplePaginate(6);
        $juegos = ModelsJuegos::all();
        $users = users::where('user_id', '=', $_SESSION['id_user']);
        foreach ($carrito as $key => $value) {
            foreach ($juegos as $key => $value2) {
                if ($value->juego_id==$value2->cod_juego) {
                    $ca = ModelsCarritos::where('juego_id', '=', $value2->cod_juego)->where('user_id', '=', $_SESSION['id_user'])->delete();

                }
            }
            
        }
        $carrito = ModelsCarritos::where('user_id', '=', $_SESSION['id_user'])->simplepaginate(6);
        $_SESSION['carrito'] = 0;
        foreach ($carrito as $key => $value) {
            $_SESSION['carrito']+=1;
        }
        return view('pedido');
    } 
}
