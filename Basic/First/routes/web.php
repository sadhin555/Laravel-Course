<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\ResponseController;
use App\Http\Controllers\SingleController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ViewController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('welcome');
});

// require __DIR__ . "/admin.php";

// Route::get("first",function(){
//     return redirect('second');
//     // return "First Route Response";
// });

// Route::redirect('first','second');

// Route::get("second",function(){
//     return "second Route Response";
// })->name('second_route');


// Route::view("test","welcome",[
//     "name" => "laravel"
// ]);

// Route::get("user/{name}/{id?}",function($name,$id = null){

//     return "hello $name  ID $id";

// })->where(['name'=>'[A-Za-z]+','id' =>  '[0-9]+']);


// Route::get("user/{name}/{id?}",function($name,$id = null){

//     return "hello $name  ID $id";

// })->whereNumber('id');



// # Product
// Route::prefix('product')->name('product.')->middleware(['auth','api'])->group(function(){

//     Route::get('create',function(){
//         return "Product Create";
//     })->name('create');
//     Route::get('index',function(){
//         return "Product Index";

//     });
//     Route::get('show',function(){});
// });


// Route::fallback(function () {
//     return "Route Not Found!";
// });



// Route::get('middleware',function(){
//     return "Middleware Response";
// })->middleware('check_age:35');


Route::get('first',[DemoController::class,'firstMethod'])->name('first');
Route::get('user/{name}',[DemoController::class,'user']);
Route::get('single',SingleController::class);


Route::resource("photo",PhotoController::class);
Route::resources([
    'photos' => PhotoController::class,
    'posts' => PostController::class,
]);


Route::post('form-submit', function () {
    return "SOmething";
})->name('submit');


Route::get('response',[ResponseController::class,'index']);
Route::get('another-response',[ResponseController::class,'another'])->name('another');



# View

// Route::view("view","first");


Route::get("view",[ViewController::class,'index']);
Route::get("second",[ViewController::class,'second']);

Route::get("blade",function(){
    return view('abc',[
        "title" => "This is our title",
        "html" => "<h1>This is H1</h1>",
        'isActive' => true,
        "users" => User::all()
    ]);
});



# Session

Route::get('set',function(){

    // session()->flash("flash","FLash");
    // session()->put(["test" => "Test Data"]);
    // session(["title" => "Session Title","another" => "Another"]);
});

Route::get('get',function(){

    // if(session()->has("test")){
    //     return session("test");
    // }else{
    //     return "Not Exists!";
    // }
    dd(session()->all());

    return session("flash");
});


Route::get('delete',function(){
    // session()->forget(["another","test"]);
    session()->flush();
});


# Request

Route::get('form',[RequestController::class,'index']);
Route::post('form',[RequestController::class,'store'])->name('store');

# Query

Route::get('insert',[TeacherController::class,'insert']);
Route::get('select',[TeacherController::class,'select']);
// Route::get('update',[TeacherController::class,'update']);

# Create

Route::get('create',[ClientController::class,'index']);
Route::get('fetch',[ClientController::class,'fetch']);
Route::get('update',[ClientController::class,'update']);
Route::get('delete',[ClientController::class,'delete']);
