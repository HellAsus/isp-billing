<?php
use App\Models\{Customer, Invoice};
use Illuminate\Database\Seeder;

class InvoiceSeeder extends Seeder
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
                $customer->invoices()->saveMany(factory(Invoice::class, rand(1,10))->make());
            }
        });
    }
}
