<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ApprenantResource extends JsonResource
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
            'personne_id' => $this->personne_id,
            'full_name' => $this->personne->nom . ' ' . $this->personne->prenom,
            "created_at" => $this->personne->created_at->diffForHumans(),
            "updated_at" => $this->personne->updated_at->diffForHumans(),
            'email' => $this->personne->email,
            'campus' => $this->personne->campus->campus_nom,
            'telephon' => $this->personne->telephon,
            'date_N' => $this->personne->date_N,
            'github' => $this->personne->github,
            'facebook' => $this->personne->facebook,
            'instagram' => $this->personne->instagram,
            'linkedin' => $this->personne->linkedin,
            'img' => $this->personne->img,
            'cover' => $this->personne->cover,
            'bio' => $this->personne->bio,
            'validation' => $this->personne->validation,
            'adresse' => $this->personne->adresse,
            'nb_Post' => $this->personne->post->count(),
            'nb_comment' => $this->personne->receivedComments->count(),
            'nb_like' => $this->personne->receivedLikes->count(),
        ];
    }
}
