<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function indexsiswa(){
        $siswa = Siswa::all();
        return response()->json($siswa);
    }
}
