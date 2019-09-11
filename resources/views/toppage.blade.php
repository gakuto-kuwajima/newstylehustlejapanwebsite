@extends('layouts.toppage')

@section('title', 'ニュースタイルハッスルジャパン アンオフィシャルウェブサイト')
@section('metadescription', 'NEW STYLE HUSTLE JAPAN UNOFFICIAL WEBSITEは、非公式ではありますが、日本のニュースタイルハッスルの情報を紹介します。<br>ニュースタイルハッスルが日本中に広がることを願っています。')
@section('ogtitle', 'ニュースタイルハッスルジャパン アンオフィシャルウェブサイト | NEW STYLE HUSTLE JAPAN UNOFFICIAL WEBSITE')
@section('ogurl'){{ url('/') }}@endsection
@section('ogimage'){{ asset('img/newstylehustlejapanwebsite-eyecatch.png')}}@endsection

@section('content')
　　<div class="container-head mx-auto">　　
        <div class="top">
            <div class="top-image">
                <video src="{{ asset('movies/newstylehustlejapan2017.mp4')}}" muted autoplay playsinline loop poster="{{asset('img/newstylehustlejapan2017.jpg')}}"></video>
                <img src="{{ asset('img/newstylehustlejapan-logo.png')}}" alt="NEW STYLE HUSTLE JAPANのロゴ">
                <h1>NEW STYLE HUSTLE JAPAN<br>UNOFFICIAL WEBSITE</h1>
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
                        <h2>ABOUT<br>UNOFFICIAL WEBSITE</h2>
                    </div>
                    <div class="section-text">
                        <p>日本でも大きな広がりを見せるニュースタイルハッスル。<br>2017年には創始者Jeff Selby(ジェフ・セルビー)とRobyn Baltzer（ロビン・バルツァー）が来日。（※動画参照）<br><br>JeffとRobynに許可をいただき、当サイトは非公式という形ですが日本のニュースタイルハッスルの情報を紹介します。</p>
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
              　   <p>全国にあるニュースタイルハッスルのコミュニティの一覧です。<br>お住まいの地域、またはこれから訪れる地域のコミュニティをチェックしてみてください。</p>
          　    </div>
                <div class="pref col-lg-9 mx-auto">
                    <div class="pref-container">
                        <div class="hokkaido region">
                            <h3 class="region-name">北海道地方 (Hokkaido region)</h3>
                            <p>コミュニティなし</p>
                        </div>
                        <div class="tohoku region">
                    　      <h3 class="region-name">東北地方 (Tohoku region)</h3>
                      　    <div class="tohoku-list">
                        　　    <a href="{{ action('ReadingPageController@communityshow',['permalink' => 'miyagi'])}}" class="tohoku-btn"><span class="pref-btn1">宮城</span><br><span class="pref-btn2">(Miyagi)</span></a>
                            </div>
                        </div>
                        <div class="kanto region">
                            <h3 class="region-name">関東地方 (Kanto region)</h3>
                            <div class="kanto-list">
                                <a href="{{ action('ReadingPageController@communityshow',['permalink' => 'tyo'])}}" class="kanto-btn"><span class="pref-btn1">TYO</span><br><span class="pref-btn2">(Tokyo)</span></a>
                                <a href="{{ action('ReadingPageController@communityshow',['permalink' => 'zabueri'])}}" class="kanto-btn-tokyo"><span class="pref-btn1">Zabu&Eri<br></span><span class="pref-btn2">(Tokyo)</span></a>
                                <a href="{{ action('ReadingPageController@communityshow',['permalink' => 'chiba'])}}" class="kanto-btn"><span class="pref-btn1">千葉</span><br><span class="pref-btn2">(Chiba)</span></a>
                                <a href="{{ action('ReadingPageController@communityshow',['permalink' => 'saitama'])}}" class="kanto-btn"><span class="pref-btn1">埼玉</span><br><span class="pref-btn2">(Saitama)</span></a>
                                <a href="{{ action('ReadingPageController@communityshow',['permalink' => 'tochigi'])}}" class="kanto-btn"><span class="pref-btn1">栃木</span><br><span class="pref-btn2">(Tochigi)</span></a>
                            </div>
                        </div>
                        <div class="chubu region">
                            <h3 class="region-name">中部地方 (Chubu region)</h3>
                            <div class="chubu-list">
                        　      <a href="{{ action('ReadingPageController@communityshow',['permalink' => 'aichi'])}}" class="chubu-btn"><span class="pref-btn1">愛知</span><br><span class="pref-btn2">(Aichi)</span></a>
                        　      <a href="{{ action('ReadingPageController@communityshow',['permalink' => 'yamanashi'])}}" class="chubu-btn"><span class="pref-btn1">山梨</span><br><span class="pref-btn2">(Yamanashi)</span></a>
                            </div>
                        </div>
                        <div class="kansai region">
                            <h3 class="region-name">関西地方 (Kansai region)</h3>
                            <div class="kansai-list">
                                <a href="{{ action('ReadingPageController@communityshow',['permalink' => 'osaka'])}}" class="kansai-btn"><span class="pref-btn1">大阪</span><br><span class="pref-btn2">(Osaka)</span></a>
                            </div>
                        </div>
                        <div class="chugoku region">
                            <h3 class="region-name">中国地方 (Chugoku region)</h3>
                            <div class="chugoku-list">
                        　       <a href="{{ action('ReadingPageController@communityshow',['permalink' => 'hiroshima'])}}" class="chugoku-btn"><span class="pref-btn1">広島</span><br><span class="pref-btn2">(Hiroshima)</span></a>
                            </div>
                        </div>
                        <div class="shikoku region">
                      　    <h3 class="region-name">四国地方 (Shikoku region)</h3>
                            <div class="chugoku-list">
                      　　      <a href="{{ action('ReadingPageController@communityshow',['permalink' => 'ehime'])}}" class="shikoku-btn"><span class="pref-btn1">愛媛</span><br><span class="pref-btn2">(Ehime)</span></a>
                            </div>
                        </div>
                        <div class="kyushu-okinawa region">
                      　    <h3 class="region-name">九州・沖縄地方 (kyushu & Okinawa region)</h3>
                            <div class="kyushu-okinawa-list">
                    　　        <a href="{{ action('ReadingPageController@communityshow',['permalink' => 'okinawa'])}}" class="kyushu-okinawa-btn"><span class="pref-btn1">沖縄</span><br><span class="pref-btn2">(Okinawa)</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
