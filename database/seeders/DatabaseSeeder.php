<?php

namespace Database\Seeders;

use App\Models\juegos;
use App\Models\users;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $user = new users();
        $user->nombre_usuario= "Mineber";
        $user->name ="Antonio";
        $user->fecha_nac = "11/05/2002";
        $user->direccion = "Villa patata";
        $user->telefono = 633163586;
        $user->contraseña = "soyadmin";
        $user->save();
        
        $juego = new juegos();
        $juego->nombre_juego = "Pokemon Luna";
        $juego->plataforma = "Nintendo 3ds";
        $juego->descripcion = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, nam fugit cum illum ea doloremque, optio exercitationem modi inventore quisquam vel quas. Aliquid, nihil! Expedita voluptate possimus porro molestias architecto!";
        $juego->precio = 20;
        $juego->imagen = "pokemonluna.png";
        $juego->user_id = 1;
        $juego->save();
        
        $user2 = new users();
        $user2->nombre_usuario= "Vladesito";
        $user2->name ="Álvaro";
        $user2->fecha_nac = "11/05/2002";
        $user2->direccion = "Villa patata";
        $user2->telefono = 642518269;
        $user2->contraseña = "soyadmin";
        $user2->save();

        $juego2 = new juegos();
        $juego2->nombre_juego = "Call of duty Black Ops 2";
        $juego2->descripcion = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, nam fugit cum illum ea doloremque, optio exercitationem modi inventore quisquam vel quas. Aliquid, nihil! Expedita voluptate possimus porro molestias architecto!";
        $juego2->plataforma = "PS3";
        $juego2->precio = 30;
        $juego2->imagen = "BO2.png";
        $juego2->user_id = 2;
        $juego2->save();
        
        
        $user3 = new users();
        $user3->nombre_usuario= "Prueba";
        $user3->name ="Pepa";
        $user3->fecha_nac = "11/05/2002";
        $user3->direccion = "Villa patata";
        $user3->telefono = 633163585;
        $user3->contraseña = "nosoyadmin";
        $user3->save();

        $juego3 = new juegos();
        $juego3->nombre_juego = "Nintendogs";
        $juego3->plataforma = "Nintendo 3ds";
        $juego3->descripcion = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, nam fugit cum illum ea doloremque, optio exercitationem modi inventore quisquam vel quas. Aliquid, nihil! Expedita voluptate possimus porro molestias architecto!";
        $juego3->precio = 10;
        $juego3->imagen = "ndogs.png";
        $juego3->user_id = 1;
        $juego3->save();

        $juego4 = new juegos();
        $juego4->nombre_juego = "Pokemon Legends Arceus";
        $juego4->plataforma = "Nintendo Switch";
        $juego4->descripcion = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, nam fugit cum illum ea doloremque, optio exercitationem modi inventore quisquam vel quas. Aliquid, nihil! Expedita voluptate possimus porro molestias architecto!";
        $juego4->precio = 60;
        $juego4->imagen = "pla.png";
        $juego4->user_id = 1;
        $juego4->save();

        $juego5 = new juegos();
        $juego5->nombre_juego = "Minecraft";
        $juego5->plataforma = "Xbox 360";
        $juego5->descripcion = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, nam fugit cum illum ea doloremque, optio exercitationem modi inventore quisquam vel quas. Aliquid, nihil! Expedita voluptate possimus porro molestias architecto!";
        $juego5->precio = 15;
        $juego5->imagen = "minecraft.png";
        $juego5->user_id = 1;
        $juego5->save();

        $juego6 = new juegos();
        $juego6->nombre_juego = "Pokemon Luna";
        $juego6->plataforma = "Nintendo";
        $juego6->descripcion = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, nam fugit cum illum ea doloremque, optio exercitationem modi inventore quisquam vel quas. Aliquid, nihil! Expedita voluptate possimus porro molestias architecto!";
        $juego6->precio = 60;
        $juego6->imagen = "pokemonluna.png";
        $juego6->user_id = 1;
        $juego6->save();

        $juego7 = new juegos();
        $juego7->nombre_juego = "Pokemon Luna";
        $juego7->plataforma = "Nintendo";
        $juego7->descripcion = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, nam fugit cum illum ea doloremque, optio exercitationem modi inventore quisquam vel quas. Aliquid, nihil! Expedita voluptate possimus porro molestias architecto!";
        $juego7->precio = 60;
        $juego7->imagen = "pokemonluna.png";
        $juego7->user_id = 1;
        $juego7->save();

        $juego8 = new juegos();
        $juego8->nombre_juego = "Pokemon Luna";
        $juego8->plataforma = "Nintendo";
        $juego8->descripcion = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, nam fugit cum illum ea doloremque, optio exercitationem modi inventore quisquam vel quas. Aliquid, nihil! Expedita voluptate possimus porro molestias architecto!";
        $juego8->precio = 60;
        $juego8->imagen = "pokemonluna.png";
        $juego8->user_id = 1;
        $juego8->save();

        $juego9 = new juegos();
        $juego9->nombre_juego = "Pokemon Luna";
        $juego9->plataforma = "Nintendo";
        $juego9->descripcion = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, nam fugit cum illum ea doloremque, optio exercitationem modi inventore quisquam vel quas. Aliquid, nihil! Expedita voluptate possimus porro molestias architecto!";
        $juego9->precio = 60;
        $juego9->imagen = "pokemonluna.png";
        $juego9->user_id = 1;
        $juego9->save();

        $juego10 = new juegos();
        $juego10->nombre_juego = "Pokemon Luna";
        $juego10->plataforma = "Nintendo";
        $juego10->descripcion = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, nam fugit cum illum ea doloremque, optio exercitationem modi inventore quisquam vel quas. Aliquid, nihil! Expedita voluptate possimus porro molestias architecto!";
        $juego10->precio = 60;
        $juego10->imagen = "pokemonluna.png";
        $juego10->user_id = 1;
        $juego10->save();

        $juego11 = new juegos();
        $juego11->nombre_juego = "Pokemon Luna";
        $juego11->plataforma = "Nintendo";
        $juego11->descripcion = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, nam fugit cum illum ea doloremque, optio exercitationem modi inventore quisquam vel quas. Aliquid, nihil! Expedita voluptate possimus porro molestias architecto!";
        $juego11->precio = 60;
        $juego11->imagen = "pokemonluna.png";
        $juego11->user_id = 1;
        $juego11->save();

        $juego11 = new juegos();
        $juego11->nombre_juego = "Pokemon Luna";
        $juego11->plataforma = "Nintendo";
        $juego11->descripcion = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, nam fugit cum illum ea doloremque, optio exercitationem modi inventore quisquam vel quas. Aliquid, nihil! Expedita voluptate possimus porro molestias architecto!";
        $juego11->precio = 60;
        $juego11->imagen = "pokemonluna.png";
        $juego11->user_id = 1;
        $juego11->save();

        $juego11 = new juegos();
        $juego11->nombre_juego = "Pokemon Luna";
        $juego11->plataforma = "Nintendo";
        $juego11->descripcion = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, nam fugit cum illum ea doloremque, optio exercitationem modi inventore quisquam vel quas. Aliquid, nihil! Expedita voluptate possimus porro molestias architecto!";
        $juego11->precio = 60;
        $juego11->imagen = "pokemonluna.png";
        $juego11->user_id = 1;
        $juego11->save();

        $juego11 = new juegos();
        $juego11->nombre_juego = "Pokemon Luna";
        $juego11->plataforma = "Nintendo";
        $juego11->descripcion = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, nam fugit cum illum ea doloremque, optio exercitationem modi inventore quisquam vel quas. Aliquid, nihil! Expedita voluptate possimus porro molestias architecto!";
        $juego11->precio = 60;
        $juego11->imagen = "pokemonluna.png";
        $juego11->user_id = 1;
        $juego11->save();

        $juego11 = new juegos();
        $juego11->nombre_juego = "Pokemon Luna";
        $juego11->plataforma = "Nintendo";
        $juego11->descripcion = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, nam fugit cum illum ea doloremque, optio exercitationem modi inventore quisquam vel quas. Aliquid, nihil! Expedita voluptate possimus porro molestias architecto!";
        $juego11->precio = 60;
        $juego11->imagen = "pokemonluna.png";
        $juego11->user_id = 1;
        $juego11->save();

        $juego11 = new juegos();
        $juego11->nombre_juego = "Pokemon Luna";
        $juego11->plataforma = "Nintendo";
        $juego11->descripcion = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, nam fugit cum illum ea doloremque, optio exercitationem modi inventore quisquam vel quas. Aliquid, nihil! Expedita voluptate possimus porro molestias architecto!";
        $juego11->precio = 60;
        $juego11->imagen = "pokemonluna.png";
        $juego11->user_id = 1;
        $juego11->save();

        $juego11 = new juegos();
        $juego11->nombre_juego = "Pokemon Luna";
        $juego11->plataforma = "Nintendo";
        $juego11->descripcion = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, nam fugit cum illum ea doloremque, optio exercitationem modi inventore quisquam vel quas. Aliquid, nihil! Expedita voluptate possimus porro molestias architecto!";
        $juego11->precio = 60;
        $juego11->imagen = "pokemonluna.png";
        $juego11->user_id = 1;
        $juego11->save();
    }
}
