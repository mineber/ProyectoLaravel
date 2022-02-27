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
        $carrito = ModelsCarritos::simplePaginate(6);
        $juegos = ModelsJuegos::all();
        
        //compact manda la variable juegos
        return view('carrito', compact('carrito'), compact('juegos'));
    }
    public function juegosUser(){
        session_start();
        //coge carrito donde user_id == user_id logueado
        $carrito = ModelsCarritos::where(strtoupper('user_id'), '=', strtoupper($_SESSION['usuario']))->simplePaginate(6);
        $users = users::all();
        
        //compact manda la variable juegos
        return view('carrito', compact('carrito'), compact('juegos'));
    }
    public function create(){
        return "crear";
    }
    public function show(){
        return "show";
    }
}
