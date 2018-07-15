<?php

use Illuminate\Database\Seeder;

class InscricaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run(){
       factory(App\Inscricao::class, 5)->create();
     }
}
