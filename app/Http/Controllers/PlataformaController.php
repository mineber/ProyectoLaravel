<?php

namespace App\Http\Controllers;

use App\Models\juegos as ModelsJuegos;
use Illuminate\Http\Request;
use Juegos;

class PlataformaController extends Controller
{
    public function index($nombre_plataforma){    
        $plataforma = ModelsJuegos::where('plataforma','=',$nombre_plataforma)->simplePaginate(8);
        //compact manda la variable juegos
        return view('plataforma', compact('plataforma', 'nombre_plataforma'));
    }
}
