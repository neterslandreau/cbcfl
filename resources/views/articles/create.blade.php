@extends('layouts.app')

@section ('content')
<div class="container-fluid pt-5 mt-5">
    <div class="row">

        <div class="col-md-1">
            @include('partials.admin-overlay')
        </div>

    <div class="col-md-8">

        <h1>Create Article</h1>

        <hr>

        @include ('layouts.errors')
        <form method="post" action="/articles">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>

            <div class="form-group">
                <label for="body">Body</label>
                <textarea id="editor" name="body" class="form-control"></textarea>
{{--                <div id="editor" name="body"></div>--}}
            </div>

            <div class="form-group">
                <label for="tags">Tags</label>
                <input id="tags" name="tags">
            </div>

            <div class="form-group">
                <button id="publish" type="submit" class="btn btn-primary">Publish</button>
            </div>
        </form>

    </div>

        <div class="col-md-3">
            @include('partials.blog-sidebar')
        </div>

    </div>

</div>

<script>
    let tags = [
        @foreach ($tags as $tag)
        {tag: "{{ $tag }}" },
        @endforeach
    ];
</script>

@endsection
