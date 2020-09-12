<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'username' => $faker->unique()->userName,
        'password' => $faker->unique()->password,
        'full_name' => $faker->name,
        'email' => $faker->unique()->email,
        'deposit' => $faker->numberBetween(0, 5500),
        'credit' => $faker->numberBetween(0, 5500),
        'state' => $faker->numberBetween(0, 1),
        'hide' => $faker->numberBetween(0, 1),
        'ip' => $faker->ipv4,
        'description' => $faker->text(100),
    ];
});
