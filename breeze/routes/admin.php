
<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('login',[LoginController::class,"showLoginPage"])->name('login');
    Route::get('register',[LoginController::class,"showRegPage"])->name('register');


    Route::post('authenticate',[LoginController::class,"authenticate"])->name('authenticate');
    Route::post('store',[LoginController::class,"store"])->name('store');



    Route::post('logout',[LoginController::class,"logout"])->name('logout');
    Route::get('dashboard',[LoginController::class,"dashboard"])->name('dashboard');

    # Email verify

    Route::get('verify-email/{id}/{hash}', [LoginController::class, 'verifyEmail'])
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

});
