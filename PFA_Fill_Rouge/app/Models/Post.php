<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'personne_id',
        'titre',
        'description',
        'public',
    ];

    public function personne()
    {
        return $this->belongsTo(Personne::class);
    }
    public function imgPost()
    {
        return $this->hasMany(ImgPost::class);
    }

    public function postProblem()
    {
        return $this->hasOne(PostProblem::class);
    }

    public function postProfil()
    {
        return $this->hasOne(PostProfil::class);
    }

    public function comment()
    {
        return $this->hasMany(Commente::class);
    }
    public function like()
    {
        return $this->hasMany(Like::class);
    }
    public function checkLike(Personne $personne)
    {
        return $this->like->contains('personne_id', $personne->id);
    }
}
