<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ReservaQuarto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva_quarto', function (Blueprint $table) {
            $table->integer('reserva_id')->unsigned()->unique();
            $table->foreign('reserva_id')->references('id')->on('reservas');
            $table->integer('quarto_id')->unsigned()->unique();
            $table->foreign('quarto_id')->references('id')->on('quartos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserva_quarto');
    }
}
