<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_pedidos', function (Blueprint $table) {
            $table->increments('id_detalle_pedido');
            $table->integer('cantidad');
            $table->float('descuento');
            $table->unsignedInteger('id_pedido');
            $table->unsignedInteger('id_articulo');            
    
            $table->foreign('id_pedido')->references('id_pedido')->on('pedidos');
            $table->foreign('id_articulo')->references('id_articulo')->on('articulos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_pedidos');
    }
};
