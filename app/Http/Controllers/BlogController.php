<?php

namespace App\Http\Controllers;

use App\Models\Blog\BlogPost;
use Illuminate\Http\Request;
use League\CommonMark\CommonMarkConverter;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $blogCategories = BlogPost::query()
            ->join('blog_categories', 'blog_posts.blog_category_id', '=', 'blog_categories.id')
            ->select('blog_categories.*')
            ->groupBy('blog_categories.id')
            ->orderByDesc('blog_categories.created_at')
            ->get();
        $blogAuthors = BlogPost::query()
            ->join('blog_authors', 'blog_posts.blog_author_id', '=', 'blog_authors.id')
            ->select('blog_authors.*')
            ->groupBy('blog_authors.id')
            ->get();
        $blogPosts = BlogPost::with('category')
            ->select('blog_posts.*')
            ->groupBy('blog_posts.id')
            ->orderByDesc('blog_posts.created_at')
            ->get();


        return view('blog.index', [
            'blogCategories' => $blogCategories,
            'blogPosts' => $blogPosts,
            'blogAuthors' => $blogAuthors,
        ]);
    }
    public function show(BlogPost $blogPost, $slug)
    {
        $converter = new CommonMarkConverter();
        $blogPost::where('slug', $slug)->firstOrFail();
        $blogPost->content = $converter->convertToHtml($blogPost->content);
        return view('blog.show', [

            'blogPost' => $blogPost,

        ]);
    }
}
