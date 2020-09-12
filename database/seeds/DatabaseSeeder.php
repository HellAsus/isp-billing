<?php

use App\Models\{Tariff, Shaper, Customer, LocationDistrict, LocationStreet};
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(TariffSeeder::class);
        //$this->call(ShaperSeeder::class);
        /* $this->call(LocalitySeeder::class);

        $districts = LocationDistrict::all();
        $districts->streets()->saveMany()->each(factory(LocationStreet::class, 5)->create()); */

        /* $tarifsIds = Tariff::pluck('id')->toArray();
        $shapersIds = Shaper::pluck('id')->toArray();

        $customers = factory(Customer::class, 20)->make()->each(function ($customer) use ($tarifsIds, $shapersIds) {
            $customer->tariff_id = array_rand($tarifsIds);
            $customer->shaper_id = array_rand($shapersIds);
        })->toArray();

        Customer::insert($customers); */



    }
}
