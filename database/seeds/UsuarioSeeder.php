<?php

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run(){
      factory(App\Usuario::class, 8)->create();
      DB::table('usuarios')->insert(['nome' => 'Root', 'email' => 'root@teste.com', 'cpf' => '12345678901', 'login' => 'root', 'tipousuario_id' => 1, 'password' => \Hash::make('root123456'), 'remember_token' => str_random(10)]);
    }
}
