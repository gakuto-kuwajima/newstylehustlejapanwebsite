<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        {{-- 後の章で説明します -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- 各ページごとにtitleタグを入れるために@yieldで空けておきます。 --}}

        <link rel="icon" href="{{ asset('img/newstylehustlejapanwebsite-icon16.png')}}" sizes="16x16" type="image/png" />
        <link rel="icon" href="{{ asset('img/newstylehustlejapanwebsite-icon32.png')}}" sizes="32x32" type="image/png" />
        <link rel="icon" href="{{ asset('img/newstylehustlejapanwebsite-icon48.png')}}" sizes="48x48" type="image/png" />
        <link rel="icon" href="{{ asset('img/newstylehustlejapanwebsite-icon64.png')}}" sizes="62x62" type="image/png" />

        <link rel="apple-touch-icon-precomposed" href="{{ asset('img/smartphone-icon.png')}}" />

        <meta name="msapplication-TileImage" content="{{ asset('img/windows-pin.png')}}" />
        <meta name="msapplication-TileColor" content="#4CE096"/>

        <title>@yield('title')</title>
        <meta name="robots" content="noindex,nofollow">

        <!-- Scripts -->
        {{-- Laravel標準で用意されているJavascriptを読み込みます --}}
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        {{-- Laravel標準で用意されているCSSを読み込みます --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        {{-- この章の後半で作成するCSSを読み込みます --}}
        <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            {{-- 画面上部に表示するナビゲーションバーです。 --}}
            <nav class="navbar navbar-expand-md navbar-light navbar-laravel admin-nav">
                <div class="container">
                    <div class="admin-navbar-logo">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name', 'NewStyleHustleJapan') }}
                        </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">

                        <!-- Authentication Links -->
                        {{-- ログインしていなかったらログイン画面へのリンクを表示　--}}
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login')}}</a></li>
                        {{-- ログインしていたらユーザー名とログアウトボタンを表示　--}}
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                        {{ __('Logout')}}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout')}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                            {{-- 以上までを追記 --}}
                        </ul>
                    </div>
                </div>
            </nav>
            {{-- ここまでナビゲーションバー --}}

            <main class="py-4">
                {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}
                @yield('content')
            </main>
        </div>
    </body>
</html>
