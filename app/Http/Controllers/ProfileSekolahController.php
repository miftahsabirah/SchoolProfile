<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Akreditasi;
use App\Models\ProfileSekolah;
use Illuminate\Http\Request;

class ProfileSekolahController extends Controller
{
    public function indexprofileschool()
    {
        $profile = ProfileSekolah::all();
        return response()->json($profile);
    }

    public function updateprofile1(Request $request, string $id)
    {
        $updateprofile1 = ProfileSekolah::find($id);
        if ($updateprofile1) {
            $validatedata = $request->validate([
                'sambuatan_kepsek' => 'required',
                
            ]);
            $updateprofile1->sambuatan_kepsek = $validatedata['sambuatan_kepsek'];
            if ($updateprofile1->save()) {

                return response()->json([
                    'Message: ' => 'updateprofile1 updated with success.',
                    'updateprofile1: ' => $updateprofile1
                ], 200);
            } else {
                return response([
                    'Message: ' => 'We could not update the updateprofile1.',
                ], 500);
            }
        } else {
            return response([
                'Message: ' => 'We could not find the updateprofile1.',
            ], 500);
        }
    }




    public function indexakreditasi(){

        $akreditasi = Akreditasi::all();
        return response()->json($akreditasi);
    }
}
