<?php

use App\Models\Category;
use App\Models\Berita;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\CampuranController;
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
// Route::get('/', function(){return view('home');});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/registrasi', [RegistrasiController::class, 'create'])->middleware('auth');
Route::post('/registrasi', [RegistrasiController::class, 'store']);

Route::get('/dashboard/berita/checkSlug', [BeritaController::class, "checkSlug"])->middleware('auth');
Route::get('/dashboard/campuran/checkSlug', [CampuranController::class, "checkSlug"])->middleware('auth');
Route::get('/dashboard/{category:slug}', function(Category $category){
    return view("dashboard.campuran.index", [
        "categories" => Category::all(),
        "campuran" => $category->campuran,
        "beritas" => $category->berita,
        "title" => $category->nama,
        "slug" => $category->slug
    ]);
})->middleware('auth');

Route::get('/dashboard/berita/{berita:slug}', [BeritaController::class, 'show']);
Route::resource('/dashboard/berita', BeritaController::class)->middleware('auth');
Route::get('/dashboard/destinasi/create', [CampuranController::class, 'create'])->middleware('auth');
Route::get('/dashboard/makanan/create', [CampuranController::class, 'create'])->middleware('auth');
Route::get('/dashboard/{category:slug}/create', [CampuranController::class, 'create'])->middleware('auth');


Route::resource('/dashboard/campuran', CampuranController::class)->middleware('auth');

