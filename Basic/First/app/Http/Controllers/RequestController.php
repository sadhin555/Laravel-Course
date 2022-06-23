<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        if($request->hasFile('file')){
            $img = $request->file('file');
            dd($img->path());
        }

        // dd($request->method());
        // if ($request->is('form/*')) {
        //     dd($request->ip());
        // }
        // // dd($request->path());
        // dd($request->ip());
        $name = $request->name;
        $email = $request->input('email');
        // dd($request->only(['name','password']));
        // dd($request->except(['password','email']));
        return ;
    }
}
