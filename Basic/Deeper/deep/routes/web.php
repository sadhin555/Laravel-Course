<?php

use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {

    $data['name'] = "Test User";
    $data['address'] = "USA";

    return new TestMail($data);
    Mail::to("test@mail.com")->send(new TestMail($data));
    return view('welcome');
});
