<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'published_at',
        'updated_at',
        'created_at',
        'author_id',
        'is_reprinted',
        'original_author',
        'original_source',
        'article_img',
    ];

    protected $dates = [
        'published_at',
        'updated_at',
        'created_at',
    ];

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'article_tag_pivot');
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'article_category_pivot');
    }

    public function archives(): BelongsToMany
    {
        return $this->belongsToMany(Archive::class, 'article_archive_pivot');
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function getIsReprintedAttribute($value)
    {
        return $value ? 'Yes' : 'No';
    }

    public function getOriginalAuthorAttribute($value)
    {
        return $value ?: 'Unknown';
    }

    public function getOriginalSourceAttribute($value)
    {
        return $value ?: 'Unknown';
    }
}
