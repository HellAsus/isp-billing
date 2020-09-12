<?php

use Illuminate\Database\Seeder;

class LocationHouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\House::class, 10)->create();
    }
}
