<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Admin::factory(10)->create();

        \App\Models\Admin::factory()->create([
            'first_name' => 'admin',
            'last_name' => 'admin',
            'user_name' => 'admin',
            'password' => Hash::make('123123123'),
            'phone' => '0987654321',
        ]);
    }
}
