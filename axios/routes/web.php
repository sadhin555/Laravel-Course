<?php

use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('layouts.app');
});


# CRUD

Route::prefix('crud')->name('crud.')->controller(CrudController::class)->group(function () {
    Route::get("/","index")->name('index');
    Route::get("show/{curd}","show")->name('show');
    Route::get("/get-data","getData")->name('all');
});
