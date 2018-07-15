<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EventoVoucher extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up(){
       Schema::create('evento_voucher', function (Blueprint $table) {
           $table->increments('id');
           $table->integer('evento_id')->unsigned();
           $table->integer('voucher_id')->unsigned();
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
        //
    }
}
