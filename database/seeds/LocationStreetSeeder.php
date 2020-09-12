<?php

use Illuminate\Database\Seeder;

class LocationStreetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Street::class, 15)->create();
    }
}
