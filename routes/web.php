<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomepageController::class, 'index']);

Route::resource('services', ServiceController::class, [
    'except' => ['edit', 'update', 'destroy']
])->middleware('auth');

Route::resource('services', ServiceController::class, [
    'only' => ['edit', 'update', 'destroy']
])->middleware(['auth', 'owner']);

Route::prefix('auth')->controller(AuthController::class)->name('auth.')
    ->group(function () {
        Route::get('login', 'loginPage')->name('login.page')->middleware('guest');
        Route::post('login', 'login')->name('login')->middleware('guest');

        Route::get('register', 'registerPage')->name('register.page')->middleware('guest');
        Route::post('register', 'register')->name('register')->middleware('guest');

        Route::post('logout', 'logout')->name('logout')->middleware('auth');
    });
