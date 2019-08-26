@extends('layouts.toppage')

@section('title', 'ニュースタイルハッスル ジャパン | NEW STYLE HUSTLE JAPAN WEBSITE')
@section('metadescription', 'NEW STYLE HUSTLE JAPAN WEBSITE（ニュースタイルハッスルジャパンウェブサイト）では日本のニュースタイルハッスルの情報を紹介します。ニュースタイルハッスルが日本中に広がることを願っています。')

@section('content')
　　<div class="container-head mx-auto">　　
        <div class="top mx-auto">
            <div class="top-image mx-auto">
                <video src="{{ asset('movies/newstylehustlejapan2017.mp4')}}" muted autoplay playsinline loop poster="{{asset('img/newstylehustlejapan2017.jpg')}}"class="img-fluid"></video>
                <img src="{{ asset('img/newstylehustlejapan-logo.png')}}" class="img-fluid" alt="NEW STYLE HUSTLE JAPANのロゴ">
                <h1>NEW STYLE HUSTLE<br>JAPAN WEBSITE</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="section1">
            <div class="row no-gutters">
                <div class="text col-lg-6">
                    <div class="section-h2">
                        <h2>ABOUT<br>NEW STYLE HUSTLE</h2>
                    </div>
                    <div class="section-text">
                        <p>世界中で踊られている最新のペアダンス、それがニュースタイルハッスル。<br>1970年代に流行したディスコダンス「ハッスル」を元に、2009年ごろにニューヨークで誕生しました。<br><br>自由な発想で、自分たちの好きな音楽をパートナーと表現します。</p>
                    </div>
                    <div class="section1-link">
                        <a href="/about-newstylehustle" class="section1-button">
                            <i class="fa fa-caret-right"></i> もっと詳しく
                        </a>
                    </div>
                </div>
                <div class="image col-lg-6">
                    <img src="{{ asset('img/newstylehustle_zabueri.jpg')}}" class="img-fluid" alt="ニュースタイルハッスルを踊っている例。モデルはZabu&Eri。">
                </div>
            </div>
        </div>
        <div class="section2">
            <div class="row no-gutters">
                <div class="text col-lg-6 order-lg-2">
                    <div class="section-h2">
                        <h2>NEW STYLE HUSTLE<br>JAPAN WEBSITE</h2>
                    </div>
                    <div class="section-text">
                        <p>日本でも大きな広がりを見せるニュースタイルハッスル。<br>2017年には創始者Jeff Selby(ジェフ・セルビー)とRobyn Baltzer（ロビン・バルツァー）が来日。（※動画参照）<br><br>NEW STYLE HUSTLE JAPAN WEBSITEでは日本のニュースタイルハッスルの活動や情報を紹介します。</p>
                    </div>
                </div>
                <div class="image toppage-video col-lg-6 order-1-lg-1">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/3hbyl5Hfmqc?rel=0" allowfullscreen></iframe>
                    </div>
               </div>
            </div>
        </div>
        <div class="section4">
            <div class="row no-gutters">
                <div class="col-lg-12 section4-title">
                    <div class="section-h2 sectin4-h2">
                        <h2>NEWS</h2>
                    </div>
                </div>
                <div class="posts col-lg-9 mx-auto section4-news-title">
                   @foreach($posts as $post)
                   <a href="/news/{{ $post->news_permalink }}" class="post-link">
                   <div class="post-wrapper">
                       <div class="ribbon16-content">
                           <span class="ribbon16">NEW</span>
                       </div>
                       <div class="post">
                            <div class="caption">
                                <div class="news-image mx-auto">
                                    @if ($post->news_eyecatch_path)
                                        <img src="{{ asset('storage/image/' . $post->news_eyecatch_path) }}" class="img-fluid object-fit-img">
                                    @else
                                        <img src="{{ asset('img/no_image.png') }}" class="img-fluid object-fit-img">
                                    @endif
                                </div>
                            </div>
                            <div class="search-text-container">
                                <div class="search-text">
                                    <div class="post-title">
                                        <p class="title mx-auto">{{ $post->news_title }}</p>
                                    </div>
                                    <div class="date">
                                        <p><i class="far fa-calendar-check"></i>{{ $post->created_at->format('Y年m月d日') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                    @endforeach
                    <div class="section4-link">
                        <a href="/news" class="section4-button">
                            <i class="fa fa-caret-right"></i> NEWS一覧へ
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section3">
            <div class="row no-gutters">
                <div class="col-lg-12 mx-auto">
                    <div class="section-h2" id="pref-title">
                        <h2>Japan Communities</h2>
                    </div>
                </div>
          　    <div class="section-text col-lg-9 mx-auto">
              　   <p>全国にあるニュースタイルハッスルのコミュニティの一覧です。<br>あなたが住んでいる地域、またはこれから訪れる地域のコミュニティをのぞいてみてください。</p>
          　    </div>
                <div class="pref col-lg-9 mx-auto">
                    <div class="pref-container">
                        <div class="hokkaido region">
                            <h3 class="region-name">北海道地方</h3>
                            <p>コミュニティなし</p>
                        </div>
                        <div class="tohoku region">
                    　      <h3 class="region-name">東北地方</h3>
                      　    <div class="tohoku-list">
                        　　    <a href="{{ action('ReadingPageController@communityshow',['permalink' => 'miyagi'])}}" class="tohoku-btn">宮城</a>
                            </div>
                        </div>
                        <div class="kanto region">
                            <h3 class="region-name">関東地方</h3>
                            <div class="kanto-list">
                                <a href="{{ action('ReadingPageController@communityshow',['permalink' => 'tyo'])}}" class="kanto-btn-tokyo"><span class="pref-btn1">TYO</span><br><span class="pref-btn2">(東京)</span></a>
                                <a href="{{ action('ReadingPageController@communityshow',['permalink' => 'zabueri'])}}" class="kanto-btn-tokyo"><span class="pref-btn1">Zabu&Eri<br></span><span class="pref-btn2">(東京)</span></a>
                                <a href="{{ action('ReadingPageController@communityshow',['permalink' => 'chiba'])}}" class="kanto-btn">千葉</a>
                                <a href="{{ action('ReadingPageController@communityshow',['permalink' => 'saitama'])}}" class="kanto-btn">埼玉</a>
                                <a href="{{ action('ReadingPageController@communityshow',['permalink' => 'tochigi'])}}" class="kanto-btn">栃木</a>
                            </div>
                        </div>
                        <div class="chubu region">
                            <h3 class="region-name">中部地方</h3>
                            <div class="chubu-list">
                        　      <a href="{{ action('ReadingPageController@communityshow',['permalink' => 'aichi'])}}" class="chubu-btn">愛知</a>
                        　      <a href="{{ action('ReadingPageController@communityshow',['permalink' => 'yamanashi'])}}" class="chubu-btn">山梨</a>
                            </div>
                        </div>
                        <div class="kansai region">
                            <h3 class="region-name">関西地方</h3>
                            <div class="kansai-list">
                                <a href="{{ action('ReadingPageController@communityshow',['permalink' => 'osaka'])}}" class="kansai-btn">大阪</a>
                            </div>
                        </div>
                        <div class="chugoku region">
                            <h3 class="region-name">中国地方</h3>
                            <div class="chugoku-list">
                        　       <a href="{{ action('ReadingPageController@communityshow',['permalink' => 'hiroshima'])}}" class="chugoku-btn">広島</a>
                            </div>
                        </div>
                        <div class="shikoku region">
                      　    <h3 class="region-name">四国地方</h3>
                            <div class="chugoku-list">
                      　　      <a href="{{ action('ReadingPageController@communityshow',['permalink' => 'ehime'])}}" class="shikoku-btn">愛媛</a>
                            </div>
                        </div>
                        <div class="kyushu-okinawa region">
                      　    <h3 class="region-name">九州・沖縄地方</h3>
                            <div class="kyushu-okinawa-list">
                    　　        <a href="{{ action('ReadingPageController@communityshow',['permalink' => 'okinawa'])}}" class="kyushu-okinawa-btn">沖縄</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
