@if(!strlen($article->user->nickname))
    @php
        $article->user->nickname = $article->user->first_name . ' ' . $article->user->last_name;
    @endphp
@endif
<p class="blog-post-meta">

    <a href="#">{{ $article->user->nickname }}</a> published
    {{ $article->created_at->diffForHumans() }}

</p>
