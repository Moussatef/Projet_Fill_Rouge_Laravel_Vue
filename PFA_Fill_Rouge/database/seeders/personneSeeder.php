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
        $first_names = [
            'hamza',
            'khadija',
            'fatima',
            'simo',
            'khaid',
            'maggie',
            'taddeo',
            'loria',
            'lyndsey',
            'dall',
            'leeanne',
            'pamelina',
            'opaline',
            'keelia',
            'fernando',
        ];
        $last_names = [
            'troutbeck',
            'scholling',
            'gumery',
            'bear',
            'cogdon',
            'croxford',
            'haslen',
            'bruineman',
            'oppery',
            'averill',
            'geerdts',
            'philpotts',
            'gally',
            'ible',
            'das',
        ];
        for($i=0;$i< 15;$i++){
            $first_name=$first_names[$i];
            $last_name=$last_names[$i];
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
                'img'=>explode('/storage/image/',$faker->unique()->randomElement(glob(public_path().'/storage/image/personne_*')))[1],
                'cover'=>'cover.jpg',
                'bio'=>$faker->paragraph(1),
                'validation'=>$faker->randomElement([0,1]),
                'campus_id'=>$faker->randomElement(Campus::pluck('id')->all()),
            ];
         Personne::create($personne);
        }
    }
}
