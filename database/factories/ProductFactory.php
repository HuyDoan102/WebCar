<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'supplier_id' => App\Supplier::all()->random()->id,
        'name' => $faker->name,
        'phone' => $faker->e164PhoneNumber,
        'description' => $faker->text,
        'status' => $faker->numberBetween(1, 3),
        'image' =>$faker->imageUrl(200, 200, 'transport'),

    ];
});
