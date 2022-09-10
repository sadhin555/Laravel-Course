<?php

use App\Models\User;
use App\Mail\TestMail;
use App\Events\DataEvent;
use App\Events\TestEvent;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;
use App\Notifications\TestNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;

Route::get('create',function(){
   return User::first()->delete();
    // User::create([
    //     "name" => "test111",
    //     "email" => "test111@mail.com",
    //     "password" => "test"
    // ]);

    // event(new DataEvent);
});


Route::get('/', function () {
    // Artisan::call('cache:clear');
    // $data = "This is my Data";
    // $user =  User::find(1);
    // $user->notify(new TestNotification($data));

    // event(new TestEvent($user));
    // $data['name'] = "Test User";
    // $data['address'] = "USA";

    // return new TestMail($data);
    // Mail::to("test@mail.com")->send(new TestMail($data));

    // $users = Cache::rememberForever('users', function () {
    //     return  User::all();
    // });

    // $array = [1, 2, 3, 4, 5];

    // $random = Arr::random($array);
    // dd($random);
    return Storage::download('my/rzATX80oUmMSC1jOirERoYfY8i8Ut7SnWsW1SVG6.jpg',"my.jpg");
    return Storage::get("");
    return view('welcome');
});


Route::post('store',function(Request $request){

    Storage::put('my',$request->file);
    return $request->file;

})->name('store');
