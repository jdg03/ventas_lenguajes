<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            // Definición de campos
            $table->string('codigoProducto')->primary();// establece la llava primaria
            $table->string('nombre');
            $table->decimal('precio', 8, 2); // 8 dígitos en total, 2 decimales
            //no permitirá valores negativos y, si no se proporciona ningún valor al insertar una nueva fila en la tabla,
            // se asignará automáticamente el valor 0 al campo stock.
            $table->integer('stock')->unsigned()->default(0);
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
