<?php

use App\Events\TestEvent;
use App\Mail\TestMail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {

    $user =  User::find(1);

    event(new TestEvent($user));
    // $data['name'] = "Test User";
    // $data['address'] = "USA";

    // return new TestMail($data);
    // Mail::to("test@mail.com")->send(new TestMail($data));

    return view('welcome');
});
