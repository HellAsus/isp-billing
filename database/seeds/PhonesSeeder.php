<?php

use App\Models\{PhoneCountryCode, PhoneOperatorCode, CustomerPhone, Customer};
use Illuminate\Database\Seeder;

class PhonesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(PhoneCountryCode::class, 10)->create()->each(function ($country) {
            $country->operators()->saveMany(factory(PhoneOperatorCode::class, rand(1,3))->make());
        });

        $customers = Customer::all();
        $countrys = PhoneCountryCode::all();

        factory(CustomerPhone::class, $customers->count())->make()->each(function ($phone) use ($customers, $countrys) {
            $phone->customer_id = $customers->random()->id;
            $phone->phone_operator_code_id = $countrys->random()->operators()->first()->id;
            $phone->save();
        });



    }
}
