<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Discos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('discos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('artista');
            $table->string('album');
            $table->integer('anio');
            $table->string('genero');
            $table->string('portada');
            $table->string('enlace');
            $table->integer('calificaciones');
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
        //
    }
}
