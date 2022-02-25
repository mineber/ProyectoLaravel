<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\juegos as ModelsJuegos;
use App\Models\users;

class PlataformaController extends Controller
{
    public function index($nombre_plataforma){    
        
        session_start();
        $plataforma = ModelsJuegos::where('plataforma','=',$nombre_plataforma)->simplePaginate(8);
        
        $users = users::all();
        //compact manda la variable juegos
        return view('plataforma', compact('plataforma', 'nombre_plataforma', 'users'));
    }
}
