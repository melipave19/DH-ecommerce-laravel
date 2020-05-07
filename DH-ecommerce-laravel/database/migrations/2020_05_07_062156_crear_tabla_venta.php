<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaVenta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta', function (Blueprint $table) {
          $table->Increments('id');
          $table->timestamps();
          $table->string('nombre_empresa');
          $table->dateTime('fecha_venta');
          $table->integer('numero_venta');
          $table->unsignedInteger('tipoPago_id');
          $table->foreign('tipoPago_id','fk_venta_tipoPago')->references('id')->on('tipoPago')->onDelete('restrict')->onUpdate('restrict');
          $table->unsignedInteger('tipoEnvio_id');
          $table->foreign('tipoEnvio_id','fk_venta_tipoEnvio')->references('id')->on('tipoEnvio')->onDelete('restrict')->onUpdate('restrict');
          $table->string('direccionEnvio',45);
          $table->unsignedInteger('localidad_id');
          $table->foreign('localidad_id','fk_venta_localidad')->references('id')->on('localidad')->onDelete('restrict')->onUpdate('restrict');
          $table->unsignedInteger('estado_id');
          $table->foreign('estado_id','fk_venta_estado')->references('id')->on('estado')->onDelete('restrict')->onUpdate('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venta');
    }
}
