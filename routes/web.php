<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MakananController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\olehOlehController;

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
Route::resource('/dashboard/hotel', HotelController::class);
Route::resource('/dashboard/destinasi', DestinasiController::class);
Route::resource('/dashboard/makanan', MakananController::class);
Route::resource('/dashboard/oleh-oleh', olehOlehController::class);

Route::get('/', function(){return view('home');});
