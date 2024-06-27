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

// Route::get('/', function () {
//     // return view('home');

//     return view('admin/galeri/galeri');
// });


Route::get('/home', function () {
    // return view('home');
    return view('home');
});


// route profile
Route::get('/profile/sambutan', function () {
    return view('/profil/sambutan');
})->name('profile.sambutan');

Route::get('/profile/sejarah', function () {
    return view('/profil/sejarah');
})->name('profile.sejarah');

Route::get('/profile/visimisi', function () {
    return view('/profil/visimisi');
})->name('profile.visimisi');

Route::get('/profile/akreditasi', function () {
    return view('/profil/listakreditasi');
})->name('profile.akreditasi');

Route::get('/profile/guru', function () {
    return view('/profil/guruKaryawan');
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
    return view('/organisasi/strukturBagan');
})->name('organisasi.bagan');

Route::get('/organisasi/tugas', function () {
    return view('/organisasi/tugas');
})->name('organisasi.tugas');

Route::get('/sarpras', function () {
    return view('/sarpras/sarpras');
})->name('sarpras');

Route::get('/sarpras/detailsarpras', function () {
    return view('/sarpras/detailSarpras');
})->name('sarpras.detail');


Route::get('/galeri', function () {
    return view('galeri/galeri');
})->name('galeri');

Route::get('/berita', function () {
    return view('informasi/berita');
})->name('berita');

// admin galeri
Route::middleware('auth')->get('/admingaleri', function () {
    return view('admin/galeri/galeri');
})->name('admingaleri');

Route::get('/adminformgaleri', function () {
    return view('admin/galeri/formGaleri');
})->name('adminformgaleri');

Route::get('/adminformeditgaleri/{id}', function () {
    return view('admin/galeri/formeditGaleri');
})->name('adminformeditgaleri');


// admin berita
Route::get('/adminberita', function () {
    return view('admin/berita/berita');
})->name('adminberita');

Route::get('/adminformberita', function () {
    return view('admin/berita/formBerita');
})->name('adminformberita');

// admin sarpras
Route::get('/adminsarpras', function () {
    return view('admin/sarpras/sarpras');
})->name('adminsarpras');

Route::get('/adminformsarpras', function () {
    return view('admin/sarpras/formSarpras');
})->name('adminformsarpras');

// admin guruKaryawan
Route::get('/admingurukaryawan', function () {
    return view('admin/guruKaryawan/guruKaryawan');
})->name('admingurukaryawan');

Route::get('/adminformguruKaryawan', function () {
    return view('admin/guruKaryawan/formguruKaryawan');
})->name('adminformguruKaryawan');

// admin kalender akademik
Route::get('/adminkalenderakademik', function () {
    return view('admin/kalender/kalenderAkademik');
})->name('adminkalenderakademik');

Route::get('/adminformkalenderakademik', function () {
    return view('admin/kalender/formKalenderAkademik');
})->name('adminformkalenderakademik');

// Route::get('/adminformeditgaleri/{id}', function () {
//     return view('admin/galeri/formeditGaleri');
// })->name('adminformeditgaleri');

Route::get('/login', function () {
    return view('login');
})->name('login');

