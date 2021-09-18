<?php

namespace Database\Seeders;

use App\Models\Seo;
use Illuminate\Database\Seeder;

class SeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Seo::create([
            'key_ar'=>'معهد صناع الحلول للتدريب ',
            'key_en'=>'solution makers inistitute for trainning',
            'site_ar'=>'معهد صناع الحلول للتدريب ',
            'site_en'=>'solution makers inistitute for trainning',
            'description_ar'=>'معهد صناع الحلول للتدريب ',
            'description_en'=>'solution makers inistitute for trainning',
        ]);
    }
}
