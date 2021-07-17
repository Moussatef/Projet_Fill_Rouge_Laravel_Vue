<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $fillable = [
        'personne_id',
        'post_id',
    ];


    public function personne()
    {
        return $this->hasOne(Personne::class );
    }
    public function post()
    {
        return $this->hasOne(Post::class );
    }
}
