<?php

namespace Database\Seeders;

use App\Models\Apprenant;
use App\Models\Personne;
use Illuminate\Database\Seeder;

class apprenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $personnes=Personne::limit(10)->get();
        $apprenants=[];
        foreach ($personnes as $personne)
            array_push($apprenants,['personne_id'=>$personne->id]);

        Apprenant::insert($apprenants);
    }
}
