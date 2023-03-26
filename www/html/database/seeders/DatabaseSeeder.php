<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();


        $team =\App\Models\Team::factory()->create([
            'name' => 'admins',
            'user_id' => 1,
        ]);

        print_r($team);

         \App\Models\User::factory()->create([
             'name' => 'Test User',
             'email' => 'qotsa@op.pl',
             'password' => bcrypt('password')
         ]);
    }
}
