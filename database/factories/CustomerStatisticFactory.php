<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

namespace Carbon;
use App\Models\CustomerStatistics;
use Faker\Generator as Faker;

$factory->define(CustomerStatistics::class, function (Faker $faker) {
    $start_time = Carbon::now()->subSeconds(rand(50**2, 30**4));
    $end_time = Carbon::now()->addSeconds(rand(50**2, 30**4));

    return [
        'bytes_in' => $faker->randomNumber(rand(3, 9)),
        'bytes_out' => $faker->randomNumber(rand(3, 9)),
        'start_time' => $start_time->format('Y-m-d H:i:s'),
        'end_time' => $end_time->format('Y-m-d H:i:s'),
        'duration' => $start_time->diffInSeconds($end_time),
        'ip' => $faker->ipv4,
    ];
});
