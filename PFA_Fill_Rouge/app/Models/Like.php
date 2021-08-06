<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Like extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'personne_id',
        'post_id',
    ];


    public function personne()
    {
        return $this->belongsTo(Personne::class);
    }
    public function post()
    {
        return $this->hasOne(Post::class);
    }
}
