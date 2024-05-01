<?php

use App\Http\Controllers\GuruKaryawanController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileSekolahController;
use App\Http\Controllers\SiswaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('login', [LoginController::class, 'index']);
Route::post('loginn', [LoginController::class, 'login']);

Route::get('profile', [ProfileSekolahController::class, 'indexprofileschool']);
Route::get('getguru', [GuruKaryawanController::class, 'indexGuru']);
Route::get('getgaleri', [ImageController::class, 'indexgaleri']);
Route::get('getinformasi', [InformasiController::class, 'indexinformasi']);
Route::get('getsiswa', [SiswaController::class, 'indexsiswa']);
Route::get('getsarpras', [ImageController::class, 'indexsarpras']);

