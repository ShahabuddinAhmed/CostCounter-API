<?php

use Faker\Generator as Faker;

$factory->define(App\Users::class, function (Faker $faker) {
    return [
        'name' => $faker->text(30),
        'email' => $faker->text(30),
        'phon' => $faker->text(30),
        'address' => $faker->text(100),
        'password' => $faker->text(100)
    ];
});
