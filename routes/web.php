<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

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

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);

Route::get('/', function(){
    return view('welcome');
});

Route::get('/home', function(){
    return view('home');
});

Route::get('/hotel', function(){
    return view('hotel');
});

Route::get('/destinasi', function(){
    return view('destinasi');
});

Route::get('/makanan', function(){
    return view('makanan');
});

Route::get('/travel', function(){
    return view('travel');
});

Route::get('/ekraf', function(){
    return view('ekraf');
});
