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
