<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // for($i=1;$i<=100;$i++){
        //     DB::table('admins')->insert([
        //         'name' => Str::random(3),
        //         'email' => Str::random(3)."@mail.com",
        //         'age' => rand(10,50),
        //     ]);
        // }
        for($i=1;$i<=20;$i++){
            DB::table('teachers')->insert([
                "name" => "Teacher $i",
                "email" => "Teacher$i@mail.com",
                "age" => rand(25,50),
                "address" => $i % 2 == 0 ? "USA" : "BD",
                "role" => $i % 2 == 0 ? "admin" : "user",
                "created_at" => now(),
                "updated_at" => now(),
            ]);
        }
    }
}
