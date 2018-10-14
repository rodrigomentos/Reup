<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalleVentas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codigo');
            $table->integer('venta_id')->references('id')->on('ventas');
            $table->integer('producto_id')->references('id')->on('productos');
            $table->integer('cantidad');
            $table->float('monto', 8, 2);
            $table->float('precio', 8, 2);
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalleVentas');
    }
}
