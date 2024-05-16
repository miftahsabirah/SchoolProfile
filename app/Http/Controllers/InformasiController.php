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

    public function postinformasi(Request $request){
        $this->validate($request, [
            'users_id'=> 'required',
            'guru_karyawan_id'=> 'required',
            'judul'=> 'required',
            'isi'=> 'required',
            'kategori'=> 'required',
        ]);
        $informasipost = Informasi::crete($request->all());
        if($informasipost){
            return response()->json([
                'Mesaage: ' => 'Succes!',
                'Informasi create: ' => $informasipost
            ], 200);
        }else{
            return response([
                'Message: ' => ' we could not create a new siswa.'
            ], 500);
        }
    }
    public function updateinformasi(Request $request, string $id){
        $updateinformasi = Informasi::find($id);
        if ($updateinformasi) {
            $validatedata = $request->validate([
                'users_id'=> 'required',
                'guru_karyawan_id'=> 'required',
                'judul'=> 'required',
                'isi'=> 'required',
                'kategori'=> 'required',
            ]);
            $updateinformasi->users_id = $validatedata['users_id'];
            $updateinformasi->guru_karyawan_id = $validatedata['guru_karyawan_id'];
            $updateinformasi->judul = $validatedata['judul'];
            $updateinformasi->isi = $validatedata['isi'];
            $updateinformasi->kategori = $validatedata['kategori'];
            if ($updateinformasi->save()) {
                return response()->json([
                    'Message: ' => 'Informasi updated with success.',
                    'Informasi: ' => $updateinformasi
                ], 200);
            } else {
                return response([
                    'Message: ' => 'We could not update the Informasi.',
                ], 500);
            }
        } else {
            return response([
                'Message: ' => 'We could not find the Informasi.',
            ], 500);
        }
    }
    public function deleteinformasi(string $id){
        $deleteinformasi = Informasi::find($id);
        if ($deleteinformasi) {
            $deleteinformasi->delete();
            return response()->json([
                'Message: ' => 'Informasi delete with success.',
                'Informasi: ' => $deleteinformasi
            ], 200);
        } else {
            return response([
                'Message: ' => 'We could not delete the Informasi.',
            ], 500);
        }
    }
}
