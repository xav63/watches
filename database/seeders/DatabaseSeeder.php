<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Watch;
use App\Models\Complication;
use Illuminate\Database\Seeder;
use Database\Seeders\WatchSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => '$2y$10$oEL6aWgikoboWV3m6vOgFe95ZGwrZGy0yMEg.dVgwyULPfDrvLdZO',
            'is_admin' => true,
        ]);

        User::factory(10)->create();
        Watch::factory(10)->create();
        Complication::factory(10)->create();
    }


}
