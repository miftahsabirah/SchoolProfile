<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileSekolahController;
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