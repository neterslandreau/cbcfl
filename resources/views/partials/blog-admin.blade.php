@if(isset(auth()->user()->role) && auth()->user()->role == 'staff')

    <div class="row">
        <div class="col-sm-1">
            <a href="/articles/create">
                <button class="btn btn-success btn-sm">New</button>
            </a>
        </div>
        @if (request()->path() !== 'articles')
            <div class="col-sm-1">
                <a href="/articles/{{ $article->slug }}/edit">
                    <button class="btn btn-warning btn-sm">Edit</button>
                </a>
            </div>
            <div class="col-sm-1">
                <a href="/articles/{{ $article->slug }}/delete">
                    <button class="btn btn-danger btn-sm">Delete</button>
                </a>
            </div>
        @endif
    </div>

@endif
