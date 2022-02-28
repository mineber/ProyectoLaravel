<?php

namespace App\Http\Controllers;

use App\Models\juegos as ModelsJuegos;
use App\Models\users;
use Illuminate\Http\Request;

class Usuario extends Controller
{
    public function index()
    {
        session_start();
        $juegos = ModelsJuegos::where('user_id', '=', $_SESSION['id_user'])->simplePaginate(3);
        $users = users::all();
        
        //compact manda la variable juegos
        return view('usuario', compact('juegos'), compact('users'));
        
    } 
    public function subirindex()
    {
        session_start();
        return view('subirjuego');
    } 
    public function subir(request $datos)
    {
        session_start();
        $juego = new ModelsJuegos;
        $juego->nombre_juego = $datos->nombre_juego;
        $juego->plataforma = $datos->plataforma;
        $juego->descripcion = $datos->descripcion;
        $juego->precio = $datos->precio;
        // $juego->imagen = $datos->imagen;
        if ($datos->hasFile('imagen')){
            $file = $datos->file('imagen');
            $destino = "img/";
            $fileName = time() . '-' . $file->getClientOriginalName();
            $subidaImagen = $datos->file('imagen')->move($destino, $fileName);
            $juego->imagen = $fileName;
        }
        $juego->user_id = $_SESSION['id_user'];
        $juego->save();

        return redirect('');
    
    } 
}
