<?php

use App\Models\Product;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::get('/http', function () {
    $url = "http://127.0.0.1:8001/api/users";

    Http::post($url,[
        "name" => "amader app",
        "email" => "a@mail.com",
        "password" => bcrypt(123)
    ]);
    $response = Http::get($url);

    // dd();

    $data = json_decode($response->body());
    return view('welcome',compact("data"));
});

Route::get('click',function(){
    if (! Gate::allows('isAdmin')) {
        abort(403);
    }
    return "Clicked";
});


Route::get('product/{product}',function(Product $product){

    return $product;
})->name('product')->middleware('can:view,product');

//-
