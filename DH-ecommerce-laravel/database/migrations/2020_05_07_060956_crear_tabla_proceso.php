<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaProceso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proceso', function (Blueprint $table) {
          $table->Increments('id');    
          $table->tinyInteger('generar_venta');
          $table->tinyInteger('agregar_equipo');
          $table->tinyInteger('consultar_productos');
          $table->tinyInteger('cargar_usuarios');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proceso');
    }
}
