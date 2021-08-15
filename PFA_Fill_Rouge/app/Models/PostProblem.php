<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostProblem extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'post_id',
        'categorie_id'
    ];
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }


}
