<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Akreditasi;
use App\Models\ProfileSekolah;
use Illuminate\Http\Request;

class ProfileSekolahController extends Controller
{
    public function indexprofileschool(){
        $profile = ProfileSekolah::all();
        return response()->json($profile);
    }
    public function indexakreditasi(){
        $akreditasi = Akreditasi::all();
        return response()->json($akreditasi);
    }
}
