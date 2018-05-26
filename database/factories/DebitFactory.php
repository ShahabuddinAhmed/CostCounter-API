<?php

use Faker\Generator as Faker;

$factory->define(App\Debit::class, function (Faker $faker) {
    return [
        'name' => $faker->text(15),
        'date' => $faker->datetime(),
        'debit' => $faker->text(30),
        'users_id' => $faker->numberBetween(100, 1000)
    ];
});
