<?php

use Illuminate\Database\Seeder;

class BoletoinscricaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
        for($i = 0; $i < 5; $i++){
 		    DB::table('boleto_inscricao')->insert(['boleto_id' => rand(1,5), 'inscricao_id' => rand(1,5)]);
        }
     }
}
