<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // seeder use for add data in table
        $customer = new Customer;
        $customer->user_name = "Rabi Kr Yadav";
        $customer->email = "mail@rabi.com";
        $customer->password = '123';
        $customer->gender = 'M';
        $customer->address = 'bangalore';
        $customer->state = 'karnatka';
        $customer->country = 'india';
        $customer->dob = now();
        $customer->save();
        // return redirect('/customer/view');
    }
}
