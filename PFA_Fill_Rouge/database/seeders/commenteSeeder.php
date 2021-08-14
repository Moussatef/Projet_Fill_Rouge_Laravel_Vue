<?php

namespace Database\Seeders;

use App\Models\Commente;
use App\Models\Personne;
use App\Models\Post;
use Illuminate\Database\Seeder;

class commenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=\Faker\Factory::create();
        $commentes=[];
        for ($i=0;$i<1937;$i++){
            array_push( $commentes,[
                'personne_id'=>$faker->randomElement(Personne::pluck('id')->all()),
                'post_id'=>$faker->randomElement(Post::pluck('id')->all()),
                'comment'=>$faker->paragraph(1),
                'created_at'=>now(),
                'updated_at'=>now(),
            ]);
        }
        Commente::insert($commentes);
    }
}
