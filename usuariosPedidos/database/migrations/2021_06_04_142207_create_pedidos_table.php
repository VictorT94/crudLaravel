<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('producto_id')->unsigned(); //lo introducimos a mano ya que no existe la tabla productos 
            $table->bigInteger('usuarios_id')->unsigned();
            $table->unsignedInteger('number_products');
            $table->double('total_price');
            $table->unsignedInteger('discount');

//            $table->foreign('producto_id')->references('id')->on('productos'); No tenemos la tabla productos asique no es necesaria
            $table->foreign('usuarios_id')->references('id')->on('usuarios');

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
        Schema::dropIfExists('pedidos');
    }
}
