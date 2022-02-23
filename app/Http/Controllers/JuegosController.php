<?php

namespace App\Http\Controllers;

use App\Models\juegos as ModelsJuegos;
use App\Models\users;
use Illuminate\Http\Request;
use Juegos;

class JuegosController extends Controller
{
    public function index(){
        $juegos = ModelsJuegos::simplePaginate(6);
        $users = users::all();
        
        //compact manda la variable juegos
        return view('inicio', compact('juegos'), compact('users'));
    }
    public function create(){
        return "crear";
    }
    public function show(){
        return "show";
    }
}
