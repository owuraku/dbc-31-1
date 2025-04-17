<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('services', ServiceController::class)->middleware('auth');

Route::prefix('auth')->controller(AuthController::class)->name('auth.')
    ->group(function () {
        Route::get('login', 'loginPage')->name('login.page')->middleware('guest');
        Route::post('login', 'login')->name('login')->middleware('guest');

        Route::get('register', 'registerPage')->name('register.page')->middleware('guest');
        Route::post('register', 'register')->name('register')->middleware('guest');
    });
