<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function imgPost()
    {
        return $this->hasMany(ImgPost::class , 'foreign_key');
    }

    public function postProblem()
    {
        return $this->hasOne(PostProblem::class, 'foreign_key');
    }

    public function postProfil()
    {
        return $this->hasOne(PostProfil::class, 'foreign_key');
    }
}
