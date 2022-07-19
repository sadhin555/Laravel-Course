<?php

use App\Http\Controllers\CrudController;
use App\Http\Controllers\UserCheckController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('layouts.app');
});

Route::get('user-check',[UserCheckController::class,'index'])->name('user-check');
Route::post('user-exits',[UserCheckController::class,'checkUser'])->name('user-exists');




















# CRUD
Route::prefix('crud')->name('crud.')->controller(CrudController::class)->group(function () {
    Route::get("/","index")->name('index');
    Route::get("show/{curd}","show")->name('show');
    Route::get("/get-data","getData")->name('all');
});
