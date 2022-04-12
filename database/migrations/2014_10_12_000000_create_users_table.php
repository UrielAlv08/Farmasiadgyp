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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('admin')->default('0');
            $table->string('name', 191);
            $table->string('email', 191)->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->string('lastname', 191);
            $table->string('username', 191);
            $table->string('estado', 11);
            $table->timestamp('email_verified_at')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
