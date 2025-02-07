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
        if(! count(Setting::all())) {
            Setting::create([
                'address' => 'Cairo, 22 Streer',
                'phone' => '0123683628',
                'email' => 'mo@mail.com',
                'facebook' => 'facebook.com?user=mohamed-mahdi',
                'twitter' => 'twitter.com?user=mohamed-mahdi',
                'linkedin' => 'linkedin.com?user=mohamed-mahdi',
                'youtube' => 'youtube.com?user=mohamed-mahdi',
                'instgram' => 'instgram.com?user=mohamed-mahdi',
            ]);
        }
    }
}
