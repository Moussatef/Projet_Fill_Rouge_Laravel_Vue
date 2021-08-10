<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Apprenant extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'personne_id'
    ];

    public function personne()
    {
        return $this->belongsTo(Personne::class);
    }
}
