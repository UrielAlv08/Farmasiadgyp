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
        Schema::create('categorias', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('nombre', 200);
            $table->integer('estado')->size(11)->default(1);
            $table->bigInteger('categoria_id')->nullable();
            $table->string('tipo', 4);
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
