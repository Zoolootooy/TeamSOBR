<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/"><i class="fas fa-crosshairs"></i></i>TeamSOBR</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Главная <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/info">О клане</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/administration">Администрация</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Post
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Create new post</a>
                    <a class="dropdown-item" href="#">Show my posts</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item active">
            @guest
                <li class="nav-item text-center">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item text-center">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                {{--                        <li class="text-center">--}}
                {{--                            <a class="nav-link" href="{{ route('members_list_admin') }}">--}}
                {{--                                {{ __('Home') }}--}}
                {{--                            </a>--}}
                {{--                        </li>--}}
                @if (Auth::user()->isAdmin == 1)
                    <li class="text-center">
                        <a class="nav-link" href="{{ route('admin') }}">
                            {{ __('Admin panel') }}
                        </a>
                    </li>
                @endif
                <li class="text-center">
                    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                          style="display: none;">
                        @csrf
                    </form>
                </li>
                @endguest
            </li>
        </ul>
    </div>
</nav>
