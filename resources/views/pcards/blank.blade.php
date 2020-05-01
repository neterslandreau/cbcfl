<div class="card col-md-6 col-lg-6">
    <img src="/img/{{ $image }}" class="card-img-top team-img" alt="...">
    <div class="card-body">
        <h3 class="card-title">{{ $name }}</h3>
        <p class="preschool-role">
            {{ $role }}
        </p>

        <p class="card-text preschool-bio">
            {{ $bio }}
        </p>

        <p class="preschool-email">
            <a class="btn btn-primary" href="mailto:{{ $email }}">Email {{ $name }}</a>
        </p>

    </div>
</div>
