<?php

namespace Database\Seeders;

use App\Models\Like;
use App\Models\Personne;
use App\Models\Post;
use Illuminate\Database\Seeder;

class likeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=\Faker\Factory::create();
        $likes=[];
        for ($i=0;$i<5000;$i++){
            array_push($likes,[
                'personne_id'=>$faker->randomElement(Personne::pluck('id')->all()),
                'post_id'=>$faker->randomElement(Post::pluck('id')->all())
            ]);
        }
            Like::insert(array_unique($likes,SORT_REGULAR));
    }
}
