<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;


class BlogPost extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = ['blog_category_id', 'title', 'slug', 'content', 'blog_author_id','is_published'];
    protected $casts = [
        'is_published' => 'boolean',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(BlogCategory::class, 'blog_category_id');
    }
    public function tags(): BelongsToMany
    {
      return $this->belongsToMany(BlogTag::class, 'blog_post_blog_tag')->withTimestamps();
    }
    public function author(): BelongsTo
    {
        return $this->belongsTo(BlogAuthor::class,  'blog_author_id');
    }

}
