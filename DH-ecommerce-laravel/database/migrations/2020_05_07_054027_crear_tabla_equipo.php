<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaEquipo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipo', function (Blueprint $table) {
          $table->Increments('id');
          $table->timestamps();
          $table->string('nombre_equipo',45);
          $table->string('descripcion',45);
          $table->unsignedInteger('categoria_id');
          $table->foreign('categoria_id','fk_equipo_categoria')->references('id')->on('categoria')->onDelete('restrict')->onUpdate('restrict');
          $table->unsignedInteger('marca_id');
          $table->foreign('marca_id','fk_equipo_marca')->references('id')->on('marca')->onDelete('restrict')->onUpdate('restrict');
           $table->float('precio');
           $table->integer('tamaño_pantalla');
           $table->integer('disco_duro');
           $table->integer('stock_disponible');
           $table->unsignedInteger('proveedor_id');
           $table->foreign('proveedor_id','fk_equipo_proveedor')->references('id')->on('proveedor')->onDelete('restrict')->onUpdate('restrict');
           $table->tinyInteger('esta_en_oferta');
           $table->tinyInteger('habilitado');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipo');
    }
}
