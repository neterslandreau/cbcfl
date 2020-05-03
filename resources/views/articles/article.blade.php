<div class="blog-post pt-5 mt-5">
    <h2 class="blog-post-title">
        <a href="/articles/{{ $article->slug }}">
            {{ $article->title }}
        </a>
    </h2>

    <p class="blog-post-meta">

        <a href="#">{{ $article->user->nickname }}</a> on
        {{ $article->created_at->toFormattedDateString() }}

    </p>

    {{ $article->body }}


</div>
