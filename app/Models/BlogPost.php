<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class BlogPost extends Model
{
    use HasFactory;

    protected $fillable = ['blog_category_id', 'title', 'slug', 'content', 'is_published'];

    public function category()
    {
        return $this->belongsTo(BlogCategory::class, 'blog_category_id');
    }
    public function tags()
    {
      return $this->belongsToMany(BlogTag::class, 'blog_post_tag', 'blog_post_id', 'blog_tag_id');
    }


}
