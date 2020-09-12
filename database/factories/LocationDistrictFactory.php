<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\LocationDistrict;
use Faker\Generator as Faker;

$factory->define(LocationDistrict::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(2),
    ];
});
