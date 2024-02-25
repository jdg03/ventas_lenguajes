<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            
            $table->id('codigo');
            $table->date('fechaVenta');
            $table->string('codigoProducto');
            $table->integer('cantidad');
            $table->decimal('subtotal', 8, 2);
            $table->decimal('isv', 8, 2);
            $table->decimal('total', 8, 2);
           

            // Definición de la llave foránea
            $table->foreign('codigoProducto')->references('codigoProducto')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}