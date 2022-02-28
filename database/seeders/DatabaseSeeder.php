<?php

namespace Database\Seeders;

use App\Models\carritos;
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
        $user->mail = "mineber1996@gmail.com";
        $user->telefono = 633163586;
        $user->contraseña = "soyadmin";
        $user->save();
        
        $juego = new juegos();
        $juego->nombre_juego = "Pokemon Luna";
        $juego->plataforma = "Nintendo";
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
        $user2->mail = "y@gmail.com";
        $user2->telefono = 642518269;
        $user2->contraseña = "soyadmin";
        $user2->save();

        $juego2 = new juegos();
        $juego2->nombre_juego = "Call of duty Black Ops 2";
        $juego2->descripcion = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, nam fugit cum illum ea doloremque, optio exercitationem modi inventore quisquam vel quas. Aliquid, nihil! Expedita voluptate possimus porro molestias architecto!";
        $juego2->plataforma = "Playstation";
        $juego2->precio = 10;
        $juego2->imagen = "Black ops 2.jpg";
        $juego2->user_id = 2;
        $juego2->save();
        

        $juego2 = new juegos();
        $juego2->nombre_juego = "Ratchet And Clank -  Una Dimensión Aparte";
        $juego2->descripcion = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, nam fugit cum illum ea doloremque, optio exercitationem modi inventore quisquam vel quas. Aliquid, nihil! Expedita voluptate possimus porro molestias architecto!";
        $juego2->plataforma = "Playstation";
        $juego2->precio = 20;
        $juego2->imagen = "ratchet.jpg";
        $juego2->user_id = 2;
        $juego2->save();

        $juego2 = new juegos();
        $juego2->nombre_juego = "Grand Turismo 7";
        $juego2->descripcion = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, nam fugit cum illum ea doloremque, optio exercitationem modi inventore quisquam vel quas. Aliquid, nihil! Expedita voluptate possimus porro molestias architecto!";
        $juego2->plataforma = "Playstation";
        $juego2->precio = 30;
        $juego2->imagen = "turismo.jpg";
        $juego2->user_id = 2;
        $juego2->save();

        $juego2 = new juegos();
        $juego2->nombre_juego = "Horizon Forbidden West";
        $juego2->descripcion = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, nam fugit cum illum ea doloremque, optio exercitationem modi inventore quisquam vel quas. Aliquid, nihil! Expedita voluptate possimus porro molestias architecto!";
        $juego2->plataforma = "Playstation";
        $juego2->precio = 30;
        $juego2->imagen = "horizon.jpg";
        $juego2->user_id = 2;
        $juego2->save();

        $juego2 = new juegos();
        $juego2->nombre_juego = "Spider-man Miles Morales";
        $juego2->descripcion = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, nam fugit cum illum ea doloremque, optio exercitationem modi inventore quisquam vel quas. Aliquid, nihil! Expedita voluptate possimus porro molestias architecto!";
        $juego2->plataforma = "Playstation";
        $juego2->precio = 30;
        $juego2->imagen = "spiderman.jpg";
        $juego2->user_id = 2;
        $juego2->save();

        $juego2 = new juegos();
        $juego2->nombre_juego = "Demon's Soul";
        $juego2->descripcion = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, nam fugit cum illum ea doloremque, optio exercitationem modi inventore quisquam vel quas. Aliquid, nihil! Expedita voluptate possimus porro molestias architecto!";
        $juego2->plataforma = "Playstation";
        $juego2->precio = 30;
        $juego2->imagen = "demon.jpg";
        $juego2->user_id = 2;
        $juego2->save();

        $user3 = new users();
        $user3->nombre_usuario= "Prueba";
        $user3->name ="Pepa";
        $user3->fecha_nac = "11/05/2002";
        $user3->direccion = "Villa patata";
        $user3->mail = "e@gmail.com";
        $user3->telefono = 633163585;
        $user3->contraseña = "nosoyadmin";
        $user3->save();

        $juego3 = new juegos();
        $juego3->nombre_juego = "Nintendogs";
        $juego3->plataforma = "Nintendo";
        $juego3->descripcion = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, nam fugit cum illum ea doloremque, optio exercitationem modi inventore quisquam vel quas. Aliquid, nihil! Expedita voluptate possimus porro molestias architecto!";
        $juego3->precio = 10;
        $juego3->imagen = "ndogs.png";
        $juego3->user_id = 1;
        $juego3->save();

        $juego4 = new juegos();
        $juego4->nombre_juego = "Pokemon Legends Arceus";
        $juego4->plataforma = "Nintendo";
        $juego4->descripcion = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, nam fugit cum illum ea doloremque, optio exercitationem modi inventore quisquam vel quas. Aliquid, nihil! Expedita voluptate possimus porro molestias architecto!";
        $juego4->precio = 60;
        $juego4->imagen = "PLA.jpg";
        $juego4->user_id = 1;
        $juego4->save();

        $juego5 = new juegos();
        $juego5->nombre_juego = "Assasin's Creed Valhalla";
        $juego5->plataforma = "XBOX";
        $juego5->descripcion = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, nam fugit cum illum ea doloremque, optio exercitationem modi inventore quisquam vel quas. Aliquid, nihil! Expedita voluptate possimus porro molestias architecto!";
        $juego5->precio = 45;
        $juego5->imagen = "assasin.jpg";
        $juego5->user_id = 1;
        $juego5->save();

        $juego5 = new juegos();
        $juego5->nombre_juego = "Tales of Arise";
        $juego5->plataforma = "XBOX";
        $juego5->descripcion = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, nam fugit cum illum ea doloremque, optio exercitationem modi inventore quisquam vel quas. Aliquid, nihil! Expedita voluptate possimus porro molestias architecto!";
        $juego5->precio = 15;
        $juego5->imagen = "tales.jpg";
        $juego5->user_id = 2;
        $juego5->save();

        $juego5 = new juegos();
        $juego5->nombre_juego = "Jump Force";
        $juego5->plataforma = "XBOX";
        $juego5->descripcion = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, nam fugit cum illum ea doloremque, optio exercitationem modi inventore quisquam vel quas. Aliquid, nihil! Expedita voluptate possimus porro molestias architecto!";
        $juego5->precio = 15;
        $juego5->imagen = "jump.jpg";
        $juego5->user_id = 2;
        $juego5->save();

        $juego5 = new juegos();
        $juego5->nombre_juego = "Monster Hunter World";
        $juego5->plataforma = "XBOX";
        $juego5->descripcion = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, nam fugit cum illum ea doloremque, optio exercitationem modi inventore quisquam vel quas. Aliquid, nihil! Expedita voluptate possimus porro molestias architecto!";
        $juego5->precio = 15;
        $juego5->imagen = "monster.jpg";
        $juego5->user_id = 2;
        $juego5->save();

        $juego6 = new juegos();
        $juego6->nombre_juego = "Pokemon Esmeralda";
        $juego6->plataforma = "Nintendo";
        $juego6->descripcion = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, nam fugit cum illum ea doloremque, optio exercitationem modi inventore quisquam vel quas. Aliquid, nihil! Expedita voluptate possimus porro molestias architecto!";
        $juego6->precio = 10;
        $juego6->imagen = "esmeralda.jpg";
        $juego6->user_id = 1;
        $juego6->save();

        $juego7 = new juegos();
        $juego7->nombre_juego = "Pokemon Ruby";
        $juego7->plataforma = "Nintendo";
        $juego7->descripcion = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, nam fugit cum illum ea doloremque, optio exercitationem modi inventore quisquam vel quas. Aliquid, nihil! Expedita voluptate possimus porro molestias architecto!";
        $juego7->precio = 10;
        $juego7->imagen = "ruby.jpg";
        $juego7->user_id = 1;
        $juego7->save();

        $juego8 = new juegos();
        $juego8->nombre_juego = "Pokemon Zafiro";
        $juego8->plataforma = "Nintendo";
        $juego8->descripcion = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, nam fugit cum illum ea doloremque, optio exercitationem modi inventore quisquam vel quas. Aliquid, nihil! Expedita voluptate possimus porro molestias architecto!";
        $juego8->precio = 10;
        $juego8->imagen = "zafiro.jpg";
        $juego8->user_id = 1;
        $juego8->save();

        $juego9 = new juegos();
        $juego9->nombre_juego = "Zelda Breath of the Wild";
        $juego9->plataforma = "Nintendo";
        $juego9->descripcion = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, nam fugit cum illum ea doloremque, optio exercitationem modi inventore quisquam vel quas. Aliquid, nihil! Expedita voluptate possimus porro molestias architecto!";
        $juego9->precio = 40;
        $juego9->imagen = "wild.png";
        $juego9->user_id = 1;
        $juego9->save();

        $juego10 = new juegos();
        $juego10->nombre_juego = "Zelda Ocarina Of Time";
        $juego10->plataforma = "Nintendo";
        $juego10->descripcion = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, nam fugit cum illum ea doloremque, optio exercitationem modi inventore quisquam vel quas. Aliquid, nihil! Expedita voluptate possimus porro molestias architecto!";
        $juego10->precio = 15;
        $juego10->imagen = "ocarina.jpg";
        $juego10->user_id = 1;
        $juego10->save();

        $juego11 = new juegos();
        $juego11->nombre_juego = "Zelda Majora's Mask";
        $juego11->plataforma = "Nintendo";
        $juego11->descripcion = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, nam fugit cum illum ea doloremque, optio exercitationem modi inventore quisquam vel quas. Aliquid, nihil! Expedita voluptate possimus porro molestias architecto!";
        $juego11->precio = 20;
        $juego11->imagen = "majorask.jpg";
        $juego11->user_id = 1;
        $juego11->save();

        $juego11 = new juegos();
        $juego11->nombre_juego = "New Super Mario Bros";
        $juego11->plataforma = "Nintendo";
        $juego11->descripcion = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, nam fugit cum illum ea doloremque, optio exercitationem modi inventore quisquam vel quas. Aliquid, nihil! Expedita voluptate possimus porro molestias architecto!";
        $juego11->precio = 20;
        $juego11->imagen = "bros.jpg";
        $juego11->user_id = 1;
        $juego11->save();

        $juego11 = new juegos();
        $juego11->nombre_juego = "Inazuma Eleven Tormenta De Fuego";
        $juego11->plataforma = "Nintendo";
        $juego11->descripcion = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, nam fugit cum illum ea doloremque, optio exercitationem modi inventore quisquam vel quas. Aliquid, nihil! Expedita voluptate possimus porro molestias architecto!";
        $juego11->precio = 10;
        $juego11->imagen = "inazuma.jpg";
        $juego11->user_id = 1;
        $juego11->save();

        $juego11 = new juegos();
        $juego11->nombre_juego = "Animal Crossing New Horizons";
        $juego11->plataforma = "Nintendo";
        $juego11->descripcion = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, nam fugit cum illum ea doloremque, optio exercitationem modi inventore quisquam vel quas. Aliquid, nihil! Expedita voluptate possimus porro molestias architecto!";
        $juego11->precio = 40;
        $juego11->imagen = "AC.jpg";
        $juego11->user_id = 1;
        $juego11->save();
        
        $juego14 = new juegos();
        $juego14->nombre_juego = "the binding of isaac repentance";
        $juego14->plataforma = "PC";
        $juego14->descripcion = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, nam fugit cum illum ea doloremque, optio exercitationem modi inventore quisquam vel quas. Aliquid, nihil! Expedita voluptate possimus porro molestias architecto!";
        $juego14->precio = 20;
        $juego14->imagen = "isaac.jpg";
        $juego14->user_id = 3;
        $juego14->save();

        $juego8 = new juegos();
        $juego8->nombre_juego = "Hollow Knight";
        $juego8->plataforma = "PC";
        $juego8->descripcion = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, nam fugit cum illum ea doloremque, optio exercitationem modi inventore quisquam vel quas. Aliquid, nihil! Expedita voluptate possimus porro molestias architecto!";
        $juego8->precio = 25;
        $juego8->imagen = "hollow.jpg";
        $juego8->user_id = 1;
        $juego8->save();
        
        $juego15 = new juegos();
        $juego15->nombre_juego = "The Witcher 3";
        $juego15->plataforma = "PC";
        $juego15->descripcion = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, nam fugit cum illum ea doloremque, optio exercitationem modi inventore quisquam vel quas. Aliquid, nihil! Expedita voluptate possimus porro molestias architecto!";
        $juego15->precio = 15;
        $juego15->imagen = "witcher.jpg";
        $juego15->user_id = 1;
        $juego15->save();

        $juego15 = new juegos();
        $juego15->nombre_juego = "Halo 5";
        $juego15->plataforma = "XBOX";
        $juego15->descripcion = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, nam fugit cum illum ea doloremque, optio exercitationem modi inventore quisquam vel quas. Aliquid, nihil! Expedita voluptate possimus porro molestias architecto!";
        $juego15->precio = 35;
        $juego15->imagen = "halo.png";
        $juego15->user_id = 1;
        $juego15->save();
        
        $carrito = new carritos();
        $carrito->user_id=1;
        $carrito->juego_id=2;
        $carrito->save();

    }
}
