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
            ['description' => 'common', 'descriptionRU' => 'обычный']
        );
        DB::table('user_types')->insert(
            ['description' => 'native', 'descriptionRU' => 'нэйтив']
        );
        DB::table('user_types')->insert(
            ['description' => 'admin', 'descriptionRU' => 'админ']
        );
    }
}
