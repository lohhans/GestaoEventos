<?php

use Illuminate\Database\Seeder;

class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('eventos')->insert(['localizacao' => 'Garanhuns', 'descricao' => 'Aniversario', 'dataInicio' => '01/10/2018', 'dataFim' => '05/10/2018', 'dataPagamento' => '15/09/2018', 'area_id'=> 1]);
        DB::table('eventos')->insert(['localizacao' => 'Recife', 'descricao' => 'Samba Recife', 'dataInicio' => '02/10/2018', 'dataFim' => '06/10/2018', 'dataPagamento' => '16/09/2018', 'area_id' => 2]);
        DB::table('eventos')->insert(['localizacao' => 'Recife', 'descricao' => 'Jogo Beneficente', 'dataInicio' => '04/10/2018', 'dataFim' => '11/10/2018', 'dataPagamento' => '20/09/2018', 'area_id' => 1]);
        DB::table('eventos')->insert(['localizacao' => 'Natal', 'descricao' => 'Campus Party', 'dataInicio' => '11/10/2018', 'dataFim' => '15/10/2018', 'dataPagamento' => '01/09/2018', 'area_id' => 3]);
        DB::table('eventos')->insert(['localizacao' => 'Garanhuns', 'descricao' => 'FIG', 'dataInicio' => '19/10/2018', 'dataFim' => '28/10/2018', 'dataPagamento' => '03/09/2018', 'area_id' => 2]);
    }
}
