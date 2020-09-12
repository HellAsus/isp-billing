<?php

use Illuminate\Database\Seeder;

class LocationDistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\District::class, 5)->create();
    }
}
