<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([

            'name'=>'Super Admin',
            'email'=>'solution_maker@admin.com',
            'password'=>bcrypt('123123'),

        ]);
    }
}
