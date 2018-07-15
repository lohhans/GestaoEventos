<?php

use Illuminate\Database\Seeder;

class EventovoucherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
        for($i = 0; $i < 5; $i++){
            DB::table('evento_voucher')->insert(['evento_id' => rand(1,5), 'voucher_id' => rand(1,10)]);
        }
     }
}
