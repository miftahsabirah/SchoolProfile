<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Informasi;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function indexinformasi(){
        $infromasi = Informasi::all();
        return response()->json($infromasi);
    }
}
