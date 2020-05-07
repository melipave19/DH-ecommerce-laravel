<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaDetalleVenta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalleVenta', function (Blueprint $table) {
          $table->Increments('id','venta_id');
          $table->unsignedInteger('detalleVenta_id');
          $table->foreign('detalleVenta_id','fk_detalleVenta_detalleVenta')->references('id')->on('detalleVenta')->onDelete('restrict')->onUpdate('restrict');
          $table->unsignedInteger('venta_id');
          $table->foreign('venta_id','fk_detalleVenta_venta')->references('id')->on('venta')->onDelete('restrict')->onUpdate('restrict');
          $table->unsignedInteger('equipo_id');
          $table->foreign('equipo_id','fk_detalleVenta_equipo')->references('id')->on('equipo')->onDelete('restrict')->onUpdate('restrict');
          $table->float('oferta');
          $table->integer('cantidad');
          $table->float('precio_con_oferta');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalleVenta');
    }
}
