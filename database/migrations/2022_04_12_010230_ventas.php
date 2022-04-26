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
        Schema::create('ventas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('usuario_id');
            $table->foreign('usuario_id')->references('id')->on('users');
            $table->decimal('total', 8, 2);
            $table->decimal('denominacion', 8, 2);
            $table->decimal('cambio', 8, 2);
            $table->decimal('utilidad', 8, 2);
            $table->timestamps();
            $table->integer('tipo_venta')->default(0);
            $table->unsignedBigInteger('apertura_id');
            $table->foreign('apertura_id')->references('id')->on('aperturas_caja');
            $table->string('folio', 30)->nullable();
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
