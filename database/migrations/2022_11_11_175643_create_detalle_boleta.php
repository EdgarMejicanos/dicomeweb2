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
        Schema::create('detalle_boleta', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('boletas_id');

            $table->foreign('boletas_id')->references('id')->on('boletas');
            $table->string('equipo',60);
            $table->string('marca', 60);
            $table->string('serie', 60)->nullable();
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
        Schema::dropIfExists('detalle_boleta');
    }
};
