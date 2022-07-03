<?php

namespace Database\Seeders;

use App\Models\Info;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        for($i = 1;$i<=5;$i++){
            Info::create([
                "user_id" => $i,
                "address" => "Dhaka $i",
                "zip_code" => $i % 2 == 0 ? rand(100,200) : null,
                "phone" => rand(1000,5000),
            ]);
        }
    }
}
