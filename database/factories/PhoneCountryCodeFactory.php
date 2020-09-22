<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\PhoneCountryCode;
use Faker\Generator as Faker;

$factory->define(PhoneCountryCode::class, function (Faker $faker) {
    return [
        'name' => $faker->country,
        'code' => '+' . $faker->numberBetween(2, 999),
    ];
});
