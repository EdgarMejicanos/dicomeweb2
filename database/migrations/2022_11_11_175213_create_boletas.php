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
        Schema::create('boletas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('clientes_id');
            $table->unsignedBigInteger('users_id');

            $table->foreign('clientes_id')->references('id')->on('clientes');
            $table->foreign('users_id')->references('id')->on('users');
            $table->integer('idTecnico');
            $table->integer('estado');
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
        Schema::dropIfExists('boletas');
    }
};
