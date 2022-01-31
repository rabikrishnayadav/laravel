<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//importing the db file
use Illuminate\Support\Facades\DB;

// importing the Str file
use Illuminate\Support\Str;

class MembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // function for inserting the dummy data in database inside members table
        DB::table('members')->insert([
            'name'=>Str::random(5),
            'email'=>Str::random(3).'@gmail.com',
            'address'=>Str::random(7),
            'contact'=>Str::random(10),
            'group_id'=>2
        ]);
    }
}
