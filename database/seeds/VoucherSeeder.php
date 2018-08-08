<?php

use Illuminate\Database\Seeder;

class VoucherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 10; $i++){
				DB::table('vouchers')->insert(['descricao' => 'voucher'. $i, 'limite' => $i, 'percentual' => $i, 'codigoIdentificador' => str_random(10)]);
        }
    }
}
