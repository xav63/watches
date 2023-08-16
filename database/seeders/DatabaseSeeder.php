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


         User::factory(10)->create();
         Watch::factory(10)->create();
         Complication::factory(1)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
