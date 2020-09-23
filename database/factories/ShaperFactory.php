<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Shaper;
use Faker\Generator as Faker;

$factory->define(Shaper::class, function (Faker $faker) {
    $speed = $faker->numberBetween(10, 100);
    return [
        'name' => $faker->word,
        'speed_in' => $speed,
        'speed_out' => $speed,
    ];
});
