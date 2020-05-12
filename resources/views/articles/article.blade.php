<div class="blog-post pt-3 mt-0" style="overflow: scroll">
    <h2 class="blog-post-title">
        <a href="/articles/{{ $article->slug }}">
            {{ $article->title }}
        </a>
    </h2>

    @include('partials.byline')

    {!! \Illuminate\Support\Str::words($article->body, 40) !!}


</div>
