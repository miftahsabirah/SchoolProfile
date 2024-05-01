<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\GuruKaryawanResource;
use App\Http\Resources\JabatanResource;
use App\Models\GuruKaryawan;
use App\Models\Jabatan;
use Illuminate\Http\Request;

class GuruKaryawanController extends Controller
{
    public function indexGuru(){
        $guru = GuruKaryawan::all();
        return GuruKaryawanResource::collection(($guru));
    }

    public function indexjabatan(){
        $jabatan = Jabatan::all();
        return JabatanResource::collection(($jabatan));
    }

}
