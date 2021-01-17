<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- Title --}}
    <title>@yield('title')</title>
    {{-- Style --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @yield('head')
</head>

<body>
    <header>
        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper pl-4">
                    <a class="brand-logo" href="{{ route('home') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
    
                    <ul id="nav-mobile" class="right">
                        <li>
                            <a class="dropdown-trigger btn-floating" href="#!" data-target="topnav-dropdown1">
                                <i class="material-icons">menu</i>
                            </a>
                        </li>
                    </ul>
                    @auth
                        <ul id="topnav-dropdown1" class="dropdown-content">
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                            </li>
                        </ul>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @else
                        <ul id="topnav-dropdown1" class="dropdown-content">
                            <li>
                                <a href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li>
                                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        </ul>
                    @endauth
                </div>
            </nav>
        </div>
    </header>

    <main class="my-5">
        @yield('content')
    </main>

    <footer>
        {{-- Script --}}
        <script src="{{ asset('js/app.js') }}"></script>

        {{-- Flash Message --}}
        @if (session('status'))
            <script>
                M.toast({html: "{{ session('status') }}", classes: 'rounded'});
            </script>
        @endif

        @yield('footer')
    </footer>
</body>

</html>
