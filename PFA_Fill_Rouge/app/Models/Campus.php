<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Campus extends Model
{
    use HasFactory;

    protected $fillable = [
        'campus_nom',
        'ville',
        'adresse',
        'fex',
        'email',
        'password',
        'github',
        'linkedin',
        'facebook',
        'instagram',
        'img',
        'cover',
    ];

    public function personne()
    {
        return $this->hasMany(Personne::class);
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
