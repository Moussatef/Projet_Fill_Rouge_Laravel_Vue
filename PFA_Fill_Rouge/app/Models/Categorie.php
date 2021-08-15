<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categorie extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable=[
      "libelle"
    ];
    public function PostProblem()
    {
        return $this->hasMany(PostProblem::class );
    }
}
