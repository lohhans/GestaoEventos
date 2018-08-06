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

        DB::table('eventos')->insert(['localizacao' => 'Garanhuns', 'descricao' => 'Aniversario', 'dataInicio' => '01/10/2018', 'dataFim' => '05/10/2018', 'dataPagamento' => '15/09/2018', 'dataFimInscricoes' => '20/09/1996', 'area_id'=> 1]);
        DB::table('eventos')->insert(['localizacao' => 'Recife', 'descricao' => 'Samba Recife', 'dataInicio' => '02/10/2018', 'dataFim' => '06/10/2018', 'dataPagamento' => '16/09/2018', 'dataFimInscricoes' => '20/09/1996', 'area_id' => 2]);
        DB::table('eventos')->insert(['localizacao' => 'Recife', 'descricao' => 'Jogo Beneficente', 'dataInicio' => '04/10/2018', 'dataFim' => '11/10/2018', 'dataPagamento' => '20/09/2018', 'dataFimInscricoes' => '20/09/1996', 'area_id' => 1]);
        DB::table('eventos')->insert(['localizacao' => 'Natal', 'descricao' => 'Campus Party', 'resumoEvento' => ' Campus Party Brasil é o principal acontecimento tecnológico realizado anualmente no Brasil. Nele são tratados os mais diversos temas relacionados à Internet, reunindo um grande número de comunidades e usuários da rede mundial de computadores envolvidos com tecnologia e cultura digital', 'dataInicio' => '11/10/2018', 'dataFim' => '15/10/2018', 'dataPagamento' => '01/09/2018', 'dataFimInscricoes' => '20/09/1996' ,'area_id' => 3]);
        DB::table('eventos')->insert(['localizacao' => 'Garanhuns', 'descricao' => 'FIG', 'resumoEvento' => 'O Festival de Inverno de Garanhuns é realizado anualmente na cidade que lhe dá nome, localizada no Agreste de Pernambuco.','dataInicio' => '19/10/2018', 'dataFim' => '28/10/2018', 'dataPagamento' => '03/09/2018', 'dataFimInscricoes' => '20/09/1996', 'area_id' => 2]);
    }
}
