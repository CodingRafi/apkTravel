<?php

use App\Models\Berita;
use App\Models\Koleksi;
use App\Models\Category;
use App\Models\Kecamatan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KoleksiController;
use App\Http\Controllers\CampuranController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\ConfigurasiController;
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

// Route::get('/', function () {
//     // return view('welcome');
//    // Route::get('/')
// });
Route::get('/', [HomeController::class, 'indexWelcome']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/load-more', [HomeController::class, 'loadMore']);
Route::get('/show/{slug}', [HomeController::class, 'show']);
Route::get('/berita/{berita:slug}', [HomeController::class, 'show']);
Route::get('/destinasi/show', [HomeController::class, 'showAll']);
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

// Route::get('/test', function () {
//     return view('test');
// });

// Route::get('/detil', function () {
//     return view('detil');
// });

// require __DIR__.'/auth.php';

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/registrasi', [RegistrasiController::class, 'create'])->middleware('auth');
Route::post('/registrasi', [RegistrasiController::class, 'store']);

Route::get('/dashboard/berita/checkSlug', [BeritaController::class, "checkSlug"])->middleware('auth');
Route::get('/dashboard/profil-wisata/checkSlug', [ProfilWisataController::class, "checkSlug"])->middleware('auth');
Route::get('/dashboard/koleksi/checkKoleksi', [KoleksiController::class, "ambilData"])->middleware('auth');
Route::get('/dashboard/koleksi/checkSlug', [KoleksiController::class, "checkSlug"])->middleware('auth');
Route::post('/dashboard/koleksi/config', [KoleksiController::class, "store2"])->middleware('auth');
Route::get('/dashboard/config/update', [ConfigurasiController::class, "update"])->middleware('auth');
Route::get('/dashboard/koleksi/{koleksi:slug}/post', [FotoController::class, 'create']);
Route::resource('/dashboard/berita', BeritaController::class)->middleware('auth');
Route::resource('/dashboard/profil-wisata', ProfilWisataController::class)->middleware('auth');
Route::resource('/dashboard/koleksi', KoleksiController::class)->middleware('auth');
Route::resource('/dashboard/config', ConfigurasiController::class)->middleware('auth');
Route::get('/dashboard/foto/{foto:slug}/tambah', [FotoController::class, 'buat'])->middleware('auth');
Route::resource('/dashboard/foto', FotoController::class)->middleware('auth');
Route::get('/dashboard/video/{video:slug}/tambah', [VideoController::class, 'buat'])->middleware('auth');
Route::resource('/dashboard/video', VideoController::class)->middleware('auth');

Route::get('/dashboard/{category:slug}', function(Category $category){
    return view("dashboard.profil-wisata.index", [
        "categories" => Category::all(),
        "profilWisatas" => $category->profilWisata,
        "beritas" => $category->berita,
        "title" => $category->nama,
        "slug" => $category->slug,
        "kecamatans" => Kecamatan::all(),
    ]);
})->middleware('auth');
Route::get('/dashboard/kecamatan/{kecamatan:nama}', [ProfilWisataController::class, 'kecamatan'])->middleware('auth');
Route::get('/dashboard/get_data/{kategori}', [ProfilWisataController::class, 'get_data'])->middleware('auth');

Route::get('/dashboard/destinasi/create', [ProfilWisataController::class, 'create'])->middleware('auth');
Route::get('/dashboard/makanan/create', [ProfilWisataController::class, 'create'])->middleware('auth');
Route::get('/dashboard/{category:slug}/create', [ProfilWisataController::class, 'create'])->middleware('auth');
Route::get('/{category:slug}', [HomeController::class, 'show2']);