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
        <title>@yield('title')</title>

        <!-- Scripts -->
        {{-- Laravel標準で用意されているJavascriptを読み込みます --}}
        <script src="{{ asset('js/app.js') }}" defer></script>

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
                      <img src="{{ asset('img/newstylehustlejapanwebsite-logo.png') }}">
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
                           <li><a href="#">HOME</a></li>
                           <li class="dropdown">
                             <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               WHAT'S NEW STYLE HUSTLE
                             </a>
                             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                               <a class="dropdown-item" href="#">ABOUT NEW STYLE HUSTLE</a>
                               <a class="dropdown-item" href="#">VIDEO</a>
                             </div>
                           </li>
                           <li><a href="#">NEWS</a></li>
                           <li><a href="#">COMMUNITY</a></li>
                           <li><a href="#">LESSON</a></li>
                           <li><a href="#">CONTACT</a></li>
                          {{-- 以上までを追記 --}}
                      </ul>
                      <form class="form-inline my-2 my-lg-0" action="{{ action('SearchController@index') }}" method="get">
                          <input type="search" class="form-control search-form mr-sm-2" placeholder="search..." aria-label="search..." name="keywords" value="{{ $keywords }}">
                          <button type="submit" class="btn btn-outline-success my-2 my-sm-0">search</button>
                          {{ csrf_field() }}
                      </form>
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
                                <li><a href="TwitterのプロフィールURL" class="flowbtn10"><i class="fab fa-twitter"></i></a></li>
                            <!--facebook-->
                                <li><a href="FacebookページのURL" class="flowbtn10 footerfbbtn"><i class="fab fa-facebook-f"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-down">
                        <div class="row no-gutters footer-section">
                            <div class="footer-section1 col-md-4 mx-auto">
                                <div class="footer-menu mx-auto">
                                    <ul>
                                      <li><a href="#">HOME</a></li>
                                      <li><a href="#">WHAT'S NEW STYLE HUSTLE</a></li>
                                      <li><a href="#">NEWS</a></li>
                                      <li><a href="#">COMMUNITY</a></li>
                                      <li><a href="#">LESSON</a></li>
                                      <li><a href="#">CONTACT</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="footer-section2 col-md-4 mx-auto">
                                <div class="description">
                                    <div class="description-title">
                                        <p>NEW STYLE HUSTLE JAPAN WEBSITEとは</p>
                                    </div>
                                    <div class="description-sentence">
                                        <p>NEW STYLE HUSTLE JAPAN WEBSITEでは日本のニュースタイルハッスルの情報を紹介します。<br>ニュースタイルハッスルが日本中に広がることを願っています。</p>
                                    </div>
                                </div>
                            </div>
                            <div class="footer-section3 col-md-4 mx-auto">
                                <a href="{{ url('/') }}">
                                    <img src="{{ asset('img/newstylehustlewebsite-footerlogo.png') }}" class="footer-logo">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="copyright">
                        <address>© 2019 NEW STYLE HUSTLE JAPAN</address>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
