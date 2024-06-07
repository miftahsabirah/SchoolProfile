<?php

use App\Http\Controllers\AkademikController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\ProfileSekolahController;
use App\Http\Controllers\ViewController;
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

Route::get('/', function () {
    // return view('home');
    return view('home');
});



route::get('/profile/sambutan', [ProfileSekolahController::class,'indekprofielview'])->name('profile.sambutan');
route::get('/profile/sejarah', [ProfileSekolahController::class,'indekprofielviewsejarah'])->name('profile.sejarah');
route::get('/profile/visimisi', [ProfileSekolahController::class,'indekprofielviewvisimisi'])->name('profile.visimisi');
route::get('/profile/akreditasi', [ProfileSekolahController::class,'indekprofielviewakreditasi'])->name('profile.akreditasi');
route::get('/profile/guru', [ProfileSekolahController::class,'indekprofielviewguru'])->name('profile.guru');

Route::get('home', [HomeController::class, 'indexhome'])->name('home');

Route::get('/akademik/kurikulum', [KurikulumController::class, 'indexviewkurikulum'])->name('akademik.kurikulum');
Route::get('/akademik/kalenderakademik', [AkademikController::class, 'indexviewkalender'])->name('akademik.kalenderakademik');


Route::get('/organisasi/dewansekolah', [ViewController::class, 'indexvieworganisasi'])->name('organisasi.dewansekolah');
Route::get('/organisasi/bagan', [ViewController::class, 'indexviewstrukturbagan'])->name('organisasi.bagan');
Route::get('/organisasi/tugas', [ViewController::class, 'indexviewstrukturtugas'])->name('organisasi.tugas');
Route::get('/informasi/berita', [ViewController::class, 'indexviewberita'])->name('informasi.berita');
Route::get('/sarpras', [ViewController::class, 'indexviewsarpras'])->name('sarpras');
