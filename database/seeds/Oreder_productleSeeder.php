<?php

use Illuminate\Database\Seeder;

class Oreder_productleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Oreder_product::class, 100)->create();
    }
}
