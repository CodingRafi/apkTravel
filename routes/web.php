<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegistrasiController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/registrasi', [RegistrasiController::class, 'create'])->middleware('auth');
Route::post('/registrasi', [RegistrasiController::class, 'store']);

Route::get('/dashboard/berita/checkSlug', [BeritaController::class, "checkSlug"])->middleware('auth');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/dashboard/{category:slug}', function(Category $category){
    return view("dashboard.campuran.index", [
        "categories" => Category::all(),
        "campuran" => $category->campuran,
        "title" => $category->nama
    ]);
})->middleware('auth');

Route::resource('/dashboard/berita', BeritaController::class)->middleware('auth');

Route::get('/', function(){return view('home');});
