@if(Auth::user() && !(preg_match('/edit$/', request()->path())) )
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        menu
    </button>
@else
    <button class="btn btn-primary d-none">
        menu
    </button>

@endif
