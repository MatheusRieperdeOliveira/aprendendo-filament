<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@php.com',
            'password' => bcrypt('741852'),
        ]);
        User::factory()->create([
            'name' => 'Matheus',
            'email' => 'matheus@php.com',
            'password' => bcrypt('741852'),
        ]);
    }
}
