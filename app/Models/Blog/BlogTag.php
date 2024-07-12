<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class BlogTag extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    public function blogposts(): BelongsToMany
    {
        return $this->belongsToMany(BlogPost::class, 'blog_post_blog_tag')->withTimestamps();
    }


}
