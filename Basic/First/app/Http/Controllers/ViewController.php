<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ViewController extends Controller
{
    public function index()
    {
        // return view("first",[
        //     "title" => "This is our Title"
        // ]);

        // if(View::exists("another.first")){
        //     return view("another.first");
        // }else{
        //     return abort(404);
        // }

        $title = "This is our title";
        return view()->exists("another.first") ? view("another.first",compact('title'))->with(["name" => "Laravel"]) : abort(404);
    }

    public function second()
    {
        $title = "This is our title";
        return view("another.second",compact('title'));
    }
}
