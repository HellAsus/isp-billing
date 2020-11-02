<?php

use App\Models\{Customer, CustomerBlock};
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
        factory(CustomerBlock::class, $customers->count()*2)->make()
        ->each(function ($block) use ($customers) {
            $block->customer_id = $customers->random()->id;
            $block->save();
        });
    }
}
