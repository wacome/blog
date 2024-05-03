<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageBed extends Model
{
    use HasFactory;
    protected $fillable = [
        'url',
        'title',
    ];
}
