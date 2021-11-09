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
        Schema::create('publicaciones', function (Blueprint $table) {
            $table->BigIncrements('cod_publicacion');
            $table->string('titulo_publicacion');
            $table->unsignedTinyInteger('cod_rubro')->constrained('rubros');
            $table->date('fecha_ini');
            $table->date('fecha_fin');
            $table->date('fecha_publicada');
            $table->unsignedTinyInteger('cod_duracion')->constrained('duraciones');
            $table->unsignedTinyInteger('cod_zona')->constrained('zonas');
            $table->string('descripcion');
            $table->string('tipo_oferta');
            $table->unsignedSmallInteger('cod_usuario')->constrained('users');
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
        Schema::dropIfExists('publicaciones');
    }
}
