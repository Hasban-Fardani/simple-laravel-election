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
            'name' => 'admin',
            'email' => 'admin@localhost.test',
            'role' => 'admin'
        ]);

        User::factory()->create([
            'name' => 'user',
            'email' => 'user@localhost.test',
            'role' => 'user'
        ]);

        User::factory()->create([
            'name' => 'user2',
            'email' => 'user2@localhost.test',
            'role' => 'user'
        ]);
    }
}
