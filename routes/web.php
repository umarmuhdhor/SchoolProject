<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\MateriMuridController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\PrestasiMuridController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\checkRole;
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

Route::get('/', [BeritaController::class,'display'])->name('welcome');
Route::get('/prestasi', [PrestasiMuridController::class,'display'])->name('prestasi');
Route::get('/ppdb', function () {
    return view('ppdb');
});
Route::get('/albumFoto', function () {
    return view('albumFoto');
});



Route::get('/guru', function () {
    return view('guru/dashboard');
})->middleware(['auth', 'verified','checkRole:guru'])->name('guru.dashboard');


Route::get('/murid', function () {
    return view('murid/dashboard');
})->middleware(['auth', 'verified','checkRole:murid'])->name('murid.dashboard');

Route::get('/admin', function () {
    return view('admin/dashboard');
})->middleware(['auth', 'verified','checkRole:admin'])->name('admin.dashboard');

// Route::resource('/berita', BeritaController::class)->middleware(['auth', 'verified','checkRole:admin']);
Route::resource('/adminBerita', BeritaController::class)->middleware(['auth', 'verified','checkRole:admin']);
Route::resource('/adminGuru', GuruController::class)->middleware(['auth', 'verified','checkRole:admin']);
Route::resource('/adminMapel', MapelController::class)->middleware(['auth', 'verified','checkRole:admin']);
Route::resource('/adminKelas', KelasController::class)->middleware(['auth', 'verified','checkRole:admin']);
Route::resource('/adminEkskul', GuruController::class)->middleware(['auth', 'verified','checkRole:admin']);
Route::resource('/adminMurid', MuridController::class)->middleware(['auth', 'verified','checkRole:admin']);
Route::resource('/adminPrestasi', PrestasiMuridController::class)->middleware(['auth', 'verified','checkRole:admin']);

Route::resource('/guruMateri', MateriController::class)->middleware(['auth', 'verified','checkRole:guru']);


Route::resource('/muridMateri', MateriMuridController::class)->middleware(['auth', 'verified','checkRole:murid']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
