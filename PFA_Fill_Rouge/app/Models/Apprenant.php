<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Apprenant extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'personne_id'
    ];

    public function personne()
    {
        return $this->belongsTo(Personne::class, 'personne_id');
    }
}
