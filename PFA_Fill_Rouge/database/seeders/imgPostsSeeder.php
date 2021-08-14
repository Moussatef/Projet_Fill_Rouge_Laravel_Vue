<?php

namespace Database\Seeders;

use App\Models\ImgPost;
use App\Models\Post;
use Illuminate\Database\Seeder;

class imgPostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=\Faker\Factory::create();
        $img_posts=[];
        for ($i=0;$i<200;$i++) {
            array_push($img_posts, [
                'post_id' => $faker->unique()->randomElement(Post::pluck('id')->all()),
                'path'=>explode('/storage/postImage/',$faker->randomElement(glob(public_path().'/storage/postImage/*')))[1]
            ]);
        }
        ImgPost::insert($img_posts);
    }
}
