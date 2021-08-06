<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class ImgPost extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'post_id',
        'path',
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
    public function getPathAttribute($value)
    {
        return Storage::url("postImage/" . $value);
    }
}
