<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Personne extends Authenticatable
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
        'img',
        'cover',
        'bio',
        'validation',
        'campus_id',
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

    public function campus()
    {
        return $this->belongsTo(Campus::class);
    }
    public function apprenant()
    {
        return $this->hasOne(Apprenant::class);
    }
    public function responsable()
    {
        return $this->hasOne(Responsable::class);
    }

    public function post()
    {
        return $this->hasMany(Post::class);
    }
    public function comment()
    {
        return $this->hasMany(Commente::class);
    }
    public function like()
    {
        return $this->hasMany(Like::class);
    }

    public function receivedLikes()
    {
        return $this->hasManyThrough(Like::class, Post::class);
    }

    public function receivedComments()
    {
        return $this->hasManyThrough(Commente::class, Post::class);
    }
    public function getImgAttribute($value)
    {
        return Storage::url("image/" . $value);
    }
    public function getCoverAttribute($value)
    {
        return Storage::url("cover/" . $value);
    }
}
