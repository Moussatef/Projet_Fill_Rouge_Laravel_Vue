<?php

namespace Database\Seeders;

use App\Models\BoxMessage;
use Illuminate\Database\Seeder;

class messageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=\Faker\Factory::create();
        $message=[];
        for ($i=0;$i<50;$i++){
            array_push( $message,[
                'complet_nom'=>$faker->name(),
                'email'=>$faker->safeEmail(),
                'body_message'=>$faker->paragraph(1),
                'created_at'=>now(),
                'updated_at'=>now(),
            ]);
        }
        BoxMessage::insert($message);
    }
}
