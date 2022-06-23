<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormSubmitRequest;

class RequestController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function store(FormSubmitRequest $request)
    {

        // $request->validate([
        //     'name' => ['required','string'],
        //     'email' => ['required','email'],
        //     'password' => ['required','confirmed'],
        //     'number' => ['required'],
        //     'file' => ['required','mimes:jpg,png,jpeg'],
        // ]);
        return $request->all();
    }
}
