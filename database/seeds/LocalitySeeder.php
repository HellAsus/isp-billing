<?php

use App\Models\{LocationLocality, LocationDistrict, LocationStreet, LocationHouse,
                LocationLocalityType, LocationStreetType, LocationHouseType};
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

        LocationLocalityType::insert([
            ['name' => 'г.'],
            ['name' => 'пос.'],
            ['name' => 'пгт.'],
            ['name' => 'с.'],
        ]);

        LocationStreetType::insert([
            ['name' => 'ул.'],
            ['name' => 'пер.'],
            ['name' => 'кв.'],
            ['name' => 'пл.'],
        ]);

        LocationHouseType::insert([
            ['name' => 'общеж.'],
            ['name' => 'коопер.'],
        ]);

        $localityTypes = LocationLocalityType::all();

        factory(LocationLocality::class, 15)->create()->each(function ($locality) use ($localityTypes) {
            $locality->districts()->saveMany(factory(LocationDistrict::class, 5)->make());
            $locality->location_locality_types_id = $localityTypes->random()->id;
            $locality->save();
        });

        $streetTypes = LocationStreetType::all();

        LocationDistrict::all()->each(function ($district) use ($streetTypes) {
            $district->streets()->saveMany(factory(LocationStreet::class, 5)->make()
            ->each(function ($street) use ($streetTypes) {
                $street->location_street_types_id = $streetTypes->random()->id;
            }));
        });

        $houseTypes = LocationHouseType::all();

        LocationStreet::all()->each(function ($street) use ($houseTypes) {
            $street->houses()->saveMany(factory(LocationHouse::class, 5)->make()
            ->each(function ($house) use ($houseTypes) {
                if (rand(0,1)) {
                    $house->location_house_types_id = $houseTypes->random()->id;
                }
            }));
        });
    }
}
