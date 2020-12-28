<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'Margarita', 'email' => 'margomalanuha@gmail.com',
                'password' => 'y', 'usertype' => '1', 'level' => '4', 'subscriptionType' => '1']
        ]);
        DB::table('users')->insert([
            ['name' => 'John', 'email' => 'example@gmail.com',
                'password' => 'y', 'usertype' => '2', 'level' => '6', 'subscriptionType' => '1',
                'creditCardNum' => '1234567890123456']
        ]);
    }
}
