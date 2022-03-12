<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ProductosClientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('idCliente');
            $table->bigInteger('idProducto');
            $table->text('usuario');
            $table->text('codigoAsociado');
            $table->date('fechaContacto');
            $table->date('fechaProbable');

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
        Schema::dropIfExists('_productos_clientes');
    }
}
