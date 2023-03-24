<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FrizuraResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'ID -> ' => $this->resource->id,
            'Naziv frizure za pse -> ' => $this->resource->naziv,
            'Vreme trajanja pravljenja frizure-> ' => $this->resource->vreme,
            'Tezina pravljenja frizure -> ' => $this->resource->tezinaFrizure,
            'Cena frizure -> ' => $this->resource->cena,
        ];
    }
}
