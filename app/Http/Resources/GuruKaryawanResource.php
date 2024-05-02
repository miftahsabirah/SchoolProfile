<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GuruKaryawanResource extends JsonResource
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
            'jabatan_id' => $this->jabatan_id,
            'nama_guru' => $this->nama_guru,
            'nip' => $this->nip,
            'nomor_telepon' => $this->nomor_telepon,
            'jenis_guru' => $this->jenis_guru,
        ];
    }
}
