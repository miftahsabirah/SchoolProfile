<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProfileSekolahResource extends JsonResource
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
            'nama_sekolah' => $this->nama_sekolah,
            'alamat' => $this->alamat,
            'email' => $this->email,
            'kode_pos' => $this->kode_pos,
            'deskripsi_sejarah' => $this->deskripsi_sejarah,
            'visi_misi' => $this->visi_misi,
            'motto' => $this->motto,
            'sambutan_kepsek' => $this->sambutan_kepsek,
            'tujuan_sekolah' => $this->tujuan_sekolah,
            'logo_sekolah' => $this->logo_sekolah,
        ];
    }
}
