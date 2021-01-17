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
    return view('welcome');
});

Auth::routes(); // if use email verify, delete
// Auth::routes(['verify' => true]); // if use email verify, add

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); // if use email verify, delete
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified'); // if use email verify, add
