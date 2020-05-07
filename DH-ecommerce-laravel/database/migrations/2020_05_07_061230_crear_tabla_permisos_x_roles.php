<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaPermisosXRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permisosXRoles', function (Blueprint $table) {
          $table->Increments('id');
          $table->timestamps();
          $table->unsignedInteger('proceso_id');
          $table->foreign('proceso_id','fk_permisosXroles_proceso')->references('id')->on('proceso')->onDelete('restrict')->onUpdate('restrict');
          $table->unsignedInteger('rol_id');
          $table->foreign('rol_id','fk_permisosXroles_rol')->references('id')->on('rol')->onDelete('restrict')->onUpdate('restrict');
          $table->date('fecha_de_vencimiento');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permisosXRoles');
    }
}
