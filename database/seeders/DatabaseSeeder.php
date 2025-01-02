<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $faker = Faker::create();


        // Insert 50 fake users into the users table

        for ($i = 0; $i < 50; $i++) {

            DB::table('tasks')->insert([

                'description' => $faker->numberBetween(1, 50),
            ]);

        }
    }
}
