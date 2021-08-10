<?php

namespace App\Http\Resources;

use App\Models\Personne;
use Illuminate\Http\Resources\Json\JsonResource;

class LikeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'post_id' => $this->post_id,
            'personne_id' => $this->personne_id,
            'nom' => $this->personne->nom,
            'prenom' => $this->personne->prenom,
            'img' => $this->personne->img,
            'created_at' => $this->created_at,

        ];
    }
}
