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
        Schema::create('inventarios_productos_generales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('producto_id')->nullable();
            $table->foreign('producto_id')->references('id')->on('productos')->onDelete('cascade');
            $table->double('producto_compra', 22, 0)->nullable();
            $table->double('producto_venta', 22, 0)->nullable();
            $table->integer('cantidad')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('inventario_general_id')->nullable();
            $table->foreign('inventario_general_id')->references('id')->on('inventarios_generales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
