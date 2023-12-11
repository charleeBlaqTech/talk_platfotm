<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {return view('index');})->name('home')->middleware('auth');


Route::group(['prefix' => '/login'], function () {
    Route::get('', [LoginController::class, "form"])->name('login.create');
    Route::post('', [LoginController::class, 'login'])->name('login.store');
});

Route::group(['prefix' => '/register'], function () {

    Route::get('', [RegisterController::class, 'form'])->name('register.create');
    Route::post('', [RegisterController::class, 'register'])->name('register.store');
});

Route::delete('/logout', [LoginController::class, 'destroy'])->name('logout');
