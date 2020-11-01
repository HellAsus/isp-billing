<?php

use Illuminate\Database\Seeder;
use App\Models\{Tariff, TariffRule};

class TariffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Tariff::class, 10)->create();

        $tariffs = Tariff::all();
        factory(TariffRule::class, $tariffs->count()*2)->make()
        ->each(function ($rule) use ($tariffs) {
            $rule->tariff_id = $tariffs->random()->id;
            $rule->next_tariff_id = $tariffs->random()->id;
            $rule->save();
        });

    }
}
