<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/home', function () {
    return redirect()->route('chatify');
});

Route::get('/login', [App\Http\Controllers\Auth\AuthController::class , 'loginForm'])->name('login')->middleware('guest');
Route::post('/login', [App\Http\Controllers\Auth\AuthController::class , 'authenticate'])->name('authenticate')->middleware('guest');

