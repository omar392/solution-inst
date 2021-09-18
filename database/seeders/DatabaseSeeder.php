<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(AdminSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(CounterSeeder::class);
        $this->call(SeoSeeder::class);
        \App\Models\Slider::factory(5)->create();
        \App\Models\Customer::factory(15)->create();
        \App\Models\Course::factory(30)->create();
        \App\Models\Gallary::factory(50)->create();
        \App\Models\Bolg::factory(30)->create();
        \App\Models\Advert::factory(30)->create();
        
    }
}
