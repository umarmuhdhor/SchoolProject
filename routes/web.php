<?php

use App\Http\Controllers\AlumniController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DisplayController;
use App\Http\Controllers\EkskulController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\JamPelajaranController;
use App\Http\Controllers\KegiatanekskulController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\KelasmuridController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\MapelGuruController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\MateriMuridController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\PeriodeController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VisimisiController;
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

Route::get('/', [DisplayController::class,'index'])->name('welcome');
Route::get('/daftarMurid', [DisplayController::class,'daftarMurid'])->name('daftarMurid');
Route::get('/tentangSekolah', [DisplayController::class,'tentangSekolah'])->name('tentangSekolah');
Route::get('/sejarah', [DisplayController::class,'sejarah'])->name('sejarah');
Route::get('/visimisi', [DisplayController::class,'visimisi'])->name('visimisi');
Route::get('/ekskul', [DisplayController::class,'ekskul'])->name('ekskul');
Route::get('/informasiGuru', [DisplayController::class,'informasiGuru'])->name('informasiGuru');
Route::get('/informasiMurid', [DisplayController::class,'informasiMurid'])->name('informasiMurid');
Route::get('/prestasi', [PrestasiController::class,'display'])->name('prestasi');
Route::get('/prestasiMurid', [PrestasiController::class,'prestasiMurid'])->name('prestasiMurid');
Route::get('/prestasiGuru', [PrestasiController::class,'prestasiGuru'])->name('prestasiGuru');
Route::get('/prestasiSekolah', [PrestasiController::class,'prestasiSekolah'])->name('prestasiSekolah');
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
})->middleware(['auth', 'verified','checkRole:admin']);

// Route::resource('/berita', BeritaController::class)->middleware(['auth', 'verified','checkRole:admin']);
Route::resource('/adminBerita', BeritaController::class)->middleware(['auth', 'verified','checkRole:admin']);
Route::resource('/adminGuru', GuruController::class)->middleware(['auth', 'verified','checkRole:admin']);
Route::resource('/adminMapel', MapelController::class)->middleware(['auth', 'verified','checkRole:admin']);
Route::resource('/adminKelas', KelasController::class)->middleware(['auth', 'verified','checkRole:admin']);
Route::resource('/adminEkskul', GuruController::class)->middleware(['auth', 'verified','checkRole:admin']);
Route::resource('/adminMurid', MuridController::class)->middleware(['auth', 'verified','checkRole:admin']);
Route::resource('/adminPrestasi', PrestasiController::class)->middleware(['auth', 'verified','checkRole:admin']);
Route::resource('/adminPeriode', PeriodeController::class)->middleware(['auth', 'verified','checkRole:admin']);
Route::resource('/adminJadwal', JadwalController::class)->middleware(['auth', 'verified','checkRole:admin']);
Route::resource('/adminKelasMurid', KelasmuridController::class)->middleware(['auth', 'verified','checkRole:admin']);
Route::resource('/adminJamPelajaran', JamPelajaranController::class)->middleware(['auth', 'verified','checkRole:admin']);
Route::resource('/adminMapelGuru', MapelGuruController::class)->middleware(['auth', 'verified','checkRole:admin']);
Route::resource('/adminVisimisi', VisimisiController::class)->middleware(['auth', 'verified','checkRole:admin']);
Route::resource('/adminJabatan', JabatanController::class)->middleware(['auth', 'verified','checkRole:admin']);
Route::resource('/adminEkskul', EkskulController::class)->middleware(['auth', 'verified','checkRole:admin']);
Route::resource('/adminKegiatanEkskul', KegiatanekskulController::class)->middleware(['auth', 'verified','checkRole:admin']);
Route::resource('/adminAlumni', AlumniController::class)->middleware(['auth', 'verified','checkRole:admin']);

Route::resource('/guruMateri', MateriController::class)->middleware(['auth', 'verified','checkRole:guru']);


Route::resource('/muridMateri', MateriMuridController::class)->middleware(['auth', 'verified','checkRole:murid']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
