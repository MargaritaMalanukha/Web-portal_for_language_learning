<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            'ownerId' => 1
        ]);
        DB::table('rooms')->insert([
            'ownerId' => 1
        ]);
        DB::table('rooms')->insert([
            'ownerId' => 2
        ]);
        DB::table('rooms')->insert([
            'ownerId' => 2
        ]);

    }
}
