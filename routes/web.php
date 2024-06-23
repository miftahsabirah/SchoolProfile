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

    return view('admin/berita/berita');
});

// Route::get('/', function () {
//     // return view('home');
//     return view('login');
// });
Route::get('/home', function () {
    // return view('home');
    return view('home');
});

// route::get('/profile/sambutan', [ProfileSekolahController::class,'indekprofielview'])->name('profile.sambutan');
// route::get('/profile/sejarah', [ProfileSekolahController::class,'indekprofielviewsejarah'])->name('profile.sejarah');
// route::get('/profile/visimisi', [ProfileSekolahController::class,'indekprofielviewvisimisi'])->name('profile.visimisi');
// route::get('/profile/akreditasi', [ProfileSekolahController::class,'indekprofielviewakreditasi'])->name('profile.akreditasi');
// route::get('/profile/guru', [ProfileSekolahController::class,'indekprofielviewguru'])->name('profile.guru');

// Route::get('home', [HomeController::class, 'indexhome'])->name('home');

// Route::get('/akademik/kurikulum', [KurikulumController::class, 'indexviewkurikulum'])->name('akademik.kurikulum');
// Route::get('/akademik/kalenderakademik', [AkademikController::class, 'indexviewkalender'])->name('akademik.kalenderakademik');


// Route::get('/organisasi/dewansekolah', [ViewController::class, 'indexvieworganisasi'])->name('organisasi.dewansekolah');
// Route::get('/organisasi/bagan', [ViewController::class, 'indexviewstrukturbagan'])->name('organisasi.bagan');
// Route::get('/organisasi/tugas', [ViewController::class, 'indexviewstrukturtugas'])->name('organisasi.tugas');
// Route::get('/informasi/berita', [ViewController::class, 'indexviewberita'])->name('informasi.berita');
// Route::get('/sarpras', [ViewController::class, 'indexviewsarpras'])->name('sarpras');
// Route::get('/profil/detailAkreditasi/{id}', [ViewController::class, 'indexviewdetailakreditasi'])->name('profil.detailAkreditasi');

// route profile
Route::get('/profile/sambutan', function () {
    return view('/profile/sambutan');
})->name('profile.sambutan');

Route::get('/profile/sejarah', function () {
    return view('/profile/sejarah');
})->name('profile.sejarah');

Route::get('/profile/visimisi', function () {
    return view('/profile/visimisi');
})->name('profile.visimisi');

Route::get('/profile/akreditasi', function () {
    return view('/profile/akreditasi');
})->name('profile.akreditasi');

Route::get('/profile/guru', function () {
    return view('/profile/guru');
})->name('profile.guru');

// route home
Route::get('/home', function () {
    return view('/home');
})->name('home');

// route akademik
Route::get('/akademik/kurikulum', function () {
    return view('/akademik/kurikulum');
})->name('akademik.kurikulum');

Route::get('/akademik/kalenderakademik', function () {
    return view('/akademik/kalenderakademik');
})->name('akademik.kalenderakademik');

// route organisasi
Route::get('/organisasi/dewansekolah', function () {
    return view('/organisasi/dewansekolah');
})->name('organisasi.dewansekolah');

Route::get('/organisasi/bagan', function () {
    return view('/organisasi/bagan');
})->name('organisasi.bagan');

Route::get('/organisasi/tugas', function () {
    return view('/organisasi/tugas');
})->name('organisasi.tugas');

Route::get('/sarpras', function () {
    return view('/sarpras/sarpras');
})->name('sarpras');

Route::get('/profil/detailAkreditasi/{id}', function () {
    return view('/profil/detailAkreditasi/{id}');
})->name('sarpras');


Route::get('/galeri', function () {
    return view('galeri/galeri');
})->name('profil.detailAkreditasi');

Route::get('/berita', function () {
    return view('informasi/berita');
})->name('berita');
