<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){
    	$this->call(TipousuarioSeeder::class);
        $this->call(UsuarioSeeder::class);
        $this->call(VoucherSeeder::class);
        $this->call(AreaSeeder::class);
        $this->call(EventoSeeder::class);
        $this->call(AtividadeSeeder::class);
        $this->call(BoletoSeeder::class);
        $this->call(InscricaoSeeder::class);
        $this->call(BoletoinscricaoSeeder::class);
        $this->call(EventovoucherSeeder::class);
        $this->call(EventousuarioSeeder::class);

    }
}
