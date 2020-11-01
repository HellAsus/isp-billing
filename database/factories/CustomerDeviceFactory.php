<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\CustomerDevice;
use Faker\Generator as Faker;

$factory->define(CustomerDevice::class, function (Faker $faker) {
    return [
        'address' => $faker->macAddress,
    ];
});
