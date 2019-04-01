<?php

use Illuminate\Database\Seeder;
use App\Supplier;

class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Supplier::truncate();
        factory(Supplier::class, 5)->create();
    }
}
