<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTypesTableSeeder::class);
        $this->call(SubscriptionTypesTableSeeder::class);
        $this->call(LanguageLevelsTableSeeder::class);
        $this->call(TopicsTableSeeder::class);
        $this->call(TestQuestionsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(RoomsTableSeeder::class);
        $this->call(ParticipantsTableSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
