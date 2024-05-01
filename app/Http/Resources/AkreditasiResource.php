<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AkreditasiResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'profile_sekolah_id' => $this->profile_sekolah_id,
            'npsn' => $this->npsn,
            'status' => $this->status,
            'bentuk_pendidikan' => $this->bentuk_pendidikan,
            'status_kepemilikan' => $this->status_kepemilikan,
            'sk_pendirian_sekolah' => $this->sk_pendirian_sekolah,
            'tanggal_sk_pendirian' => $this->tanggal_sk_pendirian,
            'sk_izin_operasional' => $this->sk_izin_operasional,
            'tanggal_sk_izin_operasional' => $this->tanggal_sk_izin_operasional,
            'akreditasi' => $this->akreditasi,
            'file_berkas_akreditasi' => $this->file_berkas_akreditasi,
        ];
    }
}
