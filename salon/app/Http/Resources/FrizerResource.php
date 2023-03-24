<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FrizerResource extends JsonResource
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
            'Ime i prezime frizera -> ' => $this->resource->imePrezime,
            'Godine iskustva -> ' => $this->resource->godineIskustva,
            'Rang frizera -> ' => $this->resource->rangFrizera,
            'Kontakt telefon -> '=> $this->resource->kontakt,
        ];
        
    
    }
}
