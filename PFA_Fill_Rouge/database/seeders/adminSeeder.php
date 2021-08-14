<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin=[
            'admin_name'=>'moussetef othman',
            'email'=>'moussetef@youcode.yc',
            'password'=>bcrypt('azerty'),
        ];
        Admin::insert($admin);
    }
}
