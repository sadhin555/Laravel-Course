<?php

use App\Models\District;
use App\Models\Division;
use App\Models\Info;
use App\Models\Post;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;

Route::get('/', function () {
    // User::find(2)->delete();
 return   User::create([
        "name" => "test111",
        "email" => "tes111t@mail.cm",
        "password" => "test",
    ]);
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


Route::get('one-to-many',function(){

    $post = Post::find(1);

   return $post->user;
    // Post::create([
    //     "user_id" => $user->id,
    //     "name" => "Post Two"
    // ]);
    // $user->posts()->create([
    //     "name" => "Post 3"
    // ]);
    // return $user->posts->count();
});

Route::get('has',function(){

    $div = Division::find(5);

    return $div->load('thanas');
});


Route::get('many',function(){

    $user = User::find(1);
   return $skill = Skill::with('users')->find(1);
    // $user->skills()->attach([1,2]);
    // $user->skills()->detach([1]);

    // $user->skills()->sync([1,3]);
    // return $user->load('skills');
});
