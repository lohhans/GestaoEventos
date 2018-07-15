<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Boleto::class, function (Faker $faker) {
    return [
        'dataPagamento' => $faker->dateTime(),
        'statusPagamento' => $faker->numberBetween(0,1),
        'valorPagamento' => $faker->numberBetween(50,200),
        'dataVencimento' => $faker->dateTime(),
        'valorBoleto' => $faker->numberBetween(50,200),
        'desconto' => $faker->numberBetween(0,100),
    ];
});
