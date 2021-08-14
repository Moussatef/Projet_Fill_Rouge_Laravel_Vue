<?php

namespace Database\Seeders;

use App\Models\Campus;
use App\Models\Personne;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class personneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=\Faker\Factory::create();
        for($i=0;$i< 10;$i++){
            $first_name=strtolower(rtrim($faker->firstName,"'"));
            $last_name=strtolower(rtrim($faker->lastName,"'"));
            $personne=[
                'prenom'=>$first_name,
                'nom'=>$last_name,
                'telephon'=>$faker->phoneNumber,
                'date_N'=>$faker->date,
                'adresse'=>$faker->address,
                'email'=>$first_name.'_'.$last_name.'@youcode.yc',
                'github'=>$first_name.' '.$last_name,
                'linkedin'=>$first_name.' '.$last_name,
                'facebook'=>$first_name.' '.$last_name,
                'instagram'=>$first_name.' '.$last_name,
                'password'=>bcrypt('azerty'),
                'img'=>explode('/storage/image/',$faker->randomElement(glob(public_path().'/storage/image/personne_*')))[1],
                'cover'=>null,
                'bio'=>$faker->paragraph(1),
                'validation'=>$faker->randomElement([0,1]),
                'campus_id'=>$faker->randomElement(Campus::pluck('id')->all()),
            ];
         Personne::create($personne);
        }
    }
}
