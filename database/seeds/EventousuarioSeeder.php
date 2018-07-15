<?php

use Illuminate\Database\Seeder;

class EventousuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 5; $i++){
            DB::table('evento_usuario')->insert(['evento_id' => rand(1,5), 'usuario_id' => rand(1,8)]);
        }
    }
}
