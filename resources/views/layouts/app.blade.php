<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{ asset('img/newstylehustlejapanwebsite-icon16.png')}}" sizes="16x16" type="image/png" />
    <link rel="icon" href="{{ asset('img/newstylehustlejapanwebsite-icon32.png')}}" sizes="32x32" type="image/png" />
    <link rel="icon" href="{{ asset('img/newstylehustlejapanwebsite-icon48.png')}}" sizes="48x48" type="image/png" />
    <link rel="icon" href="{{ asset('img/newstylehustlejapanwebsite-icon64.png')}}" sizes="62x62" type="image/png" />

    <link rel="apple-touch-icon-precomposed" href="{{ asset('img/smartphone-icon.png')}}" />

    <meta name="msapplication-TileImage" content="{{ asset('img/windows-pin.png')}}" />
    <meta name="msapplication-TileColor" content="#4CE096"/>

    <meta name="robots" content="noindex,nofollow">

    <title>@yield('title') | GAKUTOのニュースタイルハッスル情報部屋</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm admin-nav">
            <div class="container">
                <div class="admin-navbar-logo">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'NewStyleHustleJapan') }}
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
