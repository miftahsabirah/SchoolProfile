<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class KurikulumResource extends JsonResource
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
            'jenis_kurikulum' => $this->jenis_kurikulum,
            'deskripsi' => $this->deskripsi,
            'file_kurikulum' => $this->file_kurikulum,
        ];
    }
}
