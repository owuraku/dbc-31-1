<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('services', ServiceController::class);

Route::prefix('auth')->controller(AuthController::class)->name('auth.')
    ->group(function () {
        Route::get('login', 'loginPage')->name('login.page');
        Route::post('login', 'login')->name('login');

        Route::get('register', 'registerPage')->name('register.page');
        Route::post('register', 'register')->name('register');
    });
