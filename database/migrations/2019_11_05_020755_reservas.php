<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Reservas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->increments('id');

            $table->date('checkin');
            $table->date('checkout');
            $table->string('status',50);
            $table->string('precoTotal',15);

            $table->integer('funcionario_id')->unsigned();
            $table->foreign('funcionario_id')->references('id')->on('funcionarios');

            $table->integer('quarto_id')->unsigned();
            $table->foreign('quarto_id')->references('id')->on('quartos');

            $table->string('quantidadePessoas',10);

            $table->integer('pacote_id')->unsigned();
            $table->foreign('pacote_id')->references('id')->on('pacotes');

        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservas');
    }
}
