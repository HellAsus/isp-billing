<?php
use App\Models\{Customer, Session};
use Illuminate\Database\Seeder;

class SessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::all()->each(function ($customer) {
            if (rand(0,1)) {
                $customer->session()->saveMany(factory(Session::class, 1)->make());
            }
        });

    }
}
