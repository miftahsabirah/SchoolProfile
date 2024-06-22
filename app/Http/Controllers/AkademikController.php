<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\AkademikResource;
use App\Models\Akademik;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class AkademikController extends Controller
{
    public function indexviewkalender(){
        return view('akademik.kalenderAkademik');
    }
    public function indexakademik(){
        $akademiks = Akademik::with('kurikulum')->get();
        return response()->json($akademiks);
    }

    public function postakademik(Request $request){
        $this->validate($request, [
            'kurikulum_id' => 'required',
            'tahun_ajaran'=> 'required',
            'semester'=> 'required',
            'tanggal_mulai'=> 'required',
            'tanggal_selesai'=> 'required',
            'deskripsi'=> 'required',
            'file_berkas'=> 'required|file|mimes:pdf',
        ]);
    
        $file = $request->file('file_berkas');
        // Simpan file kurikulum
        $path = $file->storeAs('public/akademik', $file->getClientOriginalName());
        if (!$path) {
            return response()->json(['Message: ' => 'Failed to save file'], 500);
        }
    
        // Buat entri kurikulum dengan nama file
        $postakademik = Akademik::create([
            'kurikulum_id' => $request->input('kurikulum_id'),
            'tahun_ajaran' => $request->input('tahun_ajaran'),
            'semester' => $request->input('semester'),
            'tanggal_mulai' => $request->input('tanggal_mulai'),
            'tanggal_selesai' => $request->input('tanggal_selesai'),
            'deskripsi' => $request->input('deskripsi'),
            'file_berkas' => $file->getClientOriginalName(),
        ]);
    
        if ($postakademik) {
            return response()->json([
                'Message: ' => 'Success!',
                'akademik created: ' => $postakademik
            ], 200);
        } else {
            Storage::delete($path);
            return response()->json([
                'Message: ' => 'We could not create a new akademik.',
            ], 500);
        }
    }

    public function updateakademik(Request $request, string $id){
        $updateakademik = Akademik::find($id);
        $this->validate($request, [
            'kurikulum_id' => 'required',
            'tahun_ajaran'=> 'required',
            'semester'=> 'required',
            'tanggal_mulai'=> 'required',
            'tanggal_selesai'=> 'required',
            'deskripsi'=> 'required',
            'file_berkas'=> 'nullable|file|mimes:pdf',
        ]);
    
        
        $updateakademik->kurikulum_id = $request->input('kurikulum_id');
        $updateakademik->tahun_ajaran = $request->input('tahun_ajaran');
        $updateakademik->semester = $request->input('semester');
        $updateakademik->tanggal_mulai = $request->input('tanggal_mulai');
        $updateakademik->tanggal_selesai = $request->input('tanggal_selesai');
        $updateakademik->deskripsi = $request->input('deskripsi');
    
        if ($request->hasFile('file_berkas')) {
            // Hapus file kurikulum lama jika ada
            if ($updateakademik->file_berkas) {
                Storage::delete('public/akademik/' . $updateakademik->file_berkas);
            }
            // Simpan file kurikulum baru
            $file = $request->file('file_berkas');
            $path = $file->storeAs('public/akademik', $file->getClientOriginalName());
            $updateakademik->file_berkas = $file->getClientOriginalName();
        }
    
        if ($updateakademik->save()) {
            return response()->json(['status' => true, 'message' => 'akademik updated successfully', 'akademik' => $updateakademik], 200);
        } else {
            return response()->json(['status' => false, 'message' => 'Failed to update akademik'], 500);
        }
    }

    public function deleteakademik(string $id){
        $deleteakademik = Akademik::find($id);
    
        if (!$deleteakademik) {
            return response()->json(['status' => false, 'message' => 'Kurikulum not found'], 404);
        }
    
        // Hapus file kurikulum jika ada
        if ($deleteakademik->file_kurikulum) {
            Storage::delete('public/akademik/' . $deleteakademik->file_kurikulum);
        }
    
        if ($deleteakademik->delete()) {
            return response()->json(['status' => true, 'message' => 'akademik deleted successfully'], 200);
        } else {
            return response()->json(['status' => false, 'message' => 'Failed to delete akademik'], 500);
        }
    }

}
