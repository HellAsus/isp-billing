<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\LocationHouse;
use Faker\Generator as Faker;

$factory->define(LocationHouse::class, function (Faker $faker) {
    return [
        'number' => $faker->buildingNumber,
    ];
});
