<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaGaleria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galeria', function (Blueprint $table) {
          $table->Increments('id');
          $table->timestamps();
          $table->unsignedInteger('equipo_id');
          $table->foreign('equipo_id','fk_galeria_equipo')->references('id')->on('equipo')->onDelete('restrict')->onUpdate('restrict');
          $table->unsignedInteger('marca_id');
          $table->foreign('marca_id','fk_galeria_marca')->references('id')->on('marca')->onDelete('restrict')->onUpdate('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('galeria');
    }
}
