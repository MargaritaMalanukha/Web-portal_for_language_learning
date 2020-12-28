<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('topics')->insert(
            ['description' => 'baseWords', 'relatedLevel' => '1']
        );
        DB::table('topics')->insert(
            ['description' => 'Alfabet', 'relatedLevel' => '1']
        );
        DB::table('topics')->insert(
            ['description' => 'IrregularWords', 'relatedLevel' => '3']
        );
        DB::table('topics')->insert(
            ['description' => 'PresentSimple', 'relatedLevel' => '2']
        );
        DB::table('topics')->insert(
            ['description' => 'PastSimple', 'relatedLevel' => '2']
        );
        DB::table('topics')->insert(
            ['description' => 'FutureTenses', 'relatedLevel' => '4']
        );

        DB::table('topics')->insert(
            ['description' => 'GreatBritainHistoryEvents', 'relatedLevel'=> '6']
        );
        DB::table('topics')->insert(
            ['description' => 'FutureSimpleInThePast', 'relatedLevel' => '5']
        );
        DB::table('topics')->insert(
            ['description' => 'Conditionals', 'relatedLevel' => '4']
        );
        DB::table('topics')->insert(
            ['description' => 'Weather', 'relatedLevel' => '3']
        );
        DB::table('topics')->insert(
            ['description' => 'PastPerfectContinuous', 'relatedLevel' => '5']
        );
        DB::table('topics')->insert(
            ['description' => 'GreatBritainCulture', 'relatedLevel' => '6']
        );
    }
}
