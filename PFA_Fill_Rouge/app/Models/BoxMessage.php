<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoxMessage extends Model
{
    use HasFactory;
    protected $fillable = [
        "email",
        "body_message",
        "complet_nom"
    ];
}
