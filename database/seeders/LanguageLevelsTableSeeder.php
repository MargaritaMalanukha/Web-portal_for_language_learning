<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageLevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('language_levels')->insert(
            ['description' => 'A1', 'numericValue' => '1']
        );
        DB::table('language_levels')->insert(
            ['description' => 'A2', 'numericValue' => '2']
        );
        DB::table('language_levels')->insert(
            ['description' => 'B1', 'numericValue' => '3']
        );
        DB::table('language_levels')->insert(
            ['description' => 'B2', 'numericValue' => '4']
        );
        DB::table('language_levels')->insert(
            ['description' => 'C1', 'numericValue' => '5']
        );
        DB::table('language_levels')->insert(
            ['description' => 'C2', 'numericValue' => '6']
        );
    }
}
