<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'name' => 'Karona Srun',
            'email' => 'karona@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        \App\Models\SystemInfo::create([
            'web_app' => 'កម្មវិធីកត់ត្រាបន្ទប់ជួល',
            'exchange_riel' => 4000,
            'water_cost' => 350,
            'trash_cost' => 4000,
            'wifi_cost' => 1200,
            'parking_cost' => 50000,
            'option_parking' => 0,
            'option_wifi' => 0,
            'description' => 'Descrription of កម្មវិធីកត់ត្រាបន្ទប់ជួល',
        ]);
    }
}
