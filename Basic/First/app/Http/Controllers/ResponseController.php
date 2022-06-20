<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponseController extends Controller
{
    public function index()
    {
        $data = "Data";

        return response()->json([
            'data' => [10,20,30],
            "key" => "Name"
        ]);
        // return view("welcome");
        // return redirect()->action([ResponseController::class,'another']);
        // return redirect()->route('another');
        // return response($data)->withHeaders([

        // ]);
    }

    public function another()
    {
        return response("Hello World");
    }
}
