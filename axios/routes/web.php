<?php

use App\Http\Controllers\AutoSearchController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\MultidependencyController;
use App\Http\Controllers\UserCheckController;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('layouts.app');
});

# User Exists Check
Route::get('user-check',[UserCheckController::class,'index'])->name('user-check');
Route::post('user-exits',[UserCheckController::class,'checkUser'])->name('user-exists');

# Auto Suggest Search

Route::get('auto-search',[AutoSearchController::class,'index'])->name('auto-search');
Route::get('auto-search-product/{key}',[AutoSearchController::class,'searchProducts'])->name('search-products');


# Multiple Image Upload
Route::get('multiple-image',[ImageController::class,'index'])->name('multiple-image');

Route::post('multiple-upload',[ImageController::class,'upload'])->name('multiple-upload');



# Multi Dependency Select
Route::get('multi-denpendency',[MultidependencyController::class,'index'])->name('multi-denpendency');
Route::get('districts/{id}',[MultidependencyController::class,'districts']);
Route::get('upazilas/{id}',[MultidependencyController::class,'upazilas']);






// Route::get('mail',function(){
//     Mail::to("s@Mail.com")->send(new TestMail);
//     return new TestMail;
// });











# CRUD
Route::prefix('crud')->name('crud.')->controller(CrudController::class)->group(function () {
    Route::get("/","index")->name('index');
    Route::get("show/{curd}","show")->name('show');
    Route::get("/get-data","getData")->name('all');
    Route::post("delete/{crud}","delete")->name('delete');
    Route::post("store","store")->name('store');
});
