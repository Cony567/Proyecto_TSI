<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Duraciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('duraciones', function (Blueprint $table) {
            $table->tinyInteger('cod_duracion');
            $table->string('titulo_duracion');
            $table->unsignedSmallInteger('cod_admin')->constrained('administradores');
            $table->date('fecha_edicion');
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
        Schema::dropIfExists('duraciones');
    }
}
