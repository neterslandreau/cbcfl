<p class="blog-post-meta">

    <a href="#">{{ $article->user->nickname }}</a> published
    {{ $article->created_at->diffForHumans() }}

</p>
