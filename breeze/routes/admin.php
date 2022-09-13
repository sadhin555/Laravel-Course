
<?php

use App\Http\Controllers\Admin\Auth\LoginController;

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('login',[LoginController::class,"showLoginPage"])->name('login');
    Route::get('register',[LoginController::class,"showRegPage"])->name('register');


    Route::post('authenticate',[LoginController::class,"authenticate"])->name('authenticate');
    Route::post('store',[LoginController::class,"store"])->name('store');



    Route::post('logout',[LoginController::class,"logout"])->name('logout');
    Route::get('dashboard',[LoginController::class,"dashboard"])->middleware(['auth:admin','custom_redirect'])->name('dashboard');
    Route::get('notice',[LoginController::class,"notice"])->name('notice');

    # Email verify

    Route::get('verify-email/{id}/{hash}', [LoginController::class, 'verifyEmail'])
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');


    Route::post('resend',[LoginController::class,'resend'])->name('resend');


    # Forget Password

    Route::get('forget',[LoginController::class,'forget'])->name('forget');
    Route::get('reset/{token}',[LoginController::class,'reset'])->name('reset');

    Route::post('send-forget',[LoginController::class,'sendForgetNotification'])->name('send-forget');
    Route::post('reset-pass',[LoginController::class,'resetPassword'])->name('reset.pass');

});
