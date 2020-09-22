<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Block;
use Faker\Generator as Faker;

$factory->define(Block::class, function (Faker $faker) {
    return [
        'lens' => $faker->numberBetween(1,29),
        'description' => $faker->text(100),
        'state' => $faker->numberBetween(0,1),
    ];
});
