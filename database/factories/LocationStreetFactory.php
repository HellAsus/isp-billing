<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\LocationStreet;
use Faker\Generator as Faker;

$factory->define(LocationStreet::class, function (Faker $faker) {
    return [
        'name' => $faker->streetName,
    ];
});
