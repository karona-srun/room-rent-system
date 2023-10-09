<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\SystemInfo::create([
            'web_app' => 'System',
            'exchange_riel' => 4000,
            'water_cost' => 350,
            'trash_cost' => 4000,
            'wifi_cost' => 1200,
            'parking_cost' => 50000,
            'description' => 'Descrription of system',
        ]);
    }
}
