<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

namespace Carbon;
use App\Models\Session;
use Faker\Generator as Faker;

$factory->define(Session::class, function (Faker $faker) {
    $nasIp = ['192.168.1.1', '192.168.2.1', '192.168.3.1'];
    return [
        'nas_ip' => $nasIp[rand(0,2)],
        'customer_ip' => $faker->ipv4,
        'customer_hw' => $faker->macAddress,
        'bytes_in' => $faker->randomNumber(rand(3,9)),
        'bytes_out' => $faker->randomNumber(rand(3,9)),
        'expired_date' => Carbon::now()->subHours(rand(10,300))->timestamp,
        'session_time' => Carbon::now()->subHours(rand(10,300))->timestamp,
        'session_start' => Carbon::now()->subHours(rand(1,90))->format('Y-m-d H:i:s'),
        'alive' => Carbon::now()->timestamp,
        'drop_session' => rand(0,1),
    ];
});
