<?php

use App\Models\Info;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;

Route::get('/', function () {
    return view('welcome');
});
Route::get('n-1',function(){
    // $users = User::with('info')->get();
    $users = User::get();
    // $users->load('info');
    return view('n1',compact('users'));
});

Route::get('belongsto',function(){
    $info = Info::find(1);

    return $info->user;
});
Route::get('one-to-one',function(){

    // $users =  User::whereHas('info',function($q) {
    //     return $q->whereNotNull('zip_code');
    // })->with('info')->get();

    // $users = User::whereDoesntHave('info')->get();
    // $users = User::withOnly()->get();

    // $users = User::without(['info'])->get();
    // return view('one-to-one',compact('users'));

    $user = User::create([
        "name" => "New",
        "email" => "New@mail.com",
        "password" => "New",
    ]);

    $user->info()->create([
        "address" => "abx",
        "zip_code" => 963,
        "phone" => "1236",
    ]);

    return $user;
});