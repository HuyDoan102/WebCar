<?php

use Faker\Generator as Faker;

$factory->define(App\Admin::class, function (Faker $faker) {
    return [
        'email' => $faker->email,
        'password' => bcrypt('123123'),
        'name' => $faker->name,
        'dob'   =>$faker->date($format = 'Y-m-d', $max = 'now'),
        'address' => $faker->address,
        'phone' => $faker->e164PhoneNumber,
    ];
});
