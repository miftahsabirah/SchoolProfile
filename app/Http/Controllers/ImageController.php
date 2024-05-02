<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use App\Models\Sarpras;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function indexgaleri(){
        $galeri = Galeri::all();
        return response()->json($galeri);
    }
    public function indexsarpras(){
        $sarpras = Sarpras::all();
        return response()->json($sarpras);
    }
}
