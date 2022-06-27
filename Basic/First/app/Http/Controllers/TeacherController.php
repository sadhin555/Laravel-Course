<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    public function insert()
    {
        return DB::table('teachers')->insertGetId([
                    "name" => "Teacher",
                    "email" => "Teacher@mail.com",
                    "age" => 10,
                    "address" => "USA",
                    "role" => "admin",
                ]);


    //    return DB::table('teachers')->insert([
    //     [
    //         "name" => "Laravel 1",
    //         "email" => "Laravel1@mail.com",
    //         "age" => 10,
    //         "address" => "USA",
    //         "role" => "admin",
    //     ],
    //     [
    //         "name" => "Laravel2",
    //         "email" => "Laravel2@mail.com",
    //         "age" => 30,
    //         "address" => "USA",
    //         "role" => "admin",
    //     ],
    //     [
    //         "name" => "Laravel2",
    //         "email" => "Laravel2@mail.com",
    //         "age" => 0,
    //         "address" => "USA",
    //         "role" => "admin",
    //     ],
    //    ]);

    }

    public function select()
    {
        // $data = DB::table('teachers')->select(['name','age'])->get();
        // $data = DB::table('teachers')->get(['name','age']);
        $data = DB::table('teachers')
        // ->orderBy('name', 'desc')
        // ->orderBy('email', 'asc')
        // ->inRandomOrder()
        ->whereNotBetween('age', [30, 40])
        ->count();
        return $data;
    }

    public function update()
    {
        // DB::table("teachers")->where('id','>',5)->dump();
        DB::table('users')->truncate();
        // DB::table('teachers')->increment('age', );
    //   return  DB::table("teachers")->where('id',1)->delete();
    }

}
