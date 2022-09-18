<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(20)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'user@mail.com',
            "password" => bcrypt('password'),
            "role" => 'editor'
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Test admin',
            'email' => 'admin@mail.com',
            "password" => bcrypt('password'),
            "role" => 'admin'
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Test admin 3',
            'email' => 'admin2@mail.com',
            "password" => bcrypt('password'),
            "role" => 'admin'
        ]);

        Product::factory(15)->create();
    }
}
