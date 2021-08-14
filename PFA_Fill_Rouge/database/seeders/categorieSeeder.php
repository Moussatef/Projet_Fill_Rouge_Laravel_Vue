<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Seeder;

class categorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $labels=[
            'JavaScript',
            'Python',
            'Java',
            'PHP',
            'C#',
            'C++',
            'TypeScript',
            'Shell',
            'C',
            'Ruby',
            'Flutter',
            'NodeJs',
            'Jquery',
            'Ajax'
        ];
        $categories=[];
        foreach ($labels as $label){
            array_push($categories,['libelle'=>$label]);
        }
        Categorie::insert($categories);
    }
}
