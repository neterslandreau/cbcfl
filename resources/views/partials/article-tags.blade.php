@if ($tags)
    <div class="col-md-12 pt-5">
    <span class="blockquote"><i class="fas fa-tags"></i>Tags:</span>
    <ul class="list-group list-group-horizontal p-0 m-0">
        <?php //$mtags = preg_split('/,/', $tags); ?>
        @foreach ($tags as $tag)
            <li class="list-group-item p-0 m-0">
                <div class="my-menu-holder">
                    <a class="btn btn-link" href="/articles/tagged/{{ $tag->slug }}">
                        <i class="fas fa-tag fa-1x"></i>
                        <span class="menu-text">{{ $tag->name }}</span>
                    </a>
                </div>
            </li>
        @endforeach
    </ul>
    <hr>
    </div>
@endif
