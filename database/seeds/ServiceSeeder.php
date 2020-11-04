<?php

use App\Models\{Service, Customer};
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Service::class, 5)->create();
        $services = Service::all();
        $customers = Customer::all();
        $customers->each(function ($customer) use ($services) {
            if (rand(0,1)) {
                $customer->services()->attach($services->random());
            }
        });
    }
}
