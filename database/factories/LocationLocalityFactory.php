<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\LocationLocality;
use Faker\Generator as Faker;

$factory->define(LocationLocality::class, function (Faker $faker) {
    return [
        'name' => $faker->city,
    ];
});
