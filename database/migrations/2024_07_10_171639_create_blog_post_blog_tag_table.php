<?php

use App\Models\Blog\BlogPost;
use App\Models\Blog\BlogTag;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blog_post_blog_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(BlogPost::class);
            $table->foreignIdFor(BlogTag::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_post_blog_tag');
    }
};
