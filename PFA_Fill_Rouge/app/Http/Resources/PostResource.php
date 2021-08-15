<?php

namespace App\Http\Resources;

use App\Models\Commente;
use App\Models\Like;
use App\Models\Personne;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
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
            'img' => $this->personne->img,
            "titre" => $this->titre,
            "description" => $this->description,
            "public" => $this->public,
            "created_at" => $this->created_at->diffForHumans(),
            "updated_at" => $this->updated_at->diffForHumans(),
            "deleted_at" => $this->deleted_at,
            "img_post" => $this->imgPost,
            "like" => LikeResource::collection(Like::where('post_id', '=', $this->id)->get()),
            "comment" => CommentResource::collection(Commente::where('post_id', '=', $this->id)->get()),
            'categorie' => $this->postProblem? $this->postProblem->categorie : null

        ];
    }
}
