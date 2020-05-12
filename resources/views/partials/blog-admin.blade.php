@if(isset(auth()->user()->role) && auth()->user()->role == 'staff')

    <div class="row">
        <div class="card-group pb-3">
        <div class="card">
            <a href="/articles/create">
                <button class="btn btn-success btn-sm">New</button>
            </a>
        </div>
        @if (request()->path() !== 'articles')
            @if (($owner ?? ''))
            <div class="card">
                <a href="/articles/{{ $article->slug }}/edit">
                    <button class="btn btn-warning btn-sm">Edit</button>
                </a>
            </div>
            <div class="card">
                <a href="/articles/{{ $article->slug }}/delete">
                    <button class="btn btn-danger btn-sm">Delete</button>
                </a>
            </div>
            @endif
        @endif
        </div>
        <div class="container"><hr></div>
    </div>

@endif
