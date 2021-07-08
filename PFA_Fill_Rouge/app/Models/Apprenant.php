<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprenant extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_personne'
    ];

    public function personne()
    {
        return $this->belongsTo(Personne::class, 'id_personne');
    }
}
