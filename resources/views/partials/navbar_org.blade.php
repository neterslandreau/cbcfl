<header id="header">
<nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm p-0">
    <div class="container-fluid">
        <a class="navbar-brand ml-3" href="{{ route('front') }}">
{{--            {{ config('app.name', 'Laravel') }}--}}
            <img src="/img/cbcfl-logo.png">
        </a>
        <button class="navbar-toggler mr-3" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">{{ __('Home') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('front') }}#about">{{ __('About Us') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('front') }}#services">Ministries</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('front') }}#team">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('front') }}#contact">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('front') }}#contact">Blog</a>
                </li>
                <!-- Authentication Links -->
                @guest
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                    </li>--}}
                    @if (Route::has('register'))
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                        </li>--}}
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->first_name }} {{ Auth::user()->last_name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/home">Admin</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
</header>
