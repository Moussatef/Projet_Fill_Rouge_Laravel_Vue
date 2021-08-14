<?php

namespace Database\Seeders;

use App\Models\Personne;
use App\Models\Post;
use Illuminate\Database\Seeder;

class postSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=\Faker\Factory::create();
        $posts=[];
        for ($i=0;$i<500;$i++){
            array_push( $posts,[
                'personne_id'=>$faker->randomElement(Personne::pluck('id')->all()),
                'titre'=>join(' ',$faker->words(2)),
                'description'=>$faker->paragraph(1),
                'public'=>$faker->randomElement([0,1]),
                'created_at'=>now(),
                'updated_at'=>now(),
            ]);
        }
        Post::insert($posts);
    }
}
