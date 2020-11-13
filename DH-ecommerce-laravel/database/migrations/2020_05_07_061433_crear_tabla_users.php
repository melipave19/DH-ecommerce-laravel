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
          $table->string('email',45)->unique();
          $table->integer('dni');
          $table->string('usuario',45);
          $table->string('password',100);
          $table->date('fecha_nacimiento');
          $table->unsignedInteger('id_permisos');
          $table->foreign('id_permiso','fk_users_permisosXRoles')->references('id')->on('permisosXRoles')->onDelete('restrict')->onUpdate('restrict');
          $table->varchar('foto_perfil');

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
