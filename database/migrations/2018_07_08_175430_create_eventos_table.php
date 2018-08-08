<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->increments('id');
		    $table->string('localizacao')->nullable();
		    $table->string('descricao');
            $table->string('resumoEvento', 1000)->default('Esse evento não possui um resumo');
    	    $table->dateTime('dataInicio');
            $table->dateTime('dataFim');
            $table->dateTime('dataPagamento');
            $table->dateTime('dataFimInscricoes');
            $table->integer('area_id')->unsigned;
            $table->integer('endereco_id')->nullable()->unsigned;
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('area_id')->references('id')->on('areas');
            $table->foreign('endereco_id')->references('id')->on('enderecos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
    }
}
