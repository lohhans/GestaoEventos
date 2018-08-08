<?php

use Illuminate\Database\Seeder;

class TipousuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipousuarios')->insert(['descricao' => 'Administrador']);
        DB::table('tipousuarios')->insert(['descricao' => 'Organizador e Participante']);
        DB::table('tipousuarios')->insert(['descricao' => 'Participante']);

    }
}
