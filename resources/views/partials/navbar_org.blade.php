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
                <li class="nav-item align-content-center">
                    <div class="my-menu-holder">
                    <a class="nav-link" href="/">
                        <i class="fas fa-donate fa-3x" style="color: darkgreen;"></i>
                        <br><span>Donate</span>
                    </a>
                    </div>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item align-content-center">
                    <div class="my-menu-holder">
                    <a id="menu_hero" class="nav-link" href="/">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="menu-text">{{ __('Home') }}</span>
                    </a>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="my-menu-holder">
                    <a id="menu_about" class="nav-link" href="#">
                        <i class="fas fa-info-circle fa-2x"></i>
                        <span class="menu-text">{{ __('About Us') }}</span>
                    </a>
                    </div>
                </li>

                <li class="nav-item">
                    <div class="my-menu-holder">
                        <a id="menu_team" class="nav-link" href="{{ route('front') }}#team">
                            <i class="fas fa-user-friends fa-2x"></i>
                            <span class="menu-text">Team</span>
                        </a>
                    </div>
                </li>

                <li class="nav-item">
                    <div class="my-menu-holder">
                        <a id="menu_contact" class="nav-link" href="{{ route('front') }}#contact">
                            <i class="far fa-address-book fa-2x"></i>
                            <span class="menu-text">Contact Us</span>
                        </a>
                    </div>
                </li>

                <li class="nav-item dropdown ">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-hand-holding-heart fa-2x"></i>
                        <span class="menu-text">Ministries</span>
                        <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <ul class="navbar-nav">

                            <li class="dropdown-item my-menu-holder">
                                <a class="nav-link" href="{{ route('preschool') }}">
                                    <i class="fas fa-school fa-2x"></i>
                                    <span class="menu-text">Children's Ministry</span>
                                </a>
                            </li>

                            <li class="dropdown-item my-menu-holder">
                                <a class="nav-link" href="{{ route('prayerteam') }}">
                                    <i class="fas fa-praying-hands fa-2x"></i>
                                    <span class="menu-text">Prayer Team</span>
                                </a>
                            </li>

                            <li class="dropdown-item my-menu-holder">
                                <a class="nav-link" href="{{ route('women') }}">
                                    <i class="fas fa-praying-hands fa-2x"></i>
                                    <span class="menu-text">Women's Ministry</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li class="nav-item my-menu-holder">
                    <div class="my-menu-holder">
                        <a class="nav-link" href="{{ route('blog') }}">
                            <i class="fas fa-blog fa-2x"></i>
                            <span class="menu-text">Blog</span>
                        </a>
                    </div>
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
