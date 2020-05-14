@extends ('layouts.app')

@section ('content')
{{--    @include('layouts.blog-header')--}}
<div class="container mt-5 pt-5">
{{--    @include('partials.blog-sidebar')--}}
    @include('partials.blog-admin')
    <div class="row">
    <div class="col-sm-10 blog-main">
        <div class="blog-header">
            <div class="container">
                <h1 class="blog-title">CBC Blog</h1>
                <p class="lead blog-description">Praesent congue nunc velit, sit amet eleifend dui malesuada ut.</p>
            </div>
        </div>

        @foreach ($articles as $article)

            @include('articles.article')

        @endforeach

            <div class="col-2 ml-auto mr-auto pt-5">
                @if (!preg_match('/\/tagged\//', request()->path()))
                {{ $articles->links() }}
                @endif
            </div>

    </div>

    @include('partials.blog-sidebar')

    </div>

</div>
@endsection
