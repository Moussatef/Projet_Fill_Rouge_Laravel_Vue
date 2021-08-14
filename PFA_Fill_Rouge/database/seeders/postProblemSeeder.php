<?php

namespace Database\Seeders;

use App\Models\Categorie;
use App\Models\Post;
use App\Models\PostProblem;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Seeder;

class postProblemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @param Builder
     * @return void
     */
    public function run()
    {
        $faker=\Faker\Factory::create();
        $posts=Post::where('id','>',400)->get();
        $postProblems=[];
        foreach ($posts as $post)  {
            array_push($postProblems, [
                'post_id' => $post->id,
                'categorie_id'=>$faker->randomElement(Categorie::pluck('id')->all())
            ]);
        }
        PostProblem::insert($postProblems);
    }
}
