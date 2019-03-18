<?php

use Illuminate\Database\Seeder;
use App\Order;
use Faker\Factory as Faker;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        Order::truncate();
        $orders = factory(Order::class, 100)->create();

        foreach(range(1, count($orders)) as $index)
        {
            \DB::table('order_product')->insert([
                'order_id' => Order::all()->random()->id,
                'product_id' => \App\Product::all()->random()->id,
                'quantity' => $faker->numberBetween(1, 10),
            ]);
        }
    }
}
