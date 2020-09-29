<?php

use App\Models\{LocationLocality, LocationDistrict, LocationStreet, LocationHouse};
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

        LocationDistrict::all()->each(function ($district) {
            $district->streets()->saveMany(factory(LocationStreet::class, 5)->make());
        });

        LocationStreet::all()->each(function ($street) {
            $street->houses()->saveMany(factory(LocationHouse::class, 5)->make());
        });
    }
}
