<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\PostProfil;
use Illuminate\Database\Seeder;

class postProfilsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=\Faker\Factory::create();
        $posts=Post::limit(400)->get();
        $postProfils=[];
        foreach ($posts as $post)  {
            array_push($postProfils, [
                'post_id' => $post->id
            ]);
        }
        PostProfil::insert($postProfils);
    }
}
