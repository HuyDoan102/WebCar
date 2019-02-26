<?php

use Faker\Generator as Faker;

$factory->define(App\Oreder_product::class, function (Faker $faker) {
    return [
        'product_id' => App\Product::all()->random()->id,
        'order_id' => App\Oreder::all()->random()->id,
        'quantity' =>numberBetween(1, 20),
    ];
});
