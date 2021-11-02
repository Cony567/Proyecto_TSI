<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Publicaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Publicaciones', function (Blueprint $table) {
            $table->id();
            $table->string("titulo_publicacion");
            $table->tinyInteger("cod_rubro");
            $table->date("fecha_ini");
            $table->date("fecha_fin");
            $table->date("fecha_publicada");
            $table->tinyInteger("cod_duracion");
            $table->tinyInteger("cod_zona");
            $table->string("descripcion");
            $table->char("tipo_oferta");
            $table->integer("cod_usuario");
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
        Schema::dropIfExists('Publicaciones');
    }
}
