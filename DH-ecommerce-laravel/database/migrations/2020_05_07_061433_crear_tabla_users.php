<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
          $table->Increments('id');
          $table->string('nombre',45);
          $table->string('apellido',45);
          $table->integer('edad');
          $table->string('mail',45)->unique();
          $table->integer('dni');
          $table->string('usuario',45);
          $table->string('password',100);
          $table->date('fecha_nacimiento');
          $table->unsignedInteger('permisosXRoles_id');
          $table->foreign('permisosXRoles_id','fk_users_permisosXRoles')->references('id')->on('permisosXRoles')->onDelete('restrict')->onUpdate('restrict');
          $table->unsignedInteger('imagen_id');
          $table->foreign('imagen_id','fk_users_imagen')->references('id')->on('imagen')->onDelete('restrict')->onUpdate('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
