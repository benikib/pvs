<?php

namespace Database\Seeders;

use App\Models\Juries;
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
            'name' => 'Juries2',
            'email' => 'juries2@gmail.com',
        ]);
        Juries::factory()->create([
            'effectif' => '12',
            'user_id' => 1,
            'promotion_id' => 1,
        ]);
    }
}