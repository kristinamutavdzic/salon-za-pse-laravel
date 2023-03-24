<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TerminResource extends JsonResource
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
            'Datum termina -> ' => $this->resource->datum,
            'Vreme termina -> ' => $this->resource->vreme,
            'Frizer -> ' => new FrizerResource($this->resource->frizer),
            'Frizura -> ' => new FrizuraResource($this->resource->frizura)

        ];
    }
}
