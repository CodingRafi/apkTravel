<?php

use App\Models\Berita;
use App\Models\Category;
use App\Models\Koleksi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\CampuranController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\ProfilWisataController;

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

Route::get('/home', function () {
    return view('home');
});


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/registrasi', [RegistrasiController::class, 'create'])->middleware('auth');
Route::post('/registrasi', [RegistrasiController::class, 'store']);

Route::get('/dashboard/berita/checkSlug', [BeritaController::class, "checkSlug"])->middleware('auth');
Route::get('/dashboard/profil-wisata/checkSlug', [ProfilWisataController::class, "checkSlug"])->middleware('auth');
Route::resource('/dashboard/berita', BeritaController::class)->middleware('auth');
Route::resource('/dashboard/profil-wisata', ProfilWisataController::class)->middleware('auth');
Route::get('/dashboard/koleksi-foto', function () {
    return view("dashboard.koleksi.index", [
        // 'koleksifoto' => Koles
    ]);
});

Route::get('/dashboard/{category:slug}', function(Category $category){
    return view("dashboard.profil-wisata.index", [
        "categories" => Category::all(),
        "profilWisatas" => $category->profilWisata,
        "beritas" => $category->berita,
        "title" => $category->nama,
        "slug" => $category->slug
    ]);
})->middleware('auth');

Route::get('/dashboard/destinasi/create', [ProfilWisataController::class, 'create'])->middleware('auth');
Route::get('/dashboard/makanan/create', [ProfilWisataController::class, 'create'])->middleware('auth');
Route::get('/dashboard/{category:slug}/create', [ProfilWisataController::class, 'create'])->middleware('auth');




