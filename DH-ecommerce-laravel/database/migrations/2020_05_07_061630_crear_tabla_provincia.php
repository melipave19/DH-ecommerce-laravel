<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaProvincia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provincia', function (Blueprint $table) {
          $table->Increments('id');
          $table->timestamps();
           $table->string('nombre_provincia');
           $table->unsignedInteger('pais_id');
           $table->foreign('pais_id','fk_provincia_pais')->references('id')->on('pais')->onDelete('restrict')->onUpdate('restrict');
           $table->unsignedInteger('provincia_id');
          $table->foreign('provincia_id','fk_localidad_provincia')->references('id')->on('provincia')->onDelete('restrict')->onUpdate('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provincia');
    }
}
