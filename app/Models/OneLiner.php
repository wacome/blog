<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OneLiner extends Model
{
    use HasFactory;
    protected $fillable = [
        'content',
        'published_at',
        'source',
        'author',
    ];

    protected $dates = [
        'published_at',
    ];
}
