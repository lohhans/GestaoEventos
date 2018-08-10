<?php

use Illuminate\Database\Seeder;

class AtividadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $faker = \Faker\Factory::create('pt_BR');
        DB::table('atividades')->insert(['descricao' => 'palestra', 'valor' => $faker->numberBetween(50, 200),'evento_id' => $faker->numberBetween(1, 4)]);
        DB::table('atividades')->insert(['descricao' => 'mini-curso', 'valor' => $faker->numberBetween(50, 200),'evento_id' => $faker->numberBetween(1, 4)]);
        DB::table('atividades')->insert(['descricao' => 'congresso', 'valor' => $faker->numberBetween(50, 200),'evento_id' => 4]);
        DB::table('atividades')->insert(['descricao' => 'seminario', 'valor' => $faker->numberBetween(50, 200),'evento_id' => 4]);
    }
}
