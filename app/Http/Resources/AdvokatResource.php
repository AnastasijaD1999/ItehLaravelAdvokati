<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AdvokatResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->resource->id,
            'ime' => $this->resource->ime,
            'prezime' => $this->resource->prezime,
            'brojlicence' => $this->resource->brojlicence,
            'email' => $this->resource->email,
            'telefon' => $this->resource->telefon,
            'kancelarija' => new AdvokatskaKancelarijaResource($this->resource->kancelarija)
        ];
    }
}
