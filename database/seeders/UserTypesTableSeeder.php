<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_types')->insert(
            ['description' => 'common']
        );
        DB::table('user_types')->insert(
            ['description' => 'native']
        );
        DB::table('user_types')->insert(
            ['description' => 'admin']
        );
    }
}
