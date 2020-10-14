<?php

use App\User;
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
        User::create([
            'name' => 'admin',
            'email' => 'admin',
            'email_verified_at' => now(),
            'password' => bcrypt('admin'), // password
        ]);

        $this->call(TariffSeeder::class);
        $this->call(ShaperSeeder::class);
        $this->call(LocalitySeeder::class);

        $tarifs = Tariff::all();
        $shapers = Shaper::all();

        factory(Customer::class, 20)->make()->each(function ($customer) use ($tarifs, $shapers) {
            $customer->tariff_id = $tarifs->random()->id;
            $customer->shaper_id = $shapers->random()->id;
            $customer->save();
        });

        $houses = LocationHouse::all();

        Customer::all()->each(function ($customer) use ($houses) {
            $customer->location()->saveMany(factory(CustomerLocation::class, 1)->make()
            ->each(function ($location) use ($customer, $houses) {
                $location->customer_id = $customer->id;
                $location->location_house_id = $houses->random()->id;
            }));
        });

        $this->call(PhonesSeeder::class);
        $this->call(SessionSeeder::class);
        $this->call(InvoiceSeeder::class);
        $this->call(StatisticsSeeder::class);
    }
}
