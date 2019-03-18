<?php

use Faker\Generator as Faker;

$factory->define(App\Order::class, function (Faker $faker) {
    return [
        'customer_id' => App\Customer::all()->random()->id,
        'price' => $faker->numberBetween(100000000, 999999999),
        'date_of_sell' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'status' => $faker->numberBetween(1, 4),
    ];
});
