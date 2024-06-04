<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    const DRAFT = 0;
    const PUBLISHED = 1;

    const STATUS = [
        self::DRAFT => "draft",
        self::PUBLISHED => "published",
    ];

    protected $fillable = [
        'title',
        'slug',
        'tags',
        'body',
        'user_id',
        'category_id',
        'thumbnail',
        'isPublished',
    ];

    protected $casts = [
        'tags' => 'array',
    ];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function getImageAttribute()
    {
        $thumbnail = $this->attributes['thumbnail'];

        return asset('storage/' . $thumbnail);
    }

    public function getExcerpt()
    {
        return Str::limit($this->body, 100);
    }

    public function isPublished(): bool
    {
        return $this->isPublished === self::PUBLISHED;
    }

    public function getDescriptionAttribute()
    {
        $content = $this->attributes['body'];

        if (mb_strlen($content) > 98) {
            $description = mb_substr($content, 0, 98);
        } else {
            $description = $content;
        }

        $pattern = '/<[^>]+?\/>|<[^>]+>/i';

        $cleanedText = strip_tags($description);
        $description = preg_replace($pattern, '', $cleanedText);

        return $description . ' ...';
    }
}
