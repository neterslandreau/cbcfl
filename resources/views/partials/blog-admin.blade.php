@if(isset(auth()->user()->role) && auth()->user()->role == 'staff')
    <div class="btn-group-vertical col-md-1">

        <div class="row">
            <div class="col-12 btn-success">
                <a href="/articles/create">
                    <button class="btn btn-success btn-sm">New</button>
                </a>
            </div>
        </div>

    @if (request()->path() !== 'articles')
        @if (($owner ?? ''))

            <div class="row">
                <div class="col-12 btn-warning">
                    <a href="/articles/{{ $article->slug }}/edit">
                        <button class="btn btn-warning btn-sm">Edit</button>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-12 btn-danger">
                    <a href="/articles/{{ $article->slug }}/delete">
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </a>
                </div>
            </div>

        @endif
    @endif
    </div>
@endif
