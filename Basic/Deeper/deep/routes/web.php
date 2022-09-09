<?php

use App\Models\User;
use App\Mail\TestMail;
use App\Events\TestEvent;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Notifications\TestNotification;
use Illuminate\Support\Facades\Artisan;



Route::get('/', function () {
    Artisan::call('cache:clear');
    // $data = "This is my Data";
    // $user =  User::find(1);
    // $user->notify(new TestNotification($data));

    // event(new TestEvent($user));
    // $data['name'] = "Test User";
    // $data['address'] = "USA";

    // return new TestMail($data);
    // Mail::to("test@mail.com")->send(new TestMail($data));

    return view('welcome');
});
