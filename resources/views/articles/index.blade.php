@extends ('layouts.app')

@section ('content')
<div class="container-fluid pt-5 mt-5">
    <div class="row">

        <div class="col-md-1">
            @include('partials.admin-overlay')
        </div>

        <div class="col-md-8">

            <div class="blog-header">
                <h1>CBC Blog</h1>
                <p class="lead blog-description">Praesent congue nunc velit, sit amet eleifend dui malesuada ut.</p>
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

        <div class="col-md-3">
            @include('partials.blog-sidebar')
        </div>

    </div>

</div>
@endsection
