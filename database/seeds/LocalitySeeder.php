<?php

use App\Models\{LocationLocality, LocationDistrict};
use Illuminate\Database\Seeder;

class LocalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(LocationLocality::class, 15)->create()->each(function ($locality) {
            $locality->districts()->saveMany(factory(LocationDistrict::class, 5)->make());
        });
    }
}
