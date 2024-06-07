<?php

use App\Http\Controllers\AkademikController;
use App\Http\Controllers\AkreditasiController;
use App\Http\Controllers\GuruKaryawanController;
use App\Http\Controllers\GurumapelController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\KurikulumController;
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

Route::get('indexxx', [LoginController::class, 'index']);
Route::post('login', [LoginController::class, 'login']);

Route::get('profile', [ProfileSekolahController::class, 'indexprofileschool'])->name('profile');

Route::put('updateprofile1/{id}', [ProfileSekolahController::class, 'updateprofile1']);



// Route gurukaryawan
Route::get('getguru', [GuruKaryawanController::class, 'indexGuru'])->name('getguru');
Route::post('postguru', [GuruKaryawanController::class, 'postguru']);
Route::put('updateguru/{id}', [GuruKaryawanController::class, 'updateguru']);
Route::delete('deleteguru/{id}', [GuruKaryawanController::class, 'deleteguru']);

// Route guruMapel
Route::get('getgurumapel', [GurumapelController::class, 'indexgurumapel']);
Route::post('postgurumapel', [GurumapelController::class, 'postgurumapel']);
Route::put('updategurumapel/{id}', [GurumapelController::class, 'updategurumapel']);
Route::delete('deletegurumapel/{id}', [GurumapelController::class, 'deletegurumapel']);


// Route matapelajaran
Route::get('getmatapelajaran', [GurumapelController::class, 'indexmatapelajaran']);
Route::post('postmatapelajaran', [GurumapelController::class, 'postmatapelajaran']);
Route::put('updatematapelajaran/{id}', [GurumapelController::class, 'updatematapelajaran']);
Route::delete('deletematapelajaran/{id}', [GurumapelController::class, 'deletematapelajaran']);

//Route jabatan_guru
Route::get('getjabatan', [GuruKaryawanController::class, 'indexjabatan']);
Route::post('postjabatan', [GuruKaryawanController::class, 'postjabatan']);
Route::put('upadatejabatan/{id}', [GuruKaryawanController::class, 'upadatejabatan']);
Route::delete('deletejabatan/{id}', [GuruKaryawanController::class, 'deletejabatan']);

//Route siswa
Route::post('postsiswa', [SiswaController::class, 'postsiswa']);
Route::put('updatesiswa/{id}', [SiswaController::class, 'updatesiswa']);
Route::delete('deletesiswa/{id}', [SiswaController::class, 'deletesiswa']);

// Route Jurusan
Route::get('indexjurusan', [SiswaController::class, 'indexjurusan']);
Route::post('postjurusan', [SiswaController::class, 'postjurusan']);
Route::put('updatejurusan/{id}', [SiswaController::class, 'updatejurusan']);
Route::delete('deletejurusan/{id}', [SiswaController::class, 'deletejurusan']);

// Route galeri
Route::get('getgaleri', [ImageController::class, 'indexgaleri']);
Route::post('postgaleri', [ImageController::class, 'postgaleri']);
Route::put('updategaleri/{id}', [ImageController::class, 'updategaleri']);
Route::delete('deletegaleri/{id}', [ImageController::class, 'deletegaleri']);

// Route sarpras
Route::get('getsarpras', [ImageController::class, 'indexsarpras']);
Route::post('postsarpras', [ImageController::class, 'postsarpras']);
Route::put('updatesarpras/{id}', [ImageController::class, 'updatesarpras']);
Route::delete('deletesarpras/{id}', [ImageController::class, 'deletesarpras']);

// Route Kurikulum
Route::get('getkurikulum', [KurikulumController::class, 'indexkurikulum']);
Route::post('postkurikulum', [KurikulumController::class, 'postkurikulum']);
Route::put('updatekurikulum/{id}', [KurikulumController::class, 'updatekurikulum']);
Route::delete('deletekurikulum/{id}', [KurikulumController::class, 'deletekurikulum']);

// Route Akademik 
Route::get('getakademik', [AkademikController::class, 'indexakademik']);
Route::post('postakademik', [AkademikController::class, 'postakademik']);
Route::put('updateakademik/{id}', [AkademikController::class, 'updateakademik']);
Route::delete('deleteakademik/{id}', [AkademikController::class, 'deleteakademik']);

//Route Akreditasi
Route::get('getakreditasi', [AkreditasiController::class, 'indexakreditasi'])->name('getakreditasi');
Route::post('postakreditasi', [AkreditasiController::class, 'postakreditasi']);
Route::put('updateakreditasi/{id}', [AkreditasiController::class, 'updateakreditasi']);
Route::delete('deleteakreditasi/{id)', [AkreditasiController::class, 'deleteakreditasi']);