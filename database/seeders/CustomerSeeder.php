<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
use Faker\Factory as Faker;
class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // faker for add many data in database
        $faker = Faker::create();
        $customer = new Customer;
        $customer->user_name = $faker->name;
        $customer->email = $faker->email;
        $customer->password = $faker->password;
        $customer->gender = 'O';
        $customer->address = $faker->address;
        $customer->state = $faker->state;
        $customer->country = $faker->country;
        $customer->dob = $faker->date;
        $customer->save();
        // return redirect('/customer/view');
    }
}
