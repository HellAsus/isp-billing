<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    $name = explode(' ',$faker->name);
    return [
        'username' => $faker->unique()->userName,
        'password' => $faker->unique()->password,
        'last_name' => $faker->lastName,
        'first_name' => $faker->firstName,
        'patronymic' => $name[2],
        'email' => $faker->unique()->email,
        'deposit' => $faker->numberBetween(0, 5500),
        'credit' => $faker->numberBetween(0, 5500),
        'static_ip' => $faker->ipv4,
        'description' => $faker->text(100),
    ];
});
