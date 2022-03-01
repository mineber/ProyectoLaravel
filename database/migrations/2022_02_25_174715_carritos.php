<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carritos', function(Blueprint $table){
            $table->id('cod_carrito');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('juego_id');
            // $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('juego_id')->references('cod_juego')->on('juegos');
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
        Schema::dropIfExists('carritos');
    }
};
