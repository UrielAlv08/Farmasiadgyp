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
        Schema::create('inventarios_generales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('usuario_id')->nullable();
            $table->foreign('usuario_id')->references('id')->on('users');
            $table->integer('txt_fecha_id')->nullable();
            $table->integer('productos_totales')->nullable();
            $table->integer('cantidad_productos')->nullable();
            $table->float('precio_total', 12, 0)->nullable();
            $table->mediumText('observaciones')->nullable();
            $table->timestamps();
            $table->tinyInteger('estatus')->nullable();
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
