<?php

namespace Database\Seeders;

use App\Models\Campus;
use Illuminate\Database\Seeder;

class campusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campuses = [
            [
                'campus_nom' => 'YouCode Safi',
                'ville' => 'Safi',
                'adresse' => 'Safi plato hassan II',
                'fex' => '056678855',
                'email' => 'yc.s@gmail.com',
                'password' => '$2y$10$hezwm3IIbvtmB8EIm4JkKukxi0iSKXnUN/aNGkLGB1PEtCkpsOTgC',
                'github' => 'youcode',
                'linkedin' => 'youcode',
                'facebook' => 'youcode',
                'instagram' => 'youcode_school',
                'img' => 'youcode_safi.jpg',
                'cover' => '',
            ],
            [
                'campus_nom' => 'YouCode Youssoufia',
                'ville' => 'Youssoufia',
                'adresse' => 'Youssoufia bollvard hassan II',
                'fex' => '056678855',
                'email' => 'yc.y@gmail.com',
                'password' => '$2y$10$hezwm3IIbvtmB8EIm4JkKukxi0iSKXnUN/aNGkLGB1PEtCkpsOTgC',
                'github' => 'youcode',
                'linkedin' => 'youcode',
                'facebook' => 'youcode',
                'instagram' => 'youcode_school',
                'img' => 'youcode_youssofia.jpg',
                'cover' => '',
            ]
        ];

        Campus::insert($campuses);
    }
}
