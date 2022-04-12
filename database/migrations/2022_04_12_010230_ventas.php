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
            $table->string('tipo_venta', 11);
            $table->string('apertura_id', 20);
            $table->string('folio', 30);
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
