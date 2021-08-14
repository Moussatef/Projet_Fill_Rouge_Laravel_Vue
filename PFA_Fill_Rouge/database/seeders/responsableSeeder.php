<?php

namespace Database\Seeders;

use App\Models\Personne;
use App\Models\Responsable;
use Illuminate\Database\Seeder;

class responsableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $personnes=Personne::where('id','>','10')->get();
        $responsablea=[];
        foreach ($personnes as $personne)
            array_push($responsablea,['personne_id'=>$personne->id]);

        Responsable::insert($responsablea);
    }
}
