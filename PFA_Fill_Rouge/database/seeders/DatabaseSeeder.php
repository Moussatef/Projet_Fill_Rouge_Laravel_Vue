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
        $this->call([
            adminSeeder::class,
            campusSeeder::class,
            personneSeeder::class,
            apprenantSeeder::class,
            categorieSeeder::class,
            postSeeder::class,
            postProfilsSeeder::class,
            postProblemSeeder::class,
            imgPostsSeeder::class,
            commenteSeeder::class,
            likeSeeder::class,
            responsableSeeder::class
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
