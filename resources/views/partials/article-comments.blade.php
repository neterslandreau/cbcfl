<div class="comments">
    <ul class="list-group">

        @foreach ($article->comments as $comment)

            <li class="list-group-item">
                        <span style="font-weight: bold;">
                            {{ $comment->user->first_name }} {{ $comment->user->last_name }} said {{ $comment->created_at->diffForHumans() }}: &nbsp;
                        </span>
                {{ $comment->body }}
            </li>
        @endforeach

    </ul>
</div>
