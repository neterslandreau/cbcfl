@extends('layouts.app')

@section ('content')
<div class="container pt-5 mt-5">
    <div class="row">

    <div class="col-sm-8 blog-main">

        @include ('layouts.errors')
        <form method="post" action="/articles/{{ $article->slug }}/edit">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $article->title }}">
            </div>

            <div class="form-group">
                <label for="body">Body</label>
                <textarea id="editor" name="body" class="form-control">{!! $article->body !!}</textarea>
            </div>

            <div class="form-group">
                <label for="tags">Tags</label>
                <input id="tags" name="tags" value="{{ $articleTags }}">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>

    </div>

        @include('partials.blog-sidebar')
    </div>
</div>
<script>
    let tags = [
        @foreach ($allTags as $tag)
        {tag: "{{ $tag }}" },
        @endforeach
    ];
</script>

@endsection
