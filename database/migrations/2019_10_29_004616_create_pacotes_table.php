<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacotes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('refeicoes',50);
            $table->string('eventos',50);
            $table->string('custoAdicional',15);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacotes');
    }
}
