<?php

use Illuminate\Database\Seeder;

class BoletoSeeder extends Seeder
{

     public function run(){
       factory(App\Boleto::class, 6)->create();
     }
}
