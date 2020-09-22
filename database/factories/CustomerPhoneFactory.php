<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\CustomerPhone;
use Faker\Generator as Faker;

$factory->define(CustomerPhone::class, function (Faker $faker) {
    return [
        'number' => $faker->randomNumber(7),
    ];
});
