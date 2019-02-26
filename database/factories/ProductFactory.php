<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'category_id' => App\Role::all()->random()->id,
        'phone' => $faker->e164PhoneNumber,
        'description' => $faker->text,
        'status' => $faker->numberBetween(1, 3),
        'image' =>$faker->imageUrl(500, 500, 'transport'),

    ];
});
