@extends ('layouts.app')
@section ('content')

<div class="container pt-5 mt-5">

    @include('partials.blog-admin')
    <div class="row pt-2">
    <div class="col-sm-8 blog-main">
        <h1>
            {{ $article->title }}
        </h1>

        @include('partials.byline')

        {!! $article->body !!}

        <hr>

        @if ($tags)
            <h4><i class="fas fa-tags"></i>Tags:</h4>
            <ul class="list-group list-group-horizontal p-0 m-0">
                <?php //$mtags = preg_split('/,/', $tags); ?>
                @foreach ($tags as $tag)
                    <li class="list-group-item p-0 m-0">
                        <div class="my-menu-holder">
                        <a class="btn btn-link" href="/articles/tagged/{{ $tag }}">
                            <i class="fas fa-tag fa-1x"></i>
                            <span class="menu-text">{{ $tag }}</span>
                        </a>
                        </div>
                    </li>
                @endforeach
            </ul>
            <hr>
        @endif

        <div class="comments">
            <ul class="list-group">

                <?php //dump($article->comments); ?>
                @foreach ($article->comments as $comment)

                    <li class="list-group-item">
                        <span style="font-weight: bold;">
                            {{ $comment->user->first_name }} {{ $comment->user->last_name }} said {{ $comment->created_at->diffForHumans() }}: &nbsp;
                        </span>
                        {{ $comment->body }}
                    </li>
                @endforeach

            </ul>
        </div>
        <hr>

        <div class="card">
            <div class="card-block">
                @include('layouts.errors')
                @if (auth()->id())
                    <form method="post" action="/articles/{{ $article->slug }}/comments">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <textarea class="form-control" name="body" placeholder="Your comment here." required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Add Comment</button>
                        </div>
                    </form>
                @else
                    Please login to comment.
                @endif
            </div>
        </div>
    </div>
    @include('partials.blog-sidebar')
</div>
</div>
@endsection
