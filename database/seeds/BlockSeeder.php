<?php

use App\Models\{Customer, Block};
use Illuminate\Database\Seeder;

class BlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customers = Customer::all();
        factory(Block::class, 30)->make()->each(function ($block) use ($customers) {
            
        });
    }
}
