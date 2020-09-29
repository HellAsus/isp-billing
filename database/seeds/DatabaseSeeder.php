<?php

use App\Models\{Tariff, Shaper, Customer, LocationHouse, CustomerLocation};
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
        $this->call(TariffSeeder::class);
        $this->call(ShaperSeeder::class);
        $this->call(LocalitySeeder::class);

        $tarifsIds = Tariff::pluck('id')->toArray();
        $shapersIds = Shaper::pluck('id')->toArray();

        factory(Customer::class, 20)->make()->each(function ($customer) use ($tarifsIds, $shapersIds) {
            $customer->tariff_id = array_rand($tarifsIds);
            $customer->shaper_id = array_rand($shapersIds);
            $customer->save();
        });

        $housesIds = LocationHouse::pluck('id')->toArray();

        Customer::all()->each(function ($customer) use ($housesIds) {
            $customer->location()->createMany(factory(CustomerLocation::class, 1)
            ->make()
            ->each(function ($location) use ($customer, $housesIds) {
                $location->customer_id = $customer->id;
                $location->location_houses_id = array_rand($housesIds);
            })->toArray());
        });

        $this->call(PhonesSeeder::class);
        $this->call(SessionSeeder::class);
        $this->call(InvoiceSeeder::class);
        $this->call(StatisticsSeeder::class);
    }
}
