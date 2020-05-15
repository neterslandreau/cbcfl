@extends ('layouts.app')
@section ('content')

<div class="container-fluid pt-5 mt-5">
    <div class="row">

        <div class="col-md-1">
            @include('partials.admin-overlay')
        </div>

        <div class="col-md-8 pt-3 pb-3">
            <a id="back-btn" href="#" onclick="javascript:history.back();return false;"><i class="fas fa-arrow-left fa-2x"></i></a>
            <h1>
                {{ $article->title }}
            </h1>

            @include('partials.byline')

            {!! $article->body !!}

            @include('partials.article-tags')

            @include('partials.article-comments')

            @include('partials.article-comment-add')

        </div>

        <div class="col-md-3">
            @include('partials.blog-sidebar')
        </div>

    </div>
</div>
@endsection
