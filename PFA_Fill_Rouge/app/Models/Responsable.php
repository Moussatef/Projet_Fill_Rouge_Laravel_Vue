<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
    use HasFactory;
    protected $fillable = [
        'personne_id'
    ];

    public function personne()
    {
        return $this->belongsTo(Personne::class);
    }
}
