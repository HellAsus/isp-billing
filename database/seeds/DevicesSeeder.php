<?php

use App\Models\{CustomerDevice, Customer};
use Illuminate\Database\Seeder;

class DevicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customers = Customer::all();

        factory(CustomerDevice::class, $customers->count())->make()
        ->each(function ($device) use ($customers) {
            $device->customer_id = $customers->random()->id;
            $device->save();
        });



    }
}
