<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Invoice;
use Faker\Generator as Faker;

$factory->define(Invoice::class, function (Faker $faker) {
    return [
        'user_id' => $faker->randomNumber(5),
        'deposit' => $faker->randomFloat(2,50,1000),
        'credit' => $faker->randomFloat(2,10,100),
        'prev_deposit' => $faker->randomFloat(2,50,1000),
        'prev_credit' => $faker->randomFloat(2,10,100),
        'description' => $faker->text(100),
    ];
});
