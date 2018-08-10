<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscricaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscricaos', function (Blueprint $table) {
            $table->increments('id');
            $table->double('valor');
            $table->dateTime('dataInscricao');
            $table->integer('usuario_id')->unsigned;
            $table->integer('evento_id')->unsigned;
            $table->integer('voucher_id')->nullable()->unsigned;

            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->foreign('evento_id')->references('id')->on('eventos');
            $table->foreign('voucher_id')->references('id')->on('vouchers');
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
        Schema::dropIfExists('inscricaos');
        Schema::dropIfExists('boleto_inscricao');
    }
}
