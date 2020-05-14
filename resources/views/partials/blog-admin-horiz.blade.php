@if(isset(auth()->user()->role) && auth()->user()->role == 'staff')
    <div class="btn-group">

                <a href="/articles/create">
                    <button class="btn btn-success btn-sm">New</button>
                </a>

        @if (request()->path() !== 'articles')
            @if (($owner ?? ''))

                        <a href="/articles/{{ $article->slug }}/edit">
                            <button class="btn btn-warning btn-sm">Edit</button>
                        </a>

                        <a href="/articles/{{ $article->slug }}/delete">
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </a>

            @endif
        @endif
    </div>
@endif
