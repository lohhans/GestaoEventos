<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BoletoInscricao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('boleto_inscricao', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('boleto_id')->unsigned();
          $table->integer('inscricao_id')->unsigned();
          $table->foreign('boleto_id')->references('id')->on('boletos');
          $table->foreign('inscricao_id')->references('id')->on('inscricaos');
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
}
