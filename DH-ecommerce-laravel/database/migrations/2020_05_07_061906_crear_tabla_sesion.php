<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaSesion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sesion', function (Blueprint $table) {
          $table->Increments('id');
          $table->unsignedInteger('users_id');
          $table->foreign('users_id','fk_sesion_users')->references('id')->on('users')->onDelete('restrict')->onUpdate('restrict');
          $table->date('fecha_inicio');
          $table->dateTime('hora_inicio');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sesion');
    }
}
