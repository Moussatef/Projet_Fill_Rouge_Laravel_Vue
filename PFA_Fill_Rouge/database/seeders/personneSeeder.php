<?php

namespace Database\Seeders;

use App\Models\Campus;
use App\Models\Personne;
use Illuminate\Database\Seeder;

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
        $first_name=$faker->firstName();
        $last_name=$faker->lastName();
        $personne=[
            'prenom'=>$first_name,
            'nom'=>$last_name,
            'telephon'=>$faker->phoneNumber(),
            'date_N'=>$faker->date(),
            'adresse'=>$faker->address(),
            'email'=>$faker->email(),
            'github'=>$first_name.' '.$last_name,
            'linkedin'=>$first_name.' '.$last_name,
            'facebook'=>$first_name.' '.$last_name,
            'instagram'=>$first_name.' '.$last_name,
            'password'=>bcrypt('azerty'),
            'img'=>null,
            'cover'=>null,
            'bio'=>$faker->paragraph,
            'validation'=>$faker->randomElement([0,1]),
            'campus_id'=>$faker->randomElement(Campus::select('id')->get()),
        ];
        for($i=0;$i<=10;$i++){
         Personne::create($personne);
        }
    }
}
