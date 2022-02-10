<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Juegos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        Schema::create('juegos', function(Blueprint $table){
            $table->string('cod_juego');
            $table->string('nombre_juego');
            $table->primary('cod_juego');
            $table->string('plataforma');
            $table->integer('precio');
            $table->string('imagen');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('juegos');
    }
}
