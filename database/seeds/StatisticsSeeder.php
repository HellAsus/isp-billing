<?php

use App\Models\{CustomerStatistics, Tariff, Customer};
use Illuminate\Database\Seeder;

class StatisticsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customers = Customer::all();
        $tariffs = Tariff::all();

        factory(CustomerStatistics::class, $customers->count()*3)->make()
        ->each(function ($statistic) use ($customers, $tariffs) {
            $statistic->customer_id = $customers->random()->id;
            $statistic->tariff_id = $tariffs->random()->id;
            $statistic->save();
        });
    }
}
