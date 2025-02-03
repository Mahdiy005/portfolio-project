<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(! count(User::all())) {
            User::create([
                'name' => '005',
                'email' => '005@mail.com',
                'password' => '1234567890',
            ]);
        }
    }
}
