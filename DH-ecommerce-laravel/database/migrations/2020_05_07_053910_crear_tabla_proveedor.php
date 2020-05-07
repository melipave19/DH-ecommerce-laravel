<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaProveedor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedor', function (Blueprint $table) {
          $table->Increments('id');
          $table->timestamps();
          $table->string('razon_social',45);
          $table->string('direccion',45);
          $table->unsignedInteger('localidad_id');
          $table->foreign('localidad_id','fk_proveedor_localidad')->references('id')->on('localidad')->onDelete('restrict')->onUpdate('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proveedor');
    }
}
