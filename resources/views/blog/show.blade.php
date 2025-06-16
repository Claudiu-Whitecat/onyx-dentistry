<x-layout>
    <section class="blog-inner">
        <div class="container">
            {{$blogCategory->name}}
            {{$blogPost->title}}
            {{$blogPost->content}}
            {{$blogAuthor->name}}
        </div>
    </section>
</x-layout>
