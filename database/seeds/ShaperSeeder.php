<?php

use Illuminate\Database\Seeder;

class ShaperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Shaper::class, 15)->create();
    }
}
