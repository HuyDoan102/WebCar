<?php

use Illuminate\Database\Seeder;
use App\Admin;
use Faker\Factory as Faker;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        Admin::truncate();

        Admin::create([
            'email' => 'admin@admin.com',
            'password' => bcrypt('123123'),
            'name' => 'Administrator',
            'dob'   =>$faker->date($format = 'Y-m-d', $max = 'now'),
            'address' => $faker->address,
            'phone' => $faker->e164PhoneNumber,
        ]);
        factory(Admin::class, 10)->create();
    }
}
