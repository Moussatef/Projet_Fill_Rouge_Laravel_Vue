<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commente extends Model
{
    use HasFactory;

    protected $fillable = [
        'personne_id',
        'post_id',
        'comment',
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
