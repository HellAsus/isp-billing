<?php

use App\Models\Shaper;
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
        factory(Shaper::class, 15)->create();
    }
}
