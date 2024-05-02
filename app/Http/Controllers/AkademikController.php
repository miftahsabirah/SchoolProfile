<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\AkademikResource;
use App\Models\Akademik;
use Illuminate\Http\Request;

class AkademikController extends Controller
{
    public function indexakademik(){
        $akademiks = Akademik::with('kurikulum')->get();
        return AkademikResource::collection($akademiks);
    }

    public function showakademik($id){
        $akademik = Akademik::with('kurikulum')->findOrFail($id);
        return new AkademikResource($akademik);
    }

    public function storeAkademik(Request $request){
        $request->validate([
            'kurikulum_id' => 'required|exists:kurikulum,id',
            'tahun_ajaran' => 'required',
            'semester' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
            'deskripsi' => 'required',
            'file_berkas' => 'required',

            'tahun_ajaran' => 'required',
            'semester' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
            'deskripsi' => 'required',
            'file_berkas' => 'required',
        ]);
        
    }
}
