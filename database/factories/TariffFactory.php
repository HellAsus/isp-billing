<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Tariff;
use Faker\Generator as Faker;

$factory->define(Tariff::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'ammount' => $faker->numberBetween(150, 550),
        'description' => $faker->text(100),
    ];
});
