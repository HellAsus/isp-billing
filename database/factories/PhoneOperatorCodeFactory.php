<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\PhoneOperatorCode;
use Faker\Generator as Faker;

$factory->define(PhoneOperatorCode::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'code' => '0' . $faker->numberBetween(11, 99),
    ];
});
