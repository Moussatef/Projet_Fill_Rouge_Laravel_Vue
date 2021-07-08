<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    use HasFactory, Notifiable, HasApiTokens;

    protected $fillable = [
        'prenom',
        'nom',
        'telephon',
        'date_N',
        'adresse',
        'email',
        'github',
        'linkedin',
        'facebook',
        'instagram',
        'password',
        'img'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function apprenant()
    {
        return $this->hasOne(Apprenant::class , 'foreign_key');
    }
    public function responsable()
    {
        return $this->hasOne(Responsable::class , 'foreign_key');
    }
}
