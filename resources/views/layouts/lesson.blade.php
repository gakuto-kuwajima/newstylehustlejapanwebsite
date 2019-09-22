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
        <meta name="description" content="@yield('metadescription')" />

        <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
        <meta property="og:title" content="@yield('ogtitle')" />
        <meta property="og:type" content="article" />
        <meta property="og:description" content="@yield('metadescription')" />
        <meta property="og:url" content="@yield('ogurl')" />
        <meta property="og:image" content="@yield('ogimage')" />
        <meta property="og:site_name" content="GAKUTOのニュースタイルハッスル情報部屋 | GAKUTO'S NEW STYLE HUSTLE INFORMATION ROOM" />
        <meta property="og:locale" content="ja_JP" />
        <meta property="fb:app_id" content="714173509023789" />
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@mydance365">

        <link rel="icon" href="{{ asset('img/newstylehustlejapanwebsite-icon16.png')}}" sizes="16x16" type="image/png" />
        <link rel="icon" href="{{ asset('img/newstylehustlejapanwebsite-icon32.png')}}" sizes="32x32" type="image/png" />
        <link rel="icon" href="{{ asset('img/newstylehustlejapanwebsite-icon48.png')}}" sizes="48x48" type="image/png" />
        <link rel="icon" href="{{ asset('img/newstylehustlejapanwebsite-icon64.png')}}" sizes="62x62" type="image/png" />

        <link rel="apple-touch-icon-precomposed" href="{{ asset('img/smartphone-icon.png')}}" />

        <meta name="msapplication-TileImage" content="{{ asset('img/windows-pin.png')}}" />
        <meta name="msapplication-TileColor" content="#4CE096"/>

        <title>@yield('title') | GAKUTOのニュースタイルハッスル情報部屋</title>

        <!-- Scripts -->
        {{-- Laravel標準で用意されているJavascriptを読み込みます --}}
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/ofi.min.js') }}"></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

        <!-- Styles -->
        {{-- Laravel標準で用意されているCSSを読み込みます --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        {{-- この章の後半で作成するCSSを読み込みます --}}
        <link href="{{ asset('css/lesson.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            {{-- 画面上部に表示するナビゲーションバーです。 --}}
            <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('img/newstylehustlejapanwebsite-logo.png') }}" alt="NEW STYLE HUSTLE JAPAN WEBSITEのロゴ">
                    </a>
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
                             <li><a href="{{ action('ReadingPageController@toppage')}}">HOME</a></li>
                             <li class="dropdown">
                               <a class="dropdown-toggle" href="/" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 WHAT'S NEW STYLE HUSTLE
                               </a>
                               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                 <a class="dropdown-item" href="/about-newstylehustle">ABOUT NEW STYLE HUSTLE</a>
                                 <a class="dropdown-item" href="/featured-video">FEATURED VIDEO</a>
                               </div>
                             </li>
                             <li><a href="/news">NEWS</a></li>
                             <li><a href="/community">COMMUNITY</a></li>
                             <li><a href="/lesson">LESSON</a></li>
                             <li><a href="/contact">CONTACT</a></li>
                            {{-- 以上までを追記 --}}
                        </ul>
                        <div class="form-search mx-auto">
                        <form class="form-inline my-2 my-lg-0" action="{{ action('SearchController@index') }}" method="get">
                            <input type="search" class="form-control search-form mr-sm-2" placeholder="search..." aria-label="search..." name="keywords" value="{{ $keywords }}">
                            <button type="submit" class="btn btn-outline-success my-2 my-sm-0 search-btn">search</button>
                            {{ csrf_field() }}
                        </form>
                        </div>
                    </div>
                </div>
            </nav>
            {{-- ここまでナビゲーションバー --}}

            <main class="py-4">
                {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}
                @yield('content')
            </main>
            <footer>
                <div class="container">
                    <div class="row">
                       <div class="col-md-12 mx-auto">
                          <hr color="#c0c0c0">
                       </div>
                    </div>
                </div>
                <div class="container">
                    <div class="footer-up">
                        <div class="footer-share">
                           <div class="share-title mx-auto">
                              <p>SHARE</p>
                           </div>
                        </div>
                        <div class="share-button">
                            <ul class="snsbtniti">
                  　            <!--twitter-->
                                <li><a href="https://twitter.com/share?url={{ url('/lesson') }}&text=ニュースタイルハッスルのレッスン - GAKUTOのニュースタイルハッスル情報部屋" rel="nofollow" target="_blank" class="flowbtn10"><i class="fab fa-twitter"></i></a></li>
                                <!--facebook-->
                                <li><a href="https://www.facebook.com/share.php?u={{ url('/lesson') }}" rel="nofollow" target="_blank" class="flowbtn10 footerfbbtn"><i class="fab fa-facebook-f"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-down">
                        <div class="row no-gutters footer-section">
                            <div class="footer-section1 col-md-4 mx-auto">
                                <div class="footer-menu mx-auto">
                                    <ul>
                                      <li><a href="/">HOME</a></li>
                                      <li><a href="/about-newstylehustle">ABOUT NEW STYLE HUSTLE</a></li>
                                      <li><a href="/featured-video">FEATURED VIDEO</a></li>
                                      <li><a href="/news">NEWS</a></li>
                                      <li><a href="/community">COMMUNITY</a></li>
                                      <li><a href="/lesson">LESSON</a></li>
                                      <li><a href="/contact">CONTACT</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="footer-section2 col-md-4 mx-auto">
                                <div class="description">
                                    <div class="description-title  text-center">
                                        <p>当サイトについて</p>
                                    </div>
                                    <div class="description-sentence">
                                        <p>「GAKUTOのニュースタイルハッスル情報部屋」は、日本のニュースタイルハッスルの情報を紹介します。<br>ニュースタイルハッスルが日本中に広がることを願っています。</p>
                                    </div>
                                </div>
                            </div>
                            <div class="footer-section3 col-md-4 mx-auto">
                                <a href="{{ url('/') }}">
                                    <img src="{{ asset('img/newstylehustlejapanwebsite-footerlogo.png') }}" class="footer-logo" alt="NEW STYLE HUSTLE JAPAN WEBSITEのフッター用のロゴ">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="copyright">
                      　<p><a href="/about">当サイトについて</a> / <a href="/privacy_policy">プライバシーポリシー</a> / <a href="/disclaimer">免責事項</a></p>
                        <address>© 2019 GAKUTOのニュースタイルハッスル情報部屋</address>
                    </div>
                </div>
            </footer>
        </div>
        <script>
          objectFitImages('img.object-fit-img');
        </script>
    </body>
</html>
