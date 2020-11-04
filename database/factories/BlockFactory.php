<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

namespace Carbon;
use App\Models\CustomerBlock;
use Faker\Generator as Faker;

$factory->define(CustomerBlock::class, function (Faker $faker) {
    $lens = $faker->numberBetween(1,29);
    $date = Carbon::now()->subHours(rand(1,72));
    return [
        'lens' => $lens,
        'increments' => $lens,
        'description' => $faker->text(100),
        'unblock_date' => $date->addDays($lens)->format('Y-m-d H:i:s'),
    ];
});
