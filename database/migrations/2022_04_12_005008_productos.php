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
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre', 100);
            $table->decimal('compra', 10, 2);
            $table->decimal('venta', 10, 2);
            $table->integer('stock');
            $table->timestamps();
            $table->date('fecha_caducidad')->default('2021-04-15');
            $table->string('codigo', 255);
            $table->string('descripcion', 255)->nullable();
            $table->integer('estado')->default(1);
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->unsignedBigInteger('laboratorio_id');
            $table->foreign('laboratorio_id')->references('id')->on('laboratorios');
            $table->integer('archivado')->default(1);
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
