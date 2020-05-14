<div class="col-sm-2 blog-sidebar">

    <div class="sidebar-module">
        <h4>Archives</h4>
        <ol class="list-unstyled">

            @foreach ($archives as $archive)
                <li>
                    <a href="\?month={{ $archive->month }}&year={{ $archive->year }}">
                        {{ $archive->month }} {{ $archive->year }}
                    </a>
                </li>
            @endforeach

        </ol>
    </div>

    <div class="sidebar-module">
        <h4>Tags</h4>
        <div id="tagcloud">

            @foreach ($tags as $tag)
                <a href="/articles/tagged/{{ $tag->slug }}" rel="{{ $tag->count }}">{{ $tag->name }}</a>
            @endforeach

        </div>

    </div>

</div>
