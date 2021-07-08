<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostProblem extends Model
{
    use HasFactory;
    public function post()
    {
        return $this->belongsTo(Post::class, 'foreign_key');
    }

    public function category()
    {
        return $this->belongsTo(Categorie::class, 'foreign_key');
    }


}
