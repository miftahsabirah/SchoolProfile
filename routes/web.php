<?php

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
    return view('admin/guruKaryawan');
});

// Route::get('/', function () {
//     // return view('home');
//     return view('login');
// });
Route::get('/home', function () {
    // return view('home');
    return view('home');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/sambutan', function () {
    return view('profil/sambutan');
})->name('sambutan');

Route::get('/sejarah', function () {
    return view('profil/sejarah');
})->name('sejarah');

Route::get('/visiMisi', function () {
    return view('profil/visiMisi');
})->name('visiMisi');

Route::get('/guruKaryawan', function () {
    return view('profil/guruKaryawan');
})->name('guruKaryawan');

Route::get('/akreditasi', function () {
    return view('profil/listAkreditasi');
})->name('akreditasi');



Route::get('/kalenderAkademik', function () {
    return view('akademik/kalenderAkademik');
})->name('kalenderAkademik');

Route::get('/detailBerita', function () {
    return view('informasi/detailBerita');
})->name('detailBerita');

Route::get('/sarpras', function () {
    return view('sarpras/sarpras');
})->name('sarpras');

Route::get('/detailBerita', function () {
    return view('informasi/detailBerita');
})->name('detailBerita');



