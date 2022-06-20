<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

// require __DIR__ . "/admin.php";

// Route::get("first",function(){
//     return redirect('second');
//     // return "First Route Response";
// });

// Route::redirect('first','second');

Route::get("second",function(){
    return "second Route Response";
})->name('second_route');


Route::view("test","welcome",[
    "name" => "laravel"
]);

// Route::get("user/{name}/{id?}",function($name,$id = null){

//     return "hello $name  ID $id";

// })->where(['name'=>'[A-Za-z]+','id' =>  '[0-9]+']);


Route::get("user/{name}/{id?}",function($name,$id = null){

    return "hello $name  ID $id";

})->whereNumber('id');



# Product
Route::prefix('product')->name('product.')->middleware(['auth','api'])->group(function(){

    Route::get('create',function(){
        return "Product Create";
    })->name('create');
    Route::get('index',function(){
        return "Product Index";

    });
    Route::get('show',function(){});
});


Route::fallback(function () {
    return "Route Not Found!";
});



Route::get('middleware',function(){
    return "Middleware Response";
})->middleware('check_age:35');
