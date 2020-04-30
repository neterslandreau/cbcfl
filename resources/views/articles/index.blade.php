@extends ('layouts.app')

@section ('content')
{{--    @include('layouts.blog-header')--}}
<div class="container mt-5 pt-5">
    <div class="blog-header">
        <div class="container">
            <h1 class="blog-title">The Neters Group</h1>
            <p class="lead blog-description">The place to get all the news you want to hear!</p>
        </div>
    </div>
    <div class="col-sm-8 blog-main">

        @foreach ($articles as $article)

            @include('articles.article')

        @endforeach

        <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
        </nav>

    </div>

</div>
@endsection
