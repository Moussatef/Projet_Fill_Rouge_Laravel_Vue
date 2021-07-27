<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostProblem extends Model
{
    use HasFactory;
    protected $fillable = [
        'post_id',
        'categorie_id'
    ];
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function category()
    {
        return $this->belongsTo(Categorie::class);
    }


}
