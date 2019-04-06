<?php

use Illuminate\Database\Seeder;
use App\Customer;
use Faker\Factory as Faker;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        Customer::truncate();
        Customer::create([
            'email' => 'user@user.com',
            'password' => bcrypt('123123'),
            'name' => 'User',
            'dob'   => $faker->date($format = 'Y-m-d', $max = 'now'),
            'address' => $faker->address,
            'phone' => $faker->e164PhoneNumber
        ]);
        factory(Customer::class, 50)->create();
    }
}
