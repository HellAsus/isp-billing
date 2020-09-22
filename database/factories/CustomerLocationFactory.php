<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\CustomerLocation;
use Faker\Generator as Faker;

$factory->define(CustomerLocation::class, function (Faker $faker) {
    return [
        'post_code' => $faker->postcode,
        'apartment' => $faker->buildingNumber,
    ];
});
