<?php

use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         for($i = 0; $i < 10; $i++){
 				      DB::table('areas')->insert(['descricao' => 'area'. $i]);
         }
     }
}
