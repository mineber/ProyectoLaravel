<?php

namespace App\Http\Controllers;

use App\Models\juegos as ModelsJuegos;
use App\Models\users;
use Illuminate\Http\Request;
use Juegos;

class JuegosController extends Controller
{
    public function index(){
<<<<<<< HEAD
        $juegos = ModelsJuegos::simplePaginate(8);
=======
        $juegos = ModelsJuegos::simplePaginate(6);
        $users = users::all();
        
>>>>>>> 6f9d9faf402b0207db786768e8357e5515bfb26a
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
