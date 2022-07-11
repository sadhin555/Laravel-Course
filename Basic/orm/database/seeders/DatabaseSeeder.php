<?php

namespace Database\Seeders;

use App\Models\District;
use App\Models\Division;
use App\Models\Info;
use App\Models\Skill;
use App\Models\Thana;
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

        $data = ['PHP','JS','Laravel','Python'];
        foreach($data as $d){
            Skill::create(["name" => $d]);
        }
        for($i = 1;$i<=5;$i++){
            Info::create([
                "user_id" => $i,
                "address" => "Dhaka $i",
                "zip_code" => $i % 2 == 0 ? rand(100,200) : null,
                "phone" => rand(1000,5000),
            ]);
        }


        for($i = 1;$i<=5;$i++){
            Division::create([
                "name" => "Div $i"
            ]);
        }


        for($i = 1;$i<=10;$i++){
            District::create([
                "division_id" => rand(1,5),
                "name" => "District $i"
            ]);
        }

        for($i = 1;$i<=15;$i++){
            Thana::create([
                "district_id" => rand(1,10),
                "name" => "Thana $i"
            ]);
        }
    }
}
