<?php

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 10; $i++){
				DB::table('usuarios')->insert(['nome' => 'elyson'. $i, 'email' => 'elyson@' . $i, 'cpf' => ''.$i.$i.$i.$i.$i.$i.$i.$i.$i.$i.$i.'', 'login' => 'elyson' . $i, 'senha' => $i, 'tipousuario_id' => rand(1,5)]);        
        }
    }
}
