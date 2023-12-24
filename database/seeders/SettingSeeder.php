<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::updateOrCreate(['email'=>'info@example.com'],[
            'name'=> 'DGital',
            'address'=> '123 Street, New York, USA',
            'phone'=> '+012 345 67890',
        ]);
    }
}
