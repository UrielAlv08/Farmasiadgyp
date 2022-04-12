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
        Schema::create('aperturas_caja', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('monto_inicio', 8, 2);
            $table->decimal('monto_cierre', 10, 0);
            $table->decimal('ventas_finales', 8, 2);
            $table->decimal('ventas_finales_tarjeta', 8, 2);
            $table->decimal('utilidades', 8, 2);
            $table->decimal('utilidades_tarjeta', 8, 2);
            $table->decimal('ventas_productos', 10, 0);
            $table->decimal('ventas_servicios', 10, 2);
            $table->string('observaciones_apertura', 255);
            $table->string('observaciones_cierre', 256);
            $table->dateTime('fecha_hora_cierre');
            $table->unsignedBigInteger('sucursal_id');
            $table->foreign('sucursal_id')->references('id')->on('Sucursales');
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
        //
    }
};
