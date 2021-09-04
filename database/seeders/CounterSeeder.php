<?php

namespace Database\Seeders;

use App\Models\Counter;
use Illuminate\Database\Seeder;

class CounterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Counter::create([
            'team'=>'20',
            'courses'=>'55',
            'years'=>'15',
            'trainers'=>'2500',
        ]);
    }
}
