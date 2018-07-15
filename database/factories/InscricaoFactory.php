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

$factory->define(App\Inscricao::class, function (Faker $faker) {
    return [
        'valor' => $faker->numberBetween(50, 200),
        'dataInscricao' => $faker->dateTime(),
        'usuario_id' => $faker->numberBetween(1, 5),
        'evento_id' => $faker->numberBetween(1, 4),
        'voucher_id' => $faker->numberBetween(1, 5),
    ];
});
