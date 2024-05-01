<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class informasiResource extends JsonResource
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
            'guru_karyawan_id' => $this->guru_karyawan_id,
            'mata_pelajaran_id' => $this->mata_pelajaran_id,
            'users_id' => $this->users_id,
            'isi' => $this->isi,
        ];
    }
}
